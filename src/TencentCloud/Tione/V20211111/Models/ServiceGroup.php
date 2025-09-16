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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of a service group for an online service.
 *
 * @method string getServiceGroupId() Obtain Service group ID.
 * @method void setServiceGroupId(string $ServiceGroupId) Set Service group ID.
 * @method string getServiceGroupName() Obtain Service group name.
 * @method void setServiceGroupName(string $ServiceGroupName) Set Service group name.
 * @method string getCreatedBy() Obtain Creator.
 * @method void setCreatedBy(string $CreatedBy) Set Creator.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 * @method string getUin() Obtain Root account.
 * @method void setUin(string $Uin) Set Root account.
 * @method integer getServiceCount() Obtain Total number of services in the service group.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServiceCount(integer $ServiceCount) Set Total number of services in the service group.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRunningServiceCount() Obtain Number of running services in the service group.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRunningServiceCount(integer $RunningServiceCount) Set Number of running services in the service group.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getServices() Obtain Service description.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setServices(array $Services) Set Service description.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStatus() Obtain Service group status, which aligns with service status.CREATING: creating.CREATE_FAILED: creation failed.Normal: running.Stopped: stopped.Stopping: stopping.Abnormal: error.Pending: starting.Waiting: getting ready.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStatus(string $Status) Set Service group status, which aligns with service status.CREATING: creating.CREATE_FAILED: creation failed.Normal: running.Stopped: stopped.Stopping: stopping.Abnormal: error.Pending: starting.Waiting: getting ready.Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Service group tags.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Service group tags.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getLatestVersion() Obtain The latest version in the service group.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLatestVersion(string $LatestVersion) Set The latest version in the service group.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBusinessStatus() Obtain Operational status of the service.CREATING: creating.CREATE_FAILED: creation failed.ARREARS_STOP: service suspended due to overdue payments.BILLING: billing.WHITELIST_USING: allowlist feature is in trial.WHITELIST_STOP: insufficient allowlist quota.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBusinessStatus(string $BusinessStatus) Set Operational status of the service.CREATING: creating.CREATE_FAILED: creation failed.ARREARS_STOP: service suspended due to overdue payments.BILLING: billing.WHITELIST_USING: allowlist feature is in trial.WHITELIST_STOP: insufficient allowlist quota.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBillingInfo() Obtain Billing information of the service.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBillingInfo(string $BillingInfo) Set Billing information of the service.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCreateSource() Obtain Creation source of the service.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCreateSource(string $CreateSource) Set Creation source of the service.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWeightUpdateStatus() Obtain Weight update status of the service group.UPDATING: updating.UPDATED: updated successfully.UPDATE FAILED: failed to update.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWeightUpdateStatus(string $WeightUpdateStatus) Set Weight update status of the service group.UPDATING: updating.UPDATED: updated successfully.UPDATE FAILED: failed to update.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getReplicasCount() Obtain Number of running Pods in the service group.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setReplicasCount(integer $ReplicasCount) Set Number of running Pods in the service group.Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAvailableReplicasCount() Obtain Expected number of Pods under the service group.Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAvailableReplicasCount(integer $AvailableReplicasCount) Set Expected number of Pods under the service group.Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubUin() Obtain Service group's subuin.
 * @method void setSubUin(string $SubUin) Set Service group's subuin.
 * @method integer getAppId() Obtain Service group's app_id.
 * @method void setAppId(integer $AppId) Set Service group's app_id.
 * @method boolean getAuthorizationEnable() Obtain Whether to enable authentication.
 * @method void setAuthorizationEnable(boolean $AuthorizationEnable) Set Whether to enable authentication.
 * @method array getAuthTokens() Obtain List of throttling authentication tokens.
 * @method void setAuthTokens(array $AuthTokens) Set List of throttling authentication tokens.
 * @method string getMonitorSource() Obtain Field for monitoring creation source.
 * @method void setMonitorSource(string $MonitorSource) Set Field for monitoring creation source.
 * @method string getSubUinName() Obtain Nickname of the sub-user.
 * @method void setSubUinName(string $SubUinName) Set Nickname of the sub-user.
 */
class ServiceGroup extends AbstractModel
{
    /**
     * @var string Service group ID.
     */
    public $ServiceGroupId;

    /**
     * @var string Service group name.
     */
    public $ServiceGroupName;

    /**
     * @var string Creator.
     */
    public $CreatedBy;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Update time.
     */
    public $UpdateTime;

    /**
     * @var string Root account.
     */
    public $Uin;

    /**
     * @var integer Total number of services in the service group.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ServiceCount;

    /**
     * @var integer Number of running services in the service group.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RunningServiceCount;

    /**
     * @var array Service description.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Services;

    /**
     * @var string Service group status, which aligns with service status.CREATING: creating.CREATE_FAILED: creation failed.Normal: running.Stopped: stopped.Stopping: stopping.Abnormal: error.Pending: starting.Waiting: getting ready.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Status;

    /**
     * @var array Service group tags.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var string The latest version in the service group.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LatestVersion;

    /**
     * @var string Operational status of the service.CREATING: creating.CREATE_FAILED: creation failed.ARREARS_STOP: service suspended due to overdue payments.BILLING: billing.WHITELIST_USING: allowlist feature is in trial.WHITELIST_STOP: insufficient allowlist quota.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BusinessStatus;

    /**
     * @var string Billing information of the service.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BillingInfo;

    /**
     * @var string Creation source of the service.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CreateSource;

    /**
     * @var string Weight update status of the service group.UPDATING: updating.UPDATED: updated successfully.UPDATE FAILED: failed to update.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WeightUpdateStatus;

    /**
     * @var integer Number of running Pods in the service group.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ReplicasCount;

    /**
     * @var integer Expected number of Pods under the service group.Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AvailableReplicasCount;

    /**
     * @var string Service group's subuin.
     */
    public $SubUin;

    /**
     * @var integer Service group's app_id.
     */
    public $AppId;

    /**
     * @var boolean Whether to enable authentication.
     */
    public $AuthorizationEnable;

    /**
     * @var array List of throttling authentication tokens.
     */
    public $AuthTokens;

    /**
     * @var string Field for monitoring creation source.
     */
    public $MonitorSource;

    /**
     * @var string Nickname of the sub-user.
     */
    public $SubUinName;

    /**
     * @param string $ServiceGroupId Service group ID.
     * @param string $ServiceGroupName Service group name.
     * @param string $CreatedBy Creator.
     * @param string $CreateTime Creation time.
     * @param string $UpdateTime Update time.
     * @param string $Uin Root account.
     * @param integer $ServiceCount Total number of services in the service group.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RunningServiceCount Number of running services in the service group.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Services Service description.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $Status Service group status, which aligns with service status.CREATING: creating.CREATE_FAILED: creation failed.Normal: running.Stopped: stopped.Stopping: stopping.Abnormal: error.Pending: starting.Waiting: getting ready.Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Service group tags.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $LatestVersion The latest version in the service group.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BusinessStatus Operational status of the service.CREATING: creating.CREATE_FAILED: creation failed.ARREARS_STOP: service suspended due to overdue payments.BILLING: billing.WHITELIST_USING: allowlist feature is in trial.WHITELIST_STOP: insufficient allowlist quota.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BillingInfo Billing information of the service.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CreateSource Creation source of the service.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WeightUpdateStatus Weight update status of the service group.UPDATING: updating.UPDATED: updated successfully.UPDATE FAILED: failed to update.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ReplicasCount Number of running Pods in the service group.Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AvailableReplicasCount Expected number of Pods under the service group.Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubUin Service group's subuin.
     * @param integer $AppId Service group's app_id.
     * @param boolean $AuthorizationEnable Whether to enable authentication.
     * @param array $AuthTokens List of throttling authentication tokens.
     * @param string $MonitorSource Field for monitoring creation source.
     * @param string $SubUinName Nickname of the sub-user.
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
        if (array_key_exists("ServiceGroupId",$param) and $param["ServiceGroupId"] !== null) {
            $this->ServiceGroupId = $param["ServiceGroupId"];
        }

        if (array_key_exists("ServiceGroupName",$param) and $param["ServiceGroupName"] !== null) {
            $this->ServiceGroupName = $param["ServiceGroupName"];
        }

        if (array_key_exists("CreatedBy",$param) and $param["CreatedBy"] !== null) {
            $this->CreatedBy = $param["CreatedBy"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ServiceCount",$param) and $param["ServiceCount"] !== null) {
            $this->ServiceCount = $param["ServiceCount"];
        }

        if (array_key_exists("RunningServiceCount",$param) and $param["RunningServiceCount"] !== null) {
            $this->RunningServiceCount = $param["RunningServiceCount"];
        }

        if (array_key_exists("Services",$param) and $param["Services"] !== null) {
            $this->Services = [];
            foreach ($param["Services"] as $key => $value){
                $obj = new Service();
                $obj->deserialize($value);
                array_push($this->Services, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("LatestVersion",$param) and $param["LatestVersion"] !== null) {
            $this->LatestVersion = $param["LatestVersion"];
        }

        if (array_key_exists("BusinessStatus",$param) and $param["BusinessStatus"] !== null) {
            $this->BusinessStatus = $param["BusinessStatus"];
        }

        if (array_key_exists("BillingInfo",$param) and $param["BillingInfo"] !== null) {
            $this->BillingInfo = $param["BillingInfo"];
        }

        if (array_key_exists("CreateSource",$param) and $param["CreateSource"] !== null) {
            $this->CreateSource = $param["CreateSource"];
        }

        if (array_key_exists("WeightUpdateStatus",$param) and $param["WeightUpdateStatus"] !== null) {
            $this->WeightUpdateStatus = $param["WeightUpdateStatus"];
        }

        if (array_key_exists("ReplicasCount",$param) and $param["ReplicasCount"] !== null) {
            $this->ReplicasCount = $param["ReplicasCount"];
        }

        if (array_key_exists("AvailableReplicasCount",$param) and $param["AvailableReplicasCount"] !== null) {
            $this->AvailableReplicasCount = $param["AvailableReplicasCount"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AuthorizationEnable",$param) and $param["AuthorizationEnable"] !== null) {
            $this->AuthorizationEnable = $param["AuthorizationEnable"];
        }

        if (array_key_exists("AuthTokens",$param) and $param["AuthTokens"] !== null) {
            $this->AuthTokens = [];
            foreach ($param["AuthTokens"] as $key => $value){
                $obj = new AuthToken();
                $obj->deserialize($value);
                array_push($this->AuthTokens, $obj);
            }
        }

        if (array_key_exists("MonitorSource",$param) and $param["MonitorSource"] !== null) {
            $this->MonitorSource = $param["MonitorSource"];
        }

        if (array_key_exists("SubUinName",$param) and $param["SubUinName"] !== null) {
            $this->SubUinName = $param["SubUinName"];
        }
    }
}
