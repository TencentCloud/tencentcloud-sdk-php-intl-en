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
 * DescribeRealtimeLogDeliveryTasks request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method integer getOffset() Obtain The offset of paginated query. Default value: 0.
 * @method void setOffset(integer $Offset) Set The offset of paginated query. Default value: 0.
 * @method integer getLimit() Obtain The limit of paginated query. Default value: 20. Maximum value: 1,000.
 * @method void setLimit(integer $Limit) Set The limit of paginated query. Default value: 20. Maximum value: 1,000.
 * @method array getFilters() Obtain Filter criteria. The maximum number of Filters.Values is 20. If this parameter is left empty, all real-time log delivery task information under the current zone-id will be returned. The detailed filter criteria are as follows:
<li>task-id: Filter by real-time log delivery task ID. Fuzzy queries are not supported.</li>
<li>task-name: filter by real-time log delivery task name. Fuzzy query is supported. When fuzzy search is used, only one real-time log delivery task name can be filled in.</li>
<li>entity-list: Filter by the entity corresponding to the real-time log delivery task. Fuzzy queries are not supported. Example: domain.example.com or sid-2s69eb5wcms7.</li>
<li>task-type: filter by real-time log delivery task type. Fuzzy queries are not supported. Options are as follows:<br>        cls: push to Tencent Cloud CLS;<br>        custom_endpoint: push to a custom HTTP(S) address;<br>        s3: push to an AWS S3-compatible bucket address;<br>        log_analysis: push to EdgeOne log analytics.</li>
 * @method void setFilters(array $Filters) Set Filter criteria. The maximum number of Filters.Values is 20. If this parameter is left empty, all real-time log delivery task information under the current zone-id will be returned. The detailed filter criteria are as follows:
<li>task-id: Filter by real-time log delivery task ID. Fuzzy queries are not supported.</li>
<li>task-name: filter by real-time log delivery task name. Fuzzy query is supported. When fuzzy search is used, only one real-time log delivery task name can be filled in.</li>
<li>entity-list: Filter by the entity corresponding to the real-time log delivery task. Fuzzy queries are not supported. Example: domain.example.com or sid-2s69eb5wcms7.</li>
<li>task-type: filter by real-time log delivery task type. Fuzzy queries are not supported. Options are as follows:<br>        cls: push to Tencent Cloud CLS;<br>        custom_endpoint: push to a custom HTTP(S) address;<br>        s3: push to an AWS S3-compatible bucket address;<br>        log_analysis: push to EdgeOne log analytics.</li>
 */
class DescribeRealtimeLogDeliveryTasksRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
     */
    public $ZoneId;

    /**
     * @var integer The offset of paginated query. Default value: 0.
     */
    public $Offset;

    /**
     * @var integer The limit of paginated query. Default value: 20. Maximum value: 1,000.
     */
    public $Limit;

    /**
     * @var array Filter criteria. The maximum number of Filters.Values is 20. If this parameter is left empty, all real-time log delivery task information under the current zone-id will be returned. The detailed filter criteria are as follows:
<li>task-id: Filter by real-time log delivery task ID. Fuzzy queries are not supported.</li>
<li>task-name: filter by real-time log delivery task name. Fuzzy query is supported. When fuzzy search is used, only one real-time log delivery task name can be filled in.</li>
<li>entity-list: Filter by the entity corresponding to the real-time log delivery task. Fuzzy queries are not supported. Example: domain.example.com or sid-2s69eb5wcms7.</li>
<li>task-type: filter by real-time log delivery task type. Fuzzy queries are not supported. Options are as follows:<br>        cls: push to Tencent Cloud CLS;<br>        custom_endpoint: push to a custom HTTP(S) address;<br>        s3: push to an AWS S3-compatible bucket address;<br>        log_analysis: push to EdgeOne log analytics.</li>
     */
    public $Filters;

    /**
     * @param string $ZoneId Zone ID.
     * @param integer $Offset The offset of paginated query. Default value: 0.
     * @param integer $Limit The limit of paginated query. Default value: 20. Maximum value: 1,000.
     * @param array $Filters Filter criteria. The maximum number of Filters.Values is 20. If this parameter is left empty, all real-time log delivery task information under the current zone-id will be returned. The detailed filter criteria are as follows:
<li>task-id: Filter by real-time log delivery task ID. Fuzzy queries are not supported.</li>
<li>task-name: filter by real-time log delivery task name. Fuzzy query is supported. When fuzzy search is used, only one real-time log delivery task name can be filled in.</li>
<li>entity-list: Filter by the entity corresponding to the real-time log delivery task. Fuzzy queries are not supported. Example: domain.example.com or sid-2s69eb5wcms7.</li>
<li>task-type: filter by real-time log delivery task type. Fuzzy queries are not supported. Options are as follows:<br>        cls: push to Tencent Cloud CLS;<br>        custom_endpoint: push to a custom HTTP(S) address;<br>        s3: push to an AWS S3-compatible bucket address;<br>        log_analysis: push to EdgeOne log analytics.</li>
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AdvancedFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
