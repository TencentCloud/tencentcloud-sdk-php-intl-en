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
 * Migrating topic.
 *
 * @method string getTopicName() Obtain Topic name
 * @method void setTopicName(string $TopicName) Set Topic name
 * @method string getMigrationStatus() Obtain Migration status. 
S_RW_D_NA source cluster read/write.
S_RW_D_R specifies read and write permissions for the source cluster and read permissions for the target cluster.
S_RW_D_RW specifies read-write for the source cluster and read-write for the target cluster.
SRDRW specifies source cluster read and destination cluster read/write.
S_NA_D_RW specifies the read-write target cluster.
 * @method void setMigrationStatus(string $MigrationStatus) Set Migration status. 
S_RW_D_NA source cluster read/write.
S_RW_D_R specifies read and write permissions for the source cluster and read permissions for the target cluster.
S_RW_D_RW specifies read-write for the source cluster and read-write for the target cluster.
SRDRW specifies source cluster read and destination cluster read/write.
S_NA_D_RW specifies the read-write target cluster.
 * @method boolean getHealthCheckPassed() Obtain Specifies whether the health check is completed.	
 * @method void setHealthCheckPassed(boolean $HealthCheckPassed) Set Specifies whether the health check is completed.	
 * @method string getHealthCheckError() Obtain Error information returned by the last health check is valid only when HealthCheckPassed is false. NotChecked: check not executed. Unknown: Unknown error. TopicNotImported: topic not imported. TopicNotExistsInSourceCluster: topic does not exist in the source cluster. TopicNotExistsInTargetCluster: topic does not exist in the target cluster. ConsumerConnectedOnTarget: consumer connections exist on the target cluster. SourceTopicHasNewMessagesIn5Minutes: new messages were written to the source cluster topic in the last 5 Minutes. TargetTopicHasNewMessagesIn5Minutes: new messages were written to the target cluster topic in the last 5 Minutes. SourceTopicHasNoMessagesIn5Minutes: no new messages were written to the source cluster in the last 5 Minutes. TargetTopicHasNoMessagesIn5Minutes: no new messages were written to the target cluster in the last 5 Minutes. ConsumerGroupCountNotMatch: inconsistent number of subscription groups. SourceTopicHasUnconsumedMessages: unconsumed messages exist in the source cluster topic.
 * @method void setHealthCheckError(string $HealthCheckError) Set Error information returned by the last health check is valid only when HealthCheckPassed is false. NotChecked: check not executed. Unknown: Unknown error. TopicNotImported: topic not imported. TopicNotExistsInSourceCluster: topic does not exist in the source cluster. TopicNotExistsInTargetCluster: topic does not exist in the target cluster. ConsumerConnectedOnTarget: consumer connections exist on the target cluster. SourceTopicHasNewMessagesIn5Minutes: new messages were written to the source cluster topic in the last 5 Minutes. TargetTopicHasNewMessagesIn5Minutes: new messages were written to the target cluster topic in the last 5 Minutes. SourceTopicHasNoMessagesIn5Minutes: no new messages were written to the source cluster in the last 5 Minutes. TargetTopicHasNoMessagesIn5Minutes: no new messages were written to the target cluster in the last 5 Minutes. ConsumerGroupCountNotMatch: inconsistent number of subscription groups. SourceTopicHasUnconsumedMessages: unconsumed messages exist in the source cluster topic.
 * @method string getNamespace() Obtain Namespace. specifies that it is only valid for 4.x clusters.
 * @method void setNamespace(string $Namespace) Set Namespace. specifies that it is only valid for 4.x clusters.
 * @method string getNamespaceV4() Obtain Namespace of 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setNamespaceV4(string $NamespaceV4) Set Namespace of 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTopicNameV4() Obtain Topic name for version 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTopicNameV4(string $TopicNameV4) Set Topic name for version 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getFullNamespaceV4() Obtain Complete namespace for 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setFullNamespaceV4(string $FullNamespaceV4) Set Complete namespace for 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getHealthCheckErrorList() Obtain Error list returned from the last health check.
 * @method void setHealthCheckErrorList(array $HealthCheckErrorList) Set Error list returned from the last health check.
 */
class MigratingTopic extends AbstractModel
{
    /**
     * @var string Topic name
     */
    public $TopicName;

    /**
     * @var string Migration status. 
S_RW_D_NA source cluster read/write.
S_RW_D_R specifies read and write permissions for the source cluster and read permissions for the target cluster.
S_RW_D_RW specifies read-write for the source cluster and read-write for the target cluster.
SRDRW specifies source cluster read and destination cluster read/write.
S_NA_D_RW specifies the read-write target cluster.
     */
    public $MigrationStatus;

    /**
     * @var boolean Specifies whether the health check is completed.	
     */
    public $HealthCheckPassed;

    /**
     * @var string Error information returned by the last health check is valid only when HealthCheckPassed is false. NotChecked: check not executed. Unknown: Unknown error. TopicNotImported: topic not imported. TopicNotExistsInSourceCluster: topic does not exist in the source cluster. TopicNotExistsInTargetCluster: topic does not exist in the target cluster. ConsumerConnectedOnTarget: consumer connections exist on the target cluster. SourceTopicHasNewMessagesIn5Minutes: new messages were written to the source cluster topic in the last 5 Minutes. TargetTopicHasNewMessagesIn5Minutes: new messages were written to the target cluster topic in the last 5 Minutes. SourceTopicHasNoMessagesIn5Minutes: no new messages were written to the source cluster in the last 5 Minutes. TargetTopicHasNoMessagesIn5Minutes: no new messages were written to the target cluster in the last 5 Minutes. ConsumerGroupCountNotMatch: inconsistent number of subscription groups. SourceTopicHasUnconsumedMessages: unconsumed messages exist in the source cluster topic.
     */
    public $HealthCheckError;

    /**
     * @var string Namespace. specifies that it is only valid for 4.x clusters.
     */
    public $Namespace;

    /**
     * @var string Namespace of 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $NamespaceV4;

    /**
     * @var string Topic name for version 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TopicNameV4;

    /**
     * @var string Complete namespace for 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $FullNamespaceV4;

    /**
     * @var array Error list returned from the last health check.
     */
    public $HealthCheckErrorList;

    /**
     * @param string $TopicName Topic name
     * @param string $MigrationStatus Migration status. 
S_RW_D_NA source cluster read/write.
S_RW_D_R specifies read and write permissions for the source cluster and read permissions for the target cluster.
S_RW_D_RW specifies read-write for the source cluster and read-write for the target cluster.
SRDRW specifies source cluster read and destination cluster read/write.
S_NA_D_RW specifies the read-write target cluster.
     * @param boolean $HealthCheckPassed Specifies whether the health check is completed.	
     * @param string $HealthCheckError Error information returned by the last health check is valid only when HealthCheckPassed is false. NotChecked: check not executed. Unknown: Unknown error. TopicNotImported: topic not imported. TopicNotExistsInSourceCluster: topic does not exist in the source cluster. TopicNotExistsInTargetCluster: topic does not exist in the target cluster. ConsumerConnectedOnTarget: consumer connections exist on the target cluster. SourceTopicHasNewMessagesIn5Minutes: new messages were written to the source cluster topic in the last 5 Minutes. TargetTopicHasNewMessagesIn5Minutes: new messages were written to the target cluster topic in the last 5 Minutes. SourceTopicHasNoMessagesIn5Minutes: no new messages were written to the source cluster in the last 5 Minutes. TargetTopicHasNoMessagesIn5Minutes: no new messages were written to the target cluster in the last 5 Minutes. ConsumerGroupCountNotMatch: inconsistent number of subscription groups. SourceTopicHasUnconsumedMessages: unconsumed messages exist in the source cluster topic.
     * @param string $Namespace Namespace. specifies that it is only valid for 4.x clusters.
     * @param string $NamespaceV4 Namespace of 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TopicNameV4 Topic name for version 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $FullNamespaceV4 Complete namespace for 4.x.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $HealthCheckErrorList Error list returned from the last health check.
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
        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("MigrationStatus",$param) and $param["MigrationStatus"] !== null) {
            $this->MigrationStatus = $param["MigrationStatus"];
        }

        if (array_key_exists("HealthCheckPassed",$param) and $param["HealthCheckPassed"] !== null) {
            $this->HealthCheckPassed = $param["HealthCheckPassed"];
        }

        if (array_key_exists("HealthCheckError",$param) and $param["HealthCheckError"] !== null) {
            $this->HealthCheckError = $param["HealthCheckError"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("NamespaceV4",$param) and $param["NamespaceV4"] !== null) {
            $this->NamespaceV4 = $param["NamespaceV4"];
        }

        if (array_key_exists("TopicNameV4",$param) and $param["TopicNameV4"] !== null) {
            $this->TopicNameV4 = $param["TopicNameV4"];
        }

        if (array_key_exists("FullNamespaceV4",$param) and $param["FullNamespaceV4"] !== null) {
            $this->FullNamespaceV4 = $param["FullNamespaceV4"];
        }

        if (array_key_exists("HealthCheckErrorList",$param) and $param["HealthCheckErrorList"] !== null) {
            $this->HealthCheckErrorList = $param["HealthCheckErrorList"];
        }
    }
}
