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
 * Configuration of a Bot rule item, used to overwrite the upper-layer default configuration.
 *
 * @method array getIds() Obtain Specific item under the Bot rule group, used to rewrite the configuration content of this individual rule item. For detailed information corresponding to the Ids, see the returned message of the DescribeBotManagedRules API.
 * @method void setIds(array $Ids) Set Specific item under the Bot rule group, used to rewrite the configuration content of this individual rule item. For detailed information corresponding to the Ids, see the returned message of the DescribeBotManagedRules API.
 * @method SecurityAction getAction() Obtain Handling action for the Bot rule item specified in Ids. Supported values for SecurityAction Name: <li>Deny: block;</li><li>Monitor: observe;</li><li>Disabled: not enabled, disable the specified rule;</li><li>Challenge: challenge. ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge;</li><li>Allow: allow (only for basic feature management of Bot).</li>

 * @method void setAction(SecurityAction $Action) Set Handling action for the Bot rule item specified in Ids. Supported values for SecurityAction Name: <li>Deny: block;</li><li>Monitor: observe;</li><li>Disabled: not enabled, disable the specified rule;</li><li>Challenge: challenge. ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge;</li><li>Allow: allow (only for basic feature management of Bot).</li>
 */
class BotManagementActionOverrides extends AbstractModel
{
    /**
     * @var array Specific item under the Bot rule group, used to rewrite the configuration content of this individual rule item. For detailed information corresponding to the Ids, see the returned message of the DescribeBotManagedRules API.
     */
    public $Ids;

    /**
     * @var SecurityAction Handling action for the Bot rule item specified in Ids. Supported values for SecurityAction Name: <li>Deny: block;</li><li>Monitor: observe;</li><li>Disabled: not enabled, disable the specified rule;</li><li>Challenge: challenge. ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge;</li><li>Allow: allow (only for basic feature management of Bot).</li>

     */
    public $Action;

    /**
     * @param array $Ids Specific item under the Bot rule group, used to rewrite the configuration content of this individual rule item. For detailed information corresponding to the Ids, see the returned message of the DescribeBotManagedRules API.
     * @param SecurityAction $Action Handling action for the Bot rule item specified in Ids. Supported values for SecurityAction Name: <li>Deny: block;</li><li>Monitor: observe;</li><li>Disabled: not enabled, disable the specified rule;</li><li>Challenge: challenge. ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge;</li><li>Allow: allow (only for basic feature management of Bot).</li>
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
