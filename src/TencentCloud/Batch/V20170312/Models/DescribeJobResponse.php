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
 * @method string getJobName() 获取Instance name
 * @method void setJobName(string $JobName) 设置Instance name
 * @method string getZone() 获取Information of availability zone
 * @method void setZone(string $Zone) 设置Information of availability zone
 * @method integer getPriority() 获取Instance priority
 * @method void setPriority(integer $Priority) 设置Instance priority
 * @method string getJobState() 获取Instance state
 * @method void setJobState(string $JobState) 设置Instance state
 * @method string getCreateTime() 获取Creation time
 * @method void setCreateTime(string $CreateTime) 设置Creation time
 * @method string getEndTime() 获取End time
 * @method void setEndTime(string $EndTime) 设置End time
 * @method array getTaskSet() 获取Task view information
 * @method void setTaskSet(array $TaskSet) 设置Task view information
 * @method array getDependenceSet() 获取Information of the dependency among tasks
 * @method void setDependenceSet(array $DependenceSet) 设置Information of the dependency among tasks
 * @method TaskMetrics getTaskMetrics() 获取Task statistical metrics
 * @method void setTaskMetrics(TaskMetrics $TaskMetrics) 设置Task statistical metrics
 * @method TaskInstanceView getTaskInstanceMetrics() 获取Task instance statistical metrics
 * @method void setTaskInstanceMetrics(TaskInstanceView $TaskInstanceMetrics) 设置Task instance statistical metrics
 * @method string getStateReason() 获取Instance failure reason
 * @method void setStateReason(string $StateReason) 设置Instance failure reason
 * @method string getRequestId() 获取The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) 设置The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */

/**
 *DescribeJob response structure.
 */
class DescribeJobResponse extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $JobId;

    /**
     * @var string Instance name
     */
    public $JobName;

    /**
     * @var string Information of availability zone
     */
    public $Zone;

    /**
     * @var integer Instance priority
     */
    public $Priority;

    /**
     * @var string Instance state
     */
    public $JobState;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var array Task view information
     */
    public $TaskSet;

    /**
     * @var array Information of the dependency among tasks
     */
    public $DependenceSet;

    /**
     * @var TaskMetrics Task statistical metrics
     */
    public $TaskMetrics;

    /**
     * @var TaskInstanceView Task instance statistical metrics
     */
    public $TaskInstanceMetrics;

    /**
     * @var string Instance failure reason
     */
    public $StateReason;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;
    /**
     * @param string $JobId Instance ID
     * @param string $JobName Instance name
     * @param string $Zone Information of availability zone
     * @param integer $Priority Instance priority
     * @param string $JobState Instance state
     * @param string $CreateTime Creation time
     * @param string $EndTime End time
     * @param array $TaskSet Task view information
     * @param array $DependenceSet Information of the dependency among tasks
     * @param TaskMetrics $TaskMetrics Task statistical metrics
     * @param TaskInstanceView $TaskInstanceMetrics Task instance statistical metrics
     * @param string $StateReason Instance failure reason
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

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("JobState",$param) and $param["JobState"] !== null) {
            $this->JobState = $param["JobState"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskSet",$param) and $param["TaskSet"] !== null) {
            $this->TaskSet = [];
            foreach ($param["TaskSet"] as $key => $value){
                $obj = new TaskView();
                $obj->deserialize($value);
                array_push($this->TaskSet, $obj);
            }
        }

        if (array_key_exists("DependenceSet",$param) and $param["DependenceSet"] !== null) {
            $this->DependenceSet = [];
            foreach ($param["DependenceSet"] as $key => $value){
                $obj = new Dependence();
                $obj->deserialize($value);
                array_push($this->DependenceSet, $obj);
            }
        }

        if (array_key_exists("TaskMetrics",$param) and $param["TaskMetrics"] !== null) {
            $this->TaskMetrics = new TaskMetrics();
            $this->TaskMetrics->deserialize($param["TaskMetrics"]);
        }

        if (array_key_exists("TaskInstanceMetrics",$param) and $param["TaskInstanceMetrics"] !== null) {
            $this->TaskInstanceMetrics = new TaskInstanceView();
            $this->TaskInstanceMetrics->deserialize($param["TaskInstanceMetrics"]);
        }

        if (array_key_exists("StateReason",$param) and $param["StateReason"] !== null) {
            $this->StateReason = $param["StateReason"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
