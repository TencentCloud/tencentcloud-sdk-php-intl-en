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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCertificateVerifyResult request structure.
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method integer getCertType() Obtain Certificate type. 0: Do not check international standard certificates; 1: The certificate is a self-owned certificate; 2: The certificate is a managed certificate.
 * @method void setCertType(integer $CertType) Set Certificate type. 0: Do not check international standard certificates; 1: The certificate is a self-owned certificate; 2: The certificate is a managed certificate.
 * @method string getCertificate() Obtain When CertType is 1, this parameter is required, indicating the self-owned certificate chain
 * @method void setCertificate(string $Certificate) Set When CertType is 1, this parameter is required, indicating the self-owned certificate chain
 * @method string getCertID() Obtain When CertType is 2, this parameter must be filled, indicating the certificate ID hosted on Tencent Cloud's SSL platform
 * @method void setCertID(string $CertID) Set When CertType is 2, this parameter must be filled, indicating the certificate ID hosted on Tencent Cloud's SSL platform
 * @method string getPrivateKey() Obtain When CertType=1, this parameter is required, indicating the private key of the self-owned certificate.
 * @method void setPrivateKey(string $PrivateKey) Set When CertType=1, this parameter is required, indicating the private key of the self-owned certificate.
 * @method integer getGmCertType() Obtain SM certificate type. 0: Do not check SM certificates; 1: The certificate is a self-owned SM certificate; 2: The certificate is a managed SM certificate.
 * @method void setGmCertType(integer $GmCertType) Set SM certificate type. 0: Do not check SM certificates; 1: The certificate is a self-owned SM certificate; 2: The certificate is a managed SM certificate.
 * @method string getGmCert() Obtain When GmCertType is 1, this parameter needs to be set, indicating the certificate chain of the self-owned SM certificate.
 * @method void setGmCert(string $GmCert) Set When GmCertType is 1, this parameter needs to be set, indicating the certificate chain of the self-owned SM certificate.
 * @method string getGmPrivateKey() Obtain When GmCertType is 1, this parameter needs to be set, indicating the private key of the self-owned SM certificate.
 * @method void setGmPrivateKey(string $GmPrivateKey) Set When GmCertType is 1, this parameter needs to be set, indicating the private key of the self-owned SM certificate.
 * @method string getGmEncCert() Obtain When GmCertType is 1, this parameter needs to be set, indicating the encryption certificate of the self-owned SM certificate.
 * @method void setGmEncCert(string $GmEncCert) Set When GmCertType is 1, this parameter needs to be set, indicating the encryption certificate of the self-owned SM certificate.
 * @method string getGmEncPrivateKey() Obtain When GmCertType is 1, this parameter needs to be set, indicating the private key of the encryption certificate for the self-owned SM certificate.
 * @method void setGmEncPrivateKey(string $GmEncPrivateKey) Set When GmCertType is 1, this parameter needs to be set, indicating the private key of the encryption certificate for the self-owned SM certificate.
 * @method string getGmSSLId() Obtain When GmCertType is 2, this parameter needs to be set, indicating the ID of the certificate managed by the Tencent Cloud SSL platform.
 * @method void setGmSSLId(string $GmSSLId) Set When GmCertType is 2, this parameter needs to be set, indicating the ID of the certificate managed by the Tencent Cloud SSL platform.
 */
class DescribeCertificateVerifyResultRequest extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var integer Certificate type. 0: Do not check international standard certificates; 1: The certificate is a self-owned certificate; 2: The certificate is a managed certificate.
     */
    public $CertType;

    /**
     * @var string When CertType is 1, this parameter is required, indicating the self-owned certificate chain
     */
    public $Certificate;

    /**
     * @var string When CertType is 2, this parameter must be filled, indicating the certificate ID hosted on Tencent Cloud's SSL platform
     */
    public $CertID;

    /**
     * @var string When CertType=1, this parameter is required, indicating the private key of the self-owned certificate.
     */
    public $PrivateKey;

    /**
     * @var integer SM certificate type. 0: Do not check SM certificates; 1: The certificate is a self-owned SM certificate; 2: The certificate is a managed SM certificate.
     */
    public $GmCertType;

    /**
     * @var string When GmCertType is 1, this parameter needs to be set, indicating the certificate chain of the self-owned SM certificate.
     */
    public $GmCert;

    /**
     * @var string When GmCertType is 1, this parameter needs to be set, indicating the private key of the self-owned SM certificate.
     */
    public $GmPrivateKey;

    /**
     * @var string When GmCertType is 1, this parameter needs to be set, indicating the encryption certificate of the self-owned SM certificate.
     */
    public $GmEncCert;

    /**
     * @var string When GmCertType is 1, this parameter needs to be set, indicating the private key of the encryption certificate for the self-owned SM certificate.
     */
    public $GmEncPrivateKey;

    /**
     * @var string When GmCertType is 2, this parameter needs to be set, indicating the ID of the certificate managed by the Tencent Cloud SSL platform.
     */
    public $GmSSLId;

    /**
     * @param string $Domain Domain name
     * @param integer $CertType Certificate type. 0: Do not check international standard certificates; 1: The certificate is a self-owned certificate; 2: The certificate is a managed certificate.
     * @param string $Certificate When CertType is 1, this parameter is required, indicating the self-owned certificate chain
     * @param string $CertID When CertType is 2, this parameter must be filled, indicating the certificate ID hosted on Tencent Cloud's SSL platform
     * @param string $PrivateKey When CertType=1, this parameter is required, indicating the private key of the self-owned certificate.
     * @param integer $GmCertType SM certificate type. 0: Do not check SM certificates; 1: The certificate is a self-owned SM certificate; 2: The certificate is a managed SM certificate.
     * @param string $GmCert When GmCertType is 1, this parameter needs to be set, indicating the certificate chain of the self-owned SM certificate.
     * @param string $GmPrivateKey When GmCertType is 1, this parameter needs to be set, indicating the private key of the self-owned SM certificate.
     * @param string $GmEncCert When GmCertType is 1, this parameter needs to be set, indicating the encryption certificate of the self-owned SM certificate.
     * @param string $GmEncPrivateKey When GmCertType is 1, this parameter needs to be set, indicating the private key of the encryption certificate for the self-owned SM certificate.
     * @param string $GmSSLId When GmCertType is 2, this parameter needs to be set, indicating the ID of the certificate managed by the Tencent Cloud SSL platform.
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = $param["Certificate"];
        }

        if (array_key_exists("CertID",$param) and $param["CertID"] !== null) {
            $this->CertID = $param["CertID"];
        }

        if (array_key_exists("PrivateKey",$param) and $param["PrivateKey"] !== null) {
            $this->PrivateKey = $param["PrivateKey"];
        }

        if (array_key_exists("GmCertType",$param) and $param["GmCertType"] !== null) {
            $this->GmCertType = $param["GmCertType"];
        }

        if (array_key_exists("GmCert",$param) and $param["GmCert"] !== null) {
            $this->GmCert = $param["GmCert"];
        }

        if (array_key_exists("GmPrivateKey",$param) and $param["GmPrivateKey"] !== null) {
            $this->GmPrivateKey = $param["GmPrivateKey"];
        }

        if (array_key_exists("GmEncCert",$param) and $param["GmEncCert"] !== null) {
            $this->GmEncCert = $param["GmEncCert"];
        }

        if (array_key_exists("GmEncPrivateKey",$param) and $param["GmEncPrivateKey"] !== null) {
            $this->GmEncPrivateKey = $param["GmEncPrivateKey"];
        }

        if (array_key_exists("GmSSLId",$param) and $param["GmSSLId"] !== null) {
            $this->GmSSLId = $param["GmSSLId"];
        }
    }
}
