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
 * @method string getZoneId() Obtain Site ID.
 * @method void setZoneId(string $ZoneId) Set Site ID.
 * @method string getGatewayId() Obtain Multi-channel security gateway ID.
 * @method void setGatewayId(string $GatewayId) Set Multi-channel security gateway ID.
 * @method string getLineType() Obtain Line type. Valid values:
<li>direct: direct connection line, modification and deletion are not supported.</li> <li>proxy: EdgeOne Layer 4 proxy line, supports modifying instance ID and rule ID, deletion is not supported.</li> <li>custom: custom line, supports modifying and deleting instance ID and rule ID.</li>
 * @method void setLineType(string $LineType) Set Line type. Valid values:
<li>direct: direct connection line, modification and deletion are not supported.</li> <li>proxy: EdgeOne Layer 4 proxy line, supports modifying instance ID and rule ID, deletion is not supported.</li> <li>custom: custom line, supports modifying and deleting instance ID and rule ID.</li>
 * @method string getLineAddress() Obtain Line address in the format of ip:port.
 * @method void setLineAddress(string $LineAddress) Set Line address in the format of ip:port.
 * @method string getProxyId() Obtain Layer 4 proxy instance ID. It is required when the line type `LineType` value is `proxy` (EdgeOne Layer 4 proxy). You can obtain it via the [DescribeL4Proxy](https://www.tencentcloud.com/document/api/1552/103413?from_cn_redirect=1) API.
 * @method void setProxyId(string $ProxyId) Set Layer 4 proxy instance ID. It is required when the line type `LineType` value is `proxy` (EdgeOne Layer 4 proxy). You can obtain it via the [DescribeL4Proxy](https://www.tencentcloud.com/document/api/1552/103413?from_cn_redirect=1) API.
 * @method string getRuleId() Obtain Forwarding rule ID. Required when the line type `LineType` is `proxy` (EdgeOne Layer 4 proxy). You can obtain it via the [DescribeL4ProxyRules](https://www.tencentcloud.com/document/api/1552/103412?from_cn_redirect=1) API.
 * @method void setRuleId(string $RuleId) Set Forwarding rule ID. Required when the line type `LineType` is `proxy` (EdgeOne Layer 4 proxy). You can obtain it via the [DescribeL4ProxyRules](https://www.tencentcloud.com/document/api/1552/103412?from_cn_redirect=1) API.
 */
class CreateMultiPathGatewayLineRequest extends AbstractModel
{
    /**
     * @var string Site ID.
     */
    public $ZoneId;

    /**
     * @var string Multi-channel security gateway ID.
     */
    public $GatewayId;

    /**
     * @var string Line type. Valid values:
<li>direct: direct connection line, modification and deletion are not supported.</li> <li>proxy: EdgeOne Layer 4 proxy line, supports modifying instance ID and rule ID, deletion is not supported.</li> <li>custom: custom line, supports modifying and deleting instance ID and rule ID.</li>
     */
    public $LineType;

    /**
     * @var string Line address in the format of ip:port.
     */
    public $LineAddress;

    /**
     * @var string Layer 4 proxy instance ID. It is required when the line type `LineType` value is `proxy` (EdgeOne Layer 4 proxy). You can obtain it via the [DescribeL4Proxy](https://www.tencentcloud.com/document/api/1552/103413?from_cn_redirect=1) API.
     */
    public $ProxyId;

    /**
     * @var string Forwarding rule ID. Required when the line type `LineType` is `proxy` (EdgeOne Layer 4 proxy). You can obtain it via the [DescribeL4ProxyRules](https://www.tencentcloud.com/document/api/1552/103412?from_cn_redirect=1) API.
     */
    public $RuleId;

    /**
     * @param string $ZoneId Site ID.
     * @param string $GatewayId Multi-channel security gateway ID.
     * @param string $LineType Line type. Valid values:
<li>direct: direct connection line, modification and deletion are not supported.</li> <li>proxy: EdgeOne Layer 4 proxy line, supports modifying instance ID and rule ID, deletion is not supported.</li> <li>custom: custom line, supports modifying and deleting instance ID and rule ID.</li>
     * @param string $LineAddress Line address in the format of ip:port.
     * @param string $ProxyId Layer 4 proxy instance ID. It is required when the line type `LineType` value is `proxy` (EdgeOne Layer 4 proxy). You can obtain it via the [DescribeL4Proxy](https://www.tencentcloud.com/document/api/1552/103413?from_cn_redirect=1) API.
     * @param string $RuleId Forwarding rule ID. Required when the line type `LineType` is `proxy` (EdgeOne Layer 4 proxy). You can obtain it via the [DescribeL4ProxyRules](https://www.tencentcloud.com/document/api/1552/103412?from_cn_redirect=1) API.
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
