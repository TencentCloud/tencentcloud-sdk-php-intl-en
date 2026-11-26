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
 * Quotation Parameters
 *
 * @method string getKey() Obtain Price inquiry parameter key.
 * @method void setKey(string $Key) Set Price inquiry parameter key.
 * @method string getValue() Obtain Quotation parameter value.
 * @method void setValue(string $Value) Set Quotation parameter value.
 * @method string getPack() Obtain Quota for inquiry parameter mapping. Valid values:
<li>zone: sites;</li>
<li>custom-rule: number of custom rules;</li>
<li>rate-limiting-rule: rate limiting rule;</li>
<li>l4-proxy-instance: number of L4 proxy instances.</li>
 * @method void setPack(string $Pack) Set Quota for inquiry parameter mapping. Valid values:
<li>zone: sites;</li>
<li>custom-rule: number of custom rules;</li>
<li>rate-limiting-rule: rate limiting rule;</li>
<li>l4-proxy-instance: number of L4 proxy instances.</li>
 * @method string getInstanceId() Obtain L4 proxy instance Id mapped to the price inquiry parameter.
 * @method void setInstanceId(string $InstanceId) Set L4 proxy instance Id mapped to the price inquiry parameter.
 * @method string getProtectionSpecs() Obtain Inquiry parameter corresponding to the protection level.
Valid values: <li> cm_30G: 30 Gbps baseline protection for the Chinese mainland acceleration area;</li><li> cm_60G: 60 Gbps baseline protection for the Chinese mainland acceleration area;</li><li> cm_100G: 100 Gbps baseline protection for the Chinese mainland acceleration area;</li><li> anycast_300G: 300 Gbps anycast joint protection for the global acceleration region (outside Chinese mainland);</li><li> anycast_unlimited: unlimited anycast full protection for the global acceleration region (outside Chinese mainland);</li><li> cm_30G_anycast_300G: 30 Gbps baseline protection for the Chinese mainland acceleration area, 300 Gbps anycast joint protection for the global acceleration region (outside Chinese mainland);</li><li> cm_30G_anycast_unlimited: 30 Gbps baseline protection for the Chinese mainland acceleration area, unlimited anycast full protection for the global acceleration region (outside Chinese mainland);</li><li> cm_60G_anycast_300G: 60 Gbps baseline protection for the Chinese mainland acceleration area, 300 Gbps anycast joint protection for the global acceleration region (outside Chinese mainland);</li><li> cm_60G_anycast_unlimited: 60 Gbps baseline protection for the Chinese mainland acceleration area, unlimited anycast full protection for the global acceleration region (outside Chinese mainland);</li><li> cm_100G_anycast_300G: 100 Gbps baseline protection for the Chinese mainland acceleration area, 300 Gbps anycast joint protection for the global acceleration region (outside Chinese mainland);</li><li> cm_100G_anycast_unlimited: 100 Gbps baseline protection for the Chinese mainland acceleration area, unlimited anycast full protection for the global acceleration region (outside Chinese mainland).</li>
 * @method void setProtectionSpecs(string $ProtectionSpecs) Set Inquiry parameter corresponding to the protection level.
Valid values: <li> cm_30G: 30 Gbps baseline protection for the Chinese mainland acceleration area;</li><li> cm_60G: 60 Gbps baseline protection for the Chinese mainland acceleration area;</li><li> cm_100G: 100 Gbps baseline protection for the Chinese mainland acceleration area;</li><li> anycast_300G: 300 Gbps anycast joint protection for the global acceleration region (outside Chinese mainland);</li><li> anycast_unlimited: unlimited anycast full protection for the global acceleration region (outside Chinese mainland);</li><li> cm_30G_anycast_300G: 30 Gbps baseline protection for the Chinese mainland acceleration area, 300 Gbps anycast joint protection for the global acceleration region (outside Chinese mainland);</li><li> cm_30G_anycast_unlimited: 30 Gbps baseline protection for the Chinese mainland acceleration area, unlimited anycast full protection for the global acceleration region (outside Chinese mainland);</li><li> cm_60G_anycast_300G: 60 Gbps baseline protection for the Chinese mainland acceleration area, 300 Gbps anycast joint protection for the global acceleration region (outside Chinese mainland);</li><li> cm_60G_anycast_unlimited: 60 Gbps baseline protection for the Chinese mainland acceleration area, unlimited anycast full protection for the global acceleration region (outside Chinese mainland);</li><li> cm_100G_anycast_300G: 100 Gbps baseline protection for the Chinese mainland acceleration area, 300 Gbps anycast joint protection for the global acceleration region (outside Chinese mainland);</li><li> cm_100G_anycast_unlimited: 100 Gbps baseline protection for the Chinese mainland acceleration area, unlimited anycast full protection for the global acceleration region (outside Chinese mainland).</li>
 */
class Sv extends AbstractModel
{
    /**
     * @var string Price inquiry parameter key.
     */
    public $Key;

    /**
     * @var string Quotation parameter value.
     */
    public $Value;

    /**
     * @var string Quota for inquiry parameter mapping. Valid values:
<li>zone: sites;</li>
<li>custom-rule: number of custom rules;</li>
<li>rate-limiting-rule: rate limiting rule;</li>
<li>l4-proxy-instance: number of L4 proxy instances.</li>
     */
    public $Pack;

    /**
     * @var string L4 proxy instance Id mapped to the price inquiry parameter.
     */
    public $InstanceId;

    /**
     * @var string Inquiry parameter corresponding to the protection level.
Valid values: <li> cm_30G: 30 Gbps baseline protection for the Chinese mainland acceleration area;</li><li> cm_60G: 60 Gbps baseline protection for the Chinese mainland acceleration area;</li><li> cm_100G: 100 Gbps baseline protection for the Chinese mainland acceleration area;</li><li> anycast_300G: 300 Gbps anycast joint protection for the global acceleration region (outside Chinese mainland);</li><li> anycast_unlimited: unlimited anycast full protection for the global acceleration region (outside Chinese mainland);</li><li> cm_30G_anycast_300G: 30 Gbps baseline protection for the Chinese mainland acceleration area, 300 Gbps anycast joint protection for the global acceleration region (outside Chinese mainland);</li><li> cm_30G_anycast_unlimited: 30 Gbps baseline protection for the Chinese mainland acceleration area, unlimited anycast full protection for the global acceleration region (outside Chinese mainland);</li><li> cm_60G_anycast_300G: 60 Gbps baseline protection for the Chinese mainland acceleration area, 300 Gbps anycast joint protection for the global acceleration region (outside Chinese mainland);</li><li> cm_60G_anycast_unlimited: 60 Gbps baseline protection for the Chinese mainland acceleration area, unlimited anycast full protection for the global acceleration region (outside Chinese mainland);</li><li> cm_100G_anycast_300G: 100 Gbps baseline protection for the Chinese mainland acceleration area, 300 Gbps anycast joint protection for the global acceleration region (outside Chinese mainland);</li><li> cm_100G_anycast_unlimited: 100 Gbps baseline protection for the Chinese mainland acceleration area, unlimited anycast full protection for the global acceleration region (outside Chinese mainland).</li>
     */
    public $ProtectionSpecs;

    /**
     * @param string $Key Price inquiry parameter key.
     * @param string $Value Quotation parameter value.
     * @param string $Pack Quota for inquiry parameter mapping. Valid values:
<li>zone: sites;</li>
<li>custom-rule: number of custom rules;</li>
<li>rate-limiting-rule: rate limiting rule;</li>
<li>l4-proxy-instance: number of L4 proxy instances.</li>
     * @param string $InstanceId L4 proxy instance Id mapped to the price inquiry parameter.
     * @param string $ProtectionSpecs Inquiry parameter corresponding to the protection level.
Valid values: <li> cm_30G: 30 Gbps baseline protection for the Chinese mainland acceleration area;</li><li> cm_60G: 60 Gbps baseline protection for the Chinese mainland acceleration area;</li><li> cm_100G: 100 Gbps baseline protection for the Chinese mainland acceleration area;</li><li> anycast_300G: 300 Gbps anycast joint protection for the global acceleration region (outside Chinese mainland);</li><li> anycast_unlimited: unlimited anycast full protection for the global acceleration region (outside Chinese mainland);</li><li> cm_30G_anycast_300G: 30 Gbps baseline protection for the Chinese mainland acceleration area, 300 Gbps anycast joint protection for the global acceleration region (outside Chinese mainland);</li><li> cm_30G_anycast_unlimited: 30 Gbps baseline protection for the Chinese mainland acceleration area, unlimited anycast full protection for the global acceleration region (outside Chinese mainland);</li><li> cm_60G_anycast_300G: 60 Gbps baseline protection for the Chinese mainland acceleration area, 300 Gbps anycast joint protection for the global acceleration region (outside Chinese mainland);</li><li> cm_60G_anycast_unlimited: 60 Gbps baseline protection for the Chinese mainland acceleration area, unlimited anycast full protection for the global acceleration region (outside Chinese mainland);</li><li> cm_100G_anycast_300G: 100 Gbps baseline protection for the Chinese mainland acceleration area, 300 Gbps anycast joint protection for the global acceleration region (outside Chinese mainland);</li><li> cm_100G_anycast_unlimited: 100 Gbps baseline protection for the Chinese mainland acceleration area, unlimited anycast full protection for the global acceleration region (outside Chinese mainland).</li>
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Pack",$param) and $param["Pack"] !== null) {
            $this->Pack = $param["Pack"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ProtectionSpecs",$param) and $param["ProtectionSpecs"] !== null) {
            $this->ProtectionSpecs = $param["ProtectionSpecs"];
        }
    }
}
