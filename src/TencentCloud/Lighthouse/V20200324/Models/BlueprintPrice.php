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
 * BlueprintPrice	Custom image price parameter.
 *
 * @method float getOriginalBlueprintPrice() Obtain Original image unit price in USD.
 * @method void setOriginalBlueprintPrice(float $OriginalBlueprintPrice) Set Original image unit price in USD.
 * @method float getOriginalPrice() Obtain Original image total price in USD.
 * @method void setOriginalPrice(float $OriginalPrice) Set Original image total price in USD.
 * @method integer getDiscount() Obtain Discount.
 * @method void setDiscount(integer $Discount) Set Discount.
 * @method float getDiscountPrice() Obtain Discounted image total price in USD.
 * @method void setDiscountPrice(float $DiscountPrice) Set Discounted image total price in USD.
 */
class BlueprintPrice extends AbstractModel
{
    /**
     * @var float Original image unit price in USD.
     */
    public $OriginalBlueprintPrice;

    /**
     * @var float Original image total price in USD.
     */
    public $OriginalPrice;

    /**
     * @var integer Discount.
     */
    public $Discount;

    /**
     * @var float Discounted image total price in USD.
     */
    public $DiscountPrice;

    /**
     * @param float $OriginalBlueprintPrice Original image unit price in USD.
     * @param float $OriginalPrice Original image total price in USD.
     * @param integer $Discount Discount.
     * @param float $DiscountPrice Discounted image total price in USD.
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
        if (array_key_exists("OriginalBlueprintPrice",$param) and $param["OriginalBlueprintPrice"] !== null) {
            $this->OriginalBlueprintPrice = $param["OriginalBlueprintPrice"];
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
