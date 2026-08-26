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
 * Customer Bill Details
 *
 * @method integer getPayerAccountId() Obtain <p> Distributor account</p>
 * @method void setPayerAccountId(integer $PayerAccountId) Set <p> Distributor account</p>
 * @method integer getOwnerAccountId() Obtain <p>Sub-Customer account</p>
 * @method void setOwnerAccountId(integer $OwnerAccountId) Set <p>Sub-Customer account</p>
 * @method integer getOperatorAccountId() Obtain <p>Operator account</p>
 * @method void setOperatorAccountId(integer $OperatorAccountId) Set <p>Operator account</p>
 * @method string getProductName() Obtain <p>Product name.</p>
 * @method void setProductName(string $ProductName) Set <p>Product name.</p>
 * @method string getBillingMode() Obtain <p>Billing mode</p><p>Enumeration values:</p><ul><li>yearly/monthly subscription</li><li>Pay-As-You-Go resources</li></ul>
 * @method void setBillingMode(string $BillingMode) Set <p>Billing mode</p><p>Enumeration values:</p><ul><li>yearly/monthly subscription</li><li>Pay-As-You-Go resources</li></ul>
 * @method string getProjectName() Obtain <p>Project name.</p>
 * @method void setProjectName(string $ProjectName) Set <p>Project name.</p>
 * @method string getRegion() Obtain <p>Associated region of the resource</p>
 * @method void setRegion(string $Region) Set <p>Associated region of the resource</p>
 * @method string getAvailabilityZone() Obtain <p>Availability zone of resource</p>
 * @method void setAvailabilityZone(string $AvailabilityZone) Set <p>Availability zone of resource</p>
 * @method string getInstanceId() Obtain <p>Instance ID.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Instance ID.</p>
 * @method string getInstanceName() Obtain <p>Instance name.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name.</p>
 * @method string getSubProductName() Obtain <p>Sub-product name</p>
 * @method void setSubProductName(string $SubProductName) Set <p>Sub-product name</p>
 * @method string getTransactionType() Obtain <p>Settlement type</p>
 * @method void setTransactionType(string $TransactionType) Set <p>Settlement type</p>
 * @method string getTransactionId() Obtain <p>Transaction log ID</p>
 * @method void setTransactionId(string $TransactionId) Set <p>Transaction log ID</p>
 * @method string getTransactionTime() Obtain <p>Time of settlement</p>
 * @method void setTransactionTime(string $TransactionTime) Set <p>Time of settlement</p>
 * @method string getUsageStartTime() Obtain <p>Resource usage start time</p>
 * @method void setUsageStartTime(string $UsageStartTime) Set <p>Resource usage start time</p>
 * @method string getUsageEndTime() Obtain <p>Resource usage end time</p>
 * @method void setUsageEndTime(string $UsageEndTime) Set <p>Resource usage end time</p>
 * @method string getComponentType() Obtain <p>Component</p>
 * @method void setComponentType(string $ComponentType) Set <p>Component</p>
 * @method string getComponentName() Obtain <p>Component name</p>
 * @method void setComponentName(string $ComponentName) Set <p>Component name</p>
 * @method string getComponentListPrice() Obtain <p>Component list price</p>
 * @method void setComponentListPrice(string $ComponentListPrice) Set <p>Component list price</p>
 * @method string getComponentPriceMeasurementUnit() Obtain <p>Price unit</p>
 * @method void setComponentPriceMeasurementUnit(string $ComponentPriceMeasurementUnit) Set <p>Price unit</p>
 * @method string getComponentUsage() Obtain <p>Component usage</p>
 * @method void setComponentUsage(string $ComponentUsage) Set <p>Component usage</p>
 * @method string getComponentUsageUnit() Obtain <p>Component usage unit</p>
 * @method void setComponentUsageUnit(string $ComponentUsageUnit) Set <p>Component usage unit</p>
 * @method string getUsageDuration() Obtain <p>Resource usage duration</p>
 * @method void setUsageDuration(string $UsageDuration) Set <p>Resource usage duration</p>
 * @method string getDurationUnit() Obtain <p>Duration unit</p>
 * @method void setDurationUnit(string $DurationUnit) Set <p>Duration unit</p>
 * @method string getOriginalCost() Obtain <p>Original total price<br>Original Cost = Component List Price * Component Usage * Usage Duration</p>
 * @method void setOriginalCost(string $OriginalCost) Set <p>Original total price<br>Original Cost = Component List Price * Component Usage * Usage Duration</p>
 * @method string getDiscountRate() Obtain <p>Discount (default: 1) - abandoned</p>
 * @method void setDiscountRate(string $DiscountRate) Set <p>Discount (default: 1) - abandoned</p>
 * @method string getCurrency() Obtain <p>Currency.</p>
 * @method void setCurrency(string $Currency) Set <p>Currency.</p>
 * @method string getTotalAmountAfterDiscount() Obtain <p>Total cost after discount</p>
 * @method void setTotalAmountAfterDiscount(string $TotalAmountAfterDiscount) Set <p>Total cost after discount</p>
 * @method string getVoucherDeduction() Obtain <p>Voucher deducted amount</p>
 * @method void setVoucherDeduction(string $VoucherDeduction) Set <p>Voucher deducted amount</p>
 * @method string getTotalCost() Obtain <p>= Total Amount After Discount - Voucher Deduction</p>
 * @method void setTotalCost(string $TotalCost) Set <p>= Total Amount After Discount - Voucher Deduction</p>
 * @method string getId() Obtain <p>id</p>
 * @method void setId(string $Id) Set <p>id</p>
 * @method string getCustomerDiscountRate() Obtain <p>customer discount rate. The discount rate for customers of resellers, set by the reseller. The default value is 1.</p>
 * @method void setCustomerDiscountRate(string $CustomerDiscountRate) Set <p>customer discount rate. The discount rate for customers of resellers, set by the reseller. The default value is 1.</p>
 * @method string getBusinessCode() Obtain <p>Product code</p>
 * @method void setBusinessCode(string $BusinessCode) Set <p>Product code</p>
 * @method string getProductCode() Obtain <p>Sub-product code</p>
 * @method void setProductCode(string $ProductCode) Set <p>Sub-product code</p>
 * @method string getComponentCode() Obtain <p>Component type code</p>
 * @method void setComponentCode(string $ComponentCode) Set <p>Component type code</p>
 * @method string getItemCode() Obtain <p>Component code</p>
 * @method void setItemCode(string $ItemCode) Set <p>Component code</p>
 */
class BillDetailData extends AbstractModel
{
    /**
     * @var integer <p> Distributor account</p>
     */
    public $PayerAccountId;

    /**
     * @var integer <p>Sub-Customer account</p>
     */
    public $OwnerAccountId;

    /**
     * @var integer <p>Operator account</p>
     */
    public $OperatorAccountId;

    /**
     * @var string <p>Product name.</p>
     */
    public $ProductName;

    /**
     * @var string <p>Billing mode</p><p>Enumeration values:</p><ul><li>yearly/monthly subscription</li><li>Pay-As-You-Go resources</li></ul>
     */
    public $BillingMode;

    /**
     * @var string <p>Project name.</p>
     */
    public $ProjectName;

    /**
     * @var string <p>Associated region of the resource</p>
     */
    public $Region;

    /**
     * @var string <p>Availability zone of resource</p>
     */
    public $AvailabilityZone;

    /**
     * @var string <p>Instance ID.</p>
     */
    public $InstanceId;

    /**
     * @var string <p>Instance name.</p>
     */
    public $InstanceName;

    /**
     * @var string <p>Sub-product name</p>
     */
    public $SubProductName;

    /**
     * @var string <p>Settlement type</p>
     */
    public $TransactionType;

    /**
     * @var string <p>Transaction log ID</p>
     */
    public $TransactionId;

    /**
     * @var string <p>Time of settlement</p>
     */
    public $TransactionTime;

    /**
     * @var string <p>Resource usage start time</p>
     */
    public $UsageStartTime;

    /**
     * @var string <p>Resource usage end time</p>
     */
    public $UsageEndTime;

    /**
     * @var string <p>Component</p>
     */
    public $ComponentType;

    /**
     * @var string <p>Component name</p>
     */
    public $ComponentName;

    /**
     * @var string <p>Component list price</p>
     */
    public $ComponentListPrice;

    /**
     * @var string <p>Price unit</p>
     */
    public $ComponentPriceMeasurementUnit;

    /**
     * @var string <p>Component usage</p>
     */
    public $ComponentUsage;

    /**
     * @var string <p>Component usage unit</p>
     */
    public $ComponentUsageUnit;

    /**
     * @var string <p>Resource usage duration</p>
     */
    public $UsageDuration;

    /**
     * @var string <p>Duration unit</p>
     */
    public $DurationUnit;

    /**
     * @var string <p>Original total price<br>Original Cost = Component List Price * Component Usage * Usage Duration</p>
     */
    public $OriginalCost;

    /**
     * @var string <p>Discount (default: 1) - abandoned</p>
     */
    public $DiscountRate;

    /**
     * @var string <p>Currency.</p>
     */
    public $Currency;

    /**
     * @var string <p>Total cost after discount</p>
     */
    public $TotalAmountAfterDiscount;

    /**
     * @var string <p>Voucher deducted amount</p>
     */
    public $VoucherDeduction;

    /**
     * @var string <p>= Total Amount After Discount - Voucher Deduction</p>
     */
    public $TotalCost;

    /**
     * @var string <p>id</p>
     */
    public $Id;

    /**
     * @var string <p>customer discount rate. The discount rate for customers of resellers, set by the reseller. The default value is 1.</p>
     */
    public $CustomerDiscountRate;

    /**
     * @var string <p>Product code</p>
     */
    public $BusinessCode;

    /**
     * @var string <p>Sub-product code</p>
     */
    public $ProductCode;

    /**
     * @var string <p>Component type code</p>
     */
    public $ComponentCode;

    /**
     * @var string <p>Component code</p>
     */
    public $ItemCode;

    /**
     * @param integer $PayerAccountId <p> Distributor account</p>
     * @param integer $OwnerAccountId <p>Sub-Customer account</p>
     * @param integer $OperatorAccountId <p>Operator account</p>
     * @param string $ProductName <p>Product name.</p>
     * @param string $BillingMode <p>Billing mode</p><p>Enumeration values:</p><ul><li>yearly/monthly subscription</li><li>Pay-As-You-Go resources</li></ul>
     * @param string $ProjectName <p>Project name.</p>
     * @param string $Region <p>Associated region of the resource</p>
     * @param string $AvailabilityZone <p>Availability zone of resource</p>
     * @param string $InstanceId <p>Instance ID.</p>
     * @param string $InstanceName <p>Instance name.</p>
     * @param string $SubProductName <p>Sub-product name</p>
     * @param string $TransactionType <p>Settlement type</p>
     * @param string $TransactionId <p>Transaction log ID</p>
     * @param string $TransactionTime <p>Time of settlement</p>
     * @param string $UsageStartTime <p>Resource usage start time</p>
     * @param string $UsageEndTime <p>Resource usage end time</p>
     * @param string $ComponentType <p>Component</p>
     * @param string $ComponentName <p>Component name</p>
     * @param string $ComponentListPrice <p>Component list price</p>
     * @param string $ComponentPriceMeasurementUnit <p>Price unit</p>
     * @param string $ComponentUsage <p>Component usage</p>
     * @param string $ComponentUsageUnit <p>Component usage unit</p>
     * @param string $UsageDuration <p>Resource usage duration</p>
     * @param string $DurationUnit <p>Duration unit</p>
     * @param string $OriginalCost <p>Original total price<br>Original Cost = Component List Price * Component Usage * Usage Duration</p>
     * @param string $DiscountRate <p>Discount (default: 1) - abandoned</p>
     * @param string $Currency <p>Currency.</p>
     * @param string $TotalAmountAfterDiscount <p>Total cost after discount</p>
     * @param string $VoucherDeduction <p>Voucher deducted amount</p>
     * @param string $TotalCost <p>= Total Amount After Discount - Voucher Deduction</p>
     * @param string $Id <p>id</p>
     * @param string $CustomerDiscountRate <p>customer discount rate. The discount rate for customers of resellers, set by the reseller. The default value is 1.</p>
     * @param string $BusinessCode <p>Product code</p>
     * @param string $ProductCode <p>Sub-product code</p>
     * @param string $ComponentCode <p>Component type code</p>
     * @param string $ItemCode <p>Component code</p>
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

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("ComponentCode",$param) and $param["ComponentCode"] !== null) {
            $this->ComponentCode = $param["ComponentCode"];
        }

        if (array_key_exists("ItemCode",$param) and $param["ItemCode"] !== null) {
            $this->ItemCode = $param["ItemCode"];
        }
    }
}
