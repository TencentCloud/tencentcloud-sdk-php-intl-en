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
 * Speech Translation Task Control Parameter
 *
 * @method string getSwitch() Obtain Voice translation task switch, available values:
<li>ON: Enable Intelligent Voice Translation task.</li>
<li>OFF: Disables the Intelligent Voice Translation task.</li>
 * @method void setSwitch(string $Switch) Set Voice translation task switch, available values:
<li>ON: Enable Intelligent Voice Translation task.</li>
<li>OFF: Disables the Intelligent Voice Translation task.</li>
 * @method string getSourceLanguage() Obtain Video source language.
 * @method void setSourceLanguage(string $SourceLanguage) Set Video source language.
 * @method string getDestinationLanguage() Obtain Target language.
 * @method void setDestinationLanguage(string $DestinationLanguage) Set Target language.
 * @method string getSubtitleFormat() Obtain 
 * @method void setSubtitleFormat(string $SubtitleFormat) Set 
 */
class TranslateConfigureInfo extends AbstractModel
{
    /**
     * @var string Voice translation task switch, available values:
<li>ON: Enable Intelligent Voice Translation task.</li>
<li>OFF: Disables the Intelligent Voice Translation task.</li>
     */
    public $Switch;

    /**
     * @var string Video source language.
     */
    public $SourceLanguage;

    /**
     * @var string Target language.
     */
    public $DestinationLanguage;

    /**
     * @var string 
     */
    public $SubtitleFormat;

    /**
     * @param string $Switch Voice translation task switch, available values:
<li>ON: Enable Intelligent Voice Translation task.</li>
<li>OFF: Disables the Intelligent Voice Translation task.</li>
     * @param string $SourceLanguage Video source language.
     * @param string $DestinationLanguage Target language.
     * @param string $SubtitleFormat 
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("SourceLanguage",$param) and $param["SourceLanguage"] !== null) {
            $this->SourceLanguage = $param["SourceLanguage"];
        }

        if (array_key_exists("DestinationLanguage",$param) and $param["DestinationLanguage"] !== null) {
            $this->DestinationLanguage = $param["DestinationLanguage"];
        }

        if (array_key_exists("SubtitleFormat",$param) and $param["SubtitleFormat"] !== null) {
            $this->SubtitleFormat = $param["SubtitleFormat"];
        }
    }
}
