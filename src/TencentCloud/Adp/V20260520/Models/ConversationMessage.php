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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Message information
 *
 * @method string getConversationId() Obtain <p>Session ID.</p>
 * @method void setConversationId(string $ConversationId) Set <p>Session ID.</p>
 * @method string getIcon() Obtain <p>Message icon</p>
 * @method void setIcon(string $Icon) Set <p>Message icon</p>
 * @method string getMessageId() Obtain <p>Message ID</p>
 * @method void setMessageId(string $MessageId) Set <p>Message ID</p>
 * @method string getName() Obtain <p>Message name</p>
 * @method void setName(string $Name) Set <p>Message name</p>
 * @method string getRecordId() Obtain <p>Record ID</p>
 * @method void setRecordId(string $RecordId) Set <p>Record ID</p>
 * @method string getRole() Obtain <p>Message role</p>
 * @method void setRole(string $Role) Set <p>Message role</p>
 * @method string getStatus() Obtain <p>Message status. pending: pending execution, processing: in processing, success: completed, failed: processing failure, stop: canceled</p>
 * @method void setStatus(string $Status) Set <p>Message status. pending: pending execution, processing: in processing, success: completed, failed: processing failure, stop: canceled</p>
 * @method string getStatusDesc() Obtain <p>Status description</p>
 * @method void setStatusDesc(string $StatusDesc) Set <p>Status description</p>
 * @method string getTitle() Obtain <p>Message title</p>
 * @method void setTitle(string $Title) Set <p>Message title</p>
 * @method array getContentList() Obtain <p>List of message contents</p>
 * @method void setContentList(array $ContentList) Set <p>List of message contents</p>
 * @method array getContents() Obtain <p>Message content list</p>
 * @method void setContents(array $Contents) Set <p>Message content list</p>
 * @method string getType() Obtain <p>Type.</p>
 * @method void setType(string $Type) Set <p>Type.</p>
 */
class ConversationMessage extends AbstractModel
{
    /**
     * @var string <p>Session ID.</p>
     */
    public $ConversationId;

    /**
     * @var string <p>Message icon</p>
     */
    public $Icon;

    /**
     * @var string <p>Message ID</p>
     */
    public $MessageId;

    /**
     * @var string <p>Message name</p>
     */
    public $Name;

    /**
     * @var string <p>Record ID</p>
     */
    public $RecordId;

    /**
     * @var string <p>Message role</p>
     */
    public $Role;

    /**
     * @var string <p>Message status. pending: pending execution, processing: in processing, success: completed, failed: processing failure, stop: canceled</p>
     */
    public $Status;

    /**
     * @var string <p>Status description</p>
     */
    public $StatusDesc;

    /**
     * @var string <p>Message title</p>
     */
    public $Title;

    /**
     * @var array <p>List of message contents</p>
     */
    public $ContentList;

    /**
     * @var array <p>Message content list</p>
     */
    public $Contents;

    /**
     * @var string <p>Type.</p>
     */
    public $Type;

    /**
     * @param string $ConversationId <p>Session ID.</p>
     * @param string $Icon <p>Message icon</p>
     * @param string $MessageId <p>Message ID</p>
     * @param string $Name <p>Message name</p>
     * @param string $RecordId <p>Record ID</p>
     * @param string $Role <p>Message role</p>
     * @param string $Status <p>Message status. pending: pending execution, processing: in processing, success: completed, failed: processing failure, stop: canceled</p>
     * @param string $StatusDesc <p>Status description</p>
     * @param string $Title <p>Message title</p>
     * @param array $ContentList <p>List of message contents</p>
     * @param array $Contents <p>Message content list</p>
     * @param string $Type <p>Type.</p>
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
        if (array_key_exists("ConversationId",$param) and $param["ConversationId"] !== null) {
            $this->ConversationId = $param["ConversationId"];
        }

        if (array_key_exists("Icon",$param) and $param["Icon"] !== null) {
            $this->Icon = $param["Icon"];
        }

        if (array_key_exists("MessageId",$param) and $param["MessageId"] !== null) {
            $this->MessageId = $param["MessageId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("ContentList",$param) and $param["ContentList"] !== null) {
            $this->ContentList = [];
            foreach ($param["ContentList"] as $key => $value){
                $obj = new ConversationContent();
                $obj->deserialize($value);
                array_push($this->ContentList, $obj);
            }
        }

        if (array_key_exists("Contents",$param) and $param["Contents"] !== null) {
            $this->Contents = [];
            foreach ($param["Contents"] as $key => $value){
                $obj = new ConversationContent();
                $obj->deserialize($value);
                array_push($this->Contents, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
