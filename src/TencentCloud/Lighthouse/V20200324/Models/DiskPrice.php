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
 * Cloud disk price
 *
 * @method float getOriginalDiskPrice() Obtain Cloud disk unit price.
 * @method void setOriginalDiskPrice(float $OriginalDiskPrice) Set Cloud disk unit price.
 * @method float getOriginalPrice() Obtain Total cloud disk price.
 * @method void setOriginalPrice(float $OriginalPrice) Set Total cloud disk price.
 * @method float getDiscount() Obtain Discount.
 * @method void setDiscount(float $Discount) Set Discount.
 * @method float getDiscountPrice() Obtain Discounted total price.
 * @method void setDiscountPrice(float $DiscountPrice) Set Discounted total price.
 * @method array getDetailPrices() Obtain Detailed billing items
 * @method void setDetailPrices(array $DetailPrices) Set Detailed billing items
 */
class DiskPrice extends AbstractModel
{
    /**
     * @var float Cloud disk unit price.
     */
    public $OriginalDiskPrice;

    /**
     * @var float Total cloud disk price.
     */
    public $OriginalPrice;

    /**
     * @var float Discount.
     */
    public $Discount;

    /**
     * @var float Discounted total price.
     */
    public $DiscountPrice;

    /**
     * @var array Detailed billing items
     */
    public $DetailPrices;

    /**
     * @param float $OriginalDiskPrice Cloud disk unit price.
     * @param float $OriginalPrice Total cloud disk price.
     * @param float $Discount Discount.
     * @param float $DiscountPrice Discounted total price.
     * @param array $DetailPrices Detailed billing items
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
