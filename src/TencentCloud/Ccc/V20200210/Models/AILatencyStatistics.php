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
 * AI latency statistics.
 *
 * @method AILatencyStatisticsInfo getASRLatency() Obtain Specifies the asr latency statistics.
 * @method void setASRLatency(AILatencyStatisticsInfo $ASRLatency) Set Specifies the asr latency statistics.
 * @method AILatencyStatisticsInfo getTTSLatency() Obtain Specifies the statistics of tts delay.
 * @method void setTTSLatency(AILatencyStatisticsInfo $TTSLatency) Set Specifies the statistics of tts delay.
 * @method AILatencyStatisticsInfo getLLMLatency() Obtain llm latency statistics.
 * @method void setLLMLatency(AILatencyStatisticsInfo $LLMLatency) Set llm latency statistics.
 * @method AILatencyStatisticsInfo getETELatency() Obtain Specifies the end-to-end latency statistics.
 * @method void setETELatency(AILatencyStatisticsInfo $ETELatency) Set Specifies the end-to-end latency statistics.
 */
class AILatencyStatistics extends AbstractModel
{
    /**
     * @var AILatencyStatisticsInfo Specifies the asr latency statistics.
     */
    public $ASRLatency;

    /**
     * @var AILatencyStatisticsInfo Specifies the statistics of tts delay.
     */
    public $TTSLatency;

    /**
     * @var AILatencyStatisticsInfo llm latency statistics.
     */
    public $LLMLatency;

    /**
     * @var AILatencyStatisticsInfo Specifies the end-to-end latency statistics.
     */
    public $ETELatency;

    /**
     * @param AILatencyStatisticsInfo $ASRLatency Specifies the asr latency statistics.
     * @param AILatencyStatisticsInfo $TTSLatency Specifies the statistics of tts delay.
     * @param AILatencyStatisticsInfo $LLMLatency llm latency statistics.
     * @param AILatencyStatisticsInfo $ETELatency Specifies the end-to-end latency statistics.
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
        if (array_key_exists("ASRLatency",$param) and $param["ASRLatency"] !== null) {
            $this->ASRLatency = new AILatencyStatisticsInfo();
            $this->ASRLatency->deserialize($param["ASRLatency"]);
        }

        if (array_key_exists("TTSLatency",$param) and $param["TTSLatency"] !== null) {
            $this->TTSLatency = new AILatencyStatisticsInfo();
            $this->TTSLatency->deserialize($param["TTSLatency"]);
        }

        if (array_key_exists("LLMLatency",$param) and $param["LLMLatency"] !== null) {
            $this->LLMLatency = new AILatencyStatisticsInfo();
            $this->LLMLatency->deserialize($param["LLMLatency"]);
        }

        if (array_key_exists("ETELatency",$param) and $param["ETELatency"] !== null) {
            $this->ETELatency = new AILatencyStatisticsInfo();
            $this->ETELatency->deserialize($param["ETELatency"]);
        }
    }
}
