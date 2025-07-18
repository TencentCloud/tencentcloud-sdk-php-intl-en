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
 * Encrypt response structure.
 *
 * @method string getCiphertextBlob() Obtain Base64-encoded ciphertext, which is the encrypted information of the ciphertext and key. To get the plaintext, you need to pass in this field to the Decrypt API.
 * @method void setCiphertextBlob(string $CiphertextBlob) Set Base64-encoded ciphertext, which is the encrypted information of the ciphertext and key. To get the plaintext, you need to pass in this field to the Decrypt API.
 * @method string getKeyId() Obtain Globally unique ID of the CMK used for encryption
 * @method void setKeyId(string $KeyId) Set Globally unique ID of the CMK used for encryption
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class EncryptResponse extends AbstractModel
{
    /**
     * @var string Base64-encoded ciphertext, which is the encrypted information of the ciphertext and key. To get the plaintext, you need to pass in this field to the Decrypt API.
     */
    public $CiphertextBlob;

    /**
     * @var string Globally unique ID of the CMK used for encryption
     */
    public $KeyId;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $CiphertextBlob Base64-encoded ciphertext, which is the encrypted information of the ciphertext and key. To get the plaintext, you need to pass in this field to the Decrypt API.
     * @param string $KeyId Globally unique ID of the CMK used for encryption
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("CiphertextBlob",$param) and $param["CiphertextBlob"] !== null) {
            $this->CiphertextBlob = $param["CiphertextBlob"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
