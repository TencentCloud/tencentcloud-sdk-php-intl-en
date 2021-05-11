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
<li>`Black`: blocklist</li>
<li>`White`: allowlist</li>
 * @method void setAuthType(string $AuthType) Set Referer authentication method. Valid values:
<li>`Black`: blocklist</li>
<li>`White`: allowlist</li>
 * @method array getReferers() Obtain List for referer authentication
 * @method void setReferers(array $Referers) Set List for referer authentication
 * @method string getBlankRefererAllowed() Obtain Whether to allow requests with empty referer to access this domain name. Valid values:
<li>Yes</li>
<li>No</li>
 * @method void setBlankRefererAllowed(string $BlankRefererAllowed) Set Whether to allow requests with empty referer to access this domain name. Valid values:
<li>Yes</li>
<li>No</li>
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
<li>`Black`: blocklist</li>
<li>`White`: allowlist</li>
     */
    public $AuthType;

    /**
     * @var array List for referer authentication
     */
    public $Referers;

    /**
     * @var string Whether to allow requests with empty referer to access this domain name. Valid values:
<li>Yes</li>
<li>No</li>
     */
    public $BlankRefererAllowed;

    /**
     * @param string $Status [Referer hotlink protection](https://intl.cloud.tencent.com/document/product/266/33985) status. Valid values:
<li>Enabled</li>
<li>Disabled</li>
     * @param string $AuthType Referer authentication method. Valid values:
<li>`Black`: blocklist</li>
<li>`White`: allowlist</li>
     * @param array $Referers List for referer authentication
     * @param string $BlankRefererAllowed Whether to allow requests with empty referer to access this domain name. Valid values:
<li>Yes</li>
<li>No</li>
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
