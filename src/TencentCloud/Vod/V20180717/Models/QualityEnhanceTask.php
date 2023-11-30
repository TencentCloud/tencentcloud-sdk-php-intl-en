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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Quality Enhance Task
 *
 * @method string getTaskId() Obtain Task Id.
 * @method void setTaskId(string $TaskId) Set Task Id.
 * @method string getStatus() Obtain Task flow status, values:
<li>PROCESSING: Processing;</li>
<li>FINISH: Completed. </li>
 * @method void setStatus(string $Status) Set Task flow status, values:
<li>PROCESSING: Processing;</li>
<li>FINISH: Completed. </li>
 * @method integer getErrCode() Obtain Error code, 0 means success, other values u200bu200bmean failure:
<li>40000: The input parameters are illegal, please check the input parameters;</li>
<li>60000: Source file error (such as video data damage), Please confirm whether the source file is normal;</li>
<li>70000: Internal service error, it is recommended to try again. </li>
 * @method void setErrCode(integer $ErrCode) Set Error code, 0 means success, other values u200bu200bmean failure:
<li>40000: The input parameters are illegal, please check the input parameters;</li>
<li>60000: Source file error (such as video data damage), Please confirm whether the source file is normal;</li>
<li>70000: Internal service error, it is recommended to try again. </li>
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method string getErrCodeExt() Obtain Error code. An empty string indicates success. Other values u200bu200bindicate failure. For values, please refer to [Video Processing Error Code](https://www.tencentcloud.com/document/product/266/39145) list.
 * @method void setErrCodeExt(string $ErrCodeExt) Set Error code. An empty string indicates success. Other values u200bu200bindicate failure. For values, please refer to [Video Processing Error Code](https://www.tencentcloud.com/document/product/266/39145) list.
 * @method integer getProgress() Obtain Media quality enhance task progress, value range [0-100].
 * @method void setProgress(integer $Progress) Set Media quality enhance task progress, value range [0-100].
 * @method QualityEnhanceTaskInput getInput() Obtain Input for media quality enhance task.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setInput(QualityEnhanceTaskInput $Input) Set Input for media quality enhance task.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method QualityEnhanceTaskOutput getOutput() Obtain Output of the media quality enhance task.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setOutput(QualityEnhanceTaskOutput $Output) Set Output of the media quality enhance task.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method MediaMetaData getMetaData() Obtain Media quality enhance outputs meta-information of the video.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method void setMetaData(MediaMetaData $MetaData) Set Media quality enhance outputs meta-information of the video.
Note: This field may return null, indicating that no valid value can be obtained.
 * @method string getSessionId() Obtain Identification code used for deduplication. If there is a request for the same identification code within seven days, this request will return an error. The maximum length is 50 characters, without or with an empty string to indicate no deduplication.
 * @method void setSessionId(string $SessionId) Set Identification code used for deduplication. If there is a request for the same identification code within seven days, this request will return an error. The maximum length is 50 characters, without or with an empty string to indicate no deduplication.
 * @method string getSessionContext() Obtain Source context, used to transparently transmit user request information. The task flow status change callback will return the value of this field, which can be up to 1000 characters.
 * @method void setSessionContext(string $SessionContext) Set Source context, used to transparently transmit user request information. The task flow status change callback will return the value of this field, which can be up to 1000 characters.
 */
class QualityEnhanceTask extends AbstractModel
{
    /**
     * @var string Task Id.
     */
    public $TaskId;

    /**
     * @var string Task flow status, values:
<li>PROCESSING: Processing;</li>
<li>FINISH: Completed. </li>
     */
    public $Status;

    /**
     * @var integer Error code, 0 means success, other values u200bu200bmean failure:
<li>40000: The input parameters are illegal, please check the input parameters;</li>
<li>60000: Source file error (such as video data damage), Please confirm whether the source file is normal;</li>
<li>70000: Internal service error, it is recommended to try again. </li>
     */
    public $ErrCode;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var string Error code. An empty string indicates success. Other values u200bu200bindicate failure. For values, please refer to [Video Processing Error Code](https://www.tencentcloud.com/document/product/266/39145) list.
     */
    public $ErrCodeExt;

    /**
     * @var integer Media quality enhance task progress, value range [0-100].
     */
    public $Progress;

    /**
     * @var QualityEnhanceTaskInput Input for media quality enhance task.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Input;

    /**
     * @var QualityEnhanceTaskOutput Output of the media quality enhance task.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $Output;

    /**
     * @var MediaMetaData Media quality enhance outputs meta-information of the video.
Note: This field may return null, indicating that no valid value can be obtained.
     */
    public $MetaData;

    /**
     * @var string Identification code used for deduplication. If there is a request for the same identification code within seven days, this request will return an error. The maximum length is 50 characters, without or with an empty string to indicate no deduplication.
     */
    public $SessionId;

    /**
     * @var string Source context, used to transparently transmit user request information. The task flow status change callback will return the value of this field, which can be up to 1000 characters.
     */
    public $SessionContext;

    /**
     * @param string $TaskId Task Id.
     * @param string $Status Task flow status, values:
<li>PROCESSING: Processing;</li>
<li>FINISH: Completed. </li>
     * @param integer $ErrCode Error code, 0 means success, other values u200bu200bmean failure:
<li>40000: The input parameters are illegal, please check the input parameters;</li>
<li>60000: Source file error (such as video data damage), Please confirm whether the source file is normal;</li>
<li>70000: Internal service error, it is recommended to try again. </li>
     * @param string $Message Error message.
     * @param string $ErrCodeExt Error code. An empty string indicates success. Other values u200bu200bindicate failure. For values, please refer to [Video Processing Error Code](https://www.tencentcloud.com/document/product/266/39145) list.
     * @param integer $Progress Media quality enhance task progress, value range [0-100].
     * @param QualityEnhanceTaskInput $Input Input for media quality enhance task.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param QualityEnhanceTaskOutput $Output Output of the media quality enhance task.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param MediaMetaData $MetaData Media quality enhance outputs meta-information of the video.
Note: This field may return null, indicating that no valid value can be obtained.
     * @param string $SessionId Identification code used for deduplication. If there is a request for the same identification code within seven days, this request will return an error. The maximum length is 50 characters, without or with an empty string to indicate no deduplication.
     * @param string $SessionContext Source context, used to transparently transmit user request information. The task flow status change callback will return the value of this field, which can be up to 1000 characters.
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

        if (array_key_exists("ErrCodeExt",$param) and $param["ErrCodeExt"] !== null) {
            $this->ErrCodeExt = $param["ErrCodeExt"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new QualityEnhanceTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new QualityEnhanceTaskOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("MetaData",$param) and $param["MetaData"] !== null) {
            $this->MetaData = new MediaMetaData();
            $this->MetaData->deserialize($param["MetaData"]);
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }
    }
}
