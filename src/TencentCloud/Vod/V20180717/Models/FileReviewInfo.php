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
 * File moderation information.
 *
 * @method ReviewInfo getMediaReviewInfo() Obtain Media review information\*.

\* Only show the review result info initiated by [Audio/Video Moderation (ReviewAudioVideo)](https://www.tencentcloud.com/document/api/266/80283?from_cn_redirect=1) or [Image Moderation (ReviewImage)](https://www.tencentcloud.com/document/api/266/73217?from_cn_redirect=1).
 * @method void setMediaReviewInfo(ReviewInfo $MediaReviewInfo) Set Media review information\*.

\* Only show the review result info initiated by [Audio/Video Moderation (ReviewAudioVideo)](https://www.tencentcloud.com/document/api/266/80283?from_cn_redirect=1) or [Image Moderation (ReviewImage)](https://www.tencentcloud.com/document/api/266/73217?from_cn_redirect=1).
 * @method ReviewInfo getCoverReviewInfo() Obtain Media cover review info\*.

\* Only show the review result info initiated by [Audio/Video Moderation (ReviewAudioVideo)](https://www.tencentcloud.com/document/api/266/80283?from_cn_redirect=1) or [Image Moderation (ReviewImage)](https://www.tencentcloud.com/document/api/266/73217?from_cn_redirect=1).
 * @method void setCoverReviewInfo(ReviewInfo $CoverReviewInfo) Set Media cover review info\*.

\* Only show the review result info initiated by [Audio/Video Moderation (ReviewAudioVideo)](https://www.tencentcloud.com/document/api/266/80283?from_cn_redirect=1) or [Image Moderation (ReviewImage)](https://www.tencentcloud.com/document/api/266/73217?from_cn_redirect=1).
 */
class FileReviewInfo extends AbstractModel
{
    /**
     * @var ReviewInfo Media review information\*.

\* Only show the review result info initiated by [Audio/Video Moderation (ReviewAudioVideo)](https://www.tencentcloud.com/document/api/266/80283?from_cn_redirect=1) or [Image Moderation (ReviewImage)](https://www.tencentcloud.com/document/api/266/73217?from_cn_redirect=1).
     */
    public $MediaReviewInfo;

    /**
     * @var ReviewInfo Media cover review info\*.

\* Only show the review result info initiated by [Audio/Video Moderation (ReviewAudioVideo)](https://www.tencentcloud.com/document/api/266/80283?from_cn_redirect=1) or [Image Moderation (ReviewImage)](https://www.tencentcloud.com/document/api/266/73217?from_cn_redirect=1).
     */
    public $CoverReviewInfo;

    /**
     * @param ReviewInfo $MediaReviewInfo Media review information\*.

\* Only show the review result info initiated by [Audio/Video Moderation (ReviewAudioVideo)](https://www.tencentcloud.com/document/api/266/80283?from_cn_redirect=1) or [Image Moderation (ReviewImage)](https://www.tencentcloud.com/document/api/266/73217?from_cn_redirect=1).
     * @param ReviewInfo $CoverReviewInfo Media cover review info\*.

\* Only show the review result info initiated by [Audio/Video Moderation (ReviewAudioVideo)](https://www.tencentcloud.com/document/api/266/80283?from_cn_redirect=1) or [Image Moderation (ReviewImage)](https://www.tencentcloud.com/document/api/266/73217?from_cn_redirect=1).
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
