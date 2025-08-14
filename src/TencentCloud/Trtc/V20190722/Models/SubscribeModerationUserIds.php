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
 * Specifies the subscription stream allowlist or blocklist. The audio allowlist and blocklist cannot be set simultaneously, and this also applies to video. Additionally, up to 25 concurrently subscribed media streams are supported, and up to 24 video screens are supported in mixed stream scenarios. It is also supported to use the ".*$" wildcard for prefix matching of UserId in the blocklist and allowlist. Note that if there are user IDs in the room that match the wildcard rule, specific users are subscribed, causing the prefix rule to become ineffective.
 *
 * @method array getSubscribeAudioUserIds() Obtain Subscription audio stream allowlist. It specifies which UserIds' audio streams to subscribe to, for example, ["1", "2", "3"] indicates subscriptions to the audio streams of UserId 1, 2, and 3; ["1.*$"] indicates subscription to audio streams with UserId prefixes starting with 1. If this parameter is left unspecified, all audio streams in the room are subscribed to by default. The number of users in the subscription list should not exceed 32.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubscribeAudioUserIds(array $SubscribeAudioUserIds) Set Subscription audio stream allowlist. It specifies which UserIds' audio streams to subscribe to, for example, ["1", "2", "3"] indicates subscriptions to the audio streams of UserId 1, 2, and 3; ["1.*$"] indicates subscription to audio streams with UserId prefixes starting with 1. If this parameter is left unspecified, all audio streams in the room are subscribed to by default. The number of users in the subscription list should not exceed 32.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getUnSubscribeAudioUserIds() Obtain Subscription audio stream blocklist. It specifies which UserIds' audio streams not to subscribe to, for example, ["1", "2", "3"] indicates that the audio streams of UserId 1, 2, and 3 are not subscribed to; ["1.*$"] indicates that audio streams with UserId prefixes starting with 1 are not subscribed to. If this parameter is left unspecified, all audio streams in the room are subscribed to by default. The number of users in the subscription list should not exceed 32.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnSubscribeAudioUserIds(array $UnSubscribeAudioUserIds) Set Subscription audio stream blocklist. It specifies which UserIds' audio streams not to subscribe to, for example, ["1", "2", "3"] indicates that the audio streams of UserId 1, 2, and 3 are not subscribed to; ["1.*$"] indicates that audio streams with UserId prefixes starting with 1 are not subscribed to. If this parameter is left unspecified, all audio streams in the room are subscribed to by default. The number of users in the subscription list should not exceed 32.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getSubscribeVideoUserIds() Obtain Subscription video stream allowlist. It specifies which UserIds' video streams to subscribe to, for example, ["1", "2", "3"] indicates subscriptions to the video streams of UserId 1, 2, and 3; ["1.*$"] indicates subscription to video streams with UserId prefixes starting with 1. If this parameter is left unspecified, all video streams in the room are subscribed to by default. The number of users in the subscription list should not exceed 32.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSubscribeVideoUserIds(array $SubscribeVideoUserIds) Set Subscription video stream allowlist. It specifies which UserIds' video streams to subscribe to, for example, ["1", "2", "3"] indicates subscriptions to the video streams of UserId 1, 2, and 3; ["1.*$"] indicates subscription to video streams with UserId prefixes starting with 1. If this parameter is left unspecified, all video streams in the room are subscribed to by default. The number of users in the subscription list should not exceed 32.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getUnSubscribeVideoUserIds() Obtain Subscription video stream blocklist. It specifies which UserIds' video streams not to subscribe to, for example, ["1", "2", "3"] indicates that the video streams of UserId 1, 2, and 3 are not subscribed to; ["1.*$"] indicates that video streams with UserId prefixes starting with 1 are not subscribed to. If this parameter is left unspecified, all video streams in the room are subscribed to by default. The number of users in the subscription list should not exceed 32.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setUnSubscribeVideoUserIds(array $UnSubscribeVideoUserIds) Set Subscription video stream blocklist. It specifies which UserIds' video streams not to subscribe to, for example, ["1", "2", "3"] indicates that the video streams of UserId 1, 2, and 3 are not subscribed to; ["1.*$"] indicates that video streams with UserId prefixes starting with 1 are not subscribed to. If this parameter is left unspecified, all video streams in the room are subscribed to by default. The number of users in the subscription list should not exceed 32.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SubscribeModerationUserIds extends AbstractModel
{
    /**
     * @var array Subscription audio stream allowlist. It specifies which UserIds' audio streams to subscribe to, for example, ["1", "2", "3"] indicates subscriptions to the audio streams of UserId 1, 2, and 3; ["1.*$"] indicates subscription to audio streams with UserId prefixes starting with 1. If this parameter is left unspecified, all audio streams in the room are subscribed to by default. The number of users in the subscription list should not exceed 32.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubscribeAudioUserIds;

    /**
     * @var array Subscription audio stream blocklist. It specifies which UserIds' audio streams not to subscribe to, for example, ["1", "2", "3"] indicates that the audio streams of UserId 1, 2, and 3 are not subscribed to; ["1.*$"] indicates that audio streams with UserId prefixes starting with 1 are not subscribed to. If this parameter is left unspecified, all audio streams in the room are subscribed to by default. The number of users in the subscription list should not exceed 32.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UnSubscribeAudioUserIds;

    /**
     * @var array Subscription video stream allowlist. It specifies which UserIds' video streams to subscribe to, for example, ["1", "2", "3"] indicates subscriptions to the video streams of UserId 1, 2, and 3; ["1.*$"] indicates subscription to video streams with UserId prefixes starting with 1. If this parameter is left unspecified, all video streams in the room are subscribed to by default. The number of users in the subscription list should not exceed 32.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SubscribeVideoUserIds;

    /**
     * @var array Subscription video stream blocklist. It specifies which UserIds' video streams not to subscribe to, for example, ["1", "2", "3"] indicates that the video streams of UserId 1, 2, and 3 are not subscribed to; ["1.*$"] indicates that video streams with UserId prefixes starting with 1 are not subscribed to. If this parameter is left unspecified, all video streams in the room are subscribed to by default. The number of users in the subscription list should not exceed 32.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $UnSubscribeVideoUserIds;

    /**
     * @param array $SubscribeAudioUserIds Subscription audio stream allowlist. It specifies which UserIds' audio streams to subscribe to, for example, ["1", "2", "3"] indicates subscriptions to the audio streams of UserId 1, 2, and 3; ["1.*$"] indicates subscription to audio streams with UserId prefixes starting with 1. If this parameter is left unspecified, all audio streams in the room are subscribed to by default. The number of users in the subscription list should not exceed 32.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $UnSubscribeAudioUserIds Subscription audio stream blocklist. It specifies which UserIds' audio streams not to subscribe to, for example, ["1", "2", "3"] indicates that the audio streams of UserId 1, 2, and 3 are not subscribed to; ["1.*$"] indicates that audio streams with UserId prefixes starting with 1 are not subscribed to. If this parameter is left unspecified, all audio streams in the room are subscribed to by default. The number of users in the subscription list should not exceed 32.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $SubscribeVideoUserIds Subscription video stream allowlist. It specifies which UserIds' video streams to subscribe to, for example, ["1", "2", "3"] indicates subscriptions to the video streams of UserId 1, 2, and 3; ["1.*$"] indicates subscription to video streams with UserId prefixes starting with 1. If this parameter is left unspecified, all video streams in the room are subscribed to by default. The number of users in the subscription list should not exceed 32.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $UnSubscribeVideoUserIds Subscription video stream blocklist. It specifies which UserIds' video streams not to subscribe to, for example, ["1", "2", "3"] indicates that the video streams of UserId 1, 2, and 3 are not subscribed to; ["1.*$"] indicates that video streams with UserId prefixes starting with 1 are not subscribed to. If this parameter is left unspecified, all video streams in the room are subscribed to by default. The number of users in the subscription list should not exceed 32.
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
        if (array_key_exists("SubscribeAudioUserIds",$param) and $param["SubscribeAudioUserIds"] !== null) {
            $this->SubscribeAudioUserIds = $param["SubscribeAudioUserIds"];
        }

        if (array_key_exists("UnSubscribeAudioUserIds",$param) and $param["UnSubscribeAudioUserIds"] !== null) {
            $this->UnSubscribeAudioUserIds = $param["UnSubscribeAudioUserIds"];
        }

        if (array_key_exists("SubscribeVideoUserIds",$param) and $param["SubscribeVideoUserIds"] !== null) {
            $this->SubscribeVideoUserIds = $param["SubscribeVideoUserIds"];
        }

        if (array_key_exists("UnSubscribeVideoUserIds",$param) and $param["UnSubscribeVideoUserIds"] !== null) {
            $this->UnSubscribeVideoUserIds = $param["UnSubscribeVideoUserIds"];
        }
    }
}
