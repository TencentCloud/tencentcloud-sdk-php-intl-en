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
 * CreateImageSensitiveWhitelist request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method integer getBehavior() Obtain <p>Whitelisted sensitive information types</p><p>Enumeration values:</p><ul><li>1: root startup</li><li>2: code leak</li><li>3: credential leakage</li></ul>
 * @method void setBehavior(integer $Behavior) Set <p>Whitelisted sensitive information types</p><p>Enumeration values:</p><ul><li>1: root startup</li><li>2: code leak</li><li>3: credential leakage</li></ul>
 * @method array getImageIds() Obtain <p>Effective image id.</p>
 * @method void setImageIds(array $ImageIds) Set <p>Effective image id.</p>
 * @method integer getScope() Obtain <p>Whitelist effective range</p><p>Enumeration values:</p><ul><li>0: selected image</li><li>1: all images</li></ul>
 * @method void setScope(integer $Scope) Set <p>Whitelist effective range</p><p>Enumeration values:</p><ul><li>0: selected image</li><li>1: all images</li></ul>
 * @method integer getStatus() Obtain <p>Effective status</p><p>Enumeration values:</p><ul><li>0: Disabled</li><li>1: Enabled</li></ul>
 * @method void setStatus(integer $Status) Set <p>Effective status</p><p>Enumeration values:</p><ul><li>0: Disabled</li><li>1: Enabled</li></ul>
 * @method string getRemark() Obtain <p>Remarks.</p>
 * @method void setRemark(string $Remark) Set <p>Remarks.</p>
 */
class CreateImageSensitiveWhitelistRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>Whitelisted sensitive information types</p><p>Enumeration values:</p><ul><li>1: root startup</li><li>2: code leak</li><li>3: credential leakage</li></ul>
     */
    public $Behavior;

    /**
     * @var array <p>Effective image id.</p>
     */
    public $ImageIds;

    /**
     * @var integer <p>Whitelist effective range</p><p>Enumeration values:</p><ul><li>0: selected image</li><li>1: all images</li></ul>
     */
    public $Scope;

    /**
     * @var integer <p>Effective status</p><p>Enumeration values:</p><ul><li>0: Disabled</li><li>1: Enabled</li></ul>
     */
    public $Status;

    /**
     * @var string <p>Remarks.</p>
     */
    public $Remark;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param integer $Behavior <p>Whitelisted sensitive information types</p><p>Enumeration values:</p><ul><li>1: root startup</li><li>2: code leak</li><li>3: credential leakage</li></ul>
     * @param array $ImageIds <p>Effective image id.</p>
     * @param integer $Scope <p>Whitelist effective range</p><p>Enumeration values:</p><ul><li>0: selected image</li><li>1: all images</li></ul>
     * @param integer $Status <p>Effective status</p><p>Enumeration values:</p><ul><li>0: Disabled</li><li>1: Enabled</li></ul>
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
