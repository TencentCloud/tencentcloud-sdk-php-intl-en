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
 * DeleteAcRule request structure.
 *
 * @method integer getId() Obtain The ID of the rule to delete. It can be queried via the DescribeAcLists API.
 * @method void setId(integer $Id) Set The ID of the rule to delete. It can be queried via the DescribeAcLists API.
 * @method integer getDirection() Obtain Direction. 0: outbound; 1: inbound
 * @method void setDirection(integer $Direction) Set Direction. 0: outbound; 1: inbound
 * @method string getEdgeId() Obtain Edge ID between two VPCs
 * @method void setEdgeId(string $EdgeId) Set Edge ID between two VPCs
 * @method string getArea() Obtain NAT region, e.g. ap-shanghai/ap-guangzhou/ap-chongqing
 * @method void setArea(string $Area) Set NAT region, e.g. ap-shanghai/ap-guangzhou/ap-chongqing
 */
class DeleteAcRuleRequest extends AbstractModel
{
    /**
     * @var integer The ID of the rule to delete. It can be queried via the DescribeAcLists API.
     */
    public $Id;

    /**
     * @var integer Direction. 0: outbound; 1: inbound
     */
    public $Direction;

    /**
     * @var string Edge ID between two VPCs
     */
    public $EdgeId;

    /**
     * @var string NAT region, e.g. ap-shanghai/ap-guangzhou/ap-chongqing
     */
    public $Area;

    /**
     * @param integer $Id The ID of the rule to delete. It can be queried via the DescribeAcLists API.
     * @param integer $Direction Direction. 0: outbound; 1: inbound
     * @param string $EdgeId Edge ID between two VPCs
     * @param string $Area NAT region, e.g. ap-shanghai/ap-guangzhou/ap-chongqing
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

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
