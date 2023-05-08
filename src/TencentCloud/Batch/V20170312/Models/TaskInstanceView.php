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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task instance view information
 *
 * @method integer getTaskInstanceIndex() Obtain Task instance index
 * @method void setTaskInstanceIndex(integer $TaskInstanceIndex) Set Task instance index
 * @method string getTaskInstanceState() Obtain Task instance state
 * @method void setTaskInstanceState(string $TaskInstanceState) Set Task instance state
 * @method integer getExitCode() Obtain Exit code after application execution is completed
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setExitCode(integer $ExitCode) Set Exit code after application execution is completed
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getStateReason() Obtain Task instance state reason. If the task instance fails, the reason for the failure will be logged.
 * @method void setStateReason(string $StateReason) Set Task instance state reason. If the task instance fails, the reason for the failure will be logged.
 * @method string getComputeNodeInstanceId() Obtain The `InstanceId` of the compute node (e.g., CVM instance) where the task instance is running. This field is empty if the task instance is not running or has already been completed and will change when the task instance is retried.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setComputeNodeInstanceId(string $ComputeNodeInstanceId) Set The `InstanceId` of the compute node (e.g., CVM instance) where the task instance is running. This field is empty if the task instance is not running or has already been completed and will change when the task instance is retried.
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getLaunchTime() Obtain Start time
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setLaunchTime(string $LaunchTime) Set Start time
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getRunningTime() Obtain Running start time
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setRunningTime(string $RunningTime) Set Running start time
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getEndTime() Obtain Task end time
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setEndTime(string $EndTime) Set Task end time
Note: This field may return `null`, indicating that no valid value was found.
 * @method RedirectInfo getRedirectInfo() Obtain Redirection information
 * @method void setRedirectInfo(RedirectInfo $RedirectInfo) Set Redirection information
 * @method string getStateDetailedReason() Obtain Task instance state reason details. If the task instance fails, the reason for the failure will be logged
 * @method void setStateDetailedReason(string $StateDetailedReason) Set Task instance state reason details. If the task instance fails, the reason for the failure will be logged
 */
class TaskInstanceView extends AbstractModel
{
    /**
     * @var integer Task instance index
     */
    public $TaskInstanceIndex;

    /**
     * @var string Task instance state
     */
    public $TaskInstanceState;

    /**
     * @var integer Exit code after application execution is completed
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ExitCode;

    /**
     * @var string Task instance state reason. If the task instance fails, the reason for the failure will be logged.
     */
    public $StateReason;

    /**
     * @var string The `InstanceId` of the compute node (e.g., CVM instance) where the task instance is running. This field is empty if the task instance is not running or has already been completed and will change when the task instance is retried.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $ComputeNodeInstanceId;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string Start time
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $LaunchTime;

    /**
     * @var string Running start time
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $RunningTime;

    /**
     * @var string Task end time
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $EndTime;

    /**
     * @var RedirectInfo Redirection information
     */
    public $RedirectInfo;

    /**
     * @var string Task instance state reason details. If the task instance fails, the reason for the failure will be logged
     */
    public $StateDetailedReason;

    /**
     * @param integer $TaskInstanceIndex Task instance index
     * @param string $TaskInstanceState Task instance state
     * @param integer $ExitCode Exit code after application execution is completed
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $StateReason Task instance state reason. If the task instance fails, the reason for the failure will be logged.
     * @param string $ComputeNodeInstanceId The `InstanceId` of the compute node (e.g., CVM instance) where the task instance is running. This field is empty if the task instance is not running or has already been completed and will change when the task instance is retried.
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $CreateTime Creation time
     * @param string $LaunchTime Start time
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $RunningTime Running start time
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $EndTime Task end time
Note: This field may return `null`, indicating that no valid value was found.
     * @param RedirectInfo $RedirectInfo Redirection information
     * @param string $StateDetailedReason Task instance state reason details. If the task instance fails, the reason for the failure will be logged
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
        if (array_key_exists("TaskInstanceIndex",$param) and $param["TaskInstanceIndex"] !== null) {
            $this->TaskInstanceIndex = $param["TaskInstanceIndex"];
        }

        if (array_key_exists("TaskInstanceState",$param) and $param["TaskInstanceState"] !== null) {
            $this->TaskInstanceState = $param["TaskInstanceState"];
        }

        if (array_key_exists("ExitCode",$param) and $param["ExitCode"] !== null) {
            $this->ExitCode = $param["ExitCode"];
        }

        if (array_key_exists("StateReason",$param) and $param["StateReason"] !== null) {
            $this->StateReason = $param["StateReason"];
        }

        if (array_key_exists("ComputeNodeInstanceId",$param) and $param["ComputeNodeInstanceId"] !== null) {
            $this->ComputeNodeInstanceId = $param["ComputeNodeInstanceId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LaunchTime",$param) and $param["LaunchTime"] !== null) {
            $this->LaunchTime = $param["LaunchTime"];
        }

        if (array_key_exists("RunningTime",$param) and $param["RunningTime"] !== null) {
            $this->RunningTime = $param["RunningTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RedirectInfo",$param) and $param["RedirectInfo"] !== null) {
            $this->RedirectInfo = new RedirectInfo();
            $this->RedirectInfo->deserialize($param["RedirectInfo"]);
        }

        if (array_key_exists("StateDetailedReason",$param) and $param["StateDetailedReason"] !== null) {
            $this->StateDetailedReason = $param["StateDetailedReason"];
        }
    }
}
