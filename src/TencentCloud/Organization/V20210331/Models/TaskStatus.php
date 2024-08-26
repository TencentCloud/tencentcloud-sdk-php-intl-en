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
 * @method string getStatus() Obtain Task status. Valid values: InProgress: The task is being executed; Success: The task execution succeeded; Failed: The task execution failed.
 * @method void setStatus(string $Status) Set Task status. Valid values: InProgress: The task is being executed; Success: The task execution succeeded; Failed: The task execution failed.
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method string getTaskType() Obtain Task type. Valid values:ProvisionRoleConfiguration: Deploy permission configurations.
DeprovisionRoleConfiguration: Undeploy permission configurations.CreateRoleAssignment: Grant authorizations on member accounts.
DeleteRoleAssignment: Remove authorizations on member accounts.
 * @method void setTaskType(string $TaskType) Set Task type. Valid values:ProvisionRoleConfiguration: Deploy permission configurations.
DeprovisionRoleConfiguration: Undeploy permission configurations.CreateRoleAssignment: Grant authorizations on member accounts.
DeleteRoleAssignment: Remove authorizations on member accounts.
 * @method string getFailureReason() Obtain Cause of task failure.
Description.
This parameter is displayed only when the Status is Failed.
 * @method void setFailureReason(string $FailureReason) Set Cause of task failure.
Description.
This parameter is displayed only when the Status is Failed.
 */
class TaskStatus extends AbstractModel
{
    /**
     * @var string Task status. Valid values: InProgress: The task is being executed; Success: The task execution succeeded; Failed: The task execution failed.
     */
    public $Status;

    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var string Task type. Valid values:ProvisionRoleConfiguration: Deploy permission configurations.
DeprovisionRoleConfiguration: Undeploy permission configurations.CreateRoleAssignment: Grant authorizations on member accounts.
DeleteRoleAssignment: Remove authorizations on member accounts.
     */
    public $TaskType;

    /**
     * @var string Cause of task failure.
Description.
This parameter is displayed only when the Status is Failed.
     */
    public $FailureReason;

    /**
     * @param string $Status Task status. Valid values: InProgress: The task is being executed; Success: The task execution succeeded; Failed: The task execution failed.
     * @param string $TaskId Task ID.
     * @param string $TaskType Task type. Valid values:ProvisionRoleConfiguration: Deploy permission configurations.
DeprovisionRoleConfiguration: Undeploy permission configurations.CreateRoleAssignment: Grant authorizations on member accounts.
DeleteRoleAssignment: Remove authorizations on member accounts.
     * @param string $FailureReason Cause of task failure.
Description.
This parameter is displayed only when the Status is Failed.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("FailureReason",$param) and $param["FailureReason"] !== null) {
            $this->FailureReason = $param["FailureReason"];
        }
    }
}
