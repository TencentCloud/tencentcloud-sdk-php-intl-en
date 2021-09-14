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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRotationDetail response structure.
 *
 * @method boolean getEnableRotation() Obtain Whether to enable rotation. `true`: enabled; `false`: disabled.
 * @method void setEnableRotation(boolean $EnableRotation) Set Whether to enable rotation. `true`: enabled; `false`: disabled.
 * @method integer getFrequency() Obtain Rotation frequency in days. Default value: 1 day.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFrequency(integer $Frequency) Set Rotation frequency in days. Default value: 1 day.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getLatestRotateTime() Obtain Last rotation time, which is an explicitly visible time string in the format of 2006-01-02 15:04:05.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLatestRotateTime(string $LatestRotateTime) Set Last rotation time, which is an explicitly visible time string in the format of 2006-01-02 15:04:05.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getNextRotateBeginTime() Obtain Next rotation start time, which is an explicitly visible time string in the format of 2006-01-02 15:04:05.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setNextRotateBeginTime(string $NextRotateBeginTime) Set Next rotation start time, which is an explicitly visible time string in the format of 2006-01-02 15:04:05.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getRequestId() Obtain The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 * @method void setRequestId(string $RequestId) Set The unique request ID, which is returned for each request. RequestId is required for locating a problem.
 */
class DescribeRotationDetailResponse extends AbstractModel
{
    /**
     * @var boolean Whether to enable rotation. `true`: enabled; `false`: disabled.
     */
    public $EnableRotation;

    /**
     * @var integer Rotation frequency in days. Default value: 1 day.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Frequency;

    /**
     * @var string Last rotation time, which is an explicitly visible time string in the format of 2006-01-02 15:04:05.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $LatestRotateTime;

    /**
     * @var string Next rotation start time, which is an explicitly visible time string in the format of 2006-01-02 15:04:05.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $NextRotateBeginTime;

    /**
     * @var string The unique request ID, which is returned for each request. RequestId is required for locating a problem.
     */
    public $RequestId;

    /**
     * @param boolean $EnableRotation Whether to enable rotation. `true`: enabled; `false`: disabled.
     * @param integer $Frequency Rotation frequency in days. Default value: 1 day.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $LatestRotateTime Last rotation time, which is an explicitly visible time string in the format of 2006-01-02 15:04:05.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $NextRotateBeginTime Next rotation start time, which is an explicitly visible time string in the format of 2006-01-02 15:04:05.
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("EnableRotation",$param) and $param["EnableRotation"] !== null) {
            $this->EnableRotation = $param["EnableRotation"];
        }

        if (array_key_exists("Frequency",$param) and $param["Frequency"] !== null) {
            $this->Frequency = $param["Frequency"];
        }

        if (array_key_exists("LatestRotateTime",$param) and $param["LatestRotateTime"] !== null) {
            $this->LatestRotateTime = $param["LatestRotateTime"];
        }

        if (array_key_exists("NextRotateBeginTime",$param) and $param["NextRotateBeginTime"] !== null) {
            $this->NextRotateBeginTime = $param["NextRotateBeginTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
