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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CheckAssistantCidr request structure.
 *
 * @method string getVpcId() Obtain `VPC` instance `ID`, e.g. `vpc-6v2ht8q5`.
 * @method void setVpcId(string $VpcId) Set `VPC` instance `ID`, e.g. `vpc-6v2ht8q5`.
 * @method array getNewCidrBlocks() Obtain Load CIDR blocks to add. CIDR block set; format: e.g. ["10.0.0.0/16", "172.16.0.0/16"]
 * @method void setNewCidrBlocks(array $NewCidrBlocks) Set Load CIDR blocks to add. CIDR block set; format: e.g. ["10.0.0.0/16", "172.16.0.0/16"]
 * @method array getOldCidrBlocks() Obtain Load CIDR blocks to delete. CIDR block set; Format: e.g. ["10.0.0.0/16", "172.16.0.0/16"]
 * @method void setOldCidrBlocks(array $OldCidrBlocks) Set Load CIDR blocks to delete. CIDR block set; Format: e.g. ["10.0.0.0/16", "172.16.0.0/16"]
 */
class CheckAssistantCidrRequest extends AbstractModel
{
    /**
     * @var string `VPC` instance `ID`, e.g. `vpc-6v2ht8q5`.
     */
    public $VpcId;

    /**
     * @var array Load CIDR blocks to add. CIDR block set; format: e.g. ["10.0.0.0/16", "172.16.0.0/16"]
     */
    public $NewCidrBlocks;

    /**
     * @var array Load CIDR blocks to delete. CIDR block set; Format: e.g. ["10.0.0.0/16", "172.16.0.0/16"]
     */
    public $OldCidrBlocks;

    /**
     * @param string $VpcId `VPC` instance `ID`, e.g. `vpc-6v2ht8q5`.
     * @param array $NewCidrBlocks Load CIDR blocks to add. CIDR block set; format: e.g. ["10.0.0.0/16", "172.16.0.0/16"]
     * @param array $OldCidrBlocks Load CIDR blocks to delete. CIDR block set; Format: e.g. ["10.0.0.0/16", "172.16.0.0/16"]
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

        if (array_key_exists("NewCidrBlocks",$param) and $param["NewCidrBlocks"] !== null) {
            $this->NewCidrBlocks = $param["NewCidrBlocks"];
        }

        if (array_key_exists("OldCidrBlocks",$param) and $param["OldCidrBlocks"] !== null) {
            $this->OldCidrBlocks = $param["OldCidrBlocks"];
        }
    }
}
