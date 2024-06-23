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
 * CreateWorkflowDs request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getWorkflowName() Obtain Workflow name
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name
 * @method string getFolderId() Obtain Folder ID
 * @method void setFolderId(string $FolderId) Set Folder ID
 * @method string getWorkflowDesc() Obtain Workflow Description
 * @method void setWorkflowDesc(string $WorkflowDesc) Set Workflow Description
 */
class CreateWorkflowDsRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Workflow name
     */
    public $WorkflowName;

    /**
     * @var string Folder ID
     */
    public $FolderId;

    /**
     * @var string Workflow Description
     */
    public $WorkflowDesc;

    /**
     * @param string $ProjectId Project ID
     * @param string $WorkflowName Workflow name
     * @param string $FolderId Folder ID
     * @param string $WorkflowDesc Workflow Description
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

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("WorkflowDesc",$param) and $param["WorkflowDesc"] !== null) {
            $this->WorkflowDesc = $param["WorkflowDesc"];
        }
    }
}
