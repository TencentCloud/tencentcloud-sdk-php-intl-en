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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Table-level permissions
 *
 * @method string getDatabase() Obtain DATABASE name
 * @method void setDatabase(string $Database) Set DATABASE name
 * @method string getTable() Obtain Table name
 * @method void setTable(string $Table) Set Table name
 * @method array getPrivileges() Obtain Permission list
 * @method void setPrivileges(array $Privileges) Set Permission list
 */
class TablePrivileges extends AbstractModel
{
    /**
     * @var string DATABASE name
     */
    public $Database;

    /**
     * @var string Table name
     */
    public $Table;

    /**
     * @var array Permission list
     */
    public $Privileges;

    /**
     * @param string $Database DATABASE name
     * @param string $Table Table name
     * @param array $Privileges Permission list
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
        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("Privileges",$param) and $param["Privileges"] !== null) {
            $this->Privileges = $param["Privileges"];
        }
    }
}
