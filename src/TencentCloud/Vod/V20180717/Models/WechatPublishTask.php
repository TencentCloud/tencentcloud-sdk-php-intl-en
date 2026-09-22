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
 * WeChat publishing task information
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
<li>Other value: failure.</li>
 * @method void setErrCode(integer $ErrCode) Set Error code.
<li>0: success;</li>
<li>Other value: failure.</li>
 * @method string getMessage() Obtain Error message.
 * @method void setMessage(string $Message) Set Error message.
 * @method string getFileId() Obtain Video file ID to publish.
 * @method void setFileId(string $FileId) Set Video file ID to publish.
 * @method integer getDefinition() Obtain Template ID for publishing on WeChat.
 * @method void setDefinition(integer $Definition) Set Template ID for publishing on WeChat.
 * @method integer getSourceDefinition() Obtain Transcoding template ID of the published video. 0 represents the original video.
 * @method void setSourceDefinition(integer $SourceDefinition) Set Transcoding template ID of the published video. 0 represents the original video.
 * @method string getWechatStatus() Obtain WeChat publishing status. Valid values:
<li>FAIL: Failed;</li>
<li>SUCCESS: Succeeded;</li>
<li>AUDITNOTPASS: failed to pass moderation;</li>
<li>NOTTRIGGERED: Publishing on WeChat has not been initiated.</li>
 * @method void setWechatStatus(string $WechatStatus) Set WeChat publishing status. Valid values:
<li>FAIL: Failed;</li>
<li>SUCCESS: Succeeded;</li>
<li>AUDITNOTPASS: failed to pass moderation;</li>
<li>NOTTRIGGERED: Publishing on WeChat has not been initiated.</li>
 * @method string getWechatVid() Obtain WeChat Vid.
 * @method void setWechatVid(string $WechatVid) Set WeChat Vid.
 * @method string getWechatUrl() Obtain WeChat address.
 * @method void setWechatUrl(string $WechatUrl) Set WeChat address.
 */
class WechatPublishTask extends AbstractModel
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
<li>Other value: failure.</li>
     */
    public $ErrCode;

    /**
     * @var string Error message.
     */
    public $Message;

    /**
     * @var string Video file ID to publish.
     */
    public $FileId;

    /**
     * @var integer Template ID for publishing on WeChat.
     */
    public $Definition;

    /**
     * @var integer Transcoding template ID of the published video. 0 represents the original video.
     */
    public $SourceDefinition;

    /**
     * @var string WeChat publishing status. Valid values:
<li>FAIL: Failed;</li>
<li>SUCCESS: Succeeded;</li>
<li>AUDITNOTPASS: failed to pass moderation;</li>
<li>NOTTRIGGERED: Publishing on WeChat has not been initiated.</li>
     */
    public $WechatStatus;

    /**
     * @var string WeChat Vid.
     */
    public $WechatVid;

    /**
     * @var string WeChat address.
     */
    public $WechatUrl;

    /**
     * @param string $TaskId Task ID.
     * @param string $Status Task status. Valid values:
WAITING: waiting.
PROCESSING: Processing;
FINISH: completed.
     * @param integer $ErrCode Error code.
<li>0: success;</li>
<li>Other value: failure.</li>
     * @param string $Message Error message.
     * @param string $FileId Video file ID to publish.
     * @param integer $Definition Template ID for publishing on WeChat.
     * @param integer $SourceDefinition Transcoding template ID of the published video. 0 represents the original video.
     * @param string $WechatStatus WeChat publishing status. Valid values:
<li>FAIL: Failed;</li>
<li>SUCCESS: Succeeded;</li>
<li>AUDITNOTPASS: failed to pass moderation;</li>
<li>NOTTRIGGERED: Publishing on WeChat has not been initiated.</li>
     * @param string $WechatVid WeChat Vid.
     * @param string $WechatUrl WeChat address.
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

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("SourceDefinition",$param) and $param["SourceDefinition"] !== null) {
            $this->SourceDefinition = $param["SourceDefinition"];
        }

        if (array_key_exists("WechatStatus",$param) and $param["WechatStatus"] !== null) {
            $this->WechatStatus = $param["WechatStatus"];
        }

        if (array_key_exists("WechatVid",$param) and $param["WechatVid"] !== null) {
            $this->WechatVid = $param["WechatVid"];
        }

        if (array_key_exists("WechatUrl",$param) and $param["WechatUrl"] !== null) {
            $this->WechatUrl = $param["WechatUrl"];
        }
    }
}
