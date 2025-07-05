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
 * Database permission
 *
 * @method string getDatabaseName() Obtain Database name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDatabaseName(string $DatabaseName) Set Database name

Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getPermissions() Obtain Permission name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPermissions(array $Permissions) Set Permission name
Note: This field may return null, indicating that no valid values can be obtained.
 */
class DatabasePermissions extends AbstractModel
{
    /**
     * @var string Database name

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DatabaseName;

    /**
     * @var array Permission name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Permissions;

    /**
     * @param string $DatabaseName Database name

Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $Permissions Permission name
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("Permissions",$param) and $param["Permissions"] !== null) {
            $this->Permissions = $param["Permissions"];
        }
    }
}
