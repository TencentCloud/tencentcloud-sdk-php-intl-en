<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster node topology information.
 *
 * @method integer getZoneId() Obtain AZ ID.
 * @method void setZoneId(integer $ZoneId) Set AZ ID.
 * @method string getZone() Obtain AZ information.
 * @method void setZone(string $Zone) Set AZ information.
 * @method array getSubnetInfoList() Obtain Subnet information.
 * @method void setSubnetInfoList(array $SubnetInfoList) Set Subnet information.
 * @method array getNodeInfoList() Obtain Node information.
 * @method void setNodeInfoList(array $NodeInfoList) Set Node information.
 */
class TopologyInfo extends AbstractModel
{
    /**
     * @var integer AZ ID.
     */
    public $ZoneId;

    /**
     * @var string AZ information.
     */
    public $Zone;

    /**
     * @var array Subnet information.
     */
    public $SubnetInfoList;

    /**
     * @var array Node information.
     */
    public $NodeInfoList;

    /**
     * @param integer $ZoneId AZ ID.
     * @param string $Zone AZ information.
     * @param array $SubnetInfoList Subnet information.
     * @param array $NodeInfoList Node information.
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SubnetInfoList",$param) and $param["SubnetInfoList"] !== null) {
            $this->SubnetInfoList = [];
            foreach ($param["SubnetInfoList"] as $key => $value){
                $obj = new SubnetInfo();
                $obj->deserialize($value);
                array_push($this->SubnetInfoList, $obj);
            }
        }

        if (array_key_exists("NodeInfoList",$param) and $param["NodeInfoList"] !== null) {
            $this->NodeInfoList = [];
            foreach ($param["NodeInfoList"] as $key => $value){
                $obj = new ShortNodeInfo();
                $obj->deserialize($value);
                array_push($this->NodeInfoList, $obj);
            }
        }
    }
}
