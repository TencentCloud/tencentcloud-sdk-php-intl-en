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
 * Task
 *
 * @method integer getTaskId() Obtain Task ID
 * @method void setTaskId(integer $TaskId) Set Task ID
 * @method string getTaskTitle() Obtain Task name
 * @method void setTaskTitle(string $TaskTitle) Set Task name
 * @method string getTaskDescription() Obtain Task description
 * @method void setTaskDescription(string $TaskDescription) Set Task description
 * @method string getTaskTag() Obtain Custom tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskTag(string $TaskTag) Set Custom tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskStatus() Obtain Task status. 1001: not started; 1002: in progress (executing); 1003: in progress (paused); 1004: execution ended.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskStatus(integer $TaskStatus) Set Task status. 1001: not started; 1002: in progress (executing); 1003: in progress (paused); 1004: execution ended.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskStatusType() Obtain Task end status, indicating the status of the task when it ends. 0: not ended; 1: successful; 2: failed; 3: terminated.
 * @method void setTaskStatusType(integer $TaskStatusType) Set Task end status, indicating the status of the task when it ends. 0: not ended; 1: successful; 2: failed; 3: terminated.
 * @method string getTaskProtectStrategy() Obtain Protection policy
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskProtectStrategy(string $TaskProtectStrategy) Set Protection policy
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskCreateTime() Obtain Task creation time
 * @method void setTaskCreateTime(string $TaskCreateTime) Set Task creation time
 * @method string getTaskUpdateTime() Obtain Task update time
 * @method void setTaskUpdateTime(string $TaskUpdateTime) Set Task update time
 * @method array getTaskGroups() Obtain Task action group
 * @method void setTaskGroups(array $TaskGroups) Set Task action group
 * @method string getTaskStartTime() Obtain Start time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskStartTime(string $TaskStartTime) Set Start time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskEndTime() Obtain End time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskEndTime(string $TaskEndTime) Set End time

Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskExpect() Obtain Whether expectations are met. 1: expectations met; 2: expectations not met.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskExpect(integer $TaskExpect) Set Whether expectations are met. 1: expectations met; 2: expectations not met.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskSummary() Obtain Experiment record
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskSummary(string $TaskSummary) Set Experiment record
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskMode() Obtain Task mode. 1: manual execution; 2: automatic execution.
 * @method void setTaskMode(integer $TaskMode) Set Task mode. 1: manual execution; 2: automatic execution.
 * @method integer getTaskPauseDuration() Obtain Automatic pause duration. Unit: minutes.
 * @method void setTaskPauseDuration(integer $TaskPauseDuration) Set Automatic pause duration. Unit: minutes.
 * @method string getTaskOwnerUin() Obtain Main account that creates the experiment
 * @method void setTaskOwnerUin(string $TaskOwnerUin) Set Main account that creates the experiment
 * @method integer getTaskRegionId() Obtain Region ID
 * @method void setTaskRegionId(integer $TaskRegionId) Set Region ID
 * @method array getTaskMonitors() Obtain Monitoring metric list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskMonitors(array $TaskMonitors) Set Monitoring metric list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DescribePolicy getTaskPolicy() Obtain Protection policy
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskPolicy(DescribePolicy $TaskPolicy) Set Protection policy
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTags() Obtain Tag list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTags(array $Tags) Set Tag list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskPlanId() Obtain ID of the associated experiment plan
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskPlanId(integer $TaskPlanId) Set ID of the associated experiment plan
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskPlanTitle() Obtain Name of the associated experiment plan
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskPlanTitle(string $TaskPlanTitle) Set Name of the associated experiment plan
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationId() Obtain ID of the associated application
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationId(string $ApplicationId) Set ID of the associated application
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplicationName() Obtain Name of the associated application
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApplicationName(string $ApplicationName) Set Name of the associated application
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAlarmPolicy() Obtain Associated alarm metrics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAlarmPolicy(array $AlarmPolicy) Set Associated alarm metrics
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getApmServiceList() Obtain Associated APM services
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setApmServiceList(array $ApmServiceList) Set Associated APM services
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVerifyId() Obtain ID of the associated threat verification item
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVerifyId(integer $VerifyId) Set ID of the associated threat verification item
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getPolicyDealType() Obtain Guardrail processing method. 1: roll back sequentially; 2: pause experiment.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolicyDealType(integer $PolicyDealType) Set Guardrail processing method. 1: roll back sequentially; 2: pause experiment.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class Task extends AbstractModel
{
    /**
     * @var integer Task ID
     */
    public $TaskId;

    /**
     * @var string Task name
     */
    public $TaskTitle;

    /**
     * @var string Task description
     */
    public $TaskDescription;

    /**
     * @var string Custom tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskTag;

    /**
     * @var integer Task status. 1001: not started; 1002: in progress (executing); 1003: in progress (paused); 1004: execution ended.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskStatus;

    /**
     * @var integer Task end status, indicating the status of the task when it ends. 0: not ended; 1: successful; 2: failed; 3: terminated.
     */
    public $TaskStatusType;

    /**
     * @var string Protection policy
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskProtectStrategy;

    /**
     * @var string Task creation time
     */
    public $TaskCreateTime;

    /**
     * @var string Task update time
     */
    public $TaskUpdateTime;

    /**
     * @var array Task action group
     */
    public $TaskGroups;

    /**
     * @var string Start time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskStartTime;

    /**
     * @var string End time

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskEndTime;

    /**
     * @var integer Whether expectations are met. 1: expectations met; 2: expectations not met.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskExpect;

    /**
     * @var string Experiment record
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskSummary;

    /**
     * @var integer Task mode. 1: manual execution; 2: automatic execution.
     */
    public $TaskMode;

    /**
     * @var integer Automatic pause duration. Unit: minutes.
     */
    public $TaskPauseDuration;

    /**
     * @var string Main account that creates the experiment
     */
    public $TaskOwnerUin;

    /**
     * @var integer Region ID
     */
    public $TaskRegionId;

    /**
     * @var array Monitoring metric list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskMonitors;

    /**
     * @var DescribePolicy Protection policy
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskPolicy;

    /**
     * @var array Tag list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tags;

    /**
     * @var integer ID of the associated experiment plan
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskPlanId;

    /**
     * @var string Name of the associated experiment plan
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskPlanTitle;

    /**
     * @var string ID of the associated application
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationId;

    /**
     * @var string Name of the associated application
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApplicationName;

    /**
     * @var array Associated alarm metrics
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AlarmPolicy;

    /**
     * @var array Associated APM services
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ApmServiceList;

    /**
     * @var integer ID of the associated threat verification item
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VerifyId;

    /**
     * @var integer Guardrail processing method. 1: roll back sequentially; 2: pause experiment.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PolicyDealType;

    /**
     * @param integer $TaskId Task ID
     * @param string $TaskTitle Task name
     * @param string $TaskDescription Task description
     * @param string $TaskTag Custom tag
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskStatus Task status. 1001: not started; 1002: in progress (executing); 1003: in progress (paused); 1004: execution ended.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskStatusType Task end status, indicating the status of the task when it ends. 0: not ended; 1: successful; 2: failed; 3: terminated.
     * @param string $TaskProtectStrategy Protection policy
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskCreateTime Task creation time
     * @param string $TaskUpdateTime Task update time
     * @param array $TaskGroups Task action group
     * @param string $TaskStartTime Start time

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskEndTime End time

Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskExpect Whether expectations are met. 1: expectations met; 2: expectations not met.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskSummary Experiment record
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskMode Task mode. 1: manual execution; 2: automatic execution.
     * @param integer $TaskPauseDuration Automatic pause duration. Unit: minutes.
     * @param string $TaskOwnerUin Main account that creates the experiment
     * @param integer $TaskRegionId Region ID
     * @param array $TaskMonitors Monitoring metric list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DescribePolicy $TaskPolicy Protection policy
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tags Tag list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskPlanId ID of the associated experiment plan
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskPlanTitle Name of the associated experiment plan
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationId ID of the associated application
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplicationName Name of the associated application
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AlarmPolicy Associated alarm metrics
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ApmServiceList Associated APM services
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VerifyId ID of the associated threat verification item
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $PolicyDealType Guardrail processing method. 1: roll back sequentially; 2: pause experiment.
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

        if (array_key_exists("TaskTitle",$param) and $param["TaskTitle"] !== null) {
            $this->TaskTitle = $param["TaskTitle"];
        }

        if (array_key_exists("TaskDescription",$param) and $param["TaskDescription"] !== null) {
            $this->TaskDescription = $param["TaskDescription"];
        }

        if (array_key_exists("TaskTag",$param) and $param["TaskTag"] !== null) {
            $this->TaskTag = $param["TaskTag"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TaskStatusType",$param) and $param["TaskStatusType"] !== null) {
            $this->TaskStatusType = $param["TaskStatusType"];
        }

        if (array_key_exists("TaskProtectStrategy",$param) and $param["TaskProtectStrategy"] !== null) {
            $this->TaskProtectStrategy = $param["TaskProtectStrategy"];
        }

        if (array_key_exists("TaskCreateTime",$param) and $param["TaskCreateTime"] !== null) {
            $this->TaskCreateTime = $param["TaskCreateTime"];
        }

        if (array_key_exists("TaskUpdateTime",$param) and $param["TaskUpdateTime"] !== null) {
            $this->TaskUpdateTime = $param["TaskUpdateTime"];
        }

        if (array_key_exists("TaskGroups",$param) and $param["TaskGroups"] !== null) {
            $this->TaskGroups = [];
            foreach ($param["TaskGroups"] as $key => $value){
                $obj = new TaskGroup();
                $obj->deserialize($value);
                array_push($this->TaskGroups, $obj);
            }
        }

        if (array_key_exists("TaskStartTime",$param) and $param["TaskStartTime"] !== null) {
            $this->TaskStartTime = $param["TaskStartTime"];
        }

        if (array_key_exists("TaskEndTime",$param) and $param["TaskEndTime"] !== null) {
            $this->TaskEndTime = $param["TaskEndTime"];
        }

        if (array_key_exists("TaskExpect",$param) and $param["TaskExpect"] !== null) {
            $this->TaskExpect = $param["TaskExpect"];
        }

        if (array_key_exists("TaskSummary",$param) and $param["TaskSummary"] !== null) {
            $this->TaskSummary = $param["TaskSummary"];
        }

        if (array_key_exists("TaskMode",$param) and $param["TaskMode"] !== null) {
            $this->TaskMode = $param["TaskMode"];
        }

        if (array_key_exists("TaskPauseDuration",$param) and $param["TaskPauseDuration"] !== null) {
            $this->TaskPauseDuration = $param["TaskPauseDuration"];
        }

        if (array_key_exists("TaskOwnerUin",$param) and $param["TaskOwnerUin"] !== null) {
            $this->TaskOwnerUin = $param["TaskOwnerUin"];
        }

        if (array_key_exists("TaskRegionId",$param) and $param["TaskRegionId"] !== null) {
            $this->TaskRegionId = $param["TaskRegionId"];
        }

        if (array_key_exists("TaskMonitors",$param) and $param["TaskMonitors"] !== null) {
            $this->TaskMonitors = [];
            foreach ($param["TaskMonitors"] as $key => $value){
                $obj = new TaskMonitor();
                $obj->deserialize($value);
                array_push($this->TaskMonitors, $obj);
            }
        }

        if (array_key_exists("TaskPolicy",$param) and $param["TaskPolicy"] !== null) {
            $this->TaskPolicy = new DescribePolicy();
            $this->TaskPolicy->deserialize($param["TaskPolicy"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagWithDescribe();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("TaskPlanId",$param) and $param["TaskPlanId"] !== null) {
            $this->TaskPlanId = $param["TaskPlanId"];
        }

        if (array_key_exists("TaskPlanTitle",$param) and $param["TaskPlanTitle"] !== null) {
            $this->TaskPlanTitle = $param["TaskPlanTitle"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("AlarmPolicy",$param) and $param["AlarmPolicy"] !== null) {
            $this->AlarmPolicy = $param["AlarmPolicy"];
        }

        if (array_key_exists("ApmServiceList",$param) and $param["ApmServiceList"] !== null) {
            $this->ApmServiceList = [];
            foreach ($param["ApmServiceList"] as $key => $value){
                $obj = new ApmServiceInfo();
                $obj->deserialize($value);
                array_push($this->ApmServiceList, $obj);
            }
        }

        if (array_key_exists("VerifyId",$param) and $param["VerifyId"] !== null) {
            $this->VerifyId = $param["VerifyId"];
        }

        if (array_key_exists("PolicyDealType",$param) and $param["PolicyDealType"] !== null) {
            $this->PolicyDealType = $param["PolicyDealType"];
        }
    }
}
