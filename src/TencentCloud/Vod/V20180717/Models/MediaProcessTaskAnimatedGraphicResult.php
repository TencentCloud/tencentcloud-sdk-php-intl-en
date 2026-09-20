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
 * Result type of the rotating image task.
 *
 * @method string getStatus() Obtain Task status. Valid values are PROCESSING, SUCCESS, and FAIL.
 * @method void setStatus(string $Status) Set Task status. Valid values are PROCESSING, SUCCESS, and FAIL.
 * @method string getErrCodeExt() Obtain Error code. An empty string indicates success, and other values indicate failure. For values, see [Video Processing Error Codes](https://www.tencentcloud.com/document/product/266/50368?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
 * @method void setErrCodeExt(string $ErrCodeExt) Set Error code. An empty string indicates success, and other values indicate failure. For values, see [Video Processing Error Codes](https://www.tencentcloud.com/document/product/266/50368?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
 * @method integer getErrCode() Obtain Error code. 0 indicates that the task is successful, and other values indicate that the task has failed. (This field is not recommended. Use the new error code field ErrCodeExt instead.)
 * @method void setErrCode(integer $ErrCode) Set Error code. 0 indicates that the task is successful, and other values indicate that the task has failed. (This field is not recommended. Use the new error code field ErrCodeExt instead.)
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method AnimatedGraphicTaskInput getInput() Obtain Input of the animated image task.
 * @method void setInput(AnimatedGraphicTaskInput $Input) Set Input of the animated image task.
 * @method MediaAnimatedGraphicsItem getOutput() Obtain Output of rotating image tasks.
 * @method void setOutput(MediaAnimatedGraphicsItem $Output) Set Output of rotating image tasks.
 * @method integer getProgress() Obtain Progress of the rotating image task. Value range: 0-100.
 * @method void setProgress(integer $Progress) Set Progress of the rotating image task. Value range: 0-100.
 * @method string getBeginProcessTime() Obtain Rotating image task start execution time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setBeginProcessTime(string $BeginProcessTime) Set Rotating image task start execution time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method string getFinishTime() Obtain Animated image task completion time in [ISO datetime format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 * @method void setFinishTime(string $FinishTime) Set Animated image task completion time in [ISO datetime format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
 */
class MediaProcessTaskAnimatedGraphicResult extends AbstractModel
{
    /**
     * @var string Task status. Valid values are PROCESSING, SUCCESS, and FAIL.
     */
    public $Status;

    /**
     * @var string Error code. An empty string indicates success, and other values indicate failure. For values, see [Video Processing Error Codes](https://www.tencentcloud.com/document/product/266/50368?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
     */
    public $ErrCodeExt;

    /**
     * @var integer Error code. 0 indicates that the task is successful, and other values indicate that the task has failed. (This field is not recommended. Use the new error code field ErrCodeExt instead.)
     */
    public $ErrCode;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var AnimatedGraphicTaskInput Input of the animated image task.
     */
    public $Input;

    /**
     * @var MediaAnimatedGraphicsItem Output of rotating image tasks.
     */
    public $Output;

    /**
     * @var integer Progress of the rotating image task. Value range: 0-100.
     */
    public $Progress;

    /**
     * @var string Rotating image task start execution time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $BeginProcessTime;

    /**
     * @var string Animated image task completion time in [ISO datetime format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     */
    public $FinishTime;

    /**
     * @param string $Status Task status. Valid values are PROCESSING, SUCCESS, and FAIL.
     * @param string $ErrCodeExt Error code. An empty string indicates success, and other values indicate failure. For values, see [Video Processing Error Codes](https://www.tencentcloud.com/document/product/266/50368?from_cn_redirect=1#.E8.A7.86.E9.A2.91.E5.A4.84.E7.90.86.E7.B1.BB.E9.94.99.E8.AF.AF.E7.A0.81).
     * @param integer $ErrCode Error code. 0 indicates that the task is successful, and other values indicate that the task has failed. (This field is not recommended. Use the new error code field ErrCodeExt instead.)
     * @param string $Message Error message.
     * @param AnimatedGraphicTaskInput $Input Input of the animated image task.
     * @param MediaAnimatedGraphicsItem $Output Output of rotating image tasks.
     * @param integer $Progress Progress of the rotating image task. Value range: 0-100.
     * @param string $BeginProcessTime Rotating image task start execution time in [ISO date format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
     * @param string $FinishTime Animated image task completion time in [ISO datetime format](https://www.tencentcloud.com/document/product/266/11732?from_cn_redirect=1#I).
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
            $this->Input = new AnimatedGraphicTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new MediaAnimatedGraphicsItem();
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
