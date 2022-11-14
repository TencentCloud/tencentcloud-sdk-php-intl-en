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
 * ModifySequenceRules request structure.
 *
 * @method string getEdgeId() Obtain Edge ID value
 * @method void setEdgeId(string $EdgeId) Set Edge ID value
 * @method array getData() Obtain Modifies data
 * @method void setData(array $Data) Set Modifies data
 * @method string getArea() Obtain NAT region
 * @method void setArea(string $Area) Set NAT region
 * @method integer getDirection() Obtain Direction. 0: outbound; 1: inbound
 * @method void setDirection(integer $Direction) Set Direction. 0: outbound; 1: inbound
 */
class ModifySequenceRulesRequest extends AbstractModel
{
    /**
     * @var string Edge ID value
     */
    public $EdgeId;

    /**
     * @var array Modifies data
     */
    public $Data;

    /**
     * @var string NAT region
     */
    public $Area;

    /**
     * @var integer Direction. 0: outbound; 1: inbound
     */
    public $Direction;

    /**
     * @param string $EdgeId Edge ID value
     * @param array $Data Modifies data
     * @param string $Area NAT region
     * @param integer $Direction Direction. 0: outbound; 1: inbound
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
        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new SequenceData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
