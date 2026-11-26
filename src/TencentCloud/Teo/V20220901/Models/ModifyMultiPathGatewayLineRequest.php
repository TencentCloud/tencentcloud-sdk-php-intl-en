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
 * ModifyMultiPathGatewayLine request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getGatewayId() Obtain Multi-channel security acceleration gateway ID.
 * @method void setGatewayId(string $GatewayId) Set Multi-channel security acceleration gateway ID.
 * @method string getLineId() Obtain Line ID. Valid values:
<li> line-1: EdgeOne Layer 4 proxy line. It supports modifying instances and rules, but deletion is not supported;</li>
<li> line-2 or higher: EdgeOne Layer 4 proxy lines or custom lines. Modification and deletion of instances and rules are supported.</li>
 * @method void setLineId(string $LineId) Set Line ID. Valid values:
<li> line-1: EdgeOne Layer 4 proxy line. It supports modifying instances and rules, but deletion is not supported;</li>
<li> line-2 or higher: EdgeOne Layer 4 proxy lines or custom lines. Modification and deletion of instances and rules are supported.</li>
 * @method string getLineType() Obtain Line type. Valid values: 
<li>proxy: EdgeOne Layer 4 proxy route. Supports modifying instances and rules. Deletion is not supported;</li> 
<li>custom: custom lines, support editing, deletion of instances, and rules.</li>
 * @method void setLineType(string $LineType) Set Line type. Valid values: 
<li>proxy: EdgeOne Layer 4 proxy route. Supports modifying instances and rules. Deletion is not supported;</li> 
<li>custom: custom lines, support editing, deletion of instances, and rules.</li>
 * @method string getLineAddress() Obtain Line address in the format of host:port. Direct-access lines (LineType value is direct) are not allowed to be modified. Modification is supported for other types.
 * @method void setLineAddress(string $LineAddress) Set Line address in the format of host:port. Direct-access lines (LineType value is direct) are not allowed to be modified. Modification is supported for other types.
 * @method string getProxyId() Obtain Layer 4 Proxy Instance ID. This can be input when the line type LineType value is proxy (EdgeOne Layer 4 proxy) for modification.
 * @method void setProxyId(string $ProxyId) Set Layer 4 Proxy Instance ID. This can be input when the line type LineType value is proxy (EdgeOne Layer 4 proxy) for modification.
 * @method string getRuleId() Obtain Forwarding rule ID. It can be passed in when the line type LineType is proxy (EdgeOne Layer 4 proxy) for modification.
 * @method void setRuleId(string $RuleId) Set Forwarding rule ID. It can be passed in when the line type LineType is proxy (EdgeOne Layer 4 proxy) for modification.
 */
class ModifyMultiPathGatewayLineRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Multi-channel security acceleration gateway ID.
     */
    public $GatewayId;

    /**
     * @var string Line ID. Valid values:
<li> line-1: EdgeOne Layer 4 proxy line. It supports modifying instances and rules, but deletion is not supported;</li>
<li> line-2 or higher: EdgeOne Layer 4 proxy lines or custom lines. Modification and deletion of instances and rules are supported.</li>
     */
    public $LineId;

    /**
     * @var string Line type. Valid values: 
<li>proxy: EdgeOne Layer 4 proxy route. Supports modifying instances and rules. Deletion is not supported;</li> 
<li>custom: custom lines, support editing, deletion of instances, and rules.</li>
     */
    public $LineType;

    /**
     * @var string Line address in the format of host:port. Direct-access lines (LineType value is direct) are not allowed to be modified. Modification is supported for other types.
     */
    public $LineAddress;

    /**
     * @var string Layer 4 Proxy Instance ID. This can be input when the line type LineType value is proxy (EdgeOne Layer 4 proxy) for modification.
     */
    public $ProxyId;

    /**
     * @var string Forwarding rule ID. It can be passed in when the line type LineType is proxy (EdgeOne Layer 4 proxy) for modification.
     */
    public $RuleId;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $GatewayId Multi-channel security acceleration gateway ID.
     * @param string $LineId Line ID. Valid values:
<li> line-1: EdgeOne Layer 4 proxy line. It supports modifying instances and rules, but deletion is not supported;</li>
<li> line-2 or higher: EdgeOne Layer 4 proxy lines or custom lines. Modification and deletion of instances and rules are supported.</li>
     * @param string $LineType Line type. Valid values: 
<li>proxy: EdgeOne Layer 4 proxy route. Supports modifying instances and rules. Deletion is not supported;</li> 
<li>custom: custom lines, support editing, deletion of instances, and rules.</li>
     * @param string $LineAddress Line address in the format of host:port. Direct-access lines (LineType value is direct) are not allowed to be modified. Modification is supported for other types.
     * @param string $ProxyId Layer 4 Proxy Instance ID. This can be input when the line type LineType value is proxy (EdgeOne Layer 4 proxy) for modification.
     * @param string $RuleId Forwarding rule ID. It can be passed in when the line type LineType is proxy (EdgeOne Layer 4 proxy) for modification.
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

        if (array_key_exists("LineId",$param) and $param["LineId"] !== null) {
            $this->LineId = $param["LineId"];
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
