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
 * 
 *
 * @method string getTaskType() Obtain 
 * @method void setTaskType(string $TaskType) Set 
 * @method string getStatus() Obtain 
 * @method void setStatus(string $Status) Set 
 * @method string getErrCode() Obtain 
 * @method void setErrCode(string $ErrCode) Set 
 * @method string getMessage() Obtain 
 * @method void setMessage(string $Message) Set 
 * @method string getInput() Obtain 
 * @method void setInput(string $Input) Set 
 * @method MPSTaskOutput getOutput() Obtain 
 * @method void setOutput(MPSTaskOutput $Output) Set 
 */
class MPSSubTaskResult extends AbstractModel
{
    /**
     * @var string 
     */
    public $TaskType;

    /**
     * @var string 
     */
    public $Status;

    /**
     * @var string 
     */
    public $ErrCode;

    /**
     * @var string 
     */
    public $Message;

    /**
     * @var string 
     */
    public $Input;

    /**
     * @var MPSTaskOutput 
     */
    public $Output;

    /**
     * @param string $TaskType 
     * @param string $Status 
     * @param string $ErrCode 
     * @param string $Message 
     * @param string $Input 
     * @param MPSTaskOutput $Output 
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
        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
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

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new MPSTaskOutput();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
