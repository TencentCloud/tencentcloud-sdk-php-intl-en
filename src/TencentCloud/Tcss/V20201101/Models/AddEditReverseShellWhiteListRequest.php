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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddEditReverseShellWhiteList request structure.
 *
 * @method ReverseShellWhiteListInfo getWhiteListInfo() Obtain Information of the allowed item to be added or edited. When an allowed item is added, `WhiteListInfo.id` can be empty; when an allowed item is edited, `WhiteListInfo.id` cannot be empty.
 * @method void setWhiteListInfo(ReverseShellWhiteListInfo $WhiteListInfo) Set Information of the allowed item to be added or edited. When an allowed item is added, `WhiteListInfo.id` can be empty; when an allowed item is edited, `WhiteListInfo.id` cannot be empty.
 * @method string getEventId() Obtain Used only when an event is added to the allowlist
 * @method void setEventId(string $EventId) Set Used only when an event is added to the allowlist
 */
class AddEditReverseShellWhiteListRequest extends AbstractModel
{
    /**
     * @var ReverseShellWhiteListInfo Information of the allowed item to be added or edited. When an allowed item is added, `WhiteListInfo.id` can be empty; when an allowed item is edited, `WhiteListInfo.id` cannot be empty.
     */
    public $WhiteListInfo;

    /**
     * @var string Used only when an event is added to the allowlist
     */
    public $EventId;

    /**
     * @param ReverseShellWhiteListInfo $WhiteListInfo Information of the allowed item to be added or edited. When an allowed item is added, `WhiteListInfo.id` can be empty; when an allowed item is edited, `WhiteListInfo.id` cannot be empty.
     * @param string $EventId Used only when an event is added to the allowlist
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
        if (array_key_exists("WhiteListInfo",$param) and $param["WhiteListInfo"] !== null) {
            $this->WhiteListInfo = new ReverseShellWhiteListInfo();
            $this->WhiteListInfo->deserialize($param["WhiteListInfo"]);
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }
    }
}
