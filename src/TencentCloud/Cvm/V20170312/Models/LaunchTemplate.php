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
 * Instance launch template. This parameter enables you to create an instance using the preset parameters in the template.
 *
 * @method string getLaunchTemplateId() Obtain Instance launch template ID. This parameter enables you to create an instance using the preset parameters in the template.
 * @method void setLaunchTemplateId(string $LaunchTemplateId) Set Instance launch template ID. This parameter enables you to create an instance using the preset parameters in the template.
 * @method integer getLaunchTemplateVersion() Obtain Instance launch template version number. If specified, this parameter will be used to create a new instance launch template.
 * @method void setLaunchTemplateVersion(integer $LaunchTemplateVersion) Set Instance launch template version number. If specified, this parameter will be used to create a new instance launch template.
 */
class LaunchTemplate extends AbstractModel
{
    /**
     * @var string Instance launch template ID. This parameter enables you to create an instance using the preset parameters in the template.
     */
    public $LaunchTemplateId;

    /**
     * @var integer Instance launch template version number. If specified, this parameter will be used to create a new instance launch template.
     */
    public $LaunchTemplateVersion;

    /**
     * @param string $LaunchTemplateId Instance launch template ID. This parameter enables you to create an instance using the preset parameters in the template.
     * @param integer $LaunchTemplateVersion Instance launch template version number. If specified, this parameter will be used to create a new instance launch template.
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

        if (array_key_exists("LaunchTemplateVersion",$param) and $param["LaunchTemplateVersion"] !== null) {
            $this->LaunchTemplateVersion = $param["LaunchTemplateVersion"];
        }
    }
}
