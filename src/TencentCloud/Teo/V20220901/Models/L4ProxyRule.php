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
 * Layer 4 proxy forwarding rule details.
 *
 * @method string getRuleId() Obtain Forwarding rule ID.
Note: Do not fill in L4ProxyRule as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, this parameter is required.
 * @method void setRuleId(string $RuleId) Set Forwarding rule ID.
Note: Do not fill in L4ProxyRule as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, this parameter is required.
 * @method string getProtocol() Obtain Forwarding protocol. Valid values:
<li>TCP: TCP protocol;</li>
<li>UDP: UDP protocol.</li>
Note: L4ProxyRule is required as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
 * @method void setProtocol(string $Protocol) Set Forwarding protocol. Valid values:
<li>TCP: TCP protocol;</li>
<li>UDP: UDP protocol.</li>
Note: L4ProxyRule is required as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
 * @method array getPortRange() Obtain Forwarding port. You can fill it in based on the following format:
<li>A single port, such as 80;</li>
<li>A port range, such as 81-85, indicating five ports 81, 82, 83, 84, and 85.</li>
Note: L4ProxyRule is required as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
 * @method void setPortRange(array $PortRange) Set Forwarding port. You can fill it in based on the following format:
<li>A single port, such as 80;</li>
<li>A port range, such as 81-85, indicating five ports 81, 82, 83, 84, and 85.</li>
Note: L4ProxyRule is required as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
 * @method string getOriginType() Obtain Origin server type. Valid values:
<li>IP_DOMAIN: IP/domain origin server;</li>
<li>ORIGIN_GROUP: origin server group;</li>
<li>LB: load balancing. Currently only available to the allowlist. </li>
Note: L4ProxyRule is required as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
 * @method void setOriginType(string $OriginType) Set Origin server type. Valid values:
<li>IP_DOMAIN: IP/domain origin server;</li>
<li>ORIGIN_GROUP: origin server group;</li>
<li>LB: load balancing. Currently only available to the allowlist. </li>
Note: L4ProxyRule is required as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
 * @method array getOriginValue() Obtain Origin server address:
<li>When OriginType is IP_DOMAIN, enter an IP address or domain name, for example, 8.8.8.8 or test.com;</li>
<li>When OriginType is ORIGIN_GROUP, fill in the origin server group ID, such as og-537y24vf5b41; if referencing an origin server group from another site, the format is {origin server group ID}@{ZoneID}. For example: og-testorigin@zone-38moq1z10wwwy;</li>
<li>When OriginType is LB, fill in the Cloud Load Balancer instance ID, for example, lb-2qwk30xf7s9g. If a load balancer from another site is referenced, the format is {Cloud Load Balancer ID}@{ZoneID}. For example: lb-2rxpamcyqfzg@zone-38moq1z10wwwy.</li>
Note: L4ProxyRule is required as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.

 * @method void setOriginValue(array $OriginValue) Set Origin server address:
<li>When OriginType is IP_DOMAIN, enter an IP address or domain name, for example, 8.8.8.8 or test.com;</li>
<li>When OriginType is ORIGIN_GROUP, fill in the origin server group ID, such as og-537y24vf5b41; if referencing an origin server group from another site, the format is {origin server group ID}@{ZoneID}. For example: og-testorigin@zone-38moq1z10wwwy;</li>
<li>When OriginType is LB, fill in the Cloud Load Balancer instance ID, for example, lb-2qwk30xf7s9g. If a load balancer from another site is referenced, the format is {Cloud Load Balancer ID}@{ZoneID}. For example: lb-2rxpamcyqfzg@zone-38moq1z10wwwy.</li>
Note: L4ProxyRule is required as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.

 * @method string getOriginPortRange() Obtain Origin server port, which can be set as follows:
<li>A single port, such as 80;</li>
<li>A port range, such as 81-85, indicating five ports 81, 82, 83, 84, and 85. When entering a port range, ensure the length corresponds with the forwarding port range. For example, if the forwarding port is 80-90, the forwarding port should be 90-100.</li>
Note: L4ProxyRule is required as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
 * @method void setOriginPortRange(string $OriginPortRange) Set Origin server port, which can be set as follows:
<li>A single port, such as 80;</li>
<li>A port range, such as 81-85, indicating five ports 81, 82, 83, 84, and 85. When entering a port range, ensure the length corresponds with the forwarding port range. For example, if the forwarding port is 80-90, the forwarding port should be 90-100.</li>
Note: L4ProxyRule is required as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
 * @method string getClientIPPassThroughMode() Obtain Transmission of the client IP address. Valid values:
<li>TOA: TOA (selectable only when Protocol = TCP);</li> 
<li>PPV1: passing via Proxy Protocol V1, available only when Protocol = TCP;</li>
<li>PPV2: passing via Proxy Protocol V2;</li> 
<li>SPP: transmission via Simple Proxy Protocol (selectable only when Protocol = UDP);</li> 
<li>`OFF`: Do not pass the client IP.</li>
Note: L4ProxyRule is optional as an input parameter in CreateL4ProxyRules. If not specified, it defaults to OFF. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
 * @method void setClientIPPassThroughMode(string $ClientIPPassThroughMode) Set Transmission of the client IP address. Valid values:
<li>TOA: TOA (selectable only when Protocol = TCP);</li> 
<li>PPV1: passing via Proxy Protocol V1, available only when Protocol = TCP;</li>
<li>PPV2: passing via Proxy Protocol V2;</li> 
<li>SPP: transmission via Simple Proxy Protocol (selectable only when Protocol = UDP);</li> 
<li>`OFF`: Do not pass the client IP.</li>
Note: L4ProxyRule is optional as an input parameter in CreateL4ProxyRules. If not specified, it defaults to OFF. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
 * @method string getSessionPersist() Obtain Whether to enable session persistence. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
Note: When L4ProxyRule is used as an input parameter in CreateL4ProxyRules, this parameter is optional and defaults to off if left empty. When used as an input parameter in ModifyL4ProxyRules, this parameter is optional and retains its existing value if not specified.
 * @method void setSessionPersist(string $SessionPersist) Set Whether to enable session persistence. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
Note: When L4ProxyRule is used as an input parameter in CreateL4ProxyRules, this parameter is optional and defaults to off if left empty. When used as an input parameter in ModifyL4ProxyRules, this parameter is optional and retains its existing value if not specified.
 * @method integer getSessionPersistTime() Obtain Session persistence duration, in seconds. Value range: 30-3600.
Note: L4ProxyRule is optional as an input parameter in CreateL4ProxyRules. It is valid only when SessionPersist = on. If not specified when SessionPersist = on, it defaults to 3600. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
 * @method void setSessionPersistTime(integer $SessionPersistTime) Set Session persistence duration, in seconds. Value range: 30-3600.
Note: L4ProxyRule is optional as an input parameter in CreateL4ProxyRules. It is valid only when SessionPersist = on. If not specified when SessionPersist = on, it defaults to 3600. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
 * @method string getRuleTag() Obtain Rule tag. Enter 1-50 characters.
Note: L4ProxyRule is optional as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
 * @method void setRuleTag(string $RuleTag) Set Rule tag. Enter 1-50 characters.
Note: L4ProxyRule is optional as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
 * @method string getStatus() Obtain Rule status. Valid values:
<li>online: enabled;</li>
<li>offline: disabled;</li>
<li>progress: deploying;</li>
<li>stopping: disabling;</li>
<li>fail: deployment or disabling failed.</li>
Note: Do not fill in this parameter when L4ProxyRule is used as an input parameter in CreateL4ProxyRules or ModifyL4ProxyRules.
 * @method void setStatus(string $Status) Set Rule status. Valid values:
<li>online: enabled;</li>
<li>offline: disabled;</li>
<li>progress: deploying;</li>
<li>stopping: disabling;</li>
<li>fail: deployment or disabling failed.</li>
Note: Do not fill in this parameter when L4ProxyRule is used as an input parameter in CreateL4ProxyRules or ModifyL4ProxyRules.
 * @method string getBuId() Obtain BuID.
 * @method void setBuId(string $BuId) Set BuID.
 * @method L4ProxyRemoteAuth getRemoteAuth() Obtain Remote authentication information.
Note: RemoteAuth cannot be used as an input parameter in CreateL4ProxyRules or ModifyL4ProxyRules. If this parameter is input, it will be ignored. If the returned data of DescribeL4ProxyRules is empty, it indicates that remote authentication is disabled.
 * @method void setRemoteAuth(L4ProxyRemoteAuth $RemoteAuth) Set Remote authentication information.
Note: RemoteAuth cannot be used as an input parameter in CreateL4ProxyRules or ModifyL4ProxyRules. If this parameter is input, it will be ignored. If the returned data of DescribeL4ProxyRules is empty, it indicates that remote authentication is disabled.
 */
class L4ProxyRule extends AbstractModel
{
    /**
     * @var string Forwarding rule ID.
Note: Do not fill in L4ProxyRule as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, this parameter is required.
     */
    public $RuleId;

    /**
     * @var string Forwarding protocol. Valid values:
<li>TCP: TCP protocol;</li>
<li>UDP: UDP protocol.</li>
Note: L4ProxyRule is required as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
     */
    public $Protocol;

    /**
     * @var array Forwarding port. You can fill it in based on the following format:
<li>A single port, such as 80;</li>
<li>A port range, such as 81-85, indicating five ports 81, 82, 83, 84, and 85.</li>
Note: L4ProxyRule is required as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
     */
    public $PortRange;

    /**
     * @var string Origin server type. Valid values:
<li>IP_DOMAIN: IP/domain origin server;</li>
<li>ORIGIN_GROUP: origin server group;</li>
<li>LB: load balancing. Currently only available to the allowlist. </li>
Note: L4ProxyRule is required as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
     */
    public $OriginType;

    /**
     * @var array Origin server address:
<li>When OriginType is IP_DOMAIN, enter an IP address or domain name, for example, 8.8.8.8 or test.com;</li>
<li>When OriginType is ORIGIN_GROUP, fill in the origin server group ID, such as og-537y24vf5b41; if referencing an origin server group from another site, the format is {origin server group ID}@{ZoneID}. For example: og-testorigin@zone-38moq1z10wwwy;</li>
<li>When OriginType is LB, fill in the Cloud Load Balancer instance ID, for example, lb-2qwk30xf7s9g. If a load balancer from another site is referenced, the format is {Cloud Load Balancer ID}@{ZoneID}. For example: lb-2rxpamcyqfzg@zone-38moq1z10wwwy.</li>
Note: L4ProxyRule is required as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.

     */
    public $OriginValue;

    /**
     * @var string Origin server port, which can be set as follows:
<li>A single port, such as 80;</li>
<li>A port range, such as 81-85, indicating five ports 81, 82, 83, 84, and 85. When entering a port range, ensure the length corresponds with the forwarding port range. For example, if the forwarding port is 80-90, the forwarding port should be 90-100.</li>
Note: L4ProxyRule is required as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
     */
    public $OriginPortRange;

    /**
     * @var string Transmission of the client IP address. Valid values:
<li>TOA: TOA (selectable only when Protocol = TCP);</li> 
<li>PPV1: passing via Proxy Protocol V1, available only when Protocol = TCP;</li>
<li>PPV2: passing via Proxy Protocol V2;</li> 
<li>SPP: transmission via Simple Proxy Protocol (selectable only when Protocol = UDP);</li> 
<li>`OFF`: Do not pass the client IP.</li>
Note: L4ProxyRule is optional as an input parameter in CreateL4ProxyRules. If not specified, it defaults to OFF. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
     */
    public $ClientIPPassThroughMode;

    /**
     * @var string Whether to enable session persistence. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
Note: When L4ProxyRule is used as an input parameter in CreateL4ProxyRules, this parameter is optional and defaults to off if left empty. When used as an input parameter in ModifyL4ProxyRules, this parameter is optional and retains its existing value if not specified.
     */
    public $SessionPersist;

    /**
     * @var integer Session persistence duration, in seconds. Value range: 30-3600.
Note: L4ProxyRule is optional as an input parameter in CreateL4ProxyRules. It is valid only when SessionPersist = on. If not specified when SessionPersist = on, it defaults to 3600. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
     */
    public $SessionPersistTime;

    /**
     * @var string Rule tag. Enter 1-50 characters.
Note: L4ProxyRule is optional as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
     */
    public $RuleTag;

    /**
     * @var string Rule status. Valid values:
<li>online: enabled;</li>
<li>offline: disabled;</li>
<li>progress: deploying;</li>
<li>stopping: disabling;</li>
<li>fail: deployment or disabling failed.</li>
Note: Do not fill in this parameter when L4ProxyRule is used as an input parameter in CreateL4ProxyRules or ModifyL4ProxyRules.
     */
    public $Status;

    /**
     * @var string BuID.
     */
    public $BuId;

    /**
     * @var L4ProxyRemoteAuth Remote authentication information.
Note: RemoteAuth cannot be used as an input parameter in CreateL4ProxyRules or ModifyL4ProxyRules. If this parameter is input, it will be ignored. If the returned data of DescribeL4ProxyRules is empty, it indicates that remote authentication is disabled.
     */
    public $RemoteAuth;

    /**
     * @param string $RuleId Forwarding rule ID.
Note: Do not fill in L4ProxyRule as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, this parameter is required.
     * @param string $Protocol Forwarding protocol. Valid values:
<li>TCP: TCP protocol;</li>
<li>UDP: UDP protocol.</li>
Note: L4ProxyRule is required as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
     * @param array $PortRange Forwarding port. You can fill it in based on the following format:
<li>A single port, such as 80;</li>
<li>A port range, such as 81-85, indicating five ports 81, 82, 83, 84, and 85.</li>
Note: L4ProxyRule is required as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
     * @param string $OriginType Origin server type. Valid values:
<li>IP_DOMAIN: IP/domain origin server;</li>
<li>ORIGIN_GROUP: origin server group;</li>
<li>LB: load balancing. Currently only available to the allowlist. </li>
Note: L4ProxyRule is required as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
     * @param array $OriginValue Origin server address:
<li>When OriginType is IP_DOMAIN, enter an IP address or domain name, for example, 8.8.8.8 or test.com;</li>
<li>When OriginType is ORIGIN_GROUP, fill in the origin server group ID, such as og-537y24vf5b41; if referencing an origin server group from another site, the format is {origin server group ID}@{ZoneID}. For example: og-testorigin@zone-38moq1z10wwwy;</li>
<li>When OriginType is LB, fill in the Cloud Load Balancer instance ID, for example, lb-2qwk30xf7s9g. If a load balancer from another site is referenced, the format is {Cloud Load Balancer ID}@{ZoneID}. For example: lb-2rxpamcyqfzg@zone-38moq1z10wwwy.</li>
Note: L4ProxyRule is required as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.

     * @param string $OriginPortRange Origin server port, which can be set as follows:
<li>A single port, such as 80;</li>
<li>A port range, such as 81-85, indicating five ports 81, 82, 83, 84, and 85. When entering a port range, ensure the length corresponds with the forwarding port range. For example, if the forwarding port is 80-90, the forwarding port should be 90-100.</li>
Note: L4ProxyRule is required as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
     * @param string $ClientIPPassThroughMode Transmission of the client IP address. Valid values:
<li>TOA: TOA (selectable only when Protocol = TCP);</li> 
<li>PPV1: passing via Proxy Protocol V1, available only when Protocol = TCP;</li>
<li>PPV2: passing via Proxy Protocol V2;</li> 
<li>SPP: transmission via Simple Proxy Protocol (selectable only when Protocol = UDP);</li> 
<li>`OFF`: Do not pass the client IP.</li>
Note: L4ProxyRule is optional as an input parameter in CreateL4ProxyRules. If not specified, it defaults to OFF. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
     * @param string $SessionPersist Whether to enable session persistence. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
Note: When L4ProxyRule is used as an input parameter in CreateL4ProxyRules, this parameter is optional and defaults to off if left empty. When used as an input parameter in ModifyL4ProxyRules, this parameter is optional and retains its existing value if not specified.
     * @param integer $SessionPersistTime Session persistence duration, in seconds. Value range: 30-3600.
Note: L4ProxyRule is optional as an input parameter in CreateL4ProxyRules. It is valid only when SessionPersist = on. If not specified when SessionPersist = on, it defaults to 3600. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
     * @param string $RuleTag Rule tag. Enter 1-50 characters.
Note: L4ProxyRule is optional as an input parameter in CreateL4ProxyRules. In ModifyL4ProxyRules, it is optional. If not specified, it will retain its existing value.
     * @param string $Status Rule status. Valid values:
<li>online: enabled;</li>
<li>offline: disabled;</li>
<li>progress: deploying;</li>
<li>stopping: disabling;</li>
<li>fail: deployment or disabling failed.</li>
Note: Do not fill in this parameter when L4ProxyRule is used as an input parameter in CreateL4ProxyRules or ModifyL4ProxyRules.
     * @param string $BuId BuID.
     * @param L4ProxyRemoteAuth $RemoteAuth Remote authentication information.
Note: RemoteAuth cannot be used as an input parameter in CreateL4ProxyRules or ModifyL4ProxyRules. If this parameter is input, it will be ignored. If the returned data of DescribeL4ProxyRules is empty, it indicates that remote authentication is disabled.
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("PortRange",$param) and $param["PortRange"] !== null) {
            $this->PortRange = $param["PortRange"];
        }

        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("OriginValue",$param) and $param["OriginValue"] !== null) {
            $this->OriginValue = $param["OriginValue"];
        }

        if (array_key_exists("OriginPortRange",$param) and $param["OriginPortRange"] !== null) {
            $this->OriginPortRange = $param["OriginPortRange"];
        }

        if (array_key_exists("ClientIPPassThroughMode",$param) and $param["ClientIPPassThroughMode"] !== null) {
            $this->ClientIPPassThroughMode = $param["ClientIPPassThroughMode"];
        }

        if (array_key_exists("SessionPersist",$param) and $param["SessionPersist"] !== null) {
            $this->SessionPersist = $param["SessionPersist"];
        }

        if (array_key_exists("SessionPersistTime",$param) and $param["SessionPersistTime"] !== null) {
            $this->SessionPersistTime = $param["SessionPersistTime"];
        }

        if (array_key_exists("RuleTag",$param) and $param["RuleTag"] !== null) {
            $this->RuleTag = $param["RuleTag"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BuId",$param) and $param["BuId"] !== null) {
            $this->BuId = $param["BuId"];
        }

        if (array_key_exists("RemoteAuth",$param) and $param["RemoteAuth"] !== null) {
            $this->RemoteAuth = new L4ProxyRemoteAuth();
            $this->RemoteAuth->deserialize($param["RemoteAuth"]);
        }
    }
}
