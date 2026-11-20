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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Describes the instance information.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getBundleId() Obtain Bundle ID.
 * @method void setBundleId(string $BundleId) Set Bundle ID.
 * @method string getBlueprintId() Obtain Image ID.
 * @method void setBlueprintId(string $BlueprintId) Set Image ID.
 * @method integer getCPU() Obtain Number of CPU cores for the instance, in cores.
 * @method void setCPU(integer $CPU) Set Number of CPU cores for the instance, in cores.
 * @method integer getMemory() Obtain Instance memory capacity, in GB.
 * @method void setMemory(integer $Memory) Set Instance memory capacity, in GB.
 * @method string getInstanceName() Obtain Instance name.
 * @method void setInstanceName(string $InstanceName) Set Instance name.
 * @method string getInstanceChargeType() Obtain Instance billing mode. Valid values: 
PREPAID: prepaid, that is, monthly or yearly subscription.
 * @method void setInstanceChargeType(string $InstanceChargeType) Set Instance billing mode. Valid values: 
PREPAID: prepaid, that is, monthly or yearly subscription.
 * @method SystemDisk getSystemDisk() Obtain Instance system disk information.
 * @method void setSystemDisk(SystemDisk $SystemDisk) Set Instance system disk information.
 * @method array getPrivateAddresses() Obtain Private IP of the instance's primary NIC. 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPrivateAddresses(array $PrivateAddresses) Set Private IP of the instance's primary NIC. 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getPublicAddresses() Obtain Public IP of the instance's primary NIC. 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setPublicAddresses(array $PublicAddresses) Set Public IP of the instance's primary NIC. 
Note: This field may return null, indicating that no valid value can be obtained.
 * @method InternetAccessible getInternetAccessible() Obtain Instance bandwidth information.
 * @method void setInternetAccessible(InternetAccessible $InternetAccessible) Set Instance bandwidth information.
 * @method string getRenewFlag() Obtain Auto-renewal flag. Valid values: 
NOTIFY_AND_MANUAL_RENEW: Notify when the subscription is about to expire, but do not renew automatically.  
NOTIFY_AND_AUTO_RENEW: Notify when the subscription is about to expire and renew automatically. DISABLE_NOTIFY_AND_MANUAL_RENEW: Do not renew automatically or send notifications.
 * @method void setRenewFlag(string $RenewFlag) Set Auto-renewal flag. Valid values: 
NOTIFY_AND_MANUAL_RENEW: Notify when the subscription is about to expire, but do not renew automatically.  
NOTIFY_AND_AUTO_RENEW: Notify when the subscription is about to expire and renew automatically. DISABLE_NOTIFY_AND_MANUAL_RENEW: Do not renew automatically or send notifications.
 * @method LoginSettings getLoginSettings() Obtain Instance login setting.
 * @method void setLoginSettings(LoginSettings $LoginSettings) Set Instance login setting.
 * @method string getInstanceState() Obtain Instance status. Valid values: 
<li>PENDING: Creating</li><li>LAUNCH_FAILED: Failed to create</li><li>RUNNING: Running</li><li>STOPPED: Shut down</li><li>STARTING: Starting up</li><li>STOPPING: Shutting down</li><li>REBOOTING: Restarting</li><li>SHUTDOWN: Shutdown and to be terminated</li><li>TERMINATING: Terminating</li><li>DELETING: Deleting</li><li>FREEZING: Frozen</li><li>ENTER_RESCUE_MODE: Entering the rescue mode</li><li>RESCUE_MODE: Rescue mode</li><li>EXIT_RESCUE_MODE: Exiting the rescue mode</li>
 * @method void setInstanceState(string $InstanceState) Set Instance status. Valid values: 
<li>PENDING: Creating</li><li>LAUNCH_FAILED: Failed to create</li><li>RUNNING: Running</li><li>STOPPED: Shut down</li><li>STARTING: Starting up</li><li>STOPPING: Shutting down</li><li>REBOOTING: Restarting</li><li>SHUTDOWN: Shutdown and to be terminated</li><li>TERMINATING: Terminating</li><li>DELETING: Deleting</li><li>FREEZING: Frozen</li><li>ENTER_RESCUE_MODE: Entering the rescue mode</li><li>RESCUE_MODE: Rescue mode</li><li>EXIT_RESCUE_MODE: Exiting the rescue mode</li>
 * @method string getUuid() Obtain Globally unique ID of the instance.
 * @method void setUuid(string $Uuid) Set Globally unique ID of the instance.
 * @method string getLatestOperation() Obtain Latest operation on the instance, such as StopInstances and ResetInstance. Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLatestOperation(string $LatestOperation) Set Latest operation on the instance, such as StopInstances and ResetInstance. Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLatestOperationState() Obtain Status of the latest operation on the instance. Valid values: 
SUCCESS: The operation succeeded. 
OPERATING: The operation is in progress. 
FAILED: The operation failed. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLatestOperationState(string $LatestOperationState) Set Status of the latest operation on the instance. Valid values: 
SUCCESS: The operation succeeded. 
OPERATING: The operation is in progress. 
FAILED: The operation failed. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLatestOperationRequestId() Obtain Unique request ID of the latest operation on the instance. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLatestOperationRequestId(string $LatestOperationRequestId) Set Unique request ID of the latest operation on the instance. 
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLatestOperationStartedTime() Obtain Start time of the latest operation on the instance.
 * @method void setLatestOperationStartedTime(string $LatestOperationStartedTime) Set Start time of the latest operation on the instance.
 * @method string getIsolatedTime() Obtain Isolation time in UTC, formatted according to the ISO 8601 standard. 
Format: YYYY-MM-DDThh:mm:ssZ.
 * @method void setIsolatedTime(string $IsolatedTime) Set Isolation time in UTC, formatted according to the ISO 8601 standard. 
Format: YYYY-MM-DDThh:mm:ssZ.
 * @method string getCreatedTime() Obtain Creation time in UTC, formatted according to the ISO 8601 standard. 
Format: YYYY-MM-DDThh:mm:ssZ.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time in UTC, formatted according to the ISO 8601 standard. 
Format: YYYY-MM-DDThh:mm:ssZ.
 * @method string getExpiredTime() Obtain Expiration time in UTC, formatted according to the ISO 8601 standard. 
Format: YYYY-MM-DDThh:mm:ssZ.
 * @method void setExpiredTime(string $ExpiredTime) Set Expiration time in UTC, formatted according to the ISO 8601 standard. 
Format: YYYY-MM-DDThh:mm:ssZ.
 * @method string getPlatformType() Obtain Operating system platform type, such as LINUX_UNIX and WINDOWS.
 * @method void setPlatformType(string $PlatformType) Set Operating system platform type, such as LINUX_UNIX and WINDOWS.
 * @method string getPlatform() Obtain Operating system platform.
 * @method void setPlatform(string $Platform) Set Operating system platform.
 * @method string getOsName() Obtain Operating system name.
 * @method void setOsName(string $OsName) Set Operating system name.
 * @method string getZone() Obtain AZ.
 * @method void setZone(string $Zone) Set AZ.
 * @method array getTags() Obtain List of tags bound to the instance.
 * @method void setTags(array $Tags) Set List of tags bound to the instance.
 * @method string getInstanceRestrictState() Obtain Instance ban status. Valid values:
<li>NORMAL: The instance is normal.</li><li>NETWORK_RESTRICT: The instance is banned from network access.</li>
 * @method void setInstanceRestrictState(string $InstanceRestrictState) Set Instance ban status. Valid values:
<li>NORMAL: The instance is normal.</li><li>NETWORK_RESTRICT: The instance is banned from network access.</li>
 * @method string getInitInvocationId() Obtain Invocation ID of the TAT command to be automatically executed after the instance is created.
 * @method void setInitInvocationId(string $InitInvocationId) Set Invocation ID of the TAT command to be automatically executed after the instance is created.
 * @method InstanceViolationDetail getInstanceViolationDetail() Obtain Instance violation details.
 * @method void setInstanceViolationDetail(InstanceViolationDetail $InstanceViolationDetail) Set Instance violation details.
 */
class Instance extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Bundle ID.
     */
    public $BundleId;

    /**
     * @var string Image ID.
     */
    public $BlueprintId;

    /**
     * @var integer Number of CPU cores for the instance, in cores.
     */
    public $CPU;

    /**
     * @var integer Instance memory capacity, in GB.
     */
    public $Memory;

    /**
     * @var string Instance name.
     */
    public $InstanceName;

    /**
     * @var string Instance billing mode. Valid values: 
PREPAID: prepaid, that is, monthly or yearly subscription.
     */
    public $InstanceChargeType;

    /**
     * @var SystemDisk Instance system disk information.
     */
    public $SystemDisk;

    /**
     * @var array Private IP of the instance's primary NIC. 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PrivateAddresses;

    /**
     * @var array Public IP of the instance's primary NIC. 
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $PublicAddresses;

    /**
     * @var InternetAccessible Instance bandwidth information.
     */
    public $InternetAccessible;

    /**
     * @var string Auto-renewal flag. Valid values: 
NOTIFY_AND_MANUAL_RENEW: Notify when the subscription is about to expire, but do not renew automatically.  
NOTIFY_AND_AUTO_RENEW: Notify when the subscription is about to expire and renew automatically. DISABLE_NOTIFY_AND_MANUAL_RENEW: Do not renew automatically or send notifications.
     */
    public $RenewFlag;

    /**
     * @var LoginSettings Instance login setting.
     */
    public $LoginSettings;

    /**
     * @var string Instance status. Valid values: 
<li>PENDING: Creating</li><li>LAUNCH_FAILED: Failed to create</li><li>RUNNING: Running</li><li>STOPPED: Shut down</li><li>STARTING: Starting up</li><li>STOPPING: Shutting down</li><li>REBOOTING: Restarting</li><li>SHUTDOWN: Shutdown and to be terminated</li><li>TERMINATING: Terminating</li><li>DELETING: Deleting</li><li>FREEZING: Frozen</li><li>ENTER_RESCUE_MODE: Entering the rescue mode</li><li>RESCUE_MODE: Rescue mode</li><li>EXIT_RESCUE_MODE: Exiting the rescue mode</li>
     */
    public $InstanceState;

    /**
     * @var string Globally unique ID of the instance.
     */
    public $Uuid;

    /**
     * @var string Latest operation on the instance, such as StopInstances and ResetInstance. Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LatestOperation;

    /**
     * @var string Status of the latest operation on the instance. Valid values: 
SUCCESS: The operation succeeded. 
OPERATING: The operation is in progress. 
FAILED: The operation failed. 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LatestOperationState;

    /**
     * @var string Unique request ID of the latest operation on the instance. 
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LatestOperationRequestId;

    /**
     * @var string Start time of the latest operation on the instance.
     */
    public $LatestOperationStartedTime;

    /**
     * @var string Isolation time in UTC, formatted according to the ISO 8601 standard. 
Format: YYYY-MM-DDThh:mm:ssZ.
     */
    public $IsolatedTime;

    /**
     * @var string Creation time in UTC, formatted according to the ISO 8601 standard. 
Format: YYYY-MM-DDThh:mm:ssZ.
     */
    public $CreatedTime;

    /**
     * @var string Expiration time in UTC, formatted according to the ISO 8601 standard. 
Format: YYYY-MM-DDThh:mm:ssZ.
     */
    public $ExpiredTime;

    /**
     * @var string Operating system platform type, such as LINUX_UNIX and WINDOWS.
     */
    public $PlatformType;

    /**
     * @var string Operating system platform.
     */
    public $Platform;

    /**
     * @var string Operating system name.
     */
    public $OsName;

    /**
     * @var string AZ.
     */
    public $Zone;

    /**
     * @var array List of tags bound to the instance.
     */
    public $Tags;

    /**
     * @var string Instance ban status. Valid values:
<li>NORMAL: The instance is normal.</li><li>NETWORK_RESTRICT: The instance is banned from network access.</li>
     */
    public $InstanceRestrictState;

    /**
     * @var string Invocation ID of the TAT command to be automatically executed after the instance is created.
     */
    public $InitInvocationId;

    /**
     * @var InstanceViolationDetail Instance violation details.
     */
    public $InstanceViolationDetail;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $BundleId Bundle ID.
     * @param string $BlueprintId Image ID.
     * @param integer $CPU Number of CPU cores for the instance, in cores.
     * @param integer $Memory Instance memory capacity, in GB.
     * @param string $InstanceName Instance name.
     * @param string $InstanceChargeType Instance billing mode. Valid values: 
PREPAID: prepaid, that is, monthly or yearly subscription.
     * @param SystemDisk $SystemDisk Instance system disk information.
     * @param array $PrivateAddresses Private IP of the instance's primary NIC. 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $PublicAddresses Public IP of the instance's primary NIC. 
Note: This field may return null, indicating that no valid value can be obtained.
     * @param InternetAccessible $InternetAccessible Instance bandwidth information.
     * @param string $RenewFlag Auto-renewal flag. Valid values: 
NOTIFY_AND_MANUAL_RENEW: Notify when the subscription is about to expire, but do not renew automatically.  
NOTIFY_AND_AUTO_RENEW: Notify when the subscription is about to expire and renew automatically. DISABLE_NOTIFY_AND_MANUAL_RENEW: Do not renew automatically or send notifications.
     * @param LoginSettings $LoginSettings Instance login setting.
     * @param string $InstanceState Instance status. Valid values: 
<li>PENDING: Creating</li><li>LAUNCH_FAILED: Failed to create</li><li>RUNNING: Running</li><li>STOPPED: Shut down</li><li>STARTING: Starting up</li><li>STOPPING: Shutting down</li><li>REBOOTING: Restarting</li><li>SHUTDOWN: Shutdown and to be terminated</li><li>TERMINATING: Terminating</li><li>DELETING: Deleting</li><li>FREEZING: Frozen</li><li>ENTER_RESCUE_MODE: Entering the rescue mode</li><li>RESCUE_MODE: Rescue mode</li><li>EXIT_RESCUE_MODE: Exiting the rescue mode</li>
     * @param string $Uuid Globally unique ID of the instance.
     * @param string $LatestOperation Latest operation on the instance, such as StopInstances and ResetInstance. Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LatestOperationState Status of the latest operation on the instance. Valid values: 
SUCCESS: The operation succeeded. 
OPERATING: The operation is in progress. 
FAILED: The operation failed. 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LatestOperationRequestId Unique request ID of the latest operation on the instance. 
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LatestOperationStartedTime Start time of the latest operation on the instance.
     * @param string $IsolatedTime Isolation time in UTC, formatted according to the ISO 8601 standard. 
Format: YYYY-MM-DDThh:mm:ssZ.
     * @param string $CreatedTime Creation time in UTC, formatted according to the ISO 8601 standard. 
Format: YYYY-MM-DDThh:mm:ssZ.
     * @param string $ExpiredTime Expiration time in UTC, formatted according to the ISO 8601 standard. 
Format: YYYY-MM-DDThh:mm:ssZ.
     * @param string $PlatformType Operating system platform type, such as LINUX_UNIX and WINDOWS.
     * @param string $Platform Operating system platform.
     * @param string $OsName Operating system name.
     * @param string $Zone AZ.
     * @param array $Tags List of tags bound to the instance.
     * @param string $InstanceRestrictState Instance ban status. Valid values:
<li>NORMAL: The instance is normal.</li><li>NETWORK_RESTRICT: The instance is banned from network access.</li>
     * @param string $InitInvocationId Invocation ID of the TAT command to be automatically executed after the instance is created.
     * @param InstanceViolationDetail $InstanceViolationDetail Instance violation details.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("BundleId",$param) and $param["BundleId"] !== null) {
            $this->BundleId = $param["BundleId"];
        }

        if (array_key_exists("BlueprintId",$param) and $param["BlueprintId"] !== null) {
            $this->BlueprintId = $param["BlueprintId"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
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

        if (array_key_exists("PrivateAddresses",$param) and $param["PrivateAddresses"] !== null) {
            $this->PrivateAddresses = $param["PrivateAddresses"];
        }

        if (array_key_exists("PublicAddresses",$param) and $param["PublicAddresses"] !== null) {
            $this->PublicAddresses = $param["PublicAddresses"];
        }

        if (array_key_exists("InternetAccessible",$param) and $param["InternetAccessible"] !== null) {
            $this->InternetAccessible = new InternetAccessible();
            $this->InternetAccessible->deserialize($param["InternetAccessible"]);
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
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

        if (array_key_exists("LatestOperationStartedTime",$param) and $param["LatestOperationStartedTime"] !== null) {
            $this->LatestOperationStartedTime = $param["LatestOperationStartedTime"];
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("PlatformType",$param) and $param["PlatformType"] !== null) {
            $this->PlatformType = $param["PlatformType"];
        }

        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("InstanceRestrictState",$param) and $param["InstanceRestrictState"] !== null) {
            $this->InstanceRestrictState = $param["InstanceRestrictState"];
        }

        if (array_key_exists("InitInvocationId",$param) and $param["InitInvocationId"] !== null) {
            $this->InitInvocationId = $param["InitInvocationId"];
        }

        if (array_key_exists("InstanceViolationDetail",$param) and $param["InstanceViolationDetail"] !== null) {
            $this->InstanceViolationDetail = new InstanceViolationDetail();
            $this->InstanceViolationDetail->deserialize($param["InstanceViolationDetail"]);
        }
    }
}
