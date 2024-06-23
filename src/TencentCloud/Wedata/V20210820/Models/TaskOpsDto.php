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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task Operation Details
 *
 * @method string getTaskId() Obtain Task IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskId(string $TaskId) Set Task IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getVirtualTaskId() Obtain Virtual Task ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setVirtualTaskId(string $VirtualTaskId) Set Virtual Task ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getVirtualFlag() Obtain Virtual Task Marker
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setVirtualFlag(boolean $VirtualFlag) Set Virtual Task Marker
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskName() Obtain Task NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskName(string $TaskName) Set Task NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getWorkflowId() Obtain Workflow IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getRealWorkflowId() Obtain Actual Workflow ID when the task is a virtual task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRealWorkflowId(string $RealWorkflowId) Set Actual Workflow ID when the task is a virtual task
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getWorkflowName() Obtain Workflow nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getFolderId() Obtain Folder ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFolderId(string $FolderId) Set Folder ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getFolderName() Obtain Folder Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFolderName(string $FolderName) Set Folder Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getLastUpdate() Obtain Latest Update Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLastUpdate(string $LastUpdate) Set Latest Update Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getStatus() Obtain Task StatusNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setStatus(string $Status) Set Task StatusNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getInCharge() Obtain Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setInCharge(string $InCharge) Set Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getInChargeId() Obtain Responsible User ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInChargeId(string $InChargeId) Set Responsible User ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getStartTime() Obtain Scheduling Effective Date
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStartTime(string $StartTime) Set Scheduling Effective Date
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getEndTime() Obtain Scheduling End Date
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEndTime(string $EndTime) Set Scheduling End Date
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getExecutionStartTime() Obtain Execution Time Left Closed Interval
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecutionStartTime(string $ExecutionStartTime) Set Execution Time Left Closed Interval
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getExecutionEndTime() Obtain Execution Time Right Closed Interval
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecutionEndTime(string $ExecutionEndTime) Set Execution Time Right Closed Interval
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCycleType() Obtain Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCycleType(string $CycleType) Set Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getCycleStep() Obtain Step Length
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCycleStep(integer $CycleStep) Set Step Length
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCrontabExpression() Obtain Scheduling Cron Expression
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCrontabExpression(string $CrontabExpression) Set Scheduling Cron Expression
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDelayTime() Obtain Delayed Execution Time, unit=minutes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDelayTime(integer $DelayTime) Set Delayed Execution Time, unit=minutes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getStartupTime() Obtain Start Execution Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStartupTime(integer $StartupTime) Set Start Execution Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRetryWait() Obtain Retry Wait Time, unit=minutes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRetryWait(integer $RetryWait) Set Retry Wait Time, unit=minutes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRetryAble() Obtain Whether to Retry, 1 represents retryable
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRetryAble(integer $RetryAble) Set Whether to Retry, 1 represents retryable
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskAction() Obtain Scheduling Configuration - Elastic Cycle Configuration, available for Hour/Weekly/Month/Year schedules. For hourly tasks scheduled at 0, 3, 4 o'clock, it would be '0,3,4'
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskAction(string $TaskAction) Set Scheduling Configuration - Elastic Cycle Configuration, available for Hour/Weekly/Month/Year schedules. For hourly tasks scheduled at 0, 3, 4 o'clock, it would be '0,3,4'
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTryLimit() Obtain Limit on Number of Runs
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTryLimit(integer $TryLimit) Set Limit on Number of Runs
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRunPriority() Obtain Running Priority
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRunPriority(integer $RunPriority) Set Running Priority
Note: This field may return null, indicating that no valid value can be obtained.
 * @method TaskTypeOpsDto getTaskType() Obtain Task TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskType(TaskTypeOpsDto $TaskType) Set Task TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getBrokerIp() Obtain Specified Running Nodes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setBrokerIp(string $BrokerIp) Set Specified Running Nodes
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getClusterId() Obtain Cluster Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setClusterId(string $ClusterId) Set Cluster Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getMinDateTime() Obtain Minimum Data Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMinDateTime(string $MinDateTime) Set Minimum Data Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getMaxDateTime() Obtain Maximum Data Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMaxDateTime(string $MaxDateTime) Set Maximum Data Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getExecutionTTL() Obtain Runtime Timeout
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecutionTTL(integer $ExecutionTTL) Set Runtime Timeout
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSelfDepend() Obtain Self-Dependency Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSelfDepend(string $SelfDepend) Set Self-Dependency Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method float getLeftCoordinate() Obtain Left Coordinate
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLeftCoordinate(float $LeftCoordinate) Set Left Coordinate
Note: This field may return null, indicating that no valid value can be obtained.
 * @method float getTopCoordinate() Obtain Top Coordinate
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTopCoordinate(float $TopCoordinate) Set Top Coordinate
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getNotes() Obtain Task Remark
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNotes(string $Notes) Set Task Remark
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInstanceInitStrategy() Obtain Task Initialization Strategy
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceInitStrategy(string $InstanceInitStrategy) Set Task Initialization Strategy
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getYarnQueue() Obtain Compute Queue
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setYarnQueue(string $YarnQueue) Set Compute Queue
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLastSchedulerCommitTime() Obtain Latest Schedule Submission Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLastSchedulerCommitTime(string $LastSchedulerCommitTime) Set Latest Schedule Submission Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getNormalizedJobStartTime() Obtain Task Start Time Calculated by cron Expression
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNormalizedJobStartTime(string $NormalizedJobStartTime) Set Task Start Time Calculated by cron Expression
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSchedulerDesc() Obtain Scheduling Plan Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSchedulerDesc(string $SchedulerDesc) Set Scheduling Plan Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getResourceGroup() Obtain Compute Resource Group
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setResourceGroup(string $ResourceGroup) Set Compute Resource Group
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreator() Obtain Task Creator
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreator(string $Creator) Set Task Creator
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDependencyRel() Obtain Task Dependency Type: and, or
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDependencyRel(string $DependencyRel) Set Task Dependency Type: and, or
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDependencyWorkflow() Obtain Task Workflow Dependency: yes, no
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDependencyWorkflow(string $DependencyWorkflow) Set Task Workflow Dependency: yes, no
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getEventListenerConfig() Obtain Event Listening Configuration
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEventListenerConfig(string $EventListenerConfig) Set Event Listening Configuration
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getEventPublisherConfig() Obtain Event-driven Configuration
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEventPublisherConfig(string $EventPublisherConfig) Set Event-driven Configuration
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getVirtualTaskStatus() Obtain Virtual Task Status
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setVirtualTaskStatus(string $VirtualTaskStatus) Set Virtual Task Status
Note: This field may return null, indicating that no valid value can be obtained.
 * @method LinkOpsDto getTaskLinkInfo() Obtain Task Dependency Edge Details
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskLinkInfo(LinkOpsDto $TaskLinkInfo) Set Task Dependency Edge Details
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProductName() Obtain Task Product TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProductName(string $ProductName) Set Task Product TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectId() Obtain Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectIdent() Obtain Project IdentifierNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectIdent(string $ProjectIdent) Set Project IdentifierNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectName() Obtain Project nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectName(string $ProjectName) Set Project nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwnId() Obtain Main Account userId
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwnId(string $OwnId) Set Main Account userId
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUserId() Obtain User userId
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUserId(string $UserId) Set User userId
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTenantId() Obtain Tenant ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTenantId(string $TenantId) Set Tenant ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUpdateUser() Obtain Updater's Nickname
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpdateUser(string $UpdateUser) Set Updater's Nickname
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUpdateTime() Obtain Update timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpdateTime(string $UpdateTime) Set Update timeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getUpdateUserId() Obtain Updater's userId
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUpdateUserId(string $UpdateUserId) Set Updater's userId
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTaskTypeId() Obtain Task Type ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskTypeId(integer $TaskTypeId) Set Task Type ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskTypeDesc() Obtain Task Type Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskTypeDesc(string $TaskTypeDesc) Set Task Type Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getShowWorkflow() Obtain Whether to Display Workflow
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setShowWorkflow(boolean $ShowWorkflow) Set Whether to Display Workflow
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getFirstSubmitTime() Obtain First Submission Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFirstSubmitTime(string $FirstSubmitTime) Set First Submission Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getFirstRunTime() Obtain First Execution Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFirstRunTime(string $FirstRunTime) Set First Execution Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getScheduleDesc() Obtain Scheduling Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setScheduleDesc(string $ScheduleDesc) Set Scheduling Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getCycleNum() Obtain CycleNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCycleNum(integer $CycleNum) Set CycleNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getCrontab() Obtain ExpressionsNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCrontab(string $Crontab) Set ExpressionsNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getStartDate() Obtain Start Date
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStartDate(string $StartDate) Set Start Date
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getEndDate() Obtain End Date
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEndDate(string $EndDate) Set End Date
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCycleUnit() Obtain Cycle Unit
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCycleUnit(string $CycleUnit) Set Cycle Unit
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInitStrategy() Obtain Initialization Strategy
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInitStrategy(string $InitStrategy) Set Initialization Strategy
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLayer() Obtain Hierarchy
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLayer(string $Layer) Set Hierarchy
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSourceServiceId() Obtain Source Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSourceServiceId(string $SourceServiceId) Set Source Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSourceServiceType() Obtain Source Data Source Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSourceServiceType(string $SourceServiceType) Set Source Data Source Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTargetServiceId() Obtain Target Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTargetServiceId(string $TargetServiceId) Set Target Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTargetServiceType() Obtain Target Data Source Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTargetServiceType(string $TargetServiceType) Set Target Data Source Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getTasksStr() Obtain Subtask List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTasksStr(string $TasksStr) Set Subtask List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getSubmit() Obtain Whether the Task Version Has Been Submitted
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSubmit(boolean $Submit) Set Whether the Task Version Has Been Submitted
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getExecutorGroupId() Obtain Resource Group IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecutorGroupId(string $ExecutorGroupId) Set Resource Group IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getExecutorGroupName() Obtain Resource Group NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecutorGroupName(string $ExecutorGroupName) Set Resource Group NameNote: This field may return null, indicating that no valid value can be obtained.
 */
class TaskOpsDto extends AbstractModel
{
    /**
     * @var string Task IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskId;

    /**
     * @var string Virtual Task ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $VirtualTaskId;

    /**
     * @var boolean Virtual Task Marker
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $VirtualFlag;

    /**
     * @var string Task NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskName;

    /**
     * @var string Workflow IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $WorkflowId;

    /**
     * @var string Actual Workflow ID when the task is a virtual task
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RealWorkflowId;

    /**
     * @var string Workflow nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $WorkflowName;

    /**
     * @var string Folder ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FolderId;

    /**
     * @var string Folder Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FolderName;

    /**
     * @var string Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Latest Update Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LastUpdate;

    /**
     * @var string Task StatusNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Status;

    /**
     * @var string Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $InCharge;

    /**
     * @var string Responsible User ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InChargeId;

    /**
     * @var string Scheduling Effective Date
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StartTime;

    /**
     * @var string Scheduling End Date
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EndTime;

    /**
     * @var string Execution Time Left Closed Interval
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecutionStartTime;

    /**
     * @var string Execution Time Right Closed Interval
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecutionEndTime;

    /**
     * @var string Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CycleType;

    /**
     * @var integer Step Length
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CycleStep;

    /**
     * @var string Scheduling Cron Expression
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CrontabExpression;

    /**
     * @var integer Delayed Execution Time, unit=minutes
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DelayTime;

    /**
     * @var integer Start Execution Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StartupTime;

    /**
     * @var integer Retry Wait Time, unit=minutes
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RetryWait;

    /**
     * @var integer Whether to Retry, 1 represents retryable
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RetryAble;

    /**
     * @var string Scheduling Configuration - Elastic Cycle Configuration, available for Hour/Weekly/Month/Year schedules. For hourly tasks scheduled at 0, 3, 4 o'clock, it would be '0,3,4'
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskAction;

    /**
     * @var integer Limit on Number of Runs
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TryLimit;

    /**
     * @var integer Running Priority
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RunPriority;

    /**
     * @var TaskTypeOpsDto Task TypeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskType;

    /**
     * @var string Specified Running Nodes
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $BrokerIp;

    /**
     * @var string Cluster Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ClusterId;

    /**
     * @var string Minimum Data Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MinDateTime;

    /**
     * @var string Maximum Data Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MaxDateTime;

    /**
     * @var integer Runtime Timeout
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecutionTTL;

    /**
     * @var string Self-Dependency Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SelfDepend;

    /**
     * @var float Left Coordinate
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LeftCoordinate;

    /**
     * @var float Top Coordinate
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TopCoordinate;

    /**
     * @var string Task Remark
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Notes;

    /**
     * @var string Task Initialization Strategy
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceInitStrategy;

    /**
     * @var string Compute Queue
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $YarnQueue;

    /**
     * @var string Latest Schedule Submission Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LastSchedulerCommitTime;

    /**
     * @var string Task Start Time Calculated by cron Expression
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $NormalizedJobStartTime;

    /**
     * @var string Scheduling Plan Description
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SchedulerDesc;

    /**
     * @var string Compute Resource Group
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ResourceGroup;

    /**
     * @var string Task Creator
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Creator;

    /**
     * @var string Task Dependency Type: and, or
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DependencyRel;

    /**
     * @var string Task Workflow Dependency: yes, no
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DependencyWorkflow;

    /**
     * @var string Event Listening Configuration
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EventListenerConfig;

    /**
     * @var string Event-driven Configuration
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EventPublisherConfig;

    /**
     * @var string Virtual Task Status
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $VirtualTaskStatus;

    /**
     * @var LinkOpsDto Task Dependency Edge Details
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskLinkInfo;

    /**
     * @var string Task Product TypeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProductName;

    /**
     * @var string Project IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Project IdentifierNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectIdent;

    /**
     * @var string Project nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectName;

    /**
     * @var string Main Account userId
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OwnId;

    /**
     * @var string User userId
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UserId;

    /**
     * @var string Tenant ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TenantId;

    /**
     * @var string Updater's Nickname
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpdateUser;

    /**
     * @var string Update timeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpdateTime;

    /**
     * @var string Updater's userId
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UpdateUserId;

    /**
     * @var integer Task Type ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskTypeId;

    /**
     * @var string Task Type Description
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskTypeDesc;

    /**
     * @var boolean Whether to Display Workflow
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ShowWorkflow;

    /**
     * @var string First Submission Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FirstSubmitTime;

    /**
     * @var string First Execution Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FirstRunTime;

    /**
     * @var string Scheduling Description
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ScheduleDesc;

    /**
     * @var integer CycleNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CycleNum;

    /**
     * @var string ExpressionsNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Crontab;

    /**
     * @var string Start Date
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StartDate;

    /**
     * @var string End Date
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EndDate;

    /**
     * @var string Cycle Unit
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CycleUnit;

    /**
     * @var string Initialization Strategy
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InitStrategy;

    /**
     * @var string Hierarchy
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Layer;

    /**
     * @var string Source Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SourceServiceId;

    /**
     * @var string Source Data Source Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SourceServiceType;

    /**
     * @var string Target Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TargetServiceId;

    /**
     * @var string Target Data Source Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TargetServiceType;

    /**
     * @var string Subtask List
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TasksStr;

    /**
     * @var boolean Whether the Task Version Has Been Submitted
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Submit;

    /**
     * @var string Resource Group IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecutorGroupId;

    /**
     * @var string Resource Group NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecutorGroupName;

    /**
     * @param string $TaskId Task IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $VirtualTaskId Virtual Task ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $VirtualFlag Virtual Task Marker
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskName Task NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $WorkflowId Workflow IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $RealWorkflowId Actual Workflow ID when the task is a virtual task
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $WorkflowName Workflow nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $FolderId Folder ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $FolderName Folder Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $LastUpdate Latest Update Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Status Task StatusNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $InCharge Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $InChargeId Responsible User ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $StartTime Scheduling Effective Date
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $EndTime Scheduling End Date
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExecutionStartTime Execution Time Left Closed Interval
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExecutionEndTime Execution Time Right Closed Interval
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CycleType Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $CycleStep Step Length
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CrontabExpression Scheduling Cron Expression
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DelayTime Delayed Execution Time, unit=minutes
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $StartupTime Start Execution Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RetryWait Retry Wait Time, unit=minutes
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RetryAble Whether to Retry, 1 represents retryable
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskAction Scheduling Configuration - Elastic Cycle Configuration, available for Hour/Weekly/Month/Year schedules. For hourly tasks scheduled at 0, 3, 4 o'clock, it would be '0,3,4'
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TryLimit Limit on Number of Runs
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RunPriority Running Priority
Note: This field may return null, indicating that no valid value can be obtained.
     * @param TaskTypeOpsDto $TaskType Task TypeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $BrokerIp Specified Running Nodes
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ClusterId Cluster Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $MinDateTime Minimum Data Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $MaxDateTime Maximum Data Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $ExecutionTTL Runtime Timeout
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SelfDepend Self-Dependency Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param float $LeftCoordinate Left Coordinate
Note: This field may return null, indicating that no valid value can be obtained.
     * @param float $TopCoordinate Top Coordinate
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Notes Task Remark
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InstanceInitStrategy Task Initialization Strategy
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $YarnQueue Compute Queue
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $LastSchedulerCommitTime Latest Schedule Submission Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $NormalizedJobStartTime Task Start Time Calculated by cron Expression
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SchedulerDesc Scheduling Plan Description
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ResourceGroup Compute Resource Group
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Creator Task Creator
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DependencyRel Task Dependency Type: and, or
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DependencyWorkflow Task Workflow Dependency: yes, no
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $EventListenerConfig Event Listening Configuration
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $EventPublisherConfig Event-driven Configuration
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $VirtualTaskStatus Virtual Task Status
Note: This field may return null, indicating that no valid value can be obtained.
     * @param LinkOpsDto $TaskLinkInfo Task Dependency Edge Details
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProductName Task Product TypeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectId Project IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectIdent Project IdentifierNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectName Project nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $OwnId Main Account userId
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UserId User userId
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TenantId Tenant ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UpdateUser Updater's Nickname
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UpdateTime Update timeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $UpdateUserId Updater's userId
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TaskTypeId Task Type ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskTypeDesc Task Type Description
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $ShowWorkflow Whether to Display Workflow
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $FirstSubmitTime First Submission Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $FirstRunTime First Execution Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ScheduleDesc Scheduling Description
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $CycleNum CycleNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Crontab ExpressionsNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $StartDate Start Date
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $EndDate End Date
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CycleUnit Cycle Unit
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InitStrategy Initialization Strategy
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $Layer Hierarchy
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SourceServiceId Source Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SourceServiceType Source Data Source Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TargetServiceId Target Data Source ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TargetServiceType Target Data Source Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $TasksStr Subtask List
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $Submit Whether the Task Version Has Been Submitted
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExecutorGroupId Resource Group IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExecutorGroupName Resource Group NameNote: This field may return null, indicating that no valid value can be obtained.
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

        if (array_key_exists("VirtualTaskId",$param) and $param["VirtualTaskId"] !== null) {
            $this->VirtualTaskId = $param["VirtualTaskId"];
        }

        if (array_key_exists("VirtualFlag",$param) and $param["VirtualFlag"] !== null) {
            $this->VirtualFlag = $param["VirtualFlag"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("RealWorkflowId",$param) and $param["RealWorkflowId"] !== null) {
            $this->RealWorkflowId = $param["RealWorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastUpdate",$param) and $param["LastUpdate"] !== null) {
            $this->LastUpdate = $param["LastUpdate"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("InChargeId",$param) and $param["InChargeId"] !== null) {
            $this->InChargeId = $param["InChargeId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ExecutionStartTime",$param) and $param["ExecutionStartTime"] !== null) {
            $this->ExecutionStartTime = $param["ExecutionStartTime"];
        }

        if (array_key_exists("ExecutionEndTime",$param) and $param["ExecutionEndTime"] !== null) {
            $this->ExecutionEndTime = $param["ExecutionEndTime"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("CycleStep",$param) and $param["CycleStep"] !== null) {
            $this->CycleStep = $param["CycleStep"];
        }

        if (array_key_exists("CrontabExpression",$param) and $param["CrontabExpression"] !== null) {
            $this->CrontabExpression = $param["CrontabExpression"];
        }

        if (array_key_exists("DelayTime",$param) and $param["DelayTime"] !== null) {
            $this->DelayTime = $param["DelayTime"];
        }

        if (array_key_exists("StartupTime",$param) and $param["StartupTime"] !== null) {
            $this->StartupTime = $param["StartupTime"];
        }

        if (array_key_exists("RetryWait",$param) and $param["RetryWait"] !== null) {
            $this->RetryWait = $param["RetryWait"];
        }

        if (array_key_exists("RetryAble",$param) and $param["RetryAble"] !== null) {
            $this->RetryAble = $param["RetryAble"];
        }

        if (array_key_exists("TaskAction",$param) and $param["TaskAction"] !== null) {
            $this->TaskAction = $param["TaskAction"];
        }

        if (array_key_exists("TryLimit",$param) and $param["TryLimit"] !== null) {
            $this->TryLimit = $param["TryLimit"];
        }

        if (array_key_exists("RunPriority",$param) and $param["RunPriority"] !== null) {
            $this->RunPriority = $param["RunPriority"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = new TaskTypeOpsDto();
            $this->TaskType->deserialize($param["TaskType"]);
        }

        if (array_key_exists("BrokerIp",$param) and $param["BrokerIp"] !== null) {
            $this->BrokerIp = $param["BrokerIp"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("MinDateTime",$param) and $param["MinDateTime"] !== null) {
            $this->MinDateTime = $param["MinDateTime"];
        }

        if (array_key_exists("MaxDateTime",$param) and $param["MaxDateTime"] !== null) {
            $this->MaxDateTime = $param["MaxDateTime"];
        }

        if (array_key_exists("ExecutionTTL",$param) and $param["ExecutionTTL"] !== null) {
            $this->ExecutionTTL = $param["ExecutionTTL"];
        }

        if (array_key_exists("SelfDepend",$param) and $param["SelfDepend"] !== null) {
            $this->SelfDepend = $param["SelfDepend"];
        }

        if (array_key_exists("LeftCoordinate",$param) and $param["LeftCoordinate"] !== null) {
            $this->LeftCoordinate = $param["LeftCoordinate"];
        }

        if (array_key_exists("TopCoordinate",$param) and $param["TopCoordinate"] !== null) {
            $this->TopCoordinate = $param["TopCoordinate"];
        }

        if (array_key_exists("Notes",$param) and $param["Notes"] !== null) {
            $this->Notes = $param["Notes"];
        }

        if (array_key_exists("InstanceInitStrategy",$param) and $param["InstanceInitStrategy"] !== null) {
            $this->InstanceInitStrategy = $param["InstanceInitStrategy"];
        }

        if (array_key_exists("YarnQueue",$param) and $param["YarnQueue"] !== null) {
            $this->YarnQueue = $param["YarnQueue"];
        }

        if (array_key_exists("LastSchedulerCommitTime",$param) and $param["LastSchedulerCommitTime"] !== null) {
            $this->LastSchedulerCommitTime = $param["LastSchedulerCommitTime"];
        }

        if (array_key_exists("NormalizedJobStartTime",$param) and $param["NormalizedJobStartTime"] !== null) {
            $this->NormalizedJobStartTime = $param["NormalizedJobStartTime"];
        }

        if (array_key_exists("SchedulerDesc",$param) and $param["SchedulerDesc"] !== null) {
            $this->SchedulerDesc = $param["SchedulerDesc"];
        }

        if (array_key_exists("ResourceGroup",$param) and $param["ResourceGroup"] !== null) {
            $this->ResourceGroup = $param["ResourceGroup"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = $param["Creator"];
        }

        if (array_key_exists("DependencyRel",$param) and $param["DependencyRel"] !== null) {
            $this->DependencyRel = $param["DependencyRel"];
        }

        if (array_key_exists("DependencyWorkflow",$param) and $param["DependencyWorkflow"] !== null) {
            $this->DependencyWorkflow = $param["DependencyWorkflow"];
        }

        if (array_key_exists("EventListenerConfig",$param) and $param["EventListenerConfig"] !== null) {
            $this->EventListenerConfig = $param["EventListenerConfig"];
        }

        if (array_key_exists("EventPublisherConfig",$param) and $param["EventPublisherConfig"] !== null) {
            $this->EventPublisherConfig = $param["EventPublisherConfig"];
        }

        if (array_key_exists("VirtualTaskStatus",$param) and $param["VirtualTaskStatus"] !== null) {
            $this->VirtualTaskStatus = $param["VirtualTaskStatus"];
        }

        if (array_key_exists("TaskLinkInfo",$param) and $param["TaskLinkInfo"] !== null) {
            $this->TaskLinkInfo = new LinkOpsDto();
            $this->TaskLinkInfo->deserialize($param["TaskLinkInfo"]);
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectIdent",$param) and $param["ProjectIdent"] !== null) {
            $this->ProjectIdent = $param["ProjectIdent"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("OwnId",$param) and $param["OwnId"] !== null) {
            $this->OwnId = $param["OwnId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("UpdateUser",$param) and $param["UpdateUser"] !== null) {
            $this->UpdateUser = $param["UpdateUser"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("UpdateUserId",$param) and $param["UpdateUserId"] !== null) {
            $this->UpdateUserId = $param["UpdateUserId"];
        }

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("TaskTypeDesc",$param) and $param["TaskTypeDesc"] !== null) {
            $this->TaskTypeDesc = $param["TaskTypeDesc"];
        }

        if (array_key_exists("ShowWorkflow",$param) and $param["ShowWorkflow"] !== null) {
            $this->ShowWorkflow = $param["ShowWorkflow"];
        }

        if (array_key_exists("FirstSubmitTime",$param) and $param["FirstSubmitTime"] !== null) {
            $this->FirstSubmitTime = $param["FirstSubmitTime"];
        }

        if (array_key_exists("FirstRunTime",$param) and $param["FirstRunTime"] !== null) {
            $this->FirstRunTime = $param["FirstRunTime"];
        }

        if (array_key_exists("ScheduleDesc",$param) and $param["ScheduleDesc"] !== null) {
            $this->ScheduleDesc = $param["ScheduleDesc"];
        }

        if (array_key_exists("CycleNum",$param) and $param["CycleNum"] !== null) {
            $this->CycleNum = $param["CycleNum"];
        }

        if (array_key_exists("Crontab",$param) and $param["Crontab"] !== null) {
            $this->Crontab = $param["Crontab"];
        }

        if (array_key_exists("StartDate",$param) and $param["StartDate"] !== null) {
            $this->StartDate = $param["StartDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("CycleUnit",$param) and $param["CycleUnit"] !== null) {
            $this->CycleUnit = $param["CycleUnit"];
        }

        if (array_key_exists("InitStrategy",$param) and $param["InitStrategy"] !== null) {
            $this->InitStrategy = $param["InitStrategy"];
        }

        if (array_key_exists("Layer",$param) and $param["Layer"] !== null) {
            $this->Layer = $param["Layer"];
        }

        if (array_key_exists("SourceServiceId",$param) and $param["SourceServiceId"] !== null) {
            $this->SourceServiceId = $param["SourceServiceId"];
        }

        if (array_key_exists("SourceServiceType",$param) and $param["SourceServiceType"] !== null) {
            $this->SourceServiceType = $param["SourceServiceType"];
        }

        if (array_key_exists("TargetServiceId",$param) and $param["TargetServiceId"] !== null) {
            $this->TargetServiceId = $param["TargetServiceId"];
        }

        if (array_key_exists("TargetServiceType",$param) and $param["TargetServiceType"] !== null) {
            $this->TargetServiceType = $param["TargetServiceType"];
        }

        if (array_key_exists("TasksStr",$param) and $param["TasksStr"] !== null) {
            $this->TasksStr = $param["TasksStr"];
        }

        if (array_key_exists("Submit",$param) and $param["Submit"] !== null) {
            $this->Submit = $param["Submit"];
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("ExecutorGroupName",$param) and $param["ExecutorGroupName"] !== null) {
            $this->ExecutorGroupName = $param["ExecutorGroupName"];
        }
    }
}
