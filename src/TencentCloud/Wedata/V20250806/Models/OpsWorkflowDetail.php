<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Workflow scheduling details.
 *
 * @method string getWorkflowId() Obtain Workflow ID.

 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID.

 * @method string getWorkflowDesc() Obtain Workflow description.

 * @method void setWorkflowDesc(string $WorkflowDesc) Set Workflow description.

 * @method string getWorkflowType() Obtain Specifies the workflow type.
-cycle.
-manual.
 * @method void setWorkflowType(string $WorkflowType) Set Specifies the workflow type.
-cycle.
-manual.
 * @method string getCreateTime() Obtain Creation time.

 * @method void setCreateTime(string $CreateTime) Set Creation time.

 * @method string getCreateUserUin() Obtain Creator

 * @method void setCreateUserUin(string $CreateUserUin) Set Creator

 * @method string getUpdateTime() Obtain Modification time.

 * @method void setUpdateTime(string $UpdateTime) Set Modification time.

 * @method integer getStartupTime() Obtain Delayed execution time. unit: minute.

 * @method void setStartupTime(integer $StartupTime) Set Delayed execution time. unit: minute.

 * @method string getStartTime() Obtain Effective date. specifies the start date.

 * @method void setStartTime(string $StartTime) Set Effective date. specifies the start date.

 * @method string getEndTime() Obtain Configure end date end date.

 * @method void setEndTime(string $EndTime) Set Configure end date end date.

 * @method string getCycleType() Obtain Task Cycle Type

* ONEOFF_CYCLE: One-time

* YEAR_CYCLE: Yearly

* MONTH_CYCLE: Monthly

* WEEK_CYCLE: Weekly

* DAY_CYCLE: Daily

* HOUR_CYCLE: Hourly

* MINUTE_CYCLE: Minute-level

* CRONTAB_CYCLE: Crontab expression-based
 * @method void setCycleType(string $CycleType) Set Task Cycle Type

* ONEOFF_CYCLE: One-time

* YEAR_CYCLE: Yearly

* MONTH_CYCLE: Monthly

* WEEK_CYCLE: Weekly

* DAY_CYCLE: Daily

* HOUR_CYCLE: Hourly

* MINUTE_CYCLE: Minute-level

* CRONTAB_CYCLE: Crontab expression-based
 * @method string getFolderId() Obtain Folder ID


 * @method void setFolderId(string $FolderId) Set Folder ID


 * @method string getInstanceInitStrategy() Obtain Task instance initialization strategy.
-T_PLUS_1 (t+1): initializes with a one-day delay.
-T_PLUS_0 (t+0): initialize on the day.
-T_MINUS_1 (t-1): initialize one day in advance.

 * @method void setInstanceInitStrategy(string $InstanceInitStrategy) Set Task instance initialization strategy.
-T_PLUS_1 (t+1): initializes with a one-day delay.
-T_PLUS_0 (t+0): initialize on the day.
-T_MINUS_1 (t-1): initialize one day in advance.

 * @method string getSchedulerDesc() Obtain Specifies the scheduling plan interpretation.

 * @method void setSchedulerDesc(string $SchedulerDesc) Set Specifies the scheduling plan interpretation.

 * @method string getFirstSubmitTime() Obtain First submission time of workflow.

 * @method void setFirstSubmitTime(string $FirstSubmitTime) Set First submission time of workflow.

 * @method string getLatestSubmitTime() Obtain Latest submission time of workflow.

 * @method void setLatestSubmitTime(string $LatestSubmitTime) Set Latest submission time of workflow.

 * @method string getStatus() Obtain Workflow Status

* ALL_RUNNING: All running (all workflows are in scheduling state)

* ALL_FREEZED: All paused

* ALL_STOPPTED: All stopped

* PART_RUNNING: Partially running (some workflows are running, others not)

* ALL_NO_RUNNING: All not scheduled

* ALL_INVALID: All invalid
 * @method void setStatus(string $Status) Set Workflow Status

* ALL_RUNNING: All running (all workflows are in scheduling state)

* ALL_FREEZED: All paused

* ALL_STOPPTED: All stopped

* PART_RUNNING: Partially running (some workflows are running, others not)

* ALL_NO_RUNNING: All not scheduled

* ALL_INVALID: All invalid
 * @method string getOwnerUin() Obtain Person in charge. multiple values are separated by a ";" separator.
 * @method void setOwnerUin(string $OwnerUin) Set Person in charge. multiple values are separated by a ";" separator.
 * @method string getWorkflowName() Obtain Workflow name.

 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.
 */
class OpsWorkflowDetail extends AbstractModel
{
    /**
     * @var string Workflow ID.

     */
    public $WorkflowId;

    /**
     * @var string Workflow description.

     */
    public $WorkflowDesc;

    /**
     * @var string Specifies the workflow type.
-cycle.
-manual.
     */
    public $WorkflowType;

    /**
     * @var string Creation time.

     */
    public $CreateTime;

    /**
     * @var string Creator

     */
    public $CreateUserUin;

    /**
     * @var string Modification time.

     */
    public $UpdateTime;

    /**
     * @var integer Delayed execution time. unit: minute.

     */
    public $StartupTime;

    /**
     * @var string Effective date. specifies the start date.

     */
    public $StartTime;

    /**
     * @var string Configure end date end date.

     */
    public $EndTime;

    /**
     * @var string Task Cycle Type

* ONEOFF_CYCLE: One-time

* YEAR_CYCLE: Yearly

* MONTH_CYCLE: Monthly

* WEEK_CYCLE: Weekly

* DAY_CYCLE: Daily

* HOUR_CYCLE: Hourly

* MINUTE_CYCLE: Minute-level

* CRONTAB_CYCLE: Crontab expression-based
     */
    public $CycleType;

    /**
     * @var string Folder ID


     */
    public $FolderId;

    /**
     * @var string Task instance initialization strategy.
-T_PLUS_1 (t+1): initializes with a one-day delay.
-T_PLUS_0 (t+0): initialize on the day.
-T_MINUS_1 (t-1): initialize one day in advance.

     */
    public $InstanceInitStrategy;

    /**
     * @var string Specifies the scheduling plan interpretation.

     */
    public $SchedulerDesc;

    /**
     * @var string First submission time of workflow.

     */
    public $FirstSubmitTime;

    /**
     * @var string Latest submission time of workflow.

     */
    public $LatestSubmitTime;

    /**
     * @var string Workflow Status

* ALL_RUNNING: All running (all workflows are in scheduling state)

* ALL_FREEZED: All paused

* ALL_STOPPTED: All stopped

* PART_RUNNING: Partially running (some workflows are running, others not)

* ALL_NO_RUNNING: All not scheduled

* ALL_INVALID: All invalid
     */
    public $Status;

    /**
     * @var string Person in charge. multiple values are separated by a ";" separator.
     */
    public $OwnerUin;

    /**
     * @var string Workflow name.

     */
    public $WorkflowName;

    /**
     * @param string $WorkflowId Workflow ID.

     * @param string $WorkflowDesc Workflow description.

     * @param string $WorkflowType Specifies the workflow type.
-cycle.
-manual.
     * @param string $CreateTime Creation time.

     * @param string $CreateUserUin Creator

     * @param string $UpdateTime Modification time.

     * @param integer $StartupTime Delayed execution time. unit: minute.

     * @param string $StartTime Effective date. specifies the start date.

     * @param string $EndTime Configure end date end date.

     * @param string $CycleType Task Cycle Type

* ONEOFF_CYCLE: One-time

* YEAR_CYCLE: Yearly

* MONTH_CYCLE: Monthly

* WEEK_CYCLE: Weekly

* DAY_CYCLE: Daily

* HOUR_CYCLE: Hourly

* MINUTE_CYCLE: Minute-level

* CRONTAB_CYCLE: Crontab expression-based
     * @param string $FolderId Folder ID


     * @param string $InstanceInitStrategy Task instance initialization strategy.
-T_PLUS_1 (t+1): initializes with a one-day delay.
-T_PLUS_0 (t+0): initialize on the day.
-T_MINUS_1 (t-1): initialize one day in advance.

     * @param string $SchedulerDesc Specifies the scheduling plan interpretation.

     * @param string $FirstSubmitTime First submission time of workflow.

     * @param string $LatestSubmitTime Latest submission time of workflow.

     * @param string $Status Workflow Status

* ALL_RUNNING: All running (all workflows are in scheduling state)

* ALL_FREEZED: All paused

* ALL_STOPPTED: All stopped

* PART_RUNNING: Partially running (some workflows are running, others not)

* ALL_NO_RUNNING: All not scheduled

* ALL_INVALID: All invalid
     * @param string $OwnerUin Person in charge. multiple values are separated by a ";" separator.
     * @param string $WorkflowName Workflow name.
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
        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowDesc",$param) and $param["WorkflowDesc"] !== null) {
            $this->WorkflowDesc = $param["WorkflowDesc"];
        }

        if (array_key_exists("WorkflowType",$param) and $param["WorkflowType"] !== null) {
            $this->WorkflowType = $param["WorkflowType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("StartupTime",$param) and $param["StartupTime"] !== null) {
            $this->StartupTime = $param["StartupTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("InstanceInitStrategy",$param) and $param["InstanceInitStrategy"] !== null) {
            $this->InstanceInitStrategy = $param["InstanceInitStrategy"];
        }

        if (array_key_exists("SchedulerDesc",$param) and $param["SchedulerDesc"] !== null) {
            $this->SchedulerDesc = $param["SchedulerDesc"];
        }

        if (array_key_exists("FirstSubmitTime",$param) and $param["FirstSubmitTime"] !== null) {
            $this->FirstSubmitTime = $param["FirstSubmitTime"];
        }

        if (array_key_exists("LatestSubmitTime",$param) and $param["LatestSubmitTime"] !== null) {
            $this->LatestSubmitTime = $param["LatestSubmitTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }
    }
}
