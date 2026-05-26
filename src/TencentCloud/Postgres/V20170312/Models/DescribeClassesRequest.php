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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClasses request structure.
 *
 * @method string getZone() Obtain <p>Availability zone name, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/409/16769?from_cn_redirect=1">DescribeZones</a> API.</p>
 * @method void setZone(string $Zone) Set <p>Availability zone name, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/409/16769?from_cn_redirect=1">DescribeZones</a> API.</p>
 * @method string getDBEngine() Obtain <p>Database engine. Valid values:<br>1. postgresql (TencentDB for PostgreSQL).<br>2. mssql_compatible (MSSQL compatible - TencentDB for PostgreSQL).</p>
 * @method void setDBEngine(string $DBEngine) Set <p>Database engine. Valid values:<br>1. postgresql (TencentDB for PostgreSQL).<br>2. mssql_compatible (MSSQL compatible - TencentDB for PostgreSQL).</p>
 * @method string getDBMajorVersion() Obtain <p>Database major version number, such as 12 or 13, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/409/89018?from_cn_redirect=1">DescribeDBVersions</a> API.</p>
 * @method void setDBMajorVersion(string $DBMajorVersion) Set <p>Database major version number, such as 12 or 13, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/409/89018?from_cn_redirect=1">DescribeDBVersions</a> API.</p>
 * @method string getStorageType() Obtain <p>Instance storage type. The supported specifications are returned based on the storage type.</p><p>Enumeration values:</p><ul><li>PHYSICAL_LOCAL_SSD: local SSD of physical machine.</li><li>CLOUD_PREMIUM: Premium Disk.</li><li>CLOUD_SSD: Cloud SSD.</li><li>CLOUD_HSSD: Enhanced SSD.</li></ul><p>Default value: PHYSICAL_LOCAL_SSD.</p>
 * @method void setStorageType(string $StorageType) Set <p>Instance storage type. The supported specifications are returned based on the storage type.</p><p>Enumeration values:</p><ul><li>PHYSICAL_LOCAL_SSD: local SSD of physical machine.</li><li>CLOUD_PREMIUM: Premium Disk.</li><li>CLOUD_SSD: Cloud SSD.</li><li>CLOUD_HSSD: Enhanced SSD.</li></ul><p>Default value: PHYSICAL_LOCAL_SSD.</p>
 */
class DescribeClassesRequest extends AbstractModel
{
    /**
     * @var string <p>Availability zone name, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/409/16769?from_cn_redirect=1">DescribeZones</a> API.</p>
     */
    public $Zone;

    /**
     * @var string <p>Database engine. Valid values:<br>1. postgresql (TencentDB for PostgreSQL).<br>2. mssql_compatible (MSSQL compatible - TencentDB for PostgreSQL).</p>
     */
    public $DBEngine;

    /**
     * @var string <p>Database major version number, such as 12 or 13, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/409/89018?from_cn_redirect=1">DescribeDBVersions</a> API.</p>
     */
    public $DBMajorVersion;

    /**
     * @var string <p>Instance storage type. The supported specifications are returned based on the storage type.</p><p>Enumeration values:</p><ul><li>PHYSICAL_LOCAL_SSD: local SSD of physical machine.</li><li>CLOUD_PREMIUM: Premium Disk.</li><li>CLOUD_SSD: Cloud SSD.</li><li>CLOUD_HSSD: Enhanced SSD.</li></ul><p>Default value: PHYSICAL_LOCAL_SSD.</p>
     */
    public $StorageType;

    /**
     * @param string $Zone <p>Availability zone name, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/409/16769?from_cn_redirect=1">DescribeZones</a> API.</p>
     * @param string $DBEngine <p>Database engine. Valid values:<br>1. postgresql (TencentDB for PostgreSQL).<br>2. mssql_compatible (MSSQL compatible - TencentDB for PostgreSQL).</p>
     * @param string $DBMajorVersion <p>Database major version number, such as 12 or 13, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/409/89018?from_cn_redirect=1">DescribeDBVersions</a> API.</p>
     * @param string $StorageType <p>Instance storage type. The supported specifications are returned based on the storage type.</p><p>Enumeration values:</p><ul><li>PHYSICAL_LOCAL_SSD: local SSD of physical machine.</li><li>CLOUD_PREMIUM: Premium Disk.</li><li>CLOUD_SSD: Cloud SSD.</li><li>CLOUD_HSSD: Enhanced SSD.</li></ul><p>Default value: PHYSICAL_LOCAL_SSD.</p>
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

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }
    }
}
