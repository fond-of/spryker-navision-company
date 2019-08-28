<?php

namespace FondOfSpryker\Zed\NavisionCompany\Business;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\NavisionCompany\Business\Reader\CompanyReaderInterface;
use FondOfSpryker\Zed\NavisionCompany\Persistence\NavisionCompanyRepository;

class NavisionCompanyBusinessFactoryTest extends Unit
{
    /**
     * @var \FondOfSpryker\Zed\NavisionCompany\Business\NavisionCompanyBusinessFactory
     */
    protected $navisionCompanyBusinessFactory;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\FondOfSpryker\Zed\NavisionCompany\Persistence\NavisionCompanyRepository
     */
    protected $navisionCompanyRepositoryInterfaceMock;

    /**
     * @return void
     */
    protected function _before(): void
    {
        parent::_before();

        $this->navisionCompanyRepositoryInterfaceMock = $this->getMockBuilder(NavisionCompanyRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->navisionCompanyBusinessFactory = new NavisionCompanyBusinessFactory();
        $this->navisionCompanyBusinessFactory->setRepository($this->navisionCompanyRepositoryInterfaceMock);
    }

    /**
     * @return void
     */
    public function testCreateCompanyReader(): void
    {
        $this->assertInstanceOf(CompanyReaderInterface::class, $this->navisionCompanyBusinessFactory->createCompanyReader());
    }
}
