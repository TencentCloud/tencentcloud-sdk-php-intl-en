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
 * DescribeTask response structure.
 *
 * @method string getJobId() Obtain Job ID
 * @method void setJobId(string $JobId) Set Job ID
 * @method string getTaskName() Obtain Task name
 * @method void setTaskName(string $TaskName) Set Task name
 * @method string getTaskState() Obtain Task status
 * @method void setTaskState(string $TaskState) Set Task status
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method integer getTaskInstanceTotalCount() Obtain Total number of task instances
 * @method void setTaskInstanceTotalCount(integer $TaskInstanceTotalCount) Set Total number of task instances
 * @method array getTaskInstanceSet() Obtain Task instance information
 * @method void setTaskInstanceSet(array $TaskInstanceSet) Set Task instance information
 * @method TaskInstanceMetrics getTaskInstanceMetrics() Obtain Task instance statistical metrics
 * @method void setTaskInstanceMetrics(TaskInstanceMetrics $TaskInstanceMetrics) Set Task instance statistical metrics
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeTaskResponse extends AbstractModel
{
    /**
     * @var string Job ID
     */
    public $JobId;

    /**
     * @var string Task name
     */
    public $TaskName;

    /**
     * @var string Task status
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
     * @param string $JobId Job ID
     * @param string $TaskName Task name
     * @param string $TaskState Task status
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
     * For internal only. DO NOT USE IT.
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
