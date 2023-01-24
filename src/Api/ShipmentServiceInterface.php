<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace C24Toys\GLS\Sdk\ParcelProcessing\Api;

use C24Toys\GLS\Sdk\ParcelProcessing\Api\Data\ShipmentInterface;
use C24Toys\GLS\Sdk\ParcelProcessing\Exception\AuthenticationException;
use C24Toys\GLS\Sdk\ParcelProcessing\Exception\DetailedServiceException;
use C24Toys\GLS\Sdk\ParcelProcessing\Exception\ServiceException;

/**
 * @api
 */
interface ShipmentServiceInterface
{
    /**
     * @param \JsonSerializable $shipmentRequest
     * @return ShipmentInterface
     * @throws AuthenticationException
     * @throws DetailedServiceException
     * @throws ServiceException
     */
    public function createShipment(\JsonSerializable $shipmentRequest): ShipmentInterface;
}
