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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveTranscodeRules request structure.
 *
 * @method array getTemplateIds() Obtain An array of template IDs to be filtered.
 * @method void setTemplateIds(array $TemplateIds) Set An array of template IDs to be filtered.
 * @method array getDomainNames() Obtain An array of domain names to be filtered.
 * @method void setDomainNames(array $DomainNames) Set An array of domain names to be filtered.
 */
class DescribeLiveTranscodeRulesRequest extends AbstractModel
{
    /**
     * @var array An array of template IDs to be filtered.
     */
    public $TemplateIds;

    /**
     * @var array An array of domain names to be filtered.
     */
    public $DomainNames;

    /**
     * @param array $TemplateIds An array of template IDs to be filtered.
     * @param array $DomainNames An array of domain names to be filtered.
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
        if (array_key_exists("TemplateIds",$param) and $param["TemplateIds"] !== null) {
            $this->TemplateIds = $param["TemplateIds"];
        }

        if (array_key_exists("DomainNames",$param) and $param["DomainNames"] !== null) {
            $this->DomainNames = $param["DomainNames"];
        }
    }
}
