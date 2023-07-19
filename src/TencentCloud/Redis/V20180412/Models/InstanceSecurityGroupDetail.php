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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Security group information of the instance
 *
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method array getSecurityGroupDetails() Obtain Security group information, which includes  security group ID, name, outbound and inbound rules.
 * @method void setSecurityGroupDetails(array $SecurityGroupDetails) Set Security group information, which includes  security group ID, name, outbound and inbound rules.
 */
class InstanceSecurityGroupDetail extends AbstractModel
{
    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var array Security group information, which includes  security group ID, name, outbound and inbound rules.
     */
    public $SecurityGroupDetails;

    /**
     * @param string $InstanceId Instance ID
     * @param array $SecurityGroupDetails Security group information, which includes  security group ID, name, outbound and inbound rules.
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

        if (array_key_exists("SecurityGroupDetails",$param) and $param["SecurityGroupDetails"] !== null) {
            $this->SecurityGroupDetails = [];
            foreach ($param["SecurityGroupDetails"] as $key => $value){
                $obj = new SecurityGroupDetail();
                $obj->deserialize($value);
                array_push($this->SecurityGroupDetails, $obj);
            }
        }
    }
}
