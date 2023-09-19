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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSecret request structure.
 *
 * @method string getSecretName() Obtain Secret name, which must be unique in the same region. It can contain 128 bytes ([a-z], [A-Z], [0-9], [-_]). It must begin with a letter or digit. Note that it cannot be modified once created. 
 * @method void setSecretName(string $SecretName) Set Secret name, which must be unique in the same region. It can contain 128 bytes ([a-z], [A-Z], [0-9], [-_]). It must begin with a letter or digit. Note that it cannot be modified once created. 
 * @method string getVersionId() Obtain Secret version. It can contain up to 64 bytes ([a-z], [A-Z], [0-9], [-_.]). It must begin with a letter or digit. `SecretName` and `VersionId` are used to query the Secret information. If it is left empty, the initial Secret version number is used by default.
 * @method void setVersionId(string $VersionId) Set Secret version. It can contain up to 64 bytes ([a-z], [A-Z], [0-9], [-_.]). It must begin with a letter or digit. `SecretName` and `VersionId` are used to query the Secret information. If it is left empty, the initial Secret version number is used by default.
 * @method string getDescription() Obtain Description information, such as the detailed use cases. It can be up to 2048 bytes.
 * @method void setDescription(string $Description) Set Description information, such as the detailed use cases. It can be up to 2048 bytes.
 * @method string getKmsKeyId() Obtain KMS CMK used for Secret encryption. If this parameter is left empty, SecretsManager will create a CMK by default. You can also specify a KMS CMK that is created in the same region.
 * @method void setKmsKeyId(string $KmsKeyId) Set KMS CMK used for Secret encryption. If this parameter is left empty, SecretsManager will create a CMK by default. You can also specify a KMS CMK that is created in the same region.
 * @method integer getSecretType() Obtain Secret type. It defaults to `custom`.
 * @method void setSecretType(integer $SecretType) Set Secret type. It defaults to `custom`.
 * @method string getSecretBinary() Obtain Base64-encoded plaintext of a binary Secret. Either `SecretBinary` or `SecretString` must be set. A maximum of 4096 bytes is supported.
 * @method void setSecretBinary(string $SecretBinary) Set Base64-encoded plaintext of a binary Secret. Either `SecretBinary` or `SecretString` must be set. A maximum of 4096 bytes is supported.
 * @method string getSecretString() Obtain Plaintext of a Secret, in text format. Base64 encoding is not required. Either `SecretBinary` or `SecretString` must be set. A maximum of 4096 bytes is supported.
 * @method void setSecretString(string $SecretString) Set Plaintext of a Secret, in text format. Base64 encoding is not required. Either `SecretBinary` or `SecretString` must be set. A maximum of 4096 bytes is supported.
 * @method string getAdditionalConfig() Obtain Additional configuration of the Secret in JSON format
 * @method void setAdditionalConfig(string $AdditionalConfig) Set Additional configuration of the Secret in JSON format
 * @method array getTags() Obtain List of tags.
 * @method void setTags(array $Tags) Set List of tags.
 */
class CreateSecretRequest extends AbstractModel
{
    /**
     * @var string Secret name, which must be unique in the same region. It can contain 128 bytes ([a-z], [A-Z], [0-9], [-_]). It must begin with a letter or digit. Note that it cannot be modified once created. 
     */
    public $SecretName;

    /**
     * @var string Secret version. It can contain up to 64 bytes ([a-z], [A-Z], [0-9], [-_.]). It must begin with a letter or digit. `SecretName` and `VersionId` are used to query the Secret information. If it is left empty, the initial Secret version number is used by default.
     */
    public $VersionId;

    /**
     * @var string Description information, such as the detailed use cases. It can be up to 2048 bytes.
     */
    public $Description;

    /**
     * @var string KMS CMK used for Secret encryption. If this parameter is left empty, SecretsManager will create a CMK by default. You can also specify a KMS CMK that is created in the same region.
     */
    public $KmsKeyId;

    /**
     * @var integer Secret type. It defaults to `custom`.
     */
    public $SecretType;

    /**
     * @var string Base64-encoded plaintext of a binary Secret. Either `SecretBinary` or `SecretString` must be set. A maximum of 4096 bytes is supported.
     */
    public $SecretBinary;

    /**
     * @var string Plaintext of a Secret, in text format. Base64 encoding is not required. Either `SecretBinary` or `SecretString` must be set. A maximum of 4096 bytes is supported.
     */
    public $SecretString;

    /**
     * @var string Additional configuration of the Secret in JSON format
     */
    public $AdditionalConfig;

    /**
     * @var array List of tags.
     */
    public $Tags;

    /**
     * @param string $SecretName Secret name, which must be unique in the same region. It can contain 128 bytes ([a-z], [A-Z], [0-9], [-_]). It must begin with a letter or digit. Note that it cannot be modified once created. 
     * @param string $VersionId Secret version. It can contain up to 64 bytes ([a-z], [A-Z], [0-9], [-_.]). It must begin with a letter or digit. `SecretName` and `VersionId` are used to query the Secret information. If it is left empty, the initial Secret version number is used by default.
     * @param string $Description Description information, such as the detailed use cases. It can be up to 2048 bytes.
     * @param string $KmsKeyId KMS CMK used for Secret encryption. If this parameter is left empty, SecretsManager will create a CMK by default. You can also specify a KMS CMK that is created in the same region.
     * @param integer $SecretType Secret type. It defaults to `custom`.
     * @param string $SecretBinary Base64-encoded plaintext of a binary Secret. Either `SecretBinary` or `SecretString` must be set. A maximum of 4096 bytes is supported.
     * @param string $SecretString Plaintext of a Secret, in text format. Base64 encoding is not required. Either `SecretBinary` or `SecretString` must be set. A maximum of 4096 bytes is supported.
     * @param string $AdditionalConfig Additional configuration of the Secret in JSON format
     * @param array $Tags List of tags.
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
        if (array_key_exists("SecretName",$param) and $param["SecretName"] !== null) {
            $this->SecretName = $param["SecretName"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("SecretType",$param) and $param["SecretType"] !== null) {
            $this->SecretType = $param["SecretType"];
        }

        if (array_key_exists("SecretBinary",$param) and $param["SecretBinary"] !== null) {
            $this->SecretBinary = $param["SecretBinary"];
        }

        if (array_key_exists("SecretString",$param) and $param["SecretString"] !== null) {
            $this->SecretString = $param["SecretString"];
        }

        if (array_key_exists("AdditionalConfig",$param) and $param["AdditionalConfig"] !== null) {
            $this->AdditionalConfig = $param["AdditionalConfig"];
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
