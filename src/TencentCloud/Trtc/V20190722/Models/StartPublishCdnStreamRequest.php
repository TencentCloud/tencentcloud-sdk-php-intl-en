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
 * StartPublishCdnStream request structure.
 *
 * @method integer getSdkAppId() Obtain [SdkAppId](https://www.tencentcloud.comom/document/product/647/46351?from_cn_redirect=1#SdkAppId) of TRTC, which is the same as the SdkAppId corresponding to the relayed room.
 * @method void setSdkAppId(integer $SdkAppId) Set [SdkAppId](https://www.tencentcloud.comom/document/product/647/46351?from_cn_redirect=1#SdkAppId) of TRTC, which is the same as the SdkAppId corresponding to the relayed room.
 * @method string getRoomId() Obtain Main room information RoomId, the RoomId corresponding to the TRTC room for relay.
 * @method void setRoomId(string $RoomId) Set Main room information RoomId, the RoomId corresponding to the TRTC room for relay.
 * @method integer getRoomIdType() Obtain Main room information RoomType must be the same as the RoomId type of the relayed room. 0 indicates integer type room id, and 1 indicates string room number.
 * @method void setRoomIdType(integer $RoomIdType) Set Main room information RoomType must be the same as the RoomId type of the relayed room. 0 indicates integer type room id, and 1 indicates string room number.
 * @method AgentParams getAgentParams() Obtain Relay service bot parameters for joining TRTC room.
 * @method void setAgentParams(AgentParams $AgentParams) Set Relay service bot parameters for joining TRTC room.
 * @method integer getWithTranscoding() Obtain Whether to transcode. 0 indicates no need to transcode, 1 indicates requirement to transcode. whether to charge transcoding fee is determined by the WithTranscoding parameter. WithTranscoding set to 0 means bypass forwarding and no transcoding costs will be incurred. WithTranscoding set to 1 means mixed-stream relay and transcoding costs will be charged.
Note: transcoding is required for stream mixing, and this parameter must be set to 1.
 * @method void setWithTranscoding(integer $WithTranscoding) Set Whether to transcode. 0 indicates no need to transcode, 1 indicates requirement to transcode. whether to charge transcoding fee is determined by the WithTranscoding parameter. WithTranscoding set to 0 means bypass forwarding and no transcoding costs will be incurred. WithTranscoding set to 1 means mixed-stream relay and transcoding costs will be charged.
Note: transcoding is required for stream mixing, and this parameter must be set to 1.
 * @method McuAudioParams getAudioParams() Obtain Audio encoding parameters for stream retransmission. since audio must be transcoded (no transcoding costs will be incurred), this field is required when starting a task.
 * @method void setAudioParams(McuAudioParams $AudioParams) Set Audio encoding parameters for stream retransmission. since audio must be transcoded (no transcoding costs will be incurred), this field is required when starting a task.
 * @method McuVideoParams getVideoParams() Obtain Video encoding parameters for the relay stream. leave blank for audio-only relay.
 * @method void setVideoParams(McuVideoParams $VideoParams) Set Video encoding parameters for the relay stream. leave blank for audio-only relay.
 * @method SingleSubscribeParams getSingleSubscribeParams() Obtain The user uplink parameters require single stream bypass forwarding. WithTranscoding needs to be set to 0 for single stream bypass forwarding.
 * @method void setSingleSubscribeParams(SingleSubscribeParams $SingleSubscribeParams) Set The user uplink parameters require single stream bypass forwarding. WithTranscoding needs to be set to 0 for single stream bypass forwarding.
 * @method array getPublishCdnParams() Obtain The CDN parameters for relay push support up to 10 push urls for a task. there must be one pushback room parameter.
 * @method void setPublishCdnParams(array $PublishCdnParams) Set The CDN parameters for relay push support up to 10 push urls for a task. there must be one pushback room parameter.
 * @method McuSeiParams getSeiParams() Obtain Stream mixing SEI parameter.
 * @method void setSeiParams(McuSeiParams $SeiParams) Set Stream mixing SEI parameter.
 * @method array getFeedBackRoomParams() Obtain Push back room information. a task supports up to 10 push rooms, and there must be one forward CDN parameter. note: use SDK version 10.4 or higher to push room. if you need assistance, contact tencent cloud technical support.
 * @method void setFeedBackRoomParams(array $FeedBackRoomParams) Set Push back room information. a task supports up to 10 push rooms, and there must be one forward CDN parameter. note: use SDK version 10.4 or higher to push room. if you need assistance, contact tencent cloud technical support.
 * @method McuRecordParams getRecordParams() Obtain Relay recording parameters. refer to the reference document (https://www.tencentcloud.comom/document/product/647/111748?from_cn_redirect=1).
 * @method void setRecordParams(McuRecordParams $RecordParams) Set Relay recording parameters. refer to the reference document (https://www.tencentcloud.comom/document/product/647/111748?from_cn_redirect=1).
 */
class StartPublishCdnStreamRequest extends AbstractModel
{
    /**
     * @var integer [SdkAppId](https://www.tencentcloud.comom/document/product/647/46351?from_cn_redirect=1#SdkAppId) of TRTC, which is the same as the SdkAppId corresponding to the relayed room.
     */
    public $SdkAppId;

    /**
     * @var string Main room information RoomId, the RoomId corresponding to the TRTC room for relay.
     */
    public $RoomId;

    /**
     * @var integer Main room information RoomType must be the same as the RoomId type of the relayed room. 0 indicates integer type room id, and 1 indicates string room number.
     */
    public $RoomIdType;

    /**
     * @var AgentParams Relay service bot parameters for joining TRTC room.
     */
    public $AgentParams;

    /**
     * @var integer Whether to transcode. 0 indicates no need to transcode, 1 indicates requirement to transcode. whether to charge transcoding fee is determined by the WithTranscoding parameter. WithTranscoding set to 0 means bypass forwarding and no transcoding costs will be incurred. WithTranscoding set to 1 means mixed-stream relay and transcoding costs will be charged.
Note: transcoding is required for stream mixing, and this parameter must be set to 1.
     */
    public $WithTranscoding;

    /**
     * @var McuAudioParams Audio encoding parameters for stream retransmission. since audio must be transcoded (no transcoding costs will be incurred), this field is required when starting a task.
     */
    public $AudioParams;

    /**
     * @var McuVideoParams Video encoding parameters for the relay stream. leave blank for audio-only relay.
     */
    public $VideoParams;

    /**
     * @var SingleSubscribeParams The user uplink parameters require single stream bypass forwarding. WithTranscoding needs to be set to 0 for single stream bypass forwarding.
     */
    public $SingleSubscribeParams;

    /**
     * @var array The CDN parameters for relay push support up to 10 push urls for a task. there must be one pushback room parameter.
     */
    public $PublishCdnParams;

    /**
     * @var McuSeiParams Stream mixing SEI parameter.
     */
    public $SeiParams;

    /**
     * @var array Push back room information. a task supports up to 10 push rooms, and there must be one forward CDN parameter. note: use SDK version 10.4 or higher to push room. if you need assistance, contact tencent cloud technical support.
     */
    public $FeedBackRoomParams;

    /**
     * @var McuRecordParams Relay recording parameters. refer to the reference document (https://www.tencentcloud.comom/document/product/647/111748?from_cn_redirect=1).
     */
    public $RecordParams;

    /**
     * @param integer $SdkAppId [SdkAppId](https://www.tencentcloud.comom/document/product/647/46351?from_cn_redirect=1#SdkAppId) of TRTC, which is the same as the SdkAppId corresponding to the relayed room.
     * @param string $RoomId Main room information RoomId, the RoomId corresponding to the TRTC room for relay.
     * @param integer $RoomIdType Main room information RoomType must be the same as the RoomId type of the relayed room. 0 indicates integer type room id, and 1 indicates string room number.
     * @param AgentParams $AgentParams Relay service bot parameters for joining TRTC room.
     * @param integer $WithTranscoding Whether to transcode. 0 indicates no need to transcode, 1 indicates requirement to transcode. whether to charge transcoding fee is determined by the WithTranscoding parameter. WithTranscoding set to 0 means bypass forwarding and no transcoding costs will be incurred. WithTranscoding set to 1 means mixed-stream relay and transcoding costs will be charged.
Note: transcoding is required for stream mixing, and this parameter must be set to 1.
     * @param McuAudioParams $AudioParams Audio encoding parameters for stream retransmission. since audio must be transcoded (no transcoding costs will be incurred), this field is required when starting a task.
     * @param McuVideoParams $VideoParams Video encoding parameters for the relay stream. leave blank for audio-only relay.
     * @param SingleSubscribeParams $SingleSubscribeParams The user uplink parameters require single stream bypass forwarding. WithTranscoding needs to be set to 0 for single stream bypass forwarding.
     * @param array $PublishCdnParams The CDN parameters for relay push support up to 10 push urls for a task. there must be one pushback room parameter.
     * @param McuSeiParams $SeiParams Stream mixing SEI parameter.
     * @param array $FeedBackRoomParams Push back room information. a task supports up to 10 push rooms, and there must be one forward CDN parameter. note: use SDK version 10.4 or higher to push room. if you need assistance, contact tencent cloud technical support.
     * @param McuRecordParams $RecordParams Relay recording parameters. refer to the reference document (https://www.tencentcloud.comom/document/product/647/111748?from_cn_redirect=1).
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

        if (array_key_exists("RoomIdType",$param) and $param["RoomIdType"] !== null) {
            $this->RoomIdType = $param["RoomIdType"];
        }

        if (array_key_exists("AgentParams",$param) and $param["AgentParams"] !== null) {
            $this->AgentParams = new AgentParams();
            $this->AgentParams->deserialize($param["AgentParams"]);
        }

        if (array_key_exists("WithTranscoding",$param) and $param["WithTranscoding"] !== null) {
            $this->WithTranscoding = $param["WithTranscoding"];
        }

        if (array_key_exists("AudioParams",$param) and $param["AudioParams"] !== null) {
            $this->AudioParams = new McuAudioParams();
            $this->AudioParams->deserialize($param["AudioParams"]);
        }

        if (array_key_exists("VideoParams",$param) and $param["VideoParams"] !== null) {
            $this->VideoParams = new McuVideoParams();
            $this->VideoParams->deserialize($param["VideoParams"]);
        }

        if (array_key_exists("SingleSubscribeParams",$param) and $param["SingleSubscribeParams"] !== null) {
            $this->SingleSubscribeParams = new SingleSubscribeParams();
            $this->SingleSubscribeParams->deserialize($param["SingleSubscribeParams"]);
        }

        if (array_key_exists("PublishCdnParams",$param) and $param["PublishCdnParams"] !== null) {
            $this->PublishCdnParams = [];
            foreach ($param["PublishCdnParams"] as $key => $value){
                $obj = new McuPublishCdnParam();
                $obj->deserialize($value);
                array_push($this->PublishCdnParams, $obj);
            }
        }

        if (array_key_exists("SeiParams",$param) and $param["SeiParams"] !== null) {
            $this->SeiParams = new McuSeiParams();
            $this->SeiParams->deserialize($param["SeiParams"]);
        }

        if (array_key_exists("FeedBackRoomParams",$param) and $param["FeedBackRoomParams"] !== null) {
            $this->FeedBackRoomParams = [];
            foreach ($param["FeedBackRoomParams"] as $key => $value){
                $obj = new McuFeedBackRoomParams();
                $obj->deserialize($value);
                array_push($this->FeedBackRoomParams, $obj);
            }
        }

        if (array_key_exists("RecordParams",$param) and $param["RecordParams"] !== null) {
            $this->RecordParams = new McuRecordParams();
            $this->RecordParams->deserialize($param["RecordParams"]);
        }
    }
}
