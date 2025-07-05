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
 * AddEditAccessControlRule request structure.
 *
 * @method AccessControlRuleInfo getRuleInfo() Obtain Information of the added policy. The policy ID is empty here but cannot be empty when you edit a policy.
 * @method void setRuleInfo(AccessControlRuleInfo $RuleInfo) Set Information of the added policy. The policy ID is empty here but cannot be empty when you edit a policy.
 * @method string getEventId() Obtain Used only for an allowed item
 * @method void setEventId(string $EventId) Set Used only for an allowed item
 */
class AddEditAccessControlRuleRequest extends AbstractModel
{
    /**
     * @var AccessControlRuleInfo Information of the added policy. The policy ID is empty here but cannot be empty when you edit a policy.
     */
    public $RuleInfo;

    /**
     * @var string Used only for an allowed item
     */
    public $EventId;

    /**
     * @param AccessControlRuleInfo $RuleInfo Information of the added policy. The policy ID is empty here but cannot be empty when you edit a policy.
     * @param string $EventId Used only for an allowed item
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
        if (array_key_exists("RuleInfo",$param) and $param["RuleInfo"] !== null) {
            $this->RuleInfo = new AccessControlRuleInfo();
            $this->RuleInfo->deserialize($param["RuleInfo"]);
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }
    }
}
