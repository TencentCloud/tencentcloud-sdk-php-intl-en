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
 * 
 *
 * @method string getWorkflowId() Obtain 
 * @method void setWorkflowId(string $WorkflowId) Set 
 * @method string getWorkflowName() Obtain 
 * @method void setWorkflowName(string $WorkflowName) Set 
 * @method string getWorkflowRunId() Obtain 
 * @method void setWorkflowRunId(string $WorkflowRunId) Set 
 * @method array getOptionCards() Obtain 
 * @method void setOptionCards(array $OptionCards) Set 
 * @method array getOutputs() Obtain 
 * @method void setOutputs(array $Outputs) Set 
 * @method string getWorkflowReleaseTime() Obtain 
 * @method void setWorkflowReleaseTime(string $WorkflowReleaseTime) Set 
 */
class WorkflowInfo extends AbstractModel
{
    /**
     * @var string 
     */
    public $WorkflowId;

    /**
     * @var string 
     */
    public $WorkflowName;

    /**
     * @var string 
     */
    public $WorkflowRunId;

    /**
     * @var array 
     */
    public $OptionCards;

    /**
     * @var array 
     */
    public $Outputs;

    /**
     * @var string 
     */
    public $WorkflowReleaseTime;

    /**
     * @param string $WorkflowId 
     * @param string $WorkflowName 
     * @param string $WorkflowRunId 
     * @param array $OptionCards 
     * @param array $Outputs 
     * @param string $WorkflowReleaseTime 
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
