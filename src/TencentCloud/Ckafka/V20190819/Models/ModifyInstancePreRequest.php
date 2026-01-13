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
 * ModifyInstancePre request structure.
 *
 * @method string getInstanceId() Obtain ckafka cluster instance Id. obtain through the API [DescribeInstances](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
 * @method void setInstanceId(string $InstanceId) Set ckafka cluster instance Id. obtain through the API [DescribeInstances](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
 * @method integer getDiskSize() Obtain Specifies the disk capacity in GB. value range: 100 to 500000 with a step length of 100.
Specification limits can be viewed through the following link: https://www.tencentcloud.com/document/product/597/122562.?from_cn_redirect=1

 * @method void setDiskSize(integer $DiskSize) Set Specifies the disk capacity in GB. value range: 100 to 500000 with a step length of 100.
Specification limits can be viewed through the following link: https://www.tencentcloud.com/document/product/597/122562.?from_cn_redirect=1

 * @method integer getBandWidth() Obtain Peak bandwidth in MB/s.
Specifies the specification limits and corresponding step length through the following link: https://www.tencentcloud.com/document/product/597/11745.?from_cn_redirect=1

 * @method void setBandWidth(integer $BandWidth) Set Peak bandwidth in MB/s.
Specifies the specification limits and corresponding step length through the following link: https://www.tencentcloud.com/document/product/597/11745.?from_cn_redirect=1

 * @method integer getPartition() Obtain Partition upper bound. maximum value of 40000. step length of 100.
Specifies the specifications and limits that can be viewed through the following link: https://www.tencentcloud.com/document/product/597/122563.?from_cn_redirect=1
 * @method void setPartition(integer $Partition) Set Partition upper bound. maximum value of 40000. step length of 100.
Specifies the specifications and limits that can be viewed through the following link: https://www.tencentcloud.com/document/product/597/122563.?from_cn_redirect=1
 */
class ModifyInstancePreRequest extends AbstractModel
{
    /**
     * @var string ckafka cluster instance Id. obtain through the API [DescribeInstances](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
     */
    public $InstanceId;

    /**
     * @var integer Specifies the disk capacity in GB. value range: 100 to 500000 with a step length of 100.
Specification limits can be viewed through the following link: https://www.tencentcloud.com/document/product/597/122562.?from_cn_redirect=1

     */
    public $DiskSize;

    /**
     * @var integer Peak bandwidth in MB/s.
Specifies the specification limits and corresponding step length through the following link: https://www.tencentcloud.com/document/product/597/11745.?from_cn_redirect=1

     */
    public $BandWidth;

    /**
     * @var integer Partition upper bound. maximum value of 40000. step length of 100.
Specifies the specifications and limits that can be viewed through the following link: https://www.tencentcloud.com/document/product/597/122563.?from_cn_redirect=1
     */
    public $Partition;

    /**
     * @param string $InstanceId ckafka cluster instance Id. obtain through the API [DescribeInstances](https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1).
     * @param integer $DiskSize Specifies the disk capacity in GB. value range: 100 to 500000 with a step length of 100.
Specification limits can be viewed through the following link: https://www.tencentcloud.com/document/product/597/122562.?from_cn_redirect=1

     * @param integer $BandWidth Peak bandwidth in MB/s.
Specifies the specification limits and corresponding step length through the following link: https://www.tencentcloud.com/document/product/597/11745.?from_cn_redirect=1

     * @param integer $Partition Partition upper bound. maximum value of 40000. step length of 100.
Specifies the specifications and limits that can be viewed through the following link: https://www.tencentcloud.com/document/product/597/122563.?from_cn_redirect=1
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
