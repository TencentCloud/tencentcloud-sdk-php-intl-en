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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The cost of a prepaid order.
 *
 * @method float getOriginalPrice() Obtain Original price of the advanced payment for a prepaid cloud disk or snapshot (in CNY).
 * @method void setOriginalPrice(float $OriginalPrice) Set Original price of the advanced payment for a prepaid cloud disk or snapshot (in CNY).
 * @method float getDiscountPrice() Obtain Discount price of the advanced payment for a prepaid cloud disk or snapshot (in CNY).
 * @method void setDiscountPrice(float $DiscountPrice) Set Discount price of the advanced payment for a prepaid cloud disk or snapshot (in CNY).
 */
class PrepayPrice extends AbstractModel
{
    /**
     * @var float Original price of the advanced payment for a prepaid cloud disk or snapshot (in CNY).
     */
    public $OriginalPrice;

    /**
     * @var float Discount price of the advanced payment for a prepaid cloud disk or snapshot (in CNY).
     */
    public $DiscountPrice;

    /**
     * @param float $OriginalPrice Original price of the advanced payment for a prepaid cloud disk or snapshot (in CNY).
     * @param float $DiscountPrice Discount price of the advanced payment for a prepaid cloud disk or snapshot (in CNY).
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
        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }
    }
}
