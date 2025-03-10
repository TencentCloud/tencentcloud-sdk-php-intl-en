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
namespace TencentCloud\Tms\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getLabel() Obtain 
 * @method void setLabel(string $Label) Set 
 * @method integer getScore() Obtain 
 * @method void setScore(integer $Score) Set 
 * @method SentimentDetail getDetail() Obtain 
 * @method void setDetail(SentimentDetail $Detail) Set 
 * @method string getCode() Obtain 
 * @method void setCode(string $Code) Set 
 * @method string getMessage() Obtain 
 * @method void setMessage(string $Message) Set 
 */
class SentimentAnalysis extends AbstractModel
{
    /**
     * @var string 
     */
    public $Label;

    /**
     * @var integer 
     */
    public $Score;

    /**
     * @var SentimentDetail 
     */
    public $Detail;

    /**
     * @var string 
     */
    public $Code;

    /**
     * @var string 
     */
    public $Message;

    /**
     * @param string $Label 
     * @param integer $Score 
     * @param SentimentDetail $Detail 
     * @param string $Code 
     * @param string $Message 
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
