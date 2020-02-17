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
 * @method string getZone() Obtain ID of the [Availability Zone](/document/product/213/9452#zone) where the instance resides. To obtain the availability zone IDs, you can call [DescribeZones](/document/api/213/9455) and look for the `Zone` fields in the response.
 * @method void setZone(string $Zone) Set ID of the [Availability Zone](/document/product/213/9452#zone) where the instance resides. To obtain the availability zone IDs, you can call [DescribeZones](/document/api/213/9455) and look for the `Zone` fields in the response.
 * @method integer getProjectId() Obtain ID of the project to which the instance belongs. To obtain the project IDs, you can call [DescribeProject](/document/api/378/4400) and look for the `projectId` fields in the response. If this parameter is not specified, the default project will be used.
 * @method void setProjectId(integer $ProjectId) Set ID of the project to which the instance belongs. To obtain the project IDs, you can call [DescribeProject](/document/api/378/4400) and look for the `projectId` fields in the response. If this parameter is not specified, the default project will be used.
 * @method array getHostIds() Obtain ID list of CDHs from which the instance can be created. If you have purchased CDHs and specify this parameter, the instances you purchase will be randomly deployed on the CDHs.
 * @method void setHostIds(array $HostIds) Set ID list of CDHs from which the instance can be created. If you have purchased CDHs and specify this parameter, the instances you purchase will be randomly deployed on the CDHs.
 * @method array getHostIps() Obtain Master host IP used to create the CVM
 * @method void setHostIps(array $HostIps) Set Master host IP used to create the CVM
 */

/**
 *Describes the location of an instance, including its availability zone, project, host (for CDH products only), master host IP, etc.
 */
class Placement extends AbstractModel
{
    /**
     * @var string ID of the [Availability Zone](/document/product/213/9452#zone) where the instance resides. To obtain the availability zone IDs, you can call [DescribeZones](/document/api/213/9455) and look for the `Zone` fields in the response.
     */
    public $Zone;

    /**
     * @var integer ID of the project to which the instance belongs. To obtain the project IDs, you can call [DescribeProject](/document/api/378/4400) and look for the `projectId` fields in the response. If this parameter is not specified, the default project will be used.
     */
    public $ProjectId;

    /**
     * @var array ID list of CDHs from which the instance can be created. If you have purchased CDHs and specify this parameter, the instances you purchase will be randomly deployed on the CDHs.
     */
    public $HostIds;

    /**
     * @var array Master host IP used to create the CVM
     */
    public $HostIps;
    /**
     * @param string $Zone ID of the [Availability Zone](/document/product/213/9452#zone) where the instance resides. To obtain the availability zone IDs, you can call [DescribeZones](/document/api/213/9455) and look for the `Zone` fields in the response.
     * @param integer $ProjectId ID of the project to which the instance belongs. To obtain the project IDs, you can call [DescribeProject](/document/api/378/4400) and look for the `projectId` fields in the response. If this parameter is not specified, the default project will be used.
     * @param array $HostIds ID list of CDHs from which the instance can be created. If you have purchased CDHs and specify this parameter, the instances you purchase will be randomly deployed on the CDHs.
     * @param array $HostIps Master host IP used to create the CVM
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

        if (array_key_exists("HostIps",$param) and $param["HostIps"] !== null) {
            $this->HostIps = $param["HostIps"];
        }
    }
}
