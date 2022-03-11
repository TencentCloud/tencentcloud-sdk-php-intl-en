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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Security group quota limit
 *
 * @method integer getSecurityGroupLimit() Obtain Total number of security groups that can be created
 * @method void setSecurityGroupLimit(integer $SecurityGroupLimit) Set Total number of security groups that can be created
 * @method integer getSecurityGroupPolicyLimit() Obtain Maximum number of rules under the security group
 * @method void setSecurityGroupPolicyLimit(integer $SecurityGroupPolicyLimit) Set Maximum number of rules under the security group
 * @method integer getReferedSecurityGroupLimit() Obtain Number of nested security group rules under the security group
 * @method void setReferedSecurityGroupLimit(integer $ReferedSecurityGroupLimit) Set Number of nested security group rules under the security group
 * @method integer getSecurityGroupInstanceLimit() Obtain Number of instances associated with the security group
 * @method void setSecurityGroupInstanceLimit(integer $SecurityGroupInstanceLimit) Set Number of instances associated with the security group
 * @method integer getInstanceSecurityGroupLimit() Obtain Number of security groups associated with the instance
 * @method void setInstanceSecurityGroupLimit(integer $InstanceSecurityGroupLimit) Set Number of security groups associated with the instance
 * @method integer getSecurityGroupModuleLimit() Obtain Number of modules associated with the security group
 * @method void setSecurityGroupModuleLimit(integer $SecurityGroupModuleLimit) Set Number of modules associated with the security group
 * @method integer getModuleSecurityGroupLimit() Obtain Number of security groups associated with the module
 * @method void setModuleSecurityGroupLimit(integer $ModuleSecurityGroupLimit) Set Number of security groups associated with the module
 */
class SecurityGroupLimitSet extends AbstractModel
{
    /**
     * @var integer Total number of security groups that can be created
     */
    public $SecurityGroupLimit;

    /**
     * @var integer Maximum number of rules under the security group
     */
    public $SecurityGroupPolicyLimit;

    /**
     * @var integer Number of nested security group rules under the security group
     */
    public $ReferedSecurityGroupLimit;

    /**
     * @var integer Number of instances associated with the security group
     */
    public $SecurityGroupInstanceLimit;

    /**
     * @var integer Number of security groups associated with the instance
     */
    public $InstanceSecurityGroupLimit;

    /**
     * @var integer Number of modules associated with the security group
     */
    public $SecurityGroupModuleLimit;

    /**
     * @var integer Number of security groups associated with the module
     */
    public $ModuleSecurityGroupLimit;

    /**
     * @param integer $SecurityGroupLimit Total number of security groups that can be created
     * @param integer $SecurityGroupPolicyLimit Maximum number of rules under the security group
     * @param integer $ReferedSecurityGroupLimit Number of nested security group rules under the security group
     * @param integer $SecurityGroupInstanceLimit Number of instances associated with the security group
     * @param integer $InstanceSecurityGroupLimit Number of security groups associated with the instance
     * @param integer $SecurityGroupModuleLimit Number of modules associated with the security group
     * @param integer $ModuleSecurityGroupLimit Number of security groups associated with the module
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
        if (array_key_exists("SecurityGroupLimit",$param) and $param["SecurityGroupLimit"] !== null) {
            $this->SecurityGroupLimit = $param["SecurityGroupLimit"];
        }

        if (array_key_exists("SecurityGroupPolicyLimit",$param) and $param["SecurityGroupPolicyLimit"] !== null) {
            $this->SecurityGroupPolicyLimit = $param["SecurityGroupPolicyLimit"];
        }

        if (array_key_exists("ReferedSecurityGroupLimit",$param) and $param["ReferedSecurityGroupLimit"] !== null) {
            $this->ReferedSecurityGroupLimit = $param["ReferedSecurityGroupLimit"];
        }

        if (array_key_exists("SecurityGroupInstanceLimit",$param) and $param["SecurityGroupInstanceLimit"] !== null) {
            $this->SecurityGroupInstanceLimit = $param["SecurityGroupInstanceLimit"];
        }

        if (array_key_exists("InstanceSecurityGroupLimit",$param) and $param["InstanceSecurityGroupLimit"] !== null) {
            $this->InstanceSecurityGroupLimit = $param["InstanceSecurityGroupLimit"];
        }

        if (array_key_exists("SecurityGroupModuleLimit",$param) and $param["SecurityGroupModuleLimit"] !== null) {
            $this->SecurityGroupModuleLimit = $param["SecurityGroupModuleLimit"];
        }

        if (array_key_exists("ModuleSecurityGroupLimit",$param) and $param["ModuleSecurityGroupLimit"] !== null) {
            $this->ModuleSecurityGroupLimit = $param["ModuleSecurityGroupLimit"];
        }
    }
}
