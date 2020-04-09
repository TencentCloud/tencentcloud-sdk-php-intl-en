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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddTimeWindow request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method array getMonday() Obtain Time period available for maintenance on Monday in the format of 10:00-12:00. Each period lasts from half an hour to three hours, with the start time and end time aligned by half-hour. Up to two time periods can be set. The same rule applies below.
 * @method void setMonday(array $Monday) Set Time period available for maintenance on Monday in the format of 10:00-12:00. Each period lasts from half an hour to three hours, with the start time and end time aligned by half-hour. Up to two time periods can be set. The same rule applies below.
 * @method array getTuesday() Obtain Maintenance time window on Tuesday
 * @method void setTuesday(array $Tuesday) Set Maintenance time window on Tuesday
 * @method array getWednesday() Obtain Maintenance time window on Wednesday
 * @method void setWednesday(array $Wednesday) Set Maintenance time window on Wednesday
 * @method array getThursday() Obtain Maintenance time window on Thursday
 * @method void setThursday(array $Thursday) Set Maintenance time window on Thursday
 * @method array getFriday() Obtain Maintenance time window on Friday
 * @method void setFriday(array $Friday) Set Maintenance time window on Friday
 * @method array getSaturday() Obtain Maintenance time window on Saturday
 * @method void setSaturday(array $Saturday) Set Maintenance time window on Saturday
 * @method array getSunday() Obtain Maintenance time window on Sunday
 * @method void setSunday(array $Sunday) Set Maintenance time window on Sunday
 */
class AddTimeWindowRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     */
    public $InstanceId;

    /**
     * @var array Time period available for maintenance on Monday in the format of 10:00-12:00. Each period lasts from half an hour to three hours, with the start time and end time aligned by half-hour. Up to two time periods can be set. The same rule applies below.
     */
    public $Monday;

    /**
     * @var array Maintenance time window on Tuesday
     */
    public $Tuesday;

    /**
     * @var array Maintenance time window on Wednesday
     */
    public $Wednesday;

    /**
     * @var array Maintenance time window on Thursday
     */
    public $Thursday;

    /**
     * @var array Maintenance time window on Friday
     */
    public $Friday;

    /**
     * @var array Maintenance time window on Saturday
     */
    public $Saturday;

    /**
     * @var array Maintenance time window on Sunday
     */
    public $Sunday;

    /**
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     * @param array $Monday Time period available for maintenance on Monday in the format of 10:00-12:00. Each period lasts from half an hour to three hours, with the start time and end time aligned by half-hour. Up to two time periods can be set. The same rule applies below.
     * @param array $Tuesday Maintenance time window on Tuesday
     * @param array $Wednesday Maintenance time window on Wednesday
     * @param array $Thursday Maintenance time window on Thursday
     * @param array $Friday Maintenance time window on Friday
     * @param array $Saturday Maintenance time window on Saturday
     * @param array $Sunday Maintenance time window on Sunday
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Monday",$param) and $param["Monday"] !== null) {
            $this->Monday = $param["Monday"];
        }

        if (array_key_exists("Tuesday",$param) and $param["Tuesday"] !== null) {
            $this->Tuesday = $param["Tuesday"];
        }

        if (array_key_exists("Wednesday",$param) and $param["Wednesday"] !== null) {
            $this->Wednesday = $param["Wednesday"];
        }

        if (array_key_exists("Thursday",$param) and $param["Thursday"] !== null) {
            $this->Thursday = $param["Thursday"];
        }

        if (array_key_exists("Friday",$param) and $param["Friday"] !== null) {
            $this->Friday = $param["Friday"];
        }

        if (array_key_exists("Saturday",$param) and $param["Saturday"] !== null) {
            $this->Saturday = $param["Saturday"];
        }

        if (array_key_exists("Sunday",$param) and $param["Sunday"] !== null) {
            $this->Sunday = $param["Sunday"];
        }
    }
}
