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
 * UploadCertificate request structure.
 *
 * @method string getCertificatePublicKey() Obtain Public key of the certificate
 * @method void setCertificatePublicKey(string $CertificatePublicKey) Set Public key of the certificate
 * @method string getCertificatePrivateKey() Obtain Private key content. This parameter is required when the certificate type is SVR, and not required when the certificate type is CA.
 * @method void setCertificatePrivateKey(string $CertificatePrivateKey) Set Private key content. This parameter is required when the certificate type is SVR, and not required when the certificate type is CA.
 * @method string getCertificateType() Obtain Certificate type. `CA`: client certificate; `SVR`: server certificate. The default value is SVR.
 * @method void setCertificateType(string $CertificateType) Set Certificate type. `CA`: client certificate; `SVR`: server certificate. The default value is SVR.
 * @method string getAlias() Obtain Alias
 * @method void setAlias(string $Alias) Set Alias
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getCertificateUse() Obtain 
 * @method void setCertificateUse(string $CertificateUse) Set 
 */
class UploadCertificateRequest extends AbstractModel
{
    /**
     * @var string Public key of the certificate
     */
    public $CertificatePublicKey;

    /**
     * @var string Private key content. This parameter is required when the certificate type is SVR, and not required when the certificate type is CA.
     */
    public $CertificatePrivateKey;

    /**
     * @var string Certificate type. `CA`: client certificate; `SVR`: server certificate. The default value is SVR.
     */
    public $CertificateType;

    /**
     * @var string Alias
     */
    public $Alias;

    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var string 
     */
    public $CertificateUse;

    /**
     * @param string $CertificatePublicKey Public key of the certificate
     * @param string $CertificatePrivateKey Private key content. This parameter is required when the certificate type is SVR, and not required when the certificate type is CA.
     * @param string $CertificateType Certificate type. `CA`: client certificate; `SVR`: server certificate. The default value is SVR.
     * @param string $Alias Alias
     * @param integer $ProjectId Project ID
     * @param string $CertificateUse 
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
        if (array_key_exists("CertificatePublicKey",$param) and $param["CertificatePublicKey"] !== null) {
            $this->CertificatePublicKey = $param["CertificatePublicKey"];
        }

        if (array_key_exists("CertificatePrivateKey",$param) and $param["CertificatePrivateKey"] !== null) {
            $this->CertificatePrivateKey = $param["CertificatePrivateKey"];
        }

        if (array_key_exists("CertificateType",$param) and $param["CertificateType"] !== null) {
            $this->CertificateType = $param["CertificateType"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CertificateUse",$param) and $param["CertificateUse"] !== null) {
            $this->CertificateUse = $param["CertificateUse"];
        }
    }
}
