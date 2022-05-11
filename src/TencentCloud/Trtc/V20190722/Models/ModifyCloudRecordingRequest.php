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
 * ModifyCloudRecording request structure.
 *
 * @method integer getSdkAppId() Obtain The `SDKAppID` of the room whose streams are recorded.
 * @method void setSdkAppId(integer $SdkAppId) Set The `SDKAppID` of the room whose streams are recorded.
 * @method string getTaskId() Obtain The unique ID of the recording task, which is returned after recording starts successfully.
 * @method void setTaskId(string $TaskId) Set The unique ID of the recording task, which is returned after recording starts successfully.
 * @method MixLayoutParams getMixLayoutParams() Obtain The new stream mixing layout to use.
 * @method void setMixLayoutParams(MixLayoutParams $MixLayoutParams) Set The new stream mixing layout to use.
 * @method SubscribeStreamUserIds getSubscribeStreamUserIds() Obtain The allowlist/blocklist for stream subscription.
 * @method void setSubscribeStreamUserIds(SubscribeStreamUserIds $SubscribeStreamUserIds) Set The allowlist/blocklist for stream subscription.
 */
class ModifyCloudRecordingRequest extends AbstractModel
{
    /**
     * @var integer The `SDKAppID` of the room whose streams are recorded.
     */
    public $SdkAppId;

    /**
     * @var string The unique ID of the recording task, which is returned after recording starts successfully.
     */
    public $TaskId;

    /**
     * @var MixLayoutParams The new stream mixing layout to use.
     */
    public $MixLayoutParams;

    /**
     * @var SubscribeStreamUserIds The allowlist/blocklist for stream subscription.
     */
    public $SubscribeStreamUserIds;

    /**
     * @param integer $SdkAppId The `SDKAppID` of the room whose streams are recorded.
     * @param string $TaskId The unique ID of the recording task, which is returned after recording starts successfully.
     * @param MixLayoutParams $MixLayoutParams The new stream mixing layout to use.
     * @param SubscribeStreamUserIds $SubscribeStreamUserIds The allowlist/blocklist for stream subscription.
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("MixLayoutParams",$param) and $param["MixLayoutParams"] !== null) {
            $this->MixLayoutParams = new MixLayoutParams();
            $this->MixLayoutParams->deserialize($param["MixLayoutParams"]);
        }

        if (array_key_exists("SubscribeStreamUserIds",$param) and $param["SubscribeStreamUserIds"] !== null) {
            $this->SubscribeStreamUserIds = new SubscribeStreamUserIds();
            $this->SubscribeStreamUserIds->deserialize($param["SubscribeStreamUserIds"]);
        }
    }
}
