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
 * Translation result of pure subtitle files.
 *
 * @method string getStatus() Obtain Task status (the three valid values are as follows):
- PROCESSING
- SUCCESS 
- FAIL
 * @method void setStatus(string $Status) Set Task status (the three valid values are as follows):
- PROCESSING
- SUCCESS 
- FAIL
 * @method string getErrCodeExt() Obtain Error code. A null string indicates that the task is successful, while other values indicate that the task has failed. For valid values, see the list of Media Processing Service (MPS) error codes.
 * @method void setErrCodeExt(string $ErrCodeExt) Set Error code. A null string indicates that the task is successful, while other values indicate that the task has failed. For valid values, see the list of Media Processing Service (MPS) error codes.
 * @method integer getErrCode() Obtain Error code. 0 indicates that the task is successful, and other values indicate that the task has failed. (This field is not recommended. Use the new error code field ErrCodeExt instead.)
 * @method void setErrCode(integer $ErrCode) Set Error code. 0 indicates that the task is successful, and other values indicate that the task has failed. (This field is not recommended. Use the new error code field ErrCodeExt instead.)
 * @method string getMessage() Obtain Error message
 * @method void setMessage(string $Message) Set Error message
 * @method SmartSubtitleTaskResultInput getInput() Obtain Translation task input information.
 * @method void setInput(SmartSubtitleTaskResultInput $Input) Set Translation task input information.
 * @method PureSubtitleTransResultOutput getOutput() Obtain Translation output result of pure subtitle files.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutput(PureSubtitleTransResultOutput $Output) Set Translation output result of pure subtitle files.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProgress() Obtain Task progress.
 * @method void setProgress(integer $Progress) Set Task progress.
 */
class PureSubtitleTransResult extends AbstractModel
{
    /**
     * @var string Task status (the three valid values are as follows):
- PROCESSING
- SUCCESS 
- FAIL
     */
    public $Status;

    /**
     * @var string Error code. A null string indicates that the task is successful, while other values indicate that the task has failed. For valid values, see the list of Media Processing Service (MPS) error codes.
     */
    public $ErrCodeExt;

    /**
     * @var integer Error code. 0 indicates that the task is successful, and other values indicate that the task has failed. (This field is not recommended. Use the new error code field ErrCodeExt instead.)
     */
    public $ErrCode;

    /**
     * @var string Error message
     */
    public $Message;

    /**
     * @var SmartSubtitleTaskResultInput Translation task input information.
     */
    public $Input;

    /**
     * @var PureSubtitleTransResultOutput Translation output result of pure subtitle files.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Output;

    /**
     * @var integer Task progress.
     */
    public $Progress;

    /**
     * @param string $Status Task status (the three valid values are as follows):
- PROCESSING
- SUCCESS 
- FAIL
     * @param string $ErrCodeExt Error code. A null string indicates that the task is successful, while other values indicate that the task has failed. For valid values, see the list of Media Processing Service (MPS) error codes.
     * @param integer $ErrCode Error code. 0 indicates that the task is successful, and other values indicate that the task has failed. (This field is not recommended. Use the new error code field ErrCodeExt instead.)
     * @param string $Message Error message
     * @param SmartSubtitleTaskResultInput $Input Translation task input information.
     * @param PureSubtitleTransResultOutput $Output Translation output result of pure subtitle files.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Progress Task progress.
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
            $this->Input = new SmartSubtitleTaskResultInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new PureSubtitleTransResultOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }
    }
}
