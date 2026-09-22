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
 * Output media file information.
 *
 * @method string getFileName() Obtain Filename, up to 64 characters.
 * @method void setFileName(string $FileName) Set Filename, up to 64 characters.
 * @method string getDescription() Obtain Description. The maximum length is 128 characters.
 * @method void setDescription(string $Description) Set Description. The maximum length is 128 characters.
 * @method integer getClassId() Obtain Category ID, used to categorize and manage media. You can create a category and obtain the category ID through the [create category](https://www.tencentcloud.com/document/product/266/7812) API.
<li>Default value: 0, indicate other categories.</li>
 * @method void setClassId(integer $ClassId) Set Category ID, used to categorize and manage media. You can create a category and obtain the category ID through the [create category](https://www.tencentcloud.com/document/product/266/7812) API.
<li>Default value: 0, indicate other categories.</li>
 * @method string getExpireTime() Obtain Expiry date of the output file. The file will be deleted after this time. It never expires by default. The format follows the ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setExpireTime(string $ExpireTime) Set Expiry date of the output file. The file will be deleted after this time. It never expires by default. The format follows the ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getContainer() Obtain Muxing format. Available values: mp4 and mp3. Among them, mp3 is for audio-only files.
 * @method void setContainer(string $Container) Set Muxing format. Available values: mp4 and mp3. Among them, mp3 is for audio-only files.
 * @method OutputVideoStream getVideoStream() Obtain Output video information.
 * @method void setVideoStream(OutputVideoStream $VideoStream) Set Output video information.
 * @method OutputAudioStream getAudioStream() Obtain Output audio content.
 * @method void setAudioStream(OutputAudioStream $AudioStream) Set Output audio content.
 * @method integer getRemoveVideo() Obtain Indicates whether to remove video data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
Default value: 0.
 * @method void setRemoveVideo(integer $RemoveVideo) Set Indicates whether to remove video data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
Default value: 0.
 * @method integer getRemoveAudio() Obtain Indicates whether to remove audio data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
Default value: 0.
 * @method void setRemoveAudio(integer $RemoveAudio) Set Indicates whether to remove audio data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
Default value: 0.
 */
class ComposeMediaOutput extends AbstractModel
{
    /**
     * @var string Filename, up to 64 characters.
     */
    public $FileName;

    /**
     * @var string Description. The maximum length is 128 characters.
     */
    public $Description;

    /**
     * @var integer Category ID, used to categorize and manage media. You can create a category and obtain the category ID through the [create category](https://www.tencentcloud.com/document/product/266/7812) API.
<li>Default value: 0, indicate other categories.</li>
     */
    public $ClassId;

    /**
     * @var string Expiry date of the output file. The file will be deleted after this time. It never expires by default. The format follows the ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $ExpireTime;

    /**
     * @var string Muxing format. Available values: mp4 and mp3. Among them, mp3 is for audio-only files.
     */
    public $Container;

    /**
     * @var OutputVideoStream Output video information.
     */
    public $VideoStream;

    /**
     * @var OutputAudioStream Output audio content.
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
<li>`0`: reserved</li>
<li>1: Remove</li>
Default value: 0.
     */
    public $RemoveAudio;

    /**
     * @param string $FileName Filename, up to 64 characters.
     * @param string $Description Description. The maximum length is 128 characters.
     * @param integer $ClassId Category ID, used to categorize and manage media. You can create a category and obtain the category ID through the [create category](https://www.tencentcloud.com/document/product/266/7812) API.
<li>Default value: 0, indicate other categories.</li>
     * @param string $ExpireTime Expiry date of the output file. The file will be deleted after this time. It never expires by default. The format follows the ISO 8601 standard. For details, see [ISO date format description](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $Container Muxing format. Available values: mp4 and mp3. Among them, mp3 is for audio-only files.
     * @param OutputVideoStream $VideoStream Output video information.
     * @param OutputAudioStream $AudioStream Output audio content.
     * @param integer $RemoveVideo Indicates whether to remove video data. Available values:
<li>`0`: reserved</li>
<li>1: Remove</li>
Default value: 0.
     * @param integer $RemoveAudio Indicates whether to remove audio data. Available values:
<li>`0`: reserved</li>
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
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
            $this->VideoStream = new OutputVideoStream();
            $this->VideoStream->deserialize($param["VideoStream"]);
        }

        if (array_key_exists("AudioStream",$param) and $param["AudioStream"] !== null) {
            $this->AudioStream = new OutputAudioStream();
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
