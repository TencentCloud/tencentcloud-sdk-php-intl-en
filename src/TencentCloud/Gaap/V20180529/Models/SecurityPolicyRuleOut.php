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
 * Security policy rule (output parameter)
 *
 * @method string getAction() Obtain Policy: Allow (ACCEPT) or reject (DROP).
 * @method void setAction(string $Action) Set Policy: Allow (ACCEPT) or reject (DROP).
 * @method string getSourceCidr() Obtain Source IP or IP range of the request.
 * @method void setSourceCidr(string $SourceCidr) Set Source IP or IP range of the request.
 * @method string getAliasName() Obtain Rule alias
 * @method void setAliasName(string $AliasName) Set Rule alias
 * @method string getDestPortRange() Obtain Target port range
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDestPortRange(string $DestPortRange) Set Target port range
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRuleId() Obtain Rule ID
 * @method void setRuleId(string $RuleId) Set Rule ID
 * @method string getProtocol() Obtain Protocol type to be matched (TCP/UDP)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProtocol(string $Protocol) Set Protocol type to be matched (TCP/UDP)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getPolicyId() Obtain Security policy ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolicyId(string $PolicyId) Set Security policy ID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SecurityPolicyRuleOut extends AbstractModel
{
    /**
     * @var string Policy: Allow (ACCEPT) or reject (DROP).
     */
    public $Action;

    /**
     * @var string Source IP or IP range of the request.
     */
    public $SourceCidr;

    /**
     * @var string Rule alias
     */
    public $AliasName;

    /**
     * @var string Target port range
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DestPortRange;

    /**
     * @var string Rule ID
     */
    public $RuleId;

    /**
     * @var string Protocol type to be matched (TCP/UDP)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Protocol;

    /**
     * @var string Security policy ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PolicyId;

    /**
     * @param string $Action Policy: Allow (ACCEPT) or reject (DROP).
     * @param string $SourceCidr Source IP or IP range of the request.
     * @param string $AliasName Rule alias
     * @param string $DestPortRange Target port range
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RuleId Rule ID
     * @param string $Protocol Protocol type to be matched (TCP/UDP)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $PolicyId Security policy ID
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("SourceCidr",$param) and $param["SourceCidr"] !== null) {
            $this->SourceCidr = $param["SourceCidr"];
        }

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("DestPortRange",$param) and $param["DestPortRange"] !== null) {
            $this->DestPortRange = $param["DestPortRange"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }
    }
}
