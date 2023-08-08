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
 * PostQuantumCryptoSign request structure.
 *
 * @method string getMessage() Obtain Original message text before Base64 encoding. It cannot exceed 4096 bytes. 
 * @method void setMessage(string $Message) Set Original message text before Base64 encoding. It cannot exceed 4096 bytes. 
 * @method string getKeyId() Obtain Unique ID of a key
 * @method void setKeyId(string $KeyId) Set Unique ID of a key
 */
class PostQuantumCryptoSignRequest extends AbstractModel
{
    /**
     * @var string Original message text before Base64 encoding. It cannot exceed 4096 bytes. 
     */
    public $Message;

    /**
     * @var string Unique ID of a key
     */
    public $KeyId;

    /**
     * @param string $Message Original message text before Base64 encoding. It cannot exceed 4096 bytes. 
     * @param string $KeyId Unique ID of a key
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
        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }
    }
}
