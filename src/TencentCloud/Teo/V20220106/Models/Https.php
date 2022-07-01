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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Domain name HTTPS acceleration configuration. This is disabled by default.
 *
 * @method string getHttp2() Obtain HTTP2 configuration switch
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setHttp2(string $Http2) Set HTTP2 configuration switch
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid value can be obtained.
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
 * @method array getTlsVersion() Obtain TLS version settings. Valid values: `TLSv1`, `TLSV1.1`, `TLSV1.2`, and `TLSv1.3`. Only consecutive versions can be enabled at the same time.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setTlsVersion(array $TlsVersion) Set TLS version settings. Valid values: `TLSv1`, `TLSV1.1`, `TLSV1.2`, and `TLSv1.3`. Only consecutive versions can be enabled at the same time.
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method Hsts getHsts() Obtain HSTS Configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setHsts(Hsts $Hsts) Set HSTS Configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class Https extends AbstractModel
{
    /**
     * @var string HTTP2 configuration switch
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid value can be obtained.
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
     * @var array TLS version settings. Valid values: `TLSv1`, `TLSV1.1`, `TLSV1.2`, and `TLSv1.3`. Only consecutive versions can be enabled at the same time.
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $TlsVersion;

    /**
     * @var Hsts HSTS Configuration
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Hsts;

    /**
     * @param string $Http2 HTTP2 configuration switch
`on`: Enable
`off`: Disable
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $OcspStapling OCSP configuration switch
`on`: Enable
`off`: Disable
It is disabled by default.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $TlsVersion TLS version settings. Valid values: `TLSv1`, `TLSV1.1`, `TLSV1.2`, and `TLSv1.3`. Only consecutive versions can be enabled at the same time.
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param Hsts $Hsts HSTS Configuration
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
    }
}
