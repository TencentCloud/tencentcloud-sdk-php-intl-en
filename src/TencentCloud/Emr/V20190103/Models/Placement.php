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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Location information of cluster instance
 *
 * @method string getZone() Obtain The ID of the availability zone where the instance resides, such as `ap-guangzhou-1`. You can call the [DescribeZones](https://intl.cloud.tencent.com/document/product/213/15707?from_cn_redirect=1) API and obtain this ID from the `Zone` field in the response.
 * @method void setZone(string $Zone) Set The ID of the availability zone where the instance resides, such as `ap-guangzhou-1`. You can call the [DescribeZones](https://intl.cloud.tencent.com/document/product/213/15707?from_cn_redirect=1) API and obtain this ID from the `Zone` field in the response.
 * @method integer getProjectId() Obtain The ID of the project to which the instance belongs. You can call the [DescribeProject](https://intl.cloud.tencent.com/document/api/651/78725?from_cn_redirect=1) and obtain this ID from the `projectId` field in the response. If this is left empty, the ID of the default project is used.
 * @method void setProjectId(integer $ProjectId) Set The ID of the project to which the instance belongs. You can call the [DescribeProject](https://intl.cloud.tencent.com/document/api/651/78725?from_cn_redirect=1) and obtain this ID from the `projectId` field in the response. If this is left empty, the ID of the default project is used.
 */
class Placement extends AbstractModel
{
    /**
     * @var string The ID of the availability zone where the instance resides, such as `ap-guangzhou-1`. You can call the [DescribeZones](https://intl.cloud.tencent.com/document/product/213/15707?from_cn_redirect=1) API and obtain this ID from the `Zone` field in the response.
     */
    public $Zone;

    /**
     * @var integer The ID of the project to which the instance belongs. You can call the [DescribeProject](https://intl.cloud.tencent.com/document/api/651/78725?from_cn_redirect=1) and obtain this ID from the `projectId` field in the response. If this is left empty, the ID of the default project is used.
     */
    public $ProjectId;

    /**
     * @param string $Zone The ID of the availability zone where the instance resides, such as `ap-guangzhou-1`. You can call the [DescribeZones](https://intl.cloud.tencent.com/document/product/213/15707?from_cn_redirect=1) API and obtain this ID from the `Zone` field in the response.
     * @param integer $ProjectId The ID of the project to which the instance belongs. You can call the [DescribeProject](https://intl.cloud.tencent.com/document/api/651/78725?from_cn_redirect=1) and obtain this ID from the `projectId` field in the response. If this is left empty, the ID of the default project is used.
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
    }
}
