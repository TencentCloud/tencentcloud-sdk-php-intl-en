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
 * GenerateDataKey request structure.
 *
 * @method string getKeyId() Obtain Globally unique CMK ID
 * @method void setKeyId(string $KeyId) Set Globally unique CMK ID
 * @method string getKeySpec() Obtain Specifies the encryption algorithm and size of the `DataKey`. Valid values: AES_128, AES_256. Either `KeySpec` or `NumberOfBytes` must be specified.
 * @method void setKeySpec(string $KeySpec) Set Specifies the encryption algorithm and size of the `DataKey`. Valid values: AES_128, AES_256. Either `KeySpec` or `NumberOfBytes` must be specified.
 * @method integer getNumberOfBytes() Obtain Length of the `DataKey`. If both `NumberOfBytes` and `KeySpec` are specified, `NumberOfBytes` will prevail. Minimum value: 1; maximum value: 1024. Either `KeySpec` or `NumberOfBytes` must be specified.
 * @method void setNumberOfBytes(integer $NumberOfBytes) Set Length of the `DataKey`. If both `NumberOfBytes` and `KeySpec` are specified, `NumberOfBytes` will prevail. Minimum value: 1; maximum value: 1024. Either `KeySpec` or `NumberOfBytes` must be specified.
 * @method string getEncryptionContext() Obtain JSON string of key-value pair. If this field is used, the same string should be entered when the returned `DataKey` is decrypted.
 * @method void setEncryptionContext(string $EncryptionContext) Set JSON string of key-value pair. If this field is used, the same string should be entered when the returned `DataKey` is decrypted.
 * @method string getEncryptionPublicKey() Obtain PEM-encoded public key (2048-bit RSA/SM2 key), which can be used to encrypt the `Plaintext` returned. If this field is left empty, the `Plaintext` will not be encrypted.
 * @method void setEncryptionPublicKey(string $EncryptionPublicKey) Set PEM-encoded public key (2048-bit RSA/SM2 key), which can be used to encrypt the `Plaintext` returned. If this field is left empty, the `Plaintext` will not be encrypted.
 * @method string getEncryptionAlgorithm() Obtain Asymmetric encryption algorithm. Valid values: `SM2` (C1C3C2 ciphertext is returned)`, `SM2_C1C3C2_ASN1` (C1C3C2 ASN1 ciphertext is returned), `RSAES_PKCS1_V1_5`, `RSAES_OAEP_SHA_1`, and `RSAES_OAEP_SHA_256`. This field is used in combination with `EncryptionPublicKey` for encryption. If it is left empty, an SM2 public key will be used by default.
 * @method void setEncryptionAlgorithm(string $EncryptionAlgorithm) Set Asymmetric encryption algorithm. Valid values: `SM2` (C1C3C2 ciphertext is returned)`, `SM2_C1C3C2_ASN1` (C1C3C2 ASN1 ciphertext is returned), `RSAES_PKCS1_V1_5`, `RSAES_OAEP_SHA_1`, and `RSAES_OAEP_SHA_256`. This field is used in combination with `EncryptionPublicKey` for encryption. If it is left empty, an SM2 public key will be used by default.
 * @method integer getIsHostedByKms() Obtain Indicates whether the data generated key is managed by KMS. 1 means the key is managed and saved by KMS. 0 means the key is not managed by KMS.
 * @method void setIsHostedByKms(integer $IsHostedByKms) Set Indicates whether the data generated key is managed by KMS. 1 means the key is managed and saved by KMS. 0 means the key is not managed by KMS.
 * @method string getDataKeyName() Obtain Name of the data key. required when IsHostedByKms is 1. optional when IsHostedByKms is 0 as KMS does not manage it.
 * @method void setDataKeyName(string $DataKeyName) Set Name of the data key. required when IsHostedByKms is 1. optional when IsHostedByKms is 0 as KMS does not manage it.
 * @method string getDescription() Obtain Describes the data key. maximum 100 bytes.
 * @method void setDescription(string $Description) Set Describes the data key. maximum 100 bytes.
 * @method string getHsmClusterId() Obtain HSM cluster ID corresponding to the KMS exclusive edition. if HsmClusterId is specified, it indicates the root key is in this cluster and verifies whether KeyId corresponds to HsmClusterId.
 * @method void setHsmClusterId(string $HsmClusterId) Set HSM cluster ID corresponding to the KMS exclusive edition. if HsmClusterId is specified, it indicates the root key is in this cluster and verifies whether KeyId corresponds to HsmClusterId.
 * @method array getTags() Obtain Tag list. valid at that time when parameter IsHostedByKms=1 and the data key is hosted by kms.
 * @method void setTags(array $Tags) Set Tag list. valid at that time when parameter IsHostedByKms=1 and the data key is hosted by kms.
 */
class GenerateDataKeyRequest extends AbstractModel
{
    /**
     * @var string Globally unique CMK ID
     */
    public $KeyId;

    /**
     * @var string Specifies the encryption algorithm and size of the `DataKey`. Valid values: AES_128, AES_256. Either `KeySpec` or `NumberOfBytes` must be specified.
     */
    public $KeySpec;

    /**
     * @var integer Length of the `DataKey`. If both `NumberOfBytes` and `KeySpec` are specified, `NumberOfBytes` will prevail. Minimum value: 1; maximum value: 1024. Either `KeySpec` or `NumberOfBytes` must be specified.
     */
    public $NumberOfBytes;

    /**
     * @var string JSON string of key-value pair. If this field is used, the same string should be entered when the returned `DataKey` is decrypted.
     */
    public $EncryptionContext;

    /**
     * @var string PEM-encoded public key (2048-bit RSA/SM2 key), which can be used to encrypt the `Plaintext` returned. If this field is left empty, the `Plaintext` will not be encrypted.
     */
    public $EncryptionPublicKey;

    /**
     * @var string Asymmetric encryption algorithm. Valid values: `SM2` (C1C3C2 ciphertext is returned)`, `SM2_C1C3C2_ASN1` (C1C3C2 ASN1 ciphertext is returned), `RSAES_PKCS1_V1_5`, `RSAES_OAEP_SHA_1`, and `RSAES_OAEP_SHA_256`. This field is used in combination with `EncryptionPublicKey` for encryption. If it is left empty, an SM2 public key will be used by default.
     */
    public $EncryptionAlgorithm;

    /**
     * @var integer Indicates whether the data generated key is managed by KMS. 1 means the key is managed and saved by KMS. 0 means the key is not managed by KMS.
     */
    public $IsHostedByKms;

    /**
     * @var string Name of the data key. required when IsHostedByKms is 1. optional when IsHostedByKms is 0 as KMS does not manage it.
     */
    public $DataKeyName;

    /**
     * @var string Describes the data key. maximum 100 bytes.
     */
    public $Description;

    /**
     * @var string HSM cluster ID corresponding to the KMS exclusive edition. if HsmClusterId is specified, it indicates the root key is in this cluster and verifies whether KeyId corresponds to HsmClusterId.
     */
    public $HsmClusterId;

    /**
     * @var array Tag list. valid at that time when parameter IsHostedByKms=1 and the data key is hosted by kms.
     */
    public $Tags;

    /**
     * @param string $KeyId Globally unique CMK ID
     * @param string $KeySpec Specifies the encryption algorithm and size of the `DataKey`. Valid values: AES_128, AES_256. Either `KeySpec` or `NumberOfBytes` must be specified.
     * @param integer $NumberOfBytes Length of the `DataKey`. If both `NumberOfBytes` and `KeySpec` are specified, `NumberOfBytes` will prevail. Minimum value: 1; maximum value: 1024. Either `KeySpec` or `NumberOfBytes` must be specified.
     * @param string $EncryptionContext JSON string of key-value pair. If this field is used, the same string should be entered when the returned `DataKey` is decrypted.
     * @param string $EncryptionPublicKey PEM-encoded public key (2048-bit RSA/SM2 key), which can be used to encrypt the `Plaintext` returned. If this field is left empty, the `Plaintext` will not be encrypted.
     * @param string $EncryptionAlgorithm Asymmetric encryption algorithm. Valid values: `SM2` (C1C3C2 ciphertext is returned)`, `SM2_C1C3C2_ASN1` (C1C3C2 ASN1 ciphertext is returned), `RSAES_PKCS1_V1_5`, `RSAES_OAEP_SHA_1`, and `RSAES_OAEP_SHA_256`. This field is used in combination with `EncryptionPublicKey` for encryption. If it is left empty, an SM2 public key will be used by default.
     * @param integer $IsHostedByKms Indicates whether the data generated key is managed by KMS. 1 means the key is managed and saved by KMS. 0 means the key is not managed by KMS.
     * @param string $DataKeyName Name of the data key. required when IsHostedByKms is 1. optional when IsHostedByKms is 0 as KMS does not manage it.
     * @param string $Description Describes the data key. maximum 100 bytes.
     * @param string $HsmClusterId HSM cluster ID corresponding to the KMS exclusive edition. if HsmClusterId is specified, it indicates the root key is in this cluster and verifies whether KeyId corresponds to HsmClusterId.
     * @param array $Tags Tag list. valid at that time when parameter IsHostedByKms=1 and the data key is hosted by kms.
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("KeySpec",$param) and $param["KeySpec"] !== null) {
            $this->KeySpec = $param["KeySpec"];
        }

        if (array_key_exists("NumberOfBytes",$param) and $param["NumberOfBytes"] !== null) {
            $this->NumberOfBytes = $param["NumberOfBytes"];
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

        if (array_key_exists("IsHostedByKms",$param) and $param["IsHostedByKms"] !== null) {
            $this->IsHostedByKms = $param["IsHostedByKms"];
        }

        if (array_key_exists("DataKeyName",$param) and $param["DataKeyName"] !== null) {
            $this->DataKeyName = $param["DataKeyName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("HsmClusterId",$param) and $param["HsmClusterId"] !== null) {
            $this->HsmClusterId = $param["HsmClusterId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
