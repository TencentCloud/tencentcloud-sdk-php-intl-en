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
 * CreateRejectedQuestion request structure.
 *
 * @method string getBotBizId() Obtain Application ID
 * @method void setBotBizId(string $BotBizId) Set Application ID
 * @method string getQuestion() Obtain Rejected question
 * @method void setQuestion(string $Question) Set Rejected question
 * @method integer getBusinessSource() Obtain Unique ID of the data source for the rejected question - "2" will be returned when the rejected question is not satisfied - The rejected question comes from manual addition.
 * @method void setBusinessSource(integer $BusinessSource) Set Unique ID of the data source for the rejected question - "2" will be returned when the rejected question is not satisfied - The rejected question comes from manual addition.
 * @method string getBusinessId() Obtain Unique ID of the data source for the rejected question.


 * @method void setBusinessId(string $BusinessId) Set Unique ID of the data source for the rejected question.
 */
class CreateRejectedQuestionRequest extends AbstractModel
{
    /**
     * @var string Application ID
     */
    public $BotBizId;

    /**
     * @var string Rejected question
     */
    public $Question;

    /**
     * @var integer Unique ID of the data source for the rejected question - "2" will be returned when the rejected question is not satisfied - The rejected question comes from manual addition.
     */
    public $BusinessSource;

    /**
     * @var string Unique ID of the data source for the rejected question.


     */
    public $BusinessId;

    /**
     * @param string $BotBizId Application ID
     * @param string $Question Rejected question
     * @param integer $BusinessSource Unique ID of the data source for the rejected question - "2" will be returned when the rejected question is not satisfied - The rejected question comes from manual addition.
     * @param string $BusinessId Unique ID of the data source for the rejected question.
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

        if (array_key_exists("BusinessSource",$param) and $param["BusinessSource"] !== null) {
            $this->BusinessSource = $param["BusinessSource"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }
    }
}
