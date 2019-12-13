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
 * @method string getJobId() 获取Instance ID
 * @method void setJobId(string $JobId) 设置Instance ID
 * @method string getTaskName() 获取Job name
 * @method void setTaskName(string $TaskName) 设置Job name
 * @method string getTaskState() 获取Job state
 * @method void setTaskState(string $TaskState) 设置Job state
 * @method string getCreateTime() 获取Creation time
 * @method void setCreateTime(string $CreateTime) 设置Creation time
 * @method string getEndTime() 获取End time
 * @method void setEndTime(string $EndTime) 设置End time
 * @method integer getTaskInstanceTotalCount() 获取Total number of task instances
 * @method void setTaskInstanceTotalCount(integer $TaskInstanceTotalCount) 设置Total number of task instances
 * @method array getTaskInstanceSet() 获取Task instance information
 * @method void setTaskInstanceSet(array $TaskInstanceSet) 设置Task instance information
 * @method TaskInstanceMetrics getTaskInstanceMetrics() 获取Task instance statistical metrics
 * @method void setTaskInstanceMetrics(TaskInstanceMetrics $TaskInstanceMetrics) 设置Task instance statistical metrics
 * @method string getRequestId() 获取The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) 设置The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeTask response structure.
 */
class DescribeTaskResponse extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $JobId;

    /**
     * @var string Job name
     */
    public $TaskName;

    /**
     * @var string Job state
     */
    public $TaskState;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var integer Total number of task instances
     */
    public $TaskInstanceTotalCount;

    /**
     * @var array Task instance information
     */
    public $TaskInstanceSet;

    /**
     * @var TaskInstanceMetrics Task instance statistical metrics
     */
    public $TaskInstanceMetrics;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param string $JobId Instance ID
     * @param string $TaskName Job name
     * @param string $TaskState Job state
     * @param string $CreateTime Creation time
     * @param string $EndTime End time
     * @param integer $TaskInstanceTotalCount Total number of task instances
     * @param array $TaskInstanceSet Task instance information
     * @param TaskInstanceMetrics $TaskInstanceMetrics Task instance statistical metrics
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("TaskState",$param) and $param["TaskState"] !== null) {
            $this->TaskState = $param["TaskState"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskInstanceTotalCount",$param) and $param["TaskInstanceTotalCount"] !== null) {
            $this->TaskInstanceTotalCount = $param["TaskInstanceTotalCount"];
        }

        if (array_key_exists("TaskInstanceSet",$param) and $param["TaskInstanceSet"] !== null) {
            $this->TaskInstanceSet = [];
            foreach ($param["TaskInstanceSet"] as $key => $value){
                $obj = new TaskInstanceView();
                $obj->deserialize($value);
                array_push($this->TaskInstanceSet, $obj);
            }
        }

        if (array_key_exists("TaskInstanceMetrics",$param) and $param["TaskInstanceMetrics"] !== null) {
            $this->TaskInstanceMetrics = new TaskInstanceMetrics();
            $this->TaskInstanceMetrics->deserialize($param["TaskInstanceMetrics"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
