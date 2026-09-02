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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Reference item of the LLM audit system rule in the LLM audit rule
 *
 * @method string getSystemRuleID() Obtain LLM audit system rule ID (string)
 * @method void setSystemRuleID(string $SystemRuleID) Set LLM audit system rule ID (string)
 * @method string getSystemRuleName() Obtain LLM audit system rule name
 * @method void setSystemRuleName(string $SystemRuleName) Set LLM audit system rule name
 */
class TrafficSandboxLLMAuditRuleRef extends AbstractModel
{
    /**
     * @var string LLM audit system rule ID (string)
     */
    public $SystemRuleID;

    /**
     * @var string LLM audit system rule name
     */
    public $SystemRuleName;

    /**
     * @param string $SystemRuleID LLM audit system rule ID (string)
     * @param string $SystemRuleName LLM audit system rule name
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
        if (array_key_exists("SystemRuleID",$param) and $param["SystemRuleID"] !== null) {
            $this->SystemRuleID = $param["SystemRuleID"];
        }

        if (array_key_exists("SystemRuleName",$param) and $param["SystemRuleName"] !== null) {
            $this->SystemRuleName = $param["SystemRuleName"];
        }
    }
}
