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
 * Summary objects for a reseller bill
 *
 * @method string getBusinessCodeName() Obtain Product name: The name of a Tencent Cloud product purchased by the user, such as CVM.
 * @method void setBusinessCodeName(string $BusinessCodeName) Set Product name: The name of a Tencent Cloud product purchased by the user, such as CVM.
 * @method string getProductCodeName() Obtain Subproduct name: The subcategory of a Tencent Cloud product purchased by the user, such as CVM - Standard S1.
 * @method void setProductCodeName(string $ProductCodeName) Set Subproduct name: The subcategory of a Tencent Cloud product purchased by the user, such as CVM - Standard S1.
 * @method string getPayModeName() Obtain Billing mode: The billing mode, which can be monthly subscription or pay-as-you-go.
 * @method void setPayModeName(string $PayModeName) Set Billing mode: The billing mode, which can be monthly subscription or pay-as-you-go.
 * @method string getProjectName() Obtain Project Name: The project to which a resource belongs, which is user-designated. If a resource has not been assigned to a project, it will automatically belong to the default project.
 * @method void setProjectName(string $ProjectName) Set Project Name: The project to which a resource belongs, which is user-designated. If a resource has not been assigned to a project, it will automatically belong to the default project.
 * @method string getRegionName() Obtain Region: The region of a resource, e.g. South China (Guangzhou).
 * @method void setRegionName(string $RegionName) Set Region: The region of a resource, e.g. South China (Guangzhou).
 * @method string getZoneName() Obtain Availability zone: The availability zone of a resource, e.g. Guangzhou Zone 3.
 * @method void setZoneName(string $ZoneName) Set Availability zone: The availability zone of a resource, e.g. Guangzhou Zone 3.
 * @method string getResourceId() Obtain Instance ID: The object ID of a billed resource, such as a CVM instance ID. This object ID may vary due to various forms and contents of resources in different products.	
 * @method void setResourceId(string $ResourceId) Set Instance ID: The object ID of a billed resource, such as a CVM instance ID. This object ID may vary due to various forms and contents of resources in different products.	
 * @method string getResourceName() Obtain Instance name: The resource name set by the user in the console. If it is not set, it will be empty by default.
 * @method void setResourceName(string $ResourceName) Set Instance name: The resource name set by the user in the console. If it is not set, it will be empty by default.
 * @method string getActionTypeName() Obtain Transaction type, which can be monthly subscription purchase, monthly subscription renewal, pay-as-you-go deduction, etc.
 * @method void setActionTypeName(string $ActionTypeName) Set Transaction type, which can be monthly subscription purchase, monthly subscription renewal, pay-as-you-go deduction, etc.
 * @method string getOrderId() Obtain Order ID: The ID of a monthly subscription order.
 * @method void setOrderId(string $OrderId) Set Order ID: The ID of a monthly subscription order.
 * @method string getPayTime() Obtain Deduction time: The settlement cost deduction time.
 * @method void setPayTime(string $PayTime) Set Deduction time: The settlement cost deduction time.
 * @method string getFeeBeginTime() Obtain Usage start time: The time at which product or service usage starts.
 * @method void setFeeBeginTime(string $FeeBeginTime) Set Usage start time: The time at which product or service usage starts.
 * @method string getFeeEndTime() Obtain Usage end time: The time at which product or service usage ends.
 * @method void setFeeEndTime(string $FeeEndTime) Set Usage end time: The time at which product or service usage ends.
 * @method string getConfigDesc() Obtain Configuration description: The billable item names and usage of a resource, which are displayed on the resource bill only.
 * @method void setConfigDesc(string $ConfigDesc) Set Configuration description: The billable item names and usage of a resource, which are displayed on the resource bill only.
 * @method string getExtendField1() Obtain Extended Field 1: The extended attribute information of a product, which is displayed on the resource bill only.
 * @method void setExtendField1(string $ExtendField1) Set Extended Field 1: The extended attribute information of a product, which is displayed on the resource bill only.
 * @method string getExtendField2() Obtain Extended field 2: The extended attribute information of a product, which is displayed on the resource bill only.
 * @method void setExtendField2(string $ExtendField2) Set Extended field 2: The extended attribute information of a product, which is displayed on the resource bill only.
 * @method string getTotalCost() Obtain Original cost. The original cost of a component = Component price x Usage x Usage duration. If a customer has applied for a fixed preferential price or contract price or if a customer is in a refund scenario, this parameter will not be displayed by default.
 * @method void setTotalCost(string $TotalCost) Set Original cost. The original cost of a component = Component price x Usage x Usage duration. If a customer has applied for a fixed preferential price or contract price or if a customer is in a refund scenario, this parameter will not be displayed by default.
 * @method string getDiscount() Obtain Discount multiplier: The discount multiplier that applies to the component. If a customer has applied for a fixed preferential price or contract price or if a customer is in a refund scenario, this parameter will not be displayed by default.
 * @method void setDiscount(string $Discount) Set Discount multiplier: The discount multiplier that applies to the component. If a customer has applied for a fixed preferential price or contract price or if a customer is in a refund scenario, this parameter will not be displayed by default.
 * @method string getReduceType() Obtain Offer type.
 * @method void setReduceType(string $ReduceType) Set Offer type.
 * @method string getRealTotalCost() Obtain Total amount after discount.
 * @method void setRealTotalCost(string $RealTotalCost) Set Total amount after discount.
 * @method string getVoucherPayAmount() Obtain Voucher payment: The voucher deduction amount.
 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set Voucher payment: The voucher deduction amount.
 * @method string getCashPayAmount() Obtain Cash credit payment: The amount paid through the user's cash account.
 * @method void setCashPayAmount(string $CashPayAmount) Set Cash credit payment: The amount paid through the user's cash account.
 * @method string getIncentivePayAmount() Obtain Free credit payment: The amount paid with the user's free credit.
 * @method void setIncentivePayAmount(string $IncentivePayAmount) Set Free credit payment: The amount paid with the user's free credit.
 * @method string getTransferPayAmount() Obtain Commission credit payment: The amount paid with the user's commission credit.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTransferPayAmount(string $TransferPayAmount) Set Commission credit payment: The amount paid with the user's commission credit.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExtendField3() Obtain Extended field 3: The extended attribute information of a product, which is displayed on the resource bill only.
 * @method void setExtendField3(string $ExtendField3) Set Extended field 3: The extended attribute information of a product, which is displayed on the resource bill only.
 * @method string getExtendField4() Obtain Extended field 4: The extended attribute information of a product, which is displayed on the resource bill only.
 * @method void setExtendField4(string $ExtendField4) Set Extended field 4: The extended attribute information of a product, which is displayed on the resource bill only.
 * @method string getExtendField5() Obtain Extended field 5: The extended attribute information of a product, which is displayed on the resource bill only.
 * @method void setExtendField5(string $ExtendField5) Set Extended field 5: The extended attribute information of a product, which is displayed on the resource bill only.
 * @method array getTags() Obtain Tag information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag information.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOwnerUin() Obtain Owner account ID: The account ID of the actual resource user.
 * @method void setOwnerUin(string $OwnerUin) Set Owner account ID: The account ID of the actual resource user.
 * @method string getOperateUin() Obtain Operator account ID: The account or role ID of the operator who purchases or activates a resource.
 * @method void setOperateUin(string $OperateUin) Set Operator account ID: The account or role ID of the operator who purchases or activates a resource.
 * @method string getBusinessCode() Obtain Product code.
 * @method void setBusinessCode(string $BusinessCode) Set Product code.
 * @method string getProductCode() Obtain Subproduct code.
 * @method void setProductCode(string $ProductCode) Set Subproduct code.
 * @method integer getRegionId() Obtain Region ID.
 * @method void setRegionId(integer $RegionId) Set Region ID.
 * @method string getInstanceType() Obtain Instance type: The instance type of a product or service purchased, which can be resource package, RI, SP, or spot instance. Other instance types are not displayed by default.
 * @method void setInstanceType(string $InstanceType) Set Instance type: The instance type of a product or service purchased, which can be resource package, RI, SP, or spot instance. Other instance types are not displayed by default.
 * @method string getOriginalCostWithRI() Obtain RI deduction (cost): The amount deducted from the original cost by RI.	
 * @method void setOriginalCostWithRI(string $OriginalCostWithRI) Set RI deduction (cost): The amount deducted from the original cost by RI.	
 * @method string getSPDeduction() Obtain Savings plan deduction (disused).
 * @method void setSPDeduction(string $SPDeduction) Set Savings plan deduction (disused).
 * @method string getOriginalCostWithSP() Obtain SP deduction (cost): The amount of cost deducted by a savings plan based on the component's original cost. SP deduction (cost) = Cost deduction by SP / SP deduction rate	
 * @method void setOriginalCostWithSP(string $OriginalCostWithSP) Set SP deduction (cost): The amount of cost deducted by a savings plan based on the component's original cost. SP deduction (cost) = Cost deduction by SP / SP deduction rate	
 * @method string getBillMonth() Obtain Billing monthNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setBillMonth(string $BillMonth) Set Billing monthNote: This field may return null, indicating that no valid values can be obtained.
 */
class BillDistributionResourceSummary extends AbstractModel
{
    /**
     * @var string Product name: The name of a Tencent Cloud product purchased by the user, such as CVM.
     */
    public $BusinessCodeName;

    /**
     * @var string Subproduct name: The subcategory of a Tencent Cloud product purchased by the user, such as CVM - Standard S1.
     */
    public $ProductCodeName;

    /**
     * @var string Billing mode: The billing mode, which can be monthly subscription or pay-as-you-go.
     */
    public $PayModeName;

    /**
     * @var string Project Name: The project to which a resource belongs, which is user-designated. If a resource has not been assigned to a project, it will automatically belong to the default project.
     */
    public $ProjectName;

    /**
     * @var string Region: The region of a resource, e.g. South China (Guangzhou).
     */
    public $RegionName;

    /**
     * @var string Availability zone: The availability zone of a resource, e.g. Guangzhou Zone 3.
     */
    public $ZoneName;

    /**
     * @var string Instance ID: The object ID of a billed resource, such as a CVM instance ID. This object ID may vary due to various forms and contents of resources in different products.	
     */
    public $ResourceId;

    /**
     * @var string Instance name: The resource name set by the user in the console. If it is not set, it will be empty by default.
     */
    public $ResourceName;

    /**
     * @var string Transaction type, which can be monthly subscription purchase, monthly subscription renewal, pay-as-you-go deduction, etc.
     */
    public $ActionTypeName;

    /**
     * @var string Order ID: The ID of a monthly subscription order.
     */
    public $OrderId;

    /**
     * @var string Deduction time: The settlement cost deduction time.
     */
    public $PayTime;

    /**
     * @var string Usage start time: The time at which product or service usage starts.
     */
    public $FeeBeginTime;

    /**
     * @var string Usage end time: The time at which product or service usage ends.
     */
    public $FeeEndTime;

    /**
     * @var string Configuration description: The billable item names and usage of a resource, which are displayed on the resource bill only.
     */
    public $ConfigDesc;

    /**
     * @var string Extended Field 1: The extended attribute information of a product, which is displayed on the resource bill only.
     */
    public $ExtendField1;

    /**
     * @var string Extended field 2: The extended attribute information of a product, which is displayed on the resource bill only.
     */
    public $ExtendField2;

    /**
     * @var string Original cost. The original cost of a component = Component price x Usage x Usage duration. If a customer has applied for a fixed preferential price or contract price or if a customer is in a refund scenario, this parameter will not be displayed by default.
     */
    public $TotalCost;

    /**
     * @var string Discount multiplier: The discount multiplier that applies to the component. If a customer has applied for a fixed preferential price or contract price or if a customer is in a refund scenario, this parameter will not be displayed by default.
     */
    public $Discount;

    /**
     * @var string Offer type.
     */
    public $ReduceType;

    /**
     * @var string Total amount after discount.
     */
    public $RealTotalCost;

    /**
     * @var string Voucher payment: The voucher deduction amount.
     */
    public $VoucherPayAmount;

    /**
     * @var string Cash credit payment: The amount paid through the user's cash account.
     */
    public $CashPayAmount;

    /**
     * @var string Free credit payment: The amount paid with the user's free credit.
     */
    public $IncentivePayAmount;

    /**
     * @var string Commission credit payment: The amount paid with the user's commission credit.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TransferPayAmount;

    /**
     * @var string Extended field 3: The extended attribute information of a product, which is displayed on the resource bill only.
     */
    public $ExtendField3;

    /**
     * @var string Extended field 4: The extended attribute information of a product, which is displayed on the resource bill only.
     */
    public $ExtendField4;

    /**
     * @var string Extended field 5: The extended attribute information of a product, which is displayed on the resource bill only.
     */
    public $ExtendField5;

    /**
     * @var array Tag information.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string Owner account ID: The account ID of the actual resource user.
     */
    public $OwnerUin;

    /**
     * @var string Operator account ID: The account or role ID of the operator who purchases or activates a resource.
     */
    public $OperateUin;

    /**
     * @var string Product code.
     */
    public $BusinessCode;

    /**
     * @var string Subproduct code.
     */
    public $ProductCode;

    /**
     * @var integer Region ID.
     */
    public $RegionId;

    /**
     * @var string Instance type: The instance type of a product or service purchased, which can be resource package, RI, SP, or spot instance. Other instance types are not displayed by default.
     */
    public $InstanceType;

    /**
     * @var string RI deduction (cost): The amount deducted from the original cost by RI.	
     */
    public $OriginalCostWithRI;

    /**
     * @var string Savings plan deduction (disused).
     * @deprecated
     */
    public $SPDeduction;

    /**
     * @var string SP deduction (cost): The amount of cost deducted by a savings plan based on the component's original cost. SP deduction (cost) = Cost deduction by SP / SP deduction rate	
     */
    public $OriginalCostWithSP;

    /**
     * @var string Billing monthNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $BillMonth;

    /**
     * @param string $BusinessCodeName Product name: The name of a Tencent Cloud product purchased by the user, such as CVM.
     * @param string $ProductCodeName Subproduct name: The subcategory of a Tencent Cloud product purchased by the user, such as CVM - Standard S1.
     * @param string $PayModeName Billing mode: The billing mode, which can be monthly subscription or pay-as-you-go.
     * @param string $ProjectName Project Name: The project to which a resource belongs, which is user-designated. If a resource has not been assigned to a project, it will automatically belong to the default project.
     * @param string $RegionName Region: The region of a resource, e.g. South China (Guangzhou).
     * @param string $ZoneName Availability zone: The availability zone of a resource, e.g. Guangzhou Zone 3.
     * @param string $ResourceId Instance ID: The object ID of a billed resource, such as a CVM instance ID. This object ID may vary due to various forms and contents of resources in different products.	
     * @param string $ResourceName Instance name: The resource name set by the user in the console. If it is not set, it will be empty by default.
     * @param string $ActionTypeName Transaction type, which can be monthly subscription purchase, monthly subscription renewal, pay-as-you-go deduction, etc.
     * @param string $OrderId Order ID: The ID of a monthly subscription order.
     * @param string $PayTime Deduction time: The settlement cost deduction time.
     * @param string $FeeBeginTime Usage start time: The time at which product or service usage starts.
     * @param string $FeeEndTime Usage end time: The time at which product or service usage ends.
     * @param string $ConfigDesc Configuration description: The billable item names and usage of a resource, which are displayed on the resource bill only.
     * @param string $ExtendField1 Extended Field 1: The extended attribute information of a product, which is displayed on the resource bill only.
     * @param string $ExtendField2 Extended field 2: The extended attribute information of a product, which is displayed on the resource bill only.
     * @param string $TotalCost Original cost. The original cost of a component = Component price x Usage x Usage duration. If a customer has applied for a fixed preferential price or contract price or if a customer is in a refund scenario, this parameter will not be displayed by default.
     * @param string $Discount Discount multiplier: The discount multiplier that applies to the component. If a customer has applied for a fixed preferential price or contract price or if a customer is in a refund scenario, this parameter will not be displayed by default.
     * @param string $ReduceType Offer type.
     * @param string $RealTotalCost Total amount after discount.
     * @param string $VoucherPayAmount Voucher payment: The voucher deduction amount.
     * @param string $CashPayAmount Cash credit payment: The amount paid through the user's cash account.
     * @param string $IncentivePayAmount Free credit payment: The amount paid with the user's free credit.
     * @param string $TransferPayAmount Commission credit payment: The amount paid with the user's commission credit.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ExtendField3 Extended field 3: The extended attribute information of a product, which is displayed on the resource bill only.
     * @param string $ExtendField4 Extended field 4: The extended attribute information of a product, which is displayed on the resource bill only.
     * @param string $ExtendField5 Extended field 5: The extended attribute information of a product, which is displayed on the resource bill only.
     * @param array $Tags Tag information.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OwnerUin Owner account ID: The account ID of the actual resource user.
     * @param string $OperateUin Operator account ID: The account or role ID of the operator who purchases or activates a resource.
     * @param string $BusinessCode Product code.
     * @param string $ProductCode Subproduct code.
     * @param integer $RegionId Region ID.
     * @param string $InstanceType Instance type: The instance type of a product or service purchased, which can be resource package, RI, SP, or spot instance. Other instance types are not displayed by default.
     * @param string $OriginalCostWithRI RI deduction (cost): The amount deducted from the original cost by RI.	
     * @param string $SPDeduction Savings plan deduction (disused).
     * @param string $OriginalCostWithSP SP deduction (cost): The amount of cost deducted by a savings plan based on the component's original cost. SP deduction (cost) = Cost deduction by SP / SP deduction rate	
     * @param string $BillMonth Billing monthNote: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("BusinessCodeName",$param) and $param["BusinessCodeName"] !== null) {
            $this->BusinessCodeName = $param["BusinessCodeName"];
        }

        if (array_key_exists("ProductCodeName",$param) and $param["ProductCodeName"] !== null) {
            $this->ProductCodeName = $param["ProductCodeName"];
        }

        if (array_key_exists("PayModeName",$param) and $param["PayModeName"] !== null) {
            $this->PayModeName = $param["PayModeName"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ActionTypeName",$param) and $param["ActionTypeName"] !== null) {
            $this->ActionTypeName = $param["ActionTypeName"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("PayTime",$param) and $param["PayTime"] !== null) {
            $this->PayTime = $param["PayTime"];
        }

        if (array_key_exists("FeeBeginTime",$param) and $param["FeeBeginTime"] !== null) {
            $this->FeeBeginTime = $param["FeeBeginTime"];
        }

        if (array_key_exists("FeeEndTime",$param) and $param["FeeEndTime"] !== null) {
            $this->FeeEndTime = $param["FeeEndTime"];
        }

        if (array_key_exists("ConfigDesc",$param) and $param["ConfigDesc"] !== null) {
            $this->ConfigDesc = $param["ConfigDesc"];
        }

        if (array_key_exists("ExtendField1",$param) and $param["ExtendField1"] !== null) {
            $this->ExtendField1 = $param["ExtendField1"];
        }

        if (array_key_exists("ExtendField2",$param) and $param["ExtendField2"] !== null) {
            $this->ExtendField2 = $param["ExtendField2"];
        }

        if (array_key_exists("TotalCost",$param) and $param["TotalCost"] !== null) {
            $this->TotalCost = $param["TotalCost"];
        }

        if (array_key_exists("Discount",$param) and $param["Discount"] !== null) {
            $this->Discount = $param["Discount"];
        }

        if (array_key_exists("ReduceType",$param) and $param["ReduceType"] !== null) {
            $this->ReduceType = $param["ReduceType"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("VoucherPayAmount",$param) and $param["VoucherPayAmount"] !== null) {
            $this->VoucherPayAmount = $param["VoucherPayAmount"];
        }

        if (array_key_exists("CashPayAmount",$param) and $param["CashPayAmount"] !== null) {
            $this->CashPayAmount = $param["CashPayAmount"];
        }

        if (array_key_exists("IncentivePayAmount",$param) and $param["IncentivePayAmount"] !== null) {
            $this->IncentivePayAmount = $param["IncentivePayAmount"];
        }

        if (array_key_exists("TransferPayAmount",$param) and $param["TransferPayAmount"] !== null) {
            $this->TransferPayAmount = $param["TransferPayAmount"];
        }

        if (array_key_exists("ExtendField3",$param) and $param["ExtendField3"] !== null) {
            $this->ExtendField3 = $param["ExtendField3"];
        }

        if (array_key_exists("ExtendField4",$param) and $param["ExtendField4"] !== null) {
            $this->ExtendField4 = $param["ExtendField4"];
        }

        if (array_key_exists("ExtendField5",$param) and $param["ExtendField5"] !== null) {
            $this->ExtendField5 = $param["ExtendField5"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new BillTagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("OriginalCostWithRI",$param) and $param["OriginalCostWithRI"] !== null) {
            $this->OriginalCostWithRI = $param["OriginalCostWithRI"];
        }

        if (array_key_exists("SPDeduction",$param) and $param["SPDeduction"] !== null) {
            $this->SPDeduction = $param["SPDeduction"];
        }

        if (array_key_exists("OriginalCostWithSP",$param) and $param["OriginalCostWithSP"] !== null) {
            $this->OriginalCostWithSP = $param["OriginalCostWithSP"];
        }

        if (array_key_exists("BillMonth",$param) and $param["BillMonth"] !== null) {
            $this->BillMonth = $param["BillMonth"];
        }
    }
}
