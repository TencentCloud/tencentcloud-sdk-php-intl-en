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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Private domain information.
 *
 * @method string getZoneId() Obtain Private domain ID, which is in zone-xxxxxxxx format.
 * @method void setZoneId(string $ZoneId) Set Private domain ID, which is in zone-xxxxxxxx format.
 * @method integer getOwnerUin() Obtain UIN of the domain name owner.
 * @method void setOwnerUin(integer $OwnerUin) Set UIN of the domain name owner.
 * @method string getDomain() Obtain Private domain name.
 * @method void setDomain(string $Domain) Set Private domain name.
 * @method string getCreatedOn() Obtain Creation time
 * @method void setCreatedOn(string $CreatedOn) Set Creation time
 * @method string getUpdatedOn() Obtain Modification time
 * @method void setUpdatedOn(string $UpdatedOn) Set Modification time
 * @method integer getRecordCount() Obtain Number of records.
 * @method void setRecordCount(integer $RecordCount) Set Number of records.
 * @method string getRemark() Obtain Remarks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remarks.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getVpcSet() Obtain List of bound VPCs.
 * @method void setVpcSet(array $VpcSet) Set List of bound VPCs.
 * @method string getStatus() Obtain Status of the VPC bound with the private domain. SUSPEND: The VPC is not associated; ENABLED: the VPC has been associated.
, FAILED: the VPC fails to be associated.
 * @method void setStatus(string $Status) Set Status of the VPC bound with the private domain. SUSPEND: The VPC is not associated; ENABLED: the VPC has been associated.
, FAILED: the VPC fails to be associated.
 * @method string getDnsForwardStatus() Obtain Recursive resolution status of the domain name. ENABLED: enabled; DISABLED: disabled.
 * @method void setDnsForwardStatus(string $DnsForwardStatus) Set Recursive resolution status of the domain name. ENABLED: enabled; DISABLED: disabled.
 * @method array getTags() Obtain Tag key-value pair collection.
 * @method void setTags(array $Tags) Set Tag key-value pair collection.
 * @method array getAccountVpcSet() Obtain List of bound VPCs of the associated account.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setAccountVpcSet(array $AccountVpcSet) Set List of bound VPCs of the associated account.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method boolean getIsCustomTld() Obtain Whether the TLD is a custom one.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setIsCustomTld(boolean $IsCustomTld) Set Whether the TLD is a custom one.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getCnameSpeedupStatus() Obtain CNAME acceleration status. ENABLED: enabled; DISABLED: disabled.
 * @method void setCnameSpeedupStatus(string $CnameSpeedupStatus) Set CNAME acceleration status. ENABLED: enabled; DISABLED: disabled.
 * @method string getForwardRuleName() Obtain Forwarding rule name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setForwardRuleName(string $ForwardRuleName) Set Forwarding rule name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getForwardRuleType() Obtain Forwarding rule type. DOWN: from cloud to off-cloud; UP: from off-cloud to cloud. Currently, only DOWN is supported.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setForwardRuleType(string $ForwardRuleType) Set Forwarding rule type. DOWN: from cloud to off-cloud; UP: from off-cloud to cloud. Currently, only DOWN is supported.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getForwardAddress() Obtain Forwarding address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setForwardAddress(string $ForwardAddress) Set Forwarding address.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method string getEndPointName() Obtain Endpoint name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setEndPointName(string $EndPointName) Set Endpoint name.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getDeletedVpcSet() Obtain Deleted VPC.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setDeletedVpcSet(array $DeletedVpcSet) Set Deleted VPC.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PrivateZone extends AbstractModel
{
    /**
     * @var string Private domain ID, which is in zone-xxxxxxxx format.
     */
    public $ZoneId;

    /**
     * @var integer UIN of the domain name owner.
     */
    public $OwnerUin;

    /**
     * @var string Private domain name.
     */
    public $Domain;

    /**
     * @var string Creation time
     */
    public $CreatedOn;

    /**
     * @var string Modification time
     */
    public $UpdatedOn;

    /**
     * @var integer Number of records.
     */
    public $RecordCount;

    /**
     * @var string Remarks.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var array List of bound VPCs.
     */
    public $VpcSet;

    /**
     * @var string Status of the VPC bound with the private domain. SUSPEND: The VPC is not associated; ENABLED: the VPC has been associated.
, FAILED: the VPC fails to be associated.
     */
    public $Status;

    /**
     * @var string Recursive resolution status of the domain name. ENABLED: enabled; DISABLED: disabled.
     */
    public $DnsForwardStatus;

    /**
     * @var array Tag key-value pair collection.
     */
    public $Tags;

    /**
     * @var array List of bound VPCs of the associated account.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $AccountVpcSet;

    /**
     * @var boolean Whether the TLD is a custom one.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $IsCustomTld;

    /**
     * @var string CNAME acceleration status. ENABLED: enabled; DISABLED: disabled.
     */
    public $CnameSpeedupStatus;

    /**
     * @var string Forwarding rule name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ForwardRuleName;

    /**
     * @var string Forwarding rule type. DOWN: from cloud to off-cloud; UP: from off-cloud to cloud. Currently, only DOWN is supported.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ForwardRuleType;

    /**
     * @var string Forwarding address.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $ForwardAddress;

    /**
     * @var string Endpoint name.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $EndPointName;

    /**
     * @var array Deleted VPC.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $DeletedVpcSet;

    /**
     * @param string $ZoneId Private domain ID, which is in zone-xxxxxxxx format.
     * @param integer $OwnerUin UIN of the domain name owner.
     * @param string $Domain Private domain name.
     * @param string $CreatedOn Creation time
     * @param string $UpdatedOn Modification time
     * @param integer $RecordCount Number of records.
     * @param string $Remark Remarks.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $VpcSet List of bound VPCs.
     * @param string $Status Status of the VPC bound with the private domain. SUSPEND: The VPC is not associated; ENABLED: the VPC has been associated.
, FAILED: the VPC fails to be associated.
     * @param string $DnsForwardStatus Recursive resolution status of the domain name. ENABLED: enabled; DISABLED: disabled.
     * @param array $Tags Tag key-value pair collection.
     * @param array $AccountVpcSet List of bound VPCs of the associated account.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param boolean $IsCustomTld Whether the TLD is a custom one.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $CnameSpeedupStatus CNAME acceleration status. ENABLED: enabled; DISABLED: disabled.
     * @param string $ForwardRuleName Forwarding rule name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ForwardRuleType Forwarding rule type. DOWN: from cloud to off-cloud; UP: from off-cloud to cloud. Currently, only DOWN is supported.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $ForwardAddress Forwarding address.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param string $EndPointName Endpoint name.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $DeletedVpcSet Deleted VPC.
Note: This field may return null, indicating that no valid values can be obtained.
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

        if (array_key_exists("OwnerUin",$param) and $param["OwnerUin"] !== null) {
            $this->OwnerUin = $param["OwnerUin"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("CreatedOn",$param) and $param["CreatedOn"] !== null) {
            $this->CreatedOn = $param["CreatedOn"];
        }

        if (array_key_exists("UpdatedOn",$param) and $param["UpdatedOn"] !== null) {
            $this->UpdatedOn = $param["UpdatedOn"];
        }

        if (array_key_exists("RecordCount",$param) and $param["RecordCount"] !== null) {
            $this->RecordCount = $param["RecordCount"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("VpcSet",$param) and $param["VpcSet"] !== null) {
            $this->VpcSet = [];
            foreach ($param["VpcSet"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcSet, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DnsForwardStatus",$param) and $param["DnsForwardStatus"] !== null) {
            $this->DnsForwardStatus = $param["DnsForwardStatus"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AccountVpcSet",$param) and $param["AccountVpcSet"] !== null) {
            $this->AccountVpcSet = [];
            foreach ($param["AccountVpcSet"] as $key => $value){
                $obj = new AccountVpcInfoOutput();
                $obj->deserialize($value);
                array_push($this->AccountVpcSet, $obj);
            }
        }

        if (array_key_exists("IsCustomTld",$param) and $param["IsCustomTld"] !== null) {
            $this->IsCustomTld = $param["IsCustomTld"];
        }

        if (array_key_exists("CnameSpeedupStatus",$param) and $param["CnameSpeedupStatus"] !== null) {
            $this->CnameSpeedupStatus = $param["CnameSpeedupStatus"];
        }

        if (array_key_exists("ForwardRuleName",$param) and $param["ForwardRuleName"] !== null) {
            $this->ForwardRuleName = $param["ForwardRuleName"];
        }

        if (array_key_exists("ForwardRuleType",$param) and $param["ForwardRuleType"] !== null) {
            $this->ForwardRuleType = $param["ForwardRuleType"];
        }

        if (array_key_exists("ForwardAddress",$param) and $param["ForwardAddress"] !== null) {
            $this->ForwardAddress = $param["ForwardAddress"];
        }

        if (array_key_exists("EndPointName",$param) and $param["EndPointName"] !== null) {
            $this->EndPointName = $param["EndPointName"];
        }

        if (array_key_exists("DeletedVpcSet",$param) and $param["DeletedVpcSet"] !== null) {
            $this->DeletedVpcSet = [];
            foreach ($param["DeletedVpcSet"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->DeletedVpcSet, $obj);
            }
        }
    }
}
