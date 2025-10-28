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
 * Product specification.
 *
 * @method integer getGoodsNum() Obtain Number of products
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setGoodsNum(integer $GoodsNum) Set Number of products
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getCpu() Obtain Number of CPU cores. required for PREPAID and POSTPAID instance types.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCpu(integer $Cpu) Set Number of CPU cores. required for PREPAID and POSTPAID instance types.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getMemory() Obtain Memory size in gb. required for PREPAID and POSTPAID instance types.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setMemory(integer $Memory) Set Memory size in gb. required for PREPAID and POSTPAID instance types.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method float getCcu() Obtain Ccu size. required for serverless type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCcu(float $Ccu) Set Ccu size. required for serverless type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getStorageLimit() Obtain Storage size. required for PREPAID storage type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setStorageLimit(integer $StorageLimit) Set Storage size. required for PREPAID storage type.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getTimeSpan() Obtain Purchase duration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimeSpan(integer $TimeSpan) Set Purchase duration.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getTimeUnit() Obtain Duration unit.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setTimeUnit(string $TimeUnit) Set Duration unit.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDeviceType() Obtain Machine type.
 * @method void setDeviceType(string $DeviceType) Set Machine type.
 */
class GoodsSpec extends AbstractModel
{
    /**
     * @var integer Number of products
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $GoodsNum;

    /**
     * @var integer Number of CPU cores. required for PREPAID and POSTPAID instance types.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Cpu;

    /**
     * @var integer Memory size in gb. required for PREPAID and POSTPAID instance types.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Memory;

    /**
     * @var float Ccu size. required for serverless type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Ccu;

    /**
     * @var integer Storage size. required for PREPAID storage type.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $StorageLimit;

    /**
     * @var integer Purchase duration.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimeSpan;

    /**
     * @var string Duration unit.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $TimeUnit;

    /**
     * @var string Machine type.
     */
    public $DeviceType;

    /**
     * @param integer $GoodsNum Number of products
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Cpu Number of CPU cores. required for PREPAID and POSTPAID instance types.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $Memory Memory size in gb. required for PREPAID and POSTPAID instance types.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param float $Ccu Ccu size. required for serverless type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $StorageLimit Storage size. required for PREPAID storage type.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $TimeSpan Purchase duration.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $TimeUnit Duration unit.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DeviceType Machine type.
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
        if (array_key_exists("GoodsNum",$param) and $param["GoodsNum"] !== null) {
            $this->GoodsNum = $param["GoodsNum"];
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

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }
    }
}
