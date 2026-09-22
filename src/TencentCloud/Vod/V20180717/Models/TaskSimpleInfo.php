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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task summary information.
 *
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method string getStatus() Obtain Task status. Valid values: WAITING (Waiting), PROCESSING (Processing), FINISH (Completed), ABORTED (Terminated).
 * @method void setStatus(string $Status) Set Task status. Valid values: WAITING (Waiting), PROCESSING (Processing), FINISH (Completed), ABORTED (Terminated).
 * @method string getFileId() Obtain Video ID.
 * @method void setFileId(string $FileId) Set Video ID.
 * @method string getTaskType() Obtain Task type. Value:
<li>Procedure: video processing task;</li>
<li>EditMedia: video editing task;</li>
<li>ReduceMediaBitrate: bitrate reduction task;</li>
<li>WechatDistribute: publishing on WeChat task;</li>
<li>ReviewAudioVideo: audio/video moderation task;</li>
<li>MPSWorkflowTask: MPS video processing task.</li>
Task types compatible with the 2017 version:
<li>Transcode: video transcoding task;</li>
<li>SnapshotByTimeOffset: video screencapturing task;</li>
<li>Concat: video splicing job;</li>
<li>Clip: video clipping task;</li>
<li>ImageSprites: capture CSS sprites task.</li>

 * @method void setTaskType(string $TaskType) Set Task type. Value:
<li>Procedure: video processing task;</li>
<li>EditMedia: video editing task;</li>
<li>ReduceMediaBitrate: bitrate reduction task;</li>
<li>WechatDistribute: publishing on WeChat task;</li>
<li>ReviewAudioVideo: audio/video moderation task;</li>
<li>MPSWorkflowTask: MPS video processing task.</li>
Task types compatible with the 2017 version:
<li>Transcode: video transcoding task;</li>
<li>SnapshotByTimeOffset: video screencapturing task;</li>
<li>Concat: video splicing job;</li>
<li>Clip: video clipping task;</li>
<li>ImageSprites: capture CSS sprites task.</li>

 * @method string getCreateTime() Obtain Task creation time in [ISO datetime format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Task creation time in [ISO datetime format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getBeginProcessTime() Obtain Task execution start time in [ISO datetime format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). If the task has not started, this field is empty.
 * @method void setBeginProcessTime(string $BeginProcessTime) Set Task execution start time in [ISO datetime format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). If the task has not started, this field is empty.
 * @method string getFinishTime() Obtain Task end time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). If the task is not completed yet, this field is empty.
 * @method void setFinishTime(string $FinishTime) Set Task end time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). If the task is not completed yet, this field is empty.
 * @method string getSessionId() Obtain Identification code for deduplication, if there has been a request with the same identifier within the past seven days.
 * @method void setSessionId(string $SessionId) Set Identification code for deduplication, if there has been a request with the same identifier within the past seven days.
 * @method string getSessionContext() Obtain Source context, used to pass through user request information.
 * @method void setSessionContext(string $SessionContext) Set Source context, used to pass through user request information.
 */
class TaskSimpleInfo extends AbstractModel
{
    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var string Task status. Valid values: WAITING (Waiting), PROCESSING (Processing), FINISH (Completed), ABORTED (Terminated).
     */
    public $Status;

    /**
     * @var string Video ID.
     */
    public $FileId;

    /**
     * @var string Task type. Value:
<li>Procedure: video processing task;</li>
<li>EditMedia: video editing task;</li>
<li>ReduceMediaBitrate: bitrate reduction task;</li>
<li>WechatDistribute: publishing on WeChat task;</li>
<li>ReviewAudioVideo: audio/video moderation task;</li>
<li>MPSWorkflowTask: MPS video processing task.</li>
Task types compatible with the 2017 version:
<li>Transcode: video transcoding task;</li>
<li>SnapshotByTimeOffset: video screencapturing task;</li>
<li>Concat: video splicing job;</li>
<li>Clip: video clipping task;</li>
<li>ImageSprites: capture CSS sprites task.</li>

     */
    public $TaskType;

    /**
     * @var string Task creation time in [ISO datetime format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string Task execution start time in [ISO datetime format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). If the task has not started, this field is empty.
     */
    public $BeginProcessTime;

    /**
     * @var string Task end time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). If the task is not completed yet, this field is empty.
     */
    public $FinishTime;

    /**
     * @var string Identification code for deduplication, if there has been a request with the same identifier within the past seven days.
     */
    public $SessionId;

    /**
     * @var string Source context, used to pass through user request information.
     */
    public $SessionContext;

    /**
     * @param string $TaskId Task ID.
     * @param string $Status Task status. Valid values: WAITING (Waiting), PROCESSING (Processing), FINISH (Completed), ABORTED (Terminated).
     * @param string $FileId Video ID.
     * @param string $TaskType Task type. Value:
<li>Procedure: video processing task;</li>
<li>EditMedia: video editing task;</li>
<li>ReduceMediaBitrate: bitrate reduction task;</li>
<li>WechatDistribute: publishing on WeChat task;</li>
<li>ReviewAudioVideo: audio/video moderation task;</li>
<li>MPSWorkflowTask: MPS video processing task.</li>
Task types compatible with the 2017 version:
<li>Transcode: video transcoding task;</li>
<li>SnapshotByTimeOffset: video screencapturing task;</li>
<li>Concat: video splicing job;</li>
<li>Clip: video clipping task;</li>
<li>ImageSprites: capture CSS sprites task.</li>

     * @param string $CreateTime Task creation time in [ISO datetime format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $BeginProcessTime Task execution start time in [ISO datetime format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). If the task has not started, this field is empty.
     * @param string $FinishTime Task end time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I). If the task is not completed yet, this field is empty.
     * @param string $SessionId Identification code for deduplication, if there has been a request with the same identifier within the past seven days.
     * @param string $SessionContext Source context, used to pass through user request information.
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("BeginProcessTime",$param) and $param["BeginProcessTime"] !== null) {
            $this->BeginProcessTime = $param["BeginProcessTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }
    }
}
