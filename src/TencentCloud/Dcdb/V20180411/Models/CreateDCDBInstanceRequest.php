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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDCDBInstance request structure.
 *
 * @method array getZones() Obtain AZs to deploy shard nodes. You can specify up to two AZs. When the shard specification is 1-source-2-replica, two of the nodes are deployed in the first AZ.
The current purchasable AZ needs be pulled through `DescribeDCDBSaleInfo` API.
 * @method void setZones(array $Zones) Set AZs to deploy shard nodes. You can specify up to two AZs. When the shard specification is 1-source-2-replica, two of the nodes are deployed in the first AZ.
The current purchasable AZ needs be pulled through `DescribeDCDBSaleInfo` API.
 * @method integer getPeriod() Obtain Validity period in months
 * @method void setPeriod(integer $Period) Set Validity period in months
 * @method integer getShardMemory() Obtain Shard memory size in GB, which can be obtained 
 by querying the instance specification through `DescribeShardSpec` API.
 * @method void setShardMemory(integer $ShardMemory) Set Shard memory size in GB, which can be obtained 
 by querying the instance specification through `DescribeShardSpec` API.
 * @method integer getShardStorage() Obtain Shard storage size in GB, which can be obtained
 by querying the instance specification through `DescribeShardSpec` API.
 * @method void setShardStorage(integer $ShardStorage) Set Shard storage size in GB, which can be obtained
 by querying the instance specification through `DescribeShardSpec` API.
 * @method integer getShardNodeCount() Obtain Number of nodes in a single shard, which can be obtained
 by querying the instance specification through `DescribeShardSpec` API.
 * @method void setShardNodeCount(integer $ShardNodeCount) Set Number of nodes in a single shard, which can be obtained
 by querying the instance specification through `DescribeShardSpec` API.
 * @method integer getShardCount() Obtain The number of shards in the instance. Value range: 2-8. You can increase up to 64 shards by upgrading your instance.
 * @method void setShardCount(integer $ShardCount) Set The number of shards in the instance. Value range: 2-8. You can increase up to 64 shards by upgrading your instance.
 * @method integer getCount() Obtain The number of instances to be purchased
 * @method void setCount(integer $Count) Set The number of instances to be purchased
 * @method integer getProjectId() Obtain Project ID, which can be obtained through the `DescribeProjects` API. If this parameter is not passed in, the instance will be associated with the default project.
 * @method void setProjectId(integer $ProjectId) Set Project ID, which can be obtained through the `DescribeProjects` API. If this parameter is not passed in, the instance will be associated with the default project.
 * @method string getVpcId() Obtain VPC ID. If this parameter is left empty or not passed in, the instance will be created on the classic network.
 * @method void setVpcId(string $VpcId) Set VPC ID. If this parameter is left empty or not passed in, the instance will be created on the classic network.
 * @method string getSubnetId() Obtain VPC subnet ID, which is required when `VpcId` is specified.
 * @method void setSubnetId(string $SubnetId) Set VPC subnet ID, which is required when `VpcId` is specified.
 * @method string getDbVersionId() Obtain Database engine version. Valid values: `5.7`, `8.0`, `10.0`, `10.1`.
 * @method void setDbVersionId(string $DbVersionId) Set Database engine version. Valid values: `5.7`, `8.0`, `10.0`, `10.1`.
 * @method boolean getAutoVoucher() Obtain Whether to automatically use vouchers. This option is disabled by default.
 * @method void setAutoVoucher(boolean $AutoVoucher) Set Whether to automatically use vouchers. This option is disabled by default.
 * @method array getVoucherIds() Obtain Voucher ID list. Currently, you can specify only one voucher.
 * @method void setVoucherIds(array $VoucherIds) Set Voucher ID list. Currently, you can specify only one voucher.
 * @method string getSecurityGroupId() Obtain Security group ID
 * @method void setSecurityGroupId(string $SecurityGroupId) Set Security group ID
 * @method string getInstanceName() Obtain Custom name of the instance
 * @method void setInstanceName(string $InstanceName) Set Custom name of the instance
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
 * @method integer getAutoRenewFlag() Obtain Renewal mode. Valid values: `0` (manual renewal, which is the default mode), `1` (auto-renewal), `2` (manual renewal, which is specified by users).  If no renewal is required, set it to `0`.
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) Set Renewal mode. Valid values: `0` (manual renewal, which is the default mode), `1` (auto-renewal), `2` (manual renewal, which is specified by users).  If no renewal is required, set it to `0`.
 * @method array getSecurityGroupIds() Obtain Security group IDs in array. This parameter is compatible with the old parameter `SecurityGroupId`.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group IDs in array. This parameter is compatible with the old parameter `SecurityGroupId`.
 */
class CreateDCDBInstanceRequest extends AbstractModel
{
    /**
     * @var array AZs to deploy shard nodes. You can specify up to two AZs. When the shard specification is 1-source-2-replica, two of the nodes are deployed in the first AZ.
The current purchasable AZ needs be pulled through `DescribeDCDBSaleInfo` API.
     */
    public $Zones;

    /**
     * @var integer Validity period in months
     */
    public $Period;

    /**
     * @var integer Shard memory size in GB, which can be obtained 
 by querying the instance specification through `DescribeShardSpec` API.
     */
    public $ShardMemory;

    /**
     * @var integer Shard storage size in GB, which can be obtained
 by querying the instance specification through `DescribeShardSpec` API.
     */
    public $ShardStorage;

    /**
     * @var integer Number of nodes in a single shard, which can be obtained
 by querying the instance specification through `DescribeShardSpec` API.
     */
    public $ShardNodeCount;

    /**
     * @var integer The number of shards in the instance. Value range: 2-8. You can increase up to 64 shards by upgrading your instance.
     */
    public $ShardCount;

    /**
     * @var integer The number of instances to be purchased
     */
    public $Count;

    /**
     * @var integer Project ID, which can be obtained through the `DescribeProjects` API. If this parameter is not passed in, the instance will be associated with the default project.
     */
    public $ProjectId;

    /**
     * @var string VPC ID. If this parameter is left empty or not passed in, the instance will be created on the classic network.
     */
    public $VpcId;

    /**
     * @var string VPC subnet ID, which is required when `VpcId` is specified.
     */
    public $SubnetId;

    /**
     * @var string Database engine version. Valid values: `5.7`, `8.0`, `10.0`, `10.1`.
     */
    public $DbVersionId;

    /**
     * @var boolean Whether to automatically use vouchers. This option is disabled by default.
     */
    public $AutoVoucher;

    /**
     * @var array Voucher ID list. Currently, you can specify only one voucher.
     */
    public $VoucherIds;

    /**
     * @var string Security group ID
     */
    public $SecurityGroupId;

    /**
     * @var string Custom name of the instance
     */
    public $InstanceName;

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
     * @var integer Renewal mode. Valid values: `0` (manual renewal, which is the default mode), `1` (auto-renewal), `2` (manual renewal, which is specified by users).  If no renewal is required, set it to `0`.
     */
    public $AutoRenewFlag;

    /**
     * @var array Security group IDs in array. This parameter is compatible with the old parameter `SecurityGroupId`.
     */
    public $SecurityGroupIds;

    /**
     * @param array $Zones AZs to deploy shard nodes. You can specify up to two AZs. When the shard specification is 1-source-2-replica, two of the nodes are deployed in the first AZ.
The current purchasable AZ needs be pulled through `DescribeDCDBSaleInfo` API.
     * @param integer $Period Validity period in months
     * @param integer $ShardMemory Shard memory size in GB, which can be obtained 
 by querying the instance specification through `DescribeShardSpec` API.
     * @param integer $ShardStorage Shard storage size in GB, which can be obtained
 by querying the instance specification through `DescribeShardSpec` API.
     * @param integer $ShardNodeCount Number of nodes in a single shard, which can be obtained
 by querying the instance specification through `DescribeShardSpec` API.
     * @param integer $ShardCount The number of shards in the instance. Value range: 2-8. You can increase up to 64 shards by upgrading your instance.
     * @param integer $Count The number of instances to be purchased
     * @param integer $ProjectId Project ID, which can be obtained through the `DescribeProjects` API. If this parameter is not passed in, the instance will be associated with the default project.
     * @param string $VpcId VPC ID. If this parameter is left empty or not passed in, the instance will be created on the classic network.
     * @param string $SubnetId VPC subnet ID, which is required when `VpcId` is specified.
     * @param string $DbVersionId Database engine version. Valid values: `5.7`, `8.0`, `10.0`, `10.1`.
     * @param boolean $AutoVoucher Whether to automatically use vouchers. This option is disabled by default.
     * @param array $VoucherIds Voucher ID list. Currently, you can specify only one voucher.
     * @param string $SecurityGroupId Security group ID
     * @param string $InstanceName Custom name of the instance
     * @param integer $Ipv6Flag Whether IPv6 is supported. Valid values: `0` (unsupported), `1` (supported).
     * @param array $ResourceTags Array of tag key-value pairs
     * @param array $InitParams List of parameters. Valid values: `character_set_server` (character set; required); `lower_case_table_names` (table name case sensitivity; required; `0`: case-sensitive; `1`: case-insensitive); `innodb_page_size` (InnoDB data page size; default size: 16 KB); `sync_mode` (sync mode; `0`: async; `1`: strong sync; `2`: downgradable strong sync; default value: `2`).
     * @param string $DcnRegion DCN source region
     * @param string $DcnInstanceId DCN source instance ID
     * @param integer $AutoRenewFlag Renewal mode. Valid values: `0` (manual renewal, which is the default mode), `1` (auto-renewal), `2` (manual renewal, which is specified by users).  If no renewal is required, set it to `0`.
     * @param array $SecurityGroupIds Security group IDs in array. This parameter is compatible with the old parameter `SecurityGroupId`.
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

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("ShardMemory",$param) and $param["ShardMemory"] !== null) {
            $this->ShardMemory = $param["ShardMemory"];
        }

        if (array_key_exists("ShardStorage",$param) and $param["ShardStorage"] !== null) {
            $this->ShardStorage = $param["ShardStorage"];
        }

        if (array_key_exists("ShardNodeCount",$param) and $param["ShardNodeCount"] !== null) {
            $this->ShardNodeCount = $param["ShardNodeCount"];
        }

        if (array_key_exists("ShardCount",$param) and $param["ShardCount"] !== null) {
            $this->ShardCount = $param["ShardCount"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DbVersionId",$param) and $param["DbVersionId"] !== null) {
            $this->DbVersionId = $param["DbVersionId"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
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

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
