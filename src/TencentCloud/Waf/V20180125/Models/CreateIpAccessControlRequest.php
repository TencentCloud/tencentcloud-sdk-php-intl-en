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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateIpAccessControl request structure.
 *
 * @method string getDomain() Obtain Specific domain name, for example, test.qcloudwaf.com.
Global domain name, that is, global.
 * @method void setDomain(string $Domain) Set Specific domain name, for example, test.qcloudwaf.com.
Global domain name, that is, global.
 * @method array getIpList() Obtain IP parameter list.
 * @method void setIpList(array $IpList) Set IP parameter list.
 * @method integer getActionType() Obtain 42: blocklist; 40: allowlist.
 * @method void setActionType(integer $ActionType) Set 42: blocklist; 40: allowlist.
 * @method integer getValidTS() Obtain valid_ts indicates a valid date. Its value is a second-level timestamp, such as 1680570420, which indicates 2023-04-04 09:07:00.
 * @method void setValidTS(integer $ValidTS) Set valid_ts indicates a valid date. Its value is a second-level timestamp, such as 1680570420, which indicates 2023-04-04 09:07:00.
 * @method string getInstanceId() Obtain Instance ID
 * @method void setInstanceId(string $InstanceId) Set Instance ID
 * @method string getEdition() Obtain WAF instance type: sparta-waf for SaaS WAF, clb-waf for CLB WAF.
 * @method void setEdition(string $Edition) Set WAF instance type: sparta-waf for SaaS WAF, clb-waf for CLB WAF.
 * @method string getSourceType() Obtain Valid values: batch (adding in batches), bot (adding to the bot details list in bot traffic analysis), cc (adding to IP addresses of the CC attack type in the attack log list), custom (default value for adding not in batches).
 * @method void setSourceType(string $SourceType) Set Valid values: batch (adding in batches), bot (adding to the bot details list in bot traffic analysis), cc (adding to IP addresses of the CC attack type in the attack log list), custom (default value for adding not in batches).
 * @method string getNote() Obtain Remarks
 * @method void setNote(string $Note) Set Remarks
 * @method string getJobType() Obtain Scheduled configuration type.
 * @method void setJobType(string $JobType) Set Scheduled configuration type.
 * @method JobDateTime getJobDateTime() Obtain Details of scheduled configuration.
 * @method void setJobDateTime(JobDateTime $JobDateTime) Set Details of scheduled configuration.
 */
class CreateIpAccessControlRequest extends AbstractModel
{
    /**
     * @var string Specific domain name, for example, test.qcloudwaf.com.
Global domain name, that is, global.
     */
    public $Domain;

    /**
     * @var array IP parameter list.
     */
    public $IpList;

    /**
     * @var integer 42: blocklist; 40: allowlist.
     */
    public $ActionType;

    /**
     * @var integer valid_ts indicates a valid date. Its value is a second-level timestamp, such as 1680570420, which indicates 2023-04-04 09:07:00.
     * @deprecated
     */
    public $ValidTS;

    /**
     * @var string Instance ID
     */
    public $InstanceId;

    /**
     * @var string WAF instance type: sparta-waf for SaaS WAF, clb-waf for CLB WAF.
     */
    public $Edition;

    /**
     * @var string Valid values: batch (adding in batches), bot (adding to the bot details list in bot traffic analysis), cc (adding to IP addresses of the CC attack type in the attack log list), custom (default value for adding not in batches).
     */
    public $SourceType;

    /**
     * @var string Remarks
     */
    public $Note;

    /**
     * @var string Scheduled configuration type.
     */
    public $JobType;

    /**
     * @var JobDateTime Details of scheduled configuration.
     */
    public $JobDateTime;

    /**
     * @param string $Domain Specific domain name, for example, test.qcloudwaf.com.
Global domain name, that is, global.
     * @param array $IpList IP parameter list.
     * @param integer $ActionType 42: blocklist; 40: allowlist.
     * @param integer $ValidTS valid_ts indicates a valid date. Its value is a second-level timestamp, such as 1680570420, which indicates 2023-04-04 09:07:00.
     * @param string $InstanceId Instance ID
     * @param string $Edition WAF instance type: sparta-waf for SaaS WAF, clb-waf for CLB WAF.
     * @param string $SourceType Valid values: batch (adding in batches), bot (adding to the bot details list in bot traffic analysis), cc (adding to IP addresses of the CC attack type in the attack log list), custom (default value for adding not in batches).
     * @param string $Note Remarks
     * @param string $JobType Scheduled configuration type.
     * @param JobDateTime $JobDateTime Details of scheduled configuration.
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

        if (array_key_exists("IpList",$param) and $param["IpList"] !== null) {
            $this->IpList = $param["IpList"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ValidTS",$param) and $param["ValidTS"] !== null) {
            $this->ValidTS = $param["ValidTS"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("Note",$param) and $param["Note"] !== null) {
            $this->Note = $param["Note"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("JobDateTime",$param) and $param["JobDateTime"] !== null) {
            $this->JobDateTime = new JobDateTime();
            $this->JobDateTime->deserialize($param["JobDateTime"]);
        }
    }
}
