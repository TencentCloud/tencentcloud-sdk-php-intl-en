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
 * @method string getStatus() Obtain 
 * @method void setStatus(string $Status) Set 
 * @method string getErrCodeExt() Obtain 
 * @method void setErrCodeExt(string $ErrCodeExt) Set 
 * @method integer getErrCode() Obtain 
 * @method void setErrCode(integer $ErrCode) Set 
 * @method string getMessage() Obtain 
 * @method void setMessage(string $Message) Set 
 * @method AiRecognitionTaskOcrWordsResultInput getInput() Obtain 
 * @method void setInput(AiRecognitionTaskOcrWordsResultInput $Input) Set 
 * @method AiRecognitionTaskOcrWordsResultOutput getOutput() Obtain 
 * @method void setOutput(AiRecognitionTaskOcrWordsResultOutput $Output) Set 
 * @method integer getProgress() Obtain 
 * @method void setProgress(integer $Progress) Set 
 * @method string getBeginProcessTime() Obtain 
 * @method void setBeginProcessTime(string $BeginProcessTime) Set 
 * @method string getFinishTime() Obtain 
 * @method void setFinishTime(string $FinishTime) Set 
 */
class AiRecognitionTaskOcrWordsResult extends AbstractModel
{
    /**
     * @var string 
     */
    public $Status;

    /**
     * @var string 
     */
    public $ErrCodeExt;

    /**
     * @var integer 
     */
    public $ErrCode;

    /**
     * @var string 
     */
    public $Message;

    /**
     * @var AiRecognitionTaskOcrWordsResultInput 
     */
    public $Input;

    /**
     * @var AiRecognitionTaskOcrWordsResultOutput 
     */
    public $Output;

    /**
     * @var integer 
     */
    public $Progress;

    /**
     * @var string 
     */
    public $BeginProcessTime;

    /**
     * @var string 
     */
    public $FinishTime;

    /**
     * @param string $Status 
     * @param string $ErrCodeExt 
     * @param integer $ErrCode 
     * @param string $Message 
     * @param AiRecognitionTaskOcrWordsResultInput $Input 
     * @param AiRecognitionTaskOcrWordsResultOutput $Output 
     * @param integer $Progress 
     * @param string $BeginProcessTime 
     * @param string $FinishTime 
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

        if (array_key_exists("ErrCodeExt",$param) and $param["ErrCodeExt"] !== null) {
            $this->ErrCodeExt = $param["ErrCodeExt"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new AiRecognitionTaskOcrWordsResultInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new AiRecognitionTaskOcrWordsResultOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("BeginProcessTime",$param) and $param["BeginProcessTime"] !== null) {
            $this->BeginProcessTime = $param["BeginProcessTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }
    }
}
