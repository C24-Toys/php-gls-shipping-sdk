<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace C24Toys\GLS\Sdk\ParcelProcessing\Model\Cancellation;

/**
 * Cancellation Response
 *
 * Do not change the type annotations as this class is passed through the
 * JsonMapper which requires the full namespace annotation in order to map
 * the JSON response correctly.
 */
class CancelParcelsResponseType
{
    /**
     * @var \C24Toys\GLS\Sdk\ParcelProcessing\Model\Cancellation\ResponseType\Status[]|null
     */
    private $status;

    /**
     * @return \C24Toys\GLS\Sdk\ParcelProcessing\Model\Cancellation\ResponseType\Status[]
     */
    public function getStatus(): array
    {
        return $this->status ?? [];
    }
}
