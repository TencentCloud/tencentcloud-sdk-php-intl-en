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
 * CreateAccessGroup request structure.
 *
 * @method string getAccessGroupName() Obtain Permission group name
 * @method void setAccessGroupName(string $AccessGroupName) Set Permission group name
 * @method integer getVpcType() Obtain VPC type (1: CVM; 2: BM 1.0)
 * @method void setVpcType(integer $VpcType) Set VPC type (1: CVM; 2: BM 1.0)
 * @method string getVpcId() Obtain VPC ID
 * @method void setVpcId(string $VpcId) Set VPC ID
 * @method string getDescription() Obtain Permission group description, which is an empty string by default
 * @method void setDescription(string $Description) Set Permission group description, which is an empty string by default
 */
class CreateAccessGroupRequest extends AbstractModel
{
    /**
     * @var string Permission group name
     */
    public $AccessGroupName;

    /**
     * @var integer VPC type (1: CVM; 2: BM 1.0)
     */
    public $VpcType;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string Permission group description, which is an empty string by default
     */
    public $Description;

    /**
     * @param string $AccessGroupName Permission group name
     * @param integer $VpcType VPC type (1: CVM; 2: BM 1.0)
     * @param string $VpcId VPC ID
     * @param string $Description Permission group description, which is an empty string by default
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
        if (array_key_exists("AccessGroupName",$param) and $param["AccessGroupName"] !== null) {
            $this->AccessGroupName = $param["AccessGroupName"];
        }

        if (array_key_exists("VpcType",$param) and $param["VpcType"] !== null) {
            $this->VpcType = $param["VpcType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
