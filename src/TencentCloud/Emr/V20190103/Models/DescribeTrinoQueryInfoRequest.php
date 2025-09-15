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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTrinoQueryInfo request structure.
 *
 * @method string getInstanceId() Obtain Cluster ID.
 * @method void setInstanceId(string $InstanceId) Set Cluster ID.
 * @method integer getStartTime() Obtain Obtain the start time for querying information (s).
 * @method void setStartTime(integer $StartTime) Set Obtain the start time for querying information (s).
 * @method integer getEndTime() Obtain Obtain the end time for querying information (s).
 * @method void setEndTime(integer $EndTime) Set Obtain the end time for querying information (s).
 * @method integer getPageSize() Obtain Page size for pagination queries. Minimum value: 1; maximum value: 100.
 * @method void setPageSize(integer $PageSize) Set Page size for pagination queries. Minimum value: 1; maximum value: 100.
 * @method integer getPage() Obtain Page number for pagination queries, starting from 1.
 * @method void setPage(integer $Page) Set Page number for pagination queries, starting from 1.
 */
class DescribeTrinoQueryInfoRequest extends AbstractModel
{
    /**
     * @var string Cluster ID.
     */
    public $InstanceId;

    /**
     * @var integer Obtain the start time for querying information (s).
     */
    public $StartTime;

    /**
     * @var integer Obtain the end time for querying information (s).
     */
    public $EndTime;

    /**
     * @var integer Page size for pagination queries. Minimum value: 1; maximum value: 100.
     */
    public $PageSize;

    /**
     * @var integer Page number for pagination queries, starting from 1.
     */
    public $Page;

    /**
     * @param string $InstanceId Cluster ID.
     * @param integer $StartTime Obtain the start time for querying information (s).
     * @param integer $EndTime Obtain the end time for querying information (s).
     * @param integer $PageSize Page size for pagination queries. Minimum value: 1; maximum value: 100.
     * @param integer $Page Page number for pagination queries, starting from 1.
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

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }
    }
}
