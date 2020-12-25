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
namespace TencentCloud\Gse\V20191112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Game session details
 *
 * @method string getCreationTime() Obtain Game server session creation time
 * @method void setCreationTime(string $CreationTime) Set Game server session creation time
 * @method string getCreatorId() Obtain Creator ID. Up to 1024 ASCII characters are allowed.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setCreatorId(string $CreatorId) Set Creator ID. Up to 1024 ASCII characters are allowed.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getCurrentPlayerSessionCount() Obtain The current number of players, which cannot be less than 0.
 * @method void setCurrentPlayerSessionCount(integer $CurrentPlayerSessionCount) Set The current number of players, which cannot be less than 0.
 * @method string getDnsName() Obtain CVM DNS ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setDnsName(string $DnsName) Set CVM DNS ID
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getFleetId() Obtain Fleet ID
 * @method void setFleetId(string $FleetId) Set Fleet ID
 * @method array getGameProperties() Obtain Game attributes. Up to 16 groups of attributes are allowed.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setGameProperties(array $GameProperties) Set Game attributes. Up to 16 groups of attributes are allowed.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getGameServerSessionData() Obtain The attribute details of game server session. Up to 4096 ASCII characters are allowed.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setGameServerSessionData(string $GameServerSessionData) Set The attribute details of game server session. Up to 4096 ASCII characters are allowed.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getGameServerSessionId() Obtain Game server session ID. It should contain 1 to 48 ASCII characters.
 * @method void setGameServerSessionId(string $GameServerSessionId) Set Game server session ID. It should contain 1 to 48 ASCII characters.
 * @method string getIpAddress() Obtain CVM IP address
 * @method void setIpAddress(string $IpAddress) Set CVM IP address
 * @method string getMatchmakerData() Obtain Battle progress details. Up to 400,000 ASCII characters are allowed.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setMatchmakerData(string $MatchmakerData) Set Battle progress details. Up to 400,000 ASCII characters are allowed.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getMaximumPlayerSessionCount() Obtain The maximum number of players, which cannot be less than 0.
 * @method void setMaximumPlayerSessionCount(integer $MaximumPlayerSessionCount) Set The maximum number of players, which cannot be less than 0.
 * @method string getName() Obtain The name of game server session. Up to 1024 ASCII characters are allowed.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setName(string $Name) Set The name of game server session. Up to 1024 ASCII characters are allowed.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method string getPlayerSessionCreationPolicy() Obtain Player session creation policy. Valid values: ACCEPT_ALL, DENY_ALL
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setPlayerSessionCreationPolicy(string $PlayerSessionCreationPolicy) Set Player session creation policy. Valid values: ACCEPT_ALL, DENY_ALL
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getPort() Obtain Port number. It should be a value between 1 to 60000.
 * @method void setPort(integer $Port) Set Port number. It should be a value between 1 to 60000.
 * @method string getStatus() Obtain Game server session status. Valid values: ACTIVE, ACTIVATING, TERMINATED, TERMINATING, ERROR
 * @method void setStatus(string $Status) Set Game server session status. Valid values: ACTIVE, ACTIVATING, TERMINATED, TERMINATING, ERROR
 * @method string getStatusReason() Obtain Additional information of game server session status
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setStatusReason(string $StatusReason) Set Additional information of game server session status
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getTerminationTime() Obtain Termination time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setTerminationTime(string $TerminationTime) Set Termination time
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getInstanceType() Obtain Instance type. Up to 128 ASCII characters are allowed.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setInstanceType(string $InstanceType) Set Instance type. Up to 128 ASCII characters are allowed.
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method integer getCurrentCustomCount() Obtain Current custom count
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setCurrentCustomCount(integer $CurrentCustomCount) Set Current custom count
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getMaxCustomCount() Obtain Maximum custom count
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setMaxCustomCount(integer $MaxCustomCount) Set Maximum custom count
Note: this field may return null, indicating that no valid values can be obtained.
 * @method integer getWeight() Obtain Weight
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setWeight(integer $Weight) Set Weight
Note: this field may return null, indicating that no valid values can be obtained.
 * @method string getAvailabilityStatus() Obtain Session availability status, i.e., whether it is blocked. Valid value: Enable, Disable
Note: this field may return `null`, indicating that no valid value is obtained.
 * @method void setAvailabilityStatus(string $AvailabilityStatus) Set Session availability status, i.e., whether it is blocked. Valid value: Enable, Disable
Note: this field may return `null`, indicating that no valid value is obtained.
 */
class GameServerSession extends AbstractModel
{
    /**
     * @var string Game server session creation time
     */
    public $CreationTime;

    /**
     * @var string Creator ID. Up to 1024 ASCII characters are allowed.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $CreatorId;

    /**
     * @var integer The current number of players, which cannot be less than 0.
     */
    public $CurrentPlayerSessionCount;

    /**
     * @var string CVM DNS ID
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $DnsName;

    /**
     * @var string Fleet ID
     */
    public $FleetId;

    /**
     * @var array Game attributes. Up to 16 groups of attributes are allowed.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $GameProperties;

    /**
     * @var string The attribute details of game server session. Up to 4096 ASCII characters are allowed.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $GameServerSessionData;

    /**
     * @var string Game server session ID. It should contain 1 to 48 ASCII characters.
     */
    public $GameServerSessionId;

    /**
     * @var string CVM IP address
     */
    public $IpAddress;

    /**
     * @var string Battle progress details. Up to 400,000 ASCII characters are allowed.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $MatchmakerData;

    /**
     * @var integer The maximum number of players, which cannot be less than 0.
     */
    public $MaximumPlayerSessionCount;

    /**
     * @var string The name of game server session. Up to 1024 ASCII characters are allowed.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $Name;

    /**
     * @var string Player session creation policy. Valid values: ACCEPT_ALL, DENY_ALL
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $PlayerSessionCreationPolicy;

    /**
     * @var integer Port number. It should be a value between 1 to 60000.
     */
    public $Port;

    /**
     * @var string Game server session status. Valid values: ACTIVE, ACTIVATING, TERMINATED, TERMINATING, ERROR
     */
    public $Status;

    /**
     * @var string Additional information of game server session status
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $StatusReason;

    /**
     * @var string Termination time
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $TerminationTime;

    /**
     * @var string Instance type. Up to 128 ASCII characters are allowed.
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $InstanceType;

    /**
     * @var integer Current custom count
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $CurrentCustomCount;

    /**
     * @var integer Maximum custom count
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $MaxCustomCount;

    /**
     * @var integer Weight
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Weight;

    /**
     * @var string Session availability status, i.e., whether it is blocked. Valid value: Enable, Disable
Note: this field may return `null`, indicating that no valid value is obtained.
     */
    public $AvailabilityStatus;

    /**
     * @param string $CreationTime Game server session creation time
     * @param string $CreatorId Creator ID. Up to 1024 ASCII characters are allowed.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $CurrentPlayerSessionCount The current number of players, which cannot be less than 0.
     * @param string $DnsName CVM DNS ID
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $FleetId Fleet ID
     * @param array $GameProperties Game attributes. Up to 16 groups of attributes are allowed.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $GameServerSessionData The attribute details of game server session. Up to 4096 ASCII characters are allowed.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $GameServerSessionId Game server session ID. It should contain 1 to 48 ASCII characters.
     * @param string $IpAddress CVM IP address
     * @param string $MatchmakerData Battle progress details. Up to 400,000 ASCII characters are allowed.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $MaximumPlayerSessionCount The maximum number of players, which cannot be less than 0.
     * @param string $Name The name of game server session. Up to 1024 ASCII characters are allowed.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param string $PlayerSessionCreationPolicy Player session creation policy. Valid values: ACCEPT_ALL, DENY_ALL
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $Port Port number. It should be a value between 1 to 60000.
     * @param string $Status Game server session status. Valid values: ACTIVE, ACTIVATING, TERMINATED, TERMINATING, ERROR
     * @param string $StatusReason Additional information of game server session status
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $TerminationTime Termination time
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $InstanceType Instance type. Up to 128 ASCII characters are allowed.
Note: this field may return `null`, indicating that no valid value is obtained.
     * @param integer $CurrentCustomCount Current custom count
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $MaxCustomCount Maximum custom count
Note: this field may return null, indicating that no valid values can be obtained.
     * @param integer $Weight Weight
Note: this field may return null, indicating that no valid values can be obtained.
     * @param string $AvailabilityStatus Session availability status, i.e., whether it is blocked. Valid value: Enable, Disable
Note: this field may return `null`, indicating that no valid value is obtained.
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
        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("CreatorId",$param) and $param["CreatorId"] !== null) {
            $this->CreatorId = $param["CreatorId"];
        }

        if (array_key_exists("CurrentPlayerSessionCount",$param) and $param["CurrentPlayerSessionCount"] !== null) {
            $this->CurrentPlayerSessionCount = $param["CurrentPlayerSessionCount"];
        }

        if (array_key_exists("DnsName",$param) and $param["DnsName"] !== null) {
            $this->DnsName = $param["DnsName"];
        }

        if (array_key_exists("FleetId",$param) and $param["FleetId"] !== null) {
            $this->FleetId = $param["FleetId"];
        }

        if (array_key_exists("GameProperties",$param) and $param["GameProperties"] !== null) {
            $this->GameProperties = [];
            foreach ($param["GameProperties"] as $key => $value){
                $obj = new GameProperty();
                $obj->deserialize($value);
                array_push($this->GameProperties, $obj);
            }
        }

        if (array_key_exists("GameServerSessionData",$param) and $param["GameServerSessionData"] !== null) {
            $this->GameServerSessionData = $param["GameServerSessionData"];
        }

        if (array_key_exists("GameServerSessionId",$param) and $param["GameServerSessionId"] !== null) {
            $this->GameServerSessionId = $param["GameServerSessionId"];
        }

        if (array_key_exists("IpAddress",$param) and $param["IpAddress"] !== null) {
            $this->IpAddress = $param["IpAddress"];
        }

        if (array_key_exists("MatchmakerData",$param) and $param["MatchmakerData"] !== null) {
            $this->MatchmakerData = $param["MatchmakerData"];
        }

        if (array_key_exists("MaximumPlayerSessionCount",$param) and $param["MaximumPlayerSessionCount"] !== null) {
            $this->MaximumPlayerSessionCount = $param["MaximumPlayerSessionCount"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PlayerSessionCreationPolicy",$param) and $param["PlayerSessionCreationPolicy"] !== null) {
            $this->PlayerSessionCreationPolicy = $param["PlayerSessionCreationPolicy"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusReason",$param) and $param["StatusReason"] !== null) {
            $this->StatusReason = $param["StatusReason"];
        }

        if (array_key_exists("TerminationTime",$param) and $param["TerminationTime"] !== null) {
            $this->TerminationTime = $param["TerminationTime"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("CurrentCustomCount",$param) and $param["CurrentCustomCount"] !== null) {
            $this->CurrentCustomCount = $param["CurrentCustomCount"];
        }

        if (array_key_exists("MaxCustomCount",$param) and $param["MaxCustomCount"] !== null) {
            $this->MaxCustomCount = $param["MaxCustomCount"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("AvailabilityStatus",$param) and $param["AvailabilityStatus"] !== null) {
            $this->AvailabilityStatus = $param["AvailabilityStatus"];
        }
    }
}
