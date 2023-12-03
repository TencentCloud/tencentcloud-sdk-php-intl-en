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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Domain name HTTPS acceleration configuration. This is disabled by default.
 *
 * @method string getSwitch() Obtain Whether to enable HTTPS. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setSwitch(string $Switch) Set Whether to enable HTTPS. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method string getHttp2() Obtain Whether to enable HTTP2
`on`: Enable
`off`: Disable
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setHttp2(string $Http2) Set Whether to enable HTTP2
`on`: Enable
`off`: Disable
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method string getOcspStapling() Obtain OCSP configuration switch
`on`: Enable
`off`: Disable
It is disabled by default.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setOcspStapling(string $OcspStapling) Set OCSP configuration switch
`on`: Enable
`off`: Disable
It is disabled by default.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getVerifyClient() Obtain Client certificate authentication feature
`on`: Enable
`off`: Disable
This is disabled by default. The client certificate information is needed when enabled. This is still in beta and not generally available yet.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setVerifyClient(string $VerifyClient) Set Client certificate authentication feature
`on`: Enable
`off`: Disable
This is disabled by default. The client certificate information is needed when enabled. This is still in beta and not generally available yet.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method ServerCert getCertInfo() Obtain Server certificate configuration information
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setCertInfo(ServerCert $CertInfo) Set Server certificate configuration information
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method ClientCert getClientCertInfo() Obtain Client certificate configuration information
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setClientCertInfo(ClientCert $ClientCertInfo) Set Client certificate configuration information
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getSpdy() Obtain Spdy configuration switch
`on`: Enable
`off`: Disable
It is disabled by default.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSpdy(string $Spdy) Set Spdy configuration switch
`on`: Enable
`off`: Disable
It is disabled by default.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getSslStatus() Obtain HTTPS certificate deployment status
closed: already closed
deploying: in deployment
deployed: successfully deployed
failed: deployment failed
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSslStatus(string $SslStatus) Set HTTPS certificate deployment status
closed: already closed
deploying: in deployment
deployed: successfully deployed
failed: deployment failed
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method Hsts getHsts() Obtain HSTS configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setHsts(Hsts $Hsts) Set HSTS configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getTlsVersion() Obtain TLS version settings, which only support certain advanced domain names. Valid values: `TLSv1`, `TLSV1.1`, `TLSV1.2`, and `TLSv1.3`. Only consecutive versions can be enabled at the same time.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setTlsVersion(array $TlsVersion) Set TLS version settings, which only support certain advanced domain names. Valid values: `TLSv1`, `TLSV1.1`, `TLSV1.2`, and `TLSv1.3`. Only consecutive versions can be enabled at the same time.
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class Https extends AbstractModel
{
    /**
     * @var string Whether to enable HTTPS. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Switch;

    /**
     * @var string Whether to enable HTTP2
`on`: Enable
`off`: Disable
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Http2;

    /**
     * @var string OCSP configuration switch
`on`: Enable
`off`: Disable
It is disabled by default.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $OcspStapling;

    /**
     * @var string Client certificate authentication feature
`on`: Enable
`off`: Disable
This is disabled by default. The client certificate information is needed when enabled. This is still in beta and not generally available yet.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $VerifyClient;

    /**
     * @var ServerCert Server certificate configuration information
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $CertInfo;

    /**
     * @var ClientCert Client certificate configuration information
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ClientCertInfo;

    /**
     * @var string Spdy configuration switch
`on`: Enable
`off`: Disable
It is disabled by default.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Spdy;

    /**
     * @var string HTTPS certificate deployment status
closed: already closed
deploying: in deployment
deployed: successfully deployed
failed: deployment failed
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $SslStatus;

    /**
     * @var Hsts HSTS configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Hsts;

    /**
     * @var array TLS version settings, which only support certain advanced domain names. Valid values: `TLSv1`, `TLSV1.1`, `TLSV1.2`, and `TLSv1.3`. Only consecutive versions can be enabled at the same time.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $TlsVersion;

    /**
     * @param string $Switch Whether to enable HTTPS. Values:
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param string $Http2 Whether to enable HTTP2
`on`: Enable
`off`: Disable
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param string $OcspStapling OCSP configuration switch
`on`: Enable
`off`: Disable
It is disabled by default.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $VerifyClient Client certificate authentication feature
`on`: Enable
`off`: Disable
This is disabled by default. The client certificate information is needed when enabled. This is still in beta and not generally available yet.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param ServerCert $CertInfo Server certificate configuration information
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param ClientCert $ClientCertInfo Client certificate configuration information
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Spdy Spdy configuration switch
`on`: Enable
`off`: Disable
It is disabled by default.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $SslStatus HTTPS certificate deployment status
closed: already closed
deploying: in deployment
deployed: successfully deployed
failed: deployment failed
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param Hsts $Hsts HSTS configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $TlsVersion TLS version settings, which only support certain advanced domain names. Valid values: `TLSv1`, `TLSV1.1`, `TLSV1.2`, and `TLSv1.3`. Only consecutive versions can be enabled at the same time.
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Http2",$param) and $param["Http2"] !== null) {
            $this->Http2 = $param["Http2"];
        }

        if (array_key_exists("OcspStapling",$param) and $param["OcspStapling"] !== null) {
            $this->OcspStapling = $param["OcspStapling"];
        }

        if (array_key_exists("VerifyClient",$param) and $param["VerifyClient"] !== null) {
            $this->VerifyClient = $param["VerifyClient"];
        }

        if (array_key_exists("CertInfo",$param) and $param["CertInfo"] !== null) {
            $this->CertInfo = new ServerCert();
            $this->CertInfo->deserialize($param["CertInfo"]);
        }

        if (array_key_exists("ClientCertInfo",$param) and $param["ClientCertInfo"] !== null) {
            $this->ClientCertInfo = new ClientCert();
            $this->ClientCertInfo->deserialize($param["ClientCertInfo"]);
        }

        if (array_key_exists("Spdy",$param) and $param["Spdy"] !== null) {
            $this->Spdy = $param["Spdy"];
        }

        if (array_key_exists("SslStatus",$param) and $param["SslStatus"] !== null) {
            $this->SslStatus = $param["SslStatus"];
        }

        if (array_key_exists("Hsts",$param) and $param["Hsts"] !== null) {
            $this->Hsts = new Hsts();
            $this->Hsts->deserialize($param["Hsts"]);
        }

        if (array_key_exists("TlsVersion",$param) and $param["TlsVersion"] !== null) {
            $this->TlsVersion = $param["TlsVersion"];
        }
    }
}
