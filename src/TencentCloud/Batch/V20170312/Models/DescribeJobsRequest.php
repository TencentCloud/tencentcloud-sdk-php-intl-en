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
 * @method array getJobIds() Obtain List of job IDs. It cannot be specified together with `Filters`.
 * @method void setJobIds(array $JobIds) Set List of job IDs. It cannot be specified together with `Filters`.
 * @method array getFilters() Obtain Filter
<li> `job-id` - String - Optional - Filter by the job ID.</li>
<li> `job-name` - String - Optional - Filter by the job name.</li>
<li> `job-state` - String - Optional - Filter by the job state.</li>
<li> `zone` - String - Optional - Filter by the availability zone.</li>
<li> `tag-key` - String - Optional - Tag key.</li>
<li> `tag-value` - String - Optional - Tag value.</li>
<li> `tag:tag-key` - String - Optional - Filter by the tag key-value pair. The tag-key should be replaced by a specified tag key.</li>
It cannot be specified together with `JobIds`.
 * @method void setFilters(array $Filters) Set Filter
<li> `job-id` - String - Optional - Filter by the job ID.</li>
<li> `job-name` - String - Optional - Filter by the job name.</li>
<li> `job-state` - String - Optional - Filter by the job state.</li>
<li> `zone` - String - Optional - Filter by the availability zone.</li>
<li> `tag-key` - String - Optional - Tag key.</li>
<li> `tag-value` - String - Optional - Tag value.</li>
<li> `tag:tag-key` - String - Optional - Filter by the tag key-value pair. The tag-key should be replaced by a specified tag key.</li>
It cannot be specified together with `JobIds`.
 * @method integer getOffset() Obtain Offset
 * @method void setOffset(integer $Offset) Set Offset
 * @method integer getLimit() Obtain Maximum number of returned items
 * @method void setLimit(integer $Limit) Set Maximum number of returned items
 */
class DescribeJobsRequest extends AbstractModel
{
    /**
     * @var array List of job IDs. It cannot be specified together with `Filters`.
     */
    public $JobIds;

    /**
     * @var array Filter
<li> `job-id` - String - Optional - Filter by the job ID.</li>
<li> `job-name` - String - Optional - Filter by the job name.</li>
<li> `job-state` - String - Optional - Filter by the job state.</li>
<li> `zone` - String - Optional - Filter by the availability zone.</li>
<li> `tag-key` - String - Optional - Tag key.</li>
<li> `tag-value` - String - Optional - Tag value.</li>
<li> `tag:tag-key` - String - Optional - Filter by the tag key-value pair. The tag-key should be replaced by a specified tag key.</li>
It cannot be specified together with `JobIds`.
     */
    public $Filters;

    /**
     * @var integer Offset
     */
    public $Offset;

    /**
     * @var integer Maximum number of returned items
     */
    public $Limit;

    /**
     * @param array $JobIds List of job IDs. It cannot be specified together with `Filters`.
     * @param array $Filters Filter
<li> `job-id` - String - Optional - Filter by the job ID.</li>
<li> `job-name` - String - Optional - Filter by the job name.</li>
<li> `job-state` - String - Optional - Filter by the job state.</li>
<li> `zone` - String - Optional - Filter by the availability zone.</li>
<li> `tag-key` - String - Optional - Tag key.</li>
<li> `tag-value` - String - Optional - Tag value.</li>
<li> `tag:tag-key` - String - Optional - Filter by the tag key-value pair. The tag-key should be replaced by a specified tag key.</li>
It cannot be specified together with `JobIds`.
     * @param integer $Offset Offset
     * @param integer $Limit Maximum number of returned items
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
