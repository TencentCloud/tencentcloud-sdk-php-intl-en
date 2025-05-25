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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Word information.
 *
 * @method string getWord() Obtain Word text.
 * @method void setWord(string $Word) Set Word text.
 * @method float getStart() Obtain Word start timestamp, in seconds.
 * @method void setStart(float $Start) Set Word start timestamp, in seconds.
 * @method float getEnd() Obtain Word end timestamp, in seconds.
 * @method void setEnd(float $End) Set Word end timestamp, in seconds.
 * @method string getTrans() Obtain Text after translation.
 * @method void setTrans(string $Trans) Set Text after translation.
 */
class WordResult extends AbstractModel
{
    /**
     * @var string Word text.
     */
    public $Word;

    /**
     * @var float Word start timestamp, in seconds.
     */
    public $Start;

    /**
     * @var float Word end timestamp, in seconds.
     */
    public $End;

    /**
     * @var string Text after translation.
     */
    public $Trans;

    /**
     * @param string $Word Word text.
     * @param float $Start Word start timestamp, in seconds.
     * @param float $End Word end timestamp, in seconds.
     * @param string $Trans Text after translation.
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

        if (array_key_exists("Start",$param) and $param["Start"] !== null) {
            $this->Start = $param["Start"];
        }

        if (array_key_exists("End",$param) and $param["End"] !== null) {
            $this->End = $param["End"];
        }

        if (array_key_exists("Trans",$param) and $param["Trans"] !== null) {
            $this->Trans = $param["Trans"];
        }
    }
}
