<?php

namespace FondOfSpryker\Client\NavisionCompany;

use FondOfSpryker\Client\NavisionCompany\Dependency\Client\NavisionCompanyToZedRequestClientInterface;
use FondOfSpryker\Client\NavisionCompany\Zed\NavisionCompanyStub;
use FondOfSpryker\Client\NavisionCompany\Zed\NavisionCompanyStubInterface;
use Spryker\Client\Kernel\AbstractFactory;

class NavisionCompanyFactory extends AbstractFactory
{
    /**
     * @return \FondOfSpryker\Client\NavisionCompany\Zed\NavisionCompanyStubInterface
     */
    public function createZedNavisionCompanyStub(): NavisionCompanyStubInterface
    {
        return new NavisionCompanyStub($this->getZedRequestClient());
    }

    /**
     * @return \FondOfSpryker\Client\NavisionCompany\Dependency\Client\NavisionCompanyToZedRequestClientInterface
     */
    protected function getZedRequestClient(): NavisionCompanyToZedRequestClientInterface
    {
        return $this->getProvidedDependency(NavisionCompanyDependencyProvider::CLIENT_ZED_REQUEST);
    }
}
