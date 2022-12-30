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
 * The information of a task to get file attributes.
 *
 * @method string getTaskId() Obtain The task ID.
 * @method void setTaskId(string $TaskId) Set The task ID.
 * @method string getStatus() Obtain The task status. Valid values: PROCESSING, SUCCESS, FAIL.
 * @method void setStatus(string $Status) Set The task status. Valid values: PROCESSING, SUCCESS, FAIL.
 * @method integer getErrCode() Obtain The error code. `0` indicates the task is successful. Other values indicate that the task failed.
<li>`40000`: Invalid input parameter.</li>
<li>`60000`: Source file error (e.g., video data is corrupted).</li>
<li>`70000`: Internal server error. Please try again.</li>
 * @method void setErrCode(integer $ErrCode) Set The error code. `0` indicates the task is successful. Other values indicate that the task failed.
<li>`40000`: Invalid input parameter.</li>
<li>`60000`: Source file error (e.g., video data is corrupted).</li>
<li>`70000`: Internal server error. Please try again.</li>
 * @method string getErrCodeExt() Obtain The error code. An empty string indicates the task is successful; other values indicate that the task failed. For details, see [Video processing error codes](https://intl.cloud.tencent.com/document/product/266/39145?lang=en&pg=#video-processing).
 * @method void setErrCodeExt(string $ErrCodeExt) Set The error code. An empty string indicates the task is successful; other values indicate that the task failed. For details, see [Video processing error codes](https://intl.cloud.tencent.com/document/product/266/39145?lang=en&pg=#video-processing).
 * @method string getMessage() Obtain The error message.
 * @method void setMessage(string $Message) Set The error message.
 * @method integer getProgress() Obtain The task progress. Value range: 0-100.
 * @method void setProgress(integer $Progress) Set The task progress. Value range: 0-100.
 * @method string getFileId() Obtain The file ID
 * @method void setFileId(string $FileId) Set The file ID
 * @method DescribeFileAttributesTaskOutput getOutput() Obtain The output of the task to get file attributes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutput(DescribeFileAttributesTaskOutput $Output) Set The output of the task to get file attributes.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSessionId() Obtain The session ID, which is used for de-duplication. If there was a request with the same session ID in the last seven days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
 * @method void setSessionId(string $SessionId) Set The session ID, which is used for de-duplication. If there was a request with the same session ID in the last seven days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
 * @method string getSessionContext() Obtain The source context, which is used to pass through user request information. The `ProcedureStateChanged` callback will return the value of this parameter. It can contain up to 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set The source context, which is used to pass through user request information. The `ProcedureStateChanged` callback will return the value of this parameter. It can contain up to 1,000 characters.
 */
class DescribeFileAttributesTask extends AbstractModel
{
    /**
     * @var string The task ID.
     */
    public $TaskId;

    /**
     * @var string The task status. Valid values: PROCESSING, SUCCESS, FAIL.
     */
    public $Status;

    /**
     * @var integer The error code. `0` indicates the task is successful. Other values indicate that the task failed.
<li>`40000`: Invalid input parameter.</li>
<li>`60000`: Source file error (e.g., video data is corrupted).</li>
<li>`70000`: Internal server error. Please try again.</li>
     */
    public $ErrCode;

    /**
     * @var string The error code. An empty string indicates the task is successful; other values indicate that the task failed. For details, see [Video processing error codes](https://intl.cloud.tencent.com/document/product/266/39145?lang=en&pg=#video-processing).
     */
    public $ErrCodeExt;

    /**
     * @var string The error message.
     */
    public $Message;

    /**
     * @var integer The task progress. Value range: 0-100.
     */
    public $Progress;

    /**
     * @var string The file ID
     */
    public $FileId;

    /**
     * @var DescribeFileAttributesTaskOutput The output of the task to get file attributes.
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
     * @param string $Status The task status. Valid values: PROCESSING, SUCCESS, FAIL.
     * @param integer $ErrCode The error code. `0` indicates the task is successful. Other values indicate that the task failed.
<li>`40000`: Invalid input parameter.</li>
<li>`60000`: Source file error (e.g., video data is corrupted).</li>
<li>`70000`: Internal server error. Please try again.</li>
     * @param string $ErrCodeExt The error code. An empty string indicates the task is successful; other values indicate that the task failed. For details, see [Video processing error codes](https://intl.cloud.tencent.com/document/product/266/39145?lang=en&pg=#video-processing).
     * @param string $Message The error message.
     * @param integer $Progress The task progress. Value range: 0-100.
     * @param string $FileId The file ID
     * @param DescribeFileAttributesTaskOutput $Output The output of the task to get file attributes.
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

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrCodeExt",$param) and $param["ErrCodeExt"] !== null) {
            $this->ErrCodeExt = $param["ErrCodeExt"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new DescribeFileAttributesTaskOutput();
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
