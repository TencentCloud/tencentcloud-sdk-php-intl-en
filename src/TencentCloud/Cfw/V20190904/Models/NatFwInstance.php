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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NAT instance type
 *
 * @method string getNatinsId() Obtain NAT instance ID
 * @method void setNatinsId(string $NatinsId) Set NAT instance ID
 * @method string getNatinsName() Obtain NAT instance name
 * @method void setNatinsName(string $NatinsName) Set NAT instance name
 * @method string getRegion() Obtain Instance region
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setRegion(string $Region) Set Instance region
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getFwMode() Obtain 0: create new; 1: use existing
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setFwMode(integer $FwMode) Set 0: create new; 1: use existing
Note: This field may return `null`, indicating that no valid value was found.
 * @method integer getStatus() Obtain 0: normal; 1: creating
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setStatus(integer $Status) Set 0: normal; 1: creating
Note: This field may return `null`, indicating that no valid value was found.
 * @method string getNatIp() Obtain NAT public IP
Note: This field may return `null`, indicating that no valid value was found.
 * @method void setNatIp(string $NatIp) Set NAT public IP
Note: This field may return `null`, indicating that no valid value was found.
 */
class NatFwInstance extends AbstractModel
{
    /**
     * @var string NAT instance ID
     */
    public $NatinsId;

    /**
     * @var string NAT instance name
     */
    public $NatinsName;

    /**
     * @var string Instance region
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Region;

    /**
     * @var integer 0: create new; 1: use existing
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $FwMode;

    /**
     * @var integer 0: normal; 1: creating
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $Status;

    /**
     * @var string NAT public IP
Note: This field may return `null`, indicating that no valid value was found.
     */
    public $NatIp;

    /**
     * @param string $NatinsId NAT instance ID
     * @param string $NatinsName NAT instance name
     * @param string $Region Instance region
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $FwMode 0: create new; 1: use existing
Note: This field may return `null`, indicating that no valid value was found.
     * @param integer $Status 0: normal; 1: creating
Note: This field may return `null`, indicating that no valid value was found.
     * @param string $NatIp NAT public IP
Note: This field may return `null`, indicating that no valid value was found.
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
        if (array_key_exists("NatinsId",$param) and $param["NatinsId"] !== null) {
            $this->NatinsId = $param["NatinsId"];
        }

        if (array_key_exists("NatinsName",$param) and $param["NatinsName"] !== null) {
            $this->NatinsName = $param["NatinsName"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("FwMode",$param) and $param["FwMode"] !== null) {
            $this->FwMode = $param["FwMode"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NatIp",$param) and $param["NatIp"] !== null) {
            $this->NatIp = $param["NatIp"];
        }
    }
}
