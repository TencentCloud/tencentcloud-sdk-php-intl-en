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
 * Q&A list.
 *
 * @method string getQaBizId() Obtain Q&A ID.
 * @method void setQaBizId(string $QaBizId) Set Q&A ID.
 * @method boolean getIsAccepted() Obtain Whether to accept.
 * @method void setIsAccepted(boolean $IsAccepted) Set Whether to accept.
 * @method string getCateBizId() Obtain Category ID.
 * @method void setCateBizId(string $CateBizId) Set Category ID.
 * @method string getQuestion() Obtain Question.
 * @method void setQuestion(string $Question) Set Question.
 * @method string getAnswer() Obtain Answer.
 * @method void setAnswer(string $Answer) Set Answer.
 */
class QAList extends AbstractModel
{
    /**
     * @var string Q&A ID.
     */
    public $QaBizId;

    /**
     * @var boolean Whether to accept.
     */
    public $IsAccepted;

    /**
     * @var string Category ID.
     */
    public $CateBizId;

    /**
     * @var string Question.
     */
    public $Question;

    /**
     * @var string Answer.
     */
    public $Answer;

    /**
     * @param string $QaBizId Q&A ID.
     * @param boolean $IsAccepted Whether to accept.
     * @param string $CateBizId Category ID.
     * @param string $Question Question.
     * @param string $Answer Answer.
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
        if (array_key_exists("QaBizId",$param) and $param["QaBizId"] !== null) {
            $this->QaBizId = $param["QaBizId"];
        }

        if (array_key_exists("IsAccepted",$param) and $param["IsAccepted"] !== null) {
            $this->IsAccepted = $param["IsAccepted"];
        }

        if (array_key_exists("CateBizId",$param) and $param["CateBizId"] !== null) {
            $this->CateBizId = $param["CateBizId"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }
    }
}
