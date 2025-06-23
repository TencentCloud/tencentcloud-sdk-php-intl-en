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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCertificatesExpiringNotificationSwitch request structure.
 *
 * @method array getCertificateIds() Obtain Certificate ID list. maximum of 50.
 * @method void setCertificateIds(array $CertificateIds) Set Certificate ID list. maximum of 50.
 * @method integer getSwitchStatus() Obtain 0: do not ignore notifications. 1: ignore notifications.
 * @method void setSwitchStatus(integer $SwitchStatus) Set 0: do not ignore notifications. 1: ignore notifications.
 */
class ModifyCertificatesExpiringNotificationSwitchRequest extends AbstractModel
{
    /**
     * @var array Certificate ID list. maximum of 50.
     */
    public $CertificateIds;

    /**
     * @var integer 0: do not ignore notifications. 1: ignore notifications.
     */
    public $SwitchStatus;

    /**
     * @param array $CertificateIds Certificate ID list. maximum of 50.
     * @param integer $SwitchStatus 0: do not ignore notifications. 1: ignore notifications.
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
        if (array_key_exists("CertificateIds",$param) and $param["CertificateIds"] !== null) {
            $this->CertificateIds = $param["CertificateIds"];
        }

        if (array_key_exists("SwitchStatus",$param) and $param["SwitchStatus"] !== null) {
            $this->SwitchStatus = $param["SwitchStatus"];
        }
    }
}
