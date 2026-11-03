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
 * Client authentication rules
 *
 * @method string getId() Obtain <p>ID of the client authentication rule.<br>Different rule configuration operations are supported by rule ID:<br> <li> <b>Add</b> a new rule: leave ID empty or do not specify the ID parameter;</li><li> <b>Modify</b> an existing rule: specify the rule ID to be updated/modified;</li><li> <b>Delete</b> an existing rule: existing rules not included in the ClientAttestationRule list in the BotManagement parameter will be deleted.</li></p>
 * @method void setId(string $Id) Set <p>ID of the client authentication rule.<br>Different rule configuration operations are supported by rule ID:<br> <li> <b>Add</b> a new rule: leave ID empty or do not specify the ID parameter;</li><li> <b>Modify</b> an existing rule: specify the rule ID to be updated/modified;</li><li> <b>Delete</b> an existing rule: existing rules not included in the ClientAttestationRule list in the BotManagement parameter will be deleted.</li></p>
 * @method string getName() Obtain <p>Name of the client authentication rule.</p>
 * @method void setName(string $Name) Set <p>Name of the client authentication rule.</p>
 * @method string getEnabled() Obtain <p>Whether the rule is enabled. Valid values: <li>on: enabled;</li><li>off: disabled.</li></p>
 * @method void setEnabled(string $Enabled) Set <p>Whether the rule is enabled. Valid values: <li>on: enabled;</li><li>off: disabled.</li></p>
 * @method integer getPriority() Obtain <p>Priority of rules. A smaller value indicates higher priority. Value range: 0-100. Default value: 0.</p>
 * @method void setPriority(integer $Priority) Set <p>Priority of rules. A smaller value indicates higher priority. Value range: 0-100. Default value: 0.</p>
 * @method string getCondition() Obtain <p>The specific content of the rule must comply with the expression syntax. For detailed specifications, see the product document.</p>
 * @method void setCondition(string $Condition) Set <p>The specific content of the rule must comply with the expression syntax. For detailed specifications, see the product document.</p>
 * @method string getAttesterId() Obtain <p>Client authentication option ID.</p>
 * @method void setAttesterId(string $AttesterId) Set <p>Client authentication option ID.</p>
 * @method SecurityAction getInvalidAttestationAction() Obtain <p>Handling method when client authentication fails. SecurityAction.Name values are as follows:</p><ul><li>Allow: allow, where AllowActionParameters supports MinDelayTime and MaxDelayTime configuration;</li><li>Deny: block, where DenyActionParameters supports BlockIp, ReturnCustomPage, and Stall configuration;</li><li>Monitor: observe;</li><li>Challenge: challenge, where ChallengeActionParameters.ChallengeOption supports JSChallenge, ManagedChallenge, InterstitialChallenge, and InlineChallenge;</li><li>Redirect: redirect to a URL.</li></ul>
 * @method void setInvalidAttestationAction(SecurityAction $InvalidAttestationAction) Set <p>Handling method when client authentication fails. SecurityAction.Name values are as follows:</p><ul><li>Allow: allow, where AllowActionParameters supports MinDelayTime and MaxDelayTime configuration;</li><li>Deny: block, where DenyActionParameters supports BlockIp, ReturnCustomPage, and Stall configuration;</li><li>Monitor: observe;</li><li>Challenge: challenge, where ChallengeActionParameters.ChallengeOption supports JSChallenge, ManagedChallenge, InterstitialChallenge, and InlineChallenge;</li><li>Redirect: redirect to a URL.</li></ul>
 * @method array getDeviceProfiles() Obtain <p>Client device configuration. If the DeviceProfiles parameter value is not specified in the ClientAttestationRules parameter: keep the existing client device configuration without modification.</p>
 * @method void setDeviceProfiles(array $DeviceProfiles) Set <p>Client device configuration. If the DeviceProfiles parameter value is not specified in the ClientAttestationRules parameter: keep the existing client device configuration without modification.</p>
 * @method AccountProtectionSettings getAccountProtectionSettings() Obtain <p>Account protection configuration.</p>
 * @method void setAccountProtectionSettings(AccountProtectionSettings $AccountProtectionSettings) Set <p>Account protection configuration.</p>
 */
class ClientAttestationRule extends AbstractModel
{
    /**
     * @var string <p>ID of the client authentication rule.<br>Different rule configuration operations are supported by rule ID:<br> <li> <b>Add</b> a new rule: leave ID empty or do not specify the ID parameter;</li><li> <b>Modify</b> an existing rule: specify the rule ID to be updated/modified;</li><li> <b>Delete</b> an existing rule: existing rules not included in the ClientAttestationRule list in the BotManagement parameter will be deleted.</li></p>
     */
    public $Id;

    /**
     * @var string <p>Name of the client authentication rule.</p>
     */
    public $Name;

    /**
     * @var string <p>Whether the rule is enabled. Valid values: <li>on: enabled;</li><li>off: disabled.</li></p>
     */
    public $Enabled;

    /**
     * @var integer <p>Priority of rules. A smaller value indicates higher priority. Value range: 0-100. Default value: 0.</p>
     */
    public $Priority;

    /**
     * @var string <p>The specific content of the rule must comply with the expression syntax. For detailed specifications, see the product document.</p>
     */
    public $Condition;

    /**
     * @var string <p>Client authentication option ID.</p>
     */
    public $AttesterId;

    /**
     * @var SecurityAction <p>Handling method when client authentication fails. SecurityAction.Name values are as follows:</p><ul><li>Allow: allow, where AllowActionParameters supports MinDelayTime and MaxDelayTime configuration;</li><li>Deny: block, where DenyActionParameters supports BlockIp, ReturnCustomPage, and Stall configuration;</li><li>Monitor: observe;</li><li>Challenge: challenge, where ChallengeActionParameters.ChallengeOption supports JSChallenge, ManagedChallenge, InterstitialChallenge, and InlineChallenge;</li><li>Redirect: redirect to a URL.</li></ul>
     */
    public $InvalidAttestationAction;

    /**
     * @var array <p>Client device configuration. If the DeviceProfiles parameter value is not specified in the ClientAttestationRules parameter: keep the existing client device configuration without modification.</p>
     */
    public $DeviceProfiles;

    /**
     * @var AccountProtectionSettings <p>Account protection configuration.</p>
     */
    public $AccountProtectionSettings;

    /**
     * @param string $Id <p>ID of the client authentication rule.<br>Different rule configuration operations are supported by rule ID:<br> <li> <b>Add</b> a new rule: leave ID empty or do not specify the ID parameter;</li><li> <b>Modify</b> an existing rule: specify the rule ID to be updated/modified;</li><li> <b>Delete</b> an existing rule: existing rules not included in the ClientAttestationRule list in the BotManagement parameter will be deleted.</li></p>
     * @param string $Name <p>Name of the client authentication rule.</p>
     * @param string $Enabled <p>Whether the rule is enabled. Valid values: <li>on: enabled;</li><li>off: disabled.</li></p>
     * @param integer $Priority <p>Priority of rules. A smaller value indicates higher priority. Value range: 0-100. Default value: 0.</p>
     * @param string $Condition <p>The specific content of the rule must comply with the expression syntax. For detailed specifications, see the product document.</p>
     * @param string $AttesterId <p>Client authentication option ID.</p>
     * @param SecurityAction $InvalidAttestationAction <p>Handling method when client authentication fails. SecurityAction.Name values are as follows:</p><ul><li>Allow: allow, where AllowActionParameters supports MinDelayTime and MaxDelayTime configuration;</li><li>Deny: block, where DenyActionParameters supports BlockIp, ReturnCustomPage, and Stall configuration;</li><li>Monitor: observe;</li><li>Challenge: challenge, where ChallengeActionParameters.ChallengeOption supports JSChallenge, ManagedChallenge, InterstitialChallenge, and InlineChallenge;</li><li>Redirect: redirect to a URL.</li></ul>
     * @param array $DeviceProfiles <p>Client device configuration. If the DeviceProfiles parameter value is not specified in the ClientAttestationRules parameter: keep the existing client device configuration without modification.</p>
     * @param AccountProtectionSettings $AccountProtectionSettings <p>Account protection configuration.</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("AttesterId",$param) and $param["AttesterId"] !== null) {
            $this->AttesterId = $param["AttesterId"];
        }

        if (array_key_exists("InvalidAttestationAction",$param) and $param["InvalidAttestationAction"] !== null) {
            $this->InvalidAttestationAction = new SecurityAction();
            $this->InvalidAttestationAction->deserialize($param["InvalidAttestationAction"]);
        }

        if (array_key_exists("DeviceProfiles",$param) and $param["DeviceProfiles"] !== null) {
            $this->DeviceProfiles = [];
            foreach ($param["DeviceProfiles"] as $key => $value){
                $obj = new DeviceProfile();
                $obj->deserialize($value);
                array_push($this->DeviceProfiles, $obj);
            }
        }

        if (array_key_exists("AccountProtectionSettings",$param) and $param["AccountProtectionSettings"] !== null) {
            $this->AccountProtectionSettings = new AccountProtectionSettings();
            $this->AccountProtectionSettings->deserialize($param["AccountProtectionSettings"]);
        }
    }
}
