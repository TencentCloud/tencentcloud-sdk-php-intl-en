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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cost analysis query conditions
 *
 * @method string getBusinessCodes() Obtain Product name codeNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setBusinessCodes(string $BusinessCodes) Set Product name codeNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getProductCodes() Obtain Sub-product name codeNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setProductCodes(string $ProductCodes) Set Sub-product name codeNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getComponentCode() Obtain Component type codeNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setComponentCode(string $ComponentCode) Set Component type codeNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getZoneIds() Obtain Availability zone ID: The availability zone ID to which the resource belongsNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneIds(string $ZoneIds) Set Availability zone ID: The availability zone ID to which the resource belongsNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegionIds() Obtain Region ID: The region ID to which the resource belongsNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionIds(string $RegionIds) Set Region ID: The region ID to which the resource belongsNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectIds() Obtain Project ID: The project ID to which the resource belongsNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectIds(string $ProjectIds) Set Project ID: The project ID to which the resource belongsNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getPayModes() Obtain Billing mode prePay (indicates monthly subscription)/postPay (indicates pay-as-you-go billing)Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayModes(string $PayModes) Set Billing mode prePay (indicates monthly subscription)/postPay (indicates pay-as-you-go billing)Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getActionTypes() Obtain Transaction type. Query transaction type. (Use transaction type code input parameter.)Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setActionTypes(string $ActionTypes) Set Transaction type. Query transaction type. (Use transaction type code input parameter.)Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTags() Obtain Cost allocation tag keyNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(string $Tags) Set Cost allocation tag keyNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getFeeType() Obtain Fee type. Query fee type. (Use fee type code input parameter.) The input parameter enumeration is as follows:cashPayAmount: cash incentivePayAmount: free credits voucherPayAmount: coupons tax:taxes costBeforeTax: price before taxNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setFeeType(string $FeeType) Set Fee type. Query fee type. (Use fee type code input parameter.) The input parameter enumeration is as follows:cashPayAmount: cash incentivePayAmount: free credits voucherPayAmount: coupons tax:taxes costBeforeTax: price before taxNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getPayerUins() Obtain User UIN for querying cost analysis dataNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayerUins(string $PayerUins) Set User UIN for querying cost analysis dataNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getOwnerUins() Obtain User UIN for using resourcesNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setOwnerUins(string $OwnerUins) Set User UIN for using resourcesNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getConsumptionTypes() Obtain Consumption type. Query consumption type. (Use consumption type code input parameter.)Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConsumptionTypes(string $ConsumptionTypes) Set Consumption type. Query consumption type. (Use consumption type code input parameter.)Note: This field may return null, indicating that no valid values can be obtained.
 */
class AnalyseConditions extends AbstractModel
{
    /**
     * @var string Product name codeNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $BusinessCodes;

    /**
     * @var string Sub-product name codeNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProductCodes;

    /**
     * @var string Component type codeNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $ComponentCode;

    /**
     * @var string Availability zone ID: The availability zone ID to which the resource belongsNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneIds;

    /**
     * @var string Region ID: The region ID to which the resource belongsNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionIds;

    /**
     * @var string Project ID: The project ID to which the resource belongsNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectIds;

    /**
     * @var string Billing mode prePay (indicates monthly subscription)/postPay (indicates pay-as-you-go billing)Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayModes;

    /**
     * @var string Transaction type. Query transaction type. (Use transaction type code input parameter.)Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ActionTypes;

    /**
     * @var string Cost allocation tag keyNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string Fee type. Query fee type. (Use fee type code input parameter.) The input parameter enumeration is as follows:cashPayAmount: cash incentivePayAmount: free credits voucherPayAmount: coupons tax:taxes costBeforeTax: price before taxNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $FeeType;

    /**
     * @var string User UIN for querying cost analysis dataNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayerUins;

    /**
     * @var string User UIN for using resourcesNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $OwnerUins;

    /**
     * @var string Consumption type. Query consumption type. (Use consumption type code input parameter.)Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConsumptionTypes;

    /**
     * @param string $BusinessCodes Product name codeNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProductCodes Sub-product name codeNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $ComponentCode Component type codeNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $ZoneIds Availability zone ID: The availability zone ID to which the resource belongsNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegionIds Region ID: The region ID to which the resource belongsNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectIds Project ID: The project ID to which the resource belongsNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $PayModes Billing mode prePay (indicates monthly subscription)/postPay (indicates pay-as-you-go billing)Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ActionTypes Transaction type. Query transaction type. (Use transaction type code input parameter.)Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Tags Cost allocation tag keyNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $FeeType Fee type. Query fee type. (Use fee type code input parameter.) The input parameter enumeration is as follows:cashPayAmount: cash incentivePayAmount: free credits voucherPayAmount: coupons tax:taxes costBeforeTax: price before taxNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $PayerUins User UIN for querying cost analysis dataNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $OwnerUins User UIN for using resourcesNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $ConsumptionTypes Consumption type. Query consumption type. (Use consumption type code input parameter.)Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("BusinessCodes",$param) and $param["BusinessCodes"] !== null) {
            $this->BusinessCodes = $param["BusinessCodes"];
        }

        if (array_key_exists("ProductCodes",$param) and $param["ProductCodes"] !== null) {
            $this->ProductCodes = $param["ProductCodes"];
        }

        if (array_key_exists("ComponentCode",$param) and $param["ComponentCode"] !== null) {
            $this->ComponentCode = $param["ComponentCode"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("RegionIds",$param) and $param["RegionIds"] !== null) {
            $this->RegionIds = $param["RegionIds"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("PayModes",$param) and $param["PayModes"] !== null) {
            $this->PayModes = $param["PayModes"];
        }

        if (array_key_exists("ActionTypes",$param) and $param["ActionTypes"] !== null) {
            $this->ActionTypes = $param["ActionTypes"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("FeeType",$param) and $param["FeeType"] !== null) {
            $this->FeeType = $param["FeeType"];
        }

        if (array_key_exists("PayerUins",$param) and $param["PayerUins"] !== null) {
            $this->PayerUins = $param["PayerUins"];
        }

        if (array_key_exists("OwnerUins",$param) and $param["OwnerUins"] !== null) {
            $this->OwnerUins = $param["OwnerUins"];
        }

        if (array_key_exists("ConsumptionTypes",$param) and $param["ConsumptionTypes"] !== null) {
            $this->ConsumptionTypes = $param["ConsumptionTypes"];
        }
    }
}
