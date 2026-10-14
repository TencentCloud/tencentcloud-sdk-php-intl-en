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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Intelligent layer split configuration.
 *
 * @method string getSwitch() Obtain <p>Capability configuration switch.</p><p>Enumeration values: </p><ul><li>ON: Enable the layer separation feature.</li><li>OFF: Disable the layer separation feature.</li></ul><p>Default value: ON</p>
 * @method void setSwitch(string $Switch) Set <p>Capability configuration switch.</p><p>Enumeration values: </p><ul><li>ON: Enable the layer separation feature.</li><li>OFF: Disable the layer separation feature.</li></ul><p>Default value: ON</p>
 * @method integer getLayers() Obtain <p>Expected number of layers.</p><p>Value range: [2, 17]</p>
 * @method void setLayers(integer $Layers) Set <p>Expected number of layers.</p><p>Value range: [2, 17]</p>
 * @method string getPrompt() Obtain <p>Prompt content.</p>
 * @method void setPrompt(string $Prompt) Set <p>Prompt content.</p>
 * @method string getModel() Obtain <p>Model name.</p><p>Enumeration value:</p><ul><li>decompose-1.0-flash: 1.0 version flash model.</li></ul>
 * @method void setModel(string $Model) Set <p>Model name.</p><p>Enumeration value:</p><ul><li>decompose-1.0-flash: 1.0 version flash model.</li></ul>
 */
class AiDecomposeConfig extends AbstractModel
{
    /**
     * @var string <p>Capability configuration switch.</p><p>Enumeration values: </p><ul><li>ON: Enable the layer separation feature.</li><li>OFF: Disable the layer separation feature.</li></ul><p>Default value: ON</p>
     */
    public $Switch;

    /**
     * @var integer <p>Expected number of layers.</p><p>Value range: [2, 17]</p>
     */
    public $Layers;

    /**
     * @var string <p>Prompt content.</p>
     */
    public $Prompt;

    /**
     * @var string <p>Model name.</p><p>Enumeration value:</p><ul><li>decompose-1.0-flash: 1.0 version flash model.</li></ul>
     */
    public $Model;

    /**
     * @param string $Switch <p>Capability configuration switch.</p><p>Enumeration values: </p><ul><li>ON: Enable the layer separation feature.</li><li>OFF: Disable the layer separation feature.</li></ul><p>Default value: ON</p>
     * @param integer $Layers <p>Expected number of layers.</p><p>Value range: [2, 17]</p>
     * @param string $Prompt <p>Prompt content.</p>
     * @param string $Model <p>Model name.</p><p>Enumeration value:</p><ul><li>decompose-1.0-flash: 1.0 version flash model.</li></ul>
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Layers",$param) and $param["Layers"] !== null) {
            $this->Layers = $param["Layers"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }
    }
}
