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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Temporary key structure.
 *
 * @method string getToken() Obtain Token.
 * @method void setToken(string $Token) Set Token.
 * @method string getTmpSecretId() Obtain Temporary license key ID.
 * @method void setTmpSecretId(string $TmpSecretId) Set Temporary license key ID.
 * @method string getTmpSecretKey() Obtain Temporary license key.
 * @method void setTmpSecretKey(string $TmpSecretKey) Set Temporary license key.
 * @method integer getAppId() Obtain Temporary license appid.
 * @method void setAppId(integer $AppId) Set Temporary license appid.
 */
class Credentials extends AbstractModel
{
    /**
     * @var string Token.
     */
    public $Token;

    /**
     * @var string Temporary license key ID.
     */
    public $TmpSecretId;

    /**
     * @var string Temporary license key.
     */
    public $TmpSecretKey;

    /**
     * @var integer Temporary license appid.
     */
    public $AppId;

    /**
     * @param string $Token Token.
     * @param string $TmpSecretId Temporary license key ID.
     * @param string $TmpSecretKey Temporary license key.
     * @param integer $AppId Temporary license appid.
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
        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("TmpSecretId",$param) and $param["TmpSecretId"] !== null) {
            $this->TmpSecretId = $param["TmpSecretId"];
        }

        if (array_key_exists("TmpSecretKey",$param) and $param["TmpSecretKey"] !== null) {
            $this->TmpSecretKey = $param["TmpSecretKey"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
