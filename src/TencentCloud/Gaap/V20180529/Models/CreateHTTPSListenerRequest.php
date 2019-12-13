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
 * @method string getListenerName() 获取Listener name
 * @method void setListenerName(string $ListenerName) 设置Listener name
 * @method integer getPort() 获取Listener port, which is based on the listeners of same transport layer protocol (TCP or UDP). The port must be unique.
 * @method void setPort(integer $Port) 设置Listener port, which is based on the listeners of same transport layer protocol (TCP or UDP). The port must be unique.
 * @method string getCertificateId() 获取Server certificate ID
 * @method void setCertificateId(string $CertificateId) 设置Server certificate ID
 * @method string getForwardProtocol() 获取Protocol types of the forwarding from acceleration connection to origin server: HTTP | HTTPS
 * @method void setForwardProtocol(string $ForwardProtocol) 设置Protocol types of the forwarding from acceleration connection to origin server: HTTP | HTTPS
 * @method string getProxyId() 获取Connection ID
 * @method void setProxyId(string $ProxyId) 设置Connection ID
 * @method integer getAuthType() 获取Authentication type, where:
0: one-way authentication;
1: mutual authentication.
The one-way authentication is used by default.
 * @method void setAuthType(integer $AuthType) 设置Authentication type, where:
0: one-way authentication;
1: mutual authentication.
The one-way authentication is used by default.
 * @method string getClientCertificateId() 获取Client CA certificate ID, which is required only when the mutual authentication is adopted.
 * @method void setClientCertificateId(string $ClientCertificateId) 设置Client CA certificate ID, which is required only when the mutual authentication is adopted.
 * @method array getPolyClientCertificateIds() 获取IDs of multiple new client CA certificates. This field or the `ClientCertificateId` field is required for mutual authentication only.
 * @method void setPolyClientCertificateIds(array $PolyClientCertificateIds) 设置IDs of multiple new client CA certificates. This field or the `ClientCertificateId` field is required for mutual authentication only.
 */

/**
 *CreateHTTPSListener request structure.
 */
class CreateHTTPSListenerRequest extends AbstractModel
{
    /**
     * @var string Listener name
     */
    public $ListenerName;

    /**
     * @var integer Listener port, which is based on the listeners of same transport layer protocol (TCP or UDP). The port must be unique.
     */
    public $Port;

    /**
     * @var string Server certificate ID
     */
    public $CertificateId;

    /**
     * @var string Protocol types of the forwarding from acceleration connection to origin server: HTTP | HTTPS
     */
    public $ForwardProtocol;

    /**
     * @var string Connection ID
     */
    public $ProxyId;

    /**
     * @var integer Authentication type, where:
0: one-way authentication;
1: mutual authentication.
The one-way authentication is used by default.
     */
    public $AuthType;

    /**
     * @var string Client CA certificate ID, which is required only when the mutual authentication is adopted.
     */
    public $ClientCertificateId;

    /**
     * @var array IDs of multiple new client CA certificates. This field or the `ClientCertificateId` field is required for mutual authentication only.
     */
    public $PolyClientCertificateIds;
    /**
     * @param string $ListenerName Listener name
     * @param integer $Port Listener port, which is based on the listeners of same transport layer protocol (TCP or UDP). The port must be unique.
     * @param string $CertificateId Server certificate ID
     * @param string $ForwardProtocol Protocol types of the forwarding from acceleration connection to origin server: HTTP | HTTPS
     * @param string $ProxyId Connection ID
     * @param integer $AuthType Authentication type, where:
0: one-way authentication;
1: mutual authentication.
The one-way authentication is used by default.
     * @param string $ClientCertificateId Client CA certificate ID, which is required only when the mutual authentication is adopted.
     * @param array $PolyClientCertificateIds IDs of multiple new client CA certificates. This field or the `ClientCertificateId` field is required for mutual authentication only.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("ForwardProtocol",$param) and $param["ForwardProtocol"] !== null) {
            $this->ForwardProtocol = $param["ForwardProtocol"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("ClientCertificateId",$param) and $param["ClientCertificateId"] !== null) {
            $this->ClientCertificateId = $param["ClientCertificateId"];
        }

        if (array_key_exists("PolyClientCertificateIds",$param) and $param["PolyClientCertificateIds"] !== null) {
            $this->PolyClientCertificateIds = $param["PolyClientCertificateIds"];
        }
    }
}
