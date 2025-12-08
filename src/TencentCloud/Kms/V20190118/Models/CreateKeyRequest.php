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
 * CreateKey request structure.
 *
 * @method string getAlias() Obtain Unique alias that makes a key more recognizable and understandable. This parameter cannot be empty, can contain 1-60 letters, digits, `-`, and `_`, and must begin with a letter or digit. The `kms-` prefix is used for Tencent Cloud products.
 * @method void setAlias(string $Alias) Set Unique alias that makes a key more recognizable and understandable. This parameter cannot be empty, can contain 1-60 letters, digits, `-`, and `_`, and must begin with a letter or digit. The `kms-` prefix is used for Tencent Cloud products.
 * @method string getDescription() Obtain CMK description of up to 1,024 bytes in length
 * @method void setDescription(string $Description) Set CMK description of up to 1,024 bytes in length
 * @method string getKeyUsage() Obtain Specifies the key purpose, defaults to "ENCRYPT_DECRYPT" indicating the creation of a symmetric encryption/decryption key. other supported purposes include "ASYMMETRIC_DECRYPT_RSA_2048" for RSA2048 ASYMMETRIC keys used to ENCRYPT and DECRYPT, "ASYMMETRIC_DECRYPT_SM2" for SM2 ASYMMETRIC keys used to ENCRYPT and DECRYPT, "ASYMMETRIC_SIGN_VERIFY_SM2" for SM2 ASYMMETRIC keys used for signature verification, "ASYMMETRIC_SIGN_VERIFY_ECC" for ECC ASYMMETRIC keys used for signature verification, "ASYMMETRIC_SIGN_VERIFY_RSA_2048" for RSA_2048 ASYMMETRIC keys used for signature verification, and "ASYMMETRIC_SIGN_VERIFY_ECDSA384" for ECDSA384 ASYMMETRIC keys used for signature verification. the complete list of key purposes and algorithm support can be obtained through the ListAlgorithms api.
 * @method void setKeyUsage(string $KeyUsage) Set Specifies the key purpose, defaults to "ENCRYPT_DECRYPT" indicating the creation of a symmetric encryption/decryption key. other supported purposes include "ASYMMETRIC_DECRYPT_RSA_2048" for RSA2048 ASYMMETRIC keys used to ENCRYPT and DECRYPT, "ASYMMETRIC_DECRYPT_SM2" for SM2 ASYMMETRIC keys used to ENCRYPT and DECRYPT, "ASYMMETRIC_SIGN_VERIFY_SM2" for SM2 ASYMMETRIC keys used for signature verification, "ASYMMETRIC_SIGN_VERIFY_ECC" for ECC ASYMMETRIC keys used for signature verification, "ASYMMETRIC_SIGN_VERIFY_RSA_2048" for RSA_2048 ASYMMETRIC keys used for signature verification, and "ASYMMETRIC_SIGN_VERIFY_ECDSA384" for ECDSA384 ASYMMETRIC keys used for signature verification. the complete list of key purposes and algorithm support can be obtained through the ListAlgorithms api.
 * @method integer getType() Obtain Specifies the key type. Default value: 1. Valid value: 1 - default type, indicating that the CMK is created by KMS; 2 - EXTERNAL type, indicating that you need to import key material. For more information, please see the `GetParametersForImport` and `ImportKeyMaterial` API documents.
 * @method void setType(integer $Type) Set Specifies the key type. Default value: 1. Valid value: 1 - default type, indicating that the CMK is created by KMS; 2 - EXTERNAL type, indicating that you need to import key material. For more information, please see the `GetParametersForImport` and `ImportKeyMaterial` API documents.
 * @method array getTags() Obtain Tag list
 * @method void setTags(array $Tags) Set Tag list
 * @method string getHsmClusterId() Obtain ID of the HSM cluster. This field is only valid for Exclusive and Managed KMS instances.
 * @method void setHsmClusterId(string $HsmClusterId) Set ID of the HSM cluster. This field is only valid for Exclusive and Managed KMS instances.
 */
class CreateKeyRequest extends AbstractModel
{
    /**
     * @var string Unique alias that makes a key more recognizable and understandable. This parameter cannot be empty, can contain 1-60 letters, digits, `-`, and `_`, and must begin with a letter or digit. The `kms-` prefix is used for Tencent Cloud products.
     */
    public $Alias;

    /**
     * @var string CMK description of up to 1,024 bytes in length
     */
    public $Description;

    /**
     * @var string Specifies the key purpose, defaults to "ENCRYPT_DECRYPT" indicating the creation of a symmetric encryption/decryption key. other supported purposes include "ASYMMETRIC_DECRYPT_RSA_2048" for RSA2048 ASYMMETRIC keys used to ENCRYPT and DECRYPT, "ASYMMETRIC_DECRYPT_SM2" for SM2 ASYMMETRIC keys used to ENCRYPT and DECRYPT, "ASYMMETRIC_SIGN_VERIFY_SM2" for SM2 ASYMMETRIC keys used for signature verification, "ASYMMETRIC_SIGN_VERIFY_ECC" for ECC ASYMMETRIC keys used for signature verification, "ASYMMETRIC_SIGN_VERIFY_RSA_2048" for RSA_2048 ASYMMETRIC keys used for signature verification, and "ASYMMETRIC_SIGN_VERIFY_ECDSA384" for ECDSA384 ASYMMETRIC keys used for signature verification. the complete list of key purposes and algorithm support can be obtained through the ListAlgorithms api.
     */
    public $KeyUsage;

    /**
     * @var integer Specifies the key type. Default value: 1. Valid value: 1 - default type, indicating that the CMK is created by KMS; 2 - EXTERNAL type, indicating that you need to import key material. For more information, please see the `GetParametersForImport` and `ImportKeyMaterial` API documents.
     */
    public $Type;

    /**
     * @var array Tag list
     */
    public $Tags;

    /**
     * @var string ID of the HSM cluster. This field is only valid for Exclusive and Managed KMS instances.
     */
    public $HsmClusterId;

    /**
     * @param string $Alias Unique alias that makes a key more recognizable and understandable. This parameter cannot be empty, can contain 1-60 letters, digits, `-`, and `_`, and must begin with a letter or digit. The `kms-` prefix is used for Tencent Cloud products.
     * @param string $Description CMK description of up to 1,024 bytes in length
     * @param string $KeyUsage Specifies the key purpose, defaults to "ENCRYPT_DECRYPT" indicating the creation of a symmetric encryption/decryption key. other supported purposes include "ASYMMETRIC_DECRYPT_RSA_2048" for RSA2048 ASYMMETRIC keys used to ENCRYPT and DECRYPT, "ASYMMETRIC_DECRYPT_SM2" for SM2 ASYMMETRIC keys used to ENCRYPT and DECRYPT, "ASYMMETRIC_SIGN_VERIFY_SM2" for SM2 ASYMMETRIC keys used for signature verification, "ASYMMETRIC_SIGN_VERIFY_ECC" for ECC ASYMMETRIC keys used for signature verification, "ASYMMETRIC_SIGN_VERIFY_RSA_2048" for RSA_2048 ASYMMETRIC keys used for signature verification, and "ASYMMETRIC_SIGN_VERIFY_ECDSA384" for ECDSA384 ASYMMETRIC keys used for signature verification. the complete list of key purposes and algorithm support can be obtained through the ListAlgorithms api.
     * @param integer $Type Specifies the key type. Default value: 1. Valid value: 1 - default type, indicating that the CMK is created by KMS; 2 - EXTERNAL type, indicating that you need to import key material. For more information, please see the `GetParametersForImport` and `ImportKeyMaterial` API documents.
     * @param array $Tags Tag list
     * @param string $HsmClusterId ID of the HSM cluster. This field is only valid for Exclusive and Managed KMS instances.
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
        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("KeyUsage",$param) and $param["KeyUsage"] !== null) {
            $this->KeyUsage = $param["KeyUsage"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("HsmClusterId",$param) and $param["HsmClusterId"] !== null) {
            $this->HsmClusterId = $param["HsmClusterId"];
        }
    }
}
