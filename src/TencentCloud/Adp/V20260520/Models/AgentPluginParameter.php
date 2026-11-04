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
 * Agent plug-in parameter configuration
 *
 * @method string getName() Obtain <p>Parameter name</p>
 * @method void setName(string $Name) Set <p>Parameter name</p>
 * @method boolean getIsRequired() Obtain <p>Required or not</p>
 * @method void setIsRequired(boolean $IsRequired) Set <p>Required or not</p>
 * @method AgentInput getInput() Obtain <p>Input value</p>
 * @method void setInput(AgentInput $Input) Set <p>Input value</p>
 */
class AgentPluginParameter extends AbstractModel
{
    /**
     * @var string <p>Parameter name</p>
     */
    public $Name;

    /**
     * @var boolean <p>Required or not</p>
     */
    public $IsRequired;

    /**
     * @var AgentInput <p>Input value</p>
     */
    public $Input;

    /**
     * @param string $Name <p>Parameter name</p>
     * @param boolean $IsRequired <p>Required or not</p>
     * @param AgentInput $Input <p>Input value</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IsRequired",$param) and $param["IsRequired"] !== null) {
            $this->IsRequired = $param["IsRequired"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new AgentInput();
            $this->Input->deserialize($param["Input"]);
        }
    }
}
