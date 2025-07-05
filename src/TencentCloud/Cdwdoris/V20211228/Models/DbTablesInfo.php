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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Database and table information
 *
 * @method string getDbName() Obtain Database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDbName(string $DbName) Set Database name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getTablesName() Obtain The corresponding table list under this database.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTablesName(array $TablesName) Set The corresponding table list under this database.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DbTablesInfo extends AbstractModel
{
    /**
     * @var string Database name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DbName;

    /**
     * @var array The corresponding table list under this database.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TablesName;

    /**
     * @param string $DbName Database name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $TablesName The corresponding table list under this database.
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

        if (array_key_exists("TablesName",$param) and $param["TablesName"] !== null) {
            $this->TablesName = $param["TablesName"];
        }
    }
}
