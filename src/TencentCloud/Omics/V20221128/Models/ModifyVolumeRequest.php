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
 * ModifyVolume request structure.
 *
 * @method string getVolumeId() Obtain Volume ID
 * @method void setVolumeId(string $VolumeId) Set Volume ID
 * @method string getName() Obtain Name
 * @method void setName(string $Name) Set Name
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 */
class ModifyVolumeRequest extends AbstractModel
{
    /**
     * @var string Volume ID
     */
    public $VolumeId;

    /**
     * @var string Name
     */
    public $Name;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @param string $VolumeId Volume ID
     * @param string $Name Name
     * @param string $Description Description
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
        if (array_key_exists("VolumeId",$param) and $param["VolumeId"] !== null) {
            $this->VolumeId = $param["VolumeId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
