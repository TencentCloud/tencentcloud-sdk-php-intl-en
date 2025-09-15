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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Resource scheduling - Queue modification information
 *
 * @method integer getOpType() Obtain Operation type. Valid values:

- 0: create a queue.
- 1: edit - full overwrite.
- 2: create a sub-queue.
- 3: delete.
- 4: clone. It is the same as sub-queue creation. Especially, for `fair`, a sub-queue can be copied to a new queue.
- 6: edit - incremental update.
 * @method void setOpType(integer $OpType) Set Operation type. Valid values:

- 0: create a queue.
- 1: edit - full overwrite.
- 2: create a sub-queue.
- 3: delete.
- 4: clone. It is the same as sub-queue creation. Especially, for `fair`, a sub-queue can be copied to a new queue.
- 6: edit - incremental update.
 * @method string getName() Obtain Queue name. It cannot be modified.
 * @method void setName(string $Name) Set Queue name. It cannot be modified.
 * @method string getParentId() Obtain Create root queue: Pass "myId of root"; Create sub-queue: Pass "myId of the selected queue"; Clone queue: Pass "parentId of the selected queue".
 * @method void setParentId(string $ParentId) Set Create root queue: Pass "myId of root"; Create sub-queue: Pass "myId of the selected queue"; Clone queue: Pass "parentId of the selected queue".
 * @method string getMyId() Obtain Edit or delete operations: Require passing "myId of the selected queue". Passing is required for cloning only when the scheduler is `fair` in order to copy a sub-queue to a new queue.
 * @method void setMyId(string $MyId) Set Edit or delete operations: Require passing "myId of the selected queue". Passing is required for cloning only when the scheduler is `fair` in order to copy a sub-queue to a new queue.
 * @method ItemSeq getBasicParams() Obtain Basic configuration. The value of key is consistent with the field returned by **DescribeYarnQueue**.###### Fair scheduler
Values of key are as follows:

- type: parent queue. Value: **parent** or **null**.
- aclSubmitApps: submission ACL. Value: **JSON string of the AclForYarnQueue type** or **null**.
- aclAdministerApps: administration ACL. Value: **JSON string of the AclForYarnQueue type** or **null**.
- minSharePreemptionTimeout: timeout of minimum share before preemption. Value: **numeric string** or **null**.
- fairSharePreemptionTimeout: timeout of fair share before preemption. Value: **numeric string** or **null**.
- fairSharePreemptionThreshold: fair share preemption threshold. Value: **numeric string** or **null**. Numeric string range: (0,1].
- allowPreemptionFrom: preemption mode. Value: **Boolean string** or **null**.
- schedulingPolicy: scheduling policy. Value: **drf**, **fair**, **fifo**, or **null**.

```
type AclForYarnQueue struct {
	User  *string `json:"user"` // Username
	Group *string `json:"group"`// Group name
}
```
###### Capacity scheduler
Values of key are as follows:

- state: queue status. Value: **STOPPED** or **RUNNING**.
- default-node-label-expression: default tag expression. Value: **tag** or **null**.
- acl_submit_applications: submission ACL. Value: **JSON string of the AclForYarnQueue type** or **null**.
- acl_administer_queue: administration ACL. Value: **JSON string of the AclForYarnQueue type** or **null**.
- maximum-allocation-mb: maximum memory allocated to each container. Value: **numeric string** or **null**.
- maximum-allocation-vcores: maximum number of virtual cores allocated to each container. Value: **numeric string** or **null**.
```
type AclForYarnQueue struct {
	User  *string `json:"user"` // Username
	Group *string `json:"group"`// Group name
}
```
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBasicParams(ItemSeq $BasicParams) Set Basic configuration. The value of key is consistent with the field returned by **DescribeYarnQueue**.###### Fair scheduler
Values of key are as follows:

- type: parent queue. Value: **parent** or **null**.
- aclSubmitApps: submission ACL. Value: **JSON string of the AclForYarnQueue type** or **null**.
- aclAdministerApps: administration ACL. Value: **JSON string of the AclForYarnQueue type** or **null**.
- minSharePreemptionTimeout: timeout of minimum share before preemption. Value: **numeric string** or **null**.
- fairSharePreemptionTimeout: timeout of fair share before preemption. Value: **numeric string** or **null**.
- fairSharePreemptionThreshold: fair share preemption threshold. Value: **numeric string** or **null**. Numeric string range: (0,1].
- allowPreemptionFrom: preemption mode. Value: **Boolean string** or **null**.
- schedulingPolicy: scheduling policy. Value: **drf**, **fair**, **fifo**, or **null**.

```
type AclForYarnQueue struct {
	User  *string `json:"user"` // Username
	Group *string `json:"group"`// Group name
}
```
###### Capacity scheduler
Values of key are as follows:

- state: queue status. Value: **STOPPED** or **RUNNING**.
- default-node-label-expression: default tag expression. Value: **tag** or **null**.
- acl_submit_applications: submission ACL. Value: **JSON string of the AclForYarnQueue type** or **null**.
- acl_administer_queue: administration ACL. Value: **JSON string of the AclForYarnQueue type** or **null**.
- maximum-allocation-mb: maximum memory allocated to each container. Value: **numeric string** or **null**.
- maximum-allocation-vcores: maximum number of virtual cores allocated to each container. Value: **numeric string** or **null**.
```
type AclForYarnQueue struct {
	User  *string `json:"user"` // Username
	Group *string `json:"group"`// Group name
}
```
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getConfigSetParams() Obtain Configuration set information. For the values, see the parameter description of ConfigSetInfo. Configuration set is the representation of the plan mode in the queue, containing different configuration item values for different time periods. The configuration set names of all queues are the same. For a single queue, the tags and parameters in each configuration set are the same, but the parameter values are different.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setConfigSetParams(array $ConfigSetParams) Set Configuration set information. For the values, see the parameter description of ConfigSetInfo. Configuration set is the representation of the plan mode in the queue, containing different configuration item values for different time periods. The configuration set names of all queues are the same. For a single queue, the tags and parameters in each configuration set are the same, but the parameter values are different.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDeleteLables() Obtain This parameter is specific for capacity scheduling and is valid only when `OpType` is set to `6`. It indicates tags to be deleted from the queue. This parameter has a higher priority than LabelParams in ConfigSetParams.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDeleteLables(array $DeleteLables) Set This parameter is specific for capacity scheduling and is valid only when `OpType` is set to `6`. It indicates tags to be deleted from the queue. This parameter has a higher priority than LabelParams in ConfigSetParams.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class ConfigModifyInfoV2 extends AbstractModel
{
    /**
     * @var integer Operation type. Valid values:

- 0: create a queue.
- 1: edit - full overwrite.
- 2: create a sub-queue.
- 3: delete.
- 4: clone. It is the same as sub-queue creation. Especially, for `fair`, a sub-queue can be copied to a new queue.
- 6: edit - incremental update.
     */
    public $OpType;

    /**
     * @var string Queue name. It cannot be modified.
     */
    public $Name;

    /**
     * @var string Create root queue: Pass "myId of root"; Create sub-queue: Pass "myId of the selected queue"; Clone queue: Pass "parentId of the selected queue".
     */
    public $ParentId;

    /**
     * @var string Edit or delete operations: Require passing "myId of the selected queue". Passing is required for cloning only when the scheduler is `fair` in order to copy a sub-queue to a new queue.
     */
    public $MyId;

    /**
     * @var ItemSeq Basic configuration. The value of key is consistent with the field returned by **DescribeYarnQueue**.###### Fair scheduler
Values of key are as follows:

- type: parent queue. Value: **parent** or **null**.
- aclSubmitApps: submission ACL. Value: **JSON string of the AclForYarnQueue type** or **null**.
- aclAdministerApps: administration ACL. Value: **JSON string of the AclForYarnQueue type** or **null**.
- minSharePreemptionTimeout: timeout of minimum share before preemption. Value: **numeric string** or **null**.
- fairSharePreemptionTimeout: timeout of fair share before preemption. Value: **numeric string** or **null**.
- fairSharePreemptionThreshold: fair share preemption threshold. Value: **numeric string** or **null**. Numeric string range: (0,1].
- allowPreemptionFrom: preemption mode. Value: **Boolean string** or **null**.
- schedulingPolicy: scheduling policy. Value: **drf**, **fair**, **fifo**, or **null**.

```
type AclForYarnQueue struct {
	User  *string `json:"user"` // Username
	Group *string `json:"group"`// Group name
}
```
###### Capacity scheduler
Values of key are as follows:

- state: queue status. Value: **STOPPED** or **RUNNING**.
- default-node-label-expression: default tag expression. Value: **tag** or **null**.
- acl_submit_applications: submission ACL. Value: **JSON string of the AclForYarnQueue type** or **null**.
- acl_administer_queue: administration ACL. Value: **JSON string of the AclForYarnQueue type** or **null**.
- maximum-allocation-mb: maximum memory allocated to each container. Value: **numeric string** or **null**.
- maximum-allocation-vcores: maximum number of virtual cores allocated to each container. Value: **numeric string** or **null**.
```
type AclForYarnQueue struct {
	User  *string `json:"user"` // Username
	Group *string `json:"group"`// Group name
}
```
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BasicParams;

    /**
     * @var array Configuration set information. For the values, see the parameter description of ConfigSetInfo. Configuration set is the representation of the plan mode in the queue, containing different configuration item values for different time periods. The configuration set names of all queues are the same. For a single queue, the tags and parameters in each configuration set are the same, but the parameter values are different.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ConfigSetParams;

    /**
     * @var array This parameter is specific for capacity scheduling and is valid only when `OpType` is set to `6`. It indicates tags to be deleted from the queue. This parameter has a higher priority than LabelParams in ConfigSetParams.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DeleteLables;

    /**
     * @param integer $OpType Operation type. Valid values:

- 0: create a queue.
- 1: edit - full overwrite.
- 2: create a sub-queue.
- 3: delete.
- 4: clone. It is the same as sub-queue creation. Especially, for `fair`, a sub-queue can be copied to a new queue.
- 6: edit - incremental update.
     * @param string $Name Queue name. It cannot be modified.
     * @param string $ParentId Create root queue: Pass "myId of root"; Create sub-queue: Pass "myId of the selected queue"; Clone queue: Pass "parentId of the selected queue".
     * @param string $MyId Edit or delete operations: Require passing "myId of the selected queue". Passing is required for cloning only when the scheduler is `fair` in order to copy a sub-queue to a new queue.
     * @param ItemSeq $BasicParams Basic configuration. The value of key is consistent with the field returned by **DescribeYarnQueue**.###### Fair scheduler
Values of key are as follows:

- type: parent queue. Value: **parent** or **null**.
- aclSubmitApps: submission ACL. Value: **JSON string of the AclForYarnQueue type** or **null**.
- aclAdministerApps: administration ACL. Value: **JSON string of the AclForYarnQueue type** or **null**.
- minSharePreemptionTimeout: timeout of minimum share before preemption. Value: **numeric string** or **null**.
- fairSharePreemptionTimeout: timeout of fair share before preemption. Value: **numeric string** or **null**.
- fairSharePreemptionThreshold: fair share preemption threshold. Value: **numeric string** or **null**. Numeric string range: (0,1].
- allowPreemptionFrom: preemption mode. Value: **Boolean string** or **null**.
- schedulingPolicy: scheduling policy. Value: **drf**, **fair**, **fifo**, or **null**.

```
type AclForYarnQueue struct {
	User  *string `json:"user"` // Username
	Group *string `json:"group"`// Group name
}
```
###### Capacity scheduler
Values of key are as follows:

- state: queue status. Value: **STOPPED** or **RUNNING**.
- default-node-label-expression: default tag expression. Value: **tag** or **null**.
- acl_submit_applications: submission ACL. Value: **JSON string of the AclForYarnQueue type** or **null**.
- acl_administer_queue: administration ACL. Value: **JSON string of the AclForYarnQueue type** or **null**.
- maximum-allocation-mb: maximum memory allocated to each container. Value: **numeric string** or **null**.
- maximum-allocation-vcores: maximum number of virtual cores allocated to each container. Value: **numeric string** or **null**.
```
type AclForYarnQueue struct {
	User  *string `json:"user"` // Username
	Group *string `json:"group"`// Group name
}
```
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $ConfigSetParams Configuration set information. For the values, see the parameter description of ConfigSetInfo. Configuration set is the representation of the plan mode in the queue, containing different configuration item values for different time periods. The configuration set names of all queues are the same. For a single queue, the tags and parameters in each configuration set are the same, but the parameter values are different.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DeleteLables This parameter is specific for capacity scheduling and is valid only when `OpType` is set to `6`. It indicates tags to be deleted from the queue. This parameter has a higher priority than LabelParams in ConfigSetParams.
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
        if (array_key_exists("OpType",$param) and $param["OpType"] !== null) {
            $this->OpType = $param["OpType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("MyId",$param) and $param["MyId"] !== null) {
            $this->MyId = $param["MyId"];
        }

        if (array_key_exists("BasicParams",$param) and $param["BasicParams"] !== null) {
            $this->BasicParams = new ItemSeq();
            $this->BasicParams->deserialize($param["BasicParams"]);
        }

        if (array_key_exists("ConfigSetParams",$param) and $param["ConfigSetParams"] !== null) {
            $this->ConfigSetParams = [];
            foreach ($param["ConfigSetParams"] as $key => $value){
                $obj = new ConfigSetInfo();
                $obj->deserialize($value);
                array_push($this->ConfigSetParams, $obj);
            }
        }

        if (array_key_exists("DeleteLables",$param) and $param["DeleteLables"] !== null) {
            $this->DeleteLables = $param["DeleteLables"];
        }
    }
}
