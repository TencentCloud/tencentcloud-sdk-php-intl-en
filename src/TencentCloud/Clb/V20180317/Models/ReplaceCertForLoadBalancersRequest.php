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
 * ReplaceCertForLoadBalancers request structure.
 *
 * @method string getOldCertificateId() Obtain ID of the certificate to be replaced, which can be a server certificate or a client certificate.
 * @method void setOldCertificateId(string $OldCertificateId) Set ID of the certificate to be replaced, which can be a server certificate or a client certificate.
 * @method CertificateInput getCertificate() Obtain Information such as the content of the new certificate
 * @method void setCertificate(CertificateInput $Certificate) Set Information such as the content of the new certificate
 */
class ReplaceCertForLoadBalancersRequest extends AbstractModel
{
    /**
     * @var string ID of the certificate to be replaced, which can be a server certificate or a client certificate.
     */
    public $OldCertificateId;

    /**
     * @var CertificateInput Information such as the content of the new certificate
     */
    public $Certificate;

    /**
     * @param string $OldCertificateId ID of the certificate to be replaced, which can be a server certificate or a client certificate.
     * @param CertificateInput $Certificate Information such as the content of the new certificate
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
        if (array_key_exists("OldCertificateId",$param) and $param["OldCertificateId"] !== null) {
            $this->OldCertificateId = $param["OldCertificateId"];
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new CertificateInput();
            $this->Certificate->deserialize($param["Certificate"]);
        }
    }
}
