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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Malicious External Connection Blocklist and Allowlist Information
 *
 * @method string getRuleType() Obtain Enumerate:
IP: Indicates ipv4 or ipv6
DOMAIN: Indicates the domain name
 * @method void setRuleType(string $RuleType) Set Enumerate:
IP: Indicates ipv4 or ipv6
DOMAIN: Indicates the domain name
 * @method string getAddress() Obtain Custom Blocklist/Allowlist Domain/IP
 * @method void setAddress(string $Address) Set Custom Blocklist/Allowlist Domain/IP
 * @method string getCreatedTime() Obtain Creation time.
 * @method void setCreatedTime(string $CreatedTime) Set Creation time.
 * @method string getUpdateTime() Obtain Update time
 * @method void setUpdateTime(string $UpdateTime) Set Update time
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method integer getRuleID() Obtain Rule ID
 * @method void setRuleID(integer $RuleID) Set Rule ID
 */
class MaliciousConnectionRuleInfo extends AbstractModel
{
    /**
     * @var string Enumerate:
IP: Indicates ipv4 or ipv6
DOMAIN: Indicates the domain name
     */
    public $RuleType;

    /**
     * @var string Custom Blocklist/Allowlist Domain/IP
     */
    public $Address;

    /**
     * @var string Creation time.
     */
    public $CreatedTime;

    /**
     * @var string Update time
     */
    public $UpdateTime;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var integer Rule ID
     */
    public $RuleID;

    /**
     * @param string $RuleType Enumerate:
IP: Indicates ipv4 or ipv6
DOMAIN: Indicates the domain name
     * @param string $Address Custom Blocklist/Allowlist Domain/IP
     * @param string $CreatedTime Creation time.
     * @param string $UpdateTime Update time
     * @param string $Remark Remarks
     * @param integer $RuleID Rule ID
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }
    }
}
