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
 * DescribeJob response structure.
 *
 * @method string getJobId() Obtain Job ID
 * @method void setJobId(string $JobId) Set Job ID
 * @method string getJobName() Obtain Job name
 * @method void setJobName(string $JobName) Set Job name
 * @method string getZone() Obtain Availability zone information
 * @method void setZone(string $Zone) Set Availability zone information
 * @method integer getPriority() Obtain Job priority
 * @method void setPriority(integer $Priority) Set Job priority
 * @method string getJobState() Obtain Job state
 * @method void setJobState(string $JobState) Set Job state
 * @method string getCreateTime() Obtain Creation Date
 * @method void setCreateTime(string $CreateTime) Set Creation Date
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method array getTaskSet() Obtain Task view information
 * @method void setTaskSet(array $TaskSet) Set Task view information
 * @method array getDependenceSet() Obtain Information of the dependency among tasks
 * @method void setDependenceSet(array $DependenceSet) Set Information of the dependency among tasks
 * @method TaskMetrics getTaskMetrics() Obtain Task statistical metrics
 * @method void setTaskMetrics(TaskMetrics $TaskMetrics) Set Task statistical metrics
 * @method TaskInstanceMetrics getTaskInstanceMetrics() Obtain Task instance statistical metrics
 * @method void setTaskInstanceMetrics(TaskInstanceMetrics $TaskInstanceMetrics) Set Task instance statistical metrics
 * @method string getStateReason() Obtain Job failure reason
 * @method void setStateReason(string $StateReason) Set Job failure reason
 * @method array getTags() Obtain List of tags bound with the job.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setTags(array $Tags) Set List of tags bound with the job.
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getNextAction() Obtain Next action
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setNextAction(string $NextAction) Set Next action
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeJobResponse extends AbstractModel
{
    /**
     * @var string Job ID
     */
    public $JobId;

    /**
     * @var string Job name
     */
    public $JobName;

    /**
     * @var string Availability zone information
     */
    public $Zone;

    /**
     * @var integer Job priority
     */
    public $Priority;

    /**
     * @var string Job state
     */
    public $JobState;

    /**
     * @var string Creation Date
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
     * @var TaskInstanceMetrics Task instance statistical metrics
     */
    public $TaskInstanceMetrics;

    /**
     * @var string Job failure reason
     */
    public $StateReason;

    /**
     * @var array List of tags bound with the job.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Tags;

    /**
     * @var string Next action
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $NextAction;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $JobId Job ID
     * @param string $JobName Job name
     * @param string $Zone Availability zone information
     * @param integer $Priority Job priority
     * @param string $JobState Job state
     * @param string $CreateTime Creation Date
     * @param string $EndTime End time
     * @param array $TaskSet Task view information
     * @param array $DependenceSet Information of the dependency among tasks
     * @param TaskMetrics $TaskMetrics Task statistical metrics
     * @param TaskInstanceMetrics $TaskInstanceMetrics Task instance statistical metrics
     * @param string $StateReason Job failure reason
     * @param array $Tags List of tags bound with the job.
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $NextAction Next action
Note: This field may return `null`, indicating that no valid value was found.
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
            $this->TaskInstanceMetrics = new TaskInstanceMetrics();
            $this->TaskInstanceMetrics->deserialize($param["TaskInstanceMetrics"]);
        }

        if (array_key_exists("StateReason",$param) and $param["StateReason"] !== null) {
            $this->StateReason = $param["StateReason"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("NextAction",$param) and $param["NextAction"] !== null) {
            $this->NextAction = $param["NextAction"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
