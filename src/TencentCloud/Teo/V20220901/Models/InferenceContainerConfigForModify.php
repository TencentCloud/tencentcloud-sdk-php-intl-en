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
 * Parameter modification of the configured inference service container.
 *
 * @method string getImageType() Obtain Image type. Valid values: <li>TCR: a Tencent Cloud container mirroring service mirror.</li>
 * @method void setImageType(string $ImageType) Set Image type. Valid values: <li>TCR: a Tencent Cloud container mirroring service mirror.</li>
 * @method InferenceTCRRepositoryConfig getTcrRepositoryConfig() Obtain TCR image repository information. Required when ImageType is TCR.
 * @method void setTcrRepositoryConfig(InferenceTCRRepositoryConfig $TcrRepositoryConfig) Set TCR image repository information. Required when ImageType is TCR.
 * @method string getStartupCommand() Obtain Command executed at container startup. Uses the mirror's Entrypoint/CMD by default when left empty. Supports up to 1024 characters.
 * @method void setStartupCommand(string $StartupCommand) Set Command executed at container startup. Uses the mirror's Entrypoint/CMD by default when left empty. Supports up to 1024 characters.
 * @method array getEnvironmentVariables() Obtain Environment variables of the container runtime. Supports up to 10 variables.
 * @method void setEnvironmentVariables(array $EnvironmentVariables) Set Environment variables of the container runtime. Supports up to 10 variables.
 */
class InferenceContainerConfigForModify extends AbstractModel
{
    /**
     * @var string Image type. Valid values: <li>TCR: a Tencent Cloud container mirroring service mirror.</li>
     */
    public $ImageType;

    /**
     * @var InferenceTCRRepositoryConfig TCR image repository information. Required when ImageType is TCR.
     */
    public $TcrRepositoryConfig;

    /**
     * @var string Command executed at container startup. Uses the mirror's Entrypoint/CMD by default when left empty. Supports up to 1024 characters.
     */
    public $StartupCommand;

    /**
     * @var array Environment variables of the container runtime. Supports up to 10 variables.
     */
    public $EnvironmentVariables;

    /**
     * @param string $ImageType Image type. Valid values: <li>TCR: a Tencent Cloud container mirroring service mirror.</li>
     * @param InferenceTCRRepositoryConfig $TcrRepositoryConfig TCR image repository information. Required when ImageType is TCR.
     * @param string $StartupCommand Command executed at container startup. Uses the mirror's Entrypoint/CMD by default when left empty. Supports up to 1024 characters.
     * @param array $EnvironmentVariables Environment variables of the container runtime. Supports up to 10 variables.
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
