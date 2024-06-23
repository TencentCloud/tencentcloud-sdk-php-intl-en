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
 * DescribeDsParentFolderTree request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getFolderId() Obtain Folder ID
 * @method void setFolderId(string $FolderId) Set Folder ID
 * @method string getWorkflowId() Obtain Workflow ID
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID
 * @method string getTaskId() Obtain Task ID
 * @method void setTaskId(string $TaskId) Set Task ID
 * @method string getDisplayType() Obtain Task Display Format, Example Values
-    classification: Categorized Display
-    catalog: Directory Display
 * @method void setDisplayType(string $DisplayType) Set Task Display Format, Example Values
-    classification: Categorized Display
-    catalog: Directory Display
 */
class DescribeDsParentFolderTreeRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Folder ID
     */
    public $FolderId;

    /**
     * @var string Workflow ID
     */
    public $WorkflowId;

    /**
     * @var string Task ID
     */
    public $TaskId;

    /**
     * @var string Task Display Format, Example Values
-    classification: Categorized Display
-    catalog: Directory Display
     */
    public $DisplayType;

    /**
     * @param string $ProjectId Project ID
     * @param string $FolderId Folder ID
     * @param string $WorkflowId Workflow ID
     * @param string $TaskId Task ID
     * @param string $DisplayType Task Display Format, Example Values
-    classification: Categorized Display
-    catalog: Directory Display
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

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("DisplayType",$param) and $param["DisplayType"] !== null) {
            $this->DisplayType = $param["DisplayType"];
        }
    }
}
