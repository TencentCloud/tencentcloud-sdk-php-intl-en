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
 * Browser spoofing identification rule (formerly active feature detection rule).
 *
 * @method string getId() Obtain ID of the browser spoofing identification rule.<br>You can perform different rule configuration operations by rule ID:<br> <li> <b>Add</b> a new rule: leave the ID empty or unspecified;</li><li><b>Modify</b> an existing rule: specify the rule ID that needs to be updated/modified;</li><li><b>Delete</b> an existing rule: existing rules not included in the Rules list in the BrowserImpersonationDetection parameter will be deleted.</li>
 * @method void setId(string $Id) Set ID of the browser spoofing identification rule.<br>You can perform different rule configuration operations by rule ID:<br> <li> <b>Add</b> a new rule: leave the ID empty or unspecified;</li><li><b>Modify</b> an existing rule: specify the rule ID that needs to be updated/modified;</li><li><b>Delete</b> an existing rule: existing rules not included in the Rules list in the BrowserImpersonationDetection parameter will be deleted.</li>
 * @method string getName() Obtain Name of the browser spoofing identification rule.
 * @method void setName(string $Name) Set Name of the browser spoofing identification rule.
 * @method string getEnabled() Obtain Whether to enable the browser forgery identification rule. Valid values: <li>on: enable;</li><li>off: disable.</li>
 * @method void setEnabled(string $Enabled) Set Whether to enable the browser forgery identification rule. Valid values: <li>on: enable;</li><li>off: disable.</li>
 * @method string getCondition() Obtain Specific content of the browser spoofing identification rule. It only supports the configuration of request Method, request Path, and request URL, which must comply with expression syntax. For detailed specifications, see the product document.
 * @method void setCondition(string $Condition) Set Specific content of the browser spoofing identification rule. It only supports the configuration of request Method, request Path, and request URL, which must comply with expression syntax. For detailed specifications, see the product document.
 * @method BrowserImpersonationDetectionAction getAction() Obtain Handling method for browser spoofing identification rules, including Cookie verification, session tracking configuration, and client behavior validation configuration.
 * @method void setAction(BrowserImpersonationDetectionAction $Action) Set Handling method for browser spoofing identification rules, including Cookie verification, session tracking configuration, and client behavior validation configuration.
 */
class BrowserImpersonationDetectionRule extends AbstractModel
{
    /**
     * @var string ID of the browser spoofing identification rule.<br>You can perform different rule configuration operations by rule ID:<br> <li> <b>Add</b> a new rule: leave the ID empty or unspecified;</li><li><b>Modify</b> an existing rule: specify the rule ID that needs to be updated/modified;</li><li><b>Delete</b> an existing rule: existing rules not included in the Rules list in the BrowserImpersonationDetection parameter will be deleted.</li>
     */
    public $Id;

    /**
     * @var string Name of the browser spoofing identification rule.
     */
    public $Name;

    /**
     * @var string Whether to enable the browser forgery identification rule. Valid values: <li>on: enable;</li><li>off: disable.</li>
     */
    public $Enabled;

    /**
     * @var string Specific content of the browser spoofing identification rule. It only supports the configuration of request Method, request Path, and request URL, which must comply with expression syntax. For detailed specifications, see the product document.
     */
    public $Condition;

    /**
     * @var BrowserImpersonationDetectionAction Handling method for browser spoofing identification rules, including Cookie verification, session tracking configuration, and client behavior validation configuration.
     */
    public $Action;

    /**
     * @param string $Id ID of the browser spoofing identification rule.<br>You can perform different rule configuration operations by rule ID:<br> <li> <b>Add</b> a new rule: leave the ID empty or unspecified;</li><li><b>Modify</b> an existing rule: specify the rule ID that needs to be updated/modified;</li><li><b>Delete</b> an existing rule: existing rules not included in the Rules list in the BrowserImpersonationDetection parameter will be deleted.</li>
     * @param string $Name Name of the browser spoofing identification rule.
     * @param string $Enabled Whether to enable the browser forgery identification rule. Valid values: <li>on: enable;</li><li>off: disable.</li>
     * @param string $Condition Specific content of the browser spoofing identification rule. It only supports the configuration of request Method, request Path, and request URL, which must comply with expression syntax. For detailed specifications, see the product document.
     * @param BrowserImpersonationDetectionAction $Action Handling method for browser spoofing identification rules, including Cookie verification, session tracking configuration, and client behavior validation configuration.
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

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new BrowserImpersonationDetectionAction();
            $this->Action->deserialize($param["Action"]);
        }
    }
}
