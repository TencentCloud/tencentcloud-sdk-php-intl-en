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
 * ModifyNatFwSwitch request structure.
 *
 * @method integer getEnable() Obtain Status. 0: off; 1: on
 * @method void setEnable(integer $Enable) Set Status. 0: off; 1: on
 * @method array getCfwInsIdList() Obtain List of firewall instance IDs. Only one of CfwInsIdList, SubnetIdList, and RouteTableIdList can be passed.
 * @method void setCfwInsIdList(array $CfwInsIdList) Set List of firewall instance IDs. Only one of CfwInsIdList, SubnetIdList, and RouteTableIdList can be passed.
 * @method array getSubnetIdList() Obtain List of subnet IDs. Only one of CfwInsIdList, SubnetIdList, and RouteTableIdList can be passed.
 * @method void setSubnetIdList(array $SubnetIdList) Set List of subnet IDs. Only one of CfwInsIdList, SubnetIdList, and RouteTableIdList can be passed.
 * @method array getRouteTableIdList() Obtain List of route table IDs. Only one of CfwInsIdList, SubnetIdList, and RouteTableIdList can be passed.
 * @method void setRouteTableIdList(array $RouteTableIdList) Set List of route table IDs. Only one of CfwInsIdList, SubnetIdList, and RouteTableIdList can be passed.
 */
class ModifyNatFwSwitchRequest extends AbstractModel
{
    /**
     * @var integer Status. 0: off; 1: on
     */
    public $Enable;

    /**
     * @var array List of firewall instance IDs. Only one of CfwInsIdList, SubnetIdList, and RouteTableIdList can be passed.
     */
    public $CfwInsIdList;

    /**
     * @var array List of subnet IDs. Only one of CfwInsIdList, SubnetIdList, and RouteTableIdList can be passed.
     */
    public $SubnetIdList;

    /**
     * @var array List of route table IDs. Only one of CfwInsIdList, SubnetIdList, and RouteTableIdList can be passed.
     */
    public $RouteTableIdList;

    /**
     * @param integer $Enable Status. 0: off; 1: on
     * @param array $CfwInsIdList List of firewall instance IDs. Only one of CfwInsIdList, SubnetIdList, and RouteTableIdList can be passed.
     * @param array $SubnetIdList List of subnet IDs. Only one of CfwInsIdList, SubnetIdList, and RouteTableIdList can be passed.
     * @param array $RouteTableIdList List of route table IDs. Only one of CfwInsIdList, SubnetIdList, and RouteTableIdList can be passed.
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("CfwInsIdList",$param) and $param["CfwInsIdList"] !== null) {
            $this->CfwInsIdList = $param["CfwInsIdList"];
        }

        if (array_key_exists("SubnetIdList",$param) and $param["SubnetIdList"] !== null) {
            $this->SubnetIdList = $param["SubnetIdList"];
        }

        if (array_key_exists("RouteTableIdList",$param) and $param["RouteTableIdList"] !== null) {
            $this->RouteTableIdList = $param["RouteTableIdList"];
        }
    }
}
