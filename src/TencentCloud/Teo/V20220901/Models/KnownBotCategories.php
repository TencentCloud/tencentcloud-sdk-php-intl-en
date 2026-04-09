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
 * Commercial or open-source tool UA feature configuration (formerly UA feature rule).
 *
 * @method SecurityAction getBaseAction() Obtain Handling method for access requests from known commercial tools or open-source tools. specifies the Name parameter value of SecurityAction: <li>Deny: block;</li> <li>Monitor: observe;</li> <li>Disabled: not enabled, disable specified rule;</li> <li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge;</li> <li>Allow: pass (to be deprecated).</li>.
 * @method void setBaseAction(SecurityAction $BaseAction) Set Handling method for access requests from known commercial tools or open-source tools. specifies the Name parameter value of SecurityAction: <li>Deny: block;</li> <li>Monitor: observe;</li> <li>Disabled: not enabled, disable specified rule;</li> <li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge;</li> <li>Allow: pass (to be deprecated).</li>.
 * @method array getBotManagementActionOverrides() Obtain Specifies the handling method for access requests from known commercial tools or open-source tools.
 * @method void setBotManagementActionOverrides(array $BotManagementActionOverrides) Set Specifies the handling method for access requests from known commercial tools or open-source tools.
 */
class KnownBotCategories extends AbstractModel
{
    /**
     * @var SecurityAction Handling method for access requests from known commercial tools or open-source tools. specifies the Name parameter value of SecurityAction: <li>Deny: block;</li> <li>Monitor: observe;</li> <li>Disabled: not enabled, disable specified rule;</li> <li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge;</li> <li>Allow: pass (to be deprecated).</li>.
     */
    public $BaseAction;

    /**
     * @var array Specifies the handling method for access requests from known commercial tools or open-source tools.
     */
    public $BotManagementActionOverrides;

    /**
     * @param SecurityAction $BaseAction Handling method for access requests from known commercial tools or open-source tools. specifies the Name parameter value of SecurityAction: <li>Deny: block;</li> <li>Monitor: observe;</li> <li>Disabled: not enabled, disable specified rule;</li> <li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge;</li> <li>Allow: pass (to be deprecated).</li>.
     * @param array $BotManagementActionOverrides Specifies the handling method for access requests from known commercial tools or open-source tools.
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
        if (array_key_exists("BaseAction",$param) and $param["BaseAction"] !== null) {
            $this->BaseAction = new SecurityAction();
            $this->BaseAction->deserialize($param["BaseAction"]);
        }

        if (array_key_exists("BotManagementActionOverrides",$param) and $param["BotManagementActionOverrides"] !== null) {
            $this->BotManagementActionOverrides = [];
            foreach ($param["BotManagementActionOverrides"] as $key => $value){
                $obj = new BotManagementActionOverrides();
                $obj->deserialize($value);
                array_push($this->BotManagementActionOverrides, $obj);
            }
        }
    }
}
