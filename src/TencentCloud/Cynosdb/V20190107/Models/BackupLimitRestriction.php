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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Specifies the backup download limit parameter.
 *
 * @method string getLimitType() Obtain Restriction type.
 * @method void setLimitType(string $LimitType) Set Restriction type.
 * @method string getVpcComparisonSymbol() Obtain This parameter only supports In, which indicates that the vpc specified by LimitVpc can be downloaded. the default is In.
 * @method void setVpcComparisonSymbol(string $VpcComparisonSymbol) Set This parameter only supports In, which indicates that the vpc specified by LimitVpc can be downloaded. the default is In.
 * @method string getIpComparisonSymbol() Obtain Specified ips can download; specified ips are not allowed to download.
 * @method void setIpComparisonSymbol(string $IpComparisonSymbol) Set Specified ips can download; specified ips are not allowed to download.
 * @method array getLimitVpcs() Obtain Specifies the vpc setting for download restrictions.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLimitVpcs(array $LimitVpcs) Set Specifies the vpc setting for download restrictions.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method array getLimitIps() Obtain Specifies the ip settings for limiting downloads.
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setLimitIps(array $LimitIps) Set Specifies the ip settings for limiting downloads.
Note: This field may return null, indicating that no valid values can be obtained.
 */
class BackupLimitRestriction extends AbstractModel
{
    /**
     * @var string Restriction type.
     */
    public $LimitType;

    /**
     * @var string This parameter only supports In, which indicates that the vpc specified by LimitVpc can be downloaded. the default is In.
     */
    public $VpcComparisonSymbol;

    /**
     * @var string Specified ips can download; specified ips are not allowed to download.
     */
    public $IpComparisonSymbol;

    /**
     * @var array Specifies the vpc setting for download restrictions.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LimitVpcs;

    /**
     * @var array Specifies the ip settings for limiting downloads.
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $LimitIps;

    /**
     * @param string $LimitType Restriction type.
     * @param string $VpcComparisonSymbol This parameter only supports In, which indicates that the vpc specified by LimitVpc can be downloaded. the default is In.
     * @param string $IpComparisonSymbol Specified ips can download; specified ips are not allowed to download.
     * @param array $LimitVpcs Specifies the vpc setting for download restrictions.
Note: This field may return null, indicating that no valid values can be obtained.
     * @param array $LimitIps Specifies the ip settings for limiting downloads.
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
