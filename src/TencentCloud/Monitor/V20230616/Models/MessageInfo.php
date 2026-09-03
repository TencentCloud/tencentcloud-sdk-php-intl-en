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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Message entity
 *
 * @method string getEntryId() Obtain <p>Entity id</p>
 * @method void setEntryId(string $EntryId) Set <p>Entity id</p>
 * @method string getSessionId() Obtain <p>Conversation ID</p>
 * @method void setSessionId(string $SessionId) Set <p>Conversation ID</p>
 * @method string getRole() Obtain <p>Role: user / assistant</p>
 * @method void setRole(string $Role) Set <p>Role: user / assistant</p>
 * @method string getContent() Obtain <p>Message content</p>
 * @method void setContent(string $Content) Set <p>Message content</p>
 * @method string getStatus() Obtain <p>Status.</p>
 * @method void setStatus(string $Status) Set <p>Status.</p>
 * @method array getContentBlocks() Obtain <p>Block content.</p>
 * @method void setContentBlocks(array $ContentBlocks) Set <p>Block content.</p>
 */
class MessageInfo extends AbstractModel
{
    /**
     * @var string <p>Entity id</p>
     */
    public $EntryId;

    /**
     * @var string <p>Conversation ID</p>
     */
    public $SessionId;

    /**
     * @var string <p>Role: user / assistant</p>
     */
    public $Role;

    /**
     * @var string <p>Message content</p>
     */
    public $Content;

    /**
     * @var string <p>Status.</p>
     */
    public $Status;

    /**
     * @var array <p>Block content.</p>
     */
    public $ContentBlocks;

    /**
     * @param string $EntryId <p>Entity id</p>
     * @param string $SessionId <p>Conversation ID</p>
     * @param string $Role <p>Role: user / assistant</p>
     * @param string $Content <p>Message content</p>
     * @param string $Status <p>Status.</p>
     * @param array $ContentBlocks <p>Block content.</p>
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
        if (array_key_exists("EntryId",$param) and $param["EntryId"] !== null) {
            $this->EntryId = $param["EntryId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ContentBlocks",$param) and $param["ContentBlocks"] !== null) {
            $this->ContentBlocks = [];
            foreach ($param["ContentBlocks"] as $key => $value){
                $obj = new ContentBlockInfo();
                $obj->deserialize($value);
                array_push($this->ContentBlocks, $obj);
            }
        }
    }
}
