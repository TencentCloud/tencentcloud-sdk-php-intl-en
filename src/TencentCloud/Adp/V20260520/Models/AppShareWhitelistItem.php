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
 * AppShareWhitelistItem
 *
 * @method integer getType() Obtain <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_SHARE_WHITELIST_TYPE_UNSPECIFIED</td> <td>0</td> <td></td> </tr> <tr> <td>APP_SHARE_WHITELIST_TYPE_UIN</td> <td>1</td> <td>UIN account</td> </tr> <tr> <td>APP_SHARE_WHITELIST_TYPE_PHONE</td> <td>2</td> <td>Mobile number</td> </tr> <tr> <td>APP_SHARE_WHITELIST_TYPE_EMAIL</td> <td>3</td> <td>Email address</td> </tr> <tr> <td>APP_SHARE_WHITELIST_TYPE_IP</td> <td>4</td> <td>IP address</td> </tr> <tr> <td>APP_SHARE_WHITELIST_TYPE_RTX</td> <td>5</td> <td>RTX account</td> </tr> </tbody> </table>
 * @method void setType(integer $Type) Set <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_SHARE_WHITELIST_TYPE_UNSPECIFIED</td> <td>0</td> <td></td> </tr> <tr> <td>APP_SHARE_WHITELIST_TYPE_UIN</td> <td>1</td> <td>UIN account</td> </tr> <tr> <td>APP_SHARE_WHITELIST_TYPE_PHONE</td> <td>2</td> <td>Mobile number</td> </tr> <tr> <td>APP_SHARE_WHITELIST_TYPE_EMAIL</td> <td>3</td> <td>Email address</td> </tr> <tr> <td>APP_SHARE_WHITELIST_TYPE_IP</td> <td>4</td> <td>IP address</td> </tr> <tr> <td>APP_SHARE_WHITELIST_TYPE_RTX</td> <td>5</td> <td>RTX account</td> </tr> </tbody> </table>
 * @method array getValues() Obtain <p>Allowlist array information</p><p>Parameter format: allowlist value</p>
 * @method void setValues(array $Values) Set <p>Allowlist array information</p><p>Parameter format: allowlist value</p>
 */
class AppShareWhitelistItem extends AbstractModel
{
    /**
     * @var integer <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_SHARE_WHITELIST_TYPE_UNSPECIFIED</td> <td>0</td> <td></td> </tr> <tr> <td>APP_SHARE_WHITELIST_TYPE_UIN</td> <td>1</td> <td>UIN account</td> </tr> <tr> <td>APP_SHARE_WHITELIST_TYPE_PHONE</td> <td>2</td> <td>Mobile number</td> </tr> <tr> <td>APP_SHARE_WHITELIST_TYPE_EMAIL</td> <td>3</td> <td>Email address</td> </tr> <tr> <td>APP_SHARE_WHITELIST_TYPE_IP</td> <td>4</td> <td>IP address</td> </tr> <tr> <td>APP_SHARE_WHITELIST_TYPE_RTX</td> <td>5</td> <td>RTX account</td> </tr> </tbody> </table>
     */
    public $Type;

    /**
     * @var array <p>Allowlist array information</p><p>Parameter format: allowlist value</p>
     */
    public $Values;

    /**
     * @param integer $Type <table> <tbody> <tr> <td>Enumeration item</td> <td>Enumeration value</td> <td>Description</td> </tr> <tr> <td>APP_SHARE_WHITELIST_TYPE_UNSPECIFIED</td> <td>0</td> <td></td> </tr> <tr> <td>APP_SHARE_WHITELIST_TYPE_UIN</td> <td>1</td> <td>UIN account</td> </tr> <tr> <td>APP_SHARE_WHITELIST_TYPE_PHONE</td> <td>2</td> <td>Mobile number</td> </tr> <tr> <td>APP_SHARE_WHITELIST_TYPE_EMAIL</td> <td>3</td> <td>Email address</td> </tr> <tr> <td>APP_SHARE_WHITELIST_TYPE_IP</td> <td>4</td> <td>IP address</td> </tr> <tr> <td>APP_SHARE_WHITELIST_TYPE_RTX</td> <td>5</td> <td>RTX account</td> </tr> </tbody> </table>
     * @param array $Values <p>Allowlist array information</p><p>Parameter format: allowlist value</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
