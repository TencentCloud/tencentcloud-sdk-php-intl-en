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
namespace TencentCloud\Tcaplusdb\V20190823\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster operation application
 *
 * @method string getApplicationId() Obtain Application ID
 * @method void setApplicationId(string $ApplicationId) Set Application ID
 * @method integer getApplicationType() Obtain Application type
 * @method void setApplicationType(integer $ApplicationType) Set Application type
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getClusterName() Obtain Cluster name
 * @method void setClusterName(string $ClusterName) Set Cluster name
 * @method string getTableGroupName() Obtain Table group name
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setTableGroupName(string $TableGroupName) Set Table group name
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getTableName() Obtain Table name
 * @method void setTableName(string $TableName) Set Table name
 * @method string getApplicant() Obtain Applicant
 * @method void setApplicant(string $Applicant) Set Applicant
 * @method string getCreatedTime() Obtain The creation time of the application
 * @method void setCreatedTime(string $CreatedTime) Set The creation time of the application
 * @method integer getApplicationStatus() Obtain Status. Valid values: `-1` (canceled), `0` (pending approval), `1` (application approved and task submitted), `2` (rejected)
 * @method void setApplicationStatus(integer $ApplicationStatus) Set Status. Valid values: `-1` (canceled), `0` (pending approval), `1` (application approved and task submitted), `2` (rejected)
 * @method string getTableGroupId() Obtain Table group ID
 * @method void setTableGroupId(string $TableGroupId) Set Table group ID
 * @method string getTaskId() Obtain ID of the submitted task (if the application is not approved, this parameter is `0`)
 * @method void setTaskId(string $TaskId) Set ID of the submitted task (if the application is not approved, this parameter is `0`)
 * @method string getTableInstanceId() Obtain Globally unique table ID
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setTableInstanceId(string $TableInstanceId) Set Globally unique table ID
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getUpdateTime() Obtain Update time
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update time
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getExecuteUser() Obtain Approver
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setExecuteUser(string $ExecuteUser) Set Approver
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method string getExecuteStatus() Obtain Execution status
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setExecuteStatus(string $ExecuteStatus) Set Execution status
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method boolean getCanCensor() Obtain Whether the application can be approved by the API caller
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setCanCensor(boolean $CanCensor) Set Whether the application can be approved by the API caller
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method boolean getCanWithdrawal() Obtain Whether the application can be canceled by the API caller
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 * @method void setCanWithdrawal(boolean $CanWithdrawal) Set Whether the application can be canceled by the API caller
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
 */
class Application extends AbstractModel
{
    /**
     * @var string Application ID
     */
    public $ApplicationId;

    /**
     * @var integer Application type
     */
    public $ApplicationType;

    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Cluster name
     */
    public $ClusterName;

    /**
     * @var string Table group name
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $TableGroupName;

    /**
     * @var string Table name
     */
    public $TableName;

    /**
     * @var string Applicant
     */
    public $Applicant;

    /**
     * @var string The creation time of the application
     */
    public $CreatedTime;

    /**
     * @var integer Status. Valid values: `-1` (canceled), `0` (pending approval), `1` (application approved and task submitted), `2` (rejected)
     */
    public $ApplicationStatus;

    /**
     * @var string Table group ID
     */
    public $TableGroupId;

    /**
     * @var string ID of the submitted task (if the application is not approved, this parameter is `0`)
     */
    public $TaskId;

    /**
     * @var string Globally unique table ID
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $TableInstanceId;

    /**
     * @var string Update time
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Approver
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $ExecuteUser;

    /**
     * @var string Execution status
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $ExecuteStatus;

    /**
     * @var boolean Whether the application can be approved by the API caller
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $CanCensor;

    /**
     * @var boolean Whether the application can be canceled by the API caller
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     */
    public $CanWithdrawal;

    /**
     * @param string $ApplicationId Application ID
     * @param integer $ApplicationType Application type
     * @param string $ClusterId Cluster ID
     * @param string $ClusterName Cluster name
     * @param string $TableGroupName Table group name
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $TableName Table name
     * @param string $Applicant Applicant
     * @param string $CreatedTime The creation time of the application
     * @param integer $ApplicationStatus Status. Valid values: `-1` (canceled), `0` (pending approval), `1` (application approved and task submitted), `2` (rejected)
     * @param string $TableGroupId Table group ID
     * @param string $TaskId ID of the submitted task (if the application is not approved, this parameter is `0`)
     * @param string $TableInstanceId Globally unique table ID
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $UpdateTime Update time
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $ExecuteUser Approver
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param string $ExecuteStatus Execution status
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param boolean $CanCensor Whether the application can be approved by the API caller
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
     * @param boolean $CanWithdrawal Whether the application can be canceled by the API caller
Note: `null` may be returned for this field, indicating that no valid values can be obtained.
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("TableGroupName",$param) and $param["TableGroupName"] !== null) {
            $this->TableGroupName = $param["TableGroupName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("Applicant",$param) and $param["Applicant"] !== null) {
            $this->Applicant = $param["Applicant"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ApplicationStatus",$param) and $param["ApplicationStatus"] !== null) {
            $this->ApplicationStatus = $param["ApplicationStatus"];
        }

        if (array_key_exists("TableGroupId",$param) and $param["TableGroupId"] !== null) {
            $this->TableGroupId = $param["TableGroupId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TableInstanceId",$param) and $param["TableInstanceId"] !== null) {
            $this->TableInstanceId = $param["TableInstanceId"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ExecuteUser",$param) and $param["ExecuteUser"] !== null) {
            $this->ExecuteUser = $param["ExecuteUser"];
        }

        if (array_key_exists("ExecuteStatus",$param) and $param["ExecuteStatus"] !== null) {
            $this->ExecuteStatus = $param["ExecuteStatus"];
        }

        if (array_key_exists("CanCensor",$param) and $param["CanCensor"] !== null) {
            $this->CanCensor = $param["CanCensor"];
        }

        if (array_key_exists("CanWithdrawal",$param) and $param["CanWithdrawal"] !== null) {
            $this->CanWithdrawal = $param["CanWithdrawal"];
        }
    }
}
