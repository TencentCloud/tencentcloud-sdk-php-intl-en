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
 * @method string getAlias() Obtain <p>Alias that makes the key easier to identify and understand. It cannot be empty and must contain 1-60 alphanumeric characters, hyphens (-), or underscores (_), and start with a letter or digit. Aliases prefixed with kms- are reserved for cloud services. The alias must be unique.</p>
 * @method void setAlias(string $Alias) Set <p>Alias that makes the key easier to identify and understand. It cannot be empty and must contain 1-60 alphanumeric characters, hyphens (-), or underscores (_), and start with a letter or digit. Aliases prefixed with kms- are reserved for cloud services. The alias must be unique.</p>
 * @method string getDescription() Obtain <p>Description of the CMK. Maximum length: 1024 bytes.</p>
 * @method void setDescription(string $Description) Set <p>Description of the CMK. Maximum length: 1024 bytes.</p>
 * @method string getKeyUsage() Obtain <p>Specifies the purpose of the key. The default value is "ENCRYPT_DECRYPT", which indicates creating a symmetric encryption/decryption key. Other supported purposes: "ASYMMETRIC_DECRYPT_RSA_2048" indicates creating an RSA2048 asymmetric key for encryption/decryption; "ASYMMETRIC_DECRYPT_RSA_3072" indicates creating an RSA3072 asymmetric key for encryption/decryption; "ASYMMETRIC_DECRYPT_RSA_4096" indicates creating an RSA4096 asymmetric key for encryption/decryption; "ASYMMETRIC_DECRYPT_SM2" indicates creating an SM2 asymmetric key for encryption/decryption; "ASYMMETRIC_SIGN_VERIFY_SM2" indicates creating an SM2 asymmetric key for signature generation and verification; "ASYMMETRIC_SIGN_VERIFY_ECC" indicates creating an ECC asymmetric key for signature generation and verification; "ASYMMETRIC_SIGN_VERIFY_RSA_2048" indicates creating an RSA_2048 asymmetric key for signature generation and verification; "ASYMMETRIC_SIGN_VERIFY_RSA_3072" indicates creating an RSA_3072 asymmetric key for signature generation and verification; <br>"ASYMMETRIC_SIGN_VERIFY_RSA_4096" indicates creating an RSA_4096 asymmetric key for signature generation and verification; "ASYMMETRIC_SIGN_VERIFY_ECDSA384" indicates creating an ECDSA384 asymmetric key for signature generation and verification. For the complete list of key purposes and supported algorithms, call the ListAlgorithms API.</p>
 * @method void setKeyUsage(string $KeyUsage) Set <p>Specifies the purpose of the key. The default value is "ENCRYPT_DECRYPT", which indicates creating a symmetric encryption/decryption key. Other supported purposes: "ASYMMETRIC_DECRYPT_RSA_2048" indicates creating an RSA2048 asymmetric key for encryption/decryption; "ASYMMETRIC_DECRYPT_RSA_3072" indicates creating an RSA3072 asymmetric key for encryption/decryption; "ASYMMETRIC_DECRYPT_RSA_4096" indicates creating an RSA4096 asymmetric key for encryption/decryption; "ASYMMETRIC_DECRYPT_SM2" indicates creating an SM2 asymmetric key for encryption/decryption; "ASYMMETRIC_SIGN_VERIFY_SM2" indicates creating an SM2 asymmetric key for signature generation and verification; "ASYMMETRIC_SIGN_VERIFY_ECC" indicates creating an ECC asymmetric key for signature generation and verification; "ASYMMETRIC_SIGN_VERIFY_RSA_2048" indicates creating an RSA_2048 asymmetric key for signature generation and verification; "ASYMMETRIC_SIGN_VERIFY_RSA_3072" indicates creating an RSA_3072 asymmetric key for signature generation and verification; <br>"ASYMMETRIC_SIGN_VERIFY_RSA_4096" indicates creating an RSA_4096 asymmetric key for signature generation and verification; "ASYMMETRIC_SIGN_VERIFY_ECDSA384" indicates creating an ECDSA384 asymmetric key for signature generation and verification. For the complete list of key purposes and supported algorithms, call the ListAlgorithms API.</p>
 * @method integer getType() Obtain <p>Specifies the key type. The default value is 1. 1 indicates the default type, where the CMK is created by KMS. 2 indicates the EXTERNAL type, where you need to import the key material. For more information, see the GetParametersForImport and ImportKeyMaterial APIs.</p>
 * @method void setType(integer $Type) Set <p>Specifies the key type. The default value is 1. 1 indicates the default type, where the CMK is created by KMS. 2 indicates the EXTERNAL type, where you need to import the key material. For more information, see the GetParametersForImport and ImportKeyMaterial APIs.</p>
 * @method array getTags() Obtain <p>Tag list.</p>
 * @method void setTags(array $Tags) Set <p>Tag list.</p>
 * @method string getHsmClusterId() Obtain <p>HSM cluster ID corresponding to KMS Advanced Edition (valid only for KMS exclusive/managed service instances).</p>
 * @method void setHsmClusterId(string $HsmClusterId) Set <p>HSM cluster ID corresponding to KMS Advanced Edition (valid only for KMS exclusive/managed service instances).</p>
 */
class CreateKeyRequest extends AbstractModel
{
    /**
     * @var string <p>Alias that makes the key easier to identify and understand. It cannot be empty and must contain 1-60 alphanumeric characters, hyphens (-), or underscores (_), and start with a letter or digit. Aliases prefixed with kms- are reserved for cloud services. The alias must be unique.</p>
     */
    public $Alias;

    /**
     * @var string <p>Description of the CMK. Maximum length: 1024 bytes.</p>
     */
    public $Description;

    /**
     * @var string <p>Specifies the purpose of the key. The default value is "ENCRYPT_DECRYPT", which indicates creating a symmetric encryption/decryption key. Other supported purposes: "ASYMMETRIC_DECRYPT_RSA_2048" indicates creating an RSA2048 asymmetric key for encryption/decryption; "ASYMMETRIC_DECRYPT_RSA_3072" indicates creating an RSA3072 asymmetric key for encryption/decryption; "ASYMMETRIC_DECRYPT_RSA_4096" indicates creating an RSA4096 asymmetric key for encryption/decryption; "ASYMMETRIC_DECRYPT_SM2" indicates creating an SM2 asymmetric key for encryption/decryption; "ASYMMETRIC_SIGN_VERIFY_SM2" indicates creating an SM2 asymmetric key for signature generation and verification; "ASYMMETRIC_SIGN_VERIFY_ECC" indicates creating an ECC asymmetric key for signature generation and verification; "ASYMMETRIC_SIGN_VERIFY_RSA_2048" indicates creating an RSA_2048 asymmetric key for signature generation and verification; "ASYMMETRIC_SIGN_VERIFY_RSA_3072" indicates creating an RSA_3072 asymmetric key for signature generation and verification; <br>"ASYMMETRIC_SIGN_VERIFY_RSA_4096" indicates creating an RSA_4096 asymmetric key for signature generation and verification; "ASYMMETRIC_SIGN_VERIFY_ECDSA384" indicates creating an ECDSA384 asymmetric key for signature generation and verification. For the complete list of key purposes and supported algorithms, call the ListAlgorithms API.</p>
     */
    public $KeyUsage;

    /**
     * @var integer <p>Specifies the key type. The default value is 1. 1 indicates the default type, where the CMK is created by KMS. 2 indicates the EXTERNAL type, where you need to import the key material. For more information, see the GetParametersForImport and ImportKeyMaterial APIs.</p>
     */
    public $Type;

    /**
     * @var array <p>Tag list.</p>
     */
    public $Tags;

    /**
     * @var string <p>HSM cluster ID corresponding to KMS Advanced Edition (valid only for KMS exclusive/managed service instances).</p>
     */
    public $HsmClusterId;

    /**
     * @param string $Alias <p>Alias that makes the key easier to identify and understand. It cannot be empty and must contain 1-60 alphanumeric characters, hyphens (-), or underscores (_), and start with a letter or digit. Aliases prefixed with kms- are reserved for cloud services. The alias must be unique.</p>
     * @param string $Description <p>Description of the CMK. Maximum length: 1024 bytes.</p>
     * @param string $KeyUsage <p>Specifies the purpose of the key. The default value is "ENCRYPT_DECRYPT", which indicates creating a symmetric encryption/decryption key. Other supported purposes: "ASYMMETRIC_DECRYPT_RSA_2048" indicates creating an RSA2048 asymmetric key for encryption/decryption; "ASYMMETRIC_DECRYPT_RSA_3072" indicates creating an RSA3072 asymmetric key for encryption/decryption; "ASYMMETRIC_DECRYPT_RSA_4096" indicates creating an RSA4096 asymmetric key for encryption/decryption; "ASYMMETRIC_DECRYPT_SM2" indicates creating an SM2 asymmetric key for encryption/decryption; "ASYMMETRIC_SIGN_VERIFY_SM2" indicates creating an SM2 asymmetric key for signature generation and verification; "ASYMMETRIC_SIGN_VERIFY_ECC" indicates creating an ECC asymmetric key for signature generation and verification; "ASYMMETRIC_SIGN_VERIFY_RSA_2048" indicates creating an RSA_2048 asymmetric key for signature generation and verification; "ASYMMETRIC_SIGN_VERIFY_RSA_3072" indicates creating an RSA_3072 asymmetric key for signature generation and verification; <br>"ASYMMETRIC_SIGN_VERIFY_RSA_4096" indicates creating an RSA_4096 asymmetric key for signature generation and verification; "ASYMMETRIC_SIGN_VERIFY_ECDSA384" indicates creating an ECDSA384 asymmetric key for signature generation and verification. For the complete list of key purposes and supported algorithms, call the ListAlgorithms API.</p>
     * @param integer $Type <p>Specifies the key type. The default value is 1. 1 indicates the default type, where the CMK is created by KMS. 2 indicates the EXTERNAL type, where you need to import the key material. For more information, see the GetParametersForImport and ImportKeyMaterial APIs.</p>
     * @param array $Tags <p>Tag list.</p>
     * @param string $HsmClusterId <p>HSM cluster ID corresponding to KMS Advanced Edition (valid only for KMS exclusive/managed service instances).</p>
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
