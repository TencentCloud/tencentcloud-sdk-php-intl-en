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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Information of associated resources
 *
 * @method string getVpcId() Obtain VPC instance ID, such as vpc-f1xjkw1b.
 * @method void setVpcId(string $VpcId) Set VPC instance ID, such as vpc-f1xjkw1b.
 * @method string getSubnetId() Obtain Subnet instance ID, such as `subnet-bthucmmy`.
 * @method void setSubnetId(string $SubnetId) Set Subnet instance ID, such as `subnet-bthucmmy`.
 * @method integer getIp() Obtain The total number of used IP addresses.
 * @method void setIp(integer $Ip) Set The total number of used IP addresses.
 * @method array getResourceStatisticsItemSet() Obtain Information of associated resources
 * @method void setResourceStatisticsItemSet(array $ResourceStatisticsItemSet) Set Information of associated resources
 */
class ResourceStatistics extends AbstractModel
{
    /**
     * @var string VPC instance ID, such as vpc-f1xjkw1b.
     */
    public $VpcId;

    /**
     * @var string Subnet instance ID, such as `subnet-bthucmmy`.
     */
    public $SubnetId;

    /**
     * @var integer The total number of used IP addresses.
     */
    public $Ip;

    /**
     * @var array Information of associated resources
     */
    public $ResourceStatisticsItemSet;

    /**
     * @param string $VpcId VPC instance ID, such as vpc-f1xjkw1b.
     * @param string $SubnetId Subnet instance ID, such as `subnet-bthucmmy`.
     * @param integer $Ip The total number of used IP addresses.
     * @param array $ResourceStatisticsItemSet Information of associated resources
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
        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("ResourceStatisticsItemSet",$param) and $param["ResourceStatisticsItemSet"] !== null) {
            $this->ResourceStatisticsItemSet = [];
            foreach ($param["ResourceStatisticsItemSet"] as $key => $value){
                $obj = new ResourceStatisticsItem();
                $obj->deserialize($value);
                array_push($this->ResourceStatisticsItemSet, $obj);
            }
        }
    }
}
