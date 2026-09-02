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
 * ModifyImageVirusWhitelist request structure.
 *
 * @method integer getRuleId() Obtain <p>Trojan whitelist id</p>
 * @method void setRuleId(integer $RuleId) Set <p>Trojan whitelist id</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getMd5List() Obtain <p>Trojan whitelist md5</p>
 * @method void setMd5List(array $Md5List) Set <p>Trojan whitelist md5</p>
 * @method integer getScope() Obtain <p>Whitelist effective range</p>
 * @method void setScope(integer $Scope) Set <p>Whitelist effective range</p>
 * @method array getImageIds() Obtain <p>Image id list for the effective allowlist</p>
 * @method void setImageIds(array $ImageIds) Set <p>Image id list for the effective allowlist</p>
 * @method string getRemark() Obtain <p>Remarks.</p>
 * @method void setRemark(string $Remark) Set <p>Remarks.</p>
 * @method integer getStatus() Obtain <p>Whether to enable</p><p>Enumeration values:</p><ul><li>0: Disabled</li><li>1: Enabled</li></ul>
 * @method void setStatus(integer $Status) Set <p>Whether to enable</p><p>Enumeration values:</p><ul><li>0: Disabled</li><li>1: Enabled</li></ul>
 * @method string getName() Obtain <p>Allowlist name</p>
 * @method void setName(string $Name) Set <p>Allowlist name</p>
 */
class ModifyImageVirusWhitelistRequest extends AbstractModel
{
    /**
     * @var integer <p>Trojan whitelist id</p>
     */
    public $RuleId;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Trojan whitelist md5</p>
     */
    public $Md5List;

    /**
     * @var integer <p>Whitelist effective range</p>
     */
    public $Scope;

    /**
     * @var array <p>Image id list for the effective allowlist</p>
     */
    public $ImageIds;

    /**
     * @var string <p>Remarks.</p>
     */
    public $Remark;

    /**
     * @var integer <p>Whether to enable</p><p>Enumeration values:</p><ul><li>0: Disabled</li><li>1: Enabled</li></ul>
     */
    public $Status;

    /**
     * @var string <p>Allowlist name</p>
     */
    public $Name;

    /**
     * @param integer $RuleId <p>Trojan whitelist id</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param array $Md5List <p>Trojan whitelist md5</p>
     * @param integer $Scope <p>Whitelist effective range</p>
     * @param array $ImageIds <p>Image id list for the effective allowlist</p>
     * @param string $Remark <p>Remarks.</p>
     * @param integer $Status <p>Whether to enable</p><p>Enumeration values:</p><ul><li>0: Disabled</li><li>1: Enabled</li></ul>
     * @param string $Name <p>Allowlist name</p>
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

        if (array_key_exists("Md5List",$param) and $param["Md5List"] !== null) {
            $this->Md5List = $param["Md5List"];
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
    }
}
