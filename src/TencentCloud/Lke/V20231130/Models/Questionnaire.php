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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Questionnaire information
 *
 * @method string getTitle() Obtain <p>Questionnaire title</p>
 * @method void setTitle(string $Title) Set <p>Questionnaire title</p>
 * @method array getQuestions() Obtain <p>Question list of the questionnaire</p>
 * @method void setQuestions(array $Questions) Set <p>Question list of the questionnaire</p>
 * @method array getAnswers() Obtain <p>List of answers to the questionnaire</p>
 * @method void setAnswers(array $Answers) Set <p>List of answers to the questionnaire</p>
 */
class Questionnaire extends AbstractModel
{
    /**
     * @var string <p>Questionnaire title</p>
     */
    public $Title;

    /**
     * @var array <p>Question list of the questionnaire</p>
     */
    public $Questions;

    /**
     * @var array <p>List of answers to the questionnaire</p>
     */
    public $Answers;

    /**
     * @param string $Title <p>Questionnaire title</p>
     * @param array $Questions <p>Question list of the questionnaire</p>
     * @param array $Answers <p>List of answers to the questionnaire</p>
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Questions",$param) and $param["Questions"] !== null) {
            $this->Questions = [];
            foreach ($param["Questions"] as $key => $value){
                $obj = new QuestionnaireQuestion();
                $obj->deserialize($value);
                array_push($this->Questions, $obj);
            }
        }

        if (array_key_exists("Answers",$param) and $param["Answers"] !== null) {
            $this->Answers = [];
            foreach ($param["Answers"] as $key => $value){
                $obj = new QuestionnaireQuestionAnswer();
                $obj->deserialize($value);
                array_push($this->Answers, $obj);
            }
        }
    }
}
