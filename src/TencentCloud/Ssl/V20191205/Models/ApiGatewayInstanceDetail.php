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
 * Details of an APIGATEWAY instance
 *
 * @method string getServiceId() Obtain The instance ID.
 * @method void setServiceId(string $ServiceId) Set The instance ID.
 * @method string getServiceName() Obtain The instance name.
 * @method void setServiceName(string $ServiceName) Set The instance name.
 * @method string getDomain() Obtain The domain.
 * @method void setDomain(string $Domain) Set The domain.
 * @method string getCertId() Obtain Certificate id.
 * @method void setCertId(string $CertId) Set Certificate id.
 * @method string getProtocol() Obtain The protocol.
 * @method void setProtocol(string $Protocol) Set The protocol.
 */
class ApiGatewayInstanceDetail extends AbstractModel
{
    /**
     * @var string The instance ID.
     */
    public $ServiceId;

    /**
     * @var string The instance name.
     */
    public $ServiceName;

    /**
     * @var string The domain.
     */
    public $Domain;

    /**
     * @var string Certificate id.
     */
    public $CertId;

    /**
     * @var string The protocol.
     */
    public $Protocol;

    /**
     * @param string $ServiceId The instance ID.
     * @param string $ServiceName The instance name.
     * @param string $Domain The domain.
     * @param string $CertId Certificate id.
     * @param string $Protocol The protocol.
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }
    }
}
