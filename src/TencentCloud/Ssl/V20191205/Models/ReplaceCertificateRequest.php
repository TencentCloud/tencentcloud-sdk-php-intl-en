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
 * ReplaceCertificate request structure.
 *
 * @method string getCertificateId() Obtain Certificate ID.
 * @method void setCertificateId(string $CertificateId) Set Certificate ID.
 * @method string getValidType() Obtain Verification type. DNS_AUTO: automatic DNS verification; DNS: manual DNS verification; FILE: verification by file.
 * @method void setValidType(string $ValidType) Set Verification type. DNS_AUTO: automatic DNS verification; DNS: manual DNS verification; FILE: verification by file.
 * @method string getCsrType() Obtain Type. Original: original certificate CSR; upload: uploaded manually; online: generated online. The default value is original.
 * @method void setCsrType(string $CsrType) Set Type. Original: original certificate CSR; upload: uploaded manually; online: generated online. The default value is original.
 * @method string getCsrContent() Obtain CSR content.
 * @method void setCsrContent(string $CsrContent) Set CSR content.
 * @method string getCsrkeyPassword() Obtain Password of the key.
 * @method void setCsrkeyPassword(string $CsrkeyPassword) Set Password of the key.
 */
class ReplaceCertificateRequest extends AbstractModel
{
    /**
     * @var string Certificate ID.
     */
    public $CertificateId;

    /**
     * @var string Verification type. DNS_AUTO: automatic DNS verification; DNS: manual DNS verification; FILE: verification by file.
     */
    public $ValidType;

    /**
     * @var string Type. Original: original certificate CSR; upload: uploaded manually; online: generated online. The default value is original.
     */
    public $CsrType;

    /**
     * @var string CSR content.
     */
    public $CsrContent;

    /**
     * @var string Password of the key.
     */
    public $CsrkeyPassword;

    /**
     * @param string $CertificateId Certificate ID.
     * @param string $ValidType Verification type. DNS_AUTO: automatic DNS verification; DNS: manual DNS verification; FILE: verification by file.
     * @param string $CsrType Type. Original: original certificate CSR; upload: uploaded manually; online: generated online. The default value is original.
     * @param string $CsrContent CSR content.
     * @param string $CsrkeyPassword Password of the key.
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

        if (array_key_exists("ValidType",$param) and $param["ValidType"] !== null) {
            $this->ValidType = $param["ValidType"];
        }

        if (array_key_exists("CsrType",$param) and $param["CsrType"] !== null) {
            $this->CsrType = $param["CsrType"];
        }

        if (array_key_exists("CsrContent",$param) and $param["CsrContent"] !== null) {
            $this->CsrContent = $param["CsrContent"];
        }

        if (array_key_exists("CsrkeyPassword",$param) and $param["CsrkeyPassword"] !== null) {
            $this->CsrkeyPassword = $param["CsrkeyPassword"];
        }
    }
}
