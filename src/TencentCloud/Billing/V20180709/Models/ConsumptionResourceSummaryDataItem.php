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
 * Consumption details summarized by resource
 *
 * @method string getResourceId() Obtain Resource ID
 * @method void setResourceId(string $ResourceId) Set Resource ID
 * @method string getResourceName() Obtain Resource name
 * @method void setResourceName(string $ResourceName) Set Resource name
 * @method string getRealTotalCost() Obtain Discounted total price
 * @method void setRealTotalCost(string $RealTotalCost) Set Discounted total price
 * @method string getCashPayAmount() Obtain Cash expenditure
 * @method void setCashPayAmount(string $CashPayAmount) Set Cash expenditure
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getProjectName() Obtain Project name
 * @method void setProjectName(string $ProjectName) Set Project name
 * @method string getRegionId() Obtain Region ID
 * @method void setRegionId(string $RegionId) Set Region ID
 * @method string getRegionName() Obtain Region name
 * @method void setRegionName(string $RegionName) Set Region name
 * @method string getPayMode() Obtain Payment mode
 * @method void setPayMode(string $PayMode) Set Payment mode
 * @method string getPayModeName() Obtain Payment mode name
 * @method void setPayModeName(string $PayModeName) Set Payment mode name
 * @method string getBusinessCode() Obtain Product name code
 * @method void setBusinessCode(string $BusinessCode) Set Product name code
 * @method string getBusinessCodeName() Obtain Product name
 * @method void setBusinessCodeName(string $BusinessCodeName) Set Product name
 * @method string getConsumptionTypeName() Obtain Consumption type
 * @method void setConsumptionTypeName(string $ConsumptionTypeName) Set Consumption type
 * @method string getRealCost() Obtain Original price
 * @method void setRealCost(string $RealCost) Set Original price
 * @method string getFeeBeginTime() Obtain Fee start time
 * @method void setFeeBeginTime(string $FeeBeginTime) Set Fee start time
 * @method string getFeeEndTime() Obtain End time of fees
 * @method void setFeeEndTime(string $FeeEndTime) Set End time of fees
 * @method string getDayDiff() Obtain Days
 * @method void setDayDiff(string $DayDiff) Set Days
 * @method string getDailyTotalCost() Obtain Daily consumption
 * @method void setDailyTotalCost(string $DailyTotalCost) Set Daily consumption
 * @method string getOrderId() Obtain Order ID
 * @method void setOrderId(string $OrderId) Set Order ID
 * @method string getVoucherPayAmount() Obtain Voucher
 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set Voucher
 * @method string getIncentivePayAmount() Obtain Bonus
 * @method void setIncentivePayAmount(string $IncentivePayAmount) Set Bonus
 * @method string getTransferPayAmount() Obtain Royalty amount
 * @method void setTransferPayAmount(string $TransferPayAmount) Set Royalty amount
 * @method string getTax() Obtain Tax
 * @method void setTax(string $Tax) Set Tax
 * @method string getTaxRate() Obtain tax rate
 * @method void setTaxRate(string $TaxRate) Set tax rate
 * @method string getAmountBeforeTax() Obtain Cash payment (pre-tax)
 * @method void setAmountBeforeTax(string $AmountBeforeTax) Set Cash payment (pre-tax)
 * @method string getPayerUin() Obtain Payer UIN: Account ID of the payer, which is the unique account identifier for the user in Tencent Cloud.
 * @method void setPayerUin(string $PayerUin) Set Payer UIN: Account ID of the payer, which is the unique account identifier for the user in Tencent Cloud.
 * @method string getOwnerUin() Obtain User UIN: Account ID of the actual resource user
 * @method void setOwnerUin(string $OwnerUin) Set User UIN: Account ID of the actual resource user
 * @method string getOperateUin() Obtain Operator UIN: Operator account ID (ID of the operator who places orders for prepaid resources or activates postpaid resource account, or role ID).
 * @method void setOperateUin(string $OperateUin) Set Operator UIN: Operator account ID (ID of the operator who places orders for prepaid resources or activates postpaid resource account, or role ID).
 * @method string getProductCode() Obtain Subproduct code
 * @method void setProductCode(string $ProductCode) Set Subproduct code
 * @method string getProductCodeName() Obtain Subproduct name: Product subdivision type purchased by the user, such as Cloud Virtual Machine (CVM)-Standard Type S1
 * @method void setProductCodeName(string $ProductCodeName) Set Subproduct name: Product subdivision type purchased by the user, such as Cloud Virtual Machine (CVM)-Standard Type S1
 * @method string getRegionType() Obtain Region type
 * @method void setRegionType(string $RegionType) Set Region type
 * @method string getRegionTypeName() Obtain Region type name.
 * @method void setRegionTypeName(string $RegionTypeName) Set Region type name.
 * @method string getExtend1() Obtain Extension Field 1
 * @method void setExtend1(string $Extend1) Set Extension Field 1
 * @method string getExtend2() Obtain Extension Field 2
 * @method void setExtend2(string $Extend2) Set Extension Field 2
 * @method string getExtend3() Obtain Extension Field 3
 * @method void setExtend3(string $Extend3) Set Extension Field 3
 * @method string getExtend4() Obtain Extension Field 4
 * @method void setExtend4(string $Extend4) Set Extension Field 4
 * @method string getExtend5() Obtain Extension Field 5
 * @method void setExtend5(string $Extend5) Set Extension Field 5
 * @method string getInstanceType() Obtain Instance type
 * @method void setInstanceType(string $InstanceType) Set Instance type
 * @method string getInstanceTypeName() Obtain Instance Type Name
 * @method void setInstanceTypeName(string $InstanceTypeName) Set Instance Type Name
 * @method string getPayTime() Obtain Deduction time: Deduction time
 * @method void setPayTime(string $PayTime) Set Deduction time: Deduction time
 * @method string getZoneName() Obtain Availability zone: The availability zone where the resource is located, such as Guangzhou Zone 3.
 * @method void setZoneName(string $ZoneName) Set Availability zone: The availability zone where the resource is located, such as Guangzhou Zone 3.
 * @method string getComponentConfig() Obtain Describing Configurations
 * @method void setComponentConfig(string $ComponentConfig) Set Describing Configurations
 * @method string getTags() Obtain Tag information.
 * @method void setTags(string $Tags) Set Tag information.
 */
class ConsumptionResourceSummaryDataItem extends AbstractModel
{
    /**
     * @var string Resource ID
     */
    public $ResourceId;

    /**
     * @var string Resource name
     */
    public $ResourceName;

    /**
     * @var string Discounted total price
     */
    public $RealTotalCost;

    /**
     * @var string Cash expenditure
     */
    public $CashPayAmount;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Project name
     */
    public $ProjectName;

    /**
     * @var string Region ID
     */
    public $RegionId;

    /**
     * @var string Region name
     */
    public $RegionName;

    /**
     * @var string Payment mode
     */
    public $PayMode;

    /**
     * @var string Payment mode name
     */
    public $PayModeName;

    /**
     * @var string Product name code
     */
    public $BusinessCode;

    /**
     * @var string Product name
     */
    public $BusinessCodeName;

    /**
     * @var string Consumption type
     */
    public $ConsumptionTypeName;

    /**
     * @var string Original price
     */
    public $RealCost;

    /**
     * @var string Fee start time
     */
    public $FeeBeginTime;

    /**
     * @var string End time of fees
     */
    public $FeeEndTime;

    /**
     * @var string Days
     */
    public $DayDiff;

    /**
     * @var string Daily consumption
     */
    public $DailyTotalCost;

    /**
     * @var string Order ID
     */
    public $OrderId;

    /**
     * @var string Voucher
     */
    public $VoucherPayAmount;

    /**
     * @var string Bonus
     */
    public $IncentivePayAmount;

    /**
     * @var string Royalty amount
     */
    public $TransferPayAmount;

    /**
     * @var string Tax
     */
    public $Tax;

    /**
     * @var string tax rate
     */
    public $TaxRate;

    /**
     * @var string Cash payment (pre-tax)
     */
    public $AmountBeforeTax;

    /**
     * @var string Payer UIN: Account ID of the payer, which is the unique account identifier for the user in Tencent Cloud.
     */
    public $PayerUin;

    /**
     * @var string User UIN: Account ID of the actual resource user
     */
    public $OwnerUin;

    /**
     * @var string Operator UIN: Operator account ID (ID of the operator who places orders for prepaid resources or activates postpaid resource account, or role ID).
     */
    public $OperateUin;

    /**
     * @var string Subproduct code
     */
    public $ProductCode;

    /**
     * @var string Subproduct name: Product subdivision type purchased by the user, such as Cloud Virtual Machine (CVM)-Standard Type S1
     */
    public $ProductCodeName;

    /**
     * @var string Region type
     */
    public $RegionType;

    /**
     * @var string Region type name.
     */
    public $RegionTypeName;

    /**
     * @var string Extension Field 1
     */
    public $Extend1;

    /**
     * @var string Extension Field 2
     */
    public $Extend2;

    /**
     * @var string Extension Field 3
     */
    public $Extend3;

    /**
     * @var string Extension Field 4
     */
    public $Extend4;

    /**
     * @var string Extension Field 5
     */
    public $Extend5;

    /**
     * @var string Instance type
     */
    public $InstanceType;

    /**
     * @var string Instance Type Name
     */
    public $InstanceTypeName;

    /**
     * @var string Deduction time: Deduction time
     */
    public $PayTime;

    /**
     * @var string Availability zone: The availability zone where the resource is located, such as Guangzhou Zone 3.
     */
    public $ZoneName;

    /**
     * @var string Describing Configurations
     */
    public $ComponentConfig;

    /**
     * @var string Tag information.
     */
    public $Tags;

    /**
     * @param string $ResourceId Resource ID
     * @param string $ResourceName Resource name
     * @param string $RealTotalCost Discounted total price
     * @param string $CashPayAmount Cash expenditure
     * @param string $ProjectId Project ID
     * @param string $ProjectName Project name
     * @param string $RegionId Region ID
     * @param string $RegionName Region name
     * @param string $PayMode Payment mode
     * @param string $PayModeName Payment mode name
     * @param string $BusinessCode Product name code
     * @param string $BusinessCodeName Product name
     * @param string $ConsumptionTypeName Consumption type
     * @param string $RealCost Original price
     * @param string $FeeBeginTime Fee start time
     * @param string $FeeEndTime End time of fees
     * @param string $DayDiff Days
     * @param string $DailyTotalCost Daily consumption
     * @param string $OrderId Order ID
     * @param string $VoucherPayAmount Voucher
     * @param string $IncentivePayAmount Bonus
     * @param string $TransferPayAmount Royalty amount
     * @param string $Tax Tax
     * @param string $TaxRate tax rate
     * @param string $AmountBeforeTax Cash payment (pre-tax)
     * @param string $PayerUin Payer UIN: Account ID of the payer, which is the unique account identifier for the user in Tencent Cloud.
     * @param string $OwnerUin User UIN: Account ID of the actual resource user
     * @param string $OperateUin Operator UIN: Operator account ID (ID of the operator who places orders for prepaid resources or activates postpaid resource account, or role ID).
     * @param string $ProductCode Subproduct code
     * @param string $ProductCodeName Subproduct name: Product subdivision type purchased by the user, such as Cloud Virtual Machine (CVM)-Standard Type S1
     * @param string $RegionType Region type
     * @param string $RegionTypeName Region type name.
     * @param string $Extend1 Extension Field 1
     * @param string $Extend2 Extension Field 2
     * @param string $Extend3 Extension Field 3
     * @param string $Extend4 Extension Field 4
     * @param string $Extend5 Extension Field 5
     * @param string $InstanceType Instance type
     * @param string $InstanceTypeName Instance Type Name
     * @param string $PayTime Deduction time: Deduction time
     * @param string $ZoneName Availability zone: The availability zone where the resource is located, such as Guangzhou Zone 3.
     * @param string $ComponentConfig Describing Configurations
     * @param string $Tags Tag information.
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("RealTotalCost",$param) and $param["RealTotalCost"] !== null) {
            $this->RealTotalCost = $param["RealTotalCost"];
        }

        if (array_key_exists("CashPayAmount",$param) and $param["CashPayAmount"] !== null) {
            $this->CashPayAmount = $param["CashPayAmount"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PayModeName",$param) and $param["PayModeName"] !== null) {
            $this->PayModeName = $param["PayModeName"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("BusinessCodeName",$param) and $param["BusinessCodeName"] !== null) {
            $this->BusinessCodeName = $param["BusinessCodeName"];
        }

        if (array_key_exists("ConsumptionTypeName",$param) and $param["ConsumptionTypeName"] !== null) {
            $this->ConsumptionTypeName = $param["ConsumptionTypeName"];
        }

        if (array_key_exists("RealCost",$param) and $param["RealCost"] !== null) {
            $this->RealCost = $param["RealCost"];
        }

        if (array_key_exists("FeeBeginTime",$param) and $param["FeeBeginTime"] !== null) {
            $this->FeeBeginTime = $param["FeeBeginTime"];
        }

        if (array_key_exists("FeeEndTime",$param) and $param["FeeEndTime"] !== null) {
            $this->FeeEndTime = $param["FeeEndTime"];
        }

        if (array_key_exists("DayDiff",$param) and $param["DayDiff"] !== null) {
            $this->DayDiff = $param["DayDiff"];
        }

        if (array_key_exists("DailyTotalCost",$param) and $param["DailyTotalCost"] !== null) {
            $this->DailyTotalCost = $param["DailyTotalCost"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
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

        if (array_key_exists("Tax",$param) and $param["Tax"] !== null) {
            $this->Tax = $param["Tax"];
        }

        if (array_key_exists("TaxRate",$param) and $param["TaxRate"] !== null) {
            $this->TaxRate = $param["TaxRate"];
        }

        if (array_key_exists("AmountBeforeTax",$param) and $param["AmountBeforeTax"] !== null) {
            $this->AmountBeforeTax = $param["AmountBeforeTax"];
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

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("ProductCodeName",$param) and $param["ProductCodeName"] !== null) {
            $this->ProductCodeName = $param["ProductCodeName"];
        }

        if (array_key_exists("RegionType",$param) and $param["RegionType"] !== null) {
            $this->RegionType = $param["RegionType"];
        }

        if (array_key_exists("RegionTypeName",$param) and $param["RegionTypeName"] !== null) {
            $this->RegionTypeName = $param["RegionTypeName"];
        }

        if (array_key_exists("Extend1",$param) and $param["Extend1"] !== null) {
            $this->Extend1 = $param["Extend1"];
        }

        if (array_key_exists("Extend2",$param) and $param["Extend2"] !== null) {
            $this->Extend2 = $param["Extend2"];
        }

        if (array_key_exists("Extend3",$param) and $param["Extend3"] !== null) {
            $this->Extend3 = $param["Extend3"];
        }

        if (array_key_exists("Extend4",$param) and $param["Extend4"] !== null) {
            $this->Extend4 = $param["Extend4"];
        }

        if (array_key_exists("Extend5",$param) and $param["Extend5"] !== null) {
            $this->Extend5 = $param["Extend5"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceTypeName",$param) and $param["InstanceTypeName"] !== null) {
            $this->InstanceTypeName = $param["InstanceTypeName"];
        }

        if (array_key_exists("PayTime",$param) and $param["PayTime"] !== null) {
            $this->PayTime = $param["PayTime"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ComponentConfig",$param) and $param["ComponentConfig"] !== null) {
            $this->ComponentConfig = $param["ComponentConfig"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }
    }
}
