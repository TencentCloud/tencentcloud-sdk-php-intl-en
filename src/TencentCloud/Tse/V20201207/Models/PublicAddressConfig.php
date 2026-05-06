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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Public IP address info
 *
 * @method string getVip() Obtain Public ip address
 * @method void setVip(string $Vip) Set Public ip address
 * @method integer getInternetMaxBandwidthOut() Obtain Maximum public network bandwidth
 * @method void setInternetMaxBandwidthOut(integer $InternetMaxBandwidthOut) Set Maximum public network bandwidth
 * @method string getGroupId() Obtain public network associated group id
 * @method void setGroupId(string $GroupId) Set public network associated group id
 * @method string getGroupName() Obtain Public network associated group name
 * @method void setGroupName(string $GroupName) Set Public network associated group name
 * @method string getNetworkId() Obtain Public network CLB id
 * @method void setNetworkId(string $NetworkId) Set Public network CLB id
 * @method string getDescription() Obtain Description of public network CLB
 * @method void setDescription(string $Description) Set Description of public network CLB
 */
class PublicAddressConfig extends AbstractModel
{
    /**
     * @var string Public ip address
     */
    public $Vip;

    /**
     * @var integer Maximum public network bandwidth
     */
    public $InternetMaxBandwidthOut;

    /**
     * @var string public network associated group id
     */
    public $GroupId;

    /**
     * @var string Public network associated group name
     */
    public $GroupName;

    /**
     * @var string Public network CLB id
     */
    public $NetworkId;

    /**
     * @var string Description of public network CLB
     */
    public $Description;

    /**
     * @param string $Vip Public ip address
     * @param integer $InternetMaxBandwidthOut Maximum public network bandwidth
     * @param string $GroupId public network associated group id
     * @param string $GroupName Public network associated group name
     * @param string $NetworkId Public network CLB id
     * @param string $Description Description of public network CLB
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
        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("InternetMaxBandwidthOut",$param) and $param["InternetMaxBandwidthOut"] !== null) {
            $this->InternetMaxBandwidthOut = $param["InternetMaxBandwidthOut"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("NetworkId",$param) and $param["NetworkId"] !== null) {
            $this->NetworkId = $param["NetworkId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
