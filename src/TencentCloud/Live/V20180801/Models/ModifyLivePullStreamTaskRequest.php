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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLivePullStreamTask request structure.
 *
 * @method string getTaskId() Obtain The task ID.
 * @method void setTaskId(string $TaskId) Set The task ID.
 * @method string getOperator() Obtain The operator.
 * @method void setOperator(string $Operator) Set The operator.
 * @method array getSourceUrls() Obtain The source URL(s).
If `SourceType` is `PullLivePushLive`, you can specify only one source URL.
If `SourceType` is `PullVodPushLive`, you can specify at most 30 source URLs.
 * @method void setSourceUrls(array $SourceUrls) Set The source URL(s).
If `SourceType` is `PullLivePushLive`, you can specify only one source URL.
If `SourceType` is `PullVodPushLive`, you can specify at most 30 source URLs.
 * @method string getStartTime() Obtain The start time.
It must be in UTC format.
Example: 2019-01-08T10:00:00Z.
Note: Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
 * @method void setStartTime(string $StartTime) Set The start time.
It must be in UTC format.
Example: 2019-01-08T10:00:00Z.
Note: Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
 * @method string getEndTime() Obtain The end time. Notes:
1. The end time must be later than the start time.
2. The end time and start time must be later than the current time.
3. The end time and start time must be less than seven days apart.
It must be in UTC format.
Example: 2019-01-08T10:00:00Z.
Note: Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
 * @method void setEndTime(string $EndTime) Set The end time. Notes:
1. The end time must be later than the start time.
2. The end time and start time must be later than the current time.
3. The end time and start time must be less than seven days apart.
It must be in UTC format.
Example: 2019-01-08T10:00:00Z.
Note: Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
 * @method integer getVodLoopTimes() Obtain The number of times to loop video files.
-1: Loop indefinitely
0: Do not loop
> 0: The number of loop times. A task will end either when the videos are looped for the specified number of times or at the specified task end time, whichever is earlier.
This parameter is valid only if the source is video files.
 * @method void setVodLoopTimes(integer $VodLoopTimes) Set The number of times to loop video files.
-1: Loop indefinitely
0: Do not loop
> 0: The number of loop times. A task will end either when the videos are looped for the specified number of times or at the specified task end time, whichever is earlier.
This parameter is valid only if the source is video files.
 * @method string getVodRefreshType() Obtain The behavior after the source video files (`SourceUrls`) are changed.
ImmediateNewSource: Play the new videos immediately
ContinueBreakPoint: Finish the current video first and then pull from the new source.
This parameter is valid only if the source is video files.
 * @method void setVodRefreshType(string $VodRefreshType) Set The behavior after the source video files (`SourceUrls`) are changed.
ImmediateNewSource: Play the new videos immediately
ContinueBreakPoint: Finish the current video first and then pull from the new source.
This parameter is valid only if the source is video files.
 * @method string getStatus() Obtain Whether to enable or pause the task. Valid values:
enable
pause
 * @method void setStatus(string $Status) Set Whether to enable or pause the task. Valid values:
enable
pause
 * @method array getCallbackEvents() Obtain The events to listen for. If you do not pass this parameter, all events will be listened for.
TaskStart: Callback for starting a task
TaskExit: Callback for ending a task
VodSourceFileStart: Callback for starting to pull from video files
VodSourceFileFinish: Callback for stopping pulling from video files
ResetTaskConfig: Callback for modifying a task
 * @method void setCallbackEvents(array $CallbackEvents) Set The events to listen for. If you do not pass this parameter, all events will be listened for.
TaskStart: Callback for starting a task
TaskExit: Callback for ending a task
VodSourceFileStart: Callback for starting to pull from video files
VodSourceFileFinish: Callback for stopping pulling from video files
ResetTaskConfig: Callback for modifying a task
 * @method string getCallbackUrl() Obtain A custom callback URL.
Callbacks will be sent to this URL.
 * @method void setCallbackUrl(string $CallbackUrl) Set A custom callback URL.
Callbacks will be sent to this URL.
 * @method integer getFileIndex() Obtain The index of the video to start from.
The value of this parameter cannot be smaller than 1 or larger than the number of elements in `SourceUrls`.
 * @method void setFileIndex(integer $FileIndex) Set The index of the video to start from.
The value of this parameter cannot be smaller than 1 or larger than the number of elements in `SourceUrls`.
 * @method integer getOffsetTime() Obtain The playback offset (seconds).
Notes:
1. This parameter should be used together with `FileIndex`.
 * @method void setOffsetTime(integer $OffsetTime) Set The playback offset (seconds).
Notes:
1. This parameter should be used together with `FileIndex`.
 * @method string getComment() Obtain The remarks for the task.
 * @method void setComment(string $Comment) Set The remarks for the task.
 * @method string getBackupSourceType() Obtain The backup source type.
PullLivePushLive: Live streaming
PullVodPushLive: Video files
Notes:
1. Backup sources are supported only if the primary source type is live streaming.
2. Leaving this parameter empty will reset the backup source.
3. When pull from the primary source is interrupted, the system will pull from the backup source.
4. If the backup source is a video file, each time the video is finished, the system will check if the primary source is recovered and will switch back if it is.
 * @method void setBackupSourceType(string $BackupSourceType) Set The backup source type.
PullLivePushLive: Live streaming
PullVodPushLive: Video files
Notes:
1. Backup sources are supported only if the primary source type is live streaming.
2. Leaving this parameter empty will reset the backup source.
3. When pull from the primary source is interrupted, the system will pull from the backup source.
4. If the backup source is a video file, each time the video is finished, the system will check if the primary source is recovered and will switch back if it is.
 * @method string getBackupSourceUrl() Obtain The URL of the backup source.
You can specify only one backup source URL.
 * @method void setBackupSourceUrl(string $BackupSourceUrl) Set The URL of the backup source.
You can specify only one backup source URL.
 * @method array getWatermarkList() Obtain The information of watermarks to add.
Notes:
1. You can add up to four watermarks to different locations of the video.
2. Make sure you use publicly accessible URLs for the watermark images.
3. Supported image formats include PNG and JPG.
4. If you change the watermark configuration of a task whose source is a list of video files, the new configuration will take effect for the next file in the list.
5. If you change the watermark configuration of a task whose source is a live stream, the new configuration will take effect immediately.
6. If you want to stop using watermarks, pass in an empty array.
7. Currently, animated watermarks are not supported.
 * @method void setWatermarkList(array $WatermarkList) Set The information of watermarks to add.
Notes:
1. You can add up to four watermarks to different locations of the video.
2. Make sure you use publicly accessible URLs for the watermark images.
3. Supported image formats include PNG and JPG.
4. If you change the watermark configuration of a task whose source is a list of video files, the new configuration will take effect for the next file in the list.
5. If you change the watermark configuration of a task whose source is a live stream, the new configuration will take effect immediately.
6. If you want to stop using watermarks, pass in an empty array.
7. Currently, animated watermarks are not supported.
 * @method integer getVodLocalMode() Obtain Whether to use local mode when the source type is video files. The default is `0`.
0: Do not use local mode
1: Use local mode
Note: If you enable local mode, MP4 files will be downloaded to local storage, and the local files will be used for push. This ensures more reliable push. Pushing a local file will incur additional fees.
 * @method void setVodLocalMode(integer $VodLocalMode) Set Whether to use local mode when the source type is video files. The default is `0`.
0: Do not use local mode
1: Use local mode
Note: If you enable local mode, MP4 files will be downloaded to local storage, and the local files will be used for push. This ensures more reliable push. Pushing a local file will incur additional fees.
 */
class ModifyLivePullStreamTaskRequest extends AbstractModel
{
    /**
     * @var string The task ID.
     */
    public $TaskId;

    /**
     * @var string The operator.
     */
    public $Operator;

    /**
     * @var array The source URL(s).
If `SourceType` is `PullLivePushLive`, you can specify only one source URL.
If `SourceType` is `PullVodPushLive`, you can specify at most 30 source URLs.
     */
    public $SourceUrls;

    /**
     * @var string The start time.
It must be in UTC format.
Example: 2019-01-08T10:00:00Z.
Note: Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
     */
    public $StartTime;

    /**
     * @var string The end time. Notes:
1. The end time must be later than the start time.
2. The end time and start time must be later than the current time.
3. The end time and start time must be less than seven days apart.
It must be in UTC format.
Example: 2019-01-08T10:00:00Z.
Note: Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
     */
    public $EndTime;

    /**
     * @var integer The number of times to loop video files.
-1: Loop indefinitely
0: Do not loop
> 0: The number of loop times. A task will end either when the videos are looped for the specified number of times or at the specified task end time, whichever is earlier.
This parameter is valid only if the source is video files.
     */
    public $VodLoopTimes;

    /**
     * @var string The behavior after the source video files (`SourceUrls`) are changed.
ImmediateNewSource: Play the new videos immediately
ContinueBreakPoint: Finish the current video first and then pull from the new source.
This parameter is valid only if the source is video files.
     */
    public $VodRefreshType;

    /**
     * @var string Whether to enable or pause the task. Valid values:
enable
pause
     */
    public $Status;

    /**
     * @var array The events to listen for. If you do not pass this parameter, all events will be listened for.
TaskStart: Callback for starting a task
TaskExit: Callback for ending a task
VodSourceFileStart: Callback for starting to pull from video files
VodSourceFileFinish: Callback for stopping pulling from video files
ResetTaskConfig: Callback for modifying a task
     */
    public $CallbackEvents;

    /**
     * @var string A custom callback URL.
Callbacks will be sent to this URL.
     */
    public $CallbackUrl;

    /**
     * @var integer The index of the video to start from.
The value of this parameter cannot be smaller than 1 or larger than the number of elements in `SourceUrls`.
     */
    public $FileIndex;

    /**
     * @var integer The playback offset (seconds).
Notes:
1. This parameter should be used together with `FileIndex`.
     */
    public $OffsetTime;

    /**
     * @var string The remarks for the task.
     */
    public $Comment;

    /**
     * @var string The backup source type.
PullLivePushLive: Live streaming
PullVodPushLive: Video files
Notes:
1. Backup sources are supported only if the primary source type is live streaming.
2. Leaving this parameter empty will reset the backup source.
3. When pull from the primary source is interrupted, the system will pull from the backup source.
4. If the backup source is a video file, each time the video is finished, the system will check if the primary source is recovered and will switch back if it is.
     */
    public $BackupSourceType;

    /**
     * @var string The URL of the backup source.
You can specify only one backup source URL.
     */
    public $BackupSourceUrl;

    /**
     * @var array The information of watermarks to add.
Notes:
1. You can add up to four watermarks to different locations of the video.
2. Make sure you use publicly accessible URLs for the watermark images.
3. Supported image formats include PNG and JPG.
4. If you change the watermark configuration of a task whose source is a list of video files, the new configuration will take effect for the next file in the list.
5. If you change the watermark configuration of a task whose source is a live stream, the new configuration will take effect immediately.
6. If you want to stop using watermarks, pass in an empty array.
7. Currently, animated watermarks are not supported.
     */
    public $WatermarkList;

    /**
     * @var integer Whether to use local mode when the source type is video files. The default is `0`.
0: Do not use local mode
1: Use local mode
Note: If you enable local mode, MP4 files will be downloaded to local storage, and the local files will be used for push. This ensures more reliable push. Pushing a local file will incur additional fees.
     */
    public $VodLocalMode;

    /**
     * @param string $TaskId The task ID.
     * @param string $Operator The operator.
     * @param array $SourceUrls The source URL(s).
If `SourceType` is `PullLivePushLive`, you can specify only one source URL.
If `SourceType` is `PullVodPushLive`, you can specify at most 30 source URLs.
     * @param string $StartTime The start time.
It must be in UTC format.
Example: 2019-01-08T10:00:00Z.
Note: Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
     * @param string $EndTime The end time. Notes:
1. The end time must be later than the start time.
2. The end time and start time must be later than the current time.
3. The end time and start time must be less than seven days apart.
It must be in UTC format.
Example: 2019-01-08T10:00:00Z.
Note: Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
     * @param integer $VodLoopTimes The number of times to loop video files.
-1: Loop indefinitely
0: Do not loop
> 0: The number of loop times. A task will end either when the videos are looped for the specified number of times or at the specified task end time, whichever is earlier.
This parameter is valid only if the source is video files.
     * @param string $VodRefreshType The behavior after the source video files (`SourceUrls`) are changed.
ImmediateNewSource: Play the new videos immediately
ContinueBreakPoint: Finish the current video first and then pull from the new source.
This parameter is valid only if the source is video files.
     * @param string $Status Whether to enable or pause the task. Valid values:
enable
pause
     * @param array $CallbackEvents The events to listen for. If you do not pass this parameter, all events will be listened for.
TaskStart: Callback for starting a task
TaskExit: Callback for ending a task
VodSourceFileStart: Callback for starting to pull from video files
VodSourceFileFinish: Callback for stopping pulling from video files
ResetTaskConfig: Callback for modifying a task
     * @param string $CallbackUrl A custom callback URL.
Callbacks will be sent to this URL.
     * @param integer $FileIndex The index of the video to start from.
The value of this parameter cannot be smaller than 1 or larger than the number of elements in `SourceUrls`.
     * @param integer $OffsetTime The playback offset (seconds).
Notes:
1. This parameter should be used together with `FileIndex`.
     * @param string $Comment The remarks for the task.
     * @param string $BackupSourceType The backup source type.
PullLivePushLive: Live streaming
PullVodPushLive: Video files
Notes:
1. Backup sources are supported only if the primary source type is live streaming.
2. Leaving this parameter empty will reset the backup source.
3. When pull from the primary source is interrupted, the system will pull from the backup source.
4. If the backup source is a video file, each time the video is finished, the system will check if the primary source is recovered and will switch back if it is.
     * @param string $BackupSourceUrl The URL of the backup source.
You can specify only one backup source URL.
     * @param array $WatermarkList The information of watermarks to add.
Notes:
1. You can add up to four watermarks to different locations of the video.
2. Make sure you use publicly accessible URLs for the watermark images.
3. Supported image formats include PNG and JPG.
4. If you change the watermark configuration of a task whose source is a list of video files, the new configuration will take effect for the next file in the list.
5. If you change the watermark configuration of a task whose source is a live stream, the new configuration will take effect immediately.
6. If you want to stop using watermarks, pass in an empty array.
7. Currently, animated watermarks are not supported.
     * @param integer $VodLocalMode Whether to use local mode when the source type is video files. The default is `0`.
0: Do not use local mode
1: Use local mode
Note: If you enable local mode, MP4 files will be downloaded to local storage, and the local files will be used for push. This ensures more reliable push. Pushing a local file will incur additional fees.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("SourceUrls",$param) and $param["SourceUrls"] !== null) {
            $this->SourceUrls = $param["SourceUrls"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("VodLoopTimes",$param) and $param["VodLoopTimes"] !== null) {
            $this->VodLoopTimes = $param["VodLoopTimes"];
        }

        if (array_key_exists("VodRefreshType",$param) and $param["VodRefreshType"] !== null) {
            $this->VodRefreshType = $param["VodRefreshType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CallbackEvents",$param) and $param["CallbackEvents"] !== null) {
            $this->CallbackEvents = $param["CallbackEvents"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("FileIndex",$param) and $param["FileIndex"] !== null) {
            $this->FileIndex = $param["FileIndex"];
        }

        if (array_key_exists("OffsetTime",$param) and $param["OffsetTime"] !== null) {
            $this->OffsetTime = $param["OffsetTime"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("BackupSourceType",$param) and $param["BackupSourceType"] !== null) {
            $this->BackupSourceType = $param["BackupSourceType"];
        }

        if (array_key_exists("BackupSourceUrl",$param) and $param["BackupSourceUrl"] !== null) {
            $this->BackupSourceUrl = $param["BackupSourceUrl"];
        }

        if (array_key_exists("WatermarkList",$param) and $param["WatermarkList"] !== null) {
            $this->WatermarkList = [];
            foreach ($param["WatermarkList"] as $key => $value){
                $obj = new PullPushWatermarkInfo();
                $obj->deserialize($value);
                array_push($this->WatermarkList, $obj);
            }
        }

        if (array_key_exists("VodLocalMode",$param) and $param["VodLocalMode"] !== null) {
            $this->VodLocalMode = $param["VodLocalMode"];
        }
    }
}
