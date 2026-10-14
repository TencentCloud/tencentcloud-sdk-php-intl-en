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
 * Output configuration of a dubbing task
 *
 * @method string getOutputMode() Obtain <p>Output method</p><p>Enumeration values:</p><ul><li>FinalVideoOnly: default, final video only</li><li>AudioAndSubtitle: translated audio + translated subtitles</li><li>Custom: custom</li></ul><p>Default value: FinalVideoOnly</p><p>No translated audio + subtitles are returned when external subtitles are used</p>
 * @method void setOutputMode(string $OutputMode) Set <p>Output method</p><p>Enumeration values:</p><ul><li>FinalVideoOnly: default, final video only</li><li>AudioAndSubtitle: translated audio + translated subtitles</li><li>Custom: custom</li></ul><p>Default value: FinalVideoOnly</p><p>No translated audio + subtitles are returned when external subtitles are used</p>
 * @method string getOutputFinalVideo() Obtain <p>Output video switch</p><p>Enumeration values: </p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul><p>Default value: ON</p><p>Only takes effect in Custom mode</p>
 * @method void setOutputFinalVideo(string $OutputFinalVideo) Set <p>Output video switch</p><p>Enumeration values: </p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul><p>Default value: ON</p><p>Only takes effect in Custom mode</p>
 * @method string getOutputSubtitle() Obtain <p>Switch for output subtitle files (contains both original voice subtitles and target language subtitles)</p><p>Enumeration values:</p><ul><li>ON: turn on</li><li>OFF: turn off</li></ul><p>Default value: OFF</p>
 * @method void setOutputSubtitle(string $OutputSubtitle) Set <p>Switch for output subtitle files (contains both original voice subtitles and target language subtitles)</p><p>Enumeration values:</p><ul><li>ON: turn on</li><li>OFF: turn off</li></ul><p>Default value: OFF</p>
 * @method string getOutputDstAudio() Obtain <p>Output translation dubbing audio switch</p><p>Enumeration values: </p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul><p>Default value: OFF</p><p>Only takes effect in Custom mode</p>
 * @method void setOutputDstAudio(string $OutputDstAudio) Set <p>Output translation dubbing audio switch</p><p>Enumeration values: </p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul><p>Default value: OFF</p><p>Only takes effect in Custom mode</p>
 * @method DubbingEmbedSubtitleConfig getEmbedSubtitleConfig() Obtain <p>Suppression subtitle configuration message.</p>
 * @method void setEmbedSubtitleConfig(DubbingEmbedSubtitleConfig $EmbedSubtitleConfig) Set <p>Suppression subtitle configuration message.</p>
 */
class DubbingOutputConfig extends AbstractModel
{
    /**
     * @var string <p>Output method</p><p>Enumeration values:</p><ul><li>FinalVideoOnly: default, final video only</li><li>AudioAndSubtitle: translated audio + translated subtitles</li><li>Custom: custom</li></ul><p>Default value: FinalVideoOnly</p><p>No translated audio + subtitles are returned when external subtitles are used</p>
     */
    public $OutputMode;

    /**
     * @var string <p>Output video switch</p><p>Enumeration values: </p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul><p>Default value: ON</p><p>Only takes effect in Custom mode</p>
     */
    public $OutputFinalVideo;

    /**
     * @var string <p>Switch for output subtitle files (contains both original voice subtitles and target language subtitles)</p><p>Enumeration values:</p><ul><li>ON: turn on</li><li>OFF: turn off</li></ul><p>Default value: OFF</p>
     */
    public $OutputSubtitle;

    /**
     * @var string <p>Output translation dubbing audio switch</p><p>Enumeration values: </p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul><p>Default value: OFF</p><p>Only takes effect in Custom mode</p>
     */
    public $OutputDstAudio;

    /**
     * @var DubbingEmbedSubtitleConfig <p>Suppression subtitle configuration message.</p>
     */
    public $EmbedSubtitleConfig;

    /**
     * @param string $OutputMode <p>Output method</p><p>Enumeration values:</p><ul><li>FinalVideoOnly: default, final video only</li><li>AudioAndSubtitle: translated audio + translated subtitles</li><li>Custom: custom</li></ul><p>Default value: FinalVideoOnly</p><p>No translated audio + subtitles are returned when external subtitles are used</p>
     * @param string $OutputFinalVideo <p>Output video switch</p><p>Enumeration values: </p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul><p>Default value: ON</p><p>Only takes effect in Custom mode</p>
     * @param string $OutputSubtitle <p>Switch for output subtitle files (contains both original voice subtitles and target language subtitles)</p><p>Enumeration values:</p><ul><li>ON: turn on</li><li>OFF: turn off</li></ul><p>Default value: OFF</p>
     * @param string $OutputDstAudio <p>Output translation dubbing audio switch</p><p>Enumeration values: </p><ul><li>ON: Enable</li><li>OFF: Disable</li></ul><p>Default value: OFF</p><p>Only takes effect in Custom mode</p>
     * @param DubbingEmbedSubtitleConfig $EmbedSubtitleConfig <p>Suppression subtitle configuration message.</p>
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
        if (array_key_exists("OutputMode",$param) and $param["OutputMode"] !== null) {
            $this->OutputMode = $param["OutputMode"];
        }

        if (array_key_exists("OutputFinalVideo",$param) and $param["OutputFinalVideo"] !== null) {
            $this->OutputFinalVideo = $param["OutputFinalVideo"];
        }

        if (array_key_exists("OutputSubtitle",$param) and $param["OutputSubtitle"] !== null) {
            $this->OutputSubtitle = $param["OutputSubtitle"];
        }

        if (array_key_exists("OutputDstAudio",$param) and $param["OutputDstAudio"] !== null) {
            $this->OutputDstAudio = $param["OutputDstAudio"];
        }

        if (array_key_exists("EmbedSubtitleConfig",$param) and $param["EmbedSubtitleConfig"] !== null) {
            $this->EmbedSubtitleConfig = new DubbingEmbedSubtitleConfig();
            $this->EmbedSubtitleConfig->deserialize($param["EmbedSubtitleConfig"]);
        }
    }
}
