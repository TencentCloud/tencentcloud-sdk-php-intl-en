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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Certificate information
 *
 * @method string getSSLMode() Obtain Authentication type. Value range: UNIDIRECTIONAL (unidirectional authentication), MUTUAL (mutual authentication)
 * @method void setSSLMode(string $SSLMode) Set Authentication type. Value range: UNIDIRECTIONAL (unidirectional authentication), MUTUAL (mutual authentication)
 * @method string getCertId() Obtain ID of a server certificate. If you leave this parameter empty, you must upload the certificate, including CertContent, CertKey, and CertName.
 * @method void setCertId(string $CertId) Set ID of a server certificate. If you leave this parameter empty, you must upload the certificate, including CertContent, CertKey, and CertName.
 * @method string getCertCaId() Obtain ID of a client certificate. When the listener adopts mutual authentication (i.e., SSLMode = mutual), if you leave this parameter empty, you must upload the client certificate, including CertCaContent and CertCaName.
 * @method void setCertCaId(string $CertCaId) Set ID of a client certificate. When the listener adopts mutual authentication (i.e., SSLMode = mutual), if you leave this parameter empty, you must upload the client certificate, including CertCaContent and CertCaName.
 * @method string getCertName() Obtain Name of the uploaded server certificate. If there is no CertId, this parameter is required.
 * @method void setCertName(string $CertName) Set Name of the uploaded server certificate. If there is no CertId, this parameter is required.
 * @method string getCertKey() Obtain Key of the uploaded server certificate. If there is no CertId, this parameter is required.
 * @method void setCertKey(string $CertKey) Set Key of the uploaded server certificate. If there is no CertId, this parameter is required.
 * @method string getCertContent() Obtain Content of the uploaded server certificate. If there is no CertId, this parameter is required.
 * @method void setCertContent(string $CertContent) Set Content of the uploaded server certificate. If there is no CertId, this parameter is required.
 * @method string getCertCaName() Obtain Name of the uploaded client CA certificate. When SSLMode = mutual, if there is no CertCaId, this parameter is required.
 * @method void setCertCaName(string $CertCaName) Set Name of the uploaded client CA certificate. When SSLMode = mutual, if there is no CertCaId, this parameter is required.
 * @method string getCertCaContent() Obtain Content of the uploaded client certificate. When SSLMode = mutual, if there is no CertCaId, this parameter is required.
 * @method void setCertCaContent(string $CertCaContent) Set Content of the uploaded client certificate. When SSLMode = mutual, if there is no CertCaId, this parameter is required.
 */
class CertificateInput extends AbstractModel
{
    /**
     * @var string Authentication type. Value range: UNIDIRECTIONAL (unidirectional authentication), MUTUAL (mutual authentication)
     */
    public $SSLMode;

    /**
     * @var string ID of a server certificate. If you leave this parameter empty, you must upload the certificate, including CertContent, CertKey, and CertName.
     */
    public $CertId;

    /**
     * @var string ID of a client certificate. When the listener adopts mutual authentication (i.e., SSLMode = mutual), if you leave this parameter empty, you must upload the client certificate, including CertCaContent and CertCaName.
     */
    public $CertCaId;

    /**
     * @var string Name of the uploaded server certificate. If there is no CertId, this parameter is required.
     */
    public $CertName;

    /**
     * @var string Key of the uploaded server certificate. If there is no CertId, this parameter is required.
     */
    public $CertKey;

    /**
     * @var string Content of the uploaded server certificate. If there is no CertId, this parameter is required.
     */
    public $CertContent;

    /**
     * @var string Name of the uploaded client CA certificate. When SSLMode = mutual, if there is no CertCaId, this parameter is required.
     */
    public $CertCaName;

    /**
     * @var string Content of the uploaded client certificate. When SSLMode = mutual, if there is no CertCaId, this parameter is required.
     */
    public $CertCaContent;

    /**
     * @param string $SSLMode Authentication type. Value range: UNIDIRECTIONAL (unidirectional authentication), MUTUAL (mutual authentication)
     * @param string $CertId ID of a server certificate. If you leave this parameter empty, you must upload the certificate, including CertContent, CertKey, and CertName.
     * @param string $CertCaId ID of a client certificate. When the listener adopts mutual authentication (i.e., SSLMode = mutual), if you leave this parameter empty, you must upload the client certificate, including CertCaContent and CertCaName.
     * @param string $CertName Name of the uploaded server certificate. If there is no CertId, this parameter is required.
     * @param string $CertKey Key of the uploaded server certificate. If there is no CertId, this parameter is required.
     * @param string $CertContent Content of the uploaded server certificate. If there is no CertId, this parameter is required.
     * @param string $CertCaName Name of the uploaded client CA certificate. When SSLMode = mutual, if there is no CertCaId, this parameter is required.
     * @param string $CertCaContent Content of the uploaded client certificate. When SSLMode = mutual, if there is no CertCaId, this parameter is required.
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

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("CertCaId",$param) and $param["CertCaId"] !== null) {
            $this->CertCaId = $param["CertCaId"];
        }

        if (array_key_exists("CertName",$param) and $param["CertName"] !== null) {
            $this->CertName = $param["CertName"];
        }

        if (array_key_exists("CertKey",$param) and $param["CertKey"] !== null) {
            $this->CertKey = $param["CertKey"];
        }

        if (array_key_exists("CertContent",$param) and $param["CertContent"] !== null) {
            $this->CertContent = $param["CertContent"];
        }

        if (array_key_exists("CertCaName",$param) and $param["CertCaName"] !== null) {
            $this->CertCaName = $param["CertCaName"];
        }

        if (array_key_exists("CertCaContent",$param) and $param["CertCaContent"] !== null) {
            $this->CertCaContent = $param["CertCaContent"];
        }
    }
}
