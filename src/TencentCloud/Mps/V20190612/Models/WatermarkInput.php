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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Watermark parameter type of a video processing task
 *
 * @method integer getDefinition() Obtain ID of a watermarking template.
 * @method void setDefinition(integer $Definition) Set ID of a watermarking template.
 * @method RawWatermarkParameter getRawParameter() Obtain Custom watermark parameter, which is valid if `Definition` is 0.
This parameter is used in highly customized scenarios. We recommend you use `Definition` to specify the watermark parameter preferably.
 * @method void setRawParameter(RawWatermarkParameter $RawParameter) Set Custom watermark parameter, which is valid if `Definition` is 0.
This parameter is used in highly customized scenarios. We recommend you use `Definition` to specify the watermark parameter preferably.
 * @method string getTextContent() Obtain Text content of up to 100 characters. This field is required only when the watermark type is text.
 * @method void setTextContent(string $TextContent) Set Text content of up to 100 characters. This field is required only when the watermark type is text.
 * @method string getSvgContent() Obtain SVG content of up to 2,000,000 characters. This field is required only when the watermark type is `SVG`.
 * @method void setSvgContent(string $SvgContent) Set SVG content of up to 2,000,000 characters. This field is required only when the watermark type is `SVG`.
 * @method float getStartTimeOffset() Obtain Start time offset of a watermark in seconds. If this parameter is left empty or 0 is entered, the watermark will appear upon the first video frame.
<li>If this parameter is left empty or 0 is entered, the watermark will appear upon the first video frame;</li>
<li>If this value is greater than 0 (e.g., n), the watermark will appear at second n after the first video frame;</li>
<li>If this value is smaller than 0 (e.g., -n), the watermark will appear at second n before the last video frame.</li>
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of a watermark in seconds. If this parameter is left empty or 0 is entered, the watermark will appear upon the first video frame.
<li>If this parameter is left empty or 0 is entered, the watermark will appear upon the first video frame;</li>
<li>If this value is greater than 0 (e.g., n), the watermark will appear at second n after the first video frame;</li>
<li>If this value is smaller than 0 (e.g., -n), the watermark will appear at second n before the last video frame.</li>
 * @method float getEndTimeOffset() Obtain End time offset of a watermark in seconds.
<li>If this parameter is left empty or 0 is entered, the watermark will exist till the last video frame;</li>
<li>If this value is greater than 0 (e.g., n), the watermark will exist till second n;</li>
<li>If this value is smaller than 0 (e.g., -n), the watermark will exist till second n before the last video frame.</li>
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of a watermark in seconds.
<li>If this parameter is left empty or 0 is entered, the watermark will exist till the last video frame;</li>
<li>If this value is greater than 0 (e.g., n), the watermark will exist till second n;</li>
<li>If this value is smaller than 0 (e.g., -n), the watermark will exist till second n before the last video frame.</li>
 */
class WatermarkInput extends AbstractModel
{
    /**
     * @var integer ID of a watermarking template.
     */
    public $Definition;

    /**
     * @var RawWatermarkParameter Custom watermark parameter, which is valid if `Definition` is 0.
This parameter is used in highly customized scenarios. We recommend you use `Definition` to specify the watermark parameter preferably.
     */
    public $RawParameter;

    /**
     * @var string Text content of up to 100 characters. This field is required only when the watermark type is text.
     */
    public $TextContent;

    /**
     * @var string SVG content of up to 2,000,000 characters. This field is required only when the watermark type is `SVG`.
     */
    public $SvgContent;

    /**
     * @var float Start time offset of a watermark in seconds. If this parameter is left empty or 0 is entered, the watermark will appear upon the first video frame.
<li>If this parameter is left empty or 0 is entered, the watermark will appear upon the first video frame;</li>
<li>If this value is greater than 0 (e.g., n), the watermark will appear at second n after the first video frame;</li>
<li>If this value is smaller than 0 (e.g., -n), the watermark will appear at second n before the last video frame.</li>
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of a watermark in seconds.
<li>If this parameter is left empty or 0 is entered, the watermark will exist till the last video frame;</li>
<li>If this value is greater than 0 (e.g., n), the watermark will exist till second n;</li>
<li>If this value is smaller than 0 (e.g., -n), the watermark will exist till second n before the last video frame.</li>
     */
    public $EndTimeOffset;

    /**
     * @param integer $Definition ID of a watermarking template.
     * @param RawWatermarkParameter $RawParameter Custom watermark parameter, which is valid if `Definition` is 0.
This parameter is used in highly customized scenarios. We recommend you use `Definition` to specify the watermark parameter preferably.
     * @param string $TextContent Text content of up to 100 characters. This field is required only when the watermark type is text.
     * @param string $SvgContent SVG content of up to 2,000,000 characters. This field is required only when the watermark type is `SVG`.
     * @param float $StartTimeOffset Start time offset of a watermark in seconds. If this parameter is left empty or 0 is entered, the watermark will appear upon the first video frame.
<li>If this parameter is left empty or 0 is entered, the watermark will appear upon the first video frame;</li>
<li>If this value is greater than 0 (e.g., n), the watermark will appear at second n after the first video frame;</li>
<li>If this value is smaller than 0 (e.g., -n), the watermark will appear at second n before the last video frame.</li>
     * @param float $EndTimeOffset End time offset of a watermark in seconds.
<li>If this parameter is left empty or 0 is entered, the watermark will exist till the last video frame;</li>
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
