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
namespace TencentCloud\Mdc\V20200828\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeStreamLinkFlowLogs request structure.
 *
 * @method string getFlowId() Obtain <p>Transport stream Id.</p>
 * @method void setFlowId(string $FlowId) Set <p>Transport stream Id.</p>
 * @method string getStartTime() Obtain <p>Start time for statistics, defaults to the last hour, supports querying up to the last 7 days.<br>UTC time, for example, '2020-01-01T12:00:00Z'.</p>
 * @method void setStartTime(string $StartTime) Set <p>Start time for statistics, defaults to the last hour, supports querying up to the last 7 days.<br>UTC time, for example, '2020-01-01T12:00:00Z'.</p>
 * @method string getEndTime() Obtain <p>End time for statistics, defaulting to one hour after StartTime, with support for querying up to 24 hours of data.<br>UTC time, for example, '2020-01-01T12:00:00Z'.</p>
 * @method void setEndTime(string $EndTime) Set <p>End time for statistics, defaulting to one hour after StartTime, with support for querying up to 24 hours of data.<br>UTC time, for example, '2020-01-01T12:00:00Z'.</p>
 * @method array getType() Obtain <p>Input or output type. Valid values: `input`, `output`.</p>
 * @method void setType(array $Type) Set <p>Input or output type. Valid values: `input`, `output`.</p>
 * @method array getPipeline() Obtain <p>Primary or backup channel. Option [0|1].</p>
 * @method void setPipeline(array $Pipeline) Set <p>Primary or backup channel. Option [0|1].</p>
 * @method integer getPageSize() Obtain <p>Size per page. Default value: 100. Value range: [1, 1000].</p>
 * @method void setPageSize(integer $PageSize) Set <p>Size per page. Default value: 100. Value range: [1, 1000].</p>
 * @method string getSortType() Obtain <p>Sort by Timestamp in ascending or descending order. The default is descending order. Options: [desc|asc].</p>
 * @method void setSortType(string $SortType) Set <p>Sort by Timestamp in ascending or descending order. The default is descending order. Options: [desc|asc].</p>
 * @method integer getPageNum() Obtain <p>Page number. Default value: 1. Value range: [1, 1000].</p>
 * @method void setPageNum(integer $PageNum) Set <p>Page number. Default value: 1. Value range: [1, 1000].</p>
 */
class DescribeStreamLinkFlowLogsRequest extends AbstractModel
{
    /**
     * @var string <p>Transport stream Id.</p>
     */
    public $FlowId;

    /**
     * @var string <p>Start time for statistics, defaults to the last hour, supports querying up to the last 7 days.<br>UTC time, for example, '2020-01-01T12:00:00Z'.</p>
     */
    public $StartTime;

    /**
     * @var string <p>End time for statistics, defaulting to one hour after StartTime, with support for querying up to 24 hours of data.<br>UTC time, for example, '2020-01-01T12:00:00Z'.</p>
     */
    public $EndTime;

    /**
     * @var array <p>Input or output type. Valid values: `input`, `output`.</p>
     */
    public $Type;

    /**
     * @var array <p>Primary or backup channel. Option [0|1].</p>
     */
    public $Pipeline;

    /**
     * @var integer <p>Size per page. Default value: 100. Value range: [1, 1000].</p>
     */
    public $PageSize;

    /**
     * @var string <p>Sort by Timestamp in ascending or descending order. The default is descending order. Options: [desc|asc].</p>
     */
    public $SortType;

    /**
     * @var integer <p>Page number. Default value: 1. Value range: [1, 1000].</p>
     */
    public $PageNum;

    /**
     * @param string $FlowId <p>Transport stream Id.</p>
     * @param string $StartTime <p>Start time for statistics, defaults to the last hour, supports querying up to the last 7 days.<br>UTC time, for example, '2020-01-01T12:00:00Z'.</p>
     * @param string $EndTime <p>End time for statistics, defaulting to one hour after StartTime, with support for querying up to 24 hours of data.<br>UTC time, for example, '2020-01-01T12:00:00Z'.</p>
     * @param array $Type <p>Input or output type. Valid values: `input`, `output`.</p>
     * @param array $Pipeline <p>Primary or backup channel. Option [0|1].</p>
     * @param integer $PageSize <p>Size per page. Default value: 100. Value range: [1, 1000].</p>
     * @param string $SortType <p>Sort by Timestamp in ascending or descending order. The default is descending order. Options: [desc|asc].</p>
     * @param integer $PageNum <p>Page number. Default value: 1. Value range: [1, 1000].</p>
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
