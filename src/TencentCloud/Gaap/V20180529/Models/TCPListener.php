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
 * TCP listener information
 *
 * @method string getListenerId() Obtain Listener ID
 * @method void setListenerId(string $ListenerId) Set Listener ID
 * @method string getListenerName() Obtain Listener name
 * @method void setListenerName(string $ListenerName) Set Listener name
 * @method integer getPort() Obtain Listener port
 * @method void setPort(integer $Port) Set Listener port
 * @method integer getRealServerPort() Obtain Origin server port, which is only valid for the connections of version 1.0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRealServerPort(integer $RealServerPort) Set Origin server port, which is only valid for the connections of version 1.0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRealServerType() Obtain Type of the origin server bound to listeners
 * @method void setRealServerType(string $RealServerType) Set Type of the origin server bound to listeners
 * @method string getProtocol() Obtain Listener protocol: TCP.
 * @method void setProtocol(string $Protocol) Set Listener protocol: TCP.
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
 * @method integer getConnectTimeout() Obtain Response timeout of origin server health check (unit: seconds).
 * @method void setConnectTimeout(integer $ConnectTimeout) Set Response timeout of origin server health check (unit: seconds).
 * @method integer getDelayLoop() Obtain Time interval of origin server health check (unit: seconds).
 * @method void setDelayLoop(integer $DelayLoop) Set Time interval of origin server health check (unit: seconds).
 * @method integer getHealthCheck() Obtain Whether to enable the listener health check:
`0`: Disable
`1`: Enable
 * @method void setHealthCheck(integer $HealthCheck) Set Whether to enable the listener health check:
`0`: Disable
`1`: Enable
 * @method integer getBindStatus() Obtain Status of the origin server bound to listeners:
`0`: Abnormal
`1`: Normal
 * @method void setBindStatus(integer $BindStatus) Set Status of the origin server bound to listeners:
`0`: Abnormal
`1`: Normal
 * @method array getRealServerSet() Obtain Information of the origin server bound to listeners
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRealServerSet(array $RealServerSet) Set Information of the origin server bound to listeners
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() Obtain Listener creation time in the format of UNIX timestamp
 * @method void setCreateTime(integer $CreateTime) Set Listener creation time in the format of UNIX timestamp
 * @method integer getClientIPMethod() Obtain Describes how the listener obtains client IPs. `0`: TOA; `1`: Proxy Protocol.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClientIPMethod(integer $ClientIPMethod) Set Describes how the listener obtains client IPs. `0`: TOA; `1`: Proxy Protocol.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHealthyThreshold() Obtain Healthy threshold. The number of consecutive successful health checks required before considering an origin server healthy. Value range: 1 - 10.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHealthyThreshold(integer $HealthyThreshold) Set Healthy threshold. The number of consecutive successful health checks required before considering an origin server healthy. Value range: 1 - 10.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getUnhealthyThreshold() Obtain Unhealthy threshold. The number of consecutive failed health checks required before considering an origin server unhealthy. Value range: 1 - 10.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnhealthyThreshold(integer $UnhealthyThreshold) Set Unhealthy threshold. The number of consecutive failed health checks required before considering an origin server unhealthy. Value range: 1 - 10.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getFailoverSwitch() Obtain Whether to enable the primary/secondary origin server mode for failover. Values: `1` (enabled); `0` (disabled). It’s not available if the origin type is `DOMAIN`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFailoverSwitch(integer $FailoverSwitch) Set Whether to enable the primary/secondary origin server mode for failover. Values: `1` (enabled); `0` (disabled). It’s not available if the origin type is `DOMAIN`.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSessionPersist() Obtain Specifies whether to enable session persistence. Values: `0` (disable), `1` (enable)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSessionPersist(integer $SessionPersist) Set Specifies whether to enable session persistence. Values: `0` (disable), `1` (enable)
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProxyId() Obtain Connection ID of the listener. A null value is returned if the listener is associated with the connection group.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setProxyId(string $ProxyId) Set Connection ID of the listener. A null value is returned if the listener is associated with the connection group.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getGroupId() Obtain Connection group ID of the listener. A null value is returned if the listener is associated with a specific connection.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setGroupId(string $GroupId) Set Connection group ID of the listener. A null value is returned if the listener is associated with a specific connection.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class TCPListener extends AbstractModel
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
     * @var integer Origin server port, which is only valid for the connections of version 1.0.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RealServerPort;

    /**
     * @var string Type of the origin server bound to listeners
     */
    public $RealServerType;

    /**
     * @var string Listener protocol: TCP.
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
     * @var integer Response timeout of origin server health check (unit: seconds).
     */
    public $ConnectTimeout;

    /**
     * @var integer Time interval of origin server health check (unit: seconds).
     */
    public $DelayLoop;

    /**
     * @var integer Whether to enable the listener health check:
`0`: Disable
`1`: Enable
     */
    public $HealthCheck;

    /**
     * @var integer Status of the origin server bound to listeners:
`0`: Abnormal
`1`: Normal
     */
    public $BindStatus;

    /**
     * @var array Information of the origin server bound to listeners
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RealServerSet;

    /**
     * @var integer Listener creation time in the format of UNIX timestamp
     */
    public $CreateTime;

    /**
     * @var integer Describes how the listener obtains client IPs. `0`: TOA; `1`: Proxy Protocol.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClientIPMethod;

    /**
     * @var integer Healthy threshold. The number of consecutive successful health checks required before considering an origin server healthy. Value range: 1 - 10.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $HealthyThreshold;

    /**
     * @var integer Unhealthy threshold. The number of consecutive failed health checks required before considering an origin server unhealthy. Value range: 1 - 10.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UnhealthyThreshold;

    /**
     * @var integer Whether to enable the primary/secondary origin server mode for failover. Values: `1` (enabled); `0` (disabled). It’s not available if the origin type is `DOMAIN`.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FailoverSwitch;

    /**
     * @var integer Specifies whether to enable session persistence. Values: `0` (disable), `1` (enable)
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SessionPersist;

    /**
     * @var string Connection ID of the listener. A null value is returned if the listener is associated with the connection group.
Note: This field may return `null`, indicating that no valid value can be obtained.
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
     * @param integer $RealServerPort Origin server port, which is only valid for the connections of version 1.0.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RealServerType Type of the origin server bound to listeners
     * @param string $Protocol Listener protocol: TCP.
     * @param integer $ListenerStatus Listener status:
`0`: Running
`1`: Creating
`2`: Terminating
`3`: Adjusting origin server
`4`: Adjusting configuration
     * @param string $Scheduler The strategy used by the listener to access the origin server. Values: `rr` (round-robin), `wrr` (weighted round-robin), `lc` (the least-connections strategy), `lrtt` (the least-response-time strategy).
     * @param integer $ConnectTimeout Response timeout of origin server health check (unit: seconds).
     * @param integer $DelayLoop Time interval of origin server health check (unit: seconds).
     * @param integer $HealthCheck Whether to enable the listener health check:
`0`: Disable
`1`: Enable
     * @param integer $BindStatus Status of the origin server bound to listeners:
`0`: Abnormal
`1`: Normal
     * @param array $RealServerSet Information of the origin server bound to listeners
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime Listener creation time in the format of UNIX timestamp
     * @param integer $ClientIPMethod Describes how the listener obtains client IPs. `0`: TOA; `1`: Proxy Protocol.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $HealthyThreshold Healthy threshold. The number of consecutive successful health checks required before considering an origin server healthy. Value range: 1 - 10.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $UnhealthyThreshold Unhealthy threshold. The number of consecutive failed health checks required before considering an origin server unhealthy. Value range: 1 - 10.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $FailoverSwitch Whether to enable the primary/secondary origin server mode for failover. Values: `1` (enabled); `0` (disabled). It’s not available if the origin type is `DOMAIN`.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SessionPersist Specifies whether to enable session persistence. Values: `0` (disable), `1` (enable)
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProxyId Connection ID of the listener. A null value is returned if the listener is associated with the connection group.
Note: This field may return `null`, indicating that no valid value can be obtained.
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

        if (array_key_exists("ConnectTimeout",$param) and $param["ConnectTimeout"] !== null) {
            $this->ConnectTimeout = $param["ConnectTimeout"];
        }

        if (array_key_exists("DelayLoop",$param) and $param["DelayLoop"] !== null) {
            $this->DelayLoop = $param["DelayLoop"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = $param["HealthCheck"];
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

        if (array_key_exists("ClientIPMethod",$param) and $param["ClientIPMethod"] !== null) {
            $this->ClientIPMethod = $param["ClientIPMethod"];
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

        if (array_key_exists("SessionPersist",$param) and $param["SessionPersist"] !== null) {
            $this->SessionPersist = $param["SessionPersist"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
