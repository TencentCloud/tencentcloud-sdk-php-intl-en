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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Creates secret key response.
 *
 * @method string getKeyId() Obtain <p>Secret ID</p>
 * @method void setKeyId(string $KeyId) Set <p>Secret ID</p>
 * @method string getSecretKey() Obtain <p>Secret key</p>
 * @method void setSecretKey(string $SecretKey) Set <p>Secret key</p>
 */
class CreateMNPSecretKeyResp extends AbstractModel
{
    /**
     * @var string <p>Secret ID</p>
     */
    public $KeyId;

    /**
     * @var string <p>Secret key</p>
     */
    public $SecretKey;

    /**
     * @param string $KeyId <p>Secret ID</p>
     * @param string $SecretKey <p>Secret key</p>
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

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }
    }
}
