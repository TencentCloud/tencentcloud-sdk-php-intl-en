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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sensitive information allowlist for container images
 *
 * @method integer getRuleId() Obtain <p>Sensitive information allowlist id</p>
 * @method void setRuleId(integer $RuleId) Set <p>Sensitive information allowlist id</p>
 * @method string getOwnerAccountName() Obtain <p>Allowlist associated account name</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) Set <p>Allowlist associated account name</p>
 * @method string getOwnerUin() Obtain <p>Account uin of the allowlist</p>
 * @method void setOwnerUin(string $OwnerUin) Set <p>Account uin of the allowlist</p>
 * @method integer getOwnerAppId() Obtain <p>appid of the account associated with the allowlist</p>
 * @method void setOwnerAppId(integer $OwnerAppId) Set <p>appid of the account associated with the allowlist</p>
 * @method integer getBehavior() Obtain <p>Allowlisted sensitive information types</p><p>Enumeration values:</p><ul><li>1: root startup</li><li>2: code leakage</li><li>3: credential leakage</li></ul>
 * @method void setBehavior(integer $Behavior) Set <p>Allowlisted sensitive information types</p><p>Enumeration values:</p><ul><li>1: root startup</li><li>2: code leakage</li><li>3: credential leakage</li></ul>
 * @method integer getScope() Obtain <p>Whitelist scope</p><p>Enumeration values:</p><ul><li>0: Selected image</li><li>1: All images</li></ul>
 * @method void setScope(integer $Scope) Set <p>Whitelist scope</p><p>Enumeration values:</p><ul><li>0: Selected image</li><li>1: All images</li></ul>
 * @method array getImageIds() Obtain <p>Allowlist effective mirror id</p>
 * @method void setImageIds(array $ImageIds) Set <p>Allowlist effective mirror id</p>
 * @method string getRemark() Obtain <p>Remarks.</p>
 * @method void setRemark(string $Remark) Set <p>Remarks.</p>
 * @method integer getStatus() Obtain <p>Effective status</p><p>Enumeration values:</p><ul><li>0: allowlist ineffective</li><li>1: allowlist effective</li></ul>
 * @method void setStatus(integer $Status) Set <p>Effective status</p><p>Enumeration values:</p><ul><li>0: allowlist ineffective</li><li>1: allowlist effective</li></ul>
 * @method string getName() Obtain <p>Sensitive information allowlist name</p>
 * @method void setName(string $Name) Set <p>Sensitive information allowlist name</p>
 * @method string getUpdateTime() Obtain <p>Update time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
 */
class ImageSensitiveWhitelist extends AbstractModel
{
    /**
     * @var integer <p>Sensitive information allowlist id</p>
     */
    public $RuleId;

    /**
     * @var string <p>Allowlist associated account name</p>
     */
    public $OwnerAccountName;

    /**
     * @var string <p>Account uin of the allowlist</p>
     */
    public $OwnerUin;

    /**
     * @var integer <p>appid of the account associated with the allowlist</p>
     */
    public $OwnerAppId;

    /**
     * @var integer <p>Allowlisted sensitive information types</p><p>Enumeration values:</p><ul><li>1: root startup</li><li>2: code leakage</li><li>3: credential leakage</li></ul>
     */
    public $Behavior;

    /**
     * @var integer <p>Whitelist scope</p><p>Enumeration values:</p><ul><li>0: Selected image</li><li>1: All images</li></ul>
     */
    public $Scope;

    /**
     * @var array <p>Allowlist effective mirror id</p>
     */
    public $ImageIds;

    /**
     * @var string <p>Remarks.</p>
     */
    public $Remark;

    /**
     * @var integer <p>Effective status</p><p>Enumeration values:</p><ul><li>0: allowlist ineffective</li><li>1: allowlist effective</li></ul>
     */
    public $Status;

    /**
     * @var string <p>Sensitive information allowlist name</p>
     */
    public $Name;

    /**
     * @var string <p>Update time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
     */
    public $UpdateTime;

    /**
     * @param integer $RuleId <p>Sensitive information allowlist id</p>
     * @param string $OwnerAccountName <p>Allowlist associated account name</p>
     * @param string $OwnerUin <p>Account uin of the allowlist</p>
     * @param integer $OwnerAppId <p>appid of the account associated with the allowlist</p>
     * @param integer $Behavior <p>Allowlisted sensitive information types</p><p>Enumeration values:</p><ul><li>1: root startup</li><li>2: code leakage</li><li>3: credential leakage</li></ul>
     * @param integer $Scope <p>Whitelist scope</p><p>Enumeration values:</p><ul><li>0: Selected image</li><li>1: All images</li></ul>
     * @param array $ImageIds <p>Allowlist effective mirror id</p>
     * @param string $Remark <p>Remarks.</p>
     * @param integer $Status <p>Effective status</p><p>Enumeration values:</p><ul><li>0: allowlist ineffective</li><li>1: allowlist effective</li></ul>
     * @param string $Name <p>Sensitive information allowlist name</p>
     * @param string $UpdateTime <p>Update time</p><p>Parameter format: YYYY-MM-DD hh:mm:ss</p>
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

        if (array_key_exists("OwnerAccountName",$param) and $param["OwnerAccountName"] !== null) {
            $this->OwnerAccountName = $param["OwnerAccountName"];
        }

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("OwnerAppId",$param) and $param["OwnerAppId"] !== null) {
            $this->OwnerAppId = $param["OwnerAppId"];
        }

        if (array_key_exists("Behavior",$param) and $param["Behavior"] !== null) {
            $this->Behavior = $param["Behavior"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
