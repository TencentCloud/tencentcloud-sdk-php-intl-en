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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GPU parameters, including GPU driver version, CDUA version, cuDNN version and whether to enable MIG.
 *
 * @method boolean getMIGEnable() Obtain Whether to enable MIG
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setMIGEnable(boolean $MIGEnable) Set Whether to enable MIG
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method DriverVersion getDriver() Obtain GPU driver version
 * @method void setDriver(DriverVersion $Driver) Set GPU driver version
 * @method DriverVersion getCUDA() Obtain CUDA version
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCUDA(DriverVersion $CUDA) Set CUDA version
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method CUDNN getCUDNN() Obtain cuDNN version
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCUDNN(CUDNN $CUDNN) Set cuDNN version
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method CustomDriver getCustomDriver() Obtain Custom GPU driver
Note: This field may return `null`, indicating that no valid values can be obtained.
 * @method void setCustomDriver(CustomDriver $CustomDriver) Set Custom GPU driver
Note: This field may return `null`, indicating that no valid values can be obtained.
 */
class GPUArgs extends AbstractModel
{
    /**
     * @var boolean Whether to enable MIG
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $MIGEnable;

    /**
     * @var DriverVersion GPU driver version
     */
    public $Driver;

    /**
     * @var DriverVersion CUDA version
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CUDA;

    /**
     * @var CUDNN cuDNN version
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CUDNN;

    /**
     * @var CustomDriver Custom GPU driver
Note: This field may return `null`, indicating that no valid values can be obtained.
     */
    public $CustomDriver;

    /**
     * @param boolean $MIGEnable Whether to enable MIG
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param DriverVersion $Driver GPU driver version
     * @param DriverVersion $CUDA CUDA version
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param CUDNN $CUDNN cuDNN version
Note: This field may return `null`, indicating that no valid values can be obtained.
     * @param CustomDriver $CustomDriver Custom GPU driver
Note: This field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("MIGEnable",$param) and $param["MIGEnable"] !== null) {
            $this->MIGEnable = $param["MIGEnable"];
        }

        if (array_key_exists("Driver",$param) and $param["Driver"] !== null) {
            $this->Driver = new DriverVersion();
            $this->Driver->deserialize($param["Driver"]);
        }

        if (array_key_exists("CUDA",$param) and $param["CUDA"] !== null) {
            $this->CUDA = new DriverVersion();
            $this->CUDA->deserialize($param["CUDA"]);
        }

        if (array_key_exists("CUDNN",$param) and $param["CUDNN"] !== null) {
            $this->CUDNN = new CUDNN();
            $this->CUDNN->deserialize($param["CUDNN"]);
        }

        if (array_key_exists("CustomDriver",$param) and $param["CustomDriver"] !== null) {
            $this->CustomDriver = new CustomDriver();
            $this->CustomDriver->deserialize($param["CustomDriver"]);
        }
    }
}
