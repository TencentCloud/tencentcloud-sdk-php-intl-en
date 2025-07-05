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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetDocPreview request structure.
 *
 * @method string getDocBizId() Obtain Document BizID.
 * @method void setDocBizId(string $DocBizId) Set Document BizID.
 * @method string getBotBizId() Obtain Application ID.
 * @method void setBotBizId(string $BotBizId) Set Application ID.
 * @method string getTypeKey() Obtain Storage type: offline - offline file; realtime - real-time file. If empty, it defaults to offline.
 * @method void setTypeKey(string $TypeKey) Set Storage type: offline - offline file; realtime - real-time file. If empty, it defaults to offline.
 */
class GetDocPreviewRequest extends AbstractModel
{
    /**
     * @var string Document BizID.
     */
    public $DocBizId;

    /**
     * @var string Application ID.
     */
    public $BotBizId;

    /**
     * @var string Storage type: offline - offline file; realtime - real-time file. If empty, it defaults to offline.
     */
    public $TypeKey;

    /**
     * @param string $DocBizId Document BizID.
     * @param string $BotBizId Application ID.
     * @param string $TypeKey Storage type: offline - offline file; realtime - real-time file. If empty, it defaults to offline.
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
        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("TypeKey",$param) and $param["TypeKey"] !== null) {
            $this->TypeKey = $param["TypeKey"];
        }
    }
}
