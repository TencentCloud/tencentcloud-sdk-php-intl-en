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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIpStatus request structure.
 *
 * @method string getDomain() Obtain Acceleration domain name
 * @method void setDomain(string $Domain) Set Acceleration domain name
 * @method string getLayer() Obtain Node type.
`edge`: Edge server
`last`: Intermediate server
If this parameter is left empty, edge server information will be returned by default
 * @method void setLayer(string $Layer) Set Node type.
`edge`: Edge server
`last`: Intermediate server
If this parameter is left empty, edge server information will be returned by default
 * @method string getArea() Obtain Specifies a region to query.
`mainland`: Nodes in the Chinese mainland
`overseas`: Nodes outside the Chinese mainland
`global`: Global nodes
 * @method void setArea(string $Area) Set Specifies a region to query.
`mainland`: Nodes in the Chinese mainland
`overseas`: Nodes outside the Chinese mainland
`global`: Global nodes
 * @method boolean getSegment() Obtain Whether to return a value as an IP range
 * @method void setSegment(boolean $Segment) Set Whether to return a value as an IP range
 * @method boolean getShowIpv6() Obtain 
 * @method void setShowIpv6(boolean $ShowIpv6) Set 
 * @method boolean getAbbreviationIpv6() Obtain Whether to abbreviate the IPv6 address.
 * @method void setAbbreviationIpv6(boolean $AbbreviationIpv6) Set Whether to abbreviate the IPv6 address.
 */
class DescribeIpStatusRequest extends AbstractModel
{
    /**
     * @var string Acceleration domain name
     */
    public $Domain;

    /**
     * @var string Node type.
`edge`: Edge server
`last`: Intermediate server
If this parameter is left empty, edge server information will be returned by default
     */
    public $Layer;

    /**
     * @var string Specifies a region to query.
`mainland`: Nodes in the Chinese mainland
`overseas`: Nodes outside the Chinese mainland
`global`: Global nodes
     */
    public $Area;

    /**
     * @var boolean Whether to return a value as an IP range
     */
    public $Segment;

    /**
     * @var boolean 
     */
    public $ShowIpv6;

    /**
     * @var boolean Whether to abbreviate the IPv6 address.
     */
    public $AbbreviationIpv6;

    /**
     * @param string $Domain Acceleration domain name
     * @param string $Layer Node type.
`edge`: Edge server
`last`: Intermediate server
If this parameter is left empty, edge server information will be returned by default
     * @param string $Area Specifies a region to query.
`mainland`: Nodes in the Chinese mainland
`overseas`: Nodes outside the Chinese mainland
`global`: Global nodes
     * @param boolean $Segment Whether to return a value as an IP range
     * @param boolean $ShowIpv6 
     * @param boolean $AbbreviationIpv6 Whether to abbreviate the IPv6 address.
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Layer",$param) and $param["Layer"] !== null) {
            $this->Layer = $param["Layer"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Segment",$param) and $param["Segment"] !== null) {
            $this->Segment = $param["Segment"];
        }

        if (array_key_exists("ShowIpv6",$param) and $param["ShowIpv6"] !== null) {
            $this->ShowIpv6 = $param["ShowIpv6"];
        }

        if (array_key_exists("AbbreviationIpv6",$param) and $param["AbbreviationIpv6"] !== null) {
            $this->AbbreviationIpv6 = $param["AbbreviationIpv6"];
        }
    }
}
