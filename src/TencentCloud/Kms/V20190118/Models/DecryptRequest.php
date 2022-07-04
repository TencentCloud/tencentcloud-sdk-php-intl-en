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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Decrypt request structure.
 *
 * @method string getCiphertextBlob() Obtain The ciphertext data to be decrypted.
 * @method void setCiphertextBlob(string $CiphertextBlob) Set The ciphertext data to be decrypted.
 * @method string getEncryptionContext() Obtain JSON string of key-value pair. If this parameter is specified for `Encrypt`, the same parameter needs to be provided when the `Decrypt` API is called. The maximum length is 1,024 bytes.
 * @method void setEncryptionContext(string $EncryptionContext) Set JSON string of key-value pair. If this parameter is specified for `Encrypt`, the same parameter needs to be provided when the `Decrypt` API is called. The maximum length is 1,024 bytes.
 * @method string getEncryptionPublicKey() Obtain PEM-encoded public key (2048-bit RSA/SM2 key), which can be used to encrypt the `Plaintext` returned. If this field is left empty, the `Plaintext` will not be encrypted.
 * @method void setEncryptionPublicKey(string $EncryptionPublicKey) Set PEM-encoded public key (2048-bit RSA/SM2 key), which can be used to encrypt the `Plaintext` returned. If this field is left empty, the `Plaintext` will not be encrypted.
 * @method string getEncryptionAlgorithm() Obtain Asymmetric encryption algorithm. Valid values: `SM2` (C1C3C2 ciphertext is returned), `SM2_C1C3C2_ASN1` (C1C3C2 ASN1 ciphertext is returned), `RSAES_PKCS1_V1_5`, `RSAES_OAEP_SHA_1`, and `RSAES_OAEP_SHA_256`. This field is used in combination with `EncryptionPublicKey` for encryption. If it is left empty, an SM2 public key will be used by default.
 * @method void setEncryptionAlgorithm(string $EncryptionAlgorithm) Set Asymmetric encryption algorithm. Valid values: `SM2` (C1C3C2 ciphertext is returned), `SM2_C1C3C2_ASN1` (C1C3C2 ASN1 ciphertext is returned), `RSAES_PKCS1_V1_5`, `RSAES_OAEP_SHA_1`, and `RSAES_OAEP_SHA_256`. This field is used in combination with `EncryptionPublicKey` for encryption. If it is left empty, an SM2 public key will be used by default.
 */
class DecryptRequest extends AbstractModel
{
    /**
     * @var string The ciphertext data to be decrypted.
     */
    public $CiphertextBlob;

    /**
     * @var string JSON string of key-value pair. If this parameter is specified for `Encrypt`, the same parameter needs to be provided when the `Decrypt` API is called. The maximum length is 1,024 bytes.
     */
    public $EncryptionContext;

    /**
     * @var string PEM-encoded public key (2048-bit RSA/SM2 key), which can be used to encrypt the `Plaintext` returned. If this field is left empty, the `Plaintext` will not be encrypted.
     */
    public $EncryptionPublicKey;

    /**
     * @var string Asymmetric encryption algorithm. Valid values: `SM2` (C1C3C2 ciphertext is returned), `SM2_C1C3C2_ASN1` (C1C3C2 ASN1 ciphertext is returned), `RSAES_PKCS1_V1_5`, `RSAES_OAEP_SHA_1`, and `RSAES_OAEP_SHA_256`. This field is used in combination with `EncryptionPublicKey` for encryption. If it is left empty, an SM2 public key will be used by default.
     */
    public $EncryptionAlgorithm;

    /**
     * @param string $CiphertextBlob The ciphertext data to be decrypted.
     * @param string $EncryptionContext JSON string of key-value pair. If this parameter is specified for `Encrypt`, the same parameter needs to be provided when the `Decrypt` API is called. The maximum length is 1,024 bytes.
     * @param string $EncryptionPublicKey PEM-encoded public key (2048-bit RSA/SM2 key), which can be used to encrypt the `Plaintext` returned. If this field is left empty, the `Plaintext` will not be encrypted.
     * @param string $EncryptionAlgorithm Asymmetric encryption algorithm. Valid values: `SM2` (C1C3C2 ciphertext is returned), `SM2_C1C3C2_ASN1` (C1C3C2 ASN1 ciphertext is returned), `RSAES_PKCS1_V1_5`, `RSAES_OAEP_SHA_1`, and `RSAES_OAEP_SHA_256`. This field is used in combination with `EncryptionPublicKey` for encryption. If it is left empty, an SM2 public key will be used by default.
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
        if (array_key_exists("CiphertextBlob",$param) and $param["CiphertextBlob"] !== null) {
            $this->CiphertextBlob = $param["CiphertextBlob"];
        }

        if (array_key_exists("EncryptionContext",$param) and $param["EncryptionContext"] !== null) {
            $this->EncryptionContext = $param["EncryptionContext"];
        }

        if (array_key_exists("EncryptionPublicKey",$param) and $param["EncryptionPublicKey"] !== null) {
            $this->EncryptionPublicKey = $param["EncryptionPublicKey"];
        }

        if (array_key_exists("EncryptionAlgorithm",$param) and $param["EncryptionAlgorithm"] !== null) {
            $this->EncryptionAlgorithm = $param["EncryptionAlgorithm"];
        }
    }
}
