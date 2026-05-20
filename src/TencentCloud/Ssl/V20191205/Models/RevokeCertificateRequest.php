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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RevokeCertificate request structure.
 *
 * @method string getCertificateId() Obtain Certificate ID.
 * @method void setCertificateId(string $CertificateId) Set Certificate ID.
 * @method string getReason() Obtain Reason to revoke certificate.
 * @method void setReason(string $Reason) Set Reason to revoke certificate.
 */
class RevokeCertificateRequest extends AbstractModel
{
    /**
     * @var string Certificate ID.
     */
    public $CertificateId;

    /**
     * @var string Reason to revoke certificate.
     */
    public $Reason;

    /**
     * @param string $CertificateId Certificate ID.
     * @param string $Reason Reason to revoke certificate.
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
        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
