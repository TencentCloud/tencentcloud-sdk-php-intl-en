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
 * ModifyResourcePackageClusters request structure.
 *
 * @method string getPackageId() Obtain Unique ID of the resource package
 * @method void setPackageId(string $PackageId) Set Unique ID of the resource package
 * @method array getBindClusterIds() Obtain Cluster ID for which a binding relationship needs to be established.
 * @method void setBindClusterIds(array $BindClusterIds) Set Cluster ID for which a binding relationship needs to be established.
 * @method array getUnbindClusterIds() Obtain Cluster ID for which the binding relationship needs to be unbound.
 * @method void setUnbindClusterIds(array $UnbindClusterIds) Set Cluster ID for which the binding relationship needs to be unbound.
 */
class ModifyResourcePackageClustersRequest extends AbstractModel
{
    /**
     * @var string Unique ID of the resource package
     */
    public $PackageId;

    /**
     * @var array Cluster ID for which a binding relationship needs to be established.
     */
    public $BindClusterIds;

    /**
     * @var array Cluster ID for which the binding relationship needs to be unbound.
     */
    public $UnbindClusterIds;

    /**
     * @param string $PackageId Unique ID of the resource package
     * @param array $BindClusterIds Cluster ID for which a binding relationship needs to be established.
     * @param array $UnbindClusterIds Cluster ID for which the binding relationship needs to be unbound.
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
        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("BindClusterIds",$param) and $param["BindClusterIds"] !== null) {
            $this->BindClusterIds = $param["BindClusterIds"];
        }

        if (array_key_exists("UnbindClusterIds",$param) and $param["UnbindClusterIds"] !== null) {
            $this->UnbindClusterIds = $param["UnbindClusterIds"];
        }
    }
}
