<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace C24Toys\GLS\Sdk\ParcelProcessing\Api;

use C24Toys\GLS\Sdk\ParcelProcessing\Exception\AuthenticationException;
use C24Toys\GLS\Sdk\ParcelProcessing\Exception\DetailedServiceException;
use C24Toys\GLS\Sdk\ParcelProcessing\Exception\ServiceException;

/**
 * @api
 */
interface CancellationServiceInterface
{
    /**
     * Cancel multiple parcels identified by IDs.
     *
     * This will return all successfully cancelled parcel IDs.
     * Error details can be obtained from the logs.
     *
     * @param string[] $parcelIds
     * @return string[]
     *
     * @throws AuthenticationException
     * @throws DetailedServiceException
     * @throws ServiceException
     */
    public function cancelParcels(array $parcelIds): array;

    /**
     * Cancel one parcel identified by ID.
     *
     * This will return the successfully cancelled parcel ID.
     * On failure, this will throw an exception with error details.
     *
     * @param string $parcelId
     * @return string
     *
     * @throws AuthenticationException
     * @throws DetailedServiceException
     * @throws ServiceException
     */
    public function cancelParcel(string $parcelId): string;
}
