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
 * Line information of the multi-channel security gateway
 *
 * @method string getLineId() Obtain Line ID. Among them, line-0 and line-1 are built-in line IDs. Valid values:
<li> line-0: direct-access line. Additions, edits, and deletion are not supported;</li>
<li> line-1: EdgeOne Layer 4 proxy line. Supports modifying instances and rules. Deletion is not supported;</li>
<li> line-2 and above: EdgeOne Layer 4 proxy lines or custom lines, supports modifying and deletion of instances and rules.</li>
 * @method void setLineId(string $LineId) Set Line ID. Among them, line-0 and line-1 are built-in line IDs. Valid values:
<li> line-0: direct-access line. Additions, edits, and deletion are not supported;</li>
<li> line-1: EdgeOne Layer 4 proxy line. Supports modifying instances and rules. Deletion is not supported;</li>
<li> line-2 and above: EdgeOne Layer 4 proxy lines or custom lines, supports modifying and deletion of instances and rules.</li>
 * @method string getLineType() Obtain Line type. Valid values:
<li>direct: direct-access line, editing is not supported, and deletion is not supported;</li>
<li>proxy: EdgeOne Layer 4 proxy route. Supports editing and modifying instances and rules. Deletion is not supported;</li>
<li>custom: Custom lines, support editing and deletion.</li>
 * @method void setLineType(string $LineType) Set Line type. Valid values:
<li>direct: direct-access line, editing is not supported, and deletion is not supported;</li>
<li>proxy: EdgeOne Layer 4 proxy route. Supports editing and modifying instances and rules. Deletion is not supported;</li>
<li>custom: Custom lines, support editing and deletion.</li>
 * @method string getLineAddress() Obtain Line address in the format of host:port.
 * @method void setLineAddress(string $LineAddress) Set Line address in the format of host:port.
 * @method string getProxyId() Obtain Layer 4 proxy instance ID, returned when the line type `LineType` is `proxy` (EdgeOne Layer 4 proxy).
 * @method void setProxyId(string $ProxyId) Set Layer 4 proxy instance ID, returned when the line type `LineType` is `proxy` (EdgeOne Layer 4 proxy).
 * @method string getRuleId() Obtain Forwarding rule ID, returned when the line type `LineType` is `proxy` (EdgeOne Layer 4 proxy).
 * @method void setRuleId(string $RuleId) Set Forwarding rule ID, returned when the line type `LineType` is `proxy` (EdgeOne Layer 4 proxy).
 */
class MultiPathGatewayLine extends AbstractModel
{
    /**
     * @var string Line ID. Among them, line-0 and line-1 are built-in line IDs. Valid values:
<li> line-0: direct-access line. Additions, edits, and deletion are not supported;</li>
<li> line-1: EdgeOne Layer 4 proxy line. Supports modifying instances and rules. Deletion is not supported;</li>
<li> line-2 and above: EdgeOne Layer 4 proxy lines or custom lines, supports modifying and deletion of instances and rules.</li>
     */
    public $LineId;

    /**
     * @var string Line type. Valid values:
<li>direct: direct-access line, editing is not supported, and deletion is not supported;</li>
<li>proxy: EdgeOne Layer 4 proxy route. Supports editing and modifying instances and rules. Deletion is not supported;</li>
<li>custom: Custom lines, support editing and deletion.</li>
     */
    public $LineType;

    /**
     * @var string Line address in the format of host:port.
     */
    public $LineAddress;

    /**
     * @var string Layer 4 proxy instance ID, returned when the line type `LineType` is `proxy` (EdgeOne Layer 4 proxy).
     */
    public $ProxyId;

    /**
     * @var string Forwarding rule ID, returned when the line type `LineType` is `proxy` (EdgeOne Layer 4 proxy).
     */
    public $RuleId;

    /**
     * @param string $LineId Line ID. Among them, line-0 and line-1 are built-in line IDs. Valid values:
<li> line-0: direct-access line. Additions, edits, and deletion are not supported;</li>
<li> line-1: EdgeOne Layer 4 proxy line. Supports modifying instances and rules. Deletion is not supported;</li>
<li> line-2 and above: EdgeOne Layer 4 proxy lines or custom lines, supports modifying and deletion of instances and rules.</li>
     * @param string $LineType Line type. Valid values:
<li>direct: direct-access line, editing is not supported, and deletion is not supported;</li>
<li>proxy: EdgeOne Layer 4 proxy route. Supports editing and modifying instances and rules. Deletion is not supported;</li>
<li>custom: Custom lines, support editing and deletion.</li>
     * @param string $LineAddress Line address in the format of host:port.
     * @param string $ProxyId Layer 4 proxy instance ID, returned when the line type `LineType` is `proxy` (EdgeOne Layer 4 proxy).
     * @param string $RuleId Forwarding rule ID, returned when the line type `LineType` is `proxy` (EdgeOne Layer 4 proxy).
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
