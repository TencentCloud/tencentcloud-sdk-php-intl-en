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
 * CreateHourDBInstance request structure.
 *
 * @method array getZones() Obtain AZs to deploy instance nodes. You can specify up to two AZs.
 * @method void setZones(array $Zones) Set AZs to deploy instance nodes. You can specify up to two AZs.
 * @method integer getNodeCount() Obtain Number of nodes.
 * @method void setNodeCount(integer $NodeCount) Set Number of nodes.
 * @method integer getMemory() Obtain Memory size in GB.
 * @method void setMemory(integer $Memory) Set Memory size in GB.
 * @method integer getStorage() Obtain Storage size in GB.
 * @method void setStorage(integer $Storage) Set Storage size in GB.
 * @method integer getCount() Obtain Number of instances to purchase.
 * @method void setCount(integer $Count) Set Number of instances to purchase.
 * @method integer getProjectId() Obtain Project ID. If this parameter is not passed in, the default project will be used.
 * @method void setProjectId(integer $ProjectId) Set Project ID. If this parameter is not passed in, the default project will be used.
 * @method string getVpcId() Obtain Unique ID of the network. If this parameter is not passed in, the classic network will be used.
 * @method void setVpcId(string $VpcId) Set Unique ID of the network. If this parameter is not passed in, the classic network will be used.
 * @method string getSubnetId() Obtain Unique ID of the subnet. If `VpcId` is specified, this parameter is required.
 * @method void setSubnetId(string $SubnetId) Set Unique ID of the subnet. If `VpcId` is specified, this parameter is required.
 * @method string getDbVersionId() Obtain Database engine version. Valid values: `5.7`, `8.0`, `10.0`, `10.1`.
 * @method void setDbVersionId(string $DbVersionId) Set Database engine version. Valid values: `5.7`, `8.0`, `10.0`, `10.1`.
 * @method string getInstanceName() Obtain Custom name of the instance.
 * @method void setInstanceName(string $InstanceName) Set Custom name of the instance.
 * @method array getSecurityGroupIds() Obtain Security group ID. If this parameter is not passed in, no security groups will be associated when the instance is created.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set Security group ID. If this parameter is not passed in, no security groups will be associated when the instance is created.
 * @method integer getIpv6Flag() Obtain Whether IPv6 is supported. Valid values: `0` (unsupported), `1` (supported).
 * @method void setIpv6Flag(integer $Ipv6Flag) Set Whether IPv6 is supported. Valid values: `0` (unsupported), `1` (supported).
 * @method array getResourceTags() Obtain Array of tag key-value pairs.
 * @method void setResourceTags(array $ResourceTags) Set Array of tag key-value pairs.
 * @method string getDcnRegion() Obtain If you create a disaster recovery instance, you need to use this parameter to specify the region of the associated primary instance so that the disaster recovery instance can sync data with the primary instance over the Data Communication Network (DCN).
 * @method void setDcnRegion(string $DcnRegion) Set If you create a disaster recovery instance, you need to use this parameter to specify the region of the associated primary instance so that the disaster recovery instance can sync data with the primary instance over the Data Communication Network (DCN).
 * @method string getDcnInstanceId() Obtain If you create a disaster recovery instance, you need to use this parameter to specify the ID of the associated primary instance so that the disaster recovery instance can sync data with the primary instance over the Data Communication Network (DCN).
 * @method void setDcnInstanceId(string $DcnInstanceId) Set If you create a disaster recovery instance, you need to use this parameter to specify the ID of the associated primary instance so that the disaster recovery instance can sync data with the primary instance over the Data Communication Network (DCN).
 * @method array getInitParams() Obtain List of parameters. Valid values: 
`character_set_server` (character set; required); `lower_case_table_names` (table name case sensitivity; required; 0: case-sensitive; 1: case-insensitive);
`innodb_page_size` (innoDB data page size; default size: 16 KB); `sync_mode` (sync mode; 0: async; 1: strong sync; 2: downgradable strong sync; default value: 2).
 * @method void setInitParams(array $InitParams) Set List of parameters. Valid values: 
`character_set_server` (character set; required); `lower_case_table_names` (table name case sensitivity; required; 0: case-sensitive; 1: case-insensitive);
`innodb_page_size` (innoDB data page size; default size: 16 KB); `sync_mode` (sync mode; 0: async; 1: strong sync; 2: downgradable strong sync; default value: 2).
 * @method string getRollbackInstanceId() Obtain ID of the instance to be rolled back, such as “2021-11-22 00:00:00”.
 * @method void setRollbackInstanceId(string $RollbackInstanceId) Set ID of the instance to be rolled back, such as “2021-11-22 00:00:00”.
 * @method string getRollbackTime() Obtain Rollback time.
 * @method void setRollbackTime(string $RollbackTime) Set Rollback time.
 */
class CreateHourDBInstanceRequest extends AbstractModel
{
    /**
     * @var array AZs to deploy instance nodes. You can specify up to two AZs.
     */
    public $Zones;

    /**
     * @var integer Number of nodes.
     */
    public $NodeCount;

    /**
     * @var integer Memory size in GB.
     */
    public $Memory;

    /**
     * @var integer Storage size in GB.
     */
    public $Storage;

    /**
     * @var integer Number of instances to purchase.
     */
    public $Count;

    /**
     * @var integer Project ID. If this parameter is not passed in, the default project will be used.
     */
    public $ProjectId;

    /**
     * @var string Unique ID of the network. If this parameter is not passed in, the classic network will be used.
     */
    public $VpcId;

    /**
     * @var string Unique ID of the subnet. If `VpcId` is specified, this parameter is required.
     */
    public $SubnetId;

    /**
     * @var string Database engine version. Valid values: `5.7`, `8.0`, `10.0`, `10.1`.
     */
    public $DbVersionId;

    /**
     * @var string Custom name of the instance.
     */
    public $InstanceName;

    /**
     * @var array Security group ID. If this parameter is not passed in, no security groups will be associated when the instance is created.
     */
    public $SecurityGroupIds;

    /**
     * @var integer Whether IPv6 is supported. Valid values: `0` (unsupported), `1` (supported).
     */
    public $Ipv6Flag;

    /**
     * @var array Array of tag key-value pairs.
     */
    public $ResourceTags;

    /**
     * @var string If you create a disaster recovery instance, you need to use this parameter to specify the region of the associated primary instance so that the disaster recovery instance can sync data with the primary instance over the Data Communication Network (DCN).
     */
    public $DcnRegion;

    /**
     * @var string If you create a disaster recovery instance, you need to use this parameter to specify the ID of the associated primary instance so that the disaster recovery instance can sync data with the primary instance over the Data Communication Network (DCN).
     */
    public $DcnInstanceId;

    /**
     * @var array List of parameters. Valid values: 
`character_set_server` (character set; required); `lower_case_table_names` (table name case sensitivity; required; 0: case-sensitive; 1: case-insensitive);
`innodb_page_size` (innoDB data page size; default size: 16 KB); `sync_mode` (sync mode; 0: async; 1: strong sync; 2: downgradable strong sync; default value: 2).
     */
    public $InitParams;

    /**
     * @var string ID of the instance to be rolled back, such as “2021-11-22 00:00:00”.
     */
    public $RollbackInstanceId;

    /**
     * @var string Rollback time.
     */
    public $RollbackTime;

    /**
     * @param array $Zones AZs to deploy instance nodes. You can specify up to two AZs.
     * @param integer $NodeCount Number of nodes.
     * @param integer $Memory Memory size in GB.
     * @param integer $Storage Storage size in GB.
     * @param integer $Count Number of instances to purchase.
     * @param integer $ProjectId Project ID. If this parameter is not passed in, the default project will be used.
     * @param string $VpcId Unique ID of the network. If this parameter is not passed in, the classic network will be used.
     * @param string $SubnetId Unique ID of the subnet. If `VpcId` is specified, this parameter is required.
     * @param string $DbVersionId Database engine version. Valid values: `5.7`, `8.0`, `10.0`, `10.1`.
     * @param string $InstanceName Custom name of the instance.
     * @param array $SecurityGroupIds Security group ID. If this parameter is not passed in, no security groups will be associated when the instance is created.
     * @param integer $Ipv6Flag Whether IPv6 is supported. Valid values: `0` (unsupported), `1` (supported).
     * @param array $ResourceTags Array of tag key-value pairs.
     * @param string $DcnRegion If you create a disaster recovery instance, you need to use this parameter to specify the region of the associated primary instance so that the disaster recovery instance can sync data with the primary instance over the Data Communication Network (DCN).
     * @param string $DcnInstanceId If you create a disaster recovery instance, you need to use this parameter to specify the ID of the associated primary instance so that the disaster recovery instance can sync data with the primary instance over the Data Communication Network (DCN).
     * @param array $InitParams List of parameters. Valid values: 
`character_set_server` (character set; required); `lower_case_table_names` (table name case sensitivity; required; 0: case-sensitive; 1: case-insensitive);
`innodb_page_size` (innoDB data page size; default size: 16 KB); `sync_mode` (sync mode; 0: async; 1: strong sync; 2: downgradable strong sync; default value: 2).
     * @param string $RollbackInstanceId ID of the instance to be rolled back, such as “2021-11-22 00:00:00”.
     * @param string $RollbackTime Rollback time.
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
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

        if (array_key_exists("DcnRegion",$param) and $param["DcnRegion"] !== null) {
            $this->DcnRegion = $param["DcnRegion"];
        }

        if (array_key_exists("DcnInstanceId",$param) and $param["DcnInstanceId"] !== null) {
            $this->DcnInstanceId = $param["DcnInstanceId"];
        }

        if (array_key_exists("InitParams",$param) and $param["InitParams"] !== null) {
            $this->InitParams = [];
            foreach ($param["InitParams"] as $key => $value){
                $obj = new DBParamValue();
                $obj->deserialize($value);
                array_push($this->InitParams, $obj);
            }
        }

        if (array_key_exists("RollbackInstanceId",$param) and $param["RollbackInstanceId"] !== null) {
            $this->RollbackInstanceId = $param["RollbackInstanceId"];
        }

        if (array_key_exists("RollbackTime",$param) and $param["RollbackTime"] !== null) {
            $this->RollbackTime = $param["RollbackTime"];
        }
    }
}
