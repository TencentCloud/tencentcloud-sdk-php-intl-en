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
 * Web security exception rule.
 *
 * @method string getId() Obtain The ID of the exception rule. different rule configuration operations are supported by rule ID: <li> <b>add</b> a new rule: leave the ID empty or do not specify the ID parameter.</li> <li> <b>modify</b> an existing rule: specify the rule ID that needs to be updated/modified.</li> <li> <b>delete</b> an existing rule: existing Rules not included in the Rules list under the ExceptionRules parameter will be deleted.</li>.
 * @method void setId(string $Id) Set The ID of the exception rule. different rule configuration operations are supported by rule ID: <li> <b>add</b> a new rule: leave the ID empty or do not specify the ID parameter.</li> <li> <b>modify</b> an existing rule: specify the rule ID that needs to be updated/modified.</li> <li> <b>delete</b> an existing rule: existing Rules not included in the Rules list under the ExceptionRules parameter will be deleted.</li>.
 * @method string getName() Obtain The name of the exception rule.
 * @method void setName(string $Name) Set The name of the exception rule.
 * @method string getCondition() Obtain Describes the specific content of the exception rule, which must comply with the expression grammar. for details, please refer to the product document.
 * @method void setCondition(string $Condition) Set Describes the specific content of the exception rule, which must comply with the expression grammar. for details, please refer to the product document.
 * @method string getSkipScope() Obtain Exception rule execution options, valid values: <li>WebSecurityModules: designate the security protection module for the exception rule.</li> <li>ManagedRules: designate the managed rule.</li>.
 * @method void setSkipScope(string $SkipScope) Set Exception rule execution options, valid values: <li>WebSecurityModules: designate the security protection module for the exception rule.</li> <li>ManagedRules: designate the managed rule.</li>.
 * @method string getSkipOption() Obtain Skip the specific type of request. valid values: <li>SkipOnAllRequestFields: skip all requests;</li> <li>SkipOnSpecifiedRequestFields: skip specified request fields.</li> valid only when SkipScope is ManagedRules.
 * @method void setSkipOption(string $SkipOption) Set Skip the specific type of request. valid values: <li>SkipOnAllRequestFields: skip all requests;</li> <li>SkipOnSpecifiedRequestFields: skip specified request fields.</li> valid only when SkipScope is ManagedRules.
 * @method array getWebSecurityModulesForException() Obtain Specifies the security protection module for exception rules. valid only when SkipScope is WebSecurityModules. valid values: <li>websec-mod-managed-rules: managed rule.</li><li>websec-mod-rate-limiting: rate limit.</li><li>websec-mod-custom-rules: custom rule.</li><li>websec-mod-adaptive-control: adaptive frequency control, intelligent client filtering, slow attack protection, traffic theft protection.</li><li>websec-mod-bot: bot management.</li>.
 * @method void setWebSecurityModulesForException(array $WebSecurityModulesForException) Set Specifies the security protection module for exception rules. valid only when SkipScope is WebSecurityModules. valid values: <li>websec-mod-managed-rules: managed rule.</li><li>websec-mod-rate-limiting: rate limit.</li><li>websec-mod-custom-rules: custom rule.</li><li>websec-mod-adaptive-control: adaptive frequency control, intelligent client filtering, slow attack protection, traffic theft protection.</li><li>websec-mod-bot: bot management.</li>.
 * @method array getManagedRulesForException() Obtain Specifies the managed rule for the exception rule. valid only when SkipScope is ManagedRules. cannot specify ManagedRuleGroupsForException at this time.
 * @method void setManagedRulesForException(array $ManagedRulesForException) Set Specifies the managed rule for the exception rule. valid only when SkipScope is ManagedRules. cannot specify ManagedRuleGroupsForException at this time.
 * @method array getManagedRuleGroupsForException() Obtain A managed rule group with designated exception rules is valid only when SkipScope is ManagedRules, and at this point you cannot specify ManagedRulesForException.
 * @method void setManagedRuleGroupsForException(array $ManagedRuleGroupsForException) Set A managed rule group with designated exception rules is valid only when SkipScope is ManagedRules, and at this point you cannot specify ManagedRulesForException.
 * @method array getRequestFieldsForException() Obtain Specify exception rules to skip request fields. valid only when SkipScope is ManagedRules and SkipOption is SkipOnSpecifiedRequestFields.
 * @method void setRequestFieldsForException(array $RequestFieldsForException) Set Specify exception rules to skip request fields. valid only when SkipScope is ManagedRules and SkipOption is SkipOnSpecifiedRequestFields.
 * @method string getEnabled() Obtain Whether the exception rule is enabled. valid values: <li>`on`: enable</li> <li>`off`: disable</li>.
 * @method void setEnabled(string $Enabled) Set Whether the exception rule is enabled. valid values: <li>`on`: enable</li> <li>`off`: disable</li>.
 */
class ExceptionRule extends AbstractModel
{
    /**
     * @var string The ID of the exception rule. different rule configuration operations are supported by rule ID: <li> <b>add</b> a new rule: leave the ID empty or do not specify the ID parameter.</li> <li> <b>modify</b> an existing rule: specify the rule ID that needs to be updated/modified.</li> <li> <b>delete</b> an existing rule: existing Rules not included in the Rules list under the ExceptionRules parameter will be deleted.</li>.
     */
    public $Id;

    /**
     * @var string The name of the exception rule.
     */
    public $Name;

    /**
     * @var string Describes the specific content of the exception rule, which must comply with the expression grammar. for details, please refer to the product document.
     */
    public $Condition;

    /**
     * @var string Exception rule execution options, valid values: <li>WebSecurityModules: designate the security protection module for the exception rule.</li> <li>ManagedRules: designate the managed rule.</li>.
     */
    public $SkipScope;

    /**
     * @var string Skip the specific type of request. valid values: <li>SkipOnAllRequestFields: skip all requests;</li> <li>SkipOnSpecifiedRequestFields: skip specified request fields.</li> valid only when SkipScope is ManagedRules.
     */
    public $SkipOption;

    /**
     * @var array Specifies the security protection module for exception rules. valid only when SkipScope is WebSecurityModules. valid values: <li>websec-mod-managed-rules: managed rule.</li><li>websec-mod-rate-limiting: rate limit.</li><li>websec-mod-custom-rules: custom rule.</li><li>websec-mod-adaptive-control: adaptive frequency control, intelligent client filtering, slow attack protection, traffic theft protection.</li><li>websec-mod-bot: bot management.</li>.
     */
    public $WebSecurityModulesForException;

    /**
     * @var array Specifies the managed rule for the exception rule. valid only when SkipScope is ManagedRules. cannot specify ManagedRuleGroupsForException at this time.
     */
    public $ManagedRulesForException;

    /**
     * @var array A managed rule group with designated exception rules is valid only when SkipScope is ManagedRules, and at this point you cannot specify ManagedRulesForException.
     */
    public $ManagedRuleGroupsForException;

    /**
     * @var array Specify exception rules to skip request fields. valid only when SkipScope is ManagedRules and SkipOption is SkipOnSpecifiedRequestFields.
     */
    public $RequestFieldsForException;

    /**
     * @var string Whether the exception rule is enabled. valid values: <li>`on`: enable</li> <li>`off`: disable</li>.
     */
    public $Enabled;

    /**
     * @param string $Id The ID of the exception rule. different rule configuration operations are supported by rule ID: <li> <b>add</b> a new rule: leave the ID empty or do not specify the ID parameter.</li> <li> <b>modify</b> an existing rule: specify the rule ID that needs to be updated/modified.</li> <li> <b>delete</b> an existing rule: existing Rules not included in the Rules list under the ExceptionRules parameter will be deleted.</li>.
     * @param string $Name The name of the exception rule.
     * @param string $Condition Describes the specific content of the exception rule, which must comply with the expression grammar. for details, please refer to the product document.
     * @param string $SkipScope Exception rule execution options, valid values: <li>WebSecurityModules: designate the security protection module for the exception rule.</li> <li>ManagedRules: designate the managed rule.</li>.
     * @param string $SkipOption Skip the specific type of request. valid values: <li>SkipOnAllRequestFields: skip all requests;</li> <li>SkipOnSpecifiedRequestFields: skip specified request fields.</li> valid only when SkipScope is ManagedRules.
     * @param array $WebSecurityModulesForException Specifies the security protection module for exception rules. valid only when SkipScope is WebSecurityModules. valid values: <li>websec-mod-managed-rules: managed rule.</li><li>websec-mod-rate-limiting: rate limit.</li><li>websec-mod-custom-rules: custom rule.</li><li>websec-mod-adaptive-control: adaptive frequency control, intelligent client filtering, slow attack protection, traffic theft protection.</li><li>websec-mod-bot: bot management.</li>.
     * @param array $ManagedRulesForException Specifies the managed rule for the exception rule. valid only when SkipScope is ManagedRules. cannot specify ManagedRuleGroupsForException at this time.
     * @param array $ManagedRuleGroupsForException A managed rule group with designated exception rules is valid only when SkipScope is ManagedRules, and at this point you cannot specify ManagedRulesForException.
     * @param array $RequestFieldsForException Specify exception rules to skip request fields. valid only when SkipScope is ManagedRules and SkipOption is SkipOnSpecifiedRequestFields.
     * @param string $Enabled Whether the exception rule is enabled. valid values: <li>`on`: enable</li> <li>`off`: disable</li>.
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("SkipScope",$param) and $param["SkipScope"] !== null) {
            $this->SkipScope = $param["SkipScope"];
        }

        if (array_key_exists("SkipOption",$param) and $param["SkipOption"] !== null) {
            $this->SkipOption = $param["SkipOption"];
        }

        if (array_key_exists("WebSecurityModulesForException",$param) and $param["WebSecurityModulesForException"] !== null) {
            $this->WebSecurityModulesForException = $param["WebSecurityModulesForException"];
        }

        if (array_key_exists("ManagedRulesForException",$param) and $param["ManagedRulesForException"] !== null) {
            $this->ManagedRulesForException = $param["ManagedRulesForException"];
        }

        if (array_key_exists("ManagedRuleGroupsForException",$param) and $param["ManagedRuleGroupsForException"] !== null) {
            $this->ManagedRuleGroupsForException = $param["ManagedRuleGroupsForException"];
        }

        if (array_key_exists("RequestFieldsForException",$param) and $param["RequestFieldsForException"] !== null) {
            $this->RequestFieldsForException = [];
            foreach ($param["RequestFieldsForException"] as $key => $value){
                $obj = new RequestFieldsForException();
                $obj->deserialize($value);
                array_push($this->RequestFieldsForException, $obj);
            }
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
