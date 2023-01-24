<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace C24Toys\GLS\Sdk\ParcelProcessing\Api;

use C24Toys\GLS\Sdk\ParcelProcessing\Exception\ServiceException;
use Psr\Log\LoggerInterface;

/**
 * @api
 */
interface ServiceFactoryInterface
{
    public const SANDBOX_BASE_URL = 'https://api-qs1.gls-group.eu/';
    public const PRODUCTION_BASE_URL = 'https://api.gls-group.eu/';

    /**
     * Create the shipment service.
     *
     * @param string $username
     * @param string $password
     * @param LoggerInterface $logger
     * @param bool $sandboxMode
     *
     * @return ShipmentServiceInterface
     * @throws ServiceException
     */
    public function createShipmentService(
        string $username,
        string $password,
        LoggerInterface $logger,
        bool $sandboxMode = false
    ): ShipmentServiceInterface;

    /**
     * Create the parcel cancellation service.
     *
     * @param string $username
     * @param string $password
     * @param LoggerInterface $logger
     * @param bool $sandboxMode
     *
     * @return CancellationServiceInterface
     * @throws ServiceException
     */
    public function createCancellationService(
        string $username,
        string $password,
        LoggerInterface $logger,
        bool $sandboxMode = false
    ): CancellationServiceInterface;
}
