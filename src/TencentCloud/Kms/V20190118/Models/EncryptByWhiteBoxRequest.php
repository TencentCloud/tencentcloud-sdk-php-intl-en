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
 * EncryptByWhiteBox request structure.
 *
 * @method string getKeyId() Obtain Globally unique white-box key ID
 * @method void setKeyId(string $KeyId) Set Globally unique white-box key ID
 * @method string getPlainText() Obtain Base64-encoded text to be encrypted. The size of the original text cannot exceed 4 KB.
 * @method void setPlainText(string $PlainText) Set Base64-encoded text to be encrypted. The size of the original text cannot exceed 4 KB.
 * @method string getInitializationVector() Obtain Base64-encoded initialization vector of 16 bytes, which will be used by the encryption algorithm. If this parameter is not passed in, the backend service will generate a random one. You should save this value as a parameter for decryption.
 * @method void setInitializationVector(string $InitializationVector) Set Base64-encoded initialization vector of 16 bytes, which will be used by the encryption algorithm. If this parameter is not passed in, the backend service will generate a random one. You should save this value as a parameter for decryption.
 */
class EncryptByWhiteBoxRequest extends AbstractModel
{
    /**
     * @var string Globally unique white-box key ID
     */
    public $KeyId;

    /**
     * @var string Base64-encoded text to be encrypted. The size of the original text cannot exceed 4 KB.
     */
    public $PlainText;

    /**
     * @var string Base64-encoded initialization vector of 16 bytes, which will be used by the encryption algorithm. If this parameter is not passed in, the backend service will generate a random one. You should save this value as a parameter for decryption.
     */
    public $InitializationVector;

    /**
     * @param string $KeyId Globally unique white-box key ID
     * @param string $PlainText Base64-encoded text to be encrypted. The size of the original text cannot exceed 4 KB.
     * @param string $InitializationVector Base64-encoded initialization vector of 16 bytes, which will be used by the encryption algorithm. If this parameter is not passed in, the backend service will generate a random one. You should save this value as a parameter for decryption.
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

        if (array_key_exists("PlainText",$param) and $param["PlainText"] !== null) {
            $this->PlainText = $param["PlainText"];
        }

        if (array_key_exists("InitializationVector",$param) and $param["InitializationVector"] !== null) {
            $this->InitializationVector = $param["InitializationVector"];
        }
    }
}
