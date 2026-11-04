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
 * QA meta information
 *
 * @method string getAnswer() Obtain <p>Answer</p>
 * @method void setAnswer(string $Answer) Set <p>Answer</p>
 * @method string getQaCharCount() Obtain <p>QA characters</p>
 * @method void setQaCharCount(string $QaCharCount) Set <p>QA characters</p>
 * @method string getQaSize() Obtain <p>QA size (byte, including similar questions)</p>
 * @method void setQaSize(string $QaSize) Set <p>QA size (byte, including similar questions)</p>
 * @method string getQuestion() Obtain <p>Query</p>
 * @method void setQuestion(string $Question) Set <p>Query</p>
 * @method array getRefFieldNameList() Obtain <p>Metadata reference field name list (for displaying which QA categories and attributes are set as metadata)</p>
 * @method void setRefFieldNameList(array $RefFieldNameList) Set <p>Metadata reference field name list (for displaying which QA categories and attributes are set as metadata)</p>
 */
class QAMetadata extends AbstractModel
{
    /**
     * @var string <p>Answer</p>
     */
    public $Answer;

    /**
     * @var string <p>QA characters</p>
     */
    public $QaCharCount;

    /**
     * @var string <p>QA size (byte, including similar questions)</p>
     */
    public $QaSize;

    /**
     * @var string <p>Query</p>
     */
    public $Question;

    /**
     * @var array <p>Metadata reference field name list (for displaying which QA categories and attributes are set as metadata)</p>
     */
    public $RefFieldNameList;

    /**
     * @param string $Answer <p>Answer</p>
     * @param string $QaCharCount <p>QA characters</p>
     * @param string $QaSize <p>QA size (byte, including similar questions)</p>
     * @param string $Question <p>Query</p>
     * @param array $RefFieldNameList <p>Metadata reference field name list (for displaying which QA categories and attributes are set as metadata)</p>
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

        if (array_key_exists("QaCharCount",$param) and $param["QaCharCount"] !== null) {
            $this->QaCharCount = $param["QaCharCount"];
        }

        if (array_key_exists("QaSize",$param) and $param["QaSize"] !== null) {
            $this->QaSize = $param["QaSize"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("RefFieldNameList",$param) and $param["RefFieldNameList"] !== null) {
            $this->RefFieldNameList = $param["RefFieldNameList"];
        }
    }
}
