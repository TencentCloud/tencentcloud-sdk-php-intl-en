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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Real-time recording task query results.
 *
 * @method string getTaskId() Obtain Unique task ID.
 * @method void setTaskId(string $TaskId) Set Unique task ID.
 * @method string getStatus() Obtain Status of the real-time recording task.
- PAUSED: Recording paused.
- PREPARED: Recording in preparation.
- RECORDING: Recording in progress.
- STOPPED: Recording stopped.
- FINISHED: Recording finished.
 * @method void setStatus(string $Status) Set Status of the real-time recording task.
- PAUSED: Recording paused.
- PREPARED: Recording in preparation.
- RECORDING: Recording in progress.
- STOPPED: Recording stopped.
- FINISHED: Recording finished.
 * @method integer getRoomId() Obtain Room ID of the real-time recording task.
 * @method void setRoomId(integer $RoomId) Set Room ID of the real-time recording task.
 * @method string getCreateTime() Obtain Creation time of the task.
 * @method void setCreateTime(string $CreateTime) Set Creation time of the task.
 * @method integer getSdkAppId() Obtain SdkAppId of the whiteboard application.
 * @method void setSdkAppId(integer $SdkAppId) Set SdkAppId of the whiteboard application.
 * @method RecordTaskResult getResult() Obtain Real-time recording result.
 * @method void setResult(RecordTaskResult $Result) Set Real-time recording result.
 */
class RecordTaskSearchResult extends AbstractModel
{
    /**
     * @var string Unique task ID.
     */
    public $TaskId;

    /**
     * @var string Status of the real-time recording task.
- PAUSED: Recording paused.
- PREPARED: Recording in preparation.
- RECORDING: Recording in progress.
- STOPPED: Recording stopped.
- FINISHED: Recording finished.
     */
    public $Status;

    /**
     * @var integer Room ID of the real-time recording task.
     */
    public $RoomId;

    /**
     * @var string Creation time of the task.
     */
    public $CreateTime;

    /**
     * @var integer SdkAppId of the whiteboard application.
     */
    public $SdkAppId;

    /**
     * @var RecordTaskResult Real-time recording result.
     */
    public $Result;

    /**
     * @param string $TaskId Unique task ID.
     * @param string $Status Status of the real-time recording task.
- PAUSED: Recording paused.
- PREPARED: Recording in preparation.
- RECORDING: Recording in progress.
- STOPPED: Recording stopped.
- FINISHED: Recording finished.
     * @param integer $RoomId Room ID of the real-time recording task.
     * @param string $CreateTime Creation time of the task.
     * @param integer $SdkAppId SdkAppId of the whiteboard application.
     * @param RecordTaskResult $Result Real-time recording result.
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

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = new RecordTaskResult();
            $this->Result->deserialize($param["Result"]);
        }
    }
}
