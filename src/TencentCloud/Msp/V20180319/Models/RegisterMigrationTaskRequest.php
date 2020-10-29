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
namespace TencentCloud\Msp\V20180319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RegisterMigrationTask request structure.
 *
 * @method string getTaskType() Obtain Task type, valid values include `database` (database migration), `file` (file migration) or `host` (host migration).
 * @method void setTaskType(string $TaskType) Set Task type, valid values include `database` (database migration), `file` (file migration) or `host` (host migration).
 * @method string getTaskName() Obtain Task name
 * @method void setTaskName(string $TaskName) Set Task name
 * @method string getServiceSupplier() Obtain Service supplier name
 * @method void setServiceSupplier(string $ServiceSupplier) Set Service supplier name
 * @method string getCreateTime() Obtain Migration task creation time
 * @method void setCreateTime(string $CreateTime) Set Migration task creation time
 * @method string getUpdateTime() Obtain Migration task update time
 * @method void setUpdateTime(string $UpdateTime) Set Migration task update time
 * @method string getMigrateClass() Obtain Migration type, for example `mysql:mysql` in database migration means migration from mysql to mysql and `oss:cos` in file migration means migration from Alibaba Cloud OSS to Tencent COS.
 * @method void setMigrateClass(string $MigrateClass) Set Migration type, for example `mysql:mysql` in database migration means migration from mysql to mysql and `oss:cos` in file migration means migration from Alibaba Cloud OSS to Tencent COS.
 * @method SrcInfo getSrcInfo() Obtain Migration task source information
 * @method void setSrcInfo(SrcInfo $SrcInfo) Set Migration task source information
 * @method DstInfo getDstInfo() Obtain Migration task destination information
 * @method void setDstInfo(DstInfo $DstInfo) Set Migration task destination information
 * @method string getSrcAccessType() Obtain Source instance access type. Valid values for database migration include `extranet` (public network), `cvm` (CVM-created instance), `dcg` (Direct Connect-enabled instance), `vpncloud` (Tencent Cloud VPN-enabled instance), `vpnselfbuild` (self-built VPN-enabled instance), `cdb` (TencentDB instance)
 * @method void setSrcAccessType(string $SrcAccessType) Set Source instance access type. Valid values for database migration include `extranet` (public network), `cvm` (CVM-created instance), `dcg` (Direct Connect-enabled instance), `vpncloud` (Tencent Cloud VPN-enabled instance), `vpnselfbuild` (self-built VPN-enabled instance), `cdb` (TencentDB instance)
 * @method string getSrcDatabaseType() Obtain Database type of the source instance. Valid values for database migration: `mysql`, `redis`, `percona`, `mongodb`, `postgresql`, `sqlserver`, `mariadb`
 * @method void setSrcDatabaseType(string $SrcDatabaseType) Set Database type of the source instance. Valid values for database migration: `mysql`, `redis`, `percona`, `mongodb`, `postgresql`, `sqlserver`, `mariadb`
 * @method string getDstAccessType() Obtain Target instance access type. Valid values for database migration include `extranet` (public network), `cvm` (CVM-created instance), `dcg` (Direct Connect-enabled instance), `vpncloud` (Tencent Cloud VPN-enabled instance), `vpnselfbuild` (self-built VPN-enabled instance), `cdb` (TencentDB instance)
 * @method void setDstAccessType(string $DstAccessType) Set Target instance access type. Valid values for database migration include `extranet` (public network), `cvm` (CVM-created instance), `dcg` (Direct Connect-enabled instance), `vpncloud` (Tencent Cloud VPN-enabled instance), `vpnselfbuild` (self-built VPN-enabled instance), `cdb` (TencentDB instance)
 * @method string getDstDatabaseType() Obtain Database type of the target instance. Valid values for database migration: `mysql`, `redis`, `percona`, `mongodb`, `postgresql`, `sqlserver`, `mariadb`
 * @method void setDstDatabaseType(string $DstDatabaseType) Set Database type of the target instance. Valid values for database migration: `mysql`, `redis`, `percona`, `mongodb`, `postgresql`, `sqlserver`, `mariadb`
 */
class RegisterMigrationTaskRequest extends AbstractModel
{
    /**
     * @var string Task type, valid values include `database` (database migration), `file` (file migration) or `host` (host migration).
     */
    public $TaskType;

    /**
     * @var string Task name
     */
    public $TaskName;

    /**
     * @var string Service supplier name
     */
    public $ServiceSupplier;

    /**
     * @var string Migration task creation time
     */
    public $CreateTime;

    /**
     * @var string Migration task update time
     */
    public $UpdateTime;

    /**
     * @var string Migration type, for example `mysql:mysql` in database migration means migration from mysql to mysql and `oss:cos` in file migration means migration from Alibaba Cloud OSS to Tencent COS.
     */
    public $MigrateClass;

    /**
     * @var SrcInfo Migration task source information
     */
    public $SrcInfo;

    /**
     * @var DstInfo Migration task destination information
     */
    public $DstInfo;

    /**
     * @var string Source instance access type. Valid values for database migration include `extranet` (public network), `cvm` (CVM-created instance), `dcg` (Direct Connect-enabled instance), `vpncloud` (Tencent Cloud VPN-enabled instance), `vpnselfbuild` (self-built VPN-enabled instance), `cdb` (TencentDB instance)
     */
    public $SrcAccessType;

    /**
     * @var string Database type of the source instance. Valid values for database migration: `mysql`, `redis`, `percona`, `mongodb`, `postgresql`, `sqlserver`, `mariadb`
     */
    public $SrcDatabaseType;

    /**
     * @var string Target instance access type. Valid values for database migration include `extranet` (public network), `cvm` (CVM-created instance), `dcg` (Direct Connect-enabled instance), `vpncloud` (Tencent Cloud VPN-enabled instance), `vpnselfbuild` (self-built VPN-enabled instance), `cdb` (TencentDB instance)
     */
    public $DstAccessType;

    /**
     * @var string Database type of the target instance. Valid values for database migration: `mysql`, `redis`, `percona`, `mongodb`, `postgresql`, `sqlserver`, `mariadb`
     */
    public $DstDatabaseType;

    /**
     * @param string $TaskType Task type, valid values include `database` (database migration), `file` (file migration) or `host` (host migration).
     * @param string $TaskName Task name
     * @param string $ServiceSupplier Service supplier name
     * @param string $CreateTime Migration task creation time
     * @param string $UpdateTime Migration task update time
     * @param string $MigrateClass Migration type, for example `mysql:mysql` in database migration means migration from mysql to mysql and `oss:cos` in file migration means migration from Alibaba Cloud OSS to Tencent COS.
     * @param SrcInfo $SrcInfo Migration task source information
     * @param DstInfo $DstInfo Migration task destination information
     * @param string $SrcAccessType Source instance access type. Valid values for database migration include `extranet` (public network), `cvm` (CVM-created instance), `dcg` (Direct Connect-enabled instance), `vpncloud` (Tencent Cloud VPN-enabled instance), `vpnselfbuild` (self-built VPN-enabled instance), `cdb` (TencentDB instance)
     * @param string $SrcDatabaseType Database type of the source instance. Valid values for database migration: `mysql`, `redis`, `percona`, `mongodb`, `postgresql`, `sqlserver`, `mariadb`
     * @param string $DstAccessType Target instance access type. Valid values for database migration include `extranet` (public network), `cvm` (CVM-created instance), `dcg` (Direct Connect-enabled instance), `vpncloud` (Tencent Cloud VPN-enabled instance), `vpnselfbuild` (self-built VPN-enabled instance), `cdb` (TencentDB instance)
     * @param string $DstDatabaseType Database type of the target instance. Valid values for database migration: `mysql`, `redis`, `percona`, `mongodb`, `postgresql`, `sqlserver`, `mariadb`
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("ServiceSupplier",$param) and $param["ServiceSupplier"] !== null) {
            $this->ServiceSupplier = $param["ServiceSupplier"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("MigrateClass",$param) and $param["MigrateClass"] !== null) {
            $this->MigrateClass = $param["MigrateClass"];
        }

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new SrcInfo();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
        }

        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new DstInfo();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }

        if (array_key_exists("SrcAccessType",$param) and $param["SrcAccessType"] !== null) {
            $this->SrcAccessType = $param["SrcAccessType"];
        }

        if (array_key_exists("SrcDatabaseType",$param) and $param["SrcDatabaseType"] !== null) {
            $this->SrcDatabaseType = $param["SrcDatabaseType"];
        }

        if (array_key_exists("DstAccessType",$param) and $param["DstAccessType"] !== null) {
            $this->DstAccessType = $param["DstAccessType"];
        }

        if (array_key_exists("DstDatabaseType",$param) and $param["DstDatabaseType"] !== null) {
            $this->DstDatabaseType = $param["DstDatabaseType"];
        }
    }
}
