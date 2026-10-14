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
 * 
 *
 * @method string getAppId() Obtain 
 * @method void setAppId(string $AppId) Set 
 * @method string getName() Obtain 
 * @method void setName(string $Name) Set 
 * @method string getSpaceId() Obtain 
 * @method void setSpaceId(string $SpaceId) Set 
 * @method string getWorkflowId() Obtain 
 * @method void setWorkflowId(string $WorkflowId) Set 
 */
class ConversationWorkflowArtifact extends AbstractModel
{
    /**
     * @var string 
     */
    public $AppId;

    /**
     * @var string 
     */
    public $Name;

    /**
     * @var string 
     */
    public $SpaceId;

    /**
     * @var string 
     */
    public $WorkflowId;

    /**
     * @param string $AppId 
     * @param string $Name 
     * @param string $SpaceId 
     * @param string $WorkflowId 
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }
    }
}
