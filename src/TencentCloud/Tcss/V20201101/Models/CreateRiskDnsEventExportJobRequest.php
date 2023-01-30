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
 * CreateRiskDnsEventExportJob request structure.
 *
 * @method array getFilters() Obtain Filters.
<li>`EventStatus` - String - Optional - Event status. Values: `EVENT_UNDEAL` (Pending); `EVENT_DEALED` (Handled); `EVENT_IGNORE` (Ignored); `EVENT_ADD_WHITE` (Added to the allowlist)</li>
<li>`ContainerStatus` - String - Optional - Container running status. `CREATED`, `RUNNING`, `PAUSED`, `STOPPED`, `RESTARTING`: `REMOVING`, `DESTROYED (Terminated)</li>
<li>`ContainerNetStatus` - String - Optional - Container network status. Values: `NORMAL`, `ISOLATED`, `ISOLATE_FAILED` (Isolation failed`; `RESTORE_FAILED` (Failed to restore from isolation), `RESTORING` (Restoring); `ISOLATING`</li>
<li>`EventType` - String - Optional - Event type. Values: `DOMAIN` (Malicious domain); `IP` (Malicious IP)</li>
<li>`TimeRange` - String - Optional - Time range, where the first value represents the start time and the second value represents the end time</li>
<li>`RiskDns` - String - Optional - Malicious domain. </li>
<li>`RiskIP`- String - Optional - Malicious IP. </li>
<li>`ContainerName` - String - Optional - Container name. </li>
<li>`ContainerID` - String - Optional - Container ID. </li>
<li>`ImageName` - String - Optional - Image name. </li>
<li>`ImageID` - String - Optional - Image ID. </li>
<li>`HostName` - String - Optional - Server name. </li>
<li>`HostIP` - String - Optional - Private IP. </li>
<li>`PublicIP` - String - Optional - Public IP. </li>
 * @method void setFilters(array $Filters) Set Filters.
<li>`EventStatus` - String - Optional - Event status. Values: `EVENT_UNDEAL` (Pending); `EVENT_DEALED` (Handled); `EVENT_IGNORE` (Ignored); `EVENT_ADD_WHITE` (Added to the allowlist)</li>
<li>`ContainerStatus` - String - Optional - Container running status. `CREATED`, `RUNNING`, `PAUSED`, `STOPPED`, `RESTARTING`: `REMOVING`, `DESTROYED (Terminated)</li>
<li>`ContainerNetStatus` - String - Optional - Container network status. Values: `NORMAL`, `ISOLATED`, `ISOLATE_FAILED` (Isolation failed`; `RESTORE_FAILED` (Failed to restore from isolation), `RESTORING` (Restoring); `ISOLATING`</li>
<li>`EventType` - String - Optional - Event type. Values: `DOMAIN` (Malicious domain); `IP` (Malicious IP)</li>
<li>`TimeRange` - String - Optional - Time range, where the first value represents the start time and the second value represents the end time</li>
<li>`RiskDns` - String - Optional - Malicious domain. </li>
<li>`RiskIP`- String - Optional - Malicious IP. </li>
<li>`ContainerName` - String - Optional - Container name. </li>
<li>`ContainerID` - String - Optional - Container ID. </li>
<li>`ImageName` - String - Optional - Image name. </li>
<li>`ImageID` - String - Optional - Image ID. </li>
<li>`HostName` - String - Optional - Server name. </li>
<li>`HostIP` - String - Optional - Private IP. </li>
<li>`PublicIP` - String - Optional - Public IP. </li>
 * @method integer getLimit() Obtain The number of results displayed per page. The maximum value is 100,000.
 * @method void setLimit(integer $Limit) Set The number of results displayed per page. The maximum value is 100,000.
 * @method integer getOffset() Obtain Offset. Default value: 0
 * @method void setOffset(integer $Offset) Set Offset. Default value: 0
 * @method string getOrder() Obtain Sort order: `asc`, `desc`
 * @method void setOrder(string $Order) Set Sort order: `asc`, `desc`
 * @method string getBy() Obtain Sorting field: Number of events: EventCount
 * @method void setBy(string $By) Set Sorting field: Number of events: EventCount
 */
class CreateRiskDnsEventExportJobRequest extends AbstractModel
{
    /**
     * @var array Filters.
<li>`EventStatus` - String - Optional - Event status. Values: `EVENT_UNDEAL` (Pending); `EVENT_DEALED` (Handled); `EVENT_IGNORE` (Ignored); `EVENT_ADD_WHITE` (Added to the allowlist)</li>
<li>`ContainerStatus` - String - Optional - Container running status. `CREATED`, `RUNNING`, `PAUSED`, `STOPPED`, `RESTARTING`: `REMOVING`, `DESTROYED (Terminated)</li>
<li>`ContainerNetStatus` - String - Optional - Container network status. Values: `NORMAL`, `ISOLATED`, `ISOLATE_FAILED` (Isolation failed`; `RESTORE_FAILED` (Failed to restore from isolation), `RESTORING` (Restoring); `ISOLATING`</li>
<li>`EventType` - String - Optional - Event type. Values: `DOMAIN` (Malicious domain); `IP` (Malicious IP)</li>
<li>`TimeRange` - String - Optional - Time range, where the first value represents the start time and the second value represents the end time</li>
<li>`RiskDns` - String - Optional - Malicious domain. </li>
<li>`RiskIP`- String - Optional - Malicious IP. </li>
<li>`ContainerName` - String - Optional - Container name. </li>
<li>`ContainerID` - String - Optional - Container ID. </li>
<li>`ImageName` - String - Optional - Image name. </li>
<li>`ImageID` - String - Optional - Image ID. </li>
<li>`HostName` - String - Optional - Server name. </li>
<li>`HostIP` - String - Optional - Private IP. </li>
<li>`PublicIP` - String - Optional - Public IP. </li>
     */
    public $Filters;

    /**
     * @var integer The number of results displayed per page. The maximum value is 100,000.
     */
    public $Limit;

    /**
     * @var integer Offset. Default value: 0
     */
    public $Offset;

    /**
     * @var string Sort order: `asc`, `desc`
     */
    public $Order;

    /**
     * @var string Sorting field: Number of events: EventCount
     */
    public $By;

    /**
     * @param array $Filters Filters.
<li>`EventStatus` - String - Optional - Event status. Values: `EVENT_UNDEAL` (Pending); `EVENT_DEALED` (Handled); `EVENT_IGNORE` (Ignored); `EVENT_ADD_WHITE` (Added to the allowlist)</li>
<li>`ContainerStatus` - String - Optional - Container running status. `CREATED`, `RUNNING`, `PAUSED`, `STOPPED`, `RESTARTING`: `REMOVING`, `DESTROYED (Terminated)</li>
<li>`ContainerNetStatus` - String - Optional - Container network status. Values: `NORMAL`, `ISOLATED`, `ISOLATE_FAILED` (Isolation failed`; `RESTORE_FAILED` (Failed to restore from isolation), `RESTORING` (Restoring); `ISOLATING`</li>
<li>`EventType` - String - Optional - Event type. Values: `DOMAIN` (Malicious domain); `IP` (Malicious IP)</li>
<li>`TimeRange` - String - Optional - Time range, where the first value represents the start time and the second value represents the end time</li>
<li>`RiskDns` - String - Optional - Malicious domain. </li>
<li>`RiskIP`- String - Optional - Malicious IP. </li>
<li>`ContainerName` - String - Optional - Container name. </li>
<li>`ContainerID` - String - Optional - Container ID. </li>
<li>`ImageName` - String - Optional - Image name. </li>
<li>`ImageID` - String - Optional - Image ID. </li>
<li>`HostName` - String - Optional - Server name. </li>
<li>`HostIP` - String - Optional - Private IP. </li>
<li>`PublicIP` - String - Optional - Public IP. </li>
     * @param integer $Limit The number of results displayed per page. The maximum value is 100,000.
     * @param integer $Offset Offset. Default value: 0
     * @param string $Order Sort order: `asc`, `desc`
     * @param string $By Sorting field: Number of events: EventCount
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
