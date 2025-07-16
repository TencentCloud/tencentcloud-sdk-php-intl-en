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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetDataKeyPlaintext request structure.
 *
 * @method string getDataKeyId() Obtain Unique id of a data key.
 * @method void setDataKeyId(string $DataKeyId) Set Unique id of a data key.
 * @method string getEncryptionPublicKey() Obtain PEM formatted public key string, supporting RSA2048 and SM2 public keys, and used to encrypt the plaintext value in the returned data. If it is empty, plaintext value will not be encrypted.
 * @method void setEncryptionPublicKey(string $EncryptionPublicKey) Set PEM formatted public key string, supporting RSA2048 and SM2 public keys, and used to encrypt the plaintext value in the returned data. If it is empty, plaintext value will not be encrypted.
 * @method string getEncryptionAlgorithm() Obtain Asymmetric encryption algorithm, used in conjunction with EncryptionPublicKey to encrypt the returned data. It currently supports SM2 (returns ciphertext in C1C3C2 format), SM2_C1C3C2_ASN1 (returns ciphertext in C1C3C2 ASN1 format), RSAES_PKCS1_V1_5, RSAES_OAEP_SHA_1, and RSAES_OAEP_SHA_256. If it is empty, the default value SM2 is used.
 * @method void setEncryptionAlgorithm(string $EncryptionAlgorithm) Set Asymmetric encryption algorithm, used in conjunction with EncryptionPublicKey to encrypt the returned data. It currently supports SM2 (returns ciphertext in C1C3C2 format), SM2_C1C3C2_ASN1 (returns ciphertext in C1C3C2 ASN1 format), RSAES_PKCS1_V1_5, RSAES_OAEP_SHA_1, and RSAES_OAEP_SHA_256. If it is empty, the default value SM2 is used.
 */
class GetDataKeyPlaintextRequest extends AbstractModel
{
    /**
     * @var string Unique id of a data key.
     */
    public $DataKeyId;

    /**
     * @var string PEM formatted public key string, supporting RSA2048 and SM2 public keys, and used to encrypt the plaintext value in the returned data. If it is empty, plaintext value will not be encrypted.
     */
    public $EncryptionPublicKey;

    /**
     * @var string Asymmetric encryption algorithm, used in conjunction with EncryptionPublicKey to encrypt the returned data. It currently supports SM2 (returns ciphertext in C1C3C2 format), SM2_C1C3C2_ASN1 (returns ciphertext in C1C3C2 ASN1 format), RSAES_PKCS1_V1_5, RSAES_OAEP_SHA_1, and RSAES_OAEP_SHA_256. If it is empty, the default value SM2 is used.
     */
    public $EncryptionAlgorithm;

    /**
     * @param string $DataKeyId Unique id of a data key.
     * @param string $EncryptionPublicKey PEM formatted public key string, supporting RSA2048 and SM2 public keys, and used to encrypt the plaintext value in the returned data. If it is empty, plaintext value will not be encrypted.
     * @param string $EncryptionAlgorithm Asymmetric encryption algorithm, used in conjunction with EncryptionPublicKey to encrypt the returned data. It currently supports SM2 (returns ciphertext in C1C3C2 format), SM2_C1C3C2_ASN1 (returns ciphertext in C1C3C2 ASN1 format), RSAES_PKCS1_V1_5, RSAES_OAEP_SHA_1, and RSAES_OAEP_SHA_256. If it is empty, the default value SM2 is used.
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
        if (array_key_exists("DataKeyId",$param) and $param["DataKeyId"] !== null) {
            $this->DataKeyId = $param["DataKeyId"];
        }

        if (array_key_exists("EncryptionPublicKey",$param) and $param["EncryptionPublicKey"] !== null) {
            $this->EncryptionPublicKey = $param["EncryptionPublicKey"];
        }

        if (array_key_exists("EncryptionAlgorithm",$param) and $param["EncryptionAlgorithm"] !== null) {
            $this->EncryptionAlgorithm = $param["EncryptionAlgorithm"];
        }
    }
}
