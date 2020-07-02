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
 * DescribeDBBackups request structure.
 *
 * @method string getDBInstanceId() Obtain Instance ID in the format of postgres-4wdeb0zv.
 * @method void setDBInstanceId(string $DBInstanceId) Set Instance ID in the format of postgres-4wdeb0zv.
 * @method integer getType() Obtain Backup mode (1: full). Currently, only full backup is supported. The value is 1.
 * @method void setType(integer $Type) Set Backup mode (1: full). Currently, only full backup is supported. The value is 1.
 * @method string getStartTime() Obtain Query start time in the format of 2018-06-10 17:06:38, which cannot be more than 7 days ago
 * @method void setStartTime(string $StartTime) Set Query start time in the format of 2018-06-10 17:06:38, which cannot be more than 7 days ago
 * @method string getEndTime() Obtain Query end time in the format of 2018-06-10 17:06:38
 * @method void setEndTime(string $EndTime) Set Query end time in the format of 2018-06-10 17:06:38
 * @method integer getLimit() Obtain Number of entries to be returned per page for backup list. Default value: 20. Minimum value: 1. Maximum value: 100. (If this parameter is left empty or 0, the default value will be used)
 * @method void setLimit(integer $Limit) Set Number of entries to be returned per page for backup list. Default value: 20. Minimum value: 1. Maximum value: 100. (If this parameter is left empty or 0, the default value will be used)
 * @method integer getOffset() Obtain Page number for data return in paged query. Pagination starts from 0. Default value: 0.
 * @method void setOffset(integer $Offset) Set Page number for data return in paged query. Pagination starts from 0. Default value: 0.
 */
class DescribeDBBackupsRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of postgres-4wdeb0zv.
     */
    public $DBInstanceId;

    /**
     * @var integer Backup mode (1: full). Currently, only full backup is supported. The value is 1.
     */
    public $Type;

    /**
     * @var string Query start time in the format of 2018-06-10 17:06:38, which cannot be more than 7 days ago
     */
    public $StartTime;

    /**
     * @var string Query end time in the format of 2018-06-10 17:06:38
     */
    public $EndTime;

    /**
     * @var integer Number of entries to be returned per page for backup list. Default value: 20. Minimum value: 1. Maximum value: 100. (If this parameter is left empty or 0, the default value will be used)
     */
    public $Limit;

    /**
     * @var integer Page number for data return in paged query. Pagination starts from 0. Default value: 0.
     */
    public $Offset;

    /**
     * @param string $DBInstanceId Instance ID in the format of postgres-4wdeb0zv.
     * @param integer $Type Backup mode (1: full). Currently, only full backup is supported. The value is 1.
     * @param string $StartTime Query start time in the format of 2018-06-10 17:06:38, which cannot be more than 7 days ago
     * @param string $EndTime Query end time in the format of 2018-06-10 17:06:38
     * @param integer $Limit Number of entries to be returned per page for backup list. Default value: 20. Minimum value: 1. Maximum value: 100. (If this parameter is left empty or 0, the default value will be used)
     * @param integer $Offset Page number for data return in paged query. Pagination starts from 0. Default value: 0.
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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
    }
}
