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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Abstract location of the instance, including its AZ, project, and dedicated cluster ID and name.
 *
 * @method string getZone() Obtain [AZ ID](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo) of the cloud disk, which can be obtained from the `Zone` field in the returned value of the [DescribeZones](https://intl.cloud.tencent.com/document/product/213/15707?from_cn_redirect=1) API.
 * @method void setZone(string $Zone) Set [AZ ID](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo) of the cloud disk, which can be obtained from the `Zone` field in the returned value of the [DescribeZones](https://intl.cloud.tencent.com/document/product/213/15707?from_cn_redirect=1) API.
 * @method string getCageId() Obtain Cage ID. When it is used as an input parameter, it indicates to manipulate the resources in the cage with the specified `CageId` and can be left empty. When it is used as an output parameter, it represents the cage ID of the resource and can be left empty.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCageId(string $CageId) Set Cage ID. When it is used as an input parameter, it indicates to manipulate the resources in the cage with the specified `CageId` and can be left empty. When it is used as an output parameter, it represents the cage ID of the resource and can be left empty.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getProjectId() Obtain Project ID of the instance, which can be obtained from the `projectId` field in the returned value of the [DescribeProject](https://intl.cloud.tencent.com/document/api/378/4400?from_cn_redirect=1) API. If this parameter is not specified, the default project ID will be used.
 * @method void setProjectId(integer $ProjectId) Set Project ID of the instance, which can be obtained from the `projectId` field in the returned value of the [DescribeProject](https://intl.cloud.tencent.com/document/api/378/4400?from_cn_redirect=1) API. If this parameter is not specified, the default project ID will be used.
 * @method string getCdcName() Obtain Name of the dedicated cluster. When it is used as an input parameter, it is ignored. When it is used as an output parameter, it represents the name of the dedicated cluster to which the cloud disk belongs, and it can be left empty.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCdcName(string $CdcName) Set Name of the dedicated cluster. When it is used as an input parameter, it is ignored. When it is used as an output parameter, it represents the name of the dedicated cluster to which the cloud disk belongs, and it can be left empty.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getCdcId() Obtain Dedicated cluster ID of the instance. When it is used as an input parameter, it indicates to manipulate the resources in the dedicated cluster with the specified `CdcId` and can be left empty. When it is used as an output parameter, it represents the dedicated cluster ID of the resource and can be left empty.
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCdcId(string $CdcId) Set Dedicated cluster ID of the instance. When it is used as an input parameter, it indicates to manipulate the resources in the dedicated cluster with the specified `CdcId` and can be left empty. When it is used as an output parameter, it represents the dedicated cluster ID of the resource and can be left empty.
Note: this field may return null, indicating that no valid values can be obtained.
 */
class Placement extends AbstractModel
{
    /**
     * @var string [AZ ID](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo) of the cloud disk, which can be obtained from the `Zone` field in the returned value of the [DescribeZones](https://intl.cloud.tencent.com/document/product/213/15707?from_cn_redirect=1) API.
     */
    public $Zone;

    /**
     * @var string Cage ID. When it is used as an input parameter, it indicates to manipulate the resources in the cage with the specified `CageId` and can be left empty. When it is used as an output parameter, it represents the cage ID of the resource and can be left empty.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CageId;

    /**
     * @var integer Project ID of the instance, which can be obtained from the `projectId` field in the returned value of the [DescribeProject](https://intl.cloud.tencent.com/document/api/378/4400?from_cn_redirect=1) API. If this parameter is not specified, the default project ID will be used.
     */
    public $ProjectId;

    /**
     * @var string Name of the dedicated cluster. When it is used as an input parameter, it is ignored. When it is used as an output parameter, it represents the name of the dedicated cluster to which the cloud disk belongs, and it can be left empty.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CdcName;

    /**
     * @var string Dedicated cluster ID of the instance. When it is used as an input parameter, it indicates to manipulate the resources in the dedicated cluster with the specified `CdcId` and can be left empty. When it is used as an output parameter, it represents the dedicated cluster ID of the resource and can be left empty.
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CdcId;

    /**
     * @param string $Zone [AZ ID](https://intl.cloud.tencent.com/document/product/213/15753?from_cn_redirect=1#ZoneInfo) of the cloud disk, which can be obtained from the `Zone` field in the returned value of the [DescribeZones](https://intl.cloud.tencent.com/document/product/213/15707?from_cn_redirect=1) API.
     * @param string $CageId Cage ID. When it is used as an input parameter, it indicates to manipulate the resources in the cage with the specified `CageId` and can be left empty. When it is used as an output parameter, it represents the cage ID of the resource and can be left empty.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $ProjectId Project ID of the instance, which can be obtained from the `projectId` field in the returned value of the [DescribeProject](https://intl.cloud.tencent.com/document/api/378/4400?from_cn_redirect=1) API. If this parameter is not specified, the default project ID will be used.
     * @param string $CdcName Name of the dedicated cluster. When it is used as an input parameter, it is ignored. When it is used as an output parameter, it represents the name of the dedicated cluster to which the cloud disk belongs, and it can be left empty.
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $CdcId Dedicated cluster ID of the instance. When it is used as an input parameter, it indicates to manipulate the resources in the dedicated cluster with the specified `CdcId` and can be left empty. When it is used as an output parameter, it represents the dedicated cluster ID of the resource and can be left empty.
Note: this field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("CdcName",$param) and $param["CdcName"] !== null) {
            $this->CdcName = $param["CdcName"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }
    }
}
