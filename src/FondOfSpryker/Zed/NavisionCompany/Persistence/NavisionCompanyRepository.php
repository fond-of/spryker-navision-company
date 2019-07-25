<?php

namespace FondOfSpryker\Zed\NavisionCompany\Persistence;

use Generated\Shared\Transfer\CompanyTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

/**
 * @method \FondOfSpryker\Zed\NavisionCompany\Persistence\NavisionCompanyPersistenceFactory getFactory()
 */
class NavisionCompanyRepository extends AbstractRepository implements NavisionCompanyRepositoryInterface
{
    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $externalReference
     *
     * @return \Generated\Shared\Transfer\CompanyTransfer|null
     *
     * @throws
     */
    public function findCompanyByExternalReference(string $externalReference): ?CompanyTransfer
    {
        $companyEntity = $this->getFactory()
            ->getCompanyQuery()
            ->filterByExternalReference($externalReference)
            ->findOne();

        if (!$companyEntity) {
            return null;
        }

        return (new CompanyTransfer())->fromArray(
            $companyEntity->toArray(),
            true
        );
    }
}
