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
 * Billable items
 *
 * @method string getPriceName() Obtain <p>Name of a billable item, current parameter.</p><li>"DiskSpace" represents the CBS space charge item.</li><li>"DiskBackupQuota" represents the data disk backup point quota charge item.</li><li>"Instance" represents the Instance charge item.</li><li>"SystemDiskBackupQuota" represents the system disk backup point quota charge item.</li>.
 * @method void setPriceName(string $PriceName) Set <p>Name of a billable item, current parameter.</p><li>"DiskSpace" represents the CBS space charge item.</li><li>"DiskBackupQuota" represents the data disk backup point quota charge item.</li><li>"Instance" represents the Instance charge item.</li><li>"SystemDiskBackupQuota" represents the system disk backup point quota charge item.</li>.
 * @method float getOriginUnitPrice() Obtain <P>Unit price per billing item dimension.</p><p>unit: usd</p>.
 * @method void setOriginUnitPrice(float $OriginUnitPrice) Set <P>Unit price per billing item dimension.</p><p>unit: usd</p>.
 * @method float getOriginalPrice() Obtain <P>Total price of billing item dimension.</p><p>unit: usd</p>.
 * @method void setOriginalPrice(float $OriginalPrice) Set <P>Total price of billing item dimension.</p><p>unit: usd</p>.
 * @method float getDiscount() Obtain <P>Dimensional discount for billing items.</p>.
 * @method void setDiscount(float $Discount) Set <P>Dimensional discount for billing items.</p>.
 * @method float getDiscountPrice() Obtain <P>Discounted total price by billing item dimension.</p><p>unit: usd</p>.
 * @method void setDiscountPrice(float $DiscountPrice) Set <P>Discounted total price by billing item dimension.</p><p>unit: usd</p>.
 */
class DetailPrice extends AbstractModel
{
    /**
     * @var string <p>Name of a billable item, current parameter.</p><li>"DiskSpace" represents the CBS space charge item.</li><li>"DiskBackupQuota" represents the data disk backup point quota charge item.</li><li>"Instance" represents the Instance charge item.</li><li>"SystemDiskBackupQuota" represents the system disk backup point quota charge item.</li>.
     */
    public $PriceName;

    /**
     * @var float <P>Unit price per billing item dimension.</p><p>unit: usd</p>.
     */
    public $OriginUnitPrice;

    /**
     * @var float <P>Total price of billing item dimension.</p><p>unit: usd</p>.
     */
    public $OriginalPrice;

    /**
     * @var float <P>Dimensional discount for billing items.</p>.
     */
    public $Discount;

    /**
     * @var float <P>Discounted total price by billing item dimension.</p><p>unit: usd</p>.
     */
    public $DiscountPrice;

    /**
     * @param string $PriceName <p>Name of a billable item, current parameter.</p><li>"DiskSpace" represents the CBS space charge item.</li><li>"DiskBackupQuota" represents the data disk backup point quota charge item.</li><li>"Instance" represents the Instance charge item.</li><li>"SystemDiskBackupQuota" represents the system disk backup point quota charge item.</li>.
     * @param float $OriginUnitPrice <P>Unit price per billing item dimension.</p><p>unit: usd</p>.
     * @param float $OriginalPrice <P>Total price of billing item dimension.</p><p>unit: usd</p>.
     * @param float $Discount <P>Dimensional discount for billing items.</p>.
     * @param float $DiscountPrice <P>Discounted total price by billing item dimension.</p><p>unit: usd</p>.
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
        if (array_key_exists("PriceName",$param) and $param["PriceName"] !== null) {
            $this->PriceName = $param["PriceName"];
        }

        if (array_key_exists("OriginUnitPrice",$param) and $param["OriginUnitPrice"] !== null) {
            $this->OriginUnitPrice = $param["OriginUnitPrice"];
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
    }
}
