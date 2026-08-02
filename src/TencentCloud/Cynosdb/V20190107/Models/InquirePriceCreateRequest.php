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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceCreate request structure.
 *
 * @method string getZone() Obtain <p>Availability zone, each region provision best practice</p>
 * @method void setZone(string $Zone) Set <p>Availability zone, each region provision best practice</p>
 * @method integer getGoodsNum() Obtain <p>Number of compute nodes to purchase</p>
 * @method void setGoodsNum(integer $GoodsNum) Set <p>Number of compute nodes to purchase</p>
 * @method string getInstancePayMode() Obtain <p>Instance purchase type, optional values: PREPAID, POSTPAID, SERVERLESS</p>
 * @method void setInstancePayMode(string $InstancePayMode) Set <p>Instance purchase type, optional values: PREPAID, POSTPAID, SERVERLESS</p>
 * @method string getStoragePayMode() Obtain <p>Storage purchase type, optional values: PREPAID, POSTPAID</p>
 * @method void setStoragePayMode(string $StoragePayMode) Set <p>Storage purchase type, optional values: PREPAID, POSTPAID</p>
 * @method string getDeviceType() Obtain <p>Instance device type. Supported values are as follows:</p><ul><li>common: refers to universal type</li><li>exclusive: refers to dedicated type</li></ul>
 * @method void setDeviceType(string $DeviceType) Set <p>Instance device type. Supported values are as follows:</p><ul><li>common: refers to universal type</li><li>exclusive: refers to dedicated type</li></ul>
 * @method integer getCpu() Obtain <p>Number of CPU cores. Required for PREPAID and POSTPAID instance types.</p>
 * @method void setCpu(integer $Cpu) Set <p>Number of CPU cores. Required for PREPAID and POSTPAID instance types.</p>
 * @method integer getMemory() Obtain <p>Memory size in GB. Required for PREPAID and POSTPAID instance types.</p>
 * @method void setMemory(integer $Memory) Set <p>Memory size in GB. Required for PREPAID and POSTPAID instance types.</p>
 * @method float getCcu() Obtain <p>Ccu size. Required for the serverless type.</p>
 * @method void setCcu(float $Ccu) Set <p>Ccu size. Required for the serverless type.</p>
 * @method integer getStorageLimit() Obtain <p>Storage size. Required for PREPAID storage type</p>
 * @method void setStorageLimit(integer $StorageLimit) Set <p>Storage size. Required for PREPAID storage type</p>
 * @method integer getTimeSpan() Obtain <p>Purchase period, required for PREPAID purchase type</p>
 * @method void setTimeSpan(integer $TimeSpan) Set <p>Purchase period, required for PREPAID purchase type</p>
 * @method string getTimeUnit() Obtain <p>Duration unit. Optional values: m, d. Required for PREPAID purchase type.</p>
 * @method void setTimeUnit(string $TimeUnit) Set <p>Duration unit. Optional values: m, d. Required for PREPAID purchase type.</p>
 * @method string getStorageVersion() Obtain <p>Storage architecture type. Enumeration value: 1.0/2.0 Default value: 1.0</p>
 * @method void setStorageVersion(string $StorageVersion) Set <p>Storage architecture type. Enumeration value: 1.0/2.0 Default value: 1.0</p>
 * @method boolean getIsMultiAz() Obtain <p>Whether storage spans AZs. Valid for storage architecture 2.0</p>
 * @method void setIsMultiAz(boolean $IsMultiAz) Set <p>Whether storage spans AZs. Valid for storage architecture 2.0</p>
 */
class InquirePriceCreateRequest extends AbstractModel
{
    /**
     * @var string <p>Availability zone, each region provision best practice</p>
     */
    public $Zone;

    /**
     * @var integer <p>Number of compute nodes to purchase</p>
     */
    public $GoodsNum;

    /**
     * @var string <p>Instance purchase type, optional values: PREPAID, POSTPAID, SERVERLESS</p>
     */
    public $InstancePayMode;

    /**
     * @var string <p>Storage purchase type, optional values: PREPAID, POSTPAID</p>
     */
    public $StoragePayMode;

    /**
     * @var string <p>Instance device type. Supported values are as follows:</p><ul><li>common: refers to universal type</li><li>exclusive: refers to dedicated type</li></ul>
     */
    public $DeviceType;

    /**
     * @var integer <p>Number of CPU cores. Required for PREPAID and POSTPAID instance types.</p>
     */
    public $Cpu;

    /**
     * @var integer <p>Memory size in GB. Required for PREPAID and POSTPAID instance types.</p>
     */
    public $Memory;

    /**
     * @var float <p>Ccu size. Required for the serverless type.</p>
     */
    public $Ccu;

    /**
     * @var integer <p>Storage size. Required for PREPAID storage type</p>
     */
    public $StorageLimit;

    /**
     * @var integer <p>Purchase period, required for PREPAID purchase type</p>
     */
    public $TimeSpan;

    /**
     * @var string <p>Duration unit. Optional values: m, d. Required for PREPAID purchase type.</p>
     */
    public $TimeUnit;

    /**
     * @var string <p>Storage architecture type. Enumeration value: 1.0/2.0 Default value: 1.0</p>
     */
    public $StorageVersion;

    /**
     * @var boolean <p>Whether storage spans AZs. Valid for storage architecture 2.0</p>
     */
    public $IsMultiAz;

    /**
     * @param string $Zone <p>Availability zone, each region provision best practice</p>
     * @param integer $GoodsNum <p>Number of compute nodes to purchase</p>
     * @param string $InstancePayMode <p>Instance purchase type, optional values: PREPAID, POSTPAID, SERVERLESS</p>
     * @param string $StoragePayMode <p>Storage purchase type, optional values: PREPAID, POSTPAID</p>
     * @param string $DeviceType <p>Instance device type. Supported values are as follows:</p><ul><li>common: refers to universal type</li><li>exclusive: refers to dedicated type</li></ul>
     * @param integer $Cpu <p>Number of CPU cores. Required for PREPAID and POSTPAID instance types.</p>
     * @param integer $Memory <p>Memory size in GB. Required for PREPAID and POSTPAID instance types.</p>
     * @param float $Ccu <p>Ccu size. Required for the serverless type.</p>
     * @param integer $StorageLimit <p>Storage size. Required for PREPAID storage type</p>
     * @param integer $TimeSpan <p>Purchase period, required for PREPAID purchase type</p>
     * @param string $TimeUnit <p>Duration unit. Optional values: m, d. Required for PREPAID purchase type.</p>
     * @param string $StorageVersion <p>Storage architecture type. Enumeration value: 1.0/2.0 Default value: 1.0</p>
     * @param boolean $IsMultiAz <p>Whether storage spans AZs. Valid for storage architecture 2.0</p>
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

        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
        }

        if (array_key_exists("InstancePayMode",$param) and $param["InstancePayMode"] !== null) {
            $this->InstancePayMode = $param["InstancePayMode"];
        }

        if (array_key_exists("StoragePayMode",$param) and $param["StoragePayMode"] !== null) {
            $this->StoragePayMode = $param["StoragePayMode"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Ccu",$param) and $param["Ccu"] !== null) {
            $this->Ccu = $param["Ccu"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("TimeUnit",$param) and $param["TimeUnit"] !== null) {
            $this->TimeUnit = $param["TimeUnit"];
        }

        if (array_key_exists("StorageVersion",$param) and $param["StorageVersion"] !== null) {
            $this->StorageVersion = $param["StorageVersion"];
        }

        if (array_key_exists("IsMultiAz",$param) and $param["IsMultiAz"] !== null) {
            $this->IsMultiAz = $param["IsMultiAz"];
        }
    }
}
