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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLLMStatus request structure.
 *
 * @method boolean getStatus() Obtain <p>Switch status. true: enabled; false: disabled.</p>
 * @method void setStatus(boolean $Status) Set <p>Switch status. true: enabled; false: disabled.</p>
 * @method string getDomain() Obtain <p>Domain or service ID to operate on</p>
 * @method void setDomain(string $Domain) Set <p>Domain or service ID to operate on</p>
 * @method integer getSwitchType() Obtain <p>Switch type, used to specify the protection module switch to operate on. Valid values: <br>1: Master protection switch, controls the global enablement/disablement of the large model protection feature. <br>2: Compute consumption protection rule switch, controls the enablement/disablement of the compute consumption limiting feature. <br>3: Custom protection rule switch, controls the enablement/disablement of the custom content security rule feature. <br>4: ToolCall protection switch, controls the enablement/disablement of the tool call security detection feature. <br>5: Prompt attack protection switch, controls the enablement/disablement of the prompt injection/jailbreak attack detection feature. <br>6: Content compliance detection switch, controls the enablement/disablement of the input/output content compliance detection feature. <br>7: Sensitive data detection switch, controls the enablement/disablement of the sensitive information leakage detection (DLP) feature. <br>8: Skill security detection switch, controls the enablement/disablement of the Skill/Plugin call security detection feature. <br>9: Intent behavior detection switch, controls the enablement/disablement of the user intent recognition and behavior detection feature. <br>10: Malicious URL detection switch, controls the enablement/disablement of the malicious link detection feature in responses.</p>
 * @method void setSwitchType(integer $SwitchType) Set <p>Switch type, used to specify the protection module switch to operate on. Valid values: <br>1: Master protection switch, controls the global enablement/disablement of the large model protection feature. <br>2: Compute consumption protection rule switch, controls the enablement/disablement of the compute consumption limiting feature. <br>3: Custom protection rule switch, controls the enablement/disablement of the custom content security rule feature. <br>4: ToolCall protection switch, controls the enablement/disablement of the tool call security detection feature. <br>5: Prompt attack protection switch, controls the enablement/disablement of the prompt injection/jailbreak attack detection feature. <br>6: Content compliance detection switch, controls the enablement/disablement of the input/output content compliance detection feature. <br>7: Sensitive data detection switch, controls the enablement/disablement of the sensitive information leakage detection (DLP) feature. <br>8: Skill security detection switch, controls the enablement/disablement of the Skill/Plugin call security detection feature. <br>9: Intent behavior detection switch, controls the enablement/disablement of the user intent recognition and behavior detection feature. <br>10: Malicious URL detection switch, controls the enablement/disablement of the malicious link detection feature in responses.</p>
 * @method string getInstanceId() Obtain <p>WAF instance ID, indicating the WAF instance to which the current operation belongs. It can be obtained through the DescribeInstances API.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>WAF instance ID, indicating the WAF instance to which the current operation belongs. It can be obtained through the DescribeInstances API.</p>
 */
class ModifyLLMStatusRequest extends AbstractModel
{
    /**
     * @var boolean <p>Switch status. true: enabled; false: disabled.</p>
     */
    public $Status;

    /**
     * @var string <p>Domain or service ID to operate on</p>
     */
    public $Domain;

    /**
     * @var integer <p>Switch type, used to specify the protection module switch to operate on. Valid values: <br>1: Master protection switch, controls the global enablement/disablement of the large model protection feature. <br>2: Compute consumption protection rule switch, controls the enablement/disablement of the compute consumption limiting feature. <br>3: Custom protection rule switch, controls the enablement/disablement of the custom content security rule feature. <br>4: ToolCall protection switch, controls the enablement/disablement of the tool call security detection feature. <br>5: Prompt attack protection switch, controls the enablement/disablement of the prompt injection/jailbreak attack detection feature. <br>6: Content compliance detection switch, controls the enablement/disablement of the input/output content compliance detection feature. <br>7: Sensitive data detection switch, controls the enablement/disablement of the sensitive information leakage detection (DLP) feature. <br>8: Skill security detection switch, controls the enablement/disablement of the Skill/Plugin call security detection feature. <br>9: Intent behavior detection switch, controls the enablement/disablement of the user intent recognition and behavior detection feature. <br>10: Malicious URL detection switch, controls the enablement/disablement of the malicious link detection feature in responses.</p>
     */
    public $SwitchType;

    /**
     * @var string <p>WAF instance ID, indicating the WAF instance to which the current operation belongs. It can be obtained through the DescribeInstances API.</p>
     */
    public $InstanceId;

    /**
     * @param boolean $Status <p>Switch status. true: enabled; false: disabled.</p>
     * @param string $Domain <p>Domain or service ID to operate on</p>
     * @param integer $SwitchType <p>Switch type, used to specify the protection module switch to operate on. Valid values: <br>1: Master protection switch, controls the global enablement/disablement of the large model protection feature. <br>2: Compute consumption protection rule switch, controls the enablement/disablement of the compute consumption limiting feature. <br>3: Custom protection rule switch, controls the enablement/disablement of the custom content security rule feature. <br>4: ToolCall protection switch, controls the enablement/disablement of the tool call security detection feature. <br>5: Prompt attack protection switch, controls the enablement/disablement of the prompt injection/jailbreak attack detection feature. <br>6: Content compliance detection switch, controls the enablement/disablement of the input/output content compliance detection feature. <br>7: Sensitive data detection switch, controls the enablement/disablement of the sensitive information leakage detection (DLP) feature. <br>8: Skill security detection switch, controls the enablement/disablement of the Skill/Plugin call security detection feature. <br>9: Intent behavior detection switch, controls the enablement/disablement of the user intent recognition and behavior detection feature. <br>10: Malicious URL detection switch, controls the enablement/disablement of the malicious link detection feature in responses.</p>
     * @param string $InstanceId <p>WAF instance ID, indicating the WAF instance to which the current operation belongs. It can be obtained through the DescribeInstances API.</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("SwitchType",$param) and $param["SwitchType"] !== null) {
            $this->SwitchType = $param["SwitchType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
