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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Role object, which is exclusive to PostgreSQL.
 *
 * @method string getRoleName() Obtain Role name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRoleName(string $RoleName) Set Role name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getNewRoleName() Obtain Role name after migration
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNewRoleName(string $NewRoleName) Set Role name after migration
Note: This field may return null, indicating that no valid values can be obtained.
 */
class RoleItem extends AbstractModel
{
    /**
     * @var string Role name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RoleName;

    /**
     * @var string Role name after migration
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NewRoleName;

    /**
     * @param string $RoleName Role name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $NewRoleName Role name after migration
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
        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("NewRoleName",$param) and $param["NewRoleName"] !== null) {
            $this->NewRoleName = $param["NewRoleName"];
        }
    }
}
