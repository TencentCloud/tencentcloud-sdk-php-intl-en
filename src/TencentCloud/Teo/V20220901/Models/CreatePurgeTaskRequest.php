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
 * CreatePurgeTask request structure.
 *
 * @method string getZoneId() Obtain Zone ID.
If you wish to quickly submit Targets Url under different sites, you can fill in *, but the account calling the API must have permission for all site resources under the root account.
 * @method void setZoneId(string $ZoneId) Set Zone ID.
If you wish to quickly submit Targets Url under different sites, you can fill in *, but the account calling the API must have permission for all site resources under the root account.
 * @method string getType() Obtain Node cache clearing type, with values:
<li>purge_url: URL refresh;</li>
<li>purge_prefix: directory refresh;</li>
<li>purge_host: Hostname refresh;</li>
<li>purge_all: cache purge for all under the site (when this value is used, ZoneId input parameter * is not supported);</li>
<li>purge_cache_tag: cache-tag refresh.</li>For cache purge types, see [Purge Cache](https://www.tencentcloud.com/document/product/1552/70759?from_cn_redirect=1).
 * @method void setType(string $Type) Set Node cache clearing type, with values:
<li>purge_url: URL refresh;</li>
<li>purge_prefix: directory refresh;</li>
<li>purge_host: Hostname refresh;</li>
<li>purge_all: cache purge for all under the site (when this value is used, ZoneId input parameter * is not supported);</li>
<li>purge_cache_tag: cache-tag refresh.</li>For cache purge types, see [Purge Cache](https://www.tencentcloud.com/document/product/1552/70759?from_cn_redirect=1).
 * @method string getMethod() Obtain Node cache purge method, valid for directory refresh, Hostname refresh, and refresh all cache types. Valid values: <li> invalidate: refresh only resources that have been updated under the directory;</li><li> delete: refresh node resources regardless of whether resources under the directory are updated.</li>Default value: invalidate.
 * @method void setMethod(string $Method) Set Node cache purge method, valid for directory refresh, Hostname refresh, and refresh all cache types. Valid values: <li> invalidate: refresh only resources that have been updated under the directory;</li><li> delete: refresh node resources regardless of whether resources under the directory are updated.</li>Default value: invalidate.
 * @method array getTargets() Obtain List of resources for cache purging, for example, https://www.example.com/example.jpg. Protocol information must be included. The format of additional elements depends on the type of cache purging. Refer to the API call example below.<li>The number of tasks that can be submitted at a time is limited by the billing package quota. Check [EO billing packages](https://www.tencentcloud.com/document/product/1552/77380?from_cn_redirect=1).</li>
 * @method void setTargets(array $Targets) Set List of resources for cache purging, for example, https://www.example.com/example.jpg. Protocol information must be included. The format of additional elements depends on the type of cache purging. Refer to the API call example below.<li>The number of tasks that can be submitted at a time is limited by the billing package quota. Check [EO billing packages](https://www.tencentcloud.com/document/product/1552/77380?from_cn_redirect=1).</li>
 * @method boolean getEncodeUrl() Obtain If transcoding exists, only delete the resources that match after transcoding.
If the content contains characters in a non-ASCII character set, enable this switch for encoding conversion (the encoding rule adheres to RFC3986).
 * @method void setEncodeUrl(boolean $EncodeUrl) Set If transcoding exists, only delete the resources that match after transcoding.
If the content contains characters in a non-ASCII character set, enable this switch for encoding conversion (the encoding rule adheres to RFC3986).
 * @method CacheTag getCacheTag() Obtain This parameter is required when the node cache purge type is set to purge_cache_tag. The input value is a domain name.
 * @method void setCacheTag(CacheTag $CacheTag) Set This parameter is required when the node cache purge type is set to purge_cache_tag. The input value is a domain name.
 */
class CreatePurgeTaskRequest extends AbstractModel
{
    /**
     * @var string Zone ID.
If you wish to quickly submit Targets Url under different sites, you can fill in *, but the account calling the API must have permission for all site resources under the root account.
     */
    public $ZoneId;

    /**
     * @var string Node cache clearing type, with values:
<li>purge_url: URL refresh;</li>
<li>purge_prefix: directory refresh;</li>
<li>purge_host: Hostname refresh;</li>
<li>purge_all: cache purge for all under the site (when this value is used, ZoneId input parameter * is not supported);</li>
<li>purge_cache_tag: cache-tag refresh.</li>For cache purge types, see [Purge Cache](https://www.tencentcloud.com/document/product/1552/70759?from_cn_redirect=1).
     */
    public $Type;

    /**
     * @var string Node cache purge method, valid for directory refresh, Hostname refresh, and refresh all cache types. Valid values: <li> invalidate: refresh only resources that have been updated under the directory;</li><li> delete: refresh node resources regardless of whether resources under the directory are updated.</li>Default value: invalidate.
     */
    public $Method;

    /**
     * @var array List of resources for cache purging, for example, https://www.example.com/example.jpg. Protocol information must be included. The format of additional elements depends on the type of cache purging. Refer to the API call example below.<li>The number of tasks that can be submitted at a time is limited by the billing package quota. Check [EO billing packages](https://www.tencentcloud.com/document/product/1552/77380?from_cn_redirect=1).</li>
     */
    public $Targets;

    /**
     * @var boolean If transcoding exists, only delete the resources that match after transcoding.
If the content contains characters in a non-ASCII character set, enable this switch for encoding conversion (the encoding rule adheres to RFC3986).
     * @deprecated
     */
    public $EncodeUrl;

    /**
     * @var CacheTag This parameter is required when the node cache purge type is set to purge_cache_tag. The input value is a domain name.
     */
    public $CacheTag;

    /**
     * @param string $ZoneId Zone ID.
If you wish to quickly submit Targets Url under different sites, you can fill in *, but the account calling the API must have permission for all site resources under the root account.
     * @param string $Type Node cache clearing type, with values:
<li>purge_url: URL refresh;</li>
<li>purge_prefix: directory refresh;</li>
<li>purge_host: Hostname refresh;</li>
<li>purge_all: cache purge for all under the site (when this value is used, ZoneId input parameter * is not supported);</li>
<li>purge_cache_tag: cache-tag refresh.</li>For cache purge types, see [Purge Cache](https://www.tencentcloud.com/document/product/1552/70759?from_cn_redirect=1).
     * @param string $Method Node cache purge method, valid for directory refresh, Hostname refresh, and refresh all cache types. Valid values: <li> invalidate: refresh only resources that have been updated under the directory;</li><li> delete: refresh node resources regardless of whether resources under the directory are updated.</li>Default value: invalidate.
     * @param array $Targets List of resources for cache purging, for example, https://www.example.com/example.jpg. Protocol information must be included. The format of additional elements depends on the type of cache purging. Refer to the API call example below.<li>The number of tasks that can be submitted at a time is limited by the billing package quota. Check [EO billing packages](https://www.tencentcloud.com/document/product/1552/77380?from_cn_redirect=1).</li>
     * @param boolean $EncodeUrl If transcoding exists, only delete the resources that match after transcoding.
If the content contains characters in a non-ASCII character set, enable this switch for encoding conversion (the encoding rule adheres to RFC3986).
     * @param CacheTag $CacheTag This parameter is required when the node cache purge type is set to purge_cache_tag. The input value is a domain name.
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
