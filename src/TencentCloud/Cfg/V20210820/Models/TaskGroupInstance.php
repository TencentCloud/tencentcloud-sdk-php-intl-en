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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task group action instance
 *
 * @method integer getTaskGroupInstanceId() Obtain Instance ID
 * @method void setTaskGroupInstanceId(integer $TaskGroupInstanceId) Set Instance ID
 * @method string getTaskGroupInstanceObjectId() Obtain Instance ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskGroupInstanceObjectId(string $TaskGroupInstanceObjectId) Set Instance ID

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskGroupInstanceStatus() Obtain Instance action execution status

 * @method void setTaskGroupInstanceStatus(integer $TaskGroupInstanceStatus) Set Instance action execution status

 * @method string getTaskGroupInstanceCreateTime() Obtain Instance creation time
 * @method void setTaskGroupInstanceCreateTime(string $TaskGroupInstanceCreateTime) Set Instance creation time
 * @method string getTaskGroupInstanceUpdateTime() Obtain Instance update time
 * @method void setTaskGroupInstanceUpdateTime(string $TaskGroupInstanceUpdateTime) Set Instance update time
 * @method integer getTaskGroupInstanceStatusType() Obtain Status. 0: no status; 1: successful; 2: failed; 3: terminated; 4: skipped.
 * @method void setTaskGroupInstanceStatusType(integer $TaskGroupInstanceStatusType) Set Status. 0: no status; 1: successful; 2: failed; 3: terminated; 4: skipped.
 * @method string getTaskGroupInstanceStartTime() Obtain Execution start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskGroupInstanceStartTime(string $TaskGroupInstanceStartTime) Set Execution start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskGroupInstanceEndTime() Obtain Execution end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskGroupInstanceEndTime(string $TaskGroupInstanceEndTime) Set Execution end time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskGroupInstanceExecuteLog() Obtain Instance action execution log
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskGroupInstanceExecuteLog(string $TaskGroupInstanceExecuteLog) Set Instance action execution log
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getTaskGroupInstanceIsRedo() Obtain Whether the instance can be retried
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskGroupInstanceIsRedo(boolean $TaskGroupInstanceIsRedo) Set Whether the instance can be retried
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskGroupInstanceExecuteTime() Obtain Action instance execution time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskGroupInstanceExecuteTime(integer $TaskGroupInstanceExecuteTime) Set Action instance execution time
Note: This field may return null, indicating that no valid values can be obtained.
 */
class TaskGroupInstance extends AbstractModel
{
    /**
     * @var integer Instance ID
     */
    public $TaskGroupInstanceId;

    /**
     * @var string Instance ID

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskGroupInstanceObjectId;

    /**
     * @var integer Instance action execution status

     */
    public $TaskGroupInstanceStatus;

    /**
     * @var string Instance creation time
     */
    public $TaskGroupInstanceCreateTime;

    /**
     * @var string Instance update time
     */
    public $TaskGroupInstanceUpdateTime;

    /**
     * @var integer Status. 0: no status; 1: successful; 2: failed; 3: terminated; 4: skipped.
     */
    public $TaskGroupInstanceStatusType;

    /**
     * @var string Execution start time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskGroupInstanceStartTime;

    /**
     * @var string Execution end time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskGroupInstanceEndTime;

    /**
     * @var string Instance action execution log
Note: This field may return null, indicating that no valid values can be obtained.
     * @deprecated
     */
    public $TaskGroupInstanceExecuteLog;

    /**
     * @var boolean Whether the instance can be retried
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskGroupInstanceIsRedo;

    /**
     * @var integer Action instance execution time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskGroupInstanceExecuteTime;

    /**
     * @param integer $TaskGroupInstanceId Instance ID
     * @param string $TaskGroupInstanceObjectId Instance ID

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskGroupInstanceStatus Instance action execution status

     * @param string $TaskGroupInstanceCreateTime Instance creation time
     * @param string $TaskGroupInstanceUpdateTime Instance update time
     * @param integer $TaskGroupInstanceStatusType Status. 0: no status; 1: successful; 2: failed; 3: terminated; 4: skipped.
     * @param string $TaskGroupInstanceStartTime Execution start time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskGroupInstanceEndTime Execution end time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskGroupInstanceExecuteLog Instance action execution log
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $TaskGroupInstanceIsRedo Whether the instance can be retried
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskGroupInstanceExecuteTime Action instance execution time
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
        if (array_key_exists("TaskGroupInstanceId",$param) and $param["TaskGroupInstanceId"] !== null) {
            $this->TaskGroupInstanceId = $param["TaskGroupInstanceId"];
        }

        if (array_key_exists("TaskGroupInstanceObjectId",$param) and $param["TaskGroupInstanceObjectId"] !== null) {
            $this->TaskGroupInstanceObjectId = $param["TaskGroupInstanceObjectId"];
        }

        if (array_key_exists("TaskGroupInstanceStatus",$param) and $param["TaskGroupInstanceStatus"] !== null) {
            $this->TaskGroupInstanceStatus = $param["TaskGroupInstanceStatus"];
        }

        if (array_key_exists("TaskGroupInstanceCreateTime",$param) and $param["TaskGroupInstanceCreateTime"] !== null) {
            $this->TaskGroupInstanceCreateTime = $param["TaskGroupInstanceCreateTime"];
        }

        if (array_key_exists("TaskGroupInstanceUpdateTime",$param) and $param["TaskGroupInstanceUpdateTime"] !== null) {
            $this->TaskGroupInstanceUpdateTime = $param["TaskGroupInstanceUpdateTime"];
        }

        if (array_key_exists("TaskGroupInstanceStatusType",$param) and $param["TaskGroupInstanceStatusType"] !== null) {
            $this->TaskGroupInstanceStatusType = $param["TaskGroupInstanceStatusType"];
        }

        if (array_key_exists("TaskGroupInstanceStartTime",$param) and $param["TaskGroupInstanceStartTime"] !== null) {
            $this->TaskGroupInstanceStartTime = $param["TaskGroupInstanceStartTime"];
        }

        if (array_key_exists("TaskGroupInstanceEndTime",$param) and $param["TaskGroupInstanceEndTime"] !== null) {
            $this->TaskGroupInstanceEndTime = $param["TaskGroupInstanceEndTime"];
        }

        if (array_key_exists("TaskGroupInstanceExecuteLog",$param) and $param["TaskGroupInstanceExecuteLog"] !== null) {
            $this->TaskGroupInstanceExecuteLog = $param["TaskGroupInstanceExecuteLog"];
        }

        if (array_key_exists("TaskGroupInstanceIsRedo",$param) and $param["TaskGroupInstanceIsRedo"] !== null) {
            $this->TaskGroupInstanceIsRedo = $param["TaskGroupInstanceIsRedo"];
        }

        if (array_key_exists("TaskGroupInstanceExecuteTime",$param) and $param["TaskGroupInstanceExecuteTime"] !== null) {
            $this->TaskGroupInstanceExecuteTime = $param["TaskGroupInstanceExecuteTime"];
        }
    }
}
