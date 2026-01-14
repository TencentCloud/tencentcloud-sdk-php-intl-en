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
 * MPS media processing task information.
 *
 * @method string getTaskId() Obtain The task ID.
 * @method void setTaskId(string $TaskId) Set The task ID.
 * @method string getStatus() Obtain Task status, value: <li>PROCESSING: processing;</li><li>FINISH: completed.</li>
 * @method void setStatus(string $Status) Set Task status, value: <li>PROCESSING: processing;</li><li>FINISH: completed.</li>
 * @method integer getErrCode() Obtain Error code. A non-zero error code is returned when the source is abnormal. If 0 is returned, use the ErrCode of each specific task.
 * @method void setErrCode(integer $ErrCode) Set Error code. A non-zero error code is returned when the source is abnormal. If 0 is returned, use the ErrCode of each specific task.
 * @method string getMessage() Obtain Error message. If the source is abnormal, the corresponding exception message is returned. Otherwise, use the message of each specific task.
 * @method void setMessage(string $Message) Set Error message. If the source is abnormal, the corresponding exception message is returned. Otherwise, use the message of each specific task.
 * @method array getSubTaskSet() Obtain MPS media processing tasks.
 * @method void setSubTaskSet(array $SubTaskSet) Set MPS media processing tasks.
 */
class ProcessMediaByMPS extends AbstractModel
{
    /**
     * @var string The task ID.
     */
    public $TaskId;

    /**
     * @var string Task status, value: <li>PROCESSING: processing;</li><li>FINISH: completed.</li>
     */
    public $Status;

    /**
     * @var integer Error code. A non-zero error code is returned when the source is abnormal. If 0 is returned, use the ErrCode of each specific task.
     */
    public $ErrCode;

    /**
     * @var string Error message. If the source is abnormal, the corresponding exception message is returned. Otherwise, use the message of each specific task.
     */
    public $Message;

    /**
     * @var array MPS media processing tasks.
     */
    public $SubTaskSet;

    /**
     * @param string $TaskId The task ID.
     * @param string $Status Task status, value: <li>PROCESSING: processing;</li><li>FINISH: completed.</li>
     * @param integer $ErrCode Error code. A non-zero error code is returned when the source is abnormal. If 0 is returned, use the ErrCode of each specific task.
     * @param string $Message Error message. If the source is abnormal, the corresponding exception message is returned. Otherwise, use the message of each specific task.
     * @param array $SubTaskSet MPS media processing tasks.
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

        if (array_key_exists("SubTaskSet",$param) and $param["SubTaskSet"] !== null) {
            $this->SubTaskSet = [];
            foreach ($param["SubTaskSet"] as $key => $value){
                $obj = new MPSSubTaskResult();
                $obj->deserialize($value);
                array_push($this->SubTaskSet, $obj);
            }
        }
    }
}
