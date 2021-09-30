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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ImportKeyPair request structure.
 *
 * @method string getKeyName() Obtain Key pair name, which can contain up to 25 digits, letters, and underscores.
 * @method void setKeyName(string $KeyName) Set Key pair name, which can contain up to 25 digits, letters, and underscores.
 * @method string getPublicKey() Obtain Public key content of the key pair, which is in the OpenSSH RSA format.
 * @method void setPublicKey(string $PublicKey) Set Public key content of the key pair, which is in the OpenSSH RSA format.
 */
class ImportKeyPairRequest extends AbstractModel
{
    /**
     * @var string Key pair name, which can contain up to 25 digits, letters, and underscores.
     */
    public $KeyName;

    /**
     * @var string Public key content of the key pair, which is in the OpenSSH RSA format.
     */
    public $PublicKey;

    /**
     * @param string $KeyName Key pair name, which can contain up to 25 digits, letters, and underscores.
     * @param string $PublicKey Public key content of the key pair, which is in the OpenSSH RSA format.
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
        if (array_key_exists("KeyName",$param) and $param["KeyName"] !== null) {
            $this->KeyName = $param["KeyName"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }
    }
}
