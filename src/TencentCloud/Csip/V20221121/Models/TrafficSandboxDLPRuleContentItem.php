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
 * DLP rule content. The sub-rule ID is managed internally by the server and not exposed to the public. The application scope is applied to all scopes by the backend by default.
 *
 * @method string getRuleName() Obtain Sub-rule name
Input parameter limit: length 1–128
 * @method void setRuleName(string $RuleName) Set Sub-rule name
Input parameter limit: length 1–128
 * @method string getRuleContent() Obtain Rule content
Input parameter limit: regex, maximum length: 2048
 * @method void setRuleContent(string $RuleContent) Set Rule content
Input parameter limit: regex, maximum length: 2048
 */
class TrafficSandboxDLPRuleContentItem extends AbstractModel
{
    /**
     * @var string Sub-rule name
Input parameter limit: length 1–128
     */
    public $RuleName;

    /**
     * @var string Rule content
Input parameter limit: regex, maximum length: 2048
     */
    public $RuleContent;

    /**
     * @param string $RuleName Sub-rule name
Input parameter limit: length 1–128
     * @param string $RuleContent Rule content
Input parameter limit: regex, maximum length: 2048
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleContent",$param) and $param["RuleContent"] !== null) {
            $this->RuleContent = $param["RuleContent"];
        }
    }
}
