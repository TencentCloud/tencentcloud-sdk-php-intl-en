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
 * Parameters passed for the Create New mode
 *
 * @method array getVpcList() Obtain VPC list for the Create New mode
 * @method void setVpcList(array $VpcList) Set VPC list for the Create New mode
 * @method array getEips() Obtain The list of egress public EIPs bound for the Create New mode. Either Eips or AddCount is required.
 * @method void setEips(array $Eips) Set The list of egress public EIPs bound for the Create New mode. Either Eips or AddCount is required.
 * @method integer getAddCount() Obtain The number of egress public EIPs newly bound for the Create New mode. Either Eips or AddCount is required.
 * @method void setAddCount(integer $AddCount) Set The number of egress public EIPs newly bound for the Create New mode. Either Eips or AddCount is required.
 */
class NewModeItems extends AbstractModel
{
    /**
     * @var array VPC list for the Create New mode
     */
    public $VpcList;

    /**
     * @var array The list of egress public EIPs bound for the Create New mode. Either Eips or AddCount is required.
     */
    public $Eips;

    /**
     * @var integer The number of egress public EIPs newly bound for the Create New mode. Either Eips or AddCount is required.
     */
    public $AddCount;

    /**
     * @param array $VpcList VPC list for the Create New mode
     * @param array $Eips The list of egress public EIPs bound for the Create New mode. Either Eips or AddCount is required.
     * @param integer $AddCount The number of egress public EIPs newly bound for the Create New mode. Either Eips or AddCount is required.
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
        if (array_key_exists("VpcList",$param) and $param["VpcList"] !== null) {
            $this->VpcList = $param["VpcList"];
        }

        if (array_key_exists("Eips",$param) and $param["Eips"] !== null) {
            $this->Eips = $param["Eips"];
        }

        if (array_key_exists("AddCount",$param) and $param["AddCount"] !== null) {
            $this->AddCount = $param["AddCount"];
        }
    }
}
