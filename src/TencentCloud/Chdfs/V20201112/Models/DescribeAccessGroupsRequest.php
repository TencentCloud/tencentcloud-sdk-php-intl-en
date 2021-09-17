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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccessGroups request structure.
 *
 * @method string getVpcId() Obtain VPC ID
Note: either `VpcId` or `OwnerUin` can be specified as the input parameter
 * @method void setVpcId(string $VpcId) Set VPC ID
Note: either `VpcId` or `OwnerUin` can be specified as the input parameter
 * @method integer getOwnerUin() Obtain Resource owner `Uin`
 * @method void setOwnerUin(integer $OwnerUin) Set Resource owner `Uin`
 */
class DescribeAccessGroupsRequest extends AbstractModel
{
    /**
     * @var string VPC ID
Note: either `VpcId` or `OwnerUin` can be specified as the input parameter
     */
    public $VpcId;

    /**
     * @var integer Resource owner `Uin`
     */
    public $OwnerUin;

    /**
     * @param string $VpcId VPC ID
Note: either `VpcId` or `OwnerUin` can be specified as the input parameter
     * @param integer $OwnerUin Resource owner `Uin`
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

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }
    }
}
