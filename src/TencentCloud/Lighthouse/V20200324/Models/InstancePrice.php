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
 * About Lighthouse Instance price.
 *
 * @method float getOriginalBundlePrice() Obtain <P>Unit price of the package.</p><p>unit: usd</p>.
 * @method void setOriginalBundlePrice(float $OriginalBundlePrice) Set <P>Unit price of the package.</p><p>unit: usd</p>.
 * @method float getOriginalPrice() Obtain <P>Original price.</p><p>unit: usd</p>.
 * @method void setOriginalPrice(float $OriginalPrice) Set <P>Original price.</p><p>unit: usd</p>.
 * @method float getDiscount() Obtain <p>Discount.</p>.
 * @method void setDiscount(float $Discount) Set <p>Discount.</p>.
 * @method float getDiscountPrice() Obtain <P>Discounted price.</p><p>unit: usd</p>.
 * @method void setDiscountPrice(float $DiscountPrice) Set <P>Discounted price.</p><p>unit: usd</p>.
 * @method string getCurrency() Obtain <p>Price currency unit. valid values: USD.</p>.
 * @method void setCurrency(string $Currency) Set <p>Price currency unit. valid values: USD.</p>.
 * @method array getDetailPrices() Obtain <P>Billing item detail.</p>.
 * @method void setDetailPrices(array $DetailPrices) Set <P>Billing item detail.</p>.
 */
class InstancePrice extends AbstractModel
{
    /**
     * @var float <P>Unit price of the package.</p><p>unit: usd</p>.
     */
    public $OriginalBundlePrice;

    /**
     * @var float <P>Original price.</p><p>unit: usd</p>.
     */
    public $OriginalPrice;

    /**
     * @var float <p>Discount.</p>.
     */
    public $Discount;

    /**
     * @var float <P>Discounted price.</p><p>unit: usd</p>.
     */
    public $DiscountPrice;

    /**
     * @var string <p>Price currency unit. valid values: USD.</p>.
     */
    public $Currency;

    /**
     * @var array <P>Billing item detail.</p>.
     */
    public $DetailPrices;

    /**
     * @param float $OriginalBundlePrice <P>Unit price of the package.</p><p>unit: usd</p>.
     * @param float $OriginalPrice <P>Original price.</p><p>unit: usd</p>.
     * @param float $Discount <p>Discount.</p>.
     * @param float $DiscountPrice <P>Discounted price.</p><p>unit: usd</p>.
     * @param string $Currency <p>Price currency unit. valid values: USD.</p>.
     * @param array $DetailPrices <P>Billing item detail.</p>.
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

        if (array_key_exists("DetailPrices",$param) and $param["DetailPrices"] !== null) {
            $this->DetailPrices = [];
            foreach ($param["DetailPrices"] as $key => $value){
                $obj = new DetailPrice();
                $obj->deserialize($value);
                array_push($this->DetailPrices, $obj);
            }
        }
    }
}
