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
 * Specifies the SecurityAction with weight allocation.
 *
 * @method SecurityAction getSecurityAction() Obtain The handling method of the Bot custom rule. valid values: <li>Allow: pass, where AllowActionParameters supports MinDelayTime and MaxDelayTime configuration;</li> <li>Deny: block, where DenyActionParameters supports BlockIp, ReturnCustomPage, and Stall configuration;</li> <li>Monitor: observation;</li> <li>Challenge: Challenge, where ChallengeActionParameters.ChallengeOption supports JSChallenge and ManagedChallenge;</li> <li>Redirect: Redirect to URL.</li>.
 * @method void setSecurityAction(SecurityAction $SecurityAction) Set The handling method of the Bot custom rule. valid values: <li>Allow: pass, where AllowActionParameters supports MinDelayTime and MaxDelayTime configuration;</li> <li>Deny: block, where DenyActionParameters supports BlockIp, ReturnCustomPage, and Stall configuration;</li> <li>Monitor: observation;</li> <li>Challenge: Challenge, where ChallengeActionParameters.ChallengeOption supports JSChallenge and ManagedChallenge;</li> <li>Redirect: Redirect to URL.</li>.
 * @method integer getWeight() Obtain The Weight of the current SecurityAction, only supported between 10 and 100 and must be a multiple of 10. the total of all Weight parameters must equal 100.
 * @method void setWeight(integer $Weight) Set The Weight of the current SecurityAction, only supported between 10 and 100 and must be a multiple of 10. the total of all Weight parameters must equal 100.
 */
class SecurityWeightedAction extends AbstractModel
{
    /**
     * @var SecurityAction The handling method of the Bot custom rule. valid values: <li>Allow: pass, where AllowActionParameters supports MinDelayTime and MaxDelayTime configuration;</li> <li>Deny: block, where DenyActionParameters supports BlockIp, ReturnCustomPage, and Stall configuration;</li> <li>Monitor: observation;</li> <li>Challenge: Challenge, where ChallengeActionParameters.ChallengeOption supports JSChallenge and ManagedChallenge;</li> <li>Redirect: Redirect to URL.</li>.
     */
    public $SecurityAction;

    /**
     * @var integer The Weight of the current SecurityAction, only supported between 10 and 100 and must be a multiple of 10. the total of all Weight parameters must equal 100.
     */
    public $Weight;

    /**
     * @param SecurityAction $SecurityAction The handling method of the Bot custom rule. valid values: <li>Allow: pass, where AllowActionParameters supports MinDelayTime and MaxDelayTime configuration;</li> <li>Deny: block, where DenyActionParameters supports BlockIp, ReturnCustomPage, and Stall configuration;</li> <li>Monitor: observation;</li> <li>Challenge: Challenge, where ChallengeActionParameters.ChallengeOption supports JSChallenge and ManagedChallenge;</li> <li>Redirect: Redirect to URL.</li>.
     * @param integer $Weight The Weight of the current SecurityAction, only supported between 10 and 100 and must be a multiple of 10. the total of all Weight parameters must equal 100.
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
