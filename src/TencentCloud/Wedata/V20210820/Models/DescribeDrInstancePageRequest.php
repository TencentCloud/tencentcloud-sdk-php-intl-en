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
 * DescribeDrInstancePage request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getTaskSource() Obtain Task Source ADHOC || WORKFLOW
 * @method void setTaskSource(string $TaskSource) Set Task Source ADHOC || WORKFLOW
 * @method integer getPageIndex() Obtain Index Page Number
 * @method void setPageIndex(integer $PageIndex) Set Index Page Number
 * @method integer getPageSize() Obtain Page size
 * @method void setPageSize(integer $PageSize) Set Page size
 * @method string getTaskName() Obtain Task Name
 * @method void setTaskName(string $TaskName) Set Task Name
 * @method string getStartTime() Obtain Submission Start Time yyyy-MM-dd HH:mm:ss
 * @method void setStartTime(string $StartTime) Set Submission Start Time yyyy-MM-dd HH:mm:ss
 * @method string getEndTime() Obtain Submission End Time yyyy-MM-dd HH:mm:ss
 * @method void setEndTime(string $EndTime) Set Submission End Time yyyy-MM-dd HH:mm:ss
 * @method array getFolderIds() Obtain Folder ID
 * @method void setFolderIds(array $FolderIds) Set Folder ID
 * @method array getWorkflowIds() Obtain Workflow ID
 * @method void setWorkflowIds(array $WorkflowIds) Set Workflow ID
 * @method boolean getJustMe() Obtain View Only Mine
 * @method void setJustMe(boolean $JustMe) Set View Only Mine
 * @method array getTaskTypes() Obtain Task Type
 * @method void setTaskTypes(array $TaskTypes) Set Task Type
 * @method array getSubmitUsers() Obtain Trial Run Submitter userId List
 * @method void setSubmitUsers(array $SubmitUsers) Set Trial Run Submitter userId List
 * @method array getStatusList() Obtain Trial Run Status
 * @method void setStatusList(array $StatusList) Set Trial Run Status
 */
class DescribeDrInstancePageRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Task Source ADHOC || WORKFLOW
     */
    public $TaskSource;

    /**
     * @var integer Index Page Number
     */
    public $PageIndex;

    /**
     * @var integer Page size
     */
    public $PageSize;

    /**
     * @var string Task Name
     */
    public $TaskName;

    /**
     * @var string Submission Start Time yyyy-MM-dd HH:mm:ss
     */
    public $StartTime;

    /**
     * @var string Submission End Time yyyy-MM-dd HH:mm:ss
     */
    public $EndTime;

    /**
     * @var array Folder ID
     */
    public $FolderIds;

    /**
     * @var array Workflow ID
     */
    public $WorkflowIds;

    /**
     * @var boolean View Only Mine
     */
    public $JustMe;

    /**
     * @var array Task Type
     */
    public $TaskTypes;

    /**
     * @var array Trial Run Submitter userId List
     */
    public $SubmitUsers;

    /**
     * @var array Trial Run Status
     */
    public $StatusList;

    /**
     * @param string $ProjectId Project ID
     * @param string $TaskSource Task Source ADHOC || WORKFLOW
     * @param integer $PageIndex Index Page Number
     * @param integer $PageSize Page size
     * @param string $TaskName Task Name
     * @param string $StartTime Submission Start Time yyyy-MM-dd HH:mm:ss
     * @param string $EndTime Submission End Time yyyy-MM-dd HH:mm:ss
     * @param array $FolderIds Folder ID
     * @param array $WorkflowIds Workflow ID
     * @param boolean $JustMe View Only Mine
     * @param array $TaskTypes Task Type
     * @param array $SubmitUsers Trial Run Submitter userId List
     * @param array $StatusList Trial Run Status
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

        if (array_key_exists("TaskSource",$param) and $param["TaskSource"] !== null) {
            $this->TaskSource = $param["TaskSource"];
        }

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("FolderIds",$param) and $param["FolderIds"] !== null) {
            $this->FolderIds = $param["FolderIds"];
        }

        if (array_key_exists("WorkflowIds",$param) and $param["WorkflowIds"] !== null) {
            $this->WorkflowIds = $param["WorkflowIds"];
        }

        if (array_key_exists("JustMe",$param) and $param["JustMe"] !== null) {
            $this->JustMe = $param["JustMe"];
        }

        if (array_key_exists("TaskTypes",$param) and $param["TaskTypes"] !== null) {
            $this->TaskTypes = $param["TaskTypes"];
        }

        if (array_key_exists("SubmitUsers",$param) and $param["SubmitUsers"] !== null) {
            $this->SubmitUsers = $param["SubmitUsers"];
        }

        if (array_key_exists("StatusList",$param) and $param["StatusList"] !== null) {
            $this->StatusList = $param["StatusList"];
        }
    }
}
