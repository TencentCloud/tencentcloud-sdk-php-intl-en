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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLaunchTemplateDefaultVersion request structure.
 *
 * @method string getLaunchTemplateId() Obtain The launch template ID
 * @method void setLaunchTemplateId(string $LaunchTemplateId) Set The launch template ID
 * @method integer getDefaultVersion() Obtain The number of the version that you want to set as the default version
 * @method void setDefaultVersion(integer $DefaultVersion) Set The number of the version that you want to set as the default version
 */
class ModifyLaunchTemplateDefaultVersionRequest extends AbstractModel
{
    /**
     * @var string The launch template ID
     */
    public $LaunchTemplateId;

    /**
     * @var integer The number of the version that you want to set as the default version
     */
    public $DefaultVersion;

    /**
     * @param string $LaunchTemplateId The launch template ID
     * @param integer $DefaultVersion The number of the version that you want to set as the default version
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

        if (array_key_exists("DefaultVersion",$param) and $param["DefaultVersion"] !== null) {
            $this->DefaultVersion = $param["DefaultVersion"];
        }
    }
}
