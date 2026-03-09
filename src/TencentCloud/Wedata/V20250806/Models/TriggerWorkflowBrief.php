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
 * Workflow summary information.
 *
 * @method string getProjectId() Obtain Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectId(string $ProjectId) Set Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowId() Obtain Task ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowId(string $WorkflowId) Set Task ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowName() Obtain Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTaskCount() Obtain Number of Tasks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskCount(integer $TaskCount) Set Number of Tasks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFolderId() Obtain Folder ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFolderId(string $FolderId) Set Folder ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFolderName() Obtain Folder name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFolderName(string $FolderName) Set Folder name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method WorkflowTriggerConfig getWorkflowTriggerConfig() Obtain Scheduling configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWorkflowTriggerConfig(WorkflowTriggerConfig $WorkflowTriggerConfig) Set Scheduling configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserNameInCharge() Obtain Responsible person.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserNameInCharge(string $UserNameInCharge) Set Responsible person.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserUinInCharge() Obtain Responsible person ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserUinInCharge(string $UserUinInCharge) Set Responsible person ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getWorkflowParams() Obtain Workflow parameter.
 * @method void setWorkflowParams(string $WorkflowParams) Set Workflow parameter.
 */
class TriggerWorkflowBrief extends AbstractModel
{
    /**
     * @var string Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectId;

    /**
     * @var string Task ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowId;

    /**
     * @var string Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowName;

    /**
     * @var integer Number of Tasks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskCount;

    /**
     * @var string Folder ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FolderId;

    /**
     * @var string Folder name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FolderName;

    /**
     * @var WorkflowTriggerConfig Scheduling configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WorkflowTriggerConfig;

    /**
     * @var string Responsible person.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserNameInCharge;

    /**
     * @var string Responsible person ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserUinInCharge;

    /**
     * @var string Workflow parameter.
     */
    public $WorkflowParams;

    /**
     * @param string $ProjectId Project ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowId Task ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowName Workflow name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TaskCount Number of Tasks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FolderId Folder ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FolderName Folder name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param WorkflowTriggerConfig $WorkflowTriggerConfig Scheduling configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserNameInCharge Responsible person.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserUinInCharge Responsible person ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $WorkflowParams Workflow parameter.
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

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("TaskCount",$param) and $param["TaskCount"] !== null) {
            $this->TaskCount = $param["TaskCount"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("FolderName",$param) and $param["FolderName"] !== null) {
            $this->FolderName = $param["FolderName"];
        }

        if (array_key_exists("WorkflowTriggerConfig",$param) and $param["WorkflowTriggerConfig"] !== null) {
            $this->WorkflowTriggerConfig = new WorkflowTriggerConfig();
            $this->WorkflowTriggerConfig->deserialize($param["WorkflowTriggerConfig"]);
        }

        if (array_key_exists("UserNameInCharge",$param) and $param["UserNameInCharge"] !== null) {
            $this->UserNameInCharge = $param["UserNameInCharge"];
        }

        if (array_key_exists("UserUinInCharge",$param) and $param["UserUinInCharge"] !== null) {
            $this->UserUinInCharge = $param["UserUinInCharge"];
        }

        if (array_key_exists("WorkflowParams",$param) and $param["WorkflowParams"] !== null) {
            $this->WorkflowParams = $param["WorkflowParams"];
        }
    }
}
