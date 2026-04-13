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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EnableOriginACL request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getL7EnableMode() Obtain When first enabling origin protection for a site, configure the layer-7 acceleration domain name in specific IP range mode.
<li>ALL: Target all layer-7 acceleration domain names under the current site. When the number of domains exceeds 200, please go through first in specific mode to enable 200 domain names, and enable the remaining resource via the ModifyOriginACL API.</li>
<li>Specific: Enables layer-7 acceleration for the site's designated domain name.</li>Note: When no parameter is defined, the default is specific. For subsequent addition of layer-7 acceleration domain names or layer-4 proxy instances, configure them via the ModifyOriginACL API.
 * @method void setL7EnableMode(string $L7EnableMode) Set When first enabling origin protection for a site, configure the layer-7 acceleration domain name in specific IP range mode.
<li>ALL: Target all layer-7 acceleration domain names under the current site. When the number of domains exceeds 200, please go through first in specific mode to enable 200 domain names, and enable the remaining resource via the ModifyOriginACL API.</li>
<li>Specific: Enables layer-7 acceleration for the site's designated domain name.</li>Note: When no parameter is defined, the default is specific. For subsequent addition of layer-7 acceleration domain names or layer-4 proxy instances, configure them via the ModifyOriginACL API.
 * @method array getL7Hosts() Obtain Enable the list of layer-7 acceleration domain names with origin protection. this parameter is valid only when L7EnableMode is set to specific. when L7EnableMode is set to all, retain this parameter as empty. only supports up to 200 layer-7 acceleration domain names in a single operation.
 * @method void setL7Hosts(array $L7Hosts) Set Enable the list of layer-7 acceleration domain names with origin protection. this parameter is valid only when L7EnableMode is set to specific. when L7EnableMode is set to all, retain this parameter as empty. only supports up to 200 layer-7 acceleration domain names in a single operation.
 * @method string getL4EnableMode() Obtain When first enabling origin protection for a site, configure the Layer 4 Proxy Instance Configuration in specific IP range mode.
<li>ALL: Enable all L4 proxy instances under the current site. When the instance count exceeds 100, please go through specific mode to enable 100 domain names first. Enable the remaining resources via the ModifyOriginACL API.</li>
<li>specific: Enable for the designated L4 proxy instance under the site.</li>Note: When no parameter is defined, the default is specific. Configure subsequent addition of L7 acceleration domains/L4 proxy instances via the ModifyOriginACL API.
 * @method void setL4EnableMode(string $L4EnableMode) Set When first enabling origin protection for a site, configure the Layer 4 Proxy Instance Configuration in specific IP range mode.
<li>ALL: Enable all L4 proxy instances under the current site. When the instance count exceeds 100, please go through specific mode to enable 100 domain names first. Enable the remaining resources via the ModifyOriginACL API.</li>
<li>specific: Enable for the designated L4 proxy instance under the site.</li>Note: When no parameter is defined, the default is specific. Configure subsequent addition of L7 acceleration domains/L4 proxy instances via the ModifyOriginACL API.
 * @method array getL4ProxyIds() Obtain The list of L4 proxy instances with origin protection enabled. this parameter is valid only when L4EnableMode is set to specific. retain this parameter empty when L4EnableMode is set to all. only supports up to 100 layer-4 proxy instances per operation.
 * @method void setL4ProxyIds(array $L4ProxyIds) Set The list of L4 proxy instances with origin protection enabled. this parameter is valid only when L4EnableMode is set to specific. retain this parameter empty when L4EnableMode is set to all. only supports up to 100 layer-4 proxy instances per operation.
 * @method string getOriginACLFamily() Obtain The origin protection back-to-origin ACL control domain. If left empty, the standard global control domain is used by default. Available control domain information can be obtained through the DescribeAvailableOriginACLFamily API query.
Valid values are as follows:
<li>gaz: Standard global availability zone control domain;</li>
<li>mlc: Standard Chinese mainland availability zone control domain;</li>
<li>emc: Standard global (exclude Chinese mainland) availability zone control domain;</li>
<li>plat-gaz: Simplify global availability zone control domain;</li>
<li>plat-mlc: Simplified Chinese mainland availability zone control domain;</li>
<li>plat-emc: Simplify the global (excluding Chinese mainland) availability zone control domain;</li>
 * @method void setOriginACLFamily(string $OriginACLFamily) Set The origin protection back-to-origin ACL control domain. If left empty, the standard global control domain is used by default. Available control domain information can be obtained through the DescribeAvailableOriginACLFamily API query.
Valid values are as follows:
<li>gaz: Standard global availability zone control domain;</li>
<li>mlc: Standard Chinese mainland availability zone control domain;</li>
<li>emc: Standard global (exclude Chinese mainland) availability zone control domain;</li>
<li>plat-gaz: Simplify global availability zone control domain;</li>
<li>plat-mlc: Simplified Chinese mainland availability zone control domain;</li>
<li>plat-emc: Simplify the global (excluding Chinese mainland) availability zone control domain;</li>
 */
class EnableOriginACLRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string When first enabling origin protection for a site, configure the layer-7 acceleration domain name in specific IP range mode.
<li>ALL: Target all layer-7 acceleration domain names under the current site. When the number of domains exceeds 200, please go through first in specific mode to enable 200 domain names, and enable the remaining resource via the ModifyOriginACL API.</li>
<li>Specific: Enables layer-7 acceleration for the site's designated domain name.</li>Note: When no parameter is defined, the default is specific. For subsequent addition of layer-7 acceleration domain names or layer-4 proxy instances, configure them via the ModifyOriginACL API.
     */
    public $L7EnableMode;

    /**
     * @var array Enable the list of layer-7 acceleration domain names with origin protection. this parameter is valid only when L7EnableMode is set to specific. when L7EnableMode is set to all, retain this parameter as empty. only supports up to 200 layer-7 acceleration domain names in a single operation.
     */
    public $L7Hosts;

    /**
     * @var string When first enabling origin protection for a site, configure the Layer 4 Proxy Instance Configuration in specific IP range mode.
<li>ALL: Enable all L4 proxy instances under the current site. When the instance count exceeds 100, please go through specific mode to enable 100 domain names first. Enable the remaining resources via the ModifyOriginACL API.</li>
<li>specific: Enable for the designated L4 proxy instance under the site.</li>Note: When no parameter is defined, the default is specific. Configure subsequent addition of L7 acceleration domains/L4 proxy instances via the ModifyOriginACL API.
     */
    public $L4EnableMode;

    /**
     * @var array The list of L4 proxy instances with origin protection enabled. this parameter is valid only when L4EnableMode is set to specific. retain this parameter empty when L4EnableMode is set to all. only supports up to 100 layer-4 proxy instances per operation.
     */
    public $L4ProxyIds;

    /**
     * @var string The origin protection back-to-origin ACL control domain. If left empty, the standard global control domain is used by default. Available control domain information can be obtained through the DescribeAvailableOriginACLFamily API query.
Valid values are as follows:
<li>gaz: Standard global availability zone control domain;</li>
<li>mlc: Standard Chinese mainland availability zone control domain;</li>
<li>emc: Standard global (exclude Chinese mainland) availability zone control domain;</li>
<li>plat-gaz: Simplify global availability zone control domain;</li>
<li>plat-mlc: Simplified Chinese mainland availability zone control domain;</li>
<li>plat-emc: Simplify the global (excluding Chinese mainland) availability zone control domain;</li>
     */
    public $OriginACLFamily;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $L7EnableMode When first enabling origin protection for a site, configure the layer-7 acceleration domain name in specific IP range mode.
<li>ALL: Target all layer-7 acceleration domain names under the current site. When the number of domains exceeds 200, please go through first in specific mode to enable 200 domain names, and enable the remaining resource via the ModifyOriginACL API.</li>
<li>Specific: Enables layer-7 acceleration for the site's designated domain name.</li>Note: When no parameter is defined, the default is specific. For subsequent addition of layer-7 acceleration domain names or layer-4 proxy instances, configure them via the ModifyOriginACL API.
     * @param array $L7Hosts Enable the list of layer-7 acceleration domain names with origin protection. this parameter is valid only when L7EnableMode is set to specific. when L7EnableMode is set to all, retain this parameter as empty. only supports up to 200 layer-7 acceleration domain names in a single operation.
     * @param string $L4EnableMode When first enabling origin protection for a site, configure the Layer 4 Proxy Instance Configuration in specific IP range mode.
<li>ALL: Enable all L4 proxy instances under the current site. When the instance count exceeds 100, please go through specific mode to enable 100 domain names first. Enable the remaining resources via the ModifyOriginACL API.</li>
<li>specific: Enable for the designated L4 proxy instance under the site.</li>Note: When no parameter is defined, the default is specific. Configure subsequent addition of L7 acceleration domains/L4 proxy instances via the ModifyOriginACL API.
     * @param array $L4ProxyIds The list of L4 proxy instances with origin protection enabled. this parameter is valid only when L4EnableMode is set to specific. retain this parameter empty when L4EnableMode is set to all. only supports up to 100 layer-4 proxy instances per operation.
     * @param string $OriginACLFamily The origin protection back-to-origin ACL control domain. If left empty, the standard global control domain is used by default. Available control domain information can be obtained through the DescribeAvailableOriginACLFamily API query.
Valid values are as follows:
<li>gaz: Standard global availability zone control domain;</li>
<li>mlc: Standard Chinese mainland availability zone control domain;</li>
<li>emc: Standard global (exclude Chinese mainland) availability zone control domain;</li>
<li>plat-gaz: Simplify global availability zone control domain;</li>
<li>plat-mlc: Simplified Chinese mainland availability zone control domain;</li>
<li>plat-emc: Simplify the global (excluding Chinese mainland) availability zone control domain;</li>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("L7EnableMode",$param) and $param["L7EnableMode"] !== null) {
            $this->L7EnableMode = $param["L7EnableMode"];
        }

        if (array_key_exists("L7Hosts",$param) and $param["L7Hosts"] !== null) {
            $this->L7Hosts = $param["L7Hosts"];
        }

        if (array_key_exists("L4EnableMode",$param) and $param["L4EnableMode"] !== null) {
            $this->L4EnableMode = $param["L4EnableMode"];
        }

        if (array_key_exists("L4ProxyIds",$param) and $param["L4ProxyIds"] !== null) {
            $this->L4ProxyIds = $param["L4ProxyIds"];
        }

        if (array_key_exists("OriginACLFamily",$param) and $param["OriginACLFamily"] !== null) {
            $this->OriginACLFamily = $param["OriginACLFamily"];
        }
    }
}
