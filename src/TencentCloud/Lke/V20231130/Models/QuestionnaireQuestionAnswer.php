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
 * Answer to the questionnaire question
 *
 * @method string getQuestion() Obtain <p>Issue.</p>
 * @method void setQuestion(string $Question) Set <p>Issue.</p>
 * @method array getSelectedLabels() Obtain <p>Selected answer tag.</p>
 * @method void setSelectedLabels(array $SelectedLabels) Set <p>Selected answer tag.</p>
 */
class QuestionnaireQuestionAnswer extends AbstractModel
{
    /**
     * @var string <p>Issue.</p>
     */
    public $Question;

    /**
     * @var array <p>Selected answer tag.</p>
     */
    public $SelectedLabels;

    /**
     * @param string $Question <p>Issue.</p>
     * @param array $SelectedLabels <p>Selected answer tag.</p>
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
        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("SelectedLabels",$param) and $param["SelectedLabels"] !== null) {
            $this->SelectedLabels = $param["SelectedLabels"];
        }
    }
}
