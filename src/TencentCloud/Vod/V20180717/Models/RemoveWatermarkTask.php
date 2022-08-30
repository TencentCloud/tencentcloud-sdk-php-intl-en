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
 * The information of a watermark removal task. This parameter is valid only if `TaskType` is `RemoveWatermark`.
 *
 * @method string getTaskId() Obtain The task ID.
 * @method void setTaskId(string $TaskId) Set The task ID.
 * @method string getStatus() Obtain The task flow status. Valid values:
<li>PROCESSING</li>
<li>FINISH</li>
 * @method void setStatus(string $Status) Set The task flow status. Valid values:
<li>PROCESSING</li>
<li>FINISH</li>
 * @method string getErrCodeExt() Obtain Error code. An empty string indicates the task is successful; other values indicate failure. For details, see [Video processing error codes](https://intl.cloud.tencent.com/document/product/266/39145?lang=en&pg=#video-processing).
 * @method void setErrCodeExt(string $ErrCodeExt) Set Error code. An empty string indicates the task is successful; other values indicate failure. For details, see [Video processing error codes](https://intl.cloud.tencent.com/document/product/266/39145?lang=en&pg=#video-processing).
 * @method integer getErrCode() Obtain Error code. 0: Successful; other values: Failed.
<li>40000: Invalid input parameter.</li>
<li>60000: Source file error (e.g., video data is corrupted).</li>
<li>70000: Internal server error. Please try again.</li>
 * @method void setErrCode(integer $ErrCode) Set Error code. 0: Successful; other values: Failed.
<li>40000: Invalid input parameter.</li>
<li>60000: Source file error (e.g., video data is corrupted).</li>
<li>70000: Internal server error. Please try again.</li>
 * @method string getMessage() Obtain The error message.
 * @method void setMessage(string $Message) Set The error message.
 * @method RemoveWaterMarkTaskInput getInput() Obtain The input of a watermark removal task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInput(RemoveWaterMarkTaskInput $Input) Set The input of a watermark removal task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method RemoveWaterMarkTaskOutput getOutput() Obtain The output of a watermark removal task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutput(RemoveWaterMarkTaskOutput $Output) Set The output of a watermark removal task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSessionId() Obtain The session ID, which is used for de-duplication. If there was a request with the same session ID in the last seven days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
 * @method void setSessionId(string $SessionId) Set The session ID, which is used for de-duplication. If there was a request with the same session ID in the last seven days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
 * @method string getSessionContext() Obtain The source context, which is used to pass through user request information. The `ProcedureStateChanged` callback will return the value of this parameter. It can contain up to 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set The source context, which is used to pass through user request information. The `ProcedureStateChanged` callback will return the value of this parameter. It can contain up to 1,000 characters.
 */
class RemoveWatermarkTask extends AbstractModel
{
    /**
     * @var string The task ID.
     */
    public $TaskId;

    /**
     * @var string The task flow status. Valid values:
<li>PROCESSING</li>
<li>FINISH</li>
     */
    public $Status;

    /**
     * @var string Error code. An empty string indicates the task is successful; other values indicate failure. For details, see [Video processing error codes](https://intl.cloud.tencent.com/document/product/266/39145?lang=en&pg=#video-processing).
     */
    public $ErrCodeExt;

    /**
     * @var integer Error code. 0: Successful; other values: Failed.
<li>40000: Invalid input parameter.</li>
<li>60000: Source file error (e.g., video data is corrupted).</li>
<li>70000: Internal server error. Please try again.</li>
     */
    public $ErrCode;

    /**
     * @var string The error message.
     */
    public $Message;

    /**
     * @var RemoveWaterMarkTaskInput The input of a watermark removal task.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Input;

    /**
     * @var RemoveWaterMarkTaskOutput The output of a watermark removal task.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Output;

    /**
     * @var string The session ID, which is used for de-duplication. If there was a request with the same session ID in the last seven days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
     */
    public $SessionId;

    /**
     * @var string The source context, which is used to pass through user request information. The `ProcedureStateChanged` callback will return the value of this parameter. It can contain up to 1,000 characters.
     */
    public $SessionContext;

    /**
     * @param string $TaskId The task ID.
     * @param string $Status The task flow status. Valid values:
<li>PROCESSING</li>
<li>FINISH</li>
     * @param string $ErrCodeExt Error code. An empty string indicates the task is successful; other values indicate failure. For details, see [Video processing error codes](https://intl.cloud.tencent.com/document/product/266/39145?lang=en&pg=#video-processing).
     * @param integer $ErrCode Error code. 0: Successful; other values: Failed.
<li>40000: Invalid input parameter.</li>
<li>60000: Source file error (e.g., video data is corrupted).</li>
<li>70000: Internal server error. Please try again.</li>
     * @param string $Message The error message.
     * @param RemoveWaterMarkTaskInput $Input The input of a watermark removal task.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param RemoveWaterMarkTaskOutput $Output The output of a watermark removal task.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SessionId The session ID, which is used for de-duplication. If there was a request with the same session ID in the last seven days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
     * @param string $SessionContext The source context, which is used to pass through user request information. The `ProcedureStateChanged` callback will return the value of this parameter. It can contain up to 1,000 characters.
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
            $this->Input = new RemoveWaterMarkTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new RemoveWaterMarkTaskOutput();
            $this->Output->deserialize($param["Output"]);
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }
    }
}
