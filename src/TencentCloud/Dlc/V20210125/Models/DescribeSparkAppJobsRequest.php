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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSparkAppJobs request structure.
 *
 * @method string getSortBy() Obtain The returned results are sorted by this field.
 * @method void setSortBy(string $SortBy) Set The returned results are sorted by this field.
 * @method string getSorting() Obtain Descending or ascending order, such as `desc`.
 * @method void setSorting(string $Sorting) Set Descending or ascending order, such as `desc`.
 * @method array getFilters() Obtain The filters. The following types are supported, and `Name` of the parameter passed in must be one of them: `spark-job-name` (job name), `spark-job-id` (job ID), `spark-app-type` (job type: `1` for batch, `2` for streaming, and `4` for SQL), `user-name` (creator), and `key-word` (job name or ID keywords for fuzzy search).
 * @method void setFilters(array $Filters) Set The filters. The following types are supported, and `Name` of the parameter passed in must be one of them: `spark-job-name` (job name), `spark-job-id` (job ID), `spark-app-type` (job type: `1` for batch, `2` for streaming, and `4` for SQL), `user-name` (creator), and `key-word` (job name or ID keywords for fuzzy search).
 * @method string getStartTime() Obtain The update start time in the format of yyyy-mm-dd HH:MM:SS.
 * @method void setStartTime(string $StartTime) Set The update start time in the format of yyyy-mm-dd HH:MM:SS.
 * @method string getEndTime() Obtain The update end time in the format of yyyy-mm-dd HH:MM:SS.
 * @method void setEndTime(string $EndTime) Set The update end time in the format of yyyy-mm-dd HH:MM:SS.
 * @method integer getOffset() Obtain The query list offset, which defaults to 0.
 * @method void setOffset(integer $Offset) Set The query list offset, which defaults to 0.
 * @method integer getLimit() Obtain The maximum number of queries allowed in the list, which defaults to 100.
 * @method void setLimit(integer $Limit) Set The maximum number of queries allowed in the list, which defaults to 100.
 */
class DescribeSparkAppJobsRequest extends AbstractModel
{
    /**
     * @var string The returned results are sorted by this field.
     */
    public $SortBy;

    /**
     * @var string Descending or ascending order, such as `desc`.
     */
    public $Sorting;

    /**
     * @var array The filters. The following types are supported, and `Name` of the parameter passed in must be one of them: `spark-job-name` (job name), `spark-job-id` (job ID), `spark-app-type` (job type: `1` for batch, `2` for streaming, and `4` for SQL), `user-name` (creator), and `key-word` (job name or ID keywords for fuzzy search).
     */
    public $Filters;

    /**
     * @var string The update start time in the format of yyyy-mm-dd HH:MM:SS.
     */
    public $StartTime;

    /**
     * @var string The update end time in the format of yyyy-mm-dd HH:MM:SS.
     */
    public $EndTime;

    /**
     * @var integer The query list offset, which defaults to 0.
     */
    public $Offset;

    /**
     * @var integer The maximum number of queries allowed in the list, which defaults to 100.
     */
    public $Limit;

    /**
     * @param string $SortBy The returned results are sorted by this field.
     * @param string $Sorting Descending or ascending order, such as `desc`.
     * @param array $Filters The filters. The following types are supported, and `Name` of the parameter passed in must be one of them: `spark-job-name` (job name), `spark-job-id` (job ID), `spark-app-type` (job type: `1` for batch, `2` for streaming, and `4` for SQL), `user-name` (creator), and `key-word` (job name or ID keywords for fuzzy search).
     * @param string $StartTime The update start time in the format of yyyy-mm-dd HH:MM:SS.
     * @param string $EndTime The update end time in the format of yyyy-mm-dd HH:MM:SS.
     * @param integer $Offset The query list offset, which defaults to 0.
     * @param integer $Limit The maximum number of queries allowed in the list, which defaults to 100.
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
        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("Sorting",$param) and $param["Sorting"] !== null) {
            $this->Sorting = $param["Sorting"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
