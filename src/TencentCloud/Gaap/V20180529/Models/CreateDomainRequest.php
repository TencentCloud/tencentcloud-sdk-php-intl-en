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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getListenerId() 获取Listener ID.
 * @method void setListenerId(string $ListenerId) 设置Listener ID.
 * @method string getDomain() 获取Domain name to be created. Each listener supports up to 100 domain names.
 * @method void setDomain(string $Domain) 设置Domain name to be created. Each listener supports up to 100 domain names.
 * @method string getCertificateId() 获取Server certificate, which is used for the HTTPS interaction between client and GAAP.
 * @method void setCertificateId(string $CertificateId) 设置Server certificate, which is used for the HTTPS interaction between client and GAAP.
 * @method string getClientCertificateId() 获取Client CA certificate, which is used for the HTTPS interaction between client and GAAP.
This field is required only when the mutual authentication method is adopted.
 * @method void setClientCertificateId(string $ClientCertificateId) 设置Client CA certificate, which is used for the HTTPS interaction between client and GAAP.
This field is required only when the mutual authentication method is adopted.
 * @method array getPolyClientCertificateIds() 获取Client CA certificate, which is used for the HTTPS interaction between the client and GAAP.
This field or the `ClientCertificateId` field is required for mutual authentication only.
 * @method void setPolyClientCertificateIds(array $PolyClientCertificateIds) 设置Client CA certificate, which is used for the HTTPS interaction between the client and GAAP.
This field or the `ClientCertificateId` field is required for mutual authentication only.
 */

/**
 *CreateDomain request structure.
 */
class CreateDomainRequest extends AbstractModel
{
    /**
     * @var string Listener ID.
     */
    public $ListenerId;

    /**
     * @var string Domain name to be created. Each listener supports up to 100 domain names.
     */
    public $Domain;

    /**
     * @var string Server certificate, which is used for the HTTPS interaction between client and GAAP.
     */
    public $CertificateId;

    /**
     * @var string Client CA certificate, which is used for the HTTPS interaction between client and GAAP.
This field is required only when the mutual authentication method is adopted.
     */
    public $ClientCertificateId;

    /**
     * @var array Client CA certificate, which is used for the HTTPS interaction between the client and GAAP.
This field or the `ClientCertificateId` field is required for mutual authentication only.
     */
    public $PolyClientCertificateIds;
    /**
     * @param string $ListenerId Listener ID.
     * @param string $Domain Domain name to be created. Each listener supports up to 100 domain names.
     * @param string $CertificateId Server certificate, which is used for the HTTPS interaction between client and GAAP.
     * @param string $ClientCertificateId Client CA certificate, which is used for the HTTPS interaction between client and GAAP.
This field is required only when the mutual authentication method is adopted.
     * @param array $PolyClientCertificateIds Client CA certificate, which is used for the HTTPS interaction between the client and GAAP.
This field or the `ClientCertificateId` field is required for mutual authentication only.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("ClientCertificateId",$param) and $param["ClientCertificateId"] !== null) {
            $this->ClientCertificateId = $param["ClientCertificateId"];
        }

        if (array_key_exists("PolyClientCertificateIds",$param) and $param["PolyClientCertificateIds"] !== null) {
            $this->PolyClientCertificateIds = $param["PolyClientCertificateIds"];
        }
    }
}
