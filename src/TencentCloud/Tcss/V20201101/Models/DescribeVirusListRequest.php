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
 * DescribeVirusList request structure.
 *
 * @method integer getLimit() Obtain Number of results to be returned. Default value: `10`. Maximum value: `100`.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: `10`. Maximum value: `100`.
 * @method integer getOffset() Obtain Offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`.
 * @method array getFilters() Obtain Filter
<li>FileName - String - Required: No - Filename</li>
<li>FilePath - String - Required: No - File path</li>
<li>VirusName - String - Required: No - Virus name</li>
<li>ContainerName- String - Required: Yes - Container name</li>
<li>ContainerId- string - Required: No - Container ID</li>
<li>ImageName- string - Required: No - Image name</li>
<li>ImageId- string - Required: No - Image ID</li>
<li>IsRealTime- int - Required: No - Whether it is real-time monitoring data</li>
<li>TaskId- string - Required: No - Task ID</li>
<li>ContainerNetStatus - String - Required: No - Container network status. Valid values: `NORMAL`, `ISOLATED`, `ISOLATING`, `RESTORING`, `RESTORE_FAILED`.</li>
<li>TimeRange - string - Required: No - Time range ["2022-03-31 16:55:00", "2022-03-31 17:00:00"]</li>
<li>ContainerStatus - string - Required: No - Container status. Valid values: `RUNNING`, `PAUSED`, `STOPPED`, `CREATED`, `DESTROYED`, `RESTARTING`, `REMOVING`.</li>
<li>AutoIsolateMode - string - Required: No - Isolation method. Valid values: `MANUAL`, `AUTO`.</li>
<li>MD5 - string - Required: No - MD5</li>
 * @method void setFilters(array $Filters) Set Filter
<li>FileName - String - Required: No - Filename</li>
<li>FilePath - String - Required: No - File path</li>
<li>VirusName - String - Required: No - Virus name</li>
<li>ContainerName- String - Required: Yes - Container name</li>
<li>ContainerId- string - Required: No - Container ID</li>
<li>ImageName- string - Required: No - Image name</li>
<li>ImageId- string - Required: No - Image ID</li>
<li>IsRealTime- int - Required: No - Whether it is real-time monitoring data</li>
<li>TaskId- string - Required: No - Task ID</li>
<li>ContainerNetStatus - String - Required: No - Container network status. Valid values: `NORMAL`, `ISOLATED`, `ISOLATING`, `RESTORING`, `RESTORE_FAILED`.</li>
<li>TimeRange - string - Required: No - Time range ["2022-03-31 16:55:00", "2022-03-31 17:00:00"]</li>
<li>ContainerStatus - string - Required: No - Container status. Valid values: `RUNNING`, `PAUSED`, `STOPPED`, `CREATED`, `DESTROYED`, `RESTARTING`, `REMOVING`.</li>
<li>AutoIsolateMode - string - Required: No - Isolation method. Valid values: `MANUAL`, `AUTO`.</li>
<li>MD5 - string - Required: No - MD5</li>
 * @method string getOrder() Obtain Sorting order
 * @method void setOrder(string $Order) Set Sorting order
 * @method string getBy() Obtain Sorting field
 * @method void setBy(string $By) Set Sorting field
 */
class DescribeVirusListRequest extends AbstractModel
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
     * @var array Filter
<li>FileName - String - Required: No - Filename</li>
<li>FilePath - String - Required: No - File path</li>
<li>VirusName - String - Required: No - Virus name</li>
<li>ContainerName- String - Required: Yes - Container name</li>
<li>ContainerId- string - Required: No - Container ID</li>
<li>ImageName- string - Required: No - Image name</li>
<li>ImageId- string - Required: No - Image ID</li>
<li>IsRealTime- int - Required: No - Whether it is real-time monitoring data</li>
<li>TaskId- string - Required: No - Task ID</li>
<li>ContainerNetStatus - String - Required: No - Container network status. Valid values: `NORMAL`, `ISOLATED`, `ISOLATING`, `RESTORING`, `RESTORE_FAILED`.</li>
<li>TimeRange - string - Required: No - Time range ["2022-03-31 16:55:00", "2022-03-31 17:00:00"]</li>
<li>ContainerStatus - string - Required: No - Container status. Valid values: `RUNNING`, `PAUSED`, `STOPPED`, `CREATED`, `DESTROYED`, `RESTARTING`, `REMOVING`.</li>
<li>AutoIsolateMode - string - Required: No - Isolation method. Valid values: `MANUAL`, `AUTO`.</li>
<li>MD5 - string - Required: No - MD5</li>
     */
    public $Filters;

    /**
     * @var string Sorting order
     */
    public $Order;

    /**
     * @var string Sorting field
     */
    public $By;

    /**
     * @param integer $Limit Number of results to be returned. Default value: `10`. Maximum value: `100`.
     * @param integer $Offset Offset. Default value: `0`.
     * @param array $Filters Filter
<li>FileName - String - Required: No - Filename</li>
<li>FilePath - String - Required: No - File path</li>
<li>VirusName - String - Required: No - Virus name</li>
<li>ContainerName- String - Required: Yes - Container name</li>
<li>ContainerId- string - Required: No - Container ID</li>
<li>ImageName- string - Required: No - Image name</li>
<li>ImageId- string - Required: No - Image ID</li>
<li>IsRealTime- int - Required: No - Whether it is real-time monitoring data</li>
<li>TaskId- string - Required: No - Task ID</li>
<li>ContainerNetStatus - String - Required: No - Container network status. Valid values: `NORMAL`, `ISOLATED`, `ISOLATING`, `RESTORING`, `RESTORE_FAILED`.</li>
<li>TimeRange - string - Required: No - Time range ["2022-03-31 16:55:00", "2022-03-31 17:00:00"]</li>
<li>ContainerStatus - string - Required: No - Container status. Valid values: `RUNNING`, `PAUSED`, `STOPPED`, `CREATED`, `DESTROYED`, `RESTARTING`, `REMOVING`.</li>
<li>AutoIsolateMode - string - Required: No - Isolation method. Valid values: `MANUAL`, `AUTO`.</li>
<li>MD5 - string - Required: No - MD5</li>
     * @param string $Order Sorting order
     * @param string $By Sorting field
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
                $obj = new RunTimeFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
