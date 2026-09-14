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
 * Input parameter type for video to adaptive bitrate stream
 *
 * @method integer getDefinition() Obtain <p>Adaptive bitrate streaming template ID.</p>
 * @method void setDefinition(integer $Definition) Set <p>Adaptive bitrate streaming template ID.</p>
 * @method array getWatermarkSet() Obtain <p>Watermark list. Up to 10 image or text watermarks are supported.</p>
 * @method void setWatermarkSet(array $WatermarkSet) Set <p>Watermark list. Up to 10 image or text watermarks are supported.</p>
 * @method BlindWatermarkInput getBlindWatermark() Obtain 
 * @method void setBlindWatermark(BlindWatermarkInput $BlindWatermark) Set 
 * @method TaskOutputStorage getOutputStorage() Obtain 
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set 
 * @method string getOutputObjectPath() Obtain <p>Output path for the manifest file after adaptive bitrate streaming, which can be a relative or absolute path.<br>To define the output path, the path must end with <code>.{format}</code>. For variable names, see <a href="https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1">Filename Variables</a>.<br>Relative path example:</p><li>Filename_{variable name}.{format}</li><li>Filename.{format}</li>Absolute path example:<li>/custom path/Filename_{variable name}.{format}</li>If this is not specified, the default relative path is {inputName}_adaptiveDynamicStreaming_{definition}.{format}.
 * @method void setOutputObjectPath(string $OutputObjectPath) Set <p>Output path for the manifest file after adaptive bitrate streaming, which can be a relative or absolute path.<br>To define the output path, the path must end with <code>.{format}</code>. For variable names, see <a href="https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1">Filename Variables</a>.<br>Relative path example:</p><li>Filename_{variable name}.{format}</li><li>Filename.{format}</li>Absolute path example:<li>/custom path/Filename_{variable name}.{format}</li>If this is not specified, the default relative path is {inputName}_adaptiveDynamicStreaming_{definition}.{format}.
 * @method string getSubStreamObjectName() Obtain <p>Output path for substream files after adaptive bitrate streaming, which can only be a relative path. If this is not specified, the default relative path is <code>{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}.{format}</code>.</p>
 * @method void setSubStreamObjectName(string $SubStreamObjectName) Set <p>Output path for substream files after adaptive bitrate streaming, which can only be a relative path. If this is not specified, the default relative path is <code>{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}.{format}</code>.</p>
 * @method string getSegmentObjectName() Obtain <p>Output path for segment files after adaptive bitrate streaming (HLS only), which can only be a relative path. If this is not specified, the default relative path is <code>{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}_{segmentNumber}.{format}</code>.</p>
 * @method void setSegmentObjectName(string $SegmentObjectName) Set <p>Output path for segment files after adaptive bitrate streaming (HLS only), which can only be a relative path. If this is not specified, the default relative path is <code>{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}_{segmentNumber}.{format}</code>.</p>
 * @method array getAddOnSubtitles() Obtain 
 * @method void setAddOnSubtitles(array $AddOnSubtitles) Set 
 * @method DrmInfo getDrmInfo() Obtain 
 * @method void setDrmInfo(DrmInfo $DrmInfo) Set 
 * @method string getDefinitionType() Obtain <p>Adaptive bitrate streaming template type. Valid values:<br>Common: audio and video.<br>PureAudio: audio only.</p>
 * @method void setDefinitionType(string $DefinitionType) Set <p>Adaptive bitrate streaming template type. Valid values:<br>Common: audio and video.<br>PureAudio: audio only.</p>
 * @method SubtitleTemplate getSubtitleTemplate() Obtain 
 * @method void setSubtitleTemplate(SubtitleTemplate $SubtitleTemplate) Set 
 * @method string getStdExtInfo() Obtain <p>Extended transcoding parameter field.</p>
 * @method void setStdExtInfo(string $StdExtInfo) Set <p>Extended transcoding parameter field.</p>
 * @method array getKeyPTSList() Obtain 
 * @method void setKeyPTSList(array $KeyPTSList) Set 
 * @method array getAddOnAudios() Obtain <p>External audio feature. Specifies the audio files to be inserted.</p>
 * @method void setAddOnAudios(array $AddOnAudios) Set <p>External audio feature. Specifies the audio files to be inserted.</p>
 * @method array getStdExtStreamInfos() Obtain <p>When not empty, directly replace the StreamInfos field of the template. The field format is the same as the StreamInfos when creating an adaptive template.</p>
 * @method void setStdExtStreamInfos(array $StdExtStreamInfos) Set <p>When not empty, directly replace the StreamInfos field of the template. The field format is the same as the StreamInfos when creating an adaptive template.</p>
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
     * @var BlindWatermarkInput 
     */
    public $BlindWatermark;

    /**
     * @var TaskOutputStorage 
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
     * @var array 
     */
    public $AddOnSubtitles;

    /**
     * @var DrmInfo 
     */
    public $DrmInfo;

    /**
     * @var string <p>Adaptive bitrate streaming template type. Valid values:<br>Common: audio and video.<br>PureAudio: audio only.</p>
     */
    public $DefinitionType;

    /**
     * @var SubtitleTemplate 
     */
    public $SubtitleTemplate;

    /**
     * @var string <p>Extended transcoding parameter field.</p>
     */
    public $StdExtInfo;

    /**
     * @var array 
     */
    public $KeyPTSList;

    /**
     * @var array <p>External audio feature. Specifies the audio files to be inserted.</p>
     */
    public $AddOnAudios;

    /**
     * @var array <p>When not empty, directly replace the StreamInfos field of the template. The field format is the same as the StreamInfos when creating an adaptive template.</p>
     */
    public $StdExtStreamInfos;

    /**
     * @param integer $Definition <p>Adaptive bitrate streaming template ID.</p>
     * @param array $WatermarkSet <p>Watermark list. Up to 10 image or text watermarks are supported.</p>
     * @param BlindWatermarkInput $BlindWatermark 
     * @param TaskOutputStorage $OutputStorage 
     * @param string $OutputObjectPath <p>Output path for the manifest file after adaptive bitrate streaming, which can be a relative or absolute path.<br>To define the output path, the path must end with <code>.{format}</code>. For variable names, see <a href="https://www.tencentcloud.com/document/product/862/37039?from_cn_redirect=1">Filename Variables</a>.<br>Relative path example:</p><li>Filename_{variable name}.{format}</li><li>Filename.{format}</li>Absolute path example:<li>/custom path/Filename_{variable name}.{format}</li>If this is not specified, the default relative path is {inputName}_adaptiveDynamicStreaming_{definition}.{format}.
     * @param string $SubStreamObjectName <p>Output path for substream files after adaptive bitrate streaming, which can only be a relative path. If this is not specified, the default relative path is <code>{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}.{format}</code>.</p>
     * @param string $SegmentObjectName <p>Output path for segment files after adaptive bitrate streaming (HLS only), which can only be a relative path. If this is not specified, the default relative path is <code>{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}_{segmentNumber}.{format}</code>.</p>
     * @param array $AddOnSubtitles 
     * @param DrmInfo $DrmInfo 
     * @param string $DefinitionType <p>Adaptive bitrate streaming template type. Valid values:<br>Common: audio and video.<br>PureAudio: audio only.</p>
     * @param SubtitleTemplate $SubtitleTemplate 
     * @param string $StdExtInfo <p>Extended transcoding parameter field.</p>
     * @param array $KeyPTSList 
     * @param array $AddOnAudios <p>External audio feature. Specifies the audio files to be inserted.</p>
     * @param array $StdExtStreamInfos <p>When not empty, directly replace the StreamInfos field of the template. The field format is the same as the StreamInfos when creating an adaptive template.</p>
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

        if (array_key_exists("StdExtStreamInfos",$param) and $param["StdExtStreamInfos"] !== null) {
            $this->StdExtStreamInfos = [];
            foreach ($param["StdExtStreamInfos"] as $key => $value){
                $obj = new AdaptiveStreamTemplate();
                $obj->deserialize($value);
                array_push($this->StdExtStreamInfos, $obj);
            }
        }
    }
}
