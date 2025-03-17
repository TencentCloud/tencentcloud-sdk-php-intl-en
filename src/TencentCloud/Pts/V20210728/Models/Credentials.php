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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * COS temporary credentials.
 *
 * @method string getTmpSecretId() Obtain Temporary secret ID.
 * @method void setTmpSecretId(string $TmpSecretId) Set Temporary secret ID.
 * @method string getTmpSecretKey() Obtain Temporary secret key.
 * @method void setTmpSecretKey(string $TmpSecretKey) Set Temporary secret key.
 * @method string getToken() Obtain Temporary token.
 * @method void setToken(string $Token) Set Temporary token.
 */
class Credentials extends AbstractModel
{
    /**
     * @var string Temporary secret ID.
     */
    public $TmpSecretId;

    /**
     * @var string Temporary secret key.
     */
    public $TmpSecretKey;

    /**
     * @var string Temporary token.
     */
    public $Token;

    /**
     * @param string $TmpSecretId Temporary secret ID.
     * @param string $TmpSecretKey Temporary secret key.
     * @param string $Token Temporary token.
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
