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
 * SecurityAction with weight assignment.
 *
 * @method SecurityAction getSecurityAction() Obtain Handling method of the Bot custom rule. Valid values: <li>Allow: Allow, where AllowActionParameters supports MinDelayTime and MaxDelayTime configuration;</li><li>Deny: block, where DenyActionParameters supports BlockIp, ReturnCustomPage, and Stall configuration;</li><li>Monitor: Monitor;</li><li>Challenge: Challenge, where ChallengeActionParameters.ChallengeOption supports JSChallenge and ManagedChallenge;</li><li>Redirect: Redirect to a URL.</li>
 * @method void setSecurityAction(SecurityAction $SecurityAction) Set Handling method of the Bot custom rule. Valid values: <li>Allow: Allow, where AllowActionParameters supports MinDelayTime and MaxDelayTime configuration;</li><li>Deny: block, where DenyActionParameters supports BlockIp, ReturnCustomPage, and Stall configuration;</li><li>Monitor: Monitor;</li><li>Challenge: Challenge, where ChallengeActionParameters.ChallengeOption supports JSChallenge and ManagedChallenge;</li><li>Redirect: Redirect to a URL.</li>
 * @method integer getWeight() Obtain Weight of the current SecurityAction. Only multiples of 10 from 10 to 100 are supported. The sum of all Weight parameters must equal 100.
 * @method void setWeight(integer $Weight) Set Weight of the current SecurityAction. Only multiples of 10 from 10 to 100 are supported. The sum of all Weight parameters must equal 100.
 */
class SecurityWeightedAction extends AbstractModel
{
    /**
     * @var SecurityAction Handling method of the Bot custom rule. Valid values: <li>Allow: Allow, where AllowActionParameters supports MinDelayTime and MaxDelayTime configuration;</li><li>Deny: block, where DenyActionParameters supports BlockIp, ReturnCustomPage, and Stall configuration;</li><li>Monitor: Monitor;</li><li>Challenge: Challenge, where ChallengeActionParameters.ChallengeOption supports JSChallenge and ManagedChallenge;</li><li>Redirect: Redirect to a URL.</li>
     */
    public $SecurityAction;

    /**
     * @var integer Weight of the current SecurityAction. Only multiples of 10 from 10 to 100 are supported. The sum of all Weight parameters must equal 100.
     */
    public $Weight;

    /**
     * @param SecurityAction $SecurityAction Handling method of the Bot custom rule. Valid values: <li>Allow: Allow, where AllowActionParameters supports MinDelayTime and MaxDelayTime configuration;</li><li>Deny: block, where DenyActionParameters supports BlockIp, ReturnCustomPage, and Stall configuration;</li><li>Monitor: Monitor;</li><li>Challenge: Challenge, where ChallengeActionParameters.ChallengeOption supports JSChallenge and ManagedChallenge;</li><li>Redirect: Redirect to a URL.</li>
     * @param integer $Weight Weight of the current SecurityAction. Only multiples of 10 from 10 to 100 are supported. The sum of all Weight parameters must equal 100.
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
        if (array_key_exists("SecurityAction",$param) and $param["SecurityAction"] !== null) {
            $this->SecurityAction = new SecurityAction();
            $this->SecurityAction->deserialize($param["SecurityAction"]);
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
