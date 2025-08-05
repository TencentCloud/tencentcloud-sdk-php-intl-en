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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * JavaScript injection rule.
 *
 * @method string getRuleId() Obtain Rule ID.
 * @method void setRuleId(string $RuleId) Set Rule ID.
 * @method string getName() Obtain Rule name
 * @method void setName(string $Name) Set Rule name
 * @method integer getPriority() Obtain Rule priority. a smaller value indicates higher priority execution. value range: 0-100. default value is 0.
 * @method void setPriority(integer $Priority) Set Rule priority. a smaller value indicates higher priority execution. value range: 0-100. default value is 0.
 * @method string getCondition() Obtain Specifies the match condition content, which must comply with the expression grammar. please refer to the product document for detailed requirements.
 * @method void setCondition(string $Condition) Set Specifies the match condition content, which must comply with the expression grammar. please refer to the product document for detailed requirements.
 * @method string getInjectJS() Obtain JavaScript injection option. default value: run-attestations. valid values:.
<li>no-injection: specifies not to inject JavaScript.</li>.
<li>inject-sdk-only: injects sdks for all currently supported authentication methods. currently supported: TC-RCE and TC-CAPTCHA. note: to execute authentication detection, configure challenge rules.</li>.

 * @method void setInjectJS(string $InjectJS) Set JavaScript injection option. default value: run-attestations. valid values:.
<li>no-injection: specifies not to inject JavaScript.</li>.
<li>inject-sdk-only: injects sdks for all currently supported authentication methods. currently supported: TC-RCE and TC-CAPTCHA. note: to execute authentication detection, configure challenge rules.</li>.
 */
class JSInjectionRule extends AbstractModel
{
    /**
     * @var string Rule ID.
     */
    public $RuleId;

    /**
     * @var string Rule name
     */
    public $Name;

    /**
     * @var integer Rule priority. a smaller value indicates higher priority execution. value range: 0-100. default value is 0.
     */
    public $Priority;

    /**
     * @var string Specifies the match condition content, which must comply with the expression grammar. please refer to the product document for detailed requirements.
     */
    public $Condition;

    /**
     * @var string JavaScript injection option. default value: run-attestations. valid values:.
<li>no-injection: specifies not to inject JavaScript.</li>.
<li>inject-sdk-only: injects sdks for all currently supported authentication methods. currently supported: TC-RCE and TC-CAPTCHA. note: to execute authentication detection, configure challenge rules.</li>.

     */
    public $InjectJS;

    /**
     * @param string $RuleId Rule ID.
     * @param string $Name Rule name
     * @param integer $Priority Rule priority. a smaller value indicates higher priority execution. value range: 0-100. default value is 0.
     * @param string $Condition Specifies the match condition content, which must comply with the expression grammar. please refer to the product document for detailed requirements.
     * @param string $InjectJS JavaScript injection option. default value: run-attestations. valid values:.
<li>no-injection: specifies not to inject JavaScript.</li>.
<li>inject-sdk-only: injects sdks for all currently supported authentication methods. currently supported: TC-RCE and TC-CAPTCHA. note: to execute authentication detection, configure challenge rules.</li>.
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("InjectJS",$param) and $param["InjectJS"] !== null) {
            $this->InjectJS = $param["InjectJS"];
        }
    }
}
