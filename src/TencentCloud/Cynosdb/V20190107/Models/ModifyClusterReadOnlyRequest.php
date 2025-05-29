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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterReadOnly request structure.
 *
 * @method array getClusterIds() Obtain List of cluster IDs
 * @method void setClusterIds(array $ClusterIds) Set List of cluster IDs
 * @method string getReadOnlyOperation() Obtain Cluster read-only switch, valid values: ON, OFF.
 * @method void setReadOnlyOperation(string $ReadOnlyOperation) Set Cluster read-only switch, valid values: ON, OFF.
 * @method string getIsInMaintainPeriod() Obtain Valid values: `yes` (modify in maintenance window), `no` (execute now by default).
 * @method void setIsInMaintainPeriod(string $IsInMaintainPeriod) Set Valid values: `yes` (modify in maintenance window), `no` (execute now by default).
 */
class ModifyClusterReadOnlyRequest extends AbstractModel
{
    /**
     * @var array List of cluster IDs
     */
    public $ClusterIds;

    /**
     * @var string Cluster read-only switch, valid values: ON, OFF.
     */
    public $ReadOnlyOperation;

    /**
     * @var string Valid values: `yes` (modify in maintenance window), `no` (execute now by default).
     */
    public $IsInMaintainPeriod;

    /**
     * @param array $ClusterIds List of cluster IDs
     * @param string $ReadOnlyOperation Cluster read-only switch, valid values: ON, OFF.
     * @param string $IsInMaintainPeriod Valid values: `yes` (modify in maintenance window), `no` (execute now by default).
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
        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("ReadOnlyOperation",$param) and $param["ReadOnlyOperation"] !== null) {
            $this->ReadOnlyOperation = $param["ReadOnlyOperation"];
        }

        if (array_key_exists("IsInMaintainPeriod",$param) and $param["IsInMaintainPeriod"] !== null) {
            $this->IsInMaintainPeriod = $param["IsInMaintainPeriod"];
        }
    }
}
