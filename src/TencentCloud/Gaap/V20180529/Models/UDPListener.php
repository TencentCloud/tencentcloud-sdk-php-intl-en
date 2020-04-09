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
0: running;
1: creating;
2: terminating;
3: adjusting origin server;
4: adjusting configuration.
 * @method void setListenerStatus(integer $ListenerStatus) Set Listener status:
0: running;
1: creating;
2: terminating;
3: adjusting origin server;
4: adjusting configuration.
 * @method string getScheduler() Obtain Origin server access policy of listeners
 * @method void setScheduler(string $Scheduler) Set Origin server access policy of listeners
 * @method integer getBindStatus() Obtain Origin server binding status of listeners. 0: normal; 1: IP exception; 2: domain name resolution exception.
 * @method void setBindStatus(integer $BindStatus) Set Origin server binding status of listeners. 0: normal; 1: IP exception; 2: domain name resolution exception.
 * @method array getRealServerSet() Obtain Information of the origin server bound to listeners
 * @method void setRealServerSet(array $RealServerSet) Set Information of the origin server bound to listeners
 * @method integer getCreateTime() Obtain Listener creation time; using UNIX timestamp.
 * @method void setCreateTime(integer $CreateTime) Set Listener creation time; using UNIX timestamp.
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
0: running;
1: creating;
2: terminating;
3: adjusting origin server;
4: adjusting configuration.
     */
    public $ListenerStatus;

    /**
     * @var string Origin server access policy of listeners
     */
    public $Scheduler;

    /**
     * @var integer Origin server binding status of listeners. 0: normal; 1: IP exception; 2: domain name resolution exception.
     */
    public $BindStatus;

    /**
     * @var array Information of the origin server bound to listeners
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
     * @param integer $RealServerPort Origin server port, which is only valid for the connections or connection groups of version 1.0.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RealServerType Type of the origin server bound to listeners
     * @param string $Protocol Listener protocol: UDP.
     * @param integer $ListenerStatus Listener status:
0: running;
1: creating;
2: terminating;
3: adjusting origin server;
4: adjusting configuration.
     * @param string $Scheduler Origin server access policy of listeners
     * @param integer $BindStatus Origin server binding status of listeners. 0: normal; 1: IP exception; 2: domain name resolution exception.
     * @param array $RealServerSet Information of the origin server bound to listeners
     * @param integer $CreateTime Listener creation time; using UNIX timestamp.
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
    }
}
