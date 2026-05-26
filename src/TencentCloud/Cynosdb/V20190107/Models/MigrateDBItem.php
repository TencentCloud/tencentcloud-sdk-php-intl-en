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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Synchronized database and table objects.
 *
 * @method string getDbName() Obtain Database name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDbName(string $DbName) Set Database name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getMigrateTableMode() Obtain Data table migration mode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMigrateTableMode(string $MigrateTableMode) Set Data table migration mode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTables() Obtain Data table information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTables(array $Tables) Set Data table information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MigrateDBItem extends AbstractModel
{
    /**
     * @var string Database name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DbName;

    /**
     * @var string Data table migration mode
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MigrateTableMode;

    /**
     * @var array Data table information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Tables;

    /**
     * @param string $DbName Database name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $MigrateTableMode Data table migration mode
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Tables Data table information
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
        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("MigrateTableMode",$param) and $param["MigrateTableMode"] !== null) {
            $this->MigrateTableMode = $param["MigrateTableMode"];
        }

        if (array_key_exists("Tables",$param) and $param["Tables"] !== null) {
            $this->Tables = [];
            foreach ($param["Tables"] as $key => $value){
                $obj = new MigrateTableItem();
                $obj->deserialize($value);
                array_push($this->Tables, $obj);
            }
        }
    }
}
