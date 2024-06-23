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
 * DescribeDsFolderTree request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method boolean getFirstLevelPull() Obtain Whether to Pull at First Level true Yes 
false No
 * @method void setFirstLevelPull(boolean $FirstLevelPull) Set Whether to Pull at First Level true Yes 
false No
 * @method string getFolderId() Obtain Folder ID
 * @method void setFolderId(string $FolderId) Set Folder ID
 * @method string getWorkflowId() Obtain Workflow ID
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID
 * @method string getKeyword() Obtain Keyword Search
 * @method void setKeyword(string $Keyword) Set Keyword Search
 * @method boolean getIncludeWorkflow() Obtain Whether to Include Workflow true Yes 
false No
 * @method void setIncludeWorkflow(boolean $IncludeWorkflow) Set Whether to Include Workflow true Yes 
false No
 * @method boolean getIncludeTask() Obtain Whether to Include Tasks true Yes 
false No
 * @method void setIncludeTask(boolean $IncludeTask) Set Whether to Include Tasks true Yes 
false No
 * @method boolean getIncludeVirtualTask() Obtain Does it include virtual tasks? This parameter is effective only when IncludeTask is true, default is true
 * @method void setIncludeVirtualTask(boolean $IncludeVirtualTask) Set Does it include virtual tasks? This parameter is effective only when IncludeTask is true, default is true
 * @method string getTaskFolderId() Obtain Task directory ID
 * @method void setTaskFolderId(string $TaskFolderId) Set Task directory ID
 * @method string getDisplayType() Obtain classification. Categorized Display  catalog. Directory Display
 * @method void setDisplayType(string $DisplayType) Set classification. Categorized Display  catalog. Directory Display
 * @method boolean getIncludeTaskFolder() Obtain Does it include task directories? true means yes
false No
 * @method void setIncludeTaskFolder(boolean $IncludeTaskFolder) Set Does it include task directories? true means yes
false No
 */
class DescribeDsFolderTreeRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var boolean Whether to Pull at First Level true Yes 
false No
     */
    public $FirstLevelPull;

    /**
     * @var string Folder ID
     */
    public $FolderId;

    /**
     * @var string Workflow ID
     */
    public $WorkflowId;

    /**
     * @var string Keyword Search
     */
    public $Keyword;

    /**
     * @var boolean Whether to Include Workflow true Yes 
false No
     */
    public $IncludeWorkflow;

    /**
     * @var boolean Whether to Include Tasks true Yes 
false No
     */
    public $IncludeTask;

    /**
     * @var boolean Does it include virtual tasks? This parameter is effective only when IncludeTask is true, default is true
     */
    public $IncludeVirtualTask;

    /**
     * @var string Task directory ID
     */
    public $TaskFolderId;

    /**
     * @var string classification. Categorized Display  catalog. Directory Display
     */
    public $DisplayType;

    /**
     * @var boolean Does it include task directories? true means yes
false No
     */
    public $IncludeTaskFolder;

    /**
     * @param string $ProjectId Project ID
     * @param boolean $FirstLevelPull Whether to Pull at First Level true Yes 
false No
     * @param string $FolderId Folder ID
     * @param string $WorkflowId Workflow ID
     * @param string $Keyword Keyword Search
     * @param boolean $IncludeWorkflow Whether to Include Workflow true Yes 
false No
     * @param boolean $IncludeTask Whether to Include Tasks true Yes 
false No
     * @param boolean $IncludeVirtualTask Does it include virtual tasks? This parameter is effective only when IncludeTask is true, default is true
     * @param string $TaskFolderId Task directory ID
     * @param string $DisplayType classification. Categorized Display  catalog. Directory Display
     * @param boolean $IncludeTaskFolder Does it include task directories? true means yes
false No
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

        if (array_key_exists("FirstLevelPull",$param) and $param["FirstLevelPull"] !== null) {
            $this->FirstLevelPull = $param["FirstLevelPull"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("IncludeWorkflow",$param) and $param["IncludeWorkflow"] !== null) {
            $this->IncludeWorkflow = $param["IncludeWorkflow"];
        }

        if (array_key_exists("IncludeTask",$param) and $param["IncludeTask"] !== null) {
            $this->IncludeTask = $param["IncludeTask"];
        }

        if (array_key_exists("IncludeVirtualTask",$param) and $param["IncludeVirtualTask"] !== null) {
            $this->IncludeVirtualTask = $param["IncludeVirtualTask"];
        }

        if (array_key_exists("TaskFolderId",$param) and $param["TaskFolderId"] !== null) {
            $this->TaskFolderId = $param["TaskFolderId"];
        }

        if (array_key_exists("DisplayType",$param) and $param["DisplayType"] !== null) {
            $this->DisplayType = $param["DisplayType"];
        }

        if (array_key_exists("IncludeTaskFolder",$param) and $param["IncludeTaskFolder"] !== null) {
            $this->IncludeTaskFolder = $param["IncludeTaskFolder"];
        }
    }
}
