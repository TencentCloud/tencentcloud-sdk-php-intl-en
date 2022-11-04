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
 * UpdatePublishCdnStream request structure.
 *
 * @method integer getSdkAppId() Obtain The [SDKAppID](https://intl.cloud.tencent.com/document/product/647/37714) of the TRTC room whose streams are relayed.
 * @method void setSdkAppId(integer $SdkAppId) Set The [SDKAppID](https://intl.cloud.tencent.com/document/product/647/37714) of the TRTC room whose streams are relayed.
 * @method string getTaskId() Obtain The task ID.
 * @method void setTaskId(string $TaskId) Set The task ID.
 * @method integer getSequenceNumber() Obtain The sequence of a request. This parameter ensures the requests to change the parameters of the same relaying task are in the correct order. It increases each time a new request is made.
 * @method void setSequenceNumber(integer $SequenceNumber) Set The sequence of a request. This parameter ensures the requests to change the parameters of the same relaying task are in the correct order. It increases each time a new request is made.
 * @method integer getWithTranscoding() Obtain Whether to transcode the streams. 0: No; 1: Yes.
 * @method void setWithTranscoding(integer $WithTranscoding) Set Whether to transcode the streams. 0: No; 1: Yes.
 * @method McuAudioParams getAudioParams() Obtain Pass this parameter to change the users whose audios are mixed. If you do not pass this parameter, no changes will be made.
 * @method void setAudioParams(McuAudioParams $AudioParams) Set Pass this parameter to change the users whose audios are mixed. If you do not pass this parameter, no changes will be made.
 * @method McuVideoParams getVideoParams() Obtain Pass this parameter to change video parameters other than the codec, including the video layout, background image, background color, and watermark information. This parameter is valid only if streams are transcoded. If you do not pass it, no changes will be made.
 * @method void setVideoParams(McuVideoParams $VideoParams) Set Pass this parameter to change video parameters other than the codec, including the video layout, background image, background color, and watermark information. This parameter is valid only if streams are transcoded. If you do not pass it, no changes will be made.
 * @method SingleSubscribeParams getSingleSubscribeParams() Obtain Pass this parameter to change the single stream that is relayed. This parameter is valid only if streams are not transcoded. If you do not pass this parameter, no changes will be made.
 * @method void setSingleSubscribeParams(SingleSubscribeParams $SingleSubscribeParams) Set Pass this parameter to change the single stream that is relayed. This parameter is valid only if streams are not transcoded. If you do not pass this parameter, no changes will be made.
 * @method array getPublishCdnParams() Obtain Pass this parameter to change the CDNs to relay to. If you do not pass this parameter, no changes will be made.
 * @method void setPublishCdnParams(array $PublishCdnParams) Set Pass this parameter to change the CDNs to relay to. If you do not pass this parameter, no changes will be made.
 * @method McuSeiParams getSeiParams() Obtain The stream mixing SEI parameters.
 * @method void setSeiParams(McuSeiParams $SeiParams) Set The stream mixing SEI parameters.
 * @method array getFeedBackRoomParams() Obtain The information of the room to which streams are relayed.
 * @method void setFeedBackRoomParams(array $FeedBackRoomParams) Set The information of the room to which streams are relayed.
 */
class UpdatePublishCdnStreamRequest extends AbstractModel
{
    /**
     * @var integer The [SDKAppID](https://intl.cloud.tencent.com/document/product/647/37714) of the TRTC room whose streams are relayed.
     */
    public $SdkAppId;

    /**
     * @var string The task ID.
     */
    public $TaskId;

    /**
     * @var integer The sequence of a request. This parameter ensures the requests to change the parameters of the same relaying task are in the correct order. It increases each time a new request is made.
     */
    public $SequenceNumber;

    /**
     * @var integer Whether to transcode the streams. 0: No; 1: Yes.
     */
    public $WithTranscoding;

    /**
     * @var McuAudioParams Pass this parameter to change the users whose audios are mixed. If you do not pass this parameter, no changes will be made.
     */
    public $AudioParams;

    /**
     * @var McuVideoParams Pass this parameter to change video parameters other than the codec, including the video layout, background image, background color, and watermark information. This parameter is valid only if streams are transcoded. If you do not pass it, no changes will be made.
     */
    public $VideoParams;

    /**
     * @var SingleSubscribeParams Pass this parameter to change the single stream that is relayed. This parameter is valid only if streams are not transcoded. If you do not pass this parameter, no changes will be made.
     */
    public $SingleSubscribeParams;

    /**
     * @var array Pass this parameter to change the CDNs to relay to. If you do not pass this parameter, no changes will be made.
     */
    public $PublishCdnParams;

    /**
     * @var McuSeiParams The stream mixing SEI parameters.
     */
    public $SeiParams;

    /**
     * @var array The information of the room to which streams are relayed.
     */
    public $FeedBackRoomParams;

    /**
     * @param integer $SdkAppId The [SDKAppID](https://intl.cloud.tencent.com/document/product/647/37714) of the TRTC room whose streams are relayed.
     * @param string $TaskId The task ID.
     * @param integer $SequenceNumber The sequence of a request. This parameter ensures the requests to change the parameters of the same relaying task are in the correct order. It increases each time a new request is made.
     * @param integer $WithTranscoding Whether to transcode the streams. 0: No; 1: Yes.
     * @param McuAudioParams $AudioParams Pass this parameter to change the users whose audios are mixed. If you do not pass this parameter, no changes will be made.
     * @param McuVideoParams $VideoParams Pass this parameter to change video parameters other than the codec, including the video layout, background image, background color, and watermark information. This parameter is valid only if streams are transcoded. If you do not pass it, no changes will be made.
     * @param SingleSubscribeParams $SingleSubscribeParams Pass this parameter to change the single stream that is relayed. This parameter is valid only if streams are not transcoded. If you do not pass this parameter, no changes will be made.
     * @param array $PublishCdnParams Pass this parameter to change the CDNs to relay to. If you do not pass this parameter, no changes will be made.
     * @param McuSeiParams $SeiParams The stream mixing SEI parameters.
     * @param array $FeedBackRoomParams The information of the room to which streams are relayed.
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

        if (array_key_exists("SequenceNumber",$param) and $param["SequenceNumber"] !== null) {
            $this->SequenceNumber = $param["SequenceNumber"];
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
    }
}
