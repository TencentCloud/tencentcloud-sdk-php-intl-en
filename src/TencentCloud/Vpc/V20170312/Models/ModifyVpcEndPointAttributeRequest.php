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
 * ModifyVpcEndPointAttribute request structure.
 *
 * @method string getEndPointId() Obtain Endpoint ID
 * @method void setEndPointId(string $EndPointId) Set Endpoint ID
 * @method string getEndPointName() Obtain Endpoint name
 * @method void setEndPointName(string $EndPointName) Set Endpoint name
 * @method array getSecurityGroupIds() Obtain List of security group IDs
 * @method void setSecurityGroupIds(array $SecurityGroupIds) Set List of security group IDs
 */
class ModifyVpcEndPointAttributeRequest extends AbstractModel
{
    /**
     * @var string Endpoint ID
     */
    public $EndPointId;

    /**
     * @var string Endpoint name
     */
    public $EndPointName;

    /**
     * @var array List of security group IDs
     */
    public $SecurityGroupIds;

    /**
     * @param string $EndPointId Endpoint ID
     * @param string $EndPointName Endpoint name
     * @param array $SecurityGroupIds List of security group IDs
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
        if (array_key_exists("EndPointId",$param) and $param["EndPointId"] !== null) {
            $this->EndPointId = $param["EndPointId"];
        }

        if (array_key_exists("EndPointName",$param) and $param["EndPointName"] !== null) {
            $this->EndPointName = $param["EndPointName"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
