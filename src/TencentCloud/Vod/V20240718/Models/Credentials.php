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
namespace TencentCloud\Vod\V20240718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Credentials.
 *
 * @method string getAccessKeyId() Obtain Access Key ID.
 * @method void setAccessKeyId(string $AccessKeyId) Set Access Key ID.
 * @method string getSecretAccessKey() Obtain Secret Access Key.
 * @method void setSecretAccessKey(string $SecretAccessKey) Set Secret Access Key.
 * @method string getSessionToken() Obtain The session token length depends on the binding policy and is no longer than 4096 bytes.
 * @method void setSessionToken(string $SessionToken) Set The session token length depends on the binding policy and is no longer than 4096 bytes.
 * @method string getExpiration() Obtain The expiration time of the credentials.
 * @method void setExpiration(string $Expiration) Set The expiration time of the credentials.
 */
class Credentials extends AbstractModel
{
    /**
     * @var string Access Key ID.
     */
    public $AccessKeyId;

    /**
     * @var string Secret Access Key.
     */
    public $SecretAccessKey;

    /**
     * @var string The session token length depends on the binding policy and is no longer than 4096 bytes.
     */
    public $SessionToken;

    /**
     * @var string The expiration time of the credentials.
     */
    public $Expiration;

    /**
     * @param string $AccessKeyId Access Key ID.
     * @param string $SecretAccessKey Secret Access Key.
     * @param string $SessionToken The session token length depends on the binding policy and is no longer than 4096 bytes.
     * @param string $Expiration The expiration time of the credentials.
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
        if (array_key_exists("AccessKeyId",$param) and $param["AccessKeyId"] !== null) {
            $this->AccessKeyId = $param["AccessKeyId"];
        }

        if (array_key_exists("SecretAccessKey",$param) and $param["SecretAccessKey"] !== null) {
            $this->SecretAccessKey = $param["SecretAccessKey"];
        }

        if (array_key_exists("SessionToken",$param) and $param["SessionToken"] !== null) {
            $this->SessionToken = $param["SessionToken"];
        }

        if (array_key_exists("Expiration",$param) and $param["Expiration"] !== null) {
            $this->Expiration = $param["Expiration"];
        }
    }
}
