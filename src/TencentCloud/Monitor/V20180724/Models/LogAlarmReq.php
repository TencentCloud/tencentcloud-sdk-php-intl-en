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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Log alarm request information
 *
 * @method string getInstanceId() Obtain APM instance ID
 * @method void setInstanceId(string $InstanceId) Set APM instance ID
 * @method array getFilter() Obtain Search condition
 * @method void setFilter(array $Filter) Set Search condition
 * @method string getAlarmMerge() Obtain The switch to enable/disable alarm merging
 * @method void setAlarmMerge(string $AlarmMerge) Set The switch to enable/disable alarm merging
 * @method string getAlarmMergeTime() Obtain Alarm merging time
 * @method void setAlarmMergeTime(string $AlarmMergeTime) Set Alarm merging time
 */
class LogAlarmReq extends AbstractModel
{
    /**
     * @var string APM instance ID
     */
    public $InstanceId;

    /**
     * @var array Search condition
     */
    public $Filter;

    /**
     * @var string The switch to enable/disable alarm merging
     */
    public $AlarmMerge;

    /**
     * @var string Alarm merging time
     */
    public $AlarmMergeTime;

    /**
     * @param string $InstanceId APM instance ID
     * @param array $Filter Search condition
     * @param string $AlarmMerge The switch to enable/disable alarm merging
     * @param string $AlarmMergeTime Alarm merging time
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

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = [];
            foreach ($param["Filter"] as $key => $value){
                $obj = new LogFilterInfo();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
            }
        }

        if (array_key_exists("AlarmMerge",$param) and $param["AlarmMerge"] !== null) {
            $this->AlarmMerge = $param["AlarmMerge"];
        }

        if (array_key_exists("AlarmMergeTime",$param) and $param["AlarmMergeTime"] !== null) {
            $this->AlarmMergeTime = $param["AlarmMergeTime"];
        }
    }
}
