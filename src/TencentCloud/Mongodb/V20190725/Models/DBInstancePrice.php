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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Instance price
 *
 * @method float getUnitPrice() Obtain Unit price of the instance, in USD.
 * @method void setUnitPrice(float $UnitPrice) Set Unit price of the instance, in USD.
 * @method float getOriginalPrice() Obtain Original price of the instance, in USD.
 * @method void setOriginalPrice(float $OriginalPrice) Set Original price of the instance, in USD.
 * @method float getDiscountPrice() Obtain Discount price of the instance, in USD.
 * @method void setDiscountPrice(float $DiscountPrice) Set Discount price of the instance, in USD.
 */
class DBInstancePrice extends AbstractModel
{
    /**
     * @var float Unit price of the instance, in USD.
     */
    public $UnitPrice;

    /**
     * @var float Original price of the instance, in USD.
     */
    public $OriginalPrice;

    /**
     * @var float Discount price of the instance, in USD.
     */
    public $DiscountPrice;

    /**
     * @param float $UnitPrice Unit price of the instance, in USD.
     * @param float $OriginalPrice Original price of the instance, in USD.
     * @param float $DiscountPrice Discount price of the instance, in USD.
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
        if (array_key_exists("UnitPrice",$param) and $param["UnitPrice"] !== null) {
            $this->UnitPrice = $param["UnitPrice"];
        }

        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }
    }
}
