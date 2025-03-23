<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * Action for specific RuleId.
 *
 * @method string getRuleId() Obtain Specific items under ManagedRuleGroup, used to rewrite the configuration of this individual rule item, refer to product documentation for details.	
 * @method void setRuleId(string $RuleId) Set Specific items under ManagedRuleGroup, used to rewrite the configuration of this individual rule item, refer to product documentation for details.	
 * @method SecurityAction getAction() Obtain Action for the managed rule item specified by RuleId, the SecurityAction Name parameter supports: <li>`Deny`: block and respond with an block page;</li> <li>`Monitor`: observe, do not process the request and record the security event in logs;</li> <li>`Disabled`: disabled, do not scan the request and skip this rule.</li>.
 * @method void setAction(SecurityAction $Action) Set Action for the managed rule item specified by RuleId, the SecurityAction Name parameter supports: <li>`Deny`: block and respond with an block page;</li> <li>`Monitor`: observe, do not process the request and record the security event in logs;</li> <li>`Disabled`: disabled, do not scan the request and skip this rule.</li>.
 */
class ManagedRuleAction extends AbstractModel
{
    /**
     * @var string Specific items under ManagedRuleGroup, used to rewrite the configuration of this individual rule item, refer to product documentation for details.	
     */
    public $RuleId;

    /**
     * @var SecurityAction Action for the managed rule item specified by RuleId, the SecurityAction Name parameter supports: <li>`Deny`: block and respond with an block page;</li> <li>`Monitor`: observe, do not process the request and record the security event in logs;</li> <li>`Disabled`: disabled, do not scan the request and skip this rule.</li>.
     */
    public $Action;

    /**
     * @param string $RuleId Specific items under ManagedRuleGroup, used to rewrite the configuration of this individual rule item, refer to product documentation for details.	
     * @param SecurityAction $Action Action for the managed rule item specified by RuleId, the SecurityAction Name parameter supports: <li>`Deny`: block and respond with an block page;</li> <li>`Monitor`: observe, do not process the request and record the security event in logs;</li> <li>`Disabled`: disabled, do not scan the request and skip this rule.</li>.
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
