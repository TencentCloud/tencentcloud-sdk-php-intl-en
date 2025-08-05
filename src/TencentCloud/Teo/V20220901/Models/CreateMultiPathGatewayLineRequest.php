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
 * CreateMultiPathGatewayLine request structure.
 *
 * @method string getZoneId() Obtain Specifies the site ID.
 * @method void setZoneId(string $ZoneId) Set Specifies the site ID.
 * @method string getGatewayId() Obtain Multi-Channel security gateway ID.
 * @method void setGatewayId(string $GatewayId) Set Multi-Channel security gateway ID.
 * @method string getLineType() Obtain Line type. valid values:
<li>direct: direct connection line, cannot be modified or deleted.</li>
 <li>proxy: EdgeOne layer-4 proxy line, supports modifying instance ID and rule ID, but cannot be deleted.</li> <li>custom: custom line, supports modifying and deleting instance ID and rule ID.</li>
 * @method void setLineType(string $LineType) Set Line type. valid values:
<li>direct: direct connection line, cannot be modified or deleted.</li>
 <li>proxy: EdgeOne layer-4 proxy line, supports modifying instance ID and rule ID, but cannot be deleted.</li> <li>custom: custom line, supports modifying and deleting instance ID and rule ID.</li>
 * @method string getLineAddress() Obtain Line address format: ip:port.
 * @method void setLineAddress(string $LineAddress) Set Line address format: ip:port.
 * @method string getProxyId() Obtain The layer-4 proxy instance ID is required when the LineType value is proxy (EdgeOne layer-4 proxy) and can be obtained via the api [DescribeL4proxy](https://intl.cloud.tencent.com/document/api/1552/103413?from_cn_redirect=1).
 * @method void setProxyId(string $ProxyId) Set The layer-4 proxy instance ID is required when the LineType value is proxy (EdgeOne layer-4 proxy) and can be obtained via the api [DescribeL4proxy](https://intl.cloud.tencent.com/document/api/1552/103413?from_cn_redirect=1).
 * @method string getRuleId() Obtain Forwarding rule ID, this field is required when the line type LineType value is proxy (EdgeOne layer-4 proxy). you can obtain it from the api [DescribeL4ProxyRules](https://intl.cloud.tencent.com/document/api/1552/103412?from_cn_redirect=1).
 * @method void setRuleId(string $RuleId) Set Forwarding rule ID, this field is required when the line type LineType value is proxy (EdgeOne layer-4 proxy). you can obtain it from the api [DescribeL4ProxyRules](https://intl.cloud.tencent.com/document/api/1552/103412?from_cn_redirect=1).
 */
class CreateMultiPathGatewayLineRequest extends AbstractModel
{
    /**
     * @var string Specifies the site ID.
     */
    public $ZoneId;

    /**
     * @var string Multi-Channel security gateway ID.
     */
    public $GatewayId;

    /**
     * @var string Line type. valid values:
<li>direct: direct connection line, cannot be modified or deleted.</li>
 <li>proxy: EdgeOne layer-4 proxy line, supports modifying instance ID and rule ID, but cannot be deleted.</li> <li>custom: custom line, supports modifying and deleting instance ID and rule ID.</li>
     */
    public $LineType;

    /**
     * @var string Line address format: ip:port.
     */
    public $LineAddress;

    /**
     * @var string The layer-4 proxy instance ID is required when the LineType value is proxy (EdgeOne layer-4 proxy) and can be obtained via the api [DescribeL4proxy](https://intl.cloud.tencent.com/document/api/1552/103413?from_cn_redirect=1).
     */
    public $ProxyId;

    /**
     * @var string Forwarding rule ID, this field is required when the line type LineType value is proxy (EdgeOne layer-4 proxy). you can obtain it from the api [DescribeL4ProxyRules](https://intl.cloud.tencent.com/document/api/1552/103412?from_cn_redirect=1).
     */
    public $RuleId;

    /**
     * @param string $ZoneId Specifies the site ID.
     * @param string $GatewayId Multi-Channel security gateway ID.
     * @param string $LineType Line type. valid values:
<li>direct: direct connection line, cannot be modified or deleted.</li>
 <li>proxy: EdgeOne layer-4 proxy line, supports modifying instance ID and rule ID, but cannot be deleted.</li> <li>custom: custom line, supports modifying and deleting instance ID and rule ID.</li>
     * @param string $LineAddress Line address format: ip:port.
     * @param string $ProxyId The layer-4 proxy instance ID is required when the LineType value is proxy (EdgeOne layer-4 proxy) and can be obtained via the api [DescribeL4proxy](https://intl.cloud.tencent.com/document/api/1552/103413?from_cn_redirect=1).
     * @param string $RuleId Forwarding rule ID, this field is required when the line type LineType value is proxy (EdgeOne layer-4 proxy). you can obtain it from the api [DescribeL4ProxyRules](https://intl.cloud.tencent.com/document/api/1552/103412?from_cn_redirect=1).
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

        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("LineType",$param) and $param["LineType"] !== null) {
            $this->LineType = $param["LineType"];
        }

        if (array_key_exists("LineAddress",$param) and $param["LineAddress"] !== null) {
            $this->LineAddress = $param["LineAddress"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
