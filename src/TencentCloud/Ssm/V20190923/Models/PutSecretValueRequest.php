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
 * PutSecretValue request structure.
 *
 * @method string getSecretName() Obtain Name of a Secret where the version is added to.
 * @method void setSecretName(string $SecretName) Set Name of a Secret where the version is added to.
 * @method string getVersionId() Obtain ID of the new Secret version. It can be up to 64 bytes, contain letters, digits, hyphens (-), and underscores (_), and must begin with a letter or digit.
 * @method void setVersionId(string $VersionId) Set ID of the new Secret version. It can be up to 64 bytes, contain letters, digits, hyphens (-), and underscores (_), and must begin with a letter or digit.
 * @method string getSecretBinary() Obtain Base64-encoded binary credential information.
Either `SecretBinary` or `SecretString` must be set.
 * @method void setSecretBinary(string $SecretBinary) Set Base64-encoded binary credential information.
Either `SecretBinary` or `SecretString` must be set.
 * @method string getSecretString() Obtain Secret information plaintext in text format, base64 encoding is not needed. Either `SecretBinary` or `SecretString` must be set.
 * @method void setSecretString(string $SecretString) Set Secret information plaintext in text format, base64 encoding is not needed. Either `SecretBinary` or `SecretString` must be set.
 */
class PutSecretValueRequest extends AbstractModel
{
    /**
     * @var string Name of a Secret where the version is added to.
     */
    public $SecretName;

    /**
     * @var string ID of the new Secret version. It can be up to 64 bytes, contain letters, digits, hyphens (-), and underscores (_), and must begin with a letter or digit.
     */
    public $VersionId;

    /**
     * @var string Base64-encoded binary credential information.
Either `SecretBinary` or `SecretString` must be set.
     */
    public $SecretBinary;

    /**
     * @var string Secret information plaintext in text format, base64 encoding is not needed. Either `SecretBinary` or `SecretString` must be set.
     */
    public $SecretString;

    /**
     * @param string $SecretName Name of a Secret where the version is added to.
     * @param string $VersionId ID of the new Secret version. It can be up to 64 bytes, contain letters, digits, hyphens (-), and underscores (_), and must begin with a letter or digit.
     * @param string $SecretBinary Base64-encoded binary credential information.
Either `SecretBinary` or `SecretString` must be set.
     * @param string $SecretString Secret information plaintext in text format, base64 encoding is not needed. Either `SecretBinary` or `SecretString` must be set.
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

        if (array_key_exists("SecretBinary",$param) and $param["SecretBinary"] !== null) {
            $this->SecretBinary = $param["SecretBinary"];
        }

        if (array_key_exists("SecretString",$param) and $param["SecretString"] !== null) {
            $this->SecretString = $param["SecretString"];
        }
    }
}
