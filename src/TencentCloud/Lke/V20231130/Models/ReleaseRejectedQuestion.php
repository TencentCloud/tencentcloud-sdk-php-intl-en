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
 * Release rejected questions.
 *
 * @method string getQuestion() Obtain Question.
 * @method void setQuestion(string $Question) Set Question.
 * @method string getUpdateTime() Obtain Update time.
 * @method void setUpdateTime(string $UpdateTime) Set Update time.
 * @method integer getAction() Obtain Status.
 * @method void setAction(integer $Action) Set Status.
 * @method string getActionDesc() Obtain Status description.
 * @method void setActionDesc(string $ActionDesc) Set Status description.
 * @method string getMessage() Obtain Reason for failure.
 * @method void setMessage(string $Message) Set Reason for failure.
 */
class ReleaseRejectedQuestion extends AbstractModel
{
    /**
     * @var string Question.
     */
    public $Question;

    /**
     * @var string Update time.
     */
    public $UpdateTime;

    /**
     * @var integer Status.
     */
    public $Action;

    /**
     * @var string Status description.
     */
    public $ActionDesc;

    /**
     * @var string Reason for failure.
     */
    public $Message;

    /**
     * @param string $Question Question.
     * @param string $UpdateTime Update time.
     * @param integer $Action Status.
     * @param string $ActionDesc Status description.
     * @param string $Message Reason for failure.
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

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("ActionDesc",$param) and $param["ActionDesc"] !== null) {
            $this->ActionDesc = $param["ActionDesc"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
