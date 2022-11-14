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
 * ModifyAcRule request structure.
 *
 * @method array getData() Obtain Array of rules
 * @method void setData(array $Data) Set Array of rules
 * @method string getEdgeId() Obtain EdgeId value
 * @method void setEdgeId(string $EdgeId) Set EdgeId value
 * @method integer getEnable() Obtain Access rule status
 * @method void setEnable(integer $Enable) Set Access rule status
 * @method string getArea() Obtain NAT region
 * @method void setArea(string $Area) Set NAT region
 */
class ModifyAcRuleRequest extends AbstractModel
{
    /**
     * @var array Array of rules
     */
    public $Data;

    /**
     * @var string EdgeId value
     */
    public $EdgeId;

    /**
     * @var integer Access rule status
     */
    public $Enable;

    /**
     * @var string NAT region
     */
    public $Area;

    /**
     * @param array $Data Array of rules
     * @param string $EdgeId EdgeId value
     * @param integer $Enable Access rule status
     * @param string $Area NAT region
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
                $obj = new RuleInfoData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
