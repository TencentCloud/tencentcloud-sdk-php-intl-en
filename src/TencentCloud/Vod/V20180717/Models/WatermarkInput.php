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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Watermark parameter type of video processing task
 *
 * @method integer getDefinition() Obtain Watermarking template ID.
 * @method void setDefinition(integer $Definition) Set Watermarking template ID.
 * @method string getTextContent() Obtain Text content, which contains up to 100 characters. Set this parameter only when the watermark type is text.
VOD does not support adding text watermarks on screenshots.
 * @method void setTextContent(string $TextContent) Set Text content, which contains up to 100 characters. Set this parameter only when the watermark type is text.
VOD does not support adding text watermarks on screenshots.
 * @method string getSvgContent() Obtain SVG content, which contains up to 2,000,000 characters. Set this parameter only when the watermark type is SVG.
VOD does not support adding SVG watermarks on screenshots.
 * @method void setSvgContent(string $SvgContent) Set SVG content, which contains up to 2,000,000 characters. Set this parameter only when the watermark type is SVG.
VOD does not support adding SVG watermarks on screenshots.
 * @method float getStartTimeOffset() Obtain Start time offset of a watermark in seconds. If this parameter is left blank or 0 is entered, the watermark will appear upon the first video frame.
<li>If this parameter is left blank or 0 is entered, the watermark will appear upon the first video frame;</li>
<li>If this value is greater than 0 (e.g., n), the watermark will appear at second n after the first video frame;</li>
<li>If this value is smaller than 0 (e.g., -n), the watermark will appear at second n before the last video frame.</li>
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of a watermark in seconds. If this parameter is left blank or 0 is entered, the watermark will appear upon the first video frame.
<li>If this parameter is left blank or 0 is entered, the watermark will appear upon the first video frame;</li>
<li>If this value is greater than 0 (e.g., n), the watermark will appear at second n after the first video frame;</li>
<li>If this value is smaller than 0 (e.g., -n), the watermark will appear at second n before the last video frame.</li>
 * @method float getEndTimeOffset() Obtain End time offset of a watermark in seconds.
<li>If this parameter is left blank or 0 is entered, the watermark will exist till the last video frame;</li>
<li>If this value is greater than 0 (e.g., n), the watermark will exist till second n;</li>
<li>If this value is smaller than 0 (e.g., -n), the watermark will exist till second n before the last video frame.</li>
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of a watermark in seconds.
<li>If this parameter is left blank or 0 is entered, the watermark will exist till the last video frame;</li>
<li>If this value is greater than 0 (e.g., n), the watermark will exist till second n;</li>
<li>If this value is smaller than 0 (e.g., -n), the watermark will exist till second n before the last video frame.</li>
 */
class WatermarkInput extends AbstractModel
{
    /**
     * @var integer Watermarking template ID.
     */
    public $Definition;

    /**
     * @var string Text content, which contains up to 100 characters. Set this parameter only when the watermark type is text.
VOD does not support adding text watermarks on screenshots.
     */
    public $TextContent;

    /**
     * @var string SVG content, which contains up to 2,000,000 characters. Set this parameter only when the watermark type is SVG.
VOD does not support adding SVG watermarks on screenshots.
     */
    public $SvgContent;

    /**
     * @var float Start time offset of a watermark in seconds. If this parameter is left blank or 0 is entered, the watermark will appear upon the first video frame.
<li>If this parameter is left blank or 0 is entered, the watermark will appear upon the first video frame;</li>
<li>If this value is greater than 0 (e.g., n), the watermark will appear at second n after the first video frame;</li>
<li>If this value is smaller than 0 (e.g., -n), the watermark will appear at second n before the last video frame.</li>
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of a watermark in seconds.
<li>If this parameter is left blank or 0 is entered, the watermark will exist till the last video frame;</li>
<li>If this value is greater than 0 (e.g., n), the watermark will exist till second n;</li>
<li>If this value is smaller than 0 (e.g., -n), the watermark will exist till second n before the last video frame.</li>
     */
    public $EndTimeOffset;

    /**
     * @param integer $Definition Watermarking template ID.
     * @param string $TextContent Text content, which contains up to 100 characters. Set this parameter only when the watermark type is text.
VOD does not support adding text watermarks on screenshots.
     * @param string $SvgContent SVG content, which contains up to 2,000,000 characters. Set this parameter only when the watermark type is SVG.
VOD does not support adding SVG watermarks on screenshots.
     * @param float $StartTimeOffset Start time offset of a watermark in seconds. If this parameter is left blank or 0 is entered, the watermark will appear upon the first video frame.
<li>If this parameter is left blank or 0 is entered, the watermark will appear upon the first video frame;</li>
<li>If this value is greater than 0 (e.g., n), the watermark will appear at second n after the first video frame;</li>
<li>If this value is smaller than 0 (e.g., -n), the watermark will appear at second n before the last video frame.</li>
     * @param float $EndTimeOffset End time offset of a watermark in seconds.
<li>If this parameter is left blank or 0 is entered, the watermark will exist till the last video frame;</li>
<li>If this value is greater than 0 (e.g., n), the watermark will exist till second n;</li>
<li>If this value is smaller than 0 (e.g., -n), the watermark will exist till second n before the last video frame.</li>
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
