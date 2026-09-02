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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Container environment info
 *
 * @method string getNodeType() Obtain <p>Node type</p>
 * @method void setNodeType(string $NodeType) Set <p>Node type</p>
 * @method string getDockerVersion() Obtain <p>docker version</p>
 * @method void setDockerVersion(string $DockerVersion) Set <p>docker version</p>
 * @method string getContainerdVersion() Obtain <p>containerd version</p>
 * @method void setContainerdVersion(string $ContainerdVersion) Set <p>containerd version</p>
 * @method string getFileSystemType() Obtain <p>File System Type</p>
 * @method void setFileSystemType(string $FileSystemType) Set <p>File System Type</p>
 */
class ContainerEnvInfo extends AbstractModel
{
    /**
     * @var string <p>Node type</p>
     */
    public $NodeType;

    /**
     * @var string <p>docker version</p>
     */
    public $DockerVersion;

    /**
     * @var string <p>containerd version</p>
     */
    public $ContainerdVersion;

    /**
     * @var string <p>File System Type</p>
     */
    public $FileSystemType;

    /**
     * @param string $NodeType <p>Node type</p>
     * @param string $DockerVersion <p>docker version</p>
     * @param string $ContainerdVersion <p>containerd version</p>
     * @param string $FileSystemType <p>File System Type</p>
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
        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("DockerVersion",$param) and $param["DockerVersion"] !== null) {
            $this->DockerVersion = $param["DockerVersion"];
        }

        if (array_key_exists("ContainerdVersion",$param) and $param["ContainerdVersion"] !== null) {
            $this->ContainerdVersion = $param["ContainerdVersion"];
        }

        if (array_key_exists("FileSystemType",$param) and $param["FileSystemType"] !== null) {
            $this->FileSystemType = $param["FileSystemType"];
        }
    }
}
