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
 * ModifySecurityGroupSequenceRules request structure.
 *
 * @method integer getDirection() Obtain Direction. 0: outbound; 1: inbound. 1 by default
 * @method void setDirection(integer $Direction) Set Direction. 0: outbound; 1: inbound. 1 by default
 * @method array getData() Obtain Sorting data of enterprise security group rules
 * @method void setData(array $Data) Set Sorting data of enterprise security group rules
 */
class ModifySecurityGroupSequenceRulesRequest extends AbstractModel
{
    /**
     * @var integer Direction. 0: outbound; 1: inbound. 1 by default
     */
    public $Direction;

    /**
     * @var array Sorting data of enterprise security group rules
     */
    public $Data;

    /**
     * @param integer $Direction Direction. 0: outbound; 1: inbound. 1 by default
     * @param array $Data Sorting data of enterprise security group rules
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
        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new SecurityGroupOrderIndexData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }
    }
}
