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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image details
 *
 * @method string getAlias() Obtain Image alias
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setAlias(string $Alias) Set Image alias
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOsName() Obtain Operating system name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOsName(string $OsName) Set Operating system name
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getImageId() Obtain Image ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setImageId(string $ImageId) Set Image ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getOsCustomizeType() Obtain Container image tag, **DOCKER_CUSTOMIZE** (container customized tag), **GENERAL** (general tag, default value)
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setOsCustomizeType(string $OsCustomizeType) Set Container image tag, **DOCKER_CUSTOMIZE** (container customized tag), **GENERAL** (general tag, default value)
Note: this field may return null, indicating that no valid values can be obtained.
 */
class ImageInstance extends AbstractModel
{
    /**
     * @var string Image alias
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Alias;

    /**
     * @var string Operating system name
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OsName;

    /**
     * @var string Image ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ImageId;

    /**
     * @var string Container image tag, **DOCKER_CUSTOMIZE** (container customized tag), **GENERAL** (general tag, default value)
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $OsCustomizeType;

    /**
     * @param string $Alias Image alias
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OsName Operating system name
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $ImageId Image ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $OsCustomizeType Container image tag, **DOCKER_CUSTOMIZE** (container customized tag), **GENERAL** (general tag, default value)
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("OsCustomizeType",$param) and $param["OsCustomizeType"] !== null) {
            $this->OsCustomizeType = $param["OsCustomizeType"];
        }
    }
}
