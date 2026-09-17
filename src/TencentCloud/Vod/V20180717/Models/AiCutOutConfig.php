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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getSwitch() Obtain 
 * @method void setSwitch(string $Switch) Set 
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 * @method PatternConfig getPatternConfig() Obtain 
 * @method void setPatternConfig(PatternConfig $PatternConfig) Set 
 * @method string getModel() Obtain 
 * @method void setModel(string $Model) Set 
 */
class AiCutOutConfig extends AbstractModel
{
    /**
     * @var string 
     */
    public $Switch;

    /**
     * @var string 
     */
    public $Type;

    /**
     * @var PatternConfig 
     */
    public $PatternConfig;

    /**
     * @var string 
     */
    public $Model;

    /**
     * @param string $Switch 
     * @param string $Type 
     * @param PatternConfig $PatternConfig 
     * @param string $Model 
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
