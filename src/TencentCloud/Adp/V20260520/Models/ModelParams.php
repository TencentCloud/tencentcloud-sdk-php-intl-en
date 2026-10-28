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
 * Model parameters
 *
 * @method string getDeepThinking() Obtain <p>Whether deep thinking is enabled</p>
 * @method void setDeepThinking(string $DeepThinking) Set <p>Whether deep thinking is enabled</p>
 * @method float getFrequencyPenalty() Obtain <p>Frequency penalty</p>
 * @method void setFrequencyPenalty(float $FrequencyPenalty) Set <p>Frequency penalty</p>
 * @method integer getMaxTokens() Obtain <p>Maximum output length</p>
 * @method void setMaxTokens(integer $MaxTokens) Set <p>Maximum output length</p>
 * @method float getPresencePenalty() Obtain <p>Existence penalty</p>
 * @method void setPresencePenalty(float $PresencePenalty) Set <p>Existence penalty</p>
 * @method string getReasoningEffort() Obtain <p>Deep thinking effect</p>
 * @method void setReasoningEffort(string $ReasoningEffort) Set <p>Deep thinking effect</p>
 * @method float getRepetitionPenalty() Obtain <p>Repetition penalty</p>
 * @method void setRepetitionPenalty(float $RepetitionPenalty) Set <p>Repetition penalty</p>
 * @method string getReplyFormat() Obtain <p>Output format (text, json_object)</p>
 * @method void setReplyFormat(string $ReplyFormat) Set <p>Output format (text, json_object)</p>
 * @method integer getSeed() Obtain <p>Random seed</p>
 * @method void setSeed(integer $Seed) Set <p>Random seed</p>
 * @method array getStopSequenceList() Obtain <p>Stop sequence</p>
 * @method void setStopSequenceList(array $StopSequenceList) Set <p>Stop sequence</p>
 * @method float getTemperature() Obtain <p>Temperature</p>
 * @method void setTemperature(float $Temperature) Set <p>Temperature</p>
 * @method float getTopP() Obtain <p>top_p</p>
 * @method void setTopP(float $TopP) Set <p>top_p</p>
 * @method integer getTopK() Obtain <p>top_k</p>
 * @method void setTopK(integer $TopK) Set <p>top_k</p>
 */
class ModelParams extends AbstractModel
{
    /**
     * @var string <p>Whether deep thinking is enabled</p>
     */
    public $DeepThinking;

    /**
     * @var float <p>Frequency penalty</p>
     */
    public $FrequencyPenalty;

    /**
     * @var integer <p>Maximum output length</p>
     */
    public $MaxTokens;

    /**
     * @var float <p>Existence penalty</p>
     */
    public $PresencePenalty;

    /**
     * @var string <p>Deep thinking effect</p>
     */
    public $ReasoningEffort;

    /**
     * @var float <p>Repetition penalty</p>
     */
    public $RepetitionPenalty;

    /**
     * @var string <p>Output format (text, json_object)</p>
     */
    public $ReplyFormat;

    /**
     * @var integer <p>Random seed</p>
     */
    public $Seed;

    /**
     * @var array <p>Stop sequence</p>
     */
    public $StopSequenceList;

    /**
     * @var float <p>Temperature</p>
     */
    public $Temperature;

    /**
     * @var float <p>top_p</p>
     */
    public $TopP;

    /**
     * @var integer <p>top_k</p>
     */
    public $TopK;

    /**
     * @param string $DeepThinking <p>Whether deep thinking is enabled</p>
     * @param float $FrequencyPenalty <p>Frequency penalty</p>
     * @param integer $MaxTokens <p>Maximum output length</p>
     * @param float $PresencePenalty <p>Existence penalty</p>
     * @param string $ReasoningEffort <p>Deep thinking effect</p>
     * @param float $RepetitionPenalty <p>Repetition penalty</p>
     * @param string $ReplyFormat <p>Output format (text, json_object)</p>
     * @param integer $Seed <p>Random seed</p>
     * @param array $StopSequenceList <p>Stop sequence</p>
     * @param float $Temperature <p>Temperature</p>
     * @param float $TopP <p>top_p</p>
     * @param integer $TopK <p>top_k</p>
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
        if (array_key_exists("DeepThinking",$param) and $param["DeepThinking"] !== null) {
            $this->DeepThinking = $param["DeepThinking"];
        }

        if (array_key_exists("FrequencyPenalty",$param) and $param["FrequencyPenalty"] !== null) {
            $this->FrequencyPenalty = $param["FrequencyPenalty"];
        }

        if (array_key_exists("MaxTokens",$param) and $param["MaxTokens"] !== null) {
            $this->MaxTokens = $param["MaxTokens"];
        }

        if (array_key_exists("PresencePenalty",$param) and $param["PresencePenalty"] !== null) {
            $this->PresencePenalty = $param["PresencePenalty"];
        }

        if (array_key_exists("ReasoningEffort",$param) and $param["ReasoningEffort"] !== null) {
            $this->ReasoningEffort = $param["ReasoningEffort"];
        }

        if (array_key_exists("RepetitionPenalty",$param) and $param["RepetitionPenalty"] !== null) {
            $this->RepetitionPenalty = $param["RepetitionPenalty"];
        }

        if (array_key_exists("ReplyFormat",$param) and $param["ReplyFormat"] !== null) {
            $this->ReplyFormat = $param["ReplyFormat"];
        }

        if (array_key_exists("Seed",$param) and $param["Seed"] !== null) {
            $this->Seed = $param["Seed"];
        }

        if (array_key_exists("StopSequenceList",$param) and $param["StopSequenceList"] !== null) {
            $this->StopSequenceList = $param["StopSequenceList"];
        }

        if (array_key_exists("Temperature",$param) and $param["Temperature"] !== null) {
            $this->Temperature = $param["Temperature"];
        }

        if (array_key_exists("TopP",$param) and $param["TopP"] !== null) {
            $this->TopP = $param["TopP"];
        }

        if (array_key_exists("TopK",$param) and $param["TopK"] !== null) {
            $this->TopK = $param["TopK"];
        }
    }
}
