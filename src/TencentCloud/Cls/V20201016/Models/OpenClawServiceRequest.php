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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * OpenClawService request structure.
 *
 * @method string getTag() Obtain <p>Tag type</p><p>Enumeration value:</p><ul><li>OpenClaw: OpenClaw type</li><li>ClawPro: ClawPro type</li></ul>
 * @method void setTag(string $Tag) Set <p>Tag type</p><p>Enumeration value:</p><ul><li>OpenClaw: OpenClaw type</li><li>ClawPro: ClawPro type</li></ul>
 * @method boolean getEnableTrace() Obtain <p>Whether to create a trace topic, default to false</p><p>Enumeration value:</p><ul><li>true: Creates a trace topic</li><li>false: Does not create a trace topic</li></ul>
 * @method void setEnableTrace(boolean $EnableTrace) Set <p>Whether to create a trace topic, default to false</p><p>Enumeration value:</p><ul><li>true: Creates a trace topic</li><li>false: Does not create a trace topic</li></ul>
 */
class OpenClawServiceRequest extends AbstractModel
{
    /**
     * @var string <p>Tag type</p><p>Enumeration value:</p><ul><li>OpenClaw: OpenClaw type</li><li>ClawPro: ClawPro type</li></ul>
     */
    public $Tag;

    /**
     * @var boolean <p>Whether to create a trace topic, default to false</p><p>Enumeration value:</p><ul><li>true: Creates a trace topic</li><li>false: Does not create a trace topic</li></ul>
     */
    public $EnableTrace;

    /**
     * @param string $Tag <p>Tag type</p><p>Enumeration value:</p><ul><li>OpenClaw: OpenClaw type</li><li>ClawPro: ClawPro type</li></ul>
     * @param boolean $EnableTrace <p>Whether to create a trace topic, default to false</p><p>Enumeration value:</p><ul><li>true: Creates a trace topic</li><li>false: Does not create a trace topic</li></ul>
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
        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("EnableTrace",$param) and $param["EnableTrace"] !== null) {
            $this->EnableTrace = $param["EnableTrace"];
        }
    }
}
