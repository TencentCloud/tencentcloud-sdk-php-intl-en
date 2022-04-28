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
 * @method array getMonday() Obtain Maintenance window on Monday. The format should be 10:00-12:00. You can set multiple time windows on a day. Each time window lasts from half an hour to three hours, and must start and end on the hour or half hour. At least one time window is required in a week. The same rule applies to the following parameters.
 * @method void setMonday(array $Monday) Set Maintenance window on Monday. The format should be 10:00-12:00. You can set multiple time windows on a day. Each time window lasts from half an hour to three hours, and must start and end on the hour or half hour. At least one time window is required in a week. The same rule applies to the following parameters.
 * @method array getTuesday() Obtain Maintenance window on Tuesday. At least one time window is required in a week.
 * @method void setTuesday(array $Tuesday) Set Maintenance window on Tuesday. At least one time window is required in a week.
 * @method array getWednesday() Obtain Maintenance window on Wednesday. At least one time window is required in a week.
 * @method void setWednesday(array $Wednesday) Set Maintenance window on Wednesday. At least one time window is required in a week.
 * @method array getThursday() Obtain Maintenance window on Thursday. At least one time window is required in a week.
 * @method void setThursday(array $Thursday) Set Maintenance window on Thursday. At least one time window is required in a week.
 * @method array getFriday() Obtain Maintenance window on Friday. At least one time window is required in a week.
 * @method void setFriday(array $Friday) Set Maintenance window on Friday. At least one time window is required in a week.
 * @method array getSaturday() Obtain Maintenance window on Saturday. At least one time window is required in a week.
 * @method void setSaturday(array $Saturday) Set Maintenance window on Saturday. At least one time window is required in a week.
 * @method array getSunday() Obtain Maintenance window on Sunday. At least one time window is required in a week.
 * @method void setSunday(array $Sunday) Set Maintenance window on Sunday. At least one time window is required in a week.
 * @method integer getMaxDelayTime() Obtain Maximum delay threshold, which takes effect only for source instances and disaster recovery instances.
 * @method void setMaxDelayTime(integer $MaxDelayTime) Set Maximum delay threshold, which takes effect only for source instances and disaster recovery instances.
 */
class AddTimeWindowRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     */
    public $InstanceId;

    /**
     * @var array Maintenance window on Monday. The format should be 10:00-12:00. You can set multiple time windows on a day. Each time window lasts from half an hour to three hours, and must start and end on the hour or half hour. At least one time window is required in a week. The same rule applies to the following parameters.
     */
    public $Monday;

    /**
     * @var array Maintenance window on Tuesday. At least one time window is required in a week.
     */
    public $Tuesday;

    /**
     * @var array Maintenance window on Wednesday. At least one time window is required in a week.
     */
    public $Wednesday;

    /**
     * @var array Maintenance window on Thursday. At least one time window is required in a week.
     */
    public $Thursday;

    /**
     * @var array Maintenance window on Friday. At least one time window is required in a week.
     */
    public $Friday;

    /**
     * @var array Maintenance window on Saturday. At least one time window is required in a week.
     */
    public $Saturday;

    /**
     * @var array Maintenance window on Sunday. At least one time window is required in a week.
     */
    public $Sunday;

    /**
     * @var integer Maximum delay threshold, which takes effect only for source instances and disaster recovery instances.
     */
    public $MaxDelayTime;

    /**
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     * @param array $Monday Maintenance window on Monday. The format should be 10:00-12:00. You can set multiple time windows on a day. Each time window lasts from half an hour to three hours, and must start and end on the hour or half hour. At least one time window is required in a week. The same rule applies to the following parameters.
     * @param array $Tuesday Maintenance window on Tuesday. At least one time window is required in a week.
     * @param array $Wednesday Maintenance window on Wednesday. At least one time window is required in a week.
     * @param array $Thursday Maintenance window on Thursday. At least one time window is required in a week.
     * @param array $Friday Maintenance window on Friday. At least one time window is required in a week.
     * @param array $Saturday Maintenance window on Saturday. At least one time window is required in a week.
     * @param array $Sunday Maintenance window on Sunday. At least one time window is required in a week.
     * @param integer $MaxDelayTime Maximum delay threshold, which takes effect only for source instances and disaster recovery instances.
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

        if (array_key_exists("MaxDelayTime",$param) and $param["MaxDelayTime"] !== null) {
            $this->MaxDelayTime = $param["MaxDelayTime"];
        }
    }
}
