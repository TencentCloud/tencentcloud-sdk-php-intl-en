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
 * @method string getCertificateId() Obtain Certificate ID
 * @method void setCertificateId(string $CertificateId) Set Certificate ID
 * @method string getValidType() Obtain Validation type. `DNS_AUTO`: automatic DNS validation; `DNS`: manual DNS validation; `FILE`: file validation
 * @method void setValidType(string $ValidType) Set Validation type. `DNS_AUTO`: automatic DNS validation; `DNS`: manual DNS validation; `FILE`: file validation
 * @method string getCsrType() Obtain Type. `Original`: original certificate CSR; `Upload`: uploaded manually; `Online`: generated online. The default value is original.
 * @method void setCsrType(string $CsrType) Set Type. `Original`: original certificate CSR; `Upload`: uploaded manually; `Online`: generated online. The default value is original.
 * @method string getCsrContent() Obtain CSR content, required when uploading manually.
 * @method void setCsrContent(string $CsrContent) Set CSR content, required when uploading manually.
 * @method string getCsrkeyPassword() Obtain Password of the key
 * @method void setCsrkeyPassword(string $CsrkeyPassword) Set Password of the key
 * @method string getReason() Obtain Reissue reason
 * @method void setReason(string $Reason) Set Reissue reason
 * @method string getCertCSREncryptAlgo() Obtain The CSR encryption algorithm. Valid values: `RSA` (default), `ECC1`, and `SM2`.
This parameter is available for selection only when the value of `CsrType` is `Online`.
 * @method void setCertCSREncryptAlgo(string $CertCSREncryptAlgo) Set The CSR encryption algorithm. Valid values: `RSA` (default), `ECC1`, and `SM2`.
This parameter is available for selection only when the value of `CsrType` is `Online`.
 * @method string getCertCSRKeyParameter() Obtain The CSR encryption parameters. When `CsrEncryptAlgo` is set to `RSA`, `2048` (default) and `4096` are available for selection; and when`CsrEncryptAlgo` is set to `ECC`, `prime256v1` (default) and `secp384r1` are available for selection. 
 * @method void setCertCSRKeyParameter(string $CertCSRKeyParameter) Set The CSR encryption parameters. When `CsrEncryptAlgo` is set to `RSA`, `2048` (default) and `4096` are available for selection; and when`CsrEncryptAlgo` is set to `ECC`, `prime256v1` (default) and `secp384r1` are available for selection. 
 */
class ReplaceCertificateRequest extends AbstractModel
{
    /**
     * @var string Certificate ID
     */
    public $CertificateId;

    /**
     * @var string Validation type. `DNS_AUTO`: automatic DNS validation; `DNS`: manual DNS validation; `FILE`: file validation
     */
    public $ValidType;

    /**
     * @var string Type. `Original`: original certificate CSR; `Upload`: uploaded manually; `Online`: generated online. The default value is original.
     */
    public $CsrType;

    /**
     * @var string CSR content, required when uploading manually.
     */
    public $CsrContent;

    /**
     * @var string Password of the key
     */
    public $CsrkeyPassword;

    /**
     * @var string Reissue reason
     */
    public $Reason;

    /**
     * @var string The CSR encryption algorithm. Valid values: `RSA` (default), `ECC1`, and `SM2`.
This parameter is available for selection only when the value of `CsrType` is `Online`.
     */
    public $CertCSREncryptAlgo;

    /**
     * @var string The CSR encryption parameters. When `CsrEncryptAlgo` is set to `RSA`, `2048` (default) and `4096` are available for selection; and when`CsrEncryptAlgo` is set to `ECC`, `prime256v1` (default) and `secp384r1` are available for selection. 
     */
    public $CertCSRKeyParameter;

    /**
     * @param string $CertificateId Certificate ID
     * @param string $ValidType Validation type. `DNS_AUTO`: automatic DNS validation; `DNS`: manual DNS validation; `FILE`: file validation
     * @param string $CsrType Type. `Original`: original certificate CSR; `Upload`: uploaded manually; `Online`: generated online. The default value is original.
     * @param string $CsrContent CSR content, required when uploading manually.
     * @param string $CsrkeyPassword Password of the key
     * @param string $Reason Reissue reason
     * @param string $CertCSREncryptAlgo The CSR encryption algorithm. Valid values: `RSA` (default), `ECC1`, and `SM2`.
This parameter is available for selection only when the value of `CsrType` is `Online`.
     * @param string $CertCSRKeyParameter The CSR encryption parameters. When `CsrEncryptAlgo` is set to `RSA`, `2048` (default) and `4096` are available for selection; and when`CsrEncryptAlgo` is set to `ECC`, `prime256v1` (default) and `secp384r1` are available for selection. 
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

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("CertCSREncryptAlgo",$param) and $param["CertCSREncryptAlgo"] !== null) {
            $this->CertCSREncryptAlgo = $param["CertCSREncryptAlgo"];
        }

        if (array_key_exists("CertCSRKeyParameter",$param) and $param["CertCSRKeyParameter"] !== null) {
            $this->CertCSRKeyParameter = $param["CertCSRKeyParameter"];
        }
    }
}
