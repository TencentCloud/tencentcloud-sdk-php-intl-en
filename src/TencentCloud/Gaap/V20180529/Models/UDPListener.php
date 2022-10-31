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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UDP listener information
 *
 * @method string getListenerId() Obtain Listener ID
 * @method void setListenerId(string $ListenerId) Set Listener ID
 * @method string getListenerName() Obtain Listener name
 * @method void setListenerName(string $ListenerName) Set Listener name
 * @method integer getPort() Obtain Listener port
 * @method void setPort(integer $Port) Set Listener port
 * @method integer getRealServerPort() Obtain Origin server port, which is only valid for the connections or connection groups of version 1.0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRealServerPort(integer $RealServerPort) Set Origin server port, which is only valid for the connections or connection groups of version 1.0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRealServerType() Obtain Type of the origin server bound to listeners
 * @method void setRealServerType(string $RealServerType) Set Type of the origin server bound to listeners
 * @method string getProtocol() Obtain Listener protocol: UDP.
 * @method void setProtocol(string $Protocol) Set Listener protocol: UDP.
 * @method integer getListenerStatus() Obtain Listener status:
`0`: Running
`1`: Creating
`2`: Terminating
`3`: Adjusting origin server
`4`: Adjusting configuration
 * @method void setListenerStatus(integer $ListenerStatus) Set Listener status:
`0`: Running
`1`: Creating
`2`: Terminating
`3`: Adjusting origin server
`4`: Adjusting configuration
 * @method string getScheduler() Obtain The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy), `lrtt` (the least-response-time strategy).
 * @method void setScheduler(string $Scheduler) Set The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy), `lrtt` (the least-response-time strategy).
 * @method integer getBindStatus() Obtain Origin server binding status of listeners. `0`: Normal; `1`: IP exception; `2`: Domain name resolution exception.
 * @method void setBindStatus(integer $BindStatus) Set Origin server binding status of listeners. `0`: Normal; `1`: IP exception; `2`: Domain name resolution exception.
 * @method array getRealServerSet() Obtain Information of the origin server bound to listeners
 * @method void setRealServerSet(array $RealServerSet) Set Information of the origin server bound to listeners
 * @method integer getCreateTime() Obtain Listener creation time in the format of UNIX timestamp
 * @method void setCreateTime(integer $CreateTime) Set Listener creation time in the format of UNIX timestamp
 * @method integer getSessionPersist() Obtain Specifies whether to enable session persistence. Values: `0` (disable), `1` (enable)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSessionPersist(integer $SessionPersist) Set Specifies whether to enable session persistence. Values: `0` (disable), `1` (enable)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getDelayLoop() Obtain Time interval of origin server health check (unit: seconds). Value range: [5, 300].
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setDelayLoop(integer $DelayLoop) Set Time interval of origin server health check (unit: seconds). Value range: [5, 300].
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getConnectTimeout() Obtain Response timeout of origin server health check (unit: seconds). Value range: [2, 60]. The timeout value shall be less than the time interval for health check DelayLoop.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setConnectTimeout(integer $ConnectTimeout) Set Response timeout of origin server health check (unit: seconds). Value range: [2, 60]. The timeout value shall be less than the time interval for health check DelayLoop.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getHealthyThreshold() Obtain Healthy threshold. The number of consecutive successful health checks required before considering an origin server healthy. Value range: 1 - 10.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHealthyThreshold(integer $HealthyThreshold) Set Healthy threshold. The number of consecutive successful health checks required before considering an origin server healthy. Value range: 1 - 10.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUnhealthyThreshold() Obtain Unhealthy threshold. The number of consecutive failed health checks required before considering an origin server unhealthy. Value range: 1 - 10.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setUnhealthyThreshold(integer $UnhealthyThreshold) Set Unhealthy threshold. The number of consecutive failed health checks required before considering an origin server unhealthy. Value range: 1 - 10.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getFailoverSwitch() Obtain Whether to enable the primary/secondary origin server mode for failover. Values: `1` (enabled); `0` (disabled). It’s not available if the origin type is `DOMAIN`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setFailoverSwitch(integer $FailoverSwitch) Set Whether to enable the primary/secondary origin server mode for failover. Values: `1` (enabled); `0` (disabled). It’s not available if the origin type is `DOMAIN`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getHealthCheck() Obtain Whether the health check is enabled for the origin server. Values: `1` (enabled); `0` (disabled).
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setHealthCheck(integer $HealthCheck) Set Whether the health check is enabled for the origin server. Values: `1` (enabled); `0` (disabled).
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getCheckType() Obtain The health check type. Values: `PORT` (port); `PING` (ping).
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCheckType(string $CheckType) Set The health check type. Values: `PORT` (port); `PING` (ping).
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method integer getCheckPort() Obtain The health probe port.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCheckPort(integer $CheckPort) Set The health probe port.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getContextType() Obtain The UDP message type. Values: `TEXT` (text). This parameter is used only when `CheckType = PORT`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setContextType(string $ContextType) Set The UDP message type. Values: `TEXT` (text). This parameter is used only when `CheckType = PORT`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getSendContext() Obtain The UDP message sent by the health probe port. This parameter is used only when `CheckType = PORT`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSendContext(string $SendContext) Set The UDP message sent by the health probe port. This parameter is used only when `CheckType = PORT`.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getRecvContext() Obtain The UDP message received by the health probe port. This parameter is used only when `CheckType = PORT`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRecvContext(string $RecvContext) Set The UDP message received by the health probe port. This parameter is used only when `CheckType = PORT`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProxyId() Obtain Connection ID of the listener. A null value is returned if the listener is associated with the connection group.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setProxyId(string $ProxyId) Set Connection ID of the listener. A null value is returned if the listener is associated with the connection group.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getGroupId() Obtain Connection group ID of the listener. A null value is returned if the listener is associated with a specific connection.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setGroupId(string $GroupId) Set Connection group ID of the listener. A null value is returned if the listener is associated with a specific connection.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class UDPListener extends AbstractModel
{
    /**
     * @var string Listener ID
     */
    public $ListenerId;

    /**
     * @var string Listener name
     */
    public $ListenerName;

    /**
     * @var integer Listener port
     */
    public $Port;

    /**
     * @var integer Origin server port, which is only valid for the connections or connection groups of version 1.0.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RealServerPort;

    /**
     * @var string Type of the origin server bound to listeners
     */
    public $RealServerType;

    /**
     * @var string Listener protocol: UDP.
     */
    public $Protocol;

    /**
     * @var integer Listener status:
`0`: Running
`1`: Creating
`2`: Terminating
`3`: Adjusting origin server
`4`: Adjusting configuration
     */
    public $ListenerStatus;

    /**
     * @var string The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy), `lrtt` (the least-response-time strategy).
     */
    public $Scheduler;

    /**
     * @var integer Origin server binding status of listeners. `0`: Normal; `1`: IP exception; `2`: Domain name resolution exception.
     */
    public $BindStatus;

    /**
     * @var array Information of the origin server bound to listeners
     */
    public $RealServerSet;

    /**
     * @var integer Listener creation time in the format of UNIX timestamp
     */
    public $CreateTime;

    /**
     * @var integer Specifies whether to enable session persistence. Values: `0` (disable), `1` (enable)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SessionPersist;

    /**
     * @var integer Time interval of origin server health check (unit: seconds). Value range: [5, 300].
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $DelayLoop;

    /**
     * @var integer Response timeout of origin server health check (unit: seconds). Value range: [2, 60]. The timeout value shall be less than the time interval for health check DelayLoop.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ConnectTimeout;

    /**
     * @var integer Healthy threshold. The number of consecutive successful health checks required before considering an origin server healthy. Value range: 1 - 10.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HealthyThreshold;

    /**
     * @var integer Unhealthy threshold. The number of consecutive failed health checks required before considering an origin server unhealthy. Value range: 1 - 10.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $UnhealthyThreshold;

    /**
     * @var integer Whether to enable the primary/secondary origin server mode for failover. Values: `1` (enabled); `0` (disabled). It’s not available if the origin type is `DOMAIN`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $FailoverSwitch;

    /**
     * @var integer Whether the health check is enabled for the origin server. Values: `1` (enabled); `0` (disabled).
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $HealthCheck;

    /**
     * @var string The health check type. Values: `PORT` (port); `PING` (ping).
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CheckType;

    /**
     * @var integer The health probe port.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CheckPort;

    /**
     * @var string The UDP message type. Values: `TEXT` (text). This parameter is used only when `CheckType = PORT`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ContextType;

    /**
     * @var string The UDP message sent by the health probe port. This parameter is used only when `CheckType = PORT`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $SendContext;

    /**
     * @var string The UDP message received by the health probe port. This parameter is used only when `CheckType = PORT`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RecvContext;

    /**
     * @var string Connection ID of the listener. A null value is returned if the listener is associated with the connection group.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $ProxyId;

    /**
     * @var string Connection group ID of the listener. A null value is returned if the listener is associated with a specific connection.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $GroupId;

    /**
     * @param string $ListenerId Listener ID
     * @param string $ListenerName Listener name
     * @param integer $Port Listener port
     * @param integer $RealServerPort Origin server port, which is only valid for the connections or connection groups of version 1.0.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RealServerType Type of the origin server bound to listeners
     * @param string $Protocol Listener protocol: UDP.
     * @param integer $ListenerStatus Listener status:
`0`: Running
`1`: Creating
`2`: Terminating
`3`: Adjusting origin server
`4`: Adjusting configuration
     * @param string $Scheduler The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy), `lrtt` (the least-response-time strategy).
     * @param integer $BindStatus Origin server binding status of listeners. `0`: Normal; `1`: IP exception; `2`: Domain name resolution exception.
     * @param array $RealServerSet Information of the origin server bound to listeners
     * @param integer $CreateTime Listener creation time in the format of UNIX timestamp
     * @param integer $SessionPersist Specifies whether to enable session persistence. Values: `0` (disable), `1` (enable)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $DelayLoop Time interval of origin server health check (unit: seconds). Value range: [5, 300].
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $ConnectTimeout Response timeout of origin server health check (unit: seconds). Value range: [2, 60]. The timeout value shall be less than the time interval for health check DelayLoop.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $HealthyThreshold Healthy threshold. The number of consecutive successful health checks required before considering an origin server healthy. Value range: 1 - 10.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $UnhealthyThreshold Unhealthy threshold. The number of consecutive failed health checks required before considering an origin server unhealthy. Value range: 1 - 10.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $FailoverSwitch Whether to enable the primary/secondary origin server mode for failover. Values: `1` (enabled); `0` (disabled). It’s not available if the origin type is `DOMAIN`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $HealthCheck Whether the health check is enabled for the origin server. Values: `1` (enabled); `0` (disabled).
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $CheckType The health check type. Values: `PORT` (port); `PING` (ping).
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param integer $CheckPort The health probe port.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $ContextType The UDP message type. Values: `TEXT` (text). This parameter is used only when `CheckType = PORT`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $SendContext The UDP message sent by the health probe port. This parameter is used only when `CheckType = PORT`.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $RecvContext The UDP message received by the health probe port. This parameter is used only when `CheckType = PORT`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProxyId Connection ID of the listener. A null value is returned if the listener is associated with the connection group.
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $GroupId Connection group ID of the listener. A null value is returned if the listener is associated with a specific connection.
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("RealServerPort",$param) and $param["RealServerPort"] !== null) {
            $this->RealServerPort = $param["RealServerPort"];
        }

        if (array_key_exists("RealServerType",$param) and $param["RealServerType"] !== null) {
            $this->RealServerType = $param["RealServerType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ListenerStatus",$param) and $param["ListenerStatus"] !== null) {
            $this->ListenerStatus = $param["ListenerStatus"];
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("BindStatus",$param) and $param["BindStatus"] !== null) {
            $this->BindStatus = $param["BindStatus"];
        }

        if (array_key_exists("RealServerSet",$param) and $param["RealServerSet"] !== null) {
            $this->RealServerSet = [];
            foreach ($param["RealServerSet"] as $key => $value){
                $obj = new BindRealServer();
                $obj->deserialize($value);
                array_push($this->RealServerSet, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SessionPersist",$param) and $param["SessionPersist"] !== null) {
            $this->SessionPersist = $param["SessionPersist"];
        }

        if (array_key_exists("DelayLoop",$param) and $param["DelayLoop"] !== null) {
            $this->DelayLoop = $param["DelayLoop"];
        }

        if (array_key_exists("ConnectTimeout",$param) and $param["ConnectTimeout"] !== null) {
            $this->ConnectTimeout = $param["ConnectTimeout"];
        }

        if (array_key_exists("HealthyThreshold",$param) and $param["HealthyThreshold"] !== null) {
            $this->HealthyThreshold = $param["HealthyThreshold"];
        }

        if (array_key_exists("UnhealthyThreshold",$param) and $param["UnhealthyThreshold"] !== null) {
            $this->UnhealthyThreshold = $param["UnhealthyThreshold"];
        }

        if (array_key_exists("FailoverSwitch",$param) and $param["FailoverSwitch"] !== null) {
            $this->FailoverSwitch = $param["FailoverSwitch"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = $param["HealthCheck"];
        }

        if (array_key_exists("CheckType",$param) and $param["CheckType"] !== null) {
            $this->CheckType = $param["CheckType"];
        }

        if (array_key_exists("CheckPort",$param) and $param["CheckPort"] !== null) {
            $this->CheckPort = $param["CheckPort"];
        }

        if (array_key_exists("ContextType",$param) and $param["ContextType"] !== null) {
            $this->ContextType = $param["ContextType"];
        }

        if (array_key_exists("SendContext",$param) and $param["SendContext"] !== null) {
            $this->SendContext = $param["SendContext"];
        }

        if (array_key_exists("RecvContext",$param) and $param["RecvContext"] !== null) {
            $this->RecvContext = $param["RecvContext"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
