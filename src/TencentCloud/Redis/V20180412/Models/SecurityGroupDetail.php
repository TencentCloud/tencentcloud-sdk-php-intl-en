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
 * Security group details
 *
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getCreateTime() Obtain Security group creation time
 * @method void setCreateTime(string $CreateTime) Set Security group creation time
 * @method string getSecurityGroupId() Obtain Security group ID
 * @method void setSecurityGroupId(string $SecurityGroupId) Set Security group ID
 * @method string getSecurityGroupName() Obtain Security group name
 * @method void setSecurityGroupName(string $SecurityGroupName) Set Security group name
 * @method string getSecurityGroupRemark() Obtain Security group remarks
 * @method void setSecurityGroupRemark(string $SecurityGroupRemark) Set Security group remarks
 * @method array getInboundRule() Obtain Inbound rules of the security group, which control the access source to the database.
 * @method void setInboundRule(array $InboundRule) Set Inbound rules of the security group, which control the access source to the database.
 * @method array getOutboundRule() Obtain Security group outbound rule
 * @method void setOutboundRule(array $OutboundRule) Set Security group outbound rule
 */
class SecurityGroupDetail extends AbstractModel
{
    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var string Security group creation time
     */
    public $CreateTime;

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
    public $SecurityGroupRemark;

    /**
     * @var array Inbound rules of the security group, which control the access source to the database.
     */
    public $InboundRule;

    /**
     * @var array Security group outbound rule
     */
    public $OutboundRule;

    /**
     * @param integer $ProjectId Project ID
     * @param string $CreateTime Security group creation time
     * @param string $SecurityGroupId Security group ID
     * @param string $SecurityGroupName Security group name
     * @param string $SecurityGroupRemark Security group remarks
     * @param array $InboundRule Inbound rules of the security group, which control the access source to the database.
     * @param array $OutboundRule Security group outbound rule
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

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("SecurityGroupName",$param) and $param["SecurityGroupName"] !== null) {
            $this->SecurityGroupName = $param["SecurityGroupName"];
        }

        if (array_key_exists("SecurityGroupRemark",$param) and $param["SecurityGroupRemark"] !== null) {
            $this->SecurityGroupRemark = $param["SecurityGroupRemark"];
        }

        if (array_key_exists("InboundRule",$param) and $param["InboundRule"] !== null) {
            $this->InboundRule = [];
            foreach ($param["InboundRule"] as $key => $value){
                $obj = new SecurityGroupsInboundAndOutbound();
                $obj->deserialize($value);
                array_push($this->InboundRule, $obj);
            }
        }

        if (array_key_exists("OutboundRule",$param) and $param["OutboundRule"] !== null) {
            $this->OutboundRule = [];
            foreach ($param["OutboundRule"] as $key => $value){
                $obj = new SecurityGroupsInboundAndOutbound();
                $obj->deserialize($value);
                array_push($this->OutboundRule, $obj);
            }
        }
    }
}
