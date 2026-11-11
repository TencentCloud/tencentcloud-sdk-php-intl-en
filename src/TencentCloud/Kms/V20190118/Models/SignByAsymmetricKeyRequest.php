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
 * SignByAsymmetricKey request structure.
 *
 * @method string getAlgorithm() Obtain <p>Signature algorithm. Supported algorithms: SM2DSA, ECC_P256_R1, ECDSA384_SHA384, RSA_PSS_SHA_256, RSA_PKCS1_SHA_256, RSA_PSS_SHA_384, RSA_PKCS1_SHA_384, RSA_PSS_SHA_512, RSA_PKCS1_SHA_512, etc. For more supported algorithms, query them through the ListAlgorithms API.</p>
 * @method void setAlgorithm(string $Algorithm) Set <p>Signature algorithm. Supported algorithms: SM2DSA, ECC_P256_R1, ECDSA384_SHA384, RSA_PSS_SHA_256, RSA_PKCS1_SHA_256, RSA_PSS_SHA_384, RSA_PKCS1_SHA_384, RSA_PSS_SHA_512, RSA_PKCS1_SHA_512, etc. For more supported algorithms, query them through the ListAlgorithms API.</p>
 * @method string getMessage() Obtain <p>Message original text or message digest. If the message original text is provided, its length (before Base64 encoding) cannot exceed 4096 bytes. If the message digest is provided, its length (before Base64 encoding) must be 32 bytes.</p>
 * @method void setMessage(string $Message) Set <p>Message original text or message digest. If the message original text is provided, its length (before Base64 encoding) cannot exceed 4096 bytes. If the message digest is provided, its length (before Base64 encoding) must be 32 bytes.</p>
 * @method string getKeyId() Obtain <p>Unique identifier of the key</p>
 * @method void setKeyId(string $KeyId) Set <p>Unique identifier of the key</p>
 * @method string getMessageType() Obtain <p>Message type: RAW or DIGEST. If not specified, RAW is used by default, indicating the message original text.</p>
 * @method void setMessageType(string $MessageType) Set <p>Message type: RAW or DIGEST. If not specified, RAW is used by default, indicating the message original text.</p>
 */
class SignByAsymmetricKeyRequest extends AbstractModel
{
    /**
     * @var string <p>Signature algorithm. Supported algorithms: SM2DSA, ECC_P256_R1, ECDSA384_SHA384, RSA_PSS_SHA_256, RSA_PKCS1_SHA_256, RSA_PSS_SHA_384, RSA_PKCS1_SHA_384, RSA_PSS_SHA_512, RSA_PKCS1_SHA_512, etc. For more supported algorithms, query them through the ListAlgorithms API.</p>
     */
    public $Algorithm;

    /**
     * @var string <p>Message original text or message digest. If the message original text is provided, its length (before Base64 encoding) cannot exceed 4096 bytes. If the message digest is provided, its length (before Base64 encoding) must be 32 bytes.</p>
     */
    public $Message;

    /**
     * @var string <p>Unique identifier of the key</p>
     */
    public $KeyId;

    /**
     * @var string <p>Message type: RAW or DIGEST. If not specified, RAW is used by default, indicating the message original text.</p>
     */
    public $MessageType;

    /**
     * @param string $Algorithm <p>Signature algorithm. Supported algorithms: SM2DSA, ECC_P256_R1, ECDSA384_SHA384, RSA_PSS_SHA_256, RSA_PKCS1_SHA_256, RSA_PSS_SHA_384, RSA_PKCS1_SHA_384, RSA_PSS_SHA_512, RSA_PKCS1_SHA_512, etc. For more supported algorithms, query them through the ListAlgorithms API.</p>
     * @param string $Message <p>Message original text or message digest. If the message original text is provided, its length (before Base64 encoding) cannot exceed 4096 bytes. If the message digest is provided, its length (before Base64 encoding) must be 32 bytes.</p>
     * @param string $KeyId <p>Unique identifier of the key</p>
     * @param string $MessageType <p>Message type: RAW or DIGEST. If not specified, RAW is used by default, indicating the message original text.</p>
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
        if (array_key_exists("Algorithm",$param) and $param["Algorithm"] !== null) {
            $this->Algorithm = $param["Algorithm"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("MessageType",$param) and $param["MessageType"] !== null) {
            $this->MessageType = $param["MessageType"];
        }
    }
}
