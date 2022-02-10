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
 * CreateHTTPSListener request structure.
 *
 * @method string getListenerName() Obtain Listener name
 * @method void setListenerName(string $ListenerName) Set Listener name
 * @method integer getPort() Obtain Listener port, which is based on the listeners of same transport layer protocol (TCP or UDP). The port must be unique.
 * @method void setPort(integer $Port) Set Listener port, which is based on the listeners of same transport layer protocol (TCP or UDP). The port must be unique.
 * @method string getCertificateId() Obtain Server certificate ID
 * @method void setCertificateId(string $CertificateId) Set Server certificate ID
 * @method string getForwardProtocol() Obtain Protocol types of the forwarding from acceleration connection to origin server: HTTP | HTTPS
 * @method void setForwardProtocol(string $ForwardProtocol) Set Protocol types of the forwarding from acceleration connection to origin server: HTTP | HTTPS
 * @method string getProxyId() Obtain Connection ID, which cannot be set together with `GroupId` at the same time. A listener will be created for the corresponding connection.
 * @method void setProxyId(string $ProxyId) Set Connection ID, which cannot be set together with `GroupId` at the same time. A listener will be created for the corresponding connection.
 * @method integer getAuthType() Obtain Authentication type, where:
0: one-way authentication;
1: mutual authentication.
The one-way authentication is used by default.
 * @method void setAuthType(integer $AuthType) Set Authentication type, where:
0: one-way authentication;
1: mutual authentication.
The one-way authentication is used by default.
 * @method string getClientCertificateId() Obtain Client CA certificate ID, which is required only when the mutual authentication is adopted.
 * @method void setClientCertificateId(string $ClientCertificateId) Set Client CA certificate ID, which is required only when the mutual authentication is adopted.
 * @method array getPolyClientCertificateIds() Obtain IDs of multiple new client CA certificates. This field or the `ClientCertificateId` field is required for mutual authentication only.
 * @method void setPolyClientCertificateIds(array $PolyClientCertificateIds) Set IDs of multiple new client CA certificates. This field or the `ClientCertificateId` field is required for mutual authentication only.
 * @method string getGroupId() Obtain Connection group ID, which cannot be set together with `ProxyId` at the same time. A listener will be created for the corresponding connection group.
 * @method void setGroupId(string $GroupId) Set Connection group ID, which cannot be set together with `ProxyId` at the same time. A listener will be created for the corresponding connection group.
 * @method integer getHttp3Supported() Obtain Specifies whether to enable HTTP3. Valid values:
`0`: disable HTTP3;
`1`: enable HTTP3.
Note: If HTTP3 is enabled for a connection, the listener will use the port that is originally accessed to UDP, and a UDP listener with the same port cannot be created.
After the connection is created, you cannot change your HTTP3 setting.
 * @method void setHttp3Supported(integer $Http3Supported) Set Specifies whether to enable HTTP3. Valid values:
`0`: disable HTTP3;
`1`: enable HTTP3.
Note: If HTTP3 is enabled for a connection, the listener will use the port that is originally accessed to UDP, and a UDP listener with the same port cannot be created.
After the connection is created, you cannot change your HTTP3 setting.
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
     * @var string Connection ID, which cannot be set together with `GroupId` at the same time. A listener will be created for the corresponding connection.
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
     * @var string Connection group ID, which cannot be set together with `ProxyId` at the same time. A listener will be created for the corresponding connection group.
     */
    public $GroupId;

    /**
     * @var integer Specifies whether to enable HTTP3. Valid values:
`0`: disable HTTP3;
`1`: enable HTTP3.
Note: If HTTP3 is enabled for a connection, the listener will use the port that is originally accessed to UDP, and a UDP listener with the same port cannot be created.
After the connection is created, you cannot change your HTTP3 setting.
     */
    public $Http3Supported;

    /**
     * @param string $ListenerName Listener name
     * @param integer $Port Listener port, which is based on the listeners of same transport layer protocol (TCP or UDP). The port must be unique.
     * @param string $CertificateId Server certificate ID
     * @param string $ForwardProtocol Protocol types of the forwarding from acceleration connection to origin server: HTTP | HTTPS
     * @param string $ProxyId Connection ID, which cannot be set together with `GroupId` at the same time. A listener will be created for the corresponding connection.
     * @param integer $AuthType Authentication type, where:
0: one-way authentication;
1: mutual authentication.
The one-way authentication is used by default.
     * @param string $ClientCertificateId Client CA certificate ID, which is required only when the mutual authentication is adopted.
     * @param array $PolyClientCertificateIds IDs of multiple new client CA certificates. This field or the `ClientCertificateId` field is required for mutual authentication only.
     * @param string $GroupId Connection group ID, which cannot be set together with `ProxyId` at the same time. A listener will be created for the corresponding connection group.
     * @param integer $Http3Supported Specifies whether to enable HTTP3. Valid values:
`0`: disable HTTP3;
`1`: enable HTTP3.
Note: If HTTP3 is enabled for a connection, the listener will use the port that is originally accessed to UDP, and a UDP listener with the same port cannot be created.
After the connection is created, you cannot change your HTTP3 setting.
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Http3Supported",$param) and $param["Http3Supported"] !== null) {
            $this->Http3Supported = $param["Http3Supported"];
        }
    }
}
