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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * A group of parameters for recording over specified streams. It specifies whether to disable the audio recording and whether to record high-resolution or low-resolution videos.
 *
 * @method string getStreamId() Obtain Video stream ID
Description of the possible video stream ID values:
1. `tic_record_user`: the whiteboard video stream
2. `tic_substream`: the auxiliary video stream
3. Specific user ID: the video stream of the specified user

The actual recording uses the prefix match of the video stream ID. The real stream becomes the specified stream once its ID prefix matches with the stream ID.
 * @method void setStreamId(string $StreamId) Set Video stream ID
Description of the possible video stream ID values:
1. `tic_record_user`: the whiteboard video stream
2. `tic_substream`: the auxiliary video stream
3. Specific user ID: the video stream of the specified user

The actual recording uses the prefix match of the video stream ID. The real stream becomes the specified stream once its ID prefix matches with the stream ID.
 * @method boolean getDisableRecord() Obtain Whether to disable recording over the stream.

true: does not record this stream. This stream will not be included in the final recording file.
false: records this stream. This stream will be included in the final recording file.

Default value: false
 * @method void setDisableRecord(boolean $DisableRecord) Set Whether to disable recording over the stream.

true: does not record this stream. This stream will not be included in the final recording file.
false: records this stream. This stream will be included in the final recording file.

Default value: false
 * @method boolean getDisableAudio() Obtain Whether to disable the audio recording of the stream.

true: does not record the audio of the stream. In the final recording file, this stream will be soundless.
false: the stream has both video and audio recording.

Default value: false
 * @method void setDisableAudio(boolean $DisableAudio) Set Whether to disable the audio recording of the stream.

true: does not record the audio of the stream. In the final recording file, this stream will be soundless.
false: the stream has both video and audio recording.

Default value: false
 * @method boolean getPullSmallVideo() Obtain Whether to only record low-resolution stream videos.

true: records only low-resolution videos. In this case, please make sure that the client pushes low-resolution videos upstream. Otherwise, the recorded video may be black. 
false: records only high-resolution videos.

Default value: false
 * @method void setPullSmallVideo(boolean $PullSmallVideo) Set Whether to only record low-resolution stream videos.

true: records only low-resolution videos. In this case, please make sure that the client pushes low-resolution videos upstream. Otherwise, the recorded video may be black. 
false: records only high-resolution videos.

Default value: false
 */
class StreamControl extends AbstractModel
{
    /**
     * @var string Video stream ID
Description of the possible video stream ID values:
1. `tic_record_user`: the whiteboard video stream
2. `tic_substream`: the auxiliary video stream
3. Specific user ID: the video stream of the specified user

The actual recording uses the prefix match of the video stream ID. The real stream becomes the specified stream once its ID prefix matches with the stream ID.
     */
    public $StreamId;

    /**
     * @var boolean Whether to disable recording over the stream.

true: does not record this stream. This stream will not be included in the final recording file.
false: records this stream. This stream will be included in the final recording file.

Default value: false
     */
    public $DisableRecord;

    /**
     * @var boolean Whether to disable the audio recording of the stream.

true: does not record the audio of the stream. In the final recording file, this stream will be soundless.
false: the stream has both video and audio recording.

Default value: false
     */
    public $DisableAudio;

    /**
     * @var boolean Whether to only record low-resolution stream videos.

true: records only low-resolution videos. In this case, please make sure that the client pushes low-resolution videos upstream. Otherwise, the recorded video may be black. 
false: records only high-resolution videos.

Default value: false
     */
    public $PullSmallVideo;

    /**
     * @param string $StreamId Video stream ID
Description of the possible video stream ID values:
1. `tic_record_user`: the whiteboard video stream
2. `tic_substream`: the auxiliary video stream
3. Specific user ID: the video stream of the specified user

The actual recording uses the prefix match of the video stream ID. The real stream becomes the specified stream once its ID prefix matches with the stream ID.
     * @param boolean $DisableRecord Whether to disable recording over the stream.

true: does not record this stream. This stream will not be included in the final recording file.
false: records this stream. This stream will be included in the final recording file.

Default value: false
     * @param boolean $DisableAudio Whether to disable the audio recording of the stream.

true: does not record the audio of the stream. In the final recording file, this stream will be soundless.
false: the stream has both video and audio recording.

Default value: false
     * @param boolean $PullSmallVideo Whether to only record low-resolution stream videos.

true: records only low-resolution videos. In this case, please make sure that the client pushes low-resolution videos upstream. Otherwise, the recorded video may be black. 
false: records only high-resolution videos.

Default value: false
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

        if (array_key_exists("DisableRecord",$param) and $param["DisableRecord"] !== null) {
            $this->DisableRecord = $param["DisableRecord"];
        }

        if (array_key_exists("DisableAudio",$param) and $param["DisableAudio"] !== null) {
            $this->DisableAudio = $param["DisableAudio"];
        }

        if (array_key_exists("PullSmallVideo",$param) and $param["PullSmallVideo"] !== null) {
            $this->PullSmallVideo = $param["PullSmallVideo"];
        }
    }
}
