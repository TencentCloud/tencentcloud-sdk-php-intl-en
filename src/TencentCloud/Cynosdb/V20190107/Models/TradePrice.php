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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Billing details
 *
 * @method integer getTotalPrice() Obtain Resource total price under prepaid mode, excluding discounts. unit: cent.
 * @method void setTotalPrice(integer $TotalPrice) Set Resource total price under prepaid mode, excluding discounts. unit: cent.
 * @method float getDiscount() Obtain Total discount. `100` means no discount.
 * @method void setDiscount(float $Discount) Set Total discount. `100` means no discount.
 * @method integer getTotalPriceDiscount() Obtain Discounted total price under prepaid mode, unit: fen. for example, the user enjoys a Discount = TotalPrice × Discount.
 * @method void setTotalPriceDiscount(integer $TotalPriceDiscount) Set Discounted total price under prepaid mode, unit: fen. for example, the user enjoys a Discount = TotalPrice × Discount.
 * @method integer getUnitPrice() Obtain Unit resource price in postpaid mode, excluding discounts. unit: cent.
 * @method void setUnitPrice(integer $UnitPrice) Set Unit resource price in postpaid mode, excluding discounts. unit: cent.
 * @method integer getUnitPriceDiscount() Obtain Unit resource price in postpaid mode after Discount, unit: fen. for example, the user enjoys a Discount = unitprice × Discount.
 * @method void setUnitPriceDiscount(integer $UnitPriceDiscount) Set Unit resource price in postpaid mode after Discount, unit: fen. for example, the user enjoys a Discount = unitprice × Discount.
 * @method string getChargeUnit() Obtain Price unit
 * @method void setChargeUnit(string $ChargeUnit) Set Price unit
 */
class TradePrice extends AbstractModel
{
    /**
     * @var integer Resource total price under prepaid mode, excluding discounts. unit: cent.
     */
    public $TotalPrice;

    /**
     * @var float Total discount. `100` means no discount.
     */
    public $Discount;

    /**
     * @var integer Discounted total price under prepaid mode, unit: fen. for example, the user enjoys a Discount = TotalPrice × Discount.
     */
    public $TotalPriceDiscount;

    /**
     * @var integer Unit resource price in postpaid mode, excluding discounts. unit: cent.
     */
    public $UnitPrice;

    /**
     * @var integer Unit resource price in postpaid mode after Discount, unit: fen. for example, the user enjoys a Discount = unitprice × Discount.
     */
    public $UnitPriceDiscount;

    /**
     * @var string Price unit
     */
    public $ChargeUnit;

    /**
     * @param integer $TotalPrice Resource total price under prepaid mode, excluding discounts. unit: cent.
     * @param float $Discount Total discount. `100` means no discount.
     * @param integer $TotalPriceDiscount Discounted total price under prepaid mode, unit: fen. for example, the user enjoys a Discount = TotalPrice × Discount.
     * @param integer $UnitPrice Unit resource price in postpaid mode, excluding discounts. unit: cent.
     * @param integer $UnitPriceDiscount Unit resource price in postpaid mode after Discount, unit: fen. for example, the user enjoys a Discount = unitprice × Discount.
     * @param string $ChargeUnit Price unit
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
        if (array_key_exists("TotalPrice",$param) and $param["TotalPrice"] !== null) {
            $this->TotalPrice = $param["TotalPrice"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("TotalPriceDiscount",$param) and $param["TotalPriceDiscount"] !== null) {
            $this->TotalPriceDiscount = $param["TotalPriceDiscount"];
        }

        if (array_key_exists("UnitPrice",$param) and $param["UnitPrice"] !== null) {
            $this->UnitPrice = $param["UnitPrice"];
        }

        if (array_key_exists("UnitPriceDiscount",$param) and $param["UnitPriceDiscount"] !== null) {
            $this->UnitPriceDiscount = $param["UnitPriceDiscount"];
        }

        if (array_key_exists("ChargeUnit",$param) and $param["ChargeUnit"] !== null) {
            $this->ChargeUnit = $param["ChargeUnit"];
        }
    }
}
