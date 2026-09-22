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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Referer anti-leech configuration
 *
 * @method string getStatus() Obtain [Referer hotlink protection](https://www.tencentcloud.com/document/product/266/14046?from_cn_redirect=1) setting status. Available values:
<li>Enabled: enable;</li>
<li>Disabled: Disabled.</li>
 * @method void setStatus(string $Status) Set [Referer hotlink protection](https://www.tencentcloud.com/document/product/266/14046?from_cn_redirect=1) setting status. Available values:
<li>Enabled: enable;</li>
<li>Disabled: Disabled.</li>
 * @method string getAuthType() Obtain Referer verification type. Available values:
<li>Black: blocklist method validation. An HTTP request carrying a certain Referer in the Referers list will be rejected.</li>
<li>White: whitelist method validation. HTTP requests are allowed only when they carry a Referer in the Referers list.</li>
When Status is Enabled, AuthType must be assigned a value.
 * @method void setAuthType(string $AuthType) Set Referer verification type. Available values:
<li>Black: blocklist method validation. An HTTP request carrying a certain Referer in the Referers list will be rejected.</li>
<li>White: whitelist method validation. HTTP requests are allowed only when they carry a Referer in the Referers list.</li>
When Status is Enabled, AuthType must be assigned a value.
 * @method array getReferers() Obtain List of Referer fields used for verification. Supports up to 400 Referer fields. When Status is Enabled, Referers cannot be an empty array. The format of Referer follows the reference domain format.
 * @method void setReferers(array $Referers) Set List of Referer fields used for verification. Supports up to 400 Referer fields. When Status is Enabled, Referers cannot be an empty array. The format of Referer follows the reference domain format.
 * @method string getBlankRefererAllowed() Obtain Whether to allow access to this domain name with a null Referer. Available values:
<li>Yes: yes.</li>
<li>No: no.</li>
When Status is Enabled, BlankRefererAllowed must be assigned a value.
 * @method void setBlankRefererAllowed(string $BlankRefererAllowed) Set Whether to allow access to this domain name with a null Referer. Available values:
<li>Yes: yes.</li>
<li>No: no.</li>
When Status is Enabled, BlankRefererAllowed must be assigned a value.
 */
class RefererAuthPolicy extends AbstractModel
{
    /**
     * @var string [Referer hotlink protection](https://www.tencentcloud.com/document/product/266/14046?from_cn_redirect=1) setting status. Available values:
<li>Enabled: enable;</li>
<li>Disabled: Disabled.</li>
     */
    public $Status;

    /**
     * @var string Referer verification type. Available values:
<li>Black: blocklist method validation. An HTTP request carrying a certain Referer in the Referers list will be rejected.</li>
<li>White: whitelist method validation. HTTP requests are allowed only when they carry a Referer in the Referers list.</li>
When Status is Enabled, AuthType must be assigned a value.
     */
    public $AuthType;

    /**
     * @var array List of Referer fields used for verification. Supports up to 400 Referer fields. When Status is Enabled, Referers cannot be an empty array. The format of Referer follows the reference domain format.
     */
    public $Referers;

    /**
     * @var string Whether to allow access to this domain name with a null Referer. Available values:
<li>Yes: yes.</li>
<li>No: no.</li>
When Status is Enabled, BlankRefererAllowed must be assigned a value.
     */
    public $BlankRefererAllowed;

    /**
     * @param string $Status [Referer hotlink protection](https://www.tencentcloud.com/document/product/266/14046?from_cn_redirect=1) setting status. Available values:
<li>Enabled: enable;</li>
<li>Disabled: Disabled.</li>
     * @param string $AuthType Referer verification type. Available values:
<li>Black: blocklist method validation. An HTTP request carrying a certain Referer in the Referers list will be rejected.</li>
<li>White: whitelist method validation. HTTP requests are allowed only when they carry a Referer in the Referers list.</li>
When Status is Enabled, AuthType must be assigned a value.
     * @param array $Referers List of Referer fields used for verification. Supports up to 400 Referer fields. When Status is Enabled, Referers cannot be an empty array. The format of Referer follows the reference domain format.
     * @param string $BlankRefererAllowed Whether to allow access to this domain name with a null Referer. Available values:
<li>Yes: yes.</li>
<li>No: no.</li>
When Status is Enabled, BlankRefererAllowed must be assigned a value.
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("Referers",$param) and $param["Referers"] !== null) {
            $this->Referers = $param["Referers"];
        }

        if (array_key_exists("BlankRefererAllowed",$param) and $param["BlankRefererAllowed"] !== null) {
            $this->BlankRefererAllowed = $param["BlankRefererAllowed"];
        }
    }
}
