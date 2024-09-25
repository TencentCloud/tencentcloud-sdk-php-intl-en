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
 * WAF Sparta - Edit port structure in the protection domain
 *
 * @method integer getNginxServerId() Obtain nginx Id
 * @method void setNginxServerId(integer $NginxServerId) Set nginx Id
 * @method string getPort() Obtain Port
 * @method void setPort(string $Port) Set Port
 * @method string getProtocol() Obtain Protocol
 * @method void setProtocol(string $Protocol) Set Protocol
 * @method string getUpstreamPort() Obtain Backend port
 * @method void setUpstreamPort(string $UpstreamPort) Set Backend port
 * @method string getUpstreamProtocol() Obtain Backend protocol
 * @method void setUpstreamProtocol(string $UpstreamProtocol) Set Backend protocol
 */
class SpartaProtectionPort extends AbstractModel
{
    /**
     * @var integer nginx Id
     */
    public $NginxServerId;

    /**
     * @var string Port
     */
    public $Port;

    /**
     * @var string Protocol
     */
    public $Protocol;

    /**
     * @var string Backend port
     */
    public $UpstreamPort;

    /**
     * @var string Backend protocol
     */
    public $UpstreamProtocol;

    /**
     * @param integer $NginxServerId nginx Id
     * @param string $Port Port
     * @param string $Protocol Protocol
     * @param string $UpstreamPort Backend port
     * @param string $UpstreamProtocol Backend protocol
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
