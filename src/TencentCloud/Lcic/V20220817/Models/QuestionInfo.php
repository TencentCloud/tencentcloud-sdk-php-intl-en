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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * A quiz question in a room.
 *
 * @method string getQuestionId() Obtain The question ID.
 * @method void setQuestionId(string $QuestionId) Set The question ID.
 * @method string getQuestionContent() Obtain The question.
 * @method void setQuestionContent(string $QuestionContent) Set The question.
 * @method integer getDuration() Obtain The time limit for the question. If you set this parameter to `0`, there will not be a time limit.
 * @method void setDuration(integer $Duration) Set The time limit for the question. If you set this parameter to `0`, there will not be a time limit.
 * @method integer getCorrectAnswer() Obtain The correct answer. Bits are used to indicate the options that should be chosen. For example, `0x1` indicates option A; `0x11` indicates A and B, and so on.
 * @method void setCorrectAnswer(integer $CorrectAnswer) Set The correct answer. Bits are used to indicate the options that should be chosen. For example, `0x1` indicates option A; `0x11` indicates A and B, and so on.
 * @method array getAnswerStats() Obtain The statistics for each type of answer.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAnswerStats(array $AnswerStats) Set The statistics for each type of answer.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class QuestionInfo extends AbstractModel
{
    /**
     * @var string The question ID.
     */
    public $QuestionId;

    /**
     * @var string The question.
     */
    public $QuestionContent;

    /**
     * @var integer The time limit for the question. If you set this parameter to `0`, there will not be a time limit.
     */
    public $Duration;

    /**
     * @var integer The correct answer. Bits are used to indicate the options that should be chosen. For example, `0x1` indicates option A; `0x11` indicates A and B, and so on.
     */
    public $CorrectAnswer;

    /**
     * @var array The statistics for each type of answer.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AnswerStats;

    /**
     * @param string $QuestionId The question ID.
     * @param string $QuestionContent The question.
     * @param integer $Duration The time limit for the question. If you set this parameter to `0`, there will not be a time limit.
     * @param integer $CorrectAnswer The correct answer. Bits are used to indicate the options that should be chosen. For example, `0x1` indicates option A; `0x11` indicates A and B, and so on.
     * @param array $AnswerStats The statistics for each type of answer.
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
        if (array_key_exists("QuestionId",$param) and $param["QuestionId"] !== null) {
            $this->QuestionId = $param["QuestionId"];
        }

        if (array_key_exists("QuestionContent",$param) and $param["QuestionContent"] !== null) {
            $this->QuestionContent = $param["QuestionContent"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("CorrectAnswer",$param) and $param["CorrectAnswer"] !== null) {
            $this->CorrectAnswer = $param["CorrectAnswer"];
        }

        if (array_key_exists("AnswerStats",$param) and $param["AnswerStats"] !== null) {
            $this->AnswerStats = [];
            foreach ($param["AnswerStats"] as $key => $value){
                $obj = new AnswerStat();
                $obj->deserialize($value);
                array_push($this->AnswerStats, $obj);
            }
        }
    }
}
