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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePolicy request structure.
 *
 * @method string getName() Obtain Policy name.
The length ranges from 1 to 128 characters, and can contain chinese characters, english letters, digits, and underscores (_).
 * @method void setName(string $Name) Set Policy name.
The length ranges from 1 to 128 characters, and can contain chinese characters, english letters, digits, and underscores (_).
 * @method string getContent() Obtain Policy content. See the CAM policy syntax.
 * @method void setContent(string $Content) Set Policy content. See the CAM policy syntax.
 * @method string getType() Obtain Policy type. Valid values: SERVICE_CONTROL_POLICY: service control policy; TAG_POLICY: tag policy. The default value is SERVICE_CONTROL_POLICY.
 * @method void setType(string $Type) Set Policy type. Valid values: SERVICE_CONTROL_POLICY: service control policy; TAG_POLICY: tag policy. The default value is SERVICE_CONTROL_POLICY.
 * @method string getDescription() Obtain Policy description
 * @method void setDescription(string $Description) Set Policy description
 */
class CreatePolicyRequest extends AbstractModel
{
    /**
     * @var string Policy name.
The length ranges from 1 to 128 characters, and can contain chinese characters, english letters, digits, and underscores (_).
     */
    public $Name;

    /**
     * @var string Policy content. See the CAM policy syntax.
     */
    public $Content;

    /**
     * @var string Policy type. Valid values: SERVICE_CONTROL_POLICY: service control policy; TAG_POLICY: tag policy. The default value is SERVICE_CONTROL_POLICY.
     */
    public $Type;

    /**
     * @var string Policy description
     */
    public $Description;

    /**
     * @param string $Name Policy name.
The length ranges from 1 to 128 characters, and can contain chinese characters, english letters, digits, and underscores (_).
     * @param string $Content Policy content. See the CAM policy syntax.
     * @param string $Type Policy type. Valid values: SERVICE_CONTROL_POLICY: service control policy; TAG_POLICY: tag policy. The default value is SERVICE_CONTROL_POLICY.
     * @param string $Description Policy description
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
