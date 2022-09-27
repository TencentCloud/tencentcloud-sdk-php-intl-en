<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getPriceName() Obtain Values: 
<li>"DiskSpace": Cloud disk space</li>
<li>"DiskBackupQuota": Cloud disk backups</li>
 * @method void setPriceName(string $PriceName) Set Values: 
<li>"DiskSpace": Cloud disk space</li>
<li>"DiskBackupQuota": Cloud disk backups</li>
 * @method float getOriginUnitPrice() Obtain Official unit price of the billable item
 * @method void setOriginUnitPrice(float $OriginUnitPrice) Set Official unit price of the billable item
 * @method float getOriginalPrice() Obtain Official total price of the billable item
 * @method void setOriginalPrice(float $OriginalPrice) Set Official total price of the billable item
 * @method float getDiscount() Obtain Discount of the billable item
 * @method void setDiscount(float $Discount) Set Discount of the billable item
 * @method float getDiscountPrice() Obtain Discounted total price of the billable item
 * @method void setDiscountPrice(float $DiscountPrice) Set Discounted total price of the billable item
 */
class DetailPrice extends AbstractModel
{
    /**
     * @var string Values: 
<li>"DiskSpace": Cloud disk space</li>
<li>"DiskBackupQuota": Cloud disk backups</li>
     */
    public $PriceName;

    /**
     * @var float Official unit price of the billable item
     */
    public $OriginUnitPrice;

    /**
     * @var float Official total price of the billable item
     */
    public $OriginalPrice;

    /**
     * @var float Discount of the billable item
     */
    public $Discount;

    /**
     * @var float Discounted total price of the billable item
     */
    public $DiscountPrice;

    /**
     * @param string $PriceName Values: 
<li>"DiskSpace": Cloud disk space</li>
<li>"DiskBackupQuota": Cloud disk backups</li>
     * @param float $OriginUnitPrice Official unit price of the billable item
     * @param float $OriginalPrice Official total price of the billable item
     * @param float $Discount Discount of the billable item
     * @param float $DiscountPrice Discounted total price of the billable item
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
