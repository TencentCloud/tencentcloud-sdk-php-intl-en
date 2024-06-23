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
 * DescribeOperateOpsTasks request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getFolderIdList() Obtain Folder ID, multiple folders separated by commas
 * @method void setFolderIdList(string $FolderIdList) Set Folder ID, multiple folders separated by commas
 * @method string getWorkFlowIdList() Obtain Workflow ID, multiple Workflow IDs separated by English commas
 * @method void setWorkFlowIdList(string $WorkFlowIdList) Set Workflow ID, multiple Workflow IDs separated by English commas
 * @method string getWorkFlowNameList() Obtain Workflow name, multiple Workflow names separated by English commas
 * @method void setWorkFlowNameList(string $WorkFlowNameList) Set Workflow name, multiple Workflow names separated by English commas
 * @method string getTaskNameList() Obtain Task Name, multiple Task Names separated by English commas
 * @method void setTaskNameList(string $TaskNameList) Set Task Name, multiple Task Names separated by English commas
 * @method string getTaskIdList() Obtain Task ID, multiple Task IDs separated by English commas
 * @method void setTaskIdList(string $TaskIdList) Set Task ID, multiple Task IDs separated by English commas
 * @method string getPageNumber() Obtain Page Number
 * @method void setPageNumber(string $PageNumber) Set Page Number
 * @method string getPageSize() Obtain Page size
 * @method void setPageSize(string $PageSize) Set Page size
 * @method string getSortItem() Obtain Sort Fields, supported fields are FirstSubmitTime and FirstRunTime, indicating the most recent submission and the first execution event
 * @method void setSortItem(string $SortItem) Set Sort Fields, supported fields are FirstSubmitTime and FirstRunTime, indicating the most recent submission and the first execution event
 * @method string getSortType() Obtain Sort Type. Two values DESC,ASC
 * @method void setSortType(string $SortType) Set Sort Type. Two values DESC,ASC
 * @method string getInChargeList() Obtain Person in Charge, multiple Persons in Charge separated by English commas
 * @method void setInChargeList(string $InChargeList) Set Person in Charge, multiple Persons in Charge separated by English commas
 * @method string getTaskTypeIdList() Obtain Task Type ID String, multiple Task Type IDs separated by English commas
 * @method void setTaskTypeIdList(string $TaskTypeIdList) Set Task Type ID String, multiple Task Type IDs separated by English commas
 * @method string getStatusList() Obtain Task Status String, multiple Task Statuses separated by English commas
 * @method void setStatusList(string $StatusList) Set Task Status String, multiple Task Statuses separated by English commas
 * @method string getTaskCycleUnitList() Obtain Task Cycle Type String, multiple Task Cycles separated by English commas
 * @method void setTaskCycleUnitList(string $TaskCycleUnitList) Set Task Cycle Type String, multiple Task Cycles separated by English commas
 * @method string getProductNameList() Obtain Task Belonging Product Type
 * @method void setProductNameList(string $ProductNameList) Set Task Belonging Product Type
 * @method string getSourceServiceId() Obtain Data Source ID or (only for offline sync tasks) Source Data Source ID
 * @method void setSourceServiceId(string $SourceServiceId) Set Data Source ID or (only for offline sync tasks) Source Data Source ID
 * @method string getSourceServiceType() Obtain Data Source Type or (only for offline sync tasks) Source Data Source Type
 * @method void setSourceServiceType(string $SourceServiceType) Set Data Source Type or (only for offline sync tasks) Source Data Source Type
 * @method string getTargetServiceId() Obtain (Only for offline sync tasks) Target Data Source ID
 * @method void setTargetServiceId(string $TargetServiceId) Set (Only for offline sync tasks) Target Data Source ID
 * @method string getTargetServiceType() Obtain (Only for offline sync tasks) Target Data Source Type
 * @method void setTargetServiceType(string $TargetServiceType) Set (Only for offline sync tasks) Target Data Source Type
 * @method string getAlarmType() Obtain Alarm Type, multiple types separated by commas
 * @method void setAlarmType(string $AlarmType) Set Alarm Type, multiple types separated by commas
 * @method string getExecutorGroupIdList() Obtain Resource Group ID, multiple Resource Group IDs separated by English commas
 * @method void setExecutorGroupIdList(string $ExecutorGroupIdList) Set Resource Group ID, multiple Resource Group IDs separated by English commas
 * @method array getTaskTags() Obtain Task tag
 * @method void setTaskTags(array $TaskTags) Set Task tag
 * @method string getKeyWord() Obtain Query Keyword
 * @method void setKeyWord(string $KeyWord) Set Query Keyword
 * @method string getInitStrategy() Obtain Instance Generation Method
 * @method void setInitStrategy(string $InitStrategy) Set Instance Generation Method
 * @method array getRequestResourceTypes() Obtain Additional Requested Resource Types
 * @method void setRequestResourceTypes(array $RequestResourceTypes) Set Additional Requested Resource Types
 */
class DescribeOperateOpsTasksRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Folder ID, multiple folders separated by commas
     */
    public $FolderIdList;

    /**
     * @var string Workflow ID, multiple Workflow IDs separated by English commas
     */
    public $WorkFlowIdList;

    /**
     * @var string Workflow name, multiple Workflow names separated by English commas
     */
    public $WorkFlowNameList;

    /**
     * @var string Task Name, multiple Task Names separated by English commas
     */
    public $TaskNameList;

    /**
     * @var string Task ID, multiple Task IDs separated by English commas
     */
    public $TaskIdList;

    /**
     * @var string Page Number
     */
    public $PageNumber;

    /**
     * @var string Page size
     */
    public $PageSize;

    /**
     * @var string Sort Fields, supported fields are FirstSubmitTime and FirstRunTime, indicating the most recent submission and the first execution event
     */
    public $SortItem;

    /**
     * @var string Sort Type. Two values DESC,ASC
     */
    public $SortType;

    /**
     * @var string Person in Charge, multiple Persons in Charge separated by English commas
     */
    public $InChargeList;

    /**
     * @var string Task Type ID String, multiple Task Type IDs separated by English commas
     */
    public $TaskTypeIdList;

    /**
     * @var string Task Status String, multiple Task Statuses separated by English commas
     */
    public $StatusList;

    /**
     * @var string Task Cycle Type String, multiple Task Cycles separated by English commas
     */
    public $TaskCycleUnitList;

    /**
     * @var string Task Belonging Product Type
     */
    public $ProductNameList;

    /**
     * @var string Data Source ID or (only for offline sync tasks) Source Data Source ID
     */
    public $SourceServiceId;

    /**
     * @var string Data Source Type or (only for offline sync tasks) Source Data Source Type
     */
    public $SourceServiceType;

    /**
     * @var string (Only for offline sync tasks) Target Data Source ID
     */
    public $TargetServiceId;

    /**
     * @var string (Only for offline sync tasks) Target Data Source Type
     */
    public $TargetServiceType;

    /**
     * @var string Alarm Type, multiple types separated by commas
     */
    public $AlarmType;

    /**
     * @var string Resource Group ID, multiple Resource Group IDs separated by English commas
     */
    public $ExecutorGroupIdList;

    /**
     * @var array Task tag
     */
    public $TaskTags;

    /**
     * @var string Query Keyword
     */
    public $KeyWord;

    /**
     * @var string Instance Generation Method
     */
    public $InitStrategy;

    /**
     * @var array Additional Requested Resource Types
     */
    public $RequestResourceTypes;

    /**
     * @param string $ProjectId Project ID
     * @param string $FolderIdList Folder ID, multiple folders separated by commas
     * @param string $WorkFlowIdList Workflow ID, multiple Workflow IDs separated by English commas
     * @param string $WorkFlowNameList Workflow name, multiple Workflow names separated by English commas
     * @param string $TaskNameList Task Name, multiple Task Names separated by English commas
     * @param string $TaskIdList Task ID, multiple Task IDs separated by English commas
     * @param string $PageNumber Page Number
     * @param string $PageSize Page size
     * @param string $SortItem Sort Fields, supported fields are FirstSubmitTime and FirstRunTime, indicating the most recent submission and the first execution event
     * @param string $SortType Sort Type. Two values DESC,ASC
     * @param string $InChargeList Person in Charge, multiple Persons in Charge separated by English commas
     * @param string $TaskTypeIdList Task Type ID String, multiple Task Type IDs separated by English commas
     * @param string $StatusList Task Status String, multiple Task Statuses separated by English commas
     * @param string $TaskCycleUnitList Task Cycle Type String, multiple Task Cycles separated by English commas
     * @param string $ProductNameList Task Belonging Product Type
     * @param string $SourceServiceId Data Source ID or (only for offline sync tasks) Source Data Source ID
     * @param string $SourceServiceType Data Source Type or (only for offline sync tasks) Source Data Source Type
     * @param string $TargetServiceId (Only for offline sync tasks) Target Data Source ID
     * @param string $TargetServiceType (Only for offline sync tasks) Target Data Source Type
     * @param string $AlarmType Alarm Type, multiple types separated by commas
     * @param string $ExecutorGroupIdList Resource Group ID, multiple Resource Group IDs separated by English commas
     * @param array $TaskTags Task tag
     * @param string $KeyWord Query Keyword
     * @param string $InitStrategy Instance Generation Method
     * @param array $RequestResourceTypes Additional Requested Resource Types
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("FolderIdList",$param) and $param["FolderIdList"] !== null) {
            $this->FolderIdList = $param["FolderIdList"];
        }

        if (array_key_exists("WorkFlowIdList",$param) and $param["WorkFlowIdList"] !== null) {
            $this->WorkFlowIdList = $param["WorkFlowIdList"];
        }

        if (array_key_exists("WorkFlowNameList",$param) and $param["WorkFlowNameList"] !== null) {
            $this->WorkFlowNameList = $param["WorkFlowNameList"];
        }

        if (array_key_exists("TaskNameList",$param) and $param["TaskNameList"] !== null) {
            $this->TaskNameList = $param["TaskNameList"];
        }

        if (array_key_exists("TaskIdList",$param) and $param["TaskIdList"] !== null) {
            $this->TaskIdList = $param["TaskIdList"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("SortItem",$param) and $param["SortItem"] !== null) {
            $this->SortItem = $param["SortItem"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("InChargeList",$param) and $param["InChargeList"] !== null) {
            $this->InChargeList = $param["InChargeList"];
        }

        if (array_key_exists("TaskTypeIdList",$param) and $param["TaskTypeIdList"] !== null) {
            $this->TaskTypeIdList = $param["TaskTypeIdList"];
        }

        if (array_key_exists("StatusList",$param) and $param["StatusList"] !== null) {
            $this->StatusList = $param["StatusList"];
        }

        if (array_key_exists("TaskCycleUnitList",$param) and $param["TaskCycleUnitList"] !== null) {
            $this->TaskCycleUnitList = $param["TaskCycleUnitList"];
        }

        if (array_key_exists("ProductNameList",$param) and $param["ProductNameList"] !== null) {
            $this->ProductNameList = $param["ProductNameList"];
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

        if (array_key_exists("AlarmType",$param) and $param["AlarmType"] !== null) {
            $this->AlarmType = $param["AlarmType"];
        }

        if (array_key_exists("ExecutorGroupIdList",$param) and $param["ExecutorGroupIdList"] !== null) {
            $this->ExecutorGroupIdList = $param["ExecutorGroupIdList"];
        }

        if (array_key_exists("TaskTags",$param) and $param["TaskTags"] !== null) {
            $this->TaskTags = [];
            foreach ($param["TaskTags"] as $key => $value){
                $obj = new TaskTag();
                $obj->deserialize($value);
                array_push($this->TaskTags, $obj);
            }
        }

        if (array_key_exists("KeyWord",$param) and $param["KeyWord"] !== null) {
            $this->KeyWord = $param["KeyWord"];
        }

        if (array_key_exists("InitStrategy",$param) and $param["InitStrategy"] !== null) {
            $this->InitStrategy = $param["InitStrategy"];
        }

        if (array_key_exists("RequestResourceTypes",$param) and $param["RequestResourceTypes"] !== null) {
            $this->RequestResourceTypes = $param["RequestResourceTypes"];
        }
    }
}
