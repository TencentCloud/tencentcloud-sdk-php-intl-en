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
 * MoveTasksToFolder request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getWorkflowId() Obtain Workflow ID
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID
 * @method string getTaskFolderId() Obtain Task Folder ID
 * @method void setTaskFolderId(string $TaskFolderId) Set Task Folder ID
 * @method array getTaskIds() Obtain Task ID
 * @method void setTaskIds(array $TaskIds) Set Task ID
 * @method array getVirtualTaskIds() Obtain Virtual Task ID
 * @method void setVirtualTaskIds(array $VirtualTaskIds) Set Virtual Task ID
 */
class MoveTasksToFolderRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var string Workflow ID
     */
    public $WorkflowId;

    /**
     * @var string Task Folder ID
     */
    public $TaskFolderId;

    /**
     * @var array Task ID
     */
    public $TaskIds;

    /**
     * @var array Virtual Task ID
     */
    public $VirtualTaskIds;

    /**
     * @param string $ProjectId Project ID
     * @param string $WorkflowId Workflow ID
     * @param string $TaskFolderId Task Folder ID
     * @param array $TaskIds Task ID
     * @param array $VirtualTaskIds Virtual Task ID
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

        if (array_key_exists("TaskFolderId",$param) and $param["TaskFolderId"] !== null) {
            $this->TaskFolderId = $param["TaskFolderId"];
        }

        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("VirtualTaskIds",$param) and $param["VirtualTaskIds"] !== null) {
            $this->VirtualTaskIds = $param["VirtualTaskIds"];
        }
    }
}
