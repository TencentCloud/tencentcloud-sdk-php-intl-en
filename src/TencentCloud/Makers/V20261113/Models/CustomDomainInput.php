<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Makers\V20261113\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Domain item for binding a custom domain
 *
 * @method string getDomain() Obtain <p>Domain name.</p>
 * @method void setDomain(string $Domain) Set <p>Domain name.</p>
 * @method string getCertificateId() Obtain <p>Certificate ID</p>
 * @method void setCertificateId(string $CertificateId) Set <p>Certificate ID</p>
 * @method string getStatus() Obtain <p>Verification status. Verify, Pass, Fail</p>
 * @method void setStatus(string $Status) Set <p>Verification status. Verify, Pass, Fail</p>
 * @method boolean getNoCertificate() Obtain <p>Whether not to apply for a certificate.</p>
 * @method void setNoCertificate(boolean $NoCertificate) Set <p>Whether not to apply for a certificate.</p>
 */
class CustomDomainInput extends AbstractModel
{
    /**
     * @var string <p>Domain name.</p>
     */
    public $Domain;

    /**
     * @var string <p>Certificate ID</p>
     */
    public $CertificateId;

    /**
     * @var string <p>Verification status. Verify, Pass, Fail</p>
     */
    public $Status;

    /**
     * @var boolean <p>Whether not to apply for a certificate.</p>
     */
    public $NoCertificate;

    /**
     * @param string $Domain <p>Domain name.</p>
     * @param string $CertificateId <p>Certificate ID</p>
     * @param string $Status <p>Verification status. Verify, Pass, Fail</p>
     * @param boolean $NoCertificate <p>Whether not to apply for a certificate.</p>
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

        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NoCertificate",$param) and $param["NoCertificate"] !== null) {
            $this->NoCertificate = $param["NoCertificate"];
        }
    }
}
