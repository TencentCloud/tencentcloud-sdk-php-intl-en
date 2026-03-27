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
 * Media import knowledge base task
 *
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method string getStatus() Obtain Task Status. Valid values: <li>PROCESSING: Processing;</li><li>FINISH: Completed.</li>
 * @method void setStatus(string $Status) Set Task Status. Valid values: <li>PROCESSING: Processing;</li><li>FINISH: Completed.</li>
 * @method integer getErrCode() Obtain Error code; 0 indicates success, other values indicate failure
 * @method void setErrCode(integer $ErrCode) Set Error code; 0 indicates success, other values indicate failure
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 */
class ImportMediaKnowledgeTask extends AbstractModel
{
    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var string Task Status. Valid values: <li>PROCESSING: Processing;</li><li>FINISH: Completed.</li>
     */
    public $Status;

    /**
     * @var integer Error code; 0 indicates success, other values indicate failure
     */
    public $ErrCode;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @param string $TaskId Task ID.
     * @param string $Status Task Status. Valid values: <li>PROCESSING: Processing;</li><li>FINISH: Completed.</li>
     * @param integer $ErrCode Error code; 0 indicates success, other values indicate failure
     * @param string $Message Error message.
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
    }
}
