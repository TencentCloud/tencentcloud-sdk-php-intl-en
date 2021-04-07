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
namespace TencentCloud\Gpm\V20200820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMatch request structure.
 *
 * @method string getMatchName() Obtain Match name. It can contain up to 128 bytes, supporting [a-zA-Z0-9-\.]*.
 * @method void setMatchName(string $MatchName) Set Match name. It can contain up to 128 bytes, supporting [a-zA-Z0-9-\.]*.
 * @method string getRuleCode() Obtain RuleCode
 * @method void setRuleCode(string $RuleCode) Set RuleCode
 * @method integer getTimeout() Obtain Timeout period in seconds. Value range: 1 600
 * @method void setTimeout(integer $Timeout) Set Timeout period in seconds. Value range: 1 600
 * @method integer getServerType() Obtain Whether to request server resources for the matchmaking results. 0: no, 1: request GSE resources
 * @method void setServerType(integer $ServerType) Set Whether to request server resources for the matchmaking results. 0: no, 1: request GSE resources
 * @method string getMatchDesc() Obtain Matchmaking description. Up to 1024 bytes are allowed.
 * @method void setMatchDesc(string $MatchDesc) Set Matchmaking description. Up to 1024 bytes are allowed.
 * @method string getNotifyUrl() Obtain Only HTTP and HTTPS protocols are supported.
 * @method void setNotifyUrl(string $NotifyUrl) Set Only HTTP and HTTPS protocols are supported.
 * @method string getServerRegion() Obtain Region of the game server queue
 * @method void setServerRegion(string $ServerRegion) Set Region of the game server queue
 * @method string getServerQueue() Obtain Game server queue
 * @method void setServerQueue(string $ServerQueue) Set Game server queue
 * @method string getCustomPushData() Obtain Custom push data
 * @method void setCustomPushData(string $CustomPushData) Set Custom push data
 * @method string getServerSessionData() Obtain Game server session data
 * @method void setServerSessionData(string $ServerSessionData) Set Game server session data
 * @method array getGameProperties() Obtain Game attribute. It is an array of key-value structure.
 * @method void setGameProperties(array $GameProperties) Set Game attribute. It is an array of key-value structure.
 * @method integer getLogSwitch() Obtain Enable or disable the log. 0: disable, 1: enable
 * @method void setLogSwitch(integer $LogSwitch) Set Enable or disable the log. 0: disable, 1: enable
 * @method array getTags() Obtain Tag. It is an array of key-value structure.
 * @method void setTags(array $Tags) Set Tag. It is an array of key-value structure.
 */
class CreateMatchRequest extends AbstractModel
{
    /**
     * @var string Match name. It can contain up to 128 bytes, supporting [a-zA-Z0-9-\.]*.
     */
    public $MatchName;

    /**
     * @var string RuleCode
     */
    public $RuleCode;

    /**
     * @var integer Timeout period in seconds. Value range: 1 600
     */
    public $Timeout;

    /**
     * @var integer Whether to request server resources for the matchmaking results. 0: no, 1: request GSE resources
     */
    public $ServerType;

    /**
     * @var string Matchmaking description. Up to 1024 bytes are allowed.
     */
    public $MatchDesc;

    /**
     * @var string Only HTTP and HTTPS protocols are supported.
     */
    public $NotifyUrl;

    /**
     * @var string Region of the game server queue
     */
    public $ServerRegion;

    /**
     * @var string Game server queue
     */
    public $ServerQueue;

    /**
     * @var string Custom push data
     */
    public $CustomPushData;

    /**
     * @var string Game server session data
     */
    public $ServerSessionData;

    /**
     * @var array Game attribute. It is an array of key-value structure.
     */
    public $GameProperties;

    /**
     * @var integer Enable or disable the log. 0: disable, 1: enable
     */
    public $LogSwitch;

    /**
     * @var array Tag. It is an array of key-value structure.
     */
    public $Tags;

    /**
     * @param string $MatchName Match name. It can contain up to 128 bytes, supporting [a-zA-Z0-9-\.]*.
     * @param string $RuleCode RuleCode
     * @param integer $Timeout Timeout period in seconds. Value range: 1 600
     * @param integer $ServerType Whether to request server resources for the matchmaking results. 0: no, 1: request GSE resources
     * @param string $MatchDesc Matchmaking description. Up to 1024 bytes are allowed.
     * @param string $NotifyUrl Only HTTP and HTTPS protocols are supported.
     * @param string $ServerRegion Region of the game server queue
     * @param string $ServerQueue Game server queue
     * @param string $CustomPushData Custom push data
     * @param string $ServerSessionData Game server session data
     * @param array $GameProperties Game attribute. It is an array of key-value structure.
     * @param integer $LogSwitch Enable or disable the log. 0: disable, 1: enable
     * @param array $Tags Tag. It is an array of key-value structure.
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
        if (array_key_exists("MatchName",$param) and $param["MatchName"] !== null) {
            $this->MatchName = $param["MatchName"];
        }

        if (array_key_exists("RuleCode",$param) and $param["RuleCode"] !== null) {
            $this->RuleCode = $param["RuleCode"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }

        if (array_key_exists("ServerType",$param) and $param["ServerType"] !== null) {
            $this->ServerType = $param["ServerType"];
        }

        if (array_key_exists("MatchDesc",$param) and $param["MatchDesc"] !== null) {
            $this->MatchDesc = $param["MatchDesc"];
        }

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }

        if (array_key_exists("ServerRegion",$param) and $param["ServerRegion"] !== null) {
            $this->ServerRegion = $param["ServerRegion"];
        }

        if (array_key_exists("ServerQueue",$param) and $param["ServerQueue"] !== null) {
            $this->ServerQueue = $param["ServerQueue"];
        }

        if (array_key_exists("CustomPushData",$param) and $param["CustomPushData"] !== null) {
            $this->CustomPushData = $param["CustomPushData"];
        }

        if (array_key_exists("ServerSessionData",$param) and $param["ServerSessionData"] !== null) {
            $this->ServerSessionData = $param["ServerSessionData"];
        }

        if (array_key_exists("GameProperties",$param) and $param["GameProperties"] !== null) {
            $this->GameProperties = [];
            foreach ($param["GameProperties"] as $key => $value){
                $obj = new StringKV();
                $obj->deserialize($value);
                array_push($this->GameProperties, $obj);
            }
        }

        if (array_key_exists("LogSwitch",$param) and $param["LogSwitch"] !== null) {
            $this->LogSwitch = $param["LogSwitch"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new StringKV();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
