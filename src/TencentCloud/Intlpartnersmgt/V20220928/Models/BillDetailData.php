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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Customer bill details
 *
 * @method integer getPayerAccountId() Obtain reseller account.
 * @method void setPayerAccountId(integer $PayerAccountId) Set reseller account.
 * @method integer getOwnerAccountId() Obtain Subaccount.
 * @method void setOwnerAccountId(integer $OwnerAccountId) Set Subaccount.
 * @method integer getOperatorAccountId() Obtain Operator account.
 * @method void setOperatorAccountId(integer $OperatorAccountId) Set Operator account.
 * @method string getProductName() Obtain Product name.
 * @method void setProductName(string $ProductName) Set Product name.
 * @method string getBillingMode() Obtain Billing mode
.
Monthly subscription (annual and monthly).
Pay-As-You-Go resources.
Standard ri reserved instance.
 * @method void setBillingMode(string $BillingMode) Set Billing mode
.
Monthly subscription (annual and monthly).
Pay-As-You-Go resources.
Standard ri reserved instance.
 * @method string getProjectName() Obtain Project name.

 * @method void setProjectName(string $ProjectName) Set Project name.

 * @method string getRegion() Obtain Resource region.
 * @method void setRegion(string $Region) Set Resource region.
 * @method string getAvailabilityZone() Obtain Resource available zone.
 * @method void setAvailabilityZone(string $AvailabilityZone) Set Resource available zone.
 * @method string getInstanceId() Obtain Instance id.
 * @method void setInstanceId(string $InstanceId) Set Instance id.
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method string getSubProductName() Obtain Sub-Product name
.

 * @method void setSubProductName(string $SubProductName) Set Sub-Product name
.

 * @method string getTransactionType() Obtain Settlement type.
 * @method void setTransactionType(string $TransactionType) Set Settlement type.
 * @method string getTransactionId() Obtain <Transaction id>.
 * @method void setTransactionId(string $TransactionId) Set <Transaction id>.
 * @method string getTransactionTime() Obtain Settlement time.

 * @method void setTransactionTime(string $TransactionTime) Set Settlement time.

 * @method string getUsageStartTime() Obtain <Resource start time>.
 * @method void setUsageStartTime(string $UsageStartTime) Set <Resource start time>.
 * @method string getUsageEndTime() Obtain <Resource end usage time>.
 * @method void setUsageEndTime(string $UsageEndTime) Set <Resource end usage time>.
 * @method string getComponentType() Obtain Component.
 * @method void setComponentType(string $ComponentType) Set Component.
 * @method string getComponentName() Obtain Component name.
 * @method void setComponentName(string $ComponentName) Set Component name.
 * @method string getComponentListPrice() Obtain Component list price.
 * @method void setComponentListPrice(string $ComponentListPrice) Set Component list price.
 * @method string getComponentPriceMeasurementUnit() Obtain Price unit.
 * @method void setComponentPriceMeasurementUnit(string $ComponentPriceMeasurementUnit) Set Price unit.
 * @method string getComponentUsage() Obtain Component usage.
 * @method void setComponentUsage(string $ComponentUsage) Set Component usage.
 * @method string getComponentUsageUnit() Obtain Component usage unit.
 * @method void setComponentUsageUnit(string $ComponentUsageUnit) Set Component usage unit.
 * @method string getUsageDuration() Obtain Resource usage duration.
 * @method void setUsageDuration(string $UsageDuration) Set Resource usage duration.
 * @method string getDurationUnit() Obtain duration unit.
 * @method void setDurationUnit(string $DurationUnit) Set duration unit.
 * @method string getOriginalCost() Obtain Total original price.
Original cost = component list price * component usage * usage duration.
 * @method void setOriginalCost(string $OriginalCost) Set Total original price.
Original cost = component list price * component usage * usage duration.
 * @method string getDiscountRate() Obtain Discount (default is 1) - abandoned.
 * @method void setDiscountRate(string $DiscountRate) Set Discount (default is 1) - abandoned.
 * @method string getCurrency() Obtain Currency.
 * @method void setCurrency(string $Currency) Set Currency.
 * @method string getTotalAmountAfterDiscount() Obtain Total cost after discount.
 * @method void setTotalAmountAfterDiscount(string $TotalAmountAfterDiscount) Set Total cost after discount.
 * @method string getVoucherDeduction() Obtain Voucher deduction amount.
 * @method void setVoucherDeduction(string $VoucherDeduction) Set Voucher deduction amount.
 * @method string getTotalCost() Obtain = Total Amount After Discount - Voucher Deduction
 * @method void setTotalCost(string $TotalCost) Set = Total Amount After Discount - Voucher Deduction
 * @method string getId() Obtain Identifier (id).
 * @method void setId(string $Id) Set Identifier (id).
 * @method string getCustomerDiscountRate() Obtain customer discount rate. The discount rate applied to the reseller's customer, which set by reseller, default value equal to 1.
 * @method void setCustomerDiscountRate(string $CustomerDiscountRate) Set customer discount rate. The discount rate applied to the reseller's customer, which set by reseller, default value equal to 1.
 */
class BillDetailData extends AbstractModel
{
    /**
     * @var integer reseller account.
     */
    public $PayerAccountId;

    /**
     * @var integer Subaccount.
     */
    public $OwnerAccountId;

    /**
     * @var integer Operator account.
     */
    public $OperatorAccountId;

    /**
     * @var string Product name.
     */
    public $ProductName;

    /**
     * @var string Billing mode
.
Monthly subscription (annual and monthly).
Pay-As-You-Go resources.
Standard ri reserved instance.
     */
    public $BillingMode;

    /**
     * @var string Project name.

     */
    public $ProjectName;

    /**
     * @var string Resource region.
     */
    public $Region;

    /**
     * @var string Resource available zone.
     */
    public $AvailabilityZone;

    /**
     * @var string Instance id.
     */
    public $InstanceId;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var string Sub-Product name
.

     */
    public $SubProductName;

    /**
     * @var string Settlement type.
     */
    public $TransactionType;

    /**
     * @var string <Transaction id>.
     */
    public $TransactionId;

    /**
     * @var string Settlement time.

     */
    public $TransactionTime;

    /**
     * @var string <Resource start time>.
     */
    public $UsageStartTime;

    /**
     * @var string <Resource end usage time>.
     */
    public $UsageEndTime;

    /**
     * @var string Component.
     */
    public $ComponentType;

    /**
     * @var string Component name.
     */
    public $ComponentName;

    /**
     * @var string Component list price.
     */
    public $ComponentListPrice;

    /**
     * @var string Price unit.
     */
    public $ComponentPriceMeasurementUnit;

    /**
     * @var string Component usage.
     */
    public $ComponentUsage;

    /**
     * @var string Component usage unit.
     */
    public $ComponentUsageUnit;

    /**
     * @var string Resource usage duration.
     */
    public $UsageDuration;

    /**
     * @var string duration unit.
     */
    public $DurationUnit;

    /**
     * @var string Total original price.
Original cost = component list price * component usage * usage duration.
     */
    public $OriginalCost;

    /**
     * @var string Discount (default is 1) - abandoned.
     */
    public $DiscountRate;

    /**
     * @var string Currency.
     */
    public $Currency;

    /**
     * @var string Total cost after discount.
     */
    public $TotalAmountAfterDiscount;

    /**
     * @var string Voucher deduction amount.
     */
    public $VoucherDeduction;

    /**
     * @var string = Total Amount After Discount - Voucher Deduction
     */
    public $TotalCost;

    /**
     * @var string Identifier (id).
     */
    public $Id;

    /**
     * @var string customer discount rate. The discount rate applied to the reseller's customer, which set by reseller, default value equal to 1.
     */
    public $CustomerDiscountRate;

    /**
     * @param integer $PayerAccountId reseller account.
     * @param integer $OwnerAccountId Subaccount.
     * @param integer $OperatorAccountId Operator account.
     * @param string $ProductName Product name.
     * @param string $BillingMode Billing mode
.
Monthly subscription (annual and monthly).
Pay-As-You-Go resources.
Standard ri reserved instance.
     * @param string $ProjectName Project name.

     * @param string $Region Resource region.
     * @param string $AvailabilityZone Resource available zone.
     * @param string $InstanceId Instance id.
     * @param string $InstanceName Instance name.
     * @param string $SubProductName Sub-Product name
.

     * @param string $TransactionType Settlement type.
     * @param string $TransactionId <Transaction id>.
     * @param string $TransactionTime Settlement time.

     * @param string $UsageStartTime <Resource start time>.
     * @param string $UsageEndTime <Resource end usage time>.
     * @param string $ComponentType Component.
     * @param string $ComponentName Component name.
     * @param string $ComponentListPrice Component list price.
     * @param string $ComponentPriceMeasurementUnit Price unit.
     * @param string $ComponentUsage Component usage.
     * @param string $ComponentUsageUnit Component usage unit.
     * @param string $UsageDuration Resource usage duration.
     * @param string $DurationUnit duration unit.
     * @param string $OriginalCost Total original price.
Original cost = component list price * component usage * usage duration.
     * @param string $DiscountRate Discount (default is 1) - abandoned.
     * @param string $Currency Currency.
     * @param string $TotalAmountAfterDiscount Total cost after discount.
     * @param string $VoucherDeduction Voucher deduction amount.
     * @param string $TotalCost = Total Amount After Discount - Voucher Deduction
     * @param string $Id Identifier (id).
     * @param string $CustomerDiscountRate customer discount rate. The discount rate applied to the reseller's customer, which set by reseller, default value equal to 1.
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

        if (array_key_exists("CustomerDiscountRate",$param) and $param["CustomerDiscountRate"] !== null) {
            $this->CustomerDiscountRate = $param["CustomerDiscountRate"];
        }
    }
}
