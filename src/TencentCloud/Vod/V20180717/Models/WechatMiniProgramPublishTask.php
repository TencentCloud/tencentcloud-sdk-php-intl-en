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
 * Release on WeChat Mini Program task information
 *
 * @method string getTaskId() Obtain Task ID.
 * @method void setTaskId(string $TaskId) Set Task ID.
 * @method string getStatus() Obtain Task status. Valid values:
WAITING: waiting;
PROCESSING: processing;
FINISH: completed.
 * @method void setStatus(string $Status) Set Task status. Valid values:
WAITING: waiting;
PROCESSING: processing;
FINISH: completed.
 * @method integer getErrCode() Obtain Error code
<li>0: success;</li>
<li>Other values: failure.</li>
 * @method void setErrCode(integer $ErrCode) Set Error code
<li>0: success;</li>
<li>Other values: failure.</li>
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method string getFileId() Obtain ID of published video file.
 * @method void setFileId(string $FileId) Set ID of published video file.
 * @method integer getSourceDefinition() Obtain ID of the transcoding template corresponding to the published video. 0 represents the source video.
 * @method void setSourceDefinition(integer $SourceDefinition) Set ID of the transcoding template corresponding to the published video. 0 represents the source video.
 * @method string getPublishResult() Obtain Status of video release on WeChat Mini Program. Valid values:
<li>Pass: successfully published;</li>
<li>Failed: failed to publish;</li>
<li>Rejected: rejected.</li>
 * @method void setPublishResult(string $PublishResult) Set Status of video release on WeChat Mini Program. Valid values:
<li>Pass: successfully published;</li>
<li>Failed: failed to publish;</li>
<li>Rejected: rejected.</li>
 */
class WechatMiniProgramPublishTask extends AbstractModel
{
    /**
     * @var string Task ID.
     */
    public $TaskId;

    /**
     * @var string Task status. Valid values:
WAITING: waiting;
PROCESSING: processing;
FINISH: completed.
     */
    public $Status;

    /**
     * @var integer Error code
<li>0: success;</li>
<li>Other values: failure.</li>
     */
    public $ErrCode;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var string ID of published video file.
     */
    public $FileId;

    /**
     * @var integer ID of the transcoding template corresponding to the published video. 0 represents the source video.
     */
    public $SourceDefinition;

    /**
     * @var string Status of video release on WeChat Mini Program. Valid values:
<li>Pass: successfully published;</li>
<li>Failed: failed to publish;</li>
<li>Rejected: rejected.</li>
     */
    public $PublishResult;

    /**
     * @param string $TaskId Task ID.
     * @param string $Status Task status. Valid values:
WAITING: waiting;
PROCESSING: processing;
FINISH: completed.
     * @param integer $ErrCode Error code
<li>0: success;</li>
<li>Other values: failure.</li>
     * @param string $Message Error message.
     * @param string $FileId ID of published video file.
     * @param integer $SourceDefinition ID of the transcoding template corresponding to the published video. 0 represents the source video.
     * @param string $PublishResult Status of video release on WeChat Mini Program. Valid values:
<li>Pass: successfully published;</li>
<li>Failed: failed to publish;</li>
<li>Rejected: rejected.</li>
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
