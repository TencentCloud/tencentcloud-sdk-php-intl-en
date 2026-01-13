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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceEndpoint request structure.
 *
 * @method string getInstanceId() Obtain TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.com/document/api/1493/106745?from_cn_redirect=1) or the console.
 * @method void setInstanceId(string $InstanceId) Set TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.com/document/api/1493/106745?from_cn_redirect=1) or the console.
 * @method string getType() Obtain Access point type.
PUBLIC network.
 * @method void setType(string $Type) Set Access point type.
PUBLIC network.
 * @method integer getBandwidth() Obtain Public network bandwidth, in Mbps
 * @method void setBandwidth(integer $Bandwidth) Set Public network bandwidth, in Mbps
 * @method array getIpRules() Obtain Public network security group information
 * @method void setIpRules(array $IpRules) Set Public network security group information
 * @method boolean getBillingFlow() Obtain Whether the public network is billed by traffic.
 * @method void setBillingFlow(boolean $BillingFlow) Set Whether the public network is billed by traffic.
 */
class ModifyInstanceEndpointRequest extends AbstractModel
{
    /**
     * @var string TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.com/document/api/1493/106745?from_cn_redirect=1) or the console.
     */
    public $InstanceId;

    /**
     * @var string Access point type.
PUBLIC network.
     */
    public $Type;

    /**
     * @var integer Public network bandwidth, in Mbps
     */
    public $Bandwidth;

    /**
     * @var array Public network security group information
     */
    public $IpRules;

    /**
     * @var boolean Whether the public network is billed by traffic.
     */
    public $BillingFlow;

    /**
     * @param string $InstanceId TDMQ RocketMQ instance ID. It can be obtained from the API [DescribeFusionInstanceList](https://www.tencentcloud.com/document/api/1493/106745?from_cn_redirect=1) or the console.
     * @param string $Type Access point type.
PUBLIC network.
     * @param integer $Bandwidth Public network bandwidth, in Mbps
     * @param array $IpRules Public network security group information
     * @param boolean $BillingFlow Whether the public network is billed by traffic.
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("IpRules",$param) and $param["IpRules"] !== null) {
            $this->IpRules = [];
            foreach ($param["IpRules"] as $key => $value){
                $obj = new IpRule();
                $obj->deserialize($value);
                array_push($this->IpRules, $obj);
            }
        }

        if (array_key_exists("BillingFlow",$param) and $param["BillingFlow"] !== null) {
            $this->BillingFlow = $param["BillingFlow"];
        }
    }
}
