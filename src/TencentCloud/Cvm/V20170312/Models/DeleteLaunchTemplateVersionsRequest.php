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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteLaunchTemplateVersions request structure.
 *
 * @method string getLaunchTemplateId() Obtain The launch template ID
 * @method void setLaunchTemplateId(string $LaunchTemplateId) Set The launch template ID
 * @method array getLaunchTemplateVersions() Obtain List of instance launch template versions.
 * @method void setLaunchTemplateVersions(array $LaunchTemplateVersions) Set List of instance launch template versions.
 */
class DeleteLaunchTemplateVersionsRequest extends AbstractModel
{
    /**
     * @var string The launch template ID
     */
    public $LaunchTemplateId;

    /**
     * @var array List of instance launch template versions.
     */
    public $LaunchTemplateVersions;

    /**
     * @param string $LaunchTemplateId The launch template ID
     * @param array $LaunchTemplateVersions List of instance launch template versions.
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
        if (array_key_exists("LaunchTemplateId",$param) and $param["LaunchTemplateId"] !== null) {
            $this->LaunchTemplateId = $param["LaunchTemplateId"];
        }

        if (array_key_exists("LaunchTemplateVersions",$param) and $param["LaunchTemplateVersions"] !== null) {
            $this->LaunchTemplateVersions = $param["LaunchTemplateVersions"];
        }
    }
}
