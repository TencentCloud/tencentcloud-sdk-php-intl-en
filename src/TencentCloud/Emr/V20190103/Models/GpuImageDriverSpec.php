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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Image and driver configuration for the GPU specification.
 *
 * @method string getImageId() Obtain <p>Image ID.</p>
 * @method void setImageId(string $ImageId) Set <p>Image ID.</p>
 * @method string getDriverName() Obtain <p>Driver name.</p>
 * @method void setDriverName(string $DriverName) Set <p>Driver name.</p>
 * @method string getDriverVersion() Obtain <p>Driver version.</p>
 * @method void setDriverVersion(string $DriverVersion) Set <p>Driver version.</p>
 * @method string getCUDAName() Obtain <p>CUDA name.</p>
 * @method void setCUDAName(string $CUDAName) Set <p>CUDA name.</p>
 * @method string getCUDAVersion() Obtain <p>CUDA version.</p>
 * @method void setCUDAVersion(string $CUDAVersion) Set <p>CUDA version.</p>
 * @method string getCUDNNName() Obtain <p>CUDNN name.</p>
 * @method void setCUDNNName(string $CUDNNName) Set <p>CUDNN name.</p>
 * @method string getCUDNNVersion() Obtain <p>CUDNN version.</p>
 * @method void setCUDNNVersion(string $CUDNNVersion) Set <p>CUDNN version.</p>
 */
class GpuImageDriverSpec extends AbstractModel
{
    /**
     * @var string <p>Image ID.</p>
     */
    public $ImageId;

    /**
     * @var string <p>Driver name.</p>
     */
    public $DriverName;

    /**
     * @var string <p>Driver version.</p>
     */
    public $DriverVersion;

    /**
     * @var string <p>CUDA name.</p>
     */
    public $CUDAName;

    /**
     * @var string <p>CUDA version.</p>
     */
    public $CUDAVersion;

    /**
     * @var string <p>CUDNN name.</p>
     */
    public $CUDNNName;

    /**
     * @var string <p>CUDNN version.</p>
     */
    public $CUDNNVersion;

    /**
     * @param string $ImageId <p>Image ID.</p>
     * @param string $DriverName <p>Driver name.</p>
     * @param string $DriverVersion <p>Driver version.</p>
     * @param string $CUDAName <p>CUDA name.</p>
     * @param string $CUDAVersion <p>CUDA version.</p>
     * @param string $CUDNNName <p>CUDNN name.</p>
     * @param string $CUDNNVersion <p>CUDNN version.</p>
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
        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("DriverName",$param) and $param["DriverName"] !== null) {
            $this->DriverName = $param["DriverName"];
        }

        if (array_key_exists("DriverVersion",$param) and $param["DriverVersion"] !== null) {
            $this->DriverVersion = $param["DriverVersion"];
        }

        if (array_key_exists("CUDAName",$param) and $param["CUDAName"] !== null) {
            $this->CUDAName = $param["CUDAName"];
        }

        if (array_key_exists("CUDAVersion",$param) and $param["CUDAVersion"] !== null) {
            $this->CUDAVersion = $param["CUDAVersion"];
        }

        if (array_key_exists("CUDNNName",$param) and $param["CUDNNName"] !== null) {
            $this->CUDNNName = $param["CUDNNName"];
        }

        if (array_key_exists("CUDNNVersion",$param) and $param["CUDNNVersion"] !== null) {
            $this->CUDNNVersion = $param["CUDNNVersion"];
        }
    }
}
