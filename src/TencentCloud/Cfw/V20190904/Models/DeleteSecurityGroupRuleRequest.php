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
 * DeleteSecurityGroupRule request structure.
 *
 * @method integer getId() Obtain ID of the rule to delete
 * @method void setId(integer $Id) Set ID of the rule to delete
 * @method string getArea() Obtain Tencent Cloud region (abbreviation)
 * @method void setArea(string $Area) Set Tencent Cloud region (abbreviation)
 * @method integer getDirection() Obtain Direction. 0: outbound; 1: inbound
 * @method void setDirection(integer $Direction) Set Direction. 0: outbound; 1: inbound
 * @method integer getIsDelReverse() Obtain Indicates whether to delete the reverse rule. 0: no; 1: yes
 * @method void setIsDelReverse(integer $IsDelReverse) Set Indicates whether to delete the reverse rule. 0: no; 1: yes
 */
class DeleteSecurityGroupRuleRequest extends AbstractModel
{
    /**
     * @var integer ID of the rule to delete
     */
    public $Id;

    /**
     * @var string Tencent Cloud region (abbreviation)
     */
    public $Area;

    /**
     * @var integer Direction. 0: outbound; 1: inbound
     */
    public $Direction;

    /**
     * @var integer Indicates whether to delete the reverse rule. 0: no; 1: yes
     */
    public $IsDelReverse;

    /**
     * @param integer $Id ID of the rule to delete
     * @param string $Area Tencent Cloud region (abbreviation)
     * @param integer $Direction Direction. 0: outbound; 1: inbound
     * @param integer $IsDelReverse Indicates whether to delete the reverse rule. 0: no; 1: yes
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("IsDelReverse",$param) and $param["IsDelReverse"] !== null) {
            $this->IsDelReverse = $param["IsDelReverse"];
        }
    }
}
