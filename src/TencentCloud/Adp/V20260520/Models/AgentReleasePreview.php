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
 * Agent release preview information
 *
 * @method string getAgentId() Obtain <p>AgentID</p>
 * @method void setAgentId(string $AgentId) Set <p>AgentID</p>
 * @method string getName() Obtain <p>Agent Name</p>
 * @method void setName(string $Name) Set <p>Agent Name</p>
 * @method string getUpdateTime() Obtain <p>Update time, unix timestamp in seconds (s)</p>
 * @method void setUpdateTime(string $UpdateTime) Set <p>Update time, unix timestamp in seconds (s)</p>
 * @method integer getAction() Obtain <p>Status, status value: 1: Add new, 2: Modify, 3: Delete</p>
 * @method void setAction(integer $Action) Set <p>Status, status value: 1: Add new, 2: Modify, 3: Delete</p>
 * @method string getActionDescription() Obtain <p>Action description.</p>
 * @method void setActionDescription(string $ActionDescription) Set <p>Action description.</p>
 * @method string getMessage() Obtain <p>Publish a message</p>
 * @method void setMessage(string $Message) Set <p>Publish a message</p>
 * @method array getReleaseList() Obtain <p>Release detail</p>
 * @method void setReleaseList(array $ReleaseList) Set <p>Release detail</p>
 */
class AgentReleasePreview extends AbstractModel
{
    /**
     * @var string <p>AgentID</p>
     */
    public $AgentId;

    /**
     * @var string <p>Agent Name</p>
     */
    public $Name;

    /**
     * @var string <p>Update time, unix timestamp in seconds (s)</p>
     */
    public $UpdateTime;

    /**
     * @var integer <p>Status, status value: 1: Add new, 2: Modify, 3: Delete</p>
     */
    public $Action;

    /**
     * @var string <p>Action description.</p>
     */
    public $ActionDescription;

    /**
     * @var string <p>Publish a message</p>
     */
    public $Message;

    /**
     * @var array <p>Release detail</p>
     */
    public $ReleaseList;

    /**
     * @param string $AgentId <p>AgentID</p>
     * @param string $Name <p>Agent Name</p>
     * @param string $UpdateTime <p>Update time, unix timestamp in seconds (s)</p>
     * @param integer $Action <p>Status, status value: 1: Add new, 2: Modify, 3: Delete</p>
     * @param string $ActionDescription <p>Action description.</p>
     * @param string $Message <p>Publish a message</p>
     * @param array $ReleaseList <p>Release detail</p>
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
        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("ActionDescription",$param) and $param["ActionDescription"] !== null) {
            $this->ActionDescription = $param["ActionDescription"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("ReleaseList",$param) and $param["ReleaseList"] !== null) {
            $this->ReleaseList = [];
            foreach ($param["ReleaseList"] as $key => $value){
                $obj = new AgentRelease();
                $obj->deserialize($value);
                array_push($this->ReleaseList, $obj);
            }
        }
    }
}
