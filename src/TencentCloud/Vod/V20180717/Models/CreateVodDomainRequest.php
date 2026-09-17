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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVodDomain request structure.
 *
 * @method string getDomain() Obtain 
 * @method void setDomain(string $Domain) Set 
 * @method integer getSubAppId() Obtain 
 * @method void setSubAppId(integer $SubAppId) Set 
 * @method string getAccelerateArea() Obtain 
 * @method void setAccelerateArea(string $AccelerateArea) Set 
 * @method string getType() Obtain 
 * @method void setType(string $Type) Set 
 */
class CreateVodDomainRequest extends AbstractModel
{
    /**
     * @var string 
     */
    public $Domain;

    /**
     * @var integer 
     */
    public $SubAppId;

    /**
     * @var string 
     */
    public $AccelerateArea;

    /**
     * @var string 
     */
    public $Type;

    /**
     * @param string $Domain 
     * @param integer $SubAppId 
     * @param string $AccelerateArea 
     * @param string $Type 
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

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("AccelerateArea",$param) and $param["AccelerateArea"] !== null) {
            $this->AccelerateArea = $param["AccelerateArea"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
