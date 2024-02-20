<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getZoneId() Obtain The site ID.
 * @method void setZoneId(string $ZoneId) Set The site ID.
 * @method string getProxyId() Obtain The proxy ID.
 * @method void setProxyId(string $ProxyId) Set The proxy ID.
 * @method string getProto() Obtain The protocol. Values:
<li>`TCP`: TCP protocol</li>
<li>`UDP`: UDP protocol</li>
 * @method void setProto(string $Proto) Set The protocol. Values:
<li>`TCP`: TCP protocol</li>
<li>`UDP`: UDP protocol</li>
 * @method array getPort() Obtain The access port, which can be:
<li>A single port, such as 80</li>
<li>A port range, such as 81-90</li>
 * @method void setPort(array $Port) Set The access port, which can be:
<li>A single port, such as 80</li>
<li>A port range, such as 81-90</li>
 * @method string getOriginType() Obtain Origin server type. Valid values:<li>custom: Manually added;</li>
<li>loadbalancer: Cloud Load Balancer;</li><li>origins: Origin server group.</li>
 * @method void setOriginType(string $OriginType) Set Origin server type. Valid values:<li>custom: Manually added;</li>
<li>loadbalancer: Cloud Load Balancer;</li><li>origins: Origin server group.</li>
 * @method array getOriginValue() Obtain Details of the origin server:<li>When OriginType is custom, it indicates one or more origin servers, such as ["8.8.8.8","9.9.9.9"] or OriginValue=["test.com"];</li><li>When OriginType is loadbalancer, it indicates a single Cloud Load Balancer, such as ["lb-xdffsfasdfs"];</li><li>When OriginType is origins, it requires one and only one element, which represents an origin server group ID, such as ["origin-537f5b41-162a-11ed-abaa-525400c5da15"].</li>
 * @method void setOriginValue(array $OriginValue) Set Details of the origin server:<li>When OriginType is custom, it indicates one or more origin servers, such as ["8.8.8.8","9.9.9.9"] or OriginValue=["test.com"];</li><li>When OriginType is loadbalancer, it indicates a single Cloud Load Balancer, such as ["lb-xdffsfasdfs"];</li><li>When OriginType is origins, it requires one and only one element, which represents an origin server group ID, such as ["origin-537f5b41-162a-11ed-abaa-525400c5da15"].</li>
 * @method string getForwardClientIp() Obtain Passes the client IP. Values:
<li>`TOA`: Pass the client IP via TOA (available only when `Proto=TCP`).</li>
<li>`PPV1`: Pass the client IP via Proxy Protocol V1 (available only when `Proto=TCP`).</li>
<li>`PPV2`: Pass the client IP via Proxy Protocol V2.</li>
<li>`OFF`: Not pass the client IP.</li>Default value: OFF.
 * @method void setForwardClientIp(string $ForwardClientIp) Set Passes the client IP. Values:
<li>`TOA`: Pass the client IP via TOA (available only when `Proto=TCP`).</li>
<li>`PPV1`: Pass the client IP via Proxy Protocol V1 (available only when `Proto=TCP`).</li>
<li>`PPV2`: Pass the client IP via Proxy Protocol V2.</li>
<li>`OFF`: Not pass the client IP.</li>Default value: OFF.
 * @method boolean getSessionPersist() Obtain Whether to enable session persistence. Values:
<li>`true`: Enable.</li>
<li>`false`: Disable.</li>Default value: false.
 * @method void setSessionPersist(boolean $SessionPersist) Set Whether to enable session persistence. Values:
<li>`true`: Enable.</li>
<li>`false`: Disable.</li>Default value: false.
 * @method integer getSessionPersistTime() Obtain Duration for the persistent session. The value takes effect only when `SessionPersist = true`.
 * @method void setSessionPersistTime(integer $SessionPersistTime) Set Duration for the persistent session. The value takes effect only when `SessionPersist = true`.
 * @method string getOriginPort() Obtain The origin port, which can be:
<li>A single port, such as 80</li>
<li>A port range, such as 81-82</li>
 * @method void setOriginPort(string $OriginPort) Set The origin port, which can be:
<li>A single port, such as 80</li>
<li>A port range, such as 81-82</li>
 * @method string getRuleTag() Obtain Rule tag. This parameter is left empty by default.
 * @method void setRuleTag(string $RuleTag) Set Rule tag. This parameter is left empty by default.
 */
class CreateApplicationProxyRuleRequest extends AbstractModel
{
    /**
     * @var string The site ID.
     */
    public $ZoneId;

    /**
     * @var string The proxy ID.
     */
    public $ProxyId;

    /**
     * @var string The protocol. Values:
<li>`TCP`: TCP protocol</li>
<li>`UDP`: UDP protocol</li>
     */
    public $Proto;

    /**
     * @var array The access port, which can be:
<li>A single port, such as 80</li>
<li>A port range, such as 81-90</li>
     */
    public $Port;

    /**
     * @var string Origin server type. Valid values:<li>custom: Manually added;</li>
<li>loadbalancer: Cloud Load Balancer;</li><li>origins: Origin server group.</li>
     */
    public $OriginType;

    /**
     * @var array Details of the origin server:<li>When OriginType is custom, it indicates one or more origin servers, such as ["8.8.8.8","9.9.9.9"] or OriginValue=["test.com"];</li><li>When OriginType is loadbalancer, it indicates a single Cloud Load Balancer, such as ["lb-xdffsfasdfs"];</li><li>When OriginType is origins, it requires one and only one element, which represents an origin server group ID, such as ["origin-537f5b41-162a-11ed-abaa-525400c5da15"].</li>
     */
    public $OriginValue;

    /**
     * @var string Passes the client IP. Values:
<li>`TOA`: Pass the client IP via TOA (available only when `Proto=TCP`).</li>
<li>`PPV1`: Pass the client IP via Proxy Protocol V1 (available only when `Proto=TCP`).</li>
<li>`PPV2`: Pass the client IP via Proxy Protocol V2.</li>
<li>`OFF`: Not pass the client IP.</li>Default value: OFF.
     */
    public $ForwardClientIp;

    /**
     * @var boolean Whether to enable session persistence. Values:
<li>`true`: Enable.</li>
<li>`false`: Disable.</li>Default value: false.
     */
    public $SessionPersist;

    /**
     * @var integer Duration for the persistent session. The value takes effect only when `SessionPersist = true`.
     */
    public $SessionPersistTime;

    /**
     * @var string The origin port, which can be:
<li>A single port, such as 80</li>
<li>A port range, such as 81-82</li>
     */
    public $OriginPort;

    /**
     * @var string Rule tag. This parameter is left empty by default.
     */
    public $RuleTag;

    /**
     * @param string $ZoneId The site ID.
     * @param string $ProxyId The proxy ID.
     * @param string $Proto The protocol. Values:
<li>`TCP`: TCP protocol</li>
<li>`UDP`: UDP protocol</li>
     * @param array $Port The access port, which can be:
<li>A single port, such as 80</li>
<li>A port range, such as 81-90</li>
     * @param string $OriginType Origin server type. Valid values:<li>custom: Manually added;</li>
<li>loadbalancer: Cloud Load Balancer;</li><li>origins: Origin server group.</li>
     * @param array $OriginValue Details of the origin server:<li>When OriginType is custom, it indicates one or more origin servers, such as ["8.8.8.8","9.9.9.9"] or OriginValue=["test.com"];</li><li>When OriginType is loadbalancer, it indicates a single Cloud Load Balancer, such as ["lb-xdffsfasdfs"];</li><li>When OriginType is origins, it requires one and only one element, which represents an origin server group ID, such as ["origin-537f5b41-162a-11ed-abaa-525400c5da15"].</li>
     * @param string $ForwardClientIp Passes the client IP. Values:
<li>`TOA`: Pass the client IP via TOA (available only when `Proto=TCP`).</li>
<li>`PPV1`: Pass the client IP via Proxy Protocol V1 (available only when `Proto=TCP`).</li>
<li>`PPV2`: Pass the client IP via Proxy Protocol V2.</li>
<li>`OFF`: Not pass the client IP.</li>Default value: OFF.
     * @param boolean $SessionPersist Whether to enable session persistence. Values:
<li>`true`: Enable.</li>
<li>`false`: Disable.</li>Default value: false.
     * @param integer $SessionPersistTime Duration for the persistent session. The value takes effect only when `SessionPersist = true`.
     * @param string $OriginPort The origin port, which can be:
<li>A single port, such as 80</li>
<li>A port range, such as 81-82</li>
     * @param string $RuleTag Rule tag. This parameter is left empty by default.
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
