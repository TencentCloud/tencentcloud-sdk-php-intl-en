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
 * TCR repository instance.
 *
 * @method string getRegistryId() Obtain <p>Repository instance id</p>
 * @method void setRegistryId(string $RegistryId) Set <p>Repository instance id</p>
 * @method string getRegistryName() Obtain <p>Warehouse name</p>
 * @method void setRegistryName(string $RegistryName) Set <p>Warehouse name</p>
 * @method string getPublicDomain() Obtain <p>Repository domain.</p>
 * @method void setPublicDomain(string $PublicDomain) Set <p>Repository domain.</p>
 * @method string getRegistryRegion() Obtain <p>region where the repository is located</p>
 * @method void setRegistryRegion(string $RegistryRegion) Set <p>region where the repository is located</p>
 * @method integer getRegistryRegionId() Obtain <p>Repository id</p>
 * @method void setRegistryRegionId(integer $RegistryRegionId) Set <p>Repository id</p>
 */
class TcrRegistry extends AbstractModel
{
    /**
     * @var string <p>Repository instance id</p>
     */
    public $RegistryId;

    /**
     * @var string <p>Warehouse name</p>
     */
    public $RegistryName;

    /**
     * @var string <p>Repository domain.</p>
     */
    public $PublicDomain;

    /**
     * @var string <p>region where the repository is located</p>
     */
    public $RegistryRegion;

    /**
     * @var integer <p>Repository id</p>
     */
    public $RegistryRegionId;

    /**
     * @param string $RegistryId <p>Repository instance id</p>
     * @param string $RegistryName <p>Warehouse name</p>
     * @param string $PublicDomain <p>Repository domain.</p>
     * @param string $RegistryRegion <p>region where the repository is located</p>
     * @param integer $RegistryRegionId <p>Repository id</p>
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
        if (array_key_exists("RegistryId",$param) and $param["RegistryId"] !== null) {
            $this->RegistryId = $param["RegistryId"];
        }

        if (array_key_exists("RegistryName",$param) and $param["RegistryName"] !== null) {
            $this->RegistryName = $param["RegistryName"];
        }

        if (array_key_exists("PublicDomain",$param) and $param["PublicDomain"] !== null) {
            $this->PublicDomain = $param["PublicDomain"];
        }

        if (array_key_exists("RegistryRegion",$param) and $param["RegistryRegion"] !== null) {
            $this->RegistryRegion = $param["RegistryRegion"];
        }

        if (array_key_exists("RegistryRegionId",$param) and $param["RegistryRegionId"] !== null) {
            $this->RegistryRegionId = $param["RegistryRegionId"];
        }
    }
}
