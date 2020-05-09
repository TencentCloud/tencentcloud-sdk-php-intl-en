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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDirectConnectTunnelAttribute request structure.
 *
 * @method string getDirectConnectTunnelId() Obtain Dedicated tunnel ID.
 * @method void setDirectConnectTunnelId(string $DirectConnectTunnelId) Set Dedicated tunnel ID.
 * @method string getDirectConnectTunnelName() Obtain Dedicated tunnel name.
 * @method void setDirectConnectTunnelName(string $DirectConnectTunnelName) Set Dedicated tunnel name.
 * @method BgpPeer getBgpPeer() Obtain User-side BGP, including Asn and AuthKey.
 * @method void setBgpPeer(BgpPeer $BgpPeer) Set User-side BGP, including Asn and AuthKey.
 * @method array getRouteFilterPrefixes() Obtain User-side IP range.
 * @method void setRouteFilterPrefixes(array $RouteFilterPrefixes) Set User-side IP range.
 * @method string getTencentAddress() Obtain Tencent-side IP address.
 * @method void setTencentAddress(string $TencentAddress) Set Tencent-side IP address.
 * @method string getCustomerAddress() Obtain User-side IP address.
 * @method void setCustomerAddress(string $CustomerAddress) Set User-side IP address.
 * @method integer getBandwidth() Obtain Bandwidth value of a dedicated tunnel in Mbps.
 * @method void setBandwidth(integer $Bandwidth) Set Bandwidth value of a dedicated tunnel in Mbps.
 * @method string getTencentBackupAddress() Obtain Tencent-side standby IP address
 * @method void setTencentBackupAddress(string $TencentBackupAddress) Set Tencent-side standby IP address
 */
class ModifyDirectConnectTunnelAttributeRequest extends AbstractModel
{
    /**
     * @var string Dedicated tunnel ID.
     */
    public $DirectConnectTunnelId;

    /**
     * @var string Dedicated tunnel name.
     */
    public $DirectConnectTunnelName;

    /**
     * @var BgpPeer User-side BGP, including Asn and AuthKey.
     */
    public $BgpPeer;

    /**
     * @var array User-side IP range.
     */
    public $RouteFilterPrefixes;

    /**
     * @var string Tencent-side IP address.
     */
    public $TencentAddress;

    /**
     * @var string User-side IP address.
     */
    public $CustomerAddress;

    /**
     * @var integer Bandwidth value of a dedicated tunnel in Mbps.
     */
    public $Bandwidth;

    /**
     * @var string Tencent-side standby IP address
     */
    public $TencentBackupAddress;

    /**
     * @param string $DirectConnectTunnelId Dedicated tunnel ID.
     * @param string $DirectConnectTunnelName Dedicated tunnel name.
     * @param BgpPeer $BgpPeer User-side BGP, including Asn and AuthKey.
     * @param array $RouteFilterPrefixes User-side IP range.
     * @param string $TencentAddress Tencent-side IP address.
     * @param string $CustomerAddress User-side IP address.
     * @param integer $Bandwidth Bandwidth value of a dedicated tunnel in Mbps.
     * @param string $TencentBackupAddress Tencent-side standby IP address
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
        if (array_key_exists("DirectConnectTunnelId",$param) and $param["DirectConnectTunnelId"] !== null) {
            $this->DirectConnectTunnelId = $param["DirectConnectTunnelId"];
        }

        if (array_key_exists("DirectConnectTunnelName",$param) and $param["DirectConnectTunnelName"] !== null) {
            $this->DirectConnectTunnelName = $param["DirectConnectTunnelName"];
        }

        if (array_key_exists("BgpPeer",$param) and $param["BgpPeer"] !== null) {
            $this->BgpPeer = new BgpPeer();
            $this->BgpPeer->deserialize($param["BgpPeer"]);
        }

        if (array_key_exists("RouteFilterPrefixes",$param) and $param["RouteFilterPrefixes"] !== null) {
            $this->RouteFilterPrefixes = [];
            foreach ($param["RouteFilterPrefixes"] as $key => $value){
                $obj = new RouteFilterPrefix();
                $obj->deserialize($value);
                array_push($this->RouteFilterPrefixes, $obj);
            }
        }

        if (array_key_exists("TencentAddress",$param) and $param["TencentAddress"] !== null) {
            $this->TencentAddress = $param["TencentAddress"];
        }

        if (array_key_exists("CustomerAddress",$param) and $param["CustomerAddress"] !== null) {
            $this->CustomerAddress = $param["CustomerAddress"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("TencentBackupAddress",$param) and $param["TencentBackupAddress"] !== null) {
            $this->TencentBackupAddress = $param["TencentBackupAddress"];
        }
    }
}
