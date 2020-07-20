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
     * @param string $Domain Acceleration domain name
     * @param string $Layer Node type.
edge: edge server
last: intermediate server
If this parameter is left empty, edge server information will be returned by default
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
    }
}
