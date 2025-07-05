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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecLogJoinObjectList request structure.
 *
 * @method string getLogType() Obtain Log type
Container bash: "container_bash",
Container startup: "container_launch",
K8s API: "k8s_api"
 * @method void setLogType(string $LogType) Set Log type
Container bash: "container_bash",
Container startup: "container_launch",
K8s API: "k8s_api"
 * @method integer getLimit() Obtain Number of results to be returned. Default value: `10`. Maximum value: `100`.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: `10`. Maximum value: `100`.
 * @method integer getOffset() Obtain Offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`.
 * @method array getFilters() Obtain Filters.
<li>`Status` - String - Optional - Host status</li>
<li>`HostIP` - String - Optional - Private IP of the host</li>
<li>`PublicIP` - String - Optional - Public IP of the host</li>
<li>`HostName - String - Optional - Host name</li>
 * @method void setFilters(array $Filters) Set Filters.
<li>`Status` - String - Optional - Host status</li>
<li>`HostIP` - String - Optional - Private IP of the host</li>
<li>`PublicIP` - String - Optional - Public IP of the host</li>
<li>`HostName - String - Optional - Host name</li>
 * @method string getBy() Obtain Sorting field
 * @method void setBy(string $By) Set Sorting field
 * @method string getOrder() Obtain Sorting order
 * @method void setOrder(string $Order) Set Sorting order
 */
class DescribeSecLogJoinObjectListRequest extends AbstractModel
{
    /**
     * @var string Log type
Container bash: "container_bash",
Container startup: "container_launch",
K8s API: "k8s_api"
     */
    public $LogType;

    /**
     * @var integer Number of results to be returned. Default value: `10`. Maximum value: `100`.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var array Filters.
<li>`Status` - String - Optional - Host status</li>
<li>`HostIP` - String - Optional - Private IP of the host</li>
<li>`PublicIP` - String - Optional - Public IP of the host</li>
<li>`HostName - String - Optional - Host name</li>
     */
    public $Filters;

    /**
     * @var string Sorting field
     */
    public $By;

    /**
     * @var string Sorting order
     */
    public $Order;

    /**
     * @param string $LogType Log type
Container bash: "container_bash",
Container startup: "container_launch",
K8s API: "k8s_api"
     * @param integer $Limit Number of results to be returned. Default value: `10`. Maximum value: `100`.
     * @param integer $Offset Offset. Default value: `0`.
     * @param array $Filters Filters.
<li>`Status` - String - Optional - Host status</li>
<li>`HostIP` - String - Optional - Private IP of the host</li>
<li>`PublicIP` - String - Optional - Public IP of the host</li>
<li>`HostName - String - Optional - Host name</li>
     * @param string $By Sorting field
     * @param string $Order Sorting order
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
        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
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
                $obj = new RunTimeFilters();
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
