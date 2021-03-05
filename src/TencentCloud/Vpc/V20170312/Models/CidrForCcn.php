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
 * Publishes the routing policy of the VPC subnet to CCN
 *
 * @method string getCidr() Obtain Local CIDR block, including subnet CIDR block and secondary CIDR block
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setCidr(string $Cidr) Set Local CIDR block, including subnet CIDR block and secondary CIDR block
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method boolean getPublishedToVbc() Obtain Whether the routing policy of the VPC subnet is published to CCN.
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setPublishedToVbc(boolean $PublishedToVbc) Set Whether the routing policy of the VPC subnet is published to CCN.
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class CidrForCcn extends AbstractModel
{
    /**
     * @var string Local CIDR block, including subnet CIDR block and secondary CIDR block
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $Cidr;

    /**
     * @var boolean Whether the routing policy of the VPC subnet is published to CCN.
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $PublishedToVbc;

    /**
     * @param string $Cidr Local CIDR block, including subnet CIDR block and secondary CIDR block
Note: this field may return `null`, indicating that no valid values can be obtained.
     * @param boolean $PublishedToVbc Whether the routing policy of the VPC subnet is published to CCN.
Note: this field may return `null`, indicating that no valid values can be obtained.
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
        if (array_key_exists("Cidr",$param) and $param["Cidr"] !== null) {
            $this->Cidr = $param["Cidr"];
        }

        if (array_key_exists("PublishedToVbc",$param) and $param["PublishedToVbc"] !== null) {
            $this->PublishedToVbc = $param["PublishedToVbc"];
        }
    }
}
