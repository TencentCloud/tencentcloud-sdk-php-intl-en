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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJobs request structure.
 *
 * @method array getJobIds() Obtain Instance ID
 * @method void setJobIds(array $JobIds) Set Instance ID
 * @method array getFilters() Obtain Filter
<li> job-id - String - Required: No - (Filter) Filter by job ID.</li>
<li> job-name - String - Required: No - (Filter) Filter by job name.</li>
<li> job-state - String - Required: No - (Filter) Filter by job state.</li>
<li> zone - String - Required: No - (Filter) Filter by availability zone.</li>
 * @method void setFilters(array $Filters) Set Filter
<li> job-id - String - Required: No - (Filter) Filter by job ID.</li>
<li> job-name - String - Required: No - (Filter) Filter by job name.</li>
<li> job-state - String - Required: No - (Filter) Filter by job state.</li>
<li> zone - String - Required: No - (Filter) Filter by availability zone.</li>
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain Number of returned results
 * @method void setLimit(integer $Limit) Set Number of returned results
 */
class DescribeJobsRequest extends AbstractModel
{
    /**
     * @var array Instance ID
     */
    public $JobIds;

    /**
     * @var array Filter
<li> job-id - String - Required: No - (Filter) Filter by job ID.</li>
<li> job-name - String - Required: No - (Filter) Filter by job name.</li>
<li> job-state - String - Required: No - (Filter) Filter by job state.</li>
<li> zone - String - Required: No - (Filter) Filter by availability zone.</li>
     */
    public $Filters;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer Number of returned results
     */
    public $Limit;

    /**
     * @param array $JobIds Instance ID
     * @param array $Filters Filter
<li> job-id - String - Required: No - (Filter) Filter by job ID.</li>
<li> job-name - String - Required: No - (Filter) Filter by job name.</li>
<li> job-state - String - Required: No - (Filter) Filter by job state.</li>
<li> zone - String - Required: No - (Filter) Filter by availability zone.</li>
     * @param integer $Offset Offset
     * @param integer $Limit Number of returned results
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
        if (array_key_exists("JobIds",$param) and $param["JobIds"] !== null) {
            $this->JobIds = $param["JobIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
