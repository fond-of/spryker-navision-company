<?php

namespace FondOfSpryker\Zed\NavisionCompany\Persistence;

use Generated\Shared\Transfer\CompanyTransfer;

interface NavisionCompanyRepositoryInterface
{
    /**
     * Specification:
     *  - Retrieve a company by CompanyTransfer::externalReference
     *
     * @api
     *
     * @param string $externalReference
     *
     * @return \Generated\Shared\Transfer\CompanyTransfer|null
     */
    public function findCompanyByExternalReference(string $externalReference): ?CompanyTransfer;
}
