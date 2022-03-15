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
 * Configuration used to create Docker containers
 *
 * @method string getContainerImage() Obtain Container image address
 * @method void setContainerImage(string $ContainerImage) Set Container image address
 * @method string getContainerName() Obtain Container name
 * @method void setContainerName(string $ContainerName) Set Container name
 * @method array getEnvs() Obtain List of environment variables
 * @method void setEnvs(array $Envs) Set List of environment variables
 * @method array getPublishPorts() Obtain List of mappings of container ports and host ports
 * @method void setPublishPorts(array $PublishPorts) Set List of mappings of container ports and host ports
 * @method array getVolumes() Obtain List of container mount volumes
 * @method void setVolumes(array $Volumes) Set List of container mount volumes
 * @method string getCommand() Obtain The command to run
 * @method void setCommand(string $Command) Set The command to run
 */
class DockerContainerConfiguration extends AbstractModel
{
    /**
     * @var string Container image address
     */
    public $ContainerImage;

    /**
     * @var string Container name
     */
    public $ContainerName;

    /**
     * @var array List of environment variables
     */
    public $Envs;

    /**
     * @var array List of mappings of container ports and host ports
     */
    public $PublishPorts;

    /**
     * @var array List of container mount volumes
     */
    public $Volumes;

    /**
     * @var string The command to run
     */
    public $Command;

    /**
     * @param string $ContainerImage Container image address
     * @param string $ContainerName Container name
     * @param array $Envs List of environment variables
     * @param array $PublishPorts List of mappings of container ports and host ports
     * @param array $Volumes List of container mount volumes
     * @param string $Command The command to run
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
        if (array_key_exists("ContainerImage",$param) and $param["ContainerImage"] !== null) {
            $this->ContainerImage = $param["ContainerImage"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("Envs",$param) and $param["Envs"] !== null) {
            $this->Envs = [];
            foreach ($param["Envs"] as $key => $value){
                $obj = new ContainerEnv();
                $obj->deserialize($value);
                array_push($this->Envs, $obj);
            }
        }

        if (array_key_exists("PublishPorts",$param) and $param["PublishPorts"] !== null) {
            $this->PublishPorts = [];
            foreach ($param["PublishPorts"] as $key => $value){
                $obj = new DockerContainerPublishPort();
                $obj->deserialize($value);
                array_push($this->PublishPorts, $obj);
            }
        }

        if (array_key_exists("Volumes",$param) and $param["Volumes"] !== null) {
            $this->Volumes = [];
            foreach ($param["Volumes"] as $key => $value){
                $obj = new DockerContainerVolume();
                $obj->deserialize($value);
                array_push($this->Volumes, $obj);
            }
        }

        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }
    }
}
