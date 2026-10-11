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
 * Data volume directory settings.
 *
 * @method string getVolumeType() Obtain Data volume type.
<li>HOST_PATH indicates support for the local path.</li>
<li>NEW_PVC indicates creating a PVC.</li>
For the data volume types supported by component roles, see the EMR on TKE cluster deployment instructions: [Deployment Instructions](https://www.tencentcloud.com/document/product/589/94254?from_cn_redirect=1).
 * @method void setVolumeType(string $VolumeType) Set Data volume type.
<li>HOST_PATH indicates support for the local path.</li>
<li>NEW_PVC indicates creating a PVC.</li>
For the data volume types supported by component roles, see the EMR on TKE cluster deployment instructions: [Deployment Instructions](https://www.tencentcloud.com/document/product/589/94254?from_cn_redirect=1).
 * @method HostPathVolumeSource getHostPath() Obtain Host path information.
 * @method void setHostPath(HostPathVolumeSource $HostPath) Set Host path information.
 */
class VolumeSetting extends AbstractModel
{
    /**
     * @var string Data volume type.
<li>HOST_PATH indicates support for the local path.</li>
<li>NEW_PVC indicates creating a PVC.</li>
For the data volume types supported by component roles, see the EMR on TKE cluster deployment instructions: [Deployment Instructions](https://www.tencentcloud.com/document/product/589/94254?from_cn_redirect=1).
     */
    public $VolumeType;

    /**
     * @var HostPathVolumeSource Host path information.
     */
    public $HostPath;

    /**
     * @param string $VolumeType Data volume type.
<li>HOST_PATH indicates support for the local path.</li>
<li>NEW_PVC indicates creating a PVC.</li>
For the data volume types supported by component roles, see the EMR on TKE cluster deployment instructions: [Deployment Instructions](https://www.tencentcloud.com/document/product/589/94254?from_cn_redirect=1).
     * @param HostPathVolumeSource $HostPath Host path information.
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
        if (array_key_exists("VolumeType",$param) and $param["VolumeType"] !== null) {
            $this->VolumeType = $param["VolumeType"];
        }

        if (array_key_exists("HostPath",$param) and $param["HostPath"] !== null) {
            $this->HostPath = new HostPathVolumeSource();
            $this->HostPath->deserialize($param["HostPath"]);
        }
    }
}
