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
 * ModifyPrivateZone request structure.
 *
 * @method string getZoneId() Obtain Private domain ID
 * @method void setZoneId(string $ZoneId) Set Private domain ID
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 * @method string getDnsForwardStatus() Obtain Whether to enable subdomain recursive DNS. Valid values: ENABLED, DISABLED
 * @method void setDnsForwardStatus(string $DnsForwardStatus) Set Whether to enable subdomain recursive DNS. Valid values: ENABLED, DISABLED
 * @method string getCnameSpeedupStatus() Obtain Whether to enable CNAME flattening. Valid values: `ENABLED` and `DISABLED`.
 * @method void setCnameSpeedupStatus(string $CnameSpeedupStatus) Set Whether to enable CNAME flattening. Valid values: `ENABLED` and `DISABLED`.
 */
class ModifyPrivateZoneRequest extends AbstractModel
{
    /**
     * @var string Private domain ID
     */
    public $ZoneId;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @var string Whether to enable subdomain recursive DNS. Valid values: ENABLED, DISABLED
     */
    public $DnsForwardStatus;

    /**
     * @var string Whether to enable CNAME flattening. Valid values: `ENABLED` and `DISABLED`.
     */
    public $CnameSpeedupStatus;

    /**
     * @param string $ZoneId Private domain ID
     * @param string $Remark Remarks
     * @param string $DnsForwardStatus Whether to enable subdomain recursive DNS. Valid values: ENABLED, DISABLED
     * @param string $CnameSpeedupStatus Whether to enable CNAME flattening. Valid values: `ENABLED` and `DISABLED`.
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("DnsForwardStatus",$param) and $param["DnsForwardStatus"] !== null) {
            $this->DnsForwardStatus = $param["DnsForwardStatus"];
        }

        if (array_key_exists("CnameSpeedupStatus",$param) and $param["CnameSpeedupStatus"] !== null) {
            $this->CnameSpeedupStatus = $param["CnameSpeedupStatus"];
        }
    }
}
