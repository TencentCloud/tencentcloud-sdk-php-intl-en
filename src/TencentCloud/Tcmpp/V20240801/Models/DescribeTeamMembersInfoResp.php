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
namespace TencentCloud\Tcmpp\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Team member information
 *
 * @method string getUserId() Obtain User ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserId(string $UserId) Set User ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserAccount() Obtain User account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserAccount(string $UserAccount) Set User account
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserName() Obtain Username
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserName(string $UserName) Set Username
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getUserRoles() Obtain Role
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUserRoles(string $UserRoles) Set Role
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DescribeTeamMembersInfoResp extends AbstractModel
{
    /**
     * @var string User ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserId;

    /**
     * @var string User account
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserAccount;

    /**
     * @var string Username
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserName;

    /**
     * @var string Role
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UserRoles;

    /**
     * @param string $UserId User ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserAccount User account
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserName Username
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $UserRoles Role
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserAccount",$param) and $param["UserAccount"] !== null) {
            $this->UserAccount = $param["UserAccount"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserRoles",$param) and $param["UserRoles"] !== null) {
            $this->UserRoles = $param["UserRoles"];
        }
    }
}
