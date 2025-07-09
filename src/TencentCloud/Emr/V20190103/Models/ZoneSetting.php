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
 * AZ configuration description.
 *
 * @method string getZone() Obtain Availability zone name
 * @method void setZone(string $Zone) Set Availability zone name
 * @method VPCSettings getVPCSettings() Obtain AZ VPC and subnet.
 * @method void setVPCSettings(VPCSettings $VPCSettings) Set AZ VPC and subnet.
 * @method integer getNodeNum() Obtain Number of AZ nodes.
 * @method void setNodeNum(integer $NodeNum) Set Number of AZ nodes.
 */
class ZoneSetting extends AbstractModel
{
    /**
     * @var string Availability zone name
     */
    public $Zone;

    /**
     * @var VPCSettings AZ VPC and subnet.
     */
    public $VPCSettings;

    /**
     * @var integer Number of AZ nodes.
     */
    public $NodeNum;

    /**
     * @param string $Zone Availability zone name
     * @param VPCSettings $VPCSettings AZ VPC and subnet.
     * @param integer $NodeNum Number of AZ nodes.
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("VPCSettings",$param) and $param["VPCSettings"] !== null) {
            $this->VPCSettings = new VPCSettings();
            $this->VPCSettings->deserialize($param["VPCSettings"]);
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }
    }
}
