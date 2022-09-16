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
 * The information of a moderation task.
 *
 * @method string getTaskId() Obtain The task ID.
 * @method void setTaskId(string $TaskId) Set The task ID.
 * @method string getStatus() Obtain The task status. Valid values:
<li>PROCESSING</li>
<li>FINISH</li>
 * @method void setStatus(string $Status) Set The task status. Valid values:
<li>PROCESSING</li>
<li>FINISH</li>
 * @method string getErrCodeExt() Obtain The error code. An empty string indicates the task is successful; other values indicate that the task failed. For details, see [Video processing error codes](https://intl.cloud.tencent.com/document/product/266/39145?lang=en&pg=#video-processing).
 * @method void setErrCodeExt(string $ErrCodeExt) Set The error code. An empty string indicates the task is successful; other values indicate that the task failed. For details, see [Video processing error codes](https://intl.cloud.tencent.com/document/product/266/39145?lang=en&pg=#video-processing).
 * @method string getMessage() Obtain The error message.
 * @method void setMessage(string $Message) Set The error message.
 * @method ReviewAudioVideoTaskInput getInput() Obtain The input of a moderation task.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setInput(ReviewAudioVideoTaskInput $Input) Set The input of a moderation task.
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method ReviewAudioVideoTaskOutput getOutput() Obtain The output of a moderation task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setOutput(ReviewAudioVideoTaskOutput $Output) Set The output of a moderation task.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSessionId() Obtain The session ID, which is used for de-duplication. If there was a request with the same session ID in the last seven days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
 * @method void setSessionId(string $SessionId) Set The session ID, which is used for de-duplication. If there was a request with the same session ID in the last seven days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
 * @method string getSessionContext() Obtain The source context, which is used to pass through user request information. The `ReviewAudioVideoComplete` callback will return the value of this parameter. It can contain up to 1,000 characters.
 * @method void setSessionContext(string $SessionContext) Set The source context, which is used to pass through user request information. The `ReviewAudioVideoComplete` callback will return the value of this parameter. It can contain up to 1,000 characters.
 */
class ReviewAudioVideoTask extends AbstractModel
{
    /**
     * @var string The task ID.
     */
    public $TaskId;

    /**
     * @var string The task status. Valid values:
<li>PROCESSING</li>
<li>FINISH</li>
     */
    public $Status;

    /**
     * @var string The error code. An empty string indicates the task is successful; other values indicate that the task failed. For details, see [Video processing error codes](https://intl.cloud.tencent.com/document/product/266/39145?lang=en&pg=#video-processing).
     */
    public $ErrCodeExt;

    /**
     * @var string The error message.
     */
    public $Message;

    /**
     * @var ReviewAudioVideoTaskInput The input of a moderation task.
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $Input;

    /**
     * @var ReviewAudioVideoTaskOutput The output of a moderation task.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Output;

    /**
     * @var string The session ID, which is used for de-duplication. If there was a request with the same session ID in the last seven days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
     */
    public $SessionId;

    /**
     * @var string The source context, which is used to pass through user request information. The `ReviewAudioVideoComplete` callback will return the value of this parameter. It can contain up to 1,000 characters.
     */
    public $SessionContext;

    /**
     * @param string $TaskId The task ID.
     * @param string $Status The task status. Valid values:
<li>PROCESSING</li>
<li>FINISH</li>
     * @param string $ErrCodeExt The error code. An empty string indicates the task is successful; other values indicate that the task failed. For details, see [Video processing error codes](https://intl.cloud.tencent.com/document/product/266/39145?lang=en&pg=#video-processing).
     * @param string $Message The error message.
     * @param ReviewAudioVideoTaskInput $Input The input of a moderation task.
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param ReviewAudioVideoTaskOutput $Output The output of a moderation task.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SessionId The session ID, which is used for de-duplication. If there was a request with the same session ID in the last seven days, an error will be returned for the current request. The session ID can contain up to 50 characters. If you do not pass this parameter or pass in an empty string, duplicate sessions will not be identified.
     * @param string $SessionContext The source context, which is used to pass through user request information. The `ReviewAudioVideoComplete` callback will return the value of this parameter. It can contain up to 1,000 characters.
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

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new ReviewAudioVideoTaskInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = new ReviewAudioVideoTaskOutput();
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
