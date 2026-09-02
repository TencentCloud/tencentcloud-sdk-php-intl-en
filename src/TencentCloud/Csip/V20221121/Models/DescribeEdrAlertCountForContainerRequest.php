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
 * DescribeEdrAlertCountForContainer request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method array getClusterIds() Obtain <p>Cluster ID list (≤500); group statistics by cluster when non-empty and ContainerIds is empty</p>
 * @method void setClusterIds(array $ClusterIds) Set <p>Cluster ID list (≤500); group statistics by cluster when non-empty and ContainerIds is empty</p>
 * @method array getContainerIds() Obtain <p>Container ID list (≤500); if not empty, group statistics by container (higher priority than ClusterIds)</p>
 * @method void setContainerIds(array $ContainerIds) Set <p>Container ID list (≤500); if not empty, group statistics by container (higher priority than ClusterIds)</p>
 * @method array getFilters() Obtain <li>PolicyType - int - Required: No - policy type</li><li>PolicyName - string - Required: No - Policy Name</li><li>Domain - string - Required: No - domain name (urlencode the domain name first, then base64)</li><li>PolicyAction- int - Required: No - policy action</li><li>IsEnabled - int - Required: No - whether it takes effect</li><li>ContainerId - string - Required: No - container ID (exact/IN, dimension filtering)</li><li>ClusterId - string - Required: No - Cluster ID (exact/IN, dimension filtering)</li><li>ClusterName - string - Required: No - cluster name (prefix blurry)</li><li>ContainerName - string - Required: No - Container name (prefix blurry)</li><li>AlertSource - string - Required: No - alarm source: HOST-host alarm / CONTAINER-container alarm. If not specified, return all</li>
 * @method void setFilters(array $Filters) Set <li>PolicyType - int - Required: No - policy type</li><li>PolicyName - string - Required: No - Policy Name</li><li>Domain - string - Required: No - domain name (urlencode the domain name first, then base64)</li><li>PolicyAction- int - Required: No - policy action</li><li>IsEnabled - int - Required: No - whether it takes effect</li><li>ContainerId - string - Required: No - container ID (exact/IN, dimension filtering)</li><li>ClusterId - string - Required: No - Cluster ID (exact/IN, dimension filtering)</li><li>ClusterName - string - Required: No - cluster name (prefix blurry)</li><li>ContainerName - string - Required: No - Container name (prefix blurry)</li><li>AlertSource - string - Required: No - alarm source: HOST-host alarm / CONTAINER-container alarm. If not specified, return all</li>
 */
class DescribeEdrAlertCountForContainerRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var array <p>Cluster ID list (≤500); group statistics by cluster when non-empty and ContainerIds is empty</p>
     */
    public $ClusterIds;

    /**
     * @var array <p>Container ID list (≤500); if not empty, group statistics by container (higher priority than ClusterIds)</p>
     */
    public $ContainerIds;

    /**
     * @var array <li>PolicyType - int - Required: No - policy type</li><li>PolicyName - string - Required: No - Policy Name</li><li>Domain - string - Required: No - domain name (urlencode the domain name first, then base64)</li><li>PolicyAction- int - Required: No - policy action</li><li>IsEnabled - int - Required: No - whether it takes effect</li><li>ContainerId - string - Required: No - container ID (exact/IN, dimension filtering)</li><li>ClusterId - string - Required: No - Cluster ID (exact/IN, dimension filtering)</li><li>ClusterName - string - Required: No - cluster name (prefix blurry)</li><li>ContainerName - string - Required: No - Container name (prefix blurry)</li><li>AlertSource - string - Required: No - alarm source: HOST-host alarm / CONTAINER-container alarm. If not specified, return all</li>
     */
    public $Filters;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param array $ClusterIds <p>Cluster ID list (≤500); group statistics by cluster when non-empty and ContainerIds is empty</p>
     * @param array $ContainerIds <p>Container ID list (≤500); if not empty, group statistics by container (higher priority than ClusterIds)</p>
     * @param array $Filters <li>PolicyType - int - Required: No - policy type</li><li>PolicyName - string - Required: No - Policy Name</li><li>Domain - string - Required: No - domain name (urlencode the domain name first, then base64)</li><li>PolicyAction- int - Required: No - policy action</li><li>IsEnabled - int - Required: No - whether it takes effect</li><li>ContainerId - string - Required: No - container ID (exact/IN, dimension filtering)</li><li>ClusterId - string - Required: No - Cluster ID (exact/IN, dimension filtering)</li><li>ClusterName - string - Required: No - cluster name (prefix blurry)</li><li>ContainerName - string - Required: No - Container name (prefix blurry)</li><li>AlertSource - string - Required: No - alarm source: HOST-host alarm / CONTAINER-container alarm. If not specified, return all</li>
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

        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("ContainerIds",$param) and $param["ContainerIds"] !== null) {
            $this->ContainerIds = $param["ContainerIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new EDRFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
