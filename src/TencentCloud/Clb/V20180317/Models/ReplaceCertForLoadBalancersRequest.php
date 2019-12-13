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
 * @method string getOldCertificateId() 获取ID of the certificate to be replaced, which can be a server certificate or a client certificate.
 * @method void setOldCertificateId(string $OldCertificateId) 设置ID of the certificate to be replaced, which can be a server certificate or a client certificate.
 * @method CertificateInput getCertificate() 获取Information such as the content of the new certificate
 * @method void setCertificate(CertificateInput $Certificate) 设置Information such as the content of the new certificate
 */

/**
 *ReplaceCertForLoadBalancers request structure.
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
     * 内部实现，用户禁止调用
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
