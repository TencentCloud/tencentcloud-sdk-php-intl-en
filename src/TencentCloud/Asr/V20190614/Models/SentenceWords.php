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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Word text in the recognition result and the corresponding time offset.
 *
 * @method string getWord() Obtain Word text.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWord(string $Word) Set Word text.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOffsetStartMs() Obtain Start time offset in the sentence.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOffsetStartMs(integer $OffsetStartMs) Set Start time offset in the sentence.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getOffsetEndMs() Obtain End time offset in the sentence.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOffsetEndMs(integer $OffsetEndMs) Set End time offset in the sentence.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SentenceWords extends AbstractModel
{
    /**
     * @var string Word text.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Word;

    /**
     * @var integer Start time offset in the sentence.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OffsetStartMs;

    /**
     * @var integer End time offset in the sentence.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OffsetEndMs;

    /**
     * @param string $Word Word text.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $OffsetStartMs Start time offset in the sentence.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $OffsetEndMs End time offset in the sentence.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Word",$param) and $param["Word"] !== null) {
            $this->Word = $param["Word"];
        }

        if (array_key_exists("OffsetStartMs",$param) and $param["OffsetStartMs"] !== null) {
            $this->OffsetStartMs = $param["OffsetStartMs"];
        }

        if (array_key_exists("OffsetEndMs",$param) and $param["OffsetEndMs"] !== null) {
            $this->OffsetEndMs = $param["OffsetEndMs"];
        }
    }
}
