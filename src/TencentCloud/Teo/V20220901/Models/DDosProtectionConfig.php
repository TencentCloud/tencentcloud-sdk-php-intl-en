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
 * Exclusive DDoS protection specification configuration for Layer 4 proxy or website services.
 *
 * @method string getLevelMainland() Obtain Dedicated anti-DDoS specifications in the Chinese mainland. For details, refer to [Dedicated Anti-DDoS Related Fees](https://www.tencentcloud.com/document/product/1552/94162?from_cn_redirect=1)
<li>PLATFORM: uses the default protection. Dedicated anti-DDoS is not enabled;</li>
<li>BASE30_MAX300: enables exclusive DDoS protection, providing 30 Gbps baseline protection bandwidth and 300 Gbps elastic protection bandwidth;</li>
<li>BASE60_MAX600: uses dedicated anti-DDoS, which provides 60 Gbps guaranteed protection bandwidth and up to 600 Gbps elastic protection bandwidth. </li>If this field is not specified, the default value 'PLATFORM' will be used.
 * @method void setLevelMainland(string $LevelMainland) Set Dedicated anti-DDoS specifications in the Chinese mainland. For details, refer to [Dedicated Anti-DDoS Related Fees](https://www.tencentcloud.com/document/product/1552/94162?from_cn_redirect=1)
<li>PLATFORM: uses the default protection. Dedicated anti-DDoS is not enabled;</li>
<li>BASE30_MAX300: enables exclusive DDoS protection, providing 30 Gbps baseline protection bandwidth and 300 Gbps elastic protection bandwidth;</li>
<li>BASE60_MAX600: uses dedicated anti-DDoS, which provides 60 Gbps guaranteed protection bandwidth and up to 600 Gbps elastic protection bandwidth. </li>If this field is not specified, the default value 'PLATFORM' will be used.
 * @method integer getMaxBandwidthMainland() Obtain Configuration of elastic protection bandwidth for exclusive DDoS protection in the Chinese mainland.
Valid only when standalone DDos mitigation is enabled for the Chinese mainland region (see the LevelMainland parameter configuration). The value range imposes the following limitations:
<li>To enable exclusive DDoS protection in Chinese mainland with a 30 Gbps baseline protection bandwidth specification (LevelMainland parameter value: BASE30_MAX300): valid value range is 30 to 300, in Gbps;</li>
<li>To enable exclusive DDoS protection in the Chinese mainland with a 60 Gbps baseline protection bandwidth specification (when the LevelMainland parameter value is BASE60_MAX600): the valid value range is 60 to 600, in Gbps;</li>
<li>Use platform default protection (LevelMainland parameter value is PLATFORM): cannot be configured, the value of this parameter is invalid.</li>
 * @method void setMaxBandwidthMainland(integer $MaxBandwidthMainland) Set Configuration of elastic protection bandwidth for exclusive DDoS protection in the Chinese mainland.
Valid only when standalone DDos mitigation is enabled for the Chinese mainland region (see the LevelMainland parameter configuration). The value range imposes the following limitations:
<li>To enable exclusive DDoS protection in Chinese mainland with a 30 Gbps baseline protection bandwidth specification (LevelMainland parameter value: BASE30_MAX300): valid value range is 30 to 300, in Gbps;</li>
<li>To enable exclusive DDoS protection in the Chinese mainland with a 60 Gbps baseline protection bandwidth specification (when the LevelMainland parameter value is BASE60_MAX600): the valid value range is 60 to 600, in Gbps;</li>
<li>Use platform default protection (LevelMainland parameter value is PLATFORM): cannot be configured, the value of this parameter is invalid.</li>
 * @method string getLevelOverseas() Obtain Dedicated anti-DDoS specifications in global regions (excluding the Chinese mainland).
<li>PLATFORM: uses the default protection. Dedicated anti-DDoS is not enabled;</li>
<li>ANYCAST300: enables exclusive DDoS protection, providing 300 Gbps protection bandwidth;</li>
<li>ANYCAST_ALLIN: uses dedicated anti-DDoS, which provides all available protection resources. </li>If this field is not specified, the default value 'PLATFORM' will be used.
 * @method void setLevelOverseas(string $LevelOverseas) Set Dedicated anti-DDoS specifications in global regions (excluding the Chinese mainland).
<li>PLATFORM: uses the default protection. Dedicated anti-DDoS is not enabled;</li>
<li>ANYCAST300: enables exclusive DDoS protection, providing 300 Gbps protection bandwidth;</li>
<li>ANYCAST_ALLIN: uses dedicated anti-DDoS, which provides all available protection resources. </li>If this field is not specified, the default value 'PLATFORM' will be used.
 */
class DDosProtectionConfig extends AbstractModel
{
    /**
     * @var string Dedicated anti-DDoS specifications in the Chinese mainland. For details, refer to [Dedicated Anti-DDoS Related Fees](https://www.tencentcloud.com/document/product/1552/94162?from_cn_redirect=1)
<li>PLATFORM: uses the default protection. Dedicated anti-DDoS is not enabled;</li>
<li>BASE30_MAX300: enables exclusive DDoS protection, providing 30 Gbps baseline protection bandwidth and 300 Gbps elastic protection bandwidth;</li>
<li>BASE60_MAX600: uses dedicated anti-DDoS, which provides 60 Gbps guaranteed protection bandwidth and up to 600 Gbps elastic protection bandwidth. </li>If this field is not specified, the default value 'PLATFORM' will be used.
     */
    public $LevelMainland;

    /**
     * @var integer Configuration of elastic protection bandwidth for exclusive DDoS protection in the Chinese mainland.
Valid only when standalone DDos mitigation is enabled for the Chinese mainland region (see the LevelMainland parameter configuration). The value range imposes the following limitations:
<li>To enable exclusive DDoS protection in Chinese mainland with a 30 Gbps baseline protection bandwidth specification (LevelMainland parameter value: BASE30_MAX300): valid value range is 30 to 300, in Gbps;</li>
<li>To enable exclusive DDoS protection in the Chinese mainland with a 60 Gbps baseline protection bandwidth specification (when the LevelMainland parameter value is BASE60_MAX600): the valid value range is 60 to 600, in Gbps;</li>
<li>Use platform default protection (LevelMainland parameter value is PLATFORM): cannot be configured, the value of this parameter is invalid.</li>
     */
    public $MaxBandwidthMainland;

    /**
     * @var string Dedicated anti-DDoS specifications in global regions (excluding the Chinese mainland).
<li>PLATFORM: uses the default protection. Dedicated anti-DDoS is not enabled;</li>
<li>ANYCAST300: enables exclusive DDoS protection, providing 300 Gbps protection bandwidth;</li>
<li>ANYCAST_ALLIN: uses dedicated anti-DDoS, which provides all available protection resources. </li>If this field is not specified, the default value 'PLATFORM' will be used.
     */
    public $LevelOverseas;

    /**
     * @param string $LevelMainland Dedicated anti-DDoS specifications in the Chinese mainland. For details, refer to [Dedicated Anti-DDoS Related Fees](https://www.tencentcloud.com/document/product/1552/94162?from_cn_redirect=1)
<li>PLATFORM: uses the default protection. Dedicated anti-DDoS is not enabled;</li>
<li>BASE30_MAX300: enables exclusive DDoS protection, providing 30 Gbps baseline protection bandwidth and 300 Gbps elastic protection bandwidth;</li>
<li>BASE60_MAX600: uses dedicated anti-DDoS, which provides 60 Gbps guaranteed protection bandwidth and up to 600 Gbps elastic protection bandwidth. </li>If this field is not specified, the default value 'PLATFORM' will be used.
     * @param integer $MaxBandwidthMainland Configuration of elastic protection bandwidth for exclusive DDoS protection in the Chinese mainland.
Valid only when standalone DDos mitigation is enabled for the Chinese mainland region (see the LevelMainland parameter configuration). The value range imposes the following limitations:
<li>To enable exclusive DDoS protection in Chinese mainland with a 30 Gbps baseline protection bandwidth specification (LevelMainland parameter value: BASE30_MAX300): valid value range is 30 to 300, in Gbps;</li>
<li>To enable exclusive DDoS protection in the Chinese mainland with a 60 Gbps baseline protection bandwidth specification (when the LevelMainland parameter value is BASE60_MAX600): the valid value range is 60 to 600, in Gbps;</li>
<li>Use platform default protection (LevelMainland parameter value is PLATFORM): cannot be configured, the value of this parameter is invalid.</li>
     * @param string $LevelOverseas Dedicated anti-DDoS specifications in global regions (excluding the Chinese mainland).
<li>PLATFORM: uses the default protection. Dedicated anti-DDoS is not enabled;</li>
<li>ANYCAST300: enables exclusive DDoS protection, providing 300 Gbps protection bandwidth;</li>
<li>ANYCAST_ALLIN: uses dedicated anti-DDoS, which provides all available protection resources. </li>If this field is not specified, the default value 'PLATFORM' will be used.
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
        if (array_key_exists("LevelMainland",$param) and $param["LevelMainland"] !== null) {
            $this->LevelMainland = $param["LevelMainland"];
        }

        if (array_key_exists("MaxBandwidthMainland",$param) and $param["MaxBandwidthMainland"] !== null) {
            $this->MaxBandwidthMainland = $param["MaxBandwidthMainland"];
        }

        if (array_key_exists("LevelOverseas",$param) and $param["LevelOverseas"] !== null) {
            $this->LevelOverseas = $param["LevelOverseas"];
        }
    }
}
