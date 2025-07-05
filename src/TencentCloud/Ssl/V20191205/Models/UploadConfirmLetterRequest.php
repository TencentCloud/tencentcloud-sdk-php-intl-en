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
 * UploadConfirmLetter request structure.
 *
 * @method string getCertificateId() Obtain Certificate ID
 * @method void setCertificateId(string $CertificateId) Set Certificate ID
 * @method string getConfirmLetter() Obtain Base64-encoded confirmation letter file, which must be a JPG, JPEG, PNG, or PDF file of 1 KB to 1.4 MB
 * @method void setConfirmLetter(string $ConfirmLetter) Set Base64-encoded confirmation letter file, which must be a JPG, JPEG, PNG, or PDF file of 1 KB to 1.4 MB
 */
class UploadConfirmLetterRequest extends AbstractModel
{
    /**
     * @var string Certificate ID
     */
    public $CertificateId;

    /**
     * @var string Base64-encoded confirmation letter file, which must be a JPG, JPEG, PNG, or PDF file of 1 KB to 1.4 MB
     */
    public $ConfirmLetter;

    /**
     * @param string $CertificateId Certificate ID
     * @param string $ConfirmLetter Base64-encoded confirmation letter file, which must be a JPG, JPEG, PNG, or PDF file of 1 KB to 1.4 MB
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

        if (array_key_exists("ConfirmLetter",$param) and $param["ConfirmLetter"] !== null) {
            $this->ConfirmLetter = $param["ConfirmLetter"];
        }
    }
}
