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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateProxy request structure.
 *
 * @method integer getProjectId() Obtain Project ID of connection.
 * @method void setProjectId(integer $ProjectId) Set Project ID of connection.
 * @method string getProxyName() Obtain Name of the connection
 * @method void setProxyName(string $ProxyName) Set Name of the connection
 * @method string getAccessRegion() Obtain Access region.
 * @method void setAccessRegion(string $AccessRegion) Set Access region.
 * @method integer getBandwidth() Obtain Connection bandwidth cap. Unit: Mbps.
 * @method void setBandwidth(integer $Bandwidth) Set Connection bandwidth cap. Unit: Mbps.
 * @method integer getConcurrent() Obtain Connection concurrence cap, which indicates the maximum number of simultaneous online connections. Unit: 10,000 connections.
 * @method void setConcurrent(integer $Concurrent) Set Connection concurrence cap, which indicates the maximum number of simultaneous online connections. Unit: 10,000 connections.
 * @method string getRealServerRegion() Obtain Origin server region. If GroupId exists, the origin server region is the one of connection group, and this field is not required. If GroupId does not exist, this field is reuqired.
 * @method void setRealServerRegion(string $RealServerRegion) Set Origin server region. If GroupId exists, the origin server region is the one of connection group, and this field is not required. If GroupId does not exist, this field is reuqired.
 * @method string getClientToken() Obtain A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idem-potency of the request cannot be guaranteed.
For more information, please see How to Ensure Idempotence.
 * @method void setClientToken(string $ClientToken) Set A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idem-potency of the request cannot be guaranteed.
For more information, please see How to Ensure Idempotence.
 * @method string getGroupId() Obtain Connection group ID. This parameter is required when the connection is created in the connection group. Otherwise, this field is ignored.
 * @method void setGroupId(string $GroupId) Set Connection group ID. This parameter is required when the connection is created in the connection group. Otherwise, this field is ignored.
 * @method array getTagSet() Obtain List of tags to be added for connection.
 * @method void setTagSet(array $TagSet) Set List of tags to be added for connection.
 * @method string getClonedProxyId() Obtain ID of the replicated connection. Only a running connection can be replicated.
The connection is to be replicated if this parameter is set.
 * @method void setClonedProxyId(string $ClonedProxyId) Set ID of the replicated connection. Only a running connection can be replicated.
The connection is to be replicated if this parameter is set.
 * @method integer getBillingType() Obtain Billing mode (0: bill-by-bandwidth, 1: bill-by-traffic. Default value: bill-by-bandwidth)
 * @method void setBillingType(integer $BillingType) Set Billing mode (0: bill-by-bandwidth, 1: bill-by-traffic. Default value: bill-by-bandwidth)
 * @method string getIPAddressVersion() Obtain IP version. Valid values: `IPv4` (default), `IPv6`.
 * @method void setIPAddressVersion(string $IPAddressVersion) Set IP version. Valid values: `IPv4` (default), `IPv6`.
 * @method string getNetworkType() Obtain Network type. `normal`: general BGP; `cn2`: dedicated BGP; `triple`: Non-BGP (provided by the top 3 ISPs in the Chinese mainland).
 * @method void setNetworkType(string $NetworkType) Set Network type. `normal`: general BGP; `cn2`: dedicated BGP; `triple`: Non-BGP (provided by the top 3 ISPs in the Chinese mainland).
 * @method string getPackageType() Obtain Package type of connection groups. Valid values: `Thunder` (general), `Accelerator` (specific for games), and `CrossBorder` (cross-MLC-border connection).
 * @method void setPackageType(string $PackageType) Set Package type of connection groups. Valid values: `Thunder` (general), `Accelerator` (specific for games), and `CrossBorder` (cross-MLC-border connection).
 * @method integer getHttp3Supported() Obtain (Disused) HTTP3.0 is supported by default when `IPAddressVersion` is `IPv4`.
 * @method void setHttp3Supported(integer $Http3Supported) Set (Disused) HTTP3.0 is supported by default when `IPAddressVersion` is `IPv4`.
 */
class CreateProxyRequest extends AbstractModel
{
    /**
     * @var integer Project ID of connection.
     */
    public $ProjectId;

    /**
     * @var string Name of the connection
     */
    public $ProxyName;

    /**
     * @var string Access region.
     */
    public $AccessRegion;

    /**
     * @var integer Connection bandwidth cap. Unit: Mbps.
     */
    public $Bandwidth;

    /**
     * @var integer Connection concurrence cap, which indicates the maximum number of simultaneous online connections. Unit: 10,000 connections.
     */
    public $Concurrent;

    /**
     * @var string Origin server region. If GroupId exists, the origin server region is the one of connection group, and this field is not required. If GroupId does not exist, this field is reuqired.
     */
    public $RealServerRegion;

    /**
     * @var string A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idem-potency of the request cannot be guaranteed.
For more information, please see How to Ensure Idempotence.
     */
    public $ClientToken;

    /**
     * @var string Connection group ID. This parameter is required when the connection is created in the connection group. Otherwise, this field is ignored.
     */
    public $GroupId;

    /**
     * @var array List of tags to be added for connection.
     */
    public $TagSet;

    /**
     * @var string ID of the replicated connection. Only a running connection can be replicated.
The connection is to be replicated if this parameter is set.
     */
    public $ClonedProxyId;

    /**
     * @var integer Billing mode (0: bill-by-bandwidth, 1: bill-by-traffic. Default value: bill-by-bandwidth)
     */
    public $BillingType;

    /**
     * @var string IP version. Valid values: `IPv4` (default), `IPv6`.
     */
    public $IPAddressVersion;

    /**
     * @var string Network type. `normal`: general BGP; `cn2`: dedicated BGP; `triple`: Non-BGP (provided by the top 3 ISPs in the Chinese mainland).
     */
    public $NetworkType;

    /**
     * @var string Package type of connection groups. Valid values: `Thunder` (general), `Accelerator` (specific for games), and `CrossBorder` (cross-MLC-border connection).
     */
    public $PackageType;

    /**
     * @var integer (Disused) HTTP3.0 is supported by default when `IPAddressVersion` is `IPv4`.
     */
    public $Http3Supported;

    /**
     * @param integer $ProjectId Project ID of connection.
     * @param string $ProxyName Name of the connection
     * @param string $AccessRegion Access region.
     * @param integer $Bandwidth Connection bandwidth cap. Unit: Mbps.
     * @param integer $Concurrent Connection concurrence cap, which indicates the maximum number of simultaneous online connections. Unit: 10,000 connections.
     * @param string $RealServerRegion Origin server region. If GroupId exists, the origin server region is the one of connection group, and this field is not required. If GroupId does not exist, this field is reuqired.
     * @param string $ClientToken A unique string supplied by the client to ensure that the request is idempotent. Its maximum length is 64 ASCII characters. If this parameter is not specified, the idem-potency of the request cannot be guaranteed.
For more information, please see How to Ensure Idempotence.
     * @param string $GroupId Connection group ID. This parameter is required when the connection is created in the connection group. Otherwise, this field is ignored.
     * @param array $TagSet List of tags to be added for connection.
     * @param string $ClonedProxyId ID of the replicated connection. Only a running connection can be replicated.
The connection is to be replicated if this parameter is set.
     * @param integer $BillingType Billing mode (0: bill-by-bandwidth, 1: bill-by-traffic. Default value: bill-by-bandwidth)
     * @param string $IPAddressVersion IP version. Valid values: `IPv4` (default), `IPv6`.
     * @param string $NetworkType Network type. `normal`: general BGP; `cn2`: dedicated BGP; `triple`: Non-BGP (provided by the top 3 ISPs in the Chinese mainland).
     * @param string $PackageType Package type of connection groups. Valid values: `Thunder` (general), `Accelerator` (specific for games), and `CrossBorder` (cross-MLC-border connection).
     * @param integer $Http3Supported (Disused) HTTP3.0 is supported by default when `IPAddressVersion` is `IPv4`.
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProxyName",$param) and $param["ProxyName"] !== null) {
            $this->ProxyName = $param["ProxyName"];
        }

        if (array_key_exists("AccessRegion",$param) and $param["AccessRegion"] !== null) {
            $this->AccessRegion = $param["AccessRegion"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Concurrent",$param) and $param["Concurrent"] !== null) {
            $this->Concurrent = $param["Concurrent"];
        }

        if (array_key_exists("RealServerRegion",$param) and $param["RealServerRegion"] !== null) {
            $this->RealServerRegion = $param["RealServerRegion"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new TagPair();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("ClonedProxyId",$param) and $param["ClonedProxyId"] !== null) {
            $this->ClonedProxyId = $param["ClonedProxyId"];
        }

        if (array_key_exists("BillingType",$param) and $param["BillingType"] !== null) {
            $this->BillingType = $param["BillingType"];
        }

        if (array_key_exists("IPAddressVersion",$param) and $param["IPAddressVersion"] !== null) {
            $this->IPAddressVersion = $param["IPAddressVersion"];
        }

        if (array_key_exists("NetworkType",$param) and $param["NetworkType"] !== null) {
            $this->NetworkType = $param["NetworkType"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("Http3Supported",$param) and $param["Http3Supported"] !== null) {
            $this->Http3Supported = $param["Http3Supported"];
        }
    }
}
