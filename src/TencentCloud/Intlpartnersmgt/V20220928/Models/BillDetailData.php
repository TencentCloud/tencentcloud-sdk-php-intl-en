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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Customer bill details
 *
 * @method integer getPayerAccountId() Obtain Reseller account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayerAccountId(integer $PayerAccountId) Set Reseller account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOwnerAccountId() Obtain Customer account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOwnerAccountId(integer $OwnerAccountId) Set Customer account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOperatorAccountId() Obtain Operator account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOperatorAccountId(integer $OperatorAccountId) Set Operator account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProductName() Obtain Product name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProductName(string $ProductName) Set Product name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBillingMode() Obtain Billing mode
`Monthly subscription` (Monthly subscription)
`Pay-As-You-Go resources` (Pay-as-you-go)
`Standard RI` (Reserved instance)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBillingMode(string $BillingMode) Set Billing mode
`Monthly subscription` (Monthly subscription)
`Pay-As-You-Go resources` (Pay-as-you-go)
`Standard RI` (Reserved instance)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProjectName() Obtain Project name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectName(string $ProjectName) Set Project name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegion() Obtain Resource region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegion(string $Region) Set Resource region
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAvailabilityZone() Obtain Resource AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAvailabilityZone(string $AvailabilityZone) Set Resource AZ
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceName() Obtain Instance name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) Set Instance name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubProductName() Obtain Subproduct name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubProductName(string $SubProductName) Set Subproduct name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTransactionType() Obtain Settlement type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTransactionType(string $TransactionType) Set Settlement type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTransactionId() Obtain Transaction ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTransactionId(string $TransactionId) Set Transaction ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTransactionTime() Obtain Settlement time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTransactionTime(string $TransactionTime) Set Settlement time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUsageStartTime() Obtain Start time of resource use
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUsageStartTime(string $UsageStartTime) Set Start time of resource use
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUsageEndTime() Obtain End time of resource use
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUsageEndTime(string $UsageEndTime) Set End time of resource use
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getComponentType() Obtain Component
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComponentType(string $ComponentType) Set Component
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getComponentName() Obtain Component name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComponentName(string $ComponentName) Set Component name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getComponentListPrice() Obtain Component list price
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComponentListPrice(string $ComponentListPrice) Set Component list price
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getComponentPriceMeasurementUnit() Obtain Price unit
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComponentPriceMeasurementUnit(string $ComponentPriceMeasurementUnit) Set Price unit
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getComponentUsage() Obtain Component usage
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComponentUsage(string $ComponentUsage) Set Component usage
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getComponentUsageUnit() Obtain Component usage unit
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setComponentUsageUnit(string $ComponentUsageUnit) Set Component usage unit
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUsageDuration() Obtain Resource usage duration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUsageDuration(string $UsageDuration) Set Resource usage duration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDurationUnit() Obtain Duration unit
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDurationUnit(string $DurationUnit) Set Duration unit
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOriginalCost() Obtain Original cost
Original cost = component list price * component usage * usage duration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOriginalCost(string $OriginalCost) Set Original cost
Original cost = component list price * component usage * usage duration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDiscountRate() Obtain Discount, which defaults to `1`, indicating there is no discount.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDiscountRate(string $DiscountRate) Set Discount, which defaults to `1`, indicating there is no discount.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCurrency() Obtain Currency
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCurrency(string $Currency) Set Currency
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTotalAmountAfterDiscount() Obtain Discounted total
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalAmountAfterDiscount(string $TotalAmountAfterDiscount) Set Discounted total
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVoucherDeduction() Obtain Voucher deduction
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVoucherDeduction(string $VoucherDeduction) Set Voucher deduction
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTotalCost() Obtain Total cost = discounted total - voucher deduction
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTotalCost(string $TotalCost) Set Total cost = discounted total - voucher deduction
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getId() Obtain ID
Note: The return value may be null, indicating that no valid data can be obtained.
 * @method void setId(string $Id) Set ID
Note: The return value may be null, indicating that no valid data can be obtained.
 */
class BillDetailData extends AbstractModel
{
    /**
     * @var integer Reseller account
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayerAccountId;

    /**
     * @var integer Customer account
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OwnerAccountId;

    /**
     * @var integer Operator account
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OperatorAccountId;

    /**
     * @var string Product name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProductName;

    /**
     * @var string Billing mode
`Monthly subscription` (Monthly subscription)
`Pay-As-You-Go resources` (Pay-as-you-go)
`Standard RI` (Reserved instance)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BillingMode;

    /**
     * @var string Project name

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectName;

    /**
     * @var string Resource region
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Region;

    /**
     * @var string Resource AZ
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AvailabilityZone;

    /**
     * @var string Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Instance name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var string Subproduct name

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubProductName;

    /**
     * @var string Settlement type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TransactionType;

    /**
     * @var string Transaction ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TransactionId;

    /**
     * @var string Settlement time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TransactionTime;

    /**
     * @var string Start time of resource use
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UsageStartTime;

    /**
     * @var string End time of resource use
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UsageEndTime;

    /**
     * @var string Component
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ComponentType;

    /**
     * @var string Component name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ComponentName;

    /**
     * @var string Component list price
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ComponentListPrice;

    /**
     * @var string Price unit
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ComponentPriceMeasurementUnit;

    /**
     * @var string Component usage
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ComponentUsage;

    /**
     * @var string Component usage unit
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ComponentUsageUnit;

    /**
     * @var string Resource usage duration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UsageDuration;

    /**
     * @var string Duration unit
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DurationUnit;

    /**
     * @var string Original cost
Original cost = component list price * component usage * usage duration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OriginalCost;

    /**
     * @var string Discount, which defaults to `1`, indicating there is no discount.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DiscountRate;

    /**
     * @var string Currency
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Currency;

    /**
     * @var string Discounted total
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalAmountAfterDiscount;

    /**
     * @var string Voucher deduction
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VoucherDeduction;

    /**
     * @var string Total cost = discounted total - voucher deduction
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TotalCost;

    /**
     * @var string ID
Note: The return value may be null, indicating that no valid data can be obtained.
     */
    public $Id;

    /**
     * @param integer $PayerAccountId Reseller account
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $OwnerAccountId Customer account
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $OperatorAccountId Operator account
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProductName Product name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BillingMode Billing mode
`Monthly subscription` (Monthly subscription)
`Pay-As-You-Go resources` (Pay-as-you-go)
`Standard RI` (Reserved instance)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProjectName Project name

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Region Resource region
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AvailabilityZone Resource AZ
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceName Instance name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubProductName Subproduct name

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TransactionType Settlement type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TransactionId Transaction ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TransactionTime Settlement time

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UsageStartTime Start time of resource use
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UsageEndTime End time of resource use
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ComponentType Component
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ComponentName Component name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ComponentListPrice Component list price
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ComponentPriceMeasurementUnit Price unit
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ComponentUsage Component usage
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ComponentUsageUnit Component usage unit
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UsageDuration Resource usage duration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DurationUnit Duration unit
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OriginalCost Original cost
Original cost = component list price * component usage * usage duration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DiscountRate Discount, which defaults to `1`, indicating there is no discount.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Currency Currency
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TotalAmountAfterDiscount Discounted total
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VoucherDeduction Voucher deduction
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TotalCost Total cost = discounted total - voucher deduction
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Id ID
Note: The return value may be null, indicating that no valid data can be obtained.
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
        if (array_key_exists("PayerAccountId",$param) and $param["PayerAccountId"] !== null) {
            $this->PayerAccountId = $param["PayerAccountId"];
        }

        if (array_key_exists("OwnerAccountId",$param) and $param["OwnerAccountId"] !== null) {
            $this->OwnerAccountId = $param["OwnerAccountId"];
        }

        if (array_key_exists("OperatorAccountId",$param) and $param["OperatorAccountId"] !== null) {
            $this->OperatorAccountId = $param["OperatorAccountId"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("BillingMode",$param) and $param["BillingMode"] !== null) {
            $this->BillingMode = $param["BillingMode"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("AvailabilityZone",$param) and $param["AvailabilityZone"] !== null) {
            $this->AvailabilityZone = $param["AvailabilityZone"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("SubProductName",$param) and $param["SubProductName"] !== null) {
            $this->SubProductName = $param["SubProductName"];
        }

        if (array_key_exists("TransactionType",$param) and $param["TransactionType"] !== null) {
            $this->TransactionType = $param["TransactionType"];
        }

        if (array_key_exists("TransactionId",$param) and $param["TransactionId"] !== null) {
            $this->TransactionId = $param["TransactionId"];
        }

        if (array_key_exists("TransactionTime",$param) and $param["TransactionTime"] !== null) {
            $this->TransactionTime = $param["TransactionTime"];
        }

        if (array_key_exists("UsageStartTime",$param) and $param["UsageStartTime"] !== null) {
            $this->UsageStartTime = $param["UsageStartTime"];
        }

        if (array_key_exists("UsageEndTime",$param) and $param["UsageEndTime"] !== null) {
            $this->UsageEndTime = $param["UsageEndTime"];
        }

        if (array_key_exists("ComponentType",$param) and $param["ComponentType"] !== null) {
            $this->ComponentType = $param["ComponentType"];
        }

        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }

        if (array_key_exists("ComponentListPrice",$param) and $param["ComponentListPrice"] !== null) {
            $this->ComponentListPrice = $param["ComponentListPrice"];
        }

        if (array_key_exists("ComponentPriceMeasurementUnit",$param) and $param["ComponentPriceMeasurementUnit"] !== null) {
            $this->ComponentPriceMeasurementUnit = $param["ComponentPriceMeasurementUnit"];
        }

        if (array_key_exists("ComponentUsage",$param) and $param["ComponentUsage"] !== null) {
            $this->ComponentUsage = $param["ComponentUsage"];
        }

        if (array_key_exists("ComponentUsageUnit",$param) and $param["ComponentUsageUnit"] !== null) {
            $this->ComponentUsageUnit = $param["ComponentUsageUnit"];
        }

        if (array_key_exists("UsageDuration",$param) and $param["UsageDuration"] !== null) {
            $this->UsageDuration = $param["UsageDuration"];
        }

        if (array_key_exists("DurationUnit",$param) and $param["DurationUnit"] !== null) {
            $this->DurationUnit = $param["DurationUnit"];
        }

        if (array_key_exists("OriginalCost",$param) and $param["OriginalCost"] !== null) {
            $this->OriginalCost = $param["OriginalCost"];
        }

        if (array_key_exists("DiscountRate",$param) and $param["DiscountRate"] !== null) {
            $this->DiscountRate = $param["DiscountRate"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("TotalAmountAfterDiscount",$param) and $param["TotalAmountAfterDiscount"] !== null) {
            $this->TotalAmountAfterDiscount = $param["TotalAmountAfterDiscount"];
        }

        if (array_key_exists("VoucherDeduction",$param) and $param["VoucherDeduction"] !== null) {
            $this->VoucherDeduction = $param["VoucherDeduction"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
