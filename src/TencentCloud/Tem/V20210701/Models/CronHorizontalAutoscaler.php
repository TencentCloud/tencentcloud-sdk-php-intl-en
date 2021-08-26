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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Scheduled Scaling Policy
 *
 * @method string getName() Obtain Name of a scheduled scaling policy
 * @method void setName(string $Name) Set Name of a scheduled scaling policy
 * @method string getPeriod() Obtain Policy period
"* * *" indicates three ranges. The first is day, the second month, and the third week. The three parts are separated by spaces.
Examples:
* * * (every day)
* * 0-3 (every Sunday through Wednesday)
1,11,21 * * (1st, 11th, and 21st of every month)
 * @method void setPeriod(string $Period) Set Policy period
"* * *" indicates three ranges. The first is day, the second month, and the third week. The three parts are separated by spaces.
Examples:
* * * (every day)
* * 0-3 (every Sunday through Wednesday)
1,11,21 * * (1st, 11th, and 21st of every month)
 * @method array getSchedules() Obtain Details of a scheduled scaling policy
 * @method void setSchedules(array $Schedules) Set Details of a scheduled scaling policy
 * @method boolean getEnabled() Obtain Enabled or not
 * @method void setEnabled(boolean $Enabled) Set Enabled or not
 * @method integer getPriority() Obtain Policy priority. The higher the value, the higher the priority. The minimum value is 0.
 * @method void setPriority(integer $Priority) Set Policy priority. The higher the value, the higher the priority. The minimum value is 0.
 */
class CronHorizontalAutoscaler extends AbstractModel
{
    /**
     * @var string Name of a scheduled scaling policy
     */
    public $Name;

    /**
     * @var string Policy period
"* * *" indicates three ranges. The first is day, the second month, and the third week. The three parts are separated by spaces.
Examples:
* * * (every day)
* * 0-3 (every Sunday through Wednesday)
1,11,21 * * (1st, 11th, and 21st of every month)
     */
    public $Period;

    /**
     * @var array Details of a scheduled scaling policy
     */
    public $Schedules;

    /**
     * @var boolean Enabled or not
     */
    public $Enabled;

    /**
     * @var integer Policy priority. The higher the value, the higher the priority. The minimum value is 0.
     */
    public $Priority;

    /**
     * @param string $Name Name of a scheduled scaling policy
     * @param string $Period Policy period
"* * *" indicates three ranges. The first is day, the second month, and the third week. The three parts are separated by spaces.
Examples:
* * * (every day)
* * 0-3 (every Sunday through Wednesday)
1,11,21 * * (1st, 11th, and 21st of every month)
     * @param array $Schedules Details of a scheduled scaling policy
     * @param boolean $Enabled Enabled or not
     * @param integer $Priority Policy priority. The higher the value, the higher the priority. The minimum value is 0.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Schedules",$param) and $param["Schedules"] !== null) {
            $this->Schedules = [];
            foreach ($param["Schedules"] as $key => $value){
                $obj = new CronHorizontalAutoscalerSchedule();
                $obj->deserialize($value);
                array_push($this->Schedules, $obj);
            }
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }
    }
}
