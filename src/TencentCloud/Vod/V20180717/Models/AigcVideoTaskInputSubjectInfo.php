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
 * Input information of the AIGC subject.
 *
 * @method string getId() Obtain <p>Fixed subject Id.</p><ul><li>Kling subject <strong>required</strong>;</li><li>Vidu subject selectable.</li></ul>
 * @method void setId(string $Id) Set <p>Fixed subject Id.</p><ul><li>Kling subject <strong>required</strong>;</li><li>Vidu subject selectable.</li></ul>
 * @method string getName() Obtain <p>Fixed name.</p><ul><li>Vidu subject is <strong>required</strong>, can be used by adding [@name] in prompt. For example, when name is Xiao Ming, describe it as [@Xiao Ming] in prompt.</li><li>Kling subject is selectable.</li></ul>
 * @method void setName(string $Name) Set <p>Fixed name.</p><ul><li>Vidu subject is <strong>required</strong>, can be used by adding [@name] in prompt. For example, when name is Xiao Ming, describe it as [@Xiao Ming] in prompt.</li><li>Kling subject is selectable.</li></ul>
 * @method string getVoiceId() Obtain <p><strong>Valid only for Vidu.</strong> Voice type ID is used to determine the sound timbre in the video. If left empty, the system will automatically recommend one.</p>
 * @method void setVoiceId(string $VoiceId) Set <p><strong>Valid only for Vidu.</strong> Voice type ID is used to determine the sound timbre in the video. If left empty, the system will automatically recommend one.</p>
 * @method array getImageUrls() Obtain <p><strong>Valid for Vidu only.</strong> Temporary subject images, up to 3 images<br>Note 1: Support passing image URL (ensure it is accessible);<br>Note 2: Images support png, jpeg, jpg, webp format;<br>Note 3: Image pixel cannot be less than 128*128, and the ratio must be less than 1:4 or 4:1.</p>
 * @method void setImageUrls(array $ImageUrls) Set <p><strong>Valid for Vidu only.</strong> Temporary subject images, up to 3 images<br>Note 1: Support passing image URL (ensure it is accessible);<br>Note 2: Images support png, jpeg, jpg, webp format;<br>Note 3: Image pixel cannot be less than 128*128, and the ratio must be less than 1:4 or 4:1.</p>
 * @method array getVideoUrls() Obtain <p><strong>Valid for Vidu only.</strong> Temporary subject video, a maximum of one 5-second video. Note 1: Only the viduq2-pro model supports the use of video subject; Note 2: Supports up to one 5-second video upload; Note 3: Video supports mp4, avi, mov format; Note 4: Video pixel cannot be less than 128*128, and the ratio must be less than 1:4 or 4:1.</p>
 * @method void setVideoUrls(array $VideoUrls) Set <p><strong>Valid for Vidu only.</strong> Temporary subject video, a maximum of one 5-second video. Note 1: Only the viduq2-pro model supports the use of video subject; Note 2: Supports up to one 5-second video upload; Note 3: Video supports mp4, avi, mov format; Note 4: Video pixel cannot be less than 128*128, and the ratio must be less than 1:4 or 4:1.</p>
 */
class AigcVideoTaskInputSubjectInfo extends AbstractModel
{
    /**
     * @var string <p>Fixed subject Id.</p><ul><li>Kling subject <strong>required</strong>;</li><li>Vidu subject selectable.</li></ul>
     */
    public $Id;

    /**
     * @var string <p>Fixed name.</p><ul><li>Vidu subject is <strong>required</strong>, can be used by adding [@name] in prompt. For example, when name is Xiao Ming, describe it as [@Xiao Ming] in prompt.</li><li>Kling subject is selectable.</li></ul>
     */
    public $Name;

    /**
     * @var string <p><strong>Valid only for Vidu.</strong> Voice type ID is used to determine the sound timbre in the video. If left empty, the system will automatically recommend one.</p>
     */
    public $VoiceId;

    /**
     * @var array <p><strong>Valid for Vidu only.</strong> Temporary subject images, up to 3 images<br>Note 1: Support passing image URL (ensure it is accessible);<br>Note 2: Images support png, jpeg, jpg, webp format;<br>Note 3: Image pixel cannot be less than 128*128, and the ratio must be less than 1:4 or 4:1.</p>
     */
    public $ImageUrls;

    /**
     * @var array <p><strong>Valid for Vidu only.</strong> Temporary subject video, a maximum of one 5-second video. Note 1: Only the viduq2-pro model supports the use of video subject; Note 2: Supports up to one 5-second video upload; Note 3: Video supports mp4, avi, mov format; Note 4: Video pixel cannot be less than 128*128, and the ratio must be less than 1:4 or 4:1.</p>
     */
    public $VideoUrls;

    /**
     * @param string $Id <p>Fixed subject Id.</p><ul><li>Kling subject <strong>required</strong>;</li><li>Vidu subject selectable.</li></ul>
     * @param string $Name <p>Fixed name.</p><ul><li>Vidu subject is <strong>required</strong>, can be used by adding [@name] in prompt. For example, when name is Xiao Ming, describe it as [@Xiao Ming] in prompt.</li><li>Kling subject is selectable.</li></ul>
     * @param string $VoiceId <p><strong>Valid only for Vidu.</strong> Voice type ID is used to determine the sound timbre in the video. If left empty, the system will automatically recommend one.</p>
     * @param array $ImageUrls <p><strong>Valid for Vidu only.</strong> Temporary subject images, up to 3 images<br>Note 1: Support passing image URL (ensure it is accessible);<br>Note 2: Images support png, jpeg, jpg, webp format;<br>Note 3: Image pixel cannot be less than 128*128, and the ratio must be less than 1:4 or 4:1.</p>
     * @param array $VideoUrls <p><strong>Valid for Vidu only.</strong> Temporary subject video, a maximum of one 5-second video. Note 1: Only the viduq2-pro model supports the use of video subject; Note 2: Supports up to one 5-second video upload; Note 3: Video supports mp4, avi, mov format; Note 4: Video pixel cannot be less than 128*128, and the ratio must be less than 1:4 or 4:1.</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("ImageUrls",$param) and $param["ImageUrls"] !== null) {
            $this->ImageUrls = $param["ImageUrls"];
        }

        if (array_key_exists("VideoUrls",$param) and $param["VideoUrls"] !== null) {
            $this->VideoUrls = $param["VideoUrls"];
        }
    }
}
