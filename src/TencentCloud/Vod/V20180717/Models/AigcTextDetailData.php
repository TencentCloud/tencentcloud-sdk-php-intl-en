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
 * 
 *
 * @method string getTimestamp() Obtain 
 * @method void setTimestamp(string $Timestamp) Set 
 * @method string getReqId() Obtain 
 * @method void setReqId(string $ReqId) Set 
 * @method string getChatId() Obtain 
 * @method void setChatId(string $ChatId) Set 
 * @method integer getStatusCode() Obtain 
 * @method void setStatusCode(integer $StatusCode) Set 
 * @method string getModel() Obtain 
 * @method void setModel(string $Model) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getApiKey() Obtain 
 * @method void setApiKey(string $ApiKey) Set 
 * @method boolean getStream() Obtain 
 * @method void setStream(boolean $Stream) Set 
 * @method integer getInputTokens() Obtain 
 * @method void setInputTokens(integer $InputTokens) Set 
 * @method integer getOutputTokens() Obtain 
 * @method void setOutputTokens(integer $OutputTokens) Set 
 * @method integer getCacheInputTokens() Obtain 
 * @method void setCacheInputTokens(integer $CacheInputTokens) Set 
 * @method integer getTotalTokens() Obtain 
 * @method void setTotalTokens(integer $TotalTokens) Set 
 * @method float getTPS() Obtain 
 * @method void setTPS(float $TPS) Set 
 * @method float getTTFT() Obtain 
 * @method void setTTFT(float $TTFT) Set 
 * @method float getTotal() Obtain 
 * @method void setTotal(float $Total) Set 
 * @method string getApiType() Obtain 
 * @method void setApiType(string $ApiType) Set 
 */
class AigcTextDetailData extends AbstractModel
{
    /**
     * @var string 
     */
    public $Timestamp;

    /**
     * @var string 
     */
    public $ReqId;

    /**
     * @var string 
     */
    public $ChatId;

    /**
     * @var integer 
     */
    public $StatusCode;

    /**
     * @var string 
     */
    public $Model;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $ApiKey;

    /**
     * @var boolean 
     */
    public $Stream;

    /**
     * @var integer 
     */
    public $InputTokens;

    /**
     * @var integer 
     */
    public $OutputTokens;

    /**
     * @var integer 
     */
    public $CacheInputTokens;

    /**
     * @var integer 
     */
    public $TotalTokens;

    /**
     * @var float 
     */
    public $TPS;

    /**
     * @var float 
     */
    public $TTFT;

    /**
     * @var float 
     */
    public $Total;

    /**
     * @var string 
     */
    public $ApiType;

    /**
     * @param string $Timestamp 
     * @param string $ReqId 
     * @param string $ChatId 
     * @param integer $StatusCode 
     * @param string $Model 
     * @param integer $SubAppId 
     * @param string $ApiKey 
     * @param boolean $Stream 
     * @param integer $InputTokens 
     * @param integer $OutputTokens 
     * @param integer $CacheInputTokens 
     * @param integer $TotalTokens 
     * @param float $TPS 
     * @param float $TTFT 
     * @param float $Total 
     * @param string $ApiType 
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
