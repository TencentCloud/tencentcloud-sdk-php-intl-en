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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateConsoleUsers request structure.
 *
 * @method array getUserUins() Obtain <p>User UIN list, up to 100 at a time</p>
 * @method void setUserUins(array $UserUins) Set <p>User UIN list, up to 100 at a time</p>
 * @method array getRoleIds() Obtain <p>Role ID list</p><p>Enumeration values:</p><ul><li>2001: Console administrator</li><li>2002: Console member</li></ul><p>Can be obtained through the ListConsoleRoles API</p>
 * @method void setRoleIds(array $RoleIds) Set <p>Role ID list</p><p>Enumeration values:</p><ul><li>2001: Console administrator</li><li>2002: Console member</li></ul><p>Can be obtained through the ListConsoleRoles API</p>
 */
class UpdateConsoleUsersRequest extends AbstractModel
{
    /**
     * @var array <p>User UIN list, up to 100 at a time</p>
     */
    public $UserUins;

    /**
     * @var array <p>Role ID list</p><p>Enumeration values:</p><ul><li>2001: Console administrator</li><li>2002: Console member</li></ul><p>Can be obtained through the ListConsoleRoles API</p>
     */
    public $RoleIds;

    /**
     * @param array $UserUins <p>User UIN list, up to 100 at a time</p>
     * @param array $RoleIds <p>Role ID list</p><p>Enumeration values:</p><ul><li>2001: Console administrator</li><li>2002: Console member</li></ul><p>Can be obtained through the ListConsoleRoles API</p>
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
        if (array_key_exists("UserUins",$param) and $param["UserUins"] !== null) {
            $this->UserUins = $param["UserUins"];
        }

        if (array_key_exists("RoleIds",$param) and $param["RoleIds"] !== null) {
            $this->RoleIds = $param["RoleIds"];
        }
    }
}
