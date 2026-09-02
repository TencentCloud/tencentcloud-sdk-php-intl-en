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
 * ModifyImageSensitiveWhitelist request structure.
 *
 * @method integer getRuleId() Obtain <p>Sensitive information allowlist id</p>
 * @method void setRuleId(integer $RuleId) Set <p>Sensitive information allowlist id</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method integer getBehavior() Obtain <p>Whitelisted sensitive information types</p><p>Enumeration values:</p><ul><li>1: root startup</li><li>2: Code leak</li><li>3: Credential leak</li></ul>
 * @method void setBehavior(integer $Behavior) Set <p>Whitelisted sensitive information types</p><p>Enumeration values:</p><ul><li>1: root startup</li><li>2: Code leak</li><li>3: Credential leak</li></ul>
 * @method array getImageIds() Obtain <p>Image ID.</p>
 * @method void setImageIds(array $ImageIds) Set <p>Image ID.</p>
 * @method integer getScope() Obtain <p>Effective scope</p>
 * @method void setScope(integer $Scope) Set <p>Effective scope</p>
 * @method integer getStatus() Obtain <p>Allowlist status</p>
 * @method void setStatus(integer $Status) Set <p>Allowlist status</p>
 * @method string getRemark() Obtain <p>Remarks.</p>
 * @method void setRemark(string $Remark) Set <p>Remarks.</p>
 */
class ModifyImageSensitiveWhitelistRequest extends AbstractModel
{
    /**
     * @var integer <p>Sensitive information allowlist id</p>
     */
    public $RuleId;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>Whitelisted sensitive information types</p><p>Enumeration values:</p><ul><li>1: root startup</li><li>2: Code leak</li><li>3: Credential leak</li></ul>
     */
    public $Behavior;

    /**
     * @var array <p>Image ID.</p>
     */
    public $ImageIds;

    /**
     * @var integer <p>Effective scope</p>
     */
    public $Scope;

    /**
     * @var integer <p>Allowlist status</p>
     */
    public $Status;

    /**
     * @var string <p>Remarks.</p>
     */
    public $Remark;

    /**
     * @param integer $RuleId <p>Sensitive information allowlist id</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param integer $Behavior <p>Whitelisted sensitive information types</p><p>Enumeration values:</p><ul><li>1: root startup</li><li>2: Code leak</li><li>3: Credential leak</li></ul>
     * @param array $ImageIds <p>Image ID.</p>
     * @param integer $Scope <p>Effective scope</p>
     * @param integer $Status <p>Allowlist status</p>
     * @param string $Remark <p>Remarks.</p>
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

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Behavior",$param) and $param["Behavior"] !== null) {
            $this->Behavior = $param["Behavior"];
        }

        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
