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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Real server health status of a classic CLB
 *
 * @method string getIP() Obtain Private IP of a real server
 * @method void setIP(string $IP) Set Private IP of a real server
 * @method integer getPort() Obtain Real server port
 * @method void setPort(integer $Port) Set Real server port
 * @method integer getListenerPort() Obtain CLB listener port
 * @method void setListenerPort(integer $ListenerPort) Set CLB listener port
 * @method string getProtocol() Obtain Forwarding protocol
 * @method void setProtocol(string $Protocol) Set Forwarding protocol
 * @method integer getHealthStatus() Obtain Health check result. Value range: 1 (healthy), 0 (unhealthy)
 * @method void setHealthStatus(integer $HealthStatus) Set Health check result. Value range: 1 (healthy), 0 (unhealthy)
 */
class ClassicalHealth extends AbstractModel
{
    /**
     * @var string Private IP of a real server
     */
    public $IP;

    /**
     * @var integer Real server port
     */
    public $Port;

    /**
     * @var integer CLB listener port
     */
    public $ListenerPort;

    /**
     * @var string Forwarding protocol
     */
    public $Protocol;

    /**
     * @var integer Health check result. Value range: 1 (healthy), 0 (unhealthy)
     */
    public $HealthStatus;

    /**
     * @param string $IP Private IP of a real server
     * @param integer $Port Real server port
     * @param integer $ListenerPort CLB listener port
     * @param string $Protocol Forwarding protocol
     * @param integer $HealthStatus Health check result. Value range: 1 (healthy), 0 (unhealthy)
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
        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("ListenerPort",$param) and $param["ListenerPort"] !== null) {
            $this->ListenerPort = $param["ListenerPort"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = $param["HealthStatus"];
        }
    }
}
