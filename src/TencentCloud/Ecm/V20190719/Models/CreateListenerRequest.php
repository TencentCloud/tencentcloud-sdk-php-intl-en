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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateListener request structure.
 *
 * @method string getLoadBalancerId() Obtain CLB instance ID
 * @method void setLoadBalancerId(string $LoadBalancerId) Set CLB instance ID
 * @method array getPorts() Obtain Specifies for which ports to create listeners. Each port corresponds to a new listener
 * @method void setPorts(array $Ports) Set Specifies for which ports to create listeners. Each port corresponds to a new listener
 * @method string getProtocol() Obtain Listener protocol. Valid values: TCP, UDP
 * @method void setProtocol(string $Protocol) Set Listener protocol. Valid values: TCP, UDP
 * @method array getListenerNames() Obtain List of names of the listeners to be created. The array of names and array of ports are in one-to-one correspondence. If you do not want to name them now, you do not need to provide this parameter.
 * @method void setListenerNames(array $ListenerNames) Set List of names of the listeners to be created. The array of names and array of ports are in one-to-one correspondence. If you do not want to name them now, you do not need to provide this parameter.
 * @method HealthCheck getHealthCheck() Obtain Health check parameters
 * @method void setHealthCheck(HealthCheck $HealthCheck) Set Health check parameters
 * @method integer getSessionExpireTime() Obtain Session persistence time in seconds. Value range: 30–3600. The default value is 0, indicating that session persistence is not enabled. This parameter is applicable only to TCP/UDP listeners.
 * @method void setSessionExpireTime(integer $SessionExpireTime) Set Session persistence time in seconds. Value range: 30–3600. The default value is 0, indicating that session persistence is not enabled. This parameter is applicable only to TCP/UDP listeners.
 * @method string getScheduler() Obtain Forwarding method of the listener. Valid values: WRR, LEAST_CONN.
They represent weighted round robin and least connections, respectively. Default value: WRR.
 * @method void setScheduler(string $Scheduler) Set Forwarding method of the listener. Valid values: WRR, LEAST_CONN.
They represent weighted round robin and least connections, respectively. Default value: WRR.
 * @method string getSessionType() Obtain Session persistence type. Valid values: NORMAL: the default session persistence type; QUIC_CID: session persistence by QUIC connection ID. The `QUIC_CID` value can only be configured in UDP listeners. If this field is not specified, the default session persistence type will be used.
 * @method void setSessionType(string $SessionType) Set Session persistence type. Valid values: NORMAL: the default session persistence type; QUIC_CID: session persistence by QUIC connection ID. The `QUIC_CID` value can only be configured in UDP listeners. If this field is not specified, the default session persistence type will be used.
 * @method array getEndPorts() Obtain End ports of port ranges, which must be the same as `Ports` in length.
 * @method void setEndPorts(array $EndPorts) Set End ports of port ranges, which must be the same as `Ports` in length.
 */
class CreateListenerRequest extends AbstractModel
{
    /**
     * @var string CLB instance ID
     */
    public $LoadBalancerId;

    /**
     * @var array Specifies for which ports to create listeners. Each port corresponds to a new listener
     */
    public $Ports;

    /**
     * @var string Listener protocol. Valid values: TCP, UDP
     */
    public $Protocol;

    /**
     * @var array List of names of the listeners to be created. The array of names and array of ports are in one-to-one correspondence. If you do not want to name them now, you do not need to provide this parameter.
     */
    public $ListenerNames;

    /**
     * @var HealthCheck Health check parameters
     */
    public $HealthCheck;

    /**
     * @var integer Session persistence time in seconds. Value range: 30–3600. The default value is 0, indicating that session persistence is not enabled. This parameter is applicable only to TCP/UDP listeners.
     */
    public $SessionExpireTime;

    /**
     * @var string Forwarding method of the listener. Valid values: WRR, LEAST_CONN.
They represent weighted round robin and least connections, respectively. Default value: WRR.
     */
    public $Scheduler;

    /**
     * @var string Session persistence type. Valid values: NORMAL: the default session persistence type; QUIC_CID: session persistence by QUIC connection ID. The `QUIC_CID` value can only be configured in UDP listeners. If this field is not specified, the default session persistence type will be used.
     */
    public $SessionType;

    /**
     * @var array End ports of port ranges, which must be the same as `Ports` in length.
     */
    public $EndPorts;

    /**
     * @param string $LoadBalancerId CLB instance ID
     * @param array $Ports Specifies for which ports to create listeners. Each port corresponds to a new listener
     * @param string $Protocol Listener protocol. Valid values: TCP, UDP
     * @param array $ListenerNames List of names of the listeners to be created. The array of names and array of ports are in one-to-one correspondence. If you do not want to name them now, you do not need to provide this parameter.
     * @param HealthCheck $HealthCheck Health check parameters
     * @param integer $SessionExpireTime Session persistence time in seconds. Value range: 30–3600. The default value is 0, indicating that session persistence is not enabled. This parameter is applicable only to TCP/UDP listeners.
     * @param string $Scheduler Forwarding method of the listener. Valid values: WRR, LEAST_CONN.
They represent weighted round robin and least connections, respectively. Default value: WRR.
     * @param string $SessionType Session persistence type. Valid values: NORMAL: the default session persistence type; QUIC_CID: session persistence by QUIC connection ID. The `QUIC_CID` value can only be configured in UDP listeners. If this field is not specified, the default session persistence type will be used.
     * @param array $EndPorts End ports of port ranges, which must be the same as `Ports` in length.
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("Ports",$param) and $param["Ports"] !== null) {
            $this->Ports = $param["Ports"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ListenerNames",$param) and $param["ListenerNames"] !== null) {
            $this->ListenerNames = $param["ListenerNames"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new HealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("SessionExpireTime",$param) and $param["SessionExpireTime"] !== null) {
            $this->SessionExpireTime = $param["SessionExpireTime"];
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }

        if (array_key_exists("SessionType",$param) and $param["SessionType"] !== null) {
            $this->SessionType = $param["SessionType"];
        }

        if (array_key_exists("EndPorts",$param) and $param["EndPorts"] !== null) {
            $this->EndPorts = $param["EndPorts"];
        }
    }
}
