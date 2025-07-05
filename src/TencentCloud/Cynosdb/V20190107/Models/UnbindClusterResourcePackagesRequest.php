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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UnbindClusterResourcePackages request structure.
 *
 * @method string getClusterId() Obtain Cluster ID
 * @method void setClusterId(string $ClusterId) Set Cluster ID
 * @method array getPackageIds() Obtain The unique ID of a resource pack. If this parameter is left empty, all resource packs of the instance will be unbound.
 * @method void setPackageIds(array $PackageIds) Set The unique ID of a resource pack. If this parameter is left empty, all resource packs of the instance will be unbound.
 */
class UnbindClusterResourcePackagesRequest extends AbstractModel
{
    /**
     * @var string Cluster ID
     */
    public $ClusterId;

    /**
     * @var array The unique ID of a resource pack. If this parameter is left empty, all resource packs of the instance will be unbound.
     */
    public $PackageIds;

    /**
     * @param string $ClusterId Cluster ID
     * @param array $PackageIds The unique ID of a resource pack. If this parameter is left empty, all resource packs of the instance will be unbound.
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

        if (array_key_exists("PackageIds",$param) and $param["PackageIds"] !== null) {
            $this->PackageIds = $param["PackageIds"];
        }
    }
}
