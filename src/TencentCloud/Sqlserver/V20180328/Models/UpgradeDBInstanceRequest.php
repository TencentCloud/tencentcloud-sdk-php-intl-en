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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeDBInstance request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of mssql-j8kv137v
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of mssql-j8kv137v
 * @method integer getMemory() Obtain Memory size after instance upgrade in GB, which cannot be smaller than the current instance memory size
 * @method void setMemory(integer $Memory) Set Memory size after instance upgrade in GB, which cannot be smaller than the current instance memory size
 * @method integer getStorage() Obtain Storage capacity after instance upgrade in GB, which cannot be smaller than the current instance storage capacity
 * @method void setStorage(integer $Storage) Set Storage capacity after instance upgrade in GB, which cannot be smaller than the current instance storage capacity
 * @method integer getAutoVoucher() Obtain Whether to automatically use vouchers. 0: no, 1: yes. Default value: 0
 * @method void setAutoVoucher(integer $AutoVoucher) Set Whether to automatically use vouchers. 0: no, 1: yes. Default value: 0
 * @method array getVoucherIds() Obtain Voucher ID (currently, only one voucher can be used per order)
 * @method void setVoucherIds(array $VoucherIds) Set Voucher ID (currently, only one voucher can be used per order)
 * @method integer getCpu() Obtain The number of CUP cores after the instance is upgraded.
 * @method void setCpu(integer $Cpu) Set The number of CUP cores after the instance is upgraded.
 * @method string getDBVersion() Obtain Upgrade the SQL Server version. Supported versions include SQL Server 2008 Enterprise (`2008R2`), SQL Server 2012 Enterprise (`2012SP3`), etc. As the purchasable versions are region-specific, you can use the `DescribeProductConfig` API to query the information of purchasable versions in each region. Downgrading is unsupported. If this parameter is left empty, the SQL Server version will not be changed.
 * @method void setDBVersion(string $DBVersion) Set Upgrade the SQL Server version. Supported versions include SQL Server 2008 Enterprise (`2008R2`), SQL Server 2012 Enterprise (`2012SP3`), etc. As the purchasable versions are region-specific, you can use the `DescribeProductConfig` API to query the information of purchasable versions in each region. Downgrading is unsupported. If this parameter is left empty, the SQL Server version will not be changed.
 * @method string getHAType() Obtain Upgrade the high availability architecture from image-based disaster recovery to Always On cluster disaster recovery. This parameter is valid only for instances which support Always On high availability and run SQL Server 2017 or later. Neither downgrading to image-based disaster recovery nor upgrading from cluster disaster recovery to Always On disaster recovery is supported. If this parameter is left empty, the high availability architecture will not be changed.
 * @method void setHAType(string $HAType) Set Upgrade the high availability architecture from image-based disaster recovery to Always On cluster disaster recovery. This parameter is valid only for instances which support Always On high availability and run SQL Server 2017 or later. Neither downgrading to image-based disaster recovery nor upgrading from cluster disaster recovery to Always On disaster recovery is supported. If this parameter is left empty, the high availability architecture will not be changed.
 * @method string getMultiZones() Obtain Change the instance deployment scheme. Valid values: `SameZones` (change to single-AZ deployment, which does not support cross-AZ disaster recovery), `MultiZones` (change to multi-AZ deployment, which supports cross-AZ disaster recovery).
 * @method void setMultiZones(string $MultiZones) Set Change the instance deployment scheme. Valid values: `SameZones` (change to single-AZ deployment, which does not support cross-AZ disaster recovery), `MultiZones` (change to multi-AZ deployment, which supports cross-AZ disaster recovery).
 * @method integer getWaitSwitch() Obtain The time when configuration adjustment task is performed. Valid values: `0` (execute immediately), `1` (execute during maintenance time). Default value: `1`.
 * @method void setWaitSwitch(integer $WaitSwitch) Set The time when configuration adjustment task is performed. Valid values: `0` (execute immediately), `1` (execute during maintenance time). Default value: `1`.
 */
class UpgradeDBInstanceRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of mssql-j8kv137v
     */
    public $InstanceId;

    /**
     * @var integer Memory size after instance upgrade in GB, which cannot be smaller than the current instance memory size
     */
    public $Memory;

    /**
     * @var integer Storage capacity after instance upgrade in GB, which cannot be smaller than the current instance storage capacity
     */
    public $Storage;

    /**
     * @var integer Whether to automatically use vouchers. 0: no, 1: yes. Default value: 0
     */
    public $AutoVoucher;

    /**
     * @var array Voucher ID (currently, only one voucher can be used per order)
     */
    public $VoucherIds;

    /**
     * @var integer The number of CUP cores after the instance is upgraded.
     */
    public $Cpu;

    /**
     * @var string Upgrade the SQL Server version. Supported versions include SQL Server 2008 Enterprise (`2008R2`), SQL Server 2012 Enterprise (`2012SP3`), etc. As the purchasable versions are region-specific, you can use the `DescribeProductConfig` API to query the information of purchasable versions in each region. Downgrading is unsupported. If this parameter is left empty, the SQL Server version will not be changed.
     */
    public $DBVersion;

    /**
     * @var string Upgrade the high availability architecture from image-based disaster recovery to Always On cluster disaster recovery. This parameter is valid only for instances which support Always On high availability and run SQL Server 2017 or later. Neither downgrading to image-based disaster recovery nor upgrading from cluster disaster recovery to Always On disaster recovery is supported. If this parameter is left empty, the high availability architecture will not be changed.
     */
    public $HAType;

    /**
     * @var string Change the instance deployment scheme. Valid values: `SameZones` (change to single-AZ deployment, which does not support cross-AZ disaster recovery), `MultiZones` (change to multi-AZ deployment, which supports cross-AZ disaster recovery).
     */
    public $MultiZones;

    /**
     * @var integer The time when configuration adjustment task is performed. Valid values: `0` (execute immediately), `1` (execute during maintenance time). Default value: `1`.
     */
    public $WaitSwitch;

    /**
     * @param string $InstanceId Instance ID in the format of mssql-j8kv137v
     * @param integer $Memory Memory size after instance upgrade in GB, which cannot be smaller than the current instance memory size
     * @param integer $Storage Storage capacity after instance upgrade in GB, which cannot be smaller than the current instance storage capacity
     * @param integer $AutoVoucher Whether to automatically use vouchers. 0: no, 1: yes. Default value: 0
     * @param array $VoucherIds Voucher ID (currently, only one voucher can be used per order)
     * @param integer $Cpu The number of CUP cores after the instance is upgraded.
     * @param string $DBVersion Upgrade the SQL Server version. Supported versions include SQL Server 2008 Enterprise (`2008R2`), SQL Server 2012 Enterprise (`2012SP3`), etc. As the purchasable versions are region-specific, you can use the `DescribeProductConfig` API to query the information of purchasable versions in each region. Downgrading is unsupported. If this parameter is left empty, the SQL Server version will not be changed.
     * @param string $HAType Upgrade the high availability architecture from image-based disaster recovery to Always On cluster disaster recovery. This parameter is valid only for instances which support Always On high availability and run SQL Server 2017 or later. Neither downgrading to image-based disaster recovery nor upgrading from cluster disaster recovery to Always On disaster recovery is supported. If this parameter is left empty, the high availability architecture will not be changed.
     * @param string $MultiZones Change the instance deployment scheme. Valid values: `SameZones` (change to single-AZ deployment, which does not support cross-AZ disaster recovery), `MultiZones` (change to multi-AZ deployment, which supports cross-AZ disaster recovery).
     * @param integer $WaitSwitch The time when configuration adjustment task is performed. Valid values: `0` (execute immediately), `1` (execute during maintenance time). Default value: `1`.
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

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = $param["Storage"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("VoucherIds",$param) and $param["VoucherIds"] !== null) {
            $this->VoucherIds = $param["VoucherIds"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("HAType",$param) and $param["HAType"] !== null) {
            $this->HAType = $param["HAType"];
        }

        if (array_key_exists("MultiZones",$param) and $param["MultiZones"] !== null) {
            $this->MultiZones = $param["MultiZones"];
        }

        if (array_key_exists("WaitSwitch",$param) and $param["WaitSwitch"] !== null) {
            $this->WaitSwitch = $param["WaitSwitch"];
        }
    }
}
