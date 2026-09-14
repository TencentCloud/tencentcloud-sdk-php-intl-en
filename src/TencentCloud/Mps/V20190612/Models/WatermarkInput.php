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
 * Watermark parameter type in the media processing task.
 *
 * @method integer getDefinition() Obtain <p>Watermark template ID.</p>
 * @method void setDefinition(integer $Definition) Set <p>Watermark template ID.</p>
 * @method RawWatermarkParameter getRawParameter() Obtain <p>Watermark custom parameter, valid when Definition is set to 0.<br>This parameter is used for highly customized scenarios. We recommend you prioritize using Definition to specify watermark parameters.<br>Watermark custom parameters are not supported for screenshot watermarking.</p>
 * @method void setRawParameter(RawWatermarkParameter $RawParameter) Set <p>Watermark custom parameter, valid when Definition is set to 0.<br>This parameter is used for highly customized scenarios. We recommend you prioritize using Definition to specify watermark parameters.<br>Watermark custom parameters are not supported for screenshot watermarking.</p>
 * @method string getTextContent() Obtain <p>Text content, length not exceeding 100 characters. Fill in only when the watermark type is text watermark.<br>Text watermark does not support screenshot watermarking.</p>
 * @method void setTextContent(string $TextContent) Set <p>Text content, length not exceeding 100 characters. Fill in only when the watermark type is text watermark.<br>Text watermark does not support screenshot watermarking.</p>
 * @method string getSvgContent() Obtain <p>SVG content. Length not exceeding 2000000 characters. Fill in only when the watermark type is SVG watermark.<br>SVG watermark does not support screenshot watermarking.</p>
 * @method void setSvgContent(string $SvgContent) Set <p>SVG content. Length not exceeding 2000000 characters. Fill in only when the watermark type is SVG watermark.<br>SVG watermark does not support screenshot watermarking.</p>
 * @method float getStartTimeOffset() Obtain <p>Start time offset of a watermark, in seconds. If not set or set to 0, a watermark starts appearing when a video starts.</p><li>If not set or set to 0, a watermark starts appearing when a video starts;</li><li>If the value is greater than 0 (assuming n), the watermark appears at second n after the video starts;</li><li>If the value is less than 0 (assuming -n), the watermark appears n seconds before the end of the video.</li>Note: Only used for video scenes. Screenshots do not support it.
 * @method void setStartTimeOffset(float $StartTimeOffset) Set <p>Start time offset of a watermark, in seconds. If not set or set to 0, a watermark starts appearing when a video starts.</p><li>If not set or set to 0, a watermark starts appearing when a video starts;</li><li>If the value is greater than 0 (assuming n), the watermark appears at second n after the video starts;</li><li>If the value is less than 0 (assuming -n), the watermark appears n seconds before the end of the video.</li>Note: Only used for video scenes. Screenshots do not support it.
 * @method float getEndTimeOffset() Obtain <p>End time offset of a watermark, in seconds.</p><li>Leave empty or set to 0: the watermark lasts until the end of the video.</li><li>Value greater than 0 (assuming n): the watermark disappears at second n.</li><li>Value smaller than 0 (assuming -n): the watermark disappears n seconds before the end of the video.</li>Note: Only used for video scenes. Screenshot is not supported.
 * @method void setEndTimeOffset(float $EndTimeOffset) Set <p>End time offset of a watermark, in seconds.</p><li>Leave empty or set to 0: the watermark lasts until the end of the video.</li><li>Value greater than 0 (assuming n): the watermark disappears at second n.</li><li>Value smaller than 0 (assuming -n): the watermark disappears n seconds before the end of the video.</li>Note: Only used for video scenes. Screenshot is not supported.
 */
class WatermarkInput extends AbstractModel
{
    /**
     * @var integer <p>Watermark template ID.</p>
     */
    public $Definition;

    /**
     * @var RawWatermarkParameter <p>Watermark custom parameter, valid when Definition is set to 0.<br>This parameter is used for highly customized scenarios. We recommend you prioritize using Definition to specify watermark parameters.<br>Watermark custom parameters are not supported for screenshot watermarking.</p>
     */
    public $RawParameter;

    /**
     * @var string <p>Text content, length not exceeding 100 characters. Fill in only when the watermark type is text watermark.<br>Text watermark does not support screenshot watermarking.</p>
     */
    public $TextContent;

    /**
     * @var string <p>SVG content. Length not exceeding 2000000 characters. Fill in only when the watermark type is SVG watermark.<br>SVG watermark does not support screenshot watermarking.</p>
     */
    public $SvgContent;

    /**
     * @var float <p>Start time offset of a watermark, in seconds. If not set or set to 0, a watermark starts appearing when a video starts.</p><li>If not set or set to 0, a watermark starts appearing when a video starts;</li><li>If the value is greater than 0 (assuming n), the watermark appears at second n after the video starts;</li><li>If the value is less than 0 (assuming -n), the watermark appears n seconds before the end of the video.</li>Note: Only used for video scenes. Screenshots do not support it.
     */
    public $StartTimeOffset;

    /**
     * @var float <p>End time offset of a watermark, in seconds.</p><li>Leave empty or set to 0: the watermark lasts until the end of the video.</li><li>Value greater than 0 (assuming n): the watermark disappears at second n.</li><li>Value smaller than 0 (assuming -n): the watermark disappears n seconds before the end of the video.</li>Note: Only used for video scenes. Screenshot is not supported.
     */
    public $EndTimeOffset;

    /**
     * @param integer $Definition <p>Watermark template ID.</p>
     * @param RawWatermarkParameter $RawParameter <p>Watermark custom parameter, valid when Definition is set to 0.<br>This parameter is used for highly customized scenarios. We recommend you prioritize using Definition to specify watermark parameters.<br>Watermark custom parameters are not supported for screenshot watermarking.</p>
     * @param string $TextContent <p>Text content, length not exceeding 100 characters. Fill in only when the watermark type is text watermark.<br>Text watermark does not support screenshot watermarking.</p>
     * @param string $SvgContent <p>SVG content. Length not exceeding 2000000 characters. Fill in only when the watermark type is SVG watermark.<br>SVG watermark does not support screenshot watermarking.</p>
     * @param float $StartTimeOffset <p>Start time offset of a watermark, in seconds. If not set or set to 0, a watermark starts appearing when a video starts.</p><li>If not set or set to 0, a watermark starts appearing when a video starts;</li><li>If the value is greater than 0 (assuming n), the watermark appears at second n after the video starts;</li><li>If the value is less than 0 (assuming -n), the watermark appears n seconds before the end of the video.</li>Note: Only used for video scenes. Screenshots do not support it.
     * @param float $EndTimeOffset <p>End time offset of a watermark, in seconds.</p><li>Leave empty or set to 0: the watermark lasts until the end of the video.</li><li>Value greater than 0 (assuming n): the watermark disappears at second n.</li><li>Value smaller than 0 (assuming -n): the watermark disappears n seconds before the end of the video.</li>Note: Only used for video scenes. Screenshot is not supported.
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

        if (array_key_exists("RawParameter",$param) and $param["RawParameter"] !== null) {
            $this->RawParameter = new RawWatermarkParameter();
            $this->RawParameter->deserialize($param["RawParameter"]);
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
