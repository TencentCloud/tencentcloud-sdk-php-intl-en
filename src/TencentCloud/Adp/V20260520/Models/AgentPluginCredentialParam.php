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
 * Credential parameter configuration of the Agent plug-in (variable mode)
 *
 * @method integer getKeyLocation() Obtain <p>Parameter location</p><p>Enumeration values:</p><ul><li>0: Header authentication</li><li>1: Query authentication</li></ul>
 * @method void setKeyLocation(integer $KeyLocation) Set <p>Parameter location</p><p>Enumeration values:</p><ul><li>0: Header authentication</li><li>1: Query authentication</li></ul>
 * @method string getName() Obtain <p>Parameter name</p>
 * @method void setName(string $Name) Set <p>Parameter name</p>
 * @method AgentInput getInput() Obtain <p>Source of parameter value</p>
 * @method void setInput(AgentInput $Input) Set <p>Source of parameter value</p>
 */
class AgentPluginCredentialParam extends AbstractModel
{
    /**
     * @var integer <p>Parameter location</p><p>Enumeration values:</p><ul><li>0: Header authentication</li><li>1: Query authentication</li></ul>
     */
    public $KeyLocation;

    /**
     * @var string <p>Parameter name</p>
     */
    public $Name;

    /**
     * @var AgentInput <p>Source of parameter value</p>
     */
    public $Input;

    /**
     * @param integer $KeyLocation <p>Parameter location</p><p>Enumeration values:</p><ul><li>0: Header authentication</li><li>1: Query authentication</li></ul>
     * @param string $Name <p>Parameter name</p>
     * @param AgentInput $Input <p>Source of parameter value</p>
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
        if (array_key_exists("KeyLocation",$param) and $param["KeyLocation"] !== null) {
            $this->KeyLocation = $param["KeyLocation"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new AgentInput();
            $this->Input->deserialize($param["Input"]);
        }
    }
}
