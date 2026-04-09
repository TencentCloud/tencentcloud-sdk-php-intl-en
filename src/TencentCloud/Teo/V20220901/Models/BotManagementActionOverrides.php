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
 * Bot rules specific configuration, used to override the upper layer default configuration.
 *
 * @method array getIds() Obtain Specific item under Bot rules used to rewrite the configuration content of this single rule. refer to the returned message from the DescribeBotManagedRules API for detailed information corresponding to Ids.
 * @method void setIds(array $Ids) Set Specific item under Bot rules used to rewrite the configuration content of this single rule. refer to the returned message from the DescribeBotManagedRules API for detailed information corresponding to Ids.
 * @method SecurityAction getAction() Obtain Specifies the handling action for Bot rule items in Ids. valid values for the Name parameter in SecurityAction: <li>Deny: block;</li><li>Monitor: observe;</li><li>Disabled: Disabled, disable the specified rule;</li><li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge;</li><li>Allow: pass (only for Bot basic feature management).</li>.

 * @method void setAction(SecurityAction $Action) Set Specifies the handling action for Bot rule items in Ids. valid values for the Name parameter in SecurityAction: <li>Deny: block;</li><li>Monitor: observe;</li><li>Disabled: Disabled, disable the specified rule;</li><li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge;</li><li>Allow: pass (only for Bot basic feature management).</li>.
 */
class BotManagementActionOverrides extends AbstractModel
{
    /**
     * @var array Specific item under Bot rules used to rewrite the configuration content of this single rule. refer to the returned message from the DescribeBotManagedRules API for detailed information corresponding to Ids.
     */
    public $Ids;

    /**
     * @var SecurityAction Specifies the handling action for Bot rule items in Ids. valid values for the Name parameter in SecurityAction: <li>Deny: block;</li><li>Monitor: observe;</li><li>Disabled: Disabled, disable the specified rule;</li><li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge;</li><li>Allow: pass (only for Bot basic feature management).</li>.

     */
    public $Action;

    /**
     * @param array $Ids Specific item under Bot rules used to rewrite the configuration content of this single rule. refer to the returned message from the DescribeBotManagedRules API for detailed information corresponding to Ids.
     * @param SecurityAction $Action Specifies the handling action for Bot rule items in Ids. valid values for the Name parameter in SecurityAction: <li>Deny: block;</li><li>Monitor: observe;</li><li>Disabled: Disabled, disable the specified rule;</li><li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge;</li><li>Allow: pass (only for Bot basic feature management).</li>.
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
        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new SecurityAction();
            $this->Action->deserialize($param["Action"]);
        }
    }
}
