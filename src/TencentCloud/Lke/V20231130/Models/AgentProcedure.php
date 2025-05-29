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
 * Process information of the thought event.
 *
 * @method integer getIndex() Obtain Index.
 * @method void setIndex(integer $Index) Set Index.
 * @method string getName() Obtain English name of the execution process.
 * @method void setName(string $Name) Set English name of the execution process.
 * @method string getTitle() Obtain Chinese name for display.
 * @method void setTitle(string $Title) Set Chinese name for display.
 * @method string getStatus() Obtain Status constant: processing; success; failed.
 * @method void setStatus(string $Status) Set Status constant: processing; success; failed.
 * @method string getIcon() Obtain Icon.
 * @method void setIcon(string $Icon) Set Icon.
 * @method AgentProcedureDebugging getDebugging() Obtain Agent debugging information.
 * @method void setDebugging(AgentProcedureDebugging $Debugging) Set Agent debugging information.
 * @method string getSwitch() Obtain Whether to switch to Agent. The value can be "main" or "workflow". Leave it blank for no switch.
 * @method void setSwitch(string $Switch) Set Whether to switch to Agent. The value can be "main" or "workflow". Leave it blank for no switch.
 * @method string getWorkflowName() Obtain Workflow name.
 * @method void setWorkflowName(string $WorkflowName) Set Workflow name.
 * @method integer getElapsed() Obtain Current request execution time, in milliseconds.
 * @method void setElapsed(integer $Elapsed) Set Current request execution time, in milliseconds.
 * @method string getNodeName() Obtain Workflow node name.
 * @method void setNodeName(string $NodeName) Set Workflow node name.
 * @method integer getReplyIndex() Obtain Used to display in which reply bubble the thoughts are placed.
 * @method void setReplyIndex(integer $ReplyIndex) Set Used to display in which reply bubble the thoughts are placed.
 * @method string getSourceAgentName() Obtain Main agent.
 * @method void setSourceAgentName(string $SourceAgentName) Set Main agent.
 * @method string getTargetAgentName() Obtain Registration agent.
 * @method void setTargetAgentName(string $TargetAgentName) Set Registration agent.
 * @method string getAgentIcon() Obtain Icon of Agent.
 * @method void setAgentIcon(string $AgentIcon) Set Icon of Agent.
 */
class AgentProcedure extends AbstractModel
{
    /**
     * @var integer Index.
     */
    public $Index;

    /**
     * @var string English name of the execution process.
     */
    public $Name;

    /**
     * @var string Chinese name for display.
     */
    public $Title;

    /**
     * @var string Status constant: processing; success; failed.
     */
    public $Status;

    /**
     * @var string Icon.
     */
    public $Icon;

    /**
     * @var AgentProcedureDebugging Agent debugging information.
     */
    public $Debugging;

    /**
     * @var string Whether to switch to Agent. The value can be "main" or "workflow". Leave it blank for no switch.
     */
    public $Switch;

    /**
     * @var string Workflow name.
     */
    public $WorkflowName;

    /**
     * @var integer Current request execution time, in milliseconds.
     */
    public $Elapsed;

    /**
     * @var string Workflow node name.
     */
    public $NodeName;

    /**
     * @var integer Used to display in which reply bubble the thoughts are placed.
     */
    public $ReplyIndex;

    /**
     * @var string Main agent.
     */
    public $SourceAgentName;

    /**
     * @var string Registration agent.
     */
    public $TargetAgentName;

    /**
     * @var string Icon of Agent.
     */
    public $AgentIcon;

    /**
     * @param integer $Index Index.
     * @param string $Name English name of the execution process.
     * @param string $Title Chinese name for display.
     * @param string $Status Status constant: processing; success; failed.
     * @param string $Icon Icon.
     * @param AgentProcedureDebugging $Debugging Agent debugging information.
     * @param string $Switch Whether to switch to Agent. The value can be "main" or "workflow". Leave it blank for no switch.
     * @param string $WorkflowName Workflow name.
     * @param integer $Elapsed Current request execution time, in milliseconds.
     * @param string $NodeName Workflow node name.
     * @param integer $ReplyIndex Used to display in which reply bubble the thoughts are placed.
     * @param string $SourceAgentName Main agent.
     * @param string $TargetAgentName Registration agent.
     * @param string $AgentIcon Icon of Agent.
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Icon",$param) and $param["Icon"] !== null) {
            $this->Icon = $param["Icon"];
        }

        if (array_key_exists("Debugging",$param) and $param["Debugging"] !== null) {
            $this->Debugging = new AgentProcedureDebugging();
            $this->Debugging->deserialize($param["Debugging"]);
        }

        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("WorkflowName",$param) and $param["WorkflowName"] !== null) {
            $this->WorkflowName = $param["WorkflowName"];
        }

        if (array_key_exists("Elapsed",$param) and $param["Elapsed"] !== null) {
            $this->Elapsed = $param["Elapsed"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("ReplyIndex",$param) and $param["ReplyIndex"] !== null) {
            $this->ReplyIndex = $param["ReplyIndex"];
        }

        if (array_key_exists("SourceAgentName",$param) and $param["SourceAgentName"] !== null) {
            $this->SourceAgentName = $param["SourceAgentName"];
        }

        if (array_key_exists("TargetAgentName",$param) and $param["TargetAgentName"] !== null) {
            $this->TargetAgentName = $param["TargetAgentName"];
        }

        if (array_key_exists("AgentIcon",$param) and $param["AgentIcon"] !== null) {
            $this->AgentIcon = $param["AgentIcon"];
        }
    }
}
