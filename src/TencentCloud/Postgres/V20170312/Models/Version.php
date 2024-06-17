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
 * Database version information
 *
 * @method string getDBEngine() Obtain Database engines. Valid values:
1. `postgresql` (TencentDB for PostgreSQL)
2. `mssql_compatible` (MSSQL compatible-TencentDB for PostgreSQL)
 * @method void setDBEngine(string $DBEngine) Set Database engines. Valid values:
1. `postgresql` (TencentDB for PostgreSQL)
2. `mssql_compatible` (MSSQL compatible-TencentDB for PostgreSQL)
 * @method string getDBVersion() Obtain Database version, such as 12.4.
 * @method void setDBVersion(string $DBVersion) Set Database version, such as 12.4.
 * @method string getDBMajorVersion() Obtain Database major version, such as 12.
 * @method void setDBMajorVersion(string $DBMajorVersion) Set Database major version, such as 12.
 * @method string getDBKernelVersion() Obtain Database kernel version, such as v12.4_r1.3.
 * @method void setDBKernelVersion(string $DBKernelVersion) Set Database kernel version, such as v12.4_r1.3.
 * @method array getSupportedFeatureNames() Obtain List of features supported by the database kernel, such as:
TDE: Supports data encryption.
 * @method void setSupportedFeatureNames(array $SupportedFeatureNames) Set List of features supported by the database kernel, such as:
TDE: Supports data encryption.
 * @method string getStatus() Obtain Database version status. Valid values:
`AVAILABLE`.
`DEPRECATED`.
 * @method void setStatus(string $Status) Set Database version status. Valid values:
`AVAILABLE`.
`DEPRECATED`.
 * @method array getAvailableUpgradeTarget() Obtain List of versions to which this database version (`DBKernelVersion`) can be upgraded, including minor and major version numbers available for upgrade (complete kernel version format example: v15.1_v1.6).
 * @method void setAvailableUpgradeTarget(array $AvailableUpgradeTarget) Set List of versions to which this database version (`DBKernelVersion`) can be upgraded, including minor and major version numbers available for upgrade (complete kernel version format example: v15.1_v1.6).
 */
class Version extends AbstractModel
{
    /**
     * @var string Database engines. Valid values:
1. `postgresql` (TencentDB for PostgreSQL)
2. `mssql_compatible` (MSSQL compatible-TencentDB for PostgreSQL)
     */
    public $DBEngine;

    /**
     * @var string Database version, such as 12.4.
     */
    public $DBVersion;

    /**
     * @var string Database major version, such as 12.
     */
    public $DBMajorVersion;

    /**
     * @var string Database kernel version, such as v12.4_r1.3.
     */
    public $DBKernelVersion;

    /**
     * @var array List of features supported by the database kernel, such as:
TDE: Supports data encryption.
     */
    public $SupportedFeatureNames;

    /**
     * @var string Database version status. Valid values:
`AVAILABLE`.
`DEPRECATED`.
     */
    public $Status;

    /**
     * @var array List of versions to which this database version (`DBKernelVersion`) can be upgraded, including minor and major version numbers available for upgrade (complete kernel version format example: v15.1_v1.6).
     */
    public $AvailableUpgradeTarget;

    /**
     * @param string $DBEngine Database engines. Valid values:
1. `postgresql` (TencentDB for PostgreSQL)
2. `mssql_compatible` (MSSQL compatible-TencentDB for PostgreSQL)
     * @param string $DBVersion Database version, such as 12.4.
     * @param string $DBMajorVersion Database major version, such as 12.
     * @param string $DBKernelVersion Database kernel version, such as v12.4_r1.3.
     * @param array $SupportedFeatureNames List of features supported by the database kernel, such as:
TDE: Supports data encryption.
     * @param string $Status Database version status. Valid values:
`AVAILABLE`.
`DEPRECATED`.
     * @param array $AvailableUpgradeTarget List of versions to which this database version (`DBKernelVersion`) can be upgraded, including minor and major version numbers available for upgrade (complete kernel version format example: v15.1_v1.6).
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
        if (array_key_exists("DBEngine",$param) and $param["DBEngine"] !== null) {
            $this->DBEngine = $param["DBEngine"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("DBMajorVersion",$param) and $param["DBMajorVersion"] !== null) {
            $this->DBMajorVersion = $param["DBMajorVersion"];
        }

        if (array_key_exists("DBKernelVersion",$param) and $param["DBKernelVersion"] !== null) {
            $this->DBKernelVersion = $param["DBKernelVersion"];
        }

        if (array_key_exists("SupportedFeatureNames",$param) and $param["SupportedFeatureNames"] !== null) {
            $this->SupportedFeatureNames = $param["SupportedFeatureNames"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AvailableUpgradeTarget",$param) and $param["AvailableUpgradeTarget"] !== null) {
            $this->AvailableUpgradeTarget = $param["AvailableUpgradeTarget"];
        }
    }
}
