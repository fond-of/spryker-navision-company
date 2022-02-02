<?php

namespace FondOfSpryker\Zed\NavisionCompany\Communication\Plugin\QuoteExtension;

use FondOfSpryker\Shared\NavisionCompany\NavisionCompanyConstants;
use Generated\Shared\Transfer\MessageTransfer;
use Generated\Shared\Transfer\QuoteTransfer;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\QuoteExtension\Dependency\Plugin\QuoteExpanderPluginInterface;

class NavisionCompanyQuoteExpanderPlugin extends AbstractPlugin implements QuoteExpanderPluginInterface
{
    /**
     * @param \Generated\Shared\Transfer\QuoteTransfer $quoteTransfer
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer
     */
    public function expand(QuoteTransfer $quoteTransfer): QuoteTransfer
    {
        $companyUserTransfer = $quoteTransfer->getCompanyUser();

        if ($companyUserTransfer === null) {
            return $quoteTransfer;
        }

        $companyTransfer = $companyUserTransfer->getCompany();

        if ($companyTransfer === null || !$companyTransfer->getIsBlocked()) {
            return $quoteTransfer;
        }

        $messageTransfer = (new MessageTransfer())->setType(NavisionCompanyConstants::MESSAGE_TYPE_ERROR)
            ->setValue(NavisionCompanyConstants::MESSAGE_COMPANY_IS_BLOCKED);

        return $quoteTransfer->addValidationMessage($messageTransfer);
    }
}
