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
 * Transcode task input parameter type
 *
 * @method integer getDefinition() Obtain Video transcoding template ID.
 * @method void setDefinition(integer $Definition) Set Video transcoding template ID.
 * @method RawTranscodeParameter getRawParameter() Obtain Custom video transcoding parameter. It takes effect when Definition is set to 0.
This parameter is used in high customization scenarios. It is recommended that you preferentially use Definition to specify transcoding parameters.
 * @method void setRawParameter(RawTranscodeParameter $RawParameter) Set Custom video transcoding parameter. It takes effect when Definition is set to 0.
This parameter is used in high customization scenarios. It is recommended that you preferentially use Definition to specify transcoding parameters.
 * @method OverrideTranscodeParameter getOverrideParameter() Obtain 
 * @method void setOverrideParameter(OverrideTranscodeParameter $OverrideParameter) Set 
 * @method array getWatermarkSet() Obtain Watermark list. Multiple image or text watermarks up to a maximum of 10 are supported.
 * @method void setWatermarkSet(array $WatermarkSet) Set Watermark list. Multiple image or text watermarks up to a maximum of 10 are supported.
 * @method BlindWatermarkInput getBlindWatermark() Obtain 
 * @method void setBlindWatermark(BlindWatermarkInput $BlindWatermark) Set 
 * @method array getMosaicSet() Obtain Mosaic list. A maximum of 10 images is supported.
 * @method void setMosaicSet(array $MosaicSet) Set Mosaic list. A maximum of 10 images is supported.
 * @method float getStartTimeOffset() Obtain Start time offset of the transcoded video, in seconds.
<li>If this parameter is not specified or is set to 0, the transcoded video starts from the start position of the original video;</li>
<li>When the value is greater than 0 (assuming n), it means the transcoded video starts from the nth second of the original video;</li>
<li>When the value is less than 0 (assuming -n), it means the transcoded video starts n seconds before the end of the original video.</li>
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of the transcoded video, in seconds.
<li>If this parameter is not specified or is set to 0, the transcoded video starts from the start position of the original video;</li>
<li>When the value is greater than 0 (assuming n), it means the transcoded video starts from the nth second of the original video;</li>
<li>When the value is less than 0 (assuming -n), it means the transcoded video starts n seconds before the end of the original video.</li>
 * @method float getEndTimeOffset() Obtain End time offset of the transcoded video, in seconds.
<li>If not set or set to 0, the transcoded video will last until the end of the original video.</li>
<li>When the value is greater than 0 (assuming n), it means the transcoded video ends at the nth second of the original video.</li>
<li>When the value is less than 0 (assuming -n), it means the transcoded video lasts until n seconds before the end of the original video.</li>
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of the transcoded video, in seconds.
<li>If not set or set to 0, the transcoded video will last until the end of the original video.</li>
<li>When the value is greater than 0 (assuming n), it means the transcoded video ends at the nth second of the original video.</li>
<li>When the value is less than 0 (assuming -n), it means the transcoded video lasts until n seconds before the end of the original video.</li>
 * @method TaskOutputStorage getOutputStorage() Obtain 
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set 
 * @method string getOutputObjectPath() Obtain Output path of the main file after transcoding, which can be a relative or absolute path.
To define the output path, the path must end with `.{format}`. For variable names, please refer to [Filename Variable Explanation](https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1).
Relative path example:
<li>Filename_{Variable name}.{format}</li>
<li>Filename.{format}.</li>
Absolute path example:
<li>/Custom path/Filename_{Variable name}.{format}</li>
If left empty, the default relative path is `{inputName}_transcode_{definition}.{format}`.

 * @method void setOutputObjectPath(string $OutputObjectPath) Set Output path of the main file after transcoding, which can be a relative or absolute path.
To define the output path, the path must end with `.{format}`. For variable names, please refer to [Filename Variable Explanation](https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1).
Relative path example:
<li>Filename_{Variable name}.{format}</li>
<li>Filename.{format}.</li>
Absolute path example:
<li>/Custom path/Filename_{Variable name}.{format}</li>
If left empty, the default relative path is `{inputName}_transcode_{definition}.{format}`.

 * @method string getSegmentObjectName() Obtain Output path for segment files after transcoding (the path of TS files when transcoding to HLS), which can only be a relative path. If left empty, it defaults to `{inputName}_transcode_{definition}_{number}.{format}`.
 * @method void setSegmentObjectName(string $SegmentObjectName) Set Output path for segment files after transcoding (the path of TS files when transcoding to HLS), which can only be a relative path. If left empty, it defaults to `{inputName}_transcode_{definition}_{number}.{format}`.
 * @method NumberFormat getObjectNumberFormat() Obtain 
 * @method void setObjectNumberFormat(NumberFormat $ObjectNumberFormat) Set 
 * @method HeadTailParameter getHeadTailParameter() Obtain 
 * @method void setHeadTailParameter(HeadTailParameter $HeadTailParameter) Set 
 */
class TranscodeTaskInput extends AbstractModel
{
    /**
     * @var integer Video transcoding template ID.
     */
    public $Definition;

    /**
     * @var RawTranscodeParameter Custom video transcoding parameter. It takes effect when Definition is set to 0.
This parameter is used in high customization scenarios. It is recommended that you preferentially use Definition to specify transcoding parameters.
     */
    public $RawParameter;

    /**
     * @var OverrideTranscodeParameter 
     */
    public $OverrideParameter;

    /**
     * @var array Watermark list. Multiple image or text watermarks up to a maximum of 10 are supported.
     */
    public $WatermarkSet;

    /**
     * @var BlindWatermarkInput 
     */
    public $BlindWatermark;

    /**
     * @var array Mosaic list. A maximum of 10 images is supported.
     */
    public $MosaicSet;

    /**
     * @var float Start time offset of the transcoded video, in seconds.
<li>If this parameter is not specified or is set to 0, the transcoded video starts from the start position of the original video;</li>
<li>When the value is greater than 0 (assuming n), it means the transcoded video starts from the nth second of the original video;</li>
<li>When the value is less than 0 (assuming -n), it means the transcoded video starts n seconds before the end of the original video.</li>
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of the transcoded video, in seconds.
<li>If not set or set to 0, the transcoded video will last until the end of the original video.</li>
<li>When the value is greater than 0 (assuming n), it means the transcoded video ends at the nth second of the original video.</li>
<li>When the value is less than 0 (assuming -n), it means the transcoded video lasts until n seconds before the end of the original video.</li>
     */
    public $EndTimeOffset;

    /**
     * @var TaskOutputStorage 
     */
    public $OutputStorage;

    /**
     * @var string Output path of the main file after transcoding, which can be a relative or absolute path.
To define the output path, the path must end with `.{format}`. For variable names, please refer to [Filename Variable Explanation](https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1).
Relative path example:
<li>Filename_{Variable name}.{format}</li>
<li>Filename.{format}.</li>
Absolute path example:
<li>/Custom path/Filename_{Variable name}.{format}</li>
If left empty, the default relative path is `{inputName}_transcode_{definition}.{format}`.

     */
    public $OutputObjectPath;

    /**
     * @var string Output path for segment files after transcoding (the path of TS files when transcoding to HLS), which can only be a relative path. If left empty, it defaults to `{inputName}_transcode_{definition}_{number}.{format}`.
     */
    public $SegmentObjectName;

    /**
     * @var NumberFormat 
     */
    public $ObjectNumberFormat;

    /**
     * @var HeadTailParameter 
     */
    public $HeadTailParameter;

    /**
     * @param integer $Definition Video transcoding template ID.
     * @param RawTranscodeParameter $RawParameter Custom video transcoding parameter. It takes effect when Definition is set to 0.
This parameter is used in high customization scenarios. It is recommended that you preferentially use Definition to specify transcoding parameters.
     * @param OverrideTranscodeParameter $OverrideParameter 
     * @param array $WatermarkSet Watermark list. Multiple image or text watermarks up to a maximum of 10 are supported.
     * @param BlindWatermarkInput $BlindWatermark 
     * @param array $MosaicSet Mosaic list. A maximum of 10 images is supported.
     * @param float $StartTimeOffset Start time offset of the transcoded video, in seconds.
<li>If this parameter is not specified or is set to 0, the transcoded video starts from the start position of the original video;</li>
<li>When the value is greater than 0 (assuming n), it means the transcoded video starts from the nth second of the original video;</li>
<li>When the value is less than 0 (assuming -n), it means the transcoded video starts n seconds before the end of the original video.</li>
     * @param float $EndTimeOffset End time offset of the transcoded video, in seconds.
<li>If not set or set to 0, the transcoded video will last until the end of the original video.</li>
<li>When the value is greater than 0 (assuming n), it means the transcoded video ends at the nth second of the original video.</li>
<li>When the value is less than 0 (assuming -n), it means the transcoded video lasts until n seconds before the end of the original video.</li>
     * @param TaskOutputStorage $OutputStorage 
     * @param string $OutputObjectPath Output path of the main file after transcoding, which can be a relative or absolute path.
To define the output path, the path must end with `.{format}`. For variable names, please refer to [Filename Variable Explanation](https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1).
Relative path example:
<li>Filename_{Variable name}.{format}</li>
<li>Filename.{format}.</li>
Absolute path example:
<li>/Custom path/Filename_{Variable name}.{format}</li>
If left empty, the default relative path is `{inputName}_transcode_{definition}.{format}`.

     * @param string $SegmentObjectName Output path for segment files after transcoding (the path of TS files when transcoding to HLS), which can only be a relative path. If left empty, it defaults to `{inputName}_transcode_{definition}_{number}.{format}`.
     * @param NumberFormat $ObjectNumberFormat 
     * @param HeadTailParameter $HeadTailParameter 
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
            $this->RawParameter = new RawTranscodeParameter();
            $this->RawParameter->deserialize($param["RawParameter"]);
        }

        if (array_key_exists("OverrideParameter",$param) and $param["OverrideParameter"] !== null) {
            $this->OverrideParameter = new OverrideTranscodeParameter();
            $this->OverrideParameter->deserialize($param["OverrideParameter"]);
        }

        if (array_key_exists("WatermarkSet",$param) and $param["WatermarkSet"] !== null) {
            $this->WatermarkSet = [];
            foreach ($param["WatermarkSet"] as $key => $value){
                $obj = new WatermarkInput();
                $obj->deserialize($value);
                array_push($this->WatermarkSet, $obj);
            }
        }

        if (array_key_exists("BlindWatermark",$param) and $param["BlindWatermark"] !== null) {
            $this->BlindWatermark = new BlindWatermarkInput();
            $this->BlindWatermark->deserialize($param["BlindWatermark"]);
        }

        if (array_key_exists("MosaicSet",$param) and $param["MosaicSet"] !== null) {
            $this->MosaicSet = [];
            foreach ($param["MosaicSet"] as $key => $value){
                $obj = new MosaicInput();
                $obj->deserialize($value);
                array_push($this->MosaicSet, $obj);
            }
        }

        if (array_key_exists("StartTimeOffset",$param) and $param["StartTimeOffset"] !== null) {
            $this->StartTimeOffset = $param["StartTimeOffset"];
        }

        if (array_key_exists("EndTimeOffset",$param) and $param["EndTimeOffset"] !== null) {
            $this->EndTimeOffset = $param["EndTimeOffset"];
        }

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputObjectPath",$param) and $param["OutputObjectPath"] !== null) {
            $this->OutputObjectPath = $param["OutputObjectPath"];
        }

        if (array_key_exists("SegmentObjectName",$param) and $param["SegmentObjectName"] !== null) {
            $this->SegmentObjectName = $param["SegmentObjectName"];
        }

        if (array_key_exists("ObjectNumberFormat",$param) and $param["ObjectNumberFormat"] !== null) {
            $this->ObjectNumberFormat = new NumberFormat();
            $this->ObjectNumberFormat->deserialize($param["ObjectNumberFormat"]);
        }

        if (array_key_exists("HeadTailParameter",$param) and $param["HeadTailParameter"] !== null) {
            $this->HeadTailParameter = new HeadTailParameter();
            $this->HeadTailParameter->deserialize($param["HeadTailParameter"]);
        }
    }
}
