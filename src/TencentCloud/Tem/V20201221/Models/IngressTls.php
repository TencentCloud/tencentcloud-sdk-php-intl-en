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
namespace TencentCloud\Tem\V20201221\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Ingress TLS configuration
 *
 * @method array getHosts() Obtain Host array. An empty array indicates the default certificate for all domain names.
 * @method void setHosts(array $Hosts) Set Host array. An empty array indicates the default certificate for all domain names.
 * @method string getSecretName() Obtain Secret name. If a certificate is used, this field is left empty.
 * @method void setSecretName(string $SecretName) Set Secret name. If a certificate is used, this field is left empty.
 * @method string getCertificateId() Obtain SSL Certificate Id
 * @method void setCertificateId(string $CertificateId) Set SSL Certificate Id
 */
class IngressTls extends AbstractModel
{
    /**
     * @var array Host array. An empty array indicates the default certificate for all domain names.
     */
    public $Hosts;

    /**
     * @var string Secret name. If a certificate is used, this field is left empty.
     */
    public $SecretName;

    /**
     * @var string SSL Certificate Id
     */
    public $CertificateId;

    /**
     * @param array $Hosts Host array. An empty array indicates the default certificate for all domain names.
     * @param string $SecretName Secret name. If a certificate is used, this field is left empty.
     * @param string $CertificateId SSL Certificate Id
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
        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = $param["Hosts"];
        }

        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }
    }
}
