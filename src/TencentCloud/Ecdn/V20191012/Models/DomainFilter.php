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
 * @method string getName() Obtain Filters by the field name, which includes:
- `origin`: Primary origin server.
- `domain`: Domain name.
- `resourceId`: Domain name ID.
- `status`: Domain name status. Valid values: `online`, `offline`, and `processing`.
- `disable`: Whether the domain name is blocked. Valid values: `normal`, `unlicensed`.
- `projectId`: Project ID.
- `fullUrlCache`: Whether to enable full-path cache, which can be `on` or `off`.
- `https`: Whether to configure HTTPS, which can be `on`, `off` or `processing`.
- `originPullProtocol`: Origin-pull protocol type, which can be `http`, `follow`, or `https`.
- `area`: Acceleration region, which can be `mainland`，`overseas` or `global`.
- `tagKey`: Tag key.
 * @method void setName(string $Name) Set Filters by the field name, which includes:
- `origin`: Primary origin server.
- `domain`: Domain name.
- `resourceId`: Domain name ID.
- `status`: Domain name status. Valid values: `online`, `offline`, and `processing`.
- `disable`: Whether the domain name is blocked. Valid values: `normal`, `unlicensed`.
- `projectId`: Project ID.
- `fullUrlCache`: Whether to enable full-path cache, which can be `on` or `off`.
- `https`: Whether to configure HTTPS, which can be `on`, `off` or `processing`.
- `originPullProtocol`: Origin-pull protocol type, which can be `http`, `follow`, or `https`.
- `area`: Acceleration region, which can be `mainland`，`overseas` or `global`.
- `tagKey`: Tag key.
 * @method array getValue() Obtain Filter field value.
 * @method void setValue(array $Value) Set Filter field value.
 * @method boolean getFuzzy() Obtain Whether to enable fuzzy query, which is supported only for filter fields `origin` and `domain`.
 * @method void setFuzzy(boolean $Fuzzy) Set Whether to enable fuzzy query, which is supported only for filter fields `origin` and `domain`.
 */
class DomainFilter extends AbstractModel
{
    /**
     * @var string Filters by the field name, which includes:
- `origin`: Primary origin server.
- `domain`: Domain name.
- `resourceId`: Domain name ID.
- `status`: Domain name status. Valid values: `online`, `offline`, and `processing`.
- `disable`: Whether the domain name is blocked. Valid values: `normal`, `unlicensed`.
- `projectId`: Project ID.
- `fullUrlCache`: Whether to enable full-path cache, which can be `on` or `off`.
- `https`: Whether to configure HTTPS, which can be `on`, `off` or `processing`.
- `originPullProtocol`: Origin-pull protocol type, which can be `http`, `follow`, or `https`.
- `area`: Acceleration region, which can be `mainland`，`overseas` or `global`.
- `tagKey`: Tag key.
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
     * @param string $Name Filters by the field name, which includes:
- `origin`: Primary origin server.
- `domain`: Domain name.
- `resourceId`: Domain name ID.
- `status`: Domain name status. Valid values: `online`, `offline`, and `processing`.
- `disable`: Whether the domain name is blocked. Valid values: `normal`, `unlicensed`.
- `projectId`: Project ID.
- `fullUrlCache`: Whether to enable full-path cache, which can be `on` or `off`.
- `https`: Whether to configure HTTPS, which can be `on`, `off` or `processing`.
- `originPullProtocol`: Origin-pull protocol type, which can be `http`, `follow`, or `https`.
- `area`: Acceleration region, which can be `mainland`，`overseas` or `global`.
- `tagKey`: Tag key.
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
