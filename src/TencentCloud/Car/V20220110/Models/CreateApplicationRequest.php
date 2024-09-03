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
namespace TencentCloud\Car\V20220110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateApplication request structure.
 *
 * @method string getApplicationName() Obtain Application name.
 * @method void setApplicationName(string $ApplicationName) Set Application name.
 * @method string getApplicationType() Obtain Application type (Application3D: cloud 3D; ApplicationXR: cloud XR; ApplicationAPK: cloud APK).
 * @method void setApplicationType(string $ApplicationType) Set Application type (Application3D: cloud 3D; ApplicationXR: cloud XR; ApplicationAPK: cloud APK).
 */
class CreateApplicationRequest extends AbstractModel
{
    /**
     * @var string Application name.
     */
    public $ApplicationName;

    /**
     * @var string Application type (Application3D: cloud 3D; ApplicationXR: cloud XR; ApplicationAPK: cloud APK).
     */
    public $ApplicationType;

    /**
     * @param string $ApplicationName Application name.
     * @param string $ApplicationType Application type (Application3D: cloud 3D; ApplicationXR: cloud XR; ApplicationAPK: cloud APK).
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
        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("ApplicationType",$param) and $param["ApplicationType"] !== null) {
            $this->ApplicationType = $param["ApplicationType"];
        }
    }
}
