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
 * GetSecretValue response structure.
 *
 * @method string getSecretName() Obtain Name of the Secret.
 * @method void setSecretName(string $SecretName) Set Name of the Secret.
 * @method string getVersionId() Obtain ID of the Secret version.
 * @method void setVersionId(string $VersionId) Set ID of the Secret version.
 * @method string getSecretBinary() Obtain If the `SecretBinary` field in the request body is specified in the `CreateSecret` call, this field is returned and base64-encoded. The caller needs to perform base64 decoding to obtain the original data. Either `SecretBinary` or `SecretString` will be returned.
 * @method void setSecretBinary(string $SecretBinary) Set If the `SecretBinary` field in the request body is specified in the `CreateSecret` call, this field is returned and base64-encoded. The caller needs to perform base64 decoding to obtain the original data. Either `SecretBinary` or `SecretString` will be returned.
 * @method string getSecretString() Obtain If the `SecretString` field in the request body is specified in the `CreateSecret` call, this field is returned. Either `SecretBinary` or `SecretString` will be returned.
 * @method void setSecretString(string $SecretString) Set If the `SecretString` field in the request body is specified in the `CreateSecret` call, this field is returned. Either `SecretBinary` or `SecretString` will be returned.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class GetSecretValueResponse extends AbstractModel
{
    /**
     * @var string Name of the Secret.
     */
    public $SecretName;

    /**
     * @var string ID of the Secret version.
     */
    public $VersionId;

    /**
     * @var string If the `SecretBinary` field in the request body is specified in the `CreateSecret` call, this field is returned and base64-encoded. The caller needs to perform base64 decoding to obtain the original data. Either `SecretBinary` or `SecretString` will be returned.
     */
    public $SecretBinary;

    /**
     * @var string If the `SecretString` field in the request body is specified in the `CreateSecret` call, this field is returned. Either `SecretBinary` or `SecretString` will be returned.
     */
    public $SecretString;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $SecretName Name of the Secret.
     * @param string $VersionId ID of the Secret version.
     * @param string $SecretBinary If the `SecretBinary` field in the request body is specified in the `CreateSecret` call, this field is returned and base64-encoded. The caller needs to perform base64 decoding to obtain the original data. Either `SecretBinary` or `SecretString` will be returned.
     * @param string $SecretString If the `SecretString` field in the request body is specified in the `CreateSecret` call, this field is returned. Either `SecretBinary` or `SecretString` will be returned.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
