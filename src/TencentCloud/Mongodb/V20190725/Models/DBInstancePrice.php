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
 * @method float getUnitPrice() Obtain Unit price.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setUnitPrice(float $UnitPrice) Set Unit price.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method float getOriginalPrice() Obtain Original price.
 * @method void setOriginalPrice(float $OriginalPrice) Set Original price.
 * @method float getDiscountPrice() Obtain Discounted price.
 * @method void setDiscountPrice(float $DiscountPrice) Set Discounted price.
 */
class DBInstancePrice extends AbstractModel
{
    /**
     * @var float Unit price.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $UnitPrice;

    /**
     * @var float Original price.
     */
    public $OriginalPrice;

    /**
     * @var float Discounted price.
     */
    public $DiscountPrice;

    /**
     * @param float $UnitPrice Unit price.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param float $OriginalPrice Original price.
     * @param float $DiscountPrice Discounted price.
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
