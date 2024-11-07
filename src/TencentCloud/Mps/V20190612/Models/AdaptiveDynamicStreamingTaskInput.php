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
 * Input parameter type of adaptive bitrate streaming
 *
 * @method integer getDefinition() Obtain Adaptive dynamic streaming template ID.
 * @method void setDefinition(integer $Definition) Set Adaptive dynamic streaming template ID.
 * @method array getWatermarkSet() Obtain Watermark list. Multiple image or text watermarks up to a maximum of 10 are supported.
 * @method void setWatermarkSet(array $WatermarkSet) Set Watermark list. Multiple image or text watermarks up to a maximum of 10 are supported.
 * @method TaskOutputStorage getOutputStorage() Obtain Target storage for files after adaptive dynamic streaming. If left blank, it inherits the upper-level OutputStorage value.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOutputStorage(TaskOutputStorage $OutputStorage) Set Target storage for files after adaptive dynamic streaming. If left blank, it inherits the upper-level OutputStorage value.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getOutputObjectPath() Obtain Output path for the manifest file after adaptive dynamic streaming. It can be either a relative path or an absolute path.
If you need to define an output path, the path must end with `.{format}`. Refer to [Filename Variable Description](https://intl.cloud.tencent.com/document/product/862/37039?from_cn_redirect=1) for variable names.
Example of relative path:
<li>filename_{variable name}.{format}</li>
<li>filename.{format}</li>
Example of absolute path:
<li>/custom path/filename_{variable name}.{format}</li>
If not filled in, it is a relative path by default: {inputName}_adaptiveDynamicStreaming_{definition}.{format}.
 * @method void setOutputObjectPath(string $OutputObjectPath) Set Output path for the manifest file after adaptive dynamic streaming. It can be either a relative path or an absolute path.
If you need to define an output path, the path must end with `.{format}`. Refer to [Filename Variable Description](https://intl.cloud.tencent.com/document/product/862/37039?from_cn_redirect=1) for variable names.
Example of relative path:
<li>filename_{variable name}.{format}</li>
<li>filename.{format}</li>
Example of absolute path:
<li>/custom path/filename_{variable name}.{format}</li>
If not filled in, it is a relative path by default: {inputName}_adaptiveDynamicStreaming_{definition}.{format}.
 * @method string getSubStreamObjectName() Obtain After adaptive dynamic streaming, the output path of substream files can only be a relative path. If not filled in, it is a relative path by default: `{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}.{format}`.
 * @method void setSubStreamObjectName(string $SubStreamObjectName) Set After adaptive dynamic streaming, the output path of substream files can only be a relative path. If not filled in, it is a relative path by default: `{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}.{format}`.
 * @method string getSegmentObjectName() Obtain After adaptive dynamic streaming (for HLS only), the output path of segment files can only be a relative path. If not filled in, it is a relative path by default: `{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}_{segmentNumber}.{format}`.
 * @method void setSegmentObjectName(string $SegmentObjectName) Set After adaptive dynamic streaming (for HLS only), the output path of segment files can only be a relative path. If not filled in, it is a relative path by default: `{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}_{segmentNumber}.{format}`.
 * @method array getAddOnSubtitles() Obtain Subtitle file to be inserted.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setAddOnSubtitles(array $AddOnSubtitles) Set Subtitle file to be inserted.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method DrmInfo getDrmInfo() Obtain Drm information.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setDrmInfo(DrmInfo $DrmInfo) Set Drm information.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getDefinitionType() Obtain Adaptive transcoding template type.
Common: audio-video.
PureAudio: audio-only.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDefinitionType(string $DefinitionType) Set Adaptive transcoding template type.
Common: audio-video.
PureAudio: audio-only.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class AdaptiveDynamicStreamingTaskInput extends AbstractModel
{
    /**
     * @var integer Adaptive dynamic streaming template ID.
     */
    public $Definition;

    /**
     * @var array Watermark list. Multiple image or text watermarks up to a maximum of 10 are supported.
     */
    public $WatermarkSet;

    /**
     * @var TaskOutputStorage Target storage for files after adaptive dynamic streaming. If left blank, it inherits the upper-level OutputStorage value.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $OutputStorage;

    /**
     * @var string Output path for the manifest file after adaptive dynamic streaming. It can be either a relative path or an absolute path.
If you need to define an output path, the path must end with `.{format}`. Refer to [Filename Variable Description](https://intl.cloud.tencent.com/document/product/862/37039?from_cn_redirect=1) for variable names.
Example of relative path:
<li>filename_{variable name}.{format}</li>
<li>filename.{format}</li>
Example of absolute path:
<li>/custom path/filename_{variable name}.{format}</li>
If not filled in, it is a relative path by default: {inputName}_adaptiveDynamicStreaming_{definition}.{format}.
     */
    public $OutputObjectPath;

    /**
     * @var string After adaptive dynamic streaming, the output path of substream files can only be a relative path. If not filled in, it is a relative path by default: `{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}.{format}`.
     */
    public $SubStreamObjectName;

    /**
     * @var string After adaptive dynamic streaming (for HLS only), the output path of segment files can only be a relative path. If not filled in, it is a relative path by default: `{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}_{segmentNumber}.{format}`.
     */
    public $SegmentObjectName;

    /**
     * @var array Subtitle file to be inserted.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $AddOnSubtitles;

    /**
     * @var DrmInfo Drm information.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $DrmInfo;

    /**
     * @var string Adaptive transcoding template type.
Common: audio-video.
PureAudio: audio-only.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DefinitionType;

    /**
     * @param integer $Definition Adaptive dynamic streaming template ID.
     * @param array $WatermarkSet Watermark list. Multiple image or text watermarks up to a maximum of 10 are supported.
     * @param TaskOutputStorage $OutputStorage Target storage for files after adaptive dynamic streaming. If left blank, it inherits the upper-level OutputStorage value.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $OutputObjectPath Output path for the manifest file after adaptive dynamic streaming. It can be either a relative path or an absolute path.
If you need to define an output path, the path must end with `.{format}`. Refer to [Filename Variable Description](https://intl.cloud.tencent.com/document/product/862/37039?from_cn_redirect=1) for variable names.
Example of relative path:
<li>filename_{variable name}.{format}</li>
<li>filename.{format}</li>
Example of absolute path:
<li>/custom path/filename_{variable name}.{format}</li>
If not filled in, it is a relative path by default: {inputName}_adaptiveDynamicStreaming_{definition}.{format}.
     * @param string $SubStreamObjectName After adaptive dynamic streaming, the output path of substream files can only be a relative path. If not filled in, it is a relative path by default: `{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}.{format}`.
     * @param string $SegmentObjectName After adaptive dynamic streaming (for HLS only), the output path of segment files can only be a relative path. If not filled in, it is a relative path by default: `{inputName}_adaptiveDynamicStreaming_{definition}_{subStreamNumber}_{segmentNumber}.{format}`.
     * @param array $AddOnSubtitles Subtitle file to be inserted.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param DrmInfo $DrmInfo Drm information.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $DefinitionType Adaptive transcoding template type.
Common: audio-video.
PureAudio: audio-only.
Note: This field may return null, indicating that no valid values can be obtained.
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
    }
}
