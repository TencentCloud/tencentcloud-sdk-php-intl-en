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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBotManagedRules request structure.
 *
 * @method string getZoneId() Obtain Top-level domain name
 * @method void setZoneId(string $ZoneId) Set Top-level domain name
 * @method string getEntity() Obtain Subdomain name/layer-4 proxy
 * @method void setEntity(string $Entity) Set Subdomain name/layer-4 proxy
 * @method integer getPage() Obtain Total number of pages
 * @method void setPage(integer $Page) Set Total number of pages
 * @method integer getPerPage() Obtain Number of rules per page
 * @method void setPerPage(integer $PerPage) Set Number of rules per page
 * @method string getRuleType() Obtain Rule type. Values: `idcid`, `sipbot` and `uabot`. All rules will be returned if this field is not specified.
 * @method void setRuleType(string $RuleType) Set Rule type. Values: `idcid`, `sipbot` and `uabot`. All rules will be returned if this field is not specified.
 */
class DescribeBotManagedRulesRequest extends AbstractModel
{
    /**
     * @var string Top-level domain name
     */
    public $ZoneId;

    /**
     * @var string Subdomain name/layer-4 proxy
     */
    public $Entity;

    /**
     * @var integer Total number of pages
     */
    public $Page;

    /**
     * @var integer Number of rules per page
     */
    public $PerPage;

    /**
     * @var string Rule type. Values: `idcid`, `sipbot` and `uabot`. All rules will be returned if this field is not specified.
     */
    public $RuleType;

    /**
     * @param string $ZoneId Top-level domain name
     * @param string $Entity Subdomain name/layer-4 proxy
     * @param integer $Page Total number of pages
     * @param integer $PerPage Number of rules per page
     * @param string $RuleType Rule type. Values: `idcid`, `sipbot` and `uabot`. All rules will be returned if this field is not specified.
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

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PerPage",$param) and $param["PerPage"] !== null) {
            $this->PerPage = $param["PerPage"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }
    }
}
