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
 * CloneInstances request structure.
 *
 * @method string getInstanceId() Obtain The ID of the source instance to be cloned, such as "crs-xjhsdj****". Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
 * @method void setInstanceId(string $InstanceId) Set The ID of the source instance to be cloned, such as "crs-xjhsdj****". Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
 * @method integer getGoodsNum() Obtain The number of clone instances at a time
- The maximum number of monthly subscribed instances is 100 for each purchase.
- The maximum number of pay-as-you-go instances is 30 for each purchase.
 * @method void setGoodsNum(integer $GoodsNum) Set The number of clone instances at a time
- The maximum number of monthly subscribed instances is 100 for each purchase.
- The maximum number of pay-as-you-go instances is 30 for each purchase.
 * @method integer getZoneId() Obtain ID of the AZ where the clone instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
 * @method void setZoneId(integer $ZoneId) Set ID of the AZ where the clone instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
 * @method integer getBillingMode() Obtain Billing mode. Valid values: <ul><li>`0` (Pay-as-you-go) </li><li>`1` (Monthly subscription) </li></ul>
 * @method void setBillingMode(integer $BillingMode) Set Billing mode. Valid values: <ul><li>`0` (Pay-as-you-go) </li><li>`1` (Monthly subscription) </li></ul>
 * @method integer getPeriod() Obtain Purchase duration of an instance. <ul><li>Unit: Month</li><li>Valid values: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`, `48`, `60` (for monthly subscription mode).</li><li> Valid value: `1` (for pay-as-you-go mode).</li></ul>
 * @method void setPeriod(integer $Period) Set Purchase duration of an instance. <ul><li>Unit: Month</li><li>Valid values: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`, `48`, `60` (for monthly subscription mode).</li><li> Valid value: `1` (for pay-as-you-go mode).</li></ul>
 * @method array getSecurityGroupIdList() Obtain Security group ID, which can be obtained on the <b>Security Group</b> page in the console.
 * @method void setSecurityGroupIdList(array $SecurityGroupIdList) Set Security group ID, which can be obtained on the <b>Security Group</b> page in the console.
 * @method string getBackupId() Obtain Backup ID of the clone instance, which can be obtained through the [DescribeInstanceBackups](https://intl.cloud.tencent.com/document/product/239/20011?from_cn_redirect=1) API.
 * @method void setBackupId(string $BackupId) Set Backup ID of the clone instance, which can be obtained through the [DescribeInstanceBackups](https://intl.cloud.tencent.com/document/product/239/20011?from_cn_redirect=1) API.
 * @method boolean getNoAuth() Obtain Whether the clone instance supports password-free access. Valid values: <ul><li>`true` (Yes)</li><li>`false` (No. When SSL or public network is enabled). Default value: `false`.</li></ul>
 * @method void setNoAuth(boolean $NoAuth) Set Whether the clone instance supports password-free access. Valid values: <ul><li>`true` (Yes)</li><li>`false` (No. When SSL or public network is enabled). Default value: `false`.</li></ul>
 * @method string getVpcId() Obtain The VPC ID of the clone instance. If this parameter is not passed in, the classic network will be selected by default.
 * @method void setVpcId(string $VpcId) Set The VPC ID of the clone instance. If this parameter is not passed in, the classic network will be selected by default.
 * @method string getSubnetId() Obtain The VPC subnet ID to which the clone instance belongs, which is not required for the classic network.
 * @method void setSubnetId(string $SubnetId) Set The VPC subnet ID to which the clone instance belongs, which is not required for the classic network.
 * @method string getInstanceName() Obtain Name of the clone instance. <br>Enter up to 60 letters, digits, hyphens, and underscores.</br>
 * @method void setInstanceName(string $InstanceName) Set Name of the clone instance. <br>Enter up to 60 letters, digits, hyphens, and underscores.</br>
 * @method string getPassword() Obtain The access password of the clone instance. <ul><li>When the input parameter <b>NoAuth</b> is <b>true</b>, this parameter is not required. </li><li>When the instance is Redis 2.8, 4.0, or 5.0, the password must contain 8–30 characters in at least two of the following types: lowercase letters, uppercase letters, digits, and special characters `()`~!@#$%^&*-+=_|{}[]:;<>,.?/` and cannot start with `/`.</li><li>When the instance is CKV 3.2, the password must and can only contain 8–30 letters and digits.</li></ul>
 * @method void setPassword(string $Password) Set The access password of the clone instance. <ul><li>When the input parameter <b>NoAuth</b> is <b>true</b>, this parameter is not required. </li><li>When the instance is Redis 2.8, 4.0, or 5.0, the password must contain 8–30 characters in at least two of the following types: lowercase letters, uppercase letters, digits, and special characters `()`~!@#$%^&*-+=_|{}[]:;<>,.?/` and cannot start with `/`.</li><li>When the instance is CKV 3.2, the password must and can only contain 8–30 letters and digits.</li></ul>
 * @method integer getAutoRenew() Obtain The auto-renewal flag. Valid values <ul><li>`0`: Manual renewal (default). </li><li>`1`: Auto-renewal. </li><li>`2`: Not auto-renewal (set by user).</ul>
 * @method void setAutoRenew(integer $AutoRenew) Set The auto-renewal flag. Valid values <ul><li>`0`: Manual renewal (default). </li><li>`1`: Auto-renewal. </li><li>`2`: Not auto-renewal (set by user).</ul>
 * @method integer getVPort() Obtain Customized port. Valid range: 1024-65535. Default value: `6379`.
 * @method void setVPort(integer $VPort) Set Customized port. Valid range: 1024-65535. Default value: `6379`.
 * @method array getNodeSet() Obtain Node information of an instance. <ul><li>Currently supported type and AZ information of a node to be configured (master node or replica node) For more information, see [RedisNodeInfo](https://intl.cloud.tencent.com/document/product/239/20022?from_cn_redirect=1#RedisNodeInfo).</li><li>This parameter is not required for single-AZ deployment.</li></ul>
 * @method void setNodeSet(array $NodeSet) Set Node information of an instance. <ul><li>Currently supported type and AZ information of a node to be configured (master node or replica node) For more information, see [RedisNodeInfo](https://intl.cloud.tencent.com/document/product/239/20022?from_cn_redirect=1#RedisNodeInfo).</li><li>This parameter is not required for single-AZ deployment.</li></ul>
 * @method integer getProjectId() Obtain Project ID. Log in to the [Redis console](https://console.cloud.tencent.com/redis#/), and find the project ID in <b>Account Center</b> > <b>Project Management</b> in the top-right corner.
 * @method void setProjectId(integer $ProjectId) Set Project ID. Log in to the [Redis console](https://console.cloud.tencent.com/redis#/), and find the project ID in <b>Account Center</b> > <b>Project Management</b> in the top-right corner.
 * @method array getResourceTags() Obtain Tag to be bound for the clone instance
 * @method void setResourceTags(array $ResourceTags) Set Tag to be bound for the clone instance
 * @method string getTemplateId() Obtain The parameter template ID associated with the clone instance
- If this parameter is not configured, the system will automatically adapt the corresponding default template based on the selected compatible version and architecture.
- You can query the parameter template list of the instance to get the template ID through the [DescribeParamTemplates](https://intl.cloud.tencent.com/document/product/239/58750?from_cn_redirect=1) API.
 * @method void setTemplateId(string $TemplateId) Set The parameter template ID associated with the clone instance
- If this parameter is not configured, the system will automatically adapt the corresponding default template based on the selected compatible version and architecture.
- You can query the parameter template list of the instance to get the template ID through the [DescribeParamTemplates](https://intl.cloud.tencent.com/document/product/239/58750?from_cn_redirect=1) API.
 * @method array getAlarmPolicyList() Obtain The alarm policy ID of the instance to be cloned. Log in to the [Tencent Cloud Observable Platform console](https://console.cloud.tencent.com/monitor/alarm2/policy), and get the policy ID in <b>Alarm Management</b> > <b>Policy Management</b>.
 * @method void setAlarmPolicyList(array $AlarmPolicyList) Set The alarm policy ID of the instance to be cloned. Log in to the [Tencent Cloud Observable Platform console](https://console.cloud.tencent.com/monitor/alarm2/policy), and get the policy ID in <b>Alarm Management</b> > <b>Policy Management</b>.
 * @method string getCloneTime() Obtain Time to restore data for cloning.
Only instances with second-level backup enabled are supported.

 * @method void setCloneTime(string $CloneTime) Set Time to restore data for cloning.
Only instances with second-level backup enabled are supported.
 */
class CloneInstancesRequest extends AbstractModel
{
    /**
     * @var string The ID of the source instance to be cloned, such as "crs-xjhsdj****". Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
     */
    public $InstanceId;

    /**
     * @var integer The number of clone instances at a time
- The maximum number of monthly subscribed instances is 100 for each purchase.
- The maximum number of pay-as-you-go instances is 30 for each purchase.
     */
    public $GoodsNum;

    /**
     * @var integer ID of the AZ where the clone instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
     */
    public $ZoneId;

    /**
     * @var integer Billing mode. Valid values: <ul><li>`0` (Pay-as-you-go) </li><li>`1` (Monthly subscription) </li></ul>
     */
    public $BillingMode;

    /**
     * @var integer Purchase duration of an instance. <ul><li>Unit: Month</li><li>Valid values: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`, `48`, `60` (for monthly subscription mode).</li><li> Valid value: `1` (for pay-as-you-go mode).</li></ul>
     */
    public $Period;

    /**
     * @var array Security group ID, which can be obtained on the <b>Security Group</b> page in the console.
     */
    public $SecurityGroupIdList;

    /**
     * @var string Backup ID of the clone instance, which can be obtained through the [DescribeInstanceBackups](https://intl.cloud.tencent.com/document/product/239/20011?from_cn_redirect=1) API.
     */
    public $BackupId;

    /**
     * @var boolean Whether the clone instance supports password-free access. Valid values: <ul><li>`true` (Yes)</li><li>`false` (No. When SSL or public network is enabled). Default value: `false`.</li></ul>
     */
    public $NoAuth;

    /**
     * @var string The VPC ID of the clone instance. If this parameter is not passed in, the classic network will be selected by default.
     */
    public $VpcId;

    /**
     * @var string The VPC subnet ID to which the clone instance belongs, which is not required for the classic network.
     */
    public $SubnetId;

    /**
     * @var string Name of the clone instance. <br>Enter up to 60 letters, digits, hyphens, and underscores.</br>
     */
    public $InstanceName;

    /**
     * @var string The access password of the clone instance. <ul><li>When the input parameter <b>NoAuth</b> is <b>true</b>, this parameter is not required. </li><li>When the instance is Redis 2.8, 4.0, or 5.0, the password must contain 8–30 characters in at least two of the following types: lowercase letters, uppercase letters, digits, and special characters `()`~!@#$%^&*-+=_|{}[]:;<>,.?/` and cannot start with `/`.</li><li>When the instance is CKV 3.2, the password must and can only contain 8–30 letters and digits.</li></ul>
     */
    public $Password;

    /**
     * @var integer The auto-renewal flag. Valid values <ul><li>`0`: Manual renewal (default). </li><li>`1`: Auto-renewal. </li><li>`2`: Not auto-renewal (set by user).</ul>
     */
    public $AutoRenew;

    /**
     * @var integer Customized port. Valid range: 1024-65535. Default value: `6379`.
     */
    public $VPort;

    /**
     * @var array Node information of an instance. <ul><li>Currently supported type and AZ information of a node to be configured (master node or replica node) For more information, see [RedisNodeInfo](https://intl.cloud.tencent.com/document/product/239/20022?from_cn_redirect=1#RedisNodeInfo).</li><li>This parameter is not required for single-AZ deployment.</li></ul>
     */
    public $NodeSet;

    /**
     * @var integer Project ID. Log in to the [Redis console](https://console.cloud.tencent.com/redis#/), and find the project ID in <b>Account Center</b> > <b>Project Management</b> in the top-right corner.
     */
    public $ProjectId;

    /**
     * @var array Tag to be bound for the clone instance
     */
    public $ResourceTags;

    /**
     * @var string The parameter template ID associated with the clone instance
- If this parameter is not configured, the system will automatically adapt the corresponding default template based on the selected compatible version and architecture.
- You can query the parameter template list of the instance to get the template ID through the [DescribeParamTemplates](https://intl.cloud.tencent.com/document/product/239/58750?from_cn_redirect=1) API.
     */
    public $TemplateId;

    /**
     * @var array The alarm policy ID of the instance to be cloned. Log in to the [Tencent Cloud Observable Platform console](https://console.cloud.tencent.com/monitor/alarm2/policy), and get the policy ID in <b>Alarm Management</b> > <b>Policy Management</b>.
     */
    public $AlarmPolicyList;

    /**
     * @var string Time to restore data for cloning.
Only instances with second-level backup enabled are supported.

     */
    public $CloneTime;

    /**
     * @param string $InstanceId The ID of the source instance to be cloned, such as "crs-xjhsdj****". Log in to the [Redis console](https://console.cloud.tencent.com/redis) and copy the instance ID in the instance list.
     * @param integer $GoodsNum The number of clone instances at a time
- The maximum number of monthly subscribed instances is 100 for each purchase.
- The maximum number of pay-as-you-go instances is 30 for each purchase.
     * @param integer $ZoneId ID of the AZ where the clone instance resides. For more information, see [Regions and AZs](https://intl.cloud.tencent.com/document/product/239/4106?from_cn_redirect=1).
     * @param integer $BillingMode Billing mode. Valid values: <ul><li>`0` (Pay-as-you-go) </li><li>`1` (Monthly subscription) </li></ul>
     * @param integer $Period Purchase duration of an instance. <ul><li>Unit: Month</li><li>Valid values: `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `24`, `36`, `48`, `60` (for monthly subscription mode).</li><li> Valid value: `1` (for pay-as-you-go mode).</li></ul>
     * @param array $SecurityGroupIdList Security group ID, which can be obtained on the <b>Security Group</b> page in the console.
     * @param string $BackupId Backup ID of the clone instance, which can be obtained through the [DescribeInstanceBackups](https://intl.cloud.tencent.com/document/product/239/20011?from_cn_redirect=1) API.
     * @param boolean $NoAuth Whether the clone instance supports password-free access. Valid values: <ul><li>`true` (Yes)</li><li>`false` (No. When SSL or public network is enabled). Default value: `false`.</li></ul>
     * @param string $VpcId The VPC ID of the clone instance. If this parameter is not passed in, the classic network will be selected by default.
     * @param string $SubnetId The VPC subnet ID to which the clone instance belongs, which is not required for the classic network.
     * @param string $InstanceName Name of the clone instance. <br>Enter up to 60 letters, digits, hyphens, and underscores.</br>
     * @param string $Password The access password of the clone instance. <ul><li>When the input parameter <b>NoAuth</b> is <b>true</b>, this parameter is not required. </li><li>When the instance is Redis 2.8, 4.0, or 5.0, the password must contain 8–30 characters in at least two of the following types: lowercase letters, uppercase letters, digits, and special characters `()`~!@#$%^&*-+=_|{}[]:;<>,.?/` and cannot start with `/`.</li><li>When the instance is CKV 3.2, the password must and can only contain 8–30 letters and digits.</li></ul>
     * @param integer $AutoRenew The auto-renewal flag. Valid values <ul><li>`0`: Manual renewal (default). </li><li>`1`: Auto-renewal. </li><li>`2`: Not auto-renewal (set by user).</ul>
     * @param integer $VPort Customized port. Valid range: 1024-65535. Default value: `6379`.
     * @param array $NodeSet Node information of an instance. <ul><li>Currently supported type and AZ information of a node to be configured (master node or replica node) For more information, see [RedisNodeInfo](https://intl.cloud.tencent.com/document/product/239/20022?from_cn_redirect=1#RedisNodeInfo).</li><li>This parameter is not required for single-AZ deployment.</li></ul>
     * @param integer $ProjectId Project ID. Log in to the [Redis console](https://console.cloud.tencent.com/redis#/), and find the project ID in <b>Account Center</b> > <b>Project Management</b> in the top-right corner.
     * @param array $ResourceTags Tag to be bound for the clone instance
     * @param string $TemplateId The parameter template ID associated with the clone instance
- If this parameter is not configured, the system will automatically adapt the corresponding default template based on the selected compatible version and architecture.
- You can query the parameter template list of the instance to get the template ID through the [DescribeParamTemplates](https://intl.cloud.tencent.com/document/product/239/58750?from_cn_redirect=1) API.
     * @param array $AlarmPolicyList The alarm policy ID of the instance to be cloned. Log in to the [Tencent Cloud Observable Platform console](https://console.cloud.tencent.com/monitor/alarm2/policy), and get the policy ID in <b>Alarm Management</b> > <b>Policy Management</b>.
     * @param string $CloneTime Time to restore data for cloning.
Only instances with second-level backup enabled are supported.
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
    }
}
