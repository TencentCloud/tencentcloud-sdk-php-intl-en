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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstances request structure.
 *
 * @method integer getTypeId() Obtain <p>Instance type.</p><ul><li>2: Redis 2.8 memory edition (standard architecture).</li><li>3: CKV 3.2 memory edition (standard architecture).</li><li>4: CKV 3.2 memory edition (cluster architecture).</li><li>6: Redis 4.0 memory edition (standard architecture).</li><li>7: Redis 4.0 memory edition (cluster architecture).</li><li>8: Redis 5.0 memory edition (standard architecture).</li><li>9: Redis 5.0 memory edition (cluster architecture).</li><li>15: Redis 6.2 memory edition (standard architecture).</li><li>16: Redis 6.2 memory edition (cluster architecture).</li><li>17: Redis 7.0 memory edition (standard architecture).</li><li>18: Redis 7.0 memory edition (cluster architecture).</li><li>19: Valkey 8.0 memory edition (standard architecture).</li><li>20: Valkey 8.0 memory edition (cluster architecture).</li><li>21: Valkey 9.0 memory edition (standard architecture).</li><li>22: Valkey 9.0 memory edition (cluster architecture).</li><li>200: Memcached 1.6 memory edition (cluster architecture).<br><strong>Note</strong>: CKV editions are currently used by some users and are temporarily retained.</li></ul>
 * @method void setTypeId(integer $TypeId) Set <p>Instance type.</p><ul><li>2: Redis 2.8 memory edition (standard architecture).</li><li>3: CKV 3.2 memory edition (standard architecture).</li><li>4: CKV 3.2 memory edition (cluster architecture).</li><li>6: Redis 4.0 memory edition (standard architecture).</li><li>7: Redis 4.0 memory edition (cluster architecture).</li><li>8: Redis 5.0 memory edition (standard architecture).</li><li>9: Redis 5.0 memory edition (cluster architecture).</li><li>15: Redis 6.2 memory edition (standard architecture).</li><li>16: Redis 6.2 memory edition (cluster architecture).</li><li>17: Redis 7.0 memory edition (standard architecture).</li><li>18: Redis 7.0 memory edition (cluster architecture).</li><li>19: Valkey 8.0 memory edition (standard architecture).</li><li>20: Valkey 8.0 memory edition (cluster architecture).</li><li>21: Valkey 9.0 memory edition (standard architecture).</li><li>22: Valkey 9.0 memory edition (cluster architecture).</li><li>200: Memcached 1.6 memory edition (cluster architecture).<br><strong>Note</strong>: CKV editions are currently used by some users and are temporarily retained.</li></ul>
 * @method integer getMemSize() Obtain <p>Memory capacity, measured in MB, must be a multiple of 1024. For specific specifications, query the sales specifications for all regions via the <a href="https://www.tencentcloud.com/document/api/239/30600?from_cn_redirect=1">DescribeProductInfo</a> API.</p><ul><li>When <strong>TypeId</strong> is standard architecture, <strong>MemSize</strong> is the total memory capacity of the instance.</li><li>When <strong>TypeId</strong> is cluster architecture, <strong>MemSize</strong> is the sharded memory capacity.</li></ul>
 * @method void setMemSize(integer $MemSize) Set <p>Memory capacity, measured in MB, must be a multiple of 1024. For specific specifications, query the sales specifications for all regions via the <a href="https://www.tencentcloud.com/document/api/239/30600?from_cn_redirect=1">DescribeProductInfo</a> API.</p><ul><li>When <strong>TypeId</strong> is standard architecture, <strong>MemSize</strong> is the total memory capacity of the instance.</li><li>When <strong>TypeId</strong> is cluster architecture, <strong>MemSize</strong> is the sharded memory capacity.</li></ul>
 * @method integer getGoodsNum() Obtain <p>Instance count. Number of instances to purchase at a time. For details, query sales specifications in all regions via the <a href="https://www.tencentcloud.com/document/api/239/30600?from_cn_redirect=1">DescribeProductInfo</a> API.</p>
 * @method void setGoodsNum(integer $GoodsNum) Set <p>Instance count. Number of instances to purchase at a time. For details, query sales specifications in all regions via the <a href="https://www.tencentcloud.com/document/api/239/30600?from_cn_redirect=1">DescribeProductInfo</a> API.</p>
 * @method integer getPeriod() Obtain <p>Duration of instance purchase.</p><ul><li>If <strong>BillingMode</strong> is <strong>1</strong>, that is, the billing mode is monthly subscription, you need to set this parameter to specify the duration of instance purchase. Measurement unit: month, permissible range [1,2,3,4,5,6,7,8,9,10,11,12,24,36].</li><li>If <strong>BillingMode</strong> is <strong>0</strong>, that is, the billing mode is pay-as-you-go, set this parameter to 1.</li></ul>
 * @method void setPeriod(integer $Period) Set <p>Duration of instance purchase.</p><ul><li>If <strong>BillingMode</strong> is <strong>1</strong>, that is, the billing mode is monthly subscription, you need to set this parameter to specify the duration of instance purchase. Measurement unit: month, permissible range [1,2,3,4,5,6,7,8,9,10,11,12,24,36].</li><li>If <strong>BillingMode</strong> is <strong>0</strong>, that is, the billing mode is pay-as-you-go, set this parameter to 1.</li></ul>
 * @method integer getBillingMode() Obtain <p>Billing mode.</p><ul><li>0: Pay-As-You-Go.</li><li>1: Monthly Subscription.</li></ul>
 * @method void setBillingMode(integer $BillingMode) Set <p>Billing mode.</p><ul><li>0: Pay-As-You-Go.</li><li>1: Monthly Subscription.</li></ul>
 * @method integer getZoneId() Obtain <p>ID of the AZ to which the instance belongs. See <a href="https://www.tencentcloud.com/document/product/239/4106?from_cn_redirect=1">Regions and AZs</a>.</p>
 * @method void setZoneId(integer $ZoneId) Set <p>ID of the AZ to which the instance belongs. See <a href="https://www.tencentcloud.com/document/product/239/4106?from_cn_redirect=1">Regions and AZs</a>.</p>
 * @method string getPassword() Obtain <p>Password for accessing instances.</p><ul><li>When the input parameter <strong>NoAuth</strong> is <strong>true</strong>, it means setting instances to Password-free access, and Password does not need to be configured. Otherwise, Password is required.</li><li>When the instance type <strong>TypeId</strong> is Redis 2.8 memory edition standard architecture, Redis 4.0, 5.0, 6.2, or 7.0 memory edition standard architecture or cluster architecture, the Password complexity requirements are: 8-64 characters, containing at least lowercase letters, uppercase letters, digits, and 2 of the following characters: ()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/, and cannot start with "/".</li><li>When the instance type <strong>TypeId</strong> is CKV 3.2 memory edition standard architecture or cluster architecture, the Password complexity is: 8-30 characters, must include letters and digits, and exclude other characters.</li></ul>
 * @method void setPassword(string $Password) Set <p>Password for accessing instances.</p><ul><li>When the input parameter <strong>NoAuth</strong> is <strong>true</strong>, it means setting instances to Password-free access, and Password does not need to be configured. Otherwise, Password is required.</li><li>When the instance type <strong>TypeId</strong> is Redis 2.8 memory edition standard architecture, Redis 4.0, 5.0, 6.2, or 7.0 memory edition standard architecture or cluster architecture, the Password complexity requirements are: 8-64 characters, containing at least lowercase letters, uppercase letters, digits, and 2 of the following characters: ()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/, and cannot start with "/".</li><li>When the instance type <strong>TypeId</strong> is CKV 3.2 memory edition standard architecture or cluster architecture, the Password complexity is: 8-30 characters, must include letters and digits, and exclude other characters.</li></ul>
 * @method string getVpcId() Obtain <p>VPC ID. If you do not configure this parameter, the basic network is selected by default. Log in to the <a href="https://console.cloud.tencent.com/vpc">private network</a> console to query the specific ID.</p>
 * @method void setVpcId(string $VpcId) Set <p>VPC ID. If you do not configure this parameter, the basic network is selected by default. Log in to the <a href="https://console.cloud.tencent.com/vpc">private network</a> console to query the specific ID.</p>
 * @method string getSubnetId() Obtain <p>Subnet of the private network VPC. In the basic network, this parameter requires no configuration. Log in to the <a href="https://console.cloud.tencent.com/vpc">Private Network</a> console to query the subnet list and obtain the specific ID.</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Subnet of the private network VPC. In the basic network, this parameter requires no configuration. Log in to the <a href="https://console.cloud.tencent.com/vpc">Private Network</a> console to query the subnet list and obtain the specific ID.</p>
 * @method integer getProjectId() Obtain <p>Project ID. Log in to the <a href="https://console.cloud.tencent.com/redis#/">Redis console</a>, select <strong>Project Management</strong> from the account information menu in the top-right corner, and query the project ID.</p>
 * @method void setProjectId(integer $ProjectId) Set <p>Project ID. Log in to the <a href="https://console.cloud.tencent.com/redis#/">Redis console</a>, select <strong>Project Management</strong> from the account information menu in the top-right corner, and query the project ID.</p>
 * @method integer getAutoRenew() Obtain <p>Automatic renewal flag.</p><ul><li>0: default status (manual renewal).</li><li>1: automatic renewal.</li><li>2: non-renewal upon expiration.</li></ul>
 * @method void setAutoRenew(integer $AutoRenew) Set <p>Automatic renewal flag.</p><ul><li>0: default status (manual renewal).</li><li>1: automatic renewal.</li><li>2: non-renewal upon expiration.</li></ul>
 * @method array getSecurityGroupIdList() Obtain <p>Security group ID array.</p><ul><li>A security group is a virtual firewall that controls network access to a cloud database instance. When creating an instance, it is recommended to bind the corresponding security group.</li><li>Get the security group ID of an instance through the <a href="https://www.tencentcloud.com/document/product/239/34447?from_cn_redirect=1">DescribeInstanceSecurityGroup</a> API.</li></ul>
 * @method void setSecurityGroupIdList(array $SecurityGroupIdList) Set <p>Security group ID array.</p><ul><li>A security group is a virtual firewall that controls network access to a cloud database instance. When creating an instance, it is recommended to bind the corresponding security group.</li><li>Get the security group ID of an instance through the <a href="https://www.tencentcloud.com/document/product/239/34447?from_cn_redirect=1">DescribeInstanceSecurityGroup</a> API.</li></ul>
 * @method integer getVPort() Obtain <p>User-defined network port. Defaults to 6379, range [1024,65535].</p>
 * @method void setVPort(integer $VPort) Set <p>User-defined network port. Defaults to 6379, range [1024,65535].</p>
 * @method integer getRedisShardNum() Obtain <p>Number of instance shards.</p><ul><li>No need to configure this parameter for standard edition instances.</li><li>For cluster edition instances, the shard quantity range is: [1, 3, 5, 8, 12, 16, 24, 32, 40, 48, 64, 80, 96, 128].</li></ul>
 * @method void setRedisShardNum(integer $RedisShardNum) Set <p>Number of instance shards.</p><ul><li>No need to configure this parameter for standard edition instances.</li><li>For cluster edition instances, the shard quantity range is: [1, 3, 5, 8, 12, 16, 24, 32, 40, 48, 64, 80, 96, 128].</li></ul>
 * @method integer getRedisReplicasNum() Obtain <p>Instance replica number.</p><ul><li>Redis Memory Edition 4.0, 5.0, 6.2, and 7.0 cluster architecture supports a replica quantity range of [1,5].</li><li>Redis 2.8 Standard Edition and CKV Standard Edition support only 1 replica.</li></ul>
 * @method void setRedisReplicasNum(integer $RedisReplicasNum) Set <p>Instance replica number.</p><ul><li>Redis Memory Edition 4.0, 5.0, 6.2, and 7.0 cluster architecture supports a replica quantity range of [1,5].</li><li>Redis 2.8 Standard Edition and CKV Standard Edition support only 1 replica.</li></ul>
 * @method boolean getReplicasReadonly() Obtain <p>Flag whether the instance needs to support read-only replica.</p><ul><li>Redis 2.8 Standard Edition and CKV Standard Edition do not support read-only replica.</li><li>If read-only replica is enabled, the instance will automatically separate read and write operations, with write requests routed to the primary node and read requests routed to replica nodes.</li><li>If needed to enable read-only replica, it is recommended to have at least 2 replicas.</li></ul>
 * @method void setReplicasReadonly(boolean $ReplicasReadonly) Set <p>Flag whether the instance needs to support read-only replica.</p><ul><li>Redis 2.8 Standard Edition and CKV Standard Edition do not support read-only replica.</li><li>If read-only replica is enabled, the instance will automatically separate read and write operations, with write requests routed to the primary node and read requests routed to replica nodes.</li><li>If needed to enable read-only replica, it is recommended to have at least 2 replicas.</li></ul>
 * @method string getInstanceName() Obtain <p>Instance name. Naming requirement: It only supports Chinese characters, letters, numbers, hyphens ("-"), or underscores ("_"), with a length of less than 60.</p>
 * @method void setInstanceName(string $InstanceName) Set <p>Instance name. Naming requirement: It only supports Chinese characters, letters, numbers, hyphens ("-"), or underscores ("_"), with a length of less than 60.</p>
 * @method boolean getNoAuth() Obtain <p>Configure whether the instance supports password-free access.</p><ul><li>true: Access the instance without a password.</li><li>false: Access the instance with a password. By default, password access is enabled. Only instances in a VPC network support password-free access.</li></ul>
 * @method void setNoAuth(boolean $NoAuth) Set <p>Configure whether the instance supports password-free access.</p><ul><li>true: Access the instance without a password.</li><li>false: Access the instance with a password. By default, password access is enabled. Only instances in a VPC network support password-free access.</li></ul>
 * @method array getNodeSet() Obtain <p>Node information of instance, including node ID, node type, node availability zone ID. For details, please see <a href="https://www.tencentcloud.com/document/product/239/20022?from_cn_redirect=1">RedisNodeInfo</a>.<br>Currently support inputting node type (primary node or replica node) and availability zone. When this parameter is not specified, in regions that support multi-availability zone deployment, the system defaults to creating instances with multi-availability zone architecture.</p>
 * @method void setNodeSet(array $NodeSet) Set <p>Node information of instance, including node ID, node type, node availability zone ID. For details, please see <a href="https://www.tencentcloud.com/document/product/239/20022?from_cn_redirect=1">RedisNodeInfo</a>.<br>Currently support inputting node type (primary node or replica node) and availability zone. When this parameter is not specified, in regions that support multi-availability zone deployment, the system defaults to creating instances with multi-availability zone architecture.</p>
 * @method array getResourceTags() Obtain <p>Set a tag for the instance.</p>
 * @method void setResourceTags(array $ResourceTags) Set <p>Set a tag for the instance.</p>
 * @method string getZoneName() Obtain <p>Specify the name of the AZ to which the instance belongs. For details, see <a href="https://www.tencentcloud.com/document/product/239/4106?from_cn_redirect=1">Regions and AZs</a>.</p>
 * @method void setZoneName(string $ZoneName) Set <p>Specify the name of the AZ to which the instance belongs. For details, see <a href="https://www.tencentcloud.com/document/product/239/4106?from_cn_redirect=1">Regions and AZs</a>.</p>
 * @method string getTemplateId() Obtain <p>Parameter template ID of the specified instance.</p><ul><li>If this parameter is not configured, the system will automatically adapt to the corresponding default template based on the selected compatible version and architecture.</li><li>Query the parameter template list of the instance through the <a href="https://www.tencentcloud.com/document/product/239/58750?from_cn_redirect=1">DescribeParamTemplates</a> API to obtain the template ID number.</li></ul>
 * @method void setTemplateId(string $TemplateId) Set <p>Parameter template ID of the specified instance.</p><ul><li>If this parameter is not configured, the system will automatically adapt to the corresponding default template based on the selected compatible version and architecture.</li><li>Query the parameter template list of the instance through the <a href="https://www.tencentcloud.com/document/product/239/58750?from_cn_redirect=1">DescribeParamTemplates</a> API to obtain the template ID number.</li></ul>
 * @method boolean getDryRun() Obtain <p>Internal parameter to identify whether creating an instance needs to check.</p><ul><li>false: Default value. Send a normal request and create the instance directly after passing the check.</li><li>true: Send a check request without creating an instance.</li></ul>
 * @method void setDryRun(boolean $DryRun) Set <p>Internal parameter to identify whether creating an instance needs to check.</p><ul><li>false: Default value. Send a normal request and create the instance directly after passing the check.</li><li>true: Send a check request without creating an instance.</li></ul>
 * @method string getProductVersion() Obtain <p>Indicates the instance deployment mode.</p><ul><li>local: traditional architecture, defaults to local.</li><li>cdc: dedicated cluster.</li><li>cloud: cloud native, currently not available for sale.</li></ul>
 * @method void setProductVersion(string $ProductVersion) Set <p>Indicates the instance deployment mode.</p><ul><li>local: traditional architecture, defaults to local.</li><li>cdc: dedicated cluster.</li><li>cloud: cloud native, currently not available for sale.</li></ul>
 * @method string getRedisClusterId() Obtain <p>Dedicated cluster ID.</p><ul><li>When <strong>ProductVersion</strong> is set to <strong>cdc</strong>, this parameter must be set.</li><li>Get cluster ID through the API <a href="https://www.tencentcloud.com/document/product/239/109628?from_cn_redirect=1">DescribeRedisClusters</a>.</li></ul>
 * @method void setRedisClusterId(string $RedisClusterId) Set <p>Dedicated cluster ID.</p><ul><li>When <strong>ProductVersion</strong> is set to <strong>cdc</strong>, this parameter must be set.</li><li>Get cluster ID through the API <a href="https://www.tencentcloud.com/document/product/239/109628?from_cn_redirect=1">DescribeRedisClusters</a>.</li></ul>
 * @method array getAlarmPolicyList() Obtain <p>Alarm policy ID array.</p><ul><li>Log in to <a href="https://console.cloud.tencent.com/monitor/alarm/policy">Tencent Cloud Observability Platform - Alarm Management - Policy Management</a> to get alarm policy ID.</li><li>If this parameter is not configured, the default alarm policy will be bound. For the default alarm policy details, log in to <a href="https://console.cloud.tencent.com/monitor/alarm/policy">Tencent Cloud Observability Platform - Alarm Management - Policy Management</a> to view.</li></ul>
 * @method void setAlarmPolicyList(array $AlarmPolicyList) Set <p>Alarm policy ID array.</p><ul><li>Log in to <a href="https://console.cloud.tencent.com/monitor/alarm/policy">Tencent Cloud Observability Platform - Alarm Management - Policy Management</a> to get alarm policy ID.</li><li>If this parameter is not configured, the default alarm policy will be bound. For the default alarm policy details, log in to <a href="https://console.cloud.tencent.com/monitor/alarm/policy">Tencent Cloud Observability Platform - Alarm Management - Policy Management</a> to view.</li></ul>
 * @method boolean getEncryptPassword() Obtain <p>Whether to enable password encryption for transmission.</p><ul><li>true: Encrypted.</li><li>false: Not encrypted (default value).</li></ul>
 * @method void setEncryptPassword(boolean $EncryptPassword) Set <p>Whether to enable password encryption for transmission.</p><ul><li>true: Encrypted.</li><li>false: Not encrypted (default value).</li></ul>
 * @method PasswordPolicy getPasswordPolicy() Obtain <p>Instance-level password complexity policy. When not passed in or Enabled=false, deem as not enabling policy, validate by system default rule.</p>
 * @method void setPasswordPolicy(PasswordPolicy $PasswordPolicy) Set <p>Instance-level password complexity policy. When not passed in or Enabled=false, deem as not enabling policy, validate by system default rule.</p>
 * @method boolean getEnableSSL() Obtain <p>Whether to enable SSL encryption.</p><ul><li>true: Enable.</li><li>false: Disable (default value).</li></ul>
 * @method void setEnableSSL(boolean $EnableSSL) Set <p>Whether to enable SSL encryption.</p><ul><li>true: Enable.</li><li>false: Disable (default value).</li></ul>
 * @method boolean getSSLBindPrivateIPv4() Obtain <p>Whether to write the private IPv4 address of an instance to the domain alias (SAN) of the certificate when SSL is enabled. This parameter is valid only when EnableSSL is true.</p><ul><li>true: Allows using private IP to perform SSL certificate verification.</li><li>false: Does not add the SAN extended information to the certificate.</li></ul>
 * @method void setSSLBindPrivateIPv4(boolean $SSLBindPrivateIPv4) Set <p>Whether to write the private IPv4 address of an instance to the domain alias (SAN) of the certificate when SSL is enabled. This parameter is valid only when EnableSSL is true.</p><ul><li>true: Allows using private IP to perform SSL certificate verification.</li><li>false: Does not add the SAN extended information to the certificate.</li></ul>
 * @method integer getConnectionMode() Obtain <p>Instance connectivity access Mode.</p><ul><li>0: Proxy Mode (default value).</li><li>1: Direct access Mode.</li></ul>
 * @method void setConnectionMode(integer $ConnectionMode) Set <p>Instance connectivity access Mode.</p><ul><li>0: Proxy Mode (default value).</li><li>1: Direct access Mode.</li></ul>
 */
class CreateInstancesRequest extends AbstractModel
{
    /**
     * @var integer <p>Instance type.</p><ul><li>2: Redis 2.8 memory edition (standard architecture).</li><li>3: CKV 3.2 memory edition (standard architecture).</li><li>4: CKV 3.2 memory edition (cluster architecture).</li><li>6: Redis 4.0 memory edition (standard architecture).</li><li>7: Redis 4.0 memory edition (cluster architecture).</li><li>8: Redis 5.0 memory edition (standard architecture).</li><li>9: Redis 5.0 memory edition (cluster architecture).</li><li>15: Redis 6.2 memory edition (standard architecture).</li><li>16: Redis 6.2 memory edition (cluster architecture).</li><li>17: Redis 7.0 memory edition (standard architecture).</li><li>18: Redis 7.0 memory edition (cluster architecture).</li><li>19: Valkey 8.0 memory edition (standard architecture).</li><li>20: Valkey 8.0 memory edition (cluster architecture).</li><li>21: Valkey 9.0 memory edition (standard architecture).</li><li>22: Valkey 9.0 memory edition (cluster architecture).</li><li>200: Memcached 1.6 memory edition (cluster architecture).<br><strong>Note</strong>: CKV editions are currently used by some users and are temporarily retained.</li></ul>
     */
    public $TypeId;

    /**
     * @var integer <p>Memory capacity, measured in MB, must be a multiple of 1024. For specific specifications, query the sales specifications for all regions via the <a href="https://www.tencentcloud.com/document/api/239/30600?from_cn_redirect=1">DescribeProductInfo</a> API.</p><ul><li>When <strong>TypeId</strong> is standard architecture, <strong>MemSize</strong> is the total memory capacity of the instance.</li><li>When <strong>TypeId</strong> is cluster architecture, <strong>MemSize</strong> is the sharded memory capacity.</li></ul>
     */
    public $MemSize;

    /**
     * @var integer <p>Instance count. Number of instances to purchase at a time. For details, query sales specifications in all regions via the <a href="https://www.tencentcloud.com/document/api/239/30600?from_cn_redirect=1">DescribeProductInfo</a> API.</p>
     */
    public $GoodsNum;

    /**
     * @var integer <p>Duration of instance purchase.</p><ul><li>If <strong>BillingMode</strong> is <strong>1</strong>, that is, the billing mode is monthly subscription, you need to set this parameter to specify the duration of instance purchase. Measurement unit: month, permissible range [1,2,3,4,5,6,7,8,9,10,11,12,24,36].</li><li>If <strong>BillingMode</strong> is <strong>0</strong>, that is, the billing mode is pay-as-you-go, set this parameter to 1.</li></ul>
     */
    public $Period;

    /**
     * @var integer <p>Billing mode.</p><ul><li>0: Pay-As-You-Go.</li><li>1: Monthly Subscription.</li></ul>
     */
    public $BillingMode;

    /**
     * @var integer <p>ID of the AZ to which the instance belongs. See <a href="https://www.tencentcloud.com/document/product/239/4106?from_cn_redirect=1">Regions and AZs</a>.</p>
     */
    public $ZoneId;

    /**
     * @var string <p>Password for accessing instances.</p><ul><li>When the input parameter <strong>NoAuth</strong> is <strong>true</strong>, it means setting instances to Password-free access, and Password does not need to be configured. Otherwise, Password is required.</li><li>When the instance type <strong>TypeId</strong> is Redis 2.8 memory edition standard architecture, Redis 4.0, 5.0, 6.2, or 7.0 memory edition standard architecture or cluster architecture, the Password complexity requirements are: 8-64 characters, containing at least lowercase letters, uppercase letters, digits, and 2 of the following characters: ()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/, and cannot start with "/".</li><li>When the instance type <strong>TypeId</strong> is CKV 3.2 memory edition standard architecture or cluster architecture, the Password complexity is: 8-30 characters, must include letters and digits, and exclude other characters.</li></ul>
     */
    public $Password;

    /**
     * @var string <p>VPC ID. If you do not configure this parameter, the basic network is selected by default. Log in to the <a href="https://console.cloud.tencent.com/vpc">private network</a> console to query the specific ID.</p>
     */
    public $VpcId;

    /**
     * @var string <p>Subnet of the private network VPC. In the basic network, this parameter requires no configuration. Log in to the <a href="https://console.cloud.tencent.com/vpc">Private Network</a> console to query the subnet list and obtain the specific ID.</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>Project ID. Log in to the <a href="https://console.cloud.tencent.com/redis#/">Redis console</a>, select <strong>Project Management</strong> from the account information menu in the top-right corner, and query the project ID.</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>Automatic renewal flag.</p><ul><li>0: default status (manual renewal).</li><li>1: automatic renewal.</li><li>2: non-renewal upon expiration.</li></ul>
     */
    public $AutoRenew;

    /**
     * @var array <p>Security group ID array.</p><ul><li>A security group is a virtual firewall that controls network access to a cloud database instance. When creating an instance, it is recommended to bind the corresponding security group.</li><li>Get the security group ID of an instance through the <a href="https://www.tencentcloud.com/document/product/239/34447?from_cn_redirect=1">DescribeInstanceSecurityGroup</a> API.</li></ul>
     */
    public $SecurityGroupIdList;

    /**
     * @var integer <p>User-defined network port. Defaults to 6379, range [1024,65535].</p>
     */
    public $VPort;

    /**
     * @var integer <p>Number of instance shards.</p><ul><li>No need to configure this parameter for standard edition instances.</li><li>For cluster edition instances, the shard quantity range is: [1, 3, 5, 8, 12, 16, 24, 32, 40, 48, 64, 80, 96, 128].</li></ul>
     */
    public $RedisShardNum;

    /**
     * @var integer <p>Instance replica number.</p><ul><li>Redis Memory Edition 4.0, 5.0, 6.2, and 7.0 cluster architecture supports a replica quantity range of [1,5].</li><li>Redis 2.8 Standard Edition and CKV Standard Edition support only 1 replica.</li></ul>
     */
    public $RedisReplicasNum;

    /**
     * @var boolean <p>Flag whether the instance needs to support read-only replica.</p><ul><li>Redis 2.8 Standard Edition and CKV Standard Edition do not support read-only replica.</li><li>If read-only replica is enabled, the instance will automatically separate read and write operations, with write requests routed to the primary node and read requests routed to replica nodes.</li><li>If needed to enable read-only replica, it is recommended to have at least 2 replicas.</li></ul>
     */
    public $ReplicasReadonly;

    /**
     * @var string <p>Instance name. Naming requirement: It only supports Chinese characters, letters, numbers, hyphens ("-"), or underscores ("_"), with a length of less than 60.</p>
     */
    public $InstanceName;

    /**
     * @var boolean <p>Configure whether the instance supports password-free access.</p><ul><li>true: Access the instance without a password.</li><li>false: Access the instance with a password. By default, password access is enabled. Only instances in a VPC network support password-free access.</li></ul>
     */
    public $NoAuth;

    /**
     * @var array <p>Node information of instance, including node ID, node type, node availability zone ID. For details, please see <a href="https://www.tencentcloud.com/document/product/239/20022?from_cn_redirect=1">RedisNodeInfo</a>.<br>Currently support inputting node type (primary node or replica node) and availability zone. When this parameter is not specified, in regions that support multi-availability zone deployment, the system defaults to creating instances with multi-availability zone architecture.</p>
     */
    public $NodeSet;

    /**
     * @var array <p>Set a tag for the instance.</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>Specify the name of the AZ to which the instance belongs. For details, see <a href="https://www.tencentcloud.com/document/product/239/4106?from_cn_redirect=1">Regions and AZs</a>.</p>
     */
    public $ZoneName;

    /**
     * @var string <p>Parameter template ID of the specified instance.</p><ul><li>If this parameter is not configured, the system will automatically adapt to the corresponding default template based on the selected compatible version and architecture.</li><li>Query the parameter template list of the instance through the <a href="https://www.tencentcloud.com/document/product/239/58750?from_cn_redirect=1">DescribeParamTemplates</a> API to obtain the template ID number.</li></ul>
     */
    public $TemplateId;

    /**
     * @var boolean <p>Internal parameter to identify whether creating an instance needs to check.</p><ul><li>false: Default value. Send a normal request and create the instance directly after passing the check.</li><li>true: Send a check request without creating an instance.</li></ul>
     */
    public $DryRun;

    /**
     * @var string <p>Indicates the instance deployment mode.</p><ul><li>local: traditional architecture, defaults to local.</li><li>cdc: dedicated cluster.</li><li>cloud: cloud native, currently not available for sale.</li></ul>
     */
    public $ProductVersion;

    /**
     * @var string <p>Dedicated cluster ID.</p><ul><li>When <strong>ProductVersion</strong> is set to <strong>cdc</strong>, this parameter must be set.</li><li>Get cluster ID through the API <a href="https://www.tencentcloud.com/document/product/239/109628?from_cn_redirect=1">DescribeRedisClusters</a>.</li></ul>
     */
    public $RedisClusterId;

    /**
     * @var array <p>Alarm policy ID array.</p><ul><li>Log in to <a href="https://console.cloud.tencent.com/monitor/alarm/policy">Tencent Cloud Observability Platform - Alarm Management - Policy Management</a> to get alarm policy ID.</li><li>If this parameter is not configured, the default alarm policy will be bound. For the default alarm policy details, log in to <a href="https://console.cloud.tencent.com/monitor/alarm/policy">Tencent Cloud Observability Platform - Alarm Management - Policy Management</a> to view.</li></ul>
     */
    public $AlarmPolicyList;

    /**
     * @var boolean <p>Whether to enable password encryption for transmission.</p><ul><li>true: Encrypted.</li><li>false: Not encrypted (default value).</li></ul>
     */
    public $EncryptPassword;

    /**
     * @var PasswordPolicy <p>Instance-level password complexity policy. When not passed in or Enabled=false, deem as not enabling policy, validate by system default rule.</p>
     */
    public $PasswordPolicy;

    /**
     * @var boolean <p>Whether to enable SSL encryption.</p><ul><li>true: Enable.</li><li>false: Disable (default value).</li></ul>
     */
    public $EnableSSL;

    /**
     * @var boolean <p>Whether to write the private IPv4 address of an instance to the domain alias (SAN) of the certificate when SSL is enabled. This parameter is valid only when EnableSSL is true.</p><ul><li>true: Allows using private IP to perform SSL certificate verification.</li><li>false: Does not add the SAN extended information to the certificate.</li></ul>
     */
    public $SSLBindPrivateIPv4;

    /**
     * @var integer <p>Instance connectivity access Mode.</p><ul><li>0: Proxy Mode (default value).</li><li>1: Direct access Mode.</li></ul>
     */
    public $ConnectionMode;

    /**
     * @param integer $TypeId <p>Instance type.</p><ul><li>2: Redis 2.8 memory edition (standard architecture).</li><li>3: CKV 3.2 memory edition (standard architecture).</li><li>4: CKV 3.2 memory edition (cluster architecture).</li><li>6: Redis 4.0 memory edition (standard architecture).</li><li>7: Redis 4.0 memory edition (cluster architecture).</li><li>8: Redis 5.0 memory edition (standard architecture).</li><li>9: Redis 5.0 memory edition (cluster architecture).</li><li>15: Redis 6.2 memory edition (standard architecture).</li><li>16: Redis 6.2 memory edition (cluster architecture).</li><li>17: Redis 7.0 memory edition (standard architecture).</li><li>18: Redis 7.0 memory edition (cluster architecture).</li><li>19: Valkey 8.0 memory edition (standard architecture).</li><li>20: Valkey 8.0 memory edition (cluster architecture).</li><li>21: Valkey 9.0 memory edition (standard architecture).</li><li>22: Valkey 9.0 memory edition (cluster architecture).</li><li>200: Memcached 1.6 memory edition (cluster architecture).<br><strong>Note</strong>: CKV editions are currently used by some users and are temporarily retained.</li></ul>
     * @param integer $MemSize <p>Memory capacity, measured in MB, must be a multiple of 1024. For specific specifications, query the sales specifications for all regions via the <a href="https://www.tencentcloud.com/document/api/239/30600?from_cn_redirect=1">DescribeProductInfo</a> API.</p><ul><li>When <strong>TypeId</strong> is standard architecture, <strong>MemSize</strong> is the total memory capacity of the instance.</li><li>When <strong>TypeId</strong> is cluster architecture, <strong>MemSize</strong> is the sharded memory capacity.</li></ul>
     * @param integer $GoodsNum <p>Instance count. Number of instances to purchase at a time. For details, query sales specifications in all regions via the <a href="https://www.tencentcloud.com/document/api/239/30600?from_cn_redirect=1">DescribeProductInfo</a> API.</p>
     * @param integer $Period <p>Duration of instance purchase.</p><ul><li>If <strong>BillingMode</strong> is <strong>1</strong>, that is, the billing mode is monthly subscription, you need to set this parameter to specify the duration of instance purchase. Measurement unit: month, permissible range [1,2,3,4,5,6,7,8,9,10,11,12,24,36].</li><li>If <strong>BillingMode</strong> is <strong>0</strong>, that is, the billing mode is pay-as-you-go, set this parameter to 1.</li></ul>
     * @param integer $BillingMode <p>Billing mode.</p><ul><li>0: Pay-As-You-Go.</li><li>1: Monthly Subscription.</li></ul>
     * @param integer $ZoneId <p>ID of the AZ to which the instance belongs. See <a href="https://www.tencentcloud.com/document/product/239/4106?from_cn_redirect=1">Regions and AZs</a>.</p>
     * @param string $Password <p>Password for accessing instances.</p><ul><li>When the input parameter <strong>NoAuth</strong> is <strong>true</strong>, it means setting instances to Password-free access, and Password does not need to be configured. Otherwise, Password is required.</li><li>When the instance type <strong>TypeId</strong> is Redis 2.8 memory edition standard architecture, Redis 4.0, 5.0, 6.2, or 7.0 memory edition standard architecture or cluster architecture, the Password complexity requirements are: 8-64 characters, containing at least lowercase letters, uppercase letters, digits, and 2 of the following characters: ()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/, and cannot start with "/".</li><li>When the instance type <strong>TypeId</strong> is CKV 3.2 memory edition standard architecture or cluster architecture, the Password complexity is: 8-30 characters, must include letters and digits, and exclude other characters.</li></ul>
     * @param string $VpcId <p>VPC ID. If you do not configure this parameter, the basic network is selected by default. Log in to the <a href="https://console.cloud.tencent.com/vpc">private network</a> console to query the specific ID.</p>
     * @param string $SubnetId <p>Subnet of the private network VPC. In the basic network, this parameter requires no configuration. Log in to the <a href="https://console.cloud.tencent.com/vpc">Private Network</a> console to query the subnet list and obtain the specific ID.</p>
     * @param integer $ProjectId <p>Project ID. Log in to the <a href="https://console.cloud.tencent.com/redis#/">Redis console</a>, select <strong>Project Management</strong> from the account information menu in the top-right corner, and query the project ID.</p>
     * @param integer $AutoRenew <p>Automatic renewal flag.</p><ul><li>0: default status (manual renewal).</li><li>1: automatic renewal.</li><li>2: non-renewal upon expiration.</li></ul>
     * @param array $SecurityGroupIdList <p>Security group ID array.</p><ul><li>A security group is a virtual firewall that controls network access to a cloud database instance. When creating an instance, it is recommended to bind the corresponding security group.</li><li>Get the security group ID of an instance through the <a href="https://www.tencentcloud.com/document/product/239/34447?from_cn_redirect=1">DescribeInstanceSecurityGroup</a> API.</li></ul>
     * @param integer $VPort <p>User-defined network port. Defaults to 6379, range [1024,65535].</p>
     * @param integer $RedisShardNum <p>Number of instance shards.</p><ul><li>No need to configure this parameter for standard edition instances.</li><li>For cluster edition instances, the shard quantity range is: [1, 3, 5, 8, 12, 16, 24, 32, 40, 48, 64, 80, 96, 128].</li></ul>
     * @param integer $RedisReplicasNum <p>Instance replica number.</p><ul><li>Redis Memory Edition 4.0, 5.0, 6.2, and 7.0 cluster architecture supports a replica quantity range of [1,5].</li><li>Redis 2.8 Standard Edition and CKV Standard Edition support only 1 replica.</li></ul>
     * @param boolean $ReplicasReadonly <p>Flag whether the instance needs to support read-only replica.</p><ul><li>Redis 2.8 Standard Edition and CKV Standard Edition do not support read-only replica.</li><li>If read-only replica is enabled, the instance will automatically separate read and write operations, with write requests routed to the primary node and read requests routed to replica nodes.</li><li>If needed to enable read-only replica, it is recommended to have at least 2 replicas.</li></ul>
     * @param string $InstanceName <p>Instance name. Naming requirement: It only supports Chinese characters, letters, numbers, hyphens ("-"), or underscores ("_"), with a length of less than 60.</p>
     * @param boolean $NoAuth <p>Configure whether the instance supports password-free access.</p><ul><li>true: Access the instance without a password.</li><li>false: Access the instance with a password. By default, password access is enabled. Only instances in a VPC network support password-free access.</li></ul>
     * @param array $NodeSet <p>Node information of instance, including node ID, node type, node availability zone ID. For details, please see <a href="https://www.tencentcloud.com/document/product/239/20022?from_cn_redirect=1">RedisNodeInfo</a>.<br>Currently support inputting node type (primary node or replica node) and availability zone. When this parameter is not specified, in regions that support multi-availability zone deployment, the system defaults to creating instances with multi-availability zone architecture.</p>
     * @param array $ResourceTags <p>Set a tag for the instance.</p>
     * @param string $ZoneName <p>Specify the name of the AZ to which the instance belongs. For details, see <a href="https://www.tencentcloud.com/document/product/239/4106?from_cn_redirect=1">Regions and AZs</a>.</p>
     * @param string $TemplateId <p>Parameter template ID of the specified instance.</p><ul><li>If this parameter is not configured, the system will automatically adapt to the corresponding default template based on the selected compatible version and architecture.</li><li>Query the parameter template list of the instance through the <a href="https://www.tencentcloud.com/document/product/239/58750?from_cn_redirect=1">DescribeParamTemplates</a> API to obtain the template ID number.</li></ul>
     * @param boolean $DryRun <p>Internal parameter to identify whether creating an instance needs to check.</p><ul><li>false: Default value. Send a normal request and create the instance directly after passing the check.</li><li>true: Send a check request without creating an instance.</li></ul>
     * @param string $ProductVersion <p>Indicates the instance deployment mode.</p><ul><li>local: traditional architecture, defaults to local.</li><li>cdc: dedicated cluster.</li><li>cloud: cloud native, currently not available for sale.</li></ul>
     * @param string $RedisClusterId <p>Dedicated cluster ID.</p><ul><li>When <strong>ProductVersion</strong> is set to <strong>cdc</strong>, this parameter must be set.</li><li>Get cluster ID through the API <a href="https://www.tencentcloud.com/document/product/239/109628?from_cn_redirect=1">DescribeRedisClusters</a>.</li></ul>
     * @param array $AlarmPolicyList <p>Alarm policy ID array.</p><ul><li>Log in to <a href="https://console.cloud.tencent.com/monitor/alarm/policy">Tencent Cloud Observability Platform - Alarm Management - Policy Management</a> to get alarm policy ID.</li><li>If this parameter is not configured, the default alarm policy will be bound. For the default alarm policy details, log in to <a href="https://console.cloud.tencent.com/monitor/alarm/policy">Tencent Cloud Observability Platform - Alarm Management - Policy Management</a> to view.</li></ul>
     * @param boolean $EncryptPassword <p>Whether to enable password encryption for transmission.</p><ul><li>true: Encrypted.</li><li>false: Not encrypted (default value).</li></ul>
     * @param PasswordPolicy $PasswordPolicy <p>Instance-level password complexity policy. When not passed in or Enabled=false, deem as not enabling policy, validate by system default rule.</p>
     * @param boolean $EnableSSL <p>Whether to enable SSL encryption.</p><ul><li>true: Enable.</li><li>false: Disable (default value).</li></ul>
     * @param boolean $SSLBindPrivateIPv4 <p>Whether to write the private IPv4 address of an instance to the domain alias (SAN) of the certificate when SSL is enabled. This parameter is valid only when EnableSSL is true.</p><ul><li>true: Allows using private IP to perform SSL certificate verification.</li><li>false: Does not add the SAN extended information to the certificate.</li></ul>
     * @param integer $ConnectionMode <p>Instance connectivity access Mode.</p><ul><li>0: Proxy Mode (default value).</li><li>1: Direct access Mode.</li></ul>
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

        if (array_key_exists("EncryptPassword",$param) and $param["EncryptPassword"] !== null) {
            $this->EncryptPassword = $param["EncryptPassword"];
        }

        if (array_key_exists("PasswordPolicy",$param) and $param["PasswordPolicy"] !== null) {
            $this->PasswordPolicy = new PasswordPolicy();
            $this->PasswordPolicy->deserialize($param["PasswordPolicy"]);
        }

        if (array_key_exists("EnableSSL",$param) and $param["EnableSSL"] !== null) {
            $this->EnableSSL = $param["EnableSSL"];
        }

        if (array_key_exists("SSLBindPrivateIPv4",$param) and $param["SSLBindPrivateIPv4"] !== null) {
            $this->SSLBindPrivateIPv4 = $param["SSLBindPrivateIPv4"];
        }

        if (array_key_exists("ConnectionMode",$param) and $param["ConnectionMode"] !== null) {
            $this->ConnectionMode = $param["ConnectionMode"];
        }
    }
}
