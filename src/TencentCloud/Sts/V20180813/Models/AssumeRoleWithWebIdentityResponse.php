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
namespace TencentCloud\Sts\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssumeRoleWithWebIdentity response structure.
 *
 * @method integer getExpiredTime() Obtain Expiration time of the temporary credential (timestamp)
 * @method void setExpiredTime(integer $ExpiredTime) Set Expiration time of the temporary credential (timestamp)
 * @method string getExpiration() Obtain Expiration time of the temporary credential
 * @method void setExpiration(string $Expiration) Set Expiration time of the temporary credential
 * @method Credentials getCredentials() Obtain Temporary credential
 * @method void setCredentials(Credentials $Credentials) Set Temporary credential
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class AssumeRoleWithWebIdentityResponse extends AbstractModel
{
    /**
     * @var integer Expiration time of the temporary credential (timestamp)
     */
    public $ExpiredTime;

    /**
     * @var string Expiration time of the temporary credential
     */
    public $Expiration;

    /**
     * @var Credentials Temporary credential
     */
    public $Credentials;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param integer $ExpiredTime Expiration time of the temporary credential (timestamp)
     * @param string $Expiration Expiration time of the temporary credential
     * @param Credentials $Credentials Temporary credential
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
        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("Expiration",$param) and $param["Expiration"] !== null) {
            $this->Expiration = $param["Expiration"];
        }

        if (array_key_exists("Credentials",$param) and $param["Credentials"] !== null) {
            $this->Credentials = new Credentials();
            $this->Credentials->deserialize($param["Credentials"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
