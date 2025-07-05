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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Security group information
 *
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getCreateTime() Obtain Creation time
 * @method void setCreateTime(string $CreateTime) Set Creation time
 * @method array getInbound() Obtain Inbound rule
 * @method void setInbound(array $Inbound) Set Inbound rule
 * @method array getOutbound() Obtain Outbound rule
 * @method void setOutbound(array $Outbound) Set Outbound rule
 * @method string getSecurityGroupId() Obtain Security group ID
 * @method void setSecurityGroupId(string $SecurityGroupId) Set Security group ID
 * @method string getSecurityGroupName() Obtain Security group name
 * @method void setSecurityGroupName(string $SecurityGroupName) Set Security group name
 * @method string getSecurityGroupDescription() Obtain Security group remarks
 * @method void setSecurityGroupDescription(string $SecurityGroupDescription) Set Security group remarks
 */
class SecurityGroup extends AbstractModel
{
    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var string Creation time
     */
    public $CreateTime;

    /**
     * @var array Inbound rule
     */
    public $Inbound;

    /**
     * @var array Outbound rule
     */
    public $Outbound;

    /**
     * @var string Security group ID
     */
    public $SecurityGroupId;

    /**
     * @var string Security group name
     */
    public $SecurityGroupName;

    /**
     * @var string Security group remarks
     */
    public $SecurityGroupDescription;

    /**
     * @param integer $ProjectId Project ID
     * @param string $CreateTime Creation time
     * @param array $Inbound Inbound rule
     * @param array $Outbound Outbound rule
     * @param string $SecurityGroupId Security group ID
     * @param string $SecurityGroupName Security group name
     * @param string $SecurityGroupDescription Security group remarks
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Inbound",$param) and $param["Inbound"] !== null) {
            $this->Inbound = [];
            foreach ($param["Inbound"] as $key => $value){
                $obj = new PolicyRule();
                $obj->deserialize($value);
                array_push($this->Inbound, $obj);
            }
        }

        if (array_key_exists("Outbound",$param) and $param["Outbound"] !== null) {
            $this->Outbound = [];
            foreach ($param["Outbound"] as $key => $value){
                $obj = new PolicyRule();
                $obj->deserialize($value);
                array_push($this->Outbound, $obj);
            }
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("SecurityGroupName",$param) and $param["SecurityGroupName"] !== null) {
            $this->SecurityGroupName = $param["SecurityGroupName"];
        }

        if (array_key_exists("SecurityGroupDescription",$param) and $param["SecurityGroupDescription"] !== null) {
            $this->SecurityGroupDescription = $param["SecurityGroupDescription"];
        }
    }
}
