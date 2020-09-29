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
 * Information about resources charged in the bill
 *
 * @method string getBusinessCodeName() Obtain Product name: major categories of Tencent Cloud services, e.g. CVM and TencentDB for MySQL
 * @method void setBusinessCodeName(string $BusinessCodeName) Set Product name: major categories of Tencent Cloud services, e.g. CVM and TencentDB for MySQL
 * @method string getProductCodeName() Obtain Sub-product name: sub-categories of Tencent Cloud services, such as CVM-Standard S1; if no subproduct name is obtained, '-' is returned.
 * @method void setProductCodeName(string $ProductCodeName) Set Sub-product name: sub-categories of Tencent Cloud services, such as CVM-Standard S1; if no subproduct name is obtained, '-' is returned.
 * @method string getPayModeName() Obtain Billing mode
 * @method void setPayModeName(string $PayModeName) Set Billing mode
 * @method string getProjectName() Obtain Project
 * @method void setProjectName(string $ProjectName) Set Project
 * @method string getRegionName() Obtain Region
 * @method void setRegionName(string $RegionName) Set Region
 * @method string getZoneName() Obtain Availability zone
 * @method void setZoneName(string $ZoneName) Set Availability zone
 * @method string getResourceId() Obtain Instance ID
 * @method void setResourceId(string $ResourceId) Set Instance ID
 * @method string getResourceName() Obtain Resource instance namDeduction timee
 * @method void setResourceName(string $ResourceName) Set Resource instance namDeduction timee
 * @method string getActionTypeName() Obtain Transaction type
 * @method void setActionTypeName(string $ActionTypeName) Set Transaction type
 * @method string getOrderId() Obtain Order ID
 * @method void setOrderId(string $OrderId) Set Order ID
 * @method string getPayTime() Obtain Payment time
 * @method void setPayTime(string $PayTime) Set Payment time
 * @method string getFeeBeginTime() Obtain Service start time
 * @method void setFeeBeginTime(string $FeeBeginTime) Set Service start time
 * @method string getFeeEndTime() Obtain Service end time
 * @method void setFeeEndTime(string $FeeEndTime) Set Service end time
 * @method string getConfigDesc() Obtain Configuration description
 * @method void setConfigDesc(string $ConfigDesc) Set Configuration description
 * @method string getExtendField1() Obtain Extension field 1
 * @method void setExtendField1(string $ExtendField1) Set Extension field 1
 * @method string getExtendField2() Obtain Extension field 2
 * @method void setExtendField2(string $ExtendField2) Set Extension field 2
 * @method string getTotalCost() Obtain Cost, in USD
 * @method void setTotalCost(string $TotalCost) Set Cost, in USD
 * @method string getDiscount() Obtain Discount rate
 * @method void setDiscount(string $Discount) Set Discount rate
 * @method string getReduceType() Obtain Offer type
 * @method void setReduceType(string $ReduceType) Set Offer type
 * @method string getRealTotalCost() Obtain Total cost after discount, in USD
 * @method void setRealTotalCost(string $RealTotalCost) Set Total cost after discount, in USD
 * @method string getVoucherPayAmount() Obtain Amount paid in voucher, in USD
 * @method void setVoucherPayAmount(string $VoucherPayAmount) Set Amount paid in voucher, in USD
 * @method string getCashPayAmount() Obtain Amount paid in cash, in USD
 * @method void setCashPayAmount(string $CashPayAmount) Set Amount paid in cash, in USD
 * @method string getIncentivePayAmount() Obtain Amount paid in trial credit, in USD
 * @method void setIncentivePayAmount(string $IncentivePayAmount) Set Amount paid in trial credit, in USD
 * @method string getExtendField3() Obtain Extension field 3
 * @method void setExtendField3(string $ExtendField3) Set Extension field 3
 * @method string getExtendField4() Obtain Extension field 4
 * @method void setExtendField4(string $ExtendField4) Set Extension field 4
 * @method string getExtendField5() Obtain Extension field 5
 * @method void setExtendField5(string $ExtendField5) Set Extension field 5
 * @method array getTags() Obtain Tag information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPayerUin() Obtain Payer UIN
 * @method void setPayerUin(string $PayerUin) Set Payer UIN
 * @method string getOwnerUin() Obtain Resource owner UIN; '-' is returned if no value is obtained
 * @method void setOwnerUin(string $OwnerUin) Set Resource owner UIN; '-' is returned if no value is obtained
 * @method string getOperateUin() Obtain Operator UIN; '-' is returned if no value is obtained
 * @method void setOperateUin(string $OperateUin) Set Operator UIN; '-' is returned if no value is obtained
 * @method string getBusinessCode() Obtain 
 * @method void setBusinessCode(string $BusinessCode) Set 
 * @method string getProductCode() Obtain 
 * @method void setProductCode(string $ProductCode) Set 
 * @method integer getRegionId() Obtain 
 * @method void setRegionId(integer $RegionId) Set 
 */
class BillResourceSummary extends AbstractModel
{
    /**
     * @var string Product name: major categories of Tencent Cloud services, e.g. CVM and TencentDB for MySQL
     */
    public $BusinessCodeName;

    /**
     * @var string Sub-product name: sub-categories of Tencent Cloud services, such as CVM-Standard S1; if no subproduct name is obtained, '-' is returned.
     */
    public $ProductCodeName;

    /**
     * @var string Billing mode
     */
    public $PayModeName;

    /**
     * @var string Project
     */
    public $ProjectName;

    /**
     * @var string Region
     */
    public $RegionName;

    /**
     * @var string Availability zone
     */
    public $ZoneName;

    /**
     * @var string Instance ID
     */
    public $ResourceId;

    /**
     * @var string Resource instance namDeduction timee
     */
    public $ResourceName;

    /**
     * @var string Transaction type
     */
    public $ActionTypeName;

    /**
     * @var string Order ID
     */
    public $OrderId;

    /**
     * @var string Payment time
     */
    public $PayTime;

    /**
     * @var string Service start time
     */
    public $FeeBeginTime;

    /**
     * @var string Service end time
     */
    public $FeeEndTime;

    /**
     * @var string Configuration description
     */
    public $ConfigDesc;

    /**
     * @var string Extension field 1
     */
    public $ExtendField1;

    /**
     * @var string Extension field 2
     */
    public $ExtendField2;

    /**
     * @var string Cost, in USD
     */
    public $TotalCost;

    /**
     * @var string Discount rate
     */
    public $Discount;

    /**
     * @var string Offer type
     */
    public $ReduceType;

    /**
     * @var string Total cost after discount, in USD
     */
    public $RealTotalCost;

    /**
     * @var string Amount paid in voucher, in USD
     */
    public $VoucherPayAmount;

    /**
     * @var string Amount paid in cash, in USD
     */
    public $CashPayAmount;

    /**
     * @var string Amount paid in trial credit, in USD
     */
    public $IncentivePayAmount;

    /**
     * @var string Extension field 3
     */
    public $ExtendField3;

    /**
     * @var string Extension field 4
     */
    public $ExtendField4;

    /**
     * @var string Extension field 5
     */
    public $ExtendField5;

    /**
     * @var array Tag information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string Payer UIN
     */
    public $PayerUin;

    /**
     * @var string Resource owner UIN; '-' is returned if no value is obtained
     */
    public $OwnerUin;

    /**
     * @var string Operator UIN; '-' is returned if no value is obtained
     */
    public $OperateUin;

    /**
     * @var string 
     */
    public $BusinessCode;

    /**
     * @var string 
     */
    public $ProductCode;

    /**
     * @var integer 
     */
    public $RegionId;

    /**
     * @param string $BusinessCodeName Product name: major categories of Tencent Cloud services, e.g. CVM and TencentDB for MySQL
     * @param string $ProductCodeName Sub-product name: sub-categories of Tencent Cloud services, such as CVM-Standard S1; if no subproduct name is obtained, '-' is returned.
     * @param string $PayModeName Billing mode
     * @param string $ProjectName Project
     * @param string $RegionName Region
     * @param string $ZoneName Availability zone
     * @param string $ResourceId Instance ID
     * @param string $ResourceName Resource instance namDeduction timee
     * @param string $ActionTypeName Transaction type
     * @param string $OrderId Order ID
     * @param string $PayTime Payment time
     * @param string $FeeBeginTime Service start time
     * @param string $FeeEndTime Service end time
     * @param string $ConfigDesc Configuration description
     * @param string $ExtendField1 Extension field 1
     * @param string $ExtendField2 Extension field 2
     * @param string $TotalCost Cost, in USD
     * @param string $Discount Discount rate
     * @param string $ReduceType Offer type
     * @param string $RealTotalCost Total cost after discount, in USD
     * @param string $VoucherPayAmount Amount paid in voucher, in USD
     * @param string $CashPayAmount Amount paid in cash, in USD
     * @param string $IncentivePayAmount Amount paid in trial credit, in USD
     * @param string $ExtendField3 Extension field 3
     * @param string $ExtendField4 Extension field 4
     * @param string $ExtendField5 Extension field 5
     * @param array $Tags Tag information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PayerUin Payer UIN
     * @param string $OwnerUin Resource owner UIN; '-' is returned if no value is obtained
     * @param string $OperateUin Operator UIN; '-' is returned if no value is obtained
     * @param string $BusinessCode 
     * @param string $ProductCode 
     * @param integer $RegionId 
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

        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
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
    }
}
