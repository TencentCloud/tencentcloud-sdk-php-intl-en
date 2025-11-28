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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Public Network Access Security Rules
 *
 * @method string getIpRule() Obtain IP Subnet Information
 * @method void setIpRule(string $IpRule) Set IP Subnet Information
 * @method boolean getAllow() Obtain Allow or Deny
 * @method void setAllow(boolean $Allow) Set Allow or Deny
 * @method string getRemark() Obtain Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 * @method void setRemark(string $Remark) Set Remarks
Note: This field may return null, indicating that no valid values can be obtained.
 */
class PublicAccessRule extends AbstractModel
{
    /**
     * @var string IP Subnet Information
     */
    public $IpRule;

    /**
     * @var boolean Allow or Deny
     */
    public $Allow;

    /**
     * @var string Remarks
Note: This field may return null, indicating that no valid values can be obtained.
     */
    public $Remark;

    /**
     * @param string $IpRule IP Subnet Information
     * @param boolean $Allow Allow or Deny
     * @param string $Remark Remarks
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
        if (array_key_exists("IpRule",$param) and $param["IpRule"] !== null) {
            $this->IpRule = $param["IpRule"];
        }

        if (array_key_exists("Allow",$param) and $param["Allow"] !== null) {
            $this->Allow = $param["Allow"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
