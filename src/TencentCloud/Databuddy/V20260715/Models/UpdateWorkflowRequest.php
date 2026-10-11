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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateWorkflow request structure.
 *
 * @method string getWorkspaceId() Obtain <p>Workspace ID, which can be obtained through ListWorkspaces. Required.</p>
 * @method void setWorkspaceId(string $WorkspaceId) Set <p>Workspace ID, which can be obtained through ListWorkspaces. Required.</p>
 * @method string getWorkflowId() Obtain <p>ID of the workflow to be updated. You can obtain it through ListWorkflows. Required</p>
 * @method void setWorkflowId(string $WorkflowId) Set <p>ID of the workflow to be updated. You can obtain it through ListWorkflows. Required</p>
 * @method array getFieldToRemoveList() Obtain <p>List of field names to be cleared, used to reset the specified fields to empty</p>
 * @method void setFieldToRemoveList(array $FieldToRemoveList) Set <p>List of field names to be cleared, used to reset the specified fields to empty</p>
 * @method Workflow getNewSetting() Obtain <p>After the update, only import the parts of the workflow configuration that need to be changed</p>
 * @method void setNewSetting(Workflow $NewSetting) Set <p>After the update, only import the parts of the workflow configuration that need to be changed</p>
 */
class UpdateWorkflowRequest extends AbstractModel
{
    /**
     * @var string <p>Workspace ID, which can be obtained through ListWorkspaces. Required.</p>
     */
    public $WorkspaceId;

    /**
     * @var string <p>ID of the workflow to be updated. You can obtain it through ListWorkflows. Required</p>
     */
    public $WorkflowId;

    /**
     * @var array <p>List of field names to be cleared, used to reset the specified fields to empty</p>
     */
    public $FieldToRemoveList;

    /**
     * @var Workflow <p>After the update, only import the parts of the workflow configuration that need to be changed</p>
     */
    public $NewSetting;

    /**
     * @param string $WorkspaceId <p>Workspace ID, which can be obtained through ListWorkspaces. Required.</p>
     * @param string $WorkflowId <p>ID of the workflow to be updated. You can obtain it through ListWorkflows. Required</p>
     * @param array $FieldToRemoveList <p>List of field names to be cleared, used to reset the specified fields to empty</p>
     * @param Workflow $NewSetting <p>After the update, only import the parts of the workflow configuration that need to be changed</p>
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("FieldToRemoveList",$param) and $param["FieldToRemoveList"] !== null) {
            $this->FieldToRemoveList = $param["FieldToRemoveList"];
        }

        if (array_key_exists("NewSetting",$param) and $param["NewSetting"] !== null) {
            $this->NewSetting = new Workflow();
            $this->NewSetting->deserialize($param["NewSetting"]);
        }
    }
}
