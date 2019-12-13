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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getZone() 获取The ID of the [Availability Zone](/document/product/213/15753#ZoneInfo) to which the cloud disk belongs. This parameter can be obtained from the Zone field in the returned values of [DescribeZones](/document/product/213/15707).
 * @method void setZone(string $Zone) 设置The ID of the [Availability Zone](/document/product/213/15753#ZoneInfo) to which the cloud disk belongs. This parameter can be obtained from the Zone field in the returned values of [DescribeZones](/document/product/213/15707).
 * @method integer getProjectId() 获取ID of the project to which the instance belongs. This parameter can be obtained from the projectId field in the returned values of [DescribeProject](/document/api/378/4400). If this is left empty, default project is used.
 * @method void setProjectId(integer $ProjectId) 设置ID of the project to which the instance belongs. This parameter can be obtained from the projectId field in the returned values of [DescribeProject](/document/api/378/4400). If this is left empty, default project is used.
 * @method string getCdcId() 获取ID of dedicated cluster which the instance belongs to. When it is an input parameter, the specified CdcId dedicated cluster resource is operated, and it can be left blank. When it is an output parameter, it is the ID of the dedicated cluster which the resource belongs to, and it can be left blank.
Note: This field may return null, indicating that no valid value was found.
 * @method void setCdcId(string $CdcId) 设置ID of dedicated cluster which the instance belongs to. When it is an input parameter, the specified CdcId dedicated cluster resource is operated, and it can be left blank. When it is an output parameter, it is the ID of the dedicated cluster which the resource belongs to, and it can be left blank.
Note: This field may return null, indicating that no valid value was found.
 * @method string getCageId() 获取Cage ID. When it is an input parameter, the specified CageID resource is operated, and it can be left blank. When it is an output parameter, it is the ID of the cage the resource belongs to, and it can be left blank.
Note: This field may return null, indicating that no valid value was found.
 * @method void setCageId(string $CageId) 设置Cage ID. When it is an input parameter, the specified CageID resource is operated, and it can be left blank. When it is an output parameter, it is the ID of the cage the resource belongs to, and it can be left blank.
Note: This field may return null, indicating that no valid value was found.
 * @method string getCdcName() 获取Dedicated cluster name. When it is an input parameter, it is ignored.  When it is an output parameter, it is the name of the dedicated cluster the cloud disk belongs to, and it can be left blank.
Note: This field may return null, indicating that no valid value was found.
 * @method void setCdcName(string $CdcName) 设置Dedicated cluster name. When it is an input parameter, it is ignored.  When it is an output parameter, it is the name of the dedicated cluster the cloud disk belongs to, and it can be left blank.
Note: This field may return null, indicating that no valid value was found.
 */

/**
 *This describes the abstract location of the instance, including the availability zone in which it is located, the projects to which it belongs, and the ID and name of the dedicated clusters to which it belongs.
 */
class Placement extends AbstractModel
{
    /**
     * @var string The ID of the [Availability Zone](/document/product/213/15753#ZoneInfo) to which the cloud disk belongs. This parameter can be obtained from the Zone field in the returned values of [DescribeZones](/document/product/213/15707).
     */
    public $Zone;

    /**
     * @var integer ID of the project to which the instance belongs. This parameter can be obtained from the projectId field in the returned values of [DescribeProject](/document/api/378/4400). If this is left empty, default project is used.
     */
    public $ProjectId;

    /**
     * @var string ID of dedicated cluster which the instance belongs to. When it is an input parameter, the specified CdcId dedicated cluster resource is operated, and it can be left blank. When it is an output parameter, it is the ID of the dedicated cluster which the resource belongs to, and it can be left blank.
Note: This field may return null, indicating that no valid value was found.
     */
    public $CdcId;

    /**
     * @var string Cage ID. When it is an input parameter, the specified CageID resource is operated, and it can be left blank. When it is an output parameter, it is the ID of the cage the resource belongs to, and it can be left blank.
Note: This field may return null, indicating that no valid value was found.
     */
    public $CageId;

    /**
     * @var string Dedicated cluster name. When it is an input parameter, it is ignored.  When it is an output parameter, it is the name of the dedicated cluster the cloud disk belongs to, and it can be left blank.
Note: This field may return null, indicating that no valid value was found.
     */
    public $CdcName;
    /**
     * @param string $Zone The ID of the [Availability Zone](/document/product/213/15753#ZoneInfo) to which the cloud disk belongs. This parameter can be obtained from the Zone field in the returned values of [DescribeZones](/document/product/213/15707).
     * @param integer $ProjectId ID of the project to which the instance belongs. This parameter can be obtained from the projectId field in the returned values of [DescribeProject](/document/api/378/4400). If this is left empty, default project is used.
     * @param string $CdcId ID of dedicated cluster which the instance belongs to. When it is an input parameter, the specified CdcId dedicated cluster resource is operated, and it can be left blank. When it is an output parameter, it is the ID of the dedicated cluster which the resource belongs to, and it can be left blank.
Note: This field may return null, indicating that no valid value was found.
     * @param string $CageId Cage ID. When it is an input parameter, the specified CageID resource is operated, and it can be left blank. When it is an output parameter, it is the ID of the cage the resource belongs to, and it can be left blank.
Note: This field may return null, indicating that no valid value was found.
     * @param string $CdcName Dedicated cluster name. When it is an input parameter, it is ignored.  When it is an output parameter, it is the name of the dedicated cluster the cloud disk belongs to, and it can be left blank.
Note: This field may return null, indicating that no valid value was found.
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("CageId",$param) and $param["CageId"] !== null) {
            $this->CageId = $param["CageId"];
        }

        if (array_key_exists("CdcName",$param) and $param["CdcName"] !== null) {
            $this->CdcName = $param["CdcName"];
        }
    }
}
