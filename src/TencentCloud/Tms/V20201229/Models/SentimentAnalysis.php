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
namespace TencentCloud\Tms\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Sentiment analysis result
 *
 * @method string getLabel() Obtain Sentiment Tag
 * @method void setLabel(string $Label) Set Sentiment Tag
 * @method integer getScore() Obtain Tag score, ranging from 0 to 100
 * @method void setScore(integer $Score) Set Tag score, ranging from 0 to 100
 * @method SentimentDetail getDetail() Obtain Sentiment analysis details
 * @method void setDetail(SentimentDetail $Detail) Set Sentiment analysis details
 * @method string getCode() Obtain Response code; "OK" for success, "InternalError" for failure
 * @method void setCode(string $Code) Set Response code; "OK" for success, "InternalError" for failure
 * @method string getMessage() Obtain Exception information
 * @method void setMessage(string $Message) Set Exception information
 */
class SentimentAnalysis extends AbstractModel
{
    /**
     * @var string Sentiment Tag
     */
    public $Label;

    /**
     * @var integer Tag score, ranging from 0 to 100
     */
    public $Score;

    /**
     * @var SentimentDetail Sentiment analysis details
     */
    public $Detail;

    /**
     * @var string Response code; "OK" for success, "InternalError" for failure
     */
    public $Code;

    /**
     * @var string Exception information
     */
    public $Message;

    /**
     * @param string $Label Sentiment Tag
     * @param integer $Score Tag score, ranging from 0 to 100
     * @param SentimentDetail $Detail Sentiment analysis details
     * @param string $Code Response code; "OK" for success, "InternalError" for failure
     * @param string $Message Exception information
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = new SentimentDetail();
            $this->Detail->deserialize($param["Detail"]);
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
