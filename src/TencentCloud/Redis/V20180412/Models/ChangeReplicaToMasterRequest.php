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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ChangeReplicaToMaster request structure.
 *
 * @method string getInstanceId() Obtain <p>Specifies the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
 * @method void setInstanceId(string $InstanceId) Set <p>Specifies the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
 * @method integer getGroupId() Obtain <p>Replica node group ID. Use the interface <a href="https://www.tencentcloud.com/document/product/239/50312?from_cn_redirect=1">DescribeInstanceZoneInfo</a> to obtain the id information of the multi-AZ replica node group. For a single AZ, no need to configure this parameter.</p>
 * @method void setGroupId(integer $GroupId) Set <p>Replica node group ID. Use the interface <a href="https://www.tencentcloud.com/document/product/239/50312?from_cn_redirect=1">DescribeInstanceZoneInfo</a> to obtain the id information of the multi-AZ replica node group. For a single AZ, no need to configure this parameter.</p>
 * @method boolean getEmergency() Obtain <p>Emergency mode.</p><p>Enumeration values:</p><ul><li>false: Standard mode (Recommended for security)</li><li>true: Speed mode: (High-risk acceleration) Skip verification, speed up primary node promotion. High-level operation, highly likely to cause a single primary node in abnormal situations.</li></ul><p>Default value: false</p>
 * @method void setEmergency(boolean $Emergency) Set <p>Emergency mode.</p><p>Enumeration values:</p><ul><li>false: Standard mode (Recommended for security)</li><li>true: Speed mode: (High-risk acceleration) Skip verification, speed up primary node promotion. High-level operation, highly likely to cause a single primary node in abnormal situations.</li></ul><p>Default value: false</p>
 */
class ChangeReplicaToMasterRequest extends AbstractModel
{
    /**
     * @var string <p>Specifies the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Replica node group ID. Use the interface <a href="https://www.tencentcloud.com/document/product/239/50312?from_cn_redirect=1">DescribeInstanceZoneInfo</a> to obtain the id information of the multi-AZ replica node group. For a single AZ, no need to configure this parameter.</p>
     */
    public $GroupId;

    /**
     * @var boolean <p>Emergency mode.</p><p>Enumeration values:</p><ul><li>false: Standard mode (Recommended for security)</li><li>true: Speed mode: (High-risk acceleration) Skip verification, speed up primary node promotion. High-level operation, highly likely to cause a single primary node in abnormal situations.</li></ul><p>Default value: false</p>
     */
    public $Emergency;

    /**
     * @param string $InstanceId <p>Specifies the instance ID. Example: crs-xjhsdj****. Log in to the <a href="https://console.cloud.tencent.com/redis">Redis console</a> and copy the instance ID from the instance list.</p>
     * @param integer $GroupId <p>Replica node group ID. Use the interface <a href="https://www.tencentcloud.com/document/product/239/50312?from_cn_redirect=1">DescribeInstanceZoneInfo</a> to obtain the id information of the multi-AZ replica node group. For a single AZ, no need to configure this parameter.</p>
     * @param boolean $Emergency <p>Emergency mode.</p><p>Enumeration values:</p><ul><li>false: Standard mode (Recommended for security)</li><li>true: Speed mode: (High-risk acceleration) Skip verification, speed up primary node promotion. High-level operation, highly likely to cause a single primary node in abnormal situations.</li></ul><p>Default value: false</p>
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Emergency",$param) and $param["Emergency"] !== null) {
            $this->Emergency = $param["Emergency"];
        }
    }
}
