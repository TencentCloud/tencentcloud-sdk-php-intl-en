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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDiskExtraPerformance request structure.
 *
 * @method integer getThroughputPerformance() Obtain Specifies the hard disk performance of the additional CBS purchase in MiB/s.
 * @method void setThroughputPerformance(integer $ThroughputPerformance) Set Specifies the hard disk performance of the additional CBS purchase in MiB/s.
 * @method string getDiskId() Obtain The CLOUD disk ID for which extra performance needs to be purchased. it can be queried via the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api. extra performance is only supported for enhanced SSD (CLOUD_HSSD) and ultra-fast SSD (CLOUD_TSSD) CBS disks exceeding 460GiB in size.
 * @method void setDiskId(string $DiskId) Set The CLOUD disk ID for which extra performance needs to be purchased. it can be queried via the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api. extra performance is only supported for enhanced SSD (CLOUD_HSSD) and ultra-fast SSD (CLOUD_TSSD) CBS disks exceeding 460GiB in size.
 */
class ModifyDiskExtraPerformanceRequest extends AbstractModel
{
    /**
     * @var integer Specifies the hard disk performance of the additional CBS purchase in MiB/s.
     */
    public $ThroughputPerformance;

    /**
     * @var string The CLOUD disk ID for which extra performance needs to be purchased. it can be queried via the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api. extra performance is only supported for enhanced SSD (CLOUD_HSSD) and ultra-fast SSD (CLOUD_TSSD) CBS disks exceeding 460GiB in size.
     */
    public $DiskId;

    /**
     * @param integer $ThroughputPerformance Specifies the hard disk performance of the additional CBS purchase in MiB/s.
     * @param string $DiskId The CLOUD disk ID for which extra performance needs to be purchased. it can be queried via the [DescribeDisks](https://www.tencentcloud.com/document/product/362/16315?from_cn_redirect=1) api. extra performance is only supported for enhanced SSD (CLOUD_HSSD) and ultra-fast SSD (CLOUD_TSSD) CBS disks exceeding 460GiB in size.
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
        if (array_key_exists("ThroughputPerformance",$param) and $param["ThroughputPerformance"] !== null) {
            $this->ThroughputPerformance = $param["ThroughputPerformance"];
        }

        if (array_key_exists("DiskId",$param) and $param["DiskId"] !== null) {
            $this->DiskId = $param["DiskId"];
        }
    }
}
