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
 * DescribeSecurityTemplateBindings request structure.
 *
 * @method string getZoneId() Obtain ID of the site to query
 * @method void setZoneId(string $ZoneId) Set ID of the site to query
 * @method array getTemplateId() Obtain ID of the policy template to query.
 * @method void setTemplateId(array $TemplateId) Set ID of the policy template to query.
 */
class DescribeSecurityTemplateBindingsRequest extends AbstractModel
{
    /**
     * @var string ID of the site to query
     */
    public $ZoneId;

    /**
     * @var array ID of the policy template to query.
     */
    public $TemplateId;

    /**
     * @param string $ZoneId ID of the site to query
     * @param array $TemplateId ID of the policy template to query.
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

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}
