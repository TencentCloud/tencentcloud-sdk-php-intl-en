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
 * VPC information of CHDFS products
 *
 * @method string getVpcId() Obtain vpc id

Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcId(string $VpcId) Set vpc id

Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getVpcName() Obtain VPC name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcName(string $VpcName) Set VPC name
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getVpcCidrBlock() Obtain VPC subnet information list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setVpcCidrBlock(array $VpcCidrBlock) Set VPC subnet information list
Note: This field may return null, indicating that no valid values can be obtained.
 * @method integer getRuleId() Obtain Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRuleId(integer $RuleId) Set Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getAccessGroupId() Obtain Permission group ID
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccessGroupId(string $AccessGroupId) Set Permission group ID
Note: This field may return null, indicating that no valid values can be obtained.
 */
class CHDFSProductVpcInfo extends AbstractModel
{
    /**
     * @var string vpc id

Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcId;

    /**
     * @var string VPC name
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcName;

    /**
     * @var array VPC subnet information list
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $VpcCidrBlock;

    /**
     * @var integer Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $RuleId;

    /**
     * @var string Permission group ID
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccessGroupId;

    /**
     * @param string $VpcId vpc id

Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $VpcName VPC name
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $VpcCidrBlock VPC subnet information list
Note: This field may return null, indicating that no valid values can be obtained.
     * @param integer $RuleId Rule ID
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $AccessGroupId Permission group ID
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("VpcCidrBlock",$param) and $param["VpcCidrBlock"] !== null) {
            $this->VpcCidrBlock = [];
            foreach ($param["VpcCidrBlock"] as $key => $value){
                $obj = new VpcCidrBlock();
                $obj->deserialize($value);
                array_push($this->VpcCidrBlock, $obj);
            }
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("AccessGroupId",$param) and $param["AccessGroupId"] !== null) {
            $this->AccessGroupId = $param["AccessGroupId"];
        }
    }
}
