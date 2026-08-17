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
 * CloneInstances request structure.
 *
 * @method string getInstanceId() Obtain <p>Specify the source instance ID to be cloned. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Specify the source instance ID to be cloned. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
 * @method integer getGoodsNum() Obtain <p>The number of clone instances per operation.</p><ul><li>The maximum allowed number for each Monthly Subscription purchase is 100.</li><li>The maximum allowed number for each Pay-As-You-Go purchase is 30.</li></ul>
 * @method void setGoodsNum(integer $GoodsNum) Set <p>The number of clone instances per operation.</p><ul><li>The maximum allowed number for each Monthly Subscription purchase is 100.</li><li>The maximum allowed number for each Pay-As-You-Go purchase is 30.</li></ul>
 * @method integer getZoneId() Obtain <p>Availability zone ID of the cloned instance. For supported AZ IDs, see <a href="https://www.tencentcloud.com/document/product/239/4106?from_cn_redirect=1">Regions and Availability Zones</a>.</p>
 * @method void setZoneId(integer $ZoneId) Set <p>Availability zone ID of the cloned instance. For supported AZ IDs, see <a href="https://www.tencentcloud.com/document/product/239/4106?from_cn_redirect=1">Regions and Availability Zones</a>.</p>
 * @method integer getBillingMode() Obtain <p>Payment method.<ul><li>0: Pay-As-You-Go.</li><li>1: Monthly Subscription.</li></ul></p>
 * @method void setBillingMode(integer $BillingMode) Set <p>Payment method.<ul><li>0: Pay-As-You-Go.</li><li>1: Monthly Subscription.</li></ul></p>
 * @method integer getPeriod() Obtain <p>Instance Purchase Duration.<ul><li>Unit: month.</li><li>When the payment method is set to Monthly Subscription, the value range is [1,2,3,4,5,6,7,8,9,10,11,12,24,36,48,60].</li><li>When the payment method is set to Pay-As-You-Go, it is set to 1.</li></ul></p>
 * @method void setPeriod(integer $Period) Set <p>Instance Purchase Duration.<ul><li>Unit: month.</li><li>When the payment method is set to Monthly Subscription, the value range is [1,2,3,4,5,6,7,8,9,10,11,12,24,36,48,60].</li><li>When the payment method is set to Pay-As-You-Go, it is set to 1.</li></ul></p>
 * @method array getSecurityGroupIdList() Obtain <p>Security group ID. Call the <a href="https://www.tencentcloud.com/document/product/239/34447?from_cn_redirect=1">DescribeInstanceSecurityGroup</a> API to obtain the security group ID for the instance.</p>
 * @method void setSecurityGroupIdList(array $SecurityGroupIdList) Set <p>Security group ID. Call the <a href="https://www.tencentcloud.com/document/product/239/34447?from_cn_redirect=1">DescribeInstanceSecurityGroup</a> API to obtain the security group ID for the instance.</p>
 * @method string getBackupId() Obtain <p>Backup ID used to clone an instance. Use the interface <a href="https://www.tencentcloud.com/document/product/239/20011?from_cn_redirect=1">DescribeInstanceBackups</a> to obtain the backup ID.</p>
 * @method void setBackupId(string $BackupId) Set <p>Backup ID used to clone an instance. Use the interface <a href="https://www.tencentcloud.com/document/product/239/20011?from_cn_redirect=1">DescribeInstanceBackups</a> to obtain the backup ID.</p>
 * @method boolean getNoAuth() Obtain <p>Configure whether the cloned instance supports password-free access. Enabling SSL or public network does not support password-free access.<ul><li>true: Password-free instance,</li><li>false: Non-password-free instance. Default for non-passwordless instance.</li></ul></p>
 * @method void setNoAuth(boolean $NoAuth) Set <p>Configure whether the cloned instance supports password-free access. Enabling SSL or public network does not support password-free access.<ul><li>true: Password-free instance,</li><li>false: Non-password-free instance. Default for non-passwordless instance.</li></ul></p>
 * @method string getVpcId() Obtain <p>Configure the VPC ID for the clone instance. If not configured, the basic network is selected by default.</p>
 * @method void setVpcId(string $VpcId) Set <p>Configure the VPC ID for the clone instance. If not configured, the basic network is selected by default.</p>
 * @method string getSubnetId() Obtain <p>Configure the subnet of the private network for the cloned instance. This parameter requires no configuration for the basic network.</p>
 * @method void setSubnetId(string $SubnetId) Set <p>Configure the subnet of the private network for the cloned instance. This parameter requires no configuration for the basic network.</p>
 * @method string getInstanceName() Obtain <p>Name of the cloned instance.<br>Only Chinese characters, English letters, numbers, dashes ("-"), or underscores ("_") are allowed, with a length of less than 60.<br></p>
 * @method void setInstanceName(string $InstanceName) Set <p>Name of the cloned instance.<br>Only Chinese characters, English letters, numbers, dashes ("-"), or underscores ("_") are allowed, with a length of less than 60.<br></p>
 * @method string getPassword() Obtain <p>The access password of the clone instance.<ul><li>When the input parameter <b>NoAuth</b> is <b>true</b>, setting this parameter is optional.</li><li>For Redis 2.8, 4.0, and 5.0 instances, the password format is: 8-30 characters, containing at least lowercase letters, uppercase letters, digits, and 2 types of characters from ()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/, and cannot start with "/".</li><li>For CKV 3.2 instances, the password format is: 8-30 characters, must include letters and digits, and exclude other characters.</li></ul></p>
 * @method void setPassword(string $Password) Set <p>The access password of the clone instance.<ul><li>When the input parameter <b>NoAuth</b> is <b>true</b>, setting this parameter is optional.</li><li>For Redis 2.8, 4.0, and 5.0 instances, the password format is: 8-30 characters, containing at least lowercase letters, uppercase letters, digits, and 2 types of characters from ()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/, and cannot start with "/".</li><li>For CKV 3.2 instances, the password format is: 8-30 characters, must include letters and digits, and exclude other characters.</li></ul></p>
 * @method integer getAutoRenew() Obtain <p>Automatic renewal flag.<ul><li>0: default status, manual renewal.</li><li>1: automatic renewal.</li><li>2: no automatic renewal, auto-isolation upon expiration.</li></ul></p>
 * @method void setAutoRenew(integer $AutoRenew) Set <p>Automatic renewal flag.<ul><li>0: default status, manual renewal.</li><li>1: automatic renewal.</li><li>2: no automatic renewal, auto-isolation upon expiration.</li></ul></p>
 * @method integer getVPort() Obtain <p>User-defined port, defaults to 6379, in the range of [1024,65535].</p>
 * @method void setVPort(integer $VPort) Set <p>User-defined port, defaults to 6379, in the range of [1024,65535].</p>
 * @method array getNodeSet() Obtain <p>Node information of instance.<ul><li>Currently supports configuring node type (primary node or replica node) and its availability zone info. For details, please refer to <a href="https://www.tencentcloud.com/document/product/239/20022?from_cn_redirect=1#RedisNodeInfo">RedisNodeInfo</a>.</li><li>This parameter can be left blank for single-AZ deployment.</li></ul></p>
 * @method void setNodeSet(array $NodeSet) Set <p>Node information of instance.<ul><li>Currently supports configuring node type (primary node or replica node) and its availability zone info. For details, please refer to <a href="https://www.tencentcloud.com/document/product/239/20022?from_cn_redirect=1#RedisNodeInfo">RedisNodeInfo</a>.</li><li>This parameter can be left blank for single-AZ deployment.</li></ul></p>
 * @method integer getProjectId() Obtain <p>Project ID. Log in to the <a href="https://console.cloud.tencent.com/redis#/">Redis console</a>. You can find the project ID in the <b>Account Center</b> &gt; <b>Project Management</b> at the top-right corner.</p>
 * @method void setProjectId(integer $ProjectId) Set <p>Project ID. Log in to the <a href="https://console.cloud.tencent.com/redis#/">Redis console</a>. You can find the project ID in the <b>Account Center</b> &gt; <b>Project Management</b> at the top-right corner.</p>
 * @method array getResourceTags() Obtain <p>Tag bound to the clone instance.</p>
 * @method void setResourceTags(array $ResourceTags) Set <p>Tag bound to the clone instance.</p>
 * @method string getTemplateId() Obtain <p>Specify the parameter template ID related to the cloned instance.</p><ul><li>If this parameter is not configured, the system will automatically adapt the corresponding default template based on the selected compatible version and architecture.</li><li>Query the parameter template list of the instance through the <a href="https://www.tencentcloud.com/document/product/239/58750?from_cn_redirect=1">DescribeParamTemplates</a> API to obtain the template ID number.</li></ul>
 * @method void setTemplateId(string $TemplateId) Set <p>Specify the parameter template ID related to the cloned instance.</p><ul><li>If this parameter is not configured, the system will automatically adapt the corresponding default template based on the selected compatible version and architecture.</li><li>Query the parameter template list of the instance through the <a href="https://www.tencentcloud.com/document/product/239/58750?from_cn_redirect=1">DescribeParamTemplates</a> API to obtain the template ID number.</li></ul>
 * @method array getAlarmPolicyList() Obtain <p>Specify the alarm policy ID of the clone instance. Log in to the <a href="https://console.cloud.tencent.com/monitor/alarm2/policy">Tencent Cloud observability platform console</a>, and get policy ID information on the <b>alarm management</b> &gt; <b>policy management</b> page.</p>
 * @method void setAlarmPolicyList(array $AlarmPolicyList) Set <p>Specify the alarm policy ID of the clone instance. Log in to the <a href="https://console.cloud.tencent.com/monitor/alarm2/policy">Tencent Cloud observability platform console</a>, and get policy ID information on the <b>alarm management</b> &gt; <b>policy management</b> page.</p>
 * @method string getCloneTime() Obtain <p>Clone the time when data is recovered.<br>Only instances with second-level backup enabled are supported.</p>
 * @method void setCloneTime(string $CloneTime) Set <p>Clone the time when data is recovered.<br>Only instances with second-level backup enabled are supported.</p>
 * @method boolean getEncryptPassword() Obtain <p>Whether to encrypt the password</p>
 * @method void setEncryptPassword(boolean $EncryptPassword) Set <p>Whether to encrypt the password</p>
 * @method PasswordPolicy getPasswordPolicy() Obtain <p>Instance password complexity policy</p><p>Input parameter limit: If not passed or Enabled=false, deem as not enabled and verify by default rule.</p>
 * @method void setPasswordPolicy(PasswordPolicy $PasswordPolicy) Set <p>Instance password complexity policy</p><p>Input parameter limit: If not passed or Enabled=false, deem as not enabled and verify by default rule.</p>
 * @method boolean getEnableSSL() Obtain <p>Whether to enable SSL encryption.</p><p>Enumeration value:</p><ul><li>true: Enable.</li><li>false: Disable (default value).</li></ul><p>Default value: false</p>
 * @method void setEnableSSL(boolean $EnableSSL) Set <p>Whether to enable SSL encryption.</p><p>Enumeration value:</p><ul><li>true: Enable.</li><li>false: Disable (default value).</li></ul><p>Default value: false</p>
 * @method boolean getSSLBindPrivateIPv4() Obtain <p>Whether to write the private IPv4 address of the instance to the domain alias (SAN) of the certificate when SSL is enabled. This parameter is valid only when EnableSSL is true.</p><p>Enumeration value:</p><ul><li>true: The private IP is allowed for SSL certificate verification.</li><li>false: The SAN extended information of the certificate is not added.</li></ul><p>Default value: false</p>
 * @method void setSSLBindPrivateIPv4(boolean $SSLBindPrivateIPv4) Set <p>Whether to write the private IPv4 address of the instance to the domain alias (SAN) of the certificate when SSL is enabled. This parameter is valid only when EnableSSL is true.</p><p>Enumeration value:</p><ul><li>true: The private IP is allowed for SSL certificate verification.</li><li>false: The SAN extended information of the certificate is not added.</li></ul><p>Default value: false</p>
 * @method string getProductVersion() Obtain <p>Indicates the instance type.</p><p>Enumeration value:</p><ul><li>local: Common I</li><li>localv2: Common II</li></ul><p>If not passed, it remains the same as the original instance type by default.</p>
 * @method void setProductVersion(string $ProductVersion) Set <p>Indicates the instance type.</p><p>Enumeration value:</p><ul><li>local: Common I</li><li>localv2: Common II</li></ul><p>If not passed, it remains the same as the original instance type by default.</p>
 */
class CloneInstancesRequest extends AbstractModel
{
    /**
     * @var string <p>Specify the source instance ID to be cloned. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>The number of clone instances per operation.</p><ul><li>The maximum allowed number for each Monthly Subscription purchase is 100.</li><li>The maximum allowed number for each Pay-As-You-Go purchase is 30.</li></ul>
     */
    public $GoodsNum;

    /**
     * @var integer <p>Availability zone ID of the cloned instance. For supported AZ IDs, see <a href="https://www.tencentcloud.com/document/product/239/4106?from_cn_redirect=1">Regions and Availability Zones</a>.</p>
     */
    public $ZoneId;

    /**
     * @var integer <p>Payment method.<ul><li>0: Pay-As-You-Go.</li><li>1: Monthly Subscription.</li></ul></p>
     */
    public $BillingMode;

    /**
     * @var integer <p>Instance Purchase Duration.<ul><li>Unit: month.</li><li>When the payment method is set to Monthly Subscription, the value range is [1,2,3,4,5,6,7,8,9,10,11,12,24,36,48,60].</li><li>When the payment method is set to Pay-As-You-Go, it is set to 1.</li></ul></p>
     */
    public $Period;

    /**
     * @var array <p>Security group ID. Call the <a href="https://www.tencentcloud.com/document/product/239/34447?from_cn_redirect=1">DescribeInstanceSecurityGroup</a> API to obtain the security group ID for the instance.</p>
     */
    public $SecurityGroupIdList;

    /**
     * @var string <p>Backup ID used to clone an instance. Use the interface <a href="https://www.tencentcloud.com/document/product/239/20011?from_cn_redirect=1">DescribeInstanceBackups</a> to obtain the backup ID.</p>
     */
    public $BackupId;

    /**
     * @var boolean <p>Configure whether the cloned instance supports password-free access. Enabling SSL or public network does not support password-free access.<ul><li>true: Password-free instance,</li><li>false: Non-password-free instance. Default for non-passwordless instance.</li></ul></p>
     */
    public $NoAuth;

    /**
     * @var string <p>Configure the VPC ID for the clone instance. If not configured, the basic network is selected by default.</p>
     */
    public $VpcId;

    /**
     * @var string <p>Configure the subnet of the private network for the cloned instance. This parameter requires no configuration for the basic network.</p>
     */
    public $SubnetId;

    /**
     * @var string <p>Name of the cloned instance.<br>Only Chinese characters, English letters, numbers, dashes ("-"), or underscores ("_") are allowed, with a length of less than 60.<br></p>
     */
    public $InstanceName;

    /**
     * @var string <p>The access password of the clone instance.<ul><li>When the input parameter <b>NoAuth</b> is <b>true</b>, setting this parameter is optional.</li><li>For Redis 2.8, 4.0, and 5.0 instances, the password format is: 8-30 characters, containing at least lowercase letters, uppercase letters, digits, and 2 types of characters from ()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/, and cannot start with "/".</li><li>For CKV 3.2 instances, the password format is: 8-30 characters, must include letters and digits, and exclude other characters.</li></ul></p>
     */
    public $Password;

    /**
     * @var integer <p>Automatic renewal flag.<ul><li>0: default status, manual renewal.</li><li>1: automatic renewal.</li><li>2: no automatic renewal, auto-isolation upon expiration.</li></ul></p>
     */
    public $AutoRenew;

    /**
     * @var integer <p>User-defined port, defaults to 6379, in the range of [1024,65535].</p>
     */
    public $VPort;

    /**
     * @var array <p>Node information of instance.<ul><li>Currently supports configuring node type (primary node or replica node) and its availability zone info. For details, please refer to <a href="https://www.tencentcloud.com/document/product/239/20022?from_cn_redirect=1#RedisNodeInfo">RedisNodeInfo</a>.</li><li>This parameter can be left blank for single-AZ deployment.</li></ul></p>
     */
    public $NodeSet;

    /**
     * @var integer <p>Project ID. Log in to the <a href="https://console.cloud.tencent.com/redis#/">Redis console</a>. You can find the project ID in the <b>Account Center</b> &gt; <b>Project Management</b> at the top-right corner.</p>
     */
    public $ProjectId;

    /**
     * @var array <p>Tag bound to the clone instance.</p>
     */
    public $ResourceTags;

    /**
     * @var string <p>Specify the parameter template ID related to the cloned instance.</p><ul><li>If this parameter is not configured, the system will automatically adapt the corresponding default template based on the selected compatible version and architecture.</li><li>Query the parameter template list of the instance through the <a href="https://www.tencentcloud.com/document/product/239/58750?from_cn_redirect=1">DescribeParamTemplates</a> API to obtain the template ID number.</li></ul>
     */
    public $TemplateId;

    /**
     * @var array <p>Specify the alarm policy ID of the clone instance. Log in to the <a href="https://console.cloud.tencent.com/monitor/alarm2/policy">Tencent Cloud observability platform console</a>, and get policy ID information on the <b>alarm management</b> &gt; <b>policy management</b> page.</p>
     */
    public $AlarmPolicyList;

    /**
     * @var string <p>Clone the time when data is recovered.<br>Only instances with second-level backup enabled are supported.</p>
     */
    public $CloneTime;

    /**
     * @var boolean <p>Whether to encrypt the password</p>
     */
    public $EncryptPassword;

    /**
     * @var PasswordPolicy <p>Instance password complexity policy</p><p>Input parameter limit: If not passed or Enabled=false, deem as not enabled and verify by default rule.</p>
     */
    public $PasswordPolicy;

    /**
     * @var boolean <p>Whether to enable SSL encryption.</p><p>Enumeration value:</p><ul><li>true: Enable.</li><li>false: Disable (default value).</li></ul><p>Default value: false</p>
     */
    public $EnableSSL;

    /**
     * @var boolean <p>Whether to write the private IPv4 address of the instance to the domain alias (SAN) of the certificate when SSL is enabled. This parameter is valid only when EnableSSL is true.</p><p>Enumeration value:</p><ul><li>true: The private IP is allowed for SSL certificate verification.</li><li>false: The SAN extended information of the certificate is not added.</li></ul><p>Default value: false</p>
     */
    public $SSLBindPrivateIPv4;

    /**
     * @var string <p>Indicates the instance type.</p><p>Enumeration value:</p><ul><li>local: Common I</li><li>localv2: Common II</li></ul><p>If not passed, it remains the same as the original instance type by default.</p>
     */
    public $ProductVersion;

    /**
     * @param string $InstanceId <p>Specify the source instance ID to be cloned. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
     * @param integer $GoodsNum <p>The number of clone instances per operation.</p><ul><li>The maximum allowed number for each Monthly Subscription purchase is 100.</li><li>The maximum allowed number for each Pay-As-You-Go purchase is 30.</li></ul>
     * @param integer $ZoneId <p>Availability zone ID of the cloned instance. For supported AZ IDs, see <a href="https://www.tencentcloud.com/document/product/239/4106?from_cn_redirect=1">Regions and Availability Zones</a>.</p>
     * @param integer $BillingMode <p>Payment method.<ul><li>0: Pay-As-You-Go.</li><li>1: Monthly Subscription.</li></ul></p>
     * @param integer $Period <p>Instance Purchase Duration.<ul><li>Unit: month.</li><li>When the payment method is set to Monthly Subscription, the value range is [1,2,3,4,5,6,7,8,9,10,11,12,24,36,48,60].</li><li>When the payment method is set to Pay-As-You-Go, it is set to 1.</li></ul></p>
     * @param array $SecurityGroupIdList <p>Security group ID. Call the <a href="https://www.tencentcloud.com/document/product/239/34447?from_cn_redirect=1">DescribeInstanceSecurityGroup</a> API to obtain the security group ID for the instance.</p>
     * @param string $BackupId <p>Backup ID used to clone an instance. Use the interface <a href="https://www.tencentcloud.com/document/product/239/20011?from_cn_redirect=1">DescribeInstanceBackups</a> to obtain the backup ID.</p>
     * @param boolean $NoAuth <p>Configure whether the cloned instance supports password-free access. Enabling SSL or public network does not support password-free access.<ul><li>true: Password-free instance,</li><li>false: Non-password-free instance. Default for non-passwordless instance.</li></ul></p>
     * @param string $VpcId <p>Configure the VPC ID for the clone instance. If not configured, the basic network is selected by default.</p>
     * @param string $SubnetId <p>Configure the subnet of the private network for the cloned instance. This parameter requires no configuration for the basic network.</p>
     * @param string $InstanceName <p>Name of the cloned instance.<br>Only Chinese characters, English letters, numbers, dashes ("-"), or underscores ("_") are allowed, with a length of less than 60.<br></p>
     * @param string $Password <p>The access password of the clone instance.<ul><li>When the input parameter <b>NoAuth</b> is <b>true</b>, setting this parameter is optional.</li><li>For Redis 2.8, 4.0, and 5.0 instances, the password format is: 8-30 characters, containing at least lowercase letters, uppercase letters, digits, and 2 types of characters from ()`~!@#$%^&amp;*-+=_|{}[]:;&lt;&gt;,.?/, and cannot start with "/".</li><li>For CKV 3.2 instances, the password format is: 8-30 characters, must include letters and digits, and exclude other characters.</li></ul></p>
     * @param integer $AutoRenew <p>Automatic renewal flag.<ul><li>0: default status, manual renewal.</li><li>1: automatic renewal.</li><li>2: no automatic renewal, auto-isolation upon expiration.</li></ul></p>
     * @param integer $VPort <p>User-defined port, defaults to 6379, in the range of [1024,65535].</p>
     * @param array $NodeSet <p>Node information of instance.<ul><li>Currently supports configuring node type (primary node or replica node) and its availability zone info. For details, please refer to <a href="https://www.tencentcloud.com/document/product/239/20022?from_cn_redirect=1#RedisNodeInfo">RedisNodeInfo</a>.</li><li>This parameter can be left blank for single-AZ deployment.</li></ul></p>
     * @param integer $ProjectId <p>Project ID. Log in to the <a href="https://console.cloud.tencent.com/redis#/">Redis console</a>. You can find the project ID in the <b>Account Center</b> &gt; <b>Project Management</b> at the top-right corner.</p>
     * @param array $ResourceTags <p>Tag bound to the clone instance.</p>
     * @param string $TemplateId <p>Specify the parameter template ID related to the cloned instance.</p><ul><li>If this parameter is not configured, the system will automatically adapt the corresponding default template based on the selected compatible version and architecture.</li><li>Query the parameter template list of the instance through the <a href="https://www.tencentcloud.com/document/product/239/58750?from_cn_redirect=1">DescribeParamTemplates</a> API to obtain the template ID number.</li></ul>
     * @param array $AlarmPolicyList <p>Specify the alarm policy ID of the clone instance. Log in to the <a href="https://console.cloud.tencent.com/monitor/alarm2/policy">Tencent Cloud observability platform console</a>, and get policy ID information on the <b>alarm management</b> &gt; <b>policy management</b> page.</p>
     * @param string $CloneTime <p>Clone the time when data is recovered.<br>Only instances with second-level backup enabled are supported.</p>
     * @param boolean $EncryptPassword <p>Whether to encrypt the password</p>
     * @param PasswordPolicy $PasswordPolicy <p>Instance password complexity policy</p><p>Input parameter limit: If not passed or Enabled=false, deem as not enabled and verify by default rule.</p>
     * @param boolean $EnableSSL <p>Whether to enable SSL encryption.</p><p>Enumeration value:</p><ul><li>true: Enable.</li><li>false: Disable (default value).</li></ul><p>Default value: false</p>
     * @param boolean $SSLBindPrivateIPv4 <p>Whether to write the private IPv4 address of the instance to the domain alias (SAN) of the certificate when SSL is enabled. This parameter is valid only when EnableSSL is true.</p><p>Enumeration value:</p><ul><li>true: The private IP is allowed for SSL certificate verification.</li><li>false: The SAN extended information of the certificate is not added.</li></ul><p>Default value: false</p>
     * @param string $ProductVersion <p>Indicates the instance type.</p><p>Enumeration value:</p><ul><li>local: Common I</li><li>localv2: Common II</li></ul><p>If not passed, it remains the same as the original instance type by default.</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("BillingMode",$param) and $param["BillingMode"] !== null) {
            $this->BillingMode = $param["BillingMode"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("SecurityGroupIdList",$param) and $param["SecurityGroupIdList"] !== null) {
            $this->SecurityGroupIdList = $param["SecurityGroupIdList"];
        }

        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("NoAuth",$param) and $param["NoAuth"] !== null) {
            $this->NoAuth = $param["NoAuth"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("VPort",$param) and $param["VPort"] !== null) {
            $this->VPort = $param["VPort"];
        }

        if (array_key_exists("NodeSet",$param) and $param["NodeSet"] !== null) {
            $this->NodeSet = [];
            foreach ($param["NodeSet"] as $key => $value){
                $obj = new RedisNodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeSet, $obj);
            }
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("AlarmPolicyList",$param) and $param["AlarmPolicyList"] !== null) {
            $this->AlarmPolicyList = $param["AlarmPolicyList"];
        }

        if (array_key_exists("CloneTime",$param) and $param["CloneTime"] !== null) {
            $this->CloneTime = $param["CloneTime"];
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

        if (array_key_exists("ProductVersion",$param) and $param["ProductVersion"] !== null) {
            $this->ProductVersion = $param["ProductVersion"];
        }
    }
}
