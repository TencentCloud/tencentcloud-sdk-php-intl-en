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
 * @method string getRealCost() Obtain Pre-discount priceNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setRealCost(string $RealCost) Set Pre-discount priceNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getFeeBeginTime() Obtain Start time of feesNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setFeeBeginTime(string $FeeBeginTime) Set Start time of feesNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getFeeEndTime() Obtain End time of feesNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setFeeEndTime(string $FeeEndTime) Set End time of feesNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getDayDiff() Obtain Days
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDayDiff(string $DayDiff) Set Days
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDailyTotalCost() Obtain Daily consumptionNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setDailyTotalCost(string $DailyTotalCost) Set Daily consumptionNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getOrderId() Obtain Order numberNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setOrderId(string $OrderId) Set Order numberNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getVoucherPayAmount() Obtain VoucherNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set VoucherNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getIncentivePayAmount() Obtain Bonus
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIncentivePayAmount(string $IncentivePayAmount) Set Bonus
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTransferPayAmount() Obtain Share revenueNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setTransferPayAmount(string $TransferPayAmount) Set Share revenueNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getPayerUin() Obtain Payer UIN: the account ID of the payer, which is the unique identifier of a Tencent Cloud userNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayerUin(string $PayerUin) Set Payer UIN: the account ID of the payer, which is the unique identifier of a Tencent Cloud userNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getOwnerUin() Obtain User UIN: the account ID of the actual resource userNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setOwnerUin(string $OwnerUin) Set User UIN: the account ID of the actual resource userNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getOperateUin() Obtain Operator UIN: the account ID or role ID of the operator who places orders for prepaid resources or activates postpaid resourcesNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setOperateUin(string $OperateUin) Set Operator UIN: the account ID or role ID of the operator who places orders for prepaid resources or activates postpaid resourcesNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getProductCode() Obtain Subproduct codeNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setProductCode(string $ProductCode) Set Subproduct codeNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getProductCodeName() Obtain Subproduct name: the subcategory of a product purchased by the user, such as CVM – Standard S1Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProductCodeName(string $ProductCodeName) Set Subproduct name: the subcategory of a product purchased by the user, such as CVM – Standard S1Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegionType() Obtain Region typeNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionType(string $RegionType) Set Region typeNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getRegionTypeName() Obtain Region type nameNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setRegionTypeName(string $RegionTypeName) Set Region type nameNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getExtend1() Obtain Extended field 1Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtend1(string $Extend1) Set Extended field 1Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExtend2() Obtain Extended field 2Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtend2(string $Extend2) Set Extended field 2Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExtend3() Obtain Extended field 3Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtend3(string $Extend3) Set Extended field 3Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExtend4() Obtain Extended field 4Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtend4(string $Extend4) Set Extended field 4Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getExtend5() Obtain Extended field 5Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setExtend5(string $Extend5) Set Extended field 5Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceType() Obtain Instance typeNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceType(string $InstanceType) Set Instance typeNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceTypeName() Obtain Instance type nameNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceTypeName(string $InstanceTypeName) Set Instance type nameNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getPayTime() Obtain Deduction time: the time at which a payment is deductedNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setPayTime(string $PayTime) Set Deduction time: the time at which a payment is deductedNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getZoneName() Obtain Availability zone: availability zone of a resource, e.g. Guangzhou Zone 3Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setZoneName(string $ZoneName) Set Availability zone: availability zone of a resource, e.g. Guangzhou Zone 3Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getComponentConfig() Obtain Configuration descriptionNote: This field may return null, indicating that no valid values can be obtained.
 * @method void setComponentConfig(string $ComponentConfig) Set Configuration descriptionNote: This field may return null, indicating that no valid values can be obtained.
 * @method string getTags() Obtain Tag information.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(string $Tags) Set Tag information.Note: This field may return null, indicating that no valid values can be obtained.
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
     * @var string Pre-discount priceNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $RealCost;

    /**
     * @var string Start time of feesNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $FeeBeginTime;

    /**
     * @var string End time of feesNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $FeeEndTime;

    /**
     * @var string Days
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DayDiff;

    /**
     * @var string Daily consumptionNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $DailyTotalCost;

    /**
     * @var string Order numberNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $OrderId;

    /**
     * @var string VoucherNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $VoucherPayAmount;

    /**
     * @var string Bonus
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IncentivePayAmount;

    /**
     * @var string Share revenueNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $TransferPayAmount;

    /**
     * @var string Payer UIN: the account ID of the payer, which is the unique identifier of a Tencent Cloud userNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayerUin;

    /**
     * @var string User UIN: the account ID of the actual resource userNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $OwnerUin;

    /**
     * @var string Operator UIN: the account ID or role ID of the operator who places orders for prepaid resources or activates postpaid resourcesNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $OperateUin;

    /**
     * @var string Subproduct codeNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProductCode;

    /**
     * @var string Subproduct name: the subcategory of a product purchased by the user, such as CVM – Standard S1Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProductCodeName;

    /**
     * @var string Region typeNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionType;

    /**
     * @var string Region type nameNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $RegionTypeName;

    /**
     * @var string Extended field 1Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Extend1;

    /**
     * @var string Extended field 2Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Extend2;

    /**
     * @var string Extended field 3Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Extend3;

    /**
     * @var string Extended field 4Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Extend4;

    /**
     * @var string Extended field 5Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Extend5;

    /**
     * @var string Instance typeNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceType;

    /**
     * @var string Instance type nameNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceTypeName;

    /**
     * @var string Deduction time: the time at which a payment is deductedNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $PayTime;

    /**
     * @var string Availability zone: availability zone of a resource, e.g. Guangzhou Zone 3Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ZoneName;

    /**
     * @var string Configuration descriptionNote: This field may return null, indicating that no valid values can be obtained.
     */
    public $ComponentConfig;

    /**
     * @var string Tag information.Note: This field may return null, indicating that no valid values can be obtained.
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
     * @param string $RealCost Pre-discount priceNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $FeeBeginTime Start time of feesNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $FeeEndTime End time of feesNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $DayDiff Days
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DailyTotalCost Daily consumptionNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $OrderId Order numberNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $VoucherPayAmount VoucherNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $IncentivePayAmount Bonus
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TransferPayAmount Share revenueNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $PayerUin Payer UIN: the account ID of the payer, which is the unique identifier of a Tencent Cloud userNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $OwnerUin User UIN: the account ID of the actual resource userNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $OperateUin Operator UIN: the account ID or role ID of the operator who places orders for prepaid resources or activates postpaid resourcesNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProductCode Subproduct codeNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProductCodeName Subproduct name: the subcategory of a product purchased by the user, such as CVM – Standard S1Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegionType Region typeNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $RegionTypeName Region type nameNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $Extend1 Extended field 1Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Extend2 Extended field 2Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Extend3 Extended field 3Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Extend4 Extended field 4Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Extend5 Extended field 5Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceType Instance typeNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceTypeName Instance type nameNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $PayTime Deduction time: the time at which a payment is deductedNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $ZoneName Availability zone: availability zone of a resource, e.g. Guangzhou Zone 3Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ComponentConfig Configuration descriptionNote: This field may return null, indicating that no valid values can be obtained.
     * @param string $Tags Tag information.Note: This field may return null, indicating that no valid values can be obtained.
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
