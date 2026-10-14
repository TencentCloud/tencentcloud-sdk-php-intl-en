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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Orchestration task information
 *
 * @method string getTaskId() Obtain Orchestration task ID.
 * @method void setTaskId(string $TaskId) Set Orchestration task ID.
 * @method string getStatus() Obtain Task stream status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
 * @method void setStatus(string $Status) Set Task stream status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
 * @method integer getErrCode() Obtain An error code other than 0 is returned in case of a source exception. Use the error code of the specific task when a value of 0 is returned.
 * @method void setErrCode(integer $ErrCode) Set An error code other than 0 is returned in case of a source exception. Use the error code of the specific task when a value of 0 is returned.
 * @method string getMessage() Obtain The corresponding exception message is returned in case of a source exception. If no source exception occurs, use the message of each specific task.
 * @method void setMessage(string $Message) Set The corresponding exception message is returned in case of a source exception. If no source exception occurs, use the message of each specific task.
 * @method MediaInputInfo getInputInfo() Obtain Information about the target file for media processing.
 * @method void setInputInfo(MediaInputInfo $InputInfo) Set Information about the target file for media processing.
 * @method MediaMetaData getMetaData() Obtain Metadata of the original video.
 * @method void setMetaData(MediaMetaData $MetaData) Set Metadata of the original video.
 * @method array getActivityResultSet() Obtain Output of the orchestration task.
 * @method void setActivityResultSet(array $ActivityResultSet) Set Output of the orchestration task.
 */
class ScheduleTask extends AbstractModel
{
    /**
     * @var string Orchestration task ID.
     */
    public $TaskId;

    /**
     * @var string Task stream status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
     */
    public $Status;

    /**
     * @var integer An error code other than 0 is returned in case of a source exception. Use the error code of the specific task when a value of 0 is returned.
     */
    public $ErrCode;

    /**
     * @var string The corresponding exception message is returned in case of a source exception. If no source exception occurs, use the message of each specific task.
     */
    public $Message;

    /**
     * @var MediaInputInfo Information about the target file for media processing.
     */
    public $InputInfo;

    /**
     * @var MediaMetaData Metadata of the original video.
     */
    public $MetaData;

    /**
     * @var array Output of the orchestration task.
     */
    public $ActivityResultSet;

    /**
     * @param string $TaskId Orchestration task ID.
     * @param string $Status Task stream status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
     * @param integer $ErrCode An error code other than 0 is returned in case of a source exception. Use the error code of the specific task when a value of 0 is returned.
     * @param string $Message The corresponding exception message is returned in case of a source exception. If no source exception occurs, use the message of each specific task.
     * @param MediaInputInfo $InputInfo Information about the target file for media processing.
     * @param MediaMetaData $MetaData Metadata of the original video.
     * @param array $ActivityResultSet Output of the orchestration task.
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

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("InputInfo",$param) and $param["InputInfo"] !== null) {
            $this->InputInfo = new MediaInputInfo();
            $this->InputInfo->deserialize($param["InputInfo"]);
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("ActivityResultSet",$param) and $param["ActivityResultSet"] !== null) {
            $this->ActivityResultSet = [];
            foreach ($param["ActivityResultSet"] as $key => $value){
                $obj = new ActivityResult();
                $obj->deserialize($value);
                array_push($this->ActivityResultSet, $obj);
            }
        }
    }
}
