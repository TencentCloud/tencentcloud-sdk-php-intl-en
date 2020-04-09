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
 * GetParametersForImport request structure.
 *
 * @method string getKeyId() Obtain Unique ID of a CMK. The CMK for which to get the key parameters must be of the `EXTERNAL` type, i.e., Type = 2 when the CMK is created by the `CreateKey` API.
 * @method void setKeyId(string $KeyId) Set Unique ID of a CMK. The CMK for which to get the key parameters must be of the `EXTERNAL` type, i.e., Type = 2 when the CMK is created by the `CreateKey` API.
 * @method string getWrappingAlgorithm() Obtain Specifies the algorithm for key material encryption. Currently, `RSAES_PKCS1_V1_5`, `RSAES_OAEP_SHA_1`, and `RSAES_OAEP_SHA_256` are supported.
 * @method void setWrappingAlgorithm(string $WrappingAlgorithm) Set Specifies the algorithm for key material encryption. Currently, `RSAES_PKCS1_V1_5`, `RSAES_OAEP_SHA_1`, and `RSAES_OAEP_SHA_256` are supported.
 * @method string getWrappingKeySpec() Obtain Specifies the type of wrapping key. Currently, only `RSA_2048` is supported.
 * @method void setWrappingKeySpec(string $WrappingKeySpec) Set Specifies the type of wrapping key. Currently, only `RSA_2048` is supported.
 */
class GetParametersForImportRequest extends AbstractModel
{
    /**
     * @var string Unique ID of a CMK. The CMK for which to get the key parameters must be of the `EXTERNAL` type, i.e., Type = 2 when the CMK is created by the `CreateKey` API.
     */
    public $KeyId;

    /**
     * @var string Specifies the algorithm for key material encryption. Currently, `RSAES_PKCS1_V1_5`, `RSAES_OAEP_SHA_1`, and `RSAES_OAEP_SHA_256` are supported.
     */
    public $WrappingAlgorithm;

    /**
     * @var string Specifies the type of wrapping key. Currently, only `RSA_2048` is supported.
     */
    public $WrappingKeySpec;

    /**
     * @param string $KeyId Unique ID of a CMK. The CMK for which to get the key parameters must be of the `EXTERNAL` type, i.e., Type = 2 when the CMK is created by the `CreateKey` API.
     * @param string $WrappingAlgorithm Specifies the algorithm for key material encryption. Currently, `RSAES_PKCS1_V1_5`, `RSAES_OAEP_SHA_1`, and `RSAES_OAEP_SHA_256` are supported.
     * @param string $WrappingKeySpec Specifies the type of wrapping key. Currently, only `RSA_2048` is supported.
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

        if (array_key_exists("WrappingAlgorithm",$param) and $param["WrappingAlgorithm"] !== null) {
            $this->WrappingAlgorithm = $param["WrappingAlgorithm"];
        }

        if (array_key_exists("WrappingKeySpec",$param) and $param["WrappingKeySpec"] !== null) {
            $this->WrappingKeySpec = $param["WrappingKeySpec"];
        }
    }
}
