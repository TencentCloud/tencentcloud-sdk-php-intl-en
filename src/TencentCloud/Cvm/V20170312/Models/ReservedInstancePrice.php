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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Price of the reserved instance. Currently, RIs are only offered to beta users.
 *
 * @method float getOriginalFixedPrice() Obtain Original upfront payment, in USD.
 * @method void setOriginalFixedPrice(float $OriginalFixedPrice) Set Original upfront payment, in USD.
 * @method float getDiscountFixedPrice() Obtain Discounted upfront payment, in USD.
 * @method void setDiscountFixedPrice(float $DiscountFixedPrice) Set Discounted upfront payment, in USD.
 * @method float getOriginalUsagePrice() Obtain Original subsequent unit price, in USD/hr.
 * @method void setOriginalUsagePrice(float $OriginalUsagePrice) Set Original subsequent unit price, in USD/hr.
 * @method float getDiscountUsagePrice() Obtain Discounted subsequent unit price, in USD/hr.
 * @method void setDiscountUsagePrice(float $DiscountUsagePrice) Set Discounted subsequent unit price, in USD/hr.
 */
class ReservedInstancePrice extends AbstractModel
{
    /**
     * @var float Original upfront payment, in USD.
     */
    public $OriginalFixedPrice;

    /**
     * @var float Discounted upfront payment, in USD.
     */
    public $DiscountFixedPrice;

    /**
     * @var float Original subsequent unit price, in USD/hr.
     */
    public $OriginalUsagePrice;

    /**
     * @var float Discounted subsequent unit price, in USD/hr.
     */
    public $DiscountUsagePrice;

    /**
     * @param float $OriginalFixedPrice Original upfront payment, in USD.
     * @param float $DiscountFixedPrice Discounted upfront payment, in USD.
     * @param float $OriginalUsagePrice Original subsequent unit price, in USD/hr.
     * @param float $DiscountUsagePrice Discounted subsequent unit price, in USD/hr.
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
        if (array_key_exists("OriginalFixedPrice",$param) and $param["OriginalFixedPrice"] !== null) {
            $this->OriginalFixedPrice = $param["OriginalFixedPrice"];
        }

        if (array_key_exists("DiscountFixedPrice",$param) and $param["DiscountFixedPrice"] !== null) {
            $this->DiscountFixedPrice = $param["DiscountFixedPrice"];
        }

        if (array_key_exists("OriginalUsagePrice",$param) and $param["OriginalUsagePrice"] !== null) {
            $this->OriginalUsagePrice = $param["OriginalUsagePrice"];
        }

        if (array_key_exists("DiscountUsagePrice",$param) and $param["DiscountUsagePrice"] !== null) {
            $this->DiscountUsagePrice = $param["DiscountUsagePrice"];
        }
    }
}
