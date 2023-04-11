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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Scheduled start and suspension information
 *
 * @method string getResumeTime() Obtain The scheduled start time, such as 8:00 AM every Monday.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setResumeTime(string $ResumeTime) Set The scheduled start time, such as 8:00 AM every Monday.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSuspendTime() Obtain The scheduled suspension time, such as 8:00 PM every Monday.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSuspendTime(string $SuspendTime) Set The scheduled suspension time, such as 8:00 PM every Monday.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getSuspendStrategy() Obtain The suspension setting. Valid values: `0` (suspension after task end, default) and `1` (force suspension).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSuspendStrategy(integer $SuspendStrategy) Set The suspension setting. Valid values: `0` (suspension after task end, default) and `1` (force suspension).
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CrontabResumeSuspendStrategy extends AbstractModel
{
    /**
     * @var string The scheduled start time, such as 8:00 AM every Monday.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ResumeTime;

    /**
     * @var string The scheduled suspension time, such as 8:00 PM every Monday.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SuspendTime;

    /**
     * @var integer The suspension setting. Valid values: `0` (suspension after task end, default) and `1` (force suspension).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SuspendStrategy;

    /**
     * @param string $ResumeTime The scheduled start time, such as 8:00 AM every Monday.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SuspendTime The scheduled suspension time, such as 8:00 PM every Monday.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $SuspendStrategy The suspension setting. Valid values: `0` (suspension after task end, default) and `1` (force suspension).
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("ResumeTime",$param) and $param["ResumeTime"] !== null) {
            $this->ResumeTime = $param["ResumeTime"];
        }

        if (array_key_exists("SuspendTime",$param) and $param["SuspendTime"] !== null) {
            $this->SuspendTime = $param["SuspendTime"];
        }

        if (array_key_exists("SuspendStrategy",$param) and $param["SuspendStrategy"] !== null) {
            $this->SuspendStrategy = $param["SuspendStrategy"];
        }
    }
}
