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
 * DescribeAllByFolderNew request structure.
 *
 * @method FolderOpsDto getFolder() Obtain Folder Attributes
 * @method void setFolder(FolderOpsDto $Folder) Set Folder Attributes
 * @method array getWorkflows() Obtain Workflow List
 * @method void setWorkflows(array $Workflows) Set Workflow List
 * @method string getTargetFolderId() Obtain Target File ID
 * @method void setTargetFolderId(string $TargetFolderId) Set Target File ID
 * @method string getKeyWords() Obtain Keyword
 * @method void setKeyWords(string $KeyWords) Set Keyword
 * @method string getParentsFolderId() Obtain Parent File ID
 * @method void setParentsFolderId(string $ParentsFolderId) Set Parent File ID
 * @method string getIsAddWorkflow() Obtain Pull Folder List
 * @method void setIsAddWorkflow(string $IsAddWorkflow) Set Pull Folder List
 * @method array getTaskStates() Obtain Task Status
 * @method void setTaskStates(array $TaskStates) Set Task Status
 * @method string getFindType() Obtain Search type
 * @method void setFindType(string $FindType) Set Search type
 * @method string getOptType() Obtain Access type
 * @method void setOptType(string $OptType) Set Access type
 * @method string getOperatorName() Obtain Operator Name
 * @method void setOperatorName(string $OperatorName) Set Operator Name
 * @method string getOperatorId() Obtain Operator ID
 * @method void setOperatorId(string $OperatorId) Set Operator ID
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getProjectIdent() Obtain Project Identifier
 * @method void setProjectIdent(string $ProjectIdent) Set Project Identifier
 * @method string getProjectName() Obtain Project name
 * @method void setProjectName(string $ProjectName) Set Project name
 * @method integer getPageIndex() Obtain Index Page Number
 * @method void setPageIndex(integer $PageIndex) Set Index Page Number
 * @method integer getPageSize() Obtain Page size
 * @method void setPageSize(integer $PageSize) Set Page size
 * @method integer getCount() Obtain Total Data
 * @method void setCount(integer $Count) Set Total Data
 * @method ProjectBaseInfoOpsRequest getRequestBaseInfo() Obtain Basic Request Information
 * @method void setRequestBaseInfo(ProjectBaseInfoOpsRequest $RequestBaseInfo) Set Basic Request Information
 * @method boolean getIsCount() Obtain Whether to Calculate Total
 * @method void setIsCount(boolean $IsCount) Set Whether to Calculate Total
 */
class DescribeAllByFolderNewRequest extends AbstractModel
{
    /**
     * @var FolderOpsDto Folder Attributes
     */
    public $Folder;

    /**
     * @var array Workflow List
     */
    public $Workflows;

    /**
     * @var string Target File ID
     */
    public $TargetFolderId;

    /**
     * @var string Keyword
     */
    public $KeyWords;

    /**
     * @var string Parent File ID
     */
    public $ParentsFolderId;

    /**
     * @var string Pull Folder List
     */
    public $IsAddWorkflow;

    /**
     * @var array Task Status
     */
    public $TaskStates;

    /**
     * @var string Search type
     */
    public $FindType;

    /**
     * @var string Access type
     */
    public $OptType;

    /**
     * @var string Operator Name
     */
    public $OperatorName;

    /**
     * @var string Operator ID
     */
    public $OperatorId;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Project Identifier
     */
    public $ProjectIdent;

    /**
     * @var string Project name
     */
    public $ProjectName;

    /**
     * @var integer Index Page Number
     */
    public $PageIndex;

    /**
     * @var integer Page size
     */
    public $PageSize;

    /**
     * @var integer Total Data
     */
    public $Count;

    /**
     * @var ProjectBaseInfoOpsRequest Basic Request Information
     */
    public $RequestBaseInfo;

    /**
     * @var boolean Whether to Calculate Total
     */
    public $IsCount;

    /**
     * @param FolderOpsDto $Folder Folder Attributes
     * @param array $Workflows Workflow List
     * @param string $TargetFolderId Target File ID
     * @param string $KeyWords Keyword
     * @param string $ParentsFolderId Parent File ID
     * @param string $IsAddWorkflow Pull Folder List
     * @param array $TaskStates Task Status
     * @param string $FindType Search type
     * @param string $OptType Access type
     * @param string $OperatorName Operator Name
     * @param string $OperatorId Operator ID
     * @param string $ProjectId Project ID
     * @param string $ProjectIdent Project Identifier
     * @param string $ProjectName Project name
     * @param integer $PageIndex Index Page Number
     * @param integer $PageSize Page size
     * @param integer $Count Total Data
     * @param ProjectBaseInfoOpsRequest $RequestBaseInfo Basic Request Information
     * @param boolean $IsCount Whether to Calculate Total
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
        if (array_key_exists("Folder",$param) and $param["Folder"] !== null) {
            $this->Folder = new FolderOpsDto();
            $this->Folder->deserialize($param["Folder"]);
        }

        if (array_key_exists("Workflows",$param) and $param["Workflows"] !== null) {
            $this->Workflows = [];
            foreach ($param["Workflows"] as $key => $value){
                $obj = new WorkflowCanvasOpsDto();
                $obj->deserialize($value);
                array_push($this->Workflows, $obj);
            }
        }

        if (array_key_exists("TargetFolderId",$param) and $param["TargetFolderId"] !== null) {
            $this->TargetFolderId = $param["TargetFolderId"];
        }

        if (array_key_exists("KeyWords",$param) and $param["KeyWords"] !== null) {
            $this->KeyWords = $param["KeyWords"];
        }

        if (array_key_exists("ParentsFolderId",$param) and $param["ParentsFolderId"] !== null) {
            $this->ParentsFolderId = $param["ParentsFolderId"];
        }

        if (array_key_exists("IsAddWorkflow",$param) and $param["IsAddWorkflow"] !== null) {
            $this->IsAddWorkflow = $param["IsAddWorkflow"];
        }

        if (array_key_exists("TaskStates",$param) and $param["TaskStates"] !== null) {
            $this->TaskStates = $param["TaskStates"];
        }

        if (array_key_exists("FindType",$param) and $param["FindType"] !== null) {
            $this->FindType = $param["FindType"];
        }

        if (array_key_exists("OptType",$param) and $param["OptType"] !== null) {
            $this->OptType = $param["OptType"];
        }

        if (array_key_exists("OperatorName",$param) and $param["OperatorName"] !== null) {
            $this->OperatorName = $param["OperatorName"];
        }

        if (array_key_exists("OperatorId",$param) and $param["OperatorId"] !== null) {
            $this->OperatorId = $param["OperatorId"];
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

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("RequestBaseInfo",$param) and $param["RequestBaseInfo"] !== null) {
            $this->RequestBaseInfo = new ProjectBaseInfoOpsRequest();
            $this->RequestBaseInfo->deserialize($param["RequestBaseInfo"]);
        }

        if (array_key_exists("IsCount",$param) and $param["IsCount"] !== null) {
            $this->IsCount = $param["IsCount"];
        }
    }
}
