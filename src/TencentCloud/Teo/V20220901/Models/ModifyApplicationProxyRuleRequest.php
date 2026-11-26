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
 * ModifyApplicationProxyRule request structure.
 *
 * @method string getZoneId() Obtain Site ID.
 * @method void setZoneId(string $ZoneId) Set Site ID.
 * @method string getProxyId() Obtain Proxy ID.
 * @method void setProxyId(string $ProxyId) Set Proxy ID.
 * @method string getRuleId() Obtain Rule ID.
 * @method void setRuleId(string $RuleId) Set Rule ID.
 * @method string getOriginType() Obtain Origin server type. Valid values:
<li>`custom`: Manually added;</li>
<li>origins: origin server group.</li>
 * @method void setOriginType(string $OriginType) Set Origin server type. Valid values:
<li>`custom`: Manually added;</li>
<li>origins: origin server group.</li>
 * @method array getPort() Obtain Port. Supported formats:
<li>80: port 80;</li>
<li>81-90: ports 81 to 90.</li>
 * @method void setPort(array $Port) Set Port. Supported formats:
<li>80: port 80;</li>
<li>81-90: ports 81 to 90.</li>
 * @method string getProto() Obtain Protocol. Valid values:
<li>TCP: TCP protocol;</li>
<li>UDP: UDP protocol.</li>Leave it blank to keep the original value.
 * @method void setProto(string $Proto) Set Protocol. Valid values:
<li>TCP: TCP protocol;</li>
<li>UDP: UDP protocol.</li>Leave it blank to keep the original value.
 * @method array getOriginValue() Obtain Details of the origin server:
<li>When OriginType is custom, it indicates one or more origin servers, such as `["8.8.8.8","9.9.9.9"]` or `OriginValue=["test.com"]`;</li>
<li>When OriginType is origins, it requires one and only one element, indicating the origin server group ID, such as ["origin-537f5b41-162a-11ed-abaa-525400c5da15"].</li>

If not specified, the original value is retained.
 * @method void setOriginValue(array $OriginValue) Set Details of the origin server:
<li>When OriginType is custom, it indicates one or more origin servers, such as `["8.8.8.8","9.9.9.9"]` or `OriginValue=["test.com"]`;</li>
<li>When OriginType is origins, it requires one and only one element, indicating the origin server group ID, such as ["origin-537f5b41-162a-11ed-abaa-525400c5da15"].</li>

If not specified, the original value is retained.
 * @method string getForwardClientIp() Obtain Pass the client IP address. Valid values:
<li>TOA: TOA (selectable only when Proto = TCP);</li>
<li>PPV1: passing via Proxy Protocol V1, available only when Proto = TCP;</li>
<li>PPV2: passing via Proxy Protocol V2;</li>
<li>OFF: no passing.</li>Leave it blank to keep the original value.
 * @method void setForwardClientIp(string $ForwardClientIp) Set Pass the client IP address. Valid values:
<li>TOA: TOA (selectable only when Proto = TCP);</li>
<li>PPV1: passing via Proxy Protocol V1, available only when Proto = TCP;</li>
<li>PPV2: passing via Proxy Protocol V2;</li>
<li>OFF: no passing.</li>Leave it blank to keep the original value.
 * @method boolean getSessionPersist() Obtain Whether to enable session persistence. Valid values:
<li>true: Enable;</li>
<li>false: Disable.</li>If not specified, false.
 * @method void setSessionPersist(boolean $SessionPersist) Set Whether to enable session persistence. Valid values:
<li>true: Enable;</li>
<li>false: Disable.</li>If not specified, false.
 * @method integer getSessionPersistTime() Obtain Duration for session persistence, in seconds. The value takes effect only when SessionPersist is true.
 * @method void setSessionPersistTime(integer $SessionPersistTime) Set Duration for session persistence, in seconds. The value takes effect only when SessionPersist is true.
 * @method string getOriginPort() Obtain Origin server port. Supported formats:
<li>Single port: 80;</li>
<li>Port range: 81-90, ports 81 to 90.</li>
 * @method void setOriginPort(string $OriginPort) Set Origin server port. Supported formats:
<li>Single port: 80;</li>
<li>Port range: 81-90, ports 81 to 90.</li>
 * @method string getRuleTag() Obtain Rule tag. If not specified, the original value is retained.
 * @method void setRuleTag(string $RuleTag) Set Rule tag. If not specified, the original value is retained.
 */
class ModifyApplicationProxyRuleRequest extends AbstractModel
{
    /**
     * @var string Site ID.
     */
    public $ZoneId;

    /**
     * @var string Proxy ID.
     */
    public $ProxyId;

    /**
     * @var string Rule ID.
     */
    public $RuleId;

    /**
     * @var string Origin server type. Valid values:
<li>`custom`: Manually added;</li>
<li>origins: origin server group.</li>
     */
    public $OriginType;

    /**
     * @var array Port. Supported formats:
<li>80: port 80;</li>
<li>81-90: ports 81 to 90.</li>
     */
    public $Port;

    /**
     * @var string Protocol. Valid values:
<li>TCP: TCP protocol;</li>
<li>UDP: UDP protocol.</li>Leave it blank to keep the original value.
     */
    public $Proto;

    /**
     * @var array Details of the origin server:
<li>When OriginType is custom, it indicates one or more origin servers, such as `["8.8.8.8","9.9.9.9"]` or `OriginValue=["test.com"]`;</li>
<li>When OriginType is origins, it requires one and only one element, indicating the origin server group ID, such as ["origin-537f5b41-162a-11ed-abaa-525400c5da15"].</li>

If not specified, the original value is retained.
     */
    public $OriginValue;

    /**
     * @var string Pass the client IP address. Valid values:
<li>TOA: TOA (selectable only when Proto = TCP);</li>
<li>PPV1: passing via Proxy Protocol V1, available only when Proto = TCP;</li>
<li>PPV2: passing via Proxy Protocol V2;</li>
<li>OFF: no passing.</li>Leave it blank to keep the original value.
     */
    public $ForwardClientIp;

    /**
     * @var boolean Whether to enable session persistence. Valid values:
<li>true: Enable;</li>
<li>false: Disable.</li>If not specified, false.
     */
    public $SessionPersist;

    /**
     * @var integer Duration for session persistence, in seconds. The value takes effect only when SessionPersist is true.
     */
    public $SessionPersistTime;

    /**
     * @var string Origin server port. Supported formats:
<li>Single port: 80;</li>
<li>Port range: 81-90, ports 81 to 90.</li>
     */
    public $OriginPort;

    /**
     * @var string Rule tag. If not specified, the original value is retained.
     */
    public $RuleTag;

    /**
     * @param string $ZoneId Site ID.
     * @param string $ProxyId Proxy ID.
     * @param string $RuleId Rule ID.
     * @param string $OriginType Origin server type. Valid values:
<li>`custom`: Manually added;</li>
<li>origins: origin server group.</li>
     * @param array $Port Port. Supported formats:
<li>80: port 80;</li>
<li>81-90: ports 81 to 90.</li>
     * @param string $Proto Protocol. Valid values:
<li>TCP: TCP protocol;</li>
<li>UDP: UDP protocol.</li>Leave it blank to keep the original value.
     * @param array $OriginValue Details of the origin server:
<li>When OriginType is custom, it indicates one or more origin servers, such as `["8.8.8.8","9.9.9.9"]` or `OriginValue=["test.com"]`;</li>
<li>When OriginType is origins, it requires one and only one element, indicating the origin server group ID, such as ["origin-537f5b41-162a-11ed-abaa-525400c5da15"].</li>

If not specified, the original value is retained.
     * @param string $ForwardClientIp Pass the client IP address. Valid values:
<li>TOA: TOA (selectable only when Proto = TCP);</li>
<li>PPV1: passing via Proxy Protocol V1, available only when Proto = TCP;</li>
<li>PPV2: passing via Proxy Protocol V2;</li>
<li>OFF: no passing.</li>Leave it blank to keep the original value.
     * @param boolean $SessionPersist Whether to enable session persistence. Valid values:
<li>true: Enable;</li>
<li>false: Disable.</li>If not specified, false.
     * @param integer $SessionPersistTime Duration for session persistence, in seconds. The value takes effect only when SessionPersist is true.
     * @param string $OriginPort Origin server port. Supported formats:
<li>Single port: 80;</li>
<li>Port range: 81-90, ports 81 to 90.</li>
     * @param string $RuleTag Rule tag. If not specified, the original value is retained.
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

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Proto",$param) and $param["Proto"] !== null) {
            $this->Proto = $param["Proto"];
        }

        if (array_key_exists("OriginValue",$param) and $param["OriginValue"] !== null) {
            $this->OriginValue = $param["OriginValue"];
        }

        if (array_key_exists("ForwardClientIp",$param) and $param["ForwardClientIp"] !== null) {
            $this->ForwardClientIp = $param["ForwardClientIp"];
        }

        if (array_key_exists("SessionPersist",$param) and $param["SessionPersist"] !== null) {
            $this->SessionPersist = $param["SessionPersist"];
        }

        if (array_key_exists("SessionPersistTime",$param) and $param["SessionPersistTime"] !== null) {
            $this->SessionPersistTime = $param["SessionPersistTime"];
        }

        if (array_key_exists("OriginPort",$param) and $param["OriginPort"] !== null) {
            $this->OriginPort = $param["OriginPort"];
        }

        if (array_key_exists("RuleTag",$param) and $param["RuleTag"] !== null) {
            $this->RuleTag = $param["RuleTag"];
        }
    }
}
