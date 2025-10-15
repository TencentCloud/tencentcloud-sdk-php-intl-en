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
 * ListOpsWorkflows request structure.
 *
 * @method string getProjectId() Obtain Project ID.

 * @method void setProjectId(string $ProjectId) Set Project ID.

 * @method integer getPageNumber() Obtain Page number
 * @method void setPageNumber(integer $PageNumber) Set Page number
 * @method integer getPageSize() Obtain Pagination size.
 * @method void setPageSize(integer $PageSize) Set Pagination size.
 * @method string getFolderId() Obtain Folder ID
 * @method void setFolderId(string $FolderId) Set Folder ID
 * @method string getStatus() Obtain Workflow Status Filter

* ALL_RUNNING: All workflows are running (scheduled)

* ALL_FREEZED: All workflows are paused

* ALL_STOPPED: All workflows are offline

* PART_RUNNING: Some workflows are running (partially scheduled)

* ALL_NO_RUNNING: No workflows are running (unscheduled)

* ALL_INVALID: All workflows are invalid
 * @method void setStatus(string $Status) Set Workflow Status Filter

* ALL_RUNNING: All workflows are running (scheduled)

* ALL_FREEZED: All workflows are paused

* ALL_STOPPED: All workflows are offline

* PART_RUNNING: Some workflows are running (partially scheduled)

* ALL_NO_RUNNING: No workflows are running (unscheduled)

* ALL_INVALID: All workflows are invalid
 * @method string getOwnerUin() Obtain Owner ID
 * @method void setOwnerUin(string $OwnerUin) Set Owner ID
 * @method string getWorkflowType() Obtain Workflow type filter criteria. supported values: Cycle or Manual. default: Cycle.
 * @method void setWorkflowType(string $WorkflowType) Set Workflow type filter criteria. supported values: Cycle or Manual. default: Cycle.
 * @method string getKeyWord() Obtain Workflow keyword-based filtering supports fuzzy matching of workflow Id/name.
 * @method void setKeyWord(string $KeyWord) Set Workflow keyword-based filtering supports fuzzy matching of workflow Id/name.
 * @method string getSortItem() Obtain Sort item. Options: CreateTime, TaskCount.
 * @method void setSortItem(string $SortItem) Set Sort item. Options: CreateTime, TaskCount.
 * @method string getSortType() Obtain Sorting method, DESC or ASC, uppercase.
 * @method void setSortType(string $SortType) Set Sorting method, DESC or ASC, uppercase.
 * @method string getCreateUserUin() Obtain CreatorId. specifies the id of the creator.
 * @method void setCreateUserUin(string $CreateUserUin) Set CreatorId. specifies the id of the creator.
 * @method string getModifyTime() Obtain Update time. format: yyyy-MM-dd HH:MM:ss.
 * @method void setModifyTime(string $ModifyTime) Set Update time. format: yyyy-MM-dd HH:MM:ss.
 * @method string getCreateTime() Obtain Creation time. format: yyyy-MM-dd HH:MM:ss.
 * @method void setCreateTime(string $CreateTime) Set Creation time. format: yyyy-MM-dd HH:MM:ss.
 */
class ListOpsWorkflowsRequest extends AbstractModel
{
    /**
     * @var string Project ID.

     */
    public $ProjectId;

    /**
     * @var integer Page number
     */
    public $PageNumber;

    /**
     * @var integer Pagination size.
     */
    public $PageSize;

    /**
     * @var string Folder ID
     */
    public $FolderId;

    /**
     * @var string Workflow Status Filter

* ALL_RUNNING: All workflows are running (scheduled)

* ALL_FREEZED: All workflows are paused

* ALL_STOPPED: All workflows are offline

* PART_RUNNING: Some workflows are running (partially scheduled)

* ALL_NO_RUNNING: No workflows are running (unscheduled)

* ALL_INVALID: All workflows are invalid
     */
    public $Status;

    /**
     * @var string Owner ID
     */
    public $OwnerUin;

    /**
     * @var string Workflow type filter criteria. supported values: Cycle or Manual. default: Cycle.
     */
    public $WorkflowType;

    /**
     * @var string Workflow keyword-based filtering supports fuzzy matching of workflow Id/name.
     */
    public $KeyWord;

    /**
     * @var string Sort item. Options: CreateTime, TaskCount.
     */
    public $SortItem;

    /**
     * @var string Sorting method, DESC or ASC, uppercase.
     */
    public $SortType;

    /**
     * @var string CreatorId. specifies the id of the creator.
     */
    public $CreateUserUin;

    /**
     * @var string Update time. format: yyyy-MM-dd HH:MM:ss.
     */
    public $ModifyTime;

    /**
     * @var string Creation time. format: yyyy-MM-dd HH:MM:ss.
     */
    public $CreateTime;

    /**
     * @param string $ProjectId Project ID.

     * @param integer $PageNumber Page number
     * @param integer $PageSize Pagination size.
     * @param string $FolderId Folder ID
     * @param string $Status Workflow Status Filter

* ALL_RUNNING: All workflows are running (scheduled)

* ALL_FREEZED: All workflows are paused

* ALL_STOPPED: All workflows are offline

* PART_RUNNING: Some workflows are running (partially scheduled)

* ALL_NO_RUNNING: No workflows are running (unscheduled)

* ALL_INVALID: All workflows are invalid
     * @param string $OwnerUin Owner ID
     * @param string $WorkflowType Workflow type filter criteria. supported values: Cycle or Manual. default: Cycle.
     * @param string $KeyWord Workflow keyword-based filtering supports fuzzy matching of workflow Id/name.
     * @param string $SortItem Sort item. Options: CreateTime, TaskCount.
     * @param string $SortType Sorting method, DESC or ASC, uppercase.
     * @param string $CreateUserUin CreatorId. specifies the id of the creator.
     * @param string $ModifyTime Update time. format: yyyy-MM-dd HH:MM:ss.
     * @param string $CreateTime Creation time. format: yyyy-MM-dd HH:MM:ss.
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("WorkflowType",$param) and $param["WorkflowType"] !== null) {
            $this->WorkflowType = $param["WorkflowType"];
        }

        if (array_key_exists("KeyWord",$param) and $param["KeyWord"] !== null) {
            $this->KeyWord = $param["KeyWord"];
        }

        if (array_key_exists("SortItem",$param) and $param["SortItem"] !== null) {
            $this->SortItem = $param["SortItem"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("CreateUserUin",$param) and $param["CreateUserUin"] !== null) {
            $this->CreateUserUin = $param["CreateUserUin"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
