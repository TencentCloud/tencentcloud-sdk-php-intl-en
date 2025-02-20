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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePurgeTask request structure.
 *
 * @method string getZoneId() Obtain Zone id.
.
If you want to quickly submit targets urls under different sites, you can set it to *, but the account calling this api must have permission for all site resources under the main account.
 * @method void setZoneId(string $ZoneId) Set Zone id.
.
If you want to quickly submit targets urls under different sites, you can set it to *, but the account calling this api must have permission for all site resources under the main account.
 * @method string getType() Obtain Type of cache purging. Values:
<li>`purge_url`: Purge by the URL</li>
<li>`purge_prefix`: Purge by the directory</li>
<li>`purge_host`: Purge by the hostname</li>
<li>`purge_all`: Purge all caches</li>
<li>`purge_cache_tag`: Purge by the cache-tag </li>For more details, see [Cache Purge](https://intl.cloud.tencent.com/document/product/1552/70759?from_cn_redirect=1).
 * @method void setType(string $Type) Set Type of cache purging. Values:
<li>`purge_url`: Purge by the URL</li>
<li>`purge_prefix`: Purge by the directory</li>
<li>`purge_host`: Purge by the hostname</li>
<li>`purge_all`: Purge all caches</li>
<li>`purge_cache_tag`: Purge by the cache-tag </li>For more details, see [Cache Purge](https://intl.cloud.tencent.com/document/product/1552/70759?from_cn_redirect=1).
 * @method string getMethod() Obtain Node cache purge method, valid for directory, hostname, and all cache refreshes. Valid values: <li>invalidate: Refreshes only resources that were updated under the directory; </li><li>delete: Refreshes all node resources, regardless of whether they were updated. </li>Default value: invalidate.
 * @method void setMethod(string $Method) Set Node cache purge method, valid for directory, hostname, and all cache refreshes. Valid values: <li>invalidate: Refreshes only resources that were updated under the directory; </li><li>delete: Refreshes all node resources, regardless of whether they were updated. </li>Default value: invalidate.
 * @method array getTargets() Obtain List of resources for which cache is to be purged. Each element format depends on the cache purge type and you can refer to the API examples for details. <li>The number of tasks that can be submitted at a time is limited by the quota of a billing package. For details, see [Billing Overview] (https://intl.cloud.tencent.com/document/product/1552/77380?from_cn_redirect=1).</li>
 * @method void setTargets(array $Targets) Set List of resources for which cache is to be purged. Each element format depends on the cache purge type and you can refer to the API examples for details. <li>The number of tasks that can be submitted at a time is limited by the quota of a billing package. For details, see [Billing Overview] (https://intl.cloud.tencent.com/document/product/1552/77380?from_cn_redirect=1).</li>
 * @method boolean getEncodeUrl() Obtain Specifies whether to transcode non-ASCII URLs according to RFC3986.
Note that if it’s enabled, the purging is based on the converted URLs.
 * @method void setEncodeUrl(boolean $EncodeUrl) Set Specifies whether to transcode non-ASCII URLs according to RFC3986.
Note that if it’s enabled, the purging is based on the converted URLs.
 * @method CacheTag getCacheTag() Obtain The information attached when the node cache purge type is set to purge_cache_tag.
 * @method void setCacheTag(CacheTag $CacheTag) Set The information attached when the node cache purge type is set to purge_cache_tag.
 */
class CreatePurgeTaskRequest extends AbstractModel
{
    /**
     * @var string Zone id.
.
If you want to quickly submit targets urls under different sites, you can set it to *, but the account calling this api must have permission for all site resources under the main account.
     */
    public $ZoneId;

    /**
     * @var string Type of cache purging. Values:
<li>`purge_url`: Purge by the URL</li>
<li>`purge_prefix`: Purge by the directory</li>
<li>`purge_host`: Purge by the hostname</li>
<li>`purge_all`: Purge all caches</li>
<li>`purge_cache_tag`: Purge by the cache-tag </li>For more details, see [Cache Purge](https://intl.cloud.tencent.com/document/product/1552/70759?from_cn_redirect=1).
     */
    public $Type;

    /**
     * @var string Node cache purge method, valid for directory, hostname, and all cache refreshes. Valid values: <li>invalidate: Refreshes only resources that were updated under the directory; </li><li>delete: Refreshes all node resources, regardless of whether they were updated. </li>Default value: invalidate.
     */
    public $Method;

    /**
     * @var array List of resources for which cache is to be purged. Each element format depends on the cache purge type and you can refer to the API examples for details. <li>The number of tasks that can be submitted at a time is limited by the quota of a billing package. For details, see [Billing Overview] (https://intl.cloud.tencent.com/document/product/1552/77380?from_cn_redirect=1).</li>
     */
    public $Targets;

    /**
     * @var boolean Specifies whether to transcode non-ASCII URLs according to RFC3986.
Note that if it’s enabled, the purging is based on the converted URLs.
     * @deprecated
     */
    public $EncodeUrl;

    /**
     * @var CacheTag The information attached when the node cache purge type is set to purge_cache_tag.
     */
    public $CacheTag;

    /**
     * @param string $ZoneId Zone id.
.
If you want to quickly submit targets urls under different sites, you can set it to *, but the account calling this api must have permission for all site resources under the main account.
     * @param string $Type Type of cache purging. Values:
<li>`purge_url`: Purge by the URL</li>
<li>`purge_prefix`: Purge by the directory</li>
<li>`purge_host`: Purge by the hostname</li>
<li>`purge_all`: Purge all caches</li>
<li>`purge_cache_tag`: Purge by the cache-tag </li>For more details, see [Cache Purge](https://intl.cloud.tencent.com/document/product/1552/70759?from_cn_redirect=1).
     * @param string $Method Node cache purge method, valid for directory, hostname, and all cache refreshes. Valid values: <li>invalidate: Refreshes only resources that were updated under the directory; </li><li>delete: Refreshes all node resources, regardless of whether they were updated. </li>Default value: invalidate.
     * @param array $Targets List of resources for which cache is to be purged. Each element format depends on the cache purge type and you can refer to the API examples for details. <li>The number of tasks that can be submitted at a time is limited by the quota of a billing package. For details, see [Billing Overview] (https://intl.cloud.tencent.com/document/product/1552/77380?from_cn_redirect=1).</li>
     * @param boolean $EncodeUrl Specifies whether to transcode non-ASCII URLs according to RFC3986.
Note that if it’s enabled, the purging is based on the converted URLs.
     * @param CacheTag $CacheTag The information attached when the node cache purge type is set to purge_cache_tag.
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = $param["Targets"];
        }

        if (array_key_exists("EncodeUrl",$param) and $param["EncodeUrl"] !== null) {
            $this->EncodeUrl = $param["EncodeUrl"];
        }

        if (array_key_exists("CacheTag",$param) and $param["CacheTag"] !== null) {
            $this->CacheTag = new CacheTag();
            $this->CacheTag->deserialize($param["CacheTag"]);
        }
    }
}
