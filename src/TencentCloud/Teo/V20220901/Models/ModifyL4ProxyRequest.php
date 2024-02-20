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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyL4Proxy request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getProxyId() Obtain Application ID.
 * @method void setProxyId(string $ProxyId) Set Application ID.
 * @method string getIpv6() Obtain Specifies whether to enable IPv6 access. If this parameter is not filled, this configuration will not be modified. This configuration can only be enabled in certain acceleration zones and security protection configurations. For details, see [Creating an L4 Proxy Instance] (https://intl.cloud.tencent.com/document/product/1552/90025?from_cn_redirect=1). Valid values:<li>on: Enable;</li> 
<li>off: Disable.</li>

 * @method void setIpv6(string $Ipv6) Set Specifies whether to enable IPv6 access. If this parameter is not filled, this configuration will not be modified. This configuration can only be enabled in certain acceleration zones and security protection configurations. For details, see [Creating an L4 Proxy Instance] (https://intl.cloud.tencent.com/document/product/1552/90025?from_cn_redirect=1). Valid values:<li>on: Enable;</li> 
<li>off: Disable.</li>

 * @method string getAccelerateMainland() Obtain Specifies whether to enable network optimization in the Chinese mainland. If this parameter is not filled, this configuration will not be modified. This configuration can only be enabled in certain acceleration zones and security protection configurations. For details, see [Creating an L4 Proxy Instance] (https://intl.cloud.tencent.com/document/product/1552/90025?from_cn_redirect=1). Valid values:<li>on: Enable;</li> 
<li>off: Disable.</li>
 * @method void setAccelerateMainland(string $AccelerateMainland) Set Specifies whether to enable network optimization in the Chinese mainland. If this parameter is not filled, this configuration will not be modified. This configuration can only be enabled in certain acceleration zones and security protection configurations. For details, see [Creating an L4 Proxy Instance] (https://intl.cloud.tencent.com/document/product/1552/90025?from_cn_redirect=1). Valid values:<li>on: Enable;</li> 
<li>off: Disable.</li>
 */
class ModifyL4ProxyRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Application ID.
     */
    public $ProxyId;

    /**
     * @var string Specifies whether to enable IPv6 access. If this parameter is not filled, this configuration will not be modified. This configuration can only be enabled in certain acceleration zones and security protection configurations. For details, see [Creating an L4 Proxy Instance] (https://intl.cloud.tencent.com/document/product/1552/90025?from_cn_redirect=1). Valid values:<li>on: Enable;</li> 
<li>off: Disable.</li>

     */
    public $Ipv6;

    /**
     * @var string Specifies whether to enable network optimization in the Chinese mainland. If this parameter is not filled, this configuration will not be modified. This configuration can only be enabled in certain acceleration zones and security protection configurations. For details, see [Creating an L4 Proxy Instance] (https://intl.cloud.tencent.com/document/product/1552/90025?from_cn_redirect=1). Valid values:<li>on: Enable;</li> 
<li>off: Disable.</li>
     */
    public $AccelerateMainland;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $ProxyId Application ID.
     * @param string $Ipv6 Specifies whether to enable IPv6 access. If this parameter is not filled, this configuration will not be modified. This configuration can only be enabled in certain acceleration zones and security protection configurations. For details, see [Creating an L4 Proxy Instance] (https://intl.cloud.tencent.com/document/product/1552/90025?from_cn_redirect=1). Valid values:<li>on: Enable;</li> 
<li>off: Disable.</li>

     * @param string $AccelerateMainland Specifies whether to enable network optimization in the Chinese mainland. If this parameter is not filled, this configuration will not be modified. This configuration can only be enabled in certain acceleration zones and security protection configurations. For details, see [Creating an L4 Proxy Instance] (https://intl.cloud.tencent.com/document/product/1552/90025?from_cn_redirect=1). Valid values:<li>on: Enable;</li> 
<li>off: Disable.</li>
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

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("Ipv6",$param) and $param["Ipv6"] !== null) {
            $this->Ipv6 = $param["Ipv6"];
        }

        if (array_key_exists("AccelerateMainland",$param) and $param["AccelerateMainland"] !== null) {
            $this->AccelerateMainland = $param["AccelerateMainland"];
        }
    }
}
