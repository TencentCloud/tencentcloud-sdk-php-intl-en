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
 * CreateApplicationProxyRule request structure.
 *
 * @method string getZoneId() Obtain Site ID.
 * @method void setZoneId(string $ZoneId) Set Site ID.
 * @method string getProxyId() Obtain Proxy ID.
 * @method void setProxyId(string $ProxyId) Set Proxy ID.
 * @method string getProto() Obtain Protocol. Valid values:
<li>TCP: TCP protocol;</li>
<li>UDP: UDP protocol.</li>
 * @method void setProto(string $Proto) Set Protocol. Valid values:
<li>TCP: TCP protocol;</li>
<li>UDP: UDP protocol.</li>
 * @method array getPort() Obtain Port. Supported formats:
<li>80: port 80;</li>
<li>81-90: ports 81 to 90.</li>
 * @method void setPort(array $Port) Set Port. Supported formats:
<li>80: port 80;</li>
<li>81-90: ports 81 to 90.</li>
 * @method string getOriginType() Obtain Origin server type. Valid values:
<li>`custom`: Manually added;</li>
<li>loadbalancer: load balancing;</li>
<li>origins: origin server group.</li>
 * @method void setOriginType(string $OriginType) Set Origin server type. Valid values:
<li>`custom`: Manually added;</li>
<li>loadbalancer: load balancing;</li>
<li>origins: origin server group.</li>
 * @method array getOriginValue() Obtain Details of the origin server:
<li>When OriginType is custom, it indicates one or more origin servers, such as `["8.8.8.8","9.9.9.9"]` or `OriginValue=["test.com"]`;</li>
<li>When OriginType is loadbalancer, it indicates a cloud load balancer, such as ["lb-xdffsfasdfs"];</li>
<li>When OriginType is origins, it requires one and only one element, indicating the origin server group ID, such as ["origin-537f5b41-162a-11ed-abaa-525400c5da15"].</li>
 * @method void setOriginValue(array $OriginValue) Set Details of the origin server:
<li>When OriginType is custom, it indicates one or more origin servers, such as `["8.8.8.8","9.9.9.9"]` or `OriginValue=["test.com"]`;</li>
<li>When OriginType is loadbalancer, it indicates a cloud load balancer, such as ["lb-xdffsfasdfs"];</li>
<li>When OriginType is origins, it requires one and only one element, indicating the origin server group ID, such as ["origin-537f5b41-162a-11ed-abaa-525400c5da15"].</li>
 * @method string getForwardClientIp() Obtain Passing the client IP address. Valid values:
<li>TOA: TOA (selectable only when Proto = TCP);</li>
<li>PPV1: passing via Proxy Protocol V1, available only when Proto = TCP;</li>
<li>PPV2: passing via Proxy Protocol V2;</li>
<li>OFF: no passing.</li>Default value: OFF.
 * @method void setForwardClientIp(string $ForwardClientIp) Set Passing the client IP address. Valid values:
<li>TOA: TOA (selectable only when Proto = TCP);</li>
<li>PPV1: passing via Proxy Protocol V1, available only when Proto = TCP;</li>
<li>PPV2: passing via Proxy Protocol V2;</li>
<li>OFF: no passing.</li>Default value: OFF.
 * @method boolean getSessionPersist() Obtain Whether to enable session persistence. Valid values:
<li>true: Enable;</li>
<li>false: Disable.</li>Default value: false.
 * @method void setSessionPersist(boolean $SessionPersist) Set Whether to enable session persistence. Valid values:
<li>true: Enable;</li>
<li>false: Disable.</li>Default value: false.
 * @method integer getSessionPersistTime() Obtain Duration for session persistence, in seconds. The value takes effect only when SessionPersist is true.
 * @method void setSessionPersistTime(integer $SessionPersistTime) Set Duration for session persistence, in seconds. The value takes effect only when SessionPersist is true.
 * @method string getOriginPort() Obtain Origin server port. Supported formats:
<li>Single port: 80;</li>
<li>Port range: 81-90, ports 81 to 90.</li>
 * @method void setOriginPort(string $OriginPort) Set Origin server port. Supported formats:
<li>Single port: 80;</li>
<li>Port range: 81-90, ports 81 to 90.</li>
 * @method string getRuleTag() Obtain Rule tag. The default value is an empty string.
 * @method void setRuleTag(string $RuleTag) Set Rule tag. The default value is an empty string.
 */
class CreateApplicationProxyRuleRequest extends AbstractModel
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
     * @var string Protocol. Valid values:
<li>TCP: TCP protocol;</li>
<li>UDP: UDP protocol.</li>
     */
    public $Proto;

    /**
     * @var array Port. Supported formats:
<li>80: port 80;</li>
<li>81-90: ports 81 to 90.</li>
     */
    public $Port;

    /**
     * @var string Origin server type. Valid values:
<li>`custom`: Manually added;</li>
<li>loadbalancer: load balancing;</li>
<li>origins: origin server group.</li>
     */
    public $OriginType;

    /**
     * @var array Details of the origin server:
<li>When OriginType is custom, it indicates one or more origin servers, such as `["8.8.8.8","9.9.9.9"]` or `OriginValue=["test.com"]`;</li>
<li>When OriginType is loadbalancer, it indicates a cloud load balancer, such as ["lb-xdffsfasdfs"];</li>
<li>When OriginType is origins, it requires one and only one element, indicating the origin server group ID, such as ["origin-537f5b41-162a-11ed-abaa-525400c5da15"].</li>
     */
    public $OriginValue;

    /**
     * @var string Passing the client IP address. Valid values:
<li>TOA: TOA (selectable only when Proto = TCP);</li>
<li>PPV1: passing via Proxy Protocol V1, available only when Proto = TCP;</li>
<li>PPV2: passing via Proxy Protocol V2;</li>
<li>OFF: no passing.</li>Default value: OFF.
     */
    public $ForwardClientIp;

    /**
     * @var boolean Whether to enable session persistence. Valid values:
<li>true: Enable;</li>
<li>false: Disable.</li>Default value: false.
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
     * @var string Rule tag. The default value is an empty string.
     */
    public $RuleTag;

    /**
     * @param string $ZoneId Site ID.
     * @param string $ProxyId Proxy ID.
     * @param string $Proto Protocol. Valid values:
<li>TCP: TCP protocol;</li>
<li>UDP: UDP protocol.</li>
     * @param array $Port Port. Supported formats:
<li>80: port 80;</li>
<li>81-90: ports 81 to 90.</li>
     * @param string $OriginType Origin server type. Valid values:
<li>`custom`: Manually added;</li>
<li>loadbalancer: load balancing;</li>
<li>origins: origin server group.</li>
     * @param array $OriginValue Details of the origin server:
<li>When OriginType is custom, it indicates one or more origin servers, such as `["8.8.8.8","9.9.9.9"]` or `OriginValue=["test.com"]`;</li>
<li>When OriginType is loadbalancer, it indicates a cloud load balancer, such as ["lb-xdffsfasdfs"];</li>
<li>When OriginType is origins, it requires one and only one element, indicating the origin server group ID, such as ["origin-537f5b41-162a-11ed-abaa-525400c5da15"].</li>
     * @param string $ForwardClientIp Passing the client IP address. Valid values:
<li>TOA: TOA (selectable only when Proto = TCP);</li>
<li>PPV1: passing via Proxy Protocol V1, available only when Proto = TCP;</li>
<li>PPV2: passing via Proxy Protocol V2;</li>
<li>OFF: no passing.</li>Default value: OFF.
     * @param boolean $SessionPersist Whether to enable session persistence. Valid values:
<li>true: Enable;</li>
<li>false: Disable.</li>Default value: false.
     * @param integer $SessionPersistTime Duration for session persistence, in seconds. The value takes effect only when SessionPersist is true.
     * @param string $OriginPort Origin server port. Supported formats:
<li>Single port: 80;</li>
<li>Port range: 81-90, ports 81 to 90.</li>
     * @param string $RuleTag Rule tag. The default value is an empty string.
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

        if (array_key_exists("Proto",$param) and $param["Proto"] !== null) {
            $this->Proto = $param["Proto"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
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
