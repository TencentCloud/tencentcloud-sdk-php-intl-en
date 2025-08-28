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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 
 *
 * @method integer getProjectId() Obtain 
 * @method void setProjectId(integer $ProjectId) Set 
 * @method string getCreateTime() Obtain 
 * @method void setCreateTime(string $CreateTime) Set 
 * @method array getInboundSet() Obtain 
 * @method void setInboundSet(array $InboundSet) Set 
 * @method array getOutboundSet() Obtain 
 * @method void setOutboundSet(array $OutboundSet) Set 
 * @method string getSecurityGroupId() Obtain 
 * @method void setSecurityGroupId(string $SecurityGroupId) Set 
 * @method string getSecurityGroupName() Obtain 
 * @method void setSecurityGroupName(string $SecurityGroupName) Set 
 * @method string getSecurityGroupRemark() Obtain 
 * @method void setSecurityGroupRemark(string $SecurityGroupRemark) Set 
 */
class SecurityGroup extends AbstractModel
{
    /**
     * @var integer 
     */
    public $ProjectId;

    /**
     * @var string 
     */
    public $CreateTime;

    /**
     * @var array 
     */
    public $InboundSet;

    /**
     * @var array 
     */
    public $OutboundSet;

    /**
     * @var string 
     */
    public $SecurityGroupId;

    /**
     * @var string 
     */
    public $SecurityGroupName;

    /**
     * @var string 
     */
    public $SecurityGroupRemark;

    /**
     * @param integer $ProjectId 
     * @param string $CreateTime 
     * @param array $InboundSet 
     * @param array $OutboundSet 
     * @param string $SecurityGroupId 
     * @param string $SecurityGroupName 
     * @param string $SecurityGroupRemark 
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

        if (array_key_exists("InboundSet",$param) and $param["InboundSet"] !== null) {
            $this->InboundSet = [];
            foreach ($param["InboundSet"] as $key => $value){
                $obj = new SecurityGroupPolicy();
                $obj->deserialize($value);
                array_push($this->InboundSet, $obj);
            }
        }

        if (array_key_exists("OutboundSet",$param) and $param["OutboundSet"] !== null) {
            $this->OutboundSet = [];
            foreach ($param["OutboundSet"] as $key => $value){
                $obj = new SecurityGroupPolicy();
                $obj->deserialize($value);
                array_push($this->OutboundSet, $obj);
            }
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
    }
}
