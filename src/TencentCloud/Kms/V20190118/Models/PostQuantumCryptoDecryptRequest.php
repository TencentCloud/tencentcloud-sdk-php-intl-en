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
 * PostQuantumCryptoDecrypt request structure.
 *
 * @method string getCiphertextBlob() Obtain The ciphertext data to be decrypted.
 * @method void setCiphertextBlob(string $CiphertextBlob) Set The ciphertext data to be decrypted.
 * @method string getEncryptionPublicKey() Obtain PEM-encoded public key (2048-bit RSA/SM2 key), which can be used to encrypt the `Plaintext` returned. If this field is left empty, the `Plaintext` will not be encrypted.
 * @method void setEncryptionPublicKey(string $EncryptionPublicKey) Set PEM-encoded public key (2048-bit RSA/SM2 key), which can be used to encrypt the `Plaintext` returned. If this field is left empty, the `Plaintext` will not be encrypted.
 * @method string getEncryptionAlgorithm() Obtain Asymmetric encryption algorithm. It is used in combination with `EncryptionPublicKey` to encrypt the returned data. Values: `SM2`(Return the ciphertext in the format of "C1C3C2"), `SM2_C1C3C2_ASN1` (Return the ciphertext in the format of "C1C3C2 ASN1"), `RSAES_PKCS1_V1_5`, `RSAES_OAEP_SHA_1`, `RSAES_OAEP_SHA_256`. It defaults to `SM2` if it's not specified. 
 * @method void setEncryptionAlgorithm(string $EncryptionAlgorithm) Set Asymmetric encryption algorithm. It is used in combination with `EncryptionPublicKey` to encrypt the returned data. Values: `SM2`(Return the ciphertext in the format of "C1C3C2"), `SM2_C1C3C2_ASN1` (Return the ciphertext in the format of "C1C3C2 ASN1"), `RSAES_PKCS1_V1_5`, `RSAES_OAEP_SHA_1`, `RSAES_OAEP_SHA_256`. It defaults to `SM2` if it's not specified. 
 */
class PostQuantumCryptoDecryptRequest extends AbstractModel
{
    /**
     * @var string The ciphertext data to be decrypted.
     */
    public $CiphertextBlob;

    /**
     * @var string PEM-encoded public key (2048-bit RSA/SM2 key), which can be used to encrypt the `Plaintext` returned. If this field is left empty, the `Plaintext` will not be encrypted.
     */
    public $EncryptionPublicKey;

    /**
     * @var string Asymmetric encryption algorithm. It is used in combination with `EncryptionPublicKey` to encrypt the returned data. Values: `SM2`(Return the ciphertext in the format of "C1C3C2"), `SM2_C1C3C2_ASN1` (Return the ciphertext in the format of "C1C3C2 ASN1"), `RSAES_PKCS1_V1_5`, `RSAES_OAEP_SHA_1`, `RSAES_OAEP_SHA_256`. It defaults to `SM2` if it's not specified. 
     */
    public $EncryptionAlgorithm;

    /**
     * @param string $CiphertextBlob The ciphertext data to be decrypted.
     * @param string $EncryptionPublicKey PEM-encoded public key (2048-bit RSA/SM2 key), which can be used to encrypt the `Plaintext` returned. If this field is left empty, the `Plaintext` will not be encrypted.
     * @param string $EncryptionAlgorithm Asymmetric encryption algorithm. It is used in combination with `EncryptionPublicKey` to encrypt the returned data. Values: `SM2`(Return the ciphertext in the format of "C1C3C2"), `SM2_C1C3C2_ASN1` (Return the ciphertext in the format of "C1C3C2 ASN1"), `RSAES_PKCS1_V1_5`, `RSAES_OAEP_SHA_1`, `RSAES_OAEP_SHA_256`. It defaults to `SM2` if it's not specified. 
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

        if (array_key_exists("EncryptionPublicKey",$param) and $param["EncryptionPublicKey"] !== null) {
            $this->EncryptionPublicKey = $param["EncryptionPublicKey"];
        }

        if (array_key_exists("EncryptionAlgorithm",$param) and $param["EncryptionAlgorithm"] !== null) {
            $this->EncryptionAlgorithm = $param["EncryptionAlgorithm"];
        }
    }
}
