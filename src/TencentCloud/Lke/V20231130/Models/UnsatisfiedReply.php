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
 * Unsatisfied response.
 *
 * @method string getReplyBizId() Obtain Unsatisfied response ID.
 * @method void setReplyBizId(string $ReplyBizId) Set Unsatisfied response ID.
 * @method string getRecordBizId() Obtain Message record ID.
 * @method void setRecordBizId(string $RecordBizId) Set Message record ID.
 * @method string getQuestion() Obtain User question.
 * @method void setQuestion(string $Question) Set User question.
 * @method string getAnswer() Obtain Application response.
 * @method void setAnswer(string $Answer) Set Application response.
 * @method array getReasons() Obtain Error type.
 * @method void setReasons(array $Reasons) Set Error type.
 */
class UnsatisfiedReply extends AbstractModel
{
    /**
     * @var string Unsatisfied response ID.
     */
    public $ReplyBizId;

    /**
     * @var string Message record ID.
     */
    public $RecordBizId;

    /**
     * @var string User question.
     */
    public $Question;

    /**
     * @var string Application response.
     */
    public $Answer;

    /**
     * @var array Error type.
     */
    public $Reasons;

    /**
     * @param string $ReplyBizId Unsatisfied response ID.
     * @param string $RecordBizId Message record ID.
     * @param string $Question User question.
     * @param string $Answer Application response.
     * @param array $Reasons Error type.
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
        if (array_key_exists("ReplyBizId",$param) and $param["ReplyBizId"] !== null) {
            $this->ReplyBizId = $param["ReplyBizId"];
        }

        if (array_key_exists("RecordBizId",$param) and $param["RecordBizId"] !== null) {
            $this->RecordBizId = $param["RecordBizId"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }

        if (array_key_exists("Reasons",$param) and $param["Reasons"] !== null) {
            $this->Reasons = $param["Reasons"];
        }
    }
}
