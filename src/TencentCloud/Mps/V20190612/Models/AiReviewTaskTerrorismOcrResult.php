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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method string getStatus() Obtain 
 * @method void setStatus(string $Status) Set 
 * @method integer getErrCode() Obtain 
 * @method void setErrCode(integer $ErrCode) Set 
 * @method string getMessage() Obtain 
 * @method void setMessage(string $Message) Set 
 * @method AiReviewTerrorismOcrTaskInput getInput() Obtain 
 * @method void setInput(AiReviewTerrorismOcrTaskInput $Input) Set 
 * @method AiReviewTerrorismOcrTaskOutput getOutput() Obtain 
 * @method void setOutput(AiReviewTerrorismOcrTaskOutput $Output) Set 
 */
class AiReviewTaskTerrorismOcrResult extends AbstractModel
{
    /**
     * @var string 
     */
    public $Status;

    /**
     * @var integer 
     */
    public $ErrCode;

    /**
     * @var string 
     */
    public $Message;

    /**
     * @var AiReviewTerrorismOcrTaskInput 
     */
    public $Input;

    /**
     * @var AiReviewTerrorismOcrTaskOutput 
     */
    public $Output;

    /**
     * @param string $Status 
     * @param integer $ErrCode 
     * @param string $Message 
     * @param AiReviewTerrorismOcrTaskInput $Input 
     * @param AiReviewTerrorismOcrTaskOutput $Output 
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
            $this->Input = new AiReviewTerrorismOcrTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AiReviewTerrorismOcrTaskOutput();
            $this->Output->deserialize($param["Output"]);
        }
    }
}
