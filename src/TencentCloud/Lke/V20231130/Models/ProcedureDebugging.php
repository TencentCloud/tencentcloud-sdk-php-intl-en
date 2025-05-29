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
 * Debug information.
 *
 * @method string getContent() Obtain Retrieve query.
 * @method void setContent(string $Content) Set Retrieve query.
 * @method string getSystem() Obtain System prompt.
 * @method void setSystem(string $System) Set System prompt.
 * @method array getHistories() Obtain Multiple rounds of historical information.
 * @method void setHistories(array $Histories) Set Multiple rounds of historical information.
 * @method array getKnowledge() Obtain Retrieve knowledge.
 * @method void setKnowledge(array $Knowledge) Set Retrieve knowledge.
 * @method TaskFlowSummary getTaskFlow() Obtain Task process.
 * @method void setTaskFlow(TaskFlowSummary $TaskFlow) Set Task process.
 * @method WorkFlowSummary getWorkFlow() Obtain Workflow debugging information.
 * @method void setWorkFlow(WorkFlowSummary $WorkFlow) Set Workflow debugging information.
 * @method AgentDebugInfo getAgent() Obtain Agent debugging information.
 * @method void setAgent(AgentDebugInfo $Agent) Set Agent debugging information.
 * @method array getCustomVariables() Obtain Custom parameter.
 * @method void setCustomVariables(array $CustomVariables) Set Custom parameter.
 */
class ProcedureDebugging extends AbstractModel
{
    /**
     * @var string Retrieve query.
     */
    public $Content;

    /**
     * @var string System prompt.
     */
    public $System;

    /**
     * @var array Multiple rounds of historical information.
     */
    public $Histories;

    /**
     * @var array Retrieve knowledge.
     */
    public $Knowledge;

    /**
     * @var TaskFlowSummary Task process.
     */
    public $TaskFlow;

    /**
     * @var WorkFlowSummary Workflow debugging information.
     */
    public $WorkFlow;

    /**
     * @var AgentDebugInfo Agent debugging information.
     */
    public $Agent;

    /**
     * @var array Custom parameter.
     */
    public $CustomVariables;

    /**
     * @param string $Content Retrieve query.
     * @param string $System System prompt.
     * @param array $Histories Multiple rounds of historical information.
     * @param array $Knowledge Retrieve knowledge.
     * @param TaskFlowSummary $TaskFlow Task process.
     * @param WorkFlowSummary $WorkFlow Workflow debugging information.
     * @param AgentDebugInfo $Agent Agent debugging information.
     * @param array $CustomVariables Custom parameter.
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("System",$param) and $param["System"] !== null) {
            $this->System = $param["System"];
        }

        if (array_key_exists("Histories",$param) and $param["Histories"] !== null) {
            $this->Histories = [];
            foreach ($param["Histories"] as $key => $value){
                $obj = new HistorySummary();
                $obj->deserialize($value);
                array_push($this->Histories, $obj);
            }
        }

        if (array_key_exists("Knowledge",$param) and $param["Knowledge"] !== null) {
            $this->Knowledge = [];
            foreach ($param["Knowledge"] as $key => $value){
                $obj = new KnowledgeSummary();
                $obj->deserialize($value);
                array_push($this->Knowledge, $obj);
            }
        }

        if (array_key_exists("TaskFlow",$param) and $param["TaskFlow"] !== null) {
            $this->TaskFlow = new TaskFlowSummary();
            $this->TaskFlow->deserialize($param["TaskFlow"]);
        }

        if (array_key_exists("WorkFlow",$param) and $param["WorkFlow"] !== null) {
            $this->WorkFlow = new WorkFlowSummary();
            $this->WorkFlow->deserialize($param["WorkFlow"]);
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new AgentDebugInfo();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("CustomVariables",$param) and $param["CustomVariables"] !== null) {
            $this->CustomVariables = $param["CustomVariables"];
        }
    }
}
