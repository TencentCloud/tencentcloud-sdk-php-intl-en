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
 * Total price information
 *
 * @method float getOriginalPrice() Obtain <P>Original total price.</p><p>unit: usd</p>.
 * @method void setOriginalPrice(float $OriginalPrice) Set <P>Original total price.</p><p>unit: usd</p>.
 * @method float getDiscountPrice() Obtain <P>Total price after discount.</p><p>unit: usd</p>.
 * @method void setDiscountPrice(float $DiscountPrice) Set <P>Total price after discount.</p><p>unit: usd</p>.
 */
class TotalPrice extends AbstractModel
{
    /**
     * @var float <P>Original total price.</p><p>unit: usd</p>.
     */
    public $OriginalPrice;

    /**
     * @var float <P>Total price after discount.</p><p>unit: usd</p>.
     */
    public $DiscountPrice;

    /**
     * @param float $OriginalPrice <P>Original total price.</p><p>unit: usd</p>.
     * @param float $DiscountPrice <P>Total price after discount.</p><p>unit: usd</p>.
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
