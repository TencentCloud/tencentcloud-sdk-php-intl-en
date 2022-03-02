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
 * SetAuthentication request structure.
 *
 * @method string getListenerId() Obtain Listener ID.
 * @method void setListenerId(string $ListenerId) Set Listener ID.
 * @method string getDomain() Obtain The domain name requiring advanced configuration, i.e., the domain name of the listener's forwarding rules.
 * @method void setDomain(string $Domain) Set The domain name requiring advanced configuration, i.e., the domain name of the listener's forwarding rules.
 * @method integer getBasicAuth() Obtain Whether to enable the basic authentication:
0: disable basic authentication;
1: enable basic authentication.
The default value is 0.
 * @method void setBasicAuth(integer $BasicAuth) Set Whether to enable the basic authentication:
0: disable basic authentication;
1: enable basic authentication.
The default value is 0.
 * @method integer getGaapAuth() Obtain Whether to enable the connection authentication, which is for the origin server to authenticate GAAP.
0: disable;
1: enable.
The default value is 0.
 * @method void setGaapAuth(integer $GaapAuth) Set Whether to enable the connection authentication, which is for the origin server to authenticate GAAP.
0: disable;
1: enable.
The default value is 0.
 * @method integer getRealServerAuth() Obtain Whether to enable the origin server authentication, which is for GAAP to authenticate the server.
0: disable;
1: enable.
The default value is 0.
 * @method void setRealServerAuth(integer $RealServerAuth) Set Whether to enable the origin server authentication, which is for GAAP to authenticate the server.
0: disable;
1: enable.
The default value is 0.
 * @method string getBasicAuthConfId() Obtain Basic authentication configuration ID, which is obtained from the certificate management page.
 * @method void setBasicAuthConfId(string $BasicAuthConfId) Set Basic authentication configuration ID, which is obtained from the certificate management page.
 * @method string getGaapCertificateId() Obtain Connection SSL certificate ID, which is obtained from the certificate management page.
 * @method void setGaapCertificateId(string $GaapCertificateId) Set Connection SSL certificate ID, which is obtained from the certificate management page.
 * @method string getRealServerCertificateId() Obtain CA certificate ID of the origin server, which is obtained from the certificate management page. When authenticating the origin server, enter this parameter or the `RealServerCertificateIds` parameter.
 * @method void setRealServerCertificateId(string $RealServerCertificateId) Set CA certificate ID of the origin server, which is obtained from the certificate management page. When authenticating the origin server, enter this parameter or the `RealServerCertificateIds` parameter.
 * @method string getRealServerCertificateDomain() Obtain This field has been disused. Use ServerNameIndication instead.
 * @method void setRealServerCertificateDomain(string $RealServerCertificateDomain) Set This field has been disused. Use ServerNameIndication instead.
 * @method array getPolyRealServerCertificateIds() Obtain CA certificate IDs of multiple origin servers, which are obtained from the certificate management page. When authenticating the origin servers, enter this parameter or the `RealServerCertificateId` parameter.
 * @method void setPolyRealServerCertificateIds(array $PolyRealServerCertificateIds) Set CA certificate IDs of multiple origin servers, which are obtained from the certificate management page. When authenticating the origin servers, enter this parameter or the `RealServerCertificateId` parameter.
 */
class SetAuthenticationRequest extends AbstractModel
{
    /**
     * @var string Listener ID.
     */
    public $ListenerId;

    /**
     * @var string The domain name requiring advanced configuration, i.e., the domain name of the listener's forwarding rules.
     */
    public $Domain;

    /**
     * @var integer Whether to enable the basic authentication:
0: disable basic authentication;
1: enable basic authentication.
The default value is 0.
     */
    public $BasicAuth;

    /**
     * @var integer Whether to enable the connection authentication, which is for the origin server to authenticate GAAP.
0: disable;
1: enable.
The default value is 0.
     */
    public $GaapAuth;

    /**
     * @var integer Whether to enable the origin server authentication, which is for GAAP to authenticate the server.
0: disable;
1: enable.
The default value is 0.
     */
    public $RealServerAuth;

    /**
     * @var string Basic authentication configuration ID, which is obtained from the certificate management page.
     */
    public $BasicAuthConfId;

    /**
     * @var string Connection SSL certificate ID, which is obtained from the certificate management page.
     */
    public $GaapCertificateId;

    /**
     * @var string CA certificate ID of the origin server, which is obtained from the certificate management page. When authenticating the origin server, enter this parameter or the `RealServerCertificateIds` parameter.
     */
    public $RealServerCertificateId;

    /**
     * @var string This field has been disused. Use ServerNameIndication instead.
     */
    public $RealServerCertificateDomain;

    /**
     * @var array CA certificate IDs of multiple origin servers, which are obtained from the certificate management page. When authenticating the origin servers, enter this parameter or the `RealServerCertificateId` parameter.
     */
    public $PolyRealServerCertificateIds;

    /**
     * @param string $ListenerId Listener ID.
     * @param string $Domain The domain name requiring advanced configuration, i.e., the domain name of the listener's forwarding rules.
     * @param integer $BasicAuth Whether to enable the basic authentication:
0: disable basic authentication;
1: enable basic authentication.
The default value is 0.
     * @param integer $GaapAuth Whether to enable the connection authentication, which is for the origin server to authenticate GAAP.
0: disable;
1: enable.
The default value is 0.
     * @param integer $RealServerAuth Whether to enable the origin server authentication, which is for GAAP to authenticate the server.
0: disable;
1: enable.
The default value is 0.
     * @param string $BasicAuthConfId Basic authentication configuration ID, which is obtained from the certificate management page.
     * @param string $GaapCertificateId Connection SSL certificate ID, which is obtained from the certificate management page.
     * @param string $RealServerCertificateId CA certificate ID of the origin server, which is obtained from the certificate management page. When authenticating the origin server, enter this parameter or the `RealServerCertificateIds` parameter.
     * @param string $RealServerCertificateDomain This field has been disused. Use ServerNameIndication instead.
     * @param array $PolyRealServerCertificateIds CA certificate IDs of multiple origin servers, which are obtained from the certificate management page. When authenticating the origin servers, enter this parameter or the `RealServerCertificateId` parameter.
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("BasicAuth",$param) and $param["BasicAuth"] !== null) {
            $this->BasicAuth = $param["BasicAuth"];
        }

        if (array_key_exists("GaapAuth",$param) and $param["GaapAuth"] !== null) {
            $this->GaapAuth = $param["GaapAuth"];
        }

        if (array_key_exists("RealServerAuth",$param) and $param["RealServerAuth"] !== null) {
            $this->RealServerAuth = $param["RealServerAuth"];
        }

        if (array_key_exists("BasicAuthConfId",$param) and $param["BasicAuthConfId"] !== null) {
            $this->BasicAuthConfId = $param["BasicAuthConfId"];
        }

        if (array_key_exists("GaapCertificateId",$param) and $param["GaapCertificateId"] !== null) {
            $this->GaapCertificateId = $param["GaapCertificateId"];
        }

        if (array_key_exists("RealServerCertificateId",$param) and $param["RealServerCertificateId"] !== null) {
            $this->RealServerCertificateId = $param["RealServerCertificateId"];
        }

        if (array_key_exists("RealServerCertificateDomain",$param) and $param["RealServerCertificateDomain"] !== null) {
            $this->RealServerCertificateDomain = $param["RealServerCertificateDomain"];
        }

        if (array_key_exists("PolyRealServerCertificateIds",$param) and $param["PolyRealServerCertificateIds"] !== null) {
            $this->PolyRealServerCertificateIds = $param["PolyRealServerCertificateIds"];
        }
    }
}
