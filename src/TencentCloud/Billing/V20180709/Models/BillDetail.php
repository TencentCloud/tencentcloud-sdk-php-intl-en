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
 * Bill details
 *
 * @method string getBusinessCodeName() Obtain Product name: major categories of Tencent Cloud services, e.g. CVM and TencentDB for MySQL
 * @method void setBusinessCodeName(string $BusinessCodeName) Set Product name: major categories of Tencent Cloud services, e.g. CVM and TencentDB for MySQL
 * @method string getProductCodeName() Obtain Sub-product name: sub-categories of Tencent Cloud services, such as CVM-Standard S1
 * @method void setProductCodeName(string $ProductCodeName) Set Sub-product name: sub-categories of Tencent Cloud services, such as CVM-Standard S1
 * @method string getPayModeName() Obtain Billing mode
 * @method void setPayModeName(string $PayModeName) Set Billing mode
 * @method string getProjectName() Obtain Project: project of a resource
 * @method void setProjectName(string $ProjectName) Set Project: project of a resource
 * @method string getRegionName() Obtain Region: region of a resource, e.g. South China (Guangzhou)
 * @method void setRegionName(string $RegionName) Set Region: region of a resource, e.g. South China (Guangzhou)
 * @method string getZoneName() Obtain Availability zone: availability zone of a resource, e.g. Guangzhou Zone 3
 * @method void setZoneName(string $ZoneName) Set Availability zone: availability zone of a resource, e.g. Guangzhou Zone 3
 * @method string getResourceId() Obtain Instance ID
 * @method void setResourceId(string $ResourceId) Set Instance ID
 * @method string getResourceName() Obtain Instance name
 * @method void setResourceName(string $ResourceName) Set Instance name
 * @method string getActionTypeName() Obtain Transaction type
 * @method void setActionTypeName(string $ActionTypeName) Set Transaction type
 * @method string getOrderId() Obtain Order ID
 * @method void setOrderId(string $OrderId) Set Order ID
 * @method string getBillId() Obtain Transaction ID
 * @method void setBillId(string $BillId) Set Transaction ID
 * @method string getPayTime() Obtain Payment time
 * @method void setPayTime(string $PayTime) Set Payment time
 * @method string getFeeBeginTime() Obtain Service start time
 * @method void setFeeBeginTime(string $FeeBeginTime) Set Service start time
 * @method string getFeeEndTime() Obtain Service end time
 * @method void setFeeEndTime(string $FeeEndTime) Set Service end time
 * @method array getComponentSet() Obtain Component list
 * @method void setComponentSet(array $ComponentSet) Set Component list
 * @method string getPayerUin() Obtain Payer’s UIN
 * @method void setPayerUin(string $PayerUin) Set Payer’s UIN
 * @method string getOwnerUin() Obtain User’s UIN
 * @method void setOwnerUin(string $OwnerUin) Set User’s UIN
 * @method string getOperateUin() Obtain Operator's UIN
 * @method void setOperateUin(string $OperateUin) Set Operator's UIN
 * @method array getTags() Obtain Tag information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBusinessCode() Obtain 
 * @method void setBusinessCode(string $BusinessCode) Set 
 * @method string getProductCode() Obtain 
 * @method void setProductCode(string $ProductCode) Set 
 * @method string getActionType() Obtain 
 * @method void setActionType(string $ActionType) Set 
 */
class BillDetail extends AbstractModel
{
    /**
     * @var string Product name: major categories of Tencent Cloud services, e.g. CVM and TencentDB for MySQL
     */
    public $BusinessCodeName;

    /**
     * @var string Sub-product name: sub-categories of Tencent Cloud services, such as CVM-Standard S1
     */
    public $ProductCodeName;

    /**
     * @var string Billing mode
     */
    public $PayModeName;

    /**
     * @var string Project: project of a resource
     */
    public $ProjectName;

    /**
     * @var string Region: region of a resource, e.g. South China (Guangzhou)
     */
    public $RegionName;

    /**
     * @var string Availability zone: availability zone of a resource, e.g. Guangzhou Zone 3
     */
    public $ZoneName;

    /**
     * @var string Instance ID
     */
    public $ResourceId;

    /**
     * @var string Instance name
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
     * @var string Transaction ID
     */
    public $BillId;

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
     * @var array Component list
     */
    public $ComponentSet;

    /**
     * @var string Payer’s UIN
     */
    public $PayerUin;

    /**
     * @var string User’s UIN
     */
    public $OwnerUin;

    /**
     * @var string Operator's UIN
     */
    public $OperateUin;

    /**
     * @var array Tag information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string 
     */
    public $BusinessCode;

    /**
     * @var string 
     */
    public $ProductCode;

    /**
     * @var string 
     */
    public $ActionType;

    /**
     * @param string $BusinessCodeName Product name: major categories of Tencent Cloud services, e.g. CVM and TencentDB for MySQL
     * @param string $ProductCodeName Sub-product name: sub-categories of Tencent Cloud services, such as CVM-Standard S1
     * @param string $PayModeName Billing mode
     * @param string $ProjectName Project: project of a resource
     * @param string $RegionName Region: region of a resource, e.g. South China (Guangzhou)
     * @param string $ZoneName Availability zone: availability zone of a resource, e.g. Guangzhou Zone 3
     * @param string $ResourceId Instance ID
     * @param string $ResourceName Instance name
     * @param string $ActionTypeName Transaction type
     * @param string $OrderId Order ID
     * @param string $BillId Transaction ID
     * @param string $PayTime Payment time
     * @param string $FeeBeginTime Service start time
     * @param string $FeeEndTime Service end time
     * @param array $ComponentSet Component list
     * @param string $PayerUin Payer’s UIN
     * @param string $OwnerUin User’s UIN
     * @param string $OperateUin Operator's UIN
     * @param array $Tags Tag information
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BusinessCode 
     * @param string $ProductCode 
     * @param string $ActionType 
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

        if (array_key_exists("BillId",$param) and $param["BillId"] !== null) {
            $this->BillId = $param["BillId"];
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

        if (array_key_exists("ComponentSet",$param) and $param["ComponentSet"] !== null) {
            $this->ComponentSet = [];
            foreach ($param["ComponentSet"] as $key => $value){
                $obj = new BillDetailComponent();
                $obj->deserialize($value);
                array_push($this->ComponentSet, $obj);
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new BillTagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("ProductCode",$param) and $param["ProductCode"] !== null) {
            $this->ProductCode = $param["ProductCode"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }
    }
}
