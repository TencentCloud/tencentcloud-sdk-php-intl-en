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
 * CreateUDPListeners request structure.
 *
 * @method string getListenerName() Obtain Listener name
 * @method void setListenerName(string $ListenerName) Set Listener name
 * @method array getPorts() Obtain List of listener ports
 * @method void setPorts(array $Ports) Set List of listener ports
 * @method string getScheduler() Obtain The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy), `lrtt` (the least-response-time strategy).
 * @method void setScheduler(string $Scheduler) Set The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy), `lrtt` (the least-response-time strategy).
 * @method string getRealServerType() Obtain The origin server type. Values: `IP` (IP address); `DOMAIN` (domain name).
 * @method void setRealServerType(string $RealServerType) Set The origin server type. Values: `IP` (IP address); `DOMAIN` (domain name).
 * @method string getProxyId() Obtain Connection ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
 * @method void setProxyId(string $ProxyId) Set Connection ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
 * @method string getGroupId() Obtain Connection group ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
 * @method void setGroupId(string $GroupId) Set Connection group ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
 * @method array getRealServerPorts() Obtain List of origin server ports, which only supports the listeners of version 1.0 and connection group.
 * @method void setRealServerPorts(array $RealServerPorts) Set List of origin server ports, which only supports the listeners of version 1.0 and connection group.
 * @method integer getDelayLoop() Obtain Time interval of origin server health check (unit: seconds). Value range: [5, 300].
 * @method void setDelayLoop(integer $DelayLoop) Set Time interval of origin server health check (unit: seconds). Value range: [5, 300].
 * @method integer getConnectTimeout() Obtain Response timeout of origin server health check (unit: seconds). Value range: [2, 60]. The timeout value shall be less than the time interval for health check DelayLoop.
 * @method void setConnectTimeout(integer $ConnectTimeout) Set Response timeout of origin server health check (unit: seconds). Value range: [2, 60]. The timeout value shall be less than the time interval for health check DelayLoop.
 * @method integer getHealthyThreshold() Obtain Healthy threshold. The number of consecutive successful health checks required before considering an origin server healthy. Value range: 1 - 10.
 * @method void setHealthyThreshold(integer $HealthyThreshold) Set Healthy threshold. The number of consecutive successful health checks required before considering an origin server healthy. Value range: 1 - 10.
 * @method integer getUnhealthyThreshold() Obtain Unhealthy threshold. The number of consecutive failed health checks required before considering an origin server unhealthy. Value range: 1 - 10.
 * @method void setUnhealthyThreshold(integer $UnhealthyThreshold) Set Unhealthy threshold. The number of consecutive failed health checks required before considering an origin server unhealthy. Value range: 1 - 10.
 * @method integer getFailoverSwitch() Obtain Whether to enable the primary/secondary origin server mode for failover. Values: `1` (enabled); `0` (disabled). It’s not available if the origin type is `DOMAIN`.
 * @method void setFailoverSwitch(integer $FailoverSwitch) Set Whether to enable the primary/secondary origin server mode for failover. Values: `1` (enabled); `0` (disabled). It’s not available if the origin type is `DOMAIN`.
 * @method integer getHealthCheck() Obtain Whether the health check is enabled for the origin server. Values: `1` (enabled); `0` (disabled).
 * @method void setHealthCheck(integer $HealthCheck) Set Whether the health check is enabled for the origin server. Values: `1` (enabled); `0` (disabled).
 * @method string getCheckType() Obtain The health check type. Values: `PORT` (port); `PING` (ping).
 * @method void setCheckType(string $CheckType) Set The health check type. Values: `PORT` (port); `PING` (ping).
 * @method integer getCheckPort() Obtain The health probe port.
 * @method void setCheckPort(integer $CheckPort) Set The health probe port.
 * @method string getContextType() Obtain The UDP message type. Values: `TEXT` (text). This parameter is used only when `CheckType = PORT`.
 * @method void setContextType(string $ContextType) Set The UDP message type. Values: `TEXT` (text). This parameter is used only when `CheckType = PORT`.
 * @method string getSendContext() Obtain The UDP message sent by the health probe port. This parameter is used only when `CheckType = PORT`.
 * @method void setSendContext(string $SendContext) Set The UDP message sent by the health probe port. This parameter is used only when `CheckType = PORT`.
 * @method string getRecvContext() Obtain The UDP message received by the health probe port. This parameter is used only when `CheckType = PORT`.
 * @method void setRecvContext(string $RecvContext) Set The UDP message received by the health probe port. This parameter is used only when `CheckType = PORT`.
 */
class CreateUDPListenersRequest extends AbstractModel
{
    /**
     * @var string Listener name
     */
    public $ListenerName;

    /**
     * @var array List of listener ports
     */
    public $Ports;

    /**
     * @var string The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy), `lrtt` (the least-response-time strategy).
     */
    public $Scheduler;

    /**
     * @var string The origin server type. Values: `IP` (IP address); `DOMAIN` (domain name).
     */
    public $RealServerType;

    /**
     * @var string Connection ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
     */
    public $ProxyId;

    /**
     * @var string Connection group ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
     */
    public $GroupId;

    /**
     * @var array List of origin server ports, which only supports the listeners of version 1.0 and connection group.
     */
    public $RealServerPorts;

    /**
     * @var integer Time interval of origin server health check (unit: seconds). Value range: [5, 300].
     */
    public $DelayLoop;

    /**
     * @var integer Response timeout of origin server health check (unit: seconds). Value range: [2, 60]. The timeout value shall be less than the time interval for health check DelayLoop.
     */
    public $ConnectTimeout;

    /**
     * @var integer Healthy threshold. The number of consecutive successful health checks required before considering an origin server healthy. Value range: 1 - 10.
     */
    public $HealthyThreshold;

    /**
     * @var integer Unhealthy threshold. The number of consecutive failed health checks required before considering an origin server unhealthy. Value range: 1 - 10.
     */
    public $UnhealthyThreshold;

    /**
     * @var integer Whether to enable the primary/secondary origin server mode for failover. Values: `1` (enabled); `0` (disabled). It’s not available if the origin type is `DOMAIN`.
     */
    public $FailoverSwitch;

    /**
     * @var integer Whether the health check is enabled for the origin server. Values: `1` (enabled); `0` (disabled).
     */
    public $HealthCheck;

    /**
     * @var string The health check type. Values: `PORT` (port); `PING` (ping).
     */
    public $CheckType;

    /**
     * @var integer The health probe port.
     */
    public $CheckPort;

    /**
     * @var string The UDP message type. Values: `TEXT` (text). This parameter is used only when `CheckType = PORT`.
     */
    public $ContextType;

    /**
     * @var string The UDP message sent by the health probe port. This parameter is used only when `CheckType = PORT`.
     */
    public $SendContext;

    /**
     * @var string The UDP message received by the health probe port. This parameter is used only when `CheckType = PORT`.
     */
    public $RecvContext;

    /**
     * @param string $ListenerName Listener name
     * @param array $Ports List of listener ports
     * @param string $Scheduler The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy), `lrtt` (the least-response-time strategy).
     * @param string $RealServerType The origin server type. Values: `IP` (IP address); `DOMAIN` (domain name).
     * @param string $ProxyId Connection ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
     * @param string $GroupId Connection group ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
     * @param array $RealServerPorts List of origin server ports, which only supports the listeners of version 1.0 and connection group.
     * @param integer $DelayLoop Time interval of origin server health check (unit: seconds). Value range: [5, 300].
     * @param integer $ConnectTimeout Response timeout of origin server health check (unit: seconds). Value range: [2, 60]. The timeout value shall be less than the time interval for health check DelayLoop.
     * @param integer $HealthyThreshold Healthy threshold. The number of consecutive successful health checks required before considering an origin server healthy. Value range: 1 - 10.
     * @param integer $UnhealthyThreshold Unhealthy threshold. The number of consecutive failed health checks required before considering an origin server unhealthy. Value range: 1 - 10.
     * @param integer $FailoverSwitch Whether to enable the primary/secondary origin server mode for failover. Values: `1` (enabled); `0` (disabled). It’s not available if the origin type is `DOMAIN`.
     * @param integer $HealthCheck Whether the health check is enabled for the origin server. Values: `1` (enabled); `0` (disabled).
     * @param string $CheckType The health check type. Values: `PORT` (port); `PING` (ping).
     * @param integer $CheckPort The health probe port.
     * @param string $ContextType The UDP message type. Values: `TEXT` (text). This parameter is used only when `CheckType = PORT`.
     * @param string $SendContext The UDP message sent by the health probe port. This parameter is used only when `CheckType = PORT`.
     * @param string $RecvContext The UDP message received by the health probe port. This parameter is used only when `CheckType = PORT`.
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
        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = $param["Ports"];
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("RealServerType",$param) and $param["RealServerType"] !== null) {
            $this->RealServerType = $param["RealServerType"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("RealServerPorts",$param) and $param["RealServerPorts"] !== null) {
            $this->RealServerPorts = $param["RealServerPorts"];
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
    }
}
