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
 * Route conflict object
 *
 * @method string getRouteTableId() Obtain Route table instance ID
 * @method void setRouteTableId(string $RouteTableId) Set Route table instance ID
 * @method string getDestinationCidrBlock() Obtain The conflicting destination ports to be checked
 * @method void setDestinationCidrBlock(string $DestinationCidrBlock) Set The conflicting destination ports to be checked
 * @method array getConflictSet() Obtain List of conflicting routing policies
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setConflictSet(array $ConflictSet) Set List of conflicting routing policies
Note: this field may return null, indicating that no valid values can be obtained.
 */
class RouteConflict extends AbstractModel
{
    /**
     * @var string Route table instance ID
     */
    public $RouteTableId;

    /**
     * @var string The conflicting destination ports to be checked
     */
    public $DestinationCidrBlock;

    /**
     * @var array List of conflicting routing policies
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $ConflictSet;

    /**
     * @param string $RouteTableId Route table instance ID
     * @param string $DestinationCidrBlock The conflicting destination ports to be checked
     * @param array $ConflictSet List of conflicting routing policies
Note: this field may return null, indicating that no valid values can be obtained.
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
        if (array_key_exists("RouteTableId",$param) and $param["RouteTableId"] !== null) {
            $this->RouteTableId = $param["RouteTableId"];
        }

        if (array_key_exists("DestinationCidrBlock",$param) and $param["DestinationCidrBlock"] !== null) {
            $this->DestinationCidrBlock = $param["DestinationCidrBlock"];
        }

        if (array_key_exists("ConflictSet",$param) and $param["ConflictSet"] !== null) {
            $this->ConflictSet = [];
            foreach ($param["ConflictSet"] as $key => $value){
                $obj = new Route();
                $obj->deserialize($value);
                array_push($this->ConflictSet, $obj);
            }
        }
    }
}
