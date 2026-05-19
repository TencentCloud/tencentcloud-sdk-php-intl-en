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
 * IP access restriction rules currently support configuring IP blocklist and allowlist.
 *
 * @method string getStatus() Obtain IP access restriction status. Available values:
<li>Enabled: enabled;</li>
<li>Disabled: Disabled.</li>
 * @method void setStatus(string $Status) Set IP access restriction status. Available values:
<li>Enabled: enabled;</li>
<li>Disabled: Disabled.</li>
 * @method string getFilterType() Obtain IP access restriction Type: <li>Black: blocklist method verification. Only IP requests that come from IPList in the list be intercepted.</li>
<li>White: Whitelist method verification. Only IP requests from the IPList are allowed.</li>When the Status value is Enabled, the FilterType must be assigned a value.
 * @method void setFilterType(string $FilterType) Set IP access restriction Type: <li>Black: blocklist method verification. Only IP requests that come from IPList in the list be intercepted.</li>
<li>White: Whitelist method verification. Only IP requests from the IPList are allowed.</li>When the Status value is Enabled, the FilterType must be assigned a value.
 * @method array getIPList() Obtain IP list, supports IPV4 addresses in X.X.X.X format, IPV6 addresses in X:X:X:X:X:X:X:X format, or ranges in /N format (IPV4:1≤N≤32; IPV6:1≤N≤128). Up to 200 IPs or ranges can be filled. When Status value is Enabled, IPList must assign value.
 * @method void setIPList(array $IPList) Set IP list, supports IPV4 addresses in X.X.X.X format, IPV6 addresses in X:X:X:X:X:X:X:X format, or ranges in /N format (IPV4:1≤N≤32; IPV6:1≤N≤128). Up to 200 IPs or ranges can be filled. When Status value is Enabled, IPList must assign value.
 */
class IPFilterPolicy extends AbstractModel
{
    /**
     * @var string IP access restriction status. Available values:
<li>Enabled: enabled;</li>
<li>Disabled: Disabled.</li>
     */
    public $Status;

    /**
     * @var string IP access restriction Type: <li>Black: blocklist method verification. Only IP requests that come from IPList in the list be intercepted.</li>
<li>White: Whitelist method verification. Only IP requests from the IPList are allowed.</li>When the Status value is Enabled, the FilterType must be assigned a value.
     */
    public $FilterType;

    /**
     * @var array IP list, supports IPV4 addresses in X.X.X.X format, IPV6 addresses in X:X:X:X:X:X:X:X format, or ranges in /N format (IPV4:1≤N≤32; IPV6:1≤N≤128). Up to 200 IPs or ranges can be filled. When Status value is Enabled, IPList must assign value.
     */
    public $IPList;

    /**
     * @param string $Status IP access restriction status. Available values:
<li>Enabled: enabled;</li>
<li>Disabled: Disabled.</li>
     * @param string $FilterType IP access restriction Type: <li>Black: blocklist method verification. Only IP requests that come from IPList in the list be intercepted.</li>
<li>White: Whitelist method verification. Only IP requests from the IPList are allowed.</li>When the Status value is Enabled, the FilterType must be assigned a value.
     * @param array $IPList IP list, supports IPV4 addresses in X.X.X.X format, IPV6 addresses in X:X:X:X:X:X:X:X format, or ranges in /N format (IPV4:1≤N≤32; IPV6:1≤N≤128). Up to 200 IPs or ranges can be filled. When Status value is Enabled, IPList must assign value.
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

        if (array_key_exists("FilterType",$param) and $param["FilterType"] !== null) {
            $this->FilterType = $param["FilterType"];
        }

        if (array_key_exists("IPList",$param) and $param["IPList"] !== null) {
            $this->IPList = $param["IPList"];
        }
    }
}
