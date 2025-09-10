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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Undertake filler word info.
 *
 * @method float getFirstSentenceTimeout() Obtain Specifies the timeout period for the first request in seconds.
 * @method void setFirstSentenceTimeout(float $FirstSentenceTimeout) Set Specifies the timeout period for the first request in seconds.
 * @method ZHToneWordsInfo getZHToneWords() Obtain Undertakes a modal particle.
 * @method void setZHToneWords(ZHToneWordsInfo $ZHToneWords) Set Undertakes a modal particle.
 */
class ToneWordInfo extends AbstractModel
{
    /**
     * @var float Specifies the timeout period for the first request in seconds.
     */
    public $FirstSentenceTimeout;

    /**
     * @var ZHToneWordsInfo Undertakes a modal particle.
     */
    public $ZHToneWords;

    /**
     * @param float $FirstSentenceTimeout Specifies the timeout period for the first request in seconds.
     * @param ZHToneWordsInfo $ZHToneWords Undertakes a modal particle.
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
        if (array_key_exists("FirstSentenceTimeout",$param) and $param["FirstSentenceTimeout"] !== null) {
            $this->FirstSentenceTimeout = $param["FirstSentenceTimeout"];
        }

        if (array_key_exists("ZHToneWords",$param) and $param["ZHToneWords"] !== null) {
            $this->ZHToneWords = new ZHToneWordsInfo();
            $this->ZHToneWords->deserialize($param["ZHToneWords"]);
        }
    }
}
