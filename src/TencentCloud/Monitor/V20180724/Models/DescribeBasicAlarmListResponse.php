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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBasicAlarmList response structure.
 *
 * @method array getAlarms() Obtain Alarm list.
Note: This field may return null, indicating that no valid value was found.
 * @method void setAlarms(array $Alarms) Set Alarm list.
Note: This field may return null, indicating that no valid value was found.
 * @method integer getTotal() Obtain Total number.
Note: This field may return null, indicating that no valid value was found.
 * @method void setTotal(integer $Total) Set Total number.
Note: This field may return null, indicating that no valid value was found.
 * @method string getWarning() Obtain Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWarning(string $Warning) Set Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeBasicAlarmListResponse extends AbstractModel
{
    /**
     * @var array Alarm list.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Alarms;

    /**
     * @var integer Total number.
Note: This field may return null, indicating that no valid value was found.
     */
    public $Total;

    /**
     * @var string Remarks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Warning;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param array $Alarms Alarm list.
Note: This field may return null, indicating that no valid value was found.
     * @param integer $Total Total number.
Note: This field may return null, indicating that no valid value was found.
     * @param string $Warning Remarks
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RequestId The unique request ID, which is returned for each request. RequestId is required for locating a problem.
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
        if (array_key_exists("Alarms",$param) and $param["Alarms"] !== null) {
            $this->Alarms = [];
            foreach ($param["Alarms"] as $key => $value){
                $obj = new DescribeBasicAlarmListAlarms();
                $obj->deserialize($value);
                array_push($this->Alarms, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Warning",$param) and $param["Warning"] !== null) {
            $this->Warning = $param["Warning"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
