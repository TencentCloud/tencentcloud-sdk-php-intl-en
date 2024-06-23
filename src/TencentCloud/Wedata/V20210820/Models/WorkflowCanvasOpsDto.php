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
 * Workflow Canvas Details
 *
 * @method string getWorkflowId() Obtain Workflow IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getWorkflowDesc() Obtain Workflow Detail Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setWorkflowDesc(string $WorkflowDesc) Set Workflow Detail Description
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getWorkflowName() Obtain Workflow nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getFolderId() Obtain Parent Folder IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setFolderId(string $FolderId) Set Parent Folder IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method array getFolderIds() Obtain Associated Folder IDs
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setFolderIds(array $FolderIds) Set Associated Folder IDs
Note: This field may return null, indicating that no valid value can be obtained.
 * @method array getTasks() Obtain Task ListNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setTasks(array $Tasks) Set Task ListNote: This field may return null, indicating that no valid value can be obtained.
 * @method array getLinks() Obtain Task Dependency Edge List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setLinks(array $Links) Set Task Dependency Edge List
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUserGroupId() Obtain Workflow User Group ID, if multiple, separated by semicolons: a;b;c
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUserGroupId(string $UserGroupId) Set Workflow User Group ID, if multiple, separated by semicolons: a;b;c
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUserGroupName() Obtain Workflow User Group Name, if multiple, separated by semicolons: a;b;c
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUserGroupName(string $UserGroupName) Set Workflow User Group Name, if multiple, separated by semicolons: a;b;c
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectId() Obtain Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project IDNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectIdent() Obtain Project IdentifierNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectIdent(string $ProjectIdent) Set Project IdentifierNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectName() Obtain Project nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setProjectName(string $ProjectName) Set Project nameNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwner() Obtain Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwner(string $Owner) Set Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwnerId() Obtain Responsible User ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwnerId(string $OwnerId) Set Responsible User ID
Note: This field may return null, indicating that no valid value can be obtained.
 */
class WorkflowCanvasOpsDto extends AbstractModel
{
    /**
     * @var string Workflow IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $WorkflowId;

    /**
     * @var string Workflow Detail Description
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $WorkflowDesc;

    /**
     * @var string Workflow nameNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $WorkflowName;

    /**
     * @var string Parent Folder IDNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $FolderId;

    /**
     * @var array Associated Folder IDs
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $FolderIds;

    /**
     * @var array Task ListNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Tasks;

    /**
     * @var array Task Dependency Edge List
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Links;

    /**
     * @var string Workflow User Group ID, if multiple, separated by semicolons: a;b;c
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UserGroupId;

    /**
     * @var string Workflow User Group Name, if multiple, separated by semicolons: a;b;c
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UserGroupName;

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
     * @var string Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $Owner;

    /**
     * @var string Responsible User ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OwnerId;

    /**
     * @param string $WorkflowId Workflow IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $WorkflowDesc Workflow Detail Description
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $WorkflowName Workflow nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $FolderId Parent Folder IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param array $FolderIds Associated Folder IDs
Note: This field may return null, indicating that no valid value can be obtained.
     * @param array $Tasks Task ListNote: This field may return null, indicating that no valid value can be obtained.
     * @param array $Links Task Dependency Edge List
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UserGroupId Workflow User Group ID, if multiple, separated by semicolons: a;b;c
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UserGroupName Workflow User Group Name, if multiple, separated by semicolons: a;b;c
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectId Project IDNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectIdent Project IdentifierNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectName Project nameNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $Owner Person in ChargeNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $OwnerId Responsible User ID
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
        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowDesc",$param) and $param["WorkflowDesc"] !== null) {
            $this->WorkflowDesc = $param["WorkflowDesc"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("FolderIds",$param) and $param["FolderIds"] !== null) {
            $this->FolderIds = $param["FolderIds"];
        }

        if (array_key_exists("Tasks",$param) and $param["Tasks"] !== null) {
            $this->Tasks = [];
            foreach ($param["Tasks"] as $key => $value){
                $obj = new TaskOpsDto();
                $obj->deserialize($value);
                array_push($this->Tasks, $obj);
            }
        }

        if (array_key_exists("Links",$param) and $param["Links"] !== null) {
            $this->Links = [];
            foreach ($param["Links"] as $key => $value){
                $obj = new LinkOpsDto();
                $obj->deserialize($value);
                array_push($this->Links, $obj);
            }
        }

        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }

        if (array_key_exists("UserGroupName",$param) and $param["UserGroupName"] !== null) {
            $this->UserGroupName = $param["UserGroupName"];
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

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("OwnerId",$param) and $param["OwnerId"] !== null) {
            $this->OwnerId = $param["OwnerId"];
        }
    }
}
