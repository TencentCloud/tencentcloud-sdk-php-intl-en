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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddEditAbnormalProcessRule request structure.
 *
 * @method AbnormalProcessRuleInfo getRuleInfo() Obtain Information of the added policy. The policy ID is empty here but cannot be empty when you edit a policy.
 * @method void setRuleInfo(AbnormalProcessRuleInfo $RuleInfo) Set Information of the added policy. The policy ID is empty here but cannot be empty when you edit a policy.
 * @method string getEventId() Obtain Required only when an item is allowed
 * @method void setEventId(string $EventId) Set Required only when an item is allowed
 */
class AddEditAbnormalProcessRuleRequest extends AbstractModel
{
    /**
     * @var AbnormalProcessRuleInfo Information of the added policy. The policy ID is empty here but cannot be empty when you edit a policy.
     */
    public $RuleInfo;

    /**
     * @var string Required only when an item is allowed
     */
    public $EventId;

    /**
     * @param AbnormalProcessRuleInfo $RuleInfo Information of the added policy. The policy ID is empty here but cannot be empty when you edit a policy.
     * @param string $EventId Required only when an item is allowed
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
            $this->RuleInfo = new AbnormalProcessRuleInfo();
            $this->RuleInfo->deserialize($param["RuleInfo"]);
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }
    }
}
