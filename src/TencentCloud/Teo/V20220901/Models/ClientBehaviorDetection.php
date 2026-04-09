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
 * Client behavior validation.
 *
 * @method string getCryptoChallengeIntensity() Obtain Specifies the proof-of-work strength. valid values: <li>low: low;</li><li>medium: medium;</li><li>high: high.</li>.
 * @method void setCryptoChallengeIntensity(string $CryptoChallengeIntensity) Set Specifies the proof-of-work strength. valid values: <li>low: low;</li><li>medium: medium;</li><li>high: high.</li>.
 * @method string getCryptoChallengeDelayBefore() Obtain Specifies the execution mode for client behavior verification. valid values: <li>0ms: immediate execution;</li> <li>100ms: delay 100ms execution;</li> <li>200ms: delay 200ms execution;</li> <li>300ms: delay 300ms execution;</li> <li>400ms: delay 400ms execution;</li> <li>500ms: delay 500ms execution;</li> <li>600ms: delay 600ms execution;</li> <li>700ms: delay 700ms execution;</li> <li>800ms: delay 800ms execution;</li> <li>900ms: delay 900ms execution;</li> <li>1000ms: delay 1000ms execution.</li>.
 * @method void setCryptoChallengeDelayBefore(string $CryptoChallengeDelayBefore) Set Specifies the execution mode for client behavior verification. valid values: <li>0ms: immediate execution;</li> <li>100ms: delay 100ms execution;</li> <li>200ms: delay 200ms execution;</li> <li>300ms: delay 300ms execution;</li> <li>400ms: delay 400ms execution;</li> <li>500ms: delay 500ms execution;</li> <li>600ms: delay 600ms execution;</li> <li>700ms: delay 700ms execution;</li> <li>800ms: delay 800ms execution;</li> <li>900ms: delay 900ms execution;</li> <li>1000ms: delay 1000ms execution.</li>.
 * @method string getMaxChallengeCountInterval() Obtain Time window for trigger threshold statistics. valid values: <li>5s: within 5 seconds;</li><li>10s: within 10 seconds;</li><li>15s: within 15 seconds;</li><li>30s: within 30 seconds;</li><li>60s: within 60 seconds;</li><li>5m: within 5 minutes;</li><li>10m: within 10 minutes;</li><li>30m: within 30 minutes;</li><li>60m: within 60 minutes.</li>.
 * @method void setMaxChallengeCountInterval(string $MaxChallengeCountInterval) Set Time window for trigger threshold statistics. valid values: <li>5s: within 5 seconds;</li><li>10s: within 10 seconds;</li><li>15s: within 15 seconds;</li><li>30s: within 30 seconds;</li><li>60s: within 60 seconds;</li><li>5m: within 5 minutes;</li><li>10m: within 10 minutes;</li><li>30m: within 30 minutes;</li><li>60m: within 60 minutes.</li>.
 * @method integer getMaxChallengeCountThreshold() Obtain Trigger threshold cumulative count. value range: 1-100000000.
 * @method void setMaxChallengeCountThreshold(integer $MaxChallengeCountThreshold) Set Trigger threshold cumulative count. value range: 1-100000000.
 * @method SecurityAction getChallengeNotFinishedAction() Obtain Execution action when client-side javascript is not enabled (test not completed). valid values for SecurityAction Name: <li>Deny: block, where Stall configuration is supported in DenyActionParameters;</li><li>Monitor: observe;</li><li>Allow: respond after waiting, where MinDelayTime and MaxDelayTime configuration is required in AllowActionParameters.</li>.
 * @method void setChallengeNotFinishedAction(SecurityAction $ChallengeNotFinishedAction) Set Execution action when client-side javascript is not enabled (test not completed). valid values for SecurityAction Name: <li>Deny: block, where Stall configuration is supported in DenyActionParameters;</li><li>Monitor: observe;</li><li>Allow: respond after waiting, where MinDelayTime and MaxDelayTime configuration is required in AllowActionParameters.</li>.
 * @method SecurityAction getChallengeTimeoutAction() Obtain The execution action for client-side detection timeout. valid values for the Name parameter in SecurityAction: <li>Deny: block, where Stall can be configured in DenyActionParameters;</li> <li>Monitor: observe;</li> <li>Allow: respond after wait, where MinDelayTime and MaxDelayTime must be configured in AllowActionParameters.</li>.
 * @method void setChallengeTimeoutAction(SecurityAction $ChallengeTimeoutAction) Set The execution action for client-side detection timeout. valid values for the Name parameter in SecurityAction: <li>Deny: block, where Stall can be configured in DenyActionParameters;</li> <li>Monitor: observe;</li> <li>Allow: respond after wait, where MinDelayTime and MaxDelayTime must be configured in AllowActionParameters.</li>.
 * @method SecurityAction getBotClientAction() Obtain The execution action of the Bot client. valid values for the Name parameter in SecurityAction: <li>Deny: block, where the Stall configuration is supported in DenyActionParameters;</li><li>Monitor: observation;</li><li>Allow: respond after wait, where MinDelayTime and MaxDelayTime configurations are required in AllowActionParameters.</li>.
 * @method void setBotClientAction(SecurityAction $BotClientAction) Set The execution action of the Bot client. valid values for the Name parameter in SecurityAction: <li>Deny: block, where the Stall configuration is supported in DenyActionParameters;</li><li>Monitor: observation;</li><li>Allow: respond after wait, where MinDelayTime and MaxDelayTime configurations are required in AllowActionParameters.</li>.
 */
class ClientBehaviorDetection extends AbstractModel
{
    /**
     * @var string Specifies the proof-of-work strength. valid values: <li>low: low;</li><li>medium: medium;</li><li>high: high.</li>.
     */
    public $CryptoChallengeIntensity;

    /**
     * @var string Specifies the execution mode for client behavior verification. valid values: <li>0ms: immediate execution;</li> <li>100ms: delay 100ms execution;</li> <li>200ms: delay 200ms execution;</li> <li>300ms: delay 300ms execution;</li> <li>400ms: delay 400ms execution;</li> <li>500ms: delay 500ms execution;</li> <li>600ms: delay 600ms execution;</li> <li>700ms: delay 700ms execution;</li> <li>800ms: delay 800ms execution;</li> <li>900ms: delay 900ms execution;</li> <li>1000ms: delay 1000ms execution.</li>.
     */
    public $CryptoChallengeDelayBefore;

    /**
     * @var string Time window for trigger threshold statistics. valid values: <li>5s: within 5 seconds;</li><li>10s: within 10 seconds;</li><li>15s: within 15 seconds;</li><li>30s: within 30 seconds;</li><li>60s: within 60 seconds;</li><li>5m: within 5 minutes;</li><li>10m: within 10 minutes;</li><li>30m: within 30 minutes;</li><li>60m: within 60 minutes.</li>.
     */
    public $MaxChallengeCountInterval;

    /**
     * @var integer Trigger threshold cumulative count. value range: 1-100000000.
     */
    public $MaxChallengeCountThreshold;

    /**
     * @var SecurityAction Execution action when client-side javascript is not enabled (test not completed). valid values for SecurityAction Name: <li>Deny: block, where Stall configuration is supported in DenyActionParameters;</li><li>Monitor: observe;</li><li>Allow: respond after waiting, where MinDelayTime and MaxDelayTime configuration is required in AllowActionParameters.</li>.
     */
    public $ChallengeNotFinishedAction;

    /**
     * @var SecurityAction The execution action for client-side detection timeout. valid values for the Name parameter in SecurityAction: <li>Deny: block, where Stall can be configured in DenyActionParameters;</li> <li>Monitor: observe;</li> <li>Allow: respond after wait, where MinDelayTime and MaxDelayTime must be configured in AllowActionParameters.</li>.
     */
    public $ChallengeTimeoutAction;

    /**
     * @var SecurityAction The execution action of the Bot client. valid values for the Name parameter in SecurityAction: <li>Deny: block, where the Stall configuration is supported in DenyActionParameters;</li><li>Monitor: observation;</li><li>Allow: respond after wait, where MinDelayTime and MaxDelayTime configurations are required in AllowActionParameters.</li>.
     */
    public $BotClientAction;

    /**
     * @param string $CryptoChallengeIntensity Specifies the proof-of-work strength. valid values: <li>low: low;</li><li>medium: medium;</li><li>high: high.</li>.
     * @param string $CryptoChallengeDelayBefore Specifies the execution mode for client behavior verification. valid values: <li>0ms: immediate execution;</li> <li>100ms: delay 100ms execution;</li> <li>200ms: delay 200ms execution;</li> <li>300ms: delay 300ms execution;</li> <li>400ms: delay 400ms execution;</li> <li>500ms: delay 500ms execution;</li> <li>600ms: delay 600ms execution;</li> <li>700ms: delay 700ms execution;</li> <li>800ms: delay 800ms execution;</li> <li>900ms: delay 900ms execution;</li> <li>1000ms: delay 1000ms execution.</li>.
     * @param string $MaxChallengeCountInterval Time window for trigger threshold statistics. valid values: <li>5s: within 5 seconds;</li><li>10s: within 10 seconds;</li><li>15s: within 15 seconds;</li><li>30s: within 30 seconds;</li><li>60s: within 60 seconds;</li><li>5m: within 5 minutes;</li><li>10m: within 10 minutes;</li><li>30m: within 30 minutes;</li><li>60m: within 60 minutes.</li>.
     * @param integer $MaxChallengeCountThreshold Trigger threshold cumulative count. value range: 1-100000000.
     * @param SecurityAction $ChallengeNotFinishedAction Execution action when client-side javascript is not enabled (test not completed). valid values for SecurityAction Name: <li>Deny: block, where Stall configuration is supported in DenyActionParameters;</li><li>Monitor: observe;</li><li>Allow: respond after waiting, where MinDelayTime and MaxDelayTime configuration is required in AllowActionParameters.</li>.
     * @param SecurityAction $ChallengeTimeoutAction The execution action for client-side detection timeout. valid values for the Name parameter in SecurityAction: <li>Deny: block, where Stall can be configured in DenyActionParameters;</li> <li>Monitor: observe;</li> <li>Allow: respond after wait, where MinDelayTime and MaxDelayTime must be configured in AllowActionParameters.</li>.
     * @param SecurityAction $BotClientAction The execution action of the Bot client. valid values for the Name parameter in SecurityAction: <li>Deny: block, where the Stall configuration is supported in DenyActionParameters;</li><li>Monitor: observation;</li><li>Allow: respond after wait, where MinDelayTime and MaxDelayTime configurations are required in AllowActionParameters.</li>.
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
        if (array_key_exists("CryptoChallengeIntensity",$param) and $param["CryptoChallengeIntensity"] !== null) {
            $this->CryptoChallengeIntensity = $param["CryptoChallengeIntensity"];
        }

        if (array_key_exists("CryptoChallengeDelayBefore",$param) and $param["CryptoChallengeDelayBefore"] !== null) {
            $this->CryptoChallengeDelayBefore = $param["CryptoChallengeDelayBefore"];
        }

        if (array_key_exists("MaxChallengeCountInterval",$param) and $param["MaxChallengeCountInterval"] !== null) {
            $this->MaxChallengeCountInterval = $param["MaxChallengeCountInterval"];
        }

        if (array_key_exists("MaxChallengeCountThreshold",$param) and $param["MaxChallengeCountThreshold"] !== null) {
            $this->MaxChallengeCountThreshold = $param["MaxChallengeCountThreshold"];
        }

        if (array_key_exists("ChallengeNotFinishedAction",$param) and $param["ChallengeNotFinishedAction"] !== null) {
            $this->ChallengeNotFinishedAction = new SecurityAction();
            $this->ChallengeNotFinishedAction->deserialize($param["ChallengeNotFinishedAction"]);
        }

        if (array_key_exists("ChallengeTimeoutAction",$param) and $param["ChallengeTimeoutAction"] !== null) {
            $this->ChallengeTimeoutAction = new SecurityAction();
            $this->ChallengeTimeoutAction->deserialize($param["ChallengeTimeoutAction"]);
        }

        if (array_key_exists("BotClientAction",$param) and $param["BotClientAction"] !== null) {
            $this->BotClientAction = new SecurityAction();
            $this->BotClientAction->deserialize($param["BotClientAction"]);
        }
    }
}
