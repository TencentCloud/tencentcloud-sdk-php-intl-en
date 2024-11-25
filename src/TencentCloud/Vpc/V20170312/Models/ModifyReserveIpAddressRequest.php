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
 * ModifyReserveIpAddress request structure.
 *
 * @method string getVpcId() Obtain Unique ID of the VPC.
 * @method void setVpcId(string $VpcId) Set Unique ID of the VPC.
 * @method string getReserveIpId() Obtain Unique ID of the reserved private IP address.
 * @method void setReserveIpId(string $ReserveIpId) Set Unique ID of the reserved private IP address.
 * @method string getName() Obtain Name of the reserved private IP address.
 * @method void setName(string $Name) Set Name of the reserved private IP address.
 * @method string getDescription() Obtain Description of the reserved private IP address.
 * @method void setDescription(string $Description) Set Description of the reserved private IP address.
 */
class ModifyReserveIpAddressRequest extends AbstractModel
{
    /**
     * @var string Unique ID of the VPC.
     */
    public $VpcId;

    /**
     * @var string Unique ID of the reserved private IP address.
     */
    public $ReserveIpId;

    /**
     * @var string Name of the reserved private IP address.
     */
    public $Name;

    /**
     * @var string Description of the reserved private IP address.
     */
    public $Description;

    /**
     * @param string $VpcId Unique ID of the VPC.
     * @param string $ReserveIpId Unique ID of the reserved private IP address.
     * @param string $Name Name of the reserved private IP address.
     * @param string $Description Description of the reserved private IP address.
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

        if (array_key_exists("ReserveIpId",$param) and $param["ReserveIpId"] !== null) {
            $this->ReserveIpId = $param["ReserveIpId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
