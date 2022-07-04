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
 * StartPublishCdnStream request structure.
 *
 * @method integer getSdkAppId() Obtain The [SDKAppID](https://intl.cloud.tencent.com/document/product/647/37714) of the TRTC room whose streams are relayed.
 * @method void setSdkAppId(integer $SdkAppId) Set The [SDKAppID](https://intl.cloud.tencent.com/document/product/647/37714) of the TRTC room whose streams are relayed.
 * @method string getRoomId() Obtain The ID of the room whose streams are relayed (the main room).
 * @method void setRoomId(string $RoomId) Set The ID of the room whose streams are relayed (the main room).
 * @method integer getRoomIdType() Obtain The type of the `RoomId` parameter, which must be the same as the ID type of the room whose streams are relayed. 0: integer; 1: string.
 * @method void setRoomIdType(integer $RoomIdType) Set The type of the `RoomId` parameter, which must be the same as the ID type of the room whose streams are relayed. 0: integer; 1: string.
 * @method AgentParams getAgentParams() Obtain The information of the relaying robot in the room.
 * @method void setAgentParams(AgentParams $AgentParams) Set The information of the relaying robot in the room.
 * @method integer getWithTranscoding() Obtain Whether to transcode the streams. 0: No; 1: Yes.
 * @method void setWithTranscoding(integer $WithTranscoding) Set Whether to transcode the streams. 0: No; 1: Yes.
 * @method McuAudioParams getAudioParams() Obtain The audio encoding parameters for relaying.
 * @method void setAudioParams(McuAudioParams $AudioParams) Set The audio encoding parameters for relaying.
 * @method McuVideoParams getVideoParams() Obtain The video encoding parameters for relaying. If you do not pass this parameter, only audio will be relayed.
 * @method void setVideoParams(McuVideoParams $VideoParams) Set The video encoding parameters for relaying. If you do not pass this parameter, only audio will be relayed.
 * @method SingleSubscribeParams getSingleSubscribeParams() Obtain The information of a single stream relayed. When you relay a single stream, set `WithTranscoding` to 0.
 * @method void setSingleSubscribeParams(SingleSubscribeParams $SingleSubscribeParams) Set The information of a single stream relayed. When you relay a single stream, set `WithTranscoding` to 0.
 * @method array getPublishCdnParams() Obtain The CDN information.
 * @method void setPublishCdnParams(array $PublishCdnParams) Set The CDN information.
 */
class StartPublishCdnStreamRequest extends AbstractModel
{
    /**
     * @var integer The [SDKAppID](https://intl.cloud.tencent.com/document/product/647/37714) of the TRTC room whose streams are relayed.
     */
    public $SdkAppId;

    /**
     * @var string The ID of the room whose streams are relayed (the main room).
     */
    public $RoomId;

    /**
     * @var integer The type of the `RoomId` parameter, which must be the same as the ID type of the room whose streams are relayed. 0: integer; 1: string.
     */
    public $RoomIdType;

    /**
     * @var AgentParams The information of the relaying robot in the room.
     */
    public $AgentParams;

    /**
     * @var integer Whether to transcode the streams. 0: No; 1: Yes.
     */
    public $WithTranscoding;

    /**
     * @var McuAudioParams The audio encoding parameters for relaying.
     */
    public $AudioParams;

    /**
     * @var McuVideoParams The video encoding parameters for relaying. If you do not pass this parameter, only audio will be relayed.
     */
    public $VideoParams;

    /**
     * @var SingleSubscribeParams The information of a single stream relayed. When you relay a single stream, set `WithTranscoding` to 0.
     */
    public $SingleSubscribeParams;

    /**
     * @var array The CDN information.
     */
    public $PublishCdnParams;

    /**
     * @param integer $SdkAppId The [SDKAppID](https://intl.cloud.tencent.com/document/product/647/37714) of the TRTC room whose streams are relayed.
     * @param string $RoomId The ID of the room whose streams are relayed (the main room).
     * @param integer $RoomIdType The type of the `RoomId` parameter, which must be the same as the ID type of the room whose streams are relayed. 0: integer; 1: string.
     * @param AgentParams $AgentParams The information of the relaying robot in the room.
     * @param integer $WithTranscoding Whether to transcode the streams. 0: No; 1: Yes.
     * @param McuAudioParams $AudioParams The audio encoding parameters for relaying.
     * @param McuVideoParams $VideoParams The video encoding parameters for relaying. If you do not pass this parameter, only audio will be relayed.
     * @param SingleSubscribeParams $SingleSubscribeParams The information of a single stream relayed. When you relay a single stream, set `WithTranscoding` to 0.
     * @param array $PublishCdnParams The CDN information.
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
    }
}
