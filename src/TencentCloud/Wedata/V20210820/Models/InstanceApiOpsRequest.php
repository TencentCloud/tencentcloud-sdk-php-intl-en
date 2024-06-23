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
 * Instance Query Type
 *
 * @method InstanceOpsDto getInstance() Obtain Single Query Condition
 * @method void setInstance(InstanceOpsDto $Instance) Set Single Query Condition
 * @method string getSortCol() Obtain Sort fields, currently includes: Retry Count, Instance Data Time, Runtime Duration
 * @method void setSortCol(string $SortCol) Set Sort fields, currently includes: Retry Count, Instance Data Time, Runtime Duration
 * @method array getTaskIdList() Obtain Task ID list
 * @method void setTaskIdList(array $TaskIdList) Set Task ID list
 * @method array getTaskNameList() Obtain Fuzzy search by taskName
 * @method void setTaskNameList(array $TaskNameList) Set Fuzzy search by taskName
 * @method array getFolderList() Obtain Folder List
 * @method void setFolderList(array $FolderList) Set Folder List
 * @method string getSort() Obtain Ascending or Descending
 * @method void setSort(string $Sort) Set Ascending or Descending
 * @method array getStateList() Obtain Instance Status List
 * @method void setStateList(array $StateList) Set Instance Status List
 * @method array getTaskTypeList() Obtain Instance Type List
 * @method void setTaskTypeList(array $TaskTypeList) Set Instance Type List
 * @method array getCycleList() Obtain Cycle Type
 * @method void setCycleList(array $CycleList) Set Cycle Type
 * @method array getOwnerList() Obtain Person in Charge
 * @method void setOwnerList(array $OwnerList) Set Person in Charge
 * @method string getDateFrom() Obtain Data Timestamp
 * @method void setDateFrom(string $DateFrom) Set Data Timestamp
 * @method string getDateTo() Obtain Data Timestamp
 * @method void setDateTo(string $DateTo) Set Data Timestamp
 * @method string getCreateTimeFrom() Obtain Instance Storage Time
 * @method void setCreateTimeFrom(string $CreateTimeFrom) Set Instance Storage Time
 * @method string getCreateTimeTo() Obtain Instance Storage Time
 * @method void setCreateTimeTo(string $CreateTimeTo) Set Instance Storage Time
 * @method string getStartFrom() Obtain Start Execution Time
 * @method void setStartFrom(string $StartFrom) Set Start Execution Time
 * @method string getStartTo() Obtain Start Execution Time
 * @method void setStartTo(string $StartTo) Set Start Execution Time
 * @method array getWorkflowIdList() Obtain Belongs to Workflow
 * @method void setWorkflowIdList(array $WorkflowIdList) Set Belongs to Workflow
 * @method array getWorkflowNameList() Obtain Fuzzy search by workflowName
 * @method void setWorkflowNameList(array $WorkflowNameList) Set Fuzzy search by workflowName
 * @method string getKeyword() Obtain Keyword Fuzzy Search
 * @method void setKeyword(string $Keyword) Set Keyword Fuzzy Search
 * @method array getSearchColumns() Obtain searchColumns are the list of field names to search
 * @method void setSearchColumns(array $SearchColumns) Set searchColumns are the list of field names to search
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method integer getLimit() Obtain Limit
 * @method void setLimit(integer $Limit) Set Limit
 * @method array getTaskTypeMap() Obtain Task Type Mapping Relationship, storing Task Type ID and Task Type Description Information
 * @method void setTaskTypeMap(array $TaskTypeMap) Set Task Type Mapping Relationship, storing Task Type ID and Task Type Description Information
 * @method string getInstanceType() Obtain 0 Supplementary Entry Type 1 Periodic Instance 2 Non-periodic Instance
 * @method void setInstanceType(string $InstanceType) Set 0 Supplementary Entry Type 1 Periodic Instance 2 Non-periodic Instance
 * @method boolean getDagDeal() Obtain Whether it is DAG
 * @method void setDagDeal(boolean $DagDeal) Set Whether it is DAG
 * @method string getDagType() Obtain 1 Parent instance 2 Child instance
 * @method void setDagType(string $DagType) Set 1 Parent instance 2 Child instance
 * @method string getDagDependent() Obtain 1 Self-Dependency 2 Task Dependency 3 All Dependencies
 * @method void setDagDependent(string $DagDependent) Set 1 Self-Dependency 2 Task Dependency 3 All Dependencies
 * @method integer getDagDepth() Obtain DAG Depth Default to 1, value range 1-6
 * @method void setDagDepth(integer $DagDepth) Set DAG Depth Default to 1, value range 1-6
 * @method string getTenantId() Obtain Tenant ID
 * @method void setTenantId(string $TenantId) Set Tenant ID
 * @method string getDataTimeCycle() Obtain Inquiry based on Current Data Time or Next Data Time, default to Current Data Time
 * @method void setDataTimeCycle(string $DataTimeCycle) Set Inquiry based on Current Data Time or Next Data Time, default to Current Data Time
 * @method array getExecutorGroupIdList() Obtain Resource Group ID, multiple Resource Group IDs separated by English commas
 * @method void setExecutorGroupIdList(array $ExecutorGroupIdList) Set Resource Group ID, multiple Resource Group IDs separated by English commas
 */
class InstanceApiOpsRequest extends AbstractModel
{
    /**
     * @var InstanceOpsDto Single Query Condition
     */
    public $Instance;

    /**
     * @var string Sort fields, currently includes: Retry Count, Instance Data Time, Runtime Duration
     */
    public $SortCol;

    /**
     * @var array Task ID list
     */
    public $TaskIdList;

    /**
     * @var array Fuzzy search by taskName
     */
    public $TaskNameList;

    /**
     * @var array Folder List
     */
    public $FolderList;

    /**
     * @var string Ascending or Descending
     */
    public $Sort;

    /**
     * @var array Instance Status List
     */
    public $StateList;

    /**
     * @var array Instance Type List
     */
    public $TaskTypeList;

    /**
     * @var array Cycle Type
     */
    public $CycleList;

    /**
     * @var array Person in Charge
     */
    public $OwnerList;

    /**
     * @var string Data Timestamp
     */
    public $DateFrom;

    /**
     * @var string Data Timestamp
     */
    public $DateTo;

    /**
     * @var string Instance Storage Time
     */
    public $CreateTimeFrom;

    /**
     * @var string Instance Storage Time
     */
    public $CreateTimeTo;

    /**
     * @var string Start Execution Time
     */
    public $StartFrom;

    /**
     * @var string Start Execution Time
     */
    public $StartTo;

    /**
     * @var array Belongs to Workflow
     */
    public $WorkflowIdList;

    /**
     * @var array Fuzzy search by workflowName
     */
    public $WorkflowNameList;

    /**
     * @var string Keyword Fuzzy Search
     */
    public $Keyword;

    /**
     * @var array searchColumns are the list of field names to search
     */
    public $SearchColumns;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var integer Limit
     */
    public $Limit;

    /**
     * @var array Task Type Mapping Relationship, storing Task Type ID and Task Type Description Information
     */
    public $TaskTypeMap;

    /**
     * @var string 0 Supplementary Entry Type 1 Periodic Instance 2 Non-periodic Instance
     */
    public $InstanceType;

    /**
     * @var boolean Whether it is DAG
     */
    public $DagDeal;

    /**
     * @var string 1 Parent instance 2 Child instance
     */
    public $DagType;

    /**
     * @var string 1 Self-Dependency 2 Task Dependency 3 All Dependencies
     */
    public $DagDependent;

    /**
     * @var integer DAG Depth Default to 1, value range 1-6
     */
    public $DagDepth;

    /**
     * @var string Tenant ID
     */
    public $TenantId;

    /**
     * @var string Inquiry based on Current Data Time or Next Data Time, default to Current Data Time
     */
    public $DataTimeCycle;

    /**
     * @var array Resource Group ID, multiple Resource Group IDs separated by English commas
     */
    public $ExecutorGroupIdList;

    /**
     * @param InstanceOpsDto $Instance Single Query Condition
     * @param string $SortCol Sort fields, currently includes: Retry Count, Instance Data Time, Runtime Duration
     * @param array $TaskIdList Task ID list
     * @param array $TaskNameList Fuzzy search by taskName
     * @param array $FolderList Folder List
     * @param string $Sort Ascending or Descending
     * @param array $StateList Instance Status List
     * @param array $TaskTypeList Instance Type List
     * @param array $CycleList Cycle Type
     * @param array $OwnerList Person in Charge
     * @param string $DateFrom Data Timestamp
     * @param string $DateTo Data Timestamp
     * @param string $CreateTimeFrom Instance Storage Time
     * @param string $CreateTimeTo Instance Storage Time
     * @param string $StartFrom Start Execution Time
     * @param string $StartTo Start Execution Time
     * @param array $WorkflowIdList Belongs to Workflow
     * @param array $WorkflowNameList Fuzzy search by workflowName
     * @param string $Keyword Keyword Fuzzy Search
     * @param array $SearchColumns searchColumns are the list of field names to search
     * @param string $ProjectId Project ID
     * @param integer $Limit Limit
     * @param array $TaskTypeMap Task Type Mapping Relationship, storing Task Type ID and Task Type Description Information
     * @param string $InstanceType 0 Supplementary Entry Type 1 Periodic Instance 2 Non-periodic Instance
     * @param boolean $DagDeal Whether it is DAG
     * @param string $DagType 1 Parent instance 2 Child instance
     * @param string $DagDependent 1 Self-Dependency 2 Task Dependency 3 All Dependencies
     * @param integer $DagDepth DAG Depth Default to 1, value range 1-6
     * @param string $TenantId Tenant ID
     * @param string $DataTimeCycle Inquiry based on Current Data Time or Next Data Time, default to Current Data Time
     * @param array $ExecutorGroupIdList Resource Group ID, multiple Resource Group IDs separated by English commas
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
        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = new InstanceOpsDto();
            $this->Instance->deserialize($param["Instance"]);
        }

        if (array_key_exists("SortCol",$param) and $param["SortCol"] !== null) {
            $this->SortCol = $param["SortCol"];
        }

        if (array_key_exists("TaskIdList",$param) and $param["TaskIdList"] !== null) {
            $this->TaskIdList = $param["TaskIdList"];
        }

        if (array_key_exists("TaskNameList",$param) and $param["TaskNameList"] !== null) {
            $this->TaskNameList = $param["TaskNameList"];
        }

        if (array_key_exists("FolderList",$param) and $param["FolderList"] !== null) {
            $this->FolderList = $param["FolderList"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("StateList",$param) and $param["StateList"] !== null) {
            $this->StateList = $param["StateList"];
        }

        if (array_key_exists("TaskTypeList",$param) and $param["TaskTypeList"] !== null) {
            $this->TaskTypeList = $param["TaskTypeList"];
        }

        if (array_key_exists("CycleList",$param) and $param["CycleList"] !== null) {
            $this->CycleList = $param["CycleList"];
        }

        if (array_key_exists("OwnerList",$param) and $param["OwnerList"] !== null) {
            $this->OwnerList = $param["OwnerList"];
        }

        if (array_key_exists("DateFrom",$param) and $param["DateFrom"] !== null) {
            $this->DateFrom = $param["DateFrom"];
        }

        if (array_key_exists("DateTo",$param) and $param["DateTo"] !== null) {
            $this->DateTo = $param["DateTo"];
        }

        if (array_key_exists("CreateTimeFrom",$param) and $param["CreateTimeFrom"] !== null) {
            $this->CreateTimeFrom = $param["CreateTimeFrom"];
        }

        if (array_key_exists("CreateTimeTo",$param) and $param["CreateTimeTo"] !== null) {
            $this->CreateTimeTo = $param["CreateTimeTo"];
        }

        if (array_key_exists("StartFrom",$param) and $param["StartFrom"] !== null) {
            $this->StartFrom = $param["StartFrom"];
        }

        if (array_key_exists("StartTo",$param) and $param["StartTo"] !== null) {
            $this->StartTo = $param["StartTo"];
        }

        if (array_key_exists("WorkflowIdList",$param) and $param["WorkflowIdList"] !== null) {
            $this->WorkflowIdList = $param["WorkflowIdList"];
        }

        if (array_key_exists("WorkflowNameList",$param) and $param["WorkflowNameList"] !== null) {
            $this->WorkflowNameList = $param["WorkflowNameList"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("SearchColumns",$param) and $param["SearchColumns"] !== null) {
            $this->SearchColumns = $param["SearchColumns"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("TaskTypeMap",$param) and $param["TaskTypeMap"] !== null) {
            $this->TaskTypeMap = [];
            foreach ($param["TaskTypeMap"] as $key => $value){
                $obj = new TaskTypeMap();
                $obj->deserialize($value);
                array_push($this->TaskTypeMap, $obj);
            }
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("DagDeal",$param) and $param["DagDeal"] !== null) {
            $this->DagDeal = $param["DagDeal"];
        }

        if (array_key_exists("DagType",$param) and $param["DagType"] !== null) {
            $this->DagType = $param["DagType"];
        }

        if (array_key_exists("DagDependent",$param) and $param["DagDependent"] !== null) {
            $this->DagDependent = $param["DagDependent"];
        }

        if (array_key_exists("DagDepth",$param) and $param["DagDepth"] !== null) {
            $this->DagDepth = $param["DagDepth"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("DataTimeCycle",$param) and $param["DataTimeCycle"] !== null) {
            $this->DataTimeCycle = $param["DataTimeCycle"];
        }

        if (array_key_exists("ExecutorGroupIdList",$param) and $param["ExecutorGroupIdList"] !== null) {
            $this->ExecutorGroupIdList = $param["ExecutorGroupIdList"];
        }
    }
}
