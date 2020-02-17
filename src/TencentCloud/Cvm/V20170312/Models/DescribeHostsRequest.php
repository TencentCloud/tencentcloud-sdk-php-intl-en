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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getFilters() Obtain Filters.
<li> `zone` - String - Optional - Filter results by availability zone.</li>
<li> `project-id` - Integer - Optional - Filter results by project ID. You can call `DescribeProject` or log in to the console to view the list of existing projects. You can also create a new project by calling `AddProject`.</li>
<li> `host-id` - String - Optional - Filter results by CDH ID. CDH IDs are in the format of `host-11112222`.</li>
<li> `host-name` - String - Optional - Filter results by CDH instance name.</li>
<li> `host-state` - String - Optional - Filter results by CDH instance state. (PENDING: creating | LAUNCH_FAILURE: creation failed | RUNNING: running | EXPIRED: expired)</li>
 * @method void setFilters(array $Filters) Set Filters.
<li> `zone` - String - Optional - Filter results by availability zone.</li>
<li> `project-id` - Integer - Optional - Filter results by project ID. You can call `DescribeProject` or log in to the console to view the list of existing projects. You can also create a new project by calling `AddProject`.</li>
<li> `host-id` - String - Optional - Filter results by CDH ID. CDH IDs are in the format of `host-11112222`.</li>
<li> `host-name` - String - Optional - Filter results by CDH instance name.</li>
<li> `host-state` - String - Optional - Filter results by CDH instance state. (PENDING: creating | LAUNCH_FAILURE: creation failed | RUNNING: running | EXPIRED: expired)</li>
 * @method integer getOffset() Obtain Offset; default value: 0.
 * @method void setOffset(integer $Offset) Set Offset; default value: 0.
 * @method integer getLimit() Obtain Number of results returned; default value: 20; maximum: 100.
 * @method void setLimit(integer $Limit) Set Number of results returned; default value: 20; maximum: 100.
 */

/**
 *DescribeHosts request structure.
 */
class DescribeHostsRequest extends AbstractModel
{
    /**
     * @var array Filters.
<li> `zone` - String - Optional - Filter results by availability zone.</li>
<li> `project-id` - Integer - Optional - Filter results by project ID. You can call `DescribeProject` or log in to the console to view the list of existing projects. You can also create a new project by calling `AddProject`.</li>
<li> `host-id` - String - Optional - Filter results by CDH ID. CDH IDs are in the format of `host-11112222`.</li>
<li> `host-name` - String - Optional - Filter results by CDH instance name.</li>
<li> `host-state` - String - Optional - Filter results by CDH instance state. (PENDING: creating | LAUNCH_FAILURE: creation failed | RUNNING: running | EXPIRED: expired)</li>
     */
    public $Filters;

    /**
     * @var integer Offset; default value: 0.
     */
    public $Offset;

    /**
     * @var integer Number of results returned; default value: 20; maximum: 100.
     */
    public $Limit;
    /**
     * @param array $Filters Filters.
<li> `zone` - String - Optional - Filter results by availability zone.</li>
<li> `project-id` - Integer - Optional - Filter results by project ID. You can call `DescribeProject` or log in to the console to view the list of existing projects. You can also create a new project by calling `AddProject`.</li>
<li> `host-id` - String - Optional - Filter results by CDH ID. CDH IDs are in the format of `host-11112222`.</li>
<li> `host-name` - String - Optional - Filter results by CDH instance name.</li>
<li> `host-state` - String - Optional - Filter results by CDH instance state. (PENDING: creating | LAUNCH_FAILURE: creation failed | RUNNING: running | EXPIRED: expired)</li>
     * @param integer $Offset Offset; default value: 0.
     * @param integer $Limit Number of results returned; default value: 20; maximum: 100.
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
