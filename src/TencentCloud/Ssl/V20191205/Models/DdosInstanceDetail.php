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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of a DDOS instance
 *
 * @method string getDomain() Obtain The domain.
 * @method void setDomain(string $Domain) Set The domain.
 * @method string getInstanceId() Obtain The instance ID.
 * @method void setInstanceId(string $InstanceId) Set The instance ID.
 * @method string getProtocol() Obtain The protocol type.
 * @method void setProtocol(string $Protocol) Set The protocol type.
 * @method string getCertId() Obtain Certificate id.
 * @method void setCertId(string $CertId) Set Certificate id.
 * @method string getVirtualPort() Obtain The forwarding port.
 * @method void setVirtualPort(string $VirtualPort) Set The forwarding port.
 */
class DdosInstanceDetail extends AbstractModel
{
    /**
     * @var string The domain.
     */
    public $Domain;

    /**
     * @var string The instance ID.
     */
    public $InstanceId;

    /**
     * @var string The protocol type.
     */
    public $Protocol;

    /**
     * @var string Certificate id.
     */
    public $CertId;

    /**
     * @var string The forwarding port.
     */
    public $VirtualPort;

    /**
     * @param string $Domain The domain.
     * @param string $InstanceId The instance ID.
     * @param string $Protocol The protocol type.
     * @param string $CertId Certificate id.
     * @param string $VirtualPort The forwarding port.
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("VirtualPort",$param) and $param["VirtualPort"] !== null) {
            $this->VirtualPort = $param["VirtualPort"];
        }
    }
}
