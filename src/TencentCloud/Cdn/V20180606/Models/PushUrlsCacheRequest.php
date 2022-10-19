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
 * PushUrlsCache request structure.
 *
 * @method array getUrls() Obtain List of URLs. The protocol header such as "http://" or "https://" needs to be included.
 * @method void setUrls(array $Urls) Set List of URLs. The protocol header such as "http://" or "https://" needs to be included.
 * @method string getUserAgent() Obtain Specifies the User-Agent header of an HTTP prefetch request when it is forwarded to the origin server
Default value: `TencentCdn`
 * @method void setUserAgent(string $UserAgent) Set Specifies the User-Agent header of an HTTP prefetch request when it is forwarded to the origin server
Default value: `TencentCdn`
 * @method string getArea() Obtain Destination region for the prefetch
`mainland`: prefetches resources to nodes within Mainland China
`overseas`: prefetches resources to nodes outside Mainland China
`global`: prefetches resources to global nodes
Default value: `mainland`. You can prefetch a URL to nodes in a region provided that CDN service has been enabled for the domain name in the URL in the region.
 * @method void setArea(string $Area) Set Destination region for the prefetch
`mainland`: prefetches resources to nodes within Mainland China
`overseas`: prefetches resources to nodes outside Mainland China
`global`: prefetches resources to global nodes
Default value: `mainland`. You can prefetch a URL to nodes in a region provided that CDN service has been enabled for the domain name in the URL in the region.
 * @method string getLayer() Obtain By default, prefetch for regions in the Chinese mainland is performed onto the intermediate nodes, while prefetch for regions outside the Chinese mainland is performed onto the edge nodes and the traffic generated will be billed.
If this parameter is `middle` or left empty, prefetch will be performed onto the intermediate node.
 * @method void setLayer(string $Layer) Set By default, prefetch for regions in the Chinese mainland is performed onto the intermediate nodes, while prefetch for regions outside the Chinese mainland is performed onto the edge nodes and the traffic generated will be billed.
If this parameter is `middle` or left empty, prefetch will be performed onto the intermediate node.
 * @method boolean getParseM3U8() Obtain Whether to recursively resolve the M3U8 index file and prefetch the TS shards in it.
Notes:
1. This feature requires that the M3U8 index file can be directly requested and obtained.
2. In the M3U8 index file, currently only the TS shards at the first to the third level can be recursively resolved.
3. Prefetching the TS shards obtained through recursive resolution consumes the daily prefetch quota. If the usage exceeds the quota, the feature will be disabled and TS shards will not be prefetched.
 * @method void setParseM3U8(boolean $ParseM3U8) Set Whether to recursively resolve the M3U8 index file and prefetch the TS shards in it.
Notes:
1. This feature requires that the M3U8 index file can be directly requested and obtained.
2. In the M3U8 index file, currently only the TS shards at the first to the third level can be recursively resolved.
3. Prefetching the TS shards obtained through recursive resolution consumes the daily prefetch quota. If the usage exceeds the quota, the feature will be disabled and TS shards will not be prefetched.
 * @method boolean getDisableRange() Obtain Specifies whether to disable Range GETs.
Notes:
This feature is in beta test.
 * @method void setDisableRange(boolean $DisableRange) Set Specifies whether to disable Range GETs.
Notes:
This feature is in beta test.
 * @method array getHeaders() Obtain Custom HTTP request headers (Up to 20). `Name`: Up to 128 characters. `Value`: Up to 1024 characters.
 * @method void setHeaders(array $Headers) Set Custom HTTP request headers (Up to 20). `Name`: Up to 128 characters. `Value`: Up to 1024 characters.
 * @method boolean getUrlEncode() Obtain Whether to encode the URL
 * @method void setUrlEncode(boolean $UrlEncode) Set Whether to encode the URL
 */
class PushUrlsCacheRequest extends AbstractModel
{
    /**
     * @var array List of URLs. The protocol header such as "http://" or "https://" needs to be included.
     */
    public $Urls;

    /**
     * @var string Specifies the User-Agent header of an HTTP prefetch request when it is forwarded to the origin server
Default value: `TencentCdn`
     */
    public $UserAgent;

    /**
     * @var string Destination region for the prefetch
`mainland`: prefetches resources to nodes within Mainland China
`overseas`: prefetches resources to nodes outside Mainland China
`global`: prefetches resources to global nodes
Default value: `mainland`. You can prefetch a URL to nodes in a region provided that CDN service has been enabled for the domain name in the URL in the region.
     */
    public $Area;

    /**
     * @var string By default, prefetch for regions in the Chinese mainland is performed onto the intermediate nodes, while prefetch for regions outside the Chinese mainland is performed onto the edge nodes and the traffic generated will be billed.
If this parameter is `middle` or left empty, prefetch will be performed onto the intermediate node.
     */
    public $Layer;

    /**
     * @var boolean Whether to recursively resolve the M3U8 index file and prefetch the TS shards in it.
Notes:
1. This feature requires that the M3U8 index file can be directly requested and obtained.
2. In the M3U8 index file, currently only the TS shards at the first to the third level can be recursively resolved.
3. Prefetching the TS shards obtained through recursive resolution consumes the daily prefetch quota. If the usage exceeds the quota, the feature will be disabled and TS shards will not be prefetched.
     */
    public $ParseM3U8;

    /**
     * @var boolean Specifies whether to disable Range GETs.
Notes:
This feature is in beta test.
     */
    public $DisableRange;

    /**
     * @var array Custom HTTP request headers (Up to 20). `Name`: Up to 128 characters. `Value`: Up to 1024 characters.
     */
    public $Headers;

    /**
     * @var boolean Whether to encode the URL
     */
    public $UrlEncode;

    /**
     * @param array $Urls List of URLs. The protocol header such as "http://" or "https://" needs to be included.
     * @param string $UserAgent Specifies the User-Agent header of an HTTP prefetch request when it is forwarded to the origin server
Default value: `TencentCdn`
     * @param string $Area Destination region for the prefetch
`mainland`: prefetches resources to nodes within Mainland China
`overseas`: prefetches resources to nodes outside Mainland China
`global`: prefetches resources to global nodes
Default value: `mainland`. You can prefetch a URL to nodes in a region provided that CDN service has been enabled for the domain name in the URL in the region.
     * @param string $Layer By default, prefetch for regions in the Chinese mainland is performed onto the intermediate nodes, while prefetch for regions outside the Chinese mainland is performed onto the edge nodes and the traffic generated will be billed.
If this parameter is `middle` or left empty, prefetch will be performed onto the intermediate node.
     * @param boolean $ParseM3U8 Whether to recursively resolve the M3U8 index file and prefetch the TS shards in it.
Notes:
1. This feature requires that the M3U8 index file can be directly requested and obtained.
2. In the M3U8 index file, currently only the TS shards at the first to the third level can be recursively resolved.
3. Prefetching the TS shards obtained through recursive resolution consumes the daily prefetch quota. If the usage exceeds the quota, the feature will be disabled and TS shards will not be prefetched.
     * @param boolean $DisableRange Specifies whether to disable Range GETs.
Notes:
This feature is in beta test.
     * @param array $Headers Custom HTTP request headers (Up to 20). `Name`: Up to 128 characters. `Value`: Up to 1024 characters.
     * @param boolean $UrlEncode Whether to encode the URL
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

        if (array_key_exists("UserAgent",$param) and $param["UserAgent"] !== null) {
            $this->UserAgent = $param["UserAgent"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("Layer",$param) and $param["Layer"] !== null) {
            $this->Layer = $param["Layer"];
        }

        if (array_key_exists("ParseM3U8",$param) and $param["ParseM3U8"] !== null) {
            $this->ParseM3U8 = $param["ParseM3U8"];
        }

        if (array_key_exists("DisableRange",$param) and $param["DisableRange"] !== null) {
            $this->DisableRange = $param["DisableRange"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new HTTPHeader();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }

        if (array_key_exists("UrlEncode",$param) and $param["UrlEncode"] !== null) {
            $this->UrlEncode = $param["UrlEncode"];
        }
    }
}
