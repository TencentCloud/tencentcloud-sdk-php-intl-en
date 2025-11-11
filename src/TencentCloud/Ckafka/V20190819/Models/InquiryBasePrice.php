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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Response parameters for instance price query
 *
 * @method float getUnitPrice() Obtain Original price unit.
 * @method void setUnitPrice(float $UnitPrice) Set Original price unit.
 * @method float getUnitPriceDiscount() Obtain Discount unit price.
 * @method void setUnitPriceDiscount(float $UnitPriceDiscount) Set Discount unit price.
 * @method float getOriginalPrice() Obtain Total original price.
 * @method void setOriginalPrice(float $OriginalPrice) Set Total original price.
 * @method float getDiscountPrice() Obtain Total discount price.
 * @method void setDiscountPrice(float $DiscountPrice) Set Total discount price.
 * @method float getDiscount() Obtain Discount (unit: %).
 * @method void setDiscount(float $Discount) Set Discount (unit: %).
 * @method integer getGoodsNum() Obtain Number of purchased items
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGoodsNum(integer $GoodsNum) Set Number of purchased items
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCurrency() Obtain Currency for payment
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCurrency(string $Currency) Set Currency for payment
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDiskType() Obtain Dedicated disk response parameter
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiskType(string $DiskType) Set Dedicated disk response parameter
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTimeSpan() Obtain Validity period
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimeSpan(integer $TimeSpan) Set Validity period
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTimeUnit() Obtain Unit of the validity period (`m`: Month; `h`: Hour)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimeUnit(string $TimeUnit) Set Unit of the validity period (`m`: Month; `h`: Hour)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getValue() Obtain Purchase quantity.
 * @method void setValue(integer $Value) Set Purchase quantity.
 */
class InquiryBasePrice extends AbstractModel
{
    /**
     * @var float Original price unit.
     */
    public $UnitPrice;

    /**
     * @var float Discount unit price.
     */
    public $UnitPriceDiscount;

    /**
     * @var float Total original price.
     */
    public $OriginalPrice;

    /**
     * @var float Total discount price.
     */
    public $DiscountPrice;

    /**
     * @var float Discount (unit: %).
     */
    public $Discount;

    /**
     * @var integer Number of purchased items
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GoodsNum;

    /**
     * @var string Currency for payment
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Currency;

    /**
     * @var string Dedicated disk response parameter
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiskType;

    /**
     * @var integer Validity period
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimeSpan;

    /**
     * @var string Unit of the validity period (`m`: Month; `h`: Hour)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimeUnit;

    /**
     * @var integer Purchase quantity.
     */
    public $Value;

    /**
     * @param float $UnitPrice Original price unit.
     * @param float $UnitPriceDiscount Discount unit price.
     * @param float $OriginalPrice Total original price.
     * @param float $DiscountPrice Total discount price.
     * @param float $Discount Discount (unit: %).
     * @param integer $GoodsNum Number of purchased items
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Currency Currency for payment
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DiskType Dedicated disk response parameter
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TimeSpan Validity period
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TimeUnit Unit of the validity period (`m`: Month; `h`: Hour)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Value Purchase quantity.
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

        if (array_key_exists("UnitPriceDiscount",$param) and $param["UnitPriceDiscount"] !== null) {
            $this->UnitPriceDiscount = $param["UnitPriceDiscount"];
        }

        if (array_key_exists("OriginalPrice",$param) and $param["OriginalPrice"] !== null) {
            $this->OriginalPrice = $param["OriginalPrice"];
        }

        if (array_key_exists("DiscountPrice",$param) and $param["DiscountPrice"] !== null) {
            $this->DiscountPrice = $param["DiscountPrice"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
