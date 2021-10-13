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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Referer hotlink protection configuration
 *
 * @method string getStatus() Obtain [Referer hotlink protection](https://intl.cloud.tencent.com/document/product/266/33985) status. Valid values:
<li>Enabled</li>
<li>Disabled</li>
 * @method void setStatus(string $Status) Set [Referer hotlink protection](https://intl.cloud.tencent.com/document/product/266/33985) status. Valid values:
<li>Enabled</li>
<li>Disabled</li>
 * @method string getAuthType() Obtain Referer authentication method. Valid values:
<li>`Black`: blocklist. Any HTTP request carrying a referer in the `Referers` list will be rejected. </li>
<li>`White`: allowlist. Only HTTP requests carrying referers in the `Referers` list will be accepted.</li>
When `Status` is set to `Enabled`, `AuthType` must be specified.
 * @method void setAuthType(string $AuthType) Set Referer authentication method. Valid values:
<li>`Black`: blocklist. Any HTTP request carrying a referer in the `Referers` list will be rejected. </li>
<li>`White`: allowlist. Only HTTP requests carrying referers in the `Referers` list will be accepted.</li>
When `Status` is set to `Enabled`, `AuthType` must be specified.
 * @method array getReferers() Obtain The list of referers (up to 20). When `Status` is set to `Enabled`, `Referers` cannot be empty. Enter domain names as referers.
 * @method void setReferers(array $Referers) Set The list of referers (up to 20). When `Status` is set to `Enabled`, `Referers` cannot be empty. Enter domain names as referers.
 * @method string getBlankRefererAllowed() Obtain Whether to allow requests with empty referer to access this domain name. Valid values:
<li>`Yes`</li>
<li>`No`</li>
When `Status` is set to `Enabled`, `BlankRefererAllowed` must be specified.
 * @method void setBlankRefererAllowed(string $BlankRefererAllowed) Set Whether to allow requests with empty referer to access this domain name. Valid values:
<li>`Yes`</li>
<li>`No`</li>
When `Status` is set to `Enabled`, `BlankRefererAllowed` must be specified.
 */
class RefererAuthPolicy extends AbstractModel
{
    /**
     * @var string [Referer hotlink protection](https://intl.cloud.tencent.com/document/product/266/33985) status. Valid values:
<li>Enabled</li>
<li>Disabled</li>
     */
    public $Status;

    /**
     * @var string Referer authentication method. Valid values:
<li>`Black`: blocklist. Any HTTP request carrying a referer in the `Referers` list will be rejected. </li>
<li>`White`: allowlist. Only HTTP requests carrying referers in the `Referers` list will be accepted.</li>
When `Status` is set to `Enabled`, `AuthType` must be specified.
     */
    public $AuthType;

    /**
     * @var array The list of referers (up to 20). When `Status` is set to `Enabled`, `Referers` cannot be empty. Enter domain names as referers.
     */
    public $Referers;

    /**
     * @var string Whether to allow requests with empty referer to access this domain name. Valid values:
<li>`Yes`</li>
<li>`No`</li>
When `Status` is set to `Enabled`, `BlankRefererAllowed` must be specified.
     */
    public $BlankRefererAllowed;

    /**
     * @param string $Status [Referer hotlink protection](https://intl.cloud.tencent.com/document/product/266/33985) status. Valid values:
<li>Enabled</li>
<li>Disabled</li>
     * @param string $AuthType Referer authentication method. Valid values:
<li>`Black`: blocklist. Any HTTP request carrying a referer in the `Referers` list will be rejected. </li>
<li>`White`: allowlist. Only HTTP requests carrying referers in the `Referers` list will be accepted.</li>
When `Status` is set to `Enabled`, `AuthType` must be specified.
     * @param array $Referers The list of referers (up to 20). When `Status` is set to `Enabled`, `Referers` cannot be empty. Enter domain names as referers.
     * @param string $BlankRefererAllowed Whether to allow requests with empty referer to access this domain name. Valid values:
<li>`Yes`</li>
<li>`No`</li>
When `Status` is set to `Enabled`, `BlankRefererAllowed` must be specified.
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
