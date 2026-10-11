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
 * Description of cluster location information.
 *
 * @method string getZone() Obtain AZ of the instance, such as ap-guangzhou-1. This parameter can also be obtained from the Zone field in the return value of [DescribeZones](https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1).
 * @method void setZone(string $Zone) Set AZ of the instance, such as ap-guangzhou-1. This parameter can also be obtained from the Zone field in the return value of [DescribeZones](https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1).
 * @method integer getProjectId() Obtain ID of the project to which the instance belongs. This parameter can be obtained from the projectId field in the return value of [DescribeProject](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1). If not specified, the default project is used.
 * @method void setProjectId(integer $ProjectId) Set ID of the project to which the instance belongs. This parameter can be obtained from the projectId field in the return value of [DescribeProject](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1). If not specified, the default project is used.
 */
class Placement extends AbstractModel
{
    /**
     * @var string AZ of the instance, such as ap-guangzhou-1. This parameter can also be obtained from the Zone field in the return value of [DescribeZones](https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1).
     */
    public $Zone;

    /**
     * @var integer ID of the project to which the instance belongs. This parameter can be obtained from the projectId field in the return value of [DescribeProject](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1). If not specified, the default project is used.
     */
    public $ProjectId;

    /**
     * @param string $Zone AZ of the instance, such as ap-guangzhou-1. This parameter can also be obtained from the Zone field in the return value of [DescribeZones](https://www.tencentcloud.com/document/product/213/15707?from_cn_redirect=1).
     * @param integer $ProjectId ID of the project to which the instance belongs. This parameter can be obtained from the projectId field in the return value of [DescribeProject](https://www.tencentcloud.com/document/api/651/78725?from_cn_redirect=1). If not specified, the default project is used.
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
