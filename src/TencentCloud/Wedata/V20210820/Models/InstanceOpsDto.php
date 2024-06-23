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
 * Instance Operation Details
 *
 * @method string getTaskId() Obtain Task IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskId(string $TaskId) Set Task IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getTaskName() Obtain Task NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskName(string $TaskName) Set Task NameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getWorkflowId() Obtain Workflow ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getWorkflowName() Obtain Workflow nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getInCharge() Obtain Owner
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInCharge(string $InCharge) Set Owner
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCycleType() Obtain Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCycleType(string $CycleType) Set Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCurRunDate() Obtain Data Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCurRunDate(string $CurRunDate) Set Data Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getNextCurDate() Obtain Next Data Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setNextCurDate(string $NextCurDate) Set Next Data Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRunPriority() Obtain Running Priority
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRunPriority(integer $RunPriority) Set Running Priority
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTryLimit() Obtain Number of Attempts
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTryLimit(integer $TryLimit) Set Number of Attempts
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTries() Obtain Current Running Times
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTries(integer $Tries) Set Current Running Times
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getTotalRunNum() Obtain Total Retry Attempts
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTotalRunNum(integer $TotalRunNum) Set Total Retry Attempts
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getDoFlag() Obtain Whether to Supplement
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDoFlag(integer $DoFlag) Set Whether to Supplement
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRedoFlag() Obtain Whether it is a Retry
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRedoFlag(integer $RedoFlag) Set Whether it is a Retry
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getState() Obtain Instance StatusNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setState(string $State) Set Instance StatusNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getRuntimeBroker() Obtain Run Node
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRuntimeBroker(string $RuntimeBroker) Set Run Node
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getErrorDesc() Obtain Reason for Failure
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setErrorDesc(string $ErrorDesc) Set Reason for Failure
Note: This field may return null, indicating that no valid value can be obtained.
 * @method TaskTypeOpsDto getTaskType() Obtain Task TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTaskType(TaskTypeOpsDto $TaskType) Set Task TypeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getDependenceFulfillTime() Obtain Dependency Judgment Completion Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDependenceFulfillTime(string $DependenceFulfillTime) Set Dependency Judgment Completion Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getFirstDependenceFulfillTime() Obtain First Dependency Judgment Pass Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFirstDependenceFulfillTime(string $FirstDependenceFulfillTime) Set First Dependency Judgment Pass Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getFirstStartTime() Obtain Initial startup time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFirstStartTime(string $FirstStartTime) Set Initial startup time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getStartTime() Obtain Start startup time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setStartTime(string $StartTime) Set Start startup time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getEndTime() Obtain Operation completion time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setEndTime(string $EndTime) Set Operation completion time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCostTime() Obtain Time Consumed
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCostTime(string $CostTime) Set Time Consumed
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getCostMillisecond() Obtain Elapsed time (ms)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCostMillisecond(integer $CostMillisecond) Set Elapsed time (ms)
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getMaxCostTime() Obtain Maximum operation duration
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMaxCostTime(integer $MaxCostTime) Set Maximum operation duration
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getMinCostTime() Obtain Minimum operation duration
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMinCostTime(integer $MinCostTime) Set Minimum operation duration
Note: This field may return null, indicating that no valid value can be obtained.
 * @method float getAvgCostTime() Obtain Average operation duration
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAvgCostTime(float $AvgCostTime) Set Average operation duration
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLastLog() Obtain Recent logs
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLastLog(string $LastLog) Set Recent logs
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSchedulerDateTime() Obtain Scheduling Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSchedulerDateTime(string $SchedulerDateTime) Set Scheduling Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLastSchedulerDateTime() Obtain Last scheduling time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLastSchedulerDateTime(string $LastSchedulerDateTime) Set Last scheduling time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getLastUpdate() Obtain Last update event
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLastUpdate(string $LastUpdate) Set Last update event
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getCreateTime() Obtain Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setCreateTime(string $CreateTime) Set Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getDependencyRel() Obtain Branch, Dependency Relationship and,or
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDependencyRel(string $DependencyRel) Set Branch, Dependency Relationship and,or
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getExecutionSpace() Obtain Execution space
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecutionSpace(string $ExecutionSpace) Set Execution space
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getIgnoreEvent() Obtain Ignore events
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setIgnoreEvent(boolean $IgnoreEvent) Set Ignore events
Note: This field may return null, indicating that no valid value can be obtained.
 * @method boolean getVirtualFlag() Obtain Virtual Task Instance
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setVirtualFlag(boolean $VirtualFlag) Set Virtual Task Instance
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getFolderId() Obtain Folder ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFolderId(string $FolderId) Set Folder ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getFolderName() Obtain Folder Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFolderName(string $FolderName) Set Folder Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSonList() Obtain Recursive Instance Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSonList(string $SonList) Set Recursive Instance Information
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProductName() Obtain Product Business Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProductName(string $ProductName) Set Product Business Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getResourceGroup() Obtain Resource Group
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setResourceGroup(string $ResourceGroup) Set Resource Group
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getResourceInstanceId() Obtain Resource Group Specified Execution Node
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setResourceInstanceId(string $ResourceInstanceId) Set Resource Group Specified Execution Node
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getYarnQueue() Obtain Resource Queue
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setYarnQueue(string $YarnQueue) Set Resource Queue
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSchedulerDesc() Obtain Scheduling Plan
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setSchedulerDesc(string $SchedulerDesc) Set Scheduling Plan
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getFirstSubmitTime() Obtain Latest Submission Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFirstSubmitTime(string $FirstSubmitTime) Set Latest Submission Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getFirstRunTime() Obtain First Execution Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFirstRunTime(string $FirstRunTime) Set First Execution Time
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectId() Obtain Project ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectIdent() Obtain Project Identifier
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectIdent(string $ProjectIdent) Set Project Identifier
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectName() Obtain Project nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectName(string $ProjectName) Set Project nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getTenantId() Obtain Tenant ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setTenantId(string $TenantId) Set Tenant ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getInstanceKey() Obtain Instance Identifier
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceKey(string $InstanceKey) Set Instance Identifier
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getExecutorGroupId() Obtain Resource Group ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecutorGroupId(string $ExecutorGroupId) Set Resource Group ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getExecutorGroupName() Obtain Resource Group Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setExecutorGroupName(string $ExecutorGroupName) Set Resource Group Name
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getRelatedInstanceList() Obtain Associated Instance Information.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRelatedInstanceList(array $RelatedInstanceList) Set Associated Instance Information.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRelatedInstanceSize() Obtain Associated Instance Information Quantity, not strongly associated with RelatedInstanceList.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRelatedInstanceSize(integer $RelatedInstanceSize) Set Associated Instance Information Quantity, not strongly associated with RelatedInstanceList.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwnerId() Obtain ownerId
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwnerId(string $OwnerId) Set ownerId
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUserId() Obtain User ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUserId(string $UserId) Set User ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method InstanceLifeCycleOpsDto getInstanceLifeCycleOpsDto() Obtain Instance LifecycleNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setInstanceLifeCycleOpsDto(InstanceLifeCycleOpsDto $InstanceLifeCycleOpsDto) Set Instance LifecycleNote: This field may return null, indicating that no valid value can be obtained.
 * @method integer getRetryAttempts() Obtain Automatic Retry Attempts
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setRetryAttempts(integer $RetryAttempts) Set Automatic Retry Attempts
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getDeletedFatherList() Obtain Urgently Removed Dependency Parent Instance List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDeletedFatherList(array $DeletedFatherList) Set Urgently Removed Dependency Parent Instance List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getCirculateInstanceList() Obtain Cyclic Dependency Associated Instances
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setCirculateInstanceList(array $CirculateInstanceList) Set Cyclic Dependency Associated Instances
Note: This field may return null, indicating that no valid value can be obtained.
 */
class InstanceOpsDto extends AbstractModel
{
    /**
     * @var string Task IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskId;

    /**
     * @var string Task NameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskName;

    /**
     * @var string Workflow ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WorkflowId;

    /**
     * @var string Workflow nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $WorkflowName;

    /**
     * @var string Owner
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InCharge;

    /**
     * @var string Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CycleType;

    /**
     * @var string Data Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CurRunDate;

    /**
     * @var string Next Data Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $NextCurDate;

    /**
     * @var integer Running Priority
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RunPriority;

    /**
     * @var integer Number of Attempts
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TryLimit;

    /**
     * @var integer Current Running Times
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Tries;

    /**
     * @var integer Total Retry Attempts
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TotalRunNum;

    /**
     * @var integer Whether to Supplement
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DoFlag;

    /**
     * @var integer Whether it is a Retry
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RedoFlag;

    /**
     * @var string Instance StatusNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $State;

    /**
     * @var string Run Node
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RuntimeBroker;

    /**
     * @var string Reason for Failure
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ErrorDesc;

    /**
     * @var TaskTypeOpsDto Task TypeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $TaskType;

    /**
     * @var string Dependency Judgment Completion Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DependenceFulfillTime;

    /**
     * @var string First Dependency Judgment Pass Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FirstDependenceFulfillTime;

    /**
     * @var string Initial startup time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FirstStartTime;

    /**
     * @var string Start startup time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $StartTime;

    /**
     * @var string Operation completion time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $EndTime;

    /**
     * @var string Time Consumed
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CostTime;

    /**
     * @var integer Elapsed time (ms)
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CostMillisecond;

    /**
     * @var integer Maximum operation duration
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MaxCostTime;

    /**
     * @var integer Minimum operation duration
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MinCostTime;

    /**
     * @var float Average operation duration
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AvgCostTime;

    /**
     * @var string Recent logs
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LastLog;

    /**
     * @var string Scheduling Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SchedulerDateTime;

    /**
     * @var string Last scheduling time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LastSchedulerDateTime;

    /**
     * @var string Last update event
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $LastUpdate;

    /**
     * @var string Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $CreateTime;

    /**
     * @var string Branch, Dependency Relationship and,or
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DependencyRel;

    /**
     * @var string Execution space
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecutionSpace;

    /**
     * @var boolean Ignore events
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $IgnoreEvent;

    /**
     * @var boolean Virtual Task Instance
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $VirtualFlag;

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
     * @var string Recursive Instance Information
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SonList;

    /**
     * @var string Product Business Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProductName;

    /**
     * @var string Resource Group
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ResourceGroup;

    /**
     * @var string Resource Group Specified Execution Node
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ResourceInstanceId;

    /**
     * @var string Resource Queue
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $YarnQueue;

    /**
     * @var string Scheduling Plan
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $SchedulerDesc;

    /**
     * @var string Latest Submission Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FirstSubmitTime;

    /**
     * @var string First Execution Time
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FirstRunTime;

    /**
     * @var string Project ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Project Identifier
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectIdent;

    /**
     * @var string Project nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $ProjectName;

    /**
     * @var string Tenant ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $TenantId;

    /**
     * @var string Instance Identifier
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceKey;

    /**
     * @var string Resource Group ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecutorGroupId;

    /**
     * @var string Resource Group Name
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $ExecutorGroupName;

    /**
     * @var array Associated Instance Information.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RelatedInstanceList;

    /**
     * @var integer Associated Instance Information Quantity, not strongly associated with RelatedInstanceList.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RelatedInstanceSize;

    /**
     * @var string ownerId
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OwnerId;

    /**
     * @var string User ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UserId;

    /**
     * @var InstanceLifeCycleOpsDto Instance LifecycleNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $InstanceLifeCycleOpsDto;

    /**
     * @var integer Automatic Retry Attempts
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $RetryAttempts;

    /**
     * @var array Urgently Removed Dependency Parent Instance List
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DeletedFatherList;

    /**
     * @var array Cyclic Dependency Associated Instances
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $CirculateInstanceList;

    /**
     * @param string $TaskId Task IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $TaskName Task NameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $WorkflowId Workflow ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $WorkflowName Workflow nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $InCharge Owner
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CycleType Cycle Type
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CurRunDate Data Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $NextCurDate Next Data Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RunPriority Running Priority
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TryLimit Number of Attempts
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $Tries Current Running Times
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $TotalRunNum Total Retry Attempts
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $DoFlag Whether to Supplement
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RedoFlag Whether it is a Retry
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $State Instance StatusNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $RuntimeBroker Run Node
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ErrorDesc Reason for Failure
Note: This field may return null, indicating that no valid value can be obtained.
     * @param TaskTypeOpsDto $TaskType Task TypeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $DependenceFulfillTime Dependency Judgment Completion Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $FirstDependenceFulfillTime First Dependency Judgment Pass Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $FirstStartTime Initial startup time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $StartTime Start startup time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $EndTime Operation completion time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CostTime Time Consumed
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $CostMillisecond Elapsed time (ms)
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $MaxCostTime Maximum operation duration
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $MinCostTime Minimum operation duration
Note: This field may return null, indicating that no valid value can be obtained.
     * @param float $AvgCostTime Average operation duration
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $LastLog Recent logs
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SchedulerDateTime Scheduling Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $LastSchedulerDateTime Last scheduling time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $LastUpdate Last update event
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $CreateTime Creation TimeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $DependencyRel Branch, Dependency Relationship and,or
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExecutionSpace Execution space
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $IgnoreEvent Ignore events
Note: This field may return null, indicating that no valid value can be obtained.
     * @param boolean $VirtualFlag Virtual Task Instance
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $FolderId Folder ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $FolderName Folder Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SonList Recursive Instance Information
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProductName Product Business Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ResourceGroup Resource Group
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ResourceInstanceId Resource Group Specified Execution Node
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $YarnQueue Resource Queue
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SchedulerDesc Scheduling Plan
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $FirstSubmitTime Latest Submission Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $FirstRunTime First Execution Time
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectId Project ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectIdent Project Identifier
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectName Project nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $TenantId Tenant ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $InstanceKey Instance Identifier
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExecutorGroupId Resource Group ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ExecutorGroupName Resource Group Name
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $RelatedInstanceList Associated Instance Information.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RelatedInstanceSize Associated Instance Information Quantity, not strongly associated with RelatedInstanceList.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OwnerId ownerId
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UserId User ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param InstanceLifeCycleOpsDto $InstanceLifeCycleOpsDto Instance LifecycleNote: This field may return null, indicating that no valid value can be obtained.
     * @param integer $RetryAttempts Automatic Retry Attempts
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $DeletedFatherList Urgently Removed Dependency Parent Instance List
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $CirculateInstanceList Cyclic Dependency Associated Instances
Note: This field may return null, indicating that no valid value can be obtained.
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

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("InCharge",$param) and $param["InCharge"] !== null) {
            $this->InCharge = $param["InCharge"];
        }

        if (array_key_exists("CycleType",$param) and $param["CycleType"] !== null) {
            $this->CycleType = $param["CycleType"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("NextCurDate",$param) and $param["NextCurDate"] !== null) {
            $this->NextCurDate = $param["NextCurDate"];
        }

        if (array_key_exists("RunPriority",$param) and $param["RunPriority"] !== null) {
            $this->RunPriority = $param["RunPriority"];
        }

        if (array_key_exists("TryLimit",$param) and $param["TryLimit"] !== null) {
            $this->TryLimit = $param["TryLimit"];
        }

        if (array_key_exists("Tries",$param) and $param["Tries"] !== null) {
            $this->Tries = $param["Tries"];
        }

        if (array_key_exists("TotalRunNum",$param) and $param["TotalRunNum"] !== null) {
            $this->TotalRunNum = $param["TotalRunNum"];
        }

        if (array_key_exists("DoFlag",$param) and $param["DoFlag"] !== null) {
            $this->DoFlag = $param["DoFlag"];
        }

        if (array_key_exists("RedoFlag",$param) and $param["RedoFlag"] !== null) {
            $this->RedoFlag = $param["RedoFlag"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("RuntimeBroker",$param) and $param["RuntimeBroker"] !== null) {
            $this->RuntimeBroker = $param["RuntimeBroker"];
        }

        if (array_key_exists("ErrorDesc",$param) and $param["ErrorDesc"] !== null) {
            $this->ErrorDesc = $param["ErrorDesc"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = new TaskTypeOpsDto();
            $this->TaskType->deserialize($param["TaskType"]);
        }

        if (array_key_exists("DependenceFulfillTime",$param) and $param["DependenceFulfillTime"] !== null) {
            $this->DependenceFulfillTime = $param["DependenceFulfillTime"];
        }

        if (array_key_exists("FirstDependenceFulfillTime",$param) and $param["FirstDependenceFulfillTime"] !== null) {
            $this->FirstDependenceFulfillTime = $param["FirstDependenceFulfillTime"];
        }

        if (array_key_exists("FirstStartTime",$param) and $param["FirstStartTime"] !== null) {
            $this->FirstStartTime = $param["FirstStartTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }

        if (array_key_exists("CostMillisecond",$param) and $param["CostMillisecond"] !== null) {
            $this->CostMillisecond = $param["CostMillisecond"];
        }

        if (array_key_exists("MaxCostTime",$param) and $param["MaxCostTime"] !== null) {
            $this->MaxCostTime = $param["MaxCostTime"];
        }

        if (array_key_exists("MinCostTime",$param) and $param["MinCostTime"] !== null) {
            $this->MinCostTime = $param["MinCostTime"];
        }

        if (array_key_exists("AvgCostTime",$param) and $param["AvgCostTime"] !== null) {
            $this->AvgCostTime = $param["AvgCostTime"];
        }

        if (array_key_exists("LastLog",$param) and $param["LastLog"] !== null) {
            $this->LastLog = $param["LastLog"];
        }

        if (array_key_exists("SchedulerDateTime",$param) and $param["SchedulerDateTime"] !== null) {
            $this->SchedulerDateTime = $param["SchedulerDateTime"];
        }

        if (array_key_exists("LastSchedulerDateTime",$param) and $param["LastSchedulerDateTime"] !== null) {
            $this->LastSchedulerDateTime = $param["LastSchedulerDateTime"];
        }

        if (array_key_exists("LastUpdate",$param) and $param["LastUpdate"] !== null) {
            $this->LastUpdate = $param["LastUpdate"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DependencyRel",$param) and $param["DependencyRel"] !== null) {
            $this->DependencyRel = $param["DependencyRel"];
        }

        if (array_key_exists("ExecutionSpace",$param) and $param["ExecutionSpace"] !== null) {
            $this->ExecutionSpace = $param["ExecutionSpace"];
        }

        if (array_key_exists("IgnoreEvent",$param) and $param["IgnoreEvent"] !== null) {
            $this->IgnoreEvent = $param["IgnoreEvent"];
        }

        if (array_key_exists("VirtualFlag",$param) and $param["VirtualFlag"] !== null) {
            $this->VirtualFlag = $param["VirtualFlag"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("SonList",$param) and $param["SonList"] !== null) {
            $this->SonList = $param["SonList"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("ResourceGroup",$param) and $param["ResourceGroup"] !== null) {
            $this->ResourceGroup = $param["ResourceGroup"];
        }

        if (array_key_exists("ResourceInstanceId",$param) and $param["ResourceInstanceId"] !== null) {
            $this->ResourceInstanceId = $param["ResourceInstanceId"];
        }

        if (array_key_exists("YarnQueue",$param) and $param["YarnQueue"] !== null) {
            $this->YarnQueue = $param["YarnQueue"];
        }

        if (array_key_exists("SchedulerDesc",$param) and $param["SchedulerDesc"] !== null) {
            $this->SchedulerDesc = $param["SchedulerDesc"];
        }

        if (array_key_exists("FirstSubmitTime",$param) and $param["FirstSubmitTime"] !== null) {
            $this->FirstSubmitTime = $param["FirstSubmitTime"];
        }

        if (array_key_exists("FirstRunTime",$param) and $param["FirstRunTime"] !== null) {
            $this->FirstRunTime = $param["FirstRunTime"];
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

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("InstanceKey",$param) and $param["InstanceKey"] !== null) {
            $this->InstanceKey = $param["InstanceKey"];
        }

        if (array_key_exists("ExecutorGroupId",$param) and $param["ExecutorGroupId"] !== null) {
            $this->ExecutorGroupId = $param["ExecutorGroupId"];
        }

        if (array_key_exists("ExecutorGroupName",$param) and $param["ExecutorGroupName"] !== null) {
            $this->ExecutorGroupName = $param["ExecutorGroupName"];
        }

        if (array_key_exists("RelatedInstanceList",$param) and $param["RelatedInstanceList"] !== null) {
            $this->RelatedInstanceList = [];
            foreach ($param["RelatedInstanceList"] as $key => $value){
                $obj = new InstanceOpsDto();
                $obj->deserialize($value);
                array_push($this->RelatedInstanceList, $obj);
            }
        }

        if (array_key_exists("RelatedInstanceSize",$param) and $param["RelatedInstanceSize"] !== null) {
            $this->RelatedInstanceSize = $param["RelatedInstanceSize"];
        }

        if (array_key_exists("OwnerId",$param) and $param["OwnerId"] !== null) {
            $this->OwnerId = $param["OwnerId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("InstanceLifeCycleOpsDto",$param) and $param["InstanceLifeCycleOpsDto"] !== null) {
            $this->InstanceLifeCycleOpsDto = new InstanceLifeCycleOpsDto();
            $this->InstanceLifeCycleOpsDto->deserialize($param["InstanceLifeCycleOpsDto"]);
        }

        if (array_key_exists("RetryAttempts",$param) and $param["RetryAttempts"] !== null) {
            $this->RetryAttempts = $param["RetryAttempts"];
        }

        if (array_key_exists("DeletedFatherList",$param) and $param["DeletedFatherList"] !== null) {
            $this->DeletedFatherList = $param["DeletedFatherList"];
        }

        if (array_key_exists("CirculateInstanceList",$param) and $param["CirculateInstanceList"] !== null) {
            $this->CirculateInstanceList = [];
            foreach ($param["CirculateInstanceList"] as $key => $value){
                $obj = new InstanceOpsDto();
                $obj->deserialize($value);
                array_push($this->CirculateInstanceList, $obj);
            }
        }
    }
}
