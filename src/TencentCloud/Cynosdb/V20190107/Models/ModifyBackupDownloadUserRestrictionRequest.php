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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBackupDownloadUserRestriction request structure.
 *
 * @method string getLimitType() Obtain Download limit type. NoLimit: unlimited. LimitOnlyIntranet: restricted to private network. Customize: custom.
 * @method void setLimitType(string $LimitType) Set Download limit type. NoLimit: unlimited. LimitOnlyIntranet: restricted to private network. Customize: custom.
 * @method string getVpcComparisonSymbol() Obtain This parameter only supports In, which means the vpc specified by LimitVpc can be downloaded. The default is In.
 * @method void setVpcComparisonSymbol(string $VpcComparisonSymbol) Set This parameter only supports In, which means the vpc specified by LimitVpc can be downloaded. The default is In.
 * @method string getIpComparisonSymbol() Obtain In: download allowed for the specified ip; NotIn: download not allowed for the specified ip
 * @method void setIpComparisonSymbol(string $IpComparisonSymbol) Set In: download allowed for the specified ip; NotIn: download not allowed for the specified ip
 * @method array getLimitVpcs() Obtain vpc settings for download restriction
 * @method void setLimitVpcs(array $LimitVpcs) Set vpc settings for download restriction
 * @method array getLimitIps() Obtain ip settings for download restrictions
 * @method void setLimitIps(array $LimitIps) Set ip settings for download restrictions
 */
class ModifyBackupDownloadUserRestrictionRequest extends AbstractModel
{
    /**
     * @var string Download limit type. NoLimit: unlimited. LimitOnlyIntranet: restricted to private network. Customize: custom.
     */
    public $LimitType;

    /**
     * @var string This parameter only supports In, which means the vpc specified by LimitVpc can be downloaded. The default is In.
     */
    public $VpcComparisonSymbol;

    /**
     * @var string In: download allowed for the specified ip; NotIn: download not allowed for the specified ip
     */
    public $IpComparisonSymbol;

    /**
     * @var array vpc settings for download restriction
     */
    public $LimitVpcs;

    /**
     * @var array ip settings for download restrictions
     */
    public $LimitIps;

    /**
     * @param string $LimitType Download limit type. NoLimit: unlimited. LimitOnlyIntranet: restricted to private network. Customize: custom.
     * @param string $VpcComparisonSymbol This parameter only supports In, which means the vpc specified by LimitVpc can be downloaded. The default is In.
     * @param string $IpComparisonSymbol In: download allowed for the specified ip; NotIn: download not allowed for the specified ip
     * @param array $LimitVpcs vpc settings for download restriction
     * @param array $LimitIps ip settings for download restrictions
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

        if (array_key_exists("LimitVpcs",$param) and $param["LimitVpcs"] !== null) {
            $this->LimitVpcs = [];
            foreach ($param["LimitVpcs"] as $key => $value){
                $obj = new BackupLimitVpcItem();
                $obj->deserialize($value);
                array_push($this->LimitVpcs, $obj);
            }
        }

        if (array_key_exists("LimitIps",$param) and $param["LimitIps"] !== null) {
            $this->LimitIps = $param["LimitIps"];
        }
    }
}
