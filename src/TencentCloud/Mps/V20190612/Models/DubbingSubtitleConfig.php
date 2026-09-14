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
 * dubbing task translation configuration
 *
 * @method string getSubtitleSource() Obtain <p>Subtitle source.</p><p>Enumeration values:</p><ul><li>OCR: OCR text recognition, recognizes text in video frames.</li><li>ASR: ASR speech recognition, recognizes voice dialogue in videos.</li><li>External: External subtitle file, provide the URL of the original/translated subtitles.</li></ul>
 * @method void setSubtitleSource(string $SubtitleSource) Set <p>Subtitle source.</p><p>Enumeration values:</p><ul><li>OCR: OCR text recognition, recognizes text in video frames.</li><li>ASR: ASR speech recognition, recognizes voice dialogue in videos.</li><li>External: External subtitle file, provide the URL of the original/translated subtitles.</li></ul>
 * @method string getAsrAssistOcr() Obtain <p>Use ASR to assist OCR.</p><p>Enumeration values:</p><ul><li>ON: Enable the use of ASR to assist OCR.</li><li>OFF: Disable the use of ASR to assist OCR.</li></ul><p>Default value: OFF</p><p>Can be set to ON only when SubtitleSource=OCR</p>
 * @method void setAsrAssistOcr(string $AsrAssistOcr) Set <p>Use ASR to assist OCR.</p><p>Enumeration values:</p><ul><li>ON: Enable the use of ASR to assist OCR.</li><li>OFF: Disable the use of ASR to assist OCR.</li></ul><p>Default value: OFF</p><p>Can be set to ON only when SubtitleSource=OCR</p>
 * @method string getEraseOriginalSubtitle() Obtain <p>Erase the original subtitle.</p><p>Enumeration values:</p><ul><li>ON: Erase the original subtitle.</li><li>OFF: Retain the original subtitle.</li></ul><p>Default value: OFF</p><p>Cannot be set to ON when SubtitleSource=External</p>
 * @method void setEraseOriginalSubtitle(string $EraseOriginalSubtitle) Set <p>Erase the original subtitle.</p><p>Enumeration values:</p><ul><li>ON: Erase the original subtitle.</li><li>OFF: Retain the original subtitle.</li></ul><p>Default value: OFF</p><p>Cannot be set to ON when SubtitleSource=External</p>
 * @method SelectingSubtitleAreasConfig getSelectingSubtitleAreasConfig() Obtain <p>Subtitle location information.</p>
 * @method void setSelectingSubtitleAreasConfig(SelectingSubtitleAreasConfig $SelectingSubtitleAreasConfig) Set <p>Subtitle location information.</p>
 */
class DubbingSubtitleConfig extends AbstractModel
{
    /**
     * @var string <p>Subtitle source.</p><p>Enumeration values:</p><ul><li>OCR: OCR text recognition, recognizes text in video frames.</li><li>ASR: ASR speech recognition, recognizes voice dialogue in videos.</li><li>External: External subtitle file, provide the URL of the original/translated subtitles.</li></ul>
     */
    public $SubtitleSource;

    /**
     * @var string <p>Use ASR to assist OCR.</p><p>Enumeration values:</p><ul><li>ON: Enable the use of ASR to assist OCR.</li><li>OFF: Disable the use of ASR to assist OCR.</li></ul><p>Default value: OFF</p><p>Can be set to ON only when SubtitleSource=OCR</p>
     */
    public $AsrAssistOcr;

    /**
     * @var string <p>Erase the original subtitle.</p><p>Enumeration values:</p><ul><li>ON: Erase the original subtitle.</li><li>OFF: Retain the original subtitle.</li></ul><p>Default value: OFF</p><p>Cannot be set to ON when SubtitleSource=External</p>
     */
    public $EraseOriginalSubtitle;

    /**
     * @var SelectingSubtitleAreasConfig <p>Subtitle location information.</p>
     */
    public $SelectingSubtitleAreasConfig;

    /**
     * @param string $SubtitleSource <p>Subtitle source.</p><p>Enumeration values:</p><ul><li>OCR: OCR text recognition, recognizes text in video frames.</li><li>ASR: ASR speech recognition, recognizes voice dialogue in videos.</li><li>External: External subtitle file, provide the URL of the original/translated subtitles.</li></ul>
     * @param string $AsrAssistOcr <p>Use ASR to assist OCR.</p><p>Enumeration values:</p><ul><li>ON: Enable the use of ASR to assist OCR.</li><li>OFF: Disable the use of ASR to assist OCR.</li></ul><p>Default value: OFF</p><p>Can be set to ON only when SubtitleSource=OCR</p>
     * @param string $EraseOriginalSubtitle <p>Erase the original subtitle.</p><p>Enumeration values:</p><ul><li>ON: Erase the original subtitle.</li><li>OFF: Retain the original subtitle.</li></ul><p>Default value: OFF</p><p>Cannot be set to ON when SubtitleSource=External</p>
     * @param SelectingSubtitleAreasConfig $SelectingSubtitleAreasConfig <p>Subtitle location information.</p>
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
        if (array_key_exists("SubtitleSource",$param) and $param["SubtitleSource"] !== null) {
            $this->SubtitleSource = $param["SubtitleSource"];
        }

        if (array_key_exists("AsrAssistOcr",$param) and $param["AsrAssistOcr"] !== null) {
            $this->AsrAssistOcr = $param["AsrAssistOcr"];
        }

        if (array_key_exists("EraseOriginalSubtitle",$param) and $param["EraseOriginalSubtitle"] !== null) {
            $this->EraseOriginalSubtitle = $param["EraseOriginalSubtitle"];
        }

        if (array_key_exists("SelectingSubtitleAreasConfig",$param) and $param["SelectingSubtitleAreasConfig"] !== null) {
            $this->SelectingSubtitleAreasConfig = new SelectingSubtitleAreasConfig();
            $this->SelectingSubtitleAreasConfig->deserialize($param["SelectingSubtitleAreasConfig"]);
        }
    }
}
