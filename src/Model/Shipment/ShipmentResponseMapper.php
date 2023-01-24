<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace C24Toys\GLS\Sdk\ParcelProcessing\Model\Shipment;

use C24Toys\GLS\Sdk\ParcelProcessing\Api\Data\ShipmentInterface;
use C24Toys\GLS\Sdk\ParcelProcessing\Model\Shipment\ResponseType\Parcel as ApiParcel;
use C24Toys\GLS\Sdk\ParcelProcessing\Service\ShipmentService\Parcel;
use C24Toys\GLS\Sdk\ParcelProcessing\Service\ShipmentService\Shipment;

class ShipmentResponseMapper
{
    public function map(CreateShipmentResponseType $apiShipment): ShipmentInterface
    {
        $parcels = array_map(
            function (ApiParcel $apiParcel) {
                return new Parcel($apiParcel->getLocation(), $apiParcel->getParcelNumber(), $apiParcel->getTrackId());
            },
            $apiShipment->getParcels()
        );

        $returnParcels = array_map(
            function (ApiParcel $apiParcel) {
                return new Parcel($apiParcel->getLocation(), $apiParcel->getParcelNumber(), $apiParcel->getTrackId());
            },
            $apiShipment->getReturns()
        );

        $shipment = new Shipment(
            $apiShipment->getLocation(),
            $apiShipment->getConsignmentId(),
            $parcels
        );

        $shipment->setReturnParcels($returnParcels);
        $shipment->setLabels(array_filter(array_map('base64_decode', $apiShipment->getLabels())));
        $shipment->setQrCodes(array_filter(array_map('base64_decode', $apiShipment->getQrCodes())));

        return $shipment;
    }
}
