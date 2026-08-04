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
 * TCR image repository configuration for reasoning.
 *
 * @method string getTCRType() Obtain <p>TCR service type. Valid values: <li>Personal: personal edition;</li><li>Enterprise: enterprise edition.</li></p>
 * @method void setTCRType(string $TCRType) Set <p>TCR service type. Valid values: <li>Personal: personal edition;</li><li>Enterprise: enterprise edition.</li></p>
 * @method string getImage() Obtain <p>Image address.</p>
 * @method void setImage(string $Image) Set <p>Image address.</p>
 * @method string getRegistryId() Obtain <p>ID of the repository instance. Required when TCRType = Enterprise.</p>
 * @method void setRegistryId(string $RegistryId) Set <p>ID of the repository instance. Required when TCRType = Enterprise.</p>
 * @method string getRegionName() Obtain <p>Region name.</p>
 * @method void setRegionName(string $RegionName) Set <p>Region name.</p>
 */
class InferenceTCRRepositoryConfig extends AbstractModel
{
    /**
     * @var string <p>TCR service type. Valid values: <li>Personal: personal edition;</li><li>Enterprise: enterprise edition.</li></p>
     */
    public $TCRType;

    /**
     * @var string <p>Image address.</p>
     */
    public $Image;

    /**
     * @var string <p>ID of the repository instance. Required when TCRType = Enterprise.</p>
     */
    public $RegistryId;

    /**
     * @var string <p>Region name.</p>
     */
    public $RegionName;

    /**
     * @param string $TCRType <p>TCR service type. Valid values: <li>Personal: personal edition;</li><li>Enterprise: enterprise edition.</li></p>
     * @param string $Image <p>Image address.</p>
     * @param string $RegistryId <p>ID of the repository instance. Required when TCRType = Enterprise.</p>
     * @param string $RegionName <p>Region name.</p>
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
        if (array_key_exists("TCRType",$param) and $param["TCRType"] !== null) {
            $this->TCRType = $param["TCRType"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }
    }
}
