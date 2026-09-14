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
 * 
 *
 * @method string getVideoUrl() Obtain <p>url of the reference video. It must be accessible from the external network.<br>It can be used as a feature reference video or a video for editing. By default, it is a video for editing. You can selectively retain the original sound of the video.<br>The ReferType parameter specifies the reference video type: feature indicates feature reference video, and base indicates video for editing.<br>When the reference video is a video for editing, you cannot define the first and last frame of the video.</p>
 * @method void setVideoUrl(string $VideoUrl) Set <p>url of the reference video. It must be accessible from the external network.<br>It can be used as a feature reference video or a video for editing. By default, it is a video for editing. You can selectively retain the original sound of the video.<br>The ReferType parameter specifies the reference video type: feature indicates feature reference video, and base indicates video for editing.<br>When the reference video is a video for editing, you cannot define the first and last frame of the video.</p>
 * @method string getReferType() Obtain <p>The ReferType parameter specifies the reference video type: feature indicates feature reference video, and base indicates video for editing.</p>
 * @method void setReferType(string $ReferType) Set <p>The ReferType parameter specifies the reference video type: feature indicates feature reference video, and base indicates video for editing.</p>
 * @method string getKeepOriginalSound() Obtain <p>The KeepOriginalSound parameter specifies whether to keep the original sound of the video. Valid values: yes (keep the original sound); no (remove the original sound). This parameter also applies to feature reference videos (feature).</p>
 * @method void setKeepOriginalSound(string $KeepOriginalSound) Set <p>The KeepOriginalSound parameter specifies whether to keep the original sound of the video. Valid values: yes (keep the original sound); no (remove the original sound). This parameter also applies to feature reference videos (feature).</p>
 */
class AigcVideoReferenceVideoInfo extends AbstractModel
{
    /**
     * @var string <p>url of the reference video. It must be accessible from the external network.<br>It can be used as a feature reference video or a video for editing. By default, it is a video for editing. You can selectively retain the original sound of the video.<br>The ReferType parameter specifies the reference video type: feature indicates feature reference video, and base indicates video for editing.<br>When the reference video is a video for editing, you cannot define the first and last frame of the video.</p>
     */
    public $VideoUrl;

    /**
     * @var string <p>The ReferType parameter specifies the reference video type: feature indicates feature reference video, and base indicates video for editing.</p>
     */
    public $ReferType;

    /**
     * @var string <p>The KeepOriginalSound parameter specifies whether to keep the original sound of the video. Valid values: yes (keep the original sound); no (remove the original sound). This parameter also applies to feature reference videos (feature).</p>
     */
    public $KeepOriginalSound;

    /**
     * @param string $VideoUrl <p>url of the reference video. It must be accessible from the external network.<br>It can be used as a feature reference video or a video for editing. By default, it is a video for editing. You can selectively retain the original sound of the video.<br>The ReferType parameter specifies the reference video type: feature indicates feature reference video, and base indicates video for editing.<br>When the reference video is a video for editing, you cannot define the first and last frame of the video.</p>
     * @param string $ReferType <p>The ReferType parameter specifies the reference video type: feature indicates feature reference video, and base indicates video for editing.</p>
     * @param string $KeepOriginalSound <p>The KeepOriginalSound parameter specifies whether to keep the original sound of the video. Valid values: yes (keep the original sound); no (remove the original sound). This parameter also applies to feature reference videos (feature).</p>
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
