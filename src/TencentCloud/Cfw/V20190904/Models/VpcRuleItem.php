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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPC Private Network Rules
 *
 * @method string getSourceContent() Obtain Access source example:

net: IP/CIDR (192.168.0.2)
 * @method void setSourceContent(string $SourceContent) Set Access source example:

net: IP/CIDR (192.168.0.2)
 * @method string getSourceType() Obtain Access source type, which can be: net
 * @method void setSourceType(string $SourceType) Set Access source type, which can be: net
 * @method string getDestContent() Obtain Access destination example:

net: IP/CIDR (192.168.0.2)

domain: domain name rules, for example *.qq.com
 * @method void setDestContent(string $DestContent) Set Access destination example:

net: IP/CIDR (192.168.0.2)

domain: domain name rules, for example *.qq.com
 * @method string getDestType() Obtain Access destination type, which can be: net, domain, dnsparse
 * @method void setDestType(string $DestType) Set Access destination type, which can be: net, domain, dnsparse
 * @method string getProtocol() Obtain Protocol, optional values:

TCP

UDP

ICMP

ANY

HTTP

HTTPS

HTTP/HTTPS

SMTP

SMTPS

SMTP/SMTPS

FTP

DNS

TLS/SSL
 * @method void setProtocol(string $Protocol) Set Protocol, optional values:

TCP

UDP

ICMP

ANY

HTTP

HTTPS

HTTP/HTTPS

SMTP

SMTPS

SMTP/SMTPS

FTP

DNS

TLS/SSL
 * @method string getRuleAction() Obtain How traffic set in the access control policy passes through CFW. Values:

accept: allow

drop: deny

log: observe
 * @method void setRuleAction(string $RuleAction) Set How traffic set in the access control policy passes through CFW. Values:

accept: allow

drop: deny

log: observe
 * @method string getPort() Obtain Access control policy ports. Values:

-1/-1: all ports

80: port 80
 * @method void setPort(string $Port) Set Access control policy ports. Values:

-1/-1: all ports

80: port 80
 * @method string getDescription() Obtain Description
 * @method void setDescription(string $Description) Set Description
 * @method integer getOrderIndex() Obtain Rule order, where -1 indicates the lowest and 1 indicates the highest.
 * @method void setOrderIndex(integer $OrderIndex) Set Rule order, where -1 indicates the lowest and 1 indicates the highest.
 * @method string getEnable() Obtain Rule status, where true indicates enabled and false indicates disabled.
 * @method void setEnable(string $Enable) Set Rule status, where true indicates enabled and false indicates disabled.
 * @method string getEdgeId() Obtain The scope of effect for the rule, specifying whether it applies between a specific pair of VPCs or across all VPCs.
 * @method void setEdgeId(string $EdgeId) Set The scope of effect for the rule, specifying whether it applies between a specific pair of VPCs or across all VPCs.
 * @method integer getUuid() Obtain The unique id corresponding to the rule. This field is ignored when adding a rule; when modifying the rule, the Uuid needs to be filled in. This parameter will be returned in query results.
 * @method void setUuid(integer $Uuid) Set The unique id corresponding to the rule. This field is ignored when adding a rule; when modifying the rule, the Uuid needs to be filled in. This parameter will be returned in query results.
 * @method integer getDetectedTimes() Obtain The hit count of the rule. This parameter does not need to be passed during CRUD operations and is mainly used for returning query result data.
 * @method void setDetectedTimes(integer $DetectedTimes) Set The hit count of the rule. This parameter does not need to be passed during CRUD operations and is mainly used for returning query result data.
 * @method string getEdgeName() Obtain Description of the firewall between the pair of VPCs corresponding to EdgeId
 * @method void setEdgeName(string $EdgeName) Set Description of the firewall between the pair of VPCs corresponding to EdgeId
 * @method integer getInternalUuid() Obtain Internal-use uuid, generally not used
 * @method void setInternalUuid(integer $InternalUuid) Set Internal-use uuid, generally not used
 * @method integer getDeleted() Obtain Rule deletion status: 1 indicates deleted; 0 indicates not deleted
 * @method void setDeleted(integer $Deleted) Set Rule deletion status: 1 indicates deleted; 0 indicates not deleted
 * @method string getFwGroupId() Obtain The firewall instance ID where the rule takes effect
 * @method void setFwGroupId(string $FwGroupId) Set The firewall instance ID where the rule takes effect
 * @method string getFwGroupName() Obtain Firewall name
 * @method void setFwGroupName(string $FwGroupName) Set Firewall name
 * @method array getBetaList() Obtain beta task details
 * @method void setBetaList(array $BetaList) Set beta task details
 * @method string getParamTemplateId() Obtain Port Protocol Group ID
 * @method void setParamTemplateId(string $ParamTemplateId) Set Port Protocol Group ID
 * @method string getParamTemplateName() Obtain Port Protocol Group Name
 * @method void setParamTemplateName(string $ParamTemplateName) Set Port Protocol Group Name
 * @method string getTargetName() Obtain Access destination name
 * @method void setTargetName(string $TargetName) Set Access destination name
 * @method string getSourceName() Obtain Access source name
 * @method void setSourceName(string $SourceName) Set Access source name
 * @method integer getIpVersion() Obtain Ip version, 0: IPv4, 1: IPv6, default is IPv4
 * @method void setIpVersion(integer $IpVersion) Set Ip version, 0: IPv4, 1: IPv6, default is IPv4
 * @method integer getInvalid() Obtain Whether the rule is invalid, where 0 indicates a valid rule and 1 indicates an invalid rule, used in output parameters.
 * @method void setInvalid(integer $Invalid) Set Whether the rule is invalid, where 0 indicates a valid rule and 1 indicates an invalid rule, used in output parameters.
 */
class VpcRuleItem extends AbstractModel
{
    /**
     * @var string Access source example:

net: IP/CIDR (192.168.0.2)
     */
    public $SourceContent;

    /**
     * @var string Access source type, which can be: net
     */
    public $SourceType;

    /**
     * @var string Access destination example:

net: IP/CIDR (192.168.0.2)

domain: domain name rules, for example *.qq.com
     */
    public $DestContent;

    /**
     * @var string Access destination type, which can be: net, domain, dnsparse
     */
    public $DestType;

    /**
     * @var string Protocol, optional values:

TCP

UDP

ICMP

ANY

HTTP

HTTPS

HTTP/HTTPS

SMTP

SMTPS

SMTP/SMTPS

FTP

DNS

TLS/SSL
     */
    public $Protocol;

    /**
     * @var string How traffic set in the access control policy passes through CFW. Values:

accept: allow

drop: deny

log: observe
     */
    public $RuleAction;

    /**
     * @var string Access control policy ports. Values:

-1/-1: all ports

80: port 80
     */
    public $Port;

    /**
     * @var string Description
     */
    public $Description;

    /**
     * @var integer Rule order, where -1 indicates the lowest and 1 indicates the highest.
     */
    public $OrderIndex;

    /**
     * @var string Rule status, where true indicates enabled and false indicates disabled.
     */
    public $Enable;

    /**
     * @var string The scope of effect for the rule, specifying whether it applies between a specific pair of VPCs or across all VPCs.
     */
    public $EdgeId;

    /**
     * @var integer The unique id corresponding to the rule. This field is ignored when adding a rule; when modifying the rule, the Uuid needs to be filled in. This parameter will be returned in query results.
     */
    public $Uuid;

    /**
     * @var integer The hit count of the rule. This parameter does not need to be passed during CRUD operations and is mainly used for returning query result data.
     */
    public $DetectedTimes;

    /**
     * @var string Description of the firewall between the pair of VPCs corresponding to EdgeId
     */
    public $EdgeName;

    /**
     * @var integer Internal-use uuid, generally not used
     */
    public $InternalUuid;

    /**
     * @var integer Rule deletion status: 1 indicates deleted; 0 indicates not deleted
     */
    public $Deleted;

    /**
     * @var string The firewall instance ID where the rule takes effect
     */
    public $FwGroupId;

    /**
     * @var string Firewall name
     */
    public $FwGroupName;

    /**
     * @var array beta task details
     */
    public $BetaList;

    /**
     * @var string Port Protocol Group ID
     */
    public $ParamTemplateId;

    /**
     * @var string Port Protocol Group Name
     */
    public $ParamTemplateName;

    /**
     * @var string Access destination name
     */
    public $TargetName;

    /**
     * @var string Access source name
     */
    public $SourceName;

    /**
     * @var integer Ip version, 0: IPv4, 1: IPv6, default is IPv4
     */
    public $IpVersion;

    /**
     * @var integer Whether the rule is invalid, where 0 indicates a valid rule and 1 indicates an invalid rule, used in output parameters.
     */
    public $Invalid;

    /**
     * @param string $SourceContent Access source example:

net: IP/CIDR (192.168.0.2)
     * @param string $SourceType Access source type, which can be: net
     * @param string $DestContent Access destination example:

net: IP/CIDR (192.168.0.2)

domain: domain name rules, for example *.qq.com
     * @param string $DestType Access destination type, which can be: net, domain, dnsparse
     * @param string $Protocol Protocol, optional values:

TCP

UDP

ICMP

ANY

HTTP

HTTPS

HTTP/HTTPS

SMTP

SMTPS

SMTP/SMTPS

FTP

DNS

TLS/SSL
     * @param string $RuleAction How traffic set in the access control policy passes through CFW. Values:

accept: allow

drop: deny

log: observe
     * @param string $Port Access control policy ports. Values:

-1/-1: all ports

80: port 80
     * @param string $Description Description
     * @param integer $OrderIndex Rule order, where -1 indicates the lowest and 1 indicates the highest.
     * @param string $Enable Rule status, where true indicates enabled and false indicates disabled.
     * @param string $EdgeId The scope of effect for the rule, specifying whether it applies between a specific pair of VPCs or across all VPCs.
     * @param integer $Uuid The unique id corresponding to the rule. This field is ignored when adding a rule; when modifying the rule, the Uuid needs to be filled in. This parameter will be returned in query results.
     * @param integer $DetectedTimes The hit count of the rule. This parameter does not need to be passed during CRUD operations and is mainly used for returning query result data.
     * @param string $EdgeName Description of the firewall between the pair of VPCs corresponding to EdgeId
     * @param integer $InternalUuid Internal-use uuid, generally not used
     * @param integer $Deleted Rule deletion status: 1 indicates deleted; 0 indicates not deleted
     * @param string $FwGroupId The firewall instance ID where the rule takes effect
     * @param string $FwGroupName Firewall name
     * @param array $BetaList beta task details
     * @param string $ParamTemplateId Port Protocol Group ID
     * @param string $ParamTemplateName Port Protocol Group Name
     * @param string $TargetName Access destination name
     * @param string $SourceName Access source name
     * @param integer $IpVersion Ip version, 0: IPv4, 1: IPv6, default is IPv4
     * @param integer $Invalid Whether the rule is invalid, where 0 indicates a valid rule and 1 indicates an invalid rule, used in output parameters.
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
        if (array_key_exists("SourceContent",$param) and $param["SourceContent"] !== null) {
            $this->SourceContent = $param["SourceContent"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("DestContent",$param) and $param["DestContent"] !== null) {
            $this->DestContent = $param["DestContent"];
        }

        if (array_key_exists("DestType",$param) and $param["DestType"] !== null) {
            $this->DestType = $param["DestType"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OrderIndex",$param) and $param["OrderIndex"] !== null) {
            $this->OrderIndex = $param["OrderIndex"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("EdgeId",$param) and $param["EdgeId"] !== null) {
            $this->EdgeId = $param["EdgeId"];
        }

        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("DetectedTimes",$param) and $param["DetectedTimes"] !== null) {
            $this->DetectedTimes = $param["DetectedTimes"];
        }

        if (array_key_exists("EdgeName",$param) and $param["EdgeName"] !== null) {
            $this->EdgeName = $param["EdgeName"];
        }

        if (array_key_exists("InternalUuid",$param) and $param["InternalUuid"] !== null) {
            $this->InternalUuid = $param["InternalUuid"];
        }

        if (array_key_exists("Deleted",$param) and $param["Deleted"] !== null) {
            $this->Deleted = $param["Deleted"];
        }

        if (array_key_exists("FwGroupId",$param) and $param["FwGroupId"] !== null) {
            $this->FwGroupId = $param["FwGroupId"];
        }

        if (array_key_exists("FwGroupName",$param) and $param["FwGroupName"] !== null) {
            $this->FwGroupName = $param["FwGroupName"];
        }

        if (array_key_exists("BetaList",$param) and $param["BetaList"] !== null) {
            $this->BetaList = [];
            foreach ($param["BetaList"] as $key => $value){
                $obj = new BetaInfoByACL();
                $obj->deserialize($value);
                array_push($this->BetaList, $obj);
            }
        }

        if (array_key_exists("ParamTemplateId",$param) and $param["ParamTemplateId"] !== null) {
            $this->ParamTemplateId = $param["ParamTemplateId"];
        }

        if (array_key_exists("ParamTemplateName",$param) and $param["ParamTemplateName"] !== null) {
            $this->ParamTemplateName = $param["ParamTemplateName"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("IpVersion",$param) and $param["IpVersion"] !== null) {
            $this->IpVersion = $param["IpVersion"];
        }

        if (array_key_exists("Invalid",$param) and $param["Invalid"] !== null) {
            $this->Invalid = $param["Invalid"];
        }
    }
}
