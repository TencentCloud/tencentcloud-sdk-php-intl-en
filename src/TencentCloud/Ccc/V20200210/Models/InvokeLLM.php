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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Service invocation actively initiates requests to the LLM.
 *
 * @method string getContent() Obtain Specifies the content of the LLM request.
 * @method void setContent(string $Content) Set Specifies the content of the LLM request.
 * @method boolean getInterrupt() Obtain Whether the text is allowed to interrupt the robot speaking.
 * @method void setInterrupt(boolean $Interrupt) Set Whether the text is allowed to interrupt the robot speaking.
 */
class InvokeLLM extends AbstractModel
{
    /**
     * @var string Specifies the content of the LLM request.
     */
    public $Content;

    /**
     * @var boolean Whether the text is allowed to interrupt the robot speaking.
     */
    public $Interrupt;

    /**
     * @param string $Content Specifies the content of the LLM request.
     * @param boolean $Interrupt Whether the text is allowed to interrupt the robot speaking.
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Interrupt",$param) and $param["Interrupt"] !== null) {
            $this->Interrupt = $param["Interrupt"];
        }
    }
}
