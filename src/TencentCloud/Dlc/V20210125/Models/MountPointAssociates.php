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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bind fusion bucket information
 *
 * @method string getBucketId() Obtain Bucket ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setBucketId(string $BucketId) Set Bucket ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVpcId() Obtain vpcId
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set vpcId
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVpcCidrBlock() Obtain Subnet address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcCidrBlock(string $VpcCidrBlock) Set Subnet address
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAccessGroupId() Obtain Permission group ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccessGroupId(string $AccessGroupId) Set Permission group ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getAccessRuleId() Obtain Permission rule ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccessRuleId(integer $AccessRuleId) Set Permission rule ID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class MountPointAssociates extends AbstractModel
{
    /**
     * @var string Bucket ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $BucketId;

    /**
     * @var string vpcId
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string Subnet address
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcCidrBlock;

    /**
     * @var string Permission group ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccessGroupId;

    /**
     * @var integer Permission rule ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccessRuleId;

    /**
     * @param string $BucketId Bucket ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VpcId vpcId
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VpcCidrBlock Subnet address
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AccessGroupId Permission group ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $AccessRuleId Permission rule ID
Note: This field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("BucketId",$param) and $param["BucketId"] !== null) {
            $this->BucketId = $param["BucketId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = $param["VpcCidrBlock"];
        }

        if (array_key_exists("AccessGroupId",$param) and $param["AccessGroupId"] !== null) {
            $this->AccessGroupId = $param["AccessGroupId"];
        }

        if (array_key_exists("AccessRuleId",$param) and $param["AccessRuleId"] !== null) {
            $this->AccessRuleId = $param["AccessRuleId"];
        }
    }
}
