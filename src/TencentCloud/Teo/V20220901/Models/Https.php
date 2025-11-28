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
 * Domain name HTTPS acceleration configuration. This is disabled by default.
 *
 * @method string getHttp2() Obtain http2 configuration switch. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>
 * @method void setHttp2(string $Http2) Set http2 configuration switch. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>
 * @method string getOcspStapling() Obtain OCSP configuration switch. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>
 * @method void setOcspStapling(string $OcspStapling) Set OCSP configuration switch. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>
 * @method array getTlsVersion() Obtain Tls version settings. valid values:.
<Li>TLSv1: specifies the tlsv1 version.</li>.
<Li>TLSv1.1: specifies the tlsv1.1 version.</li>.
<Li>TLSv1.2: specifies the tlsv1.2 version.</li>.
<Li>TLSv1.3: specifies the tlsv1.3 version. consecutive versions must be enabled when modifying.</li>.
 * @method void setTlsVersion(array $TlsVersion) Set Tls version settings. valid values:.
<Li>TLSv1: specifies the tlsv1 version.</li>.
<Li>TLSv1.1: specifies the tlsv1.1 version.</li>.
<Li>TLSv1.2: specifies the tlsv1.2 version.</li>.
<Li>TLSv1.3: specifies the tlsv1.3 version. consecutive versions must be enabled when modifying.</li>.
 * @method Hsts getHsts() Obtain HSTS Configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setHsts(Hsts $Hsts) Set HSTS Configuration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getCertInfo() Obtain The certificate configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCertInfo(array $CertInfo) Set The certificate configuration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getApplyType() Obtain Application type. valid values:.
<li>`apply`: managed by EdgeOne.</li>.
<li>`none`: not managed by EdgeOne.</li>if it is left empty, the default value `none` is used.
 * @method void setApplyType(string $ApplyType) Set Application type. valid values:.
<li>`apply`: managed by EdgeOne.</li>.
<li>`none`: not managed by EdgeOne.</li>if it is left empty, the default value `none` is used.
 * @method string getCipherSuite() Obtain The cipher suite, with valid values:.
<li>loose-v2023: provides high compatibility with general security, and supports TLS 1.0-1.3 cipher suites;</li>.
<li>general-v2023: provides relatively high compatibility with moderate security, and supports TLS 1.2-1.3 cipher suites.</li>.
<li>strict-v2023: provides high security, disables all cipher suites with security risks, and supports TLS 1.2-1.3 cipher suites.</li>.
 * @method void setCipherSuite(string $CipherSuite) Set The cipher suite, with valid values:.
<li>loose-v2023: provides high compatibility with general security, and supports TLS 1.0-1.3 cipher suites;</li>.
<li>general-v2023: provides relatively high compatibility with moderate security, and supports TLS 1.2-1.3 cipher suites.</li>.
<li>strict-v2023: provides high security, disables all cipher suites with security risks, and supports TLS 1.2-1.3 cipher suites.</li>.
 */
class Https extends AbstractModel
{
    /**
     * @var string http2 configuration switch. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>
     */
    public $Http2;

    /**
     * @var string OCSP configuration switch. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>
     */
    public $OcspStapling;

    /**
     * @var array Tls version settings. valid values:.
<Li>TLSv1: specifies the tlsv1 version.</li>.
<Li>TLSv1.1: specifies the tlsv1.1 version.</li>.
<Li>TLSv1.2: specifies the tlsv1.2 version.</li>.
<Li>TLSv1.3: specifies the tlsv1.3 version. consecutive versions must be enabled when modifying.</li>.
     */
    public $TlsVersion;

    /**
     * @var Hsts HSTS Configuration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Hsts;

    /**
     * @var array The certificate configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CertInfo;

    /**
     * @var string Application type. valid values:.
<li>`apply`: managed by EdgeOne.</li>.
<li>`none`: not managed by EdgeOne.</li>if it is left empty, the default value `none` is used.
     */
    public $ApplyType;

    /**
     * @var string The cipher suite, with valid values:.
<li>loose-v2023: provides high compatibility with general security, and supports TLS 1.0-1.3 cipher suites;</li>.
<li>general-v2023: provides relatively high compatibility with moderate security, and supports TLS 1.2-1.3 cipher suites.</li>.
<li>strict-v2023: provides high security, disables all cipher suites with security risks, and supports TLS 1.2-1.3 cipher suites.</li>.
     */
    public $CipherSuite;

    /**
     * @param string $Http2 http2 configuration switch. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>
     * @param string $OcspStapling OCSP configuration switch. valid values:.
<li>`on`: Enable;</li>

<li>off: Disable.</li>
     * @param array $TlsVersion Tls version settings. valid values:.
<Li>TLSv1: specifies the tlsv1 version.</li>.
<Li>TLSv1.1: specifies the tlsv1.1 version.</li>.
<Li>TLSv1.2: specifies the tlsv1.2 version.</li>.
<Li>TLSv1.3: specifies the tlsv1.3 version. consecutive versions must be enabled when modifying.</li>.
     * @param Hsts $Hsts HSTS Configuration
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $CertInfo The certificate configuration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ApplyType Application type. valid values:.
<li>`apply`: managed by EdgeOne.</li>.
<li>`none`: not managed by EdgeOne.</li>if it is left empty, the default value `none` is used.
     * @param string $CipherSuite The cipher suite, with valid values:.
<li>loose-v2023: provides high compatibility with general security, and supports TLS 1.0-1.3 cipher suites;</li>.
<li>general-v2023: provides relatively high compatibility with moderate security, and supports TLS 1.2-1.3 cipher suites.</li>.
<li>strict-v2023: provides high security, disables all cipher suites with security risks, and supports TLS 1.2-1.3 cipher suites.</li>.
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
