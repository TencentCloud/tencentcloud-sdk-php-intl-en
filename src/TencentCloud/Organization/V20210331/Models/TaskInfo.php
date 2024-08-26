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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task status information.
 *
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method string getRoleConfigurationId() Obtain Permission configuration ID.
 * @method void setRoleConfigurationId(string $RoleConfigurationId) Set Permission configuration ID.
 * @method string getRoleConfigurationName() Obtain Permission configuration name.
 * @method void setRoleConfigurationName(string $RoleConfigurationName) Set Permission configuration name.
 * @method integer getTargetUin() Obtain UIN of the authorized target member account.
 * @method void setTargetUin(integer $TargetUin) Set UIN of the authorized target member account.
 * @method string getTargetType() Obtain Type of the synchronized target account. ManagerUin: admin account; MemberUin: member account.
 * @method void setTargetType(string $TargetType) Set Type of the synchronized target account. ManagerUin: admin account; MemberUin: member account.
 * @method string getPrincipalId() Obtain Identity ID for the user authorization. If the identity type is CIC user, it is the user ID; if the identity type is user group, it is the user group ID.
 * @method void setPrincipalId(string $PrincipalId) Set Identity ID for the user authorization. If the identity type is CIC user, it is the user ID; if the identity type is user group, it is the user group ID.
 * @method string getPrincipalType() Obtain Identity type for the user authorization. User: CIC user; Group: CIC user group.
 * @method void setPrincipalType(string $PrincipalType) Set Identity type for the user authorization. User: CIC user; Group: CIC user group.
 * @method string getTaskType() Obtain Task type.
 * @method void setTaskType(string $TaskType) Set Task type.
 * @method string getStatus() Obtain InProgress: The task is being executed; Success: The task execution succeeded; Failed: The task execution failed.
 * @method void setStatus(string $Status) Set InProgress: The task is being executed; Success: The task execution succeeded; Failed: The task execution failed.
 * @method string getFailureReason() Obtain Cause of the failure.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFailureReason(string $FailureReason) Set Cause of the failure.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TaskInfo extends AbstractModel
{
    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var string Permission configuration ID.
     */
    public $RoleConfigurationId;

    /**
     * @var string Permission configuration name.
     */
    public $RoleConfigurationName;

    /**
     * @var integer UIN of the authorized target member account.
     */
    public $TargetUin;

    /**
     * @var string Type of the synchronized target account. ManagerUin: admin account; MemberUin: member account.
     */
    public $TargetType;

    /**
     * @var string Identity ID for the user authorization. If the identity type is CIC user, it is the user ID; if the identity type is user group, it is the user group ID.
     */
    public $PrincipalId;

    /**
     * @var string Identity type for the user authorization. User: CIC user; Group: CIC user group.
     */
    public $PrincipalType;

    /**
     * @var string Task type.
     */
    public $TaskType;

    /**
     * @var string InProgress: The task is being executed; Success: The task execution succeeded; Failed: The task execution failed.
     */
    public $Status;

    /**
     * @var string Cause of the failure.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FailureReason;

    /**
     * @param string $TaskId Task ID.
     * @param string $RoleConfigurationId Permission configuration ID.
     * @param string $RoleConfigurationName Permission configuration name.
     * @param integer $TargetUin UIN of the authorized target member account.
     * @param string $TargetType Type of the synchronized target account. ManagerUin: admin account; MemberUin: member account.
     * @param string $PrincipalId Identity ID for the user authorization. If the identity type is CIC user, it is the user ID; if the identity type is user group, it is the user group ID.
     * @param string $PrincipalType Identity type for the user authorization. User: CIC user; Group: CIC user group.
     * @param string $TaskType Task type.
     * @param string $Status InProgress: The task is being executed; Success: The task execution succeeded; Failed: The task execution failed.
     * @param string $FailureReason Cause of the failure.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("RoleConfigurationId",$param) and $param["RoleConfigurationId"] !== null) {
            $this->RoleConfigurationId = $param["RoleConfigurationId"];
        }

        if (array_key_exists("RoleConfigurationName",$param) and $param["RoleConfigurationName"] !== null) {
            $this->RoleConfigurationName = $param["RoleConfigurationName"];
        }

        if (array_key_exists("TargetUin",$param) and $param["TargetUin"] !== null) {
            $this->TargetUin = $param["TargetUin"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
        }

        if (array_key_exists("PrincipalId",$param) and $param["PrincipalId"] !== null) {
            $this->PrincipalId = $param["PrincipalId"];
        }

        if (array_key_exists("PrincipalType",$param) and $param["PrincipalType"] !== null) {
            $this->PrincipalType = $param["PrincipalType"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FailureReason",$param) and $param["FailureReason"] !== null) {
            $this->FailureReason = $param["FailureReason"];
        }
    }
}
