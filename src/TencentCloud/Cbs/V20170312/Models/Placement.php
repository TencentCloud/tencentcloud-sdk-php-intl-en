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
 * This describes the abstract location of the instance, including the availability zone in which it is located, the projects to which it belongs, and the ID and name of the dedicated clusters to which it belongs.
 *
 * @method string getZone() Obtain The ID of the [Availability Zone](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo) to which the cloud disk belongs. This parameter can be obtained from the Zone field in the returned values of [DescribeZones](https://intl.cloud.tencent.com/document/product/213/15707?from_cn_redirect=1).
 * @method void setZone(string $Zone) Set The ID of the [Availability Zone](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo) to which the cloud disk belongs. This parameter can be obtained from the Zone field in the returned values of [DescribeZones](https://intl.cloud.tencent.com/document/product/213/15707?from_cn_redirect=1).
 * @method string getCageId() Obtain CageId, which can be obtained via [DescribeDiskStoragePool](https://www.tencentcloud.com/document/api/362/62143?from_cn_redirect=1). as an input parameter, it operates on resources of the specified cage Id and can be empty. as an output parameter, it indicates the cage Id to which the resource belongs and can be empty.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCageId(string $CageId) Set CageId, which can be obtained via [DescribeDiskStoragePool](https://www.tencentcloud.com/document/api/362/62143?from_cn_redirect=1). as an input parameter, it operates on resources of the specified cage Id and can be empty. as an output parameter, it indicates the cage Id to which the resource belongs and can be empty.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getProjectId() Obtain Instance'S project ID, which can be obtained by DescribeProject. by default if left blank, it is 0, indicating the default project.
 * @method void setProjectId(integer $ProjectId) Set Instance'S project ID, which can be obtained by DescribeProject. by default if left blank, it is 0, indicating the default project.
 * @method string getProjectName() Obtain Project to which instance belongs. search via [DescribeProject](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setProjectName(string $ProjectName) Set Project to which instance belongs. search via [DescribeProject](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCdcName() Obtain Dedicated cluster name. When it is an input parameter, it is ignored.  When it is an output parameter, it is the name of the dedicated cluster the cloud disk belongs to, and it can be left blank.
Note: This field may return null, indicating that no valid value was found.
 * @method void setCdcName(string $CdcName) Set Dedicated cluster name. When it is an input parameter, it is ignored.  When it is an output parameter, it is the name of the dedicated cluster the cloud disk belongs to, and it can be left blank.
Note: This field may return null, indicating that no valid value was found.
 * @method string getCdcId() Obtain The exclusive cluster ID of the instance. can be obtained via [DescribeDiskStoragePool](https://www.tencentcloud.com/document/api/362/62143?from_cn_redirect=1). as an input parameter, it indicates operations on resources belonging to the designated CdcId exclusive cluster and can be empty. as an output parameter, it indicates the exclusive cluster ID of the resource and can be empty.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setCdcId(string $CdcId) Set The exclusive cluster ID of the instance. can be obtained via [DescribeDiskStoragePool](https://www.tencentcloud.com/document/api/362/62143?from_cn_redirect=1). as an input parameter, it indicates operations on resources belonging to the designated CdcId exclusive cluster and can be empty. as an output parameter, it indicates the exclusive cluster ID of the resource and can be empty.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getDedicatedClusterId() Obtain Dedicated cluster ID
 * @method void setDedicatedClusterId(string $DedicatedClusterId) Set Dedicated cluster ID
 */
class Placement extends AbstractModel
{
    /**
     * @var string The ID of the [Availability Zone](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo) to which the cloud disk belongs. This parameter can be obtained from the Zone field in the returned values of [DescribeZones](https://intl.cloud.tencent.com/document/product/213/15707?from_cn_redirect=1).
     */
    public $Zone;

    /**
     * @var string CageId, which can be obtained via [DescribeDiskStoragePool](https://www.tencentcloud.com/document/api/362/62143?from_cn_redirect=1). as an input parameter, it operates on resources of the specified cage Id and can be empty. as an output parameter, it indicates the cage Id to which the resource belongs and can be empty.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CageId;

    /**
     * @var integer Instance'S project ID, which can be obtained by DescribeProject. by default if left blank, it is 0, indicating the default project.
     */
    public $ProjectId;

    /**
     * @var string Project to which instance belongs. search via [DescribeProject](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ProjectName;

    /**
     * @var string Dedicated cluster name. When it is an input parameter, it is ignored.  When it is an output parameter, it is the name of the dedicated cluster the cloud disk belongs to, and it can be left blank.
Note: This field may return null, indicating that no valid value was found.
     */
    public $CdcName;

    /**
     * @var string The exclusive cluster ID of the instance. can be obtained via [DescribeDiskStoragePool](https://www.tencentcloud.com/document/api/362/62143?from_cn_redirect=1). as an input parameter, it indicates operations on resources belonging to the designated CdcId exclusive cluster and can be empty. as an output parameter, it indicates the exclusive cluster ID of the resource and can be empty.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $CdcId;

    /**
     * @var string Dedicated cluster ID
     */
    public $DedicatedClusterId;

    /**
     * @param string $Zone The ID of the [Availability Zone](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo) to which the cloud disk belongs. This parameter can be obtained from the Zone field in the returned values of [DescribeZones](https://intl.cloud.tencent.com/document/product/213/15707?from_cn_redirect=1).
     * @param string $CageId CageId, which can be obtained via [DescribeDiskStoragePool](https://www.tencentcloud.com/document/api/362/62143?from_cn_redirect=1). as an input parameter, it operates on resources of the specified cage Id and can be empty. as an output parameter, it indicates the cage Id to which the resource belongs and can be empty.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $ProjectId Instance'S project ID, which can be obtained by DescribeProject. by default if left blank, it is 0, indicating the default project.
     * @param string $ProjectName Project to which instance belongs. search via [DescribeProject](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1).
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CdcName Dedicated cluster name. When it is an input parameter, it is ignored.  When it is an output parameter, it is the name of the dedicated cluster the cloud disk belongs to, and it can be left blank.
Note: This field may return null, indicating that no valid value was found.
     * @param string $CdcId The exclusive cluster ID of the instance. can be obtained via [DescribeDiskStoragePool](https://www.tencentcloud.com/document/api/362/62143?from_cn_redirect=1). as an input parameter, it indicates operations on resources belonging to the designated CdcId exclusive cluster and can be empty. as an output parameter, it indicates the exclusive cluster ID of the resource and can be empty.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $DedicatedClusterId Dedicated cluster ID
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

        if (array_key_exists("CageId",$param) and $param["CageId"] !== null) {
            $this->CageId = $param["CageId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }

        if (array_key_exists("CdcName",$param) and $param["CdcName"] !== null) {
            $this->CdcName = $param["CdcName"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }

        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }
    }
}
