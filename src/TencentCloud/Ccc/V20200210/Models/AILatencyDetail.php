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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI latency details.
 *
 * @method string getRoundId() Obtain Dialog ID.
 * @method void setRoundId(string $RoundId) Set Dialog ID.
 * @method integer getASRLatency() Obtain Specifies the asr latency in milliseconds.
 * @method void setASRLatency(integer $ASRLatency) Set Specifies the asr latency in milliseconds.
 * @method integer getTTSLatency() Obtain Specifies the tts delay in milliseconds.
 * @method void setTTSLatency(integer $TTSLatency) Set Specifies the tts delay in milliseconds.
 * @method integer getLLMLatency() Obtain llm latency (ms).
 * @method void setLLMLatency(integer $LLMLatency) Set llm latency (ms).
 * @method integer getETELatency() Obtain End-To-End delay (ms).
 * @method void setETELatency(integer $ETELatency) Set End-To-End delay (ms).
 */
class AILatencyDetail extends AbstractModel
{
    /**
     * @var string Dialog ID.
     */
    public $RoundId;

    /**
     * @var integer Specifies the asr latency in milliseconds.
     */
    public $ASRLatency;

    /**
     * @var integer Specifies the tts delay in milliseconds.
     */
    public $TTSLatency;

    /**
     * @var integer llm latency (ms).
     */
    public $LLMLatency;

    /**
     * @var integer End-To-End delay (ms).
     */
    public $ETELatency;

    /**
     * @param string $RoundId Dialog ID.
     * @param integer $ASRLatency Specifies the asr latency in milliseconds.
     * @param integer $TTSLatency Specifies the tts delay in milliseconds.
     * @param integer $LLMLatency llm latency (ms).
     * @param integer $ETELatency End-To-End delay (ms).
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
        if (array_key_exists("RoundId",$param) and $param["RoundId"] !== null) {
            $this->RoundId = $param["RoundId"];
        }

        if (array_key_exists("ASRLatency",$param) and $param["ASRLatency"] !== null) {
            $this->ASRLatency = $param["ASRLatency"];
        }

        if (array_key_exists("TTSLatency",$param) and $param["TTSLatency"] !== null) {
            $this->TTSLatency = $param["TTSLatency"];
        }

        if (array_key_exists("LLMLatency",$param) and $param["LLMLatency"] !== null) {
            $this->LLMLatency = $param["LLMLatency"];
        }

        if (array_key_exists("ETELatency",$param) and $param["ETELatency"] !== null) {
            $this->ETELatency = $param["ETELatency"];
        }
    }
}
