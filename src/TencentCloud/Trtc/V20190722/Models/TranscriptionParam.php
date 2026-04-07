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
 * Parameters for the transcription service to join TRTC room.
 *
 * @method string getUserId() Obtain [UserId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#userid) used by the transcription service in the TRTC room. Note that this userId cannot duplicate those already used by other TRTC or transcription services etc. You may use the room ID as part of the user identification.
 * @method void setUserId(string $UserId) Set [UserId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#userid) used by the transcription service in the TRTC room. Note that this userId cannot duplicate those already used by other TRTC or transcription services etc. You may use the room ID as part of the user identification.
 * @method string getUserSig() Obtain User signature for the transcription service to join a TRTC room. The signature verification corresponding to the current UserId serves as the login password. For specific details, see TRTC solution for calculating [UserSig](https://www.tencentcloud.com/document/product/647/45910?from_cn_redirect=1#UserSig).
 * @method void setUserSig(string $UserSig) Set User signature for the transcription service to join a TRTC room. The signature verification corresponding to the current UserId serves as the login password. For specific details, see TRTC solution for calculating [UserSig](https://www.tencentcloud.com/document/product/647/45910?from_cn_redirect=1#UserSig).
 * @method array getSubscribeList() Obtain Allowlist of user IDs whose audio will be transcribed.
Specifies which anchor audio streams to transcribe when the service starts. If left empty or omitted, audio from all anchors will be transcribed. If one or more values are provided, only audio from the specified anchors will be transcribed.

> Note: If a user ID appears in both the `SubscribeList` and `UnSubscribeList`, the `UnSubscribeList` takes precedence.
 * @method void setSubscribeList(array $SubscribeList) Set Allowlist of user IDs whose audio will be transcribed.
Specifies which anchor audio streams to transcribe when the service starts. If left empty or omitted, audio from all anchors will be transcribed. If one or more values are provided, only audio from the specified anchors will be transcribed.

> Note: If a user ID appears in both the `SubscribeList` and `UnSubscribeList`, the `UnSubscribeList` takes precedence.
 * @method array getUnSubscribeList() Obtain Blocklist of user IDs whose audio will be excluded from transcription. 
Leave empty or omit to disable the blocklist. Provide specific values to exclude the specified anchors' audio from transcription.

 * @method void setUnSubscribeList(array $UnSubscribeList) Set Blocklist of user IDs whose audio will be excluded from transcription. 
Leave empty or omit to disable the blocklist. Provide specific values to exclude the specified anchors' audio from transcription.

 * @method integer getMaxIdleTime() Obtain Maximum idle duration before the transcription task is automatically stopped, in seconds.
If all anchors being transcribed continuously leave the TRTC room or switch to the audience role for longer than this value, the transcription task stops automatically.
- Default: 30
- Range: 5 - 86400 (24 hours)
 * @method void setMaxIdleTime(integer $MaxIdleTime) Set Maximum idle duration before the transcription task is automatically stopped, in seconds.
If all anchors being transcribed continuously leave the TRTC room or switch to the audience role for longer than this value, the transcription task stops automatically.
- Default: 30
- Range: 5 - 86400 (24 hours)
 * @method integer getSendCustomMode() Obtain Controls whether the custom data channel is enabled. Accepted values: 0 (disabled) or 1 (enabled). Defaults to 0 if omitted.
 * @method void setSendCustomMode(integer $SendCustomMode) Set Controls whether the custom data channel is enabled. Accepted values: 0 (disabled) or 1 (enabled). Defaults to 0 if omitted.
 */
class TranscriptionParam extends AbstractModel
{
    /**
     * @var string [UserId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#userid) used by the transcription service in the TRTC room. Note that this userId cannot duplicate those already used by other TRTC or transcription services etc. You may use the room ID as part of the user identification.
     */
    public $UserId;

    /**
     * @var string User signature for the transcription service to join a TRTC room. The signature verification corresponding to the current UserId serves as the login password. For specific details, see TRTC solution for calculating [UserSig](https://www.tencentcloud.com/document/product/647/45910?from_cn_redirect=1#UserSig).
     */
    public $UserSig;

    /**
     * @var array Allowlist of user IDs whose audio will be transcribed.
Specifies which anchor audio streams to transcribe when the service starts. If left empty or omitted, audio from all anchors will be transcribed. If one or more values are provided, only audio from the specified anchors will be transcribed.

> Note: If a user ID appears in both the `SubscribeList` and `UnSubscribeList`, the `UnSubscribeList` takes precedence.
     */
    public $SubscribeList;

    /**
     * @var array Blocklist of user IDs whose audio will be excluded from transcription. 
Leave empty or omit to disable the blocklist. Provide specific values to exclude the specified anchors' audio from transcription.

     */
    public $UnSubscribeList;

    /**
     * @var integer Maximum idle duration before the transcription task is automatically stopped, in seconds.
If all anchors being transcribed continuously leave the TRTC room or switch to the audience role for longer than this value, the transcription task stops automatically.
- Default: 30
- Range: 5 - 86400 (24 hours)
     */
    public $MaxIdleTime;

    /**
     * @var integer Controls whether the custom data channel is enabled. Accepted values: 0 (disabled) or 1 (enabled). Defaults to 0 if omitted.
     */
    public $SendCustomMode;

    /**
     * @param string $UserId [UserId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#userid) used by the transcription service in the TRTC room. Note that this userId cannot duplicate those already used by other TRTC or transcription services etc. You may use the room ID as part of the user identification.
     * @param string $UserSig User signature for the transcription service to join a TRTC room. The signature verification corresponding to the current UserId serves as the login password. For specific details, see TRTC solution for calculating [UserSig](https://www.tencentcloud.com/document/product/647/45910?from_cn_redirect=1#UserSig).
     * @param array $SubscribeList Allowlist of user IDs whose audio will be transcribed.
Specifies which anchor audio streams to transcribe when the service starts. If left empty or omitted, audio from all anchors will be transcribed. If one or more values are provided, only audio from the specified anchors will be transcribed.

> Note: If a user ID appears in both the `SubscribeList` and `UnSubscribeList`, the `UnSubscribeList` takes precedence.
     * @param array $UnSubscribeList Blocklist of user IDs whose audio will be excluded from transcription. 
Leave empty or omit to disable the blocklist. Provide specific values to exclude the specified anchors' audio from transcription.

     * @param integer $MaxIdleTime Maximum idle duration before the transcription task is automatically stopped, in seconds.
If all anchors being transcribed continuously leave the TRTC room or switch to the audience role for longer than this value, the transcription task stops automatically.
- Default: 30
- Range: 5 - 86400 (24 hours)
     * @param integer $SendCustomMode Controls whether the custom data channel is enabled. Accepted values: 0 (disabled) or 1 (enabled). Defaults to 0 if omitted.
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserSig",$param) and $param["UserSig"] !== null) {
            $this->UserSig = $param["UserSig"];
        }

        if (array_key_exists("SubscribeList",$param) and $param["SubscribeList"] !== null) {
            $this->SubscribeList = [];
            foreach ($param["SubscribeList"] as $key => $value){
                $obj = new TranscriptionUserInfoParams();
                $obj->deserialize($value);
                array_push($this->SubscribeList, $obj);
            }
        }

        if (array_key_exists("UnSubscribeList",$param) and $param["UnSubscribeList"] !== null) {
            $this->UnSubscribeList = [];
            foreach ($param["UnSubscribeList"] as $key => $value){
                $obj = new TranscriptionUserInfoParams();
                $obj->deserialize($value);
                array_push($this->UnSubscribeList, $obj);
            }
        }

        if (array_key_exists("MaxIdleTime",$param) and $param["MaxIdleTime"] !== null) {
            $this->MaxIdleTime = $param["MaxIdleTime"];
        }

        if (array_key_exists("SendCustomMode",$param) and $param["SendCustomMode"] !== null) {
            $this->SendCustomMode = $param["SendCustomMode"];
        }
    }
}
