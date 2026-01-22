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
 * The on-cloud recording parameters.
 *
 * @method integer getRecordMode() Obtain Recording mode:.
1: single stream recording, record the audio and video of the subscribed UserId in the room separately, and upload the recording files to cloud storage.
2: mixed-stream recording. mix the audio and video of the subscribed UserId in the room into an audio-video file and upload the recording file to cloud storage.
 * @method void setRecordMode(integer $RecordMode) Set Recording mode:.
1: single stream recording, record the audio and video of the subscribed UserId in the room separately, and upload the recording files to cloud storage.
2: mixed-stream recording. mix the audio and video of the subscribed UserId in the room into an audio-video file and upload the recording file to cloud storage.
 * @method integer getMaxIdleTime() Obtain Recording stops automatically when there is no host inside the room for a duration exceeding MaxIdleTime. measurement unit: second. default value: 30 seconds. the value must be greater than or equal to 5 seconds and less than or equal to 86400 seconds (24 hours).
 * @method void setMaxIdleTime(integer $MaxIdleTime) Set Recording stops automatically when there is no host inside the room for a duration exceeding MaxIdleTime. measurement unit: second. default value: 30 seconds. the value must be greater than or equal to 5 seconds and less than or equal to 86400 seconds (24 hours).
 * @method integer getStreamType() Obtain Media stream type for recording.
0: recording audio and video streams (default).
1: record audio streams only.
2: record video stream only.
 * @method void setStreamType(integer $StreamType) Set Media stream type for recording.
0: recording audio and video streams (default).
1: record audio streams only.
2: record video stream only.
 * @method SubscribeStreamUserIds getSubscribeStreamUserIds() Obtain Specifies the allowlist or blocklist for the subscription stream.
 * @method void setSubscribeStreamUserIds(SubscribeStreamUserIds $SubscribeStreamUserIds) Set Specifies the allowlist or blocklist for the subscription stream.
 * @method integer getOutputFormat() Obtain Output file format (valid when stored in third-party storage such as COS). 0: (default) output file is in hls format. 1: output file format is hls+mp4. 2: output file format is hls+aac. 3: output file format is mp4. 4: output file format is aac.

This parameter is invalid when storing in VOD. when storing in VOD, set MediaType in TencentVod (https://www.tencentcloud.comom/document/api/647/44055?from_cn_redirect=1#TencentVod).
 * @method void setOutputFormat(integer $OutputFormat) Set Output file format (valid when stored in third-party storage such as COS). 0: (default) output file is in hls format. 1: output file format is hls+mp4. 2: output file format is hls+aac. 3: output file format is mp4. 4: output file format is aac.

This parameter is invalid when storing in VOD. when storing in VOD, set MediaType in TencentVod (https://www.tencentcloud.comom/document/api/647/44055?from_cn_redirect=1#TencentVod).
 * @method integer getAvMerge() Obtain In single-stream recording mode, determine whether to merge the user's audio and video. 0: do not merge the audio and video of a stream (default). 1: merge the audio and video of a stream into one ts. in mixed-stream recording, this parameter is not required, and the audio and video are merged by default.
 * @method void setAvMerge(integer $AvMerge) Set In single-stream recording mode, determine whether to merge the user's audio and video. 0: do not merge the audio and video of a stream (default). 1: merge the audio and video of a stream into one ts. in mixed-stream recording, this parameter is not required, and the audio and video are merged by default.
 * @method integer getMaxMediaFileDuration() Obtain If the file format is aac or mp4, the system will automatically split the video file when the length limit is exceeded. measurement unit: minute. defaults to 1440 min (24h). value range: 1-1440. [single file limit is 2G. if file size exceeds 2G or recording duration exceeds 24h, the file will be automatically split.].
Hls format recording. this parameter is not effective.
 * @method void setMaxMediaFileDuration(integer $MaxMediaFileDuration) Set If the file format is aac or mp4, the system will automatically split the video file when the length limit is exceeded. measurement unit: minute. defaults to 1440 min (24h). value range: 1-1440. [single file limit is 2G. if file size exceeds 2G or recording duration exceeds 24h, the file will be automatically split.].
Hls format recording. this parameter is not effective.
 * @method integer getMediaId() Obtain Specify recording streams. 0: mainstream + auxiliary stream (default); 1: mainstream; 2: auxiliary stream.
 * @method void setMediaId(integer $MediaId) Set Specify recording streams. 0: mainstream + auxiliary stream (default); 1: mainstream; 2: auxiliary stream.
 * @method integer getFillType() Obtain Specifies the type of frame to fill when the upstream video stream stops:
- 0: Fill with the last frame (freeze the last video frame)
- 1: Fill with black frames
 * @method void setFillType(integer $FillType) Set Specifies the type of frame to fill when the upstream video stream stops:
- 0: Fill with the last frame (freeze the last video frame)
- 1: Fill with black frames
 * @method integer getSubscribeAbility() Obtain Specifies whether the recording task subscribes to the stream published by the Mixed Stream Robot. 

- 1: Subscribe. 
- 0: Do not subscribe (default).
> Note: 
When this option is enabled, it is recommended to use the "Subscription Allowlist." Avoid subscribing to both the stream published by the Mixed Stream Robot and the streams published by the hosts simultaneously; otherwise, it will result in audio echoing (duplicate audio) in the recorded file.
 * @method void setSubscribeAbility(integer $SubscribeAbility) Set Specifies whether the recording task subscribes to the stream published by the Mixed Stream Robot. 

- 1: Subscribe. 
- 0: Do not subscribe (default).
> Note: 
When this option is enabled, it is recommended to use the "Subscription Allowlist." Avoid subscribing to both the stream published by the Mixed Stream Robot and the streams published by the hosts simultaneously; otherwise, it will result in audio echoing (duplicate audio) in the recorded file.
 */
class RecordParams extends AbstractModel
{
    /**
     * @var integer Recording mode:.
1: single stream recording, record the audio and video of the subscribed UserId in the room separately, and upload the recording files to cloud storage.
2: mixed-stream recording. mix the audio and video of the subscribed UserId in the room into an audio-video file and upload the recording file to cloud storage.
     */
    public $RecordMode;

    /**
     * @var integer Recording stops automatically when there is no host inside the room for a duration exceeding MaxIdleTime. measurement unit: second. default value: 30 seconds. the value must be greater than or equal to 5 seconds and less than or equal to 86400 seconds (24 hours).
     */
    public $MaxIdleTime;

    /**
     * @var integer Media stream type for recording.
0: recording audio and video streams (default).
1: record audio streams only.
2: record video stream only.
     */
    public $StreamType;

    /**
     * @var SubscribeStreamUserIds Specifies the allowlist or blocklist for the subscription stream.
     */
    public $SubscribeStreamUserIds;

    /**
     * @var integer Output file format (valid when stored in third-party storage such as COS). 0: (default) output file is in hls format. 1: output file format is hls+mp4. 2: output file format is hls+aac. 3: output file format is mp4. 4: output file format is aac.

This parameter is invalid when storing in VOD. when storing in VOD, set MediaType in TencentVod (https://www.tencentcloud.comom/document/api/647/44055?from_cn_redirect=1#TencentVod).
     */
    public $OutputFormat;

    /**
     * @var integer In single-stream recording mode, determine whether to merge the user's audio and video. 0: do not merge the audio and video of a stream (default). 1: merge the audio and video of a stream into one ts. in mixed-stream recording, this parameter is not required, and the audio and video are merged by default.
     */
    public $AvMerge;

    /**
     * @var integer If the file format is aac or mp4, the system will automatically split the video file when the length limit is exceeded. measurement unit: minute. defaults to 1440 min (24h). value range: 1-1440. [single file limit is 2G. if file size exceeds 2G or recording duration exceeds 24h, the file will be automatically split.].
Hls format recording. this parameter is not effective.
     */
    public $MaxMediaFileDuration;

    /**
     * @var integer Specify recording streams. 0: mainstream + auxiliary stream (default); 1: mainstream; 2: auxiliary stream.
     */
    public $MediaId;

    /**
     * @var integer Specifies the type of frame to fill when the upstream video stream stops:
- 0: Fill with the last frame (freeze the last video frame)
- 1: Fill with black frames
     */
    public $FillType;

    /**
     * @var integer Specifies whether the recording task subscribes to the stream published by the Mixed Stream Robot. 

- 1: Subscribe. 
- 0: Do not subscribe (default).
> Note: 
When this option is enabled, it is recommended to use the "Subscription Allowlist." Avoid subscribing to both the stream published by the Mixed Stream Robot and the streams published by the hosts simultaneously; otherwise, it will result in audio echoing (duplicate audio) in the recorded file.
     */
    public $SubscribeAbility;

    /**
     * @param integer $RecordMode Recording mode:.
1: single stream recording, record the audio and video of the subscribed UserId in the room separately, and upload the recording files to cloud storage.
2: mixed-stream recording. mix the audio and video of the subscribed UserId in the room into an audio-video file and upload the recording file to cloud storage.
     * @param integer $MaxIdleTime Recording stops automatically when there is no host inside the room for a duration exceeding MaxIdleTime. measurement unit: second. default value: 30 seconds. the value must be greater than or equal to 5 seconds and less than or equal to 86400 seconds (24 hours).
     * @param integer $StreamType Media stream type for recording.
0: recording audio and video streams (default).
1: record audio streams only.
2: record video stream only.
     * @param SubscribeStreamUserIds $SubscribeStreamUserIds Specifies the allowlist or blocklist for the subscription stream.
     * @param integer $OutputFormat Output file format (valid when stored in third-party storage such as COS). 0: (default) output file is in hls format. 1: output file format is hls+mp4. 2: output file format is hls+aac. 3: output file format is mp4. 4: output file format is aac.

This parameter is invalid when storing in VOD. when storing in VOD, set MediaType in TencentVod (https://www.tencentcloud.comom/document/api/647/44055?from_cn_redirect=1#TencentVod).
     * @param integer $AvMerge In single-stream recording mode, determine whether to merge the user's audio and video. 0: do not merge the audio and video of a stream (default). 1: merge the audio and video of a stream into one ts. in mixed-stream recording, this parameter is not required, and the audio and video are merged by default.
     * @param integer $MaxMediaFileDuration If the file format is aac or mp4, the system will automatically split the video file when the length limit is exceeded. measurement unit: minute. defaults to 1440 min (24h). value range: 1-1440. [single file limit is 2G. if file size exceeds 2G or recording duration exceeds 24h, the file will be automatically split.].
Hls format recording. this parameter is not effective.
     * @param integer $MediaId Specify recording streams. 0: mainstream + auxiliary stream (default); 1: mainstream; 2: auxiliary stream.
     * @param integer $FillType Specifies the type of frame to fill when the upstream video stream stops:
- 0: Fill with the last frame (freeze the last video frame)
- 1: Fill with black frames
     * @param integer $SubscribeAbility Specifies whether the recording task subscribes to the stream published by the Mixed Stream Robot. 

- 1: Subscribe. 
- 0: Do not subscribe (default).
> Note: 
When this option is enabled, it is recommended to use the "Subscription Allowlist." Avoid subscribing to both the stream published by the Mixed Stream Robot and the streams published by the hosts simultaneously; otherwise, it will result in audio echoing (duplicate audio) in the recorded file.
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

        if (array_key_exists("AvMerge",$param) and $param["AvMerge"] !== null) {
            $this->AvMerge = $param["AvMerge"];
        }

        if (array_key_exists("MaxMediaFileDuration",$param) and $param["MaxMediaFileDuration"] !== null) {
            $this->MaxMediaFileDuration = $param["MaxMediaFileDuration"];
        }

        if (array_key_exists("MediaId",$param) and $param["MediaId"] !== null) {
            $this->MediaId = $param["MediaId"];
        }

        if (array_key_exists("FillType",$param) and $param["FillType"] !== null) {
            $this->FillType = $param["FillType"];
        }

        if (array_key_exists("SubscribeAbility",$param) and $param["SubscribeAbility"] !== null) {
            $this->SubscribeAbility = $param["SubscribeAbility"];
        }
    }
}
