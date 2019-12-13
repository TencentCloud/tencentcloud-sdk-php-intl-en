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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTaskId() 获取Task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(integer $TaskId) 设置Task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStartTime() 获取Start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(string $StartTime) 设置Start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskType() 获取Task type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskType(string $TaskType) 设置Task type
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceName() 获取Instance name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceName(string $InstanceName) 设置Instance name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() 获取Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) 设置Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProjectId() 获取Project ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(integer $ProjectId) 设置Project ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getProgress() 获取Task progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProgress(float $Progress) 设置Task progress
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndTime() 获取End time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(string $EndTime) 设置End time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getResult() 获取Task status
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResult(integer $Result) 设置Task status
Note: This field may return null, indicating that no valid values can be obtained.
 */

/**
 *Task details
 */
class TaskInfoDetail extends AbstractModel
{
    /**
     * @var integer Task ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string Start time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var string Task type
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskType;

    /**
     * @var string Instance name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceName;

    /**
     * @var string Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var integer Project ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var float Task progress
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Progress;

    /**
     * @var string End time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var integer Task status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Result;
    /**
     * @param integer $TaskId Task ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StartTime Start time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskType Task type
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceName Instance name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Instance ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ProjectId Project ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Progress Task progress
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndTime End time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Result Task status
Note: This field may return null, indicating that no valid values can be obtained.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
    }
}
