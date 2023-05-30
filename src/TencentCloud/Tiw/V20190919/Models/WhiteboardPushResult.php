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
 * Whiteboard push task result.
 *
 * @method string getFinishReason() Obtain `AUTO`: Pushing automatically stops. `USER_CALL`: The API for stopping pushing is called.
 * @method void setFinishReason(string $FinishReason) Set `AUTO`: Pushing automatically stops. `USER_CALL`: The API for stopping pushing is called.
 * @method integer getExceptionCnt() Obtain Number of exceptions.
 * @method void setExceptionCnt(integer $ExceptionCnt) Set Number of exceptions.
 * @method integer getRoomId() Obtain Room ID.
 * @method void setRoomId(integer $RoomId) Set Room ID.
 * @method string getGroupId() Obtain IM group ID.
 * @method void setGroupId(string $GroupId) Set IM group ID.
 * @method integer getPushStartTime() Obtain Actual push start time.
 * @method void setPushStartTime(integer $PushStartTime) Set Actual push start time.
 * @method integer getPushStopTime() Obtain Push end time.
 * @method void setPushStopTime(integer $PushStopTime) Set Push end time.
 * @method integer getIMSyncTime() Obtain IM timestamp corresponding to the first frame of the whiteboard push video. The timestamp is used for time synchronization between IM messages and the whiteboard push video during playback.
 * @method void setIMSyncTime(integer $IMSyncTime) Set IM timestamp corresponding to the first frame of the whiteboard push video. The timestamp is used for time synchronization between IM messages and the whiteboard push video during playback.
 * @method integer getErrorCode() Obtain Task execution error code.
 * @method void setErrorCode(integer $ErrorCode) Set Task execution error code.
 * @method string getErrorMsg() Obtain Error message.
 * @method void setErrorMsg(string $ErrorMsg) Set Error message.
 */
class WhiteboardPushResult extends AbstractModel
{
    /**
     * @var string `AUTO`: Pushing automatically stops. `USER_CALL`: The API for stopping pushing is called.
     */
    public $FinishReason;

    /**
     * @var integer Number of exceptions.
     */
    public $ExceptionCnt;

    /**
     * @var integer Room ID.
     */
    public $RoomId;

    /**
     * @var string IM group ID.
     */
    public $GroupId;

    /**
     * @var integer Actual push start time.
     */
    public $PushStartTime;

    /**
     * @var integer Push end time.
     */
    public $PushStopTime;

    /**
     * @var integer IM timestamp corresponding to the first frame of the whiteboard push video. The timestamp is used for time synchronization between IM messages and the whiteboard push video during playback.
     */
    public $IMSyncTime;

    /**
     * @var integer Task execution error code.
     */
    public $ErrorCode;

    /**
     * @var string Error message.
     */
    public $ErrorMsg;

    /**
     * @param string $FinishReason `AUTO`: Pushing automatically stops. `USER_CALL`: The API for stopping pushing is called.
     * @param integer $ExceptionCnt Number of exceptions.
     * @param integer $RoomId Room ID.
     * @param string $GroupId IM group ID.
     * @param integer $PushStartTime Actual push start time.
     * @param integer $PushStopTime Push end time.
     * @param integer $IMSyncTime IM timestamp corresponding to the first frame of the whiteboard push video. The timestamp is used for time synchronization between IM messages and the whiteboard push video during playback.
     * @param integer $ErrorCode Task execution error code.
     * @param string $ErrorMsg Error message.
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
        if (array_key_exists("FinishReason",$param) and $param["FinishReason"] !== null) {
            $this->FinishReason = $param["FinishReason"];
        }

        if (array_key_exists("ExceptionCnt",$param) and $param["ExceptionCnt"] !== null) {
            $this->ExceptionCnt = $param["ExceptionCnt"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("PushStartTime",$param) and $param["PushStartTime"] !== null) {
            $this->PushStartTime = $param["PushStartTime"];
        }

        if (array_key_exists("PushStopTime",$param) and $param["PushStopTime"] !== null) {
            $this->PushStopTime = $param["PushStopTime"];
        }

        if (array_key_exists("IMSyncTime",$param) and $param["IMSyncTime"] !== null) {
            $this->IMSyncTime = $param["IMSyncTime"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }
    }
}
