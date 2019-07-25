<?php

namespace FondOfSpryker\Zed\NavisionCompany\Persistence;

use FondOfSpryker\Zed\NavisionCompany\NavisionCompanyDependencyProvider;
use Orm\Zed\Company\Persistence\SpyCompanyQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @method \FondOfSpryker\Zed\NavisionCompany\NavisionCompanyConfig getConfig()
 * @method \FondOfSpryker\Zed\NavisionCompany\Persistence\NavisionCompanyRepositoryInterface getRepository()
 */
class NavisionCompanyPersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return \Orm\Zed\Company\Persistence\SpyCompanyQuery
     */
    public function getCompanyQuery(): SpyCompanyQuery
    {
        return $this->getProvidedDependency(NavisionCompanyDependencyProvider::PROPEL_QUERY_COMPANY);
    }
}
