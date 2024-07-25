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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVolume request structure.
 *
 * @method string getEnvironmentId() Obtain Environment ID
 * @method void setEnvironmentId(string $EnvironmentId) Set Environment ID
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getType() Obtain Volume type. Valid values:
* SHARED: Multi-point mount shared storage
 * @method void setType(string $Type) Set Volume type. Valid values:
* SHARED: Multi-point mount shared storage
 * @method string getSpec() Obtain Volume specifications. Valid values:

- SD: standard
- HP: high-performance
- TB: standard Turbo
- TP: high-performance Turbo
 * @method void setSpec(string $Spec) Set Volume specifications. Valid values:

- SD: standard
- HP: high-performance
- TB: standard Turbo
- TP: high-performance Turbo
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method integer getCapacity() Obtain Volume size (GB), which is required to be specified for the Turbo series.
 * @method void setCapacity(integer $Capacity) Set Volume size (GB), which is required to be specified for the Turbo series.
 */
class CreateVolumeRequest extends AbstractModel
{
    /**
     * @var string Environment ID
     */
    public $EnvironmentId;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Volume type. Valid values:
* SHARED: Multi-point mount shared storage
     */
    public $Type;

    /**
     * @var string Volume specifications. Valid values:

- SD: standard
- HP: high-performance
- TB: standard Turbo
- TP: high-performance Turbo
     */
    public $Spec;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var integer Volume size (GB), which is required to be specified for the Turbo series.
     */
    public $Capacity;

    /**
     * @param string $EnvironmentId Environment ID
     * @param string $Name Name
     * @param string $Type Volume type. Valid values:
* SHARED: Multi-point mount shared storage
     * @param string $Spec Volume specifications. Valid values:

- SD: standard
- HP: high-performance
- TB: standard Turbo
- TP: high-performance Turbo
     * @param string $Description Description
     * @param integer $Capacity Volume size (GB), which is required to be specified for the Turbo series.
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = $param["Spec"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Capacity",$param) and $param["Capacity"] !== null) {
            $this->Capacity = $param["Capacity"];
        }
    }
}
