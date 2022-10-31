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
 * HTTPS listener information
 *
 * @method string getListenerId() Obtain Listener ID
 * @method void setListenerId(string $ListenerId) Set Listener ID
 * @method string getListenerName() Obtain Listener name
 * @method void setListenerName(string $ListenerName) Set Listener name
 * @method integer getPort() Obtain Listener port
 * @method void setPort(integer $Port) Set Listener port
 * @method string getProtocol() Obtain Listener protocol. Valid values: HTTP, HTTPS. The value `HTTPS` is used for this structure
 * @method void setProtocol(string $Protocol) Set Listener protocol. Valid values: HTTP, HTTPS. The value `HTTPS` is used for this structure
 * @method integer getListenerStatus() Obtain Listener status:
0: running;
1: creating;
2: terminating;
3: adjusting origin server;
4: modifying configuration.
 * @method void setListenerStatus(integer $ListenerStatus) Set Listener status:
0: running;
1: creating;
2: terminating;
3: adjusting origin server;
4: modifying configuration.
 * @method string getCertificateId() Obtain Server SSL certificate ID of the listener
 * @method void setCertificateId(string $CertificateId) Set Server SSL certificate ID of the listener
 * @method string getForwardProtocol() Obtain Protocol used in the forwarding from connections to origin servers
 * @method void setForwardProtocol(string $ForwardProtocol) Set Protocol used in the forwarding from connections to origin servers
 * @method integer getCreateTime() Obtain Listener creation time; using UNIX timestamp.
 * @method void setCreateTime(integer $CreateTime) Set Listener creation time; using UNIX timestamp.
 * @method string getCertificateAlias() Obtain Server SSL certificate alias
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCertificateAlias(string $CertificateAlias) Set Server SSL certificate alias
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getClientCertificateId() Obtain Client CA certificate ID of the listener
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClientCertificateId(string $ClientCertificateId) Set Client CA certificate ID of the listener
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAuthType() Obtain Listener authentication mode. Valid values:
0: one-way authentication;
1: mutual authentication.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAuthType(integer $AuthType) Set Listener authentication mode. Valid values:
0: one-way authentication;
1: mutual authentication.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getClientCertificateAlias() Obtain Client CA certificate alias
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setClientCertificateAlias(string $ClientCertificateAlias) Set Client CA certificate alias
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPolyClientCertificateAliasInfo() Obtain Alias information of multiple client CA certificates.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPolyClientCertificateAliasInfo(array $PolyClientCertificateAliasInfo) Set Alias information of multiple client CA certificates.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getHttp3Supported() Obtain Whether to support HTTP3. Values:
`0`: Do not support HTTP3 access;
`1`: Support HTTP3 access.
If HTTP3 is supported for a connection, the listener will use the port that is originally accessed to UDP, and a UDP listener with the same port cannot be created.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHttp3Supported(integer $Http3Supported) Set Whether to support HTTP3. Values:
`0`: Do not support HTTP3 access;
`1`: Support HTTP3 access.
If HTTP3 is supported for a connection, the listener will use the port that is originally accessed to UDP, and a UDP listener with the same port cannot be created.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getProxyId() Obtain Connection ID of the listener. A null value is returned if the listener is associated with the connection group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProxyId(string $ProxyId) Set Connection ID of the listener. A null value is returned if the listener is associated with the connection group.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getGroupId() Obtain Connection group ID of the listener. A null value is returned if the listener is associated with a specific connection.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setGroupId(string $GroupId) Set Connection group ID of the listener. A null value is returned if the listener is associated with a specific connection.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class HTTPSListener extends AbstractModel
{
    /**
     * @var string Listener ID
     */
    public $ListenerId;

    /**
     * @var string Listener name
     */
    public $ListenerName;

    /**
     * @var integer Listener port
     */
    public $Port;

    /**
     * @var string Listener protocol. Valid values: HTTP, HTTPS. The value `HTTPS` is used for this structure
     */
    public $Protocol;

    /**
     * @var integer Listener status:
0: running;
1: creating;
2: terminating;
3: adjusting origin server;
4: modifying configuration.
     */
    public $ListenerStatus;

    /**
     * @var string Server SSL certificate ID of the listener
     */
    public $CertificateId;

    /**
     * @var string Protocol used in the forwarding from connections to origin servers
     */
    public $ForwardProtocol;

    /**
     * @var integer Listener creation time; using UNIX timestamp.
     */
    public $CreateTime;

    /**
     * @var string Server SSL certificate alias
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CertificateAlias;

    /**
     * @var string Client CA certificate ID of the listener
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClientCertificateId;

    /**
     * @var integer Listener authentication mode. Valid values:
0: one-way authentication;
1: mutual authentication.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $AuthType;

    /**
     * @var string Client CA certificate alias
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ClientCertificateAlias;

    /**
     * @var array Alias information of multiple client CA certificates.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PolyClientCertificateAliasInfo;

    /**
     * @var integer Whether to support HTTP3. Values:
`0`: Do not support HTTP3 access;
`1`: Support HTTP3 access.
If HTTP3 is supported for a connection, the listener will use the port that is originally accessed to UDP, and a UDP listener with the same port cannot be created.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Http3Supported;

    /**
     * @var string Connection ID of the listener. A null value is returned if the listener is associated with the connection group.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProxyId;

    /**
     * @var string Connection group ID of the listener. A null value is returned if the listener is associated with a specific connection.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $GroupId;

    /**
     * @param string $ListenerId Listener ID
     * @param string $ListenerName Listener name
     * @param integer $Port Listener port
     * @param string $Protocol Listener protocol. Valid values: HTTP, HTTPS. The value `HTTPS` is used for this structure
     * @param integer $ListenerStatus Listener status:
0: running;
1: creating;
2: terminating;
3: adjusting origin server;
4: modifying configuration.
     * @param string $CertificateId Server SSL certificate ID of the listener
     * @param string $ForwardProtocol Protocol used in the forwarding from connections to origin servers
     * @param integer $CreateTime Listener creation time; using UNIX timestamp.
     * @param string $CertificateAlias Server SSL certificate alias
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ClientCertificateId Client CA certificate ID of the listener
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AuthType Listener authentication mode. Valid values:
0: one-way authentication;
1: mutual authentication.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ClientCertificateAlias Client CA certificate alias
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $PolyClientCertificateAliasInfo Alias information of multiple client CA certificates.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Http3Supported Whether to support HTTP3. Values:
`0`: Do not support HTTP3 access;
`1`: Support HTTP3 access.
If HTTP3 is supported for a connection, the listener will use the port that is originally accessed to UDP, and a UDP listener with the same port cannot be created.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ProxyId Connection ID of the listener. A null value is returned if the listener is associated with the connection group.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $GroupId Connection group ID of the listener. A null value is returned if the listener is associated with a specific connection.
Note: This field may return `null`, indicating that no valid value can be obtained.
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ListenerStatus",$param) and $param["ListenerStatus"] !== null) {
            $this->ListenerStatus = $param["ListenerStatus"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("ForwardProtocol",$param) and $param["ForwardProtocol"] !== null) {
            $this->ForwardProtocol = $param["ForwardProtocol"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("CertificateAlias",$param) and $param["CertificateAlias"] !== null) {
            $this->CertificateAlias = $param["CertificateAlias"];
        }

        if (array_key_exists("ClientCertificateId",$param) and $param["ClientCertificateId"] !== null) {
            $this->ClientCertificateId = $param["ClientCertificateId"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("ClientCertificateAlias",$param) and $param["ClientCertificateAlias"] !== null) {
            $this->ClientCertificateAlias = $param["ClientCertificateAlias"];
        }

        if (array_key_exists("PolyClientCertificateAliasInfo",$param) and $param["PolyClientCertificateAliasInfo"] !== null) {
            $this->PolyClientCertificateAliasInfo = [];
            foreach ($param["PolyClientCertificateAliasInfo"] as $key => $value){
                $obj = new CertificateAliasInfo();
                $obj->deserialize($value);
                array_push($this->PolyClientCertificateAliasInfo, $obj);
            }
        }

        if (array_key_exists("Http3Supported",$param) and $param["Http3Supported"] !== null) {
            $this->Http3Supported = $param["Http3Supported"];
        }

        if (array_key_exists("ProxyId",$param) and $param["ProxyId"] !== null) {
            $this->ProxyId = $param["ProxyId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
