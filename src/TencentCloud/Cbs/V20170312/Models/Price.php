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
 * @method float getOriginalPrice() 获取Original price of the advanced payment for a prepaid cloud disk (in CNY).
Note: This field may return null, indicating that no valid value was found.
 * @method void setOriginalPrice(float $OriginalPrice) 设置Original price of the advanced payment for a prepaid cloud disk (in CNY).
Note: This field may return null, indicating that no valid value was found.
 * @method float getDiscountPrice() 获取Discount price of the advanced payment for a prepaid cloud disk (in CNY).
Note: This field may return null, indicating that no valid value was found.
 * @method void setDiscountPrice(float $DiscountPrice) 设置Discount price of the advanced payment for a prepaid cloud disk (in CNY).
Note: This field may return null, indicating that no valid value was found.
 * @method float getUnitPrice() 获取Original unit price of a postpaid cloud disk (in CNY).
Note: This field may return null, indicating that no valid value was found.
 * @method void setUnitPrice(float $UnitPrice) 设置Original unit price of a postpaid cloud disk (in CNY).
Note: This field may return null, indicating that no valid value was found.
 * @method string getChargeUnit() 获取Billing unit of a postpaid cloud disk. Value range: <br><li>HOUR: Billed by hour.
Note: This field may return null, indicating that no valid value was found.
 * @method void setChargeUnit(string $ChargeUnit) 设置Billing unit of a postpaid cloud disk. Value range: <br><li>HOUR: Billed by hour.
Note: This field may return null, indicating that no valid value was found.
 * @method float getUnitPriceDiscount() 获取Postpaid cloud disk discount price. Unit: CNY.
Note: This field may return null, indicating that no valid value was found.
 * @method void setUnitPriceDiscount(float $UnitPriceDiscount) 设置Postpaid cloud disk discount price. Unit: CNY.
Note: This field may return null, indicating that no valid value was found.
 */

/**
 *Describes the prepaid or postpaid price for the cloud disk.
 */
class Price extends AbstractModel
{
    /**
     * @var float Original price of the advanced payment for a prepaid cloud disk (in CNY).
Note: This field may return null, indicating that no valid value was found.
     */
    public $OriginalPrice;

    /**
     * @var float Discount price of the advanced payment for a prepaid cloud disk (in CNY).
Note: This field may return null, indicating that no valid value was found.
     */
    public $DiscountPrice;

    /**
     * @var float Original unit price of a postpaid cloud disk (in CNY).
Note: This field may return null, indicating that no valid value was found.
     */
    public $UnitPrice;

    /**
     * @var string Billing unit of a postpaid cloud disk. Value range: <br><li>HOUR: Billed by hour.
Note: This field may return null, indicating that no valid value was found.
     */
    public $ChargeUnit;

    /**
     * @var float Postpaid cloud disk discount price. Unit: CNY.
Note: This field may return null, indicating that no valid value was found.
     */
    public $UnitPriceDiscount;
    /**
     * @param float $OriginalPrice Original price of the advanced payment for a prepaid cloud disk (in CNY).
Note: This field may return null, indicating that no valid value was found.
     * @param float $DiscountPrice Discount price of the advanced payment for a prepaid cloud disk (in CNY).
Note: This field may return null, indicating that no valid value was found.
     * @param float $UnitPrice Original unit price of a postpaid cloud disk (in CNY).
Note: This field may return null, indicating that no valid value was found.
     * @param string $ChargeUnit Billing unit of a postpaid cloud disk. Value range: <br><li>HOUR: Billed by hour.
Note: This field may return null, indicating that no valid value was found.
     * @param float $UnitPriceDiscount Postpaid cloud disk discount price. Unit: CNY.
Note: This field may return null, indicating that no valid value was found.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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

        if (array_key_exists("UnitPrice",$param) and $param["UnitPrice"] !== null) {
            $this->UnitPrice = $param["UnitPrice"];
        }

        if (array_key_exists("ChargeUnit",$param) and $param["ChargeUnit"] !== null) {
            $this->ChargeUnit = $param["ChargeUnit"];
        }

        if (array_key_exists("UnitPriceDiscount",$param) and $param["UnitPriceDiscount"] !== null) {
            $this->UnitPriceDiscount = $param["UnitPriceDiscount"];
        }
    }
}
