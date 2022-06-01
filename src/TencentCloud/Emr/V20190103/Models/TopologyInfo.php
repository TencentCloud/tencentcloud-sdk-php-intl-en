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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Cluster node topology information
 *
 * @method integer getZoneId() Obtain AZ ID
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setZoneId(integer $ZoneId) Set AZ ID
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method string getZone() Obtain AZ information
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setZone(string $Zone) Set AZ information
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getSubnetInfoList() Obtain Subnet information
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setSubnetInfoList(array $SubnetInfoList) Set Subnet information
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method array getNodeInfoList() Obtain Node information
Note: This field may return `null`, indicating that no valid value can be obtained.
 * @method void setNodeInfoList(array $NodeInfoList) Set Node information
Note: This field may return `null`, indicating that no valid value can be obtained.
 */
class TopologyInfo extends AbstractModel
{
    /**
     * @var integer AZ ID
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $ZoneId;

    /**
     * @var string AZ information
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $Zone;

    /**
     * @var array Subnet information
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $SubnetInfoList;

    /**
     * @var array Node information
Note: This field may return `null`, indicating that no valid value can be obtained.
     */
    public $NodeInfoList;

    /**
     * @param integer $ZoneId AZ ID
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param string $Zone AZ information
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $SubnetInfoList Subnet information
Note: This field may return `null`, indicating that no valid value can be obtained.
     * @param array $NodeInfoList Node information
Note: This field may return `null`, indicating that no valid value can be obtained.
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
