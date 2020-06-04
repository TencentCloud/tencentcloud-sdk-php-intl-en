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
namespace TencentCloud\Dayu\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribleL7Rules request structure.
 *
 * @method string getBusiness() Obtain Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `net`: Anti-DDoS Ultimate
 * @method void setBusiness(string $Business) Set Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `net`: Anti-DDoS Ultimate
 * @method string getId() Obtain Anti-DDoS instance ID
 * @method void setId(string $Id) Set Anti-DDoS instance ID
 * @method array getRuleIdList() Obtain Rule ID, which is optional. If this field is entered, the specified rule will be obtained
 * @method void setRuleIdList(array $RuleIdList) Set Rule ID, which is optional. If this field is entered, the specified rule will be obtained
 * @method integer getLimit() Obtain Number of entries per page. A value of 0 means no pagination
 * @method void setLimit(integer $Limit) Set Number of entries per page. A value of 0 means no pagination
 * @method integer getOffset() Obtain Page start offset, whose value is (page number - 1) * number of entries per page
 * @method void setOffset(integer $Offset) Set Page start offset, whose value is (page number - 1) * number of entries per page
 * @method string getDomain() Obtain Domain name search, which is optional. Enter it if you need to search for domain names
 * @method void setDomain(string $Domain) Set Domain name search, which is optional. Enter it if you need to search for domain names
 * @method array getProtocolList() Obtain Forwarding protocol search, which is optional. Valid values: [http, https, http/https]
 * @method void setProtocolList(array $ProtocolList) Set Forwarding protocol search, which is optional. Valid values: [http, https, http/https]
 * @method array getStatusList() Obtain Status search, which is optional. Valid values: [0 (successfully configured rule), 1 (rule configuration taking effect), 2 (rule configuration failed), 3 (rule deletion taking effect), 5 (rule deletion failed), 6 (rule waiting for configuration), 7 (rule waiting for deletion), 8 (rule waiting for certificate configuration)]
 * @method void setStatusList(array $StatusList) Set Status search, which is optional. Valid values: [0 (successfully configured rule), 1 (rule configuration taking effect), 2 (rule configuration failed), 3 (rule deletion taking effect), 5 (rule deletion failed), 6 (rule waiting for configuration), 7 (rule waiting for deletion), 8 (rule waiting for certificate configuration)]
 */
class DescribleL7RulesRequest extends AbstractModel
{
    /**
     * @var string Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `net`: Anti-DDoS Ultimate
     */
    public $Business;

    /**
     * @var string Anti-DDoS instance ID
     */
    public $Id;

    /**
     * @var array Rule ID, which is optional. If this field is entered, the specified rule will be obtained
     */
    public $RuleIdList;

    /**
     * @var integer Number of entries per page. A value of 0 means no pagination
     */
    public $Limit;

    /**
     * @var integer Page start offset, whose value is (page number - 1) * number of entries per page
     */
    public $Offset;

    /**
     * @var string Domain name search, which is optional. Enter it if you need to search for domain names
     */
    public $Domain;

    /**
     * @var array Forwarding protocol search, which is optional. Valid values: [http, https, http/https]
     */
    public $ProtocolList;

    /**
     * @var array Status search, which is optional. Valid values: [0 (successfully configured rule), 1 (rule configuration taking effect), 2 (rule configuration failed), 3 (rule deletion taking effect), 5 (rule deletion failed), 6 (rule waiting for configuration), 7 (rule waiting for deletion), 8 (rule waiting for certificate configuration)]
     */
    public $StatusList;

    /**
     * @param string $Business Anti-DDoS service type. `bgpip`: Anti-DDoS Advanced; `net`: Anti-DDoS Ultimate
     * @param string $Id Anti-DDoS instance ID
     * @param array $RuleIdList Rule ID, which is optional. If this field is entered, the specified rule will be obtained
     * @param integer $Limit Number of entries per page. A value of 0 means no pagination
     * @param integer $Offset Page start offset, whose value is (page number - 1) * number of entries per page
     * @param string $Domain Domain name search, which is optional. Enter it if you need to search for domain names
     * @param array $ProtocolList Forwarding protocol search, which is optional. Valid values: [http, https, http/https]
     * @param array $StatusList Status search, which is optional. Valid values: [0 (successfully configured rule), 1 (rule configuration taking effect), 2 (rule configuration failed), 3 (rule deletion taking effect), 5 (rule deletion failed), 6 (rule waiting for configuration), 7 (rule waiting for deletion), 8 (rule waiting for certificate configuration)]
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("RuleIdList",$param) and $param["RuleIdList"] !== null) {
            $this->RuleIdList = $param["RuleIdList"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("ProtocolList",$param) and $param["ProtocolList"] !== null) {
            $this->ProtocolList = $param["ProtocolList"];
        }

        if (array_key_exists("StatusList",$param) and $param["StatusList"] !== null) {
            $this->StatusList = $param["StatusList"];
        }
    }
}
