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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AppShareAccessControl
 *
 * @method integer getAccessType() Obtain <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>APP_SHARE_ACCESS_TYPE_UNSPECIFIED</td><td>0</td><td></td></tr><tr><td>APP_SHARE_ACCESS_TYPE_PUBLIC</td><td>1</td><td>Public access (accessible to all users)</td></tr><tr><td>APP_SHARE_ACCESS_TYPE_INTERNAL</td><td>2</td><td>Internal access (accessible only to organizational users)</td></tr><tr><td>APP_SHARE_ACCESS_TYPE_ACCOUNT_WHITELIST</td><td>3</td><td>Account allowlist (accessible to specified UIN/mobile phone/mailbox/IP)</td></tr></tbody></table>
 * @method void setAccessType(integer $AccessType) Set <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>APP_SHARE_ACCESS_TYPE_UNSPECIFIED</td><td>0</td><td></td></tr><tr><td>APP_SHARE_ACCESS_TYPE_PUBLIC</td><td>1</td><td>Public access (accessible to all users)</td></tr><tr><td>APP_SHARE_ACCESS_TYPE_INTERNAL</td><td>2</td><td>Internal access (accessible only to organizational users)</td></tr><tr><td>APP_SHARE_ACCESS_TYPE_ACCOUNT_WHITELIST</td><td>3</td><td>Account allowlist (accessible to specified UIN/mobile phone/mailbox/IP)</td></tr></tbody></table>
 * @method boolean getEnabled() Obtain <p>Whether to enable access control</p><p>Enumeration values:</p><ul><li>true: Enable</li><li>false: Disable</li></ul>
 * @method void setEnabled(boolean $Enabled) Set <p>Whether to enable access control</p><p>Enumeration values:</p><ul><li>true: Enable</li><li>false: Disable</li></ul>
 * @method array getWhitelist() Obtain <p>Whitelist information</p>
 * @method void setWhitelist(array $Whitelist) Set <p>Whitelist information</p>
 */
class AppShareAccessControl extends AbstractModel
{
    /**
     * @var integer <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>APP_SHARE_ACCESS_TYPE_UNSPECIFIED</td><td>0</td><td></td></tr><tr><td>APP_SHARE_ACCESS_TYPE_PUBLIC</td><td>1</td><td>Public access (accessible to all users)</td></tr><tr><td>APP_SHARE_ACCESS_TYPE_INTERNAL</td><td>2</td><td>Internal access (accessible only to organizational users)</td></tr><tr><td>APP_SHARE_ACCESS_TYPE_ACCOUNT_WHITELIST</td><td>3</td><td>Account allowlist (accessible to specified UIN/mobile phone/mailbox/IP)</td></tr></tbody></table>
     */
    public $AccessType;

    /**
     * @var boolean <p>Whether to enable access control</p><p>Enumeration values:</p><ul><li>true: Enable</li><li>false: Disable</li></ul>
     */
    public $Enabled;

    /**
     * @var array <p>Whitelist information</p>
     */
    public $Whitelist;

    /**
     * @param integer $AccessType <table><tbody><tr><td>Enumeration item</td><td>Enumeration value</td><td>Description</td></tr><tr><td>APP_SHARE_ACCESS_TYPE_UNSPECIFIED</td><td>0</td><td></td></tr><tr><td>APP_SHARE_ACCESS_TYPE_PUBLIC</td><td>1</td><td>Public access (accessible to all users)</td></tr><tr><td>APP_SHARE_ACCESS_TYPE_INTERNAL</td><td>2</td><td>Internal access (accessible only to organizational users)</td></tr><tr><td>APP_SHARE_ACCESS_TYPE_ACCOUNT_WHITELIST</td><td>3</td><td>Account allowlist (accessible to specified UIN/mobile phone/mailbox/IP)</td></tr></tbody></table>
     * @param boolean $Enabled <p>Whether to enable access control</p><p>Enumeration values:</p><ul><li>true: Enable</li><li>false: Disable</li></ul>
     * @param array $Whitelist <p>Whitelist information</p>
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
        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Whitelist",$param) and $param["Whitelist"] !== null) {
            $this->Whitelist = [];
            foreach ($param["Whitelist"] as $key => $value){
                $obj = new AppShareWhitelistItem();
                $obj->deserialize($value);
                array_push($this->Whitelist, $obj);
            }
        }
    }
}
