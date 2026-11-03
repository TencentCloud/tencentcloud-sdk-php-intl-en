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
 * Item configuration of a managed rule
 *
 * @method string getRuleId() Obtain Specific item under the managed rule group, used for rewriting the configuration content of this individual rule. For details, refer to the product documentation.	
 * @method void setRuleId(string $RuleId) Set Specific item under the managed rule group, used for rewriting the configuration content of this individual rule. For details, refer to the product documentation.	
 * @method SecurityAction getAction() Obtain Specifies the handling action for the managed rule item in RuleId. Supported values for SecurityAction Name: <li>Deny: Block. Responds with an interception page.</li><li>Monitor: Observe. Does not process the request but records security events in logs.</li><li>Disabled: Not enabled. Skips the rule without scanning requests.</li>
 * @method void setAction(SecurityAction $Action) Set Specifies the handling action for the managed rule item in RuleId. Supported values for SecurityAction Name: <li>Deny: Block. Responds with an interception page.</li><li>Monitor: Observe. Does not process the request but records security events in logs.</li><li>Disabled: Not enabled. Skips the rule without scanning requests.</li>
 */
class ManagedRuleAction extends AbstractModel
{
    /**
     * @var string Specific item under the managed rule group, used for rewriting the configuration content of this individual rule. For details, refer to the product documentation.	
     */
    public $RuleId;

    /**
     * @var SecurityAction Specifies the handling action for the managed rule item in RuleId. Supported values for SecurityAction Name: <li>Deny: Block. Responds with an interception page.</li><li>Monitor: Observe. Does not process the request but records security events in logs.</li><li>Disabled: Not enabled. Skips the rule without scanning requests.</li>
     */
    public $Action;

    /**
     * @param string $RuleId Specific item under the managed rule group, used for rewriting the configuration content of this individual rule. For details, refer to the product documentation.	
     * @param SecurityAction $Action Specifies the handling action for the managed rule item in RuleId. Supported values for SecurityAction Name: <li>Deny: Block. Responds with an interception page.</li><li>Monitor: Observe. Does not process the request but records security events in logs.</li><li>Disabled: Not enabled. Skips the rule without scanning requests.</li>
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

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new SecurityAction();
            $this->Action->deserialize($param["Action"]);
        }
    }
}
