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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Placement of an instance, including its availability zone, project, host (for CDH products only), master host IP, etc.
 *
 * @method string getZone() Obtain ID of the availability zone where the instance resides. You can call the [DescribeZones](https://intl.cloud.tencent.com/document/product/213/35071) API and obtain the ID in the returned `Zone` field.
 * @method void setZone(string $Zone) Set ID of the availability zone where the instance resides. You can call the [DescribeZones](https://intl.cloud.tencent.com/document/product/213/35071) API and obtain the ID in the returned `Zone` field.
 * @method integer getProjectId() Obtain ID of the project to which the instance belongs. This parameter can be obtained from the `projectId` returned by [DescribeProject](https://intl.cloud.tencent.com/document/api/651/78725?from_cn_redirect=1). If this is left empty, the default project is used.
 * @method void setProjectId(integer $ProjectId) Set ID of the project to which the instance belongs. This parameter can be obtained from the `projectId` returned by [DescribeProject](https://intl.cloud.tencent.com/document/api/651/78725?from_cn_redirect=1). If this is left empty, the default project is used.
 * @method array getHostIds() Obtain ID list of CDHs from which the instance can be created. If you have purchased CDHs and specify this parameter, the instances you purchase will be randomly deployed on the CDHs.
 * @method void setHostIds(array $HostIds) Set ID list of CDHs from which the instance can be created. If you have purchased CDHs and specify this parameter, the instances you purchase will be randomly deployed on the CDHs.
 * @method string getHostId() Obtain The ID of the CDH to which the instance belongs, only used as an output parameter.
 * @method void setHostId(string $HostId) Set The ID of the CDH to which the instance belongs, only used as an output parameter.
 */
class Placement extends AbstractModel
{
    /**
     * @var string ID of the availability zone where the instance resides. You can call the [DescribeZones](https://intl.cloud.tencent.com/document/product/213/35071) API and obtain the ID in the returned `Zone` field.
     */
    public $Zone;

    /**
     * @var integer ID of the project to which the instance belongs. This parameter can be obtained from the `projectId` returned by [DescribeProject](https://intl.cloud.tencent.com/document/api/651/78725?from_cn_redirect=1). If this is left empty, the default project is used.
     */
    public $ProjectId;

    /**
     * @var array ID list of CDHs from which the instance can be created. If you have purchased CDHs and specify this parameter, the instances you purchase will be randomly deployed on the CDHs.
     */
    public $HostIds;

    /**
     * @var string The ID of the CDH to which the instance belongs, only used as an output parameter.
     */
    public $HostId;

    /**
     * @param string $Zone ID of the availability zone where the instance resides. You can call the [DescribeZones](https://intl.cloud.tencent.com/document/product/213/35071) API and obtain the ID in the returned `Zone` field.
     * @param integer $ProjectId ID of the project to which the instance belongs. This parameter can be obtained from the `projectId` returned by [DescribeProject](https://intl.cloud.tencent.com/document/api/651/78725?from_cn_redirect=1). If this is left empty, the default project is used.
     * @param array $HostIds ID list of CDHs from which the instance can be created. If you have purchased CDHs and specify this parameter, the instances you purchase will be randomly deployed on the CDHs.
     * @param string $HostId The ID of the CDH to which the instance belongs, only used as an output parameter.
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("HostIds",$param) and $param["HostIds"] !== null) {
            $this->HostIds = $param["HostIds"];
        }

        if (array_key_exists("HostId",$param) and $param["HostId"] !== null) {
            $this->HostId = $param["HostId"];
        }
    }
}
