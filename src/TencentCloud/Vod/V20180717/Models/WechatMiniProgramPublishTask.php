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
 * WeChat Mini Program publishing task information
 *
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method string getStatus() Obtain Task status. Valid values:
WAITING: waiting.
PROCESSING: Processing;
FINISH: completed.
 * @method void setStatus(string $Status) Set Task status. Valid values:
WAITING: waiting.
PROCESSING: Processing;
FINISH: completed.
 * @method integer getErrCode() Obtain Error code.
<li>0: success;</li>
<li>Other value: Failed.</li>
 * @method void setErrCode(integer $ErrCode) Set Error code.
<li>0: success;</li>
<li>Other value: Failed.</li>
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method string getFileId() Obtain Video file ID for publishing.
 * @method void setFileId(string $FileId) Set Video file ID for publishing.
 * @method integer getSourceDefinition() Obtain Transcoding template ID for the published video. 0 represents the original video.
 * @method void setSourceDefinition(integer $SourceDefinition) Set Transcoding template ID for the published video. 0 represents the original video.
 * @method string getPublishResult() Obtain WeChat Mini Program Video Publishing status. Parameter Value:
<li>Pass: published successfully;</li>
<li>Failed: Release failure;</li>
<li>Rejected: The audio and video moderation failed to pass.</li>
 * @method void setPublishResult(string $PublishResult) Set WeChat Mini Program Video Publishing status. Parameter Value:
<li>Pass: published successfully;</li>
<li>Failed: Release failure;</li>
<li>Rejected: The audio and video moderation failed to pass.</li>
 */
class WechatMiniProgramPublishTask extends AbstractModel
{
    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var string Task status. Valid values:
WAITING: waiting.
PROCESSING: Processing;
FINISH: completed.
     */
    public $Status;

    /**
     * @var integer Error code.
<li>0: success;</li>
<li>Other value: Failed.</li>
     */
    public $ErrCode;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var string Video file ID for publishing.
     */
    public $FileId;

    /**
     * @var integer Transcoding template ID for the published video. 0 represents the original video.
     */
    public $SourceDefinition;

    /**
     * @var string WeChat Mini Program Video Publishing status. Parameter Value:
<li>Pass: published successfully;</li>
<li>Failed: Release failure;</li>
<li>Rejected: The audio and video moderation failed to pass.</li>
     */
    public $PublishResult;

    /**
     * @param string $TaskId Task ID.
     * @param string $Status Task status. Valid values:
WAITING: waiting.
PROCESSING: Processing;
FINISH: completed.
     * @param integer $ErrCode Error code.
<li>0: success;</li>
<li>Other value: Failed.</li>
     * @param string $Message Error message.
     * @param string $FileId Video file ID for publishing.
     * @param integer $SourceDefinition Transcoding template ID for the published video. 0 represents the original video.
     * @param string $PublishResult WeChat Mini Program Video Publishing status. Parameter Value:
<li>Pass: published successfully;</li>
<li>Failed: Release failure;</li>
<li>Rejected: The audio and video moderation failed to pass.</li>
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

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("SourceDefinition",$param) and $param["SourceDefinition"] !== null) {
            $this->SourceDefinition = $param["SourceDefinition"];
        }

        if (array_key_exists("PublishResult",$param) and $param["PublishResult"] !== null) {
            $this->PublishResult = $param["PublishResult"];
        }
    }
}
