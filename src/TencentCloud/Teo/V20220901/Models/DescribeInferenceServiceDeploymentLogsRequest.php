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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInferenceServiceDeploymentLogs request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method string getServiceId() Obtain ID of the inference service.
 * @method void setServiceId(string $ServiceId) Set ID of the inference service.
 * @method string getRecordId() Obtain Deployment record ID.
 * @method void setRecordId(string $RecordId) Set Deployment record ID.
 * @method string getStartTime() Obtain Start time for retrieving logs.
 * @method void setStartTime(string $StartTime) Set Start time for retrieving logs.
 * @method string getEndTime() Obtain End time for retrieving logs. Default query time range (EndTime - StartTime) is the most recent 7 days.
 * @method void setEndTime(string $EndTime) Set End time for retrieving logs. Default query time range (EndTime - StartTime) is the most recent 7 days.
 * @method string getSortBy() Obtain Sorting field. Valid values: <li>timestamp: Log generation time.</li>Default value: timestamp.
 * @method void setSortBy(string $SortBy) Set Sorting field. Valid values: <li>timestamp: Log generation time.</li>Default value: timestamp.
 * @method string getSortOrder() Obtain <p>Sorting method. Valid values: <li>asc: ascending order;</li><li>desc: descending order.</li>Default value: desc.</p>
 * @method void setSortOrder(string $SortOrder) Set <p>Sorting method. Valid values: <li>asc: ascending order;</li><li>desc: descending order.</li>Default value: desc.</p>
 * @method integer getOffset() Obtain Pagination offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Pagination offset. Default value: 0.
 * @method integer getLimit() Obtain Number of returned entries. Default value: 20. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set Number of returned entries. Default value: 20. Maximum value: 1000.
 */
class DescribeInferenceServiceDeploymentLogsRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var string ID of the inference service.
     */
    public $ServiceId;

    /**
     * @var string Deployment record ID.
     */
    public $RecordId;

    /**
     * @var string Start time for retrieving logs.
     */
    public $StartTime;

    /**
     * @var string End time for retrieving logs. Default query time range (EndTime - StartTime) is the most recent 7 days.
     */
    public $EndTime;

    /**
     * @var string Sorting field. Valid values: <li>timestamp: Log generation time.</li>Default value: timestamp.
     */
    public $SortBy;

    /**
     * @var string <p>Sorting method. Valid values: <li>asc: ascending order;</li><li>desc: descending order.</li>Default value: desc.</p>
     */
    public $SortOrder;

    /**
     * @var integer Pagination offset. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of returned entries. Default value: 20. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @param string $ZoneId Zone ID.
     * @param string $ServiceId ID of the inference service.
     * @param string $RecordId Deployment record ID.
     * @param string $StartTime Start time for retrieving logs.
     * @param string $EndTime End time for retrieving logs. Default query time range (EndTime - StartTime) is the most recent 7 days.
     * @param string $SortBy Sorting field. Valid values: <li>timestamp: Log generation time.</li>Default value: timestamp.
     * @param string $SortOrder <p>Sorting method. Valid values: <li>asc: ascending order;</li><li>desc: descending order.</li>Default value: desc.</p>
     * @param integer $Offset Pagination offset. Default value: 0.
     * @param integer $Limit Number of returned entries. Default value: 20. Maximum value: 1000.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
