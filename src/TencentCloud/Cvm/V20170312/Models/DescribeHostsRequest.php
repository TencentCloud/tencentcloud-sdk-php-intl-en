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
 * DescribeHosts request structure.
 *
 * @method array getFilters() Obtain <li><strong>zone</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>availability zones</strong>**. For example, availability zone: ap-guangzhou-1;</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid values: <a href="https://cloud.tencent.com/document/product/213/6091">list of availability zones</a></p>
<li><strong>project-id</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>project ID</strong>**. You can query the existing project list through the [DescribeProject](https://cloud.tencent.com/document/api/378/4400) API or [CVM console](https://console.cloud.tencent.com/cvm/index), or create a project by calling the [AddProject](https://cloud.tencent.com/document/api/378/4398) API. For example, project ID: 1002189;</p><p style="padding-left: 30px;">Type: Integer</p><p style="padding-left: 30px;">Required: no</p>
<li><strong>host-id</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>[CDH](https://cloud.tencent.com/document/product/416) ID</strong>**. For example, [CDH](https://cloud.tencent.com/document/product/416) ID: host-xxxxxxxx;</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p>
<li><strong>state</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>CDH instance name</strong>**. </p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p>
<li><strong>state</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>CDH instance status </strong>**. (PENDING: creating | LAUNCH_FAILURE: creation failed | RUNNING: running | EXPIRED: expired)</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p>
Each request can have up to 10 `Filters` and 5 `Filters.Values`.
 * @method void setFilters(array $Filters) Set <li><strong>zone</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>availability zones</strong>**. For example, availability zone: ap-guangzhou-1;</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid values: <a href="https://cloud.tencent.com/document/product/213/6091">list of availability zones</a></p>
<li><strong>project-id</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>project ID</strong>**. You can query the existing project list through the [DescribeProject](https://cloud.tencent.com/document/api/378/4400) API or [CVM console](https://console.cloud.tencent.com/cvm/index), or create a project by calling the [AddProject](https://cloud.tencent.com/document/api/378/4398) API. For example, project ID: 1002189;</p><p style="padding-left: 30px;">Type: Integer</p><p style="padding-left: 30px;">Required: no</p>
<li><strong>host-id</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>[CDH](https://cloud.tencent.com/document/product/416) ID</strong>**. For example, [CDH](https://cloud.tencent.com/document/product/416) ID: host-xxxxxxxx;</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p>
<li><strong>state</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>CDH instance name</strong>**. </p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p>
<li><strong>state</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>CDH instance status </strong>**. (PENDING: creating | LAUNCH_FAILURE: creation failed | RUNNING: running | EXPIRED: expired)</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p>
Each request can have up to 10 `Filters` and 5 `Filters.Values`.
 * @method integer getOffset() Obtain Offset; default value: 0.
 * @method void setOffset(integer $Offset) Set Offset; default value: 0.
 * @method integer getLimit() Obtain Number of results returned; default value: 20; maximum: 100.
 * @method void setLimit(integer $Limit) Set Number of results returned; default value: 20; maximum: 100.
 */
class DescribeHostsRequest extends AbstractModel
{
    /**
     * @var array <li><strong>zone</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>availability zones</strong>**. For example, availability zone: ap-guangzhou-1;</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid values: <a href="https://cloud.tencent.com/document/product/213/6091">list of availability zones</a></p>
<li><strong>project-id</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>project ID</strong>**. You can query the existing project list through the [DescribeProject](https://cloud.tencent.com/document/api/378/4400) API or [CVM console](https://console.cloud.tencent.com/cvm/index), or create a project by calling the [AddProject](https://cloud.tencent.com/document/api/378/4398) API. For example, project ID: 1002189;</p><p style="padding-left: 30px;">Type: Integer</p><p style="padding-left: 30px;">Required: no</p>
<li><strong>host-id</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>[CDH](https://cloud.tencent.com/document/product/416) ID</strong>**. For example, [CDH](https://cloud.tencent.com/document/product/416) ID: host-xxxxxxxx;</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p>
<li><strong>state</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>CDH instance name</strong>**. </p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p>
<li><strong>state</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>CDH instance status </strong>**. (PENDING: creating | LAUNCH_FAILURE: creation failed | RUNNING: running | EXPIRED: expired)</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p>
Each request can have up to 10 `Filters` and 5 `Filters.Values`.
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
     * @param array $Filters <li><strong>zone</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>availability zones</strong>**. For example, availability zone: ap-guangzhou-1;</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p><p style="padding-left: 30px;">Valid values: <a href="https://cloud.tencent.com/document/product/213/6091">list of availability zones</a></p>
<li><strong>project-id</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>project ID</strong>**. You can query the existing project list through the [DescribeProject](https://cloud.tencent.com/document/api/378/4400) API or [CVM console](https://console.cloud.tencent.com/cvm/index), or create a project by calling the [AddProject](https://cloud.tencent.com/document/api/378/4398) API. For example, project ID: 1002189;</p><p style="padding-left: 30px;">Type: Integer</p><p style="padding-left: 30px;">Required: no</p>
<li><strong>host-id</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>[CDH](https://cloud.tencent.com/document/product/416) ID</strong>**. For example, [CDH](https://cloud.tencent.com/document/product/416) ID: host-xxxxxxxx;</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p>
<li><strong>state</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>CDH instance name</strong>**. </p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p>
<li><strong>state</strong></li>
<p style="padding-left: 30px;">Filter results by **<strong>CDH instance status </strong>**. (PENDING: creating | LAUNCH_FAILURE: creation failed | RUNNING: running | EXPIRED: expired)</p><p style="padding-left: 30px;">Type: String</p><p style="padding-left: 30px;">Required: no</p>
Each request can have up to 10 `Filters` and 5 `Filters.Values`.
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
