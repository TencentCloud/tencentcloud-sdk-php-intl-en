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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatabaseAuditRecords request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getStartTime() Obtain Start time
 * @method void setStartTime(string $StartTime) Set Start time
 * @method string getEndTime() Obtain End time
 * @method void setEndTime(string $EndTime) Set End time
 * @method integer getPageSize() Obtain Paging
 * @method void setPageSize(integer $PageSize) Set Paging
 * @method integer getPageNum() Obtain Paging
 * @method void setPageNum(integer $PageNum) Set Paging
 * @method string getOrderType() Obtain Sort parameters
 * @method void setOrderType(string $OrderType) Set Sort parameters
 * @method string getUser() Obtain User
 * @method void setUser(string $User) Set User
 * @method string getDbName() Obtain Database
 * @method void setDbName(string $DbName) Set Database
 * @method string getSqlType() Obtain SQL type
 * @method void setSqlType(string $SqlType) Set SQL type
 * @method string getSql() Obtain SQL statement
 * @method void setSql(string $Sql) Set SQL statement
 * @method array getUsers() Obtain Users (multiple selections)
 * @method void setUsers(array $Users) Set Users (multiple selections)
 * @method array getDbNames() Obtain Databases (multiple selections)
 * @method void setDbNames(array $DbNames) Set Databases (multiple selections)
 * @method array getSqlTypes() Obtain SQL types (multiple selections)
 * @method void setSqlTypes(array $SqlTypes) Set SQL types (multiple selections)
 * @method array getCatalogs() Obtain Catalog names (multiple selections)
 * @method void setCatalogs(array $Catalogs) Set Catalog names (multiple selections)
 */
class DescribeDatabaseAuditRecordsRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Start time
     */
    public $StartTime;

    /**
     * @var string End time
     */
    public $EndTime;

    /**
     * @var integer Paging
     */
    public $PageSize;

    /**
     * @var integer Paging
     */
    public $PageNum;

    /**
     * @var string Sort parameters
     */
    public $OrderType;

    /**
     * @var string User
     */
    public $User;

    /**
     * @var string Database
     */
    public $DbName;

    /**
     * @var string SQL type
     */
    public $SqlType;

    /**
     * @var string SQL statement
     */
    public $Sql;

    /**
     * @var array Users (multiple selections)
     */
    public $Users;

    /**
     * @var array Databases (multiple selections)
     */
    public $DbNames;

    /**
     * @var array SQL types (multiple selections)
     */
    public $SqlTypes;

    /**
     * @var array Catalog names (multiple selections)
     */
    public $Catalogs;

    /**
     * @param string $InstanceId Instance ID
     * @param string $StartTime Start time
     * @param string $EndTime End time
     * @param integer $PageSize Paging
     * @param integer $PageNum Paging
     * @param string $OrderType Sort parameters
     * @param string $User User
     * @param string $DbName Database
     * @param string $SqlType SQL type
     * @param string $Sql SQL statement
     * @param array $Users Users (multiple selections)
     * @param array $DbNames Databases (multiple selections)
     * @param array $SqlTypes SQL types (multiple selections)
     * @param array $Catalogs Catalog names (multiple selections)
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("SqlType",$param) and $param["SqlType"] !== null) {
            $this->SqlType = $param["SqlType"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = $param["Users"];
        }

        if (array_key_exists("DbNames",$param) and $param["DbNames"] !== null) {
            $this->DbNames = $param["DbNames"];
        }

        if (array_key_exists("SqlTypes",$param) and $param["SqlTypes"] !== null) {
            $this->SqlTypes = $param["SqlTypes"];
        }

        if (array_key_exists("Catalogs",$param) and $param["Catalogs"] !== null) {
            $this->Catalogs = $param["Catalogs"];
        }
    }
}
