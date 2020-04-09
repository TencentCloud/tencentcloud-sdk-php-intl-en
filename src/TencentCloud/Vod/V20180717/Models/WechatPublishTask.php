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
 * Release on WeChat task information
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
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setErrCode(integer $ErrCode) Set Error code
<li>0: success;</li>
<li>Other values: failure.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getMessage() Obtain Error message.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMessage(string $Message) Set Error message.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFileId() Obtain ID of published video file.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setFileId(string $FileId) Set ID of published video file.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getDefinition() Obtain Release on WeChat template ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDefinition(integer $Definition) Set Release on WeChat template ID.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getSourceDefinition() Obtain ID of the transcoding template corresponding to the published video. 0 represents the source video.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setSourceDefinition(integer $SourceDefinition) Set ID of the transcoding template corresponding to the published video. 0 represents the source video.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getWechatStatus() Obtain Release on WeChat status. Valid values:
<li>FAIL: failure;</li>
<li>SUCCESS: success;</li>
<li>AUDITNOTPASS: rejected</li>
<li>NOTTRIGGERED: release on WeChat not initiated yet.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWechatStatus(string $WechatStatus) Set Release on WeChat status. Valid values:
<li>FAIL: failure;</li>
<li>SUCCESS: success;</li>
<li>AUDITNOTPASS: rejected</li>
<li>NOTTRIGGERED: release on WeChat not initiated yet.</li>
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getWechatVid() Obtain WeChat `Vid`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWechatVid(string $WechatVid) Set WeChat `Vid`.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getWechatUrl() Obtain WeChat address.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWechatUrl(string $WechatUrl) Set WeChat address.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class WechatPublishTask extends AbstractModel
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
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ErrCode;

    /**
     * @var string Error message.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Message;

    /**
     * @var string ID of published video file.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $FileId;

    /**
     * @var integer Release on WeChat template ID.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Definition;

    /**
     * @var integer ID of the transcoding template corresponding to the published video. 0 represents the source video.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $SourceDefinition;

    /**
     * @var string Release on WeChat status. Valid values:
<li>FAIL: failure;</li>
<li>SUCCESS: success;</li>
<li>AUDITNOTPASS: rejected</li>
<li>NOTTRIGGERED: release on WeChat not initiated yet.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $WechatStatus;

    /**
     * @var string WeChat `Vid`.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $WechatVid;

    /**
     * @var string WeChat address.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $WechatUrl;

    /**
     * @param string $TaskId Task ID.
     * @param string $Status Task status. Valid values:
WAITING: waiting;
PROCESSING: processing;
FINISH: completed.
     * @param integer $ErrCode Error code
<li>0: success;</li>
<li>Other values: failure.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $Message Error message.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $FileId ID of published video file.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Definition Release on WeChat template ID.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $SourceDefinition ID of the transcoding template corresponding to the published video. 0 represents the source video.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $WechatStatus Release on WeChat status. Valid values:
<li>FAIL: failure;</li>
<li>SUCCESS: success;</li>
<li>AUDITNOTPASS: rejected</li>
<li>NOTTRIGGERED: release on WeChat not initiated yet.</li>
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $WechatVid WeChat `Vid`.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $WechatUrl WeChat address.
Note: this field may return null, indicating that no valid values can be obtained.
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
