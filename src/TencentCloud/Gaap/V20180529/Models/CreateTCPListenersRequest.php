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
 * CreateTCPListeners request structure.
 *
 * @method string getListenerName() Obtain Listener name.
 * @method void setListenerName(string $ListenerName) Set Listener name.
 * @method array getPorts() Obtain List of listener ports.
 * @method void setPorts(array $Ports) Set List of listener ports.
 * @method string getScheduler() Obtain The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy), `lrtt` (the least-response-time strategy).
 * @method void setScheduler(string $Scheduler) Set The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy), `lrtt` (the least-response-time strategy).
 * @method integer getHealthCheck() Obtain Whether origin server has the health check enabled. 1: enabled; 0: disabled. UDP listeners do not support health check.
 * @method void setHealthCheck(integer $HealthCheck) Set Whether origin server has the health check enabled. 1: enabled; 0: disabled. UDP listeners do not support health check.
 * @method string getRealServerType() Obtain The origin server type. Values: `IP` (IP address); `DOMAIN` (domain name).
 * @method void setRealServerType(string $RealServerType) Set The origin server type. Values: `IP` (IP address); `DOMAIN` (domain name).
 * @method string getProxyId() Obtain Connection ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
 * @method void setProxyId(string $ProxyId) Set Connection ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
 * @method string getGroupId() Obtain Connection group ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
 * @method void setGroupId(string $GroupId) Set Connection group ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
 * @method integer getDelayLoop() Obtain Time interval of origin server health check (unit: seconds). Value range: [5, 300].
 * @method void setDelayLoop(integer $DelayLoop) Set Time interval of origin server health check (unit: seconds). Value range: [5, 300].
 * @method integer getConnectTimeout() Obtain Response timeout of origin server health check (unit: seconds). Value range: [2, 60]. The timeout value shall be less than the time interval for health check DelayLoop.
 * @method void setConnectTimeout(integer $ConnectTimeout) Set Response timeout of origin server health check (unit: seconds). Value range: [2, 60]. The timeout value shall be less than the time interval for health check DelayLoop.
 * @method array getRealServerPorts() Obtain List of origin server ports, which only supports the listeners of version 1.0 and connection group.
 * @method void setRealServerPorts(array $RealServerPorts) Set List of origin server ports, which only supports the listeners of version 1.0 and connection group.
 * @method integer getClientIPMethod() Obtain Listener methods of getting client IPs. 0: TOA; 1: Proxy Protocol.
 * @method void setClientIPMethod(integer $ClientIPMethod) Set Listener methods of getting client IPs. 0: TOA; 1: Proxy Protocol.
 * @method integer getFailoverSwitch() Obtain Whether to enable the primary/secondary origin server mode. Valid values: 1 (enable) and 0 (disable). It cannot be enabled for domain name origin servers.
 * @method void setFailoverSwitch(integer $FailoverSwitch) Set Whether to enable the primary/secondary origin server mode. Valid values: 1 (enable) and 0 (disable). It cannot be enabled for domain name origin servers.
 * @method integer getHealthyThreshold() Obtain Healthy threshold. The number of consecutive successful health checks required before considering an origin server healthy. Value range: 1 - 10.
 * @method void setHealthyThreshold(integer $HealthyThreshold) Set Healthy threshold. The number of consecutive successful health checks required before considering an origin server healthy. Value range: 1 - 10.
 * @method integer getUnhealthyThreshold() Obtain Unhealthy threshold. The number of consecutive failed health checks required before considering an origin server unhealthy. Value range: 1 - 10.
 * @method void setUnhealthyThreshold(integer $UnhealthyThreshold) Set Unhealthy threshold. The number of consecutive failed health checks required before considering an origin server unhealthy. Value range: 1 - 10.
 */
class CreateTCPListenersRequest extends AbstractModel
{
    /**
     * @var string Listener name.
     */
    public $ListenerName;

    /**
     * @var array List of listener ports.
     */
    public $Ports;

    /**
     * @var string The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy), `lrtt` (the least-response-time strategy).
     */
    public $Scheduler;

    /**
     * @var integer Whether origin server has the health check enabled. 1: enabled; 0: disabled. UDP listeners do not support health check.
     */
    public $HealthCheck;

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
     * @var integer Time interval of origin server health check (unit: seconds). Value range: [5, 300].
     */
    public $DelayLoop;

    /**
     * @var integer Response timeout of origin server health check (unit: seconds). Value range: [2, 60]. The timeout value shall be less than the time interval for health check DelayLoop.
     */
    public $ConnectTimeout;

    /**
     * @var array List of origin server ports, which only supports the listeners of version 1.0 and connection group.
     */
    public $RealServerPorts;

    /**
     * @var integer Listener methods of getting client IPs. 0: TOA; 1: Proxy Protocol.
     */
    public $ClientIPMethod;

    /**
     * @var integer Whether to enable the primary/secondary origin server mode. Valid values: 1 (enable) and 0 (disable). It cannot be enabled for domain name origin servers.
     */
    public $FailoverSwitch;

    /**
     * @var integer Healthy threshold. The number of consecutive successful health checks required before considering an origin server healthy. Value range: 1 - 10.
     */
    public $HealthyThreshold;

    /**
     * @var integer Unhealthy threshold. The number of consecutive failed health checks required before considering an origin server unhealthy. Value range: 1 - 10.
     */
    public $UnhealthyThreshold;

    /**
     * @param string $ListenerName Listener name.
     * @param array $Ports List of listener ports.
     * @param string $Scheduler The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy), `lrtt` (the least-response-time strategy).
     * @param integer $HealthCheck Whether origin server has the health check enabled. 1: enabled; 0: disabled. UDP listeners do not support health check.
     * @param string $RealServerType The origin server type. Values: `IP` (IP address); `DOMAIN` (domain name).
     * @param string $ProxyId Connection ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
     * @param string $GroupId Connection group ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
     * @param integer $DelayLoop Time interval of origin server health check (unit: seconds). Value range: [5, 300].
     * @param integer $ConnectTimeout Response timeout of origin server health check (unit: seconds). Value range: [2, 60]. The timeout value shall be less than the time interval for health check DelayLoop.
     * @param array $RealServerPorts List of origin server ports, which only supports the listeners of version 1.0 and connection group.
     * @param integer $ClientIPMethod Listener methods of getting client IPs. 0: TOA; 1: Proxy Protocol.
     * @param integer $FailoverSwitch Whether to enable the primary/secondary origin server mode. Valid values: 1 (enable) and 0 (disable). It cannot be enabled for domain name origin servers.
     * @param integer $HealthyThreshold Healthy threshold. The number of consecutive successful health checks required before considering an origin server healthy. Value range: 1 - 10.
     * @param integer $UnhealthyThreshold Unhealthy threshold. The number of consecutive failed health checks required before considering an origin server unhealthy. Value range: 1 - 10.
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

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = $param["HealthCheck"];
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

        if (array_key_exists("DelayLoop",$param) and $param["DelayLoop"] !== null) {
            $this->DelayLoop = $param["DelayLoop"];
        }

        if (array_key_exists("ConnectTimeout",$param) and $param["ConnectTimeout"] !== null) {
            $this->ConnectTimeout = $param["ConnectTimeout"];
        }

        if (array_key_exists("RealServerPorts",$param) and $param["RealServerPorts"] !== null) {
            $this->RealServerPorts = $param["RealServerPorts"];
        }

        if (array_key_exists("ClientIPMethod",$param) and $param["ClientIPMethod"] !== null) {
            $this->ClientIPMethod = $param["ClientIPMethod"];
        }

        if (array_key_exists("FailoverSwitch",$param) and $param["FailoverSwitch"] !== null) {
            $this->FailoverSwitch = $param["FailoverSwitch"];
        }

        if (array_key_exists("HealthyThreshold",$param) and $param["HealthyThreshold"] !== null) {
            $this->HealthyThreshold = $param["HealthyThreshold"];
        }

        if (array_key_exists("UnhealthyThreshold",$param) and $param["UnhealthyThreshold"] !== null) {
            $this->UnhealthyThreshold = $param["UnhealthyThreshold"];
        }
    }
}
