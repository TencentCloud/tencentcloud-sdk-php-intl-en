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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Vulnerability trend information
 *
 * @method array getVulSet() Obtain List of vulnerability trends
 * @method void setVulSet(array $VulSet) Set List of vulnerability trends
 * @method string getImageType() Obtain Image type affected by vulnerabilities:
`LOCAL`: Local image.
`REGISTRY`: Repository image.
 * @method void setImageType(string $ImageType) Set Image type affected by vulnerabilities:
`LOCAL`: Local image.
`REGISTRY`: Repository image.
 */
class VulTendencyInfo extends AbstractModel
{
    /**
     * @var array List of vulnerability trends
     */
    public $VulSet;

    /**
     * @var string Image type affected by vulnerabilities:
`LOCAL`: Local image.
`REGISTRY`: Repository image.
     */
    public $ImageType;

    /**
     * @param array $VulSet List of vulnerability trends
     * @param string $ImageType Image type affected by vulnerabilities:
`LOCAL`: Local image.
`REGISTRY`: Repository image.
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
        if (array_key_exists("VulSet",$param) and $param["VulSet"] !== null) {
            $this->VulSet = [];
            foreach ($param["VulSet"] as $key => $value){
                $obj = new RunTimeTendencyInfo();
                $obj->deserialize($value);
                array_push($this->VulSet, $obj);
            }
        }

        if (array_key_exists("ImageType",$param) and $param["ImageType"] !== null) {
            $this->ImageType = $param["ImageType"];
        }
    }
}
