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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSecurityGroupRules request structure.
 *
 * @method array getData() Obtain Added enterprise security group rule data
 * @method void setData(array $Data) Set Added enterprise security group rule data
 * @method integer getDirection() Obtain Direction. 0: outbound; 1: inbound. 1 by default
 * @method void setDirection(integer $Direction) Set Direction. 0: outbound; 1: inbound. 1 by default
 * @method integer getType() Obtain 0: at the end; 1: at the top; 2: in the middle. 0 by default
 * @method void setType(integer $Type) Set 0: at the end; 1: at the top; 2: in the middle. 0 by default
 * @method integer getEnable() Obtain Indicates whether to enable rules after addition. 0: disable; 1: enable. 1 by default
 * @method void setEnable(integer $Enable) Set Indicates whether to enable rules after addition. 0: disable; 1: enable. 1 by default
 */
class CreateSecurityGroupRulesRequest extends AbstractModel
{
    /**
     * @var array Added enterprise security group rule data
     */
    public $Data;

    /**
     * @var integer Direction. 0: outbound; 1: inbound. 1 by default
     */
    public $Direction;

    /**
     * @var integer 0: at the end; 1: at the top; 2: in the middle. 0 by default
     */
    public $Type;

    /**
     * @var integer Indicates whether to enable rules after addition. 0: disable; 1: enable. 1 by default
     */
    public $Enable;

    /**
     * @param array $Data Added enterprise security group rule data
     * @param integer $Direction Direction. 0: outbound; 1: inbound. 1 by default
     * @param integer $Type 0: at the end; 1: at the top; 2: in the middle. 0 by default
     * @param integer $Enable Indicates whether to enable rules after addition. 0: disable; 1: enable. 1 by default
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new SecurityGroupListData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
