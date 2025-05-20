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
 * GetTkeAppChartList request structure.
 *
 * @method string getKind() Obtain Type specifies the application category. valid values include log, scheduler, network, storage, monitor, dns, image, other, and invisible.
 * @method void setKind(string $Kind) Set Type specifies the application category. valid values include log, scheduler, network, storage, monitor, dns, image, other, and invisible.
 * @method string getArch() Obtain Specifies the supported operating systems of the app. valid values: arm32, arm64, amd64.
 * @method void setArch(string $Arch) Set Specifies the supported operating systems of the app. valid values: arm32, arm64, amd64.
 * @method string getClusterType() Obtain ClusterType specifies the type of the cluster. valid values are tke and eks.
 * @method void setClusterType(string $ClusterType) Set ClusterType specifies the type of the cluster. valid values are tke and eks.
 */
class GetTkeAppChartListRequest extends AbstractModel
{
    /**
     * @var string Type specifies the application category. valid values include log, scheduler, network, storage, monitor, dns, image, other, and invisible.
     */
    public $Kind;

    /**
     * @var string Specifies the supported operating systems of the app. valid values: arm32, arm64, amd64.
     */
    public $Arch;

    /**
     * @var string ClusterType specifies the type of the cluster. valid values are tke and eks.
     */
    public $ClusterType;

    /**
     * @param string $Kind Type specifies the application category. valid values include log, scheduler, network, storage, monitor, dns, image, other, and invisible.
     * @param string $Arch Specifies the supported operating systems of the app. valid values: arm32, arm64, amd64.
     * @param string $ClusterType ClusterType specifies the type of the cluster. valid values are tke and eks.
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
        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Arch",$param) and $param["Arch"] !== null) {
            $this->Arch = $param["Arch"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }
    }
}
