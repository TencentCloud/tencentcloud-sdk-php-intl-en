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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method Placement getPlacement() Obtain Location of the instance
 * @method void setPlacement(Placement $Placement) Set Location of the instance
 * @method string getInstanceId() Obtain Instance `ID`
 * @method void setInstanceId(string $InstanceId) Set Instance `ID`
 * @method string getInstanceType() Obtain Instance model
 * @method void setInstanceType(string $InstanceType) Set Instance model
 * @method integer getCPU() Obtain Number of CPU cores of the instance; unit: core
 * @method void setCPU(integer $CPU) Set Number of CPU cores of the instance; unit: core
 * @method integer getMemory() Obtain Memory capacity; unit: `GB`.
 * @method void setMemory(integer $Memory) Set Memory capacity; unit: `GB`.
 * @method string getRestrictState() Obtain Instance status. Valid values: <br><li>NORMAL: instance is normal. <br><li>EXPIRED: instance expired. <br><li>PROTECTIVELY_ISOLATED: instance is protectively isolated.
 * @method void setRestrictState(string $RestrictState) Set Instance status. Valid values: <br><li>NORMAL: instance is normal. <br><li>EXPIRED: instance expired. <br><li>PROTECTIVELY_ISOLATED: instance is protectively isolated.
 * @method string getInstanceName() Obtain Instance name
 * @method void setInstanceName(string $InstanceName) Set Instance name
 * @method string getInstanceChargeType() Obtain Instance billing method. Valid values: <br><li>`PREPAID`: prepaid, i.e., monthly subscription <br><li>`POSTPAID_BY_HOUR`: pay-as-you-go <br><li>`CDHPAID`: you are only billed for the CDH instances, not the CVMs running on the CDHs. <br><li>`SPOTPAID`: you are billed based on your bid.
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing method. Valid values: <br><li>`PREPAID`: prepaid, i.e., monthly subscription <br><li>`POSTPAID_BY_HOUR`: pay-as-you-go <br><li>`CDHPAID`: you are only billed for the CDH instances, not the CVMs running on the CDHs. <br><li>`SPOTPAID`: you are billed based on your bid.
 * @method SystemDisk getSystemDisk() Obtain Information on the system disk of the instance
 * @method void setSystemDisk(SystemDisk $SystemDisk) Set Information on the system disk of the instance
 * @method array getDataDisks() Obtain Information on the data disks of the instance, which only covers the data disks purchased together with the instance. 
 * @method void setDataDisks(array $DataDisks) Set Information on the data disks of the instance, which only covers the data disks purchased together with the instance. 
 * @method array getPrivateIpAddresses() Obtain List of private IPs of the instance's primary ENI.
 * @method void setPrivateIpAddresses(array $PrivateIpAddresses) Set List of private IPs of the instance's primary ENI.
 * @method array getPublicIpAddresses() Obtain List of public IPs of the instance's primary ENI.
Note: This field may return null, indicating that no valid value is found.
 * @method void setPublicIpAddresses(array $PublicIpAddresses) Set List of public IPs of the instance's primary ENI.
Note: This field may return null, indicating that no valid value is found.
 * @method InternetAccessible getInternetAccessible() Obtain Information on instance bandwidth.
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set Information on instance bandwidth.
 * @method VirtualPrivateCloud getVirtualPrivateCloud() Obtain Information on the VPC where the instance resides.
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) Set Information on the VPC where the instance resides.
 * @method string getImageId() Obtain `ID` of the image used to create the instance.
 * @method void setImageId(string $ImageId) Set `ID` of the image used to create the instance.
 * @method string getRenewFlag() Obtain Auto renewal flag. Valid values: <br><li>`NOTIFY_AND_MANUAL_RENEW`: notify upon expiration, but do not renew automatically <br><li>`NOTIFY_AND_AUTO_RENEW`: notify upon expiration and renew automatically <br><li>`DISABLE_NOTIFY_AND_MANUAL_RENEW`: neither notify upon expiration nor renew automatically.
 * @method void setRenewFlag(string $RenewFlag) Set Auto renewal flag. Valid values: <br><li>`NOTIFY_AND_MANUAL_RENEW`: notify upon expiration, but do not renew automatically <br><li>`NOTIFY_AND_AUTO_RENEW`: notify upon expiration and renew automatically <br><li>`DISABLE_NOTIFY_AND_MANUAL_RENEW`: neither notify upon expiration nor renew automatically.
 * @method string getCreatedTime() Obtain Creation time following the `ISO8601` standard and using `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time following the `ISO8601` standard and using `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
 * @method string getExpiredTime() Obtain Expiration time following the `ISO8601` standard and using `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
 * @method void setExpiredTime(string $ExpiredTime) Set Expiration time following the `ISO8601` standard and using `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
 * @method string getOsName() Obtain Operating system name.
 * @method void setOsName(string $OsName) Set Operating system name.
 * @method array getSecurityGroupIds() Obtain Security groups to which the instance belongs. To obtain the security group IDs, you can call [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808) and look for the `sgld` fields in the response.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security groups to which the instance belongs. To obtain the security group IDs, you can call [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808) and look for the `sgld` fields in the response.
 * @method LoginSettings getLoginSettings() Obtain Login settings of the instance. Currently only the key associated with the instance is returned.
 * @method void setLoginSettings(LoginSettings $LoginSettings) Set Login settings of the instance. Currently only the key associated with the instance is returned.
 * @method string getInstanceState() Obtain Instance state. Valid values: <br><li>PENDING: creating <br></li><li>LAUNCH_FAILED: creation failed <br></li><li>RUNNING: running <br></li><li>STOPPED: shut down <br></li><li>STARTING: starting <br></li><li>STOPPING: shutting down <br></li><li>REBOOTING: rebooting <br></li><li>SHUTDOWN: shut down and to be terminated <br></li><li>TERMINATING: terminating. <br></li>
 * @method void setInstanceState(string $InstanceState) Set Instance state. Valid values: <br><li>PENDING: creating <br></li><li>LAUNCH_FAILED: creation failed <br></li><li>RUNNING: running <br></li><li>STOPPED: shut down <br></li><li>STARTING: starting <br></li><li>STOPPING: shutting down <br></li><li>REBOOTING: rebooting <br></li><li>SHUTDOWN: shut down and to be terminated <br></li><li>TERMINATING: terminating. <br></li>
 * @method array getTags() Obtain List of tags associated with the instance.
 * @method void setTags(array $Tags) Set List of tags associated with the instance.
 * @method string getStopChargingMode() Obtain Instance billing method after shutdown.
Valid values: <br><li>KEEP_CHARGING: billing continues after shutdown <br><li>STOP_CHARGING: billing stops after shutdown <li>NOT_APPLICABLE: the instance is not shut down or stopping billing after shutdown is not applicable to the instance. <br>
 * @method void setStopChargingMode(string $StopChargingMode) Set Instance billing method after shutdown.
Valid values: <br><li>KEEP_CHARGING: billing continues after shutdown <br><li>STOP_CHARGING: billing stops after shutdown <li>NOT_APPLICABLE: the instance is not shut down or stopping billing after shutdown is not applicable to the instance. <br>
 * @method string getUuid() Obtain 
 * @method void setUuid(string $Uuid) Set 
 * @method string getLatestOperation() Obtain 
 * @method void setLatestOperation(string $LatestOperation) Set 
 * @method string getLatestOperationState() Obtain 
 * @method void setLatestOperationState(string $LatestOperationState) Set 
 * @method string getLatestOperationRequestId() Obtain 
 * @method void setLatestOperationRequestId(string $LatestOperationRequestId) Set 
 */

/**
 *Describes information on an instance
 */
class Instance extends AbstractModel
{
    /**
     * @var Placement Location of the instance
     */
    public $Placement;

    /**
     * @var string Instance `ID`
     */
    public $InstanceId;

    /**
     * @var string Instance model
     */
    public $InstanceType;

    /**
     * @var integer Number of CPU cores of the instance; unit: core
     */
    public $CPU;

    /**
     * @var integer Memory capacity; unit: `GB`.
     */
    public $Memory;

    /**
     * @var string Instance status. Valid values: <br><li>NORMAL: instance is normal. <br><li>EXPIRED: instance expired. <br><li>PROTECTIVELY_ISOLATED: instance is protectively isolated.
     */
    public $RestrictState;

    /**
     * @var string Instance name
     */
    public $InstanceName;

    /**
     * @var string Instance billing method. Valid values: <br><li>`PREPAID`: prepaid, i.e., monthly subscription <br><li>`POSTPAID_BY_HOUR`: pay-as-you-go <br><li>`CDHPAID`: you are only billed for the CDH instances, not the CVMs running on the CDHs. <br><li>`SPOTPAID`: you are billed based on your bid.
     */
    public $InstanceChargeType;

    /**
     * @var SystemDisk Information on the system disk of the instance
     */
    public $SystemDisk;

    /**
     * @var array Information on the data disks of the instance, which only covers the data disks purchased together with the instance. 
     */
    public $DataDisks;

    /**
     * @var array List of private IPs of the instance's primary ENI.
     */
    public $PrivateIpAddresses;

    /**
     * @var array List of public IPs of the instance's primary ENI.
Note: This field may return null, indicating that no valid value is found.
     */
    public $PublicIpAddresses;

    /**
     * @var InternetAccessible Information on instance bandwidth.
     */
    public $InternetAccessible;

    /**
     * @var VirtualPrivateCloud Information on the VPC where the instance resides.
     */
    public $VirtualPrivateCloud;

    /**
     * @var string `ID` of the image used to create the instance.
     */
    public $ImageId;

    /**
     * @var string Auto renewal flag. Valid values: <br><li>`NOTIFY_AND_MANUAL_RENEW`: notify upon expiration, but do not renew automatically <br><li>`NOTIFY_AND_AUTO_RENEW`: notify upon expiration and renew automatically <br><li>`DISABLE_NOTIFY_AND_MANUAL_RENEW`: neither notify upon expiration nor renew automatically.
     */
    public $RenewFlag;

    /**
     * @var string Creation time following the `ISO8601` standard and using `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
     */
    public $CreatedTime;

    /**
     * @var string Expiration time following the `ISO8601` standard and using `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
     */
    public $ExpiredTime;

    /**
     * @var string Operating system name.
     */
    public $OsName;

    /**
     * @var array Security groups to which the instance belongs. To obtain the security group IDs, you can call [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808) and look for the `sgld` fields in the response.
     */
    public $SecurityGroupIds;

    /**
     * @var LoginSettings Login settings of the instance. Currently only the key associated with the instance is returned.
     */
    public $LoginSettings;

    /**
     * @var string Instance state. Valid values: <br><li>PENDING: creating <br></li><li>LAUNCH_FAILED: creation failed <br></li><li>RUNNING: running <br></li><li>STOPPED: shut down <br></li><li>STARTING: starting <br></li><li>STOPPING: shutting down <br></li><li>REBOOTING: rebooting <br></li><li>SHUTDOWN: shut down and to be terminated <br></li><li>TERMINATING: terminating. <br></li>
     */
    public $InstanceState;

    /**
     * @var array List of tags associated with the instance.
     */
    public $Tags;

    /**
     * @var string Instance billing method after shutdown.
Valid values: <br><li>KEEP_CHARGING: billing continues after shutdown <br><li>STOP_CHARGING: billing stops after shutdown <li>NOT_APPLICABLE: the instance is not shut down or stopping billing after shutdown is not applicable to the instance. <br>
     */
    public $StopChargingMode;

    /**
     * @var string 
     */
    public $Uuid;

    /**
     * @var string 
     */
    public $LatestOperation;

    /**
     * @var string 
     */
    public $LatestOperationState;

    /**
     * @var string 
     */
    public $LatestOperationRequestId;
    /**
     * @param Placement $Placement Location of the instance
     * @param string $InstanceId Instance `ID`
     * @param string $InstanceType Instance model
     * @param integer $CPU Number of CPU cores of the instance; unit: core
     * @param integer $Memory Memory capacity; unit: `GB`.
     * @param string $RestrictState Instance status. Valid values: <br><li>NORMAL: instance is normal. <br><li>EXPIRED: instance expired. <br><li>PROTECTIVELY_ISOLATED: instance is protectively isolated.
     * @param string $InstanceName Instance name
     * @param string $InstanceChargeType Instance billing method. Valid values: <br><li>`PREPAID`: prepaid, i.e., monthly subscription <br><li>`POSTPAID_BY_HOUR`: pay-as-you-go <br><li>`CDHPAID`: you are only billed for the CDH instances, not the CVMs running on the CDHs. <br><li>`SPOTPAID`: you are billed based on your bid.
     * @param SystemDisk $SystemDisk Information on the system disk of the instance
     * @param array $DataDisks Information on the data disks of the instance, which only covers the data disks purchased together with the instance. 
     * @param array $PrivateIpAddresses List of private IPs of the instance's primary ENI.
     * @param array $PublicIpAddresses List of public IPs of the instance's primary ENI.
Note: This field may return null, indicating that no valid value is found.
     * @param InternetAccessible $InternetAccessible Information on instance bandwidth.
     * @param VirtualPrivateCloud $VirtualPrivateCloud Information on the VPC where the instance resides.
     * @param string $ImageId `ID` of the image used to create the instance.
     * @param string $RenewFlag Auto renewal flag. Valid values: <br><li>`NOTIFY_AND_MANUAL_RENEW`: notify upon expiration, but do not renew automatically <br><li>`NOTIFY_AND_AUTO_RENEW`: notify upon expiration and renew automatically <br><li>`DISABLE_NOTIFY_AND_MANUAL_RENEW`: neither notify upon expiration nor renew automatically.
     * @param string $CreatedTime Creation time following the `ISO8601` standard and using `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
     * @param string $ExpiredTime Expiration time following the `ISO8601` standard and using `UTC` time in the format of `YYYY-MM-DDThh:mm:ssZ`.
     * @param string $OsName Operating system name.
     * @param array $SecurityGroupIds Security groups to which the instance belongs. To obtain the security group IDs, you can call [DescribeSecurityGroups](https://intl.cloud.tencent.com/document/api/215/15808) and look for the `sgld` fields in the response.
     * @param LoginSettings $LoginSettings Login settings of the instance. Currently only the key associated with the instance is returned.
     * @param string $InstanceState Instance state. Valid values: <br><li>PENDING: creating <br></li><li>LAUNCH_FAILED: creation failed <br></li><li>RUNNING: running <br></li><li>STOPPED: shut down <br></li><li>STARTING: starting <br></li><li>STOPPING: shutting down <br></li><li>REBOOTING: rebooting <br></li><li>SHUTDOWN: shut down and to be terminated <br></li><li>TERMINATING: terminating. <br></li>
     * @param array $Tags List of tags associated with the instance.
     * @param string $StopChargingMode Instance billing method after shutdown.
Valid values: <br><li>KEEP_CHARGING: billing continues after shutdown <br><li>STOP_CHARGING: billing stops after shutdown <li>NOT_APPLICABLE: the instance is not shut down or stopping billing after shutdown is not applicable to the instance. <br>
     * @param string $Uuid 
     * @param string $LatestOperation 
     * @param string $LatestOperationState 
     * @param string $LatestOperationRequestId 
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
        if (array_key_exists("Placement",$param) and $param["Placement"] !== null) {
            $this->Placement = new Placement();
            $this->Placement->deserialize($param["Placement"]);
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("RestrictState",$param) and $param["RestrictState"] !== null) {
            $this->RestrictState = $param["RestrictState"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("DataDisks",$param) and $param["DataDisks"] !== null) {
            $this->DataDisks = [];
            foreach ($param["DataDisks"] as $key => $value){
                $obj = new DataDisk();
                $obj->deserialize($value);
                array_push($this->DataDisks, $obj);
            }
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("PublicIpAddresses",$param) and $param["PublicIpAddresses"] !== null) {
            $this->PublicIpAddresses = $param["PublicIpAddresses"];
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("VirtualPrivateCloud",$param) and $param["VirtualPrivateCloud"] !== null) {
            $this->VirtualPrivateCloud = new VirtualPrivateCloud();
            $this->VirtualPrivateCloud->deserialize($param["VirtualPrivateCloud"]);
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("StopChargingMode",$param) and $param["StopChargingMode"] !== null) {
            $this->StopChargingMode = $param["StopChargingMode"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("LatestOperation",$param) and $param["LatestOperation"] !== null) {
            $this->LatestOperation = $param["LatestOperation"];
        }

        if (array_key_exists("LatestOperationState",$param) and $param["LatestOperationState"] !== null) {
            $this->LatestOperationState = $param["LatestOperationState"];
        }

        if (array_key_exists("LatestOperationRequestId",$param) and $param["LatestOperationRequestId"] !== null) {
            $this->LatestOperationRequestId = $param["LatestOperationRequestId"];
        }
    }
}
