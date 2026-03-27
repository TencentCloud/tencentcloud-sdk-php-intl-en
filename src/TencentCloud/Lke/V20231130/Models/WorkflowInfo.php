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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Workflow Information
 *
 * @method string getWorkflowId() Obtain Workflow ID
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID
 * @method string getWorkflowName() Obtain Workflow Name
 * @method void setWorkflowName(string $WorkflowName) Set Workflow Name
 * @method string getWorkflowRunId() Obtain Workflow Run ID
 * @method void setWorkflowRunId(string $WorkflowRunId) Set Workflow Run ID
 * @method array getOptionCards() Obtain Tab
 * @method void setOptionCards(array $OptionCards) Set Tab
 * @method array getOutputs() Obtain Multi-bubble output results
 * @method void setOutputs(array $Outputs) Set Multi-bubble output results
 * @method string getWorkflowReleaseTime() Obtain Workflow Publish Time, unix timestamp
 * @method void setWorkflowReleaseTime(string $WorkflowReleaseTime) Set Workflow Publish Time, unix timestamp
 */
class WorkflowInfo extends AbstractModel
{
    /**
     * @var string Workflow ID
     */
    public $WorkflowId;

    /**
     * @var string Workflow Name
     */
    public $WorkflowName;

    /**
     * @var string Workflow Run ID
     */
    public $WorkflowRunId;

    /**
     * @var array Tab
     */
    public $OptionCards;

    /**
     * @var array Multi-bubble output results
     */
    public $Outputs;

    /**
     * @var string Workflow Publish Time, unix timestamp
     */
    public $WorkflowReleaseTime;

    /**
     * @param string $WorkflowId Workflow ID
     * @param string $WorkflowName Workflow Name
     * @param string $WorkflowRunId Workflow Run ID
     * @param array $OptionCards Tab
     * @param array $Outputs Multi-bubble output results
     * @param string $WorkflowReleaseTime Workflow Publish Time, unix timestamp
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

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("WorkflowRunId",$param) and $param["WorkflowRunId"] !== null) {
            $this->WorkflowRunId = $param["WorkflowRunId"];
        }

        if (array_key_exists("OptionCards",$param) and $param["OptionCards"] !== null) {
            $this->OptionCards = $param["OptionCards"];
        }

        if (array_key_exists("Outputs",$param) and $param["Outputs"] !== null) {
            $this->Outputs = $param["Outputs"];
        }

        if (array_key_exists("WorkflowReleaseTime",$param) and $param["WorkflowReleaseTime"] !== null) {
            $this->WorkflowReleaseTime = $param["WorkflowReleaseTime"];
        }
    }
}
