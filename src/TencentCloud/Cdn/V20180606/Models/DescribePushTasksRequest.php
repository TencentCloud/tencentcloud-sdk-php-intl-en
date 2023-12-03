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
 * DescribePushTasks request structure.
 *
 * @method string getStartTime() Obtain Starting time, such as `2018-08-08 00:00:00`
 * @method void setStartTime(string $StartTime) Set Starting time, such as `2018-08-08 00:00:00`
 * @method string getEndTime() Obtain End time, such as `2018-08-08 23:59:59`
 * @method void setEndTime(string $EndTime) Set End time, such as `2018-08-08 23:59:59`
 * @method string getTaskId() Obtain Specifies a task ID for your query.
You must specify either a task ID or a starting time.
 * @method void setTaskId(string $TaskId) Set Specifies a task ID for your query.
You must specify either a task ID or a starting time.
 * @method string getKeyword() Obtain Specifies a keyword for your query. Please enter a domain name or a complete URL beginning with `http(s)://`
 * @method void setKeyword(string $Keyword) Set Specifies a keyword for your query. Please enter a domain name or a complete URL beginning with `http(s)://`
 * @method integer getOffset() Obtain Offset for paginated queries. Default value: 0
 * @method void setOffset(integer $Offset) Set Offset for paginated queries. Default value: 0
 * @method integer getLimit() Obtain Limit on paginated queries. Default value: 20
 * @method void setLimit(integer $Limit) Set Limit on paginated queries. Default value: 20
 * @method string getArea() Obtain Specifies a region to query the prefetch records
`mainland`: Chinese mainland
`overseas`: Outside the Chinese mainland
`global`: Globe
 * @method void setArea(string $Area) Set Specifies a region to query the prefetch records
`mainland`: Chinese mainland
`overseas`: Outside the Chinese mainland
`global`: Globe
 * @method string getStatus() Obtain Queries the status of a specified task
`fail`: Prefetch failed
`done`: Prefetch succeeded
`process`: Prefetch in progress
`invalid`: Invalid prefetch with 4XX/5XX status code returned from the origin server
 * @method void setStatus(string $Status) Set Queries the status of a specified task
`fail`: Prefetch failed
`done`: Prefetch succeeded
`process`: Prefetch in progress
`invalid`: Invalid prefetch with 4XX/5XX status code returned from the origin server
 */
class DescribePushTasksRequest extends AbstractModel
{
    /**
     * @var string Starting time, such as `2018-08-08 00:00:00`
     */
    public $StartTime;

    /**
     * @var string End time, such as `2018-08-08 23:59:59`
     */
    public $EndTime;

    /**
     * @var string Specifies a task ID for your query.
You must specify either a task ID or a starting time.
     */
    public $TaskId;

    /**
     * @var string Specifies a keyword for your query. Please enter a domain name or a complete URL beginning with `http(s)://`
     */
    public $Keyword;

    /**
     * @var integer Offset for paginated queries. Default value: 0
     */
    public $Offset;

    /**
     * @var integer Limit on paginated queries. Default value: 20
     */
    public $Limit;

    /**
     * @var string Specifies a region to query the prefetch records
`mainland`: Chinese mainland
`overseas`: Outside the Chinese mainland
`global`: Globe
     */
    public $Area;

    /**
     * @var string Queries the status of a specified task
`fail`: Prefetch failed
`done`: Prefetch succeeded
`process`: Prefetch in progress
`invalid`: Invalid prefetch with 4XX/5XX status code returned from the origin server
     */
    public $Status;

    /**
     * @param string $StartTime Starting time, such as `2018-08-08 00:00:00`
     * @param string $EndTime End time, such as `2018-08-08 23:59:59`
     * @param string $TaskId Specifies a task ID for your query.
You must specify either a task ID or a starting time.
     * @param string $Keyword Specifies a keyword for your query. Please enter a domain name or a complete URL beginning with `http(s)://`
     * @param integer $Offset Offset for paginated queries. Default value: 0
     * @param integer $Limit Limit on paginated queries. Default value: 20
     * @param string $Area Specifies a region to query the prefetch records
`mainland`: Chinese mainland
`overseas`: Outside the Chinese mainland
`global`: Globe
     * @param string $Status Queries the status of a specified task
`fail`: Prefetch failed
`done`: Prefetch succeeded
`process`: Prefetch in progress
`invalid`: Invalid prefetch with 4XX/5XX status code returned from the origin server
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
