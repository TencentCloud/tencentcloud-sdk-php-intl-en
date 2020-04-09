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
 * ModifyCertificate request structure.
 *
 * @method string getListenerId() Obtain Listener instance ID
 * @method void setListenerId(string $ListenerId) Set Listener instance ID
 * @method string getDomain() Obtain Domain name whose certificate needs to be modified
 * @method void setDomain(string $Domain) Set Domain name whose certificate needs to be modified
 * @method string getCertificateId() Obtain New server certificate ID:
If CertificateId=default, using the listener certificate.
 * @method void setCertificateId(string $CertificateId) Set New server certificate ID:
If CertificateId=default, using the listener certificate.
 * @method string getClientCertificateId() Obtain New client certificate ID:
If ClientCertificateId=default, using the listener certificate.
This parameter is required only when the mutual authentication is adopted.
 * @method void setClientCertificateId(string $ClientCertificateId) Set New client certificate ID:
If ClientCertificateId=default, using the listener certificate.
This parameter is required only when the mutual authentication is adopted.
 * @method array getPolyClientCertificateIds() Obtain List of new IDs of multiple client certificates, where:
This parameter or the `ClientCertificateId` parameter is required for mutual authentication only.
 * @method void setPolyClientCertificateIds(array $PolyClientCertificateIds) Set List of new IDs of multiple client certificates, where:
This parameter or the `ClientCertificateId` parameter is required for mutual authentication only.
 */
class ModifyCertificateRequest extends AbstractModel
{
    /**
     * @var string Listener instance ID
     */
    public $ListenerId;

    /**
     * @var string Domain name whose certificate needs to be modified
     */
    public $Domain;

    /**
     * @var string New server certificate ID:
If CertificateId=default, using the listener certificate.
     */
    public $CertificateId;

    /**
     * @var string New client certificate ID:
If ClientCertificateId=default, using the listener certificate.
This parameter is required only when the mutual authentication is adopted.
     */
    public $ClientCertificateId;

    /**
     * @var array List of new IDs of multiple client certificates, where:
This parameter or the `ClientCertificateId` parameter is required for mutual authentication only.
     */
    public $PolyClientCertificateIds;

    /**
     * @param string $ListenerId Listener instance ID
     * @param string $Domain Domain name whose certificate needs to be modified
     * @param string $CertificateId New server certificate ID:
If CertificateId=default, using the listener certificate.
     * @param string $ClientCertificateId New client certificate ID:
If ClientCertificateId=default, using the listener certificate.
This parameter is required only when the mutual authentication is adopted.
     * @param array $PolyClientCertificateIds List of new IDs of multiple client certificates, where:
This parameter or the `ClientCertificateId` parameter is required for mutual authentication only.
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
