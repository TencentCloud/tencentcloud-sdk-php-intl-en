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
 * ModifyAdaptiveDynamicStreamingTemplate request structure.
 *
 * @method integer getDefinition() Obtain Unique ID of an adaptive bitrate streaming template.
 * @method void setDefinition(integer $Definition) Set Unique ID of an adaptive bitrate streaming template.
 * @method string getName() Obtain Template name. Length limit: 64 characters.
 * @method void setName(string $Name) Set Template name. Length limit: 64 characters.
 * @method string getFormat() Obtain Adaptive bitrate streaming format. Valid values:
<li>HLS,</li>
<li>MPEG-DASH.</li>
 * @method void setFormat(string $Format) Set Adaptive bitrate streaming format. Valid values:
<li>HLS,</li>
<li>MPEG-DASH.</li>
 * @method integer getDisableHigherVideoBitrate() Obtain Whether to prohibit transcoding from low bitrate to high bitrate. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
 * @method void setDisableHigherVideoBitrate(integer $DisableHigherVideoBitrate) Set Whether to prohibit transcoding from low bitrate to high bitrate. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
 * @method integer getDisableHigherVideoResolution() Obtain Whether to prohibit transcoding from low resolution to high resolution. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
 * @method void setDisableHigherVideoResolution(integer $DisableHigherVideoResolution) Set Whether to prohibit transcoding from low resolution to high resolution. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
 * @method array getStreamInfos() Obtain Parameter information of input streams for transcoding to adaptive bitrate streaming. Up to 10 streams can be input.
Note: the frame rate of each stream must be consistent; otherwise, the frame rate of the first stream is used as the output frame rate.
 * @method void setStreamInfos(array $StreamInfos) Set Parameter information of input streams for transcoding to adaptive bitrate streaming. Up to 10 streams can be input.
Note: the frame rate of each stream must be consistent; otherwise, the frame rate of the first stream is used as the output frame rate.
 * @method string getComment() Obtain Template description. Length limit: 256 characters.
 * @method void setComment(string $Comment) Set Template description. Length limit: 256 characters.
 */
class ModifyAdaptiveDynamicStreamingTemplateRequest extends AbstractModel
{
    /**
     * @var integer Unique ID of an adaptive bitrate streaming template.
     */
    public $Definition;

    /**
     * @var string Template name. Length limit: 64 characters.
     */
    public $Name;

    /**
     * @var string Adaptive bitrate streaming format. Valid values:
<li>HLS,</li>
<li>MPEG-DASH.</li>
     */
    public $Format;

    /**
     * @var integer Whether to prohibit transcoding from low bitrate to high bitrate. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
     */
    public $DisableHigherVideoBitrate;

    /**
     * @var integer Whether to prohibit transcoding from low resolution to high resolution. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
     */
    public $DisableHigherVideoResolution;

    /**
     * @var array Parameter information of input streams for transcoding to adaptive bitrate streaming. Up to 10 streams can be input.
Note: the frame rate of each stream must be consistent; otherwise, the frame rate of the first stream is used as the output frame rate.
     */
    public $StreamInfos;

    /**
     * @var string Template description. Length limit: 256 characters.
     */
    public $Comment;

    /**
     * @param integer $Definition Unique ID of an adaptive bitrate streaming template.
     * @param string $Name Template name. Length limit: 64 characters.
     * @param string $Format Adaptive bitrate streaming format. Valid values:
<li>HLS,</li>
<li>MPEG-DASH.</li>
     * @param integer $DisableHigherVideoBitrate Whether to prohibit transcoding from low bitrate to high bitrate. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
     * @param integer $DisableHigherVideoResolution Whether to prohibit transcoding from low resolution to high resolution. Valid values:
<li>0: no,</li>
<li>1: yes.</li>
     * @param array $StreamInfos Parameter information of input streams for transcoding to adaptive bitrate streaming. Up to 10 streams can be input.
Note: the frame rate of each stream must be consistent; otherwise, the frame rate of the first stream is used as the output frame rate.
     * @param string $Comment Template description. Length limit: 256 characters.
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("DisableHigherVideoBitrate",$param) and $param["DisableHigherVideoBitrate"] !== null) {
            $this->DisableHigherVideoBitrate = $param["DisableHigherVideoBitrate"];
        }

        if (array_key_exists("DisableHigherVideoResolution",$param) and $param["DisableHigherVideoResolution"] !== null) {
            $this->DisableHigherVideoResolution = $param["DisableHigherVideoResolution"];
        }

        if (array_key_exists("StreamInfos",$param) and $param["StreamInfos"] !== null) {
            $this->StreamInfos = [];
            foreach ($param["StreamInfos"] as $key => $value){
                $obj = new AdaptiveStreamTemplate();
                $obj->deserialize($value);
                array_push($this->StreamInfos, $obj);
            }
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
