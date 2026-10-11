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
 * Queue modification information in resource scheduling.
 *
 * @method integer getOpType() Obtain Operation type. Valid values:

0: Create a queue.
1: Edit - fully overwrite a queue.
2: Create a subqueue.
3: Delete a queue.
4: Clone a queue. This is the same as creating a subqueue. Specifically, for `fair`, a subqueue can be copied to a new queue.
6: Edit - incrementally update a queue.
 * @method void setOpType(integer $OpType) Set Operation type. Valid values:

0: Create a queue.
1: Edit - fully overwrite a queue.
2: Create a subqueue.
3: Delete a queue.
4: Clone a queue. This is the same as creating a subqueue. Specifically, for `fair`, a subqueue can be copied to a new queue.
6: Edit - incrementally update a queue.
 * @method string getName() Obtain Queue name. It cannot be modified.
 * @method void setName(string $Name) Set Queue name. It cannot be modified.
 * @method string getParentId() Obtain Create the root queue: pass "myId of root". Create a subqueue: pass "myId of the selected queue". Clone a queue: pass "parentId of the selected queue".
 * @method void setParentId(string $ParentId) Set Create the root queue: pass "myId of root". Create a subqueue: pass "myId of the selected queue". Clone a queue: pass "parentId of the selected queue".
 * @method string getMyId() Obtain Edit or delete operations: pass "myId of the selected queue". Passing is required for cloning only when the scheduler is `fair` in order to copy a subqueue to a new queue.
 * @method void setMyId(string $MyId) Set Edit or delete operations: pass "myId of the selected queue". Passing is required for cloning only when the scheduler is `fair` in order to copy a subqueue to a new queue.
 * @method ItemSeq getBasicParams() Obtain Basic configuration information. The value of key is consistent with the field returned by **DescribeYarnQueue**.
###### Fair scheduler.
The key value information is as follows:

- type: parent queue. The value is **parent** or **null**.
- aclSubmitApps: submit access control. The value is a **JSON string of the AclForYarnQueue type** or **null**.
- aclAdministerApps: administer access control. The value is a **JSON string of the AclForYarnQueue type** or **null**.
- minSharePreemptionTimeout: minimum share preemption timeout. The value is a **numeric string** or **null**.
- fairSharePreemptionTimeout: fair share preemption timeout. The value is a **numeric string** or **null**.
- fairSharePreemptionThreshold: fair share preemption threshold. The value is a **numeric string** or **null**, where the numeric range is (0, 1].
- allowPreemptionFrom: preemption mode. The value is a **boolean string** or **null**.
- schedulingPolicy: scheduling policy. The value is **drf**, **fair**, **fifo**, or **null**.

```
type AclForYarnQueue struct {
	User  *string `json:"user"` // Username
	Group *string `json:"group"`// Group name
}
```
###### Capacity scheduler.
The key value information is as follows:

- state: queue status. The value is **STOPPED** or **RUNNING**.
- default-node-label-expression: default label expression. The value is a **label** or **null**.
- acl_submit_applications: submit access control. The value is a **JSON string of the AclForYarnQueue type** or **null**.
- acl_administer_queue: administer access control. The value is a **JSON string of the AclForYarnQueue type** or **null**.
- maximum-allocation-mb: maximum memory allocated to a container. The value is a **numeric string** or **null**.
- maximum-allocation-vcores: maximum number of vCores allocated to a container. The value is a **numeric string** or **null**.
```
type AclForYarnQueue struct {
	User  *string `json:"user"` // Username
	Group *string `json:"group"`// Group name
}
```
 * @method void setBasicParams(ItemSeq $BasicParams) Set Basic configuration information. The value of key is consistent with the field returned by **DescribeYarnQueue**.
###### Fair scheduler.
The key value information is as follows:

- type: parent queue. The value is **parent** or **null**.
- aclSubmitApps: submit access control. The value is a **JSON string of the AclForYarnQueue type** or **null**.
- aclAdministerApps: administer access control. The value is a **JSON string of the AclForYarnQueue type** or **null**.
- minSharePreemptionTimeout: minimum share preemption timeout. The value is a **numeric string** or **null**.
- fairSharePreemptionTimeout: fair share preemption timeout. The value is a **numeric string** or **null**.
- fairSharePreemptionThreshold: fair share preemption threshold. The value is a **numeric string** or **null**, where the numeric range is (0, 1].
- allowPreemptionFrom: preemption mode. The value is a **boolean string** or **null**.
- schedulingPolicy: scheduling policy. The value is **drf**, **fair**, **fifo**, or **null**.

```
type AclForYarnQueue struct {
	User  *string `json:"user"` // Username
	Group *string `json:"group"`// Group name
}
```
###### Capacity scheduler.
The key value information is as follows:

- state: queue status. The value is **STOPPED** or **RUNNING**.
- default-node-label-expression: default label expression. The value is a **label** or **null**.
- acl_submit_applications: submit access control. The value is a **JSON string of the AclForYarnQueue type** or **null**.
- acl_administer_queue: administer access control. The value is a **JSON string of the AclForYarnQueue type** or **null**.
- maximum-allocation-mb: maximum memory allocated to a container. The value is a **numeric string** or **null**.
- maximum-allocation-vcores: maximum number of vCores allocated to a container. The value is a **numeric string** or **null**.
```
type AclForYarnQueue struct {
	User  *string `json:"user"` // Username
	Group *string `json:"group"`// Group name
}
```
 * @method array getConfigSetParams() Obtain Configuration set information. For the value, see the parameter description of this complex type. A configuration set is the representation of the plan mode in a queue, indicating different configuration values in different time periods. All queues have the same configuration set name. For a single queue, the labels and parameters in each configuration set are the same, but the parameter values differ.
 * @method void setConfigSetParams(array $ConfigSetParams) Set Configuration set information. For the value, see the parameter description of this complex type. A configuration set is the representation of the plan mode in a queue, indicating different configuration values in different time periods. All queues have the same configuration set name. For a single queue, the labels and parameters in each configuration set are the same, but the parameter values differ.
 * @method array getDeleteLables() Obtain Specific to the capacity scheduler. It takes effect only when `OpType` is `6` and indicates which labels in this queue are to be deleted. Its priority is higher than that of LabelParams in ConfigSetParams.
 * @method void setDeleteLables(array $DeleteLables) Set Specific to the capacity scheduler. It takes effect only when `OpType` is `6` and indicates which labels in this queue are to be deleted. Its priority is higher than that of LabelParams in ConfigSetParams.
 */
class ConfigModifyInfoV2 extends AbstractModel
{
    /**
     * @var integer Operation type. Valid values:

0: Create a queue.
1: Edit - fully overwrite a queue.
2: Create a subqueue.
3: Delete a queue.
4: Clone a queue. This is the same as creating a subqueue. Specifically, for `fair`, a subqueue can be copied to a new queue.
6: Edit - incrementally update a queue.
     */
    public $OpType;

    /**
     * @var string Queue name. It cannot be modified.
     */
    public $Name;

    /**
     * @var string Create the root queue: pass "myId of root". Create a subqueue: pass "myId of the selected queue". Clone a queue: pass "parentId of the selected queue".
     */
    public $ParentId;

    /**
     * @var string Edit or delete operations: pass "myId of the selected queue". Passing is required for cloning only when the scheduler is `fair` in order to copy a subqueue to a new queue.
     */
    public $MyId;

    /**
     * @var ItemSeq Basic configuration information. The value of key is consistent with the field returned by **DescribeYarnQueue**.
###### Fair scheduler.
The key value information is as follows:

- type: parent queue. The value is **parent** or **null**.
- aclSubmitApps: submit access control. The value is a **JSON string of the AclForYarnQueue type** or **null**.
- aclAdministerApps: administer access control. The value is a **JSON string of the AclForYarnQueue type** or **null**.
- minSharePreemptionTimeout: minimum share preemption timeout. The value is a **numeric string** or **null**.
- fairSharePreemptionTimeout: fair share preemption timeout. The value is a **numeric string** or **null**.
- fairSharePreemptionThreshold: fair share preemption threshold. The value is a **numeric string** or **null**, where the numeric range is (0, 1].
- allowPreemptionFrom: preemption mode. The value is a **boolean string** or **null**.
- schedulingPolicy: scheduling policy. The value is **drf**, **fair**, **fifo**, or **null**.

```
type AclForYarnQueue struct {
	User  *string `json:"user"` // Username
	Group *string `json:"group"`// Group name
}
```
###### Capacity scheduler.
The key value information is as follows:

- state: queue status. The value is **STOPPED** or **RUNNING**.
- default-node-label-expression: default label expression. The value is a **label** or **null**.
- acl_submit_applications: submit access control. The value is a **JSON string of the AclForYarnQueue type** or **null**.
- acl_administer_queue: administer access control. The value is a **JSON string of the AclForYarnQueue type** or **null**.
- maximum-allocation-mb: maximum memory allocated to a container. The value is a **numeric string** or **null**.
- maximum-allocation-vcores: maximum number of vCores allocated to a container. The value is a **numeric string** or **null**.
```
type AclForYarnQueue struct {
	User  *string `json:"user"` // Username
	Group *string `json:"group"`// Group name
}
```
     */
    public $BasicParams;

    /**
     * @var array Configuration set information. For the value, see the parameter description of this complex type. A configuration set is the representation of the plan mode in a queue, indicating different configuration values in different time periods. All queues have the same configuration set name. For a single queue, the labels and parameters in each configuration set are the same, but the parameter values differ.
     */
    public $ConfigSetParams;

    /**
     * @var array Specific to the capacity scheduler. It takes effect only when `OpType` is `6` and indicates which labels in this queue are to be deleted. Its priority is higher than that of LabelParams in ConfigSetParams.
     */
    public $DeleteLables;

    /**
     * @param integer $OpType Operation type. Valid values:

0: Create a queue.
1: Edit - fully overwrite a queue.
2: Create a subqueue.
3: Delete a queue.
4: Clone a queue. This is the same as creating a subqueue. Specifically, for `fair`, a subqueue can be copied to a new queue.
6: Edit - incrementally update a queue.
     * @param string $Name Queue name. It cannot be modified.
     * @param string $ParentId Create the root queue: pass "myId of root". Create a subqueue: pass "myId of the selected queue". Clone a queue: pass "parentId of the selected queue".
     * @param string $MyId Edit or delete operations: pass "myId of the selected queue". Passing is required for cloning only when the scheduler is `fair` in order to copy a subqueue to a new queue.
     * @param ItemSeq $BasicParams Basic configuration information. The value of key is consistent with the field returned by **DescribeYarnQueue**.
###### Fair scheduler.
The key value information is as follows:

- type: parent queue. The value is **parent** or **null**.
- aclSubmitApps: submit access control. The value is a **JSON string of the AclForYarnQueue type** or **null**.
- aclAdministerApps: administer access control. The value is a **JSON string of the AclForYarnQueue type** or **null**.
- minSharePreemptionTimeout: minimum share preemption timeout. The value is a **numeric string** or **null**.
- fairSharePreemptionTimeout: fair share preemption timeout. The value is a **numeric string** or **null**.
- fairSharePreemptionThreshold: fair share preemption threshold. The value is a **numeric string** or **null**, where the numeric range is (0, 1].
- allowPreemptionFrom: preemption mode. The value is a **boolean string** or **null**.
- schedulingPolicy: scheduling policy. The value is **drf**, **fair**, **fifo**, or **null**.

```
type AclForYarnQueue struct {
	User  *string `json:"user"` // Username
	Group *string `json:"group"`// Group name
}
```
###### Capacity scheduler.
The key value information is as follows:

- state: queue status. The value is **STOPPED** or **RUNNING**.
- default-node-label-expression: default label expression. The value is a **label** or **null**.
- acl_submit_applications: submit access control. The value is a **JSON string of the AclForYarnQueue type** or **null**.
- acl_administer_queue: administer access control. The value is a **JSON string of the AclForYarnQueue type** or **null**.
- maximum-allocation-mb: maximum memory allocated to a container. The value is a **numeric string** or **null**.
- maximum-allocation-vcores: maximum number of vCores allocated to a container. The value is a **numeric string** or **null**.
```
type AclForYarnQueue struct {
	User  *string `json:"user"` // Username
	Group *string `json:"group"`// Group name
}
```
     * @param array $ConfigSetParams Configuration set information. For the value, see the parameter description of this complex type. A configuration set is the representation of the plan mode in a queue, indicating different configuration values in different time periods. All queues have the same configuration set name. For a single queue, the labels and parameters in each configuration set are the same, but the parameter values differ.
     * @param array $DeleteLables Specific to the capacity scheduler. It takes effect only when `OpType` is `6` and indicates which labels in this queue are to be deleted. Its priority is higher than that of LabelParams in ConfigSetParams.
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
