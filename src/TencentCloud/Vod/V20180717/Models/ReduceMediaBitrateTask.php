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
 * Bitrate reduction task information
 *
 * @method string getTaskId() Obtain Video processing task ID.
 * @method void setTaskId(string $TaskId) Set Video processing task ID.
 * @method string getStatus() Obtain Task stream status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
 * @method void setStatus(string $Status) Set Task stream status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
 * @method string getFileId() Obtain Media file ID.
 * @method void setFileId(string $FileId) Set Media file ID.
 * @method string getFileName() Obtain Media filename.
 * @method void setFileName(string $FileName) Set Media filename.
 * @method string getFileUrl() Obtain Media file address.
 * @method void setFileUrl(string $FileUrl) Set Media file address.
 * @method MediaMetaData getMetaData() Obtain Metadata of the original video.
 * @method void setMetaData(MediaMetaData $MetaData) Set Metadata of the original video.
 * @method array getMediaProcessResultSet() Obtain Bitrate reduction task execution status and results.
 * @method void setMediaProcessResultSet(array $MediaProcessResultSet) Set Bitrate reduction task execution status and results.
 * @method integer getTasksPriority() Obtain Priority of the task flow, with a value range of [-10, 10].
 * @method void setTasksPriority(integer $TasksPriority) Set Priority of the task flow, with a value range of [-10, 10].
 * @method string getTasksNotifyMode() Obtain Task flow status change notification mode.
<li>Finish: An event notification is initiated only when all task flows are completed.</li>
<li>None: non-acceptance of the task flow callback.</li>
 * @method void setTasksNotifyMode(string $TasksNotifyMode) Set Task flow status change notification mode.
<li>Finish: An event notification is initiated only when all task flows are completed.</li>
<li>None: non-acceptance of the task flow callback.</li>
 * @method string getSessionContext() Obtain Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
 * @method string getSessionId() Obtain Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
 * @method void setSessionId(string $SessionId) Set Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
 */
class ReduceMediaBitrateTask extends AbstractModel
{
    /**
     * @var string Video processing task ID.
     */
    public $TaskId;

    /**
     * @var string Task stream status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
     */
    public $Status;

    /**
     * @var string Media file ID.
     */
    public $FileId;

    /**
     * @var string Media filename.
     */
    public $FileName;

    /**
     * @var string Media file address.
     */
    public $FileUrl;

    /**
     * @var MediaMetaData Metadata of the original video.
     */
    public $MetaData;

    /**
     * @var array Bitrate reduction task execution status and results.
     */
    public $MediaProcessResultSet;

    /**
     * @var integer Priority of the task flow, with a value range of [-10, 10].
     */
    public $TasksPriority;

    /**
     * @var string Task flow status change notification mode.
<li>Finish: An event notification is initiated only when all task flows are completed.</li>
<li>None: non-acceptance of the task flow callback.</li>
     */
    public $TasksNotifyMode;

    /**
     * @var string Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var string Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
     */
    public $SessionId;

    /**
     * @param string $TaskId Video processing task ID.
     * @param string $Status Task stream status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
     * @param string $FileId Media file ID.
     * @param string $FileName Media filename.
     * @param string $FileUrl Media file address.
     * @param MediaMetaData $MetaData Metadata of the original video.
     * @param array $MediaProcessResultSet Bitrate reduction task execution status and results.
     * @param integer $TasksPriority Priority of the task flow, with a value range of [-10, 10].
     * @param string $TasksNotifyMode Task flow status change notification mode.
<li>Finish: An event notification is initiated only when all task flows are completed.</li>
<li>None: non-acceptance of the task flow callback.</li>
     * @param string $SessionContext Source context, which is used to pass through the user request information. The callback for task flow status changes will return the value of this field. The maximum length is 1,000 characters.
     * @param string $SessionId Identifier for deduplication. If a request with the same identifier has been sent within the past seven days, an error is returned for the current request. The maximum length is 50 characters. If this is not specified or left empty, deduplication is not performed.
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

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("MediaProcessResultSet",$param) and $param["MediaProcessResultSet"] !== null) {
            $this->MediaProcessResultSet = [];
            foreach ($param["MediaProcessResultSet"] as $key => $value){
                $obj = new ReduceMediaBitrateMediaProcessTaskResult();
                $obj->deserialize($value);
                array_push($this->MediaProcessResultSet, $obj);
            }
        }

        if (array_key_exists("TasksPriority",$param) and $param["TasksPriority"] !== null) {
            $this->TasksPriority = $param["TasksPriority"];
        }

        if (array_key_exists("TasksNotifyMode",$param) and $param["TasksNotifyMode"] !== null) {
            $this->TasksNotifyMode = $param["TasksNotifyMode"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }
    }
}
