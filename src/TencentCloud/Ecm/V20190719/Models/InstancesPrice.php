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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance price information
 *
 * @method InstancePricesPartDetail getInstancePricesPartDetail() Obtain Instance price details
 * @method void setInstancePricesPartDetail(InstancePricesPartDetail $InstancePricesPartDetail) Set Instance price details
 * @method integer getDiscount() Obtain Discount on the total instance price
 * @method void setDiscount(integer $Discount) Set Discount on the total instance price
 * @method integer getDiscountPrice() Obtain Discounted price
 * @method void setDiscountPrice(integer $DiscountPrice) Set Discounted price
 * @method integer getOriginalPrice() Obtain Original cost
 * @method void setOriginalPrice(integer $OriginalPrice) Set Original cost
 */
class InstancesPrice extends AbstractModel
{
    /**
     * @var InstancePricesPartDetail Instance price details
     */
    public $InstancePricesPartDetail;

    /**
     * @var integer Discount on the total instance price
     */
    public $Discount;

    /**
     * @var integer Discounted price
     */
    public $DiscountPrice;

    /**
     * @var integer Original cost
     */
    public $OriginalPrice;

    /**
     * @param InstancePricesPartDetail $InstancePricesPartDetail Instance price details
     * @param integer $Discount Discount on the total instance price
     * @param integer $DiscountPrice Discounted price
     * @param integer $OriginalPrice Original cost
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
        if (array_key_exists("InstancePricesPartDetail",$param) and $param["InstancePricesPartDetail"] !== null) {
            $this->InstancePricesPartDetail = new InstancePricesPartDetail();
            $this->InstancePricesPartDetail->deserialize($param["InstancePricesPartDetail"]);
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }

        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }
    }
}
