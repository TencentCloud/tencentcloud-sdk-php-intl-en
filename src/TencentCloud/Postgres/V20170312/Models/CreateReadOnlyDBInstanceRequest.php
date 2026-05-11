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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateReadOnlyDBInstance request structure.
 *
 * @method string getZone() Obtain <p>Primary availability zone of the instance, such as: ap-guangzhou-3.<br>The availability zone can be obtained from the returned Zone field of the <a href="https://www.tencentcloud.com/document/api/409/16769?from_cn_redirect=1">DescribeZones</a> API.</p>
 * @method void setZone(string $Zone) Set <p>Primary availability zone of the instance, such as: ap-guangzhou-3.<br>The availability zone can be obtained from the returned Zone field of the <a href="https://www.tencentcloud.com/document/api/409/16769?from_cn_redirect=1">DescribeZones</a> API.</p>
 * @method string getMasterDBInstanceId() Obtain <p>Primary instance ID of the read-only instance, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1">DescribeDBInstances</a> API.</p>
 * @method void setMasterDBInstanceId(string $MasterDBInstanceId) Set <p>Primary instance ID of the read-only instance, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1">DescribeDBInstances</a> API.</p>
 * @method string getSpecCode() Obtain <p>Purchasable specification code. The value of this parameter can be obtained from the returned SpecCode field of the <a href="https://www.tencentcloud.com/document/api/409/89019?from_cn_redirect=1">DescribeClasses</a> API.</p>
 * @method void setSpecCode(string $SpecCode) Set <p>Purchasable specification code. The value of this parameter can be obtained from the returned SpecCode field of the <a href="https://www.tencentcloud.com/document/api/409/89019?from_cn_redirect=1">DescribeClasses</a> API.</p>
 * @method integer getStorage() Obtain <p>Instance disk capacity, in GB. The value for this parameter must be set in increments of 10.</p>
 * @method void setStorage(integer $Storage) Set <p>Instance disk capacity, in GB. The value for this parameter must be set in increments of 10.</p>
 * @method integer getInstanceCount() Obtain <p>Number of instances to purchase. Value range: [1-6]. The maximum allowed number is 6.</p>
 * @method void setInstanceCount(integer $InstanceCount) Set <p>Number of instances to purchase. Value range: [1-6]. The maximum allowed number is 6.</p>
 * @method integer getPeriod() Obtain <p>Purchase duration, in months.</p><li>Prepaid: supports 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36.</li><li>Postpaid: supports only 1.</li>
 * @method void setPeriod(integer $Period) Set <p>Purchase duration, in months.</p><li>Prepaid: supports 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36.</li><li>Postpaid: supports only 1.</li>
 * @method string getVpcId() Obtain <p>VPC ID, such as vpc-xxxxxxxx (this parameter is required). A valid VPC ID can be queried by logging in to the console. You can also call the <a href="https://www.tencentcloud.com/document/api/215/1372?from_cn_redirect=1">DescribeVpcEx</a> API to obtain it from the unVpcId field in the return value.</p>
 * @method void setVpcId(string $VpcId) Set <p>VPC ID, such as vpc-xxxxxxxx (this parameter is required). A valid VPC ID can be queried by logging in to the console. You can also call the <a href="https://www.tencentcloud.com/document/api/215/1372?from_cn_redirect=1">DescribeVpcEx</a> API to obtain it from the unVpcId field in the return value.</p>
 * @method string getSubnetId() Obtain <p>VPC subnet ID, such as subnet-xxxxxxxx (this parameter is required). A valid VPC subnet ID can be queried by logging in to the console. You can also call the <a href="https://www.tencentcloud.com/document/api/215/15784?from_cn_redirect=1">DescribeSubnets</a> API and obtain it from the unSubnetId field in the return value.</p>
 * @method void setSubnetId(string $SubnetId) Set <p>VPC subnet ID, such as subnet-xxxxxxxx (this parameter is required). A valid VPC subnet ID can be queried by logging in to the console. You can also call the <a href="https://www.tencentcloud.com/document/api/215/15784?from_cn_redirect=1">DescribeSubnets</a> API and obtain it from the unSubnetId field in the return value.</p>
 * @method string getInstanceChargeType() Obtain <p>Instance billing type. Valid values:</p><li>PREPAID: prepaid (yearly/monthly subscription).</li><li>POSTPAID_BY_HOUR: postpaid (pay-as-you-go).</li>Default value: PREPAID. If the primary instance is postpaid, the read-only instance must also be postpaid.
 * @method void setInstanceChargeType(string $InstanceChargeType) Set <p>Instance billing type. Valid values:</p><li>PREPAID: prepaid (yearly/monthly subscription).</li><li>POSTPAID_BY_HOUR: postpaid (pay-as-you-go).</li>Default value: PREPAID. If the primary instance is postpaid, the read-only instance must also be postpaid.
 * @method integer getAutoVoucher() Obtain <p>Indicates whether to use vouchers automatically:</p><li>0: No.</li><li>1: Yes.</li>Default value: 0.
 * @method void setAutoVoucher(integer $AutoVoucher) Set <p>Indicates whether to use vouchers automatically:</p><li>0: No.</li><li>1: Yes.</li>Default value: 0.
 * @method array getVoucherIds() Obtain <p>Voucher ID list. Only one voucher can be specified.</p>
 * @method void setVoucherIds(array $VoucherIds) Set <p>Voucher ID list. Only one voucher can be specified.</p>
 * @method integer getAutoRenewFlag() Obtain <p>Renewal flag:</p><li>0: manual renewal.</li><li>1: auto-renewal.</li>Default value: 0.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set <p>Renewal flag:</p><li>0: manual renewal.</li><li>1: auto-renewal.</li>Default value: 0.
 * @method integer getProjectId() Obtain <p>Project ID. The default value is 0, which means it belongs to the default project.</p>
 * @method void setProjectId(integer $ProjectId) Set <p>Project ID. The default value is 0, which means it belongs to the default project.</p>
 * @method integer getActivityId() Obtain <p>Discount offer ID.</p>
 * @method void setActivityId(integer $ActivityId) Set <p>Discount offer ID.</p>
 * @method string getReadOnlyGroupId() Obtain <p>Read-only group ID.</p>
 * @method void setReadOnlyGroupId(string $ReadOnlyGroupId) Set <p>Read-only group ID.</p>
 * @method Tag getTagList() Obtain <p>Tags to be bound to the instance. This is empty by default. Tags can be obtained from the returned Tags field of the <a href="https://www.tencentcloud.com/document/api/651/35316?from_cn_redirect=1">DescribeTags</a> API.</p>
 * @method void setTagList(Tag $TagList) Set <p>Tags to be bound to the instance. This is empty by default. Tags can be obtained from the returned Tags field of the <a href="https://www.tencentcloud.com/document/api/651/35316?from_cn_redirect=1">DescribeTags</a> API.</p>
 * @method array getSecurityGroupIds() Obtain <p>Security group to which the instance belongs. The value of this parameter can be obtained from the returned sgId field of the <a href="https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a> API. If this parameter is not specified, the default security group is bound.</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set <p>Security group to which the instance belongs. The value of this parameter can be obtained from the returned sgId field of the <a href="https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a> API. If this parameter is not specified, the default security group is bound.</p>
 * @method integer getNeedSupportIpv6() Obtain <p>Indicates whether to support IPv6:</p><li>0: No.</li><li>1: Yes.</li>Default value: 0.
 * @method void setNeedSupportIpv6(integer $NeedSupportIpv6) Set <p>Indicates whether to support IPv6:</p><li>0: No.</li><li>1: Yes.</li>Default value: 0.
 * @method string getName() Obtain <p>Instance name. The name can contain only Chinese characters, letters, digits, underscores (&quot;_&quot;), and hyphens (&quot;-&quot;), with a length of less than 60.</p>
 * @method void setName(string $Name) Set <p>Instance name. The name can contain only Chinese characters, letters, digits, underscores (&quot;_&quot;), and hyphens (&quot;-&quot;), with a length of less than 60.</p>
 * @method string getDBVersion() Obtain <p>Not required anymore. The kernel version is consistent with that of the primary instance.</p>
 * @method void setDBVersion(string $DBVersion) Set <p>Not required anymore. The kernel version is consistent with that of the primary instance.</p>
 * @method string getDedicatedClusterId() Obtain <p>Dedicated cluster ID.</p>
 * @method void setDedicatedClusterId(string $DedicatedClusterId) Set <p>Dedicated cluster ID.</p>
 * @method boolean getDeletionProtection() Obtain <p>Indicates whether to enable deletion protection for the instance: true - enables deletion protection. false - disables deletion protection.</p>
 * @method void setDeletionProtection(boolean $DeletionProtection) Set <p>Indicates whether to enable deletion protection for the instance: true - enables deletion protection. false - disables deletion protection.</p>
 */
class CreateReadOnlyDBInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>Primary availability zone of the instance, such as: ap-guangzhou-3.<br>The availability zone can be obtained from the returned Zone field of the <a href="https://www.tencentcloud.com/document/api/409/16769?from_cn_redirect=1">DescribeZones</a> API.</p>
     */
    public $Zone;

    /**
     * @var string <p>Primary instance ID of the read-only instance, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1">DescribeDBInstances</a> API.</p>
     */
    public $MasterDBInstanceId;

    /**
     * @var string <p>Purchasable specification code. The value of this parameter can be obtained from the returned SpecCode field of the <a href="https://www.tencentcloud.com/document/api/409/89019?from_cn_redirect=1">DescribeClasses</a> API.</p>
     */
    public $SpecCode;

    /**
     * @var integer <p>Instance disk capacity, in GB. The value for this parameter must be set in increments of 10.</p>
     */
    public $Storage;

    /**
     * @var integer <p>Number of instances to purchase. Value range: [1-6]. The maximum allowed number is 6.</p>
     */
    public $InstanceCount;

    /**
     * @var integer <p>Purchase duration, in months.</p><li>Prepaid: supports 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36.</li><li>Postpaid: supports only 1.</li>
     */
    public $Period;

    /**
     * @var string <p>VPC ID, such as vpc-xxxxxxxx (this parameter is required). A valid VPC ID can be queried by logging in to the console. You can also call the <a href="https://www.tencentcloud.com/document/api/215/1372?from_cn_redirect=1">DescribeVpcEx</a> API to obtain it from the unVpcId field in the return value.</p>
     */
    public $VpcId;

    /**
     * @var string <p>VPC subnet ID, such as subnet-xxxxxxxx (this parameter is required). A valid VPC subnet ID can be queried by logging in to the console. You can also call the <a href="https://www.tencentcloud.com/document/api/215/15784?from_cn_redirect=1">DescribeSubnets</a> API and obtain it from the unSubnetId field in the return value.</p>
     */
    public $SubnetId;

    /**
     * @var string <p>Instance billing type. Valid values:</p><li>PREPAID: prepaid (yearly/monthly subscription).</li><li>POSTPAID_BY_HOUR: postpaid (pay-as-you-go).</li>Default value: PREPAID. If the primary instance is postpaid, the read-only instance must also be postpaid.
     */
    public $InstanceChargeType;

    /**
     * @var integer <p>Indicates whether to use vouchers automatically:</p><li>0: No.</li><li>1: Yes.</li>Default value: 0.
     */
    public $AutoVoucher;

    /**
     * @var array <p>Voucher ID list. Only one voucher can be specified.</p>
     */
    public $VoucherIds;

    /**
     * @var integer <p>Renewal flag:</p><li>0: manual renewal.</li><li>1: auto-renewal.</li>Default value: 0.
     */
    public $AutoRenewFlag;

    /**
     * @var integer <p>Project ID. The default value is 0, which means it belongs to the default project.</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>Discount offer ID.</p>
     */
    public $ActivityId;

    /**
     * @var string <p>Read-only group ID.</p>
     */
    public $ReadOnlyGroupId;

    /**
     * @var Tag <p>Tags to be bound to the instance. This is empty by default. Tags can be obtained from the returned Tags field of the <a href="https://www.tencentcloud.com/document/api/651/35316?from_cn_redirect=1">DescribeTags</a> API.</p>
     */
    public $TagList;

    /**
     * @var array <p>Security group to which the instance belongs. The value of this parameter can be obtained from the returned sgId field of the <a href="https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a> API. If this parameter is not specified, the default security group is bound.</p>
     */
    public $SecurityGroupIds;

    /**
     * @var integer <p>Indicates whether to support IPv6:</p><li>0: No.</li><li>1: Yes.</li>Default value: 0.
     */
    public $NeedSupportIpv6;

    /**
     * @var string <p>Instance name. The name can contain only Chinese characters, letters, digits, underscores (&quot;_&quot;), and hyphens (&quot;-&quot;), with a length of less than 60.</p>
     */
    public $Name;

    /**
     * @var string <p>Not required anymore. The kernel version is consistent with that of the primary instance.</p>
     * @deprecated
     */
    public $DBVersion;

    /**
     * @var string <p>Dedicated cluster ID.</p>
     */
    public $DedicatedClusterId;

    /**
     * @var boolean <p>Indicates whether to enable deletion protection for the instance: true - enables deletion protection. false - disables deletion protection.</p>
     */
    public $DeletionProtection;

    /**
     * @param string $Zone <p>Primary availability zone of the instance, such as: ap-guangzhou-3.<br>The availability zone can be obtained from the returned Zone field of the <a href="https://www.tencentcloud.com/document/api/409/16769?from_cn_redirect=1">DescribeZones</a> API.</p>
     * @param string $MasterDBInstanceId <p>Primary instance ID of the read-only instance, which can be obtained through the <a href="https://www.tencentcloud.com/document/api/409/16773?from_cn_redirect=1">DescribeDBInstances</a> API.</p>
     * @param string $SpecCode <p>Purchasable specification code. The value of this parameter can be obtained from the returned SpecCode field of the <a href="https://www.tencentcloud.com/document/api/409/89019?from_cn_redirect=1">DescribeClasses</a> API.</p>
     * @param integer $Storage <p>Instance disk capacity, in GB. The value for this parameter must be set in increments of 10.</p>
     * @param integer $InstanceCount <p>Number of instances to purchase. Value range: [1-6]. The maximum allowed number is 6.</p>
     * @param integer $Period <p>Purchase duration, in months.</p><li>Prepaid: supports 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 24, and 36.</li><li>Postpaid: supports only 1.</li>
     * @param string $VpcId <p>VPC ID, such as vpc-xxxxxxxx (this parameter is required). A valid VPC ID can be queried by logging in to the console. You can also call the <a href="https://www.tencentcloud.com/document/api/215/1372?from_cn_redirect=1">DescribeVpcEx</a> API to obtain it from the unVpcId field in the return value.</p>
     * @param string $SubnetId <p>VPC subnet ID, such as subnet-xxxxxxxx (this parameter is required). A valid VPC subnet ID can be queried by logging in to the console. You can also call the <a href="https://www.tencentcloud.com/document/api/215/15784?from_cn_redirect=1">DescribeSubnets</a> API and obtain it from the unSubnetId field in the return value.</p>
     * @param string $InstanceChargeType <p>Instance billing type. Valid values:</p><li>PREPAID: prepaid (yearly/monthly subscription).</li><li>POSTPAID_BY_HOUR: postpaid (pay-as-you-go).</li>Default value: PREPAID. If the primary instance is postpaid, the read-only instance must also be postpaid.
     * @param integer $AutoVoucher <p>Indicates whether to use vouchers automatically:</p><li>0: No.</li><li>1: Yes.</li>Default value: 0.
     * @param array $VoucherIds <p>Voucher ID list. Only one voucher can be specified.</p>
     * @param integer $AutoRenewFlag <p>Renewal flag:</p><li>0: manual renewal.</li><li>1: auto-renewal.</li>Default value: 0.
     * @param integer $ProjectId <p>Project ID. The default value is 0, which means it belongs to the default project.</p>
     * @param integer $ActivityId <p>Discount offer ID.</p>
     * @param string $ReadOnlyGroupId <p>Read-only group ID.</p>
     * @param Tag $TagList <p>Tags to be bound to the instance. This is empty by default. Tags can be obtained from the returned Tags field of the <a href="https://www.tencentcloud.com/document/api/651/35316?from_cn_redirect=1">DescribeTags</a> API.</p>
     * @param array $SecurityGroupIds <p>Security group to which the instance belongs. The value of this parameter can be obtained from the returned sgId field of the <a href="https://www.tencentcloud.com/document/api/215/15808?from_cn_redirect=1">DescribeSecurityGroups</a> API. If this parameter is not specified, the default security group is bound.</p>
     * @param integer $NeedSupportIpv6 <p>Indicates whether to support IPv6:</p><li>0: No.</li><li>1: Yes.</li>Default value: 0.
     * @param string $Name <p>Instance name. The name can contain only Chinese characters, letters, digits, underscores (&quot;_&quot;), and hyphens (&quot;-&quot;), with a length of less than 60.</p>
     * @param string $DBVersion <p>Not required anymore. The kernel version is consistent with that of the primary instance.</p>
     * @param string $DedicatedClusterId <p>Dedicated cluster ID.</p>
     * @param boolean $DeletionProtection <p>Indicates whether to enable deletion protection for the instance: true - enables deletion protection. false - disables deletion protection.</p>
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("MasterDBInstanceId",$param) and $param["MasterDBInstanceId"] !== null) {
            $this->MasterDBInstanceId = $param["MasterDBInstanceId"];
        }

        if (array_key_exists("SpecCode",$param) and $param["SpecCode"] !== null) {
            $this->SpecCode = $param["SpecCode"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("ReadOnlyGroupId",$param) and $param["ReadOnlyGroupId"] !== null) {
            $this->ReadOnlyGroupId = $param["ReadOnlyGroupId"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = new Tag();
            $this->TagList->deserialize($param["TagList"]);
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("NeedSupportIpv6",$param) and $param["NeedSupportIpv6"] !== null) {
            $this->NeedSupportIpv6 = $param["NeedSupportIpv6"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }
    }
}
