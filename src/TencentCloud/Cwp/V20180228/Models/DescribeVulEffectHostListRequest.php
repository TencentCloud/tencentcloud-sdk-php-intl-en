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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulEffectHostList request structure.
 *
 * @method integer getLimit() Obtain Pagination limit, with the maximum value being 100.
 * @method void setLimit(integer $Limit) Set Pagination limit, with the maximum value being 100.
 * @method integer getOffset() Obtain Pagination offset
 * @method void setOffset(integer $Offset) Set Pagination offset
 * @method integer getVulId() Obtain Vulnerability ID
 * @method void setVulId(integer $VulId) Set Vulnerability ID
 * @method array getFilters() Obtain Filter criteria:
<li>AliasName - String - host name for filtering</li>
<li>TagIds - String - array of host tag IDs separated by commas</li>
<li>Status - String - status: 0: pending; 1: ignored; 3: fixed; 5: detecting; 6: fixing; 8: fixing failed</li>
<li>Uuid - String array - UUID array</li>
<li>Version - String array - paid edition array: "Flagship": Ultimate Edition; "PRO_VERSION": Pro Edition; "BASIC_VERSION": Basic Edition</li>
<li>InstanceState - String array - instance status array: "PENDING": creating; "LAUNCH_FAILED": creation failed; "RUNNING": running; "STOPPED": shut down; "STARTING": starting; "STOPPING": shutting down; "REBOOTING": restarting; "SHUTDOWN": to be terminated; "TERMINATING": terminating; "UNKNOWN": unknown (for non-Tencent Cloud machines and offline client) </li>
 * @method void setFilters(array $Filters) Set Filter criteria:
<li>AliasName - String - host name for filtering</li>
<li>TagIds - String - array of host tag IDs separated by commas</li>
<li>Status - String - status: 0: pending; 1: ignored; 3: fixed; 5: detecting; 6: fixing; 8: fixing failed</li>
<li>Uuid - String array - UUID array</li>
<li>Version - String array - paid edition array: "Flagship": Ultimate Edition; "PRO_VERSION": Pro Edition; "BASIC_VERSION": Basic Edition</li>
<li>InstanceState - String array - instance status array: "PENDING": creating; "LAUNCH_FAILED": creation failed; "RUNNING": running; "STOPPED": shut down; "STARTING": starting; "STOPPING": shutting down; "REBOOTING": restarting; "SHUTDOWN": to be terminated; "TERMINATING": terminating; "UNKNOWN": unknown (for non-Tencent Cloud machines and offline client) </li>
 */
class DescribeVulEffectHostListRequest extends AbstractModel
{
    /**
     * @var integer Pagination limit, with the maximum value being 100.
     */
    public $Limit;

    /**
     * @var integer Pagination offset
     */
    public $Offset;

    /**
     * @var integer Vulnerability ID
     */
    public $VulId;

    /**
     * @var array Filter criteria:
<li>AliasName - String - host name for filtering</li>
<li>TagIds - String - array of host tag IDs separated by commas</li>
<li>Status - String - status: 0: pending; 1: ignored; 3: fixed; 5: detecting; 6: fixing; 8: fixing failed</li>
<li>Uuid - String array - UUID array</li>
<li>Version - String array - paid edition array: "Flagship": Ultimate Edition; "PRO_VERSION": Pro Edition; "BASIC_VERSION": Basic Edition</li>
<li>InstanceState - String array - instance status array: "PENDING": creating; "LAUNCH_FAILED": creation failed; "RUNNING": running; "STOPPED": shut down; "STARTING": starting; "STOPPING": shutting down; "REBOOTING": restarting; "SHUTDOWN": to be terminated; "TERMINATING": terminating; "UNKNOWN": unknown (for non-Tencent Cloud machines and offline client) </li>
     */
    public $Filters;

    /**
     * @param integer $Limit Pagination limit, with the maximum value being 100.
     * @param integer $Offset Pagination offset
     * @param integer $VulId Vulnerability ID
     * @param array $Filters Filter criteria:
<li>AliasName - String - host name for filtering</li>
<li>TagIds - String - array of host tag IDs separated by commas</li>
<li>Status - String - status: 0: pending; 1: ignored; 3: fixed; 5: detecting; 6: fixing; 8: fixing failed</li>
<li>Uuid - String array - UUID array</li>
<li>Version - String array - paid edition array: "Flagship": Ultimate Edition; "PRO_VERSION": Pro Edition; "BASIC_VERSION": Basic Edition</li>
<li>InstanceState - String array - instance status array: "PENDING": creating; "LAUNCH_FAILED": creation failed; "RUNNING": running; "STOPPED": shut down; "STARTING": starting; "STOPPING": shutting down; "REBOOTING": restarting; "SHUTDOWN": to be terminated; "TERMINATING": terminating; "UNKNOWN": unknown (for non-Tencent Cloud machines and offline client) </li>
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

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
