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
 * @method integer getProjectId() 获取Project ID
 * @method void setProjectId(integer $ProjectId) 设置Project ID
 * @method string getCreateTime() 获取Creation time
 * @method void setCreateTime(string $CreateTime) 设置Creation time
 * @method string getSecurityGroupId() 获取Security group ID
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置Security group ID
 * @method string getSecurityGroupName() 获取Security group name
 * @method void setSecurityGroupName(string $SecurityGroupName) 设置Security group name
 * @method string getSecurityGroupRemark() 获取Security group remarks
 * @method void setSecurityGroupRemark(string $SecurityGroupRemark) 设置Security group remarks
 * @method array getInboundRule() 获取Security group inbound rule
 * @method void setInboundRule(array $InboundRule) 设置Security group inbound rule
 * @method array getOutboundRule() 获取Security group outbound rule
 * @method void setOutboundRule(array $OutboundRule) 设置Security group outbound rule
 */

/**
 *Security group details
 */
class SecurityGroupDetail extends AbstractModel
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
     * @var array Security group inbound rule
     */
    public $InboundRule;

    /**
     * @var array Security group outbound rule
     */
    public $OutboundRule;
    /**
     * @param integer $ProjectId Project ID
     * @param string $CreateTime Creation time
     * @param string $SecurityGroupId Security group ID
     * @param string $SecurityGroupName Security group name
     * @param string $SecurityGroupRemark Security group remarks
     * @param array $InboundRule Security group inbound rule
     * @param array $OutboundRule Security group outbound rule
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
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
