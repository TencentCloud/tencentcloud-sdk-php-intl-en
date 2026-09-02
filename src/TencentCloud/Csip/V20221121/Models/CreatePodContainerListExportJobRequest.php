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
 * CreatePodContainerListExportJob request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method string getPodUniqueID() Obtain <p>Pod unique ID</p>
 * @method void setPodUniqueID(string $PodUniqueID) Set <p>Pod unique ID</p>
 * @method string getClusterCaMD5() Obtain <p>Cluster CA certificate MD5 (used to query node information)</p>
 * @method void setClusterCaMD5(string $ClusterCaMD5) Set <p>Cluster CA certificate MD5 (used to query node information)</p>
 * @method Filter getFilter() Obtain <p>Common filter criteria list. Supported filter fields:<br>ContainerId: container ID, exact match.<br>ContainerName: container name, fuzzy match.<br>RunStatus: container running status, exact match. Values: RUNNING, PAUSED, STOPPED, CREATED, DESTROYED, RESTARTING, REMOVING, DEAD, UNKNOWN.<br>ImageId: image ID, exact match.<br>ImageName: image name, fuzzy match.<br>IsolateStatus: isolation status, exact match. Values: NORMAL (unisolated), ISOLATED (isolated), ISOLATING (isolating), ISOLATE_FAILED (isolation failed), RESTORING (restoring isolation), RESTORE_FAILED (isolation removal failed).<br>NodeUniqueId: unique ID of the node it belongs to, exact match (NodeAssetId is an equivalent alias).<br>UUID: host UUID, exact match.</p>
 * @method void setFilter(Filter $Filter) Set <p>Common filter criteria list. Supported filter fields:<br>ContainerId: container ID, exact match.<br>ContainerName: container name, fuzzy match.<br>RunStatus: container running status, exact match. Values: RUNNING, PAUSED, STOPPED, CREATED, DESTROYED, RESTARTING, REMOVING, DEAD, UNKNOWN.<br>ImageId: image ID, exact match.<br>ImageName: image name, fuzzy match.<br>IsolateStatus: isolation status, exact match. Values: NORMAL (unisolated), ISOLATED (isolated), ISOLATING (isolating), ISOLATE_FAILED (isolation failed), RESTORING (restoring isolation), RESTORE_FAILED (isolation removal failed).<br>NodeUniqueId: unique ID of the node it belongs to, exact match (NodeAssetId is an equivalent alias).<br>UUID: host UUID, exact match.</p>
 * @method array getExportFields() Obtain <p>Export field list (export all fields if not specified)<br>Enumeration values:<br>ContainerId: container ID<br>ContainerName: Container name<br>RunStatus: running state<br>NodeId: node ID<br>NodeType: node type<br>ImageId: image id<br>ImageName: mirror name<br>IsolateStatus: isolation status</p>
 * @method void setExportFields(array $ExportFields) Set <p>Export field list (export all fields if not specified)<br>Enumeration values:<br>ContainerId: container ID<br>ContainerName: Container name<br>RunStatus: running state<br>NodeId: node ID<br>NodeType: node type<br>ImageId: image id<br>ImageName: mirror name<br>IsolateStatus: isolation status</p>
 */
class CreatePodContainerListExportJobRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var string <p>Pod unique ID</p>
     */
    public $PodUniqueID;

    /**
     * @var string <p>Cluster CA certificate MD5 (used to query node information)</p>
     */
    public $ClusterCaMD5;

    /**
     * @var Filter <p>Common filter criteria list. Supported filter fields:<br>ContainerId: container ID, exact match.<br>ContainerName: container name, fuzzy match.<br>RunStatus: container running status, exact match. Values: RUNNING, PAUSED, STOPPED, CREATED, DESTROYED, RESTARTING, REMOVING, DEAD, UNKNOWN.<br>ImageId: image ID, exact match.<br>ImageName: image name, fuzzy match.<br>IsolateStatus: isolation status, exact match. Values: NORMAL (unisolated), ISOLATED (isolated), ISOLATING (isolating), ISOLATE_FAILED (isolation failed), RESTORING (restoring isolation), RESTORE_FAILED (isolation removal failed).<br>NodeUniqueId: unique ID of the node it belongs to, exact match (NodeAssetId is an equivalent alias).<br>UUID: host UUID, exact match.</p>
     */
    public $Filter;

    /**
     * @var array <p>Export field list (export all fields if not specified)<br>Enumeration values:<br>ContainerId: container ID<br>ContainerName: Container name<br>RunStatus: running state<br>NodeId: node ID<br>NodeType: node type<br>ImageId: image id<br>ImageName: mirror name<br>IsolateStatus: isolation status</p>
     */
    public $ExportFields;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param string $PodUniqueID <p>Pod unique ID</p>
     * @param string $ClusterCaMD5 <p>Cluster CA certificate MD5 (used to query node information)</p>
     * @param Filter $Filter <p>Common filter criteria list. Supported filter fields:<br>ContainerId: container ID, exact match.<br>ContainerName: container name, fuzzy match.<br>RunStatus: container running status, exact match. Values: RUNNING, PAUSED, STOPPED, CREATED, DESTROYED, RESTARTING, REMOVING, DEAD, UNKNOWN.<br>ImageId: image ID, exact match.<br>ImageName: image name, fuzzy match.<br>IsolateStatus: isolation status, exact match. Values: NORMAL (unisolated), ISOLATED (isolated), ISOLATING (isolating), ISOLATE_FAILED (isolation failed), RESTORING (restoring isolation), RESTORE_FAILED (isolation removal failed).<br>NodeUniqueId: unique ID of the node it belongs to, exact match (NodeAssetId is an equivalent alias).<br>UUID: host UUID, exact match.</p>
     * @param array $ExportFields <p>Export field list (export all fields if not specified)<br>Enumeration values:<br>ContainerId: container ID<br>ContainerName: Container name<br>RunStatus: running state<br>NodeId: node ID<br>NodeType: node type<br>ImageId: image id<br>ImageName: mirror name<br>IsolateStatus: isolation status</p>
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

        if (array_key_exists("PodUniqueID",$param) and $param["PodUniqueID"] !== null) {
            $this->PodUniqueID = $param["PodUniqueID"];
        }

        if (array_key_exists("ClusterCaMD5",$param) and $param["ClusterCaMD5"] !== null) {
            $this->ClusterCaMD5 = $param["ClusterCaMD5"];
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
