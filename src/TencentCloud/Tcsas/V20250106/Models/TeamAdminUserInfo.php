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
namespace TencentCloud\Tcsas\V20250106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Team admin information.
 *
 * @method string getAdminUserId() Obtain <p>Admin user ID.</p>
 * @method void setAdminUserId(string $AdminUserId) Set <p>Admin user ID.</p>
 * @method string getAdminUserAccount() Obtain <p>Admin user account.</p>
 * @method void setAdminUserAccount(string $AdminUserAccount) Set <p>Admin user account.</p>
 * @method string getAdminUserName() Obtain <p>Admin username.</p>
 * @method void setAdminUserName(string $AdminUserName) Set <p>Admin username.</p>
 */
class TeamAdminUserInfo extends AbstractModel
{
    /**
     * @var string <p>Admin user ID.</p>
     */
    public $AdminUserId;

    /**
     * @var string <p>Admin user account.</p>
     */
    public $AdminUserAccount;

    /**
     * @var string <p>Admin username.</p>
     */
    public $AdminUserName;

    /**
     * @param string $AdminUserId <p>Admin user ID.</p>
     * @param string $AdminUserAccount <p>Admin user account.</p>
     * @param string $AdminUserName <p>Admin username.</p>
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
        if (array_key_exists("AdminUserId",$param) and $param["AdminUserId"] !== null) {
            $this->AdminUserId = $param["AdminUserId"];
        }

        if (array_key_exists("AdminUserAccount",$param) and $param["AdminUserAccount"] !== null) {
            $this->AdminUserAccount = $param["AdminUserAccount"];
        }

        if (array_key_exists("AdminUserName",$param) and $param["AdminUserName"] !== null) {
            $this->AdminUserName = $param["AdminUserName"];
        }
    }
}
