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
 * DeleteWorkflowById request structure.
 *
 * @method string getWorkflowId() Obtain Workflow ID
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method boolean getDeleteMode() Obtain Handling method for downstream tasks after deletion, true: all downstream tasks run normally false: all downstream tasks fail
 * @method void setDeleteMode(boolean $DeleteMode) Set Handling method for downstream tasks after deletion, true: all downstream tasks run normally false: all downstream tasks fail
 * @method boolean getEnableNotify() Obtain Notify downstream task owners after task deletion, true: notify false: do not notify
 * @method void setEnableNotify(boolean $EnableNotify) Set Notify downstream task owners after task deletion, true: notify false: do not notify
 */
class DeleteWorkflowByIdRequest extends AbstractModel
{
    /**
     * @var string Workflow ID
     */
    public $WorkflowId;

    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var boolean Handling method for downstream tasks after deletion, true: all downstream tasks run normally false: all downstream tasks fail
     */
    public $DeleteMode;

    /**
     * @var boolean Notify downstream task owners after task deletion, true: notify false: do not notify
     */
    public $EnableNotify;

    /**
     * @param string $WorkflowId Workflow ID
     * @param string $ProjectId Project ID
     * @param boolean $DeleteMode Handling method for downstream tasks after deletion, true: all downstream tasks run normally false: all downstream tasks fail
     * @param boolean $EnableNotify Notify downstream task owners after task deletion, true: notify false: do not notify
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DeleteMode",$param) and $param["DeleteMode"] !== null) {
            $this->DeleteMode = $param["DeleteMode"];
        }

        if (array_key_exists("EnableNotify",$param) and $param["EnableNotify"] !== null) {
            $this->EnableNotify = $param["EnableNotify"];
        }
    }
}
