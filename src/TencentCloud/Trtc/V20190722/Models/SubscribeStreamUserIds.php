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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * The allowlist/blocklist for stream subscription. You cannot set both an allowlist and blocklist for audio or video subscription. Up to 25 streams can be subscribed to at the same time. In the mixed-stream recording mode, up to 24 videos can be displayed.
 *
 * @method array getSubscribeAudioUserIds() Obtain The allowlist for audio subscription. For example, `["1", "2", "3"]` means to subscribe to the audios of users 1, 2, and 3. If this parameter is left empty, the audios of all anchors (max 32) in the room will be received.
 * @method void setSubscribeAudioUserIds(array $SubscribeAudioUserIds) Set The allowlist for audio subscription. For example, `["1", "2", "3"]` means to subscribe to the audios of users 1, 2, and 3. If this parameter is left empty, the audios of all anchors (max 32) in the room will be received.
 * @method array getUnSubscribeAudioUserIds() Obtain The blocklist for audio subscription. For example, `["1", "2", "3"]` means to not subscribe to the audios of users 1, 2, and 3. If this parameter is left empty, the audios of all anchors (max 32) in the room will be received.
 * @method void setUnSubscribeAudioUserIds(array $UnSubscribeAudioUserIds) Set The blocklist for audio subscription. For example, `["1", "2", "3"]` means to not subscribe to the audios of users 1, 2, and 3. If this parameter is left empty, the audios of all anchors (max 32) in the room will be received.
 * @method array getSubscribeVideoUserIds() Obtain The allowlist for video subscription. For example, `["1", "2", "3"]` means to subscribe to the videos of users 1, 2, and 3. If this parameter is left empty, the videos of all anchors (max 32) in the room will be received.
 * @method void setSubscribeVideoUserIds(array $SubscribeVideoUserIds) Set The allowlist for video subscription. For example, `["1", "2", "3"]` means to subscribe to the videos of users 1, 2, and 3. If this parameter is left empty, the videos of all anchors (max 32) in the room will be received.
 * @method array getUnSubscribeVideoUserIds() Obtain The blocklist for video subscription. For example, `["1", "2", "3"]` means to not subscribe to the videos of users 1, 2, and 3. If this parameter is left empty, the videos of all anchors (max 32) in the room will be received.
 * @method void setUnSubscribeVideoUserIds(array $UnSubscribeVideoUserIds) Set The blocklist for video subscription. For example, `["1", "2", "3"]` means to not subscribe to the videos of users 1, 2, and 3. If this parameter is left empty, the videos of all anchors (max 32) in the room will be received.
 */
class SubscribeStreamUserIds extends AbstractModel
{
    /**
     * @var array The allowlist for audio subscription. For example, `["1", "2", "3"]` means to subscribe to the audios of users 1, 2, and 3. If this parameter is left empty, the audios of all anchors (max 32) in the room will be received.
     */
    public $SubscribeAudioUserIds;

    /**
     * @var array The blocklist for audio subscription. For example, `["1", "2", "3"]` means to not subscribe to the audios of users 1, 2, and 3. If this parameter is left empty, the audios of all anchors (max 32) in the room will be received.
     */
    public $UnSubscribeAudioUserIds;

    /**
     * @var array The allowlist for video subscription. For example, `["1", "2", "3"]` means to subscribe to the videos of users 1, 2, and 3. If this parameter is left empty, the videos of all anchors (max 32) in the room will be received.
     */
    public $SubscribeVideoUserIds;

    /**
     * @var array The blocklist for video subscription. For example, `["1", "2", "3"]` means to not subscribe to the videos of users 1, 2, and 3. If this parameter is left empty, the videos of all anchors (max 32) in the room will be received.
     */
    public $UnSubscribeVideoUserIds;

    /**
     * @param array $SubscribeAudioUserIds The allowlist for audio subscription. For example, `["1", "2", "3"]` means to subscribe to the audios of users 1, 2, and 3. If this parameter is left empty, the audios of all anchors (max 32) in the room will be received.
     * @param array $UnSubscribeAudioUserIds The blocklist for audio subscription. For example, `["1", "2", "3"]` means to not subscribe to the audios of users 1, 2, and 3. If this parameter is left empty, the audios of all anchors (max 32) in the room will be received.
     * @param array $SubscribeVideoUserIds The allowlist for video subscription. For example, `["1", "2", "3"]` means to subscribe to the videos of users 1, 2, and 3. If this parameter is left empty, the videos of all anchors (max 32) in the room will be received.
     * @param array $UnSubscribeVideoUserIds The blocklist for video subscription. For example, `["1", "2", "3"]` means to not subscribe to the videos of users 1, 2, and 3. If this parameter is left empty, the videos of all anchors (max 32) in the room will be received.
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
