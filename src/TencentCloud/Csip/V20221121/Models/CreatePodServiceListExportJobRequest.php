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
 * CreatePodServiceListExportJob request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getClusterCaMD5() Obtain <p>Cluster CA certificate MD5 (at least one of this and PodUniqueID is required)</p>
 * @method void setClusterCaMD5(string $ClusterCaMD5) Set <p>Cluster CA certificate MD5 (at least one of this and PodUniqueID is required)</p>
 * @method string getPodUniqueID() Obtain <p>Unique ID of the Pod (if passed, the Pod Association Service mode is used)<br>Supplemental description: Pass at least one of this parameter and ClusterCaMD5</p>
 * @method void setPodUniqueID(string $PodUniqueID) Set <p>Unique ID of the Pod (if passed, the Pod Association Service mode is used)<br>Supplemental description: Pass at least one of this parameter and ClusterCaMD5</p>
 * @method Filter getFilter() Obtain <p>Common filter criteria list. Supported filter fields:<br>Name: service name, fuzzy matching.<br>ServiceType: service type, exact matching. Values: ClusterIP, NodePort, LoadBalancer, ExternalName.<br>Namespace: namespace, exact matching.<br>SelectorLabel: Selector tag, fuzzy matching.</p>
 * @method void setFilter(Filter $Filter) Set <p>Common filter criteria list. Supported filter fields:<br>Name: service name, fuzzy matching.<br>ServiceType: service type, exact matching. Values: ClusterIP, NodePort, LoadBalancer, ExternalName.<br>Namespace: namespace, exact matching.<br>SelectorLabel: Selector tag, fuzzy matching.</p>
 * @method array getExportFields() Obtain <p>Export field list (export all fields if not specified)<br>Enumeration values:<br>Name: service name<br>ServiceType: service type (for example, LoadBalancer/ClusterIP)<br>Selector: Selector tag (format: key1=value1;key2=value2)<br>Namespace: namespace<br>CreateTime: creation time</p>
 * @method void setExportFields(array $ExportFields) Set <p>Export field list (export all fields if not specified)<br>Enumeration values:<br>Name: service name<br>ServiceType: service type (for example, LoadBalancer/ClusterIP)<br>Selector: Selector tag (format: key1=value1;key2=value2)<br>Namespace: namespace<br>CreateTime: creation time</p>
 */
class CreatePodServiceListExportJobRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string <p>Cluster CA certificate MD5 (at least one of this and PodUniqueID is required)</p>
     */
    public $ClusterCaMD5;

    /**
     * @var string <p>Unique ID of the Pod (if passed, the Pod Association Service mode is used)<br>Supplemental description: Pass at least one of this parameter and ClusterCaMD5</p>
     */
    public $PodUniqueID;

    /**
     * @var Filter <p>Common filter criteria list. Supported filter fields:<br>Name: service name, fuzzy matching.<br>ServiceType: service type, exact matching. Values: ClusterIP, NodePort, LoadBalancer, ExternalName.<br>Namespace: namespace, exact matching.<br>SelectorLabel: Selector tag, fuzzy matching.</p>
     */
    public $Filter;

    /**
     * @var array <p>Export field list (export all fields if not specified)<br>Enumeration values:<br>Name: service name<br>ServiceType: service type (for example, LoadBalancer/ClusterIP)<br>Selector: Selector tag (format: key1=value1;key2=value2)<br>Namespace: namespace<br>CreateTime: creation time</p>
     */
    public $ExportFields;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param string $ClusterCaMD5 <p>Cluster CA certificate MD5 (at least one of this and PodUniqueID is required)</p>
     * @param string $PodUniqueID <p>Unique ID of the Pod (if passed, the Pod Association Service mode is used)<br>Supplemental description: Pass at least one of this parameter and ClusterCaMD5</p>
     * @param Filter $Filter <p>Common filter criteria list. Supported filter fields:<br>Name: service name, fuzzy matching.<br>ServiceType: service type, exact matching. Values: ClusterIP, NodePort, LoadBalancer, ExternalName.<br>Namespace: namespace, exact matching.<br>SelectorLabel: Selector tag, fuzzy matching.</p>
     * @param array $ExportFields <p>Export field list (export all fields if not specified)<br>Enumeration values:<br>Name: service name<br>ServiceType: service type (for example, LoadBalancer/ClusterIP)<br>Selector: Selector tag (format: key1=value1;key2=value2)<br>Namespace: namespace<br>CreateTime: creation time</p>
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

        if (array_key_exists("ClusterCaMD5",$param) and $param["ClusterCaMD5"] !== null) {
            $this->ClusterCaMD5 = $param["ClusterCaMD5"];
        }

        if (array_key_exists("PodUniqueID",$param) and $param["PodUniqueID"] !== null) {
            $this->PodUniqueID = $param["PodUniqueID"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("ExportFields",$param) and $param["ExportFields"] !== null) {
            $this->ExportFields = $param["ExportFields"];
        }
    }
}
