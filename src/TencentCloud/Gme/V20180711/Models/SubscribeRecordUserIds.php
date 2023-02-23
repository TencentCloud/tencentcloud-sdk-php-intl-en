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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Allowlist or blocklist for stream subscription.
 *
 * @method array getUnSubscribeUserIds() Obtain Blocklist for audio subscription. For example, `["1", "2", "3"]` means to not subscribe to the audio streams of users 1, 2, and 3. If this parameter is left empty, the audio streams of all users (max 20) in the room will not be subscribed to.
Note: You cannot specify `UnSubscribeAudioUserIds` and `SubscribeAudioUserIds` at the same time.
 * @method void setUnSubscribeUserIds(array $UnSubscribeUserIds) Set Blocklist for audio subscription. For example, `["1", "2", "3"]` means to not subscribe to the audio streams of users 1, 2, and 3. If this parameter is left empty, the audio streams of all users (max 20) in the room will not be subscribed to.
Note: You cannot specify `UnSubscribeAudioUserIds` and `SubscribeAudioUserIds` at the same time.
 * @method array getSubscribeUserIds() Obtain Allowlist for audio subscription. For example, `["1", "2", "3"]` means to subscribe to the audio streams of users 1, 2, and 3. If this parameter is left empty, the audio streams of all users (max 20) in the room will be subscribed to.
Note: You cannot specify `UnSubscribeAudioUserIds` and `SubscribeAudioUserIds` at the same time.
 * @method void setSubscribeUserIds(array $SubscribeUserIds) Set Allowlist for audio subscription. For example, `["1", "2", "3"]` means to subscribe to the audio streams of users 1, 2, and 3. If this parameter is left empty, the audio streams of all users (max 20) in the room will be subscribed to.
Note: You cannot specify `UnSubscribeAudioUserIds` and `SubscribeAudioUserIds` at the same time.
 */
class SubscribeRecordUserIds extends AbstractModel
{
    /**
     * @var array Blocklist for audio subscription. For example, `["1", "2", "3"]` means to not subscribe to the audio streams of users 1, 2, and 3. If this parameter is left empty, the audio streams of all users (max 20) in the room will not be subscribed to.
Note: You cannot specify `UnSubscribeAudioUserIds` and `SubscribeAudioUserIds` at the same time.
     */
    public $UnSubscribeUserIds;

    /**
     * @var array Allowlist for audio subscription. For example, `["1", "2", "3"]` means to subscribe to the audio streams of users 1, 2, and 3. If this parameter is left empty, the audio streams of all users (max 20) in the room will be subscribed to.
Note: You cannot specify `UnSubscribeAudioUserIds` and `SubscribeAudioUserIds` at the same time.
     */
    public $SubscribeUserIds;

    /**
     * @param array $UnSubscribeUserIds Blocklist for audio subscription. For example, `["1", "2", "3"]` means to not subscribe to the audio streams of users 1, 2, and 3. If this parameter is left empty, the audio streams of all users (max 20) in the room will not be subscribed to.
Note: You cannot specify `UnSubscribeAudioUserIds` and `SubscribeAudioUserIds` at the same time.
     * @param array $SubscribeUserIds Allowlist for audio subscription. For example, `["1", "2", "3"]` means to subscribe to the audio streams of users 1, 2, and 3. If this parameter is left empty, the audio streams of all users (max 20) in the room will be subscribed to.
Note: You cannot specify `UnSubscribeAudioUserIds` and `SubscribeAudioUserIds` at the same time.
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
        if (array_key_exists("UnSubscribeUserIds",$param) and $param["UnSubscribeUserIds"] !== null) {
            $this->UnSubscribeUserIds = $param["UnSubscribeUserIds"];
        }

        if (array_key_exists("SubscribeUserIds",$param) and $param["SubscribeUserIds"] !== null) {
            $this->SubscribeUserIds = $param["SubscribeUserIds"];
        }
    }
}
