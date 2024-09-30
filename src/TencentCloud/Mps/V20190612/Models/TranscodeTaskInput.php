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
 * Input parameter type of a transcoding task
 *
 * @method integer getDefinition() Obtain ID of a video transcoding template.
 * @method void setDefinition(integer $Definition) Set ID of a video transcoding template.
 * @method RawTranscodeParameter getRawParameter() Obtain Custom video transcoding parameter, which is valid if `Definition` is 0.
This parameter is used in highly customized scenarios. We recommend you use `Definition` to specify the transcoding parameter preferably.
 * @method void setRawParameter(RawTranscodeParameter $RawParameter) Set Custom video transcoding parameter, which is valid if `Definition` is 0.
This parameter is used in highly customized scenarios. We recommend you use `Definition` to specify the transcoding parameter preferably.
 * @method OverrideTranscodeParameter getOverrideParameter() Obtain Video transcoding custom parameter, which is valid when `Definition` is not 0.
When any parameters in this structure are entered, they will be used to override corresponding parameters in templates.
This parameter is used in highly customized scenarios. We recommend you only use `Definition` to specify the transcoding parameter.
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setOverrideParameter(OverrideTranscodeParameter $OverrideParameter) Set Video transcoding custom parameter, which is valid when `Definition` is not 0.
When any parameters in this structure are entered, they will be used to override corresponding parameters in templates.
This parameter is used in highly customized scenarios. We recommend you only use `Definition` to specify the transcoding parameter.
Note: this field may return `null`, indicating that no valid value was found.
 * @method array getWatermarkSet() Obtain List of up to 10 image or text watermarks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWatermarkSet(array $WatermarkSet) Set List of up to 10 image or text watermarks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getMosaicSet() Obtain List of blurs. Up to 10 ones can be supported.
 * @method void setMosaicSet(array $MosaicSet) Set List of blurs. Up to 10 ones can be supported.
 * @method float getStartTimeOffset() Obtain Start time offset of a transcoded video, in seconds.
<li>If this parameter is left empty or set to 0, the transcoded video will start at the same time as the original video.</li>
<li>If this parameter is set to a positive number (n for example), the transcoded video will start at the nth second of the original video.</li>
<li>If this parameter is set to a negative number (-n for example), the transcoded video will start at the nth second before the end of the original video.</li>
 * @method void setStartTimeOffset(float $StartTimeOffset) Set Start time offset of a transcoded video, in seconds.
<li>If this parameter is left empty or set to 0, the transcoded video will start at the same time as the original video.</li>
<li>If this parameter is set to a positive number (n for example), the transcoded video will start at the nth second of the original video.</li>
<li>If this parameter is set to a negative number (-n for example), the transcoded video will start at the nth second before the end of the original video.</li>
 * @method float getEndTimeOffset() Obtain End time offset of a transcoded video, in seconds.
<li>If this parameter is left empty or set to 0, the transcoded video will end at the same time as the original video.</li>
<li>If this parameter is set to a positive number (n for example), the transcoded video will end at the nth second of the original video.</li>
<li>If this parameter is set to a negative number (-n for example), the transcoded video will end at the nth second before the end of the original video.</li>
 * @method void setEndTimeOffset(float $EndTimeOffset) Set End time offset of a transcoded video, in seconds.
<li>If this parameter is left empty or set to 0, the transcoded video will end at the same time as the original video.</li>
<li>If this parameter is set to a positive number (n for example), the transcoded video will end at the nth second of the original video.</li>
<li>If this parameter is set to a negative number (-n for example), the transcoded video will end at the nth second before the end of the original video.</li>
 * @method TaskOutputStorage getOutputStorage() Obtain Target bucket of an output file. If this parameter is left empty, the `OutputStorage` value of the upper folder will be inherited.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Target bucket of an output file. If this parameter is left empty, the `OutputStorage` value of the upper folder will be inherited.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOutputObjectPath() Obtain Output path of the main file after transcoding, which can be a relative or absolute path.
If you need to define an output path, the path must end with `.{format}`. For variable names, refer to [Filename Variable](https://intl.cloud.tencent.com/document/product/862/37039?from_cn_redirect=1).Relative path example:
<li>Filename_{Variable name}.{format}.</li>
<li>Filename.{format}.</li>
Absolute path example:
<li>/Custom path/Filename_{Variable name}.{format}.</li>
If left empty, a relative path is used by default: `{inputName}_transcode_{definition}.{format}`.
 * @method void setOutputObjectPath(string $OutputObjectPath) Set Output path of the main file after transcoding, which can be a relative or absolute path.
If you need to define an output path, the path must end with `.{format}`. For variable names, refer to [Filename Variable](https://intl.cloud.tencent.com/document/product/862/37039?from_cn_redirect=1).Relative path example:
<li>Filename_{Variable name}.{format}.</li>
<li>Filename.{format}.</li>
Absolute path example:
<li>/Custom path/Filename_{Variable name}.{format}.</li>
If left empty, a relative path is used by default: `{inputName}_transcode_{definition}.{format}`.
 * @method string getSegmentObjectName() Obtain Path to an output file part (the path to ts during transcoding to HLS), which can only be a relative path. If this parameter is left empty, the following relative path will be used by default: `{inputName}_transcode_{definition}_{number}.{format}`.
 * @method void setSegmentObjectName(string $SegmentObjectName) Set Path to an output file part (the path to ts during transcoding to HLS), which can only be a relative path. If this parameter is left empty, the following relative path will be used by default: `{inputName}_transcode_{definition}_{number}.{format}`.
 * @method NumberFormat getObjectNumberFormat() Obtain Rule of the `{number}` variable in the output path after transcoding.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setObjectNumberFormat(NumberFormat $ObjectNumberFormat) Set Rule of the `{number}` variable in the output path after transcoding.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method HeadTailParameter getHeadTailParameter() Obtain Opening and closing credits parameters
Note: this field may return `null`, indicating that no valid value was found.
 * @method void setHeadTailParameter(HeadTailParameter $HeadTailParameter) Set Opening and closing credits parameters
Note: this field may return `null`, indicating that no valid value was found.
 */
class TranscodeTaskInput extends AbstractModel
{
    /**
     * @var integer ID of a video transcoding template.
     */
    public $Definition;

    /**
     * @var RawTranscodeParameter Custom video transcoding parameter, which is valid if `Definition` is 0.
This parameter is used in highly customized scenarios. We recommend you use `Definition` to specify the transcoding parameter preferably.
     */
    public $RawParameter;

    /**
     * @var OverrideTranscodeParameter Video transcoding custom parameter, which is valid when `Definition` is not 0.
When any parameters in this structure are entered, they will be used to override corresponding parameters in templates.
This parameter is used in highly customized scenarios. We recommend you only use `Definition` to specify the transcoding parameter.
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $OverrideParameter;

    /**
     * @var array List of up to 10 image or text watermarks.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WatermarkSet;

    /**
     * @var array List of blurs. Up to 10 ones can be supported.
     */
    public $MosaicSet;

    /**
     * @var float Start time offset of a transcoded video, in seconds.
<li>If this parameter is left empty or set to 0, the transcoded video will start at the same time as the original video.</li>
<li>If this parameter is set to a positive number (n for example), the transcoded video will start at the nth second of the original video.</li>
<li>If this parameter is set to a negative number (-n for example), the transcoded video will start at the nth second before the end of the original video.</li>
     */
    public $StartTimeOffset;

    /**
     * @var float End time offset of a transcoded video, in seconds.
<li>If this parameter is left empty or set to 0, the transcoded video will end at the same time as the original video.</li>
<li>If this parameter is set to a positive number (n for example), the transcoded video will end at the nth second of the original video.</li>
<li>If this parameter is set to a negative number (-n for example), the transcoded video will end at the nth second before the end of the original video.</li>
     */
    public $EndTimeOffset;

    /**
     * @var TaskOutputStorage Target bucket of an output file. If this parameter is left empty, the `OutputStorage` value of the upper folder will be inherited.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OutputStorage;

    /**
     * @var string Output path of the main file after transcoding, which can be a relative or absolute path.
If you need to define an output path, the path must end with `.{format}`. For variable names, refer to [Filename Variable](https://intl.cloud.tencent.com/document/product/862/37039?from_cn_redirect=1).Relative path example:
<li>Filename_{Variable name}.{format}.</li>
<li>Filename.{format}.</li>
Absolute path example:
<li>/Custom path/Filename_{Variable name}.{format}.</li>
If left empty, a relative path is used by default: `{inputName}_transcode_{definition}.{format}`.
     */
    public $OutputObjectPath;

    /**
     * @var string Path to an output file part (the path to ts during transcoding to HLS), which can only be a relative path. If this parameter is left empty, the following relative path will be used by default: `{inputName}_transcode_{definition}_{number}.{format}`.
     */
    public $SegmentObjectName;

    /**
     * @var NumberFormat Rule of the `{number}` variable in the output path after transcoding.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ObjectNumberFormat;

    /**
     * @var HeadTailParameter Opening and closing credits parameters
Note: this field may return `null`, indicating that no valid value was found.
     */
    public $HeadTailParameter;

    /**
     * @param integer $Definition ID of a video transcoding template.
     * @param RawTranscodeParameter $RawParameter Custom video transcoding parameter, which is valid if `Definition` is 0.
This parameter is used in highly customized scenarios. We recommend you use `Definition` to specify the transcoding parameter preferably.
     * @param OverrideTranscodeParameter $OverrideParameter Video transcoding custom parameter, which is valid when `Definition` is not 0.
When any parameters in this structure are entered, they will be used to override corresponding parameters in templates.
This parameter is used in highly customized scenarios. We recommend you only use `Definition` to specify the transcoding parameter.
Note: this field may return `null`, indicating that no valid value was found.
     * @param array $WatermarkSet List of up to 10 image or text watermarks.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $MosaicSet List of blurs. Up to 10 ones can be supported.
     * @param float $StartTimeOffset Start time offset of a transcoded video, in seconds.
<li>If this parameter is left empty or set to 0, the transcoded video will start at the same time as the original video.</li>
<li>If this parameter is set to a positive number (n for example), the transcoded video will start at the nth second of the original video.</li>
<li>If this parameter is set to a negative number (-n for example), the transcoded video will start at the nth second before the end of the original video.</li>
     * @param float $EndTimeOffset End time offset of a transcoded video, in seconds.
<li>If this parameter is left empty or set to 0, the transcoded video will end at the same time as the original video.</li>
<li>If this parameter is set to a positive number (n for example), the transcoded video will end at the nth second of the original video.</li>
<li>If this parameter is set to a negative number (-n for example), the transcoded video will end at the nth second before the end of the original video.</li>
     * @param TaskOutputStorage $OutputStorage Target bucket of an output file. If this parameter is left empty, the `OutputStorage` value of the upper folder will be inherited.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OutputObjectPath Output path of the main file after transcoding, which can be a relative or absolute path.
If you need to define an output path, the path must end with `.{format}`. For variable names, refer to [Filename Variable](https://intl.cloud.tencent.com/document/product/862/37039?from_cn_redirect=1).Relative path example:
<li>Filename_{Variable name}.{format}.</li>
<li>Filename.{format}.</li>
Absolute path example:
<li>/Custom path/Filename_{Variable name}.{format}.</li>
If left empty, a relative path is used by default: `{inputName}_transcode_{definition}.{format}`.
     * @param string $SegmentObjectName Path to an output file part (the path to ts during transcoding to HLS), which can only be a relative path. If this parameter is left empty, the following relative path will be used by default: `{inputName}_transcode_{definition}_{number}.{format}`.
     * @param NumberFormat $ObjectNumberFormat Rule of the `{number}` variable in the output path after transcoding.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param HeadTailParameter $HeadTailParameter Opening and closing credits parameters
Note: this field may return `null`, indicating that no valid value was found.
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
