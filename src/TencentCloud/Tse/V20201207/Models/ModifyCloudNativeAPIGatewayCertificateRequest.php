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
 * ModifyCloudNativeAPIGatewayCertificate request structure.
 *
 * @method string getGatewayId() Obtain gateway ID
 * @method void setGatewayId(string $GatewayId) Set gateway ID
 * @method string getId() Obtain Certificate ID.
 * @method void setId(string $Id) Set Certificate ID.
 * @method string getName() Obtain Certificate name, will already be deprecated
 * @method void setName(string $Name) Set Certificate name, will already be deprecated
 * @method string getKey() Obtain Certificate private key. Required when CertSource is native.
 * @method void setKey(string $Key) Set Certificate private key. Required when CertSource is native.
 * @method string getCrt() Obtain Certificate in pem format. Required when CertSource is native.
 * @method void setCrt(string $Crt) Set Certificate in pem format. Required when CertSource is native.
 * @method array getBindDomains() Obtain Bound domain names will already be deprecated
 * @method void setBindDomains(array $BindDomains) Set Bound domain names will already be deprecated
 * @method string getCertId() Obtain ssl platform cert Id. Required when CertSource is ssl.
 * @method void setCertId(string $CertId) Set ssl platform cert Id. Required when CertSource is ssl.
 * @method string getCertSource() Obtain Certificate source
-ssl (Platform Cert), default value
-native (kong custom certificate) 

 * @method void setCertSource(string $CertSource) Set Certificate source
-ssl (Platform Cert), default value
-native (kong custom certificate) 
 */
class ModifyCloudNativeAPIGatewayCertificateRequest extends AbstractModel
{
    /**
     * @var string gateway ID
     */
    public $GatewayId;

    /**
     * @var string Certificate ID.
     */
    public $Id;

    /**
     * @var string Certificate name, will already be deprecated
     * @deprecated
     */
    public $Name;

    /**
     * @var string Certificate private key. Required when CertSource is native.
     */
    public $Key;

    /**
     * @var string Certificate in pem format. Required when CertSource is native.
     */
    public $Crt;

    /**
     * @var array Bound domain names will already be deprecated
     * @deprecated
     */
    public $BindDomains;

    /**
     * @var string ssl platform cert Id. Required when CertSource is ssl.
     */
    public $CertId;

    /**
     * @var string Certificate source
-ssl (Platform Cert), default value
-native (kong custom certificate) 

     */
    public $CertSource;

    /**
     * @param string $GatewayId gateway ID
     * @param string $Id Certificate ID.
     * @param string $Name Certificate name, will already be deprecated
     * @param string $Key Certificate private key. Required when CertSource is native.
     * @param string $Crt Certificate in pem format. Required when CertSource is native.
     * @param array $BindDomains Bound domain names will already be deprecated
     * @param string $CertId ssl platform cert Id. Required when CertSource is ssl.
     * @param string $CertSource Certificate source
-ssl (Platform Cert), default value
-native (kong custom certificate) 
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
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

        if (array_key_exists("BindDomains",$param) and $param["BindDomains"] !== null) {
            $this->BindDomains = $param["BindDomains"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CertSource",$param) and $param["CertSource"] !== null) {
            $this->CertSource = $param["CertSource"];
        }
    }
}
