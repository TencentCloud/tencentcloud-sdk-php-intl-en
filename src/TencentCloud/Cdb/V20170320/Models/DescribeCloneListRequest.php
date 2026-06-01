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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloneList request structure.
 *
 * @method string getInstanceId() Obtain Query the cloning task list of the specified source instance. Obtain the instance ID through the [DescribeDBInstances](https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1) API.
 * @method void setInstanceId(string $InstanceId) Set Query the cloning task list of the specified source instance. Obtain the instance ID through the [DescribeDBInstances](https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1) API.
 * @method integer getOffset() Obtain Paginated query offset. Default value: `0`.
 * @method void setOffset(integer $Offset) Set Paginated query offset. Default value: `0`.
 * @method integer getLimit() Obtain Number of entries per page for paging query. Default value: 20. Maximum value: 100 recommended.
 * @method void setLimit(integer $Limit) Set Number of entries per page for paging query. Default value: 20. Maximum value: 100 recommended.
 */
class DescribeCloneListRequest extends AbstractModel
{
    /**
     * @var string Query the cloning task list of the specified source instance. Obtain the instance ID through the [DescribeDBInstances](https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1) API.
     */
    public $InstanceId;

    /**
     * @var integer Paginated query offset. Default value: `0`.
     */
    public $Offset;

    /**
     * @var integer Number of entries per page for paging query. Default value: 20. Maximum value: 100 recommended.
     */
    public $Limit;

    /**
     * @param string $InstanceId Query the cloning task list of the specified source instance. Obtain the instance ID through the [DescribeDBInstances](https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1) API.
     * @param integer $Offset Paginated query offset. Default value: `0`.
     * @param integer $Limit Number of entries per page for paging query. Default value: 20. Maximum value: 100 recommended.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
