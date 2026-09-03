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
 * ListAIWorkbenchMessages request structure.
 *
 * @method string getSessionId() Obtain <p>Conversation ID</p>
 * @method void setSessionId(string $SessionId) Set <p>Conversation ID</p>
 * @method string getCursor() Obtain <p>Tag for cursor pagination</p>
 * @method void setCursor(string $Cursor) Set <p>Tag for cursor pagination</p>
 * @method integer getLimit() Obtain <p>Window size</p>
 * @method void setLimit(integer $Limit) Set <p>Window size</p>
 * @method string getDirection() Obtain <p>Pull sequence</p>
 * @method void setDirection(string $Direction) Set <p>Pull sequence</p>
 */
class ListAIWorkbenchMessagesRequest extends AbstractModel
{
    /**
     * @var string <p>Conversation ID</p>
     */
    public $SessionId;

    /**
     * @var string <p>Tag for cursor pagination</p>
     */
    public $Cursor;

    /**
     * @var integer <p>Window size</p>
     */
    public $Limit;

    /**
     * @var string <p>Pull sequence</p>
     */
    public $Direction;

    /**
     * @param string $SessionId <p>Conversation ID</p>
     * @param string $Cursor <p>Tag for cursor pagination</p>
     * @param integer $Limit <p>Window size</p>
     * @param string $Direction <p>Pull sequence</p>
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Cursor",$param) and $param["Cursor"] !== null) {
            $this->Cursor = $param["Cursor"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
