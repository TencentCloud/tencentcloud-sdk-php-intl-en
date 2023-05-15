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
 * CreateCloudRecording request structure.
 *
 * @method integer getSdkAppId() Obtain The [SDKAppID](https://intl.cloud.tencent.com/document/product/647/37714) of the TRTC room whose streams are recorded.
 * @method void setSdkAppId(integer $SdkAppId) Set The [SDKAppID](https://intl.cloud.tencent.com/document/product/647/37714) of the TRTC room whose streams are recorded.
 * @method string getRoomId() Obtain The [room ID](https://intl.cloud.tencent.com/document/product/647/37714) of the TRTC room whose streams are recorded.
 * @method void setRoomId(string $RoomId) Set The [room ID](https://intl.cloud.tencent.com/document/product/647/37714) of the TRTC room whose streams are recorded.
 * @method string getUserId() Obtain The [user ID](https://www.tencentcloud.com/document/product/647/37714#userid) of the recording robot in the TRTC room, which cannot be identical to the user IDs of anchors in the room or other recording robots. To distinguish this user ID from others, we recommend you include the room ID in the user ID.
 * @method void setUserId(string $UserId) Set The [user ID](https://www.tencentcloud.com/document/product/647/37714#userid) of the recording robot in the TRTC room, which cannot be identical to the user IDs of anchors in the room or other recording robots. To distinguish this user ID from others, we recommend you include the room ID in the user ID.
 * @method string getUserSig() Obtain The signature (similar to a login password) required for the recording robot to enter the room. Each user ID corresponds to a signature. For information on how to calculate the signature, see [What is UserSig?](https://intl.cloud.tencent.com/document/product/647/38104).
 * @method void setUserSig(string $UserSig) Set The signature (similar to a login password) required for the recording robot to enter the room. Each user ID corresponds to a signature. For information on how to calculate the signature, see [What is UserSig?](https://intl.cloud.tencent.com/document/product/647/38104).
 * @method RecordParams getRecordParams() Obtain The on-cloud recording parameters.
 * @method void setRecordParams(RecordParams $RecordParams) Set The on-cloud recording parameters.
 * @method StorageParams getStorageParams() Obtain The storage information of the recording file. Currently, you can save recording files to Tencent Cloud VOD or COS.
 * @method void setStorageParams(StorageParams $StorageParams) Set The storage information of the recording file. Currently, you can save recording files to Tencent Cloud VOD or COS.
 * @method integer getRoomIdType() Obtain The type of the TRTC room ID, which must be the same as the ID type of the room whose streams are recorded.
0: String
1: 32-bit integer (default)
 * @method void setRoomIdType(integer $RoomIdType) Set The type of the TRTC room ID, which must be the same as the ID type of the room whose streams are recorded.
0: String
1: 32-bit integer (default)
 * @method MixTranscodeParams getMixTranscodeParams() Obtain The stream mixing parameters, which are valid if the mixed-stream recording mode is used.
 * @method void setMixTranscodeParams(MixTranscodeParams $MixTranscodeParams) Set The stream mixing parameters, which are valid if the mixed-stream recording mode is used.
 * @method MixLayoutParams getMixLayoutParams() Obtain The layout parameters, which are valid if the mixed-stream recording mode is used.
 * @method void setMixLayoutParams(MixLayoutParams $MixLayoutParams) Set The layout parameters, which are valid if the mixed-stream recording mode is used.
 * @method integer getResourceExpiredHour() Obtain The amount of time (in hours) during which API requests can be made after recording starts. Calculation starts when a recording task is started (when the recording task ID is returned). Once the period elapses, the query, modification, and stop recording APIs can no longer be called, but the recording task will continue. The default value is `72` (three days), and the maximum and minimum values allowed are `720` (30 days) and `6` respectively. If you do not set this parameter, the query, modification, and stop recording APIs can be called within 72 hours after recording starts.
 * @method void setResourceExpiredHour(integer $ResourceExpiredHour) Set The amount of time (in hours) during which API requests can be made after recording starts. Calculation starts when a recording task is started (when the recording task ID is returned). Once the period elapses, the query, modification, and stop recording APIs can no longer be called, but the recording task will continue. The default value is `72` (three days), and the maximum and minimum values allowed are `720` (30 days) and `6` respectively. If you do not set this parameter, the query, modification, and stop recording APIs can be called within 72 hours after recording starts.
 * @method string getPrivateMapKey() Obtain The permission ticket for a TRTC room. This parameter is required if advanced permission control is enabled in the console, in which case the TRTC backend will verify users’ [PrivateMapKey](https://intl.cloud.tencent.com/document/product/647/32240?from_cn_redirect=1), which include an encrypted room ID and permission bit list. A user providing only `UserSig` and not `PrivateMapKey` will be unable to enter the room.
 * @method void setPrivateMapKey(string $PrivateMapKey) Set The permission ticket for a TRTC room. This parameter is required if advanced permission control is enabled in the console, in which case the TRTC backend will verify users’ [PrivateMapKey](https://intl.cloud.tencent.com/document/product/647/32240?from_cn_redirect=1), which include an encrypted room ID and permission bit list. A user providing only `UserSig` and not `PrivateMapKey` will be unable to enter the room.
 */
class CreateCloudRecordingRequest extends AbstractModel
{
    /**
     * @var integer The [SDKAppID](https://intl.cloud.tencent.com/document/product/647/37714) of the TRTC room whose streams are recorded.
     */
    public $SdkAppId;

    /**
     * @var string The [room ID](https://intl.cloud.tencent.com/document/product/647/37714) of the TRTC room whose streams are recorded.
     */
    public $RoomId;

    /**
     * @var string The [user ID](https://www.tencentcloud.com/document/product/647/37714#userid) of the recording robot in the TRTC room, which cannot be identical to the user IDs of anchors in the room or other recording robots. To distinguish this user ID from others, we recommend you include the room ID in the user ID.
     */
    public $UserId;

    /**
     * @var string The signature (similar to a login password) required for the recording robot to enter the room. Each user ID corresponds to a signature. For information on how to calculate the signature, see [What is UserSig?](https://intl.cloud.tencent.com/document/product/647/38104).
     */
    public $UserSig;

    /**
     * @var RecordParams The on-cloud recording parameters.
     */
    public $RecordParams;

    /**
     * @var StorageParams The storage information of the recording file. Currently, you can save recording files to Tencent Cloud VOD or COS.
     */
    public $StorageParams;

    /**
     * @var integer The type of the TRTC room ID, which must be the same as the ID type of the room whose streams are recorded.
0: String
1: 32-bit integer (default)
     */
    public $RoomIdType;

    /**
     * @var MixTranscodeParams The stream mixing parameters, which are valid if the mixed-stream recording mode is used.
     */
    public $MixTranscodeParams;

    /**
     * @var MixLayoutParams The layout parameters, which are valid if the mixed-stream recording mode is used.
     */
    public $MixLayoutParams;

    /**
     * @var integer The amount of time (in hours) during which API requests can be made after recording starts. Calculation starts when a recording task is started (when the recording task ID is returned). Once the period elapses, the query, modification, and stop recording APIs can no longer be called, but the recording task will continue. The default value is `72` (three days), and the maximum and minimum values allowed are `720` (30 days) and `6` respectively. If you do not set this parameter, the query, modification, and stop recording APIs can be called within 72 hours after recording starts.
     */
    public $ResourceExpiredHour;

    /**
     * @var string The permission ticket for a TRTC room. This parameter is required if advanced permission control is enabled in the console, in which case the TRTC backend will verify users’ [PrivateMapKey](https://intl.cloud.tencent.com/document/product/647/32240?from_cn_redirect=1), which include an encrypted room ID and permission bit list. A user providing only `UserSig` and not `PrivateMapKey` will be unable to enter the room.
     */
    public $PrivateMapKey;

    /**
     * @param integer $SdkAppId The [SDKAppID](https://intl.cloud.tencent.com/document/product/647/37714) of the TRTC room whose streams are recorded.
     * @param string $RoomId The [room ID](https://intl.cloud.tencent.com/document/product/647/37714) of the TRTC room whose streams are recorded.
     * @param string $UserId The [user ID](https://www.tencentcloud.com/document/product/647/37714#userid) of the recording robot in the TRTC room, which cannot be identical to the user IDs of anchors in the room or other recording robots. To distinguish this user ID from others, we recommend you include the room ID in the user ID.
     * @param string $UserSig The signature (similar to a login password) required for the recording robot to enter the room. Each user ID corresponds to a signature. For information on how to calculate the signature, see [What is UserSig?](https://intl.cloud.tencent.com/document/product/647/38104).
     * @param RecordParams $RecordParams The on-cloud recording parameters.
     * @param StorageParams $StorageParams The storage information of the recording file. Currently, you can save recording files to Tencent Cloud VOD or COS.
     * @param integer $RoomIdType The type of the TRTC room ID, which must be the same as the ID type of the room whose streams are recorded.
0: String
1: 32-bit integer (default)
     * @param MixTranscodeParams $MixTranscodeParams The stream mixing parameters, which are valid if the mixed-stream recording mode is used.
     * @param MixLayoutParams $MixLayoutParams The layout parameters, which are valid if the mixed-stream recording mode is used.
     * @param integer $ResourceExpiredHour The amount of time (in hours) during which API requests can be made after recording starts. Calculation starts when a recording task is started (when the recording task ID is returned). Once the period elapses, the query, modification, and stop recording APIs can no longer be called, but the recording task will continue. The default value is `72` (three days), and the maximum and minimum values allowed are `720` (30 days) and `6` respectively. If you do not set this parameter, the query, modification, and stop recording APIs can be called within 72 hours after recording starts.
     * @param string $PrivateMapKey The permission ticket for a TRTC room. This parameter is required if advanced permission control is enabled in the console, in which case the TRTC backend will verify users’ [PrivateMapKey](https://intl.cloud.tencent.com/document/product/647/32240?from_cn_redirect=1), which include an encrypted room ID and permission bit list. A user providing only `UserSig` and not `PrivateMapKey` will be unable to enter the room.
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

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserSig",$param) and $param["UserSig"] !== null) {
            $this->UserSig = $param["UserSig"];
        }

        if (array_key_exists("RecordParams",$param) and $param["RecordParams"] !== null) {
            $this->RecordParams = new RecordParams();
            $this->RecordParams->deserialize($param["RecordParams"]);
        }

        if (array_key_exists("StorageParams",$param) and $param["StorageParams"] !== null) {
            $this->StorageParams = new StorageParams();
            $this->StorageParams->deserialize($param["StorageParams"]);
        }

        if (array_key_exists("RoomIdType",$param) and $param["RoomIdType"] !== null) {
            $this->RoomIdType = $param["RoomIdType"];
        }

        if (array_key_exists("MixTranscodeParams",$param) and $param["MixTranscodeParams"] !== null) {
            $this->MixTranscodeParams = new MixTranscodeParams();
            $this->MixTranscodeParams->deserialize($param["MixTranscodeParams"]);
        }

        if (array_key_exists("MixLayoutParams",$param) and $param["MixLayoutParams"] !== null) {
            $this->MixLayoutParams = new MixLayoutParams();
            $this->MixLayoutParams->deserialize($param["MixLayoutParams"]);
        }

        if (array_key_exists("ResourceExpiredHour",$param) and $param["ResourceExpiredHour"] !== null) {
            $this->ResourceExpiredHour = $param["ResourceExpiredHour"];
        }

        if (array_key_exists("PrivateMapKey",$param) and $param["PrivateMapKey"] !== null) {
            $this->PrivateMapKey = $param["PrivateMapKey"];
        }
    }
}
