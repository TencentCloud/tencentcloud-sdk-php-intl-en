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
 * Price information of Lighthouse instances
 *
 * @method float getOriginalBundlePrice() Obtain Original package unit price.
 * @method void setOriginalBundlePrice(float $OriginalBundlePrice) Set Original package unit price.
 * @method float getOriginalPrice() Obtain Original price.
 * @method void setOriginalPrice(float $OriginalPrice) Set Original price.
 * @method integer getDiscount() Obtain Discount.
 * @method void setDiscount(integer $Discount) Set Discount.
 * @method float getDiscountPrice() Obtain Discounted price.
 * @method void setDiscountPrice(float $DiscountPrice) Set Discounted price.
 * @method string getCurrency() Obtain Currency unit. Valid values: `CNY` and `USD`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCurrency(string $Currency) Set Currency unit. Valid values: `CNY` and `USD`.
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class InstancePrice extends AbstractModel
{
    /**
     * @var float Original package unit price.
     */
    public $OriginalBundlePrice;

    /**
     * @var float Original price.
     */
    public $OriginalPrice;

    /**
     * @var integer Discount.
     */
    public $Discount;

    /**
     * @var float Discounted price.
     */
    public $DiscountPrice;

    /**
     * @var string Currency unit. Valid values: `CNY` and `USD`.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Currency;

    /**
     * @param float $OriginalBundlePrice Original package unit price.
     * @param float $OriginalPrice Original price.
     * @param integer $Discount Discount.
     * @param float $DiscountPrice Discounted price.
     * @param string $Currency Currency unit. Valid values: `CNY` and `USD`.
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("OriginalBundlePrice",$param) and $param["OriginalBundlePrice"] !== null) {
            $this->OriginalBundlePrice = $param["OriginalBundlePrice"];
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

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }
    }
}
