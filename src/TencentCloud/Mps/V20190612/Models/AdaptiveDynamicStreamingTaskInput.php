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
 * Input parameter type of adaptive bitrate streaming
 *
 * @method integer getDefinition() Obtain <p>Adaptive bitrate streaming template ID.</p>
 * @method void setDefinition(integer $Definition) Set <p>Adaptive bitrate streaming template ID.</p>
 * @method array getWatermarkSet() Obtain <p>Watermark list. Up to 10 image or text watermarks are supported.</p>
 * @method void setWatermarkSet(array $WatermarkSet) Set <p>Watermark list. Up to 10 image or text watermarks are supported.</p>
 * @method BlindWatermarkInput getBlindWatermark() Obtain <p>Digital watermark parameter.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBlindWatermark(BlindWatermarkInput $BlindWatermark) Set <p>Digital watermark parameter.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method TaskOutputStorage getOutputStorage() Obtain <p>Target storage for files after adaptive bitrate streaming. If this is not specified, the upper-level OutputStorage value is used.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set <p>Target storage for files after adaptive bitrate streaming. If this is not specified, the upper-level OutputStorage value is used.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getOutputObjectPath() Obtain <p>Output path for the manifest file after adaptive bitrate streaming, which can be a relative or absolute path.<br>To define the output path, the path must end with <code>.{format}</code>. For variable names, see <a href="https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1">Filename Variables</a>.<br>Relative path example:</p><li>Filename_{variable name}.{format}</li><li>Filename.{format}</li>Absolute path example:<li>/custom path/Filename_{variable name}.{format}</li>If this is not specified, the default relative path is {inputName}_adaptiveDynamicStreaming_{definition}.{format}.
 * @method void setOutputObjectPath(string $OutputObjectPath) Set <p>Output path for the manifest file after adaptive bitrate streaming, which can be a relative or absolute path.<br>To define the output path, the path must end with <code>.{format}</code>. For variable names, see <a href="https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1">Filename Variables</a>.<br>Relative path example:</p><li>Filename_{variable name}.{format}</li><li>Filename.{format}</li>Absolute path example:<li>/custom path/Filename_{variable name}.{format}</li>If this is not specified, the default relative path is {inputName}_adaptiveDynamicStreaming_{definition}.{format}.
 * @method string getSubStreamObjectName() Obtain <p>Output path for substream files after adaptive bitrate streaming, which can only be a relative path. If this is not specified, the default relative path is <code>{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}.{format}</code>.</p>
 * @method void setSubStreamObjectName(string $SubStreamObjectName) Set <p>Output path for substream files after adaptive bitrate streaming, which can only be a relative path. If this is not specified, the default relative path is <code>{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}.{format}</code>.</p>
 * @method string getSegmentObjectName() Obtain <p>Output path for segment files after adaptive bitrate streaming (HLS only), which can only be a relative path. If this is not specified, the default relative path is <code>{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}_{segmentNumber}.{format}</code>.</p>
 * @method void setSegmentObjectName(string $SegmentObjectName) Set <p>Output path for segment files after adaptive bitrate streaming (HLS only), which can only be a relative path. If this is not specified, the default relative path is <code>{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}_{segmentNumber}.{format}</code>.</p>
 * @method array getAddOnSubtitles() Obtain <p>External subtitle feature. Specifies the subtitle file to be inserted.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAddOnSubtitles(array $AddOnSubtitles) Set <p>External subtitle feature. Specifies the subtitle file to be inserted.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method DrmInfo getDrmInfo() Obtain <p>DRM information.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDrmInfo(DrmInfo $DrmInfo) Set <p>DRM information.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDefinitionType() Obtain <p>Adaptive bitrate streaming template type. Valid values:<br>Common: audio and video.<br>PureAudio: audio only.</p>
 * @method void setDefinitionType(string $DefinitionType) Set <p>Adaptive bitrate streaming template type. Valid values:<br>Common: audio and video.<br>PureAudio: audio only.</p>
 * @method SubtitleTemplate getSubtitleTemplate() Obtain <p>Hard subtitle (burned-in subtitle) feature. Specifies the subtitle source, font size, location, and other subtitle parameters.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubtitleTemplate(SubtitleTemplate $SubtitleTemplate) Set <p>Hard subtitle (burned-in subtitle) feature. Specifies the subtitle source, font size, location, and other subtitle parameters.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getStdExtInfo() Obtain <p>Extended transcoding parameter field.</p>
 * @method void setStdExtInfo(string $StdExtInfo) Set <p>Extended transcoding parameter field.</p>
 * @method array getKeyPTSList() Obtain <p>Specifies frames at specified PTS times as keyframes and splits segments. Unit: milliseconds (relative deviation of up to 1 ms is allowed). When both GOP and segment duration are specified, they function together. Note that you need to enable RawPts, keep the frame rate as that of the source, and ensure the specified PTS time corresponds to a frame in the source.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setKeyPTSList(array $KeyPTSList) Set <p>Specifies frames at specified PTS times as keyframes and splits segments. Unit: milliseconds (relative deviation of up to 1 ms is allowed). When both GOP and segment duration are specified, they function together. Note that you need to enable RawPts, keep the frame rate as that of the source, and ensure the specified PTS time corresponds to a frame in the source.</p>
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getAddOnAudios() Obtain <p>External audio feature. Specifies the audio files to be inserted.</p>
 * @method void setAddOnAudios(array $AddOnAudios) Set <p>External audio feature. Specifies the audio files to be inserted.</p>
 */
class AdaptiveDynamicStreamingTaskInput extends AbstractModel
{
    /**
     * @var integer <p>Adaptive bitrate streaming template ID.</p>
     */
    public $Definition;

    /**
     * @var array <p>Watermark list. Up to 10 image or text watermarks are supported.</p>
     */
    public $WatermarkSet;

    /**
     * @var BlindWatermarkInput <p>Digital watermark parameter.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BlindWatermark;

    /**
     * @var TaskOutputStorage <p>Target storage for files after adaptive bitrate streaming. If this is not specified, the upper-level OutputStorage value is used.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $OutputStorage;

    /**
     * @var string <p>Output path for the manifest file after adaptive bitrate streaming, which can be a relative or absolute path.<br>To define the output path, the path must end with <code>.{format}</code>. For variable names, see <a href="https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1">Filename Variables</a>.<br>Relative path example:</p><li>Filename_{variable name}.{format}</li><li>Filename.{format}</li>Absolute path example:<li>/custom path/Filename_{variable name}.{format}</li>If this is not specified, the default relative path is {inputName}_adaptiveDynamicStreaming_{definition}.{format}.
     */
    public $OutputObjectPath;

    /**
     * @var string <p>Output path for substream files after adaptive bitrate streaming, which can only be a relative path. If this is not specified, the default relative path is <code>{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}.{format}</code>.</p>
     */
    public $SubStreamObjectName;

    /**
     * @var string <p>Output path for segment files after adaptive bitrate streaming (HLS only), which can only be a relative path. If this is not specified, the default relative path is <code>{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}_{segmentNumber}.{format}</code>.</p>
     */
    public $SegmentObjectName;

    /**
     * @var array <p>External subtitle feature. Specifies the subtitle file to be inserted.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AddOnSubtitles;

    /**
     * @var DrmInfo <p>DRM information.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DrmInfo;

    /**
     * @var string <p>Adaptive bitrate streaming template type. Valid values:<br>Common: audio and video.<br>PureAudio: audio only.</p>
     */
    public $DefinitionType;

    /**
     * @var SubtitleTemplate <p>Hard subtitle (burned-in subtitle) feature. Specifies the subtitle source, font size, location, and other subtitle parameters.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubtitleTemplate;

    /**
     * @var string <p>Extended transcoding parameter field.</p>
     */
    public $StdExtInfo;

    /**
     * @var array <p>Specifies frames at specified PTS times as keyframes and splits segments. Unit: milliseconds (relative deviation of up to 1 ms is allowed). When both GOP and segment duration are specified, they function together. Note that you need to enable RawPts, keep the frame rate as that of the source, and ensure the specified PTS time corresponds to a frame in the source.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $KeyPTSList;

    /**
     * @var array <p>External audio feature. Specifies the audio files to be inserted.</p>
     */
    public $AddOnAudios;

    /**
     * @param integer $Definition <p>Adaptive bitrate streaming template ID.</p>
     * @param array $WatermarkSet <p>Watermark list. Up to 10 image or text watermarks are supported.</p>
     * @param BlindWatermarkInput $BlindWatermark <p>Digital watermark parameter.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param TaskOutputStorage $OutputStorage <p>Target storage for files after adaptive bitrate streaming. If this is not specified, the upper-level OutputStorage value is used.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $OutputObjectPath <p>Output path for the manifest file after adaptive bitrate streaming, which can be a relative or absolute path.<br>To define the output path, the path must end with <code>.{format}</code>. For variable names, see <a href="https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1">Filename Variables</a>.<br>Relative path example:</p><li>Filename_{variable name}.{format}</li><li>Filename.{format}</li>Absolute path example:<li>/custom path/Filename_{variable name}.{format}</li>If this is not specified, the default relative path is {inputName}_adaptiveDynamicStreaming_{definition}.{format}.
     * @param string $SubStreamObjectName <p>Output path for substream files after adaptive bitrate streaming, which can only be a relative path. If this is not specified, the default relative path is <code>{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}.{format}</code>.</p>
     * @param string $SegmentObjectName <p>Output path for segment files after adaptive bitrate streaming (HLS only), which can only be a relative path. If this is not specified, the default relative path is <code>{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}_{segmentNumber}.{format}</code>.</p>
     * @param array $AddOnSubtitles <p>External subtitle feature. Specifies the subtitle file to be inserted.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param DrmInfo $DrmInfo <p>DRM information.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DefinitionType <p>Adaptive bitrate streaming template type. Valid values:<br>Common: audio and video.<br>PureAudio: audio only.</p>
     * @param SubtitleTemplate $SubtitleTemplate <p>Hard subtitle (burned-in subtitle) feature. Specifies the subtitle source, font size, location, and other subtitle parameters.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $StdExtInfo <p>Extended transcoding parameter field.</p>
     * @param array $KeyPTSList <p>Specifies frames at specified PTS times as keyframes and splits segments. Unit: milliseconds (relative deviation of up to 1 ms is allowed). When both GOP and segment duration are specified, they function together. Note that you need to enable RawPts, keep the frame rate as that of the source, and ensure the specified PTS time corresponds to a frame in the source.</p>
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $AddOnAudios <p>External audio feature. Specifies the audio files to be inserted.</p>
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

        if (array_key_exists("OutputStorage",$param) and $param["OutputStorage"] !== null) {
            $this->OutputStorage = new TaskOutputStorage();
            $this->OutputStorage->deserialize($param["OutputStorage"]);
        }

        if (array_key_exists("OutputObjectPath",$param) and $param["OutputObjectPath"] !== null) {
            $this->OutputObjectPath = $param["OutputObjectPath"];
        }

        if (array_key_exists("SubStreamObjectName",$param) and $param["SubStreamObjectName"] !== null) {
            $this->SubStreamObjectName = $param["SubStreamObjectName"];
        }

        if (array_key_exists("SegmentObjectName",$param) and $param["SegmentObjectName"] !== null) {
            $this->SegmentObjectName = $param["SegmentObjectName"];
        }

        if (array_key_exists("AddOnSubtitles",$param) and $param["AddOnSubtitles"] !== null) {
            $this->AddOnSubtitles = [];
            foreach ($param["AddOnSubtitles"] as $key => $value){
                $obj = new AddOnSubtitle();
                $obj->deserialize($value);
                array_push($this->AddOnSubtitles, $obj);
            }
        }

        if (array_key_exists("DrmInfo",$param) and $param["DrmInfo"] !== null) {
            $this->DrmInfo = new DrmInfo();
            $this->DrmInfo->deserialize($param["DrmInfo"]);
        }

        if (array_key_exists("DefinitionType",$param) and $param["DefinitionType"] !== null) {
            $this->DefinitionType = $param["DefinitionType"];
        }

        if (array_key_exists("SubtitleTemplate",$param) and $param["SubtitleTemplate"] !== null) {
            $this->SubtitleTemplate = new SubtitleTemplate();
            $this->SubtitleTemplate->deserialize($param["SubtitleTemplate"]);
        }

        if (array_key_exists("StdExtInfo",$param) and $param["StdExtInfo"] !== null) {
            $this->StdExtInfo = $param["StdExtInfo"];
        }

        if (array_key_exists("KeyPTSList",$param) and $param["KeyPTSList"] !== null) {
            $this->KeyPTSList = $param["KeyPTSList"];
        }

        if (array_key_exists("AddOnAudios",$param) and $param["AddOnAudios"] !== null) {
            $this->AddOnAudios = [];
            foreach ($param["AddOnAudios"] as $key => $value){
                $obj = new AddOnAudio();
                $obj->deserialize($value);
                array_push($this->AddOnAudios, $obj);
            }
        }
    }
}
