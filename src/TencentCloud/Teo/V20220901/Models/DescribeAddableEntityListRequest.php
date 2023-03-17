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
 * DescribeAddableEntityList request structure.
 *
 * @method string getZoneId() Obtain ID of the site.
 * @method void setZoneId(string $ZoneId) Set ID of the site.
 * @method string getEntityType() Obtain Type of the shipping entity. Values:
<li>`domain`: L7 acceleration logs;</li>
<li>`application`: L4 acceleration logs;</li>
<li>`web-rateLiming`: Rate limiting logs;</li>
<li>`web-attack`: Web security logs;</li>
<li>`web-rule`: Custom rule logs;</li>
<li>`web-bot`: Bot management logs.</li>
 * @method void setEntityType(string $EntityType) Set Type of the shipping entity. Values:
<li>`domain`: L7 acceleration logs;</li>
<li>`application`: L4 acceleration logs;</li>
<li>`web-rateLiming`: Rate limiting logs;</li>
<li>`web-attack`: Web security logs;</li>
<li>`web-rule`: Custom rule logs;</li>
<li>`web-bot`: Bot management logs.</li>
 * @method string getArea() Obtain The service region. Values:
<li>`mainland`: Chinese mainland.</li>
<li>`overseas`: Regions outside the Chinese mainland.</li>For an account registered on the Chinese site, it defaults to `mainland`. For an account registered on the international site, it defaults to `overseas`.
 * @method void setArea(string $Area) Set The service region. Values:
<li>`mainland`: Chinese mainland.</li>
<li>`overseas`: Regions outside the Chinese mainland.</li>For an account registered on the Chinese site, it defaults to `mainland`. For an account registered on the international site, it defaults to `overseas`.
 */
class DescribeAddableEntityListRequest extends AbstractModel
{
    /**
     * @var string ID of the site.
     */
    public $ZoneId;

    /**
     * @var string Type of the shipping entity. Values:
<li>`domain`: L7 acceleration logs;</li>
<li>`application`: L4 acceleration logs;</li>
<li>`web-rateLiming`: Rate limiting logs;</li>
<li>`web-attack`: Web security logs;</li>
<li>`web-rule`: Custom rule logs;</li>
<li>`web-bot`: Bot management logs.</li>
     */
    public $EntityType;

    /**
     * @var string The service region. Values:
<li>`mainland`: Chinese mainland.</li>
<li>`overseas`: Regions outside the Chinese mainland.</li>For an account registered on the Chinese site, it defaults to `mainland`. For an account registered on the international site, it defaults to `overseas`.
     */
    public $Area;

    /**
     * @param string $ZoneId ID of the site.
     * @param string $EntityType Type of the shipping entity. Values:
<li>`domain`: L7 acceleration logs;</li>
<li>`application`: L4 acceleration logs;</li>
<li>`web-rateLiming`: Rate limiting logs;</li>
<li>`web-attack`: Web security logs;</li>
<li>`web-rule`: Custom rule logs;</li>
<li>`web-bot`: Bot management logs.</li>
     * @param string $Area The service region. Values:
<li>`mainland`: Chinese mainland.</li>
<li>`overseas`: Regions outside the Chinese mainland.</li>For an account registered on the Chinese site, it defaults to `mainland`. For an account registered on the international site, it defaults to `overseas`.
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

        if (array_key_exists("EntityType",$param) and $param["EntityType"] !== null) {
            $this->EntityType = $param["EntityType"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }
    }
}
