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
 * @method string getGatewayId() Obtain Multi-Channel security acceleration gateway ID.
 * @method void setGatewayId(string $GatewayId) Set Multi-Channel security acceleration gateway ID.
 * @method string getLineId() Obtain Line ID. valid values:
<Li>Line-1: EdgeOne layer-4 proxy line. Supports modifying instances and rules, but does not support deletion.  </li>
<li<li>line-2 and above: EdgeOne layer-4 proxy lines or custom lines, supports modifying, deleting instances and rules.</li> 
 * @method void setLineId(string $LineId) Set Line ID. valid values:
<Li>Line-1: EdgeOne layer-4 proxy line. Supports modifying instances and rules, but does not support deletion.  </li>
<li<li>line-2 and above: EdgeOne layer-4 proxy lines or custom lines, supports modifying, deleting instances and rules.</li> 
 * @method string getLineType() Obtain Line type. valid values:.
<li>proxy: EdgeOne layer-4 proxy line, supports modifying instances and rules, but deletion is not supported.</li>.
<Li>custom: Custom line.Supports editing, deleting instances and rules. 
 * @method void setLineType(string $LineType) Set Line type. valid values:.
<li>proxy: EdgeOne layer-4 proxy line, supports modifying instances and rules, but deletion is not supported.</li>.
<Li>custom: Custom line.Supports editing, deleting instances and rules. 
 * @method string getLineAddress() Obtain Line address, formatted as host:port. Direct lines (LineType value is direct) cannot be modified, while other types support modifications.
 * @method void setLineAddress(string $LineAddress) Set Line address, formatted as host:port. Direct lines (LineType value is direct) cannot be modified, while other types support modifications.
 * @method string getProxyId() Obtain Layer-4 proxy instance ID. when the line type value is proxy (EdgeOne layer-4 proxy),  it allows modifications to the instance.
 * @method void setProxyId(string $ProxyId) Set Layer-4 proxy instance ID. when the line type value is proxy (EdgeOne layer-4 proxy),  it allows modifications to the instance.
 * @method string getRuleId() Obtain Forwarding rule ID. when the line type  value is proxy (EdgeOne layer-4 proxy), it allows input to modify.
 * @method void setRuleId(string $RuleId) Set Forwarding rule ID. when the line type  value is proxy (EdgeOne layer-4 proxy), it allows input to modify.
 */
class ModifyMultiPathGatewayLineRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string Multi-Channel security acceleration gateway ID.
     */
    public $GatewayId;

    /**
     * @var string Line ID. valid values:
<Li>Line-1: EdgeOne layer-4 proxy line. Supports modifying instances and rules, but does not support deletion.  </li>
<li<li>line-2 and above: EdgeOne layer-4 proxy lines or custom lines, supports modifying, deleting instances and rules.</li> 
     */
    public $LineId;

    /**
     * @var string Line type. valid values:.
<li>proxy: EdgeOne layer-4 proxy line, supports modifying instances and rules, but deletion is not supported.</li>.
<Li>custom: Custom line.Supports editing, deleting instances and rules. 
     */
    public $LineType;

    /**
     * @var string Line address, formatted as host:port. Direct lines (LineType value is direct) cannot be modified, while other types support modifications.
     */
    public $LineAddress;

    /**
     * @var string Layer-4 proxy instance ID. when the line type value is proxy (EdgeOne layer-4 proxy),  it allows modifications to the instance.
     */
    public $ProxyId;

    /**
     * @var string Forwarding rule ID. when the line type  value is proxy (EdgeOne layer-4 proxy), it allows input to modify.
     */
    public $RuleId;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $GatewayId Multi-Channel security acceleration gateway ID.
     * @param string $LineId Line ID. valid values:
<Li>Line-1: EdgeOne layer-4 proxy line. Supports modifying instances and rules, but does not support deletion.  </li>
<li<li>line-2 and above: EdgeOne layer-4 proxy lines or custom lines, supports modifying, deleting instances and rules.</li> 
     * @param string $LineType Line type. valid values:.
<li>proxy: EdgeOne layer-4 proxy line, supports modifying instances and rules, but deletion is not supported.</li>.
<Li>custom: Custom line.Supports editing, deleting instances and rules. 
     * @param string $LineAddress Line address, formatted as host:port. Direct lines (LineType value is direct) cannot be modified, while other types support modifications.
     * @param string $ProxyId Layer-4 proxy instance ID. when the line type value is proxy (EdgeOne layer-4 proxy),  it allows modifications to the instance.
     * @param string $RuleId Forwarding rule ID. when the line type  value is proxy (EdgeOne layer-4 proxy), it allows input to modify.
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
