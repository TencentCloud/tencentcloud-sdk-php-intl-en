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
edge: edge server
last: intermediate server
If this parameter is left empty, edge server information will be returned by default
 * @method void setLayer(string $Layer) Set Node type.
edge: edge server
last: intermediate server
If this parameter is left empty, edge server information will be returned by default
 * @method string getArea() Obtain Region to be queried.
mainland: domestic nodes
overseas: overseas nodes
global: global nodes
 * @method void setArea(string $Area) Set Region to be queried.
mainland: domestic nodes
overseas: overseas nodes
global: global nodes
 * @method boolean getSegment() Obtain Whether to return a value as an IP range
 * @method void setSegment(boolean $Segment) Set Whether to return a value as an IP range
 */
class DescribeIpStatusRequest extends AbstractModel
{
    /**
     * @var string Acceleration domain name
     */
    public $Domain;

    /**
     * @var string Node type.
edge: edge server
last: intermediate server
If this parameter is left empty, edge server information will be returned by default
     */
    public $Layer;

    /**
     * @var string Region to be queried.
mainland: domestic nodes
overseas: overseas nodes
global: global nodes
     */
    public $Area;

    /**
     * @var boolean Whether to return a value as an IP range
     */
    public $Segment;

    /**
     * @param string $Domain Acceleration domain name
     * @param string $Layer Node type.
edge: edge server
last: intermediate server
If this parameter is left empty, edge server information will be returned by default
     * @param string $Area Region to be queried.
mainland: domestic nodes
overseas: overseas nodes
global: global nodes
     * @param boolean $Segment Whether to return a value as an IP range
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
    }
}
