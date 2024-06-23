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
 * RemoveWorkflowDs request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method string getWorkflowId() Obtain Workflow ID
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID
 * @method string getDeleteScript() Obtain Whether to delete the script
 * @method void setDeleteScript(string $DeleteScript) Set Whether to delete the script
 * @method string getOperateIsInform() Obtain Notify downstream if deleted
 * @method void setOperateIsInform(string $OperateIsInform) Set Notify downstream if deleted
 * @method string getDeleteMode() Obtain Whether to terminate ongoing tasks
 * @method void setDeleteMode(string $DeleteMode) Set Whether to terminate ongoing tasks
 */
class RemoveWorkflowDsRequest extends AbstractModel
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
     * @var string Whether to delete the script
     */
    public $DeleteScript;

    /**
     * @var string Notify downstream if deleted
     */
    public $OperateIsInform;

    /**
     * @var string Whether to terminate ongoing tasks
     */
    public $DeleteMode;

    /**
     * @param string $ProjectId Project ID
     * @param string $WorkflowId Workflow ID
     * @param string $DeleteScript Whether to delete the script
     * @param string $OperateIsInform Notify downstream if deleted
     * @param string $DeleteMode Whether to terminate ongoing tasks
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

        if (array_key_exists("DeleteScript",$param) and $param["DeleteScript"] !== null) {
            $this->DeleteScript = $param["DeleteScript"];
        }

        if (array_key_exists("OperateIsInform",$param) and $param["OperateIsInform"] !== null) {
            $this->OperateIsInform = $param["OperateIsInform"];
        }

        if (array_key_exists("DeleteMode",$param) and $param["DeleteMode"] !== null) {
            $this->DeleteMode = $param["DeleteMode"];
        }
    }
}
