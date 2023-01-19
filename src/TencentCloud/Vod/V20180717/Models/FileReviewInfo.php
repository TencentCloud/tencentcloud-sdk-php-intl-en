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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * File moderation information.
 *
 * @method ReviewInfo getMediaReviewInfo() Obtain Audio/Video moderation details\*.

\* This parameter only contains the information of moderation tasks initiated by the [ReviewAudioVideo](https://intl.cloud.tencent.com/document/api/266/80283?from_cn_redirect=1) or [ReviewImage](https://intl.cloud.tencent.com/document/api/266/73217?from_cn_redirect=1) API.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMediaReviewInfo(ReviewInfo $MediaReviewInfo) Set Audio/Video moderation details\*.

\* This parameter only contains the information of moderation tasks initiated by the [ReviewAudioVideo](https://intl.cloud.tencent.com/document/api/266/80283?from_cn_redirect=1) or [ReviewImage](https://intl.cloud.tencent.com/document/api/266/73217?from_cn_redirect=1) API.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method ReviewInfo getCoverReviewInfo() Obtain Thumbnail moderation details\*.

\* This parameter only contains the information of moderation tasks initiated by the [ReviewAudioVideo](https://intl.cloud.tencent.com/document/api/266/80283?from_cn_redirect=1) or [ReviewImage](https://intl.cloud.tencent.com/document/api/266/73217?from_cn_redirect=1) API.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCoverReviewInfo(ReviewInfo $CoverReviewInfo) Set Thumbnail moderation details\*.

\* This parameter only contains the information of moderation tasks initiated by the [ReviewAudioVideo](https://intl.cloud.tencent.com/document/api/266/80283?from_cn_redirect=1) or [ReviewImage](https://intl.cloud.tencent.com/document/api/266/73217?from_cn_redirect=1) API.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class FileReviewInfo extends AbstractModel
{
    /**
     * @var ReviewInfo Audio/Video moderation details\*.

\* This parameter only contains the information of moderation tasks initiated by the [ReviewAudioVideo](https://intl.cloud.tencent.com/document/api/266/80283?from_cn_redirect=1) or [ReviewImage](https://intl.cloud.tencent.com/document/api/266/73217?from_cn_redirect=1) API.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MediaReviewInfo;

    /**
     * @var ReviewInfo Thumbnail moderation details\*.

\* This parameter only contains the information of moderation tasks initiated by the [ReviewAudioVideo](https://intl.cloud.tencent.com/document/api/266/80283?from_cn_redirect=1) or [ReviewImage](https://intl.cloud.tencent.com/document/api/266/73217?from_cn_redirect=1) API.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CoverReviewInfo;

    /**
     * @param ReviewInfo $MediaReviewInfo Audio/Video moderation details\*.

\* This parameter only contains the information of moderation tasks initiated by the [ReviewAudioVideo](https://intl.cloud.tencent.com/document/api/266/80283?from_cn_redirect=1) or [ReviewImage](https://intl.cloud.tencent.com/document/api/266/73217?from_cn_redirect=1) API.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param ReviewInfo $CoverReviewInfo Thumbnail moderation details\*.

\* This parameter only contains the information of moderation tasks initiated by the [ReviewAudioVideo](https://intl.cloud.tencent.com/document/api/266/80283?from_cn_redirect=1) or [ReviewImage](https://intl.cloud.tencent.com/document/api/266/73217?from_cn_redirect=1) API.
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
        if (array_key_exists("MediaReviewInfo",$param) and $param["MediaReviewInfo"] !== null) {
            $this->MediaReviewInfo = new ReviewInfo();
            $this->MediaReviewInfo->deserialize($param["MediaReviewInfo"]);
        }

        if (array_key_exists("CoverReviewInfo",$param) and $param["CoverReviewInfo"] !== null) {
            $this->CoverReviewInfo = new ReviewInfo();
            $this->CoverReviewInfo->deserialize($param["CoverReviewInfo"]);
        }
    }
}
