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
 * ExportInstanceSlowQueries request structure.
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getStartTime() Obtain Transaction start time
 * @method void setStartTime(string $StartTime) Set Transaction start time
 * @method string getEndTime() Obtain Transaction end time
 * @method void setEndTime(string $EndTime) Set Transaction end time
 * @method integer getLimit() Obtain Maximum number
 * @method void setLimit(integer $Limit) Set Maximum number
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method string getUsername() Obtain Username
 * @method void setUsername(string $Username) Set Username
 * @method string getHost() Obtain Client host
 * @method void setHost(string $Host) Set Client host
 * @method string getDatabase() Obtain Database name
 * @method void setDatabase(string $Database) Set Database name
 * @method string getFileType() Obtain File type. Valid values: csv, original.
 * @method void setFileType(string $FileType) Set File type. Valid values: csv, original.
 * @method string getOrderBy() Obtain Sorting field. Valid values: `QueryTime`, `LockTime`, `RowsExamined`, and `RowsSent`.
 * @method void setOrderBy(string $OrderBy) Set Sorting field. Valid values: `QueryTime`, `LockTime`, `RowsExamined`, and `RowsSent`.
 * @method string getOrderByType() Obtain Sorting order. Valid values: `asc`, `desc`.
 * @method void setOrderByType(string $OrderByType) Set Sorting order. Valid values: `asc`, `desc`.
 */
class ExportInstanceSlowQueriesRequest extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string Transaction start time
     */
    public $StartTime;

    /**
     * @var string Transaction end time
     */
    public $EndTime;

    /**
     * @var integer Maximum number
     */
    public $Limit;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var string Username
     */
    public $Username;

    /**
     * @var string Client host
     */
    public $Host;

    /**
     * @var string Database name
     */
    public $Database;

    /**
     * @var string File type. Valid values: csv, original.
     */
    public $FileType;

    /**
     * @var string Sorting field. Valid values: `QueryTime`, `LockTime`, `RowsExamined`, and `RowsSent`.
     */
    public $OrderBy;

    /**
     * @var string Sorting order. Valid values: `asc`, `desc`.
     */
    public $OrderByType;

    /**
     * @param string $InstanceId Instance ID
     * @param string $StartTime Transaction start time
     * @param string $EndTime Transaction end time
     * @param integer $Limit Maximum number
     * @param integer $Offset Offset
     * @param string $Username Username
     * @param string $Host Client host
     * @param string $Database Database name
     * @param string $FileType File type. Valid values: csv, original.
     * @param string $OrderBy Sorting field. Valid values: `QueryTime`, `LockTime`, `RowsExamined`, and `RowsSent`.
     * @param string $OrderByType Sorting order. Valid values: `asc`, `desc`.
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
