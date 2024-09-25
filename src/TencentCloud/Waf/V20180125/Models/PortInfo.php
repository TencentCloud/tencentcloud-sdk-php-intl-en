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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Service port configuration
 *
 * @method integer getNginxServerId() Obtain Nginx Server ID
 * @method void setNginxServerId(integer $NginxServerId) Set Nginx Server ID
 * @method string getPort() Obtain Listening Port Configuration
 * @method void setPort(string $Port) Set Listening Port Configuration
 * @method string getProtocol() Obtain Protocol Corresponding to the Port
 * @method void setProtocol(string $Protocol) Set Protocol Corresponding to the Port
 * @method string getUpstreamPort() Obtain Origin-pull port
 * @method void setUpstreamPort(string $UpstreamPort) Set Origin-pull port
 * @method string getUpstreamProtocol() Obtain Origin-pull protocol
 * @method void setUpstreamProtocol(string $UpstreamProtocol) Set Origin-pull protocol
 */
class PortInfo extends AbstractModel
{
    /**
     * @var integer Nginx Server ID
     */
    public $NginxServerId;

    /**
     * @var string Listening Port Configuration
     */
    public $Port;

    /**
     * @var string Protocol Corresponding to the Port
     */
    public $Protocol;

    /**
     * @var string Origin-pull port
     */
    public $UpstreamPort;

    /**
     * @var string Origin-pull protocol
     */
    public $UpstreamProtocol;

    /**
     * @param integer $NginxServerId Nginx Server ID
     * @param string $Port Listening Port Configuration
     * @param string $Protocol Protocol Corresponding to the Port
     * @param string $UpstreamPort Origin-pull port
     * @param string $UpstreamProtocol Origin-pull protocol
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
        if (array_key_exists("NginxServerId",$param) and $param["NginxServerId"] !== null) {
            $this->NginxServerId = $param["NginxServerId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("UpstreamPort",$param) and $param["UpstreamPort"] !== null) {
            $this->UpstreamPort = $param["UpstreamPort"];
        }

        if (array_key_exists("UpstreamProtocol",$param) and $param["UpstreamProtocol"] !== null) {
            $this->UpstreamProtocol = $param["UpstreamProtocol"];
        }
    }
}
