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
 * Target parameter for remastering
 *
 * @method string getMediaName() Obtain Output filename, up to 64 characters. By default, the system assigns the generated filename.
 * @method void setMediaName(string $MediaName) Set Output filename, up to 64 characters. By default, the system assigns the generated filename.
 * @method string getDescription() Obtain Description. It can contain up to 128 characters. The default description is empty.
 * @method void setDescription(string $Description) Set Description. It can contain up to 128 characters. The default description is empty.
 * @method integer getClassId() Obtain Category ID, used to categorize and manage media. You can create a category and obtain the category ID through the [Create Category](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) API.
<li>Default value: 0, indicate other categories.</li>
 * @method void setClassId(integer $ClassId) Set Category ID, used to categorize and manage media. You can create a category and obtain the category ID through the [Create Category](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) API.
<li>Default value: 0, indicate other categories.</li>
 * @method string getExpireTime() Obtain Expiry date of the output file. The file will be deleted after this time. By default, it never expires. The format follows the ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setExpireTime(string $ExpireTime) Set Expiry date of the output file. The file will be deleted after this time. By default, it never expires. The format follows the ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getContainer() Obtain Output file container format. Available values: mp4, flv, hls. Default value: mp4.
 * @method void setContainer(string $Container) Set Output file container format. Available values: mp4, flv, hls. Default value: mp4.
 * @method RebuildMediaTargetVideoStream getVideoStream() Obtain Output video information.
 * @method void setVideoStream(RebuildMediaTargetVideoStream $VideoStream) Set Output video information.
 * @method RebuildMediaTargetAudioStream getAudioStream() Obtain Output audio content.
 * @method void setAudioStream(RebuildMediaTargetAudioStream $AudioStream) Set Output audio content.
 * @method integer getRemoveVideo() Obtain Indicates whether to remove video data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>

Default value: 0.
 * @method void setRemoveVideo(integer $RemoveVideo) Set Indicates whether to remove video data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>

Default value: 0.
 * @method integer getRemoveAudio() Obtain Indicates whether to remove audio data. Available values:
<li>0: Reserved</li>
<li>1: Remove</li>

Default value: 0.
 * @method void setRemoveAudio(integer $RemoveAudio) Set Indicates whether to remove audio data. Available values:
<li>0: Reserved</li>
<li>1: Remove</li>

Default value: 0.
 */
class RebuildMediaTargetInfo extends AbstractModel
{
    /**
     * @var string Output filename, up to 64 characters. By default, the system assigns the generated filename.
     */
    public $MediaName;

    /**
     * @var string Description. It can contain up to 128 characters. The default description is empty.
     */
    public $Description;

    /**
     * @var integer Category ID, used to categorize and manage media. You can create a category and obtain the category ID through the [Create Category](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) API.
<li>Default value: 0, indicate other categories.</li>
     */
    public $ClassId;

    /**
     * @var string Expiry date of the output file. The file will be deleted after this time. By default, it never expires. The format follows the ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $ExpireTime;

    /**
     * @var string Output file container format. Available values: mp4, flv, hls. Default value: mp4.
     */
    public $Container;

    /**
     * @var RebuildMediaTargetVideoStream Output video information.
     */
    public $VideoStream;

    /**
     * @var RebuildMediaTargetAudioStream Output audio content.
     */
    public $AudioStream;

    /**
     * @var integer Indicates whether to remove video data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>

Default value: 0.
     */
    public $RemoveVideo;

    /**
     * @var integer Indicates whether to remove audio data. Available values:
<li>0: Reserved</li>
<li>1: Remove</li>

Default value: 0.
     */
    public $RemoveAudio;

    /**
     * @param string $MediaName Output filename, up to 64 characters. By default, the system assigns the generated filename.
     * @param string $Description Description. It can contain up to 128 characters. The default description is empty.
     * @param integer $ClassId Category ID, used to categorize and manage media. You can create a category and obtain the category ID through the [Create Category](https://www.tencentcloud.com/document/product/266/7812?from_cn_redirect=1) API.
<li>Default value: 0, indicate other categories.</li>
     * @param string $ExpireTime Expiry date of the output file. The file will be deleted after this time. By default, it never expires. The format follows the ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $Container Output file container format. Available values: mp4, flv, hls. Default value: mp4.
     * @param RebuildMediaTargetVideoStream $VideoStream Output video information.
     * @param RebuildMediaTargetAudioStream $AudioStream Output audio content.
     * @param integer $RemoveVideo Indicates whether to remove video data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>

Default value: 0.
     * @param integer $RemoveAudio Indicates whether to remove audio data. Available values:
<li>0: Reserved</li>
<li>1: Remove</li>

Default value: 0.
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
        if (array_key_exists("MediaName",$param) and $param["MediaName"] !== null) {
            $this->MediaName = $param["MediaName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ClassId",$param) and $param["ClassId"] !== null) {
            $this->ClassId = $param["ClassId"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = $param["Container"];
        }

        if (array_key_exists("VideoStream",$param) and $param["VideoStream"] !== null) {
            $this->VideoStream = new RebuildMediaTargetVideoStream();
            $this->VideoStream->deserialize($param["VideoStream"]);
        }

        if (array_key_exists("AudioStream",$param) and $param["AudioStream"] !== null) {
            $this->AudioStream = new RebuildMediaTargetAudioStream();
            $this->AudioStream->deserialize($param["AudioStream"]);
        }

        if (array_key_exists("RemoveVideo",$param) and $param["RemoveVideo"] !== null) {
            $this->RemoveVideo = $param["RemoveVideo"];
        }

        if (array_key_exists("RemoveAudio",$param) and $param["RemoveAudio"] !== null) {
            $this->RemoveAudio = $param["RemoveAudio"];
        }
    }
}
