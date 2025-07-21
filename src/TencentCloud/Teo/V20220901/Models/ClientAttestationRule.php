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
 * Client authentication rule.
 *
 * @method string getId() Obtain Client authentication rule ID. supported rule configuration operations by rule ID: <li> <b>add</b> a new rule: leave the ID empty or do not specify the ID parameter.</li> <li> <b>modify</b> an existing rule: specify the rule ID that needs to be updated/modified.</li> <li> <b>delete</b> an existing rule: existing rules not included in the ClientAttestationRule list under BotManagement parameters will be deleted.</li>.
 * @method void setId(string $Id) Set Client authentication rule ID. supported rule configuration operations by rule ID: <li> <b>add</b> a new rule: leave the ID empty or do not specify the ID parameter.</li> <li> <b>modify</b> an existing rule: specify the rule ID that needs to be updated/modified.</li> <li> <b>delete</b> an existing rule: existing rules not included in the ClientAttestationRule list under BotManagement parameters will be deleted.</li>.
 * @method string getName() Obtain Specifies the name of the client authentication rule.
 * @method void setName(string $Name) Set Specifies the name of the client authentication rule.
 * @method string getEnabled() Obtain Whether the rule is enabled. valid values: <li>`on`: enable</li> <li>`off`: disable</li>.
 * @method void setEnabled(string $Enabled) Set Whether the rule is enabled. valid values: <li>`on`: enable</li> <li>`off`: disable</li>.
 * @method integer getPriority() Obtain Priority of rules. a smaller value indicates higher priority execution. value range: 0-100. default value: 0.
 * @method void setPriority(integer $Priority) Set Priority of rules. a smaller value indicates higher priority execution. value range: 0-100. default value: 0.
 * @method string getCondition() Obtain The rule content must comply with expression grammar. for details, see the product document.
 * @method void setCondition(string $Condition) Set The rule content must comply with expression grammar. for details, see the product document.
 * @method string getAttesterId() Obtain Specifies the client authentication option ID.
 * @method void setAttesterId(string $AttesterId) Set Specifies the client authentication option ID.
 * @method array getDeviceProfiles() Obtain Client device configuration. if the DeviceProfiles parameter value is not specified in the ClientAttestationRules parameter, keep the existing client device configuration and do not modify it.
 * @method void setDeviceProfiles(array $DeviceProfiles) Set Client device configuration. if the DeviceProfiles parameter value is not specified in the ClientAttestationRules parameter, keep the existing client device configuration and do not modify it.
 * @method SecurityAction getInvalidAttestationAction() Obtain Handling method for failed client authentication. valid values for SecurityAction Name: <li>Deny: block;</li> <li>Monitor: observation;</li> <li>Redirect: redirection;</li> <li>Challenge: Challenge.</li> default value: Monitor.
 * @method void setInvalidAttestationAction(SecurityAction $InvalidAttestationAction) Set Handling method for failed client authentication. valid values for SecurityAction Name: <li>Deny: block;</li> <li>Monitor: observation;</li> <li>Redirect: redirection;</li> <li>Challenge: Challenge.</li> default value: Monitor.
 */
class ClientAttestationRule extends AbstractModel
{
    /**
     * @var string Client authentication rule ID. supported rule configuration operations by rule ID: <li> <b>add</b> a new rule: leave the ID empty or do not specify the ID parameter.</li> <li> <b>modify</b> an existing rule: specify the rule ID that needs to be updated/modified.</li> <li> <b>delete</b> an existing rule: existing rules not included in the ClientAttestationRule list under BotManagement parameters will be deleted.</li>.
     */
    public $Id;

    /**
     * @var string Specifies the name of the client authentication rule.
     */
    public $Name;

    /**
     * @var string Whether the rule is enabled. valid values: <li>`on`: enable</li> <li>`off`: disable</li>.
     */
    public $Enabled;

    /**
     * @var integer Priority of rules. a smaller value indicates higher priority execution. value range: 0-100. default value: 0.
     */
    public $Priority;

    /**
     * @var string The rule content must comply with expression grammar. for details, see the product document.
     */
    public $Condition;

    /**
     * @var string Specifies the client authentication option ID.
     */
    public $AttesterId;

    /**
     * @var array Client device configuration. if the DeviceProfiles parameter value is not specified in the ClientAttestationRules parameter, keep the existing client device configuration and do not modify it.
     */
    public $DeviceProfiles;

    /**
     * @var SecurityAction Handling method for failed client authentication. valid values for SecurityAction Name: <li>Deny: block;</li> <li>Monitor: observation;</li> <li>Redirect: redirection;</li> <li>Challenge: Challenge.</li> default value: Monitor.
     */
    public $InvalidAttestationAction;

    /**
     * @param string $Id Client authentication rule ID. supported rule configuration operations by rule ID: <li> <b>add</b> a new rule: leave the ID empty or do not specify the ID parameter.</li> <li> <b>modify</b> an existing rule: specify the rule ID that needs to be updated/modified.</li> <li> <b>delete</b> an existing rule: existing rules not included in the ClientAttestationRule list under BotManagement parameters will be deleted.</li>.
     * @param string $Name Specifies the name of the client authentication rule.
     * @param string $Enabled Whether the rule is enabled. valid values: <li>`on`: enable</li> <li>`off`: disable</li>.
     * @param integer $Priority Priority of rules. a smaller value indicates higher priority execution. value range: 0-100. default value: 0.
     * @param string $Condition The rule content must comply with expression grammar. for details, see the product document.
     * @param string $AttesterId Specifies the client authentication option ID.
     * @param array $DeviceProfiles Client device configuration. if the DeviceProfiles parameter value is not specified in the ClientAttestationRules parameter, keep the existing client device configuration and do not modify it.
     * @param SecurityAction $InvalidAttestationAction Handling method for failed client authentication. valid values for SecurityAction Name: <li>Deny: block;</li> <li>Monitor: observation;</li> <li>Redirect: redirection;</li> <li>Challenge: Challenge.</li> default value: Monitor.
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

        if (array_key_exists("DeviceProfiles",$param) and $param["DeviceProfiles"] !== null) {
            $this->DeviceProfiles = [];
            foreach ($param["DeviceProfiles"] as $key => $value){
                $obj = new DeviceProfile();
                $obj->deserialize($value);
                array_push($this->DeviceProfiles, $obj);
            }
        }

        if (array_key_exists("InvalidAttestationAction",$param) and $param["InvalidAttestationAction"] !== null) {
            $this->InvalidAttestationAction = new SecurityAction();
            $this->InvalidAttestationAction->deserialize($param["InvalidAttestationAction"]);
        }
    }
}
