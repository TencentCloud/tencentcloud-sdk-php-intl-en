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
 * The information of a bitrate reduction task.
 *
 * @method string getTaskId() Obtain The task ID.
 * @method void setTaskId(string $TaskId) Set The task ID.
 * @method string getStatus() Obtain The task flow status. Valid values:
<li>PROCESSING</li>
<li>FINISH</li>
 * @method void setStatus(string $Status) Set The task flow status. Valid values:
<li>PROCESSING</li>
<li>FINISH</li>
 * @method string getFileId() Obtain The ID of the media file.
 * @method void setFileId(string $FileId) Set The ID of the media file.
 * @method string getFileName() Obtain The name of the media file.
 * @method void setFileName(string $FileName) Set The name of the media file.
 * @method string getFileUrl() Obtain The address of the media file.
 * @method void setFileUrl(string $FileUrl) Set The address of the media file.
 * @method MediaMetaData getMetaData() Obtain The metadata of the source video.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMetaData(MediaMetaData $MetaData) Set The metadata of the source video.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getMediaProcessResultSet() Obtain The execution status and result of the bitrate reduction task.
 * @method void setMediaProcessResultSet(array $MediaProcessResultSet) Set The execution status and result of the bitrate reduction task.
 * @method integer getTasksPriority() Obtain The task priority, which can be a value from -10 to 10.
 * @method void setTasksPriority(integer $TasksPriority) Set The task priority, which can be a value from -10 to 10.
 * @method string getTasksNotifyMode() Obtain The notification mode for the change of task status. Valid values:
<li>Finish: Send a notification after the task is completed.</li>
<li>None: Do not send status change notifications for this task.</li>
 * @method void setTasksNotifyMode(string $TasksNotifyMode) Set The notification mode for the change of task status. Valid values:
<li>Finish: Send a notification after the task is completed.</li>
<li>None: Do not send status change notifications for this task.</li>
 * @method string getSessionContext() Obtain The source context, which is used to pass through user request information. The `ProcedureStateChanged` callback will return the value of this parameter. It can contain up to 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set The source context, which is used to pass through user request information. The `ProcedureStateChanged` callback will return the value of this parameter. It can contain up to 1,000 characters.
 * @method string getSessionId() Obtain The session ID, which is used for de-duplication. If there was a request with the same session ID in the last seven days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
 * @method void setSessionId(string $SessionId) Set The session ID, which is used for de-duplication. If there was a request with the same session ID in the last seven days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
 */
class ReduceMediaBitrateTask extends AbstractModel
{
    /**
     * @var string The task ID.
     */
    public $TaskId;

    /**
     * @var string The task flow status. Valid values:
<li>PROCESSING</li>
<li>FINISH</li>
     */
    public $Status;

    /**
     * @var string The ID of the media file.
     */
    public $FileId;

    /**
     * @var string The name of the media file.
     */
    public $FileName;

    /**
     * @var string The address of the media file.
     */
    public $FileUrl;

    /**
     * @var MediaMetaData The metadata of the source video.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $MetaData;

    /**
     * @var array The execution status and result of the bitrate reduction task.
     */
    public $MediaProcessResultSet;

    /**
     * @var integer The task priority, which can be a value from -10 to 10.
     */
    public $TasksPriority;

    /**
     * @var string The notification mode for the change of task status. Valid values:
<li>Finish: Send a notification after the task is completed.</li>
<li>None: Do not send status change notifications for this task.</li>
     */
    public $TasksNotifyMode;

    /**
     * @var string The source context, which is used to pass through user request information. The `ProcedureStateChanged` callback will return the value of this parameter. It can contain up to 1,000 characters.
     */
    public $SessionContext;

    /**
     * @var string The session ID, which is used for de-duplication. If there was a request with the same session ID in the last seven days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
     */
    public $SessionId;

    /**
     * @param string $TaskId The task ID.
     * @param string $Status The task flow status. Valid values:
<li>PROCESSING</li>
<li>FINISH</li>
     * @param string $FileId The ID of the media file.
     * @param string $FileName The name of the media file.
     * @param string $FileUrl The address of the media file.
     * @param MediaMetaData $MetaData The metadata of the source video.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $MediaProcessResultSet The execution status and result of the bitrate reduction task.
     * @param integer $TasksPriority The task priority, which can be a value from -10 to 10.
     * @param string $TasksNotifyMode The notification mode for the change of task status. Valid values:
<li>Finish: Send a notification after the task is completed.</li>
<li>None: Do not send status change notifications for this task.</li>
     * @param string $SessionContext The source context, which is used to pass through user request information. The `ProcedureStateChanged` callback will return the value of this parameter. It can contain up to 1,000 characters.
     * @param string $SessionId The session ID, which is used for de-duplication. If there was a request with the same session ID in the last seven days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
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
