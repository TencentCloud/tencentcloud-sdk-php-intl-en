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
 * Workflow running node information.
 *
 * @method string getNodeId() Obtain Node ID.
 * @method void setNodeId(string $NodeId) Set Node ID.
 * @method integer getNodeType() Obtain Node type.
 * @method void setNodeType(integer $NodeType) Set Node type.
 * @method string getNodeName() Obtain Node name.
 * @method void setNodeName(string $NodeName) Set Node name.
 * @method integer getStatus() Obtain Status.
 * @method void setStatus(integer $Status) Set Status.
 * @method string getInput() Obtain Input..
 * @method void setInput(string $Input) Set Input..
 * @method string getOutput() Obtain Output.
 * @method void setOutput(string $Output) Set Output.
 * @method string getTaskOutput() Obtain Task output.
 * @method void setTaskOutput(string $TaskOutput) Set Task output.
 * @method string getFailMessage() Obtain Error message.
 * @method void setFailMessage(string $FailMessage) Set Error message.
 * @method integer getCostMilliSeconds() Obtain Time consumption.
 * @method void setCostMilliSeconds(integer $CostMilliSeconds) Set Time consumption.
 * @method array getStatisticInfos() Obtain Large model output information.
 * @method void setStatisticInfos(array $StatisticInfos) Set Large model output information.
 */
class WorkflowRunNodeInfo extends AbstractModel
{
    /**
     * @var string Node ID.
     */
    public $NodeId;

    /**
     * @var integer Node type.
     */
    public $NodeType;

    /**
     * @var string Node name.
     */
    public $NodeName;

    /**
     * @var integer Status.
     */
    public $Status;

    /**
     * @var string Input..
     */
    public $Input;

    /**
     * @var string Output.
     */
    public $Output;

    /**
     * @var string Task output.
     */
    public $TaskOutput;

    /**
     * @var string Error message.
     */
    public $FailMessage;

    /**
     * @var integer Time consumption.
     */
    public $CostMilliSeconds;

    /**
     * @var array Large model output information.
     */
    public $StatisticInfos;

    /**
     * @param string $NodeId Node ID.
     * @param integer $NodeType Node type.
     * @param string $NodeName Node name.
     * @param integer $Status Status.
     * @param string $Input Input..
     * @param string $Output Output.
     * @param string $TaskOutput Task output.
     * @param string $FailMessage Error message.
     * @param integer $CostMilliSeconds Time consumption.
     * @param array $StatisticInfos Large model output information.
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }

        if (array_key_exists("TaskOutput",$param) and $param["TaskOutput"] !== null) {
            $this->TaskOutput = $param["TaskOutput"];
        }

        if (array_key_exists("FailMessage",$param) and $param["FailMessage"] !== null) {
            $this->FailMessage = $param["FailMessage"];
        }

        if (array_key_exists("CostMilliSeconds",$param) and $param["CostMilliSeconds"] !== null) {
            $this->CostMilliSeconds = $param["CostMilliSeconds"];
        }

        if (array_key_exists("StatisticInfos",$param) and $param["StatisticInfos"] !== null) {
            $this->StatisticInfos = [];
            foreach ($param["StatisticInfos"] as $key => $value){
                $obj = new StatisticInfo();
                $obj->deserialize($value);
                array_push($this->StatisticInfos, $obj);
            }
        }
    }
}
