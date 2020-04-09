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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Versioning - protocol details

 *
 * @method string getSaleStatus() Obtain Sale status. Valid values: sale_out (sold out), saling (purchasable), no_saling (non-purchasable)
 * @method void setSaleStatus(string $SaleStatus) Set Sale status. Valid values: sale_out (sold out), saling (purchasable), no_saling (non-purchasable)
 * @method string getProtocol() Obtain Protocol type. Valid values: NFS, CIFS
 * @method void setProtocol(string $Protocol) Set Protocol type. Valid values: NFS, CIFS
 */
class AvailableProtoStatus extends AbstractModel
{
    /**
     * @var string Sale status. Valid values: sale_out (sold out), saling (purchasable), no_saling (non-purchasable)
     */
    public $SaleStatus;

    /**
     * @var string Protocol type. Valid values: NFS, CIFS
     */
    public $Protocol;

    /**
     * @param string $SaleStatus Sale status. Valid values: sale_out (sold out), saling (purchasable), no_saling (non-purchasable)
     * @param string $Protocol Protocol type. Valid values: NFS, CIFS
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
        if (array_key_exists("SaleStatus",$param) and $param["SaleStatus"] !== null) {
            $this->SaleStatus = $param["SaleStatus"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }
    }
}
