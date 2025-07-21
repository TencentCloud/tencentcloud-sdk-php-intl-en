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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * System disk configuration of the launch configuration. If this parameter is not specified, the default value is assigned to it.
 *
 * @method string getDiskType() Obtain System disk type. for restrictions on the system disk type, see [cloud block storage types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1). valid values:.
<Li>LOCAL_BASIC: local hard disk.</li>.
<Li>LOCAL_SSD: local ssd.</li>.
<Li>CLOUD_BASIC: general cloud disk.</li>.
<Li>CLOUD_PREMIUM: high-performance cloud block storage</li>.
<Li>CLOUD_SSD: cloud ssd</li>.
<Li>CLOUD_BSSD: universal ssd cloud disk</li>.
<Li>CLOUD_HSSD: enhanced ssd cloud disk</li>.
<Li>CLOUD_TSSD: ultra ssd.</li>.
<li>Default value: CLOUD_PREMIUM.</li>
 * @method void setDiskType(string $DiskType) Set System disk type. for restrictions on the system disk type, see [cloud block storage types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1). valid values:.
<Li>LOCAL_BASIC: local hard disk.</li>.
<Li>LOCAL_SSD: local ssd.</li>.
<Li>CLOUD_BASIC: general cloud disk.</li>.
<Li>CLOUD_PREMIUM: high-performance cloud block storage</li>.
<Li>CLOUD_SSD: cloud ssd</li>.
<Li>CLOUD_BSSD: universal ssd cloud disk</li>.
<Li>CLOUD_HSSD: enhanced ssd cloud disk</li>.
<Li>CLOUD_TSSD: ultra ssd.</li>.
<li>Default value: CLOUD_PREMIUM.</li>
 * @method integer getDiskSize() Obtain System disk size, in GB. Default value: 50.
 * @method void setDiskSize(integer $DiskSize) Set System disk size, in GB. Default value: 50.
 */
class SystemDisk extends AbstractModel
{
    /**
     * @var string System disk type. for restrictions on the system disk type, see [cloud block storage types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1). valid values:.
<Li>LOCAL_BASIC: local hard disk.</li>.
<Li>LOCAL_SSD: local ssd.</li>.
<Li>CLOUD_BASIC: general cloud disk.</li>.
<Li>CLOUD_PREMIUM: high-performance cloud block storage</li>.
<Li>CLOUD_SSD: cloud ssd</li>.
<Li>CLOUD_BSSD: universal ssd cloud disk</li>.
<Li>CLOUD_HSSD: enhanced ssd cloud disk</li>.
<Li>CLOUD_TSSD: ultra ssd.</li>.
<li>Default value: CLOUD_PREMIUM.</li>
     */
    public $DiskType;

    /**
     * @var integer System disk size, in GB. Default value: 50.
     */
    public $DiskSize;

    /**
     * @param string $DiskType System disk type. for restrictions on the system disk type, see [cloud block storage types](https://intl.cloud.tencent.com/document/product/362/2353?from_cn_redirect=1). valid values:.
<Li>LOCAL_BASIC: local hard disk.</li>.
<Li>LOCAL_SSD: local ssd.</li>.
<Li>CLOUD_BASIC: general cloud disk.</li>.
<Li>CLOUD_PREMIUM: high-performance cloud block storage</li>.
<Li>CLOUD_SSD: cloud ssd</li>.
<Li>CLOUD_BSSD: universal ssd cloud disk</li>.
<Li>CLOUD_HSSD: enhanced ssd cloud disk</li>.
<Li>CLOUD_TSSD: ultra ssd.</li>.
<li>Default value: CLOUD_PREMIUM.</li>
     * @param integer $DiskSize System disk size, in GB. Default value: 50.
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
        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }
    }
}
