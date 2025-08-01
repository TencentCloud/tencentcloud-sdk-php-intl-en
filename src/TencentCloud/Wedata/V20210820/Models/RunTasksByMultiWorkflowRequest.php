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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RunTasksByMultiWorkflow request structure.
 *
 * @method string getProjectId() Obtain Project ID
 * @method void setProjectId(string $ProjectId) Set Project ID
 * @method array getWorkflowIds() Obtain Workflow ID List
 * @method void setWorkflowIds(array $WorkflowIds) Set Workflow ID List
 * @method integer getEnableMakeUp() Obtain Whether to supplement intermediate instances 0. Do not supplement 1. Supplement instance
 * @method void setEnableMakeUp(integer $EnableMakeUp) Set Whether to supplement intermediate instances 0. Do not supplement 1. Supplement instance
 */
class RunTasksByMultiWorkflowRequest extends AbstractModel
{
    /**
     * @var string Project ID
     */
    public $ProjectId;

    /**
     * @var array Workflow ID List
     */
    public $WorkflowIds;

    /**
     * @var integer Whether to supplement intermediate instances 0. Do not supplement 1. Supplement instance
     */
    public $EnableMakeUp;

    /**
     * @param string $ProjectId Project ID
     * @param array $WorkflowIds Workflow ID List
     * @param integer $EnableMakeUp Whether to supplement intermediate instances 0. Do not supplement 1. Supplement instance
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

        if (array_key_exists("WorkflowIds",$param) and $param["WorkflowIds"] !== null) {
            $this->WorkflowIds = $param["WorkflowIds"];
        }

        if (array_key_exists("EnableMakeUp",$param) and $param["EnableMakeUp"] !== null) {
            $this->EnableMakeUp = $param["EnableMakeUp"];
        }
    }
}
