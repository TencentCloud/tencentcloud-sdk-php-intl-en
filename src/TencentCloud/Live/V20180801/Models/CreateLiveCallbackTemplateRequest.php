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
 * @method string getTemplateName() Obtain Template name, which is a non-empty string.
Maximum length: 255 bytes.
 * @method void setTemplateName(string $TemplateName) Set Template name, which is a non-empty string.
Maximum length: 255 bytes.
 * @method string getDescription() Obtain Description.
Maximum length: 1,024 bytes.
 * @method void setDescription(string $Description) Set Description.
Maximum length: 1,024 bytes.
 * @method string getStreamBeginNotifyUrl() Obtain Stream starting callback URL,
Protocol-related document: [Event Message Notification](/document/product/267/32744).
 * @method void setStreamBeginNotifyUrl(string $StreamBeginNotifyUrl) Set Stream starting callback URL,
Protocol-related document: [Event Message Notification](/document/product/267/32744).
 * @method string getStreamEndNotifyUrl() Obtain Stream ending callback URL,
Protocol-related document: [Event Message Notification](/document/product/267/32744).
 * @method void setStreamEndNotifyUrl(string $StreamEndNotifyUrl) Set Stream ending callback URL,
Protocol-related document: [Event Message Notification](/document/product/267/32744).
 * @method string getRecordNotifyUrl() Obtain Recording callback URL,
Protocol-related document: [Event Message Notification](/document/product/267/32744).
 * @method void setRecordNotifyUrl(string $RecordNotifyUrl) Set Recording callback URL,
Protocol-related document: [Event Message Notification](/document/product/267/32744).
 * @method string getSnapshotNotifyUrl() Obtain Screencapturing callback URL,
Protocol-related document: [Event Message Notification](/document/product/267/32744).
 * @method void setSnapshotNotifyUrl(string $SnapshotNotifyUrl) Set Screencapturing callback URL,
Protocol-related document: [Event Message Notification](/document/product/267/32744).
 * @method string getPornCensorshipNotifyUrl() Obtain Porn detection callback URL,
Protocol-related document: [Event Message Notification](/document/product/267/32741).
 * @method void setPornCensorshipNotifyUrl(string $PornCensorshipNotifyUrl) Set Porn detection callback URL,
Protocol-related document: [Event Message Notification](/document/product/267/32741).
 * @method string getCallbackKey() Obtain Callback key, which is shared by callback URLs. For more information on authentication callback, please see the callback format document
 * @method void setCallbackKey(string $CallbackKey) Set Callback key, which is shared by callback URLs. For more information on authentication callback, please see the callback format document
 */

/**
 *CreateLiveCallbackTemplate request structure.
 */
class CreateLiveCallbackTemplateRequest extends AbstractModel
{
    /**
     * @var string Template name, which is a non-empty string.
Maximum length: 255 bytes.
     */
    public $TemplateName;

    /**
     * @var string Description.
Maximum length: 1,024 bytes.
     */
    public $Description;

    /**
     * @var string Stream starting callback URL,
Protocol-related document: [Event Message Notification](/document/product/267/32744).
     */
    public $StreamBeginNotifyUrl;

    /**
     * @var string Stream ending callback URL,
Protocol-related document: [Event Message Notification](/document/product/267/32744).
     */
    public $StreamEndNotifyUrl;

    /**
     * @var string Recording callback URL,
Protocol-related document: [Event Message Notification](/document/product/267/32744).
     */
    public $RecordNotifyUrl;

    /**
     * @var string Screencapturing callback URL,
Protocol-related document: [Event Message Notification](/document/product/267/32744).
     */
    public $SnapshotNotifyUrl;

    /**
     * @var string Porn detection callback URL,
Protocol-related document: [Event Message Notification](/document/product/267/32741).
     */
    public $PornCensorshipNotifyUrl;

    /**
     * @var string Callback key, which is shared by callback URLs. For more information on authentication callback, please see the callback format document
     */
    public $CallbackKey;
    /**
     * @param string $TemplateName Template name, which is a non-empty string.
Maximum length: 255 bytes.
     * @param string $Description Description.
Maximum length: 1,024 bytes.
     * @param string $StreamBeginNotifyUrl Stream starting callback URL,
Protocol-related document: [Event Message Notification](/document/product/267/32744).
     * @param string $StreamEndNotifyUrl Stream ending callback URL,
Protocol-related document: [Event Message Notification](/document/product/267/32744).
     * @param string $RecordNotifyUrl Recording callback URL,
Protocol-related document: [Event Message Notification](/document/product/267/32744).
     * @param string $SnapshotNotifyUrl Screencapturing callback URL,
Protocol-related document: [Event Message Notification](/document/product/267/32744).
     * @param string $PornCensorshipNotifyUrl Porn detection callback URL,
Protocol-related document: [Event Message Notification](/document/product/267/32741).
     * @param string $CallbackKey Callback key, which is shared by callback URLs. For more information on authentication callback, please see the callback format document
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
        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("StreamBeginNotifyUrl",$param) and $param["StreamBeginNotifyUrl"] !== null) {
            $this->StreamBeginNotifyUrl = $param["StreamBeginNotifyUrl"];
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
    }
}
