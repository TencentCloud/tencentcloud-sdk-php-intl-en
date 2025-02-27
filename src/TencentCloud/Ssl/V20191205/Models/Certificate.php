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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Details of a CLB certificate
 *
 * @method string getCertId() Obtain The certificate ID.
 * @method void setCertId(string $CertId) Set The certificate ID.
 * @method array getDnsNames() Obtain The list of domains bound to the certificate.
 * @method void setDnsNames(array $DnsNames) Set The list of domains bound to the certificate.
 * @method string getCertCaId() Obtain Root certificate id.
 * @method void setCertCaId(string $CertCaId) Set Root certificate id.
 * @method string getSSLMode() Obtain Certificate authentication mode: unidirectional one-way authentication, mutual mutual authentication.
 * @method void setSSLMode(string $SSLMode) Set Certificate authentication mode: unidirectional one-way authentication, mutual mutual authentication.
 */
class Certificate extends AbstractModel
{
    /**
     * @var string The certificate ID.
     */
    public $CertId;

    /**
     * @var array The list of domains bound to the certificate.
     */
    public $DnsNames;

    /**
     * @var string Root certificate id.
     */
    public $CertCaId;

    /**
     * @var string Certificate authentication mode: unidirectional one-way authentication, mutual mutual authentication.
     */
    public $SSLMode;

    /**
     * @param string $CertId The certificate ID.
     * @param array $DnsNames The list of domains bound to the certificate.
     * @param string $CertCaId Root certificate id.
     * @param string $SSLMode Certificate authentication mode: unidirectional one-way authentication, mutual mutual authentication.
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
        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("DnsNames",$param) and $param["DnsNames"] !== null) {
            $this->DnsNames = $param["DnsNames"];
        }

        if (array_key_exists("CertCaId",$param) and $param["CertCaId"] !== null) {
            $this->CertCaId = $param["CertCaId"];
        }

        if (array_key_exists("SSLMode",$param) and $param["SSLMode"] !== null) {
            $this->SSLMode = $param["SSLMode"];
        }
    }
}
