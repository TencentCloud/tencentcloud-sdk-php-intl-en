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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Network ACL quintuple entry
 *
 * @method string getProtocol() Obtain Protocol. Valid values: `TCP`, `UDP`, `ICMP`, `ALL`.
 * @method void setProtocol(string $Protocol) Set Protocol. Valid values: `TCP`, `UDP`, `ICMP`, `ALL`.
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method string getSourcePort() Obtain Source port. Valid values: all, single port, range. When `Protocol` is `ALL` or `ICMP`, `Port` cannot be specified.
 * @method void setSourcePort(string $SourcePort) Set Source port. Valid values: all, single port, range. When `Protocol` is `ALL` or `ICMP`, `Port` cannot be specified.
 * @method string getSourceCidr() Obtain Source CIDR block.
 * @method void setSourceCidr(string $SourceCidr) Set Source CIDR block.
 * @method string getDestinationPort() Obtain Destination port. Valid values: all, single port, range. When `Protocol` is `ALL` or `ICMP`, `Port` cannot be specified.
 * @method void setDestinationPort(string $DestinationPort) Set Destination port. Valid values: all, single port, range. When `Protocol` is `ALL` or `ICMP`, `Port` cannot be specified.
 * @method string getDestinationCidr() Obtain Destination CIDR block.
 * @method void setDestinationCidr(string $DestinationCidr) Set Destination CIDR block.
 * @method string getAction() Obtain Action. Valid values: `ACCEPT` and `DROP`.
 * @method void setAction(string $Action) Set Action. Valid values: `ACCEPT` and `DROP`.
 * @method string getNetworkAclQuintupleEntryId() Obtain Unique ID of a network ACL entry.
 * @method void setNetworkAclQuintupleEntryId(string $NetworkAclQuintupleEntryId) Set Unique ID of a network ACL entry.
 * @method integer getPriority() Obtain Priority. `1` refers to the highest priority.
 * @method void setPriority(integer $Priority) Set Priority. `1` refers to the highest priority.
 * @method string getCreateTime() Obtain Creation time. It’s returned by `DescribeNetworkAclQuintupleEntries`.
 * @method void setCreateTime(string $CreateTime) Set Creation time. It’s returned by `DescribeNetworkAclQuintupleEntries`.
 * @method string getNetworkAclDirection() Obtain Direction of the rule. It’s returned by `DescribeNetworkAclQuintupleEntries`. Valid values: `INGRESS` and `EGRESS`.
 * @method void setNetworkAclDirection(string $NetworkAclDirection) Set Direction of the rule. It’s returned by `DescribeNetworkAclQuintupleEntries`. Valid values: `INGRESS` and `EGRESS`.
 */
class NetworkAclQuintupleEntry extends AbstractModel
{
    /**
     * @var string Protocol. Valid values: `TCP`, `UDP`, `ICMP`, `ALL`.
     */
    public $Protocol;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var string Source port. Valid values: all, single port, range. When `Protocol` is `ALL` or `ICMP`, `Port` cannot be specified.
     */
    public $SourcePort;

    /**
     * @var string Source CIDR block.
     */
    public $SourceCidr;

    /**
     * @var string Destination port. Valid values: all, single port, range. When `Protocol` is `ALL` or `ICMP`, `Port` cannot be specified.
     */
    public $DestinationPort;

    /**
     * @var string Destination CIDR block.
     */
    public $DestinationCidr;

    /**
     * @var string Action. Valid values: `ACCEPT` and `DROP`.
     */
    public $Action;

    /**
     * @var string Unique ID of a network ACL entry.
     */
    public $NetworkAclQuintupleEntryId;

    /**
     * @var integer Priority. `1` refers to the highest priority.
     */
    public $Priority;

    /**
     * @var string Creation time. It’s returned by `DescribeNetworkAclQuintupleEntries`.
     */
    public $CreateTime;

    /**
     * @var string Direction of the rule. It’s returned by `DescribeNetworkAclQuintupleEntries`. Valid values: `INGRESS` and `EGRESS`.
     */
    public $NetworkAclDirection;

    /**
     * @param string $Protocol Protocol. Valid values: `TCP`, `UDP`, `ICMP`, `ALL`.
     * @param string $Description Description
     * @param string $SourcePort Source port. Valid values: all, single port, range. When `Protocol` is `ALL` or `ICMP`, `Port` cannot be specified.
     * @param string $SourceCidr Source CIDR block.
     * @param string $DestinationPort Destination port. Valid values: all, single port, range. When `Protocol` is `ALL` or `ICMP`, `Port` cannot be specified.
     * @param string $DestinationCidr Destination CIDR block.
     * @param string $Action Action. Valid values: `ACCEPT` and `DROP`.
     * @param string $NetworkAclQuintupleEntryId Unique ID of a network ACL entry.
     * @param integer $Priority Priority. `1` refers to the highest priority.
     * @param string $CreateTime Creation time. It’s returned by `DescribeNetworkAclQuintupleEntries`.
     * @param string $NetworkAclDirection Direction of the rule. It’s returned by `DescribeNetworkAclQuintupleEntries`. Valid values: `INGRESS` and `EGRESS`.
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
        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SourcePort",$param) and $param["SourcePort"] !== null) {
            $this->SourcePort = $param["SourcePort"];
        }

        if (array_key_exists("SourceCidr",$param) and $param["SourceCidr"] !== null) {
            $this->SourceCidr = $param["SourceCidr"];
        }

        if (array_key_exists("DestinationPort",$param) and $param["DestinationPort"] !== null) {
            $this->DestinationPort = $param["DestinationPort"];
        }

        if (array_key_exists("DestinationCidr",$param) and $param["DestinationCidr"] !== null) {
            $this->DestinationCidr = $param["DestinationCidr"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("NetworkAclQuintupleEntryId",$param) and $param["NetworkAclQuintupleEntryId"] !== null) {
            $this->NetworkAclQuintupleEntryId = $param["NetworkAclQuintupleEntryId"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("NetworkAclDirection",$param) and $param["NetworkAclDirection"] !== null) {
            $this->NetworkAclDirection = $param["NetworkAclDirection"];
        }
    }
}
