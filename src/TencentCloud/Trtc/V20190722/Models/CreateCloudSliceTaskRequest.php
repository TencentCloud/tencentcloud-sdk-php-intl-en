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
 * CreateCloudSliceTask request structure.
 *
 * @method integer getSdkAppId() Obtain [SdkAppId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#sdkappid) of TRTC, which is the same as the SdkAppId corresponding to the TRTC room.
 * @method void setSdkAppId(integer $SdkAppId) Set [SdkAppId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#sdkappid) of TRTC, which is the same as the SdkAppId corresponding to the TRTC room.
 * @method string getRoomId() Obtain [RoomId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#roomid) of TRTC, which is the RoomId corresponding to the TRTC room.
 * @method void setRoomId(string $RoomId) Set [RoomId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#roomid) of TRTC, which is the RoomId corresponding to the TRTC room.
 * @method string getUserId() Obtain Chatbot's UserId, which is used to enter the room and initiate a slicing task. [*note] This UserId should not be duplicated with the UserIds of the current anchors or audience members in the room. If multiple slicing tasks are initiated in one room, the chatbot's UserId should also be unique; otherwise, the previous slicing task is interrupted. It is recommended to include the room ID as part of the UserId, ensuring that the chatbot's UserId is unique in the room.
 * @method void setUserId(string $UserId) Set Chatbot's UserId, which is used to enter the room and initiate a slicing task. [*note] This UserId should not be duplicated with the UserIds of the current anchors or audience members in the room. If multiple slicing tasks are initiated in one room, the chatbot's UserId should also be unique; otherwise, the previous slicing task is interrupted. It is recommended to include the room ID as part of the UserId, ensuring that the chatbot's UserId is unique in the room.
 * @method string getUserSig() Obtain Signature verification corresponding to the chatbot's UserId, namely, the UserId and UserSig serve as the login password for the chatbot to enter the room. For specific calculation methods, see TRTC solution for calculating UserSig.
 * @method void setUserSig(string $UserSig) Set Signature verification corresponding to the chatbot's UserId, namely, the UserId and UserSig serve as the login password for the chatbot to enter the room. For specific calculation methods, see TRTC solution for calculating UserSig.
 * @method SliceParams getSliceParams() Obtain Control parameters for cloud slicing.
 * @method void setSliceParams(SliceParams $SliceParams) Set Control parameters for cloud slicing.
 * @method SliceStorageParams getSliceStorageParams() Obtain Parameters for uploading cloud slicing files to the cloud storage.
 * @method void setSliceStorageParams(SliceStorageParams $SliceStorageParams) Set Parameters for uploading cloud slicing files to the cloud storage.
 * @method integer getRoomIdType() Obtain Type of the TRTC room number. [*Note] It should be the same as the type of the RoomId corresponding to the recording room. 0: string type; 1: 32-bit integer type (default value). Example value: 1.
 * @method void setRoomIdType(integer $RoomIdType) Set Type of the TRTC room number. [*Note] It should be the same as the type of the RoomId corresponding to the recording room. 0: string type; 1: 32-bit integer type (default value). Example value: 1.
 * @method integer getResourceExpiredHour() Obtain Validity period for calling the API, which starts upon successful initiation of recording and obtaining the task ID. After the timeout, APIs such as querying, updating, or stopping cannot be called, but the recording task is not stopped. The unit of the parameter is hours, with a default value of 72 hours (3 days). The maximum value is 720 hours (30 days), while the minimum value is 6 hours. For example, if this parameter is not specified, the validity period for calling the querying, updating, and stopping recording APIs is 72 hours upon the successful start of recording. Example value: 24.
 * @method void setResourceExpiredHour(integer $ResourceExpiredHour) Set Validity period for calling the API, which starts upon successful initiation of recording and obtaining the task ID. After the timeout, APIs such as querying, updating, or stopping cannot be called, but the recording task is not stopped. The unit of the parameter is hours, with a default value of 72 hours (3 days). The maximum value is 720 hours (30 days), while the minimum value is 6 hours. For example, if this parameter is not specified, the validity period for calling the querying, updating, and stopping recording APIs is 72 hours upon the successful start of recording. Example value: 24.
 * @method string getPrivateMapKey() Obtain TRTC room permission encryption string, which is required only when advanced permission control is enabled in the TRTC console. After enabling, the TRTC backend service system verifies a "permission ticket" called [PrivateMapKey], which contains an encrypted RoomId and an encrypted "permission bit list". Since the PrivateMapKey includes the RoomId, the specified room cannot be entered if only UserSig is provided and PrivateMapKey is not provided. Example value: eJw1jcEKgkAURX9FZlvY****fL9rfNX4_.
 * @method void setPrivateMapKey(string $PrivateMapKey) Set TRTC room permission encryption string, which is required only when advanced permission control is enabled in the TRTC console. After enabling, the TRTC backend service system verifies a "permission ticket" called [PrivateMapKey], which contains an encrypted RoomId and an encrypted "permission bit list". Since the PrivateMapKey includes the RoomId, the specified room cannot be entered if only UserSig is provided and PrivateMapKey is not provided. Example value: eJw1jcEKgkAURX9FZlvY****fL9rfNX4_.
 */
class CreateCloudSliceTaskRequest extends AbstractModel
{
    /**
     * @var integer [SdkAppId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#sdkappid) of TRTC, which is the same as the SdkAppId corresponding to the TRTC room.
     */
    public $SdkAppId;

    /**
     * @var string [RoomId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#roomid) of TRTC, which is the RoomId corresponding to the TRTC room.
     */
    public $RoomId;

    /**
     * @var string Chatbot's UserId, which is used to enter the room and initiate a slicing task. [*note] This UserId should not be duplicated with the UserIds of the current anchors or audience members in the room. If multiple slicing tasks are initiated in one room, the chatbot's UserId should also be unique; otherwise, the previous slicing task is interrupted. It is recommended to include the room ID as part of the UserId, ensuring that the chatbot's UserId is unique in the room.
     */
    public $UserId;

    /**
     * @var string Signature verification corresponding to the chatbot's UserId, namely, the UserId and UserSig serve as the login password for the chatbot to enter the room. For specific calculation methods, see TRTC solution for calculating UserSig.
     */
    public $UserSig;

    /**
     * @var SliceParams Control parameters for cloud slicing.
     */
    public $SliceParams;

    /**
     * @var SliceStorageParams Parameters for uploading cloud slicing files to the cloud storage.
     */
    public $SliceStorageParams;

    /**
     * @var integer Type of the TRTC room number. [*Note] It should be the same as the type of the RoomId corresponding to the recording room. 0: string type; 1: 32-bit integer type (default value). Example value: 1.
     */
    public $RoomIdType;

    /**
     * @var integer Validity period for calling the API, which starts upon successful initiation of recording and obtaining the task ID. After the timeout, APIs such as querying, updating, or stopping cannot be called, but the recording task is not stopped. The unit of the parameter is hours, with a default value of 72 hours (3 days). The maximum value is 720 hours (30 days), while the minimum value is 6 hours. For example, if this parameter is not specified, the validity period for calling the querying, updating, and stopping recording APIs is 72 hours upon the successful start of recording. Example value: 24.
     */
    public $ResourceExpiredHour;

    /**
     * @var string TRTC room permission encryption string, which is required only when advanced permission control is enabled in the TRTC console. After enabling, the TRTC backend service system verifies a "permission ticket" called [PrivateMapKey], which contains an encrypted RoomId and an encrypted "permission bit list". Since the PrivateMapKey includes the RoomId, the specified room cannot be entered if only UserSig is provided and PrivateMapKey is not provided. Example value: eJw1jcEKgkAURX9FZlvY****fL9rfNX4_.
     */
    public $PrivateMapKey;

    /**
     * @param integer $SdkAppId [SdkAppId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#sdkappid) of TRTC, which is the same as the SdkAppId corresponding to the TRTC room.
     * @param string $RoomId [RoomId](https://www.tencentcloud.com/document/product/647/46351?from_cn_redirect=1#roomid) of TRTC, which is the RoomId corresponding to the TRTC room.
     * @param string $UserId Chatbot's UserId, which is used to enter the room and initiate a slicing task. [*note] This UserId should not be duplicated with the UserIds of the current anchors or audience members in the room. If multiple slicing tasks are initiated in one room, the chatbot's UserId should also be unique; otherwise, the previous slicing task is interrupted. It is recommended to include the room ID as part of the UserId, ensuring that the chatbot's UserId is unique in the room.
     * @param string $UserSig Signature verification corresponding to the chatbot's UserId, namely, the UserId and UserSig serve as the login password for the chatbot to enter the room. For specific calculation methods, see TRTC solution for calculating UserSig.
     * @param SliceParams $SliceParams Control parameters for cloud slicing.
     * @param SliceStorageParams $SliceStorageParams Parameters for uploading cloud slicing files to the cloud storage.
     * @param integer $RoomIdType Type of the TRTC room number. [*Note] It should be the same as the type of the RoomId corresponding to the recording room. 0: string type; 1: 32-bit integer type (default value). Example value: 1.
     * @param integer $ResourceExpiredHour Validity period for calling the API, which starts upon successful initiation of recording and obtaining the task ID. After the timeout, APIs such as querying, updating, or stopping cannot be called, but the recording task is not stopped. The unit of the parameter is hours, with a default value of 72 hours (3 days). The maximum value is 720 hours (30 days), while the minimum value is 6 hours. For example, if this parameter is not specified, the validity period for calling the querying, updating, and stopping recording APIs is 72 hours upon the successful start of recording. Example value: 24.
     * @param string $PrivateMapKey TRTC room permission encryption string, which is required only when advanced permission control is enabled in the TRTC console. After enabling, the TRTC backend service system verifies a "permission ticket" called [PrivateMapKey], which contains an encrypted RoomId and an encrypted "permission bit list". Since the PrivateMapKey includes the RoomId, the specified room cannot be entered if only UserSig is provided and PrivateMapKey is not provided. Example value: eJw1jcEKgkAURX9FZlvY****fL9rfNX4_.
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

        if (array_key_exists("SliceParams",$param) and $param["SliceParams"] !== null) {
            $this->SliceParams = new SliceParams();
            $this->SliceParams->deserialize($param["SliceParams"]);
        }

        if (array_key_exists("SliceStorageParams",$param) and $param["SliceStorageParams"] !== null) {
            $this->SliceStorageParams = new SliceStorageParams();
            $this->SliceStorageParams->deserialize($param["SliceStorageParams"]);
        }

        if (array_key_exists("RoomIdType",$param) and $param["RoomIdType"] !== null) {
            $this->RoomIdType = $param["RoomIdType"];
        }

        if (array_key_exists("ResourceExpiredHour",$param) and $param["ResourceExpiredHour"] !== null) {
            $this->ResourceExpiredHour = $param["ResourceExpiredHour"];
        }

        if (array_key_exists("PrivateMapKey",$param) and $param["PrivateMapKey"] !== null) {
            $this->PrivateMapKey = $param["PrivateMapKey"];
        }
    }
}
