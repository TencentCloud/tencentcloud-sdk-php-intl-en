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
 * MCU On-Cloud MixTranscoding output parameters
 *
 * @method string getStreamId() Obtain Custom live stream ID, which must be different from the ID of relayed stream.
 * @method void setStreamId(string $StreamId) Set Custom live stream ID, which must be different from the ID of relayed stream.
 * @method integer getPureAudioStream() Obtain Value range: [0, 1]. If it is 0, live streams are audio and video; if it is 1, live streams are only audio. Default value: 0.
 * @method void setPureAudioStream(integer $PureAudioStream) Set Value range: [0, 1]. If it is 0, live streams are audio and video; if it is 1, live streams are only audio. Default value: 0.
 * @method string getRecordId() Obtain Prefix of custom recording file names. Please enable the recording feature in the TRTC console first. https://intl.cloud.tencent.com/document/product/647/50768?from_cn_redirect=1
 * @method void setRecordId(string $RecordId) Set Prefix of custom recording file names. Please enable the recording feature in the TRTC console first. https://intl.cloud.tencent.com/document/product/647/50768?from_cn_redirect=1
 * @method integer getRecordAudioOnly() Obtain Whether to record audio only. Valid values: 0, 1. `0`: no meaning; `1`: records into MP3 files. This parameter is not recommended. Instead, you are advised to create an audio-only recording template in the TRTC console.
 * @method void setRecordAudioOnly(integer $RecordAudioOnly) Set Whether to record audio only. Valid values: 0, 1. `0`: no meaning; `1`: records into MP3 files. This parameter is not recommended. Instead, you are advised to create an audio-only recording template in the TRTC console.
 */
class OutputParams extends AbstractModel
{
    /**
     * @var string Custom live stream ID, which must be different from the ID of relayed stream.
     */
    public $StreamId;

    /**
     * @var integer Value range: [0, 1]. If it is 0, live streams are audio and video; if it is 1, live streams are only audio. Default value: 0.
     */
    public $PureAudioStream;

    /**
     * @var string Prefix of custom recording file names. Please enable the recording feature in the TRTC console first. https://intl.cloud.tencent.com/document/product/647/50768?from_cn_redirect=1
     */
    public $RecordId;

    /**
     * @var integer Whether to record audio only. Valid values: 0, 1. `0`: no meaning; `1`: records into MP3 files. This parameter is not recommended. Instead, you are advised to create an audio-only recording template in the TRTC console.
     */
    public $RecordAudioOnly;

    /**
     * @param string $StreamId Custom live stream ID, which must be different from the ID of relayed stream.
     * @param integer $PureAudioStream Value range: [0, 1]. If it is 0, live streams are audio and video; if it is 1, live streams are only audio. Default value: 0.
     * @param string $RecordId Prefix of custom recording file names. Please enable the recording feature in the TRTC console first. https://intl.cloud.tencent.com/document/product/647/50768?from_cn_redirect=1
     * @param integer $RecordAudioOnly Whether to record audio only. Valid values: 0, 1. `0`: no meaning; `1`: records into MP3 files. This parameter is not recommended. Instead, you are advised to create an audio-only recording template in the TRTC console.
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
        if (array_key_exists("StreamId",$param) and $param["StreamId"] !== null) {
            $this->StreamId = $param["StreamId"];
        }

        if (array_key_exists("PureAudioStream",$param) and $param["PureAudioStream"] !== null) {
            $this->PureAudioStream = $param["PureAudioStream"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("RecordAudioOnly",$param) and $param["RecordAudioOnly"] !== null) {
            $this->RecordAudioOnly = $param["RecordAudioOnly"];
        }
    }
}
