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
 * @method string getId() Obtain Browser spoofing identification rule ID. rule ID supports different rule configuration operations: <li> <b>add</b> a new rule: ID is empty or without specifying the ID parameter;</li> <li> <b>modify</b> an existing rule: specify the rule ID that needs to be updated/modified;</li> <li> <b>delete</b> an existing rule: existing Rules not included in the Rules list of the BrowserImpersonationDetection parameter will be deleted.</li>.
 * @method void setId(string $Id) Set Browser spoofing identification rule ID. rule ID supports different rule configuration operations: <li> <b>add</b> a new rule: ID is empty or without specifying the ID parameter;</li> <li> <b>modify</b> an existing rule: specify the rule ID that needs to be updated/modified;</li> <li> <b>delete</b> an existing rule: existing Rules not included in the Rules list of the BrowserImpersonationDetection parameter will be deleted.</li>.
 * @method string getName() Obtain Specifies the name of the browser spoofing identification rule.
 * @method void setName(string $Name) Set Specifies the name of the browser spoofing identification rule.
 * @method string getEnabled() Obtain Whether browser spoofing detection is enabled. valid values: <li>on: enabled;</li><li>off: disabled.</li>.
 * @method void setEnabled(string $Enabled) Set Whether browser spoofing detection is enabled. valid values: <li>on: enabled;</li><li>off: disabled.</li>.
 * @method string getCondition() Obtain Specifies the specific content of browser spoofing identification rules, which only support configuration of request Method (Method), request Path (Path), and request URL, and must comply with expression grammar. for detailed specifications, please refer to the product document.
 * @method void setCondition(string $Condition) Set Specifies the specific content of browser spoofing identification rules, which only support configuration of request Method (Method), request Path (Path), and request URL, and must comply with expression grammar. for detailed specifications, please refer to the product document.
 * @method BrowserImpersonationDetectionAction getAction() Obtain Describes the handling method for browser spoofing identification rules, including Cookie verification, session tracking configuration, and client behavior validation configuration.
 * @method void setAction(BrowserImpersonationDetectionAction $Action) Set Describes the handling method for browser spoofing identification rules, including Cookie verification, session tracking configuration, and client behavior validation configuration.
 */
class BrowserImpersonationDetectionRule extends AbstractModel
{
    /**
     * @var string Browser spoofing identification rule ID. rule ID supports different rule configuration operations: <li> <b>add</b> a new rule: ID is empty or without specifying the ID parameter;</li> <li> <b>modify</b> an existing rule: specify the rule ID that needs to be updated/modified;</li> <li> <b>delete</b> an existing rule: existing Rules not included in the Rules list of the BrowserImpersonationDetection parameter will be deleted.</li>.
     */
    public $Id;

    /**
     * @var string Specifies the name of the browser spoofing identification rule.
     */
    public $Name;

    /**
     * @var string Whether browser spoofing detection is enabled. valid values: <li>on: enabled;</li><li>off: disabled.</li>.
     */
    public $Enabled;

    /**
     * @var string Specifies the specific content of browser spoofing identification rules, which only support configuration of request Method (Method), request Path (Path), and request URL, and must comply with expression grammar. for detailed specifications, please refer to the product document.
     */
    public $Condition;

    /**
     * @var BrowserImpersonationDetectionAction Describes the handling method for browser spoofing identification rules, including Cookie verification, session tracking configuration, and client behavior validation configuration.
     */
    public $Action;

    /**
     * @param string $Id Browser spoofing identification rule ID. rule ID supports different rule configuration operations: <li> <b>add</b> a new rule: ID is empty or without specifying the ID parameter;</li> <li> <b>modify</b> an existing rule: specify the rule ID that needs to be updated/modified;</li> <li> <b>delete</b> an existing rule: existing Rules not included in the Rules list of the BrowserImpersonationDetection parameter will be deleted.</li>.
     * @param string $Name Specifies the name of the browser spoofing identification rule.
     * @param string $Enabled Whether browser spoofing detection is enabled. valid values: <li>on: enabled;</li><li>off: disabled.</li>.
     * @param string $Condition Specifies the specific content of browser spoofing identification rules, which only support configuration of request Method (Method), request Path (Path), and request URL, and must comply with expression grammar. for detailed specifications, please refer to the product document.
     * @param BrowserImpersonationDetectionAction $Action Describes the handling method for browser spoofing identification rules, including Cookie verification, session tracking configuration, and client behavior validation configuration.
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
