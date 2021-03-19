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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTimerScalingPolicies request structure.
 *
 * @method string getFleetId() Obtain ID of the fleet to be bound with the policy
 * @method void setFleetId(string $FleetId) Set ID of the fleet to be bound with the policy
 * @method string getTimerName() Obtain Scheduled scaling policy name
 * @method void setTimerName(string $TimerName) Set Scheduled scaling policy name
 * @method string getBeginTime() Obtain Start time of the scheduled scaling policy
 * @method void setBeginTime(string $BeginTime) Set Start time of the scheduled scaling policy
 * @method string getEndTime() Obtain End time of the scheduled scaling policy
 * @method void setEndTime(string $EndTime) Set End time of the scheduled scaling policy
 * @method integer getOffset() Obtain Pagination offset
 * @method void setOffset(integer $Offset) Set Pagination offset
 * @method integer getLimit() Obtain Number of entries per page
 * @method void setLimit(integer $Limit) Set Number of entries per page
 */
class DescribeTimerScalingPoliciesRequest extends AbstractModel
{
    /**
     * @var string ID of the fleet to be bound with the policy
     */
    public $FleetId;

    /**
     * @var string Scheduled scaling policy name
     */
    public $TimerName;

    /**
     * @var string Start time of the scheduled scaling policy
     */
    public $BeginTime;

    /**
     * @var string End time of the scheduled scaling policy
     */
    public $EndTime;

    /**
     * @var integer Pagination offset
     */
    public $Offset;

    /**
     * @var integer Number of entries per page
     */
    public $Limit;

    /**
     * @param string $FleetId ID of the fleet to be bound with the policy
     * @param string $TimerName Scheduled scaling policy name
     * @param string $BeginTime Start time of the scheduled scaling policy
     * @param string $EndTime End time of the scheduled scaling policy
     * @param integer $Offset Pagination offset
     * @param integer $Limit Number of entries per page
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
        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("TimerName",$param) and $param["TimerName"] !== null) {
            $this->TimerName = $param["TimerName"];
        }

        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
