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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cost analysis query conditions
 *
 * @method string getBusinessCodes() Obtain Product name code
 * @method void setBusinessCodes(string $BusinessCodes) Set Product name code
 * @method string getProductCodes() Obtain Subproduct name code
 * @method void setProductCodes(string $ProductCodes) Set Subproduct name code
 * @method string getComponentCode() Obtain Component type code
 * @method void setComponentCode(string $ComponentCode) Set Component type code
 * @method string getZoneIds() Obtain Availability zone ID: The availability zone ID where the resource is located.
 * @method void setZoneIds(string $ZoneIds) Set Availability zone ID: The availability zone ID where the resource is located.
 * @method string getRegionIds() Obtain Region ID: Resource region ID
 * @method void setRegionIds(string $RegionIds) Set Region ID: Resource region ID
 * @method string getProjectIds() Obtain Project ID: Project ID of the resource
 * @method void setProjectIds(string $ProjectIds) Set Project ID: Project ID of the resource
 * @method string getPayModes() Obtain Billing mode prePay (monthly subscription)/postPay (pay-as-you-go billing)
 * @method void setPayModes(string $PayModes) Set Billing mode prePay (monthly subscription)/postPay (pay-as-you-go billing)
 * @method string getActionTypes() Obtain Transaction type. Query transaction type (please use transaction type code as input parameter).
 * @method void setActionTypes(string $ActionTypes) Set Transaction type. Query transaction type (please use transaction type code as input parameter).
 * @method string getTags() Obtain Cost allocation tag key
 * @method void setTags(string $Tags) Set Cost allocation tag key
 * @method string getFeeType() Obtain Fee type. Query fee type (please use fee type code input parameter). The input parameter enumeration is as follows:
cashPayAmount: Cash 
incentivePayAmount: Bonus 
voucherPayAmount: Coupon 
tax: tax. 
costBeforeTax: pre-tax price
 * @method void setFeeType(string $FeeType) Set Fee type. Query fee type (please use fee type code input parameter). The input parameter enumeration is as follows:
cashPayAmount: Cash 
incentivePayAmount: Bonus 
voucherPayAmount: Coupon 
tax: tax. 
costBeforeTax: pre-tax price
 * @method string getPayerUins() Obtain User UIN for querying cost analysis data
 * @method void setPayerUins(string $PayerUins) Set User UIN for querying cost analysis data
 * @method string getOwnerUins() Obtain User UIN for using resources
 * @method void setOwnerUins(string $OwnerUins) Set User UIN for using resources
 * @method string getConsumptionTypes() Obtain Consumption type. Query consumption type (please use consumption type code input parameter).
 * @method void setConsumptionTypes(string $ConsumptionTypes) Set Consumption type. Query consumption type (please use consumption type code input parameter).
 */
class AnalyseConditions extends AbstractModel
{
    /**
     * @var string Product name code
     */
    public $BusinessCodes;

    /**
     * @var string Subproduct name code
     */
    public $ProductCodes;

    /**
     * @var string Component type code
     */
    public $ComponentCode;

    /**
     * @var string Availability zone ID: The availability zone ID where the resource is located.
     */
    public $ZoneIds;

    /**
     * @var string Region ID: Resource region ID
     */
    public $RegionIds;

    /**
     * @var string Project ID: Project ID of the resource
     */
    public $ProjectIds;

    /**
     * @var string Billing mode prePay (monthly subscription)/postPay (pay-as-you-go billing)
     */
    public $PayModes;

    /**
     * @var string Transaction type. Query transaction type (please use transaction type code as input parameter).
     */
    public $ActionTypes;

    /**
     * @var string Cost allocation tag key
     */
    public $Tags;

    /**
     * @var string Fee type. Query fee type (please use fee type code input parameter). The input parameter enumeration is as follows:
cashPayAmount: Cash 
incentivePayAmount: Bonus 
voucherPayAmount: Coupon 
tax: tax. 
costBeforeTax: pre-tax price
     */
    public $FeeType;

    /**
     * @var string User UIN for querying cost analysis data
     */
    public $PayerUins;

    /**
     * @var string User UIN for using resources
     */
    public $OwnerUins;

    /**
     * @var string Consumption type. Query consumption type (please use consumption type code input parameter).
     */
    public $ConsumptionTypes;

    /**
     * @param string $BusinessCodes Product name code
     * @param string $ProductCodes Subproduct name code
     * @param string $ComponentCode Component type code
     * @param string $ZoneIds Availability zone ID: The availability zone ID where the resource is located.
     * @param string $RegionIds Region ID: Resource region ID
     * @param string $ProjectIds Project ID: Project ID of the resource
     * @param string $PayModes Billing mode prePay (monthly subscription)/postPay (pay-as-you-go billing)
     * @param string $ActionTypes Transaction type. Query transaction type (please use transaction type code as input parameter).
     * @param string $Tags Cost allocation tag key
     * @param string $FeeType Fee type. Query fee type (please use fee type code input parameter). The input parameter enumeration is as follows:
cashPayAmount: Cash 
incentivePayAmount: Bonus 
voucherPayAmount: Coupon 
tax: tax. 
costBeforeTax: pre-tax price
     * @param string $PayerUins User UIN for querying cost analysis data
     * @param string $OwnerUins User UIN for using resources
     * @param string $ConsumptionTypes Consumption type. Query consumption type (please use consumption type code input parameter).
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
