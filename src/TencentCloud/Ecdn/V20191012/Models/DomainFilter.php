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
namespace TencentCloud\Ecdn\V20191012\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Filter for domain name query.
 *
 * @method string getName() Obtain Filter field name, which can be:
- origin: primary origin server.
- domain: domain name.
- resourceId: domain name ID.
- status: domain name status. Valid values: online, offline, processing.
- disable: domain name blockage status. Valid values: normal, unlicensed.
- projectId: project ID.
- fullUrlCache: full path cache. Valid values: on, off.
- https: whether to configure HTTPS. Valid values: on, off, processing.
- originPullProtocol: origin-pull protocol type. Valid values: http, follow, https.
- area: acceleration region. Valid values: mainland, overseas, global.
 * @method void setName(string $Name) Set Filter field name, which can be:
- origin: primary origin server.
- domain: domain name.
- resourceId: domain name ID.
- status: domain name status. Valid values: online, offline, processing.
- disable: domain name blockage status. Valid values: normal, unlicensed.
- projectId: project ID.
- fullUrlCache: full path cache. Valid values: on, off.
- https: whether to configure HTTPS. Valid values: on, off, processing.
- originPullProtocol: origin-pull protocol type. Valid values: http, follow, https.
- area: acceleration region. Valid values: mainland, overseas, global.
 * @method array getValue() Obtain Filter field value.
 * @method void setValue(array $Value) Set Filter field value.
 * @method boolean getFuzzy() Obtain Whether to enable fuzzy query, which is supported only for filter fields `origin` and `domain`.
 * @method void setFuzzy(boolean $Fuzzy) Set Whether to enable fuzzy query, which is supported only for filter fields `origin` and `domain`.
 */
class DomainFilter extends AbstractModel
{
    /**
     * @var string Filter field name, which can be:
- origin: primary origin server.
- domain: domain name.
- resourceId: domain name ID.
- status: domain name status. Valid values: online, offline, processing.
- disable: domain name blockage status. Valid values: normal, unlicensed.
- projectId: project ID.
- fullUrlCache: full path cache. Valid values: on, off.
- https: whether to configure HTTPS. Valid values: on, off, processing.
- originPullProtocol: origin-pull protocol type. Valid values: http, follow, https.
- area: acceleration region. Valid values: mainland, overseas, global.
     */
    public $Name;

    /**
     * @var array Filter field value.
     */
    public $Value;

    /**
     * @var boolean Whether to enable fuzzy query, which is supported only for filter fields `origin` and `domain`.
     */
    public $Fuzzy;

    /**
     * @param string $Name Filter field name, which can be:
- origin: primary origin server.
- domain: domain name.
- resourceId: domain name ID.
- status: domain name status. Valid values: online, offline, processing.
- disable: domain name blockage status. Valid values: normal, unlicensed.
- projectId: project ID.
- fullUrlCache: full path cache. Valid values: on, off.
- https: whether to configure HTTPS. Valid values: on, off, processing.
- originPullProtocol: origin-pull protocol type. Valid values: http, follow, https.
- area: acceleration region. Valid values: mainland, overseas, global.
     * @param array $Value Filter field value.
     * @param boolean $Fuzzy Whether to enable fuzzy query, which is supported only for filter fields `origin` and `domain`.
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Fuzzy",$param) and $param["Fuzzy"] !== null) {
            $this->Fuzzy = $param["Fuzzy"];
        }
    }
}
