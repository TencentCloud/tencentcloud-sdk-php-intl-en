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
 * DeleteCluster request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getOperatedMemberId() Obtain Member ID of the Called Group Account
 * @method void setOperatedMemberId(array $OperatedMemberId) Set Member ID of the Called Group Account
 * @method array getClusterAssetIds() Obtain <p>Cluster asset id</p>
 * @method void setClusterAssetIds(array $ClusterAssetIds) Set <p>Cluster asset id</p>
 * @method array getClusterCaMD5List() Obtain <p>Cluster ca certificate md5 value, the unique identifier of the cluster</p>
 * @method void setClusterCaMD5List(array $ClusterCaMD5List) Set <p>Cluster ca certificate md5 value, the unique identifier of the cluster</p>
 */
class DeleteClusterRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array Member ID of the Called Group Account
     */
    public $OperatedMemberId;

    /**
     * @var array <p>Cluster asset id</p>
     * @deprecated
     */
    public $ClusterAssetIds;

    /**
     * @var array <p>Cluster ca certificate md5 value, the unique identifier of the cluster</p>
     */
    public $ClusterCaMD5List;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param array $OperatedMemberId Member ID of the Called Group Account
     * @param array $ClusterAssetIds <p>Cluster asset id</p>
     * @param array $ClusterCaMD5List <p>Cluster ca certificate md5 value, the unique identifier of the cluster</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("OperatedMemberId",$param) and $param["OperatedMemberId"] !== null) {
            $this->OperatedMemberId = $param["OperatedMemberId"];
        }

        if (array_key_exists("ClusterAssetIds",$param) and $param["ClusterAssetIds"] !== null) {
            $this->ClusterAssetIds = $param["ClusterAssetIds"];
        }

        if (array_key_exists("ClusterCaMD5List",$param) and $param["ClusterCaMD5List"] !== null) {
            $this->ClusterCaMD5List = $param["ClusterCaMD5List"];
        }
    }
}
