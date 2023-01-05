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
 * UpdateEdgeClusterVersion request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method string getEdgeVersion() Obtain Target version
 * @method void setEdgeVersion(string $EdgeVersion) Set Target version
 * @method string getRegistryPrefix() Obtain Prefix of the image repository of a custom edge component
 * @method void setRegistryPrefix(string $RegistryPrefix) Set Prefix of the image repository of a custom edge component
 * @method boolean getSkipPreCheck() Obtain Whether to skip precheck
 * @method void setSkipPreCheck(boolean $SkipPreCheck) Set Whether to skip precheck
 */
class UpdateEdgeClusterVersionRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var string Target version
     */
    public $EdgeVersion;

    /**
     * @var string Prefix of the image repository of a custom edge component
     */
    public $RegistryPrefix;

    /**
     * @var boolean Whether to skip precheck
     */
    public $SkipPreCheck;

    /**
     * @param string $ClusterId Cluster ID
     * @param string $EdgeVersion Target version
     * @param string $RegistryPrefix Prefix of the image repository of a custom edge component
     * @param boolean $SkipPreCheck Whether to skip precheck
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("EdgeVersion",$param) and $param["EdgeVersion"] !== null) {
            $this->EdgeVersion = $param["EdgeVersion"];
        }

        if (array_key_exists("RegistryPrefix",$param) and $param["RegistryPrefix"] !== null) {
            $this->RegistryPrefix = $param["RegistryPrefix"];
        }

        if (array_key_exists("SkipPreCheck",$param) and $param["SkipPreCheck"] !== null) {
            $this->SkipPreCheck = $param["SkipPreCheck"];
        }
    }
}
