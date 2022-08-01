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
 * PurgePathCache request structure.
 *
 * @method array getPaths() Obtain List of directories. The protocol header such as "http://" or "https://" needs to be included.
 * @method void setPaths(array $Paths) Set List of directories. The protocol header such as "http://" or "https://" needs to be included.
 * @method string getFlushType() Obtain Purge type:
`flush`: purges updated resources
`delete`: purges all resources
 * @method void setFlushType(string $FlushType) Set Purge type:
`flush`: purges updated resources
`delete`: purges all resources
 * @method boolean getUrlEncode() Obtain Whether to encode Chinese characters before purge.
 * @method void setUrlEncode(boolean $UrlEncode) Set Whether to encode Chinese characters before purge.
 * @method string getArea() Obtain Region to purge
The acceleration region of the acceleration domain name will be purged if this parameter is not passed in.
If `mainland` is passed in, only the content cached on nodes in the Chinese mainland will be purged.
If `overseas` is passed in, only the content cached on nodes outside the Chinese mainland will be purged.
The specified region to purge should match the domain name’s acceleration region.
 * @method void setArea(string $Area) Set Region to purge
The acceleration region of the acceleration domain name will be purged if this parameter is not passed in.
If `mainland` is passed in, only the content cached on nodes in the Chinese mainland will be purged.
If `overseas` is passed in, only the content cached on nodes outside the Chinese mainland will be purged.
The specified region to purge should match the domain name’s acceleration region.
 */
class PurgePathCacheRequest extends AbstractModel
{
    /**
     * @var array List of directories. The protocol header such as "http://" or "https://" needs to be included.
     */
    public $Paths;

    /**
     * @var string Purge type:
`flush`: purges updated resources
`delete`: purges all resources
     */
    public $FlushType;

    /**
     * @var boolean Whether to encode Chinese characters before purge.
     */
    public $UrlEncode;

    /**
     * @var string Region to purge
The acceleration region of the acceleration domain name will be purged if this parameter is not passed in.
If `mainland` is passed in, only the content cached on nodes in the Chinese mainland will be purged.
If `overseas` is passed in, only the content cached on nodes outside the Chinese mainland will be purged.
The specified region to purge should match the domain name’s acceleration region.
     */
    public $Area;

    /**
     * @param array $Paths List of directories. The protocol header such as "http://" or "https://" needs to be included.
     * @param string $FlushType Purge type:
`flush`: purges updated resources
`delete`: purges all resources
     * @param boolean $UrlEncode Whether to encode Chinese characters before purge.
     * @param string $Area Region to purge
The acceleration region of the acceleration domain name will be purged if this parameter is not passed in.
If `mainland` is passed in, only the content cached on nodes in the Chinese mainland will be purged.
If `overseas` is passed in, only the content cached on nodes outside the Chinese mainland will be purged.
The specified region to purge should match the domain name’s acceleration region.
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
        if (array_key_exists("Paths",$param) and $param["Paths"] !== null) {
            $this->Paths = $param["Paths"];
        }

        if (array_key_exists("FlushType",$param) and $param["FlushType"] !== null) {
            $this->FlushType = $param["FlushType"];
        }

        if (array_key_exists("UrlEncode",$param) and $param["UrlEncode"] !== null) {
            $this->UrlEncode = $param["UrlEncode"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
