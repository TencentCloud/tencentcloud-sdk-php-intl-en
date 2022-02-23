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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReleaseFileSign response structure.
 *
 * @method string getSecretKey() Obtain Temporary key
 * @method void setSecretKey(string $SecretKey) Set Temporary key
 * @method string getSecretID() Obtain Temporary key ID
 * @method void setSecretID(string $SecretID) Set Temporary key ID
 * @method string getSessionToken() Obtain Temporary key token
 * @method void setSessionToken(string $SessionToken) Set Temporary key token
 * @method integer getStartTime() Obtain Start timestamp
 * @method void setStartTime(integer $StartTime) Set Start timestamp
 * @method integer getExpiredTime() Obtain Expiration timestamp
 * @method void setExpiredTime(integer $ExpiredTime) Set Expiration timestamp
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeReleaseFileSignResponse extends AbstractModel
{
    /**
     * @var string Temporary key
     */
    public $SecretKey;

    /**
     * @var string Temporary key ID
     */
    public $SecretID;

    /**
     * @var string Temporary key token
     */
    public $SessionToken;

    /**
     * @var integer Start timestamp
     */
    public $StartTime;

    /**
     * @var integer Expiration timestamp
     */
    public $ExpiredTime;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $SecretKey Temporary key
     * @param string $SecretID Temporary key ID
     * @param string $SessionToken Temporary key token
     * @param integer $StartTime Start timestamp
     * @param integer $ExpiredTime Expiration timestamp
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
        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("SecretID",$param) and $param["SecretID"] !== null) {
            $this->SecretID = $param["SecretID"];
        }

        if (array_key_exists("SessionToken",$param) and $param["SessionToken"] !== null) {
            $this->SessionToken = $param["SessionToken"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ExpiredTime",$param) and $param["ExpiredTime"] !== null) {
            $this->ExpiredTime = $param["ExpiredTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
