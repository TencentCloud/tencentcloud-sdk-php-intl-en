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
 * The on-cloud recording parameters.
 *
 * @method integer getRecordMode() Obtain The recording mode.
1: Single-stream recording. Records the audio and video of each subscribed user (`UserId`) in a room and saves the recording files to the cloud.
2: Mixed-stream recording. Mixes the audios and videos of subscribed users (`UserId`) in a room, records the mixed stream, and saves the recording files to the cloud.
 * @method void setRecordMode(integer $RecordMode) Set The recording mode.
1: Single-stream recording. Records the audio and video of each subscribed user (`UserId`) in a room and saves the recording files to the cloud.
2: Mixed-stream recording. Mixes the audios and videos of subscribed users (`UserId`) in a room, records the mixed stream, and saves the recording files to the cloud.
 * @method integer getMaxIdleTime() Obtain The time period (seconds) to wait after there are no anchors in a room to stop recording automatically. The value cannot be smaller than 5 or larger than 86400 (24 hours). Default value: 30.
 * @method void setMaxIdleTime(integer $MaxIdleTime) Set The time period (seconds) to wait after there are no anchors in a room to stop recording automatically. The value cannot be smaller than 5 or larger than 86400 (24 hours). Default value: 30.
 * @method integer getStreamType() Obtain The media type of the streams to record.
0: Audio and video streams (default)
1: Audio streams only
2: Video streams only
 * @method void setStreamType(integer $StreamType) Set The media type of the streams to record.
0: Audio and video streams (default)
1: Audio streams only
2: Video streams only
 * @method SubscribeStreamUserIds getSubscribeStreamUserIds() Obtain The allowlist/blocklist for stream subscription.
 * @method void setSubscribeStreamUserIds(SubscribeStreamUserIds $SubscribeStreamUserIds) Set The allowlist/blocklist for stream subscription.
 * @method integer getOutputFormat() Obtain The format of recording files. 0 (default): HLS; 1: HLS + MP4 (recorded in HLS and converted to MP4). This parameter is invalid if recording files are saved to VOD.
 * @method void setOutputFormat(integer $OutputFormat) Set The format of recording files. 0 (default): HLS; 1: HLS + MP4 (recorded in HLS and converted to MP4). This parameter is invalid if recording files are saved to VOD.
 */
class RecordParams extends AbstractModel
{
    /**
     * @var integer The recording mode.
1: Single-stream recording. Records the audio and video of each subscribed user (`UserId`) in a room and saves the recording files to the cloud.
2: Mixed-stream recording. Mixes the audios and videos of subscribed users (`UserId`) in a room, records the mixed stream, and saves the recording files to the cloud.
     */
    public $RecordMode;

    /**
     * @var integer The time period (seconds) to wait after there are no anchors in a room to stop recording automatically. The value cannot be smaller than 5 or larger than 86400 (24 hours). Default value: 30.
     */
    public $MaxIdleTime;

    /**
     * @var integer The media type of the streams to record.
0: Audio and video streams (default)
1: Audio streams only
2: Video streams only
     */
    public $StreamType;

    /**
     * @var SubscribeStreamUserIds The allowlist/blocklist for stream subscription.
     */
    public $SubscribeStreamUserIds;

    /**
     * @var integer The format of recording files. 0 (default): HLS; 1: HLS + MP4 (recorded in HLS and converted to MP4). This parameter is invalid if recording files are saved to VOD.
     */
    public $OutputFormat;

    /**
     * @param integer $RecordMode The recording mode.
1: Single-stream recording. Records the audio and video of each subscribed user (`UserId`) in a room and saves the recording files to the cloud.
2: Mixed-stream recording. Mixes the audios and videos of subscribed users (`UserId`) in a room, records the mixed stream, and saves the recording files to the cloud.
     * @param integer $MaxIdleTime The time period (seconds) to wait after there are no anchors in a room to stop recording automatically. The value cannot be smaller than 5 or larger than 86400 (24 hours). Default value: 30.
     * @param integer $StreamType The media type of the streams to record.
0: Audio and video streams (default)
1: Audio streams only
2: Video streams only
     * @param SubscribeStreamUserIds $SubscribeStreamUserIds The allowlist/blocklist for stream subscription.
     * @param integer $OutputFormat The format of recording files. 0 (default): HLS; 1: HLS + MP4 (recorded in HLS and converted to MP4). This parameter is invalid if recording files are saved to VOD.
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
        if (array_key_exists("RecordMode",$param) and $param["RecordMode"] !== null) {
            $this->RecordMode = $param["RecordMode"];
        }

        if (array_key_exists("MaxIdleTime",$param) and $param["MaxIdleTime"] !== null) {
            $this->MaxIdleTime = $param["MaxIdleTime"];
        }

        if (array_key_exists("StreamType",$param) and $param["StreamType"] !== null) {
            $this->StreamType = $param["StreamType"];
        }

        if (array_key_exists("SubscribeStreamUserIds",$param) and $param["SubscribeStreamUserIds"] !== null) {
            $this->SubscribeStreamUserIds = new SubscribeStreamUserIds();
            $this->SubscribeStreamUserIds->deserialize($param["SubscribeStreamUserIds"]);
        }

        if (array_key_exists("OutputFormat",$param) and $param["OutputFormat"] !== null) {
            $this->OutputFormat = $param["OutputFormat"];
        }
    }
}
