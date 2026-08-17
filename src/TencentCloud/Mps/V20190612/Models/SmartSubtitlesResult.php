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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Smart subtitle task result.
 *
 * @method string getType() Obtain Task type. Valid values:
- AsrFullTextRecognition: full speech recognition
- TransTextRecognition: speech translation
- PureSubtitleTrans: pure subtitle translation.
- OcrFullTextRecognition: text-based subtitle extraction.
 * @method void setType(string $Type) Set Task type. Valid values:
- AsrFullTextRecognition: full speech recognition
- TransTextRecognition: speech translation
- PureSubtitleTrans: pure subtitle translation.
- OcrFullTextRecognition: text-based subtitle extraction.
 * @method SmartSubtitleTaskAsrFullTextResult getAsrFullTextTask() Obtain 
 * @method void setAsrFullTextTask(SmartSubtitleTaskAsrFullTextResult $AsrFullTextTask) Set 
 * @method SmartSubtitleTaskTransTextResult getTransTextTask() Obtain 
 * @method void setTransTextTask(SmartSubtitleTaskTransTextResult $TransTextTask) Set 
 * @method PureSubtitleTransResult getPureSubtitleTransTask() Obtain 
 * @method void setPureSubtitleTransTask(PureSubtitleTransResult $PureSubtitleTransTask) Set 
 * @method SmartSubtitleTaskFullTextResult getOcrFullTextTask() Obtain 
 * @method void setOcrFullTextTask(SmartSubtitleTaskFullTextResult $OcrFullTextTask) Set 
 */
class SmartSubtitlesResult extends AbstractModel
{
    /**
     * @var string Task type. Valid values:
- AsrFullTextRecognition: full speech recognition
- TransTextRecognition: speech translation
- PureSubtitleTrans: pure subtitle translation.
- OcrFullTextRecognition: text-based subtitle extraction.
     */
    public $Type;

    /**
     * @var SmartSubtitleTaskAsrFullTextResult 
     */
    public $AsrFullTextTask;

    /**
     * @var SmartSubtitleTaskTransTextResult 
     */
    public $TransTextTask;

    /**
     * @var PureSubtitleTransResult 
     */
    public $PureSubtitleTransTask;

    /**
     * @var SmartSubtitleTaskFullTextResult 
     */
    public $OcrFullTextTask;

    /**
     * @param string $Type Task type. Valid values:
- AsrFullTextRecognition: full speech recognition
- TransTextRecognition: speech translation
- PureSubtitleTrans: pure subtitle translation.
- OcrFullTextRecognition: text-based subtitle extraction.
     * @param SmartSubtitleTaskAsrFullTextResult $AsrFullTextTask 
     * @param SmartSubtitleTaskTransTextResult $TransTextTask 
     * @param PureSubtitleTransResult $PureSubtitleTransTask 
     * @param SmartSubtitleTaskFullTextResult $OcrFullTextTask 
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AsrFullTextTask",$param) and $param["AsrFullTextTask"] !== null) {
            $this->AsrFullTextTask = new SmartSubtitleTaskAsrFullTextResult();
            $this->AsrFullTextTask->deserialize($param["AsrFullTextTask"]);
        }

        if (array_key_exists("TransTextTask",$param) and $param["TransTextTask"] !== null) {
            $this->TransTextTask = new SmartSubtitleTaskTransTextResult();
            $this->TransTextTask->deserialize($param["TransTextTask"]);
        }

        if (array_key_exists("PureSubtitleTransTask",$param) and $param["PureSubtitleTransTask"] !== null) {
            $this->PureSubtitleTransTask = new PureSubtitleTransResult();
            $this->PureSubtitleTransTask->deserialize($param["PureSubtitleTransTask"]);
        }

        if (array_key_exists("OcrFullTextTask",$param) and $param["OcrFullTextTask"] !== null) {
            $this->OcrFullTextTask = new SmartSubtitleTaskFullTextResult();
            $this->OcrFullTextTask->deserialize($param["OcrFullTextTask"]);
        }
    }
}
