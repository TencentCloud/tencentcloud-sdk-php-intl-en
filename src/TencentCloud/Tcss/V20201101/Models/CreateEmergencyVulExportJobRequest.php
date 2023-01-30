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
 * CreateEmergencyVulExportJob request structure.
 *
 * @method integer getLimit() Obtain Number of results to be returned. Default value: `50000`. Maximum value: `50000`.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: `50000`. Maximum value: `50000`.
 * @method integer getOffset() Obtain Offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`.
 * @method array getFilters() Obtain Filter
<li>Level- String - Required: No - Severity. Valid values: `CRITICAL` (critical); `HIGH` (high); `MIDDLE` (medium); `LOW` (low).</li>
<li>Tags- string - Required: No - Vulnerability tag. Valid values: `POC`, `EXP`.</li>
<li>CanBeFixed- string - Required: No - Whether the vulnerability can be fixed. Valid values: `true`, `false`.</li>
<li>CVEID- string - Required: No - CVE No.</li>
<li>ImageID- string - Required: No - Image ID</li>
<li>ImageName- String - Required: No - Image name</li>
<li>ContainerID- string - Required: No - Container ID</li>
<li>ContainerName- string - Required: No - Container name</li>
<li>ComponentName- string - Required: No - Component name</li>
<li>ComponentVersion- string - Required: No - Component version</li>
<li>Name- string - Required: No - Vulnerability name</li>
 * @method void setFilters(array $Filters) Set Filter
<li>Level- String - Required: No - Severity. Valid values: `CRITICAL` (critical); `HIGH` (high); `MIDDLE` (medium); `LOW` (low).</li>
<li>Tags- string - Required: No - Vulnerability tag. Valid values: `POC`, `EXP`.</li>
<li>CanBeFixed- string - Required: No - Whether the vulnerability can be fixed. Valid values: `true`, `false`.</li>
<li>CVEID- string - Required: No - CVE No.</li>
<li>ImageID- string - Required: No - Image ID</li>
<li>ImageName- String - Required: No - Image name</li>
<li>ContainerID- string - Required: No - Container ID</li>
<li>ContainerName- string - Required: No - Container name</li>
<li>ComponentName- string - Required: No - Component name</li>
<li>ComponentVersion- string - Required: No - Component version</li>
<li>Name- string - Required: No - Vulnerability name</li>
 * @method string getOrder() Obtain Sorting order
 * @method void setOrder(string $Order) Set Sorting order
 * @method string getBy() Obtain Sorting field
 * @method void setBy(string $By) Set Sorting field
 */
class CreateEmergencyVulExportJobRequest extends AbstractModel
{
    /**
     * @var integer Number of results to be returned. Default value: `50000`. Maximum value: `50000`.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var array Filter
<li>Level- String - Required: No - Severity. Valid values: `CRITICAL` (critical); `HIGH` (high); `MIDDLE` (medium); `LOW` (low).</li>
<li>Tags- string - Required: No - Vulnerability tag. Valid values: `POC`, `EXP`.</li>
<li>CanBeFixed- string - Required: No - Whether the vulnerability can be fixed. Valid values: `true`, `false`.</li>
<li>CVEID- string - Required: No - CVE No.</li>
<li>ImageID- string - Required: No - Image ID</li>
<li>ImageName- String - Required: No - Image name</li>
<li>ContainerID- string - Required: No - Container ID</li>
<li>ContainerName- string - Required: No - Container name</li>
<li>ComponentName- string - Required: No - Component name</li>
<li>ComponentVersion- string - Required: No - Component version</li>
<li>Name- string - Required: No - Vulnerability name</li>
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
     * @param integer $Limit Number of results to be returned. Default value: `50000`. Maximum value: `50000`.
     * @param integer $Offset Offset. Default value: `0`.
     * @param array $Filters Filter
<li>Level- String - Required: No - Severity. Valid values: `CRITICAL` (critical); `HIGH` (high); `MIDDLE` (medium); `LOW` (low).</li>
<li>Tags- string - Required: No - Vulnerability tag. Valid values: `POC`, `EXP`.</li>
<li>CanBeFixed- string - Required: No - Whether the vulnerability can be fixed. Valid values: `true`, `false`.</li>
<li>CVEID- string - Required: No - CVE No.</li>
<li>ImageID- string - Required: No - Image ID</li>
<li>ImageName- String - Required: No - Image name</li>
<li>ContainerID- string - Required: No - Container ID</li>
<li>ContainerName- string - Required: No - Container name</li>
<li>ComponentName- string - Required: No - Component name</li>
<li>ComponentVersion- string - Required: No - Component version</li>
<li>Name- string - Required: No - Vulnerability name</li>
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
