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
 * ModifyRejectedQuestion request structure.
 *
 * @method string getBotBizId() Obtain Application ID.
 * @method void setBotBizId(string $BotBizId) Set Application ID.
 * @method string getQuestion() Obtain Rejected question.


 * @method void setQuestion(string $Question) Set Rejected question.


 * @method string getRejectedBizId() Obtain Unique id of the data source for the rejected question source.



 * @method void setRejectedBizId(string $RejectedBizId) Set Unique id of the data source for the rejected question source.
 */
class ModifyRejectedQuestionRequest extends AbstractModel
{
    /**
     * @var string Application ID.
     */
    public $BotBizId;

    /**
     * @var string Rejected question.


     */
    public $Question;

    /**
     * @var string Unique id of the data source for the rejected question source.



     */
    public $RejectedBizId;

    /**
     * @param string $BotBizId Application ID.
     * @param string $Question Rejected question.


     * @param string $RejectedBizId Unique id of the data source for the rejected question source.
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

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("RejectedBizId",$param) and $param["RejectedBizId"] !== null) {
            $this->RejectedBizId = $param["RejectedBizId"];
        }
    }
}
