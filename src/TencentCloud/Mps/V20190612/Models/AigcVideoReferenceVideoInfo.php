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
 * Reference video asset for AIGC video generation.
 *
 * @method string getVideoUrl() Obtain Reference video URL, which must be accessible from the public network.
This can be used as a feature reference video or a video for editing. The default type is video for editing. You can choose to keep the original sound of the video.
The ReferType parameter specifies the reference video type: feature indicates feature reference video, and base indicates video for editing.
If the reference video is a video for editing, the first and last frames cannot be defined.
 * @method void setVideoUrl(string $VideoUrl) Set Reference video URL, which must be accessible from the public network.
This can be used as a feature reference video or a video for editing. The default type is video for editing. You can choose to keep the original sound of the video.
The ReferType parameter specifies the reference video type: feature indicates feature reference video, and base indicates video for editing.
If the reference video is a video for editing, the first and last frames cannot be defined.
 * @method string getReferType() Obtain The ReferType parameter specifies the reference video type: feature indicates feature reference video, and base indicates video for editing.
 * @method void setReferType(string $ReferType) Set The ReferType parameter specifies the reference video type: feature indicates feature reference video, and base indicates video for editing.
 * @method string getKeepOriginalSound() Obtain The KeepOriginalSound parameter specifies whether to keep the original sound of the video. Valid values: yes (keep the original sound); no (remove the original sound). This parameter also applies to feature reference videos (feature).
 * @method void setKeepOriginalSound(string $KeepOriginalSound) Set The KeepOriginalSound parameter specifies whether to keep the original sound of the video. Valid values: yes (keep the original sound); no (remove the original sound). This parameter also applies to feature reference videos (feature).
 */
class AigcVideoReferenceVideoInfo extends AbstractModel
{
    /**
     * @var string Reference video URL, which must be accessible from the public network.
This can be used as a feature reference video or a video for editing. The default type is video for editing. You can choose to keep the original sound of the video.
The ReferType parameter specifies the reference video type: feature indicates feature reference video, and base indicates video for editing.
If the reference video is a video for editing, the first and last frames cannot be defined.
     */
    public $VideoUrl;

    /**
     * @var string The ReferType parameter specifies the reference video type: feature indicates feature reference video, and base indicates video for editing.
     */
    public $ReferType;

    /**
     * @var string The KeepOriginalSound parameter specifies whether to keep the original sound of the video. Valid values: yes (keep the original sound); no (remove the original sound). This parameter also applies to feature reference videos (feature).
     */
    public $KeepOriginalSound;

    /**
     * @param string $VideoUrl Reference video URL, which must be accessible from the public network.
This can be used as a feature reference video or a video for editing. The default type is video for editing. You can choose to keep the original sound of the video.
The ReferType parameter specifies the reference video type: feature indicates feature reference video, and base indicates video for editing.
If the reference video is a video for editing, the first and last frames cannot be defined.
     * @param string $ReferType The ReferType parameter specifies the reference video type: feature indicates feature reference video, and base indicates video for editing.
     * @param string $KeepOriginalSound The KeepOriginalSound parameter specifies whether to keep the original sound of the video. Valid values: yes (keep the original sound); no (remove the original sound). This parameter also applies to feature reference videos (feature).
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
        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("ReferType",$param) and $param["ReferType"] !== null) {
            $this->ReferType = $param["ReferType"];
        }

        if (array_key_exists("KeepOriginalSound",$param) and $param["KeepOriginalSound"] !== null) {
            $this->KeepOriginalSound = $param["KeepOriginalSound"];
        }
    }
}
