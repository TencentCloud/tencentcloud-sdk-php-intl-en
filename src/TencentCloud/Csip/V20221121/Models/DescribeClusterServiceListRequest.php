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
 * DescribeClusterServiceList request structure.
 *
 * @method string getClusterAssetId() Obtain <p>Cluster asset id</p>
 * @method void setClusterAssetId(string $ClusterAssetId) Set <p>Cluster asset id</p>
 * @method array getMemberId() Obtain <p>Group account member id.</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id.</p>
 * @method Filter getFilter() Obtain <p>Common filter criteria list. Supported filter fields:<br>Name: service name, fuzzy matching.<br>ServiceType: service type, exact matching. Values: ClusterIP, NodePort, LoadBalancer, ExternalName.<br>Namespace: namespace, exact matching.<br>SelectorLabel: selector tag, fuzzy matching.</p>
 * @method void setFilter(Filter $Filter) Set <p>Common filter criteria list. Supported filter fields:<br>Name: service name, fuzzy matching.<br>ServiceType: service type, exact matching. Values: ClusterIP, NodePort, LoadBalancer, ExternalName.<br>Namespace: namespace, exact matching.<br>SelectorLabel: selector tag, fuzzy matching.</p>
 * @method string getClusterCaMD5() Obtain <p>Cluster ca certificate md5 value, the unique identifier of the cluster</p>
 * @method void setClusterCaMD5(string $ClusterCaMD5) Set <p>Cluster ca certificate md5 value, the unique identifier of the cluster</p>
 * @method string getPodUniqueID() Obtain <p>Unique Pod identifier ID</p>
 * @method void setPodUniqueID(string $PodUniqueID) Set <p>Unique Pod identifier ID</p>
 */
class DescribeClusterServiceListRequest extends AbstractModel
{
    /**
     * @var string <p>Cluster asset id</p>
     * @deprecated
     */
    public $ClusterAssetId;

    /**
     * @var array <p>Group account member id.</p>
     */
    public $MemberId;

    /**
     * @var Filter <p>Common filter criteria list. Supported filter fields:<br>Name: service name, fuzzy matching.<br>ServiceType: service type, exact matching. Values: ClusterIP, NodePort, LoadBalancer, ExternalName.<br>Namespace: namespace, exact matching.<br>SelectorLabel: selector tag, fuzzy matching.</p>
     */
    public $Filter;

    /**
     * @var string <p>Cluster ca certificate md5 value, the unique identifier of the cluster</p>
     */
    public $ClusterCaMD5;

    /**
     * @var string <p>Unique Pod identifier ID</p>
     */
    public $PodUniqueID;

    /**
     * @param string $ClusterAssetId <p>Cluster asset id</p>
     * @param array $MemberId <p>Group account member id.</p>
     * @param Filter $Filter <p>Common filter criteria list. Supported filter fields:<br>Name: service name, fuzzy matching.<br>ServiceType: service type, exact matching. Values: ClusterIP, NodePort, LoadBalancer, ExternalName.<br>Namespace: namespace, exact matching.<br>SelectorLabel: selector tag, fuzzy matching.</p>
     * @param string $ClusterCaMD5 <p>Cluster ca certificate md5 value, the unique identifier of the cluster</p>
     * @param string $PodUniqueID <p>Unique Pod identifier ID</p>
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
        if (array_key_exists("ClusterAssetId",$param) and $param["ClusterAssetId"] !== null) {
            $this->ClusterAssetId = $param["ClusterAssetId"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("ClusterCaMD5",$param) and $param["ClusterCaMD5"] !== null) {
            $this->ClusterCaMD5 = $param["ClusterCaMD5"];
        }

        if (array_key_exists("PodUniqueID",$param) and $param["PodUniqueID"] !== null) {
            $this->PodUniqueID = $param["PodUniqueID"];
        }
    }
}
