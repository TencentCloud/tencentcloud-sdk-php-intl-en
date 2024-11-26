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
namespace TencentCloud\Vm\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Audio moan moderation result
 *
 * @method string getLabel() Obtain This field is used to return the type of the content to be detected. It is fixed at **Moan** here to call the moan detection feature.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setLabel(string $Label) Set This field is used to return the type of the content to be detected. It is fixed at **Moan** here to call the moan detection feature.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getScore() Obtain This field is used to return the confidence of moan detection. Value range: 0 (**the lowest confidence**)–100 (**the highest confidence**), where a higher value indicates that the audio is more likely to fall into the category of moan.
 * @method void setScore(integer $Score) Set This field is used to return the confidence of moan detection. Value range: 0 (**the lowest confidence**)–100 (**the highest confidence**), where a higher value indicates that the audio is more likely to fall into the category of moan.
 * @method float getStartTime() Obtain This field is used to return the start time of the segment of an audio file under the corresponding moan tag in milliseconds.
 * @method void setStartTime(float $StartTime) Set This field is used to return the start time of the segment of an audio file under the corresponding moan tag in milliseconds.
 * @method float getEndTime() Obtain This field is used to return the end time of the segment of an audio file under the corresponding moan tag in milliseconds.
 * @method void setEndTime(float $EndTime) Set This field is used to return the end time of the segment of an audio file under the corresponding moan tag in milliseconds.
 * @method string getSubLabelCode() Obtain *This field is in beta test. Stay tuned*
 * @method void setSubLabelCode(string $SubLabelCode) Set *This field is in beta test. Stay tuned*
 * @method string getSubLabel() Obtain This field is used to return a subtag under the current tag (Lable).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSubLabel(string $SubLabel) Set This field is used to return a subtag under the current tag (Lable).
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getSuggestion() Obtain This field returns the suggested action according to the check result. <br>Values: `Block`, `Review`, `Pass`.
 * @method void setSuggestion(string $Suggestion) Set This field returns the suggested action according to the check result. <br>Values: `Block`, `Review`, `Pass`.
 */
class AudioResultDetailMoanResult extends AbstractModel
{
    /**
     * @var string This field is used to return the type of the content to be detected. It is fixed at **Moan** here to call the moan detection feature.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Label;

    /**
     * @var integer This field is used to return the confidence of moan detection. Value range: 0 (**the lowest confidence**)–100 (**the highest confidence**), where a higher value indicates that the audio is more likely to fall into the category of moan.
     */
    public $Score;

    /**
     * @var float This field is used to return the start time of the segment of an audio file under the corresponding moan tag in milliseconds.
     */
    public $StartTime;

    /**
     * @var float This field is used to return the end time of the segment of an audio file under the corresponding moan tag in milliseconds.
     */
    public $EndTime;

    /**
     * @var string *This field is in beta test. Stay tuned*
     */
    public $SubLabelCode;

    /**
     * @var string This field is used to return a subtag under the current tag (Lable).
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SubLabel;

    /**
     * @var string This field returns the suggested action according to the check result. <br>Values: `Block`, `Review`, `Pass`.
     */
    public $Suggestion;

    /**
     * @param string $Label This field is used to return the type of the content to be detected. It is fixed at **Moan** here to call the moan detection feature.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Score This field is used to return the confidence of moan detection. Value range: 0 (**the lowest confidence**)–100 (**the highest confidence**), where a higher value indicates that the audio is more likely to fall into the category of moan.
     * @param float $StartTime This field is used to return the start time of the segment of an audio file under the corresponding moan tag in milliseconds.
     * @param float $EndTime This field is used to return the end time of the segment of an audio file under the corresponding moan tag in milliseconds.
     * @param string $SubLabelCode *This field is in beta test. Stay tuned*
     * @param string $SubLabel This field is used to return a subtag under the current tag (Lable).
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Suggestion This field returns the suggested action according to the check result. <br>Values: `Block`, `Review`, `Pass`.
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

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }
    }
}
