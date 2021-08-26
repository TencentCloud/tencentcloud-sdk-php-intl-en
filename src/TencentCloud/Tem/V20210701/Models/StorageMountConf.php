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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Data volume mount information
 *
 * @method string getVolumeName() Obtain Data volume name
 * @method void setVolumeName(string $VolumeName) Set Data volume name
 * @method string getMountPath() Obtain Data volume binding path
 * @method void setMountPath(string $MountPath) Set Data volume binding path
 */
class StorageMountConf extends AbstractModel
{
    /**
     * @var string Data volume name
     */
    public $VolumeName;

    /**
     * @var string Data volume binding path
     */
    public $MountPath;

    /**
     * @param string $VolumeName Data volume name
     * @param string $MountPath Data volume binding path
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
        if (array_key_exists("VolumeName",$param) and $param["VolumeName"] !== null) {
            $this->VolumeName = $param["VolumeName"];
        }

        if (array_key_exists("MountPath",$param) and $param["MountPath"] !== null) {
            $this->MountPath = $param["MountPath"];
        }
    }
}
