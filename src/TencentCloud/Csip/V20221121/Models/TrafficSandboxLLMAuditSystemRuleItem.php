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
 * LLM audit system sub-rule (LLM audit system rule)
 *
 * @method string getRuleID() Obtain LLM audit system rule ID (string)
 * @method void setRuleID(string $RuleID) Set LLM audit system rule ID (string)
 * @method string getRuleName() Obtain Rule name
 * @method void setRuleName(string $RuleName) Set Rule name
 * @method string getDescription() Obtain Rule description
 * @method void setDescription(string $Description) Set Rule description
 */
class TrafficSandboxLLMAuditSystemRuleItem extends AbstractModel
{
    /**
     * @var string LLM audit system rule ID (string)
     */
    public $RuleID;

    /**
     * @var string Rule name
     */
    public $RuleName;

    /**
     * @var string Rule description
     */
    public $Description;

    /**
     * @param string $RuleID LLM audit system rule ID (string)
     * @param string $RuleName Rule name
     * @param string $Description Rule description
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
