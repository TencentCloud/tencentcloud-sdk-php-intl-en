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
 * AsymmetricRsaDecrypt request structure.
 *
 * @method string getKeyId() Obtain Unique CMK ID
 * @method void setKeyId(string $KeyId) Set Unique CMK ID
 * @method string getCiphertext() Obtain Base64-encoded ciphertext encrypted with `PublicKey`
 * @method void setCiphertext(string $Ciphertext) Set Base64-encoded ciphertext encrypted with `PublicKey`
 * @method string getAlgorithm() Obtain Corresponding algorithm when a public key is used for encryption. Valid values: RSAES_PKCS1_V1_5, RSAES_OAEP_SHA_1, RSAES_OAEP_SHA_256
 * @method void setAlgorithm(string $Algorithm) Set Corresponding algorithm when a public key is used for encryption. Valid values: RSAES_PKCS1_V1_5, RSAES_OAEP_SHA_1, RSAES_OAEP_SHA_256
 */
class AsymmetricRsaDecryptRequest extends AbstractModel
{
    /**
     * @var string Unique CMK ID
     */
    public $KeyId;

    /**
     * @var string Base64-encoded ciphertext encrypted with `PublicKey`
     */
    public $Ciphertext;

    /**
     * @var string Corresponding algorithm when a public key is used for encryption. Valid values: RSAES_PKCS1_V1_5, RSAES_OAEP_SHA_1, RSAES_OAEP_SHA_256
     */
    public $Algorithm;

    /**
     * @param string $KeyId Unique CMK ID
     * @param string $Ciphertext Base64-encoded ciphertext encrypted with `PublicKey`
     * @param string $Algorithm Corresponding algorithm when a public key is used for encryption. Valid values: RSAES_PKCS1_V1_5, RSAES_OAEP_SHA_1, RSAES_OAEP_SHA_256
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

        if (array_key_exists("Ciphertext",$param) and $param["Ciphertext"] !== null) {
            $this->Ciphertext = $param["Ciphertext"];
        }

        if (array_key_exists("Algorithm",$param) and $param["Algorithm"] !== null) {
            $this->Algorithm = $param["Algorithm"];
        }
    }
}
