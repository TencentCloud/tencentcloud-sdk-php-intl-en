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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDBInstance request structure.
 *
 * @method array getZones() Obtain AZs to deploy instance nodes. You can specify up to two AZs (one as primary AZ and another as replica AZ). When the shard specification is 1-primary-2-replica, the primary and one of the replicas are deployed in the primary AZ.
 * @method void setZones(array $Zones) Set AZs to deploy instance nodes. You can specify up to two AZs (one as primary AZ and another as replica AZ). When the shard specification is 1-primary-2-replica, the primary and one of the replicas are deployed in the primary AZ.
 * @method integer getNodeCount() Obtain Number of nodes, which can be obtained 
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
 * @method void setNodeCount(integer $NodeCount) Set Number of nodes, which can be obtained 
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
 * @method integer getMemory() Obtain Memory size in GB, which can be obtained 
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
 * @method void setMemory(integer $Memory) Set Memory size in GB, which can be obtained 
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
 * @method integer getStorage() Obtain Storage capacity in GB. The maximum and minimum storage space can be obtained 
 by querying instance specification through the `DescribeDBInstanceSpecs` API.
 * @method void setStorage(integer $Storage) Set Storage capacity in GB. The maximum and minimum storage space can be obtained 
 by querying instance specification through the `DescribeDBInstanceSpecs` API.
 * @method integer getPeriod() Obtain Validity period in months
 * @method void setPeriod(integer $Period) Set Validity period in months
 * @method integer getCount() Obtain The number of instances to be purchased. Only one instance is queried for price by default.
 * @method void setCount(integer $Count) Set The number of instances to be purchased. Only one instance is queried for price by default.
 * @method boolean getAutoVoucher() Obtain Whether to automatically use vouchers. This option is disabled by default.
 * @method void setAutoVoucher(boolean $AutoVoucher) Set Whether to automatically use vouchers. This option is disabled by default.
 * @method array getVoucherIds() Obtain Voucher ID list. Currently, you can specify only one voucher.
 * @method void setVoucherIds(array $VoucherIds) Set Voucher ID list. Currently, you can specify only one voucher.
 * @method string getVpcId() Obtain VPC ID. If this parameter is not passed in, the instance will be created on the classic network.
 * @method void setVpcId(string $VpcId) Set VPC ID. If this parameter is not passed in, the instance will be created on the classic network.
 * @method string getSubnetId() Obtain VPC subnet ID, which is required when `VpcId` is specified.
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID, which is required when `VpcId` is specified.
 * @method integer getProjectId() Obtain Project ID, which can be obtained through the `DescribeProjects` API. If this parameter is not passed in, the instance will be associated with the default project.
 * @method void setProjectId(integer $ProjectId) Set Project ID, which can be obtained through the `DescribeProjects` API. If this parameter is not passed in, the instance will be associated with the default project.
 * @method string getDbVersionId() Obtain Database engine version. Valid values: `5.7`, `8.0`, `10.0`, `10.1`.
 * @method void setDbVersionId(string $DbVersionId) Set Database engine version. Valid values: `5.7`, `8.0`, `10.0`, `10.1`.
 * @method string getInstanceName() Obtain Name of the instance, which can be customized.
 * @method void setInstanceName(string $InstanceName) Set Name of the instance, which can be customized.
 * @method array getSecurityGroupIds() Obtain List of security group IDs
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set List of security group IDs
 * @method integer getAutoRenewFlag() Obtain Auto-renewal flag. Valid values: `1` (auto-renewal), `2` (no renewal upon expiration).
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Auto-renewal flag. Valid values: `1` (auto-renewal), `2` (no renewal upon expiration).
 * @method integer getIpv6Flag() Obtain Whether IPv6 is supported. Valid values: `0` (unsupported), `1` (supported).
 * @method void setIpv6Flag(integer $Ipv6Flag) Set Whether IPv6 is supported. Valid values: `0` (unsupported), `1` (supported).
 * @method array getResourceTags() Obtain Array of tag key-value pairs
 * @method void setResourceTags(array $ResourceTags) Set Array of tag key-value pairs
 * @method array getInitParams() Obtain List of parameters. Valid values: `character_set_server` (character set; required); `lower_case_table_names` (table name case sensitivity; required; `0`: case-sensitive; `1`: case-insensitive); `innodb_page_size` (InnoDB data page size; default size: 16 KB); `sync_mode` (sync mode; `0`: async; `1`: strong sync; `2`: downgradable strong sync; default value: `2`).
 * @method void setInitParams(array $InitParams) Set List of parameters. Valid values: `character_set_server` (character set; required); `lower_case_table_names` (table name case sensitivity; required; `0`: case-sensitive; `1`: case-insensitive); `innodb_page_size` (InnoDB data page size; default size: 16 KB); `sync_mode` (sync mode; `0`: async; `1`: strong sync; `2`: downgradable strong sync; default value: `2`).
 * @method string getDcnRegion() Obtain DCN source region
 * @method void setDcnRegion(string $DcnRegion) Set DCN source region
 * @method string getDcnInstanceId() Obtain DCN source instance ID
 * @method void setDcnInstanceId(string $DcnInstanceId) Set DCN source instance ID
 */
class CreateDBInstanceRequest extends AbstractModel
{
    /**
     * @var array AZs to deploy instance nodes. You can specify up to two AZs (one as primary AZ and another as replica AZ). When the shard specification is 1-primary-2-replica, the primary and one of the replicas are deployed in the primary AZ.
     */
    public $Zones;

    /**
     * @var integer Number of nodes, which can be obtained 
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
     */
    public $NodeCount;

    /**
     * @var integer Memory size in GB, which can be obtained 
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
     */
    public $Memory;

    /**
     * @var integer Storage capacity in GB. The maximum and minimum storage space can be obtained 
 by querying instance specification through the `DescribeDBInstanceSpecs` API.
     */
    public $Storage;

    /**
     * @var integer Validity period in months
     */
    public $Period;

    /**
     * @var integer The number of instances to be purchased. Only one instance is queried for price by default.
     */
    public $Count;

    /**
     * @var boolean Whether to automatically use vouchers. This option is disabled by default.
     */
    public $AutoVoucher;

    /**
     * @var array Voucher ID list. Currently, you can specify only one voucher.
     */
    public $VoucherIds;

    /**
     * @var string VPC ID. If this parameter is not passed in, the instance will be created on the classic network.
     */
    public $VpcId;

    /**
     * @var string VPC subnet ID, which is required when `VpcId` is specified.
     */
    public $SubnetId;

    /**
     * @var integer Project ID, which can be obtained through the `DescribeProjects` API. If this parameter is not passed in, the instance will be associated with the default project.
     */
    public $ProjectId;

    /**
     * @var string Database engine version. Valid values: `5.7`, `8.0`, `10.0`, `10.1`.
     */
    public $DbVersionId;

    /**
     * @var string Name of the instance, which can be customized.
     */
    public $InstanceName;

    /**
     * @var array List of security group IDs
     */
    public $SecurityGroupIds;

    /**
     * @var integer Auto-renewal flag. Valid values: `1` (auto-renewal), `2` (no renewal upon expiration).
     */
    public $AutoRenewFlag;

    /**
     * @var integer Whether IPv6 is supported. Valid values: `0` (unsupported), `1` (supported).
     */
    public $Ipv6Flag;

    /**
     * @var array Array of tag key-value pairs
     */
    public $ResourceTags;

    /**
     * @var array List of parameters. Valid values: `character_set_server` (character set; required); `lower_case_table_names` (table name case sensitivity; required; `0`: case-sensitive; `1`: case-insensitive); `innodb_page_size` (InnoDB data page size; default size: 16 KB); `sync_mode` (sync mode; `0`: async; `1`: strong sync; `2`: downgradable strong sync; default value: `2`).
     */
    public $InitParams;

    /**
     * @var string DCN source region
     */
    public $DcnRegion;

    /**
     * @var string DCN source instance ID
     */
    public $DcnInstanceId;

    /**
     * @param array $Zones AZs to deploy instance nodes. You can specify up to two AZs (one as primary AZ and another as replica AZ). When the shard specification is 1-primary-2-replica, the primary and one of the replicas are deployed in the primary AZ.
     * @param integer $NodeCount Number of nodes, which can be obtained 
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
     * @param integer $Memory Memory size in GB, which can be obtained 
 by querying the instance specification through the `DescribeDBInstanceSpecs` API.
     * @param integer $Storage Storage capacity in GB. The maximum and minimum storage space can be obtained 
 by querying instance specification through the `DescribeDBInstanceSpecs` API.
     * @param integer $Period Validity period in months
     * @param integer $Count The number of instances to be purchased. Only one instance is queried for price by default.
     * @param boolean $AutoVoucher Whether to automatically use vouchers. This option is disabled by default.
     * @param array $VoucherIds Voucher ID list. Currently, you can specify only one voucher.
     * @param string $VpcId VPC ID. If this parameter is not passed in, the instance will be created on the classic network.
     * @param string $SubnetId VPC subnet ID, which is required when `VpcId` is specified.
     * @param integer $ProjectId Project ID, which can be obtained through the `DescribeProjects` API. If this parameter is not passed in, the instance will be associated with the default project.
     * @param string $DbVersionId Database engine version. Valid values: `5.7`, `8.0`, `10.0`, `10.1`.
     * @param string $InstanceName Name of the instance, which can be customized.
     * @param array $SecurityGroupIds List of security group IDs
     * @param integer $AutoRenewFlag Auto-renewal flag. Valid values: `1` (auto-renewal), `2` (no renewal upon expiration).
     * @param integer $Ipv6Flag Whether IPv6 is supported. Valid values: `0` (unsupported), `1` (supported).
     * @param array $ResourceTags Array of tag key-value pairs
     * @param array $InitParams List of parameters. Valid values: `character_set_server` (character set; required); `lower_case_table_names` (table name case sensitivity; required; `0`: case-sensitive; `1`: case-insensitive); `innodb_page_size` (InnoDB data page size; default size: 16 KB); `sync_mode` (sync mode; `0`: async; `1`: strong sync; `2`: downgradable strong sync; default value: `2`).
     * @param string $DcnRegion DCN source region
     * @param string $DcnInstanceId DCN source instance ID
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
        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
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

        if (array_key_exists("DbVersionId",$param) and $param["DbVersionId"] !== null) {
            $this->DbVersionId = $param["DbVersionId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("Ipv6Flag",$param) and $param["Ipv6Flag"] !== null) {
            $this->Ipv6Flag = $param["Ipv6Flag"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = [];
            foreach ($param["ResourceTags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->ResourceTags, $obj);
            }
        }

        if (array_key_exists("InitParams",$param) and $param["InitParams"] !== null) {
            $this->InitParams = [];
            foreach ($param["InitParams"] as $key => $value){
                $obj = new DBParamValue();
                $obj->deserialize($value);
                array_push($this->InitParams, $obj);
            }
        }

        if (array_key_exists("DcnRegion",$param) and $param["DcnRegion"] !== null) {
            $this->DcnRegion = $param["DcnRegion"];
        }

        if (array_key_exists("DcnInstanceId",$param) and $param["DcnInstanceId"] !== null) {
            $this->DcnInstanceId = $param["DcnInstanceId"];
        }
    }
}
