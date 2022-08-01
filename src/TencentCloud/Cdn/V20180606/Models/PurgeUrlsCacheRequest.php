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
 * PurgeUrlsCache request structure.
 *
 * @method array getUrls() Obtain List of URLs. The protocol header such as "http://" or "https://" needs to be included.
 * @method void setUrls(array $Urls) Set List of URLs. The protocol header such as "http://" or "https://" needs to be included.
 * @method string getArea() Obtain Purging region
The acceleration region of the acceleration domain name will be purged if this parameter is not passed in.
If `mainland` is passed in, only the content cached on nodes in the Chinese mainland will be purged.
If `overseas` is passed in, only the content cached on nodes outside the Chinese mainland will be purged.
The specified purging region should match the domain name acceleration region.
 * @method void setArea(string $Area) Set Purging region
The acceleration region of the acceleration domain name will be purged if this parameter is not passed in.
If `mainland` is passed in, only the content cached on nodes in the Chinese mainland will be purged.
If `overseas` is passed in, only the content cached on nodes outside the Chinese mainland will be purged.
The specified purging region should match the domain name acceleration region.
 * @method boolean getUrlEncode() Obtain Whether to encode Chinese characters for purge
 * @method void setUrlEncode(boolean $UrlEncode) Set Whether to encode Chinese characters for purge
 */
class PurgeUrlsCacheRequest extends AbstractModel
{
    /**
     * @var array List of URLs. The protocol header such as "http://" or "https://" needs to be included.
     */
    public $Urls;

    /**
     * @var string Purging region
The acceleration region of the acceleration domain name will be purged if this parameter is not passed in.
If `mainland` is passed in, only the content cached on nodes in the Chinese mainland will be purged.
If `overseas` is passed in, only the content cached on nodes outside the Chinese mainland will be purged.
The specified purging region should match the domain name acceleration region.
     */
    public $Area;

    /**
     * @var boolean Whether to encode Chinese characters for purge
     */
    public $UrlEncode;

    /**
     * @param array $Urls List of URLs. The protocol header such as "http://" or "https://" needs to be included.
     * @param string $Area Purging region
The acceleration region of the acceleration domain name will be purged if this parameter is not passed in.
If `mainland` is passed in, only the content cached on nodes in the Chinese mainland will be purged.
If `overseas` is passed in, only the content cached on nodes outside the Chinese mainland will be purged.
The specified purging region should match the domain name acceleration region.
     * @param boolean $UrlEncode Whether to encode Chinese characters for purge
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
        if (array_key_exists("Urls",$param) and $param["Urls"] !== null) {
            $this->Urls = $param["Urls"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("UrlEncode",$param) and $param["UrlEncode"] !== null) {
            $this->UrlEncode = $param["UrlEncode"];
        }
    }
}
