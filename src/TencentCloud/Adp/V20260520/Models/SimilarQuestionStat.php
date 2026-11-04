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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Statistics of similar questions in Q&A
 *
 * @method integer getSimilarQuestionCount() Obtain <p>Number of similar questions</p>
 * @method void setSimilarQuestionCount(integer $SimilarQuestionCount) Set <p>Number of similar questions</p>
 * @method string getSimilarQuestionTips() Obtain <p>Similar question prompt (show a similar question example)</p>
 * @method void setSimilarQuestionTips(string $SimilarQuestionTips) Set <p>Similar question prompt (show a similar question example)</p>
 */
class SimilarQuestionStat extends AbstractModel
{
    /**
     * @var integer <p>Number of similar questions</p>
     */
    public $SimilarQuestionCount;

    /**
     * @var string <p>Similar question prompt (show a similar question example)</p>
     */
    public $SimilarQuestionTips;

    /**
     * @param integer $SimilarQuestionCount <p>Number of similar questions</p>
     * @param string $SimilarQuestionTips <p>Similar question prompt (show a similar question example)</p>
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
        if (array_key_exists("SimilarQuestionCount",$param) and $param["SimilarQuestionCount"] !== null) {
            $this->SimilarQuestionCount = $param["SimilarQuestionCount"];
        }

        if (array_key_exists("SimilarQuestionTips",$param) and $param["SimilarQuestionTips"] !== null) {
            $this->SimilarQuestionTips = $param["SimilarQuestionTips"];
        }
    }
}
