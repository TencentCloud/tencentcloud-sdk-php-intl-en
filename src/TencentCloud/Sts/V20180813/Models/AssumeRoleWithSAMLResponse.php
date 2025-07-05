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
namespace TencentCloud\Sts\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssumeRoleWithSAML response structure.
 *
 * @method Credentials getCredentials() Obtain An object consists of the `Token`, `TmpSecretId`, and `TmpSecretId`
 * @method void setCredentials(Credentials $Credentials) Set An object consists of the `Token`, `TmpSecretId`, and `TmpSecretId`
 * @method integer getExpiredTime() Obtain Credentials expiration time. A Unix timestamp will be returned which is accurate to the second
 * @method void setExpiredTime(integer $ExpiredTime) Set Credentials expiration time. A Unix timestamp will be returned which is accurate to the second
 * @method string getExpiration() Obtain Credentials expiration time in UTC time in ISO 8601 format.
 * @method void setExpiration(string $Expiration) Set Credentials expiration time in UTC time in ISO 8601 format.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class AssumeRoleWithSAMLResponse extends AbstractModel
{
    /**
     * @var Credentials An object consists of the `Token`, `TmpSecretId`, and `TmpSecretId`
     */
    public $Credentials;

    /**
     * @var integer Credentials expiration time. A Unix timestamp will be returned which is accurate to the second
     */
    public $ExpiredTime;

    /**
     * @var string Credentials expiration time in UTC time in ISO 8601 format.
     */
    public $Expiration;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param Credentials $Credentials An object consists of the `Token`, `TmpSecretId`, and `TmpSecretId`
     * @param integer $ExpiredTime Credentials expiration time. A Unix timestamp will be returned which is accurate to the second
     * @param string $Expiration Credentials expiration time in UTC time in ISO 8601 format.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Credentials",$param) and $param["Credentials"] !== null) {
            $this->Credentials = new Credentials();
            $this->Credentials->deserialize($param["Credentials"]);
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("Expiration",$param) and $param["Expiration"] !== null) {
            $this->Expiration = $param["Expiration"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
