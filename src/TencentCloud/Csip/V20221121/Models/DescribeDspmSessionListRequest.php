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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDspmSessionList request structure.
 *
 * @method array getMemberId() Obtain <p>Group account member id</p>
 * @method void setMemberId(array $MemberId) Set <p>Group account member id</p>
 * @method integer getLimit() Obtain <p>Number limit.</p>
 * @method void setLimit(integer $Limit) Set <p>Number limit.</p>
 * @method integer getOffset() Obtain <p>Offset.</p>
 * @method void setOffset(integer $Offset) Set <p>Offset.</p>
 * @method integer getLoginType() Obtain <p>Login status</p><p>Enumeration values:</p><ul><li>0: all</li><li>1: successful</li><li>2: failed</li></ul>
 * @method void setLoginType(integer $LoginType) Set <p>Login status</p><p>Enumeration values:</p><ul><li>0: all</li><li>1: successful</li><li>2: failed</li></ul>
 * @method string getDbName() Obtain <p>Database port</p>
 * @method void setDbName(string $DbName) Set <p>Database port</p>
 * @method integer getDbPort() Obtain <p>Database name</p>
 * @method void setDbPort(integer $DbPort) Set <p>Database name</p>
 * @method string getDbIp() Obtain <p>Database IP</p>
 * @method void setDbIp(string $DbIp) Set <p>Database IP</p>
 * @method integer getAssetsId() Obtain <p>Asset ID.</p>
 * @method void setAssetsId(integer $AssetsId) Set <p>Asset ID.</p>
 * @method string getSessionId() Obtain <p>Conversation ID</p>
 * @method void setSessionId(string $SessionId) Set <p>Conversation ID</p>
 * @method string getClientSideIp() Obtain <p>Client IP</p>
 * @method void setClientSideIp(string $ClientSideIp) Set <p>Client IP</p>
 * @method string getUserName() Obtain <p>Username.</p>
 * @method void setUserName(string $UserName) Set <p>Username.</p>
 * @method integer getEndTime() Obtain <p>End time.</p>
 * @method void setEndTime(integer $EndTime) Set <p>End time.</p>
 * @method integer getStartTime() Obtain <p>Start time.</p>
 * @method void setStartTime(integer $StartTime) Set <p>Start time.</p>
 * @method array getSourceTypes() Obtain <p>Traffic source. Value: Agent/Proxy/empty. If Agent is passed, agent logs will be returned. If Proxy is passed, proxy logs will be returned. If both or neither is passed, all logs will be returned.</p>
 * @method void setSourceTypes(array $SourceTypes) Set <p>Traffic source. Value: Agent/Proxy/empty. If Agent is passed, agent logs will be returned. If Proxy is passed, proxy logs will be returned. If both or neither is passed, all logs will be returned.</p>
 * @method array getDbTypes() Obtain <p>[&quot;MySQL&quot;]</p>
 * @method void setDbTypes(array $DbTypes) Set <p>[&quot;MySQL&quot;]</p>
 */
class DescribeDspmSessionListRequest extends AbstractModel
{
    /**
     * @var array <p>Group account member id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>Number limit.</p>
     */
    public $Limit;

    /**
     * @var integer <p>Offset.</p>
     */
    public $Offset;

    /**
     * @var integer <p>Login status</p><p>Enumeration values:</p><ul><li>0: all</li><li>1: successful</li><li>2: failed</li></ul>
     */
    public $LoginType;

    /**
     * @var string <p>Database port</p>
     */
    public $DbName;

    /**
     * @var integer <p>Database name</p>
     */
    public $DbPort;

    /**
     * @var string <p>Database IP</p>
     */
    public $DbIp;

    /**
     * @var integer <p>Asset ID.</p>
     */
    public $AssetsId;

    /**
     * @var string <p>Conversation ID</p>
     */
    public $SessionId;

    /**
     * @var string <p>Client IP</p>
     */
    public $ClientSideIp;

    /**
     * @var string <p>Username.</p>
     */
    public $UserName;

    /**
     * @var integer <p>End time.</p>
     */
    public $EndTime;

    /**
     * @var integer <p>Start time.</p>
     */
    public $StartTime;

    /**
     * @var array <p>Traffic source. Value: Agent/Proxy/empty. If Agent is passed, agent logs will be returned. If Proxy is passed, proxy logs will be returned. If both or neither is passed, all logs will be returned.</p>
     */
    public $SourceTypes;

    /**
     * @var array <p>[&quot;MySQL&quot;]</p>
     */
    public $DbTypes;

    /**
     * @param array $MemberId <p>Group account member id</p>
     * @param integer $Limit <p>Number limit.</p>
     * @param integer $Offset <p>Offset.</p>
     * @param integer $LoginType <p>Login status</p><p>Enumeration values:</p><ul><li>0: all</li><li>1: successful</li><li>2: failed</li></ul>
     * @param string $DbName <p>Database port</p>
     * @param integer $DbPort <p>Database name</p>
     * @param string $DbIp <p>Database IP</p>
     * @param integer $AssetsId <p>Asset ID.</p>
     * @param string $SessionId <p>Conversation ID</p>
     * @param string $ClientSideIp <p>Client IP</p>
     * @param string $UserName <p>Username.</p>
     * @param integer $EndTime <p>End time.</p>
     * @param integer $StartTime <p>Start time.</p>
     * @param array $SourceTypes <p>Traffic source. Value: Agent/Proxy/empty. If Agent is passed, agent logs will be returned. If Proxy is passed, proxy logs will be returned. If both or neither is passed, all logs will be returned.</p>
     * @param array $DbTypes <p>[&quot;MySQL&quot;]</p>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("LoginType",$param) and $param["LoginType"] !== null) {
            $this->LoginType = $param["LoginType"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("DbPort",$param) and $param["DbPort"] !== null) {
            $this->DbPort = $param["DbPort"];
        }

        if (array_key_exists("DbIp",$param) and $param["DbIp"] !== null) {
            $this->DbIp = $param["DbIp"];
        }

        if (array_key_exists("AssetsId",$param) and $param["AssetsId"] !== null) {
            $this->AssetsId = $param["AssetsId"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ClientSideIp",$param) and $param["ClientSideIp"] !== null) {
            $this->ClientSideIp = $param["ClientSideIp"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("SourceTypes",$param) and $param["SourceTypes"] !== null) {
            $this->SourceTypes = $param["SourceTypes"];
        }

        if (array_key_exists("DbTypes",$param) and $param["DbTypes"] !== null) {
            $this->DbTypes = $param["DbTypes"];
        }
    }
}
