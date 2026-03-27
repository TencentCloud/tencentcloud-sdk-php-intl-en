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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Agent Debugging Information
 *
 * @method string getInput() Obtain Input Information for Tools and Large Models, json
 * @method void setInput(string $Input) Set Input Information for Tools and Large Models, json
 * @method string getOutput() Obtain Output Information for Tools and Large Models, json
 * @method void setOutput(string $Output) Set Output Information for Tools and Large Models, json
 */
class AgentDebugInfo extends AbstractModel
{
    /**
     * @var string Input Information for Tools and Large Models, json
     */
    public $Input;

    /**
     * @var string Output Information for Tools and Large Models, json
     */
    public $Output;

    /**
     * @param string $Input Input Information for Tools and Large Models, json
     * @param string $Output Output Information for Tools and Large Models, json
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
        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }
    }
}
