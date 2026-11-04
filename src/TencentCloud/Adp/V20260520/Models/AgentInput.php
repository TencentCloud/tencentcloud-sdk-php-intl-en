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
 * Agent input value. Supports direct assignment and reference.
 *
 * @method integer getInputType() Obtain <p>Input source type: 0 user input, 3 custom variable (API parameter)</p>
 * @method void setInputType(integer $InputType) Set <p>Input source type: 0 user input, 3 custom variable (API parameter)</p>
 * @method AgentUserInputValue getUserInputValue() Obtain <p>User handwriting input</p>
 * @method void setUserInputValue(AgentUserInputValue $UserInputValue) Set <p>User handwriting input</p>
 * @method AgentSystemVariable getSystemVariable() Obtain <p>System parameter</p>
 * @method void setSystemVariable(AgentSystemVariable $SystemVariable) Set <p>System parameter</p>
 * @method string getCustomVariableId() Obtain <p>Custom Variable (API parameter)</p>
 * @method void setCustomVariableId(string $CustomVariableId) Set <p>Custom Variable (API parameter)</p>
 * @method string getEnvVariableId() Obtain <p>Environment variable parameter</p>
 * @method void setEnvVariableId(string $EnvVariableId) Set <p>Environment variable parameter</p>
 * @method string getAppVariableId() Obtain <p>Application variable parameters</p>
 * @method void setAppVariableId(string $AppVariableId) Set <p>Application variable parameters</p>
 */
class AgentInput extends AbstractModel
{
    /**
     * @var integer <p>Input source type: 0 user input, 3 custom variable (API parameter)</p>
     */
    public $InputType;

    /**
     * @var AgentUserInputValue <p>User handwriting input</p>
     */
    public $UserInputValue;

    /**
     * @var AgentSystemVariable <p>System parameter</p>
     */
    public $SystemVariable;

    /**
     * @var string <p>Custom Variable (API parameter)</p>
     */
    public $CustomVariableId;

    /**
     * @var string <p>Environment variable parameter</p>
     */
    public $EnvVariableId;

    /**
     * @var string <p>Application variable parameters</p>
     */
    public $AppVariableId;

    /**
     * @param integer $InputType <p>Input source type: 0 user input, 3 custom variable (API parameter)</p>
     * @param AgentUserInputValue $UserInputValue <p>User handwriting input</p>
     * @param AgentSystemVariable $SystemVariable <p>System parameter</p>
     * @param string $CustomVariableId <p>Custom Variable (API parameter)</p>
     * @param string $EnvVariableId <p>Environment variable parameter</p>
     * @param string $AppVariableId <p>Application variable parameters</p>
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
        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("UserInputValue",$param) and $param["UserInputValue"] !== null) {
            $this->UserInputValue = new AgentUserInputValue();
            $this->UserInputValue->deserialize($param["UserInputValue"]);
        }

        if (array_key_exists("SystemVariable",$param) and $param["SystemVariable"] !== null) {
            $this->SystemVariable = new AgentSystemVariable();
            $this->SystemVariable->deserialize($param["SystemVariable"]);
        }

        if (array_key_exists("CustomVariableId",$param) and $param["CustomVariableId"] !== null) {
            $this->CustomVariableId = $param["CustomVariableId"];
        }

        if (array_key_exists("EnvVariableId",$param) and $param["EnvVariableId"] !== null) {
            $this->EnvVariableId = $param["EnvVariableId"];
        }

        if (array_key_exists("AppVariableId",$param) and $param["AppVariableId"] !== null) {
            $this->AppVariableId = $param["AppVariableId"];
        }
    }
}
