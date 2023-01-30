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
 * DescribeVulDefenceEvent request structure.
 *
 * @method array getFilters() Obtain Filter
<li>Status- String - Required: No - Plugin status. Valid values: `EVENT_UNDEAL` (pending); `EVENT_DEALED` (processed); `EVENT_IGNORE` (ignored); `EVENT_DEFENDED` (defended).</li>
<li>ContainerStatus- String - Required: No - Container status. Valid values: `CREATED` (created); `RUNNING` (running); `PAUSED` (suspended); 	`STOPPED` (stopped); `RESTARTING` (restarting); `REMOVING` (removing); `DESTROYED` (terminated).</li>
<li>ContainerNetStatus- String - Required: No - Container network status. Valid values: `NORMAL` (not isolated); `ISOLATED` (isolated); `ISOLATE_FAILED` (isolation failed); `RESTORE_FAILED` (recovery failed); `RESTORING` (recovering); `ISOLATING` (isolating).</li>
<li>EventType - String - Required: No - Intrusion status. Valid values: `EVENT_DEFENDED` (defended successfully); `EVENT_ATTACK` (attack attempt).</li>
<li>TimeRange- String - Required: No - Time range. The first value indicates the start time, and the second the end time.</li>
<li>VulName- string - Required: No - Vulnerability name</li>
<li>CVEID- string - Required: No - CVE No.</li>
<li>SourceIP- string - Required: No - Attacker IP</li>
<li>ContainerName- string - Required: No - Container name</li>
<li>ContainerID- string - Required: No - Container ID</li>
<li>ImageName- string - Required: No - Image name</li>
<li>ImageID- string - Required: No - Image ID</li>
<li>HostName- string - Required: No - Server name</li>
<li>HostIP- string - Required: No - Private IP</li>
 * @method void setFilters(array $Filters) Set Filter
<li>Status- String - Required: No - Plugin status. Valid values: `EVENT_UNDEAL` (pending); `EVENT_DEALED` (processed); `EVENT_IGNORE` (ignored); `EVENT_DEFENDED` (defended).</li>
<li>ContainerStatus- String - Required: No - Container status. Valid values: `CREATED` (created); `RUNNING` (running); `PAUSED` (suspended); 	`STOPPED` (stopped); `RESTARTING` (restarting); `REMOVING` (removing); `DESTROYED` (terminated).</li>
<li>ContainerNetStatus- String - Required: No - Container network status. Valid values: `NORMAL` (not isolated); `ISOLATED` (isolated); `ISOLATE_FAILED` (isolation failed); `RESTORE_FAILED` (recovery failed); `RESTORING` (recovering); `ISOLATING` (isolating).</li>
<li>EventType - String - Required: No - Intrusion status. Valid values: `EVENT_DEFENDED` (defended successfully); `EVENT_ATTACK` (attack attempt).</li>
<li>TimeRange- String - Required: No - Time range. The first value indicates the start time, and the second the end time.</li>
<li>VulName- string - Required: No - Vulnerability name</li>
<li>CVEID- string - Required: No - CVE No.</li>
<li>SourceIP- string - Required: No - Attacker IP</li>
<li>ContainerName- string - Required: No - Container name</li>
<li>ContainerID- string - Required: No - Container ID</li>
<li>ImageName- string - Required: No - Image name</li>
<li>ImageID- string - Required: No - Image ID</li>
<li>HostName- string - Required: No - Server name</li>
<li>HostIP- string - Required: No - Private IP</li>
 * @method integer getLimit() Obtain Number of results to be returned. Default value: `10`. Maximum value: `100`.
 * @method void setLimit(integer $Limit) Set Number of results to be returned. Default value: `10`. Maximum value: `100`.
 * @method integer getOffset() Obtain Offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Offset. Default value: `0`.
 * @method string getOrder() Obtain Sorting order. Valid values: `asc`, `desc`.
 * @method void setOrder(string $Order) Set Sorting order. Valid values: `asc`, `desc`.
 * @method string getBy() Obtain Sorting field: `EventCount` (number of events).
 * @method void setBy(string $By) Set Sorting field: `EventCount` (number of events).
 */
class DescribeVulDefenceEventRequest extends AbstractModel
{
    /**
     * @var array Filter
<li>Status- String - Required: No - Plugin status. Valid values: `EVENT_UNDEAL` (pending); `EVENT_DEALED` (processed); `EVENT_IGNORE` (ignored); `EVENT_DEFENDED` (defended).</li>
<li>ContainerStatus- String - Required: No - Container status. Valid values: `CREATED` (created); `RUNNING` (running); `PAUSED` (suspended); 	`STOPPED` (stopped); `RESTARTING` (restarting); `REMOVING` (removing); `DESTROYED` (terminated).</li>
<li>ContainerNetStatus- String - Required: No - Container network status. Valid values: `NORMAL` (not isolated); `ISOLATED` (isolated); `ISOLATE_FAILED` (isolation failed); `RESTORE_FAILED` (recovery failed); `RESTORING` (recovering); `ISOLATING` (isolating).</li>
<li>EventType - String - Required: No - Intrusion status. Valid values: `EVENT_DEFENDED` (defended successfully); `EVENT_ATTACK` (attack attempt).</li>
<li>TimeRange- String - Required: No - Time range. The first value indicates the start time, and the second the end time.</li>
<li>VulName- string - Required: No - Vulnerability name</li>
<li>CVEID- string - Required: No - CVE No.</li>
<li>SourceIP- string - Required: No - Attacker IP</li>
<li>ContainerName- string - Required: No - Container name</li>
<li>ContainerID- string - Required: No - Container ID</li>
<li>ImageName- string - Required: No - Image name</li>
<li>ImageID- string - Required: No - Image ID</li>
<li>HostName- string - Required: No - Server name</li>
<li>HostIP- string - Required: No - Private IP</li>
     */
    public $Filters;

    /**
     * @var integer Number of results to be returned. Default value: `10`. Maximum value: `100`.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var string Sorting order. Valid values: `asc`, `desc`.
     */
    public $Order;

    /**
     * @var string Sorting field: `EventCount` (number of events).
     */
    public $By;

    /**
     * @param array $Filters Filter
<li>Status- String - Required: No - Plugin status. Valid values: `EVENT_UNDEAL` (pending); `EVENT_DEALED` (processed); `EVENT_IGNORE` (ignored); `EVENT_DEFENDED` (defended).</li>
<li>ContainerStatus- String - Required: No - Container status. Valid values: `CREATED` (created); `RUNNING` (running); `PAUSED` (suspended); 	`STOPPED` (stopped); `RESTARTING` (restarting); `REMOVING` (removing); `DESTROYED` (terminated).</li>
<li>ContainerNetStatus- String - Required: No - Container network status. Valid values: `NORMAL` (not isolated); `ISOLATED` (isolated); `ISOLATE_FAILED` (isolation failed); `RESTORE_FAILED` (recovery failed); `RESTORING` (recovering); `ISOLATING` (isolating).</li>
<li>EventType - String - Required: No - Intrusion status. Valid values: `EVENT_DEFENDED` (defended successfully); `EVENT_ATTACK` (attack attempt).</li>
<li>TimeRange- String - Required: No - Time range. The first value indicates the start time, and the second the end time.</li>
<li>VulName- string - Required: No - Vulnerability name</li>
<li>CVEID- string - Required: No - CVE No.</li>
<li>SourceIP- string - Required: No - Attacker IP</li>
<li>ContainerName- string - Required: No - Container name</li>
<li>ContainerID- string - Required: No - Container ID</li>
<li>ImageName- string - Required: No - Image name</li>
<li>ImageID- string - Required: No - Image ID</li>
<li>HostName- string - Required: No - Server name</li>
<li>HostIP- string - Required: No - Private IP</li>
     * @param integer $Limit Number of results to be returned. Default value: `10`. Maximum value: `100`.
     * @param integer $Offset Offset. Default value: `0`.
     * @param string $Order Sorting order. Valid values: `asc`, `desc`.
     * @param string $By Sorting field: `EventCount` (number of events).
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
                $obj = new RunTimeFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
