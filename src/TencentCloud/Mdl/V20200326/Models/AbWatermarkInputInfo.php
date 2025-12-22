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
namespace TencentCloud\Mdl\V20200326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InputInfo
 *
 * @method string getType() Obtain Input type, optional URL/COS, currently only supports URL

 * @method void setType(string $Type) Set Input type, optional URL/COS, currently only supports URL

 * @method UrlInputInfo getUrlInputInfo() Obtain URL input information
 * @method void setUrlInputInfo(UrlInputInfo $UrlInputInfo) Set URL input information
 */
class AbWatermarkInputInfo extends AbstractModel
{
    /**
     * @var string Input type, optional URL/COS, currently only supports URL

     */
    public $Type;

    /**
     * @var UrlInputInfo URL input information
     */
    public $UrlInputInfo;

    /**
     * @param string $Type Input type, optional URL/COS, currently only supports URL

     * @param UrlInputInfo $UrlInputInfo URL input information
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UrlInputInfo",$param) and $param["UrlInputInfo"] !== null) {
            $this->UrlInputInfo = new UrlInputInfo();
            $this->UrlInputInfo->deserialize($param["UrlInputInfo"]);
        }
    }
}
