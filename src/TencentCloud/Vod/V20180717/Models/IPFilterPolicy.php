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
 * IP access restriction rules, currently supports configuring IP blocklist and allowlist.
 *
 * @method string getStatus() Obtain IP access restriction status. Optional values:
<li>Enabled: enable;</li>
<li>Disabled: disable.</li>
 * @method void setStatus(string $Status) Set IP access restriction status. Optional values:
<li>Enabled: enable;</li>
<li>Disabled: disable.</li>
 * @method string getFilterType() Obtain IP access restriction type:
<li>Black: blocklist-based verification. Only IP requests from the IPList will be blocked.</li>
<li>White: allowlist-based verification. Only IP requests from the IPList will be allowed.</li>When Status is set to Enabled, FilterType must be assigned.
 * @method void setFilterType(string $FilterType) Set IP access restriction type:
<li>Black: blocklist-based verification. Only IP requests from the IPList will be blocked.</li>
<li>White: allowlist-based verification. Only IP requests from the IPList will be allowed.</li>When Status is set to Enabled, FilterType must be assigned.
 * @method array getIPList() Obtain IP list, supporting IPV4 addresses in X.X.X.X format, IPV6 addresses in X:X:X:X:X:X:X:X format, or CIDR notation /N (IPV4: 1 ≤ N ≤ 32; IPV6: 1 ≤ N ≤ 128). A maximum of 200 IPs or CIDR blocks can be added. When Status is set to Enabled, IPList must be assigned.
 * @method void setIPList(array $IPList) Set IP list, supporting IPV4 addresses in X.X.X.X format, IPV6 addresses in X:X:X:X:X:X:X:X format, or CIDR notation /N (IPV4: 1 ≤ N ≤ 32; IPV6: 1 ≤ N ≤ 128). A maximum of 200 IPs or CIDR blocks can be added. When Status is set to Enabled, IPList must be assigned.
 */
class IPFilterPolicy extends AbstractModel
{
    /**
     * @var string IP access restriction status. Optional values:
<li>Enabled: enable;</li>
<li>Disabled: disable.</li>
     */
    public $Status;

    /**
     * @var string IP access restriction type:
<li>Black: blocklist-based verification. Only IP requests from the IPList will be blocked.</li>
<li>White: allowlist-based verification. Only IP requests from the IPList will be allowed.</li>When Status is set to Enabled, FilterType must be assigned.
     */
    public $FilterType;

    /**
     * @var array IP list, supporting IPV4 addresses in X.X.X.X format, IPV6 addresses in X:X:X:X:X:X:X:X format, or CIDR notation /N (IPV4: 1 ≤ N ≤ 32; IPV6: 1 ≤ N ≤ 128). A maximum of 200 IPs or CIDR blocks can be added. When Status is set to Enabled, IPList must be assigned.
     */
    public $IPList;

    /**
     * @param string $Status IP access restriction status. Optional values:
<li>Enabled: enable;</li>
<li>Disabled: disable.</li>
     * @param string $FilterType IP access restriction type:
<li>Black: blocklist-based verification. Only IP requests from the IPList will be blocked.</li>
<li>White: allowlist-based verification. Only IP requests from the IPList will be allowed.</li>When Status is set to Enabled, FilterType must be assigned.
     * @param array $IPList IP list, supporting IPV4 addresses in X.X.X.X format, IPV6 addresses in X:X:X:X:X:X:X:X format, or CIDR notation /N (IPV4: 1 ≤ N ≤ 32; IPV6: 1 ≤ N ≤ 128). A maximum of 200 IPs or CIDR blocks can be added. When Status is set to Enabled, IPList must be assigned.
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
