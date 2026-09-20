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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Temporary credentials
 *
 * @method string getSecretId() Obtain Temporary security credential Id.
 * @method void setSecretId(string $SecretId) Set Temporary security credential Id.
 * @method string getSecretKey() Obtain Temporary security credential Key.
 * @method void setSecretKey(string $SecretKey) Set Temporary security credential Key.
 * @method string getToken() Obtain Token value.
 * @method void setToken(string $Token) Set Token value.
 * @method integer getExpiredTime() Obtain The time when the certificate is invalid. Return a Unix timestamp accurate to the second.
 * @method void setExpiredTime(integer $ExpiredTime) Set The time when the certificate is invalid. Return a Unix timestamp accurate to the second.
 */
class TempCertificate extends AbstractModel
{
    /**
     * @var string Temporary security credential Id.
     */
    public $SecretId;

    /**
     * @var string Temporary security credential Key.
     */
    public $SecretKey;

    /**
     * @var string Token value.
     */
    public $Token;

    /**
     * @var integer The time when the certificate is invalid. Return a Unix timestamp accurate to the second.
     */
    public $ExpiredTime;

    /**
     * @param string $SecretId Temporary security credential Id.
     * @param string $SecretKey Temporary security credential Key.
     * @param string $Token Token value.
     * @param integer $ExpiredTime The time when the certificate is invalid. Return a Unix timestamp accurate to the second.
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
        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }
    }
}
