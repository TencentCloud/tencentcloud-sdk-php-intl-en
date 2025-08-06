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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Control parameters for cloud slicing.
 *
 * @method integer getSliceType() Obtain Slicing task type.
1: audio slicing;
2: video frame extraction;
3: audio/video slicing + video frame extraction.
Example value: 1.
 * @method void setSliceType(integer $SliceType) Set Slicing task type.
1: audio slicing;
2: video frame extraction;
3: audio/video slicing + video frame extraction.
Example value: 1.
 * @method integer getMaxIdleTime() Obtain Recording is stopped automatically when there is no anchor in the room for more than MaxIdleTime. Unit: seconds. Default value: 30 seconds. This value needs to be greater than or equal to 5 seconds and less than or equal to 86,400 seconds (24 hours).
Example value: 30.
 * @method void setMaxIdleTime(integer $MaxIdleTime) Set Recording is stopped automatically when there is no anchor in the room for more than MaxIdleTime. Unit: seconds. Default value: 30 seconds. This value needs to be greater than or equal to 5 seconds and less than or equal to 86,400 seconds (24 hours).
Example value: 30.
 * @method integer getSliceAudio() Obtain Audio slicing duration. Default value: 15s. Example value: 15.
 * @method void setSliceAudio(integer $SliceAudio) Set Audio slicing duration. Default value: 15s. Example value: 15.
 * @method integer getSliceVideo() Obtain Interval for video frame extraction. Default value: 5s. Example value: 5.
 * @method void setSliceVideo(integer $SliceVideo) Set Interval for video frame extraction. Default value: 5s. Example value: 5.
 * @method SubscribeStreamUserIds getSubscribeStreamUserIds() Obtain Specifies the allowlist or blocklist for the subscription stream.
 * @method void setSubscribeStreamUserIds(SubscribeStreamUserIds $SubscribeStreamUserIds) Set Specifies the allowlist or blocklist for the subscription stream.
 * @method string getSliceCallbackUrl() Obtain Depreciated. The callback URL is configured in the console.
 * @method void setSliceCallbackUrl(string $SliceCallbackUrl) Set Depreciated. The callback URL is configured in the console.
 */
class SliceParams extends AbstractModel
{
    /**
     * @var integer Slicing task type.
1: audio slicing;
2: video frame extraction;
3: audio/video slicing + video frame extraction.
Example value: 1.
     */
    public $SliceType;

    /**
     * @var integer Recording is stopped automatically when there is no anchor in the room for more than MaxIdleTime. Unit: seconds. Default value: 30 seconds. This value needs to be greater than or equal to 5 seconds and less than or equal to 86,400 seconds (24 hours).
Example value: 30.
     */
    public $MaxIdleTime;

    /**
     * @var integer Audio slicing duration. Default value: 15s. Example value: 15.
     */
    public $SliceAudio;

    /**
     * @var integer Interval for video frame extraction. Default value: 5s. Example value: 5.
     */
    public $SliceVideo;

    /**
     * @var SubscribeStreamUserIds Specifies the allowlist or blocklist for the subscription stream.
     */
    public $SubscribeStreamUserIds;

    /**
     * @var string Depreciated. The callback URL is configured in the console.
     */
    public $SliceCallbackUrl;

    /**
     * @param integer $SliceType Slicing task type.
1: audio slicing;
2: video frame extraction;
3: audio/video slicing + video frame extraction.
Example value: 1.
     * @param integer $MaxIdleTime Recording is stopped automatically when there is no anchor in the room for more than MaxIdleTime. Unit: seconds. Default value: 30 seconds. This value needs to be greater than or equal to 5 seconds and less than or equal to 86,400 seconds (24 hours).
Example value: 30.
     * @param integer $SliceAudio Audio slicing duration. Default value: 15s. Example value: 15.
     * @param integer $SliceVideo Interval for video frame extraction. Default value: 5s. Example value: 5.
     * @param SubscribeStreamUserIds $SubscribeStreamUserIds Specifies the allowlist or blocklist for the subscription stream.
     * @param string $SliceCallbackUrl Depreciated. The callback URL is configured in the console.
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
        if (array_key_exists("SliceType",$param) and $param["SliceType"] !== null) {
            $this->SliceType = $param["SliceType"];
        }

        if (array_key_exists("MaxIdleTime",$param) and $param["MaxIdleTime"] !== null) {
            $this->MaxIdleTime = $param["MaxIdleTime"];
        }

        if (array_key_exists("SliceAudio",$param) and $param["SliceAudio"] !== null) {
            $this->SliceAudio = $param["SliceAudio"];
        }

        if (array_key_exists("SliceVideo",$param) and $param["SliceVideo"] !== null) {
            $this->SliceVideo = $param["SliceVideo"];
        }

        if (array_key_exists("SubscribeStreamUserIds",$param) and $param["SubscribeStreamUserIds"] !== null) {
            $this->SubscribeStreamUserIds = new SubscribeStreamUserIds();
            $this->SubscribeStreamUserIds->deserialize($param["SubscribeStreamUserIds"]);
        }

        if (array_key_exists("SliceCallbackUrl",$param) and $param["SliceCallbackUrl"] !== null) {
            $this->SliceCallbackUrl = $param["SliceCallbackUrl"];
        }
    }
}
