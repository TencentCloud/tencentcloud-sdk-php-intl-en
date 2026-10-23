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
 * ExportInstanceSlowQueries request structure.
 *
 * @method string getInstanceId() Obtain Instance ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID.
 * @method string getStartTime() Obtain Earliest transaction start time.
 * @method void setStartTime(string $StartTime) Set Earliest transaction start time.
 * @method string getEndTime() Obtain Latest transaction start time.
 * @method void setEndTime(string $EndTime) Set Latest transaction start time.
 * @method integer getLimit() Obtain Limit of Items
 * @method void setLimit(integer $Limit) Set Limit of Items
 * @method integer getOffset() Obtain Offset.
 * @method void setOffset(integer $Offset) Set Offset.
 * @method string getUsername() Obtain Username.
 * @method void setUsername(string $Username) Set Username.
 * @method string getHost() Obtain Client host
 * @method void setHost(string $Host) Set Client host
 * @method string getDatabase() Obtain Database name
 * @method void setDatabase(string $Database) Set Database name
 * @method string getFileType() Obtain File type. Available values: csv, original
 * @method void setFileType(string $FileType) Set File type. Available values: csv, original
 * @method string getOrderBy() Obtain Sorting field. Available values: QueryTime, LockTime, RowsExamined, RowsSent
 * @method void setOrderBy(string $OrderBy) Set Sorting field. Available values: QueryTime, LockTime, RowsExamined, RowsSent
 * @method string getOrderByType() Obtain Sorting type. Valid values: asc and desc.
 * @method void setOrderByType(string $OrderByType) Set Sorting type. Valid values: asc and desc.
 */
class ExportInstanceSlowQueriesRequest extends AbstractModel
{
    /**
     * @var string Instance ID.
     */
    public $InstanceId;

    /**
     * @var string Earliest transaction start time.
     */
    public $StartTime;

    /**
     * @var string Latest transaction start time.
     */
    public $EndTime;

    /**
     * @var integer Limit of Items
     */
    public $Limit;

    /**
     * @var integer Offset.
     */
    public $Offset;

    /**
     * @var string Username.
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
     * @var string File type. Available values: csv, original
     */
    public $FileType;

    /**
     * @var string Sorting field. Available values: QueryTime, LockTime, RowsExamined, RowsSent
     */
    public $OrderBy;

    /**
     * @var string Sorting type. Valid values: asc and desc.
     */
    public $OrderByType;

    /**
     * @param string $InstanceId Instance ID.
     * @param string $StartTime Earliest transaction start time.
     * @param string $EndTime Latest transaction start time.
     * @param integer $Limit Limit of Items
     * @param integer $Offset Offset.
     * @param string $Username Username.
     * @param string $Host Client host
     * @param string $Database Database name
     * @param string $FileType File type. Available values: csv, original
     * @param string $OrderBy Sorting field. Available values: QueryTime, LockTime, RowsExamined, RowsSent
     * @param string $OrderByType Sorting type. Valid values: asc and desc.
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
