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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetContainerList request structure.
 *
 * @method integer getLimit() Obtain Number of results to be returned. Default value: `10`. Maximum value: `100`.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: `10`. Maximum value: `100`.
 * @method integer getOffset() Obtain Offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`.
 * @method array getFilters() Obtain Filter condition
<li>`ContainerName`: String - Required: No - Container name</li>
<li>`Status` - String - Required: No - Container status. Values: `0` (created); `1` (running); `2` (paused); `3` (restarting); `4` (removing); `5` (exited); `6` (dead).</li>
<li>`Runas`: String - Required: No - Operator</li>
<li>`ImageName`: String - Required: No - Image name</li>
<li>`HostIP`: String - Required: No - Server IP</li>
<li>`OrderBy` - String - Required: No - Sorting field, which supports dynamic sorting by `cpu_usage` or `mem_usage` such as ["cpu_usage","+"]. '+' indicates ascending, and '-' indicates descending.</li>
<li>`NetStatus`: String - Required: No - Container network status. Values: `normal`, `isolated`, `isolating`, `isolate_failed`, `restoring`, `restore_failed`.</li>
<li>`PodID`: String - Required: No- Pod ID </li>
<li>`NodeUniqueID`: String - Required: No - Super Node</li>
<li>`PodUid`: String - Required: No - Pod</li>
<li>`PodIP`: String - Required: No - Pod IP</li>
<li>`NodeType`: String - Required: No - Values: `NORMAL` (general nodes), `SUPER` (super nodes)</li>
 * @method void setFilters(array $Filters) Set Filter condition
<li>`ContainerName`: String - Required: No - Container name</li>
<li>`Status` - String - Required: No - Container status. Values: `0` (created); `1` (running); `2` (paused); `3` (restarting); `4` (removing); `5` (exited); `6` (dead).</li>
<li>`Runas`: String - Required: No - Operator</li>
<li>`ImageName`: String - Required: No - Image name</li>
<li>`HostIP`: String - Required: No - Server IP</li>
<li>`OrderBy` - String - Required: No - Sorting field, which supports dynamic sorting by `cpu_usage` or `mem_usage` such as ["cpu_usage","+"]. '+' indicates ascending, and '-' indicates descending.</li>
<li>`NetStatus`: String - Required: No - Container network status. Values: `normal`, `isolated`, `isolating`, `isolate_failed`, `restoring`, `restore_failed`.</li>
<li>`PodID`: String - Required: No- Pod ID </li>
<li>`NodeUniqueID`: String - Required: No - Super Node</li>
<li>`PodUid`: String - Required: No - Pod</li>
<li>`PodIP`: String - Required: No - Pod IP</li>
<li>`NodeType`: String - Required: No - Values: `NORMAL` (general nodes), `SUPER` (super nodes)</li>
 * @method string getBy() Obtain Sorting field
 * @method void setBy(string $By) Set Sorting field
 * @method string getOrder() Obtain Sorting order. Valid values: `asc`, `desc`.
 * @method void setOrder(string $Order) Set Sorting order. Valid values: `asc`, `desc`.
 */
class DescribeAssetContainerListRequest extends AbstractModel
{
    /**
     * @var integer Number of results to be returned. Default value: `10`. Maximum value: `100`.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var array Filter condition
<li>`ContainerName`: String - Required: No - Container name</li>
<li>`Status` - String - Required: No - Container status. Values: `0` (created); `1` (running); `2` (paused); `3` (restarting); `4` (removing); `5` (exited); `6` (dead).</li>
<li>`Runas`: String - Required: No - Operator</li>
<li>`ImageName`: String - Required: No - Image name</li>
<li>`HostIP`: String - Required: No - Server IP</li>
<li>`OrderBy` - String - Required: No - Sorting field, which supports dynamic sorting by `cpu_usage` or `mem_usage` such as ["cpu_usage","+"]. '+' indicates ascending, and '-' indicates descending.</li>
<li>`NetStatus`: String - Required: No - Container network status. Values: `normal`, `isolated`, `isolating`, `isolate_failed`, `restoring`, `restore_failed`.</li>
<li>`PodID`: String - Required: No- Pod ID </li>
<li>`NodeUniqueID`: String - Required: No - Super Node</li>
<li>`PodUid`: String - Required: No - Pod</li>
<li>`PodIP`: String - Required: No - Pod IP</li>
<li>`NodeType`: String - Required: No - Values: `NORMAL` (general nodes), `SUPER` (super nodes)</li>
     */
    public $Filters;

    /**
     * @var string Sorting field
     */
    public $By;

    /**
     * @var string Sorting order. Valid values: `asc`, `desc`.
     */
    public $Order;

    /**
     * @param integer $Limit Number of results to be returned. Default value: `10`. Maximum value: `100`.
     * @param integer $Offset Offset. Default value: `0`.
     * @param array $Filters Filter condition
<li>`ContainerName`: String - Required: No - Container name</li>
<li>`Status` - String - Required: No - Container status. Values: `0` (created); `1` (running); `2` (paused); `3` (restarting); `4` (removing); `5` (exited); `6` (dead).</li>
<li>`Runas`: String - Required: No - Operator</li>
<li>`ImageName`: String - Required: No - Image name</li>
<li>`HostIP`: String - Required: No - Server IP</li>
<li>`OrderBy` - String - Required: No - Sorting field, which supports dynamic sorting by `cpu_usage` or `mem_usage` such as ["cpu_usage","+"]. '+' indicates ascending, and '-' indicates descending.</li>
<li>`NetStatus`: String - Required: No - Container network status. Values: `normal`, `isolated`, `isolating`, `isolate_failed`, `restoring`, `restore_failed`.</li>
<li>`PodID`: String - Required: No- Pod ID </li>
<li>`NodeUniqueID`: String - Required: No - Super Node</li>
<li>`PodUid`: String - Required: No - Pod</li>
<li>`PodIP`: String - Required: No - Pod IP</li>
<li>`NodeType`: String - Required: No - Values: `NORMAL` (general nodes), `SUPER` (super nodes)</li>
     * @param string $By Sorting field
     * @param string $Order Sorting order. Valid values: `asc`, `desc`.
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AssetFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
