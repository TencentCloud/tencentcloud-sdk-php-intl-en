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
 * The answer to a quiz question.
 *
 * @method string getName() Obtain The username.
 * @method void setName(string $Name) Set The username.
 * @method integer getAnswer() Obtain The answer. Bits are used to indicate the options chosen. For example, `0x1` indicates that option A is chosen; `0x11` indicates that A and B are chosen, and so on.
 * @method void setAnswer(integer $Answer) Set The answer. Bits are used to indicate the options chosen. For example, `0x1` indicates that option A is chosen; `0x11` indicates that A and B are chosen, and so on.
 * @method integer getCostTime() Obtain The time used.
 * @method void setCostTime(integer $CostTime) Set The time used.
 * @method string getUserId() Obtain The user ID.
 * @method void setUserId(string $UserId) Set The user ID.
 * @method integer getIsCorrect() Obtain Whether the answer is correct. `1`: Correct; `0`: Incorrect.
 * @method void setIsCorrect(integer $IsCorrect) Set Whether the answer is correct. `1`: Correct; `0`: Incorrect.
 */
class AnswerInfo extends AbstractModel
{
    /**
     * @var string The username.
     */
    public $Name;

    /**
     * @var integer The answer. Bits are used to indicate the options chosen. For example, `0x1` indicates that option A is chosen; `0x11` indicates that A and B are chosen, and so on.
     */
    public $Answer;

    /**
     * @var integer The time used.
     */
    public $CostTime;

    /**
     * @var string The user ID.
     */
    public $UserId;

    /**
     * @var integer Whether the answer is correct. `1`: Correct; `0`: Incorrect.
     */
    public $IsCorrect;

    /**
     * @param string $Name The username.
     * @param integer $Answer The answer. Bits are used to indicate the options chosen. For example, `0x1` indicates that option A is chosen; `0x11` indicates that A and B are chosen, and so on.
     * @param integer $CostTime The time used.
     * @param string $UserId The user ID.
     * @param integer $IsCorrect Whether the answer is correct. `1`: Correct; `0`: Incorrect.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }

        if (array_key_exists("CostTime",$param) and $param["CostTime"] !== null) {
            $this->CostTime = $param["CostTime"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("IsCorrect",$param) and $param["IsCorrect"] !== null) {
            $this->IsCorrect = $param["IsCorrect"];
        }
    }
}
