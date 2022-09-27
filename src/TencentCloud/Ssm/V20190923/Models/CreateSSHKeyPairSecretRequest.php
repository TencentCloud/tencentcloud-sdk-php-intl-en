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
 * CreateSSHKeyPairSecret request structure.
 *
 * @method string getSecretName() Obtain Secret name, which must be unique in the same region. It can contain 128 bytes of letters, digits, hyphens and underscores and must begin with a letter or digit.
 * @method void setSecretName(string $SecretName) Set Secret name, which must be unique in the same region. It can contain 128 bytes of letters, digits, hyphens and underscores and must begin with a letter or digit.
 * @method integer getProjectId() Obtain ID of the project to which the created SSH key belongs.
 * @method void setProjectId(integer $ProjectId) Set ID of the project to which the created SSH key belongs.
 * @method string getDescription() Obtain Description, such as what it is used for. It contains up to 2,048 bytes.
 * @method void setDescription(string $Description) Set Description, such as what it is used for. It contains up to 2,048 bytes.
 * @method string getKmsKeyId() Obtain Specifies a KMS CMK to encrypt the secret.
If this parameter is left empty, the CMK created by Secrets Manager by default will be used for encryption.
You can also specify a custom KMS CMK created in the same region for encryption.
 * @method void setKmsKeyId(string $KmsKeyId) Set Specifies a KMS CMK to encrypt the secret.
If this parameter is left empty, the CMK created by Secrets Manager by default will be used for encryption.
You can also specify a custom KMS CMK created in the same region for encryption.
 * @method array getTags() Obtain List of tags.
 * @method void setTags(array $Tags) Set List of tags.
 * @method string getSSHKeyName() Obtain Name of the SSH key pair, which only contains digits, letters and underscores and must start with a digit or letter. The maximum length is 25 characters.
 * @method void setSSHKeyName(string $SSHKeyName) Set Name of the SSH key pair, which only contains digits, letters and underscores and must start with a digit or letter. The maximum length is 25 characters.
 */
class CreateSSHKeyPairSecretRequest extends AbstractModel
{
    /**
     * @var string Secret name, which must be unique in the same region. It can contain 128 bytes of letters, digits, hyphens and underscores and must begin with a letter or digit.
     */
    public $SecretName;

    /**
     * @var integer ID of the project to which the created SSH key belongs.
     */
    public $ProjectId;

    /**
     * @var string Description, such as what it is used for. It contains up to 2,048 bytes.
     */
    public $Description;

    /**
     * @var string Specifies a KMS CMK to encrypt the secret.
If this parameter is left empty, the CMK created by Secrets Manager by default will be used for encryption.
You can also specify a custom KMS CMK created in the same region for encryption.
     */
    public $KmsKeyId;

    /**
     * @var array List of tags.
     */
    public $Tags;

    /**
     * @var string Name of the SSH key pair, which only contains digits, letters and underscores and must start with a digit or letter. The maximum length is 25 characters.
     */
    public $SSHKeyName;

    /**
     * @param string $SecretName Secret name, which must be unique in the same region. It can contain 128 bytes of letters, digits, hyphens and underscores and must begin with a letter or digit.
     * @param integer $ProjectId ID of the project to which the created SSH key belongs.
     * @param string $Description Description, such as what it is used for. It contains up to 2,048 bytes.
     * @param string $KmsKeyId Specifies a KMS CMK to encrypt the secret.
If this parameter is left empty, the CMK created by Secrets Manager by default will be used for encryption.
You can also specify a custom KMS CMK created in the same region for encryption.
     * @param array $Tags List of tags.
     * @param string $SSHKeyName Name of the SSH key pair, which only contains digits, letters and underscores and must start with a digit or letter. The maximum length is 25 characters.
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("KmsKeyId",$param) and $param["KmsKeyId"] !== null) {
            $this->KmsKeyId = $param["KmsKeyId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("SSHKeyName",$param) and $param["SSHKeyName"] !== null) {
            $this->SSHKeyName = $param["SSHKeyName"];
        }
    }
}
