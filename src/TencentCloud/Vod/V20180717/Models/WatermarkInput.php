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
 * Watermark parameter type in a video processing task.
 *
 * @method integer getDefinition() Obtain Watermark template ID.
 * @method void setDefinition(integer $Definition) Set Watermark template ID.
 * @method string getTextContent() Obtain Text content, up to 100 characters. This field is required only when the watermark type is text.
Text watermarks do not support watermarking screenshots.
 * @method void setTextContent(string $TextContent) Set Text content, up to 100 characters. This field is required only when the watermark type is text.
Text watermarks do not support watermarking screenshots.
 * @method string getSvgContent() Obtain SVG content. Length not exceeding 2,000,000 characters. Fill in only when the watermark type is SVG watermark.
SVG watermark does not support watermarking screenshots.
 * @method void setSvgContent(string $SvgContent) Set SVG content. Length not exceeding 2,000,000 characters. Fill in only when the watermark type is SVG watermark.
SVG watermark does not support watermarking screenshots.
 * @method float getStartTimeOffset() Obtain Start time offset of a watermark, in seconds. If not set or set to 0, a watermark starts appearing when a video starts.
<li>If not set or set to 0, a watermark starts appearing when a video starts.</li>
<li>If the value is greater than 0 (for example, n), a watermark will appear at second n of a video.</li>
<li>When the value is less than 0 (assuming -n), the watermark appears n seconds before the end of the video.</li>
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of a watermark, in seconds. If not set or set to 0, a watermark starts appearing when a video starts.
<li>If not set or set to 0, a watermark starts appearing when a video starts.</li>
<li>If the value is greater than 0 (for example, n), a watermark will appear at second n of a video.</li>
<li>When the value is less than 0 (assuming -n), the watermark appears n seconds before the end of the video.</li>
 * @method float getEndTimeOffset() Obtain End time offset of a watermark, in seconds.
<li>If not set or set to 0, a watermark will last until the end of a video.</li>
<li>If the value is greater than 0 (for example, n), a watermark will disappear at second n.</li>
<li>When the value is less than 0 (assuming -n), the watermark persists until n seconds before the end of the video.</li>
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of a watermark, in seconds.
<li>If not set or set to 0, a watermark will last until the end of a video.</li>
<li>If the value is greater than 0 (for example, n), a watermark will disappear at second n.</li>
<li>When the value is less than 0 (assuming -n), the watermark persists until n seconds before the end of the video.</li>
 */
class WatermarkInput extends AbstractModel
{
    /**
     * @var integer Watermark template ID.
     */
    public $Definition;

    /**
     * @var string Text content, up to 100 characters. This field is required only when the watermark type is text.
Text watermarks do not support watermarking screenshots.
     */
    public $TextContent;

    /**
     * @var string SVG content. Length not exceeding 2,000,000 characters. Fill in only when the watermark type is SVG watermark.
SVG watermark does not support watermarking screenshots.
     */
    public $SvgContent;

    /**
     * @var float Start time offset of a watermark, in seconds. If not set or set to 0, a watermark starts appearing when a video starts.
<li>If not set or set to 0, a watermark starts appearing when a video starts.</li>
<li>If the value is greater than 0 (for example, n), a watermark will appear at second n of a video.</li>
<li>When the value is less than 0 (assuming -n), the watermark appears n seconds before the end of the video.</li>
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of a watermark, in seconds.
<li>If not set or set to 0, a watermark will last until the end of a video.</li>
<li>If the value is greater than 0 (for example, n), a watermark will disappear at second n.</li>
<li>When the value is less than 0 (assuming -n), the watermark persists until n seconds before the end of the video.</li>
     */
    public $EndTimeOffset;

    /**
     * @param integer $Definition Watermark template ID.
     * @param string $TextContent Text content, up to 100 characters. This field is required only when the watermark type is text.
Text watermarks do not support watermarking screenshots.
     * @param string $SvgContent SVG content. Length not exceeding 2,000,000 characters. Fill in only when the watermark type is SVG watermark.
SVG watermark does not support watermarking screenshots.
     * @param float $StartTimeOffset Start time offset of a watermark, in seconds. If not set or set to 0, a watermark starts appearing when a video starts.
<li>If not set or set to 0, a watermark starts appearing when a video starts.</li>
<li>If the value is greater than 0 (for example, n), a watermark will appear at second n of a video.</li>
<li>When the value is less than 0 (assuming -n), the watermark appears n seconds before the end of the video.</li>
     * @param float $EndTimeOffset End time offset of a watermark, in seconds.
<li>If not set or set to 0, a watermark will last until the end of a video.</li>
<li>If the value is greater than 0 (for example, n), a watermark will disappear at second n.</li>
<li>When the value is less than 0 (assuming -n), the watermark persists until n seconds before the end of the video.</li>
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("TextContent",$param) and $param["TextContent"] !== null) {
            $this->TextContent = $param["TextContent"];
        }

        if (array_key_exists("SvgContent",$param) and $param["SvgContent"] !== null) {
            $this->SvgContent = $param["SvgContent"];
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }
    }
}
