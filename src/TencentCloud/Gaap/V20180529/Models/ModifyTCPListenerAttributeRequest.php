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
 * ModifyTCPListenerAttribute request structure.
 *
 * @method string getListenerId() Obtain Listener ID
 * @method void setListenerId(string $ListenerId) Set Listener ID
 * @method string getGroupId() Obtain Connection group ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
 * @method void setGroupId(string $GroupId) Set Connection group ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
 * @method string getProxyId() Obtain Connection ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
 * @method void setProxyId(string $ProxyId) Set Connection ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
 * @method string getListenerName() Obtain Listener name
 * @method void setListenerName(string $ListenerName) Set Listener name
 * @method string getScheduler() Obtain The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy), `lrtt` (the least-response-time strategy).
 * @method void setScheduler(string $Scheduler) Set The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy), `lrtt` (the least-response-time strategy).
 * @method integer getDelayLoop() Obtain Time interval of origin server health check (unit: seconds). Value range: [5, 300].
 * @method void setDelayLoop(integer $DelayLoop) Set Time interval of origin server health check (unit: seconds). Value range: [5, 300].
 * @method integer getConnectTimeout() Obtain Response timeout of origin server health check (unit: seconds). Value range: [2, 60]. The timeout value shall be less than the time interval for health check DelayLoop.
 * @method void setConnectTimeout(integer $ConnectTimeout) Set Response timeout of origin server health check (unit: seconds). Value range: [2, 60]. The timeout value shall be less than the time interval for health check DelayLoop.
 * @method integer getHealthCheck() Obtain Whether to enable health check. 1: enable; 0: disable.
 * @method void setHealthCheck(integer $HealthCheck) Set Whether to enable health check. 1: enable; 0: disable.
 * @method integer getFailoverSwitch() Obtain Whether to enable the primary/secondary origin server mode. Valid values: 1 (enable) and 0 (disable). It cannot be enabled for domain name origin servers.
 * @method void setFailoverSwitch(integer $FailoverSwitch) Set Whether to enable the primary/secondary origin server mode. Valid values: 1 (enable) and 0 (disable). It cannot be enabled for domain name origin servers.
 * @method integer getHealthyThreshold() Obtain Healthy threshold. The number of consecutive successful health checks required before considering an origin server healthy. Value range: 1 - 10.
 * @method void setHealthyThreshold(integer $HealthyThreshold) Set Healthy threshold. The number of consecutive successful health checks required before considering an origin server healthy. Value range: 1 - 10.
 * @method integer getUnhealthyThreshold() Obtain Unhealthy threshold. The number of consecutive failed health checks required before considering an origin server unhealthy. Value range: 1 -10.
 * @method void setUnhealthyThreshold(integer $UnhealthyThreshold) Set Unhealthy threshold. The number of consecutive failed health checks required before considering an origin server unhealthy. Value range: 1 -10.
 */
class ModifyTCPListenerAttributeRequest extends AbstractModel
{
    /**
     * @var string Listener ID
     */
    public $ListenerId;

    /**
     * @var string Connection group ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
     */
    public $GroupId;

    /**
     * @var string Connection ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
     */
    public $ProxyId;

    /**
     * @var string Listener name
     */
    public $ListenerName;

    /**
     * @var string The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy), `lrtt` (the least-response-time strategy).
     */
    public $Scheduler;

    /**
     * @var integer Time interval of origin server health check (unit: seconds). Value range: [5, 300].
     */
    public $DelayLoop;

    /**
     * @var integer Response timeout of origin server health check (unit: seconds). Value range: [2, 60]. The timeout value shall be less than the time interval for health check DelayLoop.
     */
    public $ConnectTimeout;

    /**
     * @var integer Whether to enable health check. 1: enable; 0: disable.
     */
    public $HealthCheck;

    /**
     * @var integer Whether to enable the primary/secondary origin server mode. Valid values: 1 (enable) and 0 (disable). It cannot be enabled for domain name origin servers.
     */
    public $FailoverSwitch;

    /**
     * @var integer Healthy threshold. The number of consecutive successful health checks required before considering an origin server healthy. Value range: 1 - 10.
     */
    public $HealthyThreshold;

    /**
     * @var integer Unhealthy threshold. The number of consecutive failed health checks required before considering an origin server unhealthy. Value range: 1 -10.
     */
    public $UnhealthyThreshold;

    /**
     * @param string $ListenerId Listener ID
     * @param string $GroupId Connection group ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
     * @param string $ProxyId Connection ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
     * @param string $ListenerName Listener name
     * @param string $Scheduler The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy), `lrtt` (the least-response-time strategy).
     * @param integer $DelayLoop Time interval of origin server health check (unit: seconds). Value range: [5, 300].
     * @param integer $ConnectTimeout Response timeout of origin server health check (unit: seconds). Value range: [2, 60]. The timeout value shall be less than the time interval for health check DelayLoop.
     * @param integer $HealthCheck Whether to enable health check. 1: enable; 0: disable.
     * @param integer $FailoverSwitch Whether to enable the primary/secondary origin server mode. Valid values: 1 (enable) and 0 (disable). It cannot be enabled for domain name origin servers.
     * @param integer $HealthyThreshold Healthy threshold. The number of consecutive successful health checks required before considering an origin server healthy. Value range: 1 - 10.
     * @param integer $UnhealthyThreshold Unhealthy threshold. The number of consecutive failed health checks required before considering an origin server unhealthy. Value range: 1 -10.
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("DelayLoop",$param) and $param["DelayLoop"] !== null) {
            $this->DelayLoop = $param["DelayLoop"];
        }

        if (array_key_exists("ConnectTimeout",$param) and $param["ConnectTimeout"] !== null) {
            $this->ConnectTimeout = $param["ConnectTimeout"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = $param["HealthCheck"];
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
