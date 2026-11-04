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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Basic information of the workflow running instance
 *
 * @method string getAppId() Obtain Application ID
 * @method void setAppId(string $AppId) Set Application ID
 * @method string getWorkflowRunId() Obtain ID of the workflow running instance	
 * @method void setWorkflowRunId(string $WorkflowRunId) Set ID of the workflow running instance	
 * @method string getWorkflowId() Obtain Workflow ID
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 */
class WorkflowRunProfile extends AbstractModel
{
    /**
     * @var string Application ID
     */
    public $AppId;

    /**
     * @var string ID of the workflow running instance	
     */
    public $WorkflowRunId;

    /**
     * @var string Workflow ID
     */
    public $WorkflowId;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @param string $AppId Application ID
     * @param string $WorkflowRunId ID of the workflow running instance	
     * @param string $WorkflowId Workflow ID
     * @param string $Name Name
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
