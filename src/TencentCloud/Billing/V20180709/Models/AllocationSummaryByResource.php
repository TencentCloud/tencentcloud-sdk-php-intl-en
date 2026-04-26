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
 * Detailed summary of the cost allocation bill by resource
 *
 * @method string getTreeNodeUniqKey() Obtain Unique identifier of a cost allocation unit
 * @method void setTreeNodeUniqKey(string $TreeNodeUniqKey) Set Unique identifier of a cost allocation unit
 * @method string getTreeNodeUniqKeyName() Obtain Name of a cost allocation unit
 * @method void setTreeNodeUniqKeyName(string $TreeNodeUniqKeyName) Set Name of a cost allocation unit
 * @method string getBillDate() Obtain Date: Settlement date
 * @method void setBillDate(string $BillDate) Set Date: Settlement date
 * @method string getPayerUin() Obtain Payer UIN: Account ID of the payer, which is the unique account identifier for the user in Tencent Cloud.
 * @method void setPayerUin(string $PayerUin) Set Payer UIN: Account ID of the payer, which is the unique account identifier for the user in Tencent Cloud.
 * @method string getOwnerUin() Obtain User UIN: Account ID of the actual resource user
 * @method void setOwnerUin(string $OwnerUin) Set User UIN: Account ID of the actual resource user
 * @method string getOperateUin() Obtain Operator account ID (the resource account ID or role ID opened by prepaid resource ordering or postpaid operation)
 * @method void setOperateUin(string $OperateUin) Set Operator account ID (the resource account ID or role ID opened by prepaid resource ordering or postpaid operation)
 * @method string getPayMode() Obtain Billing mode code
 * @method void setPayMode(string $PayMode) Set Billing mode code
 * @method string getPayModeName() Obtain Billing mode: Resource billing mode, which can be monthly subscription or pay-as-you-go.
 * @method void setPayModeName(string $PayModeName) Set Billing mode: Resource billing mode, which can be monthly subscription or pay-as-you-go.
 * @method string getActionType() Obtain Transaction type code
 * @method void setActionType(string $ActionType) Set Transaction type code
 * @method string getActionTypeName() Obtain Transaction type: Detailed transaction type
 * @method void setActionTypeName(string $ActionTypeName) Set Transaction type: Detailed transaction type
 * @method string getBusinessCode() Obtain Product code
 * @method void setBusinessCode(string $BusinessCode) Set Product code
 * @method string getBusinessCodeName() Obtain Product name: Various cloud products purchased by users
 * @method void setBusinessCodeName(string $BusinessCodeName) Set Product name: Various cloud products purchased by users
 * @method string getProductCode() Obtain Subproduct code
 * @method void setProductCode(string $ProductCode) Set Subproduct code
 * @method string getProductCodeName() Obtain Subproduct name: Product subdivision type purchased by the user
 * @method void setProductCodeName(string $ProductCodeName) Set Subproduct name: Product subdivision type purchased by the user
 * @method integer getRegionId() Obtain Region ID
 * @method void setRegionId(integer $RegionId) Set Region ID
 * @method string getRegionName() Obtain Region name: The region where the resource is located
 * @method void setRegionName(string $RegionName) Set Region name: The region where the resource is located
 * @method integer getZoneId() Obtain AZ ID
 * @method void setZoneId(integer $ZoneId) Set AZ ID
 * @method string getZoneName() Obtain Availability zone: The availability zone where the resource is located.
 * @method void setZoneName(string $ZoneName) Set Availability zone: The availability zone where the resource is located.
 * @method string getInstanceType() Obtain Instance type code
 * @method void setInstanceType(string $InstanceType) Set Instance type code
 * @method string getInstanceTypeName() Obtain Instance type: The type of an instance corresponding to the product service purchased, including resource packages, RI, SP, and spot instances. It is displayed as "-" by default for regular instances.
 * @method void setInstanceTypeName(string $InstanceTypeName) Set Instance type: The type of an instance corresponding to the product service purchased, including resource packages, RI, SP, and spot instances. It is displayed as "-" by default for regular instances.
 * @method string getResourceId() Obtain Resource ID: Resources vary by product, and the content is not identical. For example, Cloud Virtual Machine (CVM) corresponds to the instance ID. If the product is split, it shows the split item ID, such as COS bucket ID and CDN domain name.
 * @method void setResourceId(string $ResourceId) Set Resource ID: Resources vary by product, and the content is not identical. For example, Cloud Virtual Machine (CVM) corresponds to the instance ID. If the product is split, it shows the split item ID, such as COS bucket ID and CDN domain name.
 * @method string getResourceName() Obtain Instance name: The name set by the user for the resource in the console, which is empty by default if not set. If the product is split, it shows the split resource alias.
 * @method void setResourceName(string $ResourceName) Set Instance name: The name set by the user for the resource in the console, which is empty by default if not set. If the product is split, it shows the split resource alias.
 * @method array getTag() Obtain Allocation tag: The resource-bound tag
 * @method void setTag(array $Tag) Set Allocation tag: The resource-bound tag
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getProjectName() Obtain Project name: The Project to which a resource belongs, which is independently allocated by the user for the resource in the console. If a resource has not been allocated to an Project, it will be a default Project.
 * @method void setProjectName(string $ProjectName) Set Project name: The Project to which a resource belongs, which is independently allocated by the user for the resource in the console. If a resource has not been allocated to an Project, it will be a default Project.
 * @method integer getAllocationType() Obtain Cost collection type: The source types of fees, including allocated, collection and unallocated.
0 - Allocation 
1 - Collection 
-1 - Unallocated
 * @method void setAllocationType(integer $AllocationType) Set Cost collection type: The source types of fees, including allocated, collection and unallocated.
0 - Allocation 
1 - Collection 
-1 - Unallocated
 * @method string getTotalCost() Obtain Original price of a component: Original Price = Component List Price * Component Usage * Duration of Use (not displayed if the customer enjoys a fixed price/contract price, and not displayed by default in refund scenarios), specified price mode
 * @method void setTotalCost(string $TotalCost) Set Original price of a component: Original Price = Component List Price * Component Usage * Duration of Use (not displayed if the customer enjoys a fixed price/contract price, and not displayed by default in refund scenarios), specified price mode
 * @method string getRiTimeSpan() Obtain Reserved instance deduction duration: The duration of use deducted by reserved instances for this product or service.
 * @method void setRiTimeSpan(string $RiTimeSpan) Set Reserved instance deduction duration: The duration of use deducted by reserved instances for this product or service.
 * @method string getRiCost() Obtain Original price deducted by a reserved instance: The original price of a component deducted by reserved instances for this product or service
 * @method void setRiCost(string $RiCost) Set Original price deducted by a reserved instance: The original price of a component deducted by reserved instances for this product or service
 * @method string getRealTotalCost() Obtain Discounted total: discounted total = (Original Price - Original Price Deducted by a Reserved Instance - Savings Plan Deduction from Original Price) * Discount Rate
 * @method void setRealTotalCost(string $RealTotalCost) Set Discounted total: discounted total = (Original Price - Original Price Deducted by a Reserved Instance - Savings Plan Deduction from Original Price) * Discount Rate
 * @method string getCashPayAmount() Obtain Cash account expenditure (CNY): The amount paid through the cash account
 * @method void setCashPayAmount(string $CashPayAmount) Set Cash account expenditure (CNY): The amount paid through the cash account
 * @method string getVoucherPayAmount() Obtain Promo voucher expenditure (CNY): The amount paid using various vouchers (such as promo vouchers and cash vouchers)
 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set Promo voucher expenditure (CNY): The amount paid using various vouchers (such as promo vouchers and cash vouchers)
 * @method string getIncentivePayAmount() Obtain Gift account expenditure (CNY): The amount paid using free credits
 * @method void setIncentivePayAmount(string $IncentivePayAmount) Set Gift account expenditure (CNY): The amount paid using free credits
 * @method string getTransferPayAmount() Obtain Royalty account expenditure (CNY): The amount paid through the royalty account
 * @method void setTransferPayAmount(string $TransferPayAmount) Set Royalty account expenditure (CNY): The amount paid through the royalty account
 * @method string getSplitItemId() Obtain Split item ID: The ID of the split item involved in the split product, such as COS bucket ID and CDN domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSplitItemId(string $SplitItemId) Set Split item ID: The ID of the split item involved in the split product, such as COS bucket ID and CDN domain name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSplitItemName() Obtain Split item name: The split item involved in the split product
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSplitItemName(string $SplitItemName) Set Split item name: The split item involved in the split product
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFeeBeginTime() Obtain Usage start time: Usage start time
 * @method void setFeeBeginTime(string $FeeBeginTime) Set Usage start time: Usage start time
 * @method string getFeeEndTime() Obtain Usage end time: Product or service usage end time
 * @method void setFeeEndTime(string $FeeEndTime) Set Usage end time: Product or service usage end time
 * @method string getSPCost() Obtain Savings plan deduction from original price: Savings Plan Deduction from Original Price = Monetary Value of Savings Plan Deduction/ Savings Plan Deduction Rate
 * @method void setSPCost(string $SPCost) Set Savings plan deduction from original price: Savings Plan Deduction from Original Price = Monetary Value of Savings Plan Deduction/ Savings Plan Deduction Rate
 * @method string getRegionType() Obtain Domestic and international codes
 * @method void setRegionType(string $RegionType) Set Domestic and international codes
 * @method string getRegionTypeName() Obtain Domestic and international: Resource region type (domestic, international)
 * @method void setRegionTypeName(string $RegionTypeName) Set Domestic and international: Resource region type (domestic, international)
 * @method string getComponentConfig() Obtain Configuration description: Name and usage of each component under the corresponding resource (the total usage if the component is cumulative usage billing type)
 * @method void setComponentConfig(string $ComponentConfig) Set Configuration description: Name and usage of each component under the corresponding resource (the total usage if the component is cumulative usage billing type)
 * @method string getSPDeduction() Obtain SPDeduction
 * @method void setSPDeduction(string $SPDeduction) Set SPDeduction
 * @method string getCurrency() Obtain Currency.
 * @method void setCurrency(string $Currency) Set Currency.
 * @method string getTax() Obtain Tax
 * @method void setTax(string $Tax) Set Tax
 * @method string getTaxRate() Obtain tax rate
 * @method void setTaxRate(string $TaxRate) Set tax rate
 * @method string getCostBeforeTax() Obtain CostBeforeTax
 * @method void setCostBeforeTax(string $CostBeforeTax) Set CostBeforeTax
 * @method string getAmountBeforeTax() Obtain AmountBeforeTax
 * @method void setAmountBeforeTax(string $AmountBeforeTax) Set AmountBeforeTax
 * @method string getBillMonth() Obtain Billing month
 * @method void setBillMonth(string $BillMonth) Set Billing month
 */
class AllocationSummaryByResource extends AbstractModel
{
    /**
     * @var string Unique identifier of a cost allocation unit
     */
    public $TreeNodeUniqKey;

    /**
     * @var string Name of a cost allocation unit
     */
    public $TreeNodeUniqKeyName;

    /**
     * @var string Date: Settlement date
     */
    public $BillDate;

    /**
     * @var string Payer UIN: Account ID of the payer, which is the unique account identifier for the user in Tencent Cloud.
     */
    public $PayerUin;

    /**
     * @var string User UIN: Account ID of the actual resource user
     */
    public $OwnerUin;

    /**
     * @var string Operator account ID (the resource account ID or role ID opened by prepaid resource ordering or postpaid operation)
     */
    public $OperateUin;

    /**
     * @var string Billing mode code
     */
    public $PayMode;

    /**
     * @var string Billing mode: Resource billing mode, which can be monthly subscription or pay-as-you-go.
     */
    public $PayModeName;

    /**
     * @var string Transaction type code
     */
    public $ActionType;

    /**
     * @var string Transaction type: Detailed transaction type
     */
    public $ActionTypeName;

    /**
     * @var string Product code
     */
    public $BusinessCode;

    /**
     * @var string Product name: Various cloud products purchased by users
     */
    public $BusinessCodeName;

    /**
     * @var string Subproduct code
     */
    public $ProductCode;

    /**
     * @var string Subproduct name: Product subdivision type purchased by the user
     */
    public $ProductCodeName;

    /**
     * @var integer Region ID
     */
    public $RegionId;

    /**
     * @var string Region name: The region where the resource is located
     */
    public $RegionName;

    /**
     * @var integer AZ ID
     */
    public $ZoneId;

    /**
     * @var string Availability zone: The availability zone where the resource is located.
     */
    public $ZoneName;

    /**
     * @var string Instance type code
     */
    public $InstanceType;

    /**
     * @var string Instance type: The type of an instance corresponding to the product service purchased, including resource packages, RI, SP, and spot instances. It is displayed as "-" by default for regular instances.
     */
    public $InstanceTypeName;

    /**
     * @var string Resource ID: Resources vary by product, and the content is not identical. For example, Cloud Virtual Machine (CVM) corresponds to the instance ID. If the product is split, it shows the split item ID, such as COS bucket ID and CDN domain name.
     */
    public $ResourceId;

    /**
     * @var string Instance name: The name set by the user for the resource in the console, which is empty by default if not set. If the product is split, it shows the split resource alias.
     */
    public $ResourceName;

    /**
     * @var array Allocation tag: The resource-bound tag
     */
    public $Tag;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var string Project name: The Project to which a resource belongs, which is independently allocated by the user for the resource in the console. If a resource has not been allocated to an Project, it will be a default Project.
     */
    public $ProjectName;

    /**
     * @var integer Cost collection type: The source types of fees, including allocated, collection and unallocated.
0 - Allocation 
1 - Collection 
-1 - Unallocated
     */
    public $AllocationType;

    /**
     * @var string Original price of a component: Original Price = Component List Price * Component Usage * Duration of Use (not displayed if the customer enjoys a fixed price/contract price, and not displayed by default in refund scenarios), specified price mode
     */
    public $TotalCost;

    /**
     * @var string Reserved instance deduction duration: The duration of use deducted by reserved instances for this product or service.
     */
    public $RiTimeSpan;

    /**
     * @var string Original price deducted by a reserved instance: The original price of a component deducted by reserved instances for this product or service
     */
    public $RiCost;

    /**
     * @var string Discounted total: discounted total = (Original Price - Original Price Deducted by a Reserved Instance - Savings Plan Deduction from Original Price) * Discount Rate
     */
    public $RealTotalCost;

    /**
     * @var string Cash account expenditure (CNY): The amount paid through the cash account
     */
    public $CashPayAmount;

    /**
     * @var string Promo voucher expenditure (CNY): The amount paid using various vouchers (such as promo vouchers and cash vouchers)
     */
    public $VoucherPayAmount;

    /**
     * @var string Gift account expenditure (CNY): The amount paid using free credits
     */
    public $IncentivePayAmount;

    /**
     * @var string Royalty account expenditure (CNY): The amount paid through the royalty account
     */
    public $TransferPayAmount;

    /**
     * @var string Split item ID: The ID of the split item involved in the split product, such as COS bucket ID and CDN domain name
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $SplitItemId;

    /**
     * @var string Split item name: The split item involved in the split product
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $SplitItemName;

    /**
     * @var string Usage start time: Usage start time
     */
    public $FeeBeginTime;

    /**
     * @var string Usage end time: Product or service usage end time
     */
    public $FeeEndTime;

    /**
     * @var string Savings plan deduction from original price: Savings Plan Deduction from Original Price = Monetary Value of Savings Plan Deduction/ Savings Plan Deduction Rate
     */
    public $SPCost;

    /**
     * @var string Domestic and international codes
     */
    public $RegionType;

    /**
     * @var string Domestic and international: Resource region type (domestic, international)
     */
    public $RegionTypeName;

    /**
     * @var string Configuration description: Name and usage of each component under the corresponding resource (the total usage if the component is cumulative usage billing type)
     */
    public $ComponentConfig;

    /**
     * @var string SPDeduction
     */
    public $SPDeduction;

    /**
     * @var string Currency.
     */
    public $Currency;

    /**
     * @var string Tax
     */
    public $Tax;

    /**
     * @var string tax rate
     */
    public $TaxRate;

    /**
     * @var string CostBeforeTax
     */
    public $CostBeforeTax;

    /**
     * @var string AmountBeforeTax
     */
    public $AmountBeforeTax;

    /**
     * @var string Billing month
     */
    public $BillMonth;

    /**
     * @param string $TreeNodeUniqKey Unique identifier of a cost allocation unit
     * @param string $TreeNodeUniqKeyName Name of a cost allocation unit
     * @param string $BillDate Date: Settlement date
     * @param string $PayerUin Payer UIN: Account ID of the payer, which is the unique account identifier for the user in Tencent Cloud.
     * @param string $OwnerUin User UIN: Account ID of the actual resource user
     * @param string $OperateUin Operator account ID (the resource account ID or role ID opened by prepaid resource ordering or postpaid operation)
     * @param string $PayMode Billing mode code
     * @param string $PayModeName Billing mode: Resource billing mode, which can be monthly subscription or pay-as-you-go.
     * @param string $ActionType Transaction type code
     * @param string $ActionTypeName Transaction type: Detailed transaction type
     * @param string $BusinessCode Product code
     * @param string $BusinessCodeName Product name: Various cloud products purchased by users
     * @param string $ProductCode Subproduct code
     * @param string $ProductCodeName Subproduct name: Product subdivision type purchased by the user
     * @param integer $RegionId Region ID
     * @param string $RegionName Region name: The region where the resource is located
     * @param integer $ZoneId AZ ID
     * @param string $ZoneName Availability zone: The availability zone where the resource is located.
     * @param string $InstanceType Instance type code
     * @param string $InstanceTypeName Instance type: The type of an instance corresponding to the product service purchased, including resource packages, RI, SP, and spot instances. It is displayed as "-" by default for regular instances.
     * @param string $ResourceId Resource ID: Resources vary by product, and the content is not identical. For example, Cloud Virtual Machine (CVM) corresponds to the instance ID. If the product is split, it shows the split item ID, such as COS bucket ID and CDN domain name.
     * @param string $ResourceName Instance name: The name set by the user for the resource in the console, which is empty by default if not set. If the product is split, it shows the split resource alias.
     * @param array $Tag Allocation tag: The resource-bound tag
     * @param integer $ProjectId Project ID
     * @param string $ProjectName Project name: The Project to which a resource belongs, which is independently allocated by the user for the resource in the console. If a resource has not been allocated to an Project, it will be a default Project.
     * @param integer $AllocationType Cost collection type: The source types of fees, including allocated, collection and unallocated.
0 - Allocation 
1 - Collection 
-1 - Unallocated
     * @param string $TotalCost Original price of a component: Original Price = Component List Price * Component Usage * Duration of Use (not displayed if the customer enjoys a fixed price/contract price, and not displayed by default in refund scenarios), specified price mode
     * @param string $RiTimeSpan Reserved instance deduction duration: The duration of use deducted by reserved instances for this product or service.
     * @param string $RiCost Original price deducted by a reserved instance: The original price of a component deducted by reserved instances for this product or service
     * @param string $RealTotalCost Discounted total: discounted total = (Original Price - Original Price Deducted by a Reserved Instance - Savings Plan Deduction from Original Price) * Discount Rate
     * @param string $CashPayAmount Cash account expenditure (CNY): The amount paid through the cash account
     * @param string $VoucherPayAmount Promo voucher expenditure (CNY): The amount paid using various vouchers (such as promo vouchers and cash vouchers)
     * @param string $IncentivePayAmount Gift account expenditure (CNY): The amount paid using free credits
     * @param string $TransferPayAmount Royalty account expenditure (CNY): The amount paid through the royalty account
     * @param string $SplitItemId Split item ID: The ID of the split item involved in the split product, such as COS bucket ID and CDN domain name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SplitItemName Split item name: The split item involved in the split product
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FeeBeginTime Usage start time: Usage start time
     * @param string $FeeEndTime Usage end time: Product or service usage end time
     * @param string $SPCost Savings plan deduction from original price: Savings Plan Deduction from Original Price = Monetary Value of Savings Plan Deduction/ Savings Plan Deduction Rate
     * @param string $RegionType Domestic and international codes
     * @param string $RegionTypeName Domestic and international: Resource region type (domestic, international)
     * @param string $ComponentConfig Configuration description: Name and usage of each component under the corresponding resource (the total usage if the component is cumulative usage billing type)
     * @param string $SPDeduction SPDeduction
     * @param string $Currency Currency.
     * @param string $Tax Tax
     * @param string $TaxRate tax rate
     * @param string $CostBeforeTax CostBeforeTax
     * @param string $AmountBeforeTax AmountBeforeTax
     * @param string $BillMonth Billing month
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
        if (array_key_exists("TreeNodeUniqKey",$param) and $param["TreeNodeUniqKey"] !== null) {
            $this->TreeNodeUniqKey = $param["TreeNodeUniqKey"];
        }

        if (array_key_exists("TreeNodeUniqKeyName",$param) and $param["TreeNodeUniqKeyName"] !== null) {
            $this->TreeNodeUniqKeyName = $param["TreeNodeUniqKeyName"];
        }

        if (array_key_exists("BillDate",$param) and $param["BillDate"] !== null) {
            $this->BillDate = $param["BillDate"];
        }

        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PayModeName",$param) and $param["PayModeName"] !== null) {
            $this->PayModeName = $param["PayModeName"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ActionTypeName",$param) and $param["ActionTypeName"] !== null) {
            $this->ActionTypeName = $param["ActionTypeName"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("BusinessCodeName",$param) and $param["BusinessCodeName"] !== null) {
            $this->BusinessCodeName = $param["BusinessCodeName"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("ProductCodeName",$param) and $param["ProductCodeName"] !== null) {
            $this->ProductCodeName = $param["ProductCodeName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceTypeName",$param) and $param["InstanceTypeName"] !== null) {
            $this->InstanceTypeName = $param["InstanceTypeName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = [];
            foreach ($param["Tag"] as $key => $value){
                $obj = new BillTag();
                $obj->deserialize($value);
                array_push($this->Tag, $obj);
            }
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("AllocationType",$param) and $param["AllocationType"] !== null) {
            $this->AllocationType = $param["AllocationType"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }

        if (array_key_exists("RiTimeSpan",$param) and $param["RiTimeSpan"] !== null) {
            $this->RiTimeSpan = $param["RiTimeSpan"];
        }

        if (array_key_exists("RiCost",$param) and $param["RiCost"] !== null) {
            $this->RiCost = $param["RiCost"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("CashPayAmount",$param) and $param["CashPayAmount"] !== null) {
            $this->CashPayAmount = $param["CashPayAmount"];
        }

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("IncentivePayAmount",$param) and $param["IncentivePayAmount"] !== null) {
            $this->IncentivePayAmount = $param["IncentivePayAmount"];
        }

        if (array_key_exists("TransferPayAmount",$param) and $param["TransferPayAmount"] !== null) {
            $this->TransferPayAmount = $param["TransferPayAmount"];
        }

        if (array_key_exists("SplitItemId",$param) and $param["SplitItemId"] !== null) {
            $this->SplitItemId = $param["SplitItemId"];
        }

        if (array_key_exists("SplitItemName",$param) and $param["SplitItemName"] !== null) {
            $this->SplitItemName = $param["SplitItemName"];
        }

        if (array_key_exists("FeeBeginTime",$param) and $param["FeeBeginTime"] !== null) {
            $this->FeeBeginTime = $param["FeeBeginTime"];
        }

        if (array_key_exists("FeeEndTime",$param) and $param["FeeEndTime"] !== null) {
            $this->FeeEndTime = $param["FeeEndTime"];
        }

        if (array_key_exists("SPCost",$param) and $param["SPCost"] !== null) {
            $this->SPCost = $param["SPCost"];
        }

        if (array_key_exists("RegionType",$param) and $param["RegionType"] !== null) {
            $this->RegionType = $param["RegionType"];
        }

        if (array_key_exists("RegionTypeName",$param) and $param["RegionTypeName"] !== null) {
            $this->RegionTypeName = $param["RegionTypeName"];
        }

        if (array_key_exists("ComponentConfig",$param) and $param["ComponentConfig"] !== null) {
            $this->ComponentConfig = $param["ComponentConfig"];
        }

        if (array_key_exists("SPDeduction",$param) and $param["SPDeduction"] !== null) {
            $this->SPDeduction = $param["SPDeduction"];
        }

        if (array_key_exists("Currency",$param) and $param["Currency"] !== null) {
            $this->Currency = $param["Currency"];
        }

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
        }

        if (array_key_exists("TaxRate",$param) and $param["TaxRate"] !== null) {
            $this->TaxRate = $param["TaxRate"];
        }

        if (array_key_exists("CostBeforeTax",$param) and $param["CostBeforeTax"] !== null) {
            $this->CostBeforeTax = $param["CostBeforeTax"];
        }

        if (array_key_exists("AmountBeforeTax",$param) and $param["AmountBeforeTax"] !== null) {
            $this->AmountBeforeTax = $param["AmountBeforeTax"];
        }

        if (array_key_exists("BillMonth",$param) and $param["BillMonth"] !== null) {
            $this->BillMonth = $param["BillMonth"];
        }
    }
}
