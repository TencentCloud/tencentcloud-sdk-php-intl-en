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
namespace TencentCloud\Makers\V20261113\Models;
use TencentCloud\Common\AbstractModel;

/**
 * COS Temporary Key
 *
 * @method string getTmpSecretId() Obtain <p>Temporary SecretId</p>
 * @method void setTmpSecretId(string $TmpSecretId) Set <p>Temporary SecretId</p>
 * @method string getTmpSecretKey() Obtain <p>Temporary SecretKey</p>
 * @method void setTmpSecretKey(string $TmpSecretKey) Set <p>Temporary SecretKey</p>
 * @method string getToken() Obtain <p>Temporary Token</p>
 * @method void setToken(string $Token) Set <p>Temporary Token</p>
 */
class CosCredentials extends AbstractModel
{
    /**
     * @var string <p>Temporary SecretId</p>
     */
    public $TmpSecretId;

    /**
     * @var string <p>Temporary SecretKey</p>
     */
    public $TmpSecretKey;

    /**
     * @var string <p>Temporary Token</p>
     */
    public $Token;

    /**
     * @param string $TmpSecretId <p>Temporary SecretId</p>
     * @param string $TmpSecretKey <p>Temporary SecretKey</p>
     * @param string $Token <p>Temporary Token</p>
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
        if (array_key_exists("TmpSecretId",$param) and $param["TmpSecretId"] !== null) {
            $this->TmpSecretId = $param["TmpSecretId"];
        }

        if (array_key_exists("TmpSecretKey",$param) and $param["TmpSecretKey"] !== null) {
            $this->TmpSecretKey = $param["TmpSecretKey"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }
    }
}
