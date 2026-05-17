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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Four types of manager review status
 *
 * @method string getType() Obtain Review type, enumeration value: ov, ev
 * @method void setType(string $Type) Set Review type, enumeration value: ov, ev
 * @method string getStatus() Obtain Review status, enumeration value: pending, completed, invalid, submitted, expiring, expired.
 * @method void setStatus(string $Status) Set Review status, enumeration value: pending, completed, invalid, submitted, expiring, expired.
 * @method string getCreateTime() Obtain Creation time.
 * @method void setCreateTime(string $CreateTime) Set Creation time.
 * @method string getExpireTime() Obtain Expiration time
 * @method void setExpireTime(string $ExpireTime) Set Expiration time
 * @method array getManagerPreAuditDomains() Obtain Domain name list for manager prereview
 * @method void setManagerPreAuditDomains(array $ManagerPreAuditDomains) Set Domain name list for manager prereview
 */
class ManagerStatusInfo extends AbstractModel
{
    /**
     * @var string Review type, enumeration value: ov, ev
     */
    public $Type;

    /**
     * @var string Review status, enumeration value: pending, completed, invalid, submitted, expiring, expired.
     */
    public $Status;

    /**
     * @var string Creation time.
     */
    public $CreateTime;

    /**
     * @var string Expiration time
     */
    public $ExpireTime;

    /**
     * @var array Domain name list for manager prereview
     */
    public $ManagerPreAuditDomains;

    /**
     * @param string $Type Review type, enumeration value: ov, ev
     * @param string $Status Review status, enumeration value: pending, completed, invalid, submitted, expiring, expired.
     * @param string $CreateTime Creation time.
     * @param string $ExpireTime Expiration time
     * @param array $ManagerPreAuditDomains Domain name list for manager prereview
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("ManagerPreAuditDomains",$param) and $param["ManagerPreAuditDomains"] !== null) {
            $this->ManagerPreAuditDomains = [];
            foreach ($param["ManagerPreAuditDomains"] as $key => $value){
                $obj = new ManagerPreAuditDomain();
                $obj->deserialize($value);
                array_push($this->ManagerPreAuditDomains, $obj);
            }
        }
    }
}
