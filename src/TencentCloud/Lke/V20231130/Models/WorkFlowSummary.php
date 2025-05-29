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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Workflow debugging information.
 *
 * @method string getWorkflowId() Obtain Workflow ID.
 * @method void setWorkflowId(string $WorkflowId) Set Workflow ID.
 * @method string getWorkflowName() Obtain Workflow name.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.
 * @method string getWorkflowRunId() Obtain Workflow running ID.
 * @method void setWorkflowRunId(string $WorkflowRunId) Set Workflow running ID.
 * @method array getRunNodes() Obtain Node information.
 * @method void setRunNodes(array $RunNodes) Set Node information.
 * @method array getOptionCards() Obtain Tab.
 * @method void setOptionCards(array $OptionCards) Set Tab.
 * @method array getOutputs() Obtain Output results of multiple bubbles.
 * @method void setOutputs(array $Outputs) Set Output results of multiple bubbles.
 * @method string getWorkflowReleaseTime() Obtain Workflow release time, Unix timestamp.
 * @method void setWorkflowReleaseTime(string $WorkflowReleaseTime) Set Workflow release time, Unix timestamp.
 */
class WorkFlowSummary extends AbstractModel
{
    /**
     * @var string Workflow ID.
     */
    public $WorkflowId;

    /**
     * @var string Workflow name.
     */
    public $WorkflowName;

    /**
     * @var string Workflow running ID.
     */
    public $WorkflowRunId;

    /**
     * @var array Node information.
     */
    public $RunNodes;

    /**
     * @var array Tab.
     */
    public $OptionCards;

    /**
     * @var array Output results of multiple bubbles.
     */
    public $Outputs;

    /**
     * @var string Workflow release time, Unix timestamp.
     */
    public $WorkflowReleaseTime;

    /**
     * @param string $WorkflowId Workflow ID.
     * @param string $WorkflowName Workflow name.
     * @param string $WorkflowRunId Workflow running ID.
     * @param array $RunNodes Node information.
     * @param array $OptionCards Tab.
     * @param array $Outputs Output results of multiple bubbles.
     * @param string $WorkflowReleaseTime Workflow release time, Unix timestamp.
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

        if (array_key_exists("RunNodes",$param) and $param["RunNodes"] !== null) {
            $this->RunNodes = [];
            foreach ($param["RunNodes"] as $key => $value){
                $obj = new WorkflowRunNodeInfo();
                $obj->deserialize($value);
                array_push($this->RunNodes, $obj);
            }
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
