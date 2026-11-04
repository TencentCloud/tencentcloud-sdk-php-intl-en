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
 * Agent Deployment project detail
 *
 * @method string getItemName() Obtain <p>Name.</p>
 * @method void setItemName(string $ItemName) Set <p>Name.</p>
 * @method string getUpdateTime() Obtain <p>Update time, unix timestamp in seconds (s)</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time, unix timestamp in seconds (s)</p>
 * @method string getActionDescription() Obtain <p>Action description.</p>
 * @method void setActionDescription(string $ActionDescription) Set <p>Action description.</p>
 * @method string getReleaseMessage() Obtain <p>Change to test</p>
 * @method void setReleaseMessage(string $ReleaseMessage) Set <p>Change to test</p>
 */
class AgentRelease extends AbstractModel
{
    /**
     * @var string <p>Name.</p>
     */
    public $ItemName;

    /**
     * @var string <p>Update time, unix timestamp in seconds (s)</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>Action description.</p>
     */
    public $ActionDescription;

    /**
     * @var string <p>Change to test</p>
     */
    public $ReleaseMessage;

    /**
     * @param string $ItemName <p>Name.</p>
     * @param string $UpdateTime <p>Update time, unix timestamp in seconds (s)</p>
     * @param string $ActionDescription <p>Action description.</p>
     * @param string $ReleaseMessage <p>Change to test</p>
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
        if (array_key_exists("ItemName",$param) and $param["ItemName"] !== null) {
            $this->ItemName = $param["ItemName"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ActionDescription",$param) and $param["ActionDescription"] !== null) {
            $this->ActionDescription = $param["ActionDescription"];
        }

        if (array_key_exists("ReleaseMessage",$param) and $param["ReleaseMessage"] !== null) {
            $this->ReleaseMessage = $param["ReleaseMessage"];
        }
    }
}
