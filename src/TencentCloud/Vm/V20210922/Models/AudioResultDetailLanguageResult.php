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
namespace TencentCloud\Vm\V20210922\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audio language detection result
 *
 * @method string getLabel() Obtain Language
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLabel(string $Label) Set Language
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getScore() Obtain Score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setScore(integer $Score) Set Score
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getStartTime() Obtain Start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(float $StartTime) Set Start time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getEndTime() Obtain End time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(float $EndTime) Set End time
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSubLabelCode() Obtain Subtag under the current tag
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubLabelCode(string $SubLabelCode) Set Subtag under the current tag
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AudioResultDetailLanguageResult extends AbstractModel
{
    /**
     * @var string Language
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Label;

    /**
     * @var integer Score
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Score;

    /**
     * @var float Start time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var float End time
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string Subtag under the current tag
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubLabelCode;

    /**
     * @param string $Label Language
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Score Score
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $StartTime Start time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $EndTime End time
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SubLabelCode Subtag under the current tag
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
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

        if (array_key_exists("SubLabelCode",$param) and $param["SubLabelCode"] !== null) {
            $this->SubLabelCode = $param["SubLabelCode"];
        }
    }
}
