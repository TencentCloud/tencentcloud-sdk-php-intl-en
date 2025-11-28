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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Certificate information
 *
 * @method string getSSLMode() Obtain Authentication type. Value range: UNIDIRECTIONAL (unidirectional authentication), MUTUAL (mutual authentication)
 * @method void setSSLMode(string $SSLMode) Set Authentication type. Value range: UNIDIRECTIONAL (unidirectional authentication), MUTUAL (mutual authentication)
 * @method string getSSLVerifyClient() Obtain Specifies whether client certificate verification is enabled. this parameter is valid only when mutual authentication is enabled.
 * @method void setSSLVerifyClient(string $SSLVerifyClient) Set Specifies whether client certificate verification is enabled. this parameter is valid only when mutual authentication is enabled.
 * @method string getCertId() Obtain Server certificate ID.
 * @method void setCertId(string $CertId) Set Server certificate ID.
 * @method string getCertCaId() Obtain Client certificate ID.
 * @method void setCertCaId(string $CertCaId) Set Client certificate ID.
 * @method array getExtCertIds() Obtain Specifies the server certificate ID for multi-server certificate scenario expansion.
 * @method void setExtCertIds(array $ExtCertIds) Set Specifies the server certificate ID for multi-server certificate scenario expansion.
 */
class CertificateOutput extends AbstractModel
{
    /**
     * @var string Authentication type. Value range: UNIDIRECTIONAL (unidirectional authentication), MUTUAL (mutual authentication)
     */
    public $SSLMode;

    /**
     * @var string Specifies whether client certificate verification is enabled. this parameter is valid only when mutual authentication is enabled.
     */
    public $SSLVerifyClient;

    /**
     * @var string Server certificate ID.
     */
    public $CertId;

    /**
     * @var string Client certificate ID.
     */
    public $CertCaId;

    /**
     * @var array Specifies the server certificate ID for multi-server certificate scenario expansion.
     */
    public $ExtCertIds;

    /**
     * @param string $SSLMode Authentication type. Value range: UNIDIRECTIONAL (unidirectional authentication), MUTUAL (mutual authentication)
     * @param string $SSLVerifyClient Specifies whether client certificate verification is enabled. this parameter is valid only when mutual authentication is enabled.
     * @param string $CertId Server certificate ID.
     * @param string $CertCaId Client certificate ID.
     * @param array $ExtCertIds Specifies the server certificate ID for multi-server certificate scenario expansion.
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
        if (array_key_exists("SSLMode",$param) and $param["SSLMode"] !== null) {
            $this->SSLMode = $param["SSLMode"];
        }

        if (array_key_exists("SSLVerifyClient",$param) and $param["SSLVerifyClient"] !== null) {
            $this->SSLVerifyClient = $param["SSLVerifyClient"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CertCaId",$param) and $param["CertCaId"] !== null) {
            $this->CertCaId = $param["CertCaId"];
        }

        if (array_key_exists("ExtCertIds",$param) and $param["ExtCertIds"] !== null) {
            $this->ExtCertIds = $param["ExtCertIds"];
        }
    }
}
