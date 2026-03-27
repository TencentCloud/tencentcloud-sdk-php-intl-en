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
 * Security Group
 *
 * @method integer getProjectId() Obtain Project ID
 * @method void setProjectId(integer $ProjectId) Set Project ID
 * @method string getCreateTime() Obtain Creation Time, Time format: yyyy-mm-dd hh:mm:ss
 * @method void setCreateTime(string $CreateTime) Set Creation Time, Time format: yyyy-mm-dd hh:mm:ss
 * @method array getInboundSet() Obtain Inbound Rules
 * @method void setInboundSet(array $InboundSet) Set Inbound Rules
 * @method array getOutboundSet() Obtain Outbound Rules
 * @method void setOutboundSet(array $OutboundSet) Set Outbound Rules
 * @method string getSecurityGroupId() Obtain Security Group ID
 * @method void setSecurityGroupId(string $SecurityGroupId) Set Security Group ID
 * @method string getSecurityGroupName() Obtain Security Group Name
 * @method void setSecurityGroupName(string $SecurityGroupName) Set Security Group Name
 * @method string getSecurityGroupRemark() Obtain Security Group Remarks
 * @method void setSecurityGroupRemark(string $SecurityGroupRemark) Set Security Group Remarks
 */
class SecurityGroup extends AbstractModel
{
    /**
     * @var integer Project ID
     */
    public $ProjectId;

    /**
     * @var string Creation Time, Time format: yyyy-mm-dd hh:mm:ss
     */
    public $CreateTime;

    /**
     * @var array Inbound Rules
     */
    public $InboundSet;

    /**
     * @var array Outbound Rules
     */
    public $OutboundSet;

    /**
     * @var string Security Group ID
     */
    public $SecurityGroupId;

    /**
     * @var string Security Group Name
     */
    public $SecurityGroupName;

    /**
     * @var string Security Group Remarks
     */
    public $SecurityGroupRemark;

    /**
     * @param integer $ProjectId Project ID
     * @param string $CreateTime Creation Time, Time format: yyyy-mm-dd hh:mm:ss
     * @param array $InboundSet Inbound Rules
     * @param array $OutboundSet Outbound Rules
     * @param string $SecurityGroupId Security Group ID
     * @param string $SecurityGroupName Security Group Name
     * @param string $SecurityGroupRemark Security Group Remarks
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
