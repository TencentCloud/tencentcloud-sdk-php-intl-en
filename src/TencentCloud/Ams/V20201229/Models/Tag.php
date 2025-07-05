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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Tag of the audio slice
 *
 * @method string getName() Obtain The value of this parameter varies by `Label`.
When `Label` is `Teenager`, `Name` can be `Teenager`. 
When `Label` is `Gender`, `Name` can be `Male` and `Female`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setName(string $Name) Set The value of this parameter varies by `Label`.
When `Label` is `Teenager`, `Name` can be `Teenager`. 
When `Label` is `Gender`, `Name` can be `Male` and `Female`.
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getScore() Obtain Confidence score. Value: 1 to 100. 
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setScore(integer $Score) Set Confidence score. Value: 1 to 100. 
Note: This field may return `null`, indicating that no valid value was found.
 * @method float getStartTime() Obtain Start time for the recognition (ms)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setStartTime(float $StartTime) Set Start time for the recognition (ms)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method float getEndTime() Obtain End time for the recognition (ms)
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setEndTime(float $EndTime) Set End time for the recognition (ms)
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class Tag extends AbstractModel
{
    /**
     * @var string The value of this parameter varies by `Label`.
When `Label` is `Teenager`, `Name` can be `Teenager`. 
When `Label` is `Gender`, `Name` can be `Male` and `Female`.
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Name;

    /**
     * @var integer Confidence score. Value: 1 to 100. 
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Score;

    /**
     * @var float Start time for the recognition (ms)
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $StartTime;

    /**
     * @var float End time for the recognition (ms)
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $EndTime;

    /**
     * @param string $Name The value of this parameter varies by `Label`.
When `Label` is `Teenager`, `Name` can be `Teenager`. 
When `Label` is `Gender`, `Name` can be `Male` and `Female`.
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $Score Confidence score. Value: 1 to 100. 
Note: This field may return `null`, indicating that no valid value was found.
     * @param float $StartTime Start time for the recognition (ms)
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param float $EndTime End time for the recognition (ms)
Note: This field may return `null`, indicating that no valid value can be obtained.
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

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
