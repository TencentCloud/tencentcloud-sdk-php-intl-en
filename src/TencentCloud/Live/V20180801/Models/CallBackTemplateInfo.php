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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Callback template information.
 *
 * @method integer getTemplateId() Obtain Template ID.
 * @method void setTemplateId(integer $TemplateId) Set Template ID.
 * @method string getTemplateName() Obtain Template name.
 * @method void setTemplateName(string $TemplateName) Set Template name.
 * @method string getDescription() Obtain Description.
 * @method void setDescription(string $Description) Set Description.
 * @method string getStreamBeginNotifyUrl() Obtain Stream starting callback URL.
 * @method void setStreamBeginNotifyUrl(string $StreamBeginNotifyUrl) Set Stream starting callback URL.
 * @method string getStreamMixNotifyUrl() Obtain Stream mixing callback URL (disused)
 * @method void setStreamMixNotifyUrl(string $StreamMixNotifyUrl) Set Stream mixing callback URL (disused)
 * @method string getStreamEndNotifyUrl() Obtain Interruption callback URL.
 * @method void setStreamEndNotifyUrl(string $StreamEndNotifyUrl) Set Interruption callback URL.
 * @method string getRecordNotifyUrl() Obtain Recording callback URL.
 * @method void setRecordNotifyUrl(string $RecordNotifyUrl) Set Recording callback URL.
 * @method string getSnapshotNotifyUrl() Obtain Screencapturing callback URL.
 * @method void setSnapshotNotifyUrl(string $SnapshotNotifyUrl) Set Screencapturing callback URL.
 * @method string getPornCensorshipNotifyUrl() Obtain Porn detection callback URL.
 * @method void setPornCensorshipNotifyUrl(string $PornCensorshipNotifyUrl) Set Porn detection callback URL.
 * @method string getCallbackKey() Obtain Callback authentication key.
 * @method void setCallbackKey(string $CallbackKey) Set Callback authentication key.
 * @method string getPushExceptionNotifyUrl() Obtain The push error callback URL.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setPushExceptionNotifyUrl(string $PushExceptionNotifyUrl) Set The push error callback URL.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAudioAuditNotifyUrl() Obtain The audio/video moderation callback URL.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAudioAuditNotifyUrl(string $AudioAuditNotifyUrl) Set The audio/video moderation callback URL.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CallBackTemplateInfo extends AbstractModel
{
    /**
     * @var integer Template ID.
     */
    public $TemplateId;

    /**
     * @var string Template name.
     */
    public $TemplateName;

    /**
     * @var string Description.
     */
    public $Description;

    /**
     * @var string Stream starting callback URL.
     */
    public $StreamBeginNotifyUrl;

    /**
     * @var string Stream mixing callback URL (disused)
     */
    public $StreamMixNotifyUrl;

    /**
     * @var string Interruption callback URL.
     */
    public $StreamEndNotifyUrl;

    /**
     * @var string Recording callback URL.
     */
    public $RecordNotifyUrl;

    /**
     * @var string Screencapturing callback URL.
     */
    public $SnapshotNotifyUrl;

    /**
     * @var string Porn detection callback URL.
     */
    public $PornCensorshipNotifyUrl;

    /**
     * @var string Callback authentication key.
     */
    public $CallbackKey;

    /**
     * @var string The push error callback URL.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $PushExceptionNotifyUrl;

    /**
     * @var string The audio/video moderation callback URL.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AudioAuditNotifyUrl;

    /**
     * @param integer $TemplateId Template ID.
     * @param string $TemplateName Template name.
     * @param string $Description Description.
     * @param string $StreamBeginNotifyUrl Stream starting callback URL.
     * @param string $StreamMixNotifyUrl Stream mixing callback URL (disused)
     * @param string $StreamEndNotifyUrl Interruption callback URL.
     * @param string $RecordNotifyUrl Recording callback URL.
     * @param string $SnapshotNotifyUrl Screencapturing callback URL.
     * @param string $PornCensorshipNotifyUrl Porn detection callback URL.
     * @param string $CallbackKey Callback authentication key.
     * @param string $PushExceptionNotifyUrl The push error callback URL.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AudioAuditNotifyUrl The audio/video moderation callback URL.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("StreamBeginNotifyUrl",$param) and $param["StreamBeginNotifyUrl"] !== null) {
            $this->StreamBeginNotifyUrl = $param["StreamBeginNotifyUrl"];
        }

        if (array_key_exists("StreamMixNotifyUrl",$param) and $param["StreamMixNotifyUrl"] !== null) {
            $this->StreamMixNotifyUrl = $param["StreamMixNotifyUrl"];
        }

        if (array_key_exists("StreamEndNotifyUrl",$param) and $param["StreamEndNotifyUrl"] !== null) {
            $this->StreamEndNotifyUrl = $param["StreamEndNotifyUrl"];
        }

        if (array_key_exists("RecordNotifyUrl",$param) and $param["RecordNotifyUrl"] !== null) {
            $this->RecordNotifyUrl = $param["RecordNotifyUrl"];
        }

        if (array_key_exists("SnapshotNotifyUrl",$param) and $param["SnapshotNotifyUrl"] !== null) {
            $this->SnapshotNotifyUrl = $param["SnapshotNotifyUrl"];
        }

        if (array_key_exists("PornCensorshipNotifyUrl",$param) and $param["PornCensorshipNotifyUrl"] !== null) {
            $this->PornCensorshipNotifyUrl = $param["PornCensorshipNotifyUrl"];
        }

        if (array_key_exists("CallbackKey",$param) and $param["CallbackKey"] !== null) {
            $this->CallbackKey = $param["CallbackKey"];
        }

        if (array_key_exists("PushExceptionNotifyUrl",$param) and $param["PushExceptionNotifyUrl"] !== null) {
            $this->PushExceptionNotifyUrl = $param["PushExceptionNotifyUrl"];
        }

        if (array_key_exists("AudioAuditNotifyUrl",$param) and $param["AudioAuditNotifyUrl"] !== null) {
            $this->AudioAuditNotifyUrl = $param["AudioAuditNotifyUrl"];
        }
    }
}
