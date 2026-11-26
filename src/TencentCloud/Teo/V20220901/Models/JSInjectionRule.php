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
 * @method string getName() Obtain Rule name.
 * @method void setName(string $Name) Set Rule name.
 * @method integer getPriority() Obtain Rule priority. A smaller value indicates higher priority. Value range: 0-100. Default value: 0.
 * @method void setPriority(integer $Priority) Set Rule priority. A smaller value indicates higher priority. Value range: 0-100. Default value: 0.
 * @method string getCondition() Obtain Match condition content. It must comply with the expression syntax. For detailed specifications, see the product document.
 * @method void setCondition(string $Condition) Set Match condition content. It must comply with the expression syntax. For detailed specifications, see the product document.
 * @method string getInjectJS() Obtain JavaScript injection options. Default value: run-attestations. Valid values:
<li> no-injection: Do not inject JavaScript;</li>
<li> inject-sdk-only: Inject the SDKs of all currently supported authentication methods, including TC-RCE and TC-CAPTCHA. Note: To execute authentication detection, configure challenge rules.</li>

 * @method void setInjectJS(string $InjectJS) Set JavaScript injection options. Default value: run-attestations. Valid values:
<li> no-injection: Do not inject JavaScript;</li>
<li> inject-sdk-only: Inject the SDKs of all currently supported authentication methods, including TC-RCE and TC-CAPTCHA. Note: To execute authentication detection, configure challenge rules.</li>
 */
class JSInjectionRule extends AbstractModel
{
    /**
     * @var string Rule ID.
     */
    public $RuleId;

    /**
     * @var string Rule name.
     */
    public $Name;

    /**
     * @var integer Rule priority. A smaller value indicates higher priority. Value range: 0-100. Default value: 0.
     */
    public $Priority;

    /**
     * @var string Match condition content. It must comply with the expression syntax. For detailed specifications, see the product document.
     */
    public $Condition;

    /**
     * @var string JavaScript injection options. Default value: run-attestations. Valid values:
<li> no-injection: Do not inject JavaScript;</li>
<li> inject-sdk-only: Inject the SDKs of all currently supported authentication methods, including TC-RCE and TC-CAPTCHA. Note: To execute authentication detection, configure challenge rules.</li>

     */
    public $InjectJS;

    /**
     * @param string $RuleId Rule ID.
     * @param string $Name Rule name.
     * @param integer $Priority Rule priority. A smaller value indicates higher priority. Value range: 0-100. Default value: 0.
     * @param string $Condition Match condition content. It must comply with the expression syntax. For detailed specifications, see the product document.
     * @param string $InjectJS JavaScript injection options. Default value: run-attestations. Valid values:
<li> no-injection: Do not inject JavaScript;</li>
<li> inject-sdk-only: Inject the SDKs of all currently supported authentication methods, including TC-RCE and TC-CAPTCHA. Note: To execute authentication detection, configure challenge rules.</li>
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
