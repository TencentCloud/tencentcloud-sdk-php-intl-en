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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audio language detection result
 *
 * @method string getLabel() Obtain This field is used to return the language information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLabel(string $Label) Set This field is used to return the language information.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getScore() Obtain This parameter is used to return the confidence under the current tag. Value range: 0 (**the lowest confidence**)–100 (**the highest confidence**), where a higher value indicates that the audio is more likely to fall into the category of the current returned language tag;
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setScore(integer $Score) Set This parameter is used to return the confidence under the current tag. Value range: 0 (**the lowest confidence**)–100 (**the highest confidence**), where a higher value indicates that the audio is more likely to fall into the category of the current returned language tag;
Note: this field may return null, indicating that no valid values can be obtained.
 * @method float getStartTime() Obtain This parameter is used to return the start time of the segment of an audio file under the corresponding language tag in seconds. 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStartTime(float $StartTime) Set This parameter is used to return the start time of the segment of an audio file under the corresponding language tag in seconds. 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method float getEndTime() Obtain This parameter is used to return the end time of the segment of an audio file under the corresponding language tag in seconds. 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setEndTime(float $EndTime) Set This parameter is used to return the end time of the segment of an audio file under the corresponding language tag in seconds. 
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSubLabelCode() Obtain *This field is in beta test. Stay tuned*
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSubLabelCode(string $SubLabelCode) Set *This field is in beta test. Stay tuned*
Note: this field may return null, indicating that no valid values can be obtained.
 */
class AudioResultDetailLanguageResult extends AbstractModel
{
    /**
     * @var string This field is used to return the language information.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Label;

    /**
     * @var integer This parameter is used to return the confidence under the current tag. Value range: 0 (**the lowest confidence**)–100 (**the highest confidence**), where a higher value indicates that the audio is more likely to fall into the category of the current returned language tag;
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Score;

    /**
     * @var float This parameter is used to return the start time of the segment of an audio file under the corresponding language tag in seconds. 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StartTime;

    /**
     * @var float This parameter is used to return the end time of the segment of an audio file under the corresponding language tag in seconds. 
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $EndTime;

    /**
     * @var string *This field is in beta test. Stay tuned*
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SubLabelCode;

    /**
     * @param string $Label This field is used to return the language information.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Score This parameter is used to return the confidence under the current tag. Value range: 0 (**the lowest confidence**)–100 (**the highest confidence**), where a higher value indicates that the audio is more likely to fall into the category of the current returned language tag;
Note: this field may return null, indicating that no valid values can be obtained.
     * @param float $StartTime This parameter is used to return the start time of the segment of an audio file under the corresponding language tag in seconds. 
Note: this field may return null, indicating that no valid values can be obtained.
     * @param float $EndTime This parameter is used to return the end time of the segment of an audio file under the corresponding language tag in seconds. 
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $SubLabelCode *This field is in beta test. Stay tuned*
Note: this field may return null, indicating that no valid values can be obtained.
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
