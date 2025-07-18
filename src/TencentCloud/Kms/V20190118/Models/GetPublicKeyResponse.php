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
 * GetPublicKey response structure.
 *
 * @method string getKeyId() Obtain Unique CMK ID.
 * @method void setKeyId(string $KeyId) Set Unique CMK ID.
 * @method string getPublicKey() Obtain Base64-encoded public key content.
 * @method void setPublicKey(string $PublicKey) Set Base64-encoded public key content.
 * @method string getPublicKeyPem() Obtain Public key content in PEM format.
 * @method void setPublicKeyPem(string $PublicKeyPem) Set Public key content in PEM format.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class GetPublicKeyResponse extends AbstractModel
{
    /**
     * @var string Unique CMK ID.
     */
    public $KeyId;

    /**
     * @var string Base64-encoded public key content.
     */
    public $PublicKey;

    /**
     * @var string Public key content in PEM format.
     */
    public $PublicKeyPem;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $KeyId Unique CMK ID.
     * @param string $PublicKey Base64-encoded public key content.
     * @param string $PublicKeyPem Public key content in PEM format.
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
        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("PublicKeyPem",$param) and $param["PublicKeyPem"] !== null) {
            $this->PublicKeyPem = $param["PublicKeyPem"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
