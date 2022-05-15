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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStreamLinkFlowLogs request structure.
 *
 * @method string getFlowId() Obtain The flow ID.
 * @method void setFlowId(string $FlowId) Set The flow ID.
 * @method string getStartTime() Obtain The start time for query, which is 1 hour ago by default. You can query statistics in the last 7 days.
It must be in UTC format, such as `2020-01-01T12:00:00Z`.
 * @method void setStartTime(string $StartTime) Set The start time for query, which is 1 hour ago by default. You can query statistics in the last 7 days.
It must be in UTC format, such as `2020-01-01T12:00:00Z`.
 * @method string getEndTime() Obtain The end time for query, which is 1 hour after the start time by default. The longest time range allowed for query is 24 hours.
It must be in UTC format, such as `2020-01-01T12:00:00Z`.
 * @method void setEndTime(string $EndTime) Set The end time for query, which is 1 hour after the start time by default. The longest time range allowed for query is 24 hours.
It must be in UTC format, such as `2020-01-01T12:00:00Z`.
 * @method array getType() Obtain Whether to query the inputs or outputs. Valid values: input, output.
 * @method void setType(array $Type) Set Whether to query the inputs or outputs. Valid values: input, output.
 * @method array getPipeline() Obtain Whether to query the primary or backup pipeline. Valid values: 0, 1.
 * @method void setPipeline(array $Pipeline) Set Whether to query the primary or backup pipeline. Valid values: 0, 1.
 * @method integer getPageSize() Obtain The page size. Value range: [1, 1000]. Default: 100.
 * @method void setPageSize(integer $PageSize) Set The page size. Value range: [1, 1000]. Default: 100.
 * @method string getSortType() Obtain Whether to sort the records by timestamp in descending or ascending order. Valid values: desc (default), asc.
 * @method void setSortType(string $SortType) Set Whether to sort the records by timestamp in descending or ascending order. Valid values: desc (default), asc.
 * @method integer getPageNum() Obtain The page number. Value range: [1, 1000]. Default: 1.
 * @method void setPageNum(integer $PageNum) Set The page number. Value range: [1, 1000]. Default: 1.
 */
class DescribeStreamLinkFlowLogsRequest extends AbstractModel
{
    /**
     * @var string The flow ID.
     */
    public $FlowId;

    /**
     * @var string The start time for query, which is 1 hour ago by default. You can query statistics in the last 7 days.
It must be in UTC format, such as `2020-01-01T12:00:00Z`.
     */
    public $StartTime;

    /**
     * @var string The end time for query, which is 1 hour after the start time by default. The longest time range allowed for query is 24 hours.
It must be in UTC format, such as `2020-01-01T12:00:00Z`.
     */
    public $EndTime;

    /**
     * @var array Whether to query the inputs or outputs. Valid values: input, output.
     */
    public $Type;

    /**
     * @var array Whether to query the primary or backup pipeline. Valid values: 0, 1.
     */
    public $Pipeline;

    /**
     * @var integer The page size. Value range: [1, 1000]. Default: 100.
     */
    public $PageSize;

    /**
     * @var string Whether to sort the records by timestamp in descending or ascending order. Valid values: desc (default), asc.
     */
    public $SortType;

    /**
     * @var integer The page number. Value range: [1, 1000]. Default: 1.
     */
    public $PageNum;

    /**
     * @param string $FlowId The flow ID.
     * @param string $StartTime The start time for query, which is 1 hour ago by default. You can query statistics in the last 7 days.
It must be in UTC format, such as `2020-01-01T12:00:00Z`.
     * @param string $EndTime The end time for query, which is 1 hour after the start time by default. The longest time range allowed for query is 24 hours.
It must be in UTC format, such as `2020-01-01T12:00:00Z`.
     * @param array $Type Whether to query the inputs or outputs. Valid values: input, output.
     * @param array $Pipeline Whether to query the primary or backup pipeline. Valid values: 0, 1.
     * @param integer $PageSize The page size. Value range: [1, 1000]. Default: 100.
     * @param string $SortType Whether to sort the records by timestamp in descending or ascending order. Valid values: desc (default), asc.
     * @param integer $PageNum The page number. Value range: [1, 1000]. Default: 1.
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Pipeline",$param) and $param["Pipeline"] !== null) {
            $this->Pipeline = $param["Pipeline"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }
    }
}
