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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP rules
 *
 * @method string getIp() Obtain Specifies the IP address.
 * @method void setIp(string $Ip) Set Specifies the IP address.
 * @method boolean getAllow() Obtain Whether the IP address is allowed. Default value: false, indicating that the IP address is denied.
 * @method void setAllow(boolean $Allow) Set Whether the IP address is allowed. Default value: false, indicating that the IP address is denied.
 * @method string getRemark() Obtain Remarks
 * @method void setRemark(string $Remark) Set Remarks
 */
class IpRule extends AbstractModel
{
    /**
     * @var string Specifies the IP address.
     */
    public $Ip;

    /**
     * @var boolean Whether the IP address is allowed. Default value: false, indicating that the IP address is denied.
     */
    public $Allow;

    /**
     * @var string Remarks
     */
    public $Remark;

    /**
     * @param string $Ip Specifies the IP address.
     * @param boolean $Allow Whether the IP address is allowed. Default value: false, indicating that the IP address is denied.
     * @param string $Remark Remarks
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Allow",$param) and $param["Allow"] !== null) {
            $this->Allow = $param["Allow"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
