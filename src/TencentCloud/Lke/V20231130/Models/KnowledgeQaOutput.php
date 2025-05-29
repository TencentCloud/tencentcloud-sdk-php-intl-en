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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Application management output configuration.
 *
 * @method integer getMethod() Obtain Output method, 1: streaming 2: non-streaming.
 * @method void setMethod(integer $Method) Set Output method, 1: streaming 2: non-streaming.
 * @method boolean getUseGeneralKnowledge() Obtain General model response.
 * @method void setUseGeneralKnowledge(boolean $UseGeneralKnowledge) Set General model response.
 * @method string getBareAnswer() Obtain Unknown response, within 300 characters.
 * @method void setBareAnswer(string $BareAnswer) Set Unknown response, within 300 characters.
 * @method boolean getShowQuestionClarify() Obtain Whether to display the question clarification switch.
 * @method void setShowQuestionClarify(boolean $ShowQuestionClarify) Set Whether to display the question clarification switch.
 * @method boolean getUseQuestionClarify() Obtain Whether to enable question clarification.
 * @method void setUseQuestionClarify(boolean $UseQuestionClarify) Set Whether to enable question clarification.
 * @method array getQuestionClarifyKeywords() Obtain List of keywords for question clarification.
 * @method void setQuestionClarifyKeywords(array $QuestionClarifyKeywords) Set List of keywords for question clarification.
 * @method boolean getUseRecommended() Obtain Whether to enable recommended questions.
 * @method void setUseRecommended(boolean $UseRecommended) Set Whether to enable recommended questions.
 */
class KnowledgeQaOutput extends AbstractModel
{
    /**
     * @var integer Output method, 1: streaming 2: non-streaming.
     */
    public $Method;

    /**
     * @var boolean General model response.
     */
    public $UseGeneralKnowledge;

    /**
     * @var string Unknown response, within 300 characters.
     */
    public $BareAnswer;

    /**
     * @var boolean Whether to display the question clarification switch.
     */
    public $ShowQuestionClarify;

    /**
     * @var boolean Whether to enable question clarification.
     */
    public $UseQuestionClarify;

    /**
     * @var array List of keywords for question clarification.
     */
    public $QuestionClarifyKeywords;

    /**
     * @var boolean Whether to enable recommended questions.
     */
    public $UseRecommended;

    /**
     * @param integer $Method Output method, 1: streaming 2: non-streaming.
     * @param boolean $UseGeneralKnowledge General model response.
     * @param string $BareAnswer Unknown response, within 300 characters.
     * @param boolean $ShowQuestionClarify Whether to display the question clarification switch.
     * @param boolean $UseQuestionClarify Whether to enable question clarification.
     * @param array $QuestionClarifyKeywords List of keywords for question clarification.
     * @param boolean $UseRecommended Whether to enable recommended questions.
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
        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("UseGeneralKnowledge",$param) and $param["UseGeneralKnowledge"] !== null) {
            $this->UseGeneralKnowledge = $param["UseGeneralKnowledge"];
        }

        if (array_key_exists("BareAnswer",$param) and $param["BareAnswer"] !== null) {
            $this->BareAnswer = $param["BareAnswer"];
        }

        if (array_key_exists("ShowQuestionClarify",$param) and $param["ShowQuestionClarify"] !== null) {
            $this->ShowQuestionClarify = $param["ShowQuestionClarify"];
        }

        if (array_key_exists("UseQuestionClarify",$param) and $param["UseQuestionClarify"] !== null) {
            $this->UseQuestionClarify = $param["UseQuestionClarify"];
        }

        if (array_key_exists("QuestionClarifyKeywords",$param) and $param["QuestionClarifyKeywords"] !== null) {
            $this->QuestionClarifyKeywords = $param["QuestionClarifyKeywords"];
        }

        if (array_key_exists("UseRecommended",$param) and $param["UseRecommended"] !== null) {
            $this->UseRecommended = $param["UseRecommended"];
        }
    }
}
