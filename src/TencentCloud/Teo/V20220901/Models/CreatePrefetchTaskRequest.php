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
 * @method array getTargets() Obtain List of resources to be preheated. Each element format is similar to the following:
http://www.example.com/example.txt. The parameter value is currently required.
Note: The number of tasks that can be submitted is limited by the quota of a billing package. For details, see [Billing Overview] (https://intl.cloud.tencent.com/document/product/1552/77380?from_cn_redirect=1).
 * @method void setTargets(array $Targets) Set List of resources to be preheated. Each element format is similar to the following:
http://www.example.com/example.txt. The parameter value is currently required.
Note: The number of tasks that can be submitted is limited by the quota of a billing package. For details, see [Billing Overview] (https://intl.cloud.tencent.com/document/product/1552/77380?from_cn_redirect=1).
 * @method boolean getEncodeUrl() Obtain Whether to encode a URL according to RFC3986. Enable this field when the URL contains non-ASCII characters.
 * @method void setEncodeUrl(boolean $EncodeUrl) Set Whether to encode a URL according to RFC3986. Enable this field when the URL contains non-ASCII characters.
 * @method array getHeaders() Obtain HTTP header information
 * @method void setHeaders(array $Headers) Set HTTP header information
 * @method string getPrefetchMediaSegments() Obtain Media fragment preheating control. valid values:.
<Li>On: enables shard preheating, preheats the description file, and performs recursive resolution of the description file shards for preheating.</li>.
<Li>Off: only preheat the submitted description file.</li>default value: off if left empty.

Notes:.
1. the supported description file is M3U8, and the corresponding shard is TS.
Describes the requirement that the description file can process normal requests and specify the sharding path as per industry standards.
Recursive resolution depth is no more than 3.
Parsed shards normally accumulate daily pre-warming amount. when usage exceeds the quota limit, silent processing is triggered and preheating is no longer executed.

This parameter specifies the allowlist feature. if necessary, contact tencent cloud engineers.
 * @method void setPrefetchMediaSegments(string $PrefetchMediaSegments) Set Media fragment preheating control. valid values:.
<Li>On: enables shard preheating, preheats the description file, and performs recursive resolution of the description file shards for preheating.</li>.
<Li>Off: only preheat the submitted description file.</li>default value: off if left empty.

Notes:.
1. the supported description file is M3U8, and the corresponding shard is TS.
Describes the requirement that the description file can process normal requests and specify the sharding path as per industry standards.
Recursive resolution depth is no more than 3.
Parsed shards normally accumulate daily pre-warming amount. when usage exceeds the quota limit, silent processing is triggered and preheating is no longer executed.

This parameter specifies the allowlist feature. if necessary, contact tencent cloud engineers.
 */
class CreatePrefetchTaskRequest extends AbstractModel
{
    /**
     * @var string Zone ID.

If you wish to quickly submit Targets urls under different sites, you can fill in * as the value. but the premise is that the account calling this API must have the permission to all site resources under the root account.
     */
    public $ZoneId;

    /**
     * @var array List of resources to be preheated. Each element format is similar to the following:
http://www.example.com/example.txt. The parameter value is currently required.
Note: The number of tasks that can be submitted is limited by the quota of a billing package. For details, see [Billing Overview] (https://intl.cloud.tencent.com/document/product/1552/77380?from_cn_redirect=1).
     */
    public $Targets;

    /**
     * @var boolean Whether to encode a URL according to RFC3986. Enable this field when the URL contains non-ASCII characters.
     * @deprecated
     */
    public $EncodeUrl;

    /**
     * @var array HTTP header information
     */
    public $Headers;

    /**
     * @var string Media fragment preheating control. valid values:.
<Li>On: enables shard preheating, preheats the description file, and performs recursive resolution of the description file shards for preheating.</li>.
<Li>Off: only preheat the submitted description file.</li>default value: off if left empty.

Notes:.
1. the supported description file is M3U8, and the corresponding shard is TS.
Describes the requirement that the description file can process normal requests and specify the sharding path as per industry standards.
Recursive resolution depth is no more than 3.
Parsed shards normally accumulate daily pre-warming amount. when usage exceeds the quota limit, silent processing is triggered and preheating is no longer executed.

This parameter specifies the allowlist feature. if necessary, contact tencent cloud engineers.
     */
    public $PrefetchMediaSegments;

    /**
     * @param string $ZoneId Zone ID.

If you wish to quickly submit Targets urls under different sites, you can fill in * as the value. but the premise is that the account calling this API must have the permission to all site resources under the root account.
     * @param array $Targets List of resources to be preheated. Each element format is similar to the following:
http://www.example.com/example.txt. The parameter value is currently required.
Note: The number of tasks that can be submitted is limited by the quota of a billing package. For details, see [Billing Overview] (https://intl.cloud.tencent.com/document/product/1552/77380?from_cn_redirect=1).
     * @param boolean $EncodeUrl Whether to encode a URL according to RFC3986. Enable this field when the URL contains non-ASCII characters.
     * @param array $Headers HTTP header information
     * @param string $PrefetchMediaSegments Media fragment preheating control. valid values:.
<Li>On: enables shard preheating, preheats the description file, and performs recursive resolution of the description file shards for preheating.</li>.
<Li>Off: only preheat the submitted description file.</li>default value: off if left empty.

Notes:.
1. the supported description file is M3U8, and the corresponding shard is TS.
Describes the requirement that the description file can process normal requests and specify the sharding path as per industry standards.
Recursive resolution depth is no more than 3.
Parsed shards normally accumulate daily pre-warming amount. when usage exceeds the quota limit, silent processing is triggered and preheating is no longer executed.

This parameter specifies the allowlist feature. if necessary, contact tencent cloud engineers.
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
