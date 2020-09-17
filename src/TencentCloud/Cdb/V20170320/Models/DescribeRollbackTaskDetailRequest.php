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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRollbackTaskDetail request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, which is the same as the instance ID displayed in the TencentDB Console. You can use the [DescribeDBInstances API](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) to query the ID.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, which is the same as the instance ID displayed in the TencentDB Console. You can use the [DescribeDBInstances API](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) to query the ID.
 * @method string getAsyncRequestId() Obtain Async task ID.
 * @method void setAsyncRequestId(string $AsyncRequestId) Set Async task ID.
 * @method integer getLimit() Obtain Pagination parameter, i.e., the number of entries to be returned for a single request. Default value: 20. Maximum value: 100.
 * @method void setLimit(integer $Limit) Set Pagination parameter, i.e., the number of entries to be returned for a single request. Default value: 20. Maximum value: 100.
 * @method integer getOffset() Obtain Pagination offset. Default value: 0.
 * @method void setOffset(integer $Offset) Set Pagination offset. Default value: 0.
 */
class DescribeRollbackTaskDetailRequest extends AbstractModel
{
    /**
     * @var string Instance ID, which is the same as the instance ID displayed in the TencentDB Console. You can use the [DescribeDBInstances API](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) to query the ID.
     */
    public $InstanceId;

    /**
     * @var string Async task ID.
     */
    public $AsyncRequestId;

    /**
     * @var integer Pagination parameter, i.e., the number of entries to be returned for a single request. Default value: 20. Maximum value: 100.
     */
    public $Limit;

    /**
     * @var integer Pagination offset. Default value: 0.
     */
    public $Offset;

    /**
     * @param string $InstanceId Instance ID, which is the same as the instance ID displayed in the TencentDB Console. You can use the [DescribeDBInstances API](https://intl.cloud.tencent.com/document/api/236/15872?from_cn_redirect=1) to query the ID.
     * @param string $AsyncRequestId Async task ID.
     * @param integer $Limit Pagination parameter, i.e., the number of entries to be returned for a single request. Default value: 20. Maximum value: 100.
     * @param integer $Offset Pagination offset. Default value: 0.
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

        if (array_key_exists("AsyncRequestId",$param) and $param["AsyncRequestId"] !== null) {
            $this->AsyncRequestId = $param["AsyncRequestId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
