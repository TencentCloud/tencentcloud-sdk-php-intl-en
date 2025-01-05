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
 * Outbound endpoint.
 *
 * @method string getEndpointId() Obtain Outbound endpoint ID.
 * @method void setEndpointId(string $EndpointId) Set Outbound endpoint ID.
 * @method string getEndpointName() Obtain Outbound endpoint name.
 * @method void setEndpointName(string $EndpointName) Set Outbound endpoint name.
 * @method string getRegion() Obtain The region of the outbound endpoint.
 * @method void setRegion(string $Region) Set The region of the outbound endpoint.
 * @method array getTags() Obtain Tag
 * @method void setTags(array $Tags) Set Tag
 * @method array getEndpointServiceSet() Obtain Outbound endpoint information.
Returned only when the forwarding architecture is V2R.
 * @method void setEndpointServiceSet(array $EndpointServiceSet) Set Outbound endpoint information.
Returned only when the forwarding architecture is V2R.
 * @method string getForwardLinkArch() Obtain Forwarding link architecture.
V2V: privatelink
V2R: jnsgw
 * @method void setForwardLinkArch(string $ForwardLinkArch) Set Forwarding link architecture.
V2V: privatelink
V2R: jnsgw
 * @method string getEndPointServiceId() Obtain Endpoint service ID.

Returned only when the forwarding architecture is V2V.

 * @method void setEndPointServiceId(string $EndPointServiceId) Set Endpoint service ID.

Returned only when the forwarding architecture is V2V.

 * @method array getEndPointVipSet() Obtain VIP list of the endpoint.

Returned only when the forwarding architecture is V2V.
 * @method void setEndPointVipSet(array $EndPointVipSet) Set VIP list of the endpoint.

Returned only when the forwarding architecture is V2V.
 */
class OutboundEndpoint extends AbstractModel
{
    /**
     * @var string Outbound endpoint ID.
     */
    public $EndpointId;

    /**
     * @var string Outbound endpoint name.
     */
    public $EndpointName;

    /**
     * @var string The region of the outbound endpoint.
     */
    public $Region;

    /**
     * @var array Tag
     */
    public $Tags;

    /**
     * @var array Outbound endpoint information.
Returned only when the forwarding architecture is V2R.
     */
    public $EndpointServiceSet;

    /**
     * @var string Forwarding link architecture.
V2V: privatelink
V2R: jnsgw
     */
    public $ForwardLinkArch;

    /**
     * @var string Endpoint service ID.

Returned only when the forwarding architecture is V2V.

     */
    public $EndPointServiceId;

    /**
     * @var array VIP list of the endpoint.

Returned only when the forwarding architecture is V2V.
     */
    public $EndPointVipSet;

    /**
     * @param string $EndpointId Outbound endpoint ID.
     * @param string $EndpointName Outbound endpoint name.
     * @param string $Region The region of the outbound endpoint.
     * @param array $Tags Tag
     * @param array $EndpointServiceSet Outbound endpoint information.
Returned only when the forwarding architecture is V2R.
     * @param string $ForwardLinkArch Forwarding link architecture.
V2V: privatelink
V2R: jnsgw
     * @param string $EndPointServiceId Endpoint service ID.

Returned only when the forwarding architecture is V2V.

     * @param array $EndPointVipSet VIP list of the endpoint.

Returned only when the forwarding architecture is V2V.
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
        if (array_key_exists("EndpointId",$param) and $param["EndpointId"] !== null) {
            $this->EndpointId = $param["EndpointId"];
        }

        if (array_key_exists("EndpointName",$param) and $param["EndpointName"] !== null) {
            $this->EndpointName = $param["EndpointName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("EndpointServiceSet",$param) and $param["EndpointServiceSet"] !== null) {
            $this->EndpointServiceSet = [];
            foreach ($param["EndpointServiceSet"] as $key => $value){
                $obj = new EndpointService();
                $obj->deserialize($value);
                array_push($this->EndpointServiceSet, $obj);
            }
        }

        if (array_key_exists("ForwardLinkArch",$param) and $param["ForwardLinkArch"] !== null) {
            $this->ForwardLinkArch = $param["ForwardLinkArch"];
        }

        if (array_key_exists("EndPointServiceId",$param) and $param["EndPointServiceId"] !== null) {
            $this->EndPointServiceId = $param["EndPointServiceId"];
        }

        if (array_key_exists("EndPointVipSet",$param) and $param["EndPointVipSet"] !== null) {
            $this->EndPointVipSet = $param["EndPointVipSet"];
        }
    }
}
