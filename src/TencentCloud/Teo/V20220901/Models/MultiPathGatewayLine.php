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
 * Multi-Channel security gateway line information.
 *
 * @method string getLineId() Obtain line ID. where line-0 and line-1 are system-reserved IDs. valid values:
<Li>line-0: direct connection line. Adding, editing, and deletion are not supported.</li>
<Li>line-1: EdgeOne layer-4 proxy line. Supports modifying instances and rules, but deletion is not supported.</li>
<li>line-2 and above: EdgeOne layer-4 proxy lines or custom lines, supports modifying, deleting instances and rules.</li>
 * @method void setLineId(string $LineId) Set line ID. where line-0 and line-1 are system-reserved IDs. valid values:
<Li>line-0: direct connection line. Adding, editing, and deletion are not supported.</li>
<Li>line-1: EdgeOne layer-4 proxy line. Supports modifying instances and rules, but deletion is not supported.</li>
<li>line-2 and above: EdgeOne layer-4 proxy lines or custom lines, supports modifying, deleting instances and rules.</li>
 * @method string getLineType() Obtain Line type. valid values:
<Li>direct: Direct connection line. Editing and deletion are not supported. .</li>
<li>proxy: EdgeOne layer-4 proxy line, supports editing and modifying instances and rules, but deletion is not supported;</li>
<Li>custom: Custom line, supports editing and deletion.</li>
 * @method void setLineType(string $LineType) Set Line type. valid values:
<Li>direct: Direct connection line. Editing and deletion are not supported. .</li>
<li>proxy: EdgeOne layer-4 proxy line, supports editing and modifying instances and rules, but deletion is not supported;</li>
<Li>custom: Custom line, supports editing and deletion.</li>
 * @method string getLineAddress() Obtain Line address in the format host:port.
 * @method void setLineAddress(string $LineAddress) Set Line address in the format host:port.
 * @method string getProxyId() Obtain Layer-4 proxy instance ID,returned only when the LineType value is proxy (EdgeOne layer-4 proxy).
 * @method void setProxyId(string $ProxyId) Set Layer-4 proxy instance ID,returned only when the LineType value is proxy (EdgeOne layer-4 proxy).
 * @method string getRuleId() Obtain Forwarding rule ID. returned only when the LineType value is proxy (EdgeOne layer-4 proxy).
 * @method void setRuleId(string $RuleId) Set Forwarding rule ID. returned only when the LineType value is proxy (EdgeOne layer-4 proxy).
 */
class MultiPathGatewayLine extends AbstractModel
{
    /**
     * @var string line ID. where line-0 and line-1 are system-reserved IDs. valid values:
<Li>line-0: direct connection line. Adding, editing, and deletion are not supported.</li>
<Li>line-1: EdgeOne layer-4 proxy line. Supports modifying instances and rules, but deletion is not supported.</li>
<li>line-2 and above: EdgeOne layer-4 proxy lines or custom lines, supports modifying, deleting instances and rules.</li>
     */
    public $LineId;

    /**
     * @var string Line type. valid values:
<Li>direct: Direct connection line. Editing and deletion are not supported. .</li>
<li>proxy: EdgeOne layer-4 proxy line, supports editing and modifying instances and rules, but deletion is not supported;</li>
<Li>custom: Custom line, supports editing and deletion.</li>
     */
    public $LineType;

    /**
     * @var string Line address in the format host:port.
     */
    public $LineAddress;

    /**
     * @var string Layer-4 proxy instance ID,returned only when the LineType value is proxy (EdgeOne layer-4 proxy).
     */
    public $ProxyId;

    /**
     * @var string Forwarding rule ID. returned only when the LineType value is proxy (EdgeOne layer-4 proxy).
     */
    public $RuleId;

    /**
     * @param string $LineId line ID. where line-0 and line-1 are system-reserved IDs. valid values:
<Li>line-0: direct connection line. Adding, editing, and deletion are not supported.</li>
<Li>line-1: EdgeOne layer-4 proxy line. Supports modifying instances and rules, but deletion is not supported.</li>
<li>line-2 and above: EdgeOne layer-4 proxy lines or custom lines, supports modifying, deleting instances and rules.</li>
     * @param string $LineType Line type. valid values:
<Li>direct: Direct connection line. Editing and deletion are not supported. .</li>
<li>proxy: EdgeOne layer-4 proxy line, supports editing and modifying instances and rules, but deletion is not supported;</li>
<Li>custom: Custom line, supports editing and deletion.</li>
     * @param string $LineAddress Line address in the format host:port.
     * @param string $ProxyId Layer-4 proxy instance ID,returned only when the LineType value is proxy (EdgeOne layer-4 proxy).
     * @param string $RuleId Forwarding rule ID. returned only when the LineType value is proxy (EdgeOne layer-4 proxy).
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
