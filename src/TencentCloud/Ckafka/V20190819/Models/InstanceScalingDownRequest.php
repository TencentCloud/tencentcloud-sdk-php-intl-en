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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InstanceScalingDown request structure.
 *
 * @method string getInstanceId() Obtain ckafka cluster instance Id. can be obtained through the [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1) api.
 * @method void setInstanceId(string $InstanceId) Set ckafka cluster instance Id. can be obtained through the [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1) api.
 * @method integer getUpgradeStrategy() Obtain Shrink mode. 1: stable mode. 
2. specifies high-speed configuration change.
 * @method void setUpgradeStrategy(integer $UpgradeStrategy) Set Shrink mode. 1: stable mode. 
2. specifies high-speed configuration change.
 * @method integer getDiskSize() Obtain Specifies the disk capacity in GB. value range: maximum value 500000, step length 100.
The specifications and limitations can be viewed through the following link: https://www.tencentcloud.comom/document/product/597/122562.?from_cn_redirect=1


 * @method void setDiskSize(integer $DiskSize) Set Specifies the disk capacity in GB. value range: maximum value 500000, step length 100.
The specifications and limitations can be viewed through the following link: https://www.tencentcloud.comom/document/product/597/122562.?from_cn_redirect=1


 * @method integer getBandWidth() Obtain Peak bandwidth in MB/s.
Specifies the url (https://www.tencentcloud.comom/document/product/597/11745?from_cn_redirect=1) to view specification limits and corresponding step length.
 * @method void setBandWidth(integer $BandWidth) Set Peak bandwidth in MB/s.
Specifies the url (https://www.tencentcloud.comom/document/product/597/11745?from_cn_redirect=1) to view specification limits and corresponding step length.
 * @method integer getPartition() Obtain Partition upper limit maximum value of 40000, step length 100.
Specification limits can be viewed through the following link: https://www.tencentcloud.comom/document/product/597/122563.?from_cn_redirect=1

 * @method void setPartition(integer $Partition) Set Partition upper limit maximum value of 40000, step length 100.
Specification limits can be viewed through the following link: https://www.tencentcloud.comom/document/product/597/122563.?from_cn_redirect=1
 */
class InstanceScalingDownRequest extends AbstractModel
{
    /**
     * @var string ckafka cluster instance Id. can be obtained through the [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1) api.
     */
    public $InstanceId;

    /**
     * @var integer Shrink mode. 1: stable mode. 
2. specifies high-speed configuration change.
     */
    public $UpgradeStrategy;

    /**
     * @var integer Specifies the disk capacity in GB. value range: maximum value 500000, step length 100.
The specifications and limitations can be viewed through the following link: https://www.tencentcloud.comom/document/product/597/122562.?from_cn_redirect=1


     */
    public $DiskSize;

    /**
     * @var integer Peak bandwidth in MB/s.
Specifies the url (https://www.tencentcloud.comom/document/product/597/11745?from_cn_redirect=1) to view specification limits and corresponding step length.
     */
    public $BandWidth;

    /**
     * @var integer Partition upper limit maximum value of 40000, step length 100.
Specification limits can be viewed through the following link: https://www.tencentcloud.comom/document/product/597/122563.?from_cn_redirect=1

     */
    public $Partition;

    /**
     * @param string $InstanceId ckafka cluster instance Id. can be obtained through the [DescribeInstances](https://www.tencentcloud.comom/document/product/597/40835?from_cn_redirect=1) api.
     * @param integer $UpgradeStrategy Shrink mode. 1: stable mode. 
2. specifies high-speed configuration change.
     * @param integer $DiskSize Specifies the disk capacity in GB. value range: maximum value 500000, step length 100.
The specifications and limitations can be viewed through the following link: https://www.tencentcloud.comom/document/product/597/122562.?from_cn_redirect=1


     * @param integer $BandWidth Peak bandwidth in MB/s.
Specifies the url (https://www.tencentcloud.comom/document/product/597/11745?from_cn_redirect=1) to view specification limits and corresponding step length.
     * @param integer $Partition Partition upper limit maximum value of 40000, step length 100.
Specification limits can be viewed through the following link: https://www.tencentcloud.comom/document/product/597/122563.?from_cn_redirect=1
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

        if (array_key_exists("UpgradeStrategy",$param) and $param["UpgradeStrategy"] !== null) {
            $this->UpgradeStrategy = $param["UpgradeStrategy"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("BandWidth",$param) and $param["BandWidth"] !== null) {
            $this->BandWidth = $param["BandWidth"];
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }
    }
}
