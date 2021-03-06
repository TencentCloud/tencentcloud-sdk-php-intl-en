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
 * @method string getScheduler() Obtain Origin server scheduling policy of listeners, which supports round robin (rr), weighted round robin (wrr), and least connections (lc).
 * @method void setScheduler(string $Scheduler) Set Origin server scheduling policy of listeners, which supports round robin (rr), weighted round robin (wrr), and least connections (lc).
 * @method string getRealServerType() Obtain Origin server type of listeners, which supports IP or DOMAIN type.
 * @method void setRealServerType(string $RealServerType) Set Origin server type of listeners, which supports IP or DOMAIN type.
 * @method string getProxyId() Obtain Connection ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
 * @method void setProxyId(string $ProxyId) Set Connection ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
 * @method string getGroupId() Obtain Connection group ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
 * @method void setGroupId(string $GroupId) Set Connection group ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
 * @method array getRealServerPorts() Obtain List of origin server ports, which only supports the listeners of version 1.0 and connection group.
 * @method void setRealServerPorts(array $RealServerPorts) Set List of origin server ports, which only supports the listeners of version 1.0 and connection group.
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
     * @var string Origin server scheduling policy of listeners, which supports round robin (rr), weighted round robin (wrr), and least connections (lc).
     */
    public $Scheduler;

    /**
     * @var string Origin server type of listeners, which supports IP or DOMAIN type.
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
     * @param string $ListenerName Listener name
     * @param array $Ports List of listener ports
     * @param string $Scheduler Origin server scheduling policy of listeners, which supports round robin (rr), weighted round robin (wrr), and least connections (lc).
     * @param string $RealServerType Origin server type of listeners, which supports IP or DOMAIN type.
     * @param string $ProxyId Connection ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
     * @param string $GroupId Connection group ID; Either `ProxyId` or `GroupId` must be set, but you cannot set both.
     * @param array $RealServerPorts List of origin server ports, which only supports the listeners of version 1.0 and connection group.
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
    }
}
