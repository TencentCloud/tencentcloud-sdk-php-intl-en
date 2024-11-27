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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteIpAccessControlV2 request structure.
 *
 * @method string getDomain() Obtain Domain name
 * @method void setDomain(string $Domain) Set Domain name
 * @method array getRuleIds() Obtain Rule ID list. Batch deletion is supported. This parameter does not need to be specified when DeleteAll is true.
 * @method void setRuleIds(array $RuleIds) Set Rule ID list. Batch deletion is supported. This parameter does not need to be specified when DeleteAll is true.
 * @method boolean getDeleteAll() Obtain Whether to delete all IP blocklists/allowlists under the corresponding domain name. true: delete all lists; false: delete only the specified lists. Batch protection is not supported.
 * @method void setDeleteAll(boolean $DeleteAll) Set Whether to delete all IP blocklists/allowlists under the corresponding domain name. true: delete all lists; false: delete only the specified lists. Batch protection is not supported.
 * @method string getSourceType() Obtain batch: indicates batch protection IP allowlists/blocklists.
 * @method void setSourceType(string $SourceType) Set batch: indicates batch protection IP allowlists/blocklists.
 * @method integer getActionType() Obtain IP blocklist/allowlist type. 40: IP allowlist; 42: IP blocklist. This parameter should be passed in when DeleteAll is true.
 * @method void setActionType(integer $ActionType) Set IP blocklist/allowlist type. 40: IP allowlist; 42: IP blocklist. This parameter should be passed in when DeleteAll is true.
 */
class DeleteIpAccessControlV2Request extends AbstractModel
{
    /**
     * @var string Domain name
     */
    public $Domain;

    /**
     * @var array Rule ID list. Batch deletion is supported. This parameter does not need to be specified when DeleteAll is true.
     */
    public $RuleIds;

    /**
     * @var boolean Whether to delete all IP blocklists/allowlists under the corresponding domain name. true: delete all lists; false: delete only the specified lists. Batch protection is not supported.
     */
    public $DeleteAll;

    /**
     * @var string batch: indicates batch protection IP allowlists/blocklists.
     */
    public $SourceType;

    /**
     * @var integer IP blocklist/allowlist type. 40: IP allowlist; 42: IP blocklist. This parameter should be passed in when DeleteAll is true.
     */
    public $ActionType;

    /**
     * @param string $Domain Domain name
     * @param array $RuleIds Rule ID list. Batch deletion is supported. This parameter does not need to be specified when DeleteAll is true.
     * @param boolean $DeleteAll Whether to delete all IP blocklists/allowlists under the corresponding domain name. true: delete all lists; false: delete only the specified lists. Batch protection is not supported.
     * @param string $SourceType batch: indicates batch protection IP allowlists/blocklists.
     * @param integer $ActionType IP blocklist/allowlist type. 40: IP allowlist; 42: IP blocklist. This parameter should be passed in when DeleteAll is true.
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("RuleIds",$param) and $param["RuleIds"] !== null) {
            $this->RuleIds = $param["RuleIds"];
        }

        if (array_key_exists("DeleteAll",$param) and $param["DeleteAll"] !== null) {
            $this->DeleteAll = $param["DeleteAll"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }
    }
}
