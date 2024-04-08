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
 * Private domain information
 *
 * @method string getZoneId() Obtain Private domain ID: zone-xxxxxxxx
 * @method void setZoneId(string $ZoneId) Set Private domain ID: zone-xxxxxxxx
 * @method integer getOwnerUin() Obtain Domain name owner UIN
 * @method void setOwnerUin(integer $OwnerUin) Set Domain name owner UIN
 * @method string getDomain() Obtain Private domain
 * @method void setDomain(string $Domain) Set Private domain
 * @method string getCreatedOn() Obtain Creation time
 * @method void setCreatedOn(string $CreatedOn) Set Creation time
 * @method string getUpdatedOn() Obtain Modification time
 * @method void setUpdatedOn(string $UpdatedOn) Set Modification time
 * @method integer getRecordCount() Obtain Number of results
 * @method void setRecordCount(integer $RecordCount) Set Number of results
 * @method string getRemark() Obtain Remarks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remarks
Note: this field may return null, indicating that no valid values can be obtained.
 * @method array getVpcSet() Obtain List of bound VPCs
 * @method void setVpcSet(array $VpcSet) Set List of bound VPCs
 * @method string getStatus() Obtain Private domain status. Valid values: ENABLED (DNS enabled); SUSPEND (DNS paused); FROZEN (locked)
 * @method void setStatus(string $Status) Set Private domain status. Valid values: ENABLED (DNS enabled); SUSPEND (DNS paused); FROZEN (locked)
 * @method string getDnsForwardStatus() Obtain Subdomain recursive DNS status. Valid values: ENABLED, DISABLED
 * @method void setDnsForwardStatus(string $DnsForwardStatus) Set Subdomain recursive DNS status. Valid values: ENABLED, DISABLED
 * @method array getTags() Obtain Set of tag key-value pairs
 * @method void setTags(array $Tags) Set Set of tag key-value pairs
 * @method array getAccountVpcSet() Obtain List of authorized accounts' VPCs associated with the private domain
Note: this field may return `null`, indicating that no valid values can be obtained.
 * @method void setAccountVpcSet(array $AccountVpcSet) Set List of authorized accounts' VPCs associated with the private domain
Note: this field may return `null`, indicating that no valid values can be obtained.
 */
class PrivateZone extends AbstractModel
{
    /**
     * @var string Private domain ID: zone-xxxxxxxx
     */
    public $ZoneId;

    /**
     * @var integer Domain name owner UIN
     */
    public $OwnerUin;

    /**
     * @var string Private domain
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
     * @var integer Number of results
     */
    public $RecordCount;

    /**
     * @var string Remarks
Note: this field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @var array List of bound VPCs
     */
    public $VpcSet;

    /**
     * @var string Private domain status. Valid values: ENABLED (DNS enabled); SUSPEND (DNS paused); FROZEN (locked)
     */
    public $Status;

    /**
     * @var string Subdomain recursive DNS status. Valid values: ENABLED, DISABLED
     */
    public $DnsForwardStatus;

    /**
     * @var array Set of tag key-value pairs
     */
    public $Tags;

    /**
     * @var array List of authorized accounts' VPCs associated with the private domain
Note: this field may return `null`, indicating that no valid values can be obtained.
     */
    public $AccountVpcSet;

    /**
     * @param string $ZoneId Private domain ID: zone-xxxxxxxx
     * @param integer $OwnerUin Domain name owner UIN
     * @param string $Domain Private domain
     * @param string $CreatedOn Creation time
     * @param string $UpdatedOn Modification time
     * @param integer $RecordCount Number of results
     * @param string $Remark Remarks
Note: this field may return null, indicating that no valid values can be obtained.
     * @param array $VpcSet List of bound VPCs
     * @param string $Status Private domain status. Valid values: ENABLED (DNS enabled); SUSPEND (DNS paused); FROZEN (locked)
     * @param string $DnsForwardStatus Subdomain recursive DNS status. Valid values: ENABLED, DISABLED
     * @param array $Tags Set of tag key-value pairs
     * @param array $AccountVpcSet List of authorized accounts' VPCs associated with the private domain
Note: this field may return `null`, indicating that no valid values can be obtained.
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
    }
}
