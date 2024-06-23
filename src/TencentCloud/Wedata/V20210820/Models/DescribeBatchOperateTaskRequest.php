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
 * DescribeBatchOperateTask request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getPage() Obtain Page Number
 * @method void setPage(string $Page) Set Page Number
 * @method string getSize() Obtain Page Number
 * @method void setSize(string $Size) Set Page Number
 * @method array getStatusList() Obtain Status ListDraft: 'NS','N','P','R'
Running: 'Y'
Stopped: 'F'
Frozen: 'O'
Stopping: 'T'
 * @method void setStatusList(array $StatusList) Set Status ListDraft: 'NS','N','P','R'
Running: 'Y'
Stopped: 'F'
Frozen: 'O'
Stopping: 'T'
 * @method array getOwnerNameList() Obtain List of Responsible Persons
 * @method void setOwnerNameList(array $OwnerNameList) Set List of Responsible Persons
 * @method array getWorkflowIdList() Obtain Workflow List
 * @method void setWorkflowIdList(array $WorkflowIdList) Set Workflow List
 * @method string getTaskNameFilter() Obtain Task Name Search
 * @method void setTaskNameFilter(string $TaskNameFilter) Set Task Name Search
 * @method array getTaskTypeList() Obtain Task Type List
 * @method void setTaskTypeList(array $TaskTypeList) Set Task Type List
 * @method array getFordIdList() Obtain Folder List
 * @method void setFordIdList(array $FordIdList) Set Folder List
 * @method string getTaskIdFilter() Obtain Task ID Search
 * @method void setTaskIdFilter(string $TaskIdFilter) Set Task ID Search
 * @method string getOwnerNameFilter() Obtain Responsible Person Search
 * @method void setOwnerNameFilter(string $OwnerNameFilter) Set Responsible Person Search
 * @method string getSortItem() Obtain Sort Fields:
UpdateTime
CreateTime
 * @method void setSortItem(string $SortItem) Set Sort Fields:
UpdateTime
CreateTime
 * @method string getSortType() Obtain asc: Ascending
desc: Descending
 * @method void setSortType(string $SortType) Set asc: Ascending
desc: Descending
 * @method array getDataEngineList() Obtain Engine Type List: Three Types
SparkJob
SparkSql
presto
 * @method void setDataEngineList(array $DataEngineList) Set Engine Type List: Three Types
SparkJob
SparkSql
presto
 * @method string getUserId() Obtain Operator Name
 * @method void setUserId(string $UserId) Set Operator Name
 * @method string getOwnerId() Obtain 1
 * @method void setOwnerId(string $OwnerId) Set 1
 * @method string getTenantId() Obtain 1
 * @method void setTenantId(string $TenantId) Set 1
 * @method array getDatasourceIdList() Obtain Data Source ID List
 * @method void setDatasourceIdList(array $DatasourceIdList) Set Data Source ID List
 * @method array getDatasourceTypeList() Obtain Data Source Type List
 * @method void setDatasourceTypeList(array $DatasourceTypeList) Set Data Source Type List
 * @method array getCycleUnitList() Obtain Scheduling Unit Type List
 * @method void setCycleUnitList(array $CycleUnitList) Set Scheduling Unit Type List
 * @method boolean getCanSubmit() Obtain Filter out tasks that can be submitted?
 * @method void setCanSubmit(boolean $CanSubmit) Set Filter out tasks that can be submitted?
 */
class DescribeBatchOperateTaskRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Page Number
     */
    public $Page;

    /**
     * @var string Page Number
     */
    public $Size;

    /**
     * @var array Status ListDraft: 'NS','N','P','R'
Running: 'Y'
Stopped: 'F'
Frozen: 'O'
Stopping: 'T'
     */
    public $StatusList;

    /**
     * @var array List of Responsible Persons
     */
    public $OwnerNameList;

    /**
     * @var array Workflow List
     */
    public $WorkflowIdList;

    /**
     * @var string Task Name Search
     */
    public $TaskNameFilter;

    /**
     * @var array Task Type List
     */
    public $TaskTypeList;

    /**
     * @var array Folder List
     */
    public $FordIdList;

    /**
     * @var string Task ID Search
     */
    public $TaskIdFilter;

    /**
     * @var string Responsible Person Search
     */
    public $OwnerNameFilter;

    /**
     * @var string Sort Fields:
UpdateTime
CreateTime
     */
    public $SortItem;

    /**
     * @var string asc: Ascending
desc: Descending
     */
    public $SortType;

    /**
     * @var array Engine Type List: Three Types
SparkJob
SparkSql
presto
     */
    public $DataEngineList;

    /**
     * @var string Operator Name
     */
    public $UserId;

    /**
     * @var string 1
     */
    public $OwnerId;

    /**
     * @var string 1
     */
    public $TenantId;

    /**
     * @var array Data Source ID List
     */
    public $DatasourceIdList;

    /**
     * @var array Data Source Type List
     */
    public $DatasourceTypeList;

    /**
     * @var array Scheduling Unit Type List
     */
    public $CycleUnitList;

    /**
     * @var boolean Filter out tasks that can be submitted?
     */
    public $CanSubmit;

    /**
     * @param string $ProjectId Project ID
     * @param string $Page Page Number
     * @param string $Size Page Number
     * @param array $StatusList Status ListDraft: 'NS','N','P','R'
Running: 'Y'
Stopped: 'F'
Frozen: 'O'
Stopping: 'T'
     * @param array $OwnerNameList List of Responsible Persons
     * @param array $WorkflowIdList Workflow List
     * @param string $TaskNameFilter Task Name Search
     * @param array $TaskTypeList Task Type List
     * @param array $FordIdList Folder List
     * @param string $TaskIdFilter Task ID Search
     * @param string $OwnerNameFilter Responsible Person Search
     * @param string $SortItem Sort Fields:
UpdateTime
CreateTime
     * @param string $SortType asc: Ascending
desc: Descending
     * @param array $DataEngineList Engine Type List: Three Types
SparkJob
SparkSql
presto
     * @param string $UserId Operator Name
     * @param string $OwnerId 1
     * @param string $TenantId 1
     * @param array $DatasourceIdList Data Source ID List
     * @param array $DatasourceTypeList Data Source Type List
     * @param array $CycleUnitList Scheduling Unit Type List
     * @param boolean $CanSubmit Filter out tasks that can be submitted?
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

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("StatusList",$param) and $param["StatusList"] !== null) {
            $this->StatusList = $param["StatusList"];
        }

        if (array_key_exists("OwnerNameList",$param) and $param["OwnerNameList"] !== null) {
            $this->OwnerNameList = $param["OwnerNameList"];
        }

        if (array_key_exists("WorkflowIdList",$param) and $param["WorkflowIdList"] !== null) {
            $this->WorkflowIdList = $param["WorkflowIdList"];
        }

        if (array_key_exists("TaskNameFilter",$param) and $param["TaskNameFilter"] !== null) {
            $this->TaskNameFilter = $param["TaskNameFilter"];
        }

        if (array_key_exists("TaskTypeList",$param) and $param["TaskTypeList"] !== null) {
            $this->TaskTypeList = $param["TaskTypeList"];
        }

        if (array_key_exists("FordIdList",$param) and $param["FordIdList"] !== null) {
            $this->FordIdList = $param["FordIdList"];
        }

        if (array_key_exists("TaskIdFilter",$param) and $param["TaskIdFilter"] !== null) {
            $this->TaskIdFilter = $param["TaskIdFilter"];
        }

        if (array_key_exists("OwnerNameFilter",$param) and $param["OwnerNameFilter"] !== null) {
            $this->OwnerNameFilter = $param["OwnerNameFilter"];
        }

        if (array_key_exists("SortItem",$param) and $param["SortItem"] !== null) {
            $this->SortItem = $param["SortItem"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("DataEngineList",$param) and $param["DataEngineList"] !== null) {
            $this->DataEngineList = $param["DataEngineList"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("OwnerId",$param) and $param["OwnerId"] !== null) {
            $this->OwnerId = $param["OwnerId"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("DatasourceIdList",$param) and $param["DatasourceIdList"] !== null) {
            $this->DatasourceIdList = $param["DatasourceIdList"];
        }

        if (array_key_exists("DatasourceTypeList",$param) and $param["DatasourceTypeList"] !== null) {
            $this->DatasourceTypeList = $param["DatasourceTypeList"];
        }

        if (array_key_exists("CycleUnitList",$param) and $param["CycleUnitList"] !== null) {
            $this->CycleUnitList = $param["CycleUnitList"];
        }

        if (array_key_exists("CanSubmit",$param) and $param["CanSubmit"] !== null) {
            $this->CanSubmit = $param["CanSubmit"];
        }
    }
}
