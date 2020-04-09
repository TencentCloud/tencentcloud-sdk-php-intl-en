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
 * CreateLiveCert request structure.
 *
 * @method integer getCertType() Obtain Certificate type. 0: user-added certificate, 1: Tencent Cloud-hosted certificate.
Note: if the certificate type is 0, `HttpsCrt` and `HttpsKey` are required;
If the certificate type is 1, the certificate corresponding to `CloudCertId` will be used first. If `CloudCertId` is empty, `HttpsCrt` and `HttpsKey` will be used.
 * @method void setCertType(integer $CertType) Set Certificate type. 0: user-added certificate, 1: Tencent Cloud-hosted certificate.
Note: if the certificate type is 0, `HttpsCrt` and `HttpsKey` are required;
If the certificate type is 1, the certificate corresponding to `CloudCertId` will be used first. If `CloudCertId` is empty, `HttpsCrt` and `HttpsKey` will be used.
 * @method string getCertName() Obtain Certificate name.
 * @method void setCertName(string $CertName) Set Certificate name.
 * @method string getHttpsCrt() Obtain Certificate content, i.e., public key.
 * @method void setHttpsCrt(string $HttpsCrt) Set Certificate content, i.e., public key.
 * @method string getHttpsKey() Obtain Private key.
 * @method void setHttpsKey(string $HttpsKey) Set Private key.
 * @method string getDescription() Obtain Description.
 * @method void setDescription(string $Description) Set Description.
 * @method string getCloudCertId() Obtain Tencent Cloud-hosted certificate ID.
 * @method void setCloudCertId(string $CloudCertId) Set Tencent Cloud-hosted certificate ID.
 */
class CreateLiveCertRequest extends AbstractModel
{
    /**
     * @var integer Certificate type. 0: user-added certificate, 1: Tencent Cloud-hosted certificate.
Note: if the certificate type is 0, `HttpsCrt` and `HttpsKey` are required;
If the certificate type is 1, the certificate corresponding to `CloudCertId` will be used first. If `CloudCertId` is empty, `HttpsCrt` and `HttpsKey` will be used.
     */
    public $CertType;

    /**
     * @var string Certificate name.
     */
    public $CertName;

    /**
     * @var string Certificate content, i.e., public key.
     */
    public $HttpsCrt;

    /**
     * @var string Private key.
     */
    public $HttpsKey;

    /**
     * @var string Description.
     */
    public $Description;

    /**
     * @var string Tencent Cloud-hosted certificate ID.
     */
    public $CloudCertId;

    /**
     * @param integer $CertType Certificate type. 0: user-added certificate, 1: Tencent Cloud-hosted certificate.
Note: if the certificate type is 0, `HttpsCrt` and `HttpsKey` are required;
If the certificate type is 1, the certificate corresponding to `CloudCertId` will be used first. If `CloudCertId` is empty, `HttpsCrt` and `HttpsKey` will be used.
     * @param string $CertName Certificate name.
     * @param string $HttpsCrt Certificate content, i.e., public key.
     * @param string $HttpsKey Private key.
     * @param string $Description Description.
     * @param string $CloudCertId Tencent Cloud-hosted certificate ID.
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
        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("CertName",$param) and $param["CertName"] !== null) {
            $this->CertName = $param["CertName"];
        }

        if (array_key_exists("HttpsCrt",$param) and $param["HttpsCrt"] !== null) {
            $this->HttpsCrt = $param["HttpsCrt"];
        }

        if (array_key_exists("HttpsKey",$param) and $param["HttpsKey"] !== null) {
            $this->HttpsKey = $param["HttpsKey"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CloudCertId",$param) and $param["CloudCertId"] !== null) {
            $this->CloudCertId = $param["CloudCertId"];
        }
    }
}
