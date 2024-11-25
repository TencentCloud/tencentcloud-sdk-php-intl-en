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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Node information
 *
 * @method string getMachineName() Obtain Node name
 * @method void setMachineName(string $MachineName) Set Node name
 * @method string getMachineState() Obtain Machine status
 * @method void setMachineState(string $MachineState) Set Machine status
 * @method string getZone() Obtain Machine availability zone
 * @method void setZone(string $Zone) Set Machine availability zone
 * @method string getInstanceChargeType() Obtain Node billing type. PREPAID: Monthly subscription; POSTPAID_BY_HOUR: Pay-as-you-go (default);
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Node billing type. PREPAID: Monthly subscription; POSTPAID_BY_HOUR: Pay-as-you-go (default);
 * @method string getCreatedAt() Obtain Creation time
 * @method void setCreatedAt(string $CreatedAt) Set Creation time
 * @method string getLoginStatus() Obtain Machine login status
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setLoginStatus(string $LoginStatus) Set Machine login status
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method boolean getIsProtectedFromScaleIn() Obtain Whether to enable scale-in protection
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setIsProtectedFromScaleIn(boolean $IsProtectedFromScaleIn) Set Whether to enable scale-in protection
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getDisplayName() Obtain Machine name
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setDisplayName(string $DisplayName) Set Machine name
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method integer getCPU() Obtain Number of CPU cores (unit: cores)
 * @method void setCPU(integer $CPU) Set Number of CPU cores (unit: cores)
 * @method integer getGPU() Obtain Number of GPU cores (unit: cores)
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setGPU(integer $GPU) Set Number of GPU cores (unit: cores)
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getRenewFlag() Obtain Auto-renewal label
 * @method void setRenewFlag(string $RenewFlag) Set Auto-renewal label
 * @method string getPayMode() Obtain Node billing mode (deprecated)
 * @method void setPayMode(string $PayMode) Set Node billing mode (deprecated)
 * @method integer getMemory() Obtain Node memory capacity (unit: `GB`)
 * @method void setMemory(integer $Memory) Set Node memory capacity (unit: `GB`)
 * @method InternetAccessible getInternetAccessible() Obtain Public network bandwidth configuration
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set Public network bandwidth configuration
 * @method string getInstanceFamily() Obtain Model family
 * @method void setInstanceFamily(string $InstanceFamily) Set Model family
 * @method string getLanIp() Obtain Node private network IP
 * @method void setLanIp(string $LanIp) Set Node private network IP
 * @method string getInstanceType() Obtain Model
 * @method void setInstanceType(string $InstanceType) Set Model
 * @method string getExpiredTime() Obtain Billing expiration time of monthly subscription nodes
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setExpiredTime(string $ExpiredTime) Set Billing expiration time of monthly subscription nodes
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method array getSecurityGroupIDs() Obtain Security group list
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setSecurityGroupIDs(array $SecurityGroupIDs) Set Security group list
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getVpcId() Obtain VPC unique ID
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setVpcId(string $VpcId) Set VPC unique ID
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getSubnetId() Obtain Subnet unique ID
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setSubnetId(string $SubnetId) Set Subnet unique ID
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getOsImage() Obtain OS name
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method void setOsImage(string $OsImage) Set OS name
Note: This field may return "null", indicating that no valid value can be obtained.
 * @method string getInstanceId() Obtain 
 * @method void setInstanceId(string $InstanceId) Set 
 */
class NativeNodeInfo extends AbstractModel
{
    /**
     * @var string Node name
     */
    public $MachineName;

    /**
     * @var string Machine status
     */
    public $MachineState;

    /**
     * @var string Machine availability zone
     */
    public $Zone;

    /**
     * @var string Node billing type. PREPAID: Monthly subscription; POSTPAID_BY_HOUR: Pay-as-you-go (default);
     */
    public $InstanceChargeType;

    /**
     * @var string Creation time
     */
    public $CreatedAt;

    /**
     * @var string Machine login status
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $LoginStatus;

    /**
     * @var boolean Whether to enable scale-in protection
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $IsProtectedFromScaleIn;

    /**
     * @var string Machine name
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $DisplayName;

    /**
     * @var integer Number of CPU cores (unit: cores)
     */
    public $CPU;

    /**
     * @var integer Number of GPU cores (unit: cores)
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $GPU;

    /**
     * @var string Auto-renewal label
     */
    public $RenewFlag;

    /**
     * @var string Node billing mode (deprecated)
     */
    public $PayMode;

    /**
     * @var integer Node memory capacity (unit: `GB`)
     */
    public $Memory;

    /**
     * @var InternetAccessible Public network bandwidth configuration
     */
    public $InternetAccessible;

    /**
     * @var string Model family
     */
    public $InstanceFamily;

    /**
     * @var string Node private network IP
     */
    public $LanIp;

    /**
     * @var string Model
     */
    public $InstanceType;

    /**
     * @var string Billing expiration time of monthly subscription nodes
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $ExpiredTime;

    /**
     * @var array Security group list
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $SecurityGroupIDs;

    /**
     * @var string VPC unique ID
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $VpcId;

    /**
     * @var string Subnet unique ID
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $SubnetId;

    /**
     * @var string OS name
Note: This field may return "null", indicating that no valid value can be obtained.
     */
    public $OsImage;

    /**
     * @var string 
     */
    public $InstanceId;

    /**
     * @param string $MachineName Node name
     * @param string $MachineState Machine status
     * @param string $Zone Machine availability zone
     * @param string $InstanceChargeType Node billing type. PREPAID: Monthly subscription; POSTPAID_BY_HOUR: Pay-as-you-go (default);
     * @param string $CreatedAt Creation time
     * @param string $LoginStatus Machine login status
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param boolean $IsProtectedFromScaleIn Whether to enable scale-in protection
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $DisplayName Machine name
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param integer $CPU Number of CPU cores (unit: cores)
     * @param integer $GPU Number of GPU cores (unit: cores)
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $RenewFlag Auto-renewal label
     * @param string $PayMode Node billing mode (deprecated)
     * @param integer $Memory Node memory capacity (unit: `GB`)
     * @param InternetAccessible $InternetAccessible Public network bandwidth configuration
     * @param string $InstanceFamily Model family
     * @param string $LanIp Node private network IP
     * @param string $InstanceType Model
     * @param string $ExpiredTime Billing expiration time of monthly subscription nodes
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param array $SecurityGroupIDs Security group list
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $VpcId VPC unique ID
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $SubnetId Subnet unique ID
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $OsImage OS name
Note: This field may return "null", indicating that no valid value can be obtained.
     * @param string $InstanceId 
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
        if (array_key_exists("MachineName",$param) and $param["MachineName"] !== null) {
            $this->MachineName = $param["MachineName"];
        }

        if (array_key_exists("MachineState",$param) and $param["MachineState"] !== null) {
            $this->MachineState = $param["MachineState"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("LoginStatus",$param) and $param["LoginStatus"] !== null) {
            $this->LoginStatus = $param["LoginStatus"];
        }

        if (array_key_exists("IsProtectedFromScaleIn",$param) and $param["IsProtectedFromScaleIn"] !== null) {
            $this->IsProtectedFromScaleIn = $param["IsProtectedFromScaleIn"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("GPU",$param) and $param["GPU"] !== null) {
            $this->GPU = $param["GPU"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("InstanceFamily",$param) and $param["InstanceFamily"] !== null) {
            $this->InstanceFamily = $param["InstanceFamily"];
        }

        if (array_key_exists("LanIp",$param) and $param["LanIp"] !== null) {
            $this->LanIp = $param["LanIp"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("SecurityGroupIDs",$param) and $param["SecurityGroupIDs"] !== null) {
            $this->SecurityGroupIDs = $param["SecurityGroupIDs"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("OsImage",$param) and $param["OsImage"] !== null) {
            $this->OsImage = $param["OsImage"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
