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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Prices of CPU, memory, and other resources
 *
 * @method integer getDiscount() Obtain Discount, such as `20`, which represents 80% off
 * @method void setDiscount(integer $Discount) Set Discount, such as `20`, which represents 80% off
 * @method integer getDiscountPrice() Obtain Discounted price in cents
 * @method void setDiscountPrice(integer $DiscountPrice) Set Discounted price in cents
 * @method integer getOriginalPrice() Obtain Original price in cents
 * @method void setOriginalPrice(integer $OriginalPrice) Set Original price in cents
 */
class PriceDetail extends AbstractModel
{
    /**
     * @var integer Discount, such as `20`, which represents 80% off
     */
    public $Discount;

    /**
     * @var integer Discounted price in cents
     */
    public $DiscountPrice;

    /**
     * @var integer Original price in cents
     */
    public $OriginalPrice;

    /**
     * @param integer $Discount Discount, such as `20`, which represents 80% off
     * @param integer $DiscountPrice Discounted price in cents
     * @param integer $OriginalPrice Original price in cents
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
