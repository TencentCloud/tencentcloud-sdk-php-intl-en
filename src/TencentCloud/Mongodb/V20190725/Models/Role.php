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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Role
 *
 * @method string getRoleName() Obtain <p>role name</p>
 * @method void setRoleName(string $RoleName) Set <p>role name</p>
 * @method string getDatabase() Obtain <p>Role belongs to db</p>
 * @method void setDatabase(string $Database) Set <p>Role belongs to db</p>
 */
class Role extends AbstractModel
{
    /**
     * @var string <p>role name</p>
     */
    public $RoleName;

    /**
     * @var string <p>Role belongs to db</p>
     */
    public $Database;

    /**
     * @param string $RoleName <p>role name</p>
     * @param string $Database <p>Role belongs to db</p>
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

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }
    }
}
