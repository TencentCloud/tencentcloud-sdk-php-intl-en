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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Parameter modification for the inference service container configuration.
 *
 * @method string getImageType() Obtain <p>Image type. Valid values: <li>TCR: an image from Tencent Cloud container mirroring service.</li></p>
 * @method void setImageType(string $ImageType) Set <p>Image type. Valid values: <li>TCR: an image from Tencent Cloud container mirroring service.</li></p>
 * @method InferenceTCRRepositoryConfig getTcrRepositoryConfig() Obtain <p>TCR image repository info. Required when ImageType is TCR.</p>
 * @method void setTcrRepositoryConfig(InferenceTCRRepositoryConfig $TcrRepositoryConfig) Set <p>TCR image repository info. Required when ImageType is TCR.</p>
 * @method string getStartupCommand() Obtain <p>Command executed at container startup. If left empty, the image's Entrypoint/CMD is used by default. Supports up to 1024 characters.</p>
 * @method void setStartupCommand(string $StartupCommand) Set <p>Command executed at container startup. If left empty, the image's Entrypoint/CMD is used by default. Supports up to 1024 characters.</p>
 * @method array getEnvironmentVariables() Obtain <p>Environment variables of the container runtime. Supports up to 10 variables.</p>
 * @method void setEnvironmentVariables(array $EnvironmentVariables) Set <p>Environment variables of the container runtime. Supports up to 10 variables.</p>
 */
class InferenceContainerConfigForModify extends AbstractModel
{
    /**
     * @var string <p>Image type. Valid values: <li>TCR: an image from Tencent Cloud container mirroring service.</li></p>
     */
    public $ImageType;

    /**
     * @var InferenceTCRRepositoryConfig <p>TCR image repository info. Required when ImageType is TCR.</p>
     */
    public $TcrRepositoryConfig;

    /**
     * @var string <p>Command executed at container startup. If left empty, the image's Entrypoint/CMD is used by default. Supports up to 1024 characters.</p>
     */
    public $StartupCommand;

    /**
     * @var array <p>Environment variables of the container runtime. Supports up to 10 variables.</p>
     */
    public $EnvironmentVariables;

    /**
     * @param string $ImageType <p>Image type. Valid values: <li>TCR: an image from Tencent Cloud container mirroring service.</li></p>
     * @param InferenceTCRRepositoryConfig $TcrRepositoryConfig <p>TCR image repository info. Required when ImageType is TCR.</p>
     * @param string $StartupCommand <p>Command executed at container startup. If left empty, the image's Entrypoint/CMD is used by default. Supports up to 1024 characters.</p>
     * @param array $EnvironmentVariables <p>Environment variables of the container runtime. Supports up to 10 variables.</p>
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
        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            $this->ImageType = $param["ImageType"];
        }

        if (array_key_exists("TcrRepositoryConfig",$param) and $param["TcrRepositoryConfig"] !== null) {
            $this->TcrRepositoryConfig = new InferenceTCRRepositoryConfig();
            $this->TcrRepositoryConfig->deserialize($param["TcrRepositoryConfig"]);
        }

        if (array_key_exists("StartupCommand",$param) and $param["StartupCommand"] !== null) {
            $this->StartupCommand = $param["StartupCommand"];
        }

        if (array_key_exists("EnvironmentVariables",$param) and $param["EnvironmentVariables"] !== null) {
            $this->EnvironmentVariables = [];
            foreach ($param["EnvironmentVariables"] as $key => $value){
                $obj = new InferenceEnvironmentVariable();
                $obj->deserialize($value);
                array_push($this->EnvironmentVariables, $obj);
            }
        }
    }
}
