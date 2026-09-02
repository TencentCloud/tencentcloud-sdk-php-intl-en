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
 * CreateClusterNodeListExportJob request structure.
 *
 * @method string getClusterCaMD5() Obtain <p>Cluster CA certificate MD5 (32-bit hexadecimal; unique ID)<br>Input limitation: length must equal 32 characters</p>
 * @method void setClusterCaMD5(string $ClusterCaMD5) Set <p>Cluster CA certificate MD5 (32-bit hexadecimal; unique ID)<br>Input limitation: length must equal 32 characters</p>
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method Filter getFilter() Obtain <p>List of Universal Filter Criteria. Supported filter fields:<br>NodeName: node name, fuzzy matching.<br>NodeId: node ID, exact matching.<br>NodeUniqueID: node unique ID, exact matching (NodeAssetID is an equivalent alias).<br>NodeType: node type, exact matching. Values: SUPER (super node), MASTER (primary node), WORKER (work node).<br>RunStatus: node running status, exact matching.<br>InternalIP: private IP address, exact matching.<br>ClientStatus: client status, exact matching. Values: ONLINE (online), OFFLINE (offline), UNINSTALL (not installed).</p>
 * @method void setFilter(Filter $Filter) Set <p>List of Universal Filter Criteria. Supported filter fields:<br>NodeName: node name, fuzzy matching.<br>NodeId: node ID, exact matching.<br>NodeUniqueID: node unique ID, exact matching (NodeAssetID is an equivalent alias).<br>NodeType: node type, exact matching. Values: SUPER (super node), MASTER (primary node), WORKER (work node).<br>RunStatus: node running status, exact matching.<br>InternalIP: private IP address, exact matching.<br>ClientStatus: client status, exact matching. Values: ONLINE (online), OFFLINE (offline), UNINSTALL (not installed).</p>
 * @method array getExportFields() Obtain <p>Export field list (all fields will be exported if not specified)<br>Enumeration values:<br>NodeId: node ID<br>NodeName: node name<br>PublicIP: public IP address<br>InternalIP: private IP address<br>NodeType: node type (NORMAL common node / SUPER Super Node / WORKER / MASTER / ETCD)<br>CoresCount: core count<br>ClientStatus: client status (ONLINE online / OFFLINE offline / UNINSTALL not installed)<br>RunStatus: running state (Running running / Exception exception)</p>
 * @method void setExportFields(array $ExportFields) Set <p>Export field list (all fields will be exported if not specified)<br>Enumeration values:<br>NodeId: node ID<br>NodeName: node name<br>PublicIP: public IP address<br>InternalIP: private IP address<br>NodeType: node type (NORMAL common node / SUPER Super Node / WORKER / MASTER / ETCD)<br>CoresCount: core count<br>ClientStatus: client status (ONLINE online / OFFLINE offline / UNINSTALL not installed)<br>RunStatus: running state (Running running / Exception exception)</p>
 */
class CreateClusterNodeListExportJobRequest extends AbstractModel
{
    /**
     * @var string <p>Cluster CA certificate MD5 (32-bit hexadecimal; unique ID)<br>Input limitation: length must equal 32 characters</p>
     */
    public $ClusterCaMD5;

    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var Filter <p>List of Universal Filter Criteria. Supported filter fields:<br>NodeName: node name, fuzzy matching.<br>NodeId: node ID, exact matching.<br>NodeUniqueID: node unique ID, exact matching (NodeAssetID is an equivalent alias).<br>NodeType: node type, exact matching. Values: SUPER (super node), MASTER (primary node), WORKER (work node).<br>RunStatus: node running status, exact matching.<br>InternalIP: private IP address, exact matching.<br>ClientStatus: client status, exact matching. Values: ONLINE (online), OFFLINE (offline), UNINSTALL (not installed).</p>
     */
    public $Filter;

    /**
     * @var array <p>Export field list (all fields will be exported if not specified)<br>Enumeration values:<br>NodeId: node ID<br>NodeName: node name<br>PublicIP: public IP address<br>InternalIP: private IP address<br>NodeType: node type (NORMAL common node / SUPER Super Node / WORKER / MASTER / ETCD)<br>CoresCount: core count<br>ClientStatus: client status (ONLINE online / OFFLINE offline / UNINSTALL not installed)<br>RunStatus: running state (Running running / Exception exception)</p>
     */
    public $ExportFields;

    /**
     * @param string $ClusterCaMD5 <p>Cluster CA certificate MD5 (32-bit hexadecimal; unique ID)<br>Input limitation: length must equal 32 characters</p>
     * @param array $MemberId <p>Group account member id</p>
     * @param Filter $Filter <p>List of Universal Filter Criteria. Supported filter fields:<br>NodeName: node name, fuzzy matching.<br>NodeId: node ID, exact matching.<br>NodeUniqueID: node unique ID, exact matching (NodeAssetID is an equivalent alias).<br>NodeType: node type, exact matching. Values: SUPER (super node), MASTER (primary node), WORKER (work node).<br>RunStatus: node running status, exact matching.<br>InternalIP: private IP address, exact matching.<br>ClientStatus: client status, exact matching. Values: ONLINE (online), OFFLINE (offline), UNINSTALL (not installed).</p>
     * @param array $ExportFields <p>Export field list (all fields will be exported if not specified)<br>Enumeration values:<br>NodeId: node ID<br>NodeName: node name<br>PublicIP: public IP address<br>InternalIP: private IP address<br>NodeType: node type (NORMAL common node / SUPER Super Node / WORKER / MASTER / ETCD)<br>CoresCount: core count<br>ClientStatus: client status (ONLINE online / OFFLINE offline / UNINSTALL not installed)<br>RunStatus: running state (Running running / Exception exception)</p>
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
        if (array_key_exists("ClusterCaMD5",$param) and $param["ClusterCaMD5"] !== null) {
            $this->ClusterCaMD5 = $param["ClusterCaMD5"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
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
