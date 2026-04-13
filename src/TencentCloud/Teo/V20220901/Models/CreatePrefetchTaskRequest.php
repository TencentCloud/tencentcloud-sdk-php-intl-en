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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePrefetchTask request structure.
 *
 * @method string getZoneId() Obtain Zone ID.

If you wish to quickly submit Targets urls under different sites, you can fill in * as the value. but the premise is that the account calling this API must have the permission to all site resources under the root account.
 * @method void setZoneId(string $ZoneId) Set Zone ID.

If you wish to quickly submit Targets urls under different sites, you can fill in * as the value. but the premise is that the account calling this API must have the permission to all site resources under the root account.
 * @method array getTargets() Obtain List of resources to be preheated. required. each element format is as follows:.
http://www.example.com/example.txt.
Note: the number of submitted tasks is limited by the quota of a billing package. check the [EO billing package](https://www.tencentcloud.comom/document/product/1552/77380?from_cn_redirect=1).
 * @method void setTargets(array $Targets) Set List of resources to be preheated. required. each element format is as follows:.
http://www.example.com/example.txt.
Note: the number of submitted tasks is limited by the quota of a billing package. check the [EO billing package](https://www.tencentcloud.comom/document/product/1552/77380?from_cn_redirect=1).
 * @method string getMode() Obtain Preheat mode. valid values:.
<Li>Default: default mode, which preheats to the middle layer.</li>.
<Li>Edge: specifies edge preheating mode, which preheats to both edge and middle layer.</li> if left empty, the default value is default.
Notes:.
Preheating to the edge generates edge layer traffic, which is included in billing traffic.
2. specifies the default allocation of edge preheating as a separate preheating amount of 1000 per day, which does not consume the standard preheating amount.
Description:.
This parameter is the allowlist feature. if needed, contact tencent cloud engineers.
 * @method void setMode(string $Mode) Set Preheat mode. valid values:.
<Li>Default: default mode, which preheats to the middle layer.</li>.
<Li>Edge: specifies edge preheating mode, which preheats to both edge and middle layer.</li> if left empty, the default value is default.
Notes:.
Preheating to the edge generates edge layer traffic, which is included in billing traffic.
2. specifies the default allocation of edge preheating as a separate preheating amount of 1000 per day, which does not consume the standard preheating amount.
Description:.
This parameter is the allowlist feature. if needed, contact tencent cloud engineers.
 * @method boolean getEncodeUrl() Obtain Whether to encode a URL according to RFC3986. Enable this field when the URL contains non-ASCII characters.
 * @method void setEncodeUrl(boolean $EncodeUrl) Set Whether to encode a URL according to RFC3986. Enable this field when the URL contains non-ASCII characters.
 * @method array getHeaders() Obtain Specifies whether to carry HTTP header information for preheating. leave it empty otherwise.
 * @method void setHeaders(array $Headers) Set Specifies whether to carry HTTP header information for preheating. leave it empty otherwise.
 * @method string getPrefetchMediaSegments() Obtain Media fragment preheating control. valid values:.
<Li>On: enables shard preheating, preheats the description file, and performs recursive resolution of the description file shards for preheating.</li>.
<Li>Off: only preheats the submitted description file.</li>default value: off if left empty.
Notes:.
Supported description file is M3U8; corresponding shard is TS.
Specifies the description file must support normal requests and describe sharding paths as per industry standards.
Specifies the recursive resolution depth is no more than 3.
Parsed shards normally accumulate daily pre-warming amount. when usage exceeds the limit, silent processing is triggered and preheating is no longer executed.
Description:.
This parameter is the allowlist feature. if needed, contact tencent cloud engineers.
 * @method void setPrefetchMediaSegments(string $PrefetchMediaSegments) Set Media fragment preheating control. valid values:.
<Li>On: enables shard preheating, preheats the description file, and performs recursive resolution of the description file shards for preheating.</li>.
<Li>Off: only preheats the submitted description file.</li>default value: off if left empty.
Notes:.
Supported description file is M3U8; corresponding shard is TS.
Specifies the description file must support normal requests and describe sharding paths as per industry standards.
Specifies the recursive resolution depth is no more than 3.
Parsed shards normally accumulate daily pre-warming amount. when usage exceeds the limit, silent processing is triggered and preheating is no longer executed.
Description:.
This parameter is the allowlist feature. if needed, contact tencent cloud engineers.
 */
class CreatePrefetchTaskRequest extends AbstractModel
{
    /**
     * @var string Zone ID.

If you wish to quickly submit Targets urls under different sites, you can fill in * as the value. but the premise is that the account calling this API must have the permission to all site resources under the root account.
     */
    public $ZoneId;

    /**
     * @var array List of resources to be preheated. required. each element format is as follows:.
http://www.example.com/example.txt.
Note: the number of submitted tasks is limited by the quota of a billing package. check the [EO billing package](https://www.tencentcloud.comom/document/product/1552/77380?from_cn_redirect=1).
     */
    public $Targets;

    /**
     * @var string Preheat mode. valid values:.
<Li>Default: default mode, which preheats to the middle layer.</li>.
<Li>Edge: specifies edge preheating mode, which preheats to both edge and middle layer.</li> if left empty, the default value is default.
Notes:.
Preheating to the edge generates edge layer traffic, which is included in billing traffic.
2. specifies the default allocation of edge preheating as a separate preheating amount of 1000 per day, which does not consume the standard preheating amount.
Description:.
This parameter is the allowlist feature. if needed, contact tencent cloud engineers.
     */
    public $Mode;

    /**
     * @var boolean Whether to encode a URL according to RFC3986. Enable this field when the URL contains non-ASCII characters.
     * @deprecated
     */
    public $EncodeUrl;

    /**
     * @var array Specifies whether to carry HTTP header information for preheating. leave it empty otherwise.
     */
    public $Headers;

    /**
     * @var string Media fragment preheating control. valid values:.
<Li>On: enables shard preheating, preheats the description file, and performs recursive resolution of the description file shards for preheating.</li>.
<Li>Off: only preheats the submitted description file.</li>default value: off if left empty.
Notes:.
Supported description file is M3U8; corresponding shard is TS.
Specifies the description file must support normal requests and describe sharding paths as per industry standards.
Specifies the recursive resolution depth is no more than 3.
Parsed shards normally accumulate daily pre-warming amount. when usage exceeds the limit, silent processing is triggered and preheating is no longer executed.
Description:.
This parameter is the allowlist feature. if needed, contact tencent cloud engineers.
     */
    public $PrefetchMediaSegments;

    /**
     * @param string $ZoneId Zone ID.

If you wish to quickly submit Targets urls under different sites, you can fill in * as the value. but the premise is that the account calling this API must have the permission to all site resources under the root account.
     * @param array $Targets List of resources to be preheated. required. each element format is as follows:.
http://www.example.com/example.txt.
Note: the number of submitted tasks is limited by the quota of a billing package. check the [EO billing package](https://www.tencentcloud.comom/document/product/1552/77380?from_cn_redirect=1).
     * @param string $Mode Preheat mode. valid values:.
<Li>Default: default mode, which preheats to the middle layer.</li>.
<Li>Edge: specifies edge preheating mode, which preheats to both edge and middle layer.</li> if left empty, the default value is default.
Notes:.
Preheating to the edge generates edge layer traffic, which is included in billing traffic.
2. specifies the default allocation of edge preheating as a separate preheating amount of 1000 per day, which does not consume the standard preheating amount.
Description:.
This parameter is the allowlist feature. if needed, contact tencent cloud engineers.
     * @param boolean $EncodeUrl Whether to encode a URL according to RFC3986. Enable this field when the URL contains non-ASCII characters.
     * @param array $Headers Specifies whether to carry HTTP header information for preheating. leave it empty otherwise.
     * @param string $PrefetchMediaSegments Media fragment preheating control. valid values:.
<Li>On: enables shard preheating, preheats the description file, and performs recursive resolution of the description file shards for preheating.</li>.
<Li>Off: only preheats the submitted description file.</li>default value: off if left empty.
Notes:.
Supported description file is M3U8; corresponding shard is TS.
Specifies the description file must support normal requests and describe sharding paths as per industry standards.
Specifies the recursive resolution depth is no more than 3.
Parsed shards normally accumulate daily pre-warming amount. when usage exceeds the limit, silent processing is triggered and preheating is no longer executed.
Description:.
This parameter is the allowlist feature. if needed, contact tencent cloud engineers.
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = $param["Targets"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("EncodeUrl",$param) and $param["EncodeUrl"] !== null) {
            $this->EncodeUrl = $param["EncodeUrl"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new Header();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }

        if (array_key_exists("PrefetchMediaSegments",$param) and $param["PrefetchMediaSegments"] !== null) {
            $this->PrefetchMediaSegments = $param["PrefetchMediaSegments"];
        }
    }
}
