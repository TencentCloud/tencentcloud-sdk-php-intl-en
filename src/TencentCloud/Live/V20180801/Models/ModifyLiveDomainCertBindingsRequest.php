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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLiveDomainCertBindings request structure.
 *
 * @method array getDomainInfos() Obtain The playback domains to bind and whether to enable HTTPS for them.
If neither `CloudCertId` nor the public/private key is specified, and a domain is already bound with a certificate, this API will only update the HTTPS configuration of the domain and, if the certificate is a self-owned certificate, upload it to Tencent Cloud.
 * @method void setDomainInfos(array $DomainInfos) Set The playback domains to bind and whether to enable HTTPS for them.
If neither `CloudCertId` nor the public/private key is specified, and a domain is already bound with a certificate, this API will only update the HTTPS configuration of the domain and, if the certificate is a self-owned certificate, upload it to Tencent Cloud.
 * @method string getCloudCertId() Obtain The SSL certificate ID assigned by Tencent Cloud.
For details, see https://intl.cloud.tencent.com/document/api/400/41665?from_cn_redirect=1
 * @method void setCloudCertId(string $CloudCertId) Set The SSL certificate ID assigned by Tencent Cloud.
For details, see https://intl.cloud.tencent.com/document/api/400/41665?from_cn_redirect=1
 * @method string getCertificatePublicKey() Obtain The public key of the certificate.
You can specify either `CloudCertId` or the public/private key. If both are specified, the private and public key parameters will be ignored. If you pass in only the public and private keys, the corresponding certificate will be uploaded to Tencent Cloud SSL Certificate Service, which will generate a `CloudCertId` for the certificate.
 * @method void setCertificatePublicKey(string $CertificatePublicKey) Set The public key of the certificate.
You can specify either `CloudCertId` or the public/private key. If both are specified, the private and public key parameters will be ignored. If you pass in only the public and private keys, the corresponding certificate will be uploaded to Tencent Cloud SSL Certificate Service, which will generate a `CloudCertId` for the certificate.
 * @method string getCertificatePrivateKey() Obtain The private key of the certificate.
You can specify either `CloudCertId` or the public/private key. If both are specified, the private and public key parameters will be ignored. If you pass in only the public and private keys, the corresponding certificate will be uploaded to Tencent Cloud SSL Certificate Service, which will generate a `CloudCertId` for the certificate.
 * @method void setCertificatePrivateKey(string $CertificatePrivateKey) Set The private key of the certificate.
You can specify either `CloudCertId` or the public/private key. If both are specified, the private and public key parameters will be ignored. If you pass in only the public and private keys, the corresponding certificate will be uploaded to Tencent Cloud SSL Certificate Service, which will generate a `CloudCertId` for the certificate.
 * @method string getCertificateAlias() Obtain The remarks for the certificate in Tencent Cloud SSL Certificate Service. This parameter will be ignored if `CloudCertId` is specified.
 * @method void setCertificateAlias(string $CertificateAlias) Set The remarks for the certificate in Tencent Cloud SSL Certificate Service. This parameter will be ignored if `CloudCertId` is specified.
 */
class ModifyLiveDomainCertBindingsRequest extends AbstractModel
{
    /**
     * @var array The playback domains to bind and whether to enable HTTPS for them.
If neither `CloudCertId` nor the public/private key is specified, and a domain is already bound with a certificate, this API will only update the HTTPS configuration of the domain and, if the certificate is a self-owned certificate, upload it to Tencent Cloud.
     */
    public $DomainInfos;

    /**
     * @var string The SSL certificate ID assigned by Tencent Cloud.
For details, see https://intl.cloud.tencent.com/document/api/400/41665?from_cn_redirect=1
     */
    public $CloudCertId;

    /**
     * @var string The public key of the certificate.
You can specify either `CloudCertId` or the public/private key. If both are specified, the private and public key parameters will be ignored. If you pass in only the public and private keys, the corresponding certificate will be uploaded to Tencent Cloud SSL Certificate Service, which will generate a `CloudCertId` for the certificate.
     */
    public $CertificatePublicKey;

    /**
     * @var string The private key of the certificate.
You can specify either `CloudCertId` or the public/private key. If both are specified, the private and public key parameters will be ignored. If you pass in only the public and private keys, the corresponding certificate will be uploaded to Tencent Cloud SSL Certificate Service, which will generate a `CloudCertId` for the certificate.
     */
    public $CertificatePrivateKey;

    /**
     * @var string The remarks for the certificate in Tencent Cloud SSL Certificate Service. This parameter will be ignored if `CloudCertId` is specified.
     */
    public $CertificateAlias;

    /**
     * @param array $DomainInfos The playback domains to bind and whether to enable HTTPS for them.
If neither `CloudCertId` nor the public/private key is specified, and a domain is already bound with a certificate, this API will only update the HTTPS configuration of the domain and, if the certificate is a self-owned certificate, upload it to Tencent Cloud.
     * @param string $CloudCertId The SSL certificate ID assigned by Tencent Cloud.
For details, see https://intl.cloud.tencent.com/document/api/400/41665?from_cn_redirect=1
     * @param string $CertificatePublicKey The public key of the certificate.
You can specify either `CloudCertId` or the public/private key. If both are specified, the private and public key parameters will be ignored. If you pass in only the public and private keys, the corresponding certificate will be uploaded to Tencent Cloud SSL Certificate Service, which will generate a `CloudCertId` for the certificate.
     * @param string $CertificatePrivateKey The private key of the certificate.
You can specify either `CloudCertId` or the public/private key. If both are specified, the private and public key parameters will be ignored. If you pass in only the public and private keys, the corresponding certificate will be uploaded to Tencent Cloud SSL Certificate Service, which will generate a `CloudCertId` for the certificate.
     * @param string $CertificateAlias The remarks for the certificate in Tencent Cloud SSL Certificate Service. This parameter will be ignored if `CloudCertId` is specified.
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
        if (array_key_exists("DomainInfos",$param) and $param["DomainInfos"] !== null) {
            $this->DomainInfos = [];
            foreach ($param["DomainInfos"] as $key => $value){
                $obj = new LiveCertDomainInfo();
                $obj->deserialize($value);
                array_push($this->DomainInfos, $obj);
            }
        }

        if (array_key_exists("CloudCertId",$param) and $param["CloudCertId"] !== null) {
            $this->CloudCertId = $param["CloudCertId"];
        }

        if (array_key_exists("CertificatePublicKey",$param) and $param["CertificatePublicKey"] !== null) {
            $this->CertificatePublicKey = $param["CertificatePublicKey"];
        }

        if (array_key_exists("CertificatePrivateKey",$param) and $param["CertificatePrivateKey"] !== null) {
            $this->CertificatePrivateKey = $param["CertificatePrivateKey"];
        }

        if (array_key_exists("CertificateAlias",$param) and $param["CertificateAlias"] !== null) {
            $this->CertificateAlias = $param["CertificateAlias"];
        }
    }
}
