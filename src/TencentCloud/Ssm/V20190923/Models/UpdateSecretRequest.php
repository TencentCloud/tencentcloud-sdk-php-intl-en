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
 * UpdateSecret request structure.
 *
 * @method string getSecretName() Obtain Name of a Secret whose content is to be updated.
 * @method void setSecretName(string $SecretName) Set Name of a Secret whose content is to be updated.
 * @method string getVersionId() Obtain ID of the Secret version whose content is to be updated.
 * @method void setVersionId(string $VersionId) Set ID of the Secret version whose content is to be updated.
 * @method string getSecretBinary() Obtain This field should be used and Base64-encoded if the content of the new credential is binary.
Either `SecretBinary` or `SecretString` cannot be empty.
 * @method void setSecretBinary(string $SecretBinary) Set This field should be used and Base64-encoded if the content of the new credential is binary.
Either `SecretBinary` or `SecretString` cannot be empty.
 * @method string getSecretString() Obtain This field should be used without being Base64-encoded if the content of the new credential is text. Either `SecretBinary` or `SecretString` cannot be empty.
 * @method void setSecretString(string $SecretString) Set This field should be used without being Base64-encoded if the content of the new credential is text. Either `SecretBinary` or `SecretString` cannot be empty.
 */
class UpdateSecretRequest extends AbstractModel
{
    /**
     * @var string Name of a Secret whose content is to be updated.
     */
    public $SecretName;

    /**
     * @var string ID of the Secret version whose content is to be updated.
     */
    public $VersionId;

    /**
     * @var string This field should be used and Base64-encoded if the content of the new credential is binary.
Either `SecretBinary` or `SecretString` cannot be empty.
     */
    public $SecretBinary;

    /**
     * @var string This field should be used without being Base64-encoded if the content of the new credential is text. Either `SecretBinary` or `SecretString` cannot be empty.
     */
    public $SecretString;

    /**
     * @param string $SecretName Name of a Secret whose content is to be updated.
     * @param string $VersionId ID of the Secret version whose content is to be updated.
     * @param string $SecretBinary This field should be used and Base64-encoded if the content of the new credential is binary.
Either `SecretBinary` or `SecretString` cannot be empty.
     * @param string $SecretString This field should be used without being Base64-encoded if the content of the new credential is text. Either `SecretBinary` or `SecretString` cannot be empty.
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
