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
 * The statistics for each type of answer.
 *
 * @method integer getAnswer() Obtain The answer. Bits are used to indicate the options chosen. For example, `0x1` indicates that option A is chosen; `0x11` indicates that A and B are chosen, and so on.
 * @method void setAnswer(integer $Answer) Set The answer. Bits are used to indicate the options chosen. For example, `0x1` indicates that option A is chosen; `0x11` indicates that A and B are chosen, and so on.
 * @method integer getCount() Obtain The number of users that submitted the answer.
 * @method void setCount(integer $Count) Set The number of users that submitted the answer.
 */
class AnswerStat extends AbstractModel
{
    /**
     * @var integer The answer. Bits are used to indicate the options chosen. For example, `0x1` indicates that option A is chosen; `0x11` indicates that A and B are chosen, and so on.
     */
    public $Answer;

    /**
     * @var integer The number of users that submitted the answer.
     */
    public $Count;

    /**
     * @param integer $Answer The answer. Bits are used to indicate the options chosen. For example, `0x1` indicates that option A is chosen; `0x11` indicates that A and B are chosen, and so on.
     * @param integer $Count The number of users that submitted the answer.
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
        if (array_key_exists("Answer",$param) and $param["Answer"] !== null) {
            $this->Answer = $param["Answer"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
