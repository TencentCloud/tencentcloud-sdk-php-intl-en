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
 * ModifyDBInstanceSecurityGroups request structure.
 *
 * @method string getInstanceId() Obtain Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method void setInstanceId(string $InstanceId) Set Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
 * @method array getSecurityGroupIds() Obtain List of security group IDs to modify, an array of security group IDs. It can be obtained through the API [DescribeDBSecurityGroups](https://www.tencentcloud.com/document/product/236/15854?from_cn_redirect=1). The input security group ID array has no length limit.
**Note**: This input parameter performs a full replacement on all existing collections but not an incremental update. To modify it, import the expected full collections.
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set List of security group IDs to modify, an array of security group IDs. It can be obtained through the API [DescribeDBSecurityGroups](https://www.tencentcloud.com/document/product/236/15854?from_cn_redirect=1). The input security group ID array has no length limit.
**Note**: This input parameter performs a full replacement on all existing collections but not an incremental update. To modify it, import the expected full collections.
 * @method boolean getForReadonlyInstance() Obtain When importing a read-only instance ID, the default operation is performed on the corresponding security group of the read-only group. If necessary to operate the security group of the read-only instance ID, set this input parameter to True. Default False.
 * @method void setForReadonlyInstance(boolean $ForReadonlyInstance) Set When importing a read-only instance ID, the default operation is performed on the corresponding security group of the read-only group. If necessary to operate the security group of the read-only instance ID, set this input parameter to True. Default False.
 * @method string getOpResourceId() Obtain When updating the read-only group of a cloud disk edition instance, specify the instance ID in InstanceId and this parameter to indicate the operation is for the read-only group. If you perform the operation on the read-write node, this parameter is not required.
 * @method void setOpResourceId(string $OpResourceId) Set When updating the read-only group of a cloud disk edition instance, specify the instance ID in InstanceId and this parameter to indicate the operation is for the read-only group. If you perform the operation on the read-write node, this parameter is not required.
 */
class ModifyDBInstanceSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     */
    public $InstanceId;

    /**
     * @var array List of security group IDs to modify, an array of security group IDs. It can be obtained through the API [DescribeDBSecurityGroups](https://www.tencentcloud.com/document/product/236/15854?from_cn_redirect=1). The input security group ID array has no length limit.
**Note**: This input parameter performs a full replacement on all existing collections but not an incremental update. To modify it, import the expected full collections.
     */
    public $SecurityGroupIds;

    /**
     * @var boolean When importing a read-only instance ID, the default operation is performed on the corresponding security group of the read-only group. If necessary to operate the security group of the read-only instance ID, set this input parameter to True. Default False.
     */
    public $ForReadonlyInstance;

    /**
     * @var string When updating the read-only group of a cloud disk edition instance, specify the instance ID in InstanceId and this parameter to indicate the operation is for the read-only group. If you perform the operation on the read-write node, this parameter is not required.
     */
    public $OpResourceId;

    /**
     * @param string $InstanceId Instance ID in the format of cdb-c1nl9rpv or cdbro-c1nl9rpv. It is the same as the instance ID displayed on the TencentDB Console page.
     * @param array $SecurityGroupIds List of security group IDs to modify, an array of security group IDs. It can be obtained through the API [DescribeDBSecurityGroups](https://www.tencentcloud.com/document/product/236/15854?from_cn_redirect=1). The input security group ID array has no length limit.
**Note**: This input parameter performs a full replacement on all existing collections but not an incremental update. To modify it, import the expected full collections.
     * @param boolean $ForReadonlyInstance When importing a read-only instance ID, the default operation is performed on the corresponding security group of the read-only group. If necessary to operate the security group of the read-only instance ID, set this input parameter to True. Default False.
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

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("ForReadonlyInstance",$param) and $param["ForReadonlyInstance"] !== null) {
            $this->ForReadonlyInstance = $param["ForReadonlyInstance"];
        }

        if (array_key_exists("OpResourceId",$param) and $param["OpResourceId"] !== null) {
            $this->OpResourceId = $param["OpResourceId"];
        }
    }
}
