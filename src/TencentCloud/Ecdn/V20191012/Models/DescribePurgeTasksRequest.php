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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePurgeTasks request structure.
 *
 * @method string getPurgeType() Obtain Purge type to be queried. url: query URL purge records; path: query directory purge records.
 * @method void setPurgeType(string $PurgeType) Set Purge type to be queried. url: query URL purge records; path: query directory purge records.
 * @method string getStartTime() Obtain Start time, such as 2018-08-08 00:00:00
 * @method void setStartTime(string $StartTime) Set Start time, such as 2018-08-08 00:00:00
 * @method string getEndTime() Obtain End time, such as 2018-08-08 23:59:59
 * @method void setEndTime(string $EndTime) Set End time, such as 2018-08-08 23:59:59
 * @method string getTaskId() Obtain Task ID returned during submission. Either `TaskId` or start time must be specified for a query.
 * @method void setTaskId(string $TaskId) Set Task ID returned during submission. Either `TaskId` or start time must be specified for a query.
 * @method integer getOffset() Obtain Pagination offset. Default value: 0 (starting from entry 0).
 * @method void setOffset(integer $Offset) Set Pagination offset. Default value: 0 (starting from entry 0).
 * @method integer getLimit() Obtain Pagination limit. Default value: 20.
 * @method void setLimit(integer $Limit) Set Pagination limit. Default value: 20.
 * @method string getKeyword() Obtain Query keyword. Please enter a domain name or full URL beginning with `http(s)://`.
 * @method void setKeyword(string $Keyword) Set Query keyword. Please enter a domain name or full URL beginning with `http(s)://`.
 * @method string getStatus() Obtain Specified task status to be queried. fail: failed, done: succeeded, process: purging.
 * @method void setStatus(string $Status) Set Specified task status to be queried. fail: failed, done: succeeded, process: purging.
 */
class DescribePurgeTasksRequest extends AbstractModel
{
    /**
     * @var string Purge type to be queried. url: query URL purge records; path: query directory purge records.
     */
    public $PurgeType;

    /**
     * @var string Start time, such as 2018-08-08 00:00:00
     */
    public $StartTime;

    /**
     * @var string End time, such as 2018-08-08 23:59:59
     */
    public $EndTime;

    /**
     * @var string Task ID returned during submission. Either `TaskId` or start time must be specified for a query.
     */
    public $TaskId;

    /**
     * @var integer Pagination offset. Default value: 0 (starting from entry 0).
     */
    public $Offset;

    /**
     * @var integer Pagination limit. Default value: 20.
     */
    public $Limit;

    /**
     * @var string Query keyword. Please enter a domain name or full URL beginning with `http(s)://`.
     */
    public $Keyword;

    /**
     * @var string Specified task status to be queried. fail: failed, done: succeeded, process: purging.
     */
    public $Status;

    /**
     * @param string $PurgeType Purge type to be queried. url: query URL purge records; path: query directory purge records.
     * @param string $StartTime Start time, such as 2018-08-08 00:00:00
     * @param string $EndTime End time, such as 2018-08-08 23:59:59
     * @param string $TaskId Task ID returned during submission. Either `TaskId` or start time must be specified for a query.
     * @param integer $Offset Pagination offset. Default value: 0 (starting from entry 0).
     * @param integer $Limit Pagination limit. Default value: 20.
     * @param string $Keyword Query keyword. Please enter a domain name or full URL beginning with `http(s)://`.
     * @param string $Status Specified task status to be queried. fail: failed, done: succeeded, process: purging.
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
        if (array_key_exists("PurgeType",$param) and $param["PurgeType"] !== null) {
            $this->PurgeType = $param["PurgeType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
