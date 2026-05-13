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
 * @method string getInstanceId() Obtain <p>ckafka cluster instance Id, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1">DescribeInstances</a> API</p>
 * @method void setInstanceId(string $InstanceId) Set <p>ckafka cluster instance Id, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1">DescribeInstances</a> API</p>
 * @method integer getDiskSize() Obtain <p>Disk size in GB. Maximum value is 500000 with a step length of 100. View specification limits through the following url: https://www.tencentcloud.com/document/product/597/122562?from_cn_redirect=1</p>
 * @method void setDiskSize(integer $DiskSize) Set <p>Disk size in GB. Maximum value is 500000 with a step length of 100. View specification limits through the following url: https://www.tencentcloud.com/document/product/597/122562?from_cn_redirect=1</p>
 * @method integer getBandWidth() Obtain <p>Peak bandwidth in MB/s can be accessed through the following link to view specifications limit and corresponding step length: https://www.tencentcloud.com/document/product/597/11745?from_cn_redirect=1</p>
 * @method void setBandWidth(integer $BandWidth) Set <p>Peak bandwidth in MB/s can be accessed through the following link to view specifications limit and corresponding step length: https://www.tencentcloud.com/document/product/597/11745?from_cn_redirect=1</p>
 * @method integer getPartition() Obtain <p>Partition upper limit maximum value: 40000, step length: 100. View specification limits through the following URL: https://www.tencentcloud.com/document/product/597/122563?from_cn_redirect=1</p>
 * @method void setPartition(integer $Partition) Set <p>Partition upper limit maximum value: 40000, step length: 100. View specification limits through the following URL: https://www.tencentcloud.com/document/product/597/122563?from_cn_redirect=1</p>
 */
class ModifyInstancePreRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka cluster instance Id, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1">DescribeInstances</a> API</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Disk size in GB. Maximum value is 500000 with a step length of 100. View specification limits through the following url: https://www.tencentcloud.com/document/product/597/122562?from_cn_redirect=1</p>
     */
    public $DiskSize;

    /**
     * @var integer <p>Peak bandwidth in MB/s can be accessed through the following link to view specifications limit and corresponding step length: https://www.tencentcloud.com/document/product/597/11745?from_cn_redirect=1</p>
     */
    public $BandWidth;

    /**
     * @var integer <p>Partition upper limit maximum value: 40000, step length: 100. View specification limits through the following URL: https://www.tencentcloud.com/document/product/597/122563?from_cn_redirect=1</p>
     */
    public $Partition;

    /**
     * @param string $InstanceId <p>ckafka cluster instance Id, which can be obtained through the <a href="https://www.tencentcloud.com/document/product/597/40835?from_cn_redirect=1">DescribeInstances</a> API</p>
     * @param integer $DiskSize <p>Disk size in GB. Maximum value is 500000 with a step length of 100. View specification limits through the following url: https://www.tencentcloud.com/document/product/597/122562?from_cn_redirect=1</p>
     * @param integer $BandWidth <p>Peak bandwidth in MB/s can be accessed through the following link to view specifications limit and corresponding step length: https://www.tencentcloud.com/document/product/597/11745?from_cn_redirect=1</p>
     * @param integer $Partition <p>Partition upper limit maximum value: 40000, step length: 100. View specification limits through the following URL: https://www.tencentcloud.com/document/product/597/122563?from_cn_redirect=1</p>
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
