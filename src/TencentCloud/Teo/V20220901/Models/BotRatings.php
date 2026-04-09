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
 * Based on client and request features, the request source is divided into human request, valid Bot request, suspected Bot request, and high-risk Bot request, with request handling options provided.
 *
 * @method SecurityAction getHighRiskBotRequestsAction() Obtain Execution action for malicious Bot requests. valid values for the Name parameter in SecurityAction: <li>Deny: block;</li> <li>Monitor: observe;</li> <li>Allow: pass;</li> <li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>.
 * @method void setHighRiskBotRequestsAction(SecurityAction $HighRiskBotRequestsAction) Set Execution action for malicious Bot requests. valid values for the Name parameter in SecurityAction: <li>Deny: block;</li> <li>Monitor: observe;</li> <li>Allow: pass;</li> <li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>.
 * @method SecurityAction getLikelyBotRequestsAction() Obtain The execution action for suspected Bot requests. valid values for the Name parameter in SecurityAction: <li>Deny: block;</li> <li>Monitor: observe;</li> <li>Allow: pass;</li> <li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>.
 * @method void setLikelyBotRequestsAction(SecurityAction $LikelyBotRequestsAction) Set The execution action for suspected Bot requests. valid values for the Name parameter in SecurityAction: <li>Deny: block;</li> <li>Monitor: observe;</li> <li>Allow: pass;</li> <li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>.
 * @method SecurityAction getVerifiedBotRequestsAction() Obtain Execution action for friendly Bot request. SecurityAction Name parameter supports: <li>Deny: block;</li><li>Monitor: observe;</li><li>Allow: pass;</li><li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>.
 * @method void setVerifiedBotRequestsAction(SecurityAction $VerifiedBotRequestsAction) Set Execution action for friendly Bot request. SecurityAction Name parameter supports: <li>Deny: block;</li><li>Monitor: observe;</li><li>Allow: pass;</li><li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>.
 * @method SecurityAction getHumanRequestsAction() Obtain Execution action for a normal Bot request. valid values for the Name parameter in SecurityAction: <li>Allow: pass.</li>.
 * @method void setHumanRequestsAction(SecurityAction $HumanRequestsAction) Set Execution action for a normal Bot request. valid values for the Name parameter in SecurityAction: <li>Allow: pass.</li>.
 */
class BotRatings extends AbstractModel
{
    /**
     * @var SecurityAction Execution action for malicious Bot requests. valid values for the Name parameter in SecurityAction: <li>Deny: block;</li> <li>Monitor: observe;</li> <li>Allow: pass;</li> <li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>.
     */
    public $HighRiskBotRequestsAction;

    /**
     * @var SecurityAction The execution action for suspected Bot requests. valid values for the Name parameter in SecurityAction: <li>Deny: block;</li> <li>Monitor: observe;</li> <li>Allow: pass;</li> <li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>.
     */
    public $LikelyBotRequestsAction;

    /**
     * @var SecurityAction Execution action for friendly Bot request. SecurityAction Name parameter supports: <li>Deny: block;</li><li>Monitor: observe;</li><li>Allow: pass;</li><li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>.
     */
    public $VerifiedBotRequestsAction;

    /**
     * @var SecurityAction Execution action for a normal Bot request. valid values for the Name parameter in SecurityAction: <li>Allow: pass.</li>.
     */
    public $HumanRequestsAction;

    /**
     * @param SecurityAction $HighRiskBotRequestsAction Execution action for malicious Bot requests. valid values for the Name parameter in SecurityAction: <li>Deny: block;</li> <li>Monitor: observe;</li> <li>Allow: pass;</li> <li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>.
     * @param SecurityAction $LikelyBotRequestsAction The execution action for suspected Bot requests. valid values for the Name parameter in SecurityAction: <li>Deny: block;</li> <li>Monitor: observe;</li> <li>Allow: pass;</li> <li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>.
     * @param SecurityAction $VerifiedBotRequestsAction Execution action for friendly Bot request. SecurityAction Name parameter supports: <li>Deny: block;</li><li>Monitor: observe;</li><li>Allow: pass;</li><li>Challenge: Challenge, where ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>.
     * @param SecurityAction $HumanRequestsAction Execution action for a normal Bot request. valid values for the Name parameter in SecurityAction: <li>Allow: pass.</li>.
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
        if (array_key_exists("HighRiskBotRequestsAction",$param) and $param["HighRiskBotRequestsAction"] !== null) {
            $this->HighRiskBotRequestsAction = new SecurityAction();
            $this->HighRiskBotRequestsAction->deserialize($param["HighRiskBotRequestsAction"]);
        }

        if (array_key_exists("LikelyBotRequestsAction",$param) and $param["LikelyBotRequestsAction"] !== null) {
            $this->LikelyBotRequestsAction = new SecurityAction();
            $this->LikelyBotRequestsAction->deserialize($param["LikelyBotRequestsAction"]);
        }

        if (array_key_exists("VerifiedBotRequestsAction",$param) and $param["VerifiedBotRequestsAction"] !== null) {
            $this->VerifiedBotRequestsAction = new SecurityAction();
            $this->VerifiedBotRequestsAction->deserialize($param["VerifiedBotRequestsAction"]);
        }

        if (array_key_exists("HumanRequestsAction",$param) and $param["HumanRequestsAction"] !== null) {
            $this->HumanRequestsAction = new SecurityAction();
            $this->HumanRequestsAction->deserialize($param["HumanRequestsAction"]);
        }
    }
}
