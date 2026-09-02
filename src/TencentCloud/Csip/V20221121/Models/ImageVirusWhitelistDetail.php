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
 * Trojan allowlist for container images
 *
 * @method integer getRuleId() Obtain <p>Whitelist rule id</p>
 * @method void setRuleId(integer $RuleId) Set <p>Whitelist rule id</p>
 * @method string getOwnerAccountName() Obtain <p>Allowlist associated account name</p>
 * @method void setOwnerAccountName(string $OwnerAccountName) Set <p>Allowlist associated account name</p>
 * @method string getOwnerUin() Obtain <p>Allowlist associated account uin</p>
 * @method void setOwnerUin(string $OwnerUin) Set <p>Allowlist associated account uin</p>
 * @method integer getOwnerAppId() Obtain <p>appid of the account that the allowlist belongs to</p>
 * @method void setOwnerAppId(integer $OwnerAppId) Set <p>appid of the account that the allowlist belongs to</p>
 * @method integer getScope() Obtain <p>Whitelist effective range</p><p>Enumeration values:</p><ul><li>1: All images</li><li>0: Specified images</li></ul>
 * @method void setScope(integer $Scope) Set <p>Whitelist effective range</p><p>Enumeration values:</p><ul><li>1: All images</li><li>0: Specified images</li></ul>
 * @method array getImageIds() Obtain <p>Image ID.</p>
 * @method void setImageIds(array $ImageIds) Set <p>Image ID.</p>
 * @method string getRemark() Obtain <p>Remarks.</p>
 * @method void setRemark(string $Remark) Set <p>Remarks.</p>
 * @method array getMd5List() Obtain <p>Trojan whitelist md5 list</p>
 * @method void setMd5List(array $Md5List) Set <p>Trojan whitelist md5 list</p>
 */
class ImageVirusWhitelistDetail extends AbstractModel
{
    /**
     * @var integer <p>Whitelist rule id</p>
     */
    public $RuleId;

    /**
     * @var string <p>Allowlist associated account name</p>
     */
    public $OwnerAccountName;

    /**
     * @var string <p>Allowlist associated account uin</p>
     */
    public $OwnerUin;

    /**
     * @var integer <p>appid of the account that the allowlist belongs to</p>
     */
    public $OwnerAppId;

    /**
     * @var integer <p>Whitelist effective range</p><p>Enumeration values:</p><ul><li>1: All images</li><li>0: Specified images</li></ul>
     */
    public $Scope;

    /**
     * @var array <p>Image ID.</p>
     */
    public $ImageIds;

    /**
     * @var string <p>Remarks.</p>
     */
    public $Remark;

    /**
     * @var array <p>Trojan whitelist md5 list</p>
     */
    public $Md5List;

    /**
     * @param integer $RuleId <p>Whitelist rule id</p>
     * @param string $OwnerAccountName <p>Allowlist associated account name</p>
     * @param string $OwnerUin <p>Allowlist associated account uin</p>
     * @param integer $OwnerAppId <p>appid of the account that the allowlist belongs to</p>
     * @param integer $Scope <p>Whitelist effective range</p><p>Enumeration values:</p><ul><li>1: All images</li><li>0: Specified images</li></ul>
     * @param array $ImageIds <p>Image ID.</p>
     * @param string $Remark <p>Remarks.</p>
     * @param array $Md5List <p>Trojan whitelist md5 list</p>
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

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Md5List",$param) and $param["Md5List"] !== null) {
            $this->Md5List = $param["Md5List"];
        }
    }
}
