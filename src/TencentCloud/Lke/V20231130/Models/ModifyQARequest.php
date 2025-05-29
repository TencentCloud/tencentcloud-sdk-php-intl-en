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
 * ModifyQA request structure.
 *
 * @method string getBotBizId() Obtain Application ID.
 * @method void setBotBizId(string $BotBizId) Set Application ID.
 * @method string getQaBizId() Obtain Q&A ID.
 * @method void setQaBizId(string $QaBizId) Set Q&A ID.
 * @method string getQuestion() Obtain Question.
 * @method void setQuestion(string $Question) Set Question.
 * @method string getAnswer() Obtain Answer.
 * @method void setAnswer(string $Answer) Set Answer.
 * @method string getCustomParam() Obtain Custom parameter.
 * @method void setCustomParam(string $CustomParam) Set Custom parameter.
 * @method integer getAttrRange() Obtain Applicable scope of labels: 1. all; 2. by conditions.
 * @method void setAttrRange(integer $AttrRange) Set Applicable scope of labels: 1. all; 2. by conditions.
 * @method array getAttrLabels() Obtain Label reference.
 * @method void setAttrLabels(array $AttrLabels) Set Label reference.
 * @method string getDocBizId() Obtain Document ID.
 * @method void setDocBizId(string $DocBizId) Set Document ID.
 * @method string getCateBizId() Obtain Category ID.
 * @method void setCateBizId(string $CateBizId) Set Category ID.
 * @method string getExpireStart() Obtain Effective start time, unix timestamp.
 * @method void setExpireStart(string $ExpireStart) Set Effective start time, unix timestamp.
 * @method string getExpireEnd() Obtain Effective end time, unix timestamp, 0 indicates permanent validity.
 * @method void setExpireEnd(string $ExpireEnd) Set Effective end time, unix timestamp, 0 indicates permanent validity.
 * @method SimilarQuestionModify getSimilarQuestionModify() Obtain Similar question modification information (not passed if there is no modification to the similar question).
 * @method void setSimilarQuestionModify(SimilarQuestionModify $SimilarQuestionModify) Set Similar question modification information (not passed if there is no modification to the similar question).
 * @method string getQuestionDesc() Obtain Problem description.
 * @method void setQuestionDesc(string $QuestionDesc) Set Problem description.
 */
class ModifyQARequest extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $BotBizId;

    /**
     * @var string Q&A ID.
     */
    public $QaBizId;

    /**
     * @var string Question.
     */
    public $Question;

    /**
     * @var string Answer.
     */
    public $Answer;

    /**
     * @var string Custom parameter.
     */
    public $CustomParam;

    /**
     * @var integer Applicable scope of labels: 1. all; 2. by conditions.
     */
    public $AttrRange;

    /**
     * @var array Label reference.
     */
    public $AttrLabels;

    /**
     * @var string Document ID.
     */
    public $DocBizId;

    /**
     * @var string Category ID.
     */
    public $CateBizId;

    /**
     * @var string Effective start time, unix timestamp.
     */
    public $ExpireStart;

    /**
     * @var string Effective end time, unix timestamp, 0 indicates permanent validity.
     */
    public $ExpireEnd;

    /**
     * @var SimilarQuestionModify Similar question modification information (not passed if there is no modification to the similar question).
     */
    public $SimilarQuestionModify;

    /**
     * @var string Problem description.
     */
    public $QuestionDesc;

    /**
     * @param string $BotBizId Application ID.
     * @param string $QaBizId Q&A ID.
     * @param string $Question Question.
     * @param string $Answer Answer.
     * @param string $CustomParam Custom parameter.
     * @param integer $AttrRange Applicable scope of labels: 1. all; 2. by conditions.
     * @param array $AttrLabels Label reference.
     * @param string $DocBizId Document ID.
     * @param string $CateBizId Category ID.
     * @param string $ExpireStart Effective start time, unix timestamp.
     * @param string $ExpireEnd Effective end time, unix timestamp, 0 indicates permanent validity.
     * @param SimilarQuestionModify $SimilarQuestionModify Similar question modification information (not passed if there is no modification to the similar question).
     * @param string $QuestionDesc Problem description.
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("QaBizId",$param) and $param["QaBizId"] !== null) {
            $this->QaBizId = $param["QaBizId"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }

        if (array_key_exists("CustomParam",$param) and $param["CustomParam"] !== null) {
            $this->CustomParam = $param["CustomParam"];
        }

        if (array_key_exists("AttrRange",$param) and $param["AttrRange"] !== null) {
            $this->AttrRange = $param["AttrRange"];
        }

        if (array_key_exists("AttrLabels",$param) and $param["AttrLabels"] !== null) {
            $this->AttrLabels = [];
            foreach ($param["AttrLabels"] as $key => $value){
                $obj = new AttrLabelRefer();
                $obj->deserialize($value);
                array_push($this->AttrLabels, $obj);
            }
        }

        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("CateBizId",$param) and $param["CateBizId"] !== null) {
            $this->CateBizId = $param["CateBizId"];
        }

        if (array_key_exists("ExpireStart",$param) and $param["ExpireStart"] !== null) {
            $this->ExpireStart = $param["ExpireStart"];
        }

        if (array_key_exists("ExpireEnd",$param) and $param["ExpireEnd"] !== null) {
            $this->ExpireEnd = $param["ExpireEnd"];
        }

        if (array_key_exists("SimilarQuestionModify",$param) and $param["SimilarQuestionModify"] !== null) {
            $this->SimilarQuestionModify = new SimilarQuestionModify();
            $this->SimilarQuestionModify->deserialize($param["SimilarQuestionModify"]);
        }

        if (array_key_exists("QuestionDesc",$param) and $param["QuestionDesc"] !== null) {
            $this->QuestionDesc = $param["QuestionDesc"];
        }
    }
}
