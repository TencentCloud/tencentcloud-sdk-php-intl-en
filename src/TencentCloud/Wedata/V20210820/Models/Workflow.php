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
 * Workflow Information
 *
 * @method string getWorkflowId() Obtain Workflow ID
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID
 * @method string getOwner() Obtain Person in Charge
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwner(string $Owner) Set Person in Charge
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOwnerId() Obtain Responsible Person ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOwnerId(string $OwnerId) Set Responsible Person ID
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getProjectIdent() Obtain Project Identifier
 * @method void setProjectIdent(string $ProjectIdent) Set Project Identifier
 * @method string getProjectName() Obtain Project name
 * @method void setProjectName(string $ProjectName) Set Project name
 * @method string getWorkflowDesc() Obtain RemarksNote: This field may return null, indicating that no valid value can be obtained.
 * @method void setWorkflowDesc(string $WorkflowDesc) Set RemarksNote: This field may return null, indicating that no valid value can be obtained.
 * @method string getWorkflowName() Obtain Workflow name
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name
 * @method string getFolderId() Obtain Parent Folder ID
 * @method void setFolderId(string $FolderId) Set Parent Folder ID
 * @method string getUserGroupId() Obtain Workflow User Group ID If there are multiple, separate with semicolons: a;b;c
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUserGroupId(string $UserGroupId) Set Workflow User Group ID If there are multiple, separate with semicolons: a;b;c
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getUserGroupName() Obtain Workflow User Group Name If there are multiple, separate with semicolons: a;b;c
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setUserGroupName(string $UserGroupName) Set Workflow User Group Name If there are multiple, separate with semicolons: a;b;c
Note: This field may return null, indicating that no valid value can be obtained.
 */
class Workflow extends AbstractModel
{
    /**
     * @var string Workflow ID
     */
    public $WorkflowId;

    /**
     * @var string Person in Charge
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Owner;

    /**
     * @var string Responsible Person ID
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OwnerId;

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
     * @var string RemarksNote: This field may return null, indicating that no valid value can be obtained.
     */
    public $WorkflowDesc;

    /**
     * @var string Workflow name
     */
    public $WorkflowName;

    /**
     * @var string Parent Folder ID
     */
    public $FolderId;

    /**
     * @var string Workflow User Group ID If there are multiple, separate with semicolons: a;b;c
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UserGroupId;

    /**
     * @var string Workflow User Group Name If there are multiple, separate with semicolons: a;b;c
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $UserGroupName;

    /**
     * @param string $WorkflowId Workflow ID
     * @param string $Owner Person in Charge
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OwnerId Responsible Person ID
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $ProjectId Project ID
     * @param string $ProjectIdent Project Identifier
     * @param string $ProjectName Project name
     * @param string $WorkflowDesc RemarksNote: This field may return null, indicating that no valid value can be obtained.
     * @param string $WorkflowName Workflow name
     * @param string $FolderId Parent Folder ID
     * @param string $UserGroupId Workflow User Group ID If there are multiple, separate with semicolons: a;b;c
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $UserGroupName Workflow User Group Name If there are multiple, separate with semicolons: a;b;c
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

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("OwnerId",$param) and $param["OwnerId"] !== null) {
            $this->OwnerId = $param["OwnerId"];
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

        if (array_key_exists("WorkflowDesc",$param) and $param["WorkflowDesc"] !== null) {
            $this->WorkflowDesc = $param["WorkflowDesc"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("UserGroupId",$param) and $param["UserGroupId"] !== null) {
            $this->UserGroupId = $param["UserGroupId"];
        }

        if (array_key_exists("UserGroupName",$param) and $param["UserGroupName"] !== null) {
            $this->UserGroupName = $param["UserGroupName"];
        }
    }
}
