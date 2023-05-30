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
 * Real-time recording result.
 *
 * @method string getFinishReason() Obtain `AUTO`: Recording automatically stops. `USER_CALL`: The API for stopping recording is called.
 * @method void setFinishReason(string $FinishReason) Set `AUTO`: Recording automatically stops. `USER_CALL`: The API for stopping recording is called.
 * @method integer getExceptionCnt() Obtain Number of exceptions.
 * @method void setExceptionCnt(integer $ExceptionCnt) Set Number of exceptions.
 * @method integer getRoomId() Obtain Room ID.
 * @method void setRoomId(integer $RoomId) Set Room ID.
 * @method string getGroupId() Obtain Group ID.
 * @method void setGroupId(string $GroupId) Set Group ID.
 * @method integer getRecordStartTime() Obtain Actual recording start time.
 * @method void setRecordStartTime(integer $RecordStartTime) Set Actual recording start time.
 * @method integer getRecordStopTime() Obtain Recording end time.
 * @method void setRecordStopTime(integer $RecordStopTime) Set Recording end time.
 * @method integer getTotalTime() Obtain Recording duration.
 * @method void setTotalTime(integer $TotalTime) Set Recording duration.
 * @method array getVideoInfos() Obtain List of video information.
 * @method void setVideoInfos(array $VideoInfos) Set List of video information.
 * @method array getOmittedDurations() Obtain Omitted video durations.
 * @method void setOmittedDurations(array $OmittedDurations) Set Omitted video durations.
 * @method string getDetails() Obtain Details.
 * @method void setDetails(string $Details) Set Details.
 * @method integer getErrorCode() Obtain Task execution error code.
 * @method void setErrorCode(integer $ErrorCode) Set Task execution error code.
 * @method string getErrorMsg() Obtain Error message.
 * @method void setErrorMsg(string $ErrorMsg) Set Error message.
 */
class RecordTaskResult extends AbstractModel
{
    /**
     * @var string `AUTO`: Recording automatically stops. `USER_CALL`: The API for stopping recording is called.
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
     * @var string Group ID.
     */
    public $GroupId;

    /**
     * @var integer Actual recording start time.
     */
    public $RecordStartTime;

    /**
     * @var integer Recording end time.
     */
    public $RecordStopTime;

    /**
     * @var integer Recording duration.
     */
    public $TotalTime;

    /**
     * @var array List of video information.
     */
    public $VideoInfos;

    /**
     * @var array Omitted video durations.
     */
    public $OmittedDurations;

    /**
     * @var string Details.
     */
    public $Details;

    /**
     * @var integer Task execution error code.
     */
    public $ErrorCode;

    /**
     * @var string Error message.
     */
    public $ErrorMsg;

    /**
     * @param string $FinishReason `AUTO`: Recording automatically stops. `USER_CALL`: The API for stopping recording is called.
     * @param integer $ExceptionCnt Number of exceptions.
     * @param integer $RoomId Room ID.
     * @param string $GroupId Group ID.
     * @param integer $RecordStartTime Actual recording start time.
     * @param integer $RecordStopTime Recording end time.
     * @param integer $TotalTime Recording duration.
     * @param array $VideoInfos List of video information.
     * @param array $OmittedDurations Omitted video durations.
     * @param string $Details Details.
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

        if (array_key_exists("RecordStartTime",$param) and $param["RecordStartTime"] !== null) {
            $this->RecordStartTime = $param["RecordStartTime"];
        }

        if (array_key_exists("RecordStopTime",$param) and $param["RecordStopTime"] !== null) {
            $this->RecordStopTime = $param["RecordStopTime"];
        }

        if (array_key_exists("TotalTime",$param) and $param["TotalTime"] !== null) {
            $this->TotalTime = $param["TotalTime"];
        }

        if (array_key_exists("VideoInfos",$param) and $param["VideoInfos"] !== null) {
            $this->VideoInfos = [];
            foreach ($param["VideoInfos"] as $key => $value){
                $obj = new VideoInfo();
                $obj->deserialize($value);
                array_push($this->VideoInfos, $obj);
            }
        }

        if (array_key_exists("OmittedDurations",$param) and $param["OmittedDurations"] !== null) {
            $this->OmittedDurations = [];
            foreach ($param["OmittedDurations"] as $key => $value){
                $obj = new OmittedDuration();
                $obj->deserialize($value);
                array_push($this->OmittedDurations, $obj);
            }
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = $param["Details"];
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }
    }
}
