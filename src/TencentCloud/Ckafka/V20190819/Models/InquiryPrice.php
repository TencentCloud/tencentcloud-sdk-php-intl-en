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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Response parameters for instance price query
 *
 * @method float getUnitPrice() Obtain Original unit price
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnitPrice(float $UnitPrice) Set Original unit price
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getUnitPriceDiscount() Obtain Discounted unit price
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnitPriceDiscount(float $UnitPriceDiscount) Set Discounted unit price
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getOriginalPrice() Obtain Original price in total
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOriginalPrice(float $OriginalPrice) Set Original price in total
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getDiscountPrice() Obtain Discounted price in total
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiscountPrice(float $DiscountPrice) Set Discounted price in total
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getDiscount() Obtain Discount (%)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiscount(float $Discount) Set Discount (%)
Note: This field may return null, indicating that no valid values can be obtained.
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
 * @method integer getValue() Obtain Purchase quantity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setValue(integer $Value) Set Purchase quantity
Note: This field may return null, indicating that no valid values can be obtained.
 * @method InquiryDetailPrice getDetailPrices() Obtain Prices of different purchased items
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDetailPrices(InquiryDetailPrice $DetailPrices) Set Prices of different purchased items
Note: This field may return null, indicating that no valid values can be obtained.
 */
class InquiryPrice extends AbstractModel
{
    /**
     * @var float Original unit price
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UnitPrice;

    /**
     * @var float Discounted unit price
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UnitPriceDiscount;

    /**
     * @var float Original price in total
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OriginalPrice;

    /**
     * @var float Discounted price in total
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiscountPrice;

    /**
     * @var float Discount (%)
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var integer Purchase quantity
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Value;

    /**
     * @var InquiryDetailPrice Prices of different purchased items
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DetailPrices;

    /**
     * @param float $UnitPrice Original unit price
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $UnitPriceDiscount Discounted unit price
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $OriginalPrice Original price in total
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $DiscountPrice Discounted price in total
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Discount Discount (%)
Note: This field may return null, indicating that no valid values can be obtained.
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
     * @param integer $Value Purchase quantity
Note: This field may return null, indicating that no valid values can be obtained.
     * @param InquiryDetailPrice $DetailPrices Prices of different purchased items
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("DetailPrices",$param) and $param["DetailPrices"] !== null) {
            $this->DetailPrices = new InquiryDetailPrice();
            $this->DetailPrices->deserialize($param["DetailPrices"]);
        }
    }
}
