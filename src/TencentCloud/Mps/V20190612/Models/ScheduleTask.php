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
 * Orchestration task info
 *
 * @method string getTaskId() Obtain Orchestration task ID.
 * @method void setTaskId(string $TaskId) Set Orchestration task ID.
 * @method string getStatus() Obtain Task flow status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
 * @method void setStatus(string $Status) Set Task flow status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
 * @method integer getErrCode() Obtain An error code other than 0 is returned in case of a source exception. Use the error code of the specific task when a value of 0 is returned.
 * @method void setErrCode(integer $ErrCode) Set An error code other than 0 is returned in case of a source exception. Use the error code of the specific task when a value of 0 is returned.
 * @method string getMessage() Obtain The corresponding exception message is returned in case of a source exception. If no source exception occurs, use the message of each specific task.
 * @method void setMessage(string $Message) Set The corresponding exception message is returned in case of a source exception. If no source exception occurs, use the message of each specific task.
 * @method MediaInputInfo getInputInfo() Obtain 
 * @method void setInputInfo(MediaInputInfo $InputInfo) Set 
 * @method MediaMetaData getMetaData() Obtain 
 * @method void setMetaData(MediaMetaData $MetaData) Set 
 * @method array getActivityResultSet() Obtain 
 * @method void setActivityResultSet(array $ActivityResultSet) Set 
 */
class ScheduleTask extends AbstractModel
{
    /**
     * @var string Orchestration task ID.
     */
    public $TaskId;

    /**
     * @var string Task flow status. Valid values:
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
     * @var MediaInputInfo 
     */
    public $InputInfo;

    /**
     * @var MediaMetaData 
     */
    public $MetaData;

    /**
     * @var array 
     */
    public $ActivityResultSet;

    /**
     * @param string $TaskId Orchestration task ID.
     * @param string $Status Task flow status. Valid values:
<li>PROCESSING: Processing;</li>
<li>FINISH: completed</li>
     * @param integer $ErrCode An error code other than 0 is returned in case of a source exception. Use the error code of the specific task when a value of 0 is returned.
     * @param string $Message The corresponding exception message is returned in case of a source exception. If no source exception occurs, use the message of each specific task.
     * @param MediaInputInfo $InputInfo 
     * @param MediaMetaData $MetaData 
     * @param array $ActivityResultSet 
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
