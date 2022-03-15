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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Docker container mount volume
 *
 * @method string getContainerPath() Obtain Container path
 * @method void setContainerPath(string $ContainerPath) Set Container path
 * @method string getHostPath() Obtain Host path
 * @method void setHostPath(string $HostPath) Set Host path
 */
class DockerContainerVolume extends AbstractModel
{
    /**
     * @var string Container path
     */
    public $ContainerPath;

    /**
     * @var string Host path
     */
    public $HostPath;

    /**
     * @param string $ContainerPath Container path
     * @param string $HostPath Host path
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
        if (array_key_exists("ContainerPath",$param) and $param["ContainerPath"] !== null) {
            $this->ContainerPath = $param["ContainerPath"];
        }

        if (array_key_exists("HostPath",$param) and $param["HostPath"] !== null) {
            $this->HostPath = $param["HostPath"];
        }
    }
}
