<?php

namespace FondOfSpryker\Zed\NavisionCompany\Business;

use FondOfSpryker\Zed\NavisionCompany\Business\Reader\CompanyReader;
use FondOfSpryker\Zed\NavisionCompany\Business\Reader\CompanyReaderInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \FondOfSpryker\Zed\NavisionCompany\NavisionCompanyConfig getConfig()
 * @method \FondOfSpryker\Zed\NavisionCompany\Persistence\NavisionCompanyRepositoryInterface getRepository()
 */
class NavisionCompanyBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\NavisionCompany\Business\Reader\CompanyReaderInterface
     */
    public function createCompanyReader(): CompanyReaderInterface
    {
        return new CompanyReader($this->getRepository());
    }
}
