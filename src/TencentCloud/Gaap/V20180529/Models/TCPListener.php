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
 * @method string getListenerId() 获取Listener ID
 * @method void setListenerId(string $ListenerId) 设置Listener ID
 * @method string getListenerName() 获取Listener name
 * @method void setListenerName(string $ListenerName) 设置Listener name
 * @method integer getPort() 获取Listener port
 * @method void setPort(integer $Port) 设置Listener port
 * @method integer getRealServerPort() 获取Origin server port, which is only valid for the connections of version 1.0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRealServerPort(integer $RealServerPort) 设置Origin server port, which is only valid for the connections of version 1.0.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRealServerType() 获取Type of the origin server bound to listeners
 * @method void setRealServerType(string $RealServerType) 设置Type of the origin server bound to listeners
 * @method string getProtocol() 获取Listener protocol: TCP.
 * @method void setProtocol(string $Protocol) 设置Listener protocol: TCP.
 * @method integer getListenerStatus() 获取Listener status:
0: running;
1: creating;
2: terminating;
3: adjusting origin server;
4: adjusting configuration.
 * @method void setListenerStatus(integer $ListenerStatus) 设置Listener status:
0: running;
1: creating;
2: terminating;
3: adjusting origin server;
4: adjusting configuration.
 * @method string getScheduler() 获取Origin server access policy of listeners:
rr: round robin;
wrr: weighted round robin;
lc: least connections.
 * @method void setScheduler(string $Scheduler) 设置Origin server access policy of listeners:
rr: round robin;
wrr: weighted round robin;
lc: least connections.
 * @method integer getConnectTimeout() 获取Response timeout of origin server health check (unit: seconds).
 * @method void setConnectTimeout(integer $ConnectTimeout) 设置Response timeout of origin server health check (unit: seconds).
 * @method integer getDelayLoop() 获取Time interval of origin server health check (unit: seconds).
 * @method void setDelayLoop(integer $DelayLoop) 设置Time interval of origin server health check (unit: seconds).
 * @method integer getHealthCheck() 获取Whether to enable the listener health check:
0: disable;
1: enable.
 * @method void setHealthCheck(integer $HealthCheck) 设置Whether to enable the listener health check:
0: disable;
1: enable.
 * @method integer getBindStatus() 获取Status of the origin server bound to listeners:
0: exception;
1: normal.
 * @method void setBindStatus(integer $BindStatus) 设置Status of the origin server bound to listeners:
0: exception;
1: normal.
 * @method array getRealServerSet() 获取Information of the origin server bound to listeners
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRealServerSet(array $RealServerSet) 设置Information of the origin server bound to listeners
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCreateTime() 获取Listener creation time; using UNIX timestamp.
 * @method void setCreateTime(integer $CreateTime) 设置Listener creation time; using UNIX timestamp.
 */

/**
 *TCP listener information
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
0: running;
1: creating;
2: terminating;
3: adjusting origin server;
4: adjusting configuration.
     */
    public $ListenerStatus;

    /**
     * @var string Origin server access policy of listeners:
rr: round robin;
wrr: weighted round robin;
lc: least connections.
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
0: disable;
1: enable.
     */
    public $HealthCheck;

    /**
     * @var integer Status of the origin server bound to listeners:
0: exception;
1: normal.
     */
    public $BindStatus;

    /**
     * @var array Information of the origin server bound to listeners
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RealServerSet;

    /**
     * @var integer Listener creation time; using UNIX timestamp.
     */
    public $CreateTime;
    /**
     * @param string $ListenerId Listener ID
     * @param string $ListenerName Listener name
     * @param integer $Port Listener port
     * @param integer $RealServerPort Origin server port, which is only valid for the connections of version 1.0.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RealServerType Type of the origin server bound to listeners
     * @param string $Protocol Listener protocol: TCP.
     * @param integer $ListenerStatus Listener status:
0: running;
1: creating;
2: terminating;
3: adjusting origin server;
4: adjusting configuration.
     * @param string $Scheduler Origin server access policy of listeners:
rr: round robin;
wrr: weighted round robin;
lc: least connections.
     * @param integer $ConnectTimeout Response timeout of origin server health check (unit: seconds).
     * @param integer $DelayLoop Time interval of origin server health check (unit: seconds).
     * @param integer $HealthCheck Whether to enable the listener health check:
0: disable;
1: enable.
     * @param integer $BindStatus Status of the origin server bound to listeners:
0: exception;
1: normal.
     * @param array $RealServerSet Information of the origin server bound to listeners
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $CreateTime Listener creation time; using UNIX timestamp.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
    }
}
