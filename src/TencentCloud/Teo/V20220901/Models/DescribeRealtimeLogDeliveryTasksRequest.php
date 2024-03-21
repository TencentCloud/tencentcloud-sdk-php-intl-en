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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRealtimeLogDeliveryTasks request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
 * @method integer getOffset() Obtain The offset of paginated query. Default value: 0.
 * @method void setOffset(integer $Offset) Set The offset of paginated query. Default value: 0.
 * @method integer getLimit() Obtain The limit of paginated query. Default value: 20. Maximum value: 1000.
 * @method void setLimit(integer $Limit) Set The limit of paginated query. Default value: 20. Maximum value: 1000.
 * @method array getFilters() Obtain Filter conditions. The maximum value for Filters.Values is 20. If this field is not filled in, all the real-time log delivery task information under the current zone-id will be returned. Detailed filter conditions are as follows:
<li>task-id: Filter by real-time log delivery task ID. Fuzzy search is not supported.</li>
<li>task-name: Filter by real-time log delivery task name. Fuzzy search is supported, but only one real-time log delivery task name can be filled in for fuzzy search.</li>
<li>entity-list: Filter by entity corresponding to the real-time log delivery task. Fuzzy search is not supported. Example values: domain.example.com or sid-2s69eb5wcms7.</li>
<li>task-type: Filter by real-time log delivery task type. Fuzzy search is not supported. Optional values:<br>cls: Push to Tencent Cloud CLS;<br>custom_endpoint: Push to a user-defined HTTP(S) address;<br>s3: Push to an AWS S3-compatible bucket address.</li>
 * @method void setFilters(array $Filters) Set Filter conditions. The maximum value for Filters.Values is 20. If this field is not filled in, all the real-time log delivery task information under the current zone-id will be returned. Detailed filter conditions are as follows:
<li>task-id: Filter by real-time log delivery task ID. Fuzzy search is not supported.</li>
<li>task-name: Filter by real-time log delivery task name. Fuzzy search is supported, but only one real-time log delivery task name can be filled in for fuzzy search.</li>
<li>entity-list: Filter by entity corresponding to the real-time log delivery task. Fuzzy search is not supported. Example values: domain.example.com or sid-2s69eb5wcms7.</li>
<li>task-type: Filter by real-time log delivery task type. Fuzzy search is not supported. Optional values:<br>cls: Push to Tencent Cloud CLS;<br>custom_endpoint: Push to a user-defined HTTP(S) address;<br>s3: Push to an AWS S3-compatible bucket address.</li>
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
     * @var integer The limit of paginated query. Default value: 20. Maximum value: 1000.
     */
    public $Limit;

    /**
     * @var array Filter conditions. The maximum value for Filters.Values is 20. If this field is not filled in, all the real-time log delivery task information under the current zone-id will be returned. Detailed filter conditions are as follows:
<li>task-id: Filter by real-time log delivery task ID. Fuzzy search is not supported.</li>
<li>task-name: Filter by real-time log delivery task name. Fuzzy search is supported, but only one real-time log delivery task name can be filled in for fuzzy search.</li>
<li>entity-list: Filter by entity corresponding to the real-time log delivery task. Fuzzy search is not supported. Example values: domain.example.com or sid-2s69eb5wcms7.</li>
<li>task-type: Filter by real-time log delivery task type. Fuzzy search is not supported. Optional values:<br>cls: Push to Tencent Cloud CLS;<br>custom_endpoint: Push to a user-defined HTTP(S) address;<br>s3: Push to an AWS S3-compatible bucket address.</li>
     */
    public $Filters;

    /**
     * @param string $ZoneId Zone ID.
     * @param integer $Offset The offset of paginated query. Default value: 0.
     * @param integer $Limit The limit of paginated query. Default value: 20. Maximum value: 1000.
     * @param array $Filters Filter conditions. The maximum value for Filters.Values is 20. If this field is not filled in, all the real-time log delivery task information under the current zone-id will be returned. Detailed filter conditions are as follows:
<li>task-id: Filter by real-time log delivery task ID. Fuzzy search is not supported.</li>
<li>task-name: Filter by real-time log delivery task name. Fuzzy search is supported, but only one real-time log delivery task name can be filled in for fuzzy search.</li>
<li>entity-list: Filter by entity corresponding to the real-time log delivery task. Fuzzy search is not supported. Example values: domain.example.com or sid-2s69eb5wcms7.</li>
<li>task-type: Filter by real-time log delivery task type. Fuzzy search is not supported. Optional values:<br>cls: Push to Tencent Cloud CLS;<br>custom_endpoint: Push to a user-defined HTTP(S) address;<br>s3: Push to an AWS S3-compatible bucket address.</li>
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
