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
 * CloseWanService request structure.
 *
 * @method string getInstanceId() Obtain Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console. Use the query instance list API (https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1) to obtain it, with its value being the InstanceId field in the output parameter. Input the read-only group ID to disable public network access for the read-only group.
 * @method void setInstanceId(string $InstanceId) Set Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console. Use the query instance list API (https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1) to obtain it, with its value being the InstanceId field in the output parameter. Input the read-only group ID to disable public network access for the read-only group.
 * @method string getOpResourceId() Obtain When updating the read-only group of a cloud disk edition instance, specify the instance ID in InstanceId and this parameter to indicate the operation is for the read-only group. If you perform the operation on the read-write node, this parameter is not required.
 * @method void setOpResourceId(string $OpResourceId) Set When updating the read-only group of a cloud disk edition instance, specify the instance ID in InstanceId and this parameter to indicate the operation is for the read-only group. If you perform the operation on the read-write node, this parameter is not required.
 */
class CloseWanServiceRequest extends AbstractModel
{
    /**
     * @var string Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console. Use the query instance list API (https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1) to obtain it, with its value being the InstanceId field in the output parameter. Input the read-only group ID to disable public network access for the read-only group.
     */
    public $InstanceId;

    /**
     * @var string When updating the read-only group of a cloud disk edition instance, specify the instance ID in InstanceId and this parameter to indicate the operation is for the read-only group. If you perform the operation on the read-write node, this parameter is not required.
     */
    public $OpResourceId;

    /**
     * @param string $InstanceId Instance ID, in the format such as cdb-c1nl9rpv. This matches the instance ID displayed on the TencentDB console. Use the query instance list API (https://www.tencentcloud.com/document/api/236/15872?from_cn_redirect=1) to obtain it, with its value being the InstanceId field in the output parameter. Input the read-only group ID to disable public network access for the read-only group.
     * @param string $OpResourceId When updating the read-only group of a cloud disk edition instance, specify the instance ID in InstanceId and this parameter to indicate the operation is for the read-only group. If you perform the operation on the read-write node, this parameter is not required.
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

        if (array_key_exists("OpResourceId",$param) and $param["OpResourceId"] !== null) {
            $this->OpResourceId = $param["OpResourceId"];
        }
    }
}
