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
 * Client behavior validation
 *
 * @method string getCryptoChallengeIntensity() Obtain Proof-of-work strength. Valid values: <li>low: Low;</li><li>medium: Medium;</li><li>high: High.</li>
 * @method void setCryptoChallengeIntensity(string $CryptoChallengeIntensity) Set Proof-of-work strength. Valid values: <li>low: Low;</li><li>medium: Medium;</li><li>high: High.</li>
 * @method string getCryptoChallengeDelayBefore() Obtain Execution mode of client behavior validation. Valid values: <li>0ms: immediately execute;</li><li>100ms: execute after a 100ms delay;</li><li>200ms: execute after a 200ms delay;</li><li>300ms: execute after a 300ms delay;</li><li>400ms: execute after a 400ms delay;</li><li>500ms: execute after a 500ms delay;</li><li>600ms: execute after a 600ms delay;</li><li>700ms: execute after a 700ms delay;</li><li>800ms: execute after an 800ms delay;</li><li>900ms: execute after a 900ms delay;</li><li>1000ms: execute after a 1000ms delay.</li>
 * @method void setCryptoChallengeDelayBefore(string $CryptoChallengeDelayBefore) Set Execution mode of client behavior validation. Valid values: <li>0ms: immediately execute;</li><li>100ms: execute after a 100ms delay;</li><li>200ms: execute after a 200ms delay;</li><li>300ms: execute after a 300ms delay;</li><li>400ms: execute after a 400ms delay;</li><li>500ms: execute after a 500ms delay;</li><li>600ms: execute after a 600ms delay;</li><li>700ms: execute after a 700ms delay;</li><li>800ms: execute after an 800ms delay;</li><li>900ms: execute after a 900ms delay;</li><li>1000ms: execute after a 1000ms delay.</li>
 * @method string getMaxChallengeCountInterval() Obtain Time window for trigger threshold statistics. Valid values: <li>5s: within 5 seconds;</li><li>10s: within 10 seconds;</li><li>15s: within 15 seconds;</li><li>30s: within 30 seconds;</li><li>60s: within 60 seconds;</li><li>5m: within 5 minutes;</li><li>10m: within 10 minutes;</li><li>30m: within 30 minutes;</li><li>60m: within 60 minutes.</li>
 * @method void setMaxChallengeCountInterval(string $MaxChallengeCountInterval) Set Time window for trigger threshold statistics. Valid values: <li>5s: within 5 seconds;</li><li>10s: within 10 seconds;</li><li>15s: within 15 seconds;</li><li>30s: within 30 seconds;</li><li>60s: within 60 seconds;</li><li>5m: within 5 minutes;</li><li>10m: within 10 minutes;</li><li>30m: within 30 minutes;</li><li>60m: within 60 minutes.</li>
 * @method integer getMaxChallengeCountThreshold() Obtain Cumulative count of trigger threshold statistics. Value range: 1-100000000.
 * @method void setMaxChallengeCountThreshold(integer $MaxChallengeCountThreshold) Set Cumulative count of trigger threshold statistics. Value range: 1-100000000.
 * @method SecurityAction getChallengeNotFinishedAction() Obtain Execution action when client-side JavaScript is not enabled (test not completed). Supported values for SecurityAction Name: <li>Deny: block. DenyActionParameters supports Stall configuration;</li><li>Monitor: observe;</li><li>Allow: respond after waiting. AllowActionParameters requires MinDelayTime and MaxDelayTime configuration.</li>
 * @method void setChallengeNotFinishedAction(SecurityAction $ChallengeNotFinishedAction) Set Execution action when client-side JavaScript is not enabled (test not completed). Supported values for SecurityAction Name: <li>Deny: block. DenyActionParameters supports Stall configuration;</li><li>Monitor: observe;</li><li>Allow: respond after waiting. AllowActionParameters requires MinDelayTime and MaxDelayTime configuration.</li>
 * @method SecurityAction getChallengeTimeoutAction() Obtain Execution action for client-side detection timeout. Supported values of SecurityAction Name: <li>Deny: block, where DenyActionParameters supports Stall configuration;</li><li>Monitor: observe;</li><li>Allow: respond after waiting, where AllowActionParameters requires MinDelayTime and MaxDelayTime configuration.</li>
 * @method void setChallengeTimeoutAction(SecurityAction $ChallengeTimeoutAction) Set Execution action for client-side detection timeout. Supported values of SecurityAction Name: <li>Deny: block, where DenyActionParameters supports Stall configuration;</li><li>Monitor: observe;</li><li>Allow: respond after waiting, where AllowActionParameters requires MinDelayTime and MaxDelayTime configuration.</li>
 * @method SecurityAction getBotClientAction() Obtain Execution action of the Bot client. Supported values of Name in SecurityAction: <li>Deny: block, where Stall configuration is supported in DenyActionParameters;</li><li>Monitor: observe;</li><li>Allow: respond after waiting, where MinDelayTime and MaxDelayTime configuration is required in AllowActionParameters.</li>
 * @method void setBotClientAction(SecurityAction $BotClientAction) Set Execution action of the Bot client. Supported values of Name in SecurityAction: <li>Deny: block, where Stall configuration is supported in DenyActionParameters;</li><li>Monitor: observe;</li><li>Allow: respond after waiting, where MinDelayTime and MaxDelayTime configuration is required in AllowActionParameters.</li>
 */
class ClientBehaviorDetection extends AbstractModel
{
    /**
     * @var string Proof-of-work strength. Valid values: <li>low: Low;</li><li>medium: Medium;</li><li>high: High.</li>
     */
    public $CryptoChallengeIntensity;

    /**
     * @var string Execution mode of client behavior validation. Valid values: <li>0ms: immediately execute;</li><li>100ms: execute after a 100ms delay;</li><li>200ms: execute after a 200ms delay;</li><li>300ms: execute after a 300ms delay;</li><li>400ms: execute after a 400ms delay;</li><li>500ms: execute after a 500ms delay;</li><li>600ms: execute after a 600ms delay;</li><li>700ms: execute after a 700ms delay;</li><li>800ms: execute after an 800ms delay;</li><li>900ms: execute after a 900ms delay;</li><li>1000ms: execute after a 1000ms delay.</li>
     */
    public $CryptoChallengeDelayBefore;

    /**
     * @var string Time window for trigger threshold statistics. Valid values: <li>5s: within 5 seconds;</li><li>10s: within 10 seconds;</li><li>15s: within 15 seconds;</li><li>30s: within 30 seconds;</li><li>60s: within 60 seconds;</li><li>5m: within 5 minutes;</li><li>10m: within 10 minutes;</li><li>30m: within 30 minutes;</li><li>60m: within 60 minutes.</li>
     */
    public $MaxChallengeCountInterval;

    /**
     * @var integer Cumulative count of trigger threshold statistics. Value range: 1-100000000.
     */
    public $MaxChallengeCountThreshold;

    /**
     * @var SecurityAction Execution action when client-side JavaScript is not enabled (test not completed). Supported values for SecurityAction Name: <li>Deny: block. DenyActionParameters supports Stall configuration;</li><li>Monitor: observe;</li><li>Allow: respond after waiting. AllowActionParameters requires MinDelayTime and MaxDelayTime configuration.</li>
     */
    public $ChallengeNotFinishedAction;

    /**
     * @var SecurityAction Execution action for client-side detection timeout. Supported values of SecurityAction Name: <li>Deny: block, where DenyActionParameters supports Stall configuration;</li><li>Monitor: observe;</li><li>Allow: respond after waiting, where AllowActionParameters requires MinDelayTime and MaxDelayTime configuration.</li>
     */
    public $ChallengeTimeoutAction;

    /**
     * @var SecurityAction Execution action of the Bot client. Supported values of Name in SecurityAction: <li>Deny: block, where Stall configuration is supported in DenyActionParameters;</li><li>Monitor: observe;</li><li>Allow: respond after waiting, where MinDelayTime and MaxDelayTime configuration is required in AllowActionParameters.</li>
     */
    public $BotClientAction;

    /**
     * @param string $CryptoChallengeIntensity Proof-of-work strength. Valid values: <li>low: Low;</li><li>medium: Medium;</li><li>high: High.</li>
     * @param string $CryptoChallengeDelayBefore Execution mode of client behavior validation. Valid values: <li>0ms: immediately execute;</li><li>100ms: execute after a 100ms delay;</li><li>200ms: execute after a 200ms delay;</li><li>300ms: execute after a 300ms delay;</li><li>400ms: execute after a 400ms delay;</li><li>500ms: execute after a 500ms delay;</li><li>600ms: execute after a 600ms delay;</li><li>700ms: execute after a 700ms delay;</li><li>800ms: execute after an 800ms delay;</li><li>900ms: execute after a 900ms delay;</li><li>1000ms: execute after a 1000ms delay.</li>
     * @param string $MaxChallengeCountInterval Time window for trigger threshold statistics. Valid values: <li>5s: within 5 seconds;</li><li>10s: within 10 seconds;</li><li>15s: within 15 seconds;</li><li>30s: within 30 seconds;</li><li>60s: within 60 seconds;</li><li>5m: within 5 minutes;</li><li>10m: within 10 minutes;</li><li>30m: within 30 minutes;</li><li>60m: within 60 minutes.</li>
     * @param integer $MaxChallengeCountThreshold Cumulative count of trigger threshold statistics. Value range: 1-100000000.
     * @param SecurityAction $ChallengeNotFinishedAction Execution action when client-side JavaScript is not enabled (test not completed). Supported values for SecurityAction Name: <li>Deny: block. DenyActionParameters supports Stall configuration;</li><li>Monitor: observe;</li><li>Allow: respond after waiting. AllowActionParameters requires MinDelayTime and MaxDelayTime configuration.</li>
     * @param SecurityAction $ChallengeTimeoutAction Execution action for client-side detection timeout. Supported values of SecurityAction Name: <li>Deny: block, where DenyActionParameters supports Stall configuration;</li><li>Monitor: observe;</li><li>Allow: respond after waiting, where AllowActionParameters requires MinDelayTime and MaxDelayTime configuration.</li>
     * @param SecurityAction $BotClientAction Execution action of the Bot client. Supported values of Name in SecurityAction: <li>Deny: block, where Stall configuration is supported in DenyActionParameters;</li><li>Monitor: observe;</li><li>Allow: respond after waiting, where MinDelayTime and MaxDelayTime configuration is required in AllowActionParameters.</li>
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
