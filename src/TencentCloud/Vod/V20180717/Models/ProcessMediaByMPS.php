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
 * MPS media processing task info.
 *
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method string getStatus() Obtain Task status. Valid values: <li>PROCESSING: Processing; </li><li>FINISH: Completed.</li>
 * @method void setStatus(string $Status) Set Task status. Valid values: <li>PROCESSING: Processing; </li><li>FINISH: Completed.</li>
 * @method integer getErrCode() Obtain Error code. A non-zero error code is returned when a source error occurs. If 0 is returned, use the ErrCode of each specific task.
 * @method void setErrCode(integer $ErrCode) Set Error code. A non-zero error code is returned when a source error occurs. If 0 is returned, use the ErrCode of each specific task.
 * @method string getMessage() Obtain Error information. If a source error occurs, the corresponding exception Message is returned. Otherwise, use the Message of each specific task.
 * @method void setMessage(string $Message) Set Error information. If a source error occurs, the corresponding exception Message is returned. Otherwise, use the Message of each specific task.
 * @method array getSubTaskSet() Obtain MPS video processing task.
 * @method void setSubTaskSet(array $SubTaskSet) Set MPS video processing task.
 */
class ProcessMediaByMPS extends AbstractModel
{
    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var string Task status. Valid values: <li>PROCESSING: Processing; </li><li>FINISH: Completed.</li>
     */
    public $Status;

    /**
     * @var integer Error code. A non-zero error code is returned when a source error occurs. If 0 is returned, use the ErrCode of each specific task.
     */
    public $ErrCode;

    /**
     * @var string Error information. If a source error occurs, the corresponding exception Message is returned. Otherwise, use the Message of each specific task.
     */
    public $Message;

    /**
     * @var array MPS video processing task.
     */
    public $SubTaskSet;

    /**
     * @param string $TaskId Task ID.
     * @param string $Status Task status. Valid values: <li>PROCESSING: Processing; </li><li>FINISH: Completed.</li>
     * @param integer $ErrCode Error code. A non-zero error code is returned when a source error occurs. If 0 is returned, use the ErrCode of each specific task.
     * @param string $Message Error information. If a source error occurs, the corresponding exception Message is returned. Otherwise, use the Message of each specific task.
     * @param array $SubTaskSet MPS video processing task.
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
