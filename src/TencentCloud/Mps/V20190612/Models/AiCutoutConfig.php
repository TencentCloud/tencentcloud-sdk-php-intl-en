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
 * Intelligent image masking configuration.
 *
 * @method string getSwitch() Obtain <p>Capability configuration switch, available values: ON: Enable; OFF: Disable. Default value: ON.</p>
 * @method void setSwitch(string $Switch) Set <p>Capability configuration switch, available values: ON: Enable; OFF: Disable. Default value: ON.</p>
 * @method string getType() Obtain <p>Target type: "foreground" (default) / "pattern"</p>
 * @method void setType(string $Type) Set <p>Target type: "foreground" (default) / "pattern"</p>
 * @method PatternConfig getPatternConfig() Obtain <p>Pattern matting configuration. This parameter is valid only when Type is pattern.</p>
 * @method void setPatternConfig(PatternConfig $PatternConfig) Set <p>Pattern matting configuration. This parameter is valid only when Type is pattern.</p>
 * @method string getModel() Obtain <p>Cutout model selection, optional.</p><p>Enumeration value:</p><ul><li>auto: Automatically choose appropriate model</li><li>WAND-cutout-1.0-lite: Standard version, fastest speed</li><li>WAND-cutout-2.0-lite: Enhanced, fastest speed</li><li>WAND-cutout-2.0-flash: Enhanced, quality-speed balance</li></ul>
 * @method void setModel(string $Model) Set <p>Cutout model selection, optional.</p><p>Enumeration value:</p><ul><li>auto: Automatically choose appropriate model</li><li>WAND-cutout-1.0-lite: Standard version, fastest speed</li><li>WAND-cutout-2.0-lite: Enhanced, fastest speed</li><li>WAND-cutout-2.0-flash: Enhanced, quality-speed balance</li></ul>
 */
class AiCutoutConfig extends AbstractModel
{
    /**
     * @var string <p>Capability configuration switch, available values: ON: Enable; OFF: Disable. Default value: ON.</p>
     */
    public $Switch;

    /**
     * @var string <p>Target type: "foreground" (default) / "pattern"</p>
     */
    public $Type;

    /**
     * @var PatternConfig <p>Pattern matting configuration. This parameter is valid only when Type is pattern.</p>
     */
    public $PatternConfig;

    /**
     * @var string <p>Cutout model selection, optional.</p><p>Enumeration value:</p><ul><li>auto: Automatically choose appropriate model</li><li>WAND-cutout-1.0-lite: Standard version, fastest speed</li><li>WAND-cutout-2.0-lite: Enhanced, fastest speed</li><li>WAND-cutout-2.0-flash: Enhanced, quality-speed balance</li></ul>
     */
    public $Model;

    /**
     * @param string $Switch <p>Capability configuration switch, available values: ON: Enable; OFF: Disable. Default value: ON.</p>
     * @param string $Type <p>Target type: "foreground" (default) / "pattern"</p>
     * @param PatternConfig $PatternConfig <p>Pattern matting configuration. This parameter is valid only when Type is pattern.</p>
     * @param string $Model <p>Cutout model selection, optional.</p><p>Enumeration value:</p><ul><li>auto: Automatically choose appropriate model</li><li>WAND-cutout-1.0-lite: Standard version, fastest speed</li><li>WAND-cutout-2.0-lite: Enhanced, fastest speed</li><li>WAND-cutout-2.0-flash: Enhanced, quality-speed balance</li></ul>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PatternConfig",$param) and $param["PatternConfig"] !== null) {
            $this->PatternConfig = new PatternConfig();
            $this->PatternConfig->deserialize($param["PatternConfig"]);
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }
    }
}
