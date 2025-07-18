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
namespace TencentCloud\Tcr\V20190924\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstanceToken response structure.
 *
 * @method string getUsername() Obtain Username
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setUsername(string $Username) Set Username
Note: this field may return `null`, indicating that no valid value can be found.
 * @method string getToken() Obtain Access credential
 * @method void setToken(string $Token) Set Access credential
 * @method integer getExpTime() Obtain Expiration timestamp of access credential. It is a string of numbers without unit.
 * @method void setExpTime(integer $ExpTime) Set Expiration timestamp of access credential. It is a string of numbers without unit.
 * @method string getTokenId() Obtain Token ID of long-term access credential. It is not available to temporary access credential.
Note: this field may return `null`, indicating that no valid value can be found.
 * @method void setTokenId(string $TokenId) Set Token ID of long-term access credential. It is not available to temporary access credential.
Note: this field may return `null`, indicating that no valid value can be found.
 * @method string getRequestId() Obtain The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
 */
class CreateInstanceTokenResponse extends AbstractModel
{
    /**
     * @var string Username
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $Username;

    /**
     * @var string Access credential
     */
    public $Token;

    /**
     * @var integer Expiration timestamp of access credential. It is a string of numbers without unit.
     */
    public $ExpTime;

    /**
     * @var string Token ID of long-term access credential. It is not available to temporary access credential.
Note: this field may return `null`, indicating that no valid value can be found.
     */
    public $TokenId;

    /**
     * @var string The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param string $Username Username
Note: this field may return `null`, indicating that no valid value can be found.
     * @param string $Token Access credential
     * @param integer $ExpTime Expiration timestamp of access credential. It is a string of numbers without unit.
     * @param string $TokenId Token ID of long-term access credential. It is not available to temporary access credential.
Note: this field may return `null`, indicating that no valid value can be found.
     * @param string $RequestId The unique request ID, generated by the server, will be returned for every request (if the request fails to reach the server for other reasons, the request will not obtain a RequestId). RequestId is required for locating a problem.
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
        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("ExpTime",$param) and $param["ExpTime"] !== null) {
            $this->ExpTime = $param["ExpTime"];
        }

        if (array_key_exists("TokenId",$param) and $param["TokenId"] !== null) {
            $this->TokenId = $param["TokenId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
