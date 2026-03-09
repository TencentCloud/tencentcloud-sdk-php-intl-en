<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data disk price
 *
 * @method string getDiskId() Obtain <p>Cloud disk ID.</p>.
 * @method void setDiskId(string $DiskId) Set <p>Cloud disk ID.</p>.
 * @method float getOriginalDiskPrice() Obtain <P>Cloud block storage (cbs) unit price.</p><p>unit: usd</p>.
 * @method void setOriginalDiskPrice(float $OriginalDiskPrice) Set <P>Cloud block storage (cbs) unit price.</p><p>unit: usd</p>.
 * @method float getOriginalPrice() Obtain <P>Total CBS price.</p><p>unit: usd</p>.
 * @method void setOriginalPrice(float $OriginalPrice) Set <P>Total CBS price.</p><p>unit: usd</p>.
 * @method float getDiscount() Obtain <p>Discount.</p>.
 * @method void setDiscount(float $Discount) Set <p>Discount.</p>.
 * @method float getDiscountPrice() Obtain <P>Discounted total price.</p><p>unit: usd</p>.
 * @method void setDiscountPrice(float $DiscountPrice) Set <P>Discounted total price.</p><p>unit: usd</p>.
 * @method string getInstanceId() Obtain <p>Instance ID for data disk mounting.</p>.
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID for data disk mounting.</p>.
 */
class DataDiskPrice extends AbstractModel
{
    /**
     * @var string <p>Cloud disk ID.</p>.
     */
    public $DiskId;

    /**
     * @var float <P>Cloud block storage (cbs) unit price.</p><p>unit: usd</p>.
     */
    public $OriginalDiskPrice;

    /**
     * @var float <P>Total CBS price.</p><p>unit: usd</p>.
     */
    public $OriginalPrice;

    /**
     * @var float <p>Discount.</p>.
     */
    public $Discount;

    /**
     * @var float <P>Discounted total price.</p><p>unit: usd</p>.
     */
    public $DiscountPrice;

    /**
     * @var string <p>Instance ID for data disk mounting.</p>.
     */
    public $InstanceId;

    /**
     * @param string $DiskId <p>Cloud disk ID.</p>.
     * @param float $OriginalDiskPrice <P>Cloud block storage (cbs) unit price.</p><p>unit: usd</p>.
     * @param float $OriginalPrice <P>Total CBS price.</p><p>unit: usd</p>.
     * @param float $Discount <p>Discount.</p>.
     * @param float $DiscountPrice <P>Discounted total price.</p><p>unit: usd</p>.
     * @param string $InstanceId <p>Instance ID for data disk mounting.</p>.
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }

        if (array_key_exists("OriginalDiskPrice",$param) and $param["OriginalDiskPrice"] !== null) {
            $this->OriginalDiskPrice = $param["OriginalDiskPrice"];
        }

        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
