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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SAML signing certificate information.
 *
 * @method string getSerialNumber() Obtain Certificate serial number.
 * @method void setSerialNumber(string $SerialNumber) Set Certificate serial number.
 * @method string getIssuer() Obtain Certificate issuer.
 * @method void setIssuer(string $Issuer) Set Certificate issuer.
 * @method integer getVersion() Obtain Certificate version.
 * @method void setVersion(integer $Version) Set Certificate version.
 * @method string getCertificateId() Obtain Certificate ID.
 * @method void setCertificateId(string $CertificateId) Set Certificate ID.
 * @method string getPublicKey() Obtain Public key certificate in PEM format (Base64 encoded).
 * @method void setPublicKey(string $PublicKey) Set Public key certificate in PEM format (Base64 encoded).
 * @method string getSignatureAlgorithm() Obtain Signature algorithm of the certificate.
 * @method void setSignatureAlgorithm(string $SignatureAlgorithm) Set Signature algorithm of the certificate.
 * @method string getNotAfter() Obtain Expiration time of the certificate.
 * @method void setNotAfter(string $NotAfter) Set Expiration time of the certificate.
 * @method string getNotBefore() Obtain Creation time of the certificate.
 * @method void setNotBefore(string $NotBefore) Set Creation time of the certificate.
 * @method string getSubject() Obtain Certificate subject.
 * @method void setSubject(string $Subject) Set Certificate subject.
 * @method string getX509Certificate() Obtain X509 certificate in PEM format.
 * @method void setX509Certificate(string $X509Certificate) Set X509 certificate in PEM format.
 */
class SAMLIdPCertificate extends AbstractModel
{
    /**
     * @var string Certificate serial number.
     */
    public $SerialNumber;

    /**
     * @var string Certificate issuer.
     */
    public $Issuer;

    /**
     * @var integer Certificate version.
     */
    public $Version;

    /**
     * @var string Certificate ID.
     */
    public $CertificateId;

    /**
     * @var string Public key certificate in PEM format (Base64 encoded).
     */
    public $PublicKey;

    /**
     * @var string Signature algorithm of the certificate.
     */
    public $SignatureAlgorithm;

    /**
     * @var string Expiration time of the certificate.
     */
    public $NotAfter;

    /**
     * @var string Creation time of the certificate.
     */
    public $NotBefore;

    /**
     * @var string Certificate subject.
     */
    public $Subject;

    /**
     * @var string X509 certificate in PEM format.
     */
    public $X509Certificate;

    /**
     * @param string $SerialNumber Certificate serial number.
     * @param string $Issuer Certificate issuer.
     * @param integer $Version Certificate version.
     * @param string $CertificateId Certificate ID.
     * @param string $PublicKey Public key certificate in PEM format (Base64 encoded).
     * @param string $SignatureAlgorithm Signature algorithm of the certificate.
     * @param string $NotAfter Expiration time of the certificate.
     * @param string $NotBefore Creation time of the certificate.
     * @param string $Subject Certificate subject.
     * @param string $X509Certificate X509 certificate in PEM format.
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
        if (array_key_exists("SerialNumber",$param) and $param["SerialNumber"] !== null) {
            $this->SerialNumber = $param["SerialNumber"];
        }

        if (array_key_exists("Issuer",$param) and $param["Issuer"] !== null) {
            $this->Issuer = $param["Issuer"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("SignatureAlgorithm",$param) and $param["SignatureAlgorithm"] !== null) {
            $this->SignatureAlgorithm = $param["SignatureAlgorithm"];
        }

        if (array_key_exists("NotAfter",$param) and $param["NotAfter"] !== null) {
            $this->NotAfter = $param["NotAfter"];
        }

        if (array_key_exists("NotBefore",$param) and $param["NotBefore"] !== null) {
            $this->NotBefore = $param["NotBefore"];
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
        }

        if (array_key_exists("X509Certificate",$param) and $param["X509Certificate"] !== null) {
            $this->X509Certificate = $param["X509Certificate"];
        }
    }
}
