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
 * Image understanding task.
 *
 * @method string getModel() Obtain <p>Image understanding model</p><p>Enumeration values:</p><ul><li>understand-1.0-lite: Lightweight understanding model</li><li>understand-1.0-flash: Quality-speed balanced understanding model</li><li>understand-1.0-pro: High-quality understanding model</li></ul>
 * @method void setModel(string $Model) Set <p>Image understanding model</p><p>Enumeration values:</p><ul><li>understand-1.0-lite: Lightweight understanding model</li><li>understand-1.0-flash: Quality-speed balanced understanding model</li><li>understand-1.0-pro: High-quality understanding model</li></ul>
 * @method string getPrompt() Obtain <p>Image understanding instruction</p>
 * @method void setPrompt(string $Prompt) Set <p>Image understanding instruction</p>
 * @method string getParameters() Obtain <p>Image understanding model parameters, of JSON string type.</p>
 * @method void setParameters(string $Parameters) Set <p>Image understanding model parameters, of JSON string type.</p>
 */
class UnderstandImageConfig extends AbstractModel
{
    /**
     * @var string <p>Image understanding model</p><p>Enumeration values:</p><ul><li>understand-1.0-lite: Lightweight understanding model</li><li>understand-1.0-flash: Quality-speed balanced understanding model</li><li>understand-1.0-pro: High-quality understanding model</li></ul>
     */
    public $Model;

    /**
     * @var string <p>Image understanding instruction</p>
     */
    public $Prompt;

    /**
     * @var string <p>Image understanding model parameters, of JSON string type.</p>
     */
    public $Parameters;

    /**
     * @param string $Model <p>Image understanding model</p><p>Enumeration values:</p><ul><li>understand-1.0-lite: Lightweight understanding model</li><li>understand-1.0-flash: Quality-speed balanced understanding model</li><li>understand-1.0-pro: High-quality understanding model</li></ul>
     * @param string $Prompt <p>Image understanding instruction</p>
     * @param string $Parameters <p>Image understanding model parameters, of JSON string type.</p>
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }
    }
}
