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
 * The information of a live scheme subtask.
 *
 * @method string getTaskId() Obtain Live orchestration task ID.
 * @method void setTaskId(string $TaskId) Set Live orchestration task ID.
 * @method string getStatus() Obtain Task stream status. Valid values:
<li>PROCESSING: processing</li>
<li>FINISH: completed</li>
 * @method void setStatus(string $Status) Set Task stream status. Valid values:
<li>PROCESSING: processing</li>
<li>FINISH: completed</li>
 * @method integer getErrCode() Obtain An error code other than 0 is returned in case of a source exception. Use the error code of the specific task when a value of 0 is returned.
 * @method void setErrCode(integer $ErrCode) Set An error code other than 0 is returned in case of a source exception. Use the error code of the specific task when a value of 0 is returned.
 * @method string getMessage() Obtain The corresponding exception message is returned in case of a source exception. If no source exception occurs, use the message of each specific task.
 * @method void setMessage(string $Message) Set The corresponding exception message is returned in case of a source exception. If no source exception occurs, use the message of each specific task.
 * @method string getUrl() Obtain Live stream URL.
 * @method void setUrl(string $Url) Set Live stream URL.
 * @method array getLiveActivityResultSet() Obtain The task output.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLiveActivityResultSet(array $LiveActivityResultSet) Set The task output.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class LiveScheduleTask extends AbstractModel
{
    /**
     * @var string Live orchestration task ID.
     */
    public $TaskId;

    /**
     * @var string Task stream status. Valid values:
<li>PROCESSING: processing</li>
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
     * @var string Live stream URL.
     */
    public $Url;

    /**
     * @var array The task output.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LiveActivityResultSet;

    /**
     * @param string $TaskId Live orchestration task ID.
     * @param string $Status Task stream status. Valid values:
<li>PROCESSING: processing</li>
<li>FINISH: completed</li>
     * @param integer $ErrCode An error code other than 0 is returned in case of a source exception. Use the error code of the specific task when a value of 0 is returned.
     * @param string $Message The corresponding exception message is returned in case of a source exception. If no source exception occurs, use the message of each specific task.
     * @param string $Url Live stream URL.
     * @param array $LiveActivityResultSet The task output.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("LiveActivityResultSet",$param) and $param["LiveActivityResultSet"] !== null) {
            $this->LiveActivityResultSet = [];
            foreach ($param["LiveActivityResultSet"] as $key => $value){
                $obj = new LiveActivityResult();
                $obj->deserialize($value);
                array_push($this->LiveActivityResultSet, $obj);
            }
        }
    }
}
