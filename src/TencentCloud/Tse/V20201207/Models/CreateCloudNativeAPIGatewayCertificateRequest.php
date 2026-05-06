<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloudNativeAPIGatewayCertificate request structure.
 *
 * @method string getGatewayId() Obtain Gateway ID
 * @method void setGatewayId(string $GatewayId) Set Gateway ID
 * @method array getBindDomains() Obtain Bound domain name
 * @method void setBindDomains(array $BindDomains) Set Bound domain name
 * @method string getCertId() Obtain ssl platform cert Id
 * @method void setCertId(string $CertId) Set ssl platform cert Id
 * @method string getName() Obtain Certificate Name
 * @method void setName(string $Name) Set Certificate Name
 * @method string getKey() Obtain Certificate Private Key
 * @method void setKey(string $Key) Set Certificate Private Key
 * @method string getCrt() Obtain Certificate in pem format
 * @method void setCrt(string $Crt) Set Certificate in pem format
 */
class CreateCloudNativeAPIGatewayCertificateRequest extends AbstractModel
{
    /**
     * @var string Gateway ID
     */
    public $GatewayId;

    /**
     * @var array Bound domain name
     */
    public $BindDomains;

    /**
     * @var string ssl platform cert Id
     */
    public $CertId;

    /**
     * @var string Certificate Name
     */
    public $Name;

    /**
     * @var string Certificate Private Key
     * @deprecated
     */
    public $Key;

    /**
     * @var string Certificate in pem format
     * @deprecated
     */
    public $Crt;

    /**
     * @param string $GatewayId Gateway ID
     * @param array $BindDomains Bound domain name
     * @param string $CertId ssl platform cert Id
     * @param string $Name Certificate Name
     * @param string $Key Certificate Private Key
     * @param string $Crt Certificate in pem format
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("BindDomains",$param) and $param["BindDomains"] !== null) {
            $this->BindDomains = $param["BindDomains"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Crt",$param) and $param["Crt"] !== null) {
            $this->Crt = $param["Crt"];
        }
    }
}
