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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Aigc Text Detail Data
 *
 * @method string getTimestamp() Obtain <p>Request start time (RFC3339)</p>
 * @method void setTimestamp(string $Timestamp) Set <p>Request start time (RFC3339)</p>
 * @method string getReqId() Obtain <p>Gateway layer request ID</p>
 * @method void setReqId(string $ReqId) Set <p>Gateway layer request ID</p>
 * @method string getChatId() Obtain <p>Dialogue ID returned by the backend model</p>
 * @method void setChatId(string $ChatId) Set <p>Dialogue ID returned by the backend model</p>
 * @method integer getStatusCode() Obtain <p>HTTP status code returned to client</p>
 * @method void setStatusCode(integer $StatusCode) Set <p>HTTP status code returned to client</p>
 * @method string getModel() Obtain <p>Model name</p>
 * @method void setModel(string $Model) Set <p>Model name</p>
 * @method integer getSubAppId() Obtain <p>Application ID</p>
 * @method void setSubAppId(integer $SubAppId) Set <p>Application ID</p>
 * @method string getApiKey() Obtain <p>api_key after masking: first 8 digits + **** (return without modification when length ≤ 8)</p>
 * @method void setApiKey(string $ApiKey) Set <p>api_key after masking: first 8 digits + **** (return without modification when length ≤ 8)</p>
 * @method boolean getStream() Obtain <p>Whether to return in streaming mode</p>
 * @method void setStream(boolean $Stream) Set <p>Whether to return in streaming mode</p>
 * @method integer getInputTokens() Obtain <p>Number of input tokens</p>
 * @method void setInputTokens(integer $InputTokens) Set <p>Number of input tokens</p>
 * @method integer getOutputTokens() Obtain <p>Number of output tokens</p>
 * @method void setOutputTokens(integer $OutputTokens) Set <p>Number of output tokens</p>
 * @method integer getCacheInputTokens() Obtain <p>Number of tokens with prompt cache hit</p>
 * @method void setCacheInputTokens(integer $CacheInputTokens) Set <p>Number of tokens with prompt cache hit</p>
 * @method integer getTotalTokens() Obtain <p>Total tokens</p>
 * @method void setTotalTokens(integer $TotalTokens) Set <p>Total tokens</p>
 * @method float getTPS() Obtain <p>tokens per second in the generation stage</p>
 * @method void setTPS(float $TPS) Set <p>tokens per second in the generation stage</p>
 * @method float getTTFT() Obtain <p>Time To First Token</p><p>Measurement unit: seconds</p>
 * @method void setTTFT(float $TTFT) Set <p>Time To First Token</p><p>Measurement unit: seconds</p>
 * @method float getTotal() Obtain <p>End-to-end total time</p><p>Unit: seconds</p>
 * @method void setTotal(float $Total) Set <p>End-to-end total time</p><p>Unit: seconds</p>
 * @method string getApiType() Obtain <p>Entry protocol:completions / responses / anthropic</p>
 * @method void setApiType(string $ApiType) Set <p>Entry protocol:completions / responses / anthropic</p>
 */
class AigcTextDetailData extends AbstractModel
{
    /**
     * @var string <p>Request start time (RFC3339)</p>
     */
    public $Timestamp;

    /**
     * @var string <p>Gateway layer request ID</p>
     */
    public $ReqId;

    /**
     * @var string <p>Dialogue ID returned by the backend model</p>
     */
    public $ChatId;

    /**
     * @var integer <p>HTTP status code returned to client</p>
     */
    public $StatusCode;

    /**
     * @var string <p>Model name</p>
     */
    public $Model;

    /**
     * @var integer <p>Application ID</p>
     */
    public $SubAppId;

    /**
     * @var string <p>api_key after masking: first 8 digits + **** (return without modification when length ≤ 8)</p>
     */
    public $ApiKey;

    /**
     * @var boolean <p>Whether to return in streaming mode</p>
     */
    public $Stream;

    /**
     * @var integer <p>Number of input tokens</p>
     */
    public $InputTokens;

    /**
     * @var integer <p>Number of output tokens</p>
     */
    public $OutputTokens;

    /**
     * @var integer <p>Number of tokens with prompt cache hit</p>
     */
    public $CacheInputTokens;

    /**
     * @var integer <p>Total tokens</p>
     */
    public $TotalTokens;

    /**
     * @var float <p>tokens per second in the generation stage</p>
     */
    public $TPS;

    /**
     * @var float <p>Time To First Token</p><p>Measurement unit: seconds</p>
     */
    public $TTFT;

    /**
     * @var float <p>End-to-end total time</p><p>Unit: seconds</p>
     */
    public $Total;

    /**
     * @var string <p>Entry protocol:completions / responses / anthropic</p>
     */
    public $ApiType;

    /**
     * @param string $Timestamp <p>Request start time (RFC3339)</p>
     * @param string $ReqId <p>Gateway layer request ID</p>
     * @param string $ChatId <p>Dialogue ID returned by the backend model</p>
     * @param integer $StatusCode <p>HTTP status code returned to client</p>
     * @param string $Model <p>Model name</p>
     * @param integer $SubAppId <p>Application ID</p>
     * @param string $ApiKey <p>api_key after masking: first 8 digits + **** (return without modification when length ≤ 8)</p>
     * @param boolean $Stream <p>Whether to return in streaming mode</p>
     * @param integer $InputTokens <p>Number of input tokens</p>
     * @param integer $OutputTokens <p>Number of output tokens</p>
     * @param integer $CacheInputTokens <p>Number of tokens with prompt cache hit</p>
     * @param integer $TotalTokens <p>Total tokens</p>
     * @param float $TPS <p>tokens per second in the generation stage</p>
     * @param float $TTFT <p>Time To First Token</p><p>Measurement unit: seconds</p>
     * @param float $Total <p>End-to-end total time</p><p>Unit: seconds</p>
     * @param string $ApiType <p>Entry protocol:completions / responses / anthropic</p>
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
        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("ReqId",$param) and $param["ReqId"] !== null) {
            $this->ReqId = $param["ReqId"];
        }

        if (array_key_exists("ChatId",$param) and $param["ChatId"] !== null) {
            $this->ChatId = $param["ChatId"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("ApiKey",$param) and $param["ApiKey"] !== null) {
            $this->ApiKey = $param["ApiKey"];
        }

        if (array_key_exists("Stream",$param) and $param["Stream"] !== null) {
            $this->Stream = $param["Stream"];
        }

        if (array_key_exists("InputTokens",$param) and $param["InputTokens"] !== null) {
            $this->InputTokens = $param["InputTokens"];
        }

        if (array_key_exists("OutputTokens",$param) and $param["OutputTokens"] !== null) {
            $this->OutputTokens = $param["OutputTokens"];
        }

        if (array_key_exists("CacheInputTokens",$param) and $param["CacheInputTokens"] !== null) {
            $this->CacheInputTokens = $param["CacheInputTokens"];
        }

        if (array_key_exists("TotalTokens",$param) and $param["TotalTokens"] !== null) {
            $this->TotalTokens = $param["TotalTokens"];
        }

        if (array_key_exists("TPS",$param) and $param["TPS"] !== null) {
            $this->TPS = $param["TPS"];
        }

        if (array_key_exists("TTFT",$param) and $param["TTFT"] !== null) {
            $this->TTFT = $param["TTFT"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("ApiType",$param) and $param["ApiType"] !== null) {
            $this->ApiType = $param["ApiType"];
        }
    }
}
