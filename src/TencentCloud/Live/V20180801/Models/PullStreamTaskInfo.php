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
 * The information of a stream pulling task.
 *
 * @method string getTaskId() Obtain The task ID.
 * @method void setTaskId(string $TaskId) Set The task ID.
 * @method string getSourceType() Obtain The source type. Valid values:
PullLivePushLive: Live streaming
PullVodPushLive: Video files
PullPicPushLive: Images
 * @method void setSourceType(string $SourceType) Set The source type. Valid values:
PullLivePushLive: Live streaming
PullVodPushLive: Video files
PullPicPushLive: Images
 * @method array getSourceUrls() Obtain The source URL(s).
If `SourceType` is `PullLiveToLive`, there can be only one source URL.
If `SourceType` is `PullVodToLive`, there can be at most 10 source URLs.
 * @method void setSourceUrls(array $SourceUrls) Set The source URL(s).
If `SourceType` is `PullLiveToLive`, there can be only one source URL.
If `SourceType` is `PullVodToLive`, there can be at most 10 source URLs.
 * @method string getDomainName() Obtain The push domain name.
The pulled stream is pushed to this domain.
 * @method void setDomainName(string $DomainName) Set The push domain name.
The pulled stream is pushed to this domain.
 * @method string getAppName() Obtain The application to push to.
The pulled stream is pushed to this application.
 * @method void setAppName(string $AppName) Set The application to push to.
The pulled stream is pushed to this application.
 * @method string getStreamName() Obtain The stream name.
The pulled stream is pushed under this name.
 * @method void setStreamName(string $StreamName) Set The stream name.
The pulled stream is pushed under this name.
 * @method string getPushArgs() Obtain The push parameter.
A custom push parameter.
 * @method void setPushArgs(string $PushArgs) Set The push parameter.
A custom push parameter.
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
 * @method string getRegion() Obtain The region where the task was created.
`ap-beijing`: North China (Beijing)
`ap-shanghai`: East China (Shanghai)
`ap-guangzhou`: South China (Guangzhou)
`ap-mumbai`: India
`ap-hongkong`: Hong Kong
`eu-frankfurt`: Germany
`ap-seoul`: Korea
`ap-bangkok`: Thailand
`ap-singapore`: Singapore
`na-siliconvalley`: Western US
`na-ashburn`: Eastern US
`ap-tokyo`: Japan
 * @method void setRegion(string $Region) Set The region where the task was created.
`ap-beijing`: North China (Beijing)
`ap-shanghai`: East China (Shanghai)
`ap-guangzhou`: South China (Guangzhou)
`ap-mumbai`: India
`ap-hongkong`: Hong Kong
`eu-frankfurt`: Germany
`ap-seoul`: Korea
`ap-bangkok`: Thailand
`ap-singapore`: Singapore
`na-siliconvalley`: Western US
`na-ashburn`: Eastern US
`ap-tokyo`: Japan
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
 * @method string getCreateTime() Obtain The task creation time.
It must be in UTC format.
Example: 2019-01-08T10:00:00Z.
Note: Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
 * @method void setCreateTime(string $CreateTime) Set The task creation time.
It must be in UTC format.
Example: 2019-01-08T10:00:00Z.
Note: Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
 * @method string getUpdateTime() Obtain The last updated time.
It must be in UTC format.
Example: 2019-01-08T10:00:00Z.
Note: Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
 * @method void setUpdateTime(string $UpdateTime) Set The last updated time.
It must be in UTC format.
Example: 2019-01-08T10:00:00Z.
Note: Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
 * @method string getCreateBy() Obtain The task creator.
 * @method void setCreateBy(string $CreateBy) Set The task creator.
 * @method string getUpdateBy() Obtain The operator of the last update.
 * @method void setUpdateBy(string $UpdateBy) Set The operator of the last update.
 * @method string getCallbackUrl() Obtain The callback URL.
 * @method void setCallbackUrl(string $CallbackUrl) Set The callback URL.
 * @method array getCallbackEvents() Obtain The events to listen for.
TaskStart: Callback for starting a task
TaskExit: Callback for ending a task
VodSourceFileStart: Callback for starting to pull from video files
VodSourceFileFinish: Callback for stopping pulling from video files
ResetTaskConfig: Callback for modifying a task
 * @method void setCallbackEvents(array $CallbackEvents) Set The events to listen for.
TaskStart: Callback for starting a task
TaskExit: Callback for ending a task
VodSourceFileStart: Callback for starting to pull from video files
VodSourceFileFinish: Callback for stopping pulling from video files
ResetTaskConfig: Callback for modifying a task
 * @method string getCallbackInfo() Obtain Note: This parameter is not returned currently.
The information of the last callback.
 * @method void setCallbackInfo(string $CallbackInfo) Set Note: This parameter is not returned currently.
The information of the last callback.
 * @method string getErrorInfo() Obtain Note: This parameter is not returned currently.
Error message.
 * @method void setErrorInfo(string $ErrorInfo) Set Note: This parameter is not returned currently.
Error message.
 * @method string getStatus() Obtain The task status.
enable: Enabled
pause: Paused
 * @method void setStatus(string $Status) Set The task status.
enable: Enabled
pause: Paused
 * @method RecentPullInfo getRecentPullInfo() Obtain Note: This parameter is returned only if one task is queried.
The latest pull information.
The information includes the source URL, offset, and report time.
 * @method void setRecentPullInfo(RecentPullInfo $RecentPullInfo) Set Note: This parameter is returned only if one task is queried.
The latest pull information.
The information includes the source URL, offset, and report time.
 * @method string getComment() Obtain The remarks for the task.
 * @method void setComment(string $Comment) Set The remarks for the task.
 * @method string getBackupSourceType() Obtain The backup source type. Valid values:
PullLivePushLive: Live streaming
PullVodPushLive: Video files
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupSourceType(string $BackupSourceType) Set The backup source type. Valid values:
PullLivePushLive: Live streaming
PullVodPushLive: Video files
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getBackupSourceUrl() Obtain The URL of the backup source.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBackupSourceUrl(string $BackupSourceUrl) Set The URL of the backup source.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getWatermarkList() Obtain The information of watermarks to add.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setWatermarkList(array $WatermarkList) Set The information of watermarks to add.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getVodLocalMode() Obtain Whether to use local mode when the source type is video files. The default is `0`.
0: Do not use local mode
1: Use local mode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVodLocalMode(integer $VodLocalMode) Set Whether to use local mode when the source type is video files. The default is `0`.
0: Do not use local mode
1: Use local mode
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getRecordTemplateId() Obtain  Recording template ID.
 * @method void setRecordTemplateId(string $RecordTemplateId) Set  Recording template ID.
 * @method string getBackupToUrl() Obtain Newly added streaming address. Used for the scenario of pushing two streams with a single task.
 * @method void setBackupToUrl(string $BackupToUrl) Set Newly added streaming address. Used for the scenario of pushing two streams with a single task.
 */
class PullStreamTaskInfo extends AbstractModel
{
    /**
     * @var string The task ID.
     */
    public $TaskId;

    /**
     * @var string The source type. Valid values:
PullLivePushLive: Live streaming
PullVodPushLive: Video files
PullPicPushLive: Images
     */
    public $SourceType;

    /**
     * @var array The source URL(s).
If `SourceType` is `PullLiveToLive`, there can be only one source URL.
If `SourceType` is `PullVodToLive`, there can be at most 10 source URLs.
     */
    public $SourceUrls;

    /**
     * @var string The push domain name.
The pulled stream is pushed to this domain.
     */
    public $DomainName;

    /**
     * @var string The application to push to.
The pulled stream is pushed to this application.
     */
    public $AppName;

    /**
     * @var string The stream name.
The pulled stream is pushed under this name.
     */
    public $StreamName;

    /**
     * @var string The push parameter.
A custom push parameter.
     */
    public $PushArgs;

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
     * @var string The region where the task was created.
`ap-beijing`: North China (Beijing)
`ap-shanghai`: East China (Shanghai)
`ap-guangzhou`: South China (Guangzhou)
`ap-mumbai`: India
`ap-hongkong`: Hong Kong
`eu-frankfurt`: Germany
`ap-seoul`: Korea
`ap-bangkok`: Thailand
`ap-singapore`: Singapore
`na-siliconvalley`: Western US
`na-ashburn`: Eastern US
`ap-tokyo`: Japan
     */
    public $Region;

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
     * @var string The task creation time.
It must be in UTC format.
Example: 2019-01-08T10:00:00Z.
Note: Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
     */
    public $CreateTime;

    /**
     * @var string The last updated time.
It must be in UTC format.
Example: 2019-01-08T10:00:00Z.
Note: Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
     */
    public $UpdateTime;

    /**
     * @var string The task creator.
     */
    public $CreateBy;

    /**
     * @var string The operator of the last update.
     */
    public $UpdateBy;

    /**
     * @var string The callback URL.
     */
    public $CallbackUrl;

    /**
     * @var array The events to listen for.
TaskStart: Callback for starting a task
TaskExit: Callback for ending a task
VodSourceFileStart: Callback for starting to pull from video files
VodSourceFileFinish: Callback for stopping pulling from video files
ResetTaskConfig: Callback for modifying a task
     */
    public $CallbackEvents;

    /**
     * @var string Note: This parameter is not returned currently.
The information of the last callback.
     */
    public $CallbackInfo;

    /**
     * @var string Note: This parameter is not returned currently.
Error message.
     */
    public $ErrorInfo;

    /**
     * @var string The task status.
enable: Enabled
pause: Paused
     */
    public $Status;

    /**
     * @var RecentPullInfo Note: This parameter is returned only if one task is queried.
The latest pull information.
The information includes the source URL, offset, and report time.
     */
    public $RecentPullInfo;

    /**
     * @var string The remarks for the task.
     */
    public $Comment;

    /**
     * @var string The backup source type. Valid values:
PullLivePushLive: Live streaming
PullVodPushLive: Video files
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupSourceType;

    /**
     * @var string The URL of the backup source.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BackupSourceUrl;

    /**
     * @var array The information of watermarks to add.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $WatermarkList;

    /**
     * @var integer Whether to use local mode when the source type is video files. The default is `0`.
0: Do not use local mode
1: Use local mode
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VodLocalMode;

    /**
     * @var string  Recording template ID.
     */
    public $RecordTemplateId;

    /**
     * @var string Newly added streaming address. Used for the scenario of pushing two streams with a single task.
     */
    public $BackupToUrl;

    /**
     * @param string $TaskId The task ID.
     * @param string $SourceType The source type. Valid values:
PullLivePushLive: Live streaming
PullVodPushLive: Video files
PullPicPushLive: Images
     * @param array $SourceUrls The source URL(s).
If `SourceType` is `PullLiveToLive`, there can be only one source URL.
If `SourceType` is `PullVodToLive`, there can be at most 10 source URLs.
     * @param string $DomainName The push domain name.
The pulled stream is pushed to this domain.
     * @param string $AppName The application to push to.
The pulled stream is pushed to this application.
     * @param string $StreamName The stream name.
The pulled stream is pushed under this name.
     * @param string $PushArgs The push parameter.
A custom push parameter.
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
     * @param string $Region The region where the task was created.
`ap-beijing`: North China (Beijing)
`ap-shanghai`: East China (Shanghai)
`ap-guangzhou`: South China (Guangzhou)
`ap-mumbai`: India
`ap-hongkong`: Hong Kong
`eu-frankfurt`: Germany
`ap-seoul`: Korea
`ap-bangkok`: Thailand
`ap-singapore`: Singapore
`na-siliconvalley`: Western US
`na-ashburn`: Eastern US
`ap-tokyo`: Japan
     * @param integer $VodLoopTimes The number of times to loop video files.
-1: Loop indefinitely
0: Do not loop
> 0: The number of loop times. A task will end either when the videos are looped for the specified number of times or at the specified task end time, whichever is earlier.
This parameter is valid only if the source is video files.
     * @param string $VodRefreshType The behavior after the source video files (`SourceUrls`) are changed.
ImmediateNewSource: Play the new videos immediately
ContinueBreakPoint: Finish the current video first and then pull from the new source.

This parameter is valid only if the source is video files.
     * @param string $CreateTime The task creation time.
It must be in UTC format.
Example: 2019-01-08T10:00:00Z.
Note: Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
     * @param string $UpdateTime The last updated time.
It must be in UTC format.
Example: 2019-01-08T10:00:00Z.
Note: Beijing time is 8 hours ahead of UTC. The [ISO 8601 format](https://intl.cloud.tencent.com/document/product/266/11732#iso-date-format) is used.
     * @param string $CreateBy The task creator.
     * @param string $UpdateBy The operator of the last update.
     * @param string $CallbackUrl The callback URL.
     * @param array $CallbackEvents The events to listen for.
TaskStart: Callback for starting a task
TaskExit: Callback for ending a task
VodSourceFileStart: Callback for starting to pull from video files
VodSourceFileFinish: Callback for stopping pulling from video files
ResetTaskConfig: Callback for modifying a task
     * @param string $CallbackInfo Note: This parameter is not returned currently.
The information of the last callback.
     * @param string $ErrorInfo Note: This parameter is not returned currently.
Error message.
     * @param string $Status The task status.
enable: Enabled
pause: Paused
     * @param RecentPullInfo $RecentPullInfo Note: This parameter is returned only if one task is queried.
The latest pull information.
The information includes the source URL, offset, and report time.
     * @param string $Comment The remarks for the task.
     * @param string $BackupSourceType The backup source type. Valid values:
PullLivePushLive: Live streaming
PullVodPushLive: Video files
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $BackupSourceUrl The URL of the backup source.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $WatermarkList The information of watermarks to add.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $VodLocalMode Whether to use local mode when the source type is video files. The default is `0`.
0: Do not use local mode
1: Use local mode
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $RecordTemplateId  Recording template ID.
     * @param string $BackupToUrl Newly added streaming address. Used for the scenario of pushing two streams with a single task.
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

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceUrls",$param) and $param["SourceUrls"] !== null) {
            $this->SourceUrls = $param["SourceUrls"];
        }

        if (array_key_exists("DomainName",$param) and $param["DomainName"] !== null) {
            $this->DomainName = $param["DomainName"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("StreamName",$param) and $param["StreamName"] !== null) {
            $this->StreamName = $param["StreamName"];
        }

        if (array_key_exists("PushArgs",$param) and $param["PushArgs"] !== null) {
            $this->PushArgs = $param["PushArgs"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("VodLoopTimes",$param) and $param["VodLoopTimes"] !== null) {
            $this->VodLoopTimes = $param["VodLoopTimes"];
        }

        if (array_key_exists("VodRefreshType",$param) and $param["VodRefreshType"] !== null) {
            $this->VodRefreshType = $param["VodRefreshType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreateBy",$param) and $param["CreateBy"] !== null) {
            $this->CreateBy = $param["CreateBy"];
        }

        if (array_key_exists("UpdateBy",$param) and $param["UpdateBy"] !== null) {
            $this->UpdateBy = $param["UpdateBy"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("CallbackEvents",$param) and $param["CallbackEvents"] !== null) {
            $this->CallbackEvents = $param["CallbackEvents"];
        }

        if (array_key_exists("CallbackInfo",$param) and $param["CallbackInfo"] !== null) {
            $this->CallbackInfo = $param["CallbackInfo"];
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = $param["ErrorInfo"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RecentPullInfo",$param) and $param["RecentPullInfo"] !== null) {
            $this->RecentPullInfo = new RecentPullInfo();
            $this->RecentPullInfo->deserialize($param["RecentPullInfo"]);
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

        if (array_key_exists("RecordTemplateId",$param) and $param["RecordTemplateId"] !== null) {
            $this->RecordTemplateId = $param["RecordTemplateId"];
        }

        if (array_key_exists("BackupToUrl",$param) and $param["BackupToUrl"] !== null) {
            $this->BackupToUrl = $param["BackupToUrl"];
        }
    }
}
