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
 * CreatePrivateZone request structure.
 *
 * @method string getDomain() Obtain Domain name, which must be in the format of standard TLD
 * @method void setDomain(string $Domain) Set Domain name, which must be in the format of standard TLD
 * @method array getTagSet() Obtain Tags the private domain when it is created
 * @method void setTagSet(array $TagSet) Set Tags the private domain when it is created
 * @method array getVpcSet() Obtain Associates the private domain to a VPC when it is created
 * @method void setVpcSet(array $VpcSet) Set Associates the private domain to a VPC when it is created
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getDnsForwardStatus() Obtain Whether to enable subdomain recursive DNS. Valid values: `ENABLED` (default) and `DISABLED`.
 * @method void setDnsForwardStatus(string $DnsForwardStatus) Set Whether to enable subdomain recursive DNS. Valid values: `ENABLED` (default) and `DISABLED`.
 * @method array getVpcs() Obtain Associates the private domain to a VPC when it is created
 * @method void setVpcs(array $Vpcs) Set Associates the private domain to a VPC when it is created
 * @method array getAccountVpcSet() Obtain List of authorized accounts' VPCs to associate with the private domain
 * @method void setAccountVpcSet(array $AccountVpcSet) Set List of authorized accounts' VPCs to associate with the private domain
 * @method string getCnameSpeedupStatus() Obtain Whether to enable CNAME flattening. Valid values: `ENABLED` (default) and `DISABLED`.
 * @method void setCnameSpeedupStatus(string $CnameSpeedupStatus) Set Whether to enable CNAME flattening. Valid values: `ENABLED` (default) and `DISABLED`.
 */
class CreatePrivateZoneRequest extends AbstractModel
{
    /**
     * @var string Domain name, which must be in the format of standard TLD
     */
    public $Domain;

    /**
     * @var array Tags the private domain when it is created
     */
    public $TagSet;

    /**
     * @var array Associates the private domain to a VPC when it is created
     */
    public $VpcSet;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string Whether to enable subdomain recursive DNS. Valid values: `ENABLED` (default) and `DISABLED`.
     */
    public $DnsForwardStatus;

    /**
     * @var array Associates the private domain to a VPC when it is created
     * @deprecated
     */
    public $Vpcs;

    /**
     * @var array List of authorized accounts' VPCs to associate with the private domain
     */
    public $AccountVpcSet;

    /**
     * @var string Whether to enable CNAME flattening. Valid values: `ENABLED` (default) and `DISABLED`.
     */
    public $CnameSpeedupStatus;

    /**
     * @param string $Domain Domain name, which must be in the format of standard TLD
     * @param array $TagSet Tags the private domain when it is created
     * @param array $VpcSet Associates the private domain to a VPC when it is created
     * @param string $Remark Remarks
     * @param string $DnsForwardStatus Whether to enable subdomain recursive DNS. Valid values: `ENABLED` (default) and `DISABLED`.
     * @param array $Vpcs Associates the private domain to a VPC when it is created
     * @param array $AccountVpcSet List of authorized accounts' VPCs to associate with the private domain
     * @param string $CnameSpeedupStatus Whether to enable CNAME flattening. Valid values: `ENABLED` (default) and `DISABLED`.
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

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("VpcSet",$param) and $param["VpcSet"] !== null) {
            $this->VpcSet = [];
            foreach ($param["VpcSet"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcSet, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("DnsForwardStatus",$param) and $param["DnsForwardStatus"] !== null) {
            $this->DnsForwardStatus = $param["DnsForwardStatus"];
        }

        if (array_key_exists("Vpcs",$param) and $param["Vpcs"] !== null) {
            $this->Vpcs = [];
            foreach ($param["Vpcs"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->Vpcs, $obj);
            }
        }

        if (array_key_exists("AccountVpcSet",$param) and $param["AccountVpcSet"] !== null) {
            $this->AccountVpcSet = [];
            foreach ($param["AccountVpcSet"] as $key => $value){
                $obj = new AccountVpcInfo();
                $obj->deserialize($value);
                array_push($this->AccountVpcSet, $obj);
            }
        }

        if (array_key_exists("CnameSpeedupStatus",$param) and $param["CnameSpeedupStatus"] !== null) {
            $this->CnameSpeedupStatus = $param["CnameSpeedupStatus"];
        }
    }
}
