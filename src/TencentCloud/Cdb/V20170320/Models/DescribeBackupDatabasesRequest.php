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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupDatabases request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method string getStartTime() Obtain Start time in the format of yyyy-MM-dd HH:mm:ss, such as 2017-07-12 10:29:20.
 * @method void setStartTime(string $StartTime) Set Start time in the format of yyyy-MM-dd HH:mm:ss, such as 2017-07-12 10:29:20.
 * @method string getSearchDatabase() Obtain Prefix of the database to be queried.
 * @method void setSearchDatabase(string $SearchDatabase) Set Prefix of the database to be queried.
 * @method integer getOffset() Obtain Pagination offset.
 * @method void setOffset(integer $Offset) Set Pagination offset.
 * @method integer getLimit() Obtain Number of entries per page. Value range: 1-2,000.
 * @method void setLimit(integer $Limit) Set Number of entries per page. Value range: 1-2,000.
 */
class DescribeBackupDatabasesRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     */
    public $InstanceId;

    /**
     * @var string Start time in the format of yyyy-MM-dd HH:mm:ss, such as 2017-07-12 10:29:20.
     */
    public $StartTime;

    /**
     * @var string Prefix of the database to be queried.
     */
    public $SearchDatabase;

    /**
     * @var integer Pagination offset.
     */
    public $Offset;

    /**
     * @var integer Number of entries per page. Value range: 1-2,000.
     */
    public $Limit;

    /**
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     * @param string $StartTime Start time in the format of yyyy-MM-dd HH:mm:ss, such as 2017-07-12 10:29:20.
     * @param string $SearchDatabase Prefix of the database to be queried.
     * @param integer $Offset Pagination offset.
     * @param integer $Limit Number of entries per page. Value range: 1-2,000.
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

        if (array_key_exists("SearchDatabase",$param) and $param["SearchDatabase"] !== null) {
            $this->SearchDatabase = $param["SearchDatabase"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
