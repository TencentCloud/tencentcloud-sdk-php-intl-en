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
 * SignByAsymmetricKey request structure.
 *
 * @method string getAlgorithm() Obtain Signature algorithm. Supported algorithm: SM2DSA.
 * @method void setAlgorithm(string $Algorithm) Set Signature algorithm. Supported algorithm: SM2DSA.
 * @method string getMessage() Obtain The original message or message abstract. For an original message, the length before Base64 encoding can contain up to 4,096 bytes. For a message abstract, the SM2 signature algorithm only supports 32-byte (before Base64 encoding) message abstracts.
 * @method void setMessage(string $Message) Set The original message or message abstract. For an original message, the length before Base64 encoding can contain up to 4,096 bytes. For a message abstract, the SM2 signature algorithm only supports 32-byte (before Base64 encoding) message abstracts.
 * @method string getKeyId() Obtain Unique ID of a key
 * @method void setKeyId(string $KeyId) Set Unique ID of a key
 * @method string getMessageType() Obtain Message type. Valid values: `RAW` (indicating an original message; used by default if the parameter is not passed in) and `DIGEST`.
 * @method void setMessageType(string $MessageType) Set Message type. Valid values: `RAW` (indicating an original message; used by default if the parameter is not passed in) and `DIGEST`.
 */
class SignByAsymmetricKeyRequest extends AbstractModel
{
    /**
     * @var string Signature algorithm. Supported algorithm: SM2DSA.
     */
    public $Algorithm;

    /**
     * @var string The original message or message abstract. For an original message, the length before Base64 encoding can contain up to 4,096 bytes. For a message abstract, the SM2 signature algorithm only supports 32-byte (before Base64 encoding) message abstracts.
     */
    public $Message;

    /**
     * @var string Unique ID of a key
     */
    public $KeyId;

    /**
     * @var string Message type. Valid values: `RAW` (indicating an original message; used by default if the parameter is not passed in) and `DIGEST`.
     */
    public $MessageType;

    /**
     * @param string $Algorithm Signature algorithm. Supported algorithm: SM2DSA.
     * @param string $Message The original message or message abstract. For an original message, the length before Base64 encoding can contain up to 4,096 bytes. For a message abstract, the SM2 signature algorithm only supports 32-byte (before Base64 encoding) message abstracts.
     * @param string $KeyId Unique ID of a key
     * @param string $MessageType Message type. Valid values: `RAW` (indicating an original message; used by default if the parameter is not passed in) and `DIGEST`.
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
