<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySecurityRule request structure.
 *
 * @method string getRuleId() Obtain Rule ID
 * @method void setRuleId(string $RuleId) Set Rule ID
 * @method string getAliasName() Obtain Rule name: up to 30 characters. The extra characters will be truncated.
 * @method void setAliasName(string $AliasName) Set Rule name: up to 30 characters. The extra characters will be truncated.
 * @method string getPolicyId() Obtain Security policy ID
 * @method void setPolicyId(string $PolicyId) Set Security policy ID
 * @method string getRuleAction() Obtain Security rule action
 * @method void setRuleAction(string $RuleAction) Set Security rule action
 * @method string getSourceCidr() Obtain A CIDR IP address associated with the rule
 * @method void setSourceCidr(string $SourceCidr) Set A CIDR IP address associated with the rule
 * @method string getProtocol() Obtain Protocol type
 * @method void setProtocol(string $Protocol) Set Protocol type
 * @method string getDestPortRange() Obtain Port range. Valid values:
A single port: 80
Multiple ports: 80 and 443
Consecutive ports: 3306-20000
All ports: ALL
 * @method void setDestPortRange(string $DestPortRange) Set Port range. Valid values:
A single port: 80
Multiple ports: 80 and 443
Consecutive ports: 3306-20000
All ports: ALL
 */
class ModifySecurityRuleRequest extends AbstractModel
{
    /**
     * @var string Rule ID
     */
    public $RuleId;

    /**
     * @var string Rule name: up to 30 characters. The extra characters will be truncated.
     */
    public $AliasName;

    /**
     * @var string Security policy ID
     */
    public $PolicyId;

    /**
     * @var string Security rule action
     */
    public $RuleAction;

    /**
     * @var string A CIDR IP address associated with the rule
     */
    public $SourceCidr;

    /**
     * @var string Protocol type
     */
    public $Protocol;

    /**
     * @var string Port range. Valid values:
A single port: 80
Multiple ports: 80 and 443
Consecutive ports: 3306-20000
All ports: ALL
     */
    public $DestPortRange;

    /**
     * @param string $RuleId Rule ID
     * @param string $AliasName Rule name: up to 30 characters. The extra characters will be truncated.
     * @param string $PolicyId Security policy ID
     * @param string $RuleAction Security rule action
     * @param string $SourceCidr A CIDR IP address associated with the rule
     * @param string $Protocol Protocol type
     * @param string $DestPortRange Port range. Valid values:
A single port: 80
Multiple ports: 80 and 443
Consecutive ports: 3306-20000
All ports: ALL
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("SourceCidr",$param) and $param["SourceCidr"] !== null) {
            $this->SourceCidr = $param["SourceCidr"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("DestPortRange",$param) and $param["DestPortRange"] !== null) {
            $this->DestPortRange = $param["DestPortRange"];
        }
    }
}
