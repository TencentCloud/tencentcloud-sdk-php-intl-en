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
 * Workflow information.
 *
 * @method string getWorkflowId() Obtain <p>Workflow ID</p>
 * @method void setWorkflowId(string $WorkflowId) Set <p>Workflow ID</p>
 * @method string getWorkflowName() Obtain <p>Workflow name.</p>
 * @method void setWorkflowName(string $WorkflowName) Set <p>Workflow name.</p>
 * @method string getWorkflowRunId() Obtain <p>Workflow run ID</p>
 * @method void setWorkflowRunId(string $WorkflowRunId) Set <p>Workflow run ID</p>
 * @method array getOptionCards() Obtain <p>Tab</p>
 * @method void setOptionCards(array $OptionCards) Set <p>Tab</p>
 * @method array getOutputs() Obtain <p>Output result of multiple bubbles</p>
 * @method void setOutputs(array $Outputs) Set <p>Output result of multiple bubbles</p>
 * @method string getWorkflowReleaseTime() Obtain <p>Workflow release time, unix timestamp.</p>
 * @method void setWorkflowReleaseTime(string $WorkflowReleaseTime) Set <p>Workflow release time, unix timestamp.</p>
 * @method array getContents() Obtain <p>Workflow multi-bubble output</p>
 * @method void setContents(array $Contents) Set <p>Workflow multi-bubble output</p>
 * @method integer getOptionMode() Obtain <p>Flag indicating whether the tab is single-selection or dual-selection</p><p>Enumeration values:</p><ul><li>0: single selection</li><li>1: multiple selection</li></ul>
 * @method void setOptionMode(integer $OptionMode) Set <p>Flag indicating whether the tab is single-selection or dual-selection</p><p>Enumeration values:</p><ul><li>0: single selection</li><li>1: multiple selection</li></ul>
 */
class WorkflowInfo extends AbstractModel
{
    /**
     * @var string <p>Workflow ID</p>
     */
    public $WorkflowId;

    /**
     * @var string <p>Workflow name.</p>
     */
    public $WorkflowName;

    /**
     * @var string <p>Workflow run ID</p>
     */
    public $WorkflowRunId;

    /**
     * @var array <p>Tab</p>
     */
    public $OptionCards;

    /**
     * @var array <p>Output result of multiple bubbles</p>
     */
    public $Outputs;

    /**
     * @var string <p>Workflow release time, unix timestamp.</p>
     */
    public $WorkflowReleaseTime;

    /**
     * @var array <p>Workflow multi-bubble output</p>
     */
    public $Contents;

    /**
     * @var integer <p>Flag indicating whether the tab is single-selection or dual-selection</p><p>Enumeration values:</p><ul><li>0: single selection</li><li>1: multiple selection</li></ul>
     */
    public $OptionMode;

    /**
     * @param string $WorkflowId <p>Workflow ID</p>
     * @param string $WorkflowName <p>Workflow name.</p>
     * @param string $WorkflowRunId <p>Workflow run ID</p>
     * @param array $OptionCards <p>Tab</p>
     * @param array $Outputs <p>Output result of multiple bubbles</p>
     * @param string $WorkflowReleaseTime <p>Workflow release time, unix timestamp.</p>
     * @param array $Contents <p>Workflow multi-bubble output</p>
     * @param integer $OptionMode <p>Flag indicating whether the tab is single-selection or dual-selection</p><p>Enumeration values:</p><ul><li>0: single selection</li><li>1: multiple selection</li></ul>
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

        if (array_key_exists("Contents",$param) and $param["Contents"] !== null) {
            $this->Contents = [];
            foreach ($param["Contents"] as $key => $value){
                $obj = new Content();
                $obj->deserialize($value);
                array_push($this->Contents, $obj);
            }
        }

        if (array_key_exists("OptionMode",$param) and $param["OptionMode"] !== null) {
            $this->OptionMode = $param["OptionMode"];
        }
    }
}
