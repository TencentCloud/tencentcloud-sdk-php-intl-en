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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Hitless migration task.
 *
 * @method string getTaskId() Obtain Task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskId(string $TaskId) Set Task ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskName() Obtain Task name.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskName(string $TaskName) Set Task name.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSourceClusterName() Obtain Source cluster name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourceClusterName(string $SourceClusterName) Set Source cluster name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceId() Obtain Destination cluster instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceId(string $InstanceId) Set Destination cluster instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getConnectionType() Obtain Specifies the network connection type. 
PUBLIC network. 
Specifies the VPC virtual private cloud. 
OTHER.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConnectionType(string $ConnectionType) Set Specifies the network connection type. 
PUBLIC network. 
Specifies the VPC virtual private cloud. 
OTHER.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getSourceNameServer() Obtain Source cluster NameServer address.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setSourceNameServer(string $SourceNameServer) Set Source cluster NameServer address.	
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTaskStatus() Obtain Task status.
Migration Configuration. specifies the migration Configuration.
SourceConnecting specifies connecting to source cluster.
MetaDataImport specifies metadata import.
EndpointSetup specifies the access point switchover.
Service migration is in progress.
Completed.
Cancelled: canceled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTaskStatus(string $TaskStatus) Set Task status.
Migration Configuration. specifies the migration Configuration.
SourceConnecting specifies connecting to source cluster.
MetaDataImport specifies metadata import.
EndpointSetup specifies the access point switchover.
Service migration is in progress.
Completed.
Cancelled: canceled.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceVersion() Obtain Specifies the target cluster instance version.
4 indicates version 4.x.
5 indicates version 5.x.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setInstanceVersion(string $InstanceVersion) Set Specifies the target cluster instance version.
4 indicates version 4.x.
5 indicates version 5.x.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class SmoothMigrationTaskItem extends AbstractModel
{
    /**
     * @var string Task ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskId;

    /**
     * @var string Task name.	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskName;

    /**
     * @var string Source cluster name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SourceClusterName;

    /**
     * @var string Destination cluster instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceId;

    /**
     * @var string Specifies the network connection type. 
PUBLIC network. 
Specifies the VPC virtual private cloud. 
OTHER.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConnectionType;

    /**
     * @var string Source cluster NameServer address.	
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $SourceNameServer;

    /**
     * @var string Task status.
Migration Configuration. specifies the migration Configuration.
SourceConnecting specifies connecting to source cluster.
MetaDataImport specifies metadata import.
EndpointSetup specifies the access point switchover.
Service migration is in progress.
Completed.
Cancelled: canceled.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TaskStatus;

    /**
     * @var string Specifies the target cluster instance version.
4 indicates version 4.x.
5 indicates version 5.x.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $InstanceVersion;

    /**
     * @param string $TaskId Task ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskName Task name.	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SourceClusterName Source cluster name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceId Destination cluster instance ID.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ConnectionType Specifies the network connection type. 
PUBLIC network. 
Specifies the VPC virtual private cloud. 
OTHER.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $SourceNameServer Source cluster NameServer address.	
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TaskStatus Task status.
Migration Configuration. specifies the migration Configuration.
SourceConnecting specifies connecting to source cluster.
MetaDataImport specifies metadata import.
EndpointSetup specifies the access point switchover.
Service migration is in progress.
Completed.
Cancelled: canceled.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceVersion Specifies the target cluster instance version.
4 indicates version 4.x.
5 indicates version 5.x.
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("SourceClusterName",$param) and $param["SourceClusterName"] !== null) {
            $this->SourceClusterName = $param["SourceClusterName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ConnectionType",$param) and $param["ConnectionType"] !== null) {
            $this->ConnectionType = $param["ConnectionType"];
        }

        if (array_key_exists("SourceNameServer",$param) and $param["SourceNameServer"] !== null) {
            $this->SourceNameServer = $param["SourceNameServer"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }
    }
}
