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
 * @method string getCertificateType() Obtain Certificate type. Valid values: `CA` (CA certificate) and `SVR` (server certificate). Default value: `SVR`
 * @method void setCertificateType(string $CertificateType) Set Certificate type. Valid values: `CA` (CA certificate) and `SVR` (server certificate). Default value: `SVR`
 * @method string getAlias() Obtain Alias
 * @method void setAlias(string $Alias) Set Alias
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getCertificateUse() Obtain Certificate Usage/Source, such as CLB, CDN, WAF, LIVE, DDOS.
 * @method void setCertificateUse(string $CertificateUse) Set Certificate Usage/Source, such as CLB, CDN, WAF, LIVE, DDOS.
 * @method array getTags() Obtain The list of tags.
 * @method void setTags(array $Tags) Set The list of tags.
 * @method boolean getRepeatable() Obtain Whether to allow duplicate upload of the same certificate, true: allow uploading certificates with the same fingerprint; false: do not allow uploading certificates with the same fingerprint. default value: true.
 * @method void setRepeatable(boolean $Repeatable) Set Whether to allow duplicate upload of the same certificate, true: allow uploading certificates with the same fingerprint; false: do not allow uploading certificates with the same fingerprint. default value: true.
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
     * @var string Certificate type. Valid values: `CA` (CA certificate) and `SVR` (server certificate). Default value: `SVR`
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
     * @var string Certificate Usage/Source, such as CLB, CDN, WAF, LIVE, DDOS.
     */
    public $CertificateUse;

    /**
     * @var array The list of tags.
     */
    public $Tags;

    /**
     * @var boolean Whether to allow duplicate upload of the same certificate, true: allow uploading certificates with the same fingerprint; false: do not allow uploading certificates with the same fingerprint. default value: true.
     */
    public $Repeatable;

    /**
     * @param string $CertificatePublicKey Public key of the certificate
     * @param string $CertificatePrivateKey Private key content. This parameter is required when the certificate type is SVR, and not required when the certificate type is CA.
     * @param string $CertificateType Certificate type. Valid values: `CA` (CA certificate) and `SVR` (server certificate). Default value: `SVR`
     * @param string $Alias Alias
     * @param integer $ProjectId Project ID
     * @param string $CertificateUse Certificate Usage/Source, such as CLB, CDN, WAF, LIVE, DDOS.
     * @param array $Tags The list of tags.
     * @param boolean $Repeatable Whether to allow duplicate upload of the same certificate, true: allow uploading certificates with the same fingerprint; false: do not allow uploading certificates with the same fingerprint. default value: true.
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tags();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Repeatable",$param) and $param["Repeatable"] !== null) {
            $this->Repeatable = $param["Repeatable"];
        }
    }
}
