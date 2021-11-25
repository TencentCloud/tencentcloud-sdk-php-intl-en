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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBackupDownloadRestriction request structure.
 *
 * @method string getLimitType() Obtain Valid values: `NoLimit` (backups can be downloaded over both private and public networks with any IPs), `LimitOnlyIntranet` (backups can be downloaded over the private network with any private IPs), `Customize` (backups can be downloaded over specified VPCs with specified IPs). The `LimitVpc` and `LimitIp` parameters are valid only when this parameter is set to `Customize`.
 * @method void setLimitType(string $LimitType) Set Valid values: `NoLimit` (backups can be downloaded over both private and public networks with any IPs), `LimitOnlyIntranet` (backups can be downloaded over the private network with any private IPs), `Customize` (backups can be downloaded over specified VPCs with specified IPs). The `LimitVpc` and `LimitIp` parameters are valid only when this parameter is set to `Customize`.
 * @method string getVpcComparisonSymbol() Obtain Valid value: `In` (backups can only be downloaded over the VPCs specified in `LimitVpc`). Default value: `In`.
 * @method void setVpcComparisonSymbol(string $VpcComparisonSymbol) Set Valid value: `In` (backups can only be downloaded over the VPCs specified in `LimitVpc`). Default value: `In`.
 * @method string getIpComparisonSymbol() Obtain Valid values: `In` (backups can only be downloaded with the IPs specified in `LimitIp`), `NotIn` (backups cannot be downloaded with the IPs specified in `LimitIp`). Default value: `In`.
 * @method void setIpComparisonSymbol(string $IpComparisonSymbol) Set Valid values: `In` (backups can only be downloaded with the IPs specified in `LimitIp`), `NotIn` (backups cannot be downloaded with the IPs specified in `LimitIp`). Default value: `In`.
 * @method array getLimitVpc() Obtain VPCs used to restrict backup download.
 * @method void setLimitVpc(array $LimitVpc) Set VPCs used to restrict backup download.
 * @method array getLimitIp() Obtain IPs used to restrict backup download.
 * @method void setLimitIp(array $LimitIp) Set IPs used to restrict backup download.
 */
class ModifyBackupDownloadRestrictionRequest extends AbstractModel
{
    /**
     * @var string Valid values: `NoLimit` (backups can be downloaded over both private and public networks with any IPs), `LimitOnlyIntranet` (backups can be downloaded over the private network with any private IPs), `Customize` (backups can be downloaded over specified VPCs with specified IPs). The `LimitVpc` and `LimitIp` parameters are valid only when this parameter is set to `Customize`.
     */
    public $LimitType;

    /**
     * @var string Valid value: `In` (backups can only be downloaded over the VPCs specified in `LimitVpc`). Default value: `In`.
     */
    public $VpcComparisonSymbol;

    /**
     * @var string Valid values: `In` (backups can only be downloaded with the IPs specified in `LimitIp`), `NotIn` (backups cannot be downloaded with the IPs specified in `LimitIp`). Default value: `In`.
     */
    public $IpComparisonSymbol;

    /**
     * @var array VPCs used to restrict backup download.
     */
    public $LimitVpc;

    /**
     * @var array IPs used to restrict backup download.
     */
    public $LimitIp;

    /**
     * @param string $LimitType Valid values: `NoLimit` (backups can be downloaded over both private and public networks with any IPs), `LimitOnlyIntranet` (backups can be downloaded over the private network with any private IPs), `Customize` (backups can be downloaded over specified VPCs with specified IPs). The `LimitVpc` and `LimitIp` parameters are valid only when this parameter is set to `Customize`.
     * @param string $VpcComparisonSymbol Valid value: `In` (backups can only be downloaded over the VPCs specified in `LimitVpc`). Default value: `In`.
     * @param string $IpComparisonSymbol Valid values: `In` (backups can only be downloaded with the IPs specified in `LimitIp`), `NotIn` (backups cannot be downloaded with the IPs specified in `LimitIp`). Default value: `In`.
     * @param array $LimitVpc VPCs used to restrict backup download.
     * @param array $LimitIp IPs used to restrict backup download.
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
        if (array_key_exists("LimitType",$param) and $param["LimitType"] !== null) {
            $this->LimitType = $param["LimitType"];
        }

        if (array_key_exists("VpcComparisonSymbol",$param) and $param["VpcComparisonSymbol"] !== null) {
            $this->VpcComparisonSymbol = $param["VpcComparisonSymbol"];
        }

        if (array_key_exists("IpComparisonSymbol",$param) and $param["IpComparisonSymbol"] !== null) {
            $this->IpComparisonSymbol = $param["IpComparisonSymbol"];
        }

        if (array_key_exists("LimitVpc",$param) and $param["LimitVpc"] !== null) {
            $this->LimitVpc = [];
            foreach ($param["LimitVpc"] as $key => $value){
                $obj = new BackupLimitVpcItem();
                $obj->deserialize($value);
                array_push($this->LimitVpc, $obj);
            }
        }

        if (array_key_exists("LimitIp",$param) and $param["LimitIp"] !== null) {
            $this->LimitIp = $param["LimitIp"];
        }
    }
}
