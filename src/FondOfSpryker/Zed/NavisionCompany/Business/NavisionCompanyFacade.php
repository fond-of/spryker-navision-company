<?php

namespace FondOfSpryker\Zed\NavisionCompany\Business;

use Generated\Shared\Transfer\CompanyResponseTransfer;
use Generated\Shared\Transfer\CompanyTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \FondOfSpryker\Zed\NavisionCompany\Business\NavisionCompanyBusinessFactory getFactory()
 * @method \FondOfSpryker\Zed\NavisionCompany\Persistence\NavisionCompanyRepositoryInterface getRepository()
 */
class NavisionCompanyFacade extends AbstractFacade implements NavisionCompanyFacadeInterface
{
    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyTransfer $companyTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyResponseTransfer
     */
    public function findCompanyByUuid(CompanyTransfer $companyTransfer): CompanyResponseTransfer
    {
        return $this->getFactory()->createCompanyReader()->findCompanyByExternalReference($companyTransfer);
    }
}
