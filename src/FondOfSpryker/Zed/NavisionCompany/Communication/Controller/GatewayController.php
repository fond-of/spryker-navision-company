<?php

namespace FondOfSpryker\Zed\NavisionCompany\Communication\Controller;

use Generated\Shared\Transfer\CompanyResponseTransfer;
use Generated\Shared\Transfer\CompanyTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \FondOfSpryker\Zed\NavisionCompany\Business\NavisionCompanyFacadeInterface getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    /**
     * @param \Generated\Shared\Transfer\CompanyTransfer $companyTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyResponseTransfer
     */
    public function findCompanyByExternalReferenceAction(CompanyTransfer $companyTransfer): CompanyResponseTransfer
    {
        return $this->getFacade()->findCompanyByExternalReference($companyTransfer);
    }
}
