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
 * Synchronize data objects
 *
 * @method string getMigrateDBMode() Obtain Database migration mode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMigrateDBMode(string $MigrateDBMode) Set Database migration mode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDatabases() Obtain Database information
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatabases(array $Databases) Set Database information
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MigrateObject extends AbstractModel
{
    /**
     * @var string Database migration mode
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MigrateDBMode;

    /**
     * @var array Database information
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Databases;

    /**
     * @param string $MigrateDBMode Database migration mode
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Databases Database information
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
        if (array_key_exists("MigrateDBMode",$param) and $param["MigrateDBMode"] !== null) {
            $this->MigrateDBMode = $param["MigrateDBMode"];
        }

        if (array_key_exists("Databases",$param) and $param["Databases"] !== null) {
            $this->Databases = [];
            foreach ($param["Databases"] as $key => $value){
                $obj = new MigrateDBItem();
                $obj->deserialize($value);
                array_push($this->Databases, $obj);
            }
        }
    }
}
