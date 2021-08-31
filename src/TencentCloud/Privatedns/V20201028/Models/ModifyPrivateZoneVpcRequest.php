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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPrivateZoneVpc request structure.
 *
 * @method string getZoneId() Obtain Private domain ID
 * @method void setZoneId(string $ZoneId) Set Private domain ID
 * @method array getVpcSet() Obtain List of all VPCs associated with private domain
 * @method void setVpcSet(array $VpcSet) Set List of all VPCs associated with private domain
 */
class ModifyPrivateZoneVpcRequest extends AbstractModel
{
    /**
     * @var string Private domain ID
     */
    public $ZoneId;

    /**
     * @var array List of all VPCs associated with private domain
     */
    public $VpcSet;

    /**
     * @param string $ZoneId Private domain ID
     * @param array $VpcSet List of all VPCs associated with private domain
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("VpcSet",$param) and $param["VpcSet"] !== null) {
            $this->VpcSet = [];
            foreach ($param["VpcSet"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcSet, $obj);
            }
        }
    }
}
