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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClasses request structure.
 *
 * @method string getZone() Obtain AZ ID, which can be obtained through the `DescribeZones` API.
 * @method void setZone(string $Zone) Set AZ ID, which can be obtained through the `DescribeZones` API.
 * @method string getDBEngine() Obtain Database engines. Valid values:
1. `postgresql` (TencentDB for PostgreSQL)
2. `mssql_compatible` (MSSQL compatible-TencentDB for PostgreSQL)
 * @method void setDBEngine(string $DBEngine) Set Database engines. Valid values:
1. `postgresql` (TencentDB for PostgreSQL)
2. `mssql_compatible` (MSSQL compatible-TencentDB for PostgreSQL)
 * @method string getDBMajorVersion() Obtain Major version of a database, such as 12 or 13, which can be obtained through the `DescribeDBVersions` API.
 * @method void setDBMajorVersion(string $DBMajorVersion) Set Major version of a database, such as 12 or 13, which can be obtained through the `DescribeDBVersions` API.
 */
class DescribeClassesRequest extends AbstractModel
{
    /**
     * @var string AZ ID, which can be obtained through the `DescribeZones` API.
     */
    public $Zone;

    /**
     * @var string Database engines. Valid values:
1. `postgresql` (TencentDB for PostgreSQL)
2. `mssql_compatible` (MSSQL compatible-TencentDB for PostgreSQL)
     */
    public $DBEngine;

    /**
     * @var string Major version of a database, such as 12 or 13, which can be obtained through the `DescribeDBVersions` API.
     */
    public $DBMajorVersion;

    /**
     * @param string $Zone AZ ID, which can be obtained through the `DescribeZones` API.
     * @param string $DBEngine Database engines. Valid values:
1. `postgresql` (TencentDB for PostgreSQL)
2. `mssql_compatible` (MSSQL compatible-TencentDB for PostgreSQL)
     * @param string $DBMajorVersion Major version of a database, such as 12 or 13, which can be obtained through the `DescribeDBVersions` API.
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("DBEngine",$param) and $param["DBEngine"] !== null) {
            $this->DBEngine = $param["DBEngine"];
        }

        if (array_key_exists("DBMajorVersion",$param) and $param["DBMajorVersion"] !== null) {
            $this->DBMajorVersion = $param["DBMajorVersion"];
        }
    }
}
