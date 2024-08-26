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
 * Status information of the role synchronization task.
 *
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method string getRoleConfigurationId() Obtain Permission configuration ID.
 * @method void setRoleConfigurationId(string $RoleConfigurationId) Set Permission configuration ID.
 * @method string getRoleConfigurationName() Obtain Permission configuration name.
 * @method void setRoleConfigurationName(string $RoleConfigurationName) Set Permission configuration name.
 * @method integer getTargetUin() Obtain UIN of the authorized target account of the Tencent Cloud Organization.
 * @method void setTargetUin(integer $TargetUin) Set UIN of the authorized target account of the Tencent Cloud Organization.
 * @method string getTargetType() Obtain Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTargetType(string $TargetType) Set Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskType() Obtain Task type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskType(string $TaskType) Set Task type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskStatus() Obtain Task status. InProgress: The task is in progress; Failed: The task failed; Success: The task succeeded.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskStatus(string $TaskStatus) Set Task status. InProgress: The task is in progress; Failed: The task failed; Success: The task succeeded.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RoleProvisioningsTask extends AbstractModel
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
     * @var integer UIN of the authorized target account of the Tencent Cloud Organization.
     */
    public $TargetUin;

    /**
     * @var string Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TargetType;

    /**
     * @var string Task type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskType;

    /**
     * @var string Task status. InProgress: The task is in progress; Failed: The task failed; Success: The task succeeded.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskStatus;

    /**
     * @param string $TaskId Task ID.
     * @param string $RoleConfigurationId Permission configuration ID.
     * @param string $RoleConfigurationName Permission configuration name.
     * @param integer $TargetUin UIN of the authorized target account of the Tencent Cloud Organization.
     * @param string $TargetType Type of the synchronized target account of the Tencent Cloud Organization. ManagerUin: admin account; MemberUin: member account.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskType Task type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskStatus Task status. InProgress: The task is in progress; Failed: The task failed; Success: The task succeeded.
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

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }
    }
}
