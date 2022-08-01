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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePurgeTasks request structure.
 *
 * @method string getPurgeType() Obtain Specifies a purge type:
`url`: URL purge record
`path`: Directory purge record
 * @method void setPurgeType(string $PurgeType) Set Specifies a purge type:
`url`: URL purge record
`path`: Directory purge record
 * @method string getStartTime() Obtain Specifies the starting time of the period you want to query, such as `2018-08-08 00:00:00`
 * @method void setStartTime(string $StartTime) Set Specifies the starting time of the period you want to query, such as `2018-08-08 00:00:00`
 * @method string getEndTime() Obtain Specifies the end time of the period you want to query, such as 2018-08-08 23:59:59
 * @method void setEndTime(string $EndTime) Set Specifies the end time of the period you want to query, such as 2018-08-08 23:59:59
 * @method string getTaskId() Obtain Specifies a task ID when you want to query by task ID.
You must specify either a task ID or a starting time for your query.
 * @method void setTaskId(string $TaskId) Set Specifies a task ID when you want to query by task ID.
You must specify either a task ID or a starting time for your query.
 * @method integer getOffset() Obtain Offset for paginated queries. Default value: 0
 * @method void setOffset(integer $Offset) Set Offset for paginated queries. Default value: 0
 * @method integer getLimit() Obtain Limit on paginated queries. Default value: 20
 * @method void setLimit(integer $Limit) Set Limit on paginated queries. Default value: 20
 * @method string getKeyword() Obtain You can filter the results by domain name or a complete URL beginning with `http(s)://`
 * @method void setKeyword(string $Keyword) Set You can filter the results by domain name or a complete URL beginning with `http(s)://`
 * @method string getStatus() Obtain Specifies a task state for your query:
`fail`: purge failed
`done`: purge succeeded
`process`: purge in progress
 * @method void setStatus(string $Status) Set Specifies a task state for your query:
`fail`: purge failed
`done`: purge succeeded
`process`: purge in progress
 * @method string getArea() Obtain Specifies a purge region for your query:
`mainland`: within Mainland China
`overseas`: outside Mainland China
`global`: global
 * @method void setArea(string $Area) Set Specifies a purge region for your query:
`mainland`: within Mainland China
`overseas`: outside Mainland China
`global`: global
 */
class DescribePurgeTasksRequest extends AbstractModel
{
    /**
     * @var string Specifies a purge type:
`url`: URL purge record
`path`: Directory purge record
     */
    public $PurgeType;

    /**
     * @var string Specifies the starting time of the period you want to query, such as `2018-08-08 00:00:00`
     */
    public $StartTime;

    /**
     * @var string Specifies the end time of the period you want to query, such as 2018-08-08 23:59:59
     */
    public $EndTime;

    /**
     * @var string Specifies a task ID when you want to query by task ID.
You must specify either a task ID or a starting time for your query.
     */
    public $TaskId;

    /**
     * @var integer Offset for paginated queries. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Limit on paginated queries. Default value: 20
     */
    public $Limit;

    /**
     * @var string You can filter the results by domain name or a complete URL beginning with `http(s)://`
     */
    public $Keyword;

    /**
     * @var string Specifies a task state for your query:
`fail`: purge failed
`done`: purge succeeded
`process`: purge in progress
     */
    public $Status;

    /**
     * @var string Specifies a purge region for your query:
`mainland`: within Mainland China
`overseas`: outside Mainland China
`global`: global
     */
    public $Area;

    /**
     * @param string $PurgeType Specifies a purge type:
`url`: URL purge record
`path`: Directory purge record
     * @param string $StartTime Specifies the starting time of the period you want to query, such as `2018-08-08 00:00:00`
     * @param string $EndTime Specifies the end time of the period you want to query, such as 2018-08-08 23:59:59
     * @param string $TaskId Specifies a task ID when you want to query by task ID.
You must specify either a task ID or a starting time for your query.
     * @param integer $Offset Offset for paginated queries. Default value: 0
     * @param integer $Limit Limit on paginated queries. Default value: 20
     * @param string $Keyword You can filter the results by domain name or a complete URL beginning with `http(s)://`
     * @param string $Status Specifies a task state for your query:
`fail`: purge failed
`done`: purge succeeded
`process`: purge in progress
     * @param string $Area Specifies a purge region for your query:
`mainland`: within Mainland China
`overseas`: outside Mainland China
`global`: global
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

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
