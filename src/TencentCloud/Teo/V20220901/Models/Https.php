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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * https acceleration configuration for the domain name. Disabled by default.
 *
 * @method string getHttp2() Obtain http/2 configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method void setHttp2(string $Http2) Set http/2 configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method string getOcspStapling() Obtain OCSP configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method void setOcspStapling(string $OcspStapling) Set OCSP configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
 * @method array getTlsVersion() Obtain Tls version settings. Valid values:
<li>TLSv1: TLSv1 version;</li>
<li>TLSv1.1: TLSv1.1 version;</li>
<li>TLSv1.2: TLSv1.2 version;</li>
<li>TLSv1.3: TLSv1.3 version.</li>Consecutive versions must be enabled when modifying.
 * @method void setTlsVersion(array $TlsVersion) Set Tls version settings. Valid values:
<li>TLSv1: TLSv1 version;</li>
<li>TLSv1.1: TLSv1.1 version;</li>
<li>TLSv1.2: TLSv1.2 version;</li>
<li>TLSv1.3: TLSv1.3 version.</li>Consecutive versions must be enabled when modifying.
 * @method Hsts getHsts() Obtain HSTS configuration.
 * @method void setHsts(Hsts $Hsts) Set HSTS configuration.
 * @method array getCertInfo() Obtain Certificate configuration.
 * @method void setCertInfo(array $CertInfo) Set Certificate configuration.
 * @method string getApplyType() Obtain Application type. Valid values:
<li>apply: manage EdgeOne;</li>
<li>none: EdgeOne is not managed.</li>If not specified, the default value is none.
 * @method void setApplyType(string $ApplyType) Set Application type. Valid values:
<li>apply: manage EdgeOne;</li>
<li>none: EdgeOne is not managed.</li>If not specified, the default value is none.
 * @method string getCipherSuite() Obtain Cipher suite. Valid values:
<li>loose-v2023: Provides high compatibility with general security, and supports TLS 1.0-1.3 cipher suites;</li>
<li>general-v2023: Provides relatively high compatibility with moderate security, and supports TLS 1.2-1.3 cipher suites;</li>
<li>strict-v2023: Provides high security, disables all cipher suites with security risks, and supports TLS 1.2-1.3 cipher suites.</li>
 * @method void setCipherSuite(string $CipherSuite) Set Cipher suite. Valid values:
<li>loose-v2023: Provides high compatibility with general security, and supports TLS 1.0-1.3 cipher suites;</li>
<li>general-v2023: Provides relatively high compatibility with moderate security, and supports TLS 1.2-1.3 cipher suites;</li>
<li>strict-v2023: Provides high security, disables all cipher suites with security risks, and supports TLS 1.2-1.3 cipher suites.</li>
 */
class Https extends AbstractModel
{
    /**
     * @var string http/2 configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     */
    public $Http2;

    /**
     * @var string OCSP configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     */
    public $OcspStapling;

    /**
     * @var array Tls version settings. Valid values:
<li>TLSv1: TLSv1 version;</li>
<li>TLSv1.1: TLSv1.1 version;</li>
<li>TLSv1.2: TLSv1.2 version;</li>
<li>TLSv1.3: TLSv1.3 version.</li>Consecutive versions must be enabled when modifying.
     */
    public $TlsVersion;

    /**
     * @var Hsts HSTS configuration.
     */
    public $Hsts;

    /**
     * @var array Certificate configuration.
     */
    public $CertInfo;

    /**
     * @var string Application type. Valid values:
<li>apply: manage EdgeOne;</li>
<li>none: EdgeOne is not managed.</li>If not specified, the default value is none.
     */
    public $ApplyType;

    /**
     * @var string Cipher suite. Valid values:
<li>loose-v2023: Provides high compatibility with general security, and supports TLS 1.0-1.3 cipher suites;</li>
<li>general-v2023: Provides relatively high compatibility with moderate security, and supports TLS 1.2-1.3 cipher suites;</li>
<li>strict-v2023: Provides high security, disables all cipher suites with security risks, and supports TLS 1.2-1.3 cipher suites.</li>
     */
    public $CipherSuite;

    /**
     * @param string $Http2 http/2 configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     * @param string $OcspStapling OCSP configuration switch. Valid values:
<li>`on`: Enable;</li>
<li>off: Disable.</li>
     * @param array $TlsVersion Tls version settings. Valid values:
<li>TLSv1: TLSv1 version;</li>
<li>TLSv1.1: TLSv1.1 version;</li>
<li>TLSv1.2: TLSv1.2 version;</li>
<li>TLSv1.3: TLSv1.3 version.</li>Consecutive versions must be enabled when modifying.
     * @param Hsts $Hsts HSTS configuration.
     * @param array $CertInfo Certificate configuration.
     * @param string $ApplyType Application type. Valid values:
<li>apply: manage EdgeOne;</li>
<li>none: EdgeOne is not managed.</li>If not specified, the default value is none.
     * @param string $CipherSuite Cipher suite. Valid values:
<li>loose-v2023: Provides high compatibility with general security, and supports TLS 1.0-1.3 cipher suites;</li>
<li>general-v2023: Provides relatively high compatibility with moderate security, and supports TLS 1.2-1.3 cipher suites;</li>
<li>strict-v2023: Provides high security, disables all cipher suites with security risks, and supports TLS 1.2-1.3 cipher suites.</li>
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
        if (array_key_exists("Http2",$param) and $param["Http2"] !== null) {
            $this->Http2 = $param["Http2"];
        }

        if (array_key_exists("OcspStapling",$param) and $param["OcspStapling"] !== null) {
            $this->OcspStapling = $param["OcspStapling"];
        }

        if (array_key_exists("TlsVersion",$param) and $param["TlsVersion"] !== null) {
            $this->TlsVersion = $param["TlsVersion"];
        }

        if (array_key_exists("Hsts",$param) and $param["Hsts"] !== null) {
            $this->Hsts = new Hsts();
            $this->Hsts->deserialize($param["Hsts"]);
        }

        if (array_key_exists("CertInfo",$param) and $param["CertInfo"] !== null) {
            $this->CertInfo = [];
            foreach ($param["CertInfo"] as $key => $value){
                $obj = new ServerCertInfo();
                $obj->deserialize($value);
                array_push($this->CertInfo, $obj);
            }
        }

        if (array_key_exists("ApplyType",$param) and $param["ApplyType"] !== null) {
            $this->ApplyType = $param["ApplyType"];
        }

        if (array_key_exists("CipherSuite",$param) and $param["CipherSuite"] !== null) {
            $this->CipherSuite = $param["CipherSuite"];
        }
    }
}
