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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database table information
 *
 * @method string getDatabase() Obtain Database name
 * @method void setDatabase(string $Database) Set Database name
 * @method array getTables() Obtain Table name list.
 * @method void setTables(array $Tables) Set Table name list.
 */
class DatabaseTables extends AbstractModel
{
    /**
     * @var string Database name
     */
    public $Database;

    /**
     * @var array Table name list.
     */
    public $Tables;

    /**
     * @param string $Database Database name
     * @param array $Tables Table name list.
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

        if (array_key_exists("Tables",$param) and $param["Tables"] !== null) {
            $this->Tables = $param["Tables"];
        }
    }
}
