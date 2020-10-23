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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeIpStatus request structure.
 *
 * @method string getDomain() Obtain Acceleration domain name
 * @method void setDomain(string $Domain) Set Acceleration domain name
 * @method string getArea() Obtain Target region of the query:
mainland: nodes in Mainland China
overseas: nodes outside Mainland China
global: global nodes
 * @method void setArea(string $Area) Set Target region of the query:
mainland: nodes in Mainland China
overseas: nodes outside Mainland China
global: global nodes
 */
class DescribeIpStatusRequest extends AbstractModel
{
    /**
     * @var string Acceleration domain name
     */
    public $Domain;

    /**
     * @var string Target region of the query:
mainland: nodes in Mainland China
overseas: nodes outside Mainland China
global: global nodes
     */
    public $Area;

    /**
     * @param string $Domain Acceleration domain name
     * @param string $Area Target region of the query:
mainland: nodes in Mainland China
overseas: nodes outside Mainland China
global: global nodes
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

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
