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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * K8s alarm types and corresponding descriptions.
 *
 * @method string getRuleType() Obtain <p>Rule type.</p><p>Enumeration values:</p><ul><li>&quot;rule_type&quot;: &quot;ABNORMAL_CREATE_POD&quot;,: suspicious container creation</li></ul>
 * @method void setRuleType(string $RuleType) Set <p>Rule type.</p><p>Enumeration values:</p><ul><li>&quot;rule_type&quot;: &quot;ABNORMAL_CREATE_POD&quot;,: suspicious container creation</li></ul>
 * @method string getRuleTypeZh() Obtain <p>Description of the rule type.</p>
 * @method void setRuleTypeZh(string $RuleTypeZh) Set <p>Description of the rule type.</p>
 */
class K8SAPIRuleTypeZhItem extends AbstractModel
{
    /**
     * @var string <p>Rule type.</p><p>Enumeration values:</p><ul><li>&quot;rule_type&quot;: &quot;ABNORMAL_CREATE_POD&quot;,: suspicious container creation</li></ul>
     */
    public $RuleType;

    /**
     * @var string <p>Description of the rule type.</p>
     */
    public $RuleTypeZh;

    /**
     * @param string $RuleType <p>Rule type.</p><p>Enumeration values:</p><ul><li>&quot;rule_type&quot;: &quot;ABNORMAL_CREATE_POD&quot;,: suspicious container creation</li></ul>
     * @param string $RuleTypeZh <p>Description of the rule type.</p>
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("RuleTypeZh",$param) and $param["RuleTypeZh"] !== null) {
            $this->RuleTypeZh = $param["RuleTypeZh"];
        }
    }
}
