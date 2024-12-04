<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstances request structure.
 *
 * @method integer getTypeId() Obtain Instance type.
<ul><li>2: Redis 2.8 Memory Edition (standard architecture);</li> <li>3: CKV 3.2 Memory Edition (standard architecture);</li> <li>4: CKV 3.2 Memory Edition (cluster architecture);</li> <li>6: Redis 4.0 Memory Edition (standard architecture);</li> <li>7: Redis 4.0 Memory Edition (cluster architecture);</li> <li>8: Redis 5.0 Memory Edition (standard architecture);</li> <li>9: Redis 5.0 Memory Edition (cluster architecture);</li> <li>15: Redis 6.2 Memory Edition (standard architecture);</li> <li>16: Redis 6.2 Memory Edition (cluster architecture);</li> <li>17: Redis 7.0 Memory Edition (standard architecture);</li> <li>18: Redis 7.0 Memory Edition (cluster architecture). </li>Note: The CKV version is currently used by existing users and is temporarily retained.</ul>
 * @method void setTypeId(integer $TypeId) Set Instance type.
<ul><li>2: Redis 2.8 Memory Edition (standard architecture);</li> <li>3: CKV 3.2 Memory Edition (standard architecture);</li> <li>4: CKV 3.2 Memory Edition (cluster architecture);</li> <li>6: Redis 4.0 Memory Edition (standard architecture);</li> <li>7: Redis 4.0 Memory Edition (cluster architecture);</li> <li>8: Redis 5.0 Memory Edition (standard architecture);</li> <li>9: Redis 5.0 Memory Edition (cluster architecture);</li> <li>15: Redis 6.2 Memory Edition (standard architecture);</li> <li>16: Redis 6.2 Memory Edition (cluster architecture);</li> <li>17: Redis 7.0 Memory Edition (standard architecture);</li> <li>18: Redis 7.0 Memory Edition (cluster architecture). </li>Note: The CKV version is currently used by existing users and is temporarily retained.</ul>
 * @method integer getMemSize() Obtain Memory capacity in MB, which must be an integer multiple of 1024. For specific specifications, query the sales specifications in all regions through the [DescribeProductInfo](https://intl.cloud.tencent.com/document/api/239/30600?from_cn_redirect=1) API.
- When **TypeId** is a standard architecture, **MemSize** is the total memory capacity of the instance;
- When **TypeId** is a cluster architecture, **MemSize** is the single-shard memory capacity.
 * @method void setMemSize(integer $MemSize) Set Memory capacity in MB, which must be an integer multiple of 1024. For specific specifications, query the sales specifications in all regions through the [DescribeProductInfo](https://intl.cloud.tencent.com/document/api/239/30600?from_cn_redirect=1) API.
- When **TypeId** is a standard architecture, **MemSize** is the total memory capacity of the instance;
- When **TypeId** is a cluster architecture, **MemSize** is the single-shard memory capacity.
 * @method integer getGoodsNum() Obtain The number of instances for each purchase. For details, query the sales specifications in all regions through the [DescribeProductInfo](https://intl.cloud.tencent.com/document/api/239/30600?from_cn_redirect=1) API.
 * @method void setGoodsNum(integer $GoodsNum) Set The number of instances for each purchase. For details, query the sales specifications in all regions through the [DescribeProductInfo](https://intl.cloud.tencent.com/document/api/239/30600?from_cn_redirect=1) API.
 * @method integer getPeriod() Obtain The purchase duration of an instance
- If `BillingMode` is `1`, that is, when the billing mode is monthly subscription, you need to set this parameter to specify the duration of the purchased instance. Unit: month. Value range: [1,2,3,4,5,6,7,8,9,10,11,12,24,36].
- If `BillingMode` is `0`, that is, when the billing mode is pay-as-you-go, you need to set this parameter to `1`.
 * @method void setPeriod(integer $Period) Set The purchase duration of an instance
- If `BillingMode` is `1`, that is, when the billing mode is monthly subscription, you need to set this parameter to specify the duration of the purchased instance. Unit: month. Value range: [1,2,3,4,5,6,7,8,9,10,11,12,24,36].
- If `BillingMode` is `0`, that is, when the billing mode is pay-as-you-go, you need to set this parameter to `1`.
 * @method integer getBillingMode() Obtain Billing mode. 0: pay-as-you-go
 * @method void setBillingMode(integer $BillingMode) Set Billing mode. 0: pay-as-you-go
 * @method integer getZoneId() Obtain ID of the AZ where the instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
 * @method void setZoneId(integer $ZoneId) Set ID of the AZ where the instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
 * @method string getPassword() Obtain Password for accessing instances.
- When the input parameter **NoAuth** is set to **true**, password-free access is set for instances and Password does not need to be configured. Otherwise, Password is required.
- When the instance type parameter **TypeId** is set to Redis 2.8 Memory Edition (standard architecture) or Redis 4.0, 5.0, or 6.0 Memory Edition (standard architecture or cluster architecture), the password cannot start with a forward slash (/) and should contain 8 to 64 characters, including at least two of the following types: lowercase letters, uppercase letters, digits, and special characters (such as ()`~!@#$%^&*-+=_|{}[]:;<>,.?/).
- When the instance type parameter **TypeId** is set to CKV 3.2 Memory Edition (standard architecture or cluster architecture), the password should contain 8 to 30 characters, including only letters and digits.
 * @method void setPassword(string $Password) Set Password for accessing instances.
- When the input parameter **NoAuth** is set to **true**, password-free access is set for instances and Password does not need to be configured. Otherwise, Password is required.
- When the instance type parameter **TypeId** is set to Redis 2.8 Memory Edition (standard architecture) or Redis 4.0, 5.0, or 6.0 Memory Edition (standard architecture or cluster architecture), the password cannot start with a forward slash (/) and should contain 8 to 64 characters, including at least two of the following types: lowercase letters, uppercase letters, digits, and special characters (such as ()`~!@#$%^&*-+=_|{}[]:;<>,.?/).
- When the instance type parameter **TypeId** is set to CKV 3.2 Memory Edition (standard architecture or cluster architecture), the password should contain 8 to 30 characters, including only letters and digits.
 * @method string getVpcId() Obtain VPC ID. If this parameter is not passed in, the classic network will be selected by default. You can query the specific VPC ID in the [VPC console](https://console.cloud.tencent.com/vpc).
 * @method void setVpcId(string $VpcId) Set VPC ID. If this parameter is not passed in, the classic network will be selected by default. You can query the specific VPC ID in the [VPC console](https://console.cloud.tencent.com/vpc).
 * @method string getSubnetId() Obtain VPC subnet ID. This parameter is not required for the classic network. You can get the specific subnet ID by querying the subnet list in the [VPC console](https://console.cloud.tencent.com/vpc).
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID. This parameter is not required for the classic network. You can get the specific subnet ID by querying the subnet list in the [VPC console](https://console.cloud.tencent.com/vpc).
 * @method integer getProjectId() Obtain Project ID. Log in to the [Redis console](https://console.cloud.tencent.com/redis#/), go to the account information menu in the top-right corner, and select **Project Management** to query the project ID.
 * @method void setProjectId(integer $ProjectId) Set Project ID. Log in to the [Redis console](https://console.cloud.tencent.com/redis#/), go to the account information menu in the top-right corner, and select **Project Management** to query the project ID.
 * @method integer getAutoRenew() Obtain Auto-renewal flag
- `0`: Manual renewal (default).
- `1`: Auto-renewal.
- `2`: Not auto-renewal (set by user).
 * @method void setAutoRenew(integer $AutoRenew) Set Auto-renewal flag
- `0`: Manual renewal (default).
- `1`: Auto-renewal.
- `2`: Not auto-renewal (set by user).
 * @method array getSecurityGroupIdList() Obtain Array of security group IDs.
- A security group is a virtual firewall that controls network access to cloud database instances. It is recommended to bind the corresponding security group when you create an instance.
- Obtain the security group ID of the instance through the API [DescribeInstanceSecurityGroup](https://intl.cloud.tencent.com/document/product/239/34447?from_cn_redirect=1).
 * @method void setSecurityGroupIdList(array $SecurityGroupIdList) Set Array of security group IDs.
- A security group is a virtual firewall that controls network access to cloud database instances. It is recommended to bind the corresponding security group when you create an instance.
- Obtain the security group ID of the instance through the API [DescribeInstanceSecurityGroup](https://intl.cloud.tencent.com/document/product/239/34447?from_cn_redirect=1).
 * @method integer getVPort() Obtain User-defined network port. Default value: `6379`. Range: [1024,65535].
 * @method void setVPort(integer $VPort) Set User-defined network port. Default value: `6379`. Range: [1024,65535].
 * @method integer getRedisShardNum() Obtain Quantity of instance shards
- This parameter is not required for instances of Standard Edition.
- For instances of Cluster Edition, the range of shard quantity is [1, 3, 5, 8, 12, 16, 24, 32, 40, 48, 64, 80, 96, 128].
 * @method void setRedisShardNum(integer $RedisShardNum) Set Quantity of instance shards
- This parameter is not required for instances of Standard Edition.
- For instances of Cluster Edition, the range of shard quantity is [1, 3, 5, 8, 12, 16, 24, 32, 40, 48, 64, 80, 96, 128].
 * @method integer getRedisReplicasNum() Obtain Quantity of instance replicas
- For Redis Memory Edition 4.0, 5.0, 6.2 (regardless of architecture), the range of replica quantity is [1,5].
- For Redis 2.8 Standard Edition and CKV Standard Edition, the replica quantity is `1`.
 * @method void setRedisReplicasNum(integer $RedisReplicasNum) Set Quantity of instance replicas
- For Redis Memory Edition 4.0, 5.0, 6.2 (regardless of architecture), the range of replica quantity is [1,5].
- For Redis 2.8 Standard Edition and CKV Standard Edition, the replica quantity is `1`.
 * @method boolean getReplicasReadonly() Obtain Whether to support read-only replicas.
- Redis 2.8 Standard Edition and CKV Standard Edition don’t support read-only replicas.
- If read-only replicas are enabled, read/write separation will be automatically enabled for an instance, with write requests routed to the master node and read requests to the replica node.
- To enable read-only replicas, we recommend that you create two or more replicas.
 * @method void setReplicasReadonly(boolean $ReplicasReadonly) Set Whether to support read-only replicas.
- Redis 2.8 Standard Edition and CKV Standard Edition don’t support read-only replicas.
- If read-only replicas are enabled, read/write separation will be automatically enabled for an instance, with write requests routed to the master node and read requests to the replica node.
- To enable read-only replicas, we recommend that you create two or more replicas.
 * @method string getInstanceName() Obtain Instance name, which can contain up to 60 letters, digits, hyphens, and underscores.
 * @method void setInstanceName(string $InstanceName) Set Instance name, which can contain up to 60 letters, digits, hyphens, and underscores.
 * @method boolean getNoAuth() Obtain Whether to support password-free access for an instance
- `true`: The instance access is password-free.
- `false`: The instance access is password-enabled. Default value: `false`. Only instances in a VPC support the password-free access.
 * @method void setNoAuth(boolean $NoAuth) Set Whether to support password-free access for an instance
- `true`: The instance access is password-free.
- `false`: The instance access is password-enabled. Default value: `false`. Only instances in a VPC support the password-free access.
 * @method array getNodeSet() Obtain The node information of the instance, including node ID, type, and AZ. For more information, see [RedisNodeInfo](https://intl.cloud.tencent.com/document/product/239/20022?from_cn_redirect=1).
Node information of an instance. Currently, information about the node type (master or replica) and node AZ can be passed in. This parameter is not required for instances deployed in a single AZ.
 * @method void setNodeSet(array $NodeSet) Set The node information of the instance, including node ID, type, and AZ. For more information, see [RedisNodeInfo](https://intl.cloud.tencent.com/document/product/239/20022?from_cn_redirect=1).
Node information of an instance. Currently, information about the node type (master or replica) and node AZ can be passed in. This parameter is not required for instances deployed in a single AZ.
 * @method array getResourceTags() Obtain The tag for an instance
 * @method void setResourceTags(array $ResourceTags) Set The tag for an instance
 * @method string getZoneName() Obtain Name of the AZ where the instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
 * @method void setZoneName(string $ZoneName) Set Name of the AZ where the instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
 * @method string getTemplateId() Obtain The parameter template ID associated with the instance
- If this parameter is not configured, the system will automatically adapt the corresponding default template based on the selected compatible version and architecture.
- Query the list of parameter templates of an instance to get the template ID through the [DescribeParamTemplates](https://intl.cloud.tencent.com/document/product/239/58750?from_cn_redirect=1) API.
 * @method void setTemplateId(string $TemplateId) Set The parameter template ID associated with the instance
- If this parameter is not configured, the system will automatically adapt the corresponding default template based on the selected compatible version and architecture.
- Query the list of parameter templates of an instance to get the template ID through the [DescribeParamTemplates](https://intl.cloud.tencent.com/document/product/239/58750?from_cn_redirect=1) API.
 * @method boolean getDryRun() Obtain An internal parameter used to indicate whether to check when creating an instance.
- `false`: Default value. Send a normal request and create an instance if all the requirements are met.
- `true`: Send a check request and create no instance.
 * @method void setDryRun(boolean $DryRun) Set An internal parameter used to indicate whether to check when creating an instance.
- `false`: Default value. Send a normal request and create an instance if all the requirements are met.
- `true`: Send a check request and create no instance.
 * @method string getProductVersion() Obtain The product edition of the instance
- `local`: Local Disk Edition.
- `cloud`: Cloud Disk Edition.
- `cdc`: Dedicated Cluster Edition. Default value: `local`.
 * @method void setProductVersion(string $ProductVersion) Set The product edition of the instance
- `local`: Local Disk Edition.
- `cloud`: Cloud Disk Edition.
- `cdc`: Dedicated Cluster Edition. Default value: `local`.
 * @method string getRedisClusterId() Obtain Exclusive cluster ID. When `ProductVersion` is set to `cdc`, this parameter is required.
 * @method void setRedisClusterId(string $RedisClusterId) Set Exclusive cluster ID. When `ProductVersion` is set to `cdc`, this parameter is required.
 * @method array getAlarmPolicyList() Obtain Alarm policy ID array.- Please log in to [Tencent Cloud Observability Platform - Alarm Management - Policy Management](https://console.cloud.tencent.com/monitor/alarm/policy) to access the alarm policy ID.- If this parameter is not configured, the default alarm policy will be bound. For the specific information about the default alarm policy, please log in to [Tencent Cloud Observability Platform - Alarm Management - Policy Management](https://console.cloud.tencent.com/monitor/alarm/policy) to view.
 * @method void setAlarmPolicyList(array $AlarmPolicyList) Set Alarm policy ID array.- Please log in to [Tencent Cloud Observability Platform - Alarm Management - Policy Management](https://console.cloud.tencent.com/monitor/alarm/policy) to access the alarm policy ID.- If this parameter is not configured, the default alarm policy will be bound. For the specific information about the default alarm policy, please log in to [Tencent Cloud Observability Platform - Alarm Management - Policy Management](https://console.cloud.tencent.com/monitor/alarm/policy) to view.
 */
class CreateInstancesRequest extends AbstractModel
{
    /**
     * @var integer Instance type.
<ul><li>2: Redis 2.8 Memory Edition (standard architecture);</li> <li>3: CKV 3.2 Memory Edition (standard architecture);</li> <li>4: CKV 3.2 Memory Edition (cluster architecture);</li> <li>6: Redis 4.0 Memory Edition (standard architecture);</li> <li>7: Redis 4.0 Memory Edition (cluster architecture);</li> <li>8: Redis 5.0 Memory Edition (standard architecture);</li> <li>9: Redis 5.0 Memory Edition (cluster architecture);</li> <li>15: Redis 6.2 Memory Edition (standard architecture);</li> <li>16: Redis 6.2 Memory Edition (cluster architecture);</li> <li>17: Redis 7.0 Memory Edition (standard architecture);</li> <li>18: Redis 7.0 Memory Edition (cluster architecture). </li>Note: The CKV version is currently used by existing users and is temporarily retained.</ul>
     */
    public $TypeId;

    /**
     * @var integer Memory capacity in MB, which must be an integer multiple of 1024. For specific specifications, query the sales specifications in all regions through the [DescribeProductInfo](https://intl.cloud.tencent.com/document/api/239/30600?from_cn_redirect=1) API.
- When **TypeId** is a standard architecture, **MemSize** is the total memory capacity of the instance;
- When **TypeId** is a cluster architecture, **MemSize** is the single-shard memory capacity.
     */
    public $MemSize;

    /**
     * @var integer The number of instances for each purchase. For details, query the sales specifications in all regions through the [DescribeProductInfo](https://intl.cloud.tencent.com/document/api/239/30600?from_cn_redirect=1) API.
     */
    public $GoodsNum;

    /**
     * @var integer The purchase duration of an instance
- If `BillingMode` is `1`, that is, when the billing mode is monthly subscription, you need to set this parameter to specify the duration of the purchased instance. Unit: month. Value range: [1,2,3,4,5,6,7,8,9,10,11,12,24,36].
- If `BillingMode` is `0`, that is, when the billing mode is pay-as-you-go, you need to set this parameter to `1`.
     */
    public $Period;

    /**
     * @var integer Billing mode. 0: pay-as-you-go
     */
    public $BillingMode;

    /**
     * @var integer ID of the AZ where the instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
     */
    public $ZoneId;

    /**
     * @var string Password for accessing instances.
- When the input parameter **NoAuth** is set to **true**, password-free access is set for instances and Password does not need to be configured. Otherwise, Password is required.
- When the instance type parameter **TypeId** is set to Redis 2.8 Memory Edition (standard architecture) or Redis 4.0, 5.0, or 6.0 Memory Edition (standard architecture or cluster architecture), the password cannot start with a forward slash (/) and should contain 8 to 64 characters, including at least two of the following types: lowercase letters, uppercase letters, digits, and special characters (such as ()`~!@#$%^&*-+=_|{}[]:;<>,.?/).
- When the instance type parameter **TypeId** is set to CKV 3.2 Memory Edition (standard architecture or cluster architecture), the password should contain 8 to 30 characters, including only letters and digits.
     */
    public $Password;

    /**
     * @var string VPC ID. If this parameter is not passed in, the classic network will be selected by default. You can query the specific VPC ID in the [VPC console](https://console.cloud.tencent.com/vpc).
     */
    public $VpcId;

    /**
     * @var string VPC subnet ID. This parameter is not required for the classic network. You can get the specific subnet ID by querying the subnet list in the [VPC console](https://console.cloud.tencent.com/vpc).
     */
    public $SubnetId;

    /**
     * @var integer Project ID. Log in to the [Redis console](https://console.cloud.tencent.com/redis#/), go to the account information menu in the top-right corner, and select **Project Management** to query the project ID.
     */
    public $ProjectId;

    /**
     * @var integer Auto-renewal flag
- `0`: Manual renewal (default).
- `1`: Auto-renewal.
- `2`: Not auto-renewal (set by user).
     */
    public $AutoRenew;

    /**
     * @var array Array of security group IDs.
- A security group is a virtual firewall that controls network access to cloud database instances. It is recommended to bind the corresponding security group when you create an instance.
- Obtain the security group ID of the instance through the API [DescribeInstanceSecurityGroup](https://intl.cloud.tencent.com/document/product/239/34447?from_cn_redirect=1).
     */
    public $SecurityGroupIdList;

    /**
     * @var integer User-defined network port. Default value: `6379`. Range: [1024,65535].
     */
    public $VPort;

    /**
     * @var integer Quantity of instance shards
- This parameter is not required for instances of Standard Edition.
- For instances of Cluster Edition, the range of shard quantity is [1, 3, 5, 8, 12, 16, 24, 32, 40, 48, 64, 80, 96, 128].
     */
    public $RedisShardNum;

    /**
     * @var integer Quantity of instance replicas
- For Redis Memory Edition 4.0, 5.0, 6.2 (regardless of architecture), the range of replica quantity is [1,5].
- For Redis 2.8 Standard Edition and CKV Standard Edition, the replica quantity is `1`.
     */
    public $RedisReplicasNum;

    /**
     * @var boolean Whether to support read-only replicas.
- Redis 2.8 Standard Edition and CKV Standard Edition don’t support read-only replicas.
- If read-only replicas are enabled, read/write separation will be automatically enabled for an instance, with write requests routed to the master node and read requests to the replica node.
- To enable read-only replicas, we recommend that you create two or more replicas.
     */
    public $ReplicasReadonly;

    /**
     * @var string Instance name, which can contain up to 60 letters, digits, hyphens, and underscores.
     */
    public $InstanceName;

    /**
     * @var boolean Whether to support password-free access for an instance
- `true`: The instance access is password-free.
- `false`: The instance access is password-enabled. Default value: `false`. Only instances in a VPC support the password-free access.
     */
    public $NoAuth;

    /**
     * @var array The node information of the instance, including node ID, type, and AZ. For more information, see [RedisNodeInfo](https://intl.cloud.tencent.com/document/product/239/20022?from_cn_redirect=1).
Node information of an instance. Currently, information about the node type (master or replica) and node AZ can be passed in. This parameter is not required for instances deployed in a single AZ.
     */
    public $NodeSet;

    /**
     * @var array The tag for an instance
     */
    public $ResourceTags;

    /**
     * @var string Name of the AZ where the instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
     */
    public $ZoneName;

    /**
     * @var string The parameter template ID associated with the instance
- If this parameter is not configured, the system will automatically adapt the corresponding default template based on the selected compatible version and architecture.
- Query the list of parameter templates of an instance to get the template ID through the [DescribeParamTemplates](https://intl.cloud.tencent.com/document/product/239/58750?from_cn_redirect=1) API.
     */
    public $TemplateId;

    /**
     * @var boolean An internal parameter used to indicate whether to check when creating an instance.
- `false`: Default value. Send a normal request and create an instance if all the requirements are met.
- `true`: Send a check request and create no instance.
     */
    public $DryRun;

    /**
     * @var string The product edition of the instance
- `local`: Local Disk Edition.
- `cloud`: Cloud Disk Edition.
- `cdc`: Dedicated Cluster Edition. Default value: `local`.
     */
    public $ProductVersion;

    /**
     * @var string Exclusive cluster ID. When `ProductVersion` is set to `cdc`, this parameter is required.
     */
    public $RedisClusterId;

    /**
     * @var array Alarm policy ID array.- Please log in to [Tencent Cloud Observability Platform - Alarm Management - Policy Management](https://console.cloud.tencent.com/monitor/alarm/policy) to access the alarm policy ID.- If this parameter is not configured, the default alarm policy will be bound. For the specific information about the default alarm policy, please log in to [Tencent Cloud Observability Platform - Alarm Management - Policy Management](https://console.cloud.tencent.com/monitor/alarm/policy) to view.
     */
    public $AlarmPolicyList;

    /**
     * @param integer $TypeId Instance type.
<ul><li>2: Redis 2.8 Memory Edition (standard architecture);</li> <li>3: CKV 3.2 Memory Edition (standard architecture);</li> <li>4: CKV 3.2 Memory Edition (cluster architecture);</li> <li>6: Redis 4.0 Memory Edition (standard architecture);</li> <li>7: Redis 4.0 Memory Edition (cluster architecture);</li> <li>8: Redis 5.0 Memory Edition (standard architecture);</li> <li>9: Redis 5.0 Memory Edition (cluster architecture);</li> <li>15: Redis 6.2 Memory Edition (standard architecture);</li> <li>16: Redis 6.2 Memory Edition (cluster architecture);</li> <li>17: Redis 7.0 Memory Edition (standard architecture);</li> <li>18: Redis 7.0 Memory Edition (cluster architecture). </li>Note: The CKV version is currently used by existing users and is temporarily retained.</ul>
     * @param integer $MemSize Memory capacity in MB, which must be an integer multiple of 1024. For specific specifications, query the sales specifications in all regions through the [DescribeProductInfo](https://intl.cloud.tencent.com/document/api/239/30600?from_cn_redirect=1) API.
- When **TypeId** is a standard architecture, **MemSize** is the total memory capacity of the instance;
- When **TypeId** is a cluster architecture, **MemSize** is the single-shard memory capacity.
     * @param integer $GoodsNum The number of instances for each purchase. For details, query the sales specifications in all regions through the [DescribeProductInfo](https://intl.cloud.tencent.com/document/api/239/30600?from_cn_redirect=1) API.
     * @param integer $Period The purchase duration of an instance
- If `BillingMode` is `1`, that is, when the billing mode is monthly subscription, you need to set this parameter to specify the duration of the purchased instance. Unit: month. Value range: [1,2,3,4,5,6,7,8,9,10,11,12,24,36].
- If `BillingMode` is `0`, that is, when the billing mode is pay-as-you-go, you need to set this parameter to `1`.
     * @param integer $BillingMode Billing mode. 0: pay-as-you-go
     * @param integer $ZoneId ID of the AZ where the instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
     * @param string $Password Password for accessing instances.
- When the input parameter **NoAuth** is set to **true**, password-free access is set for instances and Password does not need to be configured. Otherwise, Password is required.
- When the instance type parameter **TypeId** is set to Redis 2.8 Memory Edition (standard architecture) or Redis 4.0, 5.0, or 6.0 Memory Edition (standard architecture or cluster architecture), the password cannot start with a forward slash (/) and should contain 8 to 64 characters, including at least two of the following types: lowercase letters, uppercase letters, digits, and special characters (such as ()`~!@#$%^&*-+=_|{}[]:;<>,.?/).
- When the instance type parameter **TypeId** is set to CKV 3.2 Memory Edition (standard architecture or cluster architecture), the password should contain 8 to 30 characters, including only letters and digits.
     * @param string $VpcId VPC ID. If this parameter is not passed in, the classic network will be selected by default. You can query the specific VPC ID in the [VPC console](https://console.cloud.tencent.com/vpc).
     * @param string $SubnetId VPC subnet ID. This parameter is not required for the classic network. You can get the specific subnet ID by querying the subnet list in the [VPC console](https://console.cloud.tencent.com/vpc).
     * @param integer $ProjectId Project ID. Log in to the [Redis console](https://console.cloud.tencent.com/redis#/), go to the account information menu in the top-right corner, and select **Project Management** to query the project ID.
     * @param integer $AutoRenew Auto-renewal flag
- `0`: Manual renewal (default).
- `1`: Auto-renewal.
- `2`: Not auto-renewal (set by user).
     * @param array $SecurityGroupIdList Array of security group IDs.
- A security group is a virtual firewall that controls network access to cloud database instances. It is recommended to bind the corresponding security group when you create an instance.
- Obtain the security group ID of the instance through the API [DescribeInstanceSecurityGroup](https://intl.cloud.tencent.com/document/product/239/34447?from_cn_redirect=1).
     * @param integer $VPort User-defined network port. Default value: `6379`. Range: [1024,65535].
     * @param integer $RedisShardNum Quantity of instance shards
- This parameter is not required for instances of Standard Edition.
- For instances of Cluster Edition, the range of shard quantity is [1, 3, 5, 8, 12, 16, 24, 32, 40, 48, 64, 80, 96, 128].
     * @param integer $RedisReplicasNum Quantity of instance replicas
- For Redis Memory Edition 4.0, 5.0, 6.2 (regardless of architecture), the range of replica quantity is [1,5].
- For Redis 2.8 Standard Edition and CKV Standard Edition, the replica quantity is `1`.
     * @param boolean $ReplicasReadonly Whether to support read-only replicas.
- Redis 2.8 Standard Edition and CKV Standard Edition don’t support read-only replicas.
- If read-only replicas are enabled, read/write separation will be automatically enabled for an instance, with write requests routed to the master node and read requests to the replica node.
- To enable read-only replicas, we recommend that you create two or more replicas.
     * @param string $InstanceName Instance name, which can contain up to 60 letters, digits, hyphens, and underscores.
     * @param boolean $NoAuth Whether to support password-free access for an instance
- `true`: The instance access is password-free.
- `false`: The instance access is password-enabled. Default value: `false`. Only instances in a VPC support the password-free access.
     * @param array $NodeSet The node information of the instance, including node ID, type, and AZ. For more information, see [RedisNodeInfo](https://intl.cloud.tencent.com/document/product/239/20022?from_cn_redirect=1).
Node information of an instance. Currently, information about the node type (master or replica) and node AZ can be passed in. This parameter is not required for instances deployed in a single AZ.
     * @param array $ResourceTags The tag for an instance
     * @param string $ZoneName Name of the AZ where the instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
     * @param string $TemplateId The parameter template ID associated with the instance
- If this parameter is not configured, the system will automatically adapt the corresponding default template based on the selected compatible version and architecture.
- Query the list of parameter templates of an instance to get the template ID through the [DescribeParamTemplates](https://intl.cloud.tencent.com/document/product/239/58750?from_cn_redirect=1) API.
     * @param boolean $DryRun An internal parameter used to indicate whether to check when creating an instance.
- `false`: Default value. Send a normal request and create an instance if all the requirements are met.
- `true`: Send a check request and create no instance.
     * @param string $ProductVersion The product edition of the instance
- `local`: Local Disk Edition.
- `cloud`: Cloud Disk Edition.
- `cdc`: Dedicated Cluster Edition. Default value: `local`.
     * @param string $RedisClusterId Exclusive cluster ID. When `ProductVersion` is set to `cdc`, this parameter is required.
     * @param array $AlarmPolicyList Alarm policy ID array.- Please log in to [Tencent Cloud Observability Platform - Alarm Management - Policy Management](https://console.cloud.tencent.com/monitor/alarm/policy) to access the alarm policy ID.- If this parameter is not configured, the default alarm policy will be bound. For the specific information about the default alarm policy, please log in to [Tencent Cloud Observability Platform - Alarm Management - Policy Management](https://console.cloud.tencent.com/monitor/alarm/policy) to view.
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
        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }

        if (array_key_exists("MemSize",$param) and $param["MemSize"] !== null) {
            $this->MemSize = $param["MemSize"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("BillingMode",$param) and $param["BillingMode"] !== null) {
            $this->BillingMode = $param["BillingMode"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("SecurityGroupIdList",$param) and $param["SecurityGroupIdList"] !== null) {
            $this->SecurityGroupIdList = $param["SecurityGroupIdList"];
        }

        if (array_key_exists("VPort",$param) and $param["VPort"] !== null) {
            $this->VPort = $param["VPort"];
        }

        if (array_key_exists("RedisShardNum",$param) and $param["RedisShardNum"] !== null) {
            $this->RedisShardNum = $param["RedisShardNum"];
        }

        if (array_key_exists("RedisReplicasNum",$param) and $param["RedisReplicasNum"] !== null) {
            $this->RedisReplicasNum = $param["RedisReplicasNum"];
        }

        if (array_key_exists("ReplicasReadonly",$param) and $param["ReplicasReadonly"] !== null) {
            $this->ReplicasReadonly = $param["ReplicasReadonly"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("NoAuth",$param) and $param["NoAuth"] !== null) {
            $this->NoAuth = $param["NoAuth"];
        }

        if (array_key_exists("NodeSet",$param) and $param["NodeSet"] !== null) {
            $this->NodeSet = [];
            foreach ($param["NodeSet"] as $key => $value){
                $obj = new RedisNodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeSet, $obj);
            }
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }

        if (array_key_exists("ProductVersion",$param) and $param["ProductVersion"] !== null) {
            $this->ProductVersion = $param["ProductVersion"];
        }

        if (array_key_exists("RedisClusterId",$param) and $param["RedisClusterId"] !== null) {
            $this->RedisClusterId = $param["RedisClusterId"];
        }

        if (array_key_exists("AlarmPolicyList",$param) and $param["AlarmPolicyList"] !== null) {
            $this->AlarmPolicyList = $param["AlarmPolicyList"];
        }
    }
}
