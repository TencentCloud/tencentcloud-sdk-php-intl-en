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
 * Based on client and request features, request sources are divided into human requests, legal Bot requests, suspected Bot requests, and high-risk Bot requests, with request handling options provided.
 *
 * @method SecurityAction getHighRiskBotRequestsAction() Obtain Execution action for malicious Bot requests. Supported values for the Name parameter of SecurityAction: <li>Deny: Block;</li><li>Monitor: Observe;</li><li>Allow: Allow;</li><li>Challenge: Challenge. Among them, ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>
 * @method void setHighRiskBotRequestsAction(SecurityAction $HighRiskBotRequestsAction) Set Execution action for malicious Bot requests. Supported values for the Name parameter of SecurityAction: <li>Deny: Block;</li><li>Monitor: Observe;</li><li>Allow: Allow;</li><li>Challenge: Challenge. Among them, ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>
 * @method SecurityAction getLikelyBotRequestsAction() Obtain Execution action for suspected Bot requests. Supported values for the Name parameter of SecurityAction: <li>Deny: Block;</li><li>Monitor: Observe;</li><li>Allow: Allow;</li><li>Challenge: Challenge. The ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>
 * @method void setLikelyBotRequestsAction(SecurityAction $LikelyBotRequestsAction) Set Execution action for suspected Bot requests. Supported values for the Name parameter of SecurityAction: <li>Deny: Block;</li><li>Monitor: Observe;</li><li>Allow: Allow;</li><li>Challenge: Challenge. The ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>
 * @method SecurityAction getVerifiedBotRequestsAction() Obtain Execution action of friendly Bot requests. The Name parameter of SecurityAction supports the following values: <li>Deny: block;</li><li>Monitor: observe;</li><li>Allow: Allow;</li><li>Challenge: Challenge. The ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>
 * @method void setVerifiedBotRequestsAction(SecurityAction $VerifiedBotRequestsAction) Set Execution action of friendly Bot requests. The Name parameter of SecurityAction supports the following values: <li>Deny: block;</li><li>Monitor: observe;</li><li>Allow: Allow;</li><li>Challenge: Challenge. The ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>
 * @method SecurityAction getHumanRequestsAction() Obtain Execution action for normal Bot requests. Valid values of SecurityAction Name: <li>Allow: Allow.</li>
 * @method void setHumanRequestsAction(SecurityAction $HumanRequestsAction) Set Execution action for normal Bot requests. Valid values of SecurityAction Name: <li>Allow: Allow.</li>
 */
class BotRatings extends AbstractModel
{
    /**
     * @var SecurityAction Execution action for malicious Bot requests. Supported values for the Name parameter of SecurityAction: <li>Deny: Block;</li><li>Monitor: Observe;</li><li>Allow: Allow;</li><li>Challenge: Challenge. Among them, ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>
     */
    public $HighRiskBotRequestsAction;

    /**
     * @var SecurityAction Execution action for suspected Bot requests. Supported values for the Name parameter of SecurityAction: <li>Deny: Block;</li><li>Monitor: Observe;</li><li>Allow: Allow;</li><li>Challenge: Challenge. The ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>
     */
    public $LikelyBotRequestsAction;

    /**
     * @var SecurityAction Execution action of friendly Bot requests. The Name parameter of SecurityAction supports the following values: <li>Deny: block;</li><li>Monitor: observe;</li><li>Allow: Allow;</li><li>Challenge: Challenge. The ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>
     */
    public $VerifiedBotRequestsAction;

    /**
     * @var SecurityAction Execution action for normal Bot requests. Valid values of SecurityAction Name: <li>Allow: Allow.</li>
     */
    public $HumanRequestsAction;

    /**
     * @param SecurityAction $HighRiskBotRequestsAction Execution action for malicious Bot requests. Supported values for the Name parameter of SecurityAction: <li>Deny: Block;</li><li>Monitor: Observe;</li><li>Allow: Allow;</li><li>Challenge: Challenge. Among them, ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>
     * @param SecurityAction $LikelyBotRequestsAction Execution action for suspected Bot requests. Supported values for the Name parameter of SecurityAction: <li>Deny: Block;</li><li>Monitor: Observe;</li><li>Allow: Allow;</li><li>Challenge: Challenge. The ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>
     * @param SecurityAction $VerifiedBotRequestsAction Execution action of friendly Bot requests. The Name parameter of SecurityAction supports the following values: <li>Deny: block;</li><li>Monitor: observe;</li><li>Allow: Allow;</li><li>Challenge: Challenge. The ChallengeOption in ChallengeActionParameters supports JSChallenge and ManagedChallenge.</li>
     * @param SecurityAction $HumanRequestsAction Execution action for normal Bot requests. Valid values of SecurityAction Name: <li>Allow: Allow.</li>
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
