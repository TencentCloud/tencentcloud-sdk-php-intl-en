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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Task overview information
 *
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method string getStatus() Obtain Task status. Valid values: `WAITING` (waiting), `PROCESSING` (processing), `FINISH` (completed)
 * @method void setStatus(string $Status) Set Task status. Valid values: `WAITING` (waiting), `PROCESSING` (processing), `FINISH` (completed)
 * @method string getFileId() Obtain Video ID
 * @method void setFileId(string $FileId) Set Video ID
 * @method string getTaskType() Obtain The task type. Valid values:
<li>`Procedure`: Video processing</li>
<li>`EditMedia`: Video editing</li>
<li>`ReduceMediaBitrate`: Bitrate reduction</li>
<li>`WechatDistribute`: Publishing to Weixin</li>
<li> `ReviewAudioVideo`: Moderation</li>
Task types for v2017:
<li>`Transcode`: Transcoding</li>
<li>`SnapshotByTimeOffset`: Screencapturing</li>
<li>`Concat`: Video splicing</li>
<li>`Clip`: Video clipping</li>
<li>`ImageSprites`: Image sprite generating</li>
 * @method void setTaskType(string $TaskType) Set The task type. Valid values:
<li>`Procedure`: Video processing</li>
<li>`EditMedia`: Video editing</li>
<li>`ReduceMediaBitrate`: Bitrate reduction</li>
<li>`WechatDistribute`: Publishing to Weixin</li>
<li> `ReviewAudioVideo`: Moderation</li>
Task types for v2017:
<li>`Transcode`: Transcoding</li>
<li>`SnapshotByTimeOffset`: Screencapturing</li>
<li>`Concat`: Video splicing</li>
<li>`Clip`: Video clipping</li>
<li>`ImageSprites`: Image sprite generating</li>
 * @method string getCreateTime() Obtain Creation time of task in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setCreateTime(string $CreateTime) Set Creation time of task in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getBeginProcessTime() Obtain Start time of task execution in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I). If the task has not been started yet, this field will be empty.
 * @method void setBeginProcessTime(string $BeginProcessTime) Set Start time of task execution in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I). If the task has not been started yet, this field will be empty.
 * @method string getFinishTime() Obtain End time of task in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I). If the task has not been completed yet, this field will be empty.
 * @method void setFinishTime(string $FinishTime) Set End time of task in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I). If the task has not been completed yet, this field will be empty.
 * @method string getSessionId() Obtain ID used for deduplication if there was a request with the same ID in the last seven days.
 * @method void setSessionId(string $SessionId) Set ID used for deduplication if there was a request with the same ID in the last seven days.
 * @method string getSessionContext() Obtain Source context, which is used to pass through the user request information.
 * @method void setSessionContext(string $SessionContext) Set Source context, which is used to pass through the user request information.
 */
class TaskSimpleInfo extends AbstractModel
{
    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var string Task status. Valid values: `WAITING` (waiting), `PROCESSING` (processing), `FINISH` (completed)
     */
    public $Status;

    /**
     * @var string Video ID
     */
    public $FileId;

    /**
     * @var string The task type. Valid values:
<li>`Procedure`: Video processing</li>
<li>`EditMedia`: Video editing</li>
<li>`ReduceMediaBitrate`: Bitrate reduction</li>
<li>`WechatDistribute`: Publishing to Weixin</li>
<li> `ReviewAudioVideo`: Moderation</li>
Task types for v2017:
<li>`Transcode`: Transcoding</li>
<li>`SnapshotByTimeOffset`: Screencapturing</li>
<li>`Concat`: Video splicing</li>
<li>`Clip`: Video clipping</li>
<li>`ImageSprites`: Image sprite generating</li>
     */
    public $TaskType;

    /**
     * @var string Creation time of task in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $CreateTime;

    /**
     * @var string Start time of task execution in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I). If the task has not been started yet, this field will be empty.
     */
    public $BeginProcessTime;

    /**
     * @var string End time of task in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I). If the task has not been completed yet, this field will be empty.
     */
    public $FinishTime;

    /**
     * @var string ID used for deduplication if there was a request with the same ID in the last seven days.
     */
    public $SessionId;

    /**
     * @var string Source context, which is used to pass through the user request information.
     */
    public $SessionContext;

    /**
     * @param string $TaskId Task ID.
     * @param string $Status Task status. Valid values: `WAITING` (waiting), `PROCESSING` (processing), `FINISH` (completed)
     * @param string $FileId Video ID
     * @param string $TaskType The task type. Valid values:
<li>`Procedure`: Video processing</li>
<li>`EditMedia`: Video editing</li>
<li>`ReduceMediaBitrate`: Bitrate reduction</li>
<li>`WechatDistribute`: Publishing to Weixin</li>
<li> `ReviewAudioVideo`: Moderation</li>
Task types for v2017:
<li>`Transcode`: Transcoding</li>
<li>`SnapshotByTimeOffset`: Screencapturing</li>
<li>`Concat`: Video splicing</li>
<li>`Clip`: Video clipping</li>
<li>`ImageSprites`: Image sprite generating</li>
     * @param string $CreateTime Creation time of task in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $BeginProcessTime Start time of task execution in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I). If the task has not been started yet, this field will be empty.
     * @param string $FinishTime End time of task in [ISO date format](https://intl.cloud.tencent.com/document/product/266/11732?from_cn_redirect=1#I). If the task has not been completed yet, this field will be empty.
     * @param string $SessionId ID used for deduplication if there was a request with the same ID in the last seven days.
     * @param string $SessionContext Source context, which is used to pass through the user request information.
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
